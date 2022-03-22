<?php
if(!isset($_COOKIE['username'])){
    exit('<script>alert("请先登录再访问");location.href="login.php"</script>');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐享后台管理</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<div class="layout">
    <header>
        <h3 style="float:left; line-height: 100px;color: #888;">乐享后台管理系统</h3>
        <div class="topnav">
            <a href="">欢迎您<?php echo $_COOKIE['username'] ?> </a>
            <a href="javascript:if(confirm('确认要注销吗？')) location.href='doLogin.php?act=logout'">注销</a>
        </div>
    </header>
    <main>
        <div class="menu">
            <ul>
                <li><a href="news.php">评论管理</a></li>
                <li><a href="goods.php">商品管理</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="main"></div>
    </main>
    <footer></footer>
</div>
</body>
</html>
