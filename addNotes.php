<?php 

	$noteTitle = $_POST['noteTitle'];
	$txtArea = $_POST['txtArea'];
	$file1 = $_POST['file1'];
	$file2 = $_POST['file2'];
	$file3 = $_POST['file3'];
	$file4 = $_POST['file4'];
	$idNo = $_POST['idNo'];

	$conn = mysqli_connect("localhost","root","","addNotes");
	$sql = "INSERT INTO notes(Title,TextArea,file1,file2,file3,file4,userID) 
			VALUES ('$noteTitle','$txtArea','$file1','$file2','$file3','$file4','$idNo')";

	$res = mysqli_query($conn,$sql);


header("location:computing.php");
 ?>