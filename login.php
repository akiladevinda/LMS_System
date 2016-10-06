<?php 

	session_start();

	$username = $_POST['uname'];
	$password = $_POST['pass'];


		if($username&&$password){

			$connect = mysql_connect('localhost','root','') or die ("Couldn't connect to the database");

			mysql_select_db('account_information') or die ("Couldn't find the database");

			$query = mysql_query("SELECT * FROM student_info WHERE First_Name = $username");

			$numrows = mysql_num_rows($query);

			if($numrows!==0){
				while ($row = mysql_fetch_assoc($query)) {
					$dbusername = $row['First_Name'];
					$dbpassword = $row['Password'];

				}

				if($username==$dbusername && $password==$dbpassword){
					echo "You Logged In ! ";
					$_SESSION['First_Name'] = $username; 
				}
				else echo "Your Pass in Incorrect";


			} else die("User doesnt exsist");
			





		} esle die("enter username and password please ! ");











 ?>