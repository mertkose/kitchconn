<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM kitchen_control where lamp='a'";
$sql1 = "SELECT * FROM kitchen_control where lamp='c'";
$check = mysqli_fetch_array(mysqli_query($conn,$sql));
$check1 = mysqli_fetch_array(mysqli_query($conn,$sql1));

if(isset($check)){
        $output=shell_exec('./testa.sh');
    echo "a";
}else if(isset($check1)){
	        $output=shell_exec('./testb.sh');
	echo "c";
 }else {
	$output=shell_exec('./testc.sh');
    echo "Nothing\n";
	
}

$conn->close();
?>
