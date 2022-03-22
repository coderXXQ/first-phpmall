<?php
if(!isset($_COOKIE['username'])){
    exit('<script>alert("请先登录再访问");location.href="login.php"</script>');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>我的关注</title>
        <link rel="stylesheet" href="css/base.css"/>
        <link rel="stylesheet" href="css/boutique.css"/>
        <link rel="stylesheet" href="css/ShopShow.css"/>
        <link rel="stylesheet" href="css/concern.css"/>
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
    <div class="des_t">我的关注</div>
<link href="css/boutique.css" rel="stylesheet" />
			<!-- 图片预览区域 -->
			    <div class="preview_img">
			      <!-- 图片 -->
			      <img src="images/phone.png" alt="">
			      <!-- 放大镜 -->
			      <div class="mask"></div>
			      <!-- 展示放大后图片效果 -->
			      <div class="big" style="left:400px">
			        <img src="images/bigphone.png" alt="" class="bigIMg">
			      </div>
			    </div>
				<script src="js/boutique.js"></script>

    <!--End Menu End-->


            <div id="tsShopContainer" style="margin-left: 0">
                <div id="tsPicContainer">
                    <div id="tsImgSArrL"></div>
                    <div id="tsImgSCon">
                        <ul>
                            <li><img src="images/iphone_blue.jpg" width="79"/></li>
                            <li><img src="images/iphone_gold.jpg" width="79"/></li>
                            <li><img src="images/iphone_green.jpg" width="79"/></li>
                            <li><img src="images/iphone_white.jpg" width="79"/></li>
                        </ul>
                    </div>
                    <div id="tsImgSArrR"></div>
                </div>
            </div>
            <div class="pro_des">
                <div class="des_name">
                    <p>Apple苹果 iPhone8 Plus</p>
                </div>
                <div class="des_price">
                    本店价格：<b>¥8499</b><br/>
                    参考价：<span>¥11899</span>
                </div>
                <div id="choice1" class="des_choice">
                    <span class="fl">选择版本：</span>
                    <ul>
                        <li class="checked">128GB
                            <div class="ch_img"></div>
                        </li>
                        <li>256GB
                            <div class="ch_img"></div>
                        </li>
                        <li>512GB
                            <div class="ch_img"></div>
                        </li>
                    </ul>
                </div>
                <div id="choice2"  class="des_choice">
                    <span class="fl">颜色选择：</span>
                    <ul>
                        <li class="checked">黑色
                            <div class="ch_img"></div>
                        </li>
                        <li>金色
                            <div class="ch_img"></div>
                        </li>
                        <li>绿色
                            <div class="ch_img"></div>
                        </li>
                        <li>白色
                            <div class="ch_img"></div>
                        </li>
                    </ul>
                </div>
                <div id="choice2"  class="des_choice">
                    <span class="fl">购买方式：</span>
                    <ul>
                        <li class="checked">公开版
                            <div class="ch_img"></div>
                        </li>
                        <li>值享焕新版
                            <div class="ch_img"></div>
                        </li>
                        <li>换新无忧年付版
                            <div class="ch_img"></div>
                        </li>
                    </ul>
                </div>
                <div class="des_share">
                    <div class="d_sh">
                        分享
                        <div class="d_sh_bg">
                            <a href="#"><img src="images/sh_1.gif"/></a>
                            <a href="#"><img src="images/sh_2.gif"/></a>
                            <a href="#"><img src="images/sh_3.gif"/></a>
                            <a href="#"><img src="images/sh_4.gif"/></a>
                            <a href="#"><img src="images/sh_5.gif"/></a>
                        </div>
                    </div>
                    <div class="d_care"><a >关注商品</a></div>
                </div>
                <div class="des_join">
                    <div class="j_nums">
                        <input type="text" value="1" name="" class="n_ipt"/>
                        <input type="button" value="" class="n_btn_1"/>
                        <input type="button" value="" class="n_btn_2"/>
                    </div>
                    <span class="fl"><a><img src="images/j_car.png"/></a></span>
                </div>
            </div>
    </body>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/Product.js"></script>
</html>