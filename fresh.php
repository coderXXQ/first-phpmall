<?php
if(!isset($_COOKIE['username'])){
	exit('<script>alert("请先登录再访问");location.href="login.php"</script>');
}
header("content-type:text/html;charset=utf-8");
include "conn.php";
$sql="SELECT * FROM goods ORDER BY id ASC";
$stmt=$pdo->prepare($sql);
$stmt->execute();

$class = "";
$sql_total = "select sum(数量) as total from shoppingcar_info ";
$stmt_total = $pdo->prepare($sql_total);
$res_total=$stmt_total->execute();
$stmt_total=$stmt_total->fetch();


if(!empty($_GET)){
	$id = $_GET['id'];
	$msg=$_GET['msg'];

//加入购物车先检查购物车是否有此商品
	$sql_select="select * from shoppingcar_info where 商品信息='$msg'";
	$stmt_select=$pdo->prepare($sql_select);
	$res_select=$stmt_select->execute();
	$res_select=$stmt_select->fetch(PDO::FETCH_ASSOC);

	if($res_select['商品信息']==$msg){
		$res_select_id=$res_select['id'];

		$sql_change_add_select="select 数量,单价 from shoppingcar_info where id=$res_select_id";
		$stmt_change_add_select=$pdo->prepare($sql_change_add_select);
		$res_change_add_select=$stmt_change_add_select->execute();
		$res_change_add_select=$stmt_change_add_select->fetch(PDO::FETCH_ASSOC);
		$start_num=$res_change_add_select['数量'];
		$now_num=$res_change_add_select['数量']+1;
		$sum=$now_num*$res_change_add_select['单价'];

		$sql_change_add="update shoppingcar_info set 数量=$now_num,金额=$sum where id=$res_select_id";
		$stmt_change_add=$pdo->prepare($sql_change_add);
		$res_change_add=$stmt_change_add->execute();
		if($res_change_add){
			exit("<script>alert( '成功加入购物车' );location.href='cart.php'; </script>");
		}else{
			exit("<script>alert('加入购物车失败' ) ;location.href='fresh.php';</script>");
		}

	}else{
		$sql_add="insert into shoppingcar_info(商品信息,单价,数量,金额,img) values(?,?,?,?,?)";
		$img=$_GET['img'];
		$msg=$_GET['msg'];
		$price=$_GET['price'];
		$num=1;
		$sum=$_GET['price'];
		$stmt_add=$pdo->prepare($sql_add);
		$res_add=$stmt_add->execute(array($msg,$price,$num,$sum,$img));
		if($res_add){
			exit("<script>alert( '成功加入购物车！' );location.href='cart.php'; </script>");
		}else{
			exit("<script>alert('加入购物车失败！' ) ;location.href='fresh.php';</script>");
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>时令生鲜</title>
		<style type="text/css">
			div{
				margin: 5px;
			}
			.all{
				margin-left: 62px;
				width: 220px;
				height: 330px;
				border: 1px solid black;
				float: left;
				cursor: pointer;
			}
			.b{
				border-radius: 7px;
				margin-left: 66px;
				height: 30px;
				width:100px;
				border: 5px ;
			}
			a{
				background: #c00;
				padding:7px;
				text-decoration: none;
				color: #fff;
				border-radius: 8px;
			}
			.top{
				float: right;
				position: relative;
				width: 1450px;
				height: 35px;
				margin-right: 32px;
				text-align: right;
				line-height: 34px;
				border-radius: 4px;
				transition: all .3s linear;
				-moz-transition: all .3s linear;
				-webkit-transition: all .3s linear;
			}

			.top:hover span{
				background-color: #fff;
				color: #d00;
			}
			.top span{
				position: absolute;
				top:0px;
				right: 0px;
				width: 18px;
				height: 18px;
				font-weight: bold;
				border-radius: 9px;
				line-height: 18px;
				text-align: center;
				font-size: 12px;
				font-weight: border;
				color: #f1f4f5;
			}
		</style>
	</head>
	<body>
		<link href="css/shoufengqin.css" rel="stylesheet" />
		<div id="box">
			<ul>
				<li><img src="images/accordion1.jpg"></li>
				<li><img src="images/accordion2.jpg"></li>
				<li><img src="images/accordion3.jpg"></li>
				<li><img src="images/accordion4.jpg"></li>
				<li><img src="images/accordion5.jpg"></li>
			</ul>
		</div>	
		<script src="./js/jquery-1.12.4.min.js"></script>
		<script src="js/shoufengqin.js"></script>

		<div class='top'>
			<a href="cart.php" rel="external nofollow" >我的购物车</a><span class="<?php echo $class;?>"><?php echo $stmt_total['total']; ?></span>
		</div>
		<?php
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		<div class='all'>

				<tr>
			<td><?php echo $row['content'] ?></td>
					<p style='margin-left: 20px'><?php echo $row['goodsname'] ?>
					<h4 style='color:red;margin:-36px auto auto 160px'><?php echo  $row['price'] ?></h4>
			</p>
			<button class='b'>
				<a href='?id=<?php echo $row['id'] ?>&msg=<?php echo $row['goodsname'] ?>&price=<?php echo $row['price'] ?>&img=<?php echo $row['content'] ?>'>加入购物车</a></button>
				</tr>

		</div>
			<?php
		}
		?>
	</body>
</html>
