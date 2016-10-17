<?php 
  session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Time Tables</title>

	<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body background="bg1.jpg">


<div id="header-wrap">  

<ul>
  <li><img src="eLeraningLogo.jpg" width="300px" height="45px" border="2"></li>
  <li><a class="active-home" href="main.php">Home</a></li>
  <li><a class="active-home" href="http://www.nsbm.lk/news">News</a></li>
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
  <a href="logOutLect.php"><input type="button" class="Lgbutton" value="Logout" align="right" ></a>
  </div>

      <div id="regButton">


            <div class="notify">
           <?php 
          if (isset($_SESSION['Lec_ID'])){
            echo '<h3 style="color:#0CYF730"> Lecturer ID :'.$_SESSION['Lec_ID'].'</h3>';
          }else {
            echo '<h3 style="color:#0CF730">You are not logged in !</h3>';
          }

         ?>

         </div>
  

</ul>


<form action="addLecTimeTables.php" method="POST">

<h1 style="color:#0771F0 ; font-size: 20pt; font-family:gotham; text-align:center" >Add Time Tables</h1>
<h3 style="color:white ; font-size: 20pt; font-family:gotham">Date :</h3>
<input type="text" placeholder="date-month-year" class="lecDate" name="date" />
<h3 style="color:white ; font-size: 20pt; font-family:gotham">Module Name :</h3>
<input type="text" placeholder="Module Name" class="lecDate" name="module" />
<h3 style="color:white ; font-size: 20pt; font-family:gotham">Lecture Hall No :</h3>
<input type="text" placeholder="Hall No" class="lecDate" name="hall" /><br><br>
<input type="submit" name="sbtLec" value="Add" class="sbtLec">

 </form>



</body>
</html>