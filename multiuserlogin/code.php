<?php
session_start();

require_once('connection.php');
$message="";
$role="";

if(isset($_POST["btnLogin"])){
	
	$username=$_POST["username"];
    $password=$_POST["password"];
	

	$sqle="SELECT * FROM user WHERE Username='$username' AND Password='$password'";
	
	$result =mysqli_query($conn,$sqle);
	
	if(mysqli_num_rows($result) > 0 ){
		
		while($row=mysqli_fetch_assoc($result))
		{ 
		if($row["Role"] == "admin"){
			$_SESSION['LoginUser'] = $row["Username"];
			$_SESSION['role'] = $row["Role"];
			header('Location: admin.php');
			
		}
		else
		{
			$_SESSION['LoginUser'] = $row["Username"];
			$_SESSION['role'] = $row["Role"];
			header('Location: user.php');
			
		}
	
		}
	}
	else{
	
	header('Location: index.php');
	}
	
}


?>