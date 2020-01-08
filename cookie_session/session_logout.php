<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "name";print_r($_SESSION);
    ?><br>
    <form action="session_logouted.php" method="post">
        Are you sure for logout?
        <input type="submit" value="Logout">
    </form>
    <?php
    session_unset();
    session_destroy();
    ?>
</body>

</html>