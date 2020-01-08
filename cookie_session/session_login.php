<?php
session_start();
?>
<!DOCType html>
<html>

<head>
</head>

<body>
    <?php
    // $username = 'Akhaphon';
    // $_SESSION['login_user'] = $username;
    // echo $_SESSION['login_user']; ?>
    <form action="session_loined.php" method="post">
        username: <input type="text" name="username"><br>
        password: <input type="text" name="passwd"><br>
        <input type="submit">
    </form>

</body>

</html>