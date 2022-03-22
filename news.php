<?php
if(!isset($_COOKIE['username'])){
    exit('<script>alert("请先登录再访问");location.href="login.php"</script>');
}
include 'conn.php';
if(!empty($_POST)){
    $id=implode($_POST['item'],',');
    $sql="DELETE FROM comment WHERE id in ($id)";
    $stmt1=$pdo->prepare($sql);
    $stmt1->execute();
    $stmt1=null;
}
if(isset($_GET['act'])&&$_GET['act']=='del'){
    $id=$_GET['id'];
    $sql="DELETE FROM comment WHERE id=?";
    $stmt2=$pdo->prepare($sql);
    $res=$stmt2->execute(array($id));
    if($res){
        exit("<script>location.href='news.php';</script>");
    }else{
        exit("<script>alert('删除失败！');location.href='news.php';</script>");
    }
}

$pagesize=5;
$sql="SELECT * FROM comment";
$stmt=$pdo->query($sql);
$totalrecords=$stmt->rowCount();//总记录条数
$pagecount=ceil($totalrecords/$pagesize);//总页数
$page=isset($_GET['page'])?$_GET['page']:1;//当前页的页码

$sql="SELECT * FROM comment ORDER BY id DESC LIMIT ?,?";
$start=($page-1)*$pagesize;
$offset=$pagesize;
$stmt=$pdo->prepare($sql);
$stmt->bindParam(1,$start,PDO::PARAM_INT);
$stmt->bindParam(2,$offset,PDO::PARAM_INT);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论管理</title>
    <link rel="stylesheet" href="layui/css/layui.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/load.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
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
<!--商品评论-->
<div class="des_border" id="p_comment">
    <div class="des_t">评论管理</div>
    <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
        <tr>
            <td width="175" class="jud_per">
                <p>88.0%</p>好评度
            </td>
            <td width="300">
                <table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="90">好评<font color="#999999">（80%）</font></td>
                        <td><img src="images/pl.gif" align="absmiddle"/></td>
                    </tr>
                    <tr>
                        <td>中评<font color="#999999">（20%）</font></td>
                        <td><img src="images/pl.gif" align="absmiddle"/></td>
                    </tr>
                    <tr>
                        <td>差评<font color="#999999">（0%）</font></td>
                        <td><img src="images/pl.gif" align="absmiddle"/></td>
                    </tr>
                </table>
            </td>
            <td width="185" class="jud_bg">
                在乐享购买过商品的顾客，在收到商品后才可以对该商品发表评论
            </td>
            <td class="jud_bg">您可对已购买商品进行评价<br/><a href="#">发布评论</a></td>
        </tr>
    </table>
    <div class="main">
        <form action="news.php" method="post" onsubmit="javascript:return confirm('确认要删除吗？')">
    <table class="table table-hover">
        <tr>
            <th width="3%"><input type="checkbox" id="cb_all" onclick="checkAll(this)"></th>
            <th width="10%">用户</th>
            <th width="10%">商品名</th>
            <th width="50%">商品评价</th>
            <th width="10%">发布时间</th>
            <th width="18%">操作</th>
        </tr>
        <tbody id="view"></tbody>


        <tr><td colspan="15"><a href="index_administer.php" style="float: right">返回</a><input type="submit" class="btn btn-link" style="font-size:13px" value="批量删除"></td></tr>
        </form>
    </table>
        <div id="page" style="float:right;margin-right:55px"></div>
        <script src="layui/layui.js"></script>
        <script type="text/javascript">
            layui.use(['laypage','jquery'], function(){
                var laypage = layui.laypage;
                var $=layui.jquery;
                $.get('./data.php',function(data){
                    var pagecount=data['pagecount'];
                    var totalrecords=data.totalrecords;
                    laypage.render({
                        elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
                        ,count: totalrecords //数据总数，从服务端得到
                        ,limit:5
                        ,jump:function(obj,first){
                            $.ajax({
                                dataType:'json',
                                url:'data.php',
                                type:'GET',
                                data:{page:obj.curr},
                                success:function(obj){
                                    var content="";
                                    $.each(JSON.parse(obj.data),function(index,row){
                                        content+="<tr><td><input type='checkbox' name='item[]' value="+row.id+" onclick='updateCheck()'></td><td>"+row.username+"</td><td>"+row.tradename+"</td><td>"+row.summary+"</td><td>"+row.postTime+"</td><td><a href='?act=del&id="+row.id+"'>删除</a>| <a href='news_edit.php?id="+row.id+"'>修改</a></td></tr>";
                                    });
                                    $("#view").html(content);
                                }
                            });
                        }
                    });
                },'json');
            });
        </script>
        </div>
</div>
</body>
<script>
    function checkAll(cbox_all){
        var cboxes=document.getElementsByName("item[]");
        for(var i=0;i<cboxes.length;i++)
            cboxes[i].checked=cbox_all.checked;
    }

    function updateCheck(){
        var cboxes=document.getElementsByName("item[]");
        var counter=0;
        for(var i=0;i<cboxes.length;i++)
            if(cboxes[i].checked==true)
                counter++;
        var cbox_all=document.getElementById("cb_all");
        if(counter==<?php echo $stmt->rowCount() ?>)
            cbox_all.checked=true;
        else
            cbox_all.checked=false;
    }
</script>
</html>

