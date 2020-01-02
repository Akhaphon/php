<?php 
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";

// create connection
$conn = new mysqli($servername,$username, $password,$dbname);

// check connection
if($conn -> connect_error){
    die("connection failed: " . $conn->connet_error);
}

$sql = "INSERT INTO MyGuests(firstname, lastname, email)
values ('John', 'Doe', 'john@example.com')";

$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
values ('Mary', 'Moe', 'mary@example.com')";

$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
values ('Julie', 'Dooley', 'julie@example.com')";

if($conn ->query($sql) === TRUE){
    echo "New revord created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>