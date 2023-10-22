<?php 
session_start();

include "db_conn.php";
//if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
//}

 ?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html dir="rtl">
	<head>
		<title>مأكولات</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
					<a href="index.php" class="logo"><h1> أهلاً <?php echo $_SESSION['user_name']; ?></h1> <span></span></a>
						<nav>
							<a href="#menu">القائمة</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							
							<li><a href="beauty.php">مستلزمات تجميل</a></li>
							<li><a href="care.php">عناية</a></li>
                               <li><a href="abayas.php">عبايات</a></li>
                              <li><a href="crafts.php">اعمال يدوية</a></li>
                                                       <li><a href="aacories.php">اكسسوارات</a></li>
							<li><a href="elements.php">اسأل سؤال</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="loginPage.php" class="button primary fit">تسجيل دخول</a></li>
							<li><a href="#" class="button fit">مستخدم جديد</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/food2.png" alt="" />
							</span>
							<header class="major">
								<h1>مأكولات</h1>
							</header>
							<div class="content">
								<h4>تم انتقاؤهم لجودتهم العالية</h4>
								
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										
									</header>
									
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
									<a href="generic.php" class="image">
										<img src="images/Ghsoon.jpg" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h2>غصون العنب</h2>
											</header>
											<h4>ألذ ورق عنب في مكة</h4>
											<ul class="actions">
												<li><a href="https://instagram.com/qson_enab?igshid=MzRlODBiNWFlZA==" class="button">حساب الانستجرام</a></li>
												<form action="comments.php" method="post">
	 <button type="submit"  name="add" onclick="add()">إضافة التعليق</button>
								</form>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.php" class="image">
										<img src="images/snak.jpg" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h2>Snack Attack</h2>
											</header>
											<h4> صنع بحب </h4>
											<ul class="actions">
												<li><a href="https://instagram.com/snack__attack1?igshid=MzRlODBiNWFlZA==" class="button">حساب الانستجرام</a></li>
												<form action="comments.php" method="post">
	 <button type="submit"  name="add" onclick="add()">إضافة التعليق</button>
								</form>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.php" class="image">
										<img src="images/san.jpg" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h2>سان باستري</h2>
											</header>
											<h4> صنع بحب </h4>						<ul class="actions">
												<li><a href="https://instagram.com/sanpastry?igshid=MzRlODBiNWFlZA==" class="button">حساب الانستجرام</a></li>
											
												<form action="comments.php" method="post">
	 <button type="submit"  name="add" onclick="add()">إضافة التعليق</button>
								</form>
											</ul>
										</div>
									</div>
								</section>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="inner">
									
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
					
	 
							</section>
							<section class="split">
								<section>
								
									</div>
								</section>
							</section>
						</div>
					</section>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>