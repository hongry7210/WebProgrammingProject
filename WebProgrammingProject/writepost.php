<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<html>
    <head>
        
    </head>
    <body>
        <div style="justify-content: center;">
            <form method="post" action="communitypostadd.php"
            style=
            "text-align : center;
            border:1px solid gray;
            width: 400px;
            height: 200px">
                <p>Enter Title
                <input type="text" name="posttitle" />
                </p>
                <p>Enter contents
                <input type="textarea" name="postcontent" />
                </p>
                <p>Select game:
                <select name="gamename">
                    <option value="League Of Legend">League Of Legend</option>
                    <option value="FC Online">FC Online</option>
                    <option value="Maplestory">Maplestory</option>
                </select>
                </p>
                
            </form>
        </div>
    </body>
</html> 