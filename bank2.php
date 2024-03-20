<?php
$con=mysqli_connect("localhost","root","","Mobikart");
error_reporting(0);
   session_start();

   $total=$_GET['total_price'];
   $card=$_GET['card'];
   $cssContent = file_get_contents("failed.php");
   
   

   $sql = "select balance from bank where card_number= '" . $_GET['card_number'] . "' and cvv='" . $_GET['cvv'] . "' and expyear='" . $_GET['expyear'] . "' and expmonth ='" . $_GET['expmonth'] . "'";

   $result=mysqli_query($con,$sql);
     
   $row = mysqli_fetch_array($result);

   if($row==null)
   {
	   echo $cssContent;
   }
   else{
         $cy = date("Y");
         $cm = date("m");
   }
      //echo $cy . " " . $cm;

      if($cy > $_GET['expyear'])
         die("Card is Expired");

      if($cy == $_GET['expyear'] && $cm > $_GET['expmonth'])
         die("Card is Expired");

      $balance = $row['balance'];
   
      if($balance>=$total)
      {

      
      

     		$query = "UPDATE  bank set balance = balance - '.$total.' WHERE card_number ='".$_GET['card_number']."'";

     		$result=mysqli_query($con,$query);

    		 
           $sql = "select name,number,email,address from users where id='" . $_SESSION['user_id'] . "'";
          // $sql = "select user.name,user.number,user.email,user.address cart.pid from cart where user_id='" . $_SESSION['user_id'] . "'";

           $result = mysqli_query($con,$sql);
 
           while(true)
           {
                $row = mysqli_fetch_array($result);
 
                if($row==null)
                   break;
                   $total_products=$_GET['total_products'];
 
                   $cd = date('Y-m-d');
 
                   $sql = "insert into orders(user_id,name,number,email,method,address,total_products,total_price,placed_on,delivery_status) 
                   values
                   ('" . $_SESSION['user_id'] . "','" . $row['name'] . "','" . $row['number'] . "','" . $row['email'] . "','" . $card . "','" . $row['address'] . "','" . $_GET['total_products'] . "','" . $_GET['total_price'] . "','" . $cd . "','pending')";
 
                   mysqli_query($con,$sql);
                   $sql = "delete from cart where user_id = '" . $_SESSION['user_id'] . "'";

		              mysqli_query($con,$sql);

                  }
                  $cssContent1 = file_get_contents("success.php");
    echo $cssContent1;
    //$nextPage = 'orders.php';
//$delayInSeconds = 5; // Change this to the desired delay in seconds
//header("Refresh: $delayInSeconds; URL=$nextPage");
                     $sql = "delete from cart where user_id = '" . $_SESSION['user_id'] . "'";
        
                     mysqli_query($con,$sql);

		
     	}

   
   else
      {
         
       }
 
              
     //            echo"<br><br>Click to <a href='bank.php'>Pament Again</a><br><br>";
      // }
      
       


      
      



?>
