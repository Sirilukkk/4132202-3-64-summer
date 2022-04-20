<!-- conDB.php -->
<?php

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "db_test";
$port = 3307;

try{
    $mysql = new mysqli($host,$user,$pass,$db);
    $mysql->query("SET NAMES utf8");
    // $mysqli->set_charset("utf8")
} catch(Exception $e) {
    echo $e->getMessage();
}