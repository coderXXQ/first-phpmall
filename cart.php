<?php
error_reporting(E_ERROR);
include ("conn.php");

$msgs = "select * from shoppingcar_info";
$stmt = $pdo->prepare($msgs);
$stmt->execute();

$sql_total = "select sum(数量) as total from shoppingcar_info ";
$stmt_total = $pdo->prepare($sql_total);
$res_total=$stmt_total->execute();
$stmt_total=$stmt_total->fetch();

$sql_allsum = "select sum(金额) as allsum from shoppingcar_info ";
$stmt_allsum = $pdo->prepare($sql_allsum);
$res_allsum=$stmt_allsum->execute();
$stmt_allsum=$stmt_allsum->fetch();

//功能：减
if(isset($_GET['act'])&&$_GET['act']==reduce){

    if($_GET['num']==1){

        exit("<script>location.href='cart.php'; </script>");
    }else{
        $id=$_GET['id'];
        $sql_change_add_select="select 数量,单价 from shoppingcar_info where id=$id";
        $stmt_change_add_select=$pdo->prepare($sql_change_add_select);
        $res_change_add_select=$stmt_change_add_select->execute();
        $res_change_add_select=$stmt_change_add_select->fetch(PDO::FETCH_ASSOC);
        $start_num=$res_change_add_select['数量'];
        $now_num=$res_change_add_select['数量']-1;
        $sum=$now_num*$res_change_add_select['单价'];

        $sql_change_add="update shoppingcar_info set 数量=$now_num,金额=$sum where id=$id";
        $stmt_change_add=$pdo->prepare($sql_change_add);
        $res_change_add=$stmt_change_add->execute();
        exit("<script>location.href='cart.php'; </script>");
    }
}

//功能：加
if(isset($_GET['act'])&&$_GET['act']==add){
    $id=$_GET['id'];
    $sql_change_add_select="select 数量,单价 from shoppingcar_info where id=$id";
    $stmt_change_add_select=$pdo->prepare($sql_change_add_select);
    $res_change_add_select=$stmt_change_add_select->execute();
    $res_change_add_select=$stmt_change_add_select->fetch(PDO::FETCH_ASSOC);
    $start_num=$res_change_add_select['数量'];
    $now_num=$res_change_add_select['数量']+1;
    $sum=$now_num*$res_change_add_select['单价'];

    $sql_change_add="update shoppingcar_info set 数量=$now_num,金额=$sum where id=$id";
    $stmt_change_add=$pdo->prepare($sql_change_add);
    $res_change_add=$stmt_change_add->execute();
    exit("<script>location.href='cart.php'; </script>");
}

