<?php
include "conn.inc.php";
//include "config.inc.php";

$sql="select * from message where getter=? and sender=? and isGet=0";
$stmt=  $pdo->prepare($sql);
$stmt->execute(array($_POST['getter'],$_POST['sender']));
//$stmt->execute(array('jing','julien',0));

//$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
//$res=$stmt->fetch(PDO::FETCH_ASSOC);
/*

/*$row=$stmt->fetchall(PDO::FETCH_ASSOC);
var_dump($row);*/
$res= array();
while($row=$stmt->fetch(PDO::FETCH_NUM)){

    $res[] = $row;
    $sql1="update message set isGet=? WHERE id=?";
    //echo $sql1;
    $stmt1=  $pdo->prepare($sql1);
    $stmt1->execute(array(1,$row[0]));

    //echo $row[0];


}
///var_dump($res) ;


    echo  json_encode($res);






