<?php
$user = 'root';
$pass = '';
$db = 'mytestdb';

$db = new mysqli('localhost', $user, '') or die("unable to connect");
$query = 'CREATE DATABASE IF NOT EXISTS gamekind';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'gamekind') or die(mysqli_error($db));

$query1 = 'CREATE TABLE game(
    gameid INTEGER NOT NULL AUTO_INCREMENT,
    gamename VARCHAR(255) NOT NULL,
    PRIMARY KEY (gameid)
)
ENGINE=MyISAM';

mysqli_query($db, $query1) or die(mysqli_error($db));

//connect to MySQL 
/*$db1 = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');

//create the main database if it doesn't already exist
$query = 'CREATE DATABASE IF NOT EXISTS gamesite';
mysqli_query($db1, $query) or die(mysqli_error($db1));

//make sure our recently created database is the active one
mysqli_select_db($db1, 'gamesite') or die(mysqli_error($db1));

$query = 'CREATE TABLE game (
    movie_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    movie_name VARCHAR(255) NOT NULL,
    movie_type TINYINT NOT NULL DEFAULT 0,
    movie_year SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    movie_leadactor INTEGER UNSIGNED NOT NULL DEFAULT 0,
    movie_director INTEGER UNSIGNED NOT NULL DEFAULT 0,
    PRIMARY KEY (movie_id),
    KEY movie_type (movie_type, movie_year)
    )
    ENGINE=MyISAM';

echo 'asdf';*/

?>