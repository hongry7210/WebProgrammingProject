<?php
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
//make sure you're using the correct database
mysqli_select_db($db, 'gamekind') or die(mysqli_error($db));
$query = 'INSERT INTO game
(gameid, gamename)
VALUES
(1, "Bruce Almighty"),
(2, "Office Space"),
(3, "Grand Canyon")';
echo 'asdfasdf';
mysqli_query($db, $query) or die(mysqli_error($db));
?>