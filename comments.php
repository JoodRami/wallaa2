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
		<title>التعليقات</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
                    <a href="index.php" class="logo"><h1> أهلاً <?php echo $_SESSION['user_name']; ?></h1> <span></span></a>
						<nav>
							<a href="#menu">القائمة</a>
						</nav>
					</header>

				<!-- Menu -->
				<nav id="menu">
						<ul class="links">
						<li><a href="foods.php">مأكولات</a></li>
							<li><a href="beauty.php">مستلزمات تجميل</a></li>
							<li><a href="care.php">عناية</a></li>
                             <li><a href="abayas.php">عبايات</a></li>
                             <li><a href="crafts.php">اعمال يدوية</a></li>
                            <li><a href="aacories.php">اكسسوارات</a></li>
							<li><a href="elements.php">اسأل سؤال</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="loginPage.php" class="button primary fit">تسجيل دخول</a></li>
							<li><a href="signup.php" class="button fit">مستخدم جديد</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
						<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1> التعليقات</h1>
							</header>
							<div class="content">
								<h3>متجر ولاء لدعم الاسر المنتجة</h3>
                                               <spane class="image main"> <img src="images/g.png"/> </spane>
								
								<ul class="actions">
									
								</ul>
							</div>
						</div>
					</section>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
                        <section>
                            <section id="contact">
						<div class="inner">
							<section>
                            <form action="comments.php" method="post">
                            <button type="submit"  name="show" >عرض التعليقات</button> <br><br>
</form>
                            <?php
 
 if(isset($_POST['show'])){   
  $query = 'select * from users';   
  $result = mysqli_query($conn, $query);   
     
  if ($result){   
  echo ' تم البحث بنجاح';   
  echo '<table border ="3">   
     
      
  
  <th>STORE</th>   
  <th>COMMENT</th>  
  ';   
  while ($row =mysqli_fetch_row($result)){   
      
   ECHO '<tr>   
  
   <td>'.$row[3].'</td>    
   <td>'.$row[2].'</td> 
   </tr>';   
  }   
  }   
   else{   
       
    die('error'.mysqli_error($conn));   
   }    
  }   
  ?>




							<form action="comments.php" method="post">
	 <button type="submit"  name="add" onclick="add()">إضافة التعليق</button>
	 <div id="myDIV1"> 
	 
	 إسم المستخدم:<input type="text"  name="user_name1" placeholder ="  اسم المستخدم هنا" ><br><br>   
     الرأي<input type="text"              name="comment1" placeholder ="ادخل رأيك هنا" ><br><br>   
     اسم المتجر الذي تود التعليق عنه<input type="text"  name="store_name1" placeholder ="اسم المتجر هنا" ><br><br>   
</form>
	 </div>
	 <?php
	 if(isset($_POST['add'])){   
     
     $username= $_POST['user_name1'];   
  $comment1= $_POST['comment1'];   
  $store= $_POST['store_name1'];    
    
$query="INSERT INTO users (user_name, comment, store_name)
             VALUES ('$username','$comment1','$store')";
 $result = mysqli_query ($conn,$query);   

}
 ?>
							</section>
							

				

			</div>

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