<?php 

include 'mySQL.php';

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['pass'];

$sql = "INSERT INTO newStudent (first_name,last_name,username,password,email) 
VALUES ('$firstName','$lastName','$username','$password','$email')";

$result = mysqli_query($conn,$sql);

header('location:createAccount.php');




 ?>