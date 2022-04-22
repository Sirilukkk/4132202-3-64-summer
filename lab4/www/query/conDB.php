<?php

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "db_test";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SETNAMEutf8");

}catch(Exception $e){
    echo $e->getMessage();
}