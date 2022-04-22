<?php
require_one('conDB.php');

$name= $_POST['name'];
$sname=$_POST['sname'];
$age=$_POST['age'];
$sex=$_POST['sex'];

$sql = "INSERT INTO tb_user WHERE 'name'='$sname'";

try {
    $mysqli>query($sql);
} catch (Exception $e) {
    echo $e->getMessage();
}
