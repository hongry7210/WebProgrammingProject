<?php
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
$query = 'CREATE DATABASE IF NOT EXISTS memberinfodb';

mysqli_query($db, $query) or die(mysqli_error($db)); //db에 연결

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db)); //memberinfodb 데이터베이스를 선택

$query = 'CREATE TABLE memberinfo (
    membernum INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    memberid VARCHAR(255) NOT NULL,
    memberpassword VARCHAR(255) NOT NULL,
    PRIMARY KEY (membernum)
)
ENGINE=MyISAM';

mysqli_query($db, $query) or die(mysqli_error($db));

?>