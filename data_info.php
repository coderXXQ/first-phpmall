<?php
include 'conn.php';
$pagesize=3;
$sql="SELECT * FROM goods";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$totalrecords=$stmt->rowCount();//总记录条数
$pagecount=ceil($totalrecords/$pagesize);//总页数
$page=isset($_GET['page'])?$_GET['page']:1;//当前页的页码
$a=($page-1)*$pagesize;
$b=$pagesize;
$sql="SELECT * FROM goods ORDER BY id DESC LIMIT $a,$b";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
$rows=json_encode($rows);
$data_info=array(
    'pagecount'=>$pagecount,
    'totalrecords'=>$totalrecords,
    'data'=>$rows
);
echo json_encode($data_info);
?>



