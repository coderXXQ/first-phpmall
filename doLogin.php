<?php
include "conn.php";
if(isset($_GET)){
    $act=$_GET['act'];
}
switch($act){
    case "login":
        if(!empty($_POST)) {
            $username = trim($_POST['username']);
            $password = md5(trim($_POST['password']));
            $sql = "SELECT * FROM administer WHERE username=? and password=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($username, $password));
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($res) {
                setcookie('username', $username, time() + 3600 * 24 * 7);
                if (isset($_REQUEST['authcode'])) {
                    session_start();
                    if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) {//strtolower转化为小写的函数
                        exit("<script>alert('登陆成功！');location.href='index_administer.php';</script>");
                    }else{
                        exit("<script>alert('验证码输入错误！');location.href='login.php';</script>");
                    }
                }
                exit();
            }else{
                exit("<script>alert('登陆失败！');location.href='login.php';</script>");
            }
        }
        break;
    case 'logout':
        setcookie('username','',time()-60);
        header('location:login.php');
        break;
}

