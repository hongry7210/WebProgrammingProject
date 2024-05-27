<?php
session_start();

$posttitle = $_POST['posttitle'];
$postcontent =  $_POST['postcontent'];
$gamename = $_POST['gamename'];
$id = $_POST['postmembername'];
echo $id;
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
$query = 'CREATE DATABASE IF NOT EXISTS memberinfodb';

mysqli_query($db, $query) or die(mysqli_error($db)); //db에 연결

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db)); //memberinfodb 데이터베이스를 선택

$query = 'INSERT INTO post 
    (posttitle, postcontent, gamename, postmembername)
    VALUES
    ("'.$posttitle.'","'.$postcontent.'","'.$gamename.'","'.$id.'")';

mysqli_query($db, $query) or die(mysqli_error($db));
echo $id;
echo 'upload successfully!';
echo '<a href="../communitysite.php?id=' . $id . '">';
echo 'Back to Community Page';
echo '</a>';
?>