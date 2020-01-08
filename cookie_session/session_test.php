<?php
    session_start();
    ?>

<!DOCType html>
<html>
    <head>
    </head>
    <body>
        <?php
        $username = 'Akhaphon';
        $_SESSION['login_user'] = $username;
        echo $_SESSION['login_user'];?>

    </body>
</html>