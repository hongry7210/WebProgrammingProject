<?php
session_start();

$id = $_POST['user'];
$pass =  $_POST['pass'];
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
$query = 'CREATE DATABASE IF NOT EXISTS memberinfodb';

mysqli_query($db, $query) or die(mysqli_error($db)); //db에 연결

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db)); //memberinfodb 데이터베이스를 선택

$query = 'INSERT INTO memberinfo 
    (memberid, memberpassword)
    VALUES
    ("'.$id.'","'.$pass.'")';

mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Sign up successfully!';
echo '<a href="../mainpage.php">';
echo 'Back to Login Page';
echo '</a>';
?>