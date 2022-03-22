<?php
include 'conn.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM comment WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($id));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
if(!empty($_POST)){
    extract($_POST);
    $updateTime=date('Y-m-d');
    $sql="UPDATE comment SET username=?,tradename=?,summary=?,content=?,updateTime=? WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $res=$stmt->execute(array($username,$tradename,$summary,$content,$updateTime,$_GET['id']));
    if($res){
        exit("<script>alert('修改成功!');location.href='news.php'</script>");
    }else{
        exit("<script>alert('修改失败!');location.href='news_edit.php'</script>");
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
    <title>修改评论</title>
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
    <main>
        <div class="container">
            <div class="main">
                <div class="news_add">
                    <h4 style="text-align: center;line-height: 48px;">修改评论</h4>
                    <form method="post">
                        <label for="username" >用户</label>
                        <input type="text" name="username" id="username" readonly="readonly" value="<?php echo $row['username'] ?>" class="form-control">
                        <label for="tradename" >商品名</label>
                        <input type="text" name="tradename" id="tradename" value="<?php echo $row['tradename'] ?>" class="form-control">
                        <label for="summary" >商品评价</label>
                        <textarea name="summary" id="summary" class="form-control" cols="30" rows="6">
                            <?php echo $row['summary'] ?>
                        </textarea>
                        <!-- 加载编辑器的容器 -->
                        <label for="container" >商品内容</label>
                        <script id="container" name="content" type="text/plain"></script>
                        <?php echo $row['content'] ?>
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                        </script>

                        <input type="submit" class="btn btn-danger" value="修改评论">
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


