<?php 

	$noteTitle = $_POST['noteTitle'];
	$txtArea = $_POST['txtArea'];
	$file1 = $_POST['file1'];
	$file2 = $_POST['file2'];
	$file3 = $_POST['file3'];
	$file4 = $_POST['file4'];
	$username = $_POST['username'];

	$conn = mysqli_connect("localhost","root","","mngNotes");
	$sql = "INSERT INTO notes(Title,TextArea,file1,file2,file3,file4,username) 
			VALUES ('$noteTitle','$txtArea','$file1','$file2','$file3','$file4','$username')";

	$res = mysqli_query($conn,$sql);


header("location:management.php");
 ?>