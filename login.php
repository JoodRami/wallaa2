
<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	 //  $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);



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



	if (empty($uname)) {
		header("Location: loginPage.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginPage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {   
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: loginPage.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: loginPage.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginPage.php");
	exit();
}






?>
