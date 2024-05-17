<?php
$db = mysqli_connect('localhost', 'root', '');
mysqli_select_db($db,'moviesite');


$query = 'SELECT
        *
    FROM
        movie, movietype
    WHERE
        movie.movie_type = movietype.movietype_id AND movietype.movietype_id = 5
    ORDER BY
        movie_name';

$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
    extract($row);
    echo $movie_name . ' ' . $movie_year . '<br/>' ;

}
?>