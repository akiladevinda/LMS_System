<?php 


include 'mySQL.php';

$username = $_POST['uname'];
$password = $_POST['pass'];


$sql = "SELECT * FROM newStudent WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "Usrename or pass incorrect ";
}else {
 	echo "Logged In";

}
header('Location: createAccount.php');




 ?>