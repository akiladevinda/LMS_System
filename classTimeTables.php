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
      <a href="computingLogin.php">Computing</a>
      <a href="mgtLogin.php">Business</a>
      <a href="engLogin.php">Engineering</a>
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

  </ul>
  </div>

<h1 style="color:#0771F0 ; font-size: 20pt; font-family:gotham; text-align:center" >Time Tables</h1>

<?php


$sql = "SELECT * FROM times";

$link=mysqli_connect('localhost','root','','timeTables');

$data = mysqli_query($link,$sql);



while ( $row = mysqli_fetch_array($data) )
{

   echo '<h3> Date : '.$row[0].'</h3>';
   echo '<br>';
   echo '<h3> Mdoule Name : '.$row[1].'</h3>';
   echo '<br>';
   echo '<h3> Lecture Hall : '.$row[2].'</h3>';

   echo '<hr>'; 

}






 ?>


  </body>
  </html>