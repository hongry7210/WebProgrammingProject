<?php
    session_start();
?>

<html>
    <head>
        <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        input[type="text"], input[type="password"] {
            padding: 8px;
            margin-top: 10px;
            border: 1px solid gray;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        </style>
    </head>
    <body>
        <div style="justify-content: center;align-items:center;">
            <form method="post" action="./community.php"
            style=
            "text-align : center;
            border:1px solid gray;
            width: 400px;
            height: 300px">
                <p>Username
                    <br/>
                <input type="text" name="user" />
                </p>
                <p>password
                    <br/>
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