<?php
session_start();

$id = $_GET['id'];
echo $id;

$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db));

echo '<a href="./writepost.php?id=' . $id . '">write post</a><br/>';


$query = 'SELECT posttitle, postmemberid
FROM post
';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
    extract($row);
    echo $posttitle . ' - ' . $postmemberid . '<br/>';
    }
?>