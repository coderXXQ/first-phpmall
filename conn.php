<?php
try{
    $dsn="mysql:dbname=news;host=127.0.0.1";
    $name="root";
    $pwd="123456";
    $pdo=new PDO($dsn,$name,$pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}
