<?php
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);
  

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_info WHERE 
        (user_id ='$user_id' AND password ='$password')"; 

 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
 echo "success";
 }else{
 echo "Invalid Username or Password";
 }
 
 
?>
						