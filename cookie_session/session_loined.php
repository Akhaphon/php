<?php session_start();?>
<!DOCTYPE html>
<html>
    <body>
        hello <?php echo $_POST["username"]; ?><br>
        session is start.<br>
        and logined.<br>
        <a href="session_login.php">Go back</a><br>
        <a href="session_logout.php">next page</a>
    </body>
</html>