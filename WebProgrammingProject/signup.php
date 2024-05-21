<?php
?>
<html>
    <head>

    </head>
    <body>

        <div style=
        "display: flex;
        justify-content: center;
        align-items: center;">
        <form method="post" action="./database/memberinfoadd.php">
        <p>Enter username:
            <input type="text" name="user" />
        </p>
        <p>Enter password:
            <input type="password" name="pass" />
        </p>
        <p>Re-password
            <input type="password" name="repass" />           
        </p>
        
        <input type="submit" value="submit"/>
        </form>
        </div>
    </body>
</html>