<?php
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
//make sure you're using the correct database
mysqli_select_db($db, 'gamesite') or die(mysqli_error($db));
$query = 'INSERT INTO game
(movie_id, movie_name, movie_type, movie_year, movie_leadactor, movie_director)
VALUES
(1, "Bruce Almighty", 5, 2003, 1, 2),
(2, "Office Space", 5, 1999, 5, 6),
(3, "Grand Canyon", 2, 1991, 4, 3)';
echo 'asdfasdf';

?>