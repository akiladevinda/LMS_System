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
  <li><a class="active-home" href="main.php">Home</a></li>
  <li><a class="active-home" href="http://www.nsbm.lk/newss">News</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Courses</a>
    <div class="dropdown-content">
      <a href="computing.php">Computing</a>
      <a href="management.php">Business</a>
      <a href="engineering.php">Engineering</a>
    </div>
 </li>

     <li class="dropdown">
    <a href="#" class="dropbtn">More</a>
    <div class="dropdown-content">
      <a href="classTimeTables.php">Class Time Tables</a>
      <a href="#">Societies</a>
      <a href="#">Clubs</a>
      <a href="#">Activities</a>
    </div>

  </li>

    <li class="dropdown">
    <a href="lecturerLogin.php" class="dropbtn">Lecturer Area</a>
  </li>

  

    <div id="regButton">

  <a href="logOut.php"><input type="button" class="Lgbutton" value="Log Out" align="right" ></a>

  </div>

</ul>

		            <div class="notify">
           <?php 
          if (isset($_SESSION['username'])){
            echo '<h3 style="color:#0CYF730"> Your Logged Username :'.$_SESSION['username'].'</h3>';
          }else {
            echo '<h3 style="color:#0CF730">You are not logged in !</h3>';
          }

         ?>

         </div>

<div class="accLog">
<form method="post" action="loginConnect.php">

	<h3 style="color:white; font-family:verdana">Username : </h3><br>
	<input type="text" name="uname" style="font-size: 20pt"/><br><br>
	<h3 style="color:white; font-family:verdana">Password : </h3><br>
	<input type="password" name="pass" style="font-size: 20pt"/><br><br>
	<input type="submit" class="loginButton" value="Login">

</form>



</div>






</body>
</html>