//清空购物车
if(isset($_GET['act'])&&$_GET['act']==delALL){
    $sql_delALL="delete from shoppingcar_info";
    $stmt_delALL=$pdo->prepare($sql_delALL);
    $res_delALL=$stmt_delALL->execute();

    if ($res_delALL) {
        exit("<script>
        window.location.href='cart.php';
         </script>");
    } else {
        exit("<script>
        alert('清空购物车失败！');window.location.href='cart.php';
        </script>");
    }
}

//单个删除
if(!empty($_POST)){
    $id=implode(",",$_POST['item']);
    $sql_delAll="delete from shoppingcar_info where id in ($id)";
    $stmt_delAll=$pdo->prepare($sql_delAll);
    $res_delAll=$stmt_delAll->execute();

    if ($res_delAll) {
        exit("<script>
        window.location.href='cart.php';
         </script>");
    } else {
        exit("<script>
        alert('删除失败！');window.location.href='cart.php';
        </script>");
    }
}

if(isset($_GET['act'])&&$_GET['act'] == "del") {
    $id = $_GET['id'];
    $sql_del = "delete from shoppingcar_info where id=?";
    $stmt_del = $pdo->prepare($sql_del);
    $res_del = $stmt_del->execute(array($id));
    if ($res_del) {
        exit("<script>
        window.location.href='cart.php';
         </script>");
    } else {
        exit("<script>
        alert('删除失败！');window.location.href='cart.php';
        </script>");
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的购物车</title>
    <style type="text/css">
        .cart{width: 700px;padding: 0 10px 10px;border: 1px solid #D5E5F5;}
        .cart-title{margin-bottom: 10px;font-size: 14px;border-bottom: 1px solid #AED2FF;line-height: 30px;height: 30
        px;font-weight:700;text-indent: 15px;color:#333;font-family:'Microsoft YaHei' ;}
        /* border-bottom底部边框 ,text-indent：首行缩进*/
        .cart-table{width: 100%;margin: 0 auto;border-color: collapse;font-size: 12px;font-family: Verdana,"Microsoft YaHei";color: #333333;}

        .cart-table th{border-bottom: 2px solid #B2D1FF;font-weight: normal;height: 35px;line-height:1.4375rem ;}
        .cart-item{background-color: #FAFCFF;border-bottom: 1px dotted #84B3FD;}
        .cart-item td{height:55px; text-align: center;}
        .cart-item .cart-txt-left{text-align:left;}
        .cart-name{color: #3366D4;font-weight: bold;}
        .cart-subtotal{color: #FF3334;font-weight: bold;}
        .cart-reduce,.cart-add{display: inline-block;width: 16px;height: 16px;line-height: 16px;color: #FFF;
            background-color: #BDBDBD;border: 0;cursor: pointer;border-radius: 2px;font-family:'Arial' ;font-size: 0.833331rem;}
        .cart-raduce:hover,.cart-add:hover{background-color: #FF9900;}
        .cart-num{margin: 5px;width: 35px;text-align: center;height: 20px;line-height: 20px;padding: 0 3px;display: inline-block;
            background: #fff;border: 1px solid #bbb;}
        .cart-del,.cart-all{color: #3366D4;}
        .cart-del:hover,.cart-all:hover{text-decoration: underline;cursor: pointer;}
        .cart-bottom{height: 55px;text-align: right;}
        .cart-bottom .cart-all{position:relative;top:1px;}
        .cart-total-price{color: #FF3334;font-weight: bold;font-size: 16px;}
        .cart-bottom-btn{color: #FFF;font-size: 14px;font-weight: 600px;cursor: pointer;margin: 0 20px;background: #FE8502;
            border: 1px solid #FF6633;border-radius: 5px 5px 5px 5px;padding: 6px 12px;}
        .cart-bottom-btn:hover{background: #FF6600;}
        input{
            width:20px;
        }
    </style>
</head>
<body>


<div class="cart">
    <div class="cart-title">我的购物车</div>
    <form action="" method="post" onsubmit="javascript:return confirm('确认要全部删除吗？');">
        <table class="cart-table">
            <tr>
                <th width="60"><span class="cart-all">全选</span></th><th>商品</th><th width="120">单价</th><th width="100">数量</th>
                <th width="120">小计</th><th width="80">操作</th>
            </tr>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                <tr class="cart-item">
                    <td><input type="checkbox" checked="checked" class="cart-check" name="item[]" value="<?php echo $row['id'] ?>"/></td>
                    <td class="cart-txt-left"><span class="cart-name"><?php echo $row['商品信息'] ?></span></td>
                    <td><span class="cart-price"><?php echo $row['单价'] ?></span></td>
                    <td><a href="?act=reduce&id=<?php echo $row['id'] ?>&price=<?php echo $row['单价'] ?>&num=<?php echo $row['数量'] ?>"><input id="reduce" type="button" value="-"></a><input style="width: 44px;text-align: center" type="text" value="<?php echo $row['数量'] ?>"><a href="?act=add&id=<?php echo $row['id'] ?>&price=<?php echo $row['单价'] ?>&num=<?php echo $row['数量'] ?>"><input id="add" type="button" value="+"></a> </td>
                    <td><span class="cart-subtotal"><?php echo $row['金额'] ?></span></td>
                    <td><a href="javascript:if(confirm('确认要删除吗？')) location.href='cart.php?act=del&id=<?php echo $row['id'] ?>'">删除</a></td>
                </tr>
            <?php } ?>
            <tr class="cart-bottom">
                <td colspan="6">
                    <span style="float: left;margin-left: 20px"><a href="fresh.php">返回</a></span>
                    <span style="float: left;margin-left: 20px"><a href="javascript:if(confirm('确认要清空购物车吗？')) location.href='cart.php?act=delALL'">清空购物车</a></span>
                    <span class="cart-bottom-span">已选择<span class="cart-total-num"><?php echo $stmt_total['total']; ?></span>件商品</span>
                    <span class="cart-bottom-span">总计：<span class="cart-total-price"><?php echo $stmt_allsum['allsum']; ?></span></span>
                    <span class="cart-bottom-btn">提交订单</span>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
