<?php 
$servername = "localhost";
$username = "webadmin";
$password = "1234";

// create connection
$conn = new mysqli($servername,$username, $password);

// check connection
if($conn -> connect_error){
    die("connection failed: " . $conn->connet_error);
}
echo "connection successfully";

// create DB
$sql = "CREATE DATABASE myDB";
if($conn -> query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating databse:" . $conn->error;
}
$conn->close();

?>
