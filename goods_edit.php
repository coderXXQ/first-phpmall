<?php
include 'conn.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM goods WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($id));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
if(!empty($_POST)){
    extract($_POST);
    $updateTime=date('Y-m-d');
    $sql="UPDATE goods SET goodsname=?,price=?,content=?,updateTime=? WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $res=$stmt->execute(array($goodsname,$price,$content,$updateTime,$_GET['id']));
    if($res){
        exit("<script>alert('更新成功!');location.href='goods.php'</script>");
    }else{
        exit("<script>alert('更新失败!');location.href='goods_edit.php'</script>");
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        .container{
            margin-left:220px;
            margin-right: 220px;
        }
        .main{
            float:left;
            width:88%;
            height:200px;
        }
        .left{
            float:left;
            width:200px;
            height:200px;
            margin-left:-100%;
        }
        .right{
            float:left;
            width:200px;
            height:200px;
            margin-left:-200px;
        }
    </style>
    <meta charset="UTF-8">
    <title>更新商品</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/load.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="ueditor/ueditor.config.js"></script>
    <script src="ueditor/editor_api.js"></script>
</head>
<body>
<div class="layout">
    <header id="headNav">
        <div class="innerNav cf">
            <a class="fl" href="#"><img src="images/logo.jpg" alt=""/></a>
            <div class="headFont fr">
                <span>您好<?php echo $_COOKIE['username'] ?>，欢迎光临乐享购物！</span>
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
    <div class="container">
        <div class="main">
            <div class="news_add">
                <h4 style="text-align: center;line-height: 48px;">更新商品</h4>
                <form method="post">
                    <label for="goodsname" >商品名称</label>
                    <input type="text" name="goodsname" id="goodsname" value="<?php echo $row['goodsname'] ?>" class="form-control">
                    <label for="price" >商品价格</label>
                    <input type="text" name="price" id="price" value="<?php echo $row['price'] ?>" class="form-control">
                    <!-- 加载编辑器的容器 -->
                    <label for="container" >商品内容</label>
                    <script id="container" name="content" type="text/plain"></script>
                    <?php echo $row['content'] ?>
                    <script type="text/javascript">
                        var ue = UE.getEditor('container');
                    </script>

                    <input type="submit" class="btn btn-danger" value="更新商品">
                </form>
            </div>
        </div>
        <div class="left"></div>
        <div class="right"></div>
    </div>
    </main>
    <footer></footer>
</div>
</body>
</html>



