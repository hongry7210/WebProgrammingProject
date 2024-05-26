<?php
session_start();

$id = $_GET['id'];
echo $id;

$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db));

echo '<a href="./writepost.php?$id=' . $id . '">write post</a>'
?>