<?php
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);
  

$light = $_POST['temp'];


$sql = "UPDATE kitchen_control SET gas='$light'"; 

 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>