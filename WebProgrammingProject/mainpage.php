<?php
    session_start();
?>

<html>
    <head>
        
    </head>
    <body>
        <div style="justify-content: center;align-items:center;">
            <form method="post" action="./community.php"
            style=
            "text-align : center;
            border:1px solid gray;
            width: 400px;
            height: 200px">
                <p>Enter your username:
                <input type="text" name="user" />
                </p>
                <p>Enter your password:
                <input type="password" name="pass" />
                </p>
                <p>
                <input type="submit" name="submit" value="login"/>
                </p>
                <?php
                    echo ' <a href="./signup.php"> ';
                    echo 'Don\'t have an account? Create an account';
                    echo '</a>';
                ?>
            </form>
        </div>
    </body>
</html> 