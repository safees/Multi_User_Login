<!-- In here we are creating connection with database -->

<?php

$conn=mysqli_connect("localhost","root","","multi_user_login");

if(!$conn){
	
	echo"Connection Error";
}

?>