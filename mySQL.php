<?php 

	$conn = mysqli_connect("localhost","root","","LMS_Student");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}



 ?>