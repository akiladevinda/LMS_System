<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","lecturerLogin");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$uid = $_POST['uname'];
$pwd = $_POST['pass'];


$sql = "SELECT * FROM login WHERE Lec_ID='$uid' AND Password='$pwd'";


$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo '<script language="javascript">';
	echo 'alert("Login Fail")';
	echo '</script>';
	header('Location:lecturerLogin.php');
	
}else {
 	$_SESSION['Lec_ID'] = $row['Lec_ID'];
 	header('Location:addTimeTables.php');

}







 ?>