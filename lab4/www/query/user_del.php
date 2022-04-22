<?php
require_once('conDB.php');

$name = $_POST['name'];
$sname = $_POST['sname'];
$age = $_POST['age'];
$sex = $_POST['sex'];

$sql = "DELETE from tb_user where `name` = '$name' ";

try {
    $mysqli->query($sql);
} catch (Exception $e) {
    echo $e->getMessage();
}
