<html>
    <head>
        
    </head>
    <body>
        <?php
            $favmovies=array(
                'Life',
                'Stripes',
                'Office',
                'Holy Grail',
                'Matrix'
            );
        ?>
        <?php
            if(isset($_GET['favmovie'])) {
                echo $_SESSION['username'];
                $movierate = 5;
            }
            else{
                if(isset($_GET['sorted'])) {
                    sort($favmovies);
                }
                echo '<ol>';
                foreach ($favmovies as $movie) {
                    echo '<li>';
                    echo $movie;
                    echo '</li>';
                }
                echo '</ol>';
            }

        ?>
    </body>
</html>