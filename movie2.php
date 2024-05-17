<?php
session_start();
$_SESSION['user']=$_POST['user'];
$_SESSION['pass']=$_POST['pass'];
?>
<html>
    <head>

    </head>
    <body>
        <?php
            echo $_SESSION['user'];
        ?>
    </body>
</html>