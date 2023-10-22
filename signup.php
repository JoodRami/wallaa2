
<?php 
session_start();

include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<style>
		div.a{ text-align:center;
		}
		</style>
		 
		 <div class ="a">
	
		 <form action="login.php" method="post">

<div id="main" class="alt">
			<!--banner-->
	 <section>
						<div class="inner">
							<header class="major">
								<h1>  تسجيل مستخدم جديد لمتجر ولاء</h1>
							</header>
					
                                 <spane class="image main"> <img src="images/g.png"/> </spane>
								
						
						</div>
					</section>
		
     
        <form method="post" action="loginPage.php">

        <label>User name </label>
        <input type="text" name="uname" placeholder="User Name"><br>
     	<label> Password </label>
     	<input type="password" name="password1" placeholder="Password"><br>
     	<button type="submit">تسجيل المستخدم</button>  <a href="loginPage.php" class="button"> لديك حساب بالفعل؟ اضغط هنا</a>


		
                    </form>
		<?php
//insert   
if(isset($_POST['add'])){   
     
     $username= $_POST['uname'];   
  $passwordu= $_POST['password1'];     
    
$query="INSERT INTO users (user_name, password)
             VALUES ('$username','$passwordu')";
 $result = mysqli_query ($conn,$query);   
 if ($result){   
  echo "inserted done";   
     
}else {die('error');   
 }   
}   
?>
		 
		 
		

	 </div>
</body>
</html>