<?php
include 'conn.php';
if(!empty($_POST)){
    extract($_POST);
    $sql="INSERT INTO user(username,password,tel)VALUES(?,?,?)";
    $stmt=$pdo->prepare($sql);
$res=$stmt->execute(array($username,md5($password),$tel));
if($res){
exit("<script>alert('注册成功！');location.href='login_view.php';</script>");
}else{
exit("<script>alert('注册失败！');location.href='register_view.php';</script>");
}
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
<header id="headNav">
	<div class="innerNav cf">
		<a class="fl" href="#"><img src="images/logo.jpg" alt=""></a>
		<div class="headFont fr">
			<span>您好，欢迎光临乐享购物！<a href="login.php">请登录</a></span>
			<a class="helpLink" href="#"><i class="runbun"></i>帮助中心<i class="turnb"></i></a>
		</div>
		<div class="outHelp">
			<ul class="helpYou" style="display: none;">
				<li><a href="#">包裹跟踪</a></li>
				<li><a href="#">常见问题</a></li>
				<li><a href="#">在线退换货</a></li>
				<li><a href="#">在线投诉</a></li>
				<li><a href="#">配送范围</a></li>
			</ul>
		</div>
	</div>
</header>
<section id="secTab">
	<form action="#" method="post" id="registerForm">
		<div class="innerTab">
			<h2>乐享用户注册</h2>
			<form method="post">
			<div class="tableItem">
				<input type="text" name="tel" required placeholder="手机号码" pattern="^1[3578]\d{9}$"/>
			</div>
			<div class="cf">
				<div class="tableItem onlyItem fl">
					<input class="yanzheng" type="text" name="yanzheng" placeholder="验证码" />
				</div>
				<a class="tableText fr" href="#">获取验证码</a>
			</div>
			<div class="tableItem">
				<input type="text" name="username" required placeholder="设置用户名"/>
			</div>
			<div class="tableItem">
				<input type="password" name="password" required placeholder="设置密码"/>
			</div>
			<div class="tableItem">
				<input type="password" name="rePassword" required placeholder="确认密码"/>
			</div>
			<p class="clickRegist">点击注册，表示您同意乐享购物 <a href="#">《服务协议》</a></p>
			<input type="submit" class="tableBtn" value="同意协议并注册" >
			</form>
		</div>
	</form>
</section>
<footer id="footNav">
	<p><a href="#">沪ICP备13044278号</a>|&nbsp;&nbsp;合字B1.B2-20130004&nbsp;&nbsp;|<a href="#">营业执照</a></p>
	<p>Copyright © 乐享购物网上超市 2015-2021，All Rights Reserved</p>
</footer>
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/register.js"></script>
</html>