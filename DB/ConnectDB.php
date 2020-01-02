<?php 
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";

// create connection
$conn = new mysqli($servername,$username, $password);

// check connection
if($conn -> connect_error){
    die("connection failed: " . $conn->connet_error);
}
echo "connection successfully";

?>