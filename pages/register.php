<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<!-- PHP code - Andrew -->
<?php
   $vars = array("name", "ari", "dep","cell","space","description");
   $con = mysqli_connect("localhost","root","root","test");
   if (!$con) {
   	// Database could not be opened
   	echo "<b>Database could not be opened</b>";
   }
   else
   {
   		// The form variables, use only what is set and decode any < > symbols
   		for ($i = 0; $i < sizeof($vars); $i++)
   		{
   			if (isset($_POST[$vars[$i]]))
   			{
   			    $text =  htmlspecialchars_decode($_POST[$vars[$i]]);
    	 	    printf("%s: $vars[$i] - %s<br />",$i, $text);
   			}	
   		}			
  
   		mysqli_close($con);
   	}
?>

<html>
	<head>
		<title>Register - George</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="../index.html">Register Flight Page</a></strong> Input</h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li><a href="market.html">Market</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<div class="header-profile">
							<a href="member.html"><img src="../images/smiling-baby.jpg" class="img-circle" height="60" width="60"></a>
						</div>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<div class="checkout-page">
				<section id="main" class="wrapper">
					<div class="container">

						<header class="major special">
							<h2>Register Page</h2>
							<p>User Input</p>
						</header>

						<form method="post" action="#">
							<div class="row uniform 50%">

								<!-- Line 1 -->
								<div class="1u 12$(xsmall)">
									<p>Name*:</p>
								</div>
								<div class="3u 12$(xsmall)">
									<input type="text" name="name" id="name" value="" placeholder="" />
								</div>

								<div class="1u 12$(xsmall)"></div>

								<div class="2u 12$(xsmall)">
									<p>Depart -&gt; Arrival*:</p>
								</div>

								<div class="2u 12$(xsmall)">
									<input type="text" name="dep" id="dep" value="" placeholder="" />
								</div>

								<div class="0.5u 12$(xsmall)"><p>-&gt;</p></div>

								<div class="2u$ 12$(xsmall)">
									<input type="text" name="ari" id="ari" value="" placeholder="" />
								</div>


								<!-- Line 2 -->
								<div class="1u 12$(xsmall)">
									<p>Date*:</p>
								</div>
								<div class="2u 12$(xsmall)">
									<p>Implement Datepicker</p>
								</div>

								<div class="3u 12$(xsmall)"></div>

								<div class="1u 12$(xsmall)">
									<p>Cell:</p>
								</div>

								<div class="2u$ 12$(xsmall)">
									<input type="text" name="cell" id="cell" value="" placeholder="" />
								</div>


								<!-- Line 3 -->
								<div class="1u 12$(xsmall)">
									<p>Space:</p>
								</div>
								<div class="2u 12$(xsmall)">
									<input type="text" name="space" id="space" value="" placeholder="" />
								</div>

								<div class="3u 12$(xsmall)"></div>

								<div class="1u 12$(xsmall)">
									<p>Price:</p>
								</div>

								<div class="2u$ 12$(xsmall)">
									<input type="text" name="price" id="price" value="" placeholder="" />
								</div>

								<div class="2u$">
									<p>Description</p>
								</div>
								<div class="12u$">
									<textarea name="description" id="description" placeholder="" rows="6"></textarea>
								</div>


							</div>

						<div class="checkout-button">
								<div class="row uniform 50%">
									<div class="12u$">
										<ul class="actions">
											<li><input class="button special" type="submit"></li>
										</ul>
									</div>
								</div>
						</div>
				</form>
					<!-- <a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a> -->
					</div>
				</section>
			</div>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
						<li><a href="#" class="icon fa-github"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; George</li>
						<!-- <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li> -->
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
