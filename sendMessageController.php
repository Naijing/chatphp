<?php

include "conn.inc.php";
session_start();

$sql="insert into message(sender, getter, content) values(?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->execute(array($_SESSION['username'], $_POST['getter'], $_POST['content']));


return $stmt->fetch();

