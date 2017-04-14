<?php
  // check if logged in, if not redirect
  session_start();
  if(!isset($_SESSION['login_user'])){
	header("Location:usr-login.php");
  }
  include 'register_form.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>登记航班 - Otto带物</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />	
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
		    var j = jQuery.noConflict();
		    j( function() {
		        j( "#datepicker" ).datepicker({dateFormat: "yy-m-d"});
		    } );
		</script>
	</head>

	<body>
		<!-- Header -->
			<header id="header">
				<h1><strong><a href="../index.php">Otto首页</a></strong> 登记航班</h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.php">首页</a></li>
						<li><a href="register.php">登记航班</a></li>
						<li><a href="search.php?filter=publishdate">航班表</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="welcome.php">会员登录</a></li>
						<!--<div class="header-profile">
							<a href="member.html"><img src="../images/smiling-baby.jpg" class="img-circle" height="60" width="60"></a>
						</div>-->
					</ul>
				</nav>
			</header>


		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
		<div class="checkout-page">
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>登记航班</h2>
					</header>

					<form method="post" action="register.php#">
						<div class="row uniform 50%">

								<!-- Line 1 -->
							<div class="1u 12$(xsmall)">
								<p>联系人*:</p>
							</div>
							<div class="3u 12$(xsmall)">
								<input type="text" name="name" id="name" placeholder="" required/>
							</div>

							<div class="1u 12$(xsmall)"></div>
							<div class="2u 12$(xsmall)">
								<p>出发地 -&gt; 目的地*:</p>
							</div>

							<div class="2u 12$(xsmall)">
								<div class="select-wrapper">
									<select name="dep" id="dep" required>
										<option disababled selected value>- 出发地 -</option>
										<option value="toronto">多伦多 Toronto</option>
										<option value="markham">万锦 Markham</option>
										<option value="mississauga">密市 Mississauga</option>
										<option value="northyork">北约克 North York</option>
									</select>
									</div>
							</div>

							<div class="0.5u 12$(xsmall)"><p>-&gt;</p></div>
							<div class="2u$ 12$(xsmall)">
								<div class="select-wrapper">
									<select name="ari" id="ari" required>
										<option disabled selected value>- 目的地 -</option>
										<option value="北京">北京</option>
										<option value="上海">上海</option>
										<option value="广东">广东</option>
										<option value="香港">香港</option>
										<option value="重庆">重庆</option>
										<option value="天津">天津</option>
										<option value="澳门">澳门</option>
										<option disabled>- 拼音排序 -</option>
										<option value="安徽">安徽</option>
										<option value="福建">福建</option>
										<option value="贵州">贵州</option>
										<option value="河北">河北</option>
										<option value="黑龙江">黑龙江</option>
										<option value="河南">河南</option>
										<option value="湖北">湖北</option>
										<option value="湖南">湖南</option>
										<option value="海南">海南</option>
										<option value="广西">广西</option>
										<option value="甘肃">甘肃</option>
										<option value="吉林">吉林</option>
										<option value="江苏">江苏</option>
										<option value="江西">江西</option>
										<option value="辽宁">辽宁</option>
										<option value="内蒙古">内蒙古</option>
										<option value="宁夏">宁夏</option>
										<option value="青海">青海</option>
										<option value="陕西">陕西</option>
										<option value="山西">山西</option>
										<option value="山东">山东</option>
										<option value="四川">四川</option>
										<option value="西藏">西藏</option>
										<option value="新疆">新疆</option>
										<option value="云南">云南</option>
										<option value="浙江">浙江</option>
									</select>
								</div>
							</div>

							<!-- Line 2 -->
							<div class="1u 12$(xsmall)">
								<p>日期*:</p>
							</div>
							
							<div class="3u 12u$(xsmall)">
								<div class="select-wrapper">
									<input name="datepicker" id="datepicker" type="text" required/>
								</div>
							</div>

							<div class="3u 12$(xsmall)"></div>
							<div class="1u 12$(xsmall)">
								<p>电话:</p>
							</div>

							<div class="2u$ 12$(xsmall)">
								<input type="text" name="cell" id="cell" placeholder="" />
							</div>


							<div class="2u$">
								<p>介绍：</p>
							</div>
							<div class="12u$">
								<textarea name="description" id="description" placeholder="请输入航班，联系方式，微信号，可用空间，价位等信息。" rows="6"></textarea>
							</div>
						</div>

						<input class="button special" type="submit" value="提交">

						<!--
						<div class="checkout-button">
							<div class="row uniform 50%">
								<div class="12u$">
									<ul class="actions">
										<li><input class="button special" type="submit"></li>
									</ul>
								</div>
							</div>
						</div> -->
					</form>

					<form action="../index.php">
						<input class="button special" type="submit" value="回到首页">
					</form>
				</div>
			</section>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<ul class="copyright">
					<li>&copy; Otto Group</li>
				</ul>
			</div>
		</footer>

		<!-- Scripts -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/skel.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>

	</body>
</html>
