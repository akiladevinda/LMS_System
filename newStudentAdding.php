<?php 


	$conn = mysqli_connect("localhost","root","","lmsTest");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$first = $_POST['fname'];
$last = $_POST['lname'];
$email=$_POST['email'];
$uid = $_POST['uname'];
$pwd = $_POST['pass'];


	$sql = "INSERT INTO new (firstname,lastname,email,username,password)  VALUES ('$first','$last','$email','$uid','$pwd')";



	$result = mysqli_query($conn,$sql);

	header("location:loginForm.php");






 ?>