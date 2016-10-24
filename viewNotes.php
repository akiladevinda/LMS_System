<?php 
  session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Computing</title>

	<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body background="computing.jpg">


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
      <a href="http://lms.nsbm.lk/mod/resource/view.php?id=5655&subdir=/Computing">Class Time Tables</a>
      <a href="#">Societies</a>
      <a href="#">Clubs</a>
      <a href="#">Activities</a>
    </div>

  </li>

    <div id="regButton">
  <a href="logOut.php"><input type="button" class="Lgbutton" value="Logout" align="right" ></a>
  </div>

      <div id="regButton">


            <div class="notify">
           <?php 
          if (isset($_SESSION['username'])){
            echo '<h3 style="color:#0CYF730"> Your Logged Username :'.$_SESSION['username'].'</h3>';
          }else {
            echo '<h3 style="color:#0CF730">You are not logged in !</h3>';
          }

         ?>

         </div>
  

</ul>



<h1 style="color:#0771F0 ; font-size: 20pt; font-family:gotham; text-align:center" >Course : Computing [Information Technology]</h1>


<nav>
  <ul>
    <li><a href="computing.php"><input type="button" class="buttonCom" value="Add Notes" align="right"></a></li><br><br><br><br>
    <a href="viewNotes.php" class="linkToview">View Notes</a>
  </ul>
</nav>


<?php


$sql = "SELECT * FROM notes";

$link=mysqli_connect('localhost','root','','addnotes');

$data = mysqli_query($link,$sql);



while ( $row = mysqli_fetch_array($data) )
{

   echo '<textarea name="txtArea"  rows="30" cols="30" style="background-color:#C4E0F3; color:black; ">'.$row[1].'-------------------'.$row[2].'</textarea>';
 

}






 ?>



</body>
</html>