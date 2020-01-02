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

    // // prepare and bind
    // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?,?,?)");
    // $stmt-> bind_param("sss", $firstname, $lastname, $email);

    var_dump($_post);
    
?>