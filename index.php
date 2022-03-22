<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>首页</title>


	</head>
	<body>
		<div class="imgClose"><img class="alignright" src="images/x.png" alt="#"></div>
		<div class="imgBuff">
			<img src="images/00.png" alt="#">
		</div>
		<script src="js/guanbi.js">
		</script>

		<link href="css/xlnav.css" rel="stylesheet">
		<div class="nav">
			<ul>
				<li>
					<a href="" style="text-align:left">欢迎您<?php echo $_COOKIE['username'] ?> </a>
				</li>
				<li>
					<a href="javascript:if(confirm('确认要注销吗？')) location.href='doLogin_view.php?act=logout'" style="text-align: left">注销</a>
				</li>
				<!--添加鼠标移入移出的事件，通过事件分别调用显示和隐藏菜单对象的函数-->
				<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">个人中心</a>
					<ul>
						<li><a href="login_view.php">登录</a></li>
						<li><a href="register_view.php">免费注册</a></li>
					</ul>
				</li>
				<li><a href="orders.html">我的订单</a></li>
				<!--添加鼠标移入移出的事件，通过事件分别调用显示和隐藏菜单对象的函数-->
				<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">我的乐享</a>
					<ul>
						<li><a href="news_view.php">商品评论</a></li>
						<li><a href="concern.php">我的关注</a></li>
					</ul>
				</li>
				<!--添加鼠标移入移出的事件，通过事件分别调用显示和隐藏菜单对象的函数-->
				<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">企业采购</a>
					<ul>
						<li><a href="#">礼品卡</a></li>
						<li><a href="#">商业场景馆</a></li>
						<li><a href="#">丰客多商城</a></li>
					</ul>
				</li>
				<!--添加鼠标移入移出的事件，通过事件分别调用显示和隐藏菜单对象的函数-->
				<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">客户服务</a>
					<ul>
						<li><a href="#">帮助中心</a></li>
						<li><a href="#">在线客服</a></li>
						<li><a href="#">售后服务</a></li>
					</ul>
				</li>
				<!--添加鼠标移入移出的事件，通过事件分别调用显示和隐藏菜单对象的函数-->
				<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">网站导航</a>
					<ul>
						<li><a href="#">优惠劵</a></li>
						<li><a href="boutique.html">精品首发</a></li>
						<li><a href="#">乐享预售</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<script src="js/xlnav.js"></script>

		<div class="imgLogo"><img class="alignleft" src="images/logo.jpg" alt="#"></div>

		<link href="css/search.css" rel="stylesheet">
		<div class="search">
			<input type="text" placeholder="请输入关键字" name="" id="" value="" />
			<button><i>搜索</i></button>
		</div>
		
		<link href="css/car.css" rel="stylesheet">
		<div class="i_car">
			<div class="car_t"><a href="cart.html">购物车</a></div>
			<div class="last">
				<div class="noshop">
					<img src="images/icon_tips2.png" alt="" />
					<h3>你的乐享购物车还是空的</h3>
				</div>
			</div>
		    </div>
	    </div>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/car.js"></script>
		
		<link href="css/codes.css" rel="stylesheet">
		<div class="box-a">
			乐享二维码
			<img src="images/er.jpg" alt="">
			<i class="close-btn">X</i>
		</div>
		<script src="js/codes.js"></script>

		<link href="css/smfont.css" rel="stylesheet">
		<div class="smfont">
			<ul id="_ul">
				<li><a href="#">
						<font color="red">抢购机神券</font>
					</a></li>
				<li><a href="fresh.php">时令生鲜</a></li>
				<li><a href="#">美妆护肤</a></li>
				<li><a href="#">年终盛典</a></li>
				<li><a href="boutique.html">精品</a></li>
			</ul>
		</div>
		
		<link href="css/cloud.css" rel="stylesheet">
		<div id="nav_0" class="nav_0">
			<span class="cloud" id="cloud"></span>
			<ul>
				<li><a href="#">首页</a></li>
				<li><a href="vip-area.html">会员专区</a></li>
				<li><a href="#">品牌闪购</a></li>
				<li><a href="#">拍卖</a></li>
				<li><a href="#">乐享家电</a></li>
				<li><a href="#">乐享超市</a></li>
				<li><a href="#">乐享国际</a></li>
			</ul>
		</div>
		<script src="js/cloud.js"></script>
	

		<link href="css/lunbo.css" rel="stylesheet">
		<div class="banner">
			<div class="banner_pic" id="banner_pic">
				<div class="current"><img src="images/01.jpg" alt="" /></div>
				<div class="pic"><img src="images/02.jpg" alt="" /></div>
				<div class="pic"><img src="images/03.jpg" alt="" /></div>
				<div class="pic"><img src="images/04.jpg" alt="" /></div>
			</div>
			<ol id="button">
				<li class="current"></li>
				<li class="but"></li>
				<li class="but"></li>
				<li class="but"></li>
			</ol>
		</div>
		<script src="js/lunbo.js"></script>
		
		<link href="css/new.css" rel="stylesheet">
		<div class="indexL">
		  <div class="newMessage">
		    <div class="moudeTop">
		      <strong>乐享信息</strong>
		    </div>
		<div id="ke_scllo">  <!--总高度为200-->
		  <div  id="ke_scllo1">
		    <ul>  <!--高度为800-->
		        <li>高通骁龙855作为今年的Android旗舰芯片组，自然是今年各大手机品牌的重重之重，各家都推出了旗舰产品，同样今年联想也推出了使用高通骁龙855的手机：联想Z6 Pro。</li>
		        <li>我新发现了一款软糖，想推荐给你们，这款软糖的牌子叫TOUMEI，是日本的一个品牌。</li>
		        <li>小米CC9从包装开始，年轻活力的配色就已经在跟小米过往的其他系列拉开差距。纸盒背面的宣言彰显了定位年轻用户的决心，更诠释出“CC”系列得名的由来。</li>
		        <li>对于音频设备，虽然已经过了烧友的阶段，现在也主要以便捷度为主。但AirPods虽然方便，却几无音质可言。听久了随便找个几百块钱的耳机，你都会觉得音质不错。而索尼的降噪耳机，1000XM3又略显沉闷。</li>
		        <li>联想拯救者系列是游戏本中不容忽视的产品，为主流游戏爱好者群体量身打造，而今全新联想 拯救者Y7000P 2020款上线，性能释放又提升了一个层级，配置方面也毫无死角。</li>
		        <li>我们知道您的时间非常宝贵，因此，在遇到问题时，您一定希望我们能及时的给出解决方案。我们不怕繁琐，为您在第一时间内细心解答。</li>
		    </ul>
		  </div>
		  <div id="ke_scllo2" class="tagsContent"></div>  <!--高度为780-->
		</div>
		  </div>
		</div>
		<script src="js/new.js"></script>

		<link href="css/limit.css" rel="stylesheet">
		<div class="box">
			<div id="d"></div> <!-- 剩余的天数 -->
			<div id="h"></div> <!-- 剩余的小时 -->
			<div id="m"></div> <!-- 剩余的分钟 -->
			<div id="s"></div> <!-- 剩余的秒数 -->
		</div>
		<script src="js/limit.js"></script>

		<link href="css/transparent.css" rel="stylesheet">
		<div class="table">
			<table width="580" height="376" border="0">
				<tl>
					<td width="261" height="198"><img src="images/ms02.jpg" id="img_1" border="0" style="opacity:0.3" onmouseover="visible(this,1);"
						 onmouseout="visible(this,0.5)" width="200" height="190" />
						<dd>
							T恤女2020复古文艺春季新款宽松大码圆领印花百搭拼接上衣女N375 黄色
							<br></br>
							<s>市场价：￥169</s>
							<font color="#FF0000">售价：￥98</font>
						</dd>
					</td>
					<td width="156"><img src="images/ms03.jpg" id="img2" border="0" style="opacity:0.3" onmouseover="visible(this,1)"
						 onmouseout="visible(this,0.5)" width="200" height="190" />
						<dd>
							洁尚思 厨房置物架落地三层 三层加厚不锈钢 微波烤箱置物架
							<br></br>
							<s>市场价：￥189</s>
							<font color="#FF0000">售价：￥89</font>
						</dd>
					</td>
					<td width="146"><img src="images/ms04.jpg" id="img3" border="0" style="opacity:0.3" onmouseover="visible(this,1)"
						 onmouseout="visible(this,0.5)" width="200" height="190" />
						<dd>
							黑色单鞋女2020春夏季新款女鞋低跟皮鞋软底透气粗跟鞋工作鞋韩版
							<br></br>
							<s>市场价：￥429</s>
							<font color="#FF0000">售价：￥339</font>
						</dd>
					</td>
					<td><img src="images/ms05.jpg" id="img4" border="0" style="opacity:0.3" onmouseover="visible(this,1)" onmouseout="visible(this,0.5)"
						 width="200" height="190" />
						<dd>
							迪奥（Dior）花漾淡香（EDT）30ml（喷装 清新淡花香 初恋的气息）
							<br></br>
							<s>市场价：￥546</s>
							<font color="#FF0000">售价：￥446</font>
						</dd>
					</td>
					<td><img src="images/ms06.jpg" id="img5" border="0" style="opacity:0.3" onmouseover="visible(this,1)" onmouseout="visible(this,0.5)"
						 width="200" height="190" />
						<dd>
							华帝(VATTI) 304不锈钢水槽单槽 拉丝不锈钢洗菜盆 厨房水槽 厨房洗碗盆
							<br></br>
							<s>市场价：￥389</s>
							<font color="#FF0000">售价：￥319</font>
						</dd>
					</td>
				</tl>
			</table>
		</div>
		<script src="js/transparent.js"></script>


		<link href="css/ddhome.css" rel="stylesheet">
		<div class="homepage_prefer">
			<h2>
				<span id="imgproduct1" onmouseover="showproductdiv(1);" style="display: none; "><b>本周推荐</b></span>
				<span id="showproduct1" class="other" onmouseover="productDivStop();" style="display: block; " onmouseout="productDivPlay(1);"><b
					 class="nonce">本周推荐</b></span>
				<span id="imgproduct2" onmouseover="showproductdiv(2);" style="display: block; "><b>新鲜货</b></span>
				<span id="showproduct2" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(2);"><b
					 class="nonce">新鲜货</b></span>
				<span id="imgproduct3" onmouseover="showproductdiv(3);" style="display: block; "><b>热卖商品</b></span>
				<span id="showproduct3" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(3);"><b
					 class="nonce">热卖商品</b></span>
				<span id="imgproduct4" onmouseover="showproductdiv(4);" style="display: block; "><b>新书上架</b></span>
				<span id="showproduct4" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(4);"><b
					 class="nonce">新书上架</b></span>
				<div class="clear"></div>
			</h2>
			<div class="homepage_prefer_list" id="_i1" onmouseover="productDivStop();" onmouseout="productDivPlay(1);" style="display: block; ">
				<ul>
					<li>
						<p class="pic"><a href="" target="_blank"><img alt="小熊煮蛋器 不锈钢蒸碗 赠搅拌棒 " src="images/20739470.jpg" /></a></p>
						<p class="name"><a title="小熊煮蛋器 不锈钢蒸碗 赠搅拌棒 " href="" target="_blank">小熊煮蛋器 不锈钢蒸碗 赠搅拌棒 </a></p>
						<p class="price_m"><span>￥108.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>68.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="" target="_blank"><img alt="Victorinox维氏瑞士军刀獵人-红" src="images/9313918-1_a.jpg" /></a></p>
						<p class="name"><a title="Victorinox维氏瑞士军刀獵人-红" href="" target="_blank">Victorinox维氏瑞士军刀獵人-红</a></p>
						<p class="price_m"><span>￥348.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>149.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60016285#ref=www-0-I" target="_blank"><img
								 alt="台电MP3播放器 4G 超长待机 支持FM" src="images/60016285.jpg" /></a></p>
						<p class="name"><a title="台电MP3播放器 4G 超长待机 支持FM" href="http://product.dangdang.com/product.aspx?product_id=60016285#ref=www-0-I"
							 target="_blank">台电MP3播放器 4G 超长待机 支持FM</a></p>
						<p class="price_m"><span>￥199.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>178.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20544200#ref=www-0-I" target="_blank"><img
								 alt="漫步者Edifier 北美木色 2.0音箱" src="images/20544200.jpg" /></a></p>
						<p class="name"><a title="漫步者Edifier 北美木色 2.0音箱" href="http://product.dangdang.com/product.aspx?product_id=20544200#ref=www-0-I"
							 target="_blank">漫步者Edifier 北美木色 2.0音箱</a></p>
						<p class="price_m"><span>￥295.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>229.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60004254#ref=www-0-I" target="_blank"><img
								 alt="LohashillBB裸妆霜50ml(粉底+护肤)" src="images/60004254.jpg" /></a></p>
						<p class="name"><a title="LohashillBB裸妆霜50ml(粉底+护肤)" href="http://product.dangdang.com/product.aspx?product_id=60004254#ref=www-0-I"
							 target="_blank">LohashillBB裸妆霜50ml(粉底+护肤)</a></p>
						<p class="price_m"><span>￥106.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>39.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60025682#ref=www-0-I" target="_blank"><img
								 alt="DIOR迪奥惊艳睫毛膏 斜纹刷头设计" src="images/60025682.jpg" /></a></p>
						<p class="name"><a title="DIOR迪奥惊艳睫毛膏 斜纹刷头设计" href="http://product.dangdang.com/product.aspx?product_id=60025682#ref=www-0-I"
							 target="_blank">DIOR迪奥惊艳睫毛膏 斜纹刷头设计</a></p>
						<p class="price_m"><span>￥128.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>51.80</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20632822#ref=www-0-I" target="_blank"><img
								 alt="新包装养生堂天然维生素E160粒装" src="images/20632822.jpg" /></a></p>
						<p class="name"><a title="新包装养生堂天然维生素E160粒装" href="http://product.dangdang.com/product.aspx?product_id=20632822#ref=www-0-I"
							 target="_blank">新包装养生堂天然维生素E160粒装</a></p>
						<p class="price_m"><span>￥99.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>56.90</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20142859#ref=www-0-I" target="_blank"><img
								 alt="妈咪宝贝瞬吸干爽纸尿裤大包66片" src="images/20142859.jpg" /></a></p>
						<p class="name"><a title="妈咪宝贝瞬吸干爽纸尿裤大包66片" href="http://product.dangdang.com/product.aspx?product_id=20142859#ref=www-0-I"
							 target="_blank">妈咪宝贝瞬吸干爽纸尿裤大包66片</a></p>
						<p class="price_m"><span>￥99.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>67.80</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60004455#ref=www-0-I" target="_blank"><img
								 alt="惠氏金装健儿乐盒装400g(新品)" src="images/60004455-1_a.jpg" /></a></p>
						<p class="name"><a title="惠氏金装健儿乐盒装400g(新品)" href="http://product.dangdang.com/product.aspx?product_id=60004455#ref=www-0-I"
							 target="_blank">惠氏金装健儿乐盒装400g(新品)</a></p>
						<p class="price_m"><span>￥88.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>70.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60014687#ref=www-0-I" target="_blank"><img
								 alt="空间大师迷你微波炉架" src="images/60014687.jpg" /></a></p>
						<p class="name"><a title="空间大师迷你微波炉架" href="http://product.dangdang.com/product.aspx?product_id=60014687#ref=www-0-I"
							 target="_blank">空间大师迷你微波炉架</a></p>
						<p class="price_m"><span>￥179.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>99.00</span></font>
						</p>
					</li>
				</ul>
			</div>
			<div class="homepage_prefer_list" id="_i2" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(2);">
				<ul>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;PromotionType=&amp;cat=4003663&amp;highp=&amp;lowp=&amp;sort=1&amp;store=mt1#ref=www-0-I"
							 target="_blank"><img alt="佐卡伊1分钻石吊坠9K女款项坠-怡然" src="images/1061446502-1_a.jpg" /></a></p>
						<p class="name"><a title="佐卡伊1分钻石吊坠9K女款项坠-怡然" href="http://category.dangdang.com/list?ps=39&amp;PromotionType=&amp;cat=4003663&amp;highp=&amp;lowp=&amp;sort=1&amp;store=mt1#ref=www-0-I"
							 target="_blank">佐卡伊1分钻石吊坠9K女款项坠-怡然</a></p>
						<p class="price_m"><span>￥538.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>299.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;cat=4002781&amp;highp=&amp;lowp=&amp;sort=5##ref=www-0-I"
							 target="_blank"><img alt="时尚羊毛呢搭扣束腰短仿羊绒大衣" src="images/1052733901.jpg" /></a></p>
						<p class="name"><a title="时尚羊毛呢搭扣束腰短仿羊绒大衣" href="http://category.dangdang.com/list?ps=39&amp;cat=4002781&amp;highp=&amp;lowp=&amp;sort=5##ref=www-0-I"
							 target="_blank">时尚羊毛呢搭扣束腰短仿羊绒大衣</a></p>
						<p class="price_m"><span>￥388.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>98.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://search.dangdang.com/search_mall.php?q=%C5%B7%E7%EA%C0%B3&amp;cat=4002074&amp;guan=4000005&amp;page=2#ref=www-0-I"
							 target="_blank"><img alt="欧珀莱均衡保湿系列水润感应精华露" src="images/60045068.jpg" /></a></p>
						<p class="name"><a title="欧珀莱均衡保湿系列水润感应精华露" href="http://search.dangdang.com/search_mall.php?q=%C5%B7%E7%EA%C0%B3&amp;cat=4002074&amp;guan=4000005&amp;page=2#ref=www-0-I"
							 target="_blank">欧珀莱均衡保湿系列水润感应精华露</a></p>
						<p class="price_m"><span>￥150.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>118.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;cat=4003642&amp;highp=&amp;lowp=&amp;sort=5&amp;store=eq0#ref=www-0-I"
							 target="_blank"><img alt="天然紫水晶浓情紫色吊坠-爱情守护石" src="images/60020562.jpg" /></a></p>
						<p class="name"><a title="天然紫水晶浓情紫色吊坠-爱情守护石" href="http://category.dangdang.com/list?ps=39&amp;cat=4003642&amp;highp=&amp;lowp=&amp;sort=5&amp;store=eq0#ref=www-0-I"
							 target="_blank">天然紫水晶浓情紫色吊坠-爱情守护石</a></p>
						<p class="price_m"><span>￥288.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>76.90</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?cid=4003339#ref=www-0-I" target="_blank"><img alt="香薯坊新疆巴旦木650g*2盒"
								 src="images/60019142.jpg" /></a></p>
						<p class="name"><a title="香薯坊新疆巴旦木650g*2盒" href="http://category.dangdang.com/list?cid=4003339#ref=www-0-I"
							 target="_blank">香薯坊新疆巴旦木650g*2盒</a></p>
						<p class="price_m"><span>￥120.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>50.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://search.dangdang.com/search_mall.php?q=%B0%AE%CA%CB%B4%EF%B3%B4%B9%F8&amp;guan=4000002#ref=www-0-I"
							 target="_blank"><img alt="爱仕达30CM电磁炉适用铸铁炒锅" src="images/20745208.jpg" /></a></p>
						<p class="name"><a title="爱仕达30CM电磁炉适用铸铁炒锅" href="http://search.dangdang.com/search_mall.php?q=%B0%AE%CA%CB%B4%EF%B3%B4%B9%F8&amp;guan=4000002#ref=www-0-I"
							 target="_blank">爱仕达30CM电磁炉适用铸铁炒锅</a></p>
						<p class="price_m"><span>￥119.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>99.80</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;cat=4002628&amp;sort=5&amp;highp=&amp;lowp=&amp;store=eq0#ref=www-0-I"
							 target="_blank"><img alt="AUPU奥普 阳光系列灯暖型浴霸" src="images/60045847-1_a.jpg" /></a></p>
						<p class="name"><a title="AUPU奥普 阳光系列灯暖型浴霸" href="http://category.dangdang.com/list?ps=39&amp;cat=4002628&amp;sort=5&amp;highp=&amp;lowp=&amp;store=eq0#ref=www-0-I"
							 target="_blank">AUPU奥普 阳光系列灯暖型浴霸</a></p>
						<p class="price_m"><span>￥498.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>399.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://search.dangdang.com/search_mall.php?q=%CD%FE%B8%EA&amp;cat=&amp;lowp=&amp;highp=&amp;loc=&amp;chk_store=on&amp;guan=&amp;store=eq0#ref=www-0-I"
							 target="_blank"><img alt="瑞士军刀威戈Wenger双肩背包-蓝色" src="images/60042872.jpg" /></a></p>
						<p class="name"><a title="瑞士军刀威戈Wenger双肩背包-蓝色" href="http://search.dangdang.com/search_mall.php?q=%CD%FE%B8%EA&amp;cat=&amp;lowp=&amp;highp=&amp;loc=&amp;chk_store=on&amp;guan=&amp;store=eq0#ref=www-0-I"
							 target="_blank">瑞士军刀威戈Wenger双肩背包-蓝色</a></p>
						<p class="price_m"><span>￥299.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>80.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;cat=4001140&amp;highp=&amp;lowp=&amp;sort=5&amp;store=eq0#ref=www-0-I"
							 target="_blank"><img alt="爱国者aigo青花瓷 MP3 浮雕设计" src="images/60034687.jpg" /></a></p>
						<p class="name"><a title="爱国者aigo青花瓷 MP3 浮雕设计" href="http://category.dangdang.com/list?ps=39&amp;cat=4001140&amp;highp=&amp;lowp=&amp;sort=5&amp;store=eq0#ref=www-0-I"
							 target="_blank">爱国者aigo青花瓷 MP3 浮雕设计</a></p>
						<p class="price_m"><span>￥149.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>129.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://category.dangdang.com/list?ps=39&amp;att=1:1181&amp;cat=4002055&amp;sort=5&amp;lowp=120&amp;highp=126#ref=www-0-I"
							 target="_blank"><img alt="妈咪宝贝瞬吸干爽纸尿裤特大包" src="images/20644811.jpg" /></a></p>
						<p class="name"><a title="妈咪宝贝瞬吸干爽纸尿裤特大包" href="http://category.dangdang.com/list?ps=39&amp;att=1:1181&amp;cat=4002055&amp;sort=5&amp;lowp=120&amp;highp=126#ref=www-0-I"
							 target="_blank">妈咪宝贝瞬吸干爽纸尿裤特大包</a></p>
						<p class="price_m"><span>￥137.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>126.00</span></font>
						</p>
					</li>
				</ul>
			</div>
			<div class="homepage_prefer_list" id="_i3" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(3);">
				<ul>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20699978#ref=www-0-I" target="_blank"><img
								 alt="美赞臣安儿宝A+(新)400g*3袋/盒" src="images/20699978.jpg" /></a></p>
						<p class="name"><a title="美赞臣安儿宝A+(新)400g*3袋/盒" href="http://product.dangdang.com/product.aspx?product_id=20699978#ref=www-0-I"
							 target="_blank">美赞臣安儿宝A+(新)400g*3袋/盒</a></p>
						<p class="price_m"><span>￥225.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>197.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20761019#ref=www-0-I" target="_blank"><img
								 alt="贝佳斯矿物营养美肤泥浆绿泥212g" src="images/20761019.jpg" /></a></p>
						<p class="name"><a title="贝佳斯矿物营养美肤泥浆绿泥212g" href="http://product.dangdang.com/product.aspx?product_id=20761019#ref=www-0-I"
							 target="_blank">贝佳斯矿物营养美肤泥浆绿泥212g</a></p>
						<p class="price_m"><span>￥260.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>100.60</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=9295025#ref=www-0-I" target="_blank"><img
								 alt="巴黎欧莱雅清润保湿矿泉净活液200ml" src="images/9295025.jpg" /></a></p>
						<p class="name"><a title="巴黎欧莱雅清润保湿矿泉净活液200ml" href="http://product.dangdang.com/product.aspx?product_id=9295025#ref=www-0-I"
							 target="_blank">巴黎欧莱雅清润保湿矿泉净活液200ml</a></p>
						<p class="price_m"><span>￥100.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>79.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20453915#ref=www-0-I" target="_blank"><img
								 alt="美好家三排六格置物架 天然实木色" src="images/20453915.jpg" /></a></p>
						<p class="name"><a title="美好家三排六格置物架 天然实木色" href="http://product.dangdang.com/product.aspx?product_id=20453915#ref=www-0-I"
							 target="_blank">美好家三排六格置物架 天然实木色</a></p>
						<p class="price_m"><span>￥240.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>129.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20721757#ref=www-0-I" target="_blank"><img
								 alt="九阳五谷食尚系列豆浆机 五谷精磨器" src="images/20721757-1_a.jpg" /></a></p>
						<p class="name"><a title="九阳五谷食尚系列豆浆机 五谷精磨器" href="http://product.dangdang.com/product.aspx?product_id=20721757#ref=www-0-I"
							 target="_blank">九阳五谷食尚系列豆浆机 五谷精磨器</a></p>
						<p class="price_m"><span>￥439.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>299.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60023224#ref=www-0-I" target="_blank"><img
								 alt="康比特运动美人左旋360°300粒装" src="images/60023224.jpg" /></a></p>
						<p class="name"><a title="康比特运动美人左旋360°300粒装" href="http://product.dangdang.com/product.aspx?product_id=60023224#ref=www-0-I"
							 target="_blank">康比特运动美人左旋360°300粒装</a></p>
						<p class="price_m"><span>￥520.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>288.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20648973#ref=www-0-I" target="_blank"><img
								 alt="瑞士军刀威戈双肩电脑包 新品上市" src="images/20648973.jpg" /></a></p>
						<p class="name"><a title="瑞士军刀威戈双肩电脑包 新品上市" href="http://product.dangdang.com/product.aspx?product_id=20648973#ref=www-0-I"
							 target="_blank">瑞士军刀威戈双肩电脑包 新品上市</a></p>
						<p class="price_m"><span>￥620.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>228.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20222183#ref=www-0-I" target="_blank"><img
								 alt="联想 T180 4G U盘 支持分区加密" src="images/20222183.jpg" /></a></p>
						<p class="name"><a title="联想 T180 4G U盘 支持分区加密" href="http://product.dangdang.com/product.aspx?product_id=20222183#ref=www-0-I"
							 target="_blank">联想 T180 4G U盘 支持分区加密</a></p>
						<p class="price_m"><span>￥120.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>75.20</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=9136340#ref=www-0-I" target="_blank"><img
								 alt="罗技炫音后挂式耳机 动感音质" src="images/9136340.jpg" /></a></p>
						<p class="name"><a title="罗技炫音后挂式耳机 动感音质" href="http://product.dangdang.com/product.aspx?product_id=9136340#ref=www-0-I"
							 target="_blank">罗技炫音后挂式耳机 动感音质</a></p>
						<p class="price_m"><span>￥299.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>67.00</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=60037901#ref=www-0-I" target="_blank"><img
								 alt="SOFTLINE九孔羊毛柔洁双人秋冬被" src="images/60037901-1_a.jpg" /></a></p>
						<p class="name"><a title="SOFTLINE九孔羊毛柔洁双人秋冬被" href="http://product.dangdang.com/product.aspx?product_id=60037901#ref=www-0-I"
							 target="_blank">SOFTLINE九孔羊毛柔洁双人秋冬被</a></p>
						<p class="price_m"><span>￥399.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>199.00</span></font>
						</p>
					</li>
				</ul>
			</div>
			<div class="homepage_prefer_list" id="_i4" onmouseover="productDivStop();" style="display: none; " onmouseout="productDivPlay(4);">
				<ul>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20925928#ref=www-0-I" target="_blank"><img
								 alt="乐玩这就动手" src="images/20925928-1_a.jpg" /></a></p>
						<p class="name"><a title="乐玩这就动手" href="http://product.dangdang.com/product.aspx?product_id=20925928#ref=www-0-I"
							 target="_blank">乐玩这就动手</a></p>
						<p class="price_m"><span>￥36.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>24.80</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20921947#ref=www-0-I" target="_blank"><img
								 alt="禅的生活-过禅者洒脱自在的生活" src="images/20921947-1_a.jpg" /></a></p>
						<p class="name"><a title="禅的生活-过禅者洒脱自在的生活" href="http://product.dangdang.com/product.aspx?product_id=20921947#ref=www-0-I"
							 target="_blank">禅的生活-过禅者洒脱自在的生活</a></p>
						<p class="price_m"><span>￥26.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>18.70</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20925265#ref=www-0-I" target="_blank"><img
								 alt="贝太厨房-轻松学烘焙(当当独家首发)" src="images/20925265-1_a.jpg" /></a></p>
						<p class="name"><a title="贝太厨房-轻松学烘焙(当当独家首发)" href="http://product.dangdang.com/product.aspx?product_id=20925265#ref=www-0-I"
							 target="_blank">贝太厨房-轻松学烘焙(当当独家首发)</a></p>
						<p class="price_m"><span>￥29.80</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>20.60</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20924529#ref=www-0-I" target="_blank"><img
								 alt="成熟度鉴定书2-让你领悟职场的“真”" src="images/20924529-1_a.jpg" /></a></p>
						<p class="name"><a title="成熟度鉴定书2-让你领悟职场的“真”" href="http://product.dangdang.com/product.aspx?product_id=20924529#ref=www-0-I"
							 target="_blank">成熟度鉴定书2-让你领悟职场的“真”</a></p>
						<p class="price_m"><span>￥25.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>17.30</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20932080#ref=www-0-I" target="_blank"><img
								 alt="灵魂的自由-伊能静疗愈与成长修习课" src="images/20932080-1_a.jpg" /></a></p>
						<p class="name"><a title="灵魂的自由-伊能静疗愈与成长修习课" href="http://product.dangdang.com/product.aspx?product_id=20932080#ref=www-0-I"
							 target="_blank">灵魂的自由-伊能静疗愈与成长修习课</a></p>
						<p class="price_m"><span>￥28.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>20.20</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20929685#ref=www-0-I" target="_blank"><img
								 alt="盗墓笔记柒(最后的盛宴：吴邪的反击)" src="images/20929685-1_a.jpg" /></a></p>
						<p class="name"><a title="盗墓笔记柒(最后的盛宴：吴邪的反击)" href="http://product.dangdang.com/product.aspx?product_id=20929685#ref=www-0-I"
							 target="_blank">盗墓笔记柒(最后的盛宴：吴邪的反击)</a></p>
						<p class="price_m"><span>￥32.80</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>23.60</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20918340#ref=www-0-I" target="_blank"><img
								 alt="别对我撒谎-维系长久的婚姻" src="images/20918340-1_a.jpg" /></a></p>
						<p class="name"><a title="别对我撒谎-维系长久的婚姻" href="http://product.dangdang.com/product.aspx?product_id=20918340#ref=www-0-I"
							 target="_blank">别对我撒谎-维系长久的婚姻</a></p>
						<p class="price_m"><span>￥28.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>19.30</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20917388#ref=www-0-I" target="_blank"><img
								 alt="5小时熟知金融常识" src="images/20917388-1_a.jpg" /></a></p>
						<p class="name"><a title="5小时熟知金融常识" href="http://product.dangdang.com/product.aspx?product_id=20917388#ref=www-0-I"
							 target="_blank">5小时熟知金融常识</a></p>
						<p class="price_m"><span>￥22.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>15.80</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20914232#ref=www-0-I" target="_blank"><img
								 alt="大象为什么不长毛:方舟子破解科学谜题" src="images/20914232-1_a.jpg" /></a></p>
						<p class="name"><a title="大象为什么不长毛:方舟子破解科学谜题" href="http://product.dangdang.com/product.aspx?product_id=20914232#ref=www-0-I"
							 target="_blank">大象为什么不长毛:方舟子破解科学谜题</a></p>
						<p class="price_m"><span>￥28.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>19.30</span></font>
						</p>
					</li>
					<li>
						<p class="pic"><a href="http://product.dangdang.com/product.aspx?product_id=20918313#ref=www-0-I" target="_blank"><img
								 alt="B蒋勋说红楼梦1" src="images/20918313-1_a.jpg" /></a></p>
						<p class="name"><a title="B蒋勋说红楼梦1" href="http://product.dangdang.com/product.aspx?product_id=20918313#ref=www-0-I"
							 target="_blank">B蒋勋说红楼梦1</a></p>
						<p class="price_m"><span>￥35.00</span></p>
						<p class="price_d">
							<font color="FF0000">￥<span>24.20</span></font>
						</p>
					</li>
				</ul>
			</div>
		</div>
		<script src="js/display.js"></script>

		<link href="css/footer.css" rel="stylesheet">
		<footer class="center">
			<!-- Footer -->
			<div class="b_btm_bg b_btm_c">
				<ul class="b_btm">
					<li>
						<a><img src="images/b1.png" width="62" height="62" /></a>
						<div>
							<h2>正品保障</h2>正品行货 放心购买
						</div>
					</li>
					<li>
						<a><img src="images/b2.png" width="62" height="62" /></a>
						<div>
							<h2>满38包邮</h2>满38包邮 免运费
						</div>
					</li>
					<li>
						<a><img src="images/b3.png" width="62" height="62" /></a>
						<div>
							<h2>天天低价</h2>天天低价 畅选无忧
						</div>
					</li>
					<li>
						<a><img src="images/b4.png" width="62" height="62" /></a>
						<div>
							<h2>准时送达</h2>收货时间由你做主
						</div>
					</li>
				</ul>
			</div>
			<div class="b_nav">
				<dl>
					<dt><a href="#">新手上路</a></dt>
					<dd><a href="#">售后流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">订购方式</a></dd>
					<dd><a href="#">隐私声明</a></dd>
					<dd><a href="#">推荐分享说明</a></dd>
				</dl>
				<dl>
					<dt><a href="#">配送与支付</a></dt>
					<dd><a href="#">货到付款区域</a></dd>
					<dd><a href="#">配送支付查询</a></dd>
					<dd><a href="#">支付方式说明</a></dd>
				</dl>
				<dl>
					<dt><a href="#">会员中心</a></dt>
					<dd><a href="#">资金管理</a></dd>
					<dd><a href="#">我的收藏</a></dd>
					<dd><a href="#">我的订单</a></dd>
				</dl>
				<dl>
					<dt><a href="#">服务保证</a></dt>
					<dd><a href="#">退换货原则</a></dd>
					<dd><a href="#">售后服务保证</a></dd>
					<dd><a href="#">产品质量保证</a></dd>
				</dl>
				<dl>
					<dt><a href="#">联系我们</a></dt>
					<dd><a href="#">网站故障报告</a></dd>
					<dd><a href="#">购物咨询</a></dd>
					<dd><a href="#">投诉与建议</a></dd>
				</dl>
				<div class="b_tel_bg">
					<a href="#" class="b_sh1">新浪微博</a>
					<a href="#" class="b_sh2">腾讯微博</a>

					<p>
						服务热线：<br />
						<span>400-123-4567</span>
					</p>
				</div>
				<div class="b_er">
					<div class="b_er_c"><img src="./images/er.jpg" /></div>
				</div>
			</div>
			<div class="btmbg">
				<div class="btm">
					备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com Copyright© 乐享网上超市 2007-2016，All Rights Reserved. 复制必究 ,
					Technical Support: Dgg Group <br />
					<img src="images/b_1.gif" />
					<img src="images/b_2.gif" />
					<img src="images/b_3.gif" />
					<img src="images/b_4.gif" />
					<img src="images/b_5.gif" />
					<img src="images/b_6.gif" /><br/>
					<div class="text">学号：1940522165<br/>姓名：徐晓权<br/>专业：计算机科学与技术</div>
				</div>
			</div>
			<!--Footer -->
		</footer>
	</body>

</html>
