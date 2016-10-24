<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","lmsTest");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$uid = $_POST['uname'];
$pwd = $_POST['pass'];


$sql = "SELECT * FROM new WHERE username='$uid' AND password='$pwd'";


$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo '<script language="javascript">';
	echo 'alert("Login Fail")';
	echo '</script>';
	header('Location:mgtLogin.php');
}else {
 	$_SESSION['username'] = $row['username'];
 	header('Location:management.php');

}







 ?>