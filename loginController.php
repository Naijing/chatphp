<?php

include "conn.inc.php";
session_start();

$sql="select * from user where username=? and password=?";
$stmt=$pdo->prepare($sql);
$stmt->execute(array($_POST['username'], md5($_POST['password'])));

if($stmt->rowCount()>0){
    $_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($_SESSION);
    header("Location:chatList.php");

}else{
    header("Location:login.html");
}

