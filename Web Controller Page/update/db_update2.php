
<?php


$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$results = $conn->query("update kitchen_control set fridge='1' where user_id='admin'");
mysqli_close($conn);
?>

