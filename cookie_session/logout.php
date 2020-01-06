<?php
$cookie_name = $_POST["name"];;
$cookie_value = $_POST["password"];;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["password"]; ?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<form action = "login.php" method = "post">
    <input type = "submit" value = "logout">
    <?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
</form>

</body>
</html>