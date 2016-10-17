<?php 
	
	$date = $_POST['date'];
	$module=$_POST['module'];
	$hall=$_POST['hall'];


	$conn = mysqli_connect("localhost","root","","timeTables");
	$sql = "INSERT INTO times 
			VALUES ('$date','$module','$hall')";

	$res = mysqli_query($conn,$sql);


header("location:addTimeTables.php");
 ?>