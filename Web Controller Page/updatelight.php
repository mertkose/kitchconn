<?php
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE kitchen_control SET lamp='0' WHERE user_id='admin'" ;
$sql1 = "UPDATE kitchen_control SET  lamp='1'  WHERE user_id='admin'";

if ($conn->query($sql) === TRUE) {
    echo "lamp close";
}else if($conn->query($sql1) === TRUE){
 	echo "lamp open";
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
