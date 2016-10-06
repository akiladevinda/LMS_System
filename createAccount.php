<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>

	<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body background="bg.jpg">
<div id="header-wrap">  

<ul>
  <li><img src="eLeraningLogo.jpg" width="300px" height="45px" border="2"></li>
  <li><a class="active-home" href="main.html">Home</a></li>
  <li><a class="active-home" href="#news">News</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Courses</a>
    <div class="dropdown-content">
      <a href="computing.html">Computing</a>
      <a href="#">Business</a>
      <a href="#">Engineering</a>
    </div>
  </li>

  <div id="regButton">
  <a href="loginForm.php"><input type="button" class="Lgbutton" value="Login" align="right" ></a>
  </div>



</ul>

<h2 style="color:#8DEA9B ; font-size: 30pt; font-family:gotham; text-align:center" >Just Few Steps ! Create Account Here</h2>

<form method="post" action="newStudentAdding.php">

<p><span class="error">* Required Field.</span></p>
	<h3 style="color:white; font-family:verdana">First Name : </h3><br>
		<input type="text" name="fname" style="font-size: 20pt"/>

			<span class="error">* </span><br><br>

	<h3 style ="color:white; font-family:verdana">Last Name : </h3>
		<input type="text" name="lname" style="font-size: 20pt"/><br><br>	

	<h3 style ="color:white; font-family:verdana">Email     : </h3>
		<input type="text" name="email" style="font-size: 20pt"/>

			<span class="error">* </span><br><br>

	<h3 style ="color:white; font-family:verdana">Username  :</h3><br>
		<input type="text" name="uname" style="font-size: 20pt"/>

			<span class="error">* </span><br><br>

	<h3 style ="color:white; font-family:verdana">Password  :</h3><br>
		<input type="password" name="pass" style="font-size: 20pt"/>

			<span class="error">* </span><br><br>

			
	<input type="submit" class="createButton" value="Create">

	
</form>


</body>
</html>