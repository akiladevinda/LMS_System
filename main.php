<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>e-Learning System</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="myJS.js"></script>


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<body background="bg1.jpg" >

<div id="header-wrap">  

<ul>
  <li><img src="eLeraningLogo.jpg" width="300px" height="45px" border="2"></li>
  <li><a class="active-home" href="main.php">Home</a></li>
  <li><a class="active-news" href="#news">News</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Courses</a>
    <div class="dropdown-content">
      <a href="computing.php">Computing</a>
      <a href="#">Business</a>
      <a href="#">Engineering</a>
    </div>

  </li>

    <li class="dropdown">
    <a href="#" class="dropbtn">More</a>
    <div class="dropdown-content">
      <a href="#">Societies</a>
      <a href="#">Clubs</a>
      <a href="#">Activities</a>
    </div>

  </li>

  
  <div id="regButton">
  <a href="createAccount.php"><input type="button" class="button" value="Register" align="right"></a>
  <a href="loginForm.php"><input type="button" class="Lgbutton" value="Login" align="right" ></a>
  </div>

</ul>



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

		
</div>

<div id="login-footer">

<form action="loginConnetToMain.php" method="post">

<fieldset style="width:100px; height:250px" ><legend><h3 style="color:red">Login Here</h3></legend>
	<h4 style="color:white">Username : <br>
	<input type="text" name="uname"/><br><br>
	<h4 style="color:white">Password : <br>
	<input type="password" name="pass"><br><br>
	<input type="submit" value="Login"><br>
<a class="mainLog" href="createAccount.php">Still not have account ? Sign Up Now !</a>

</form>

</div>

<div class="normal">
   <h3 class="h3howTo">How To Use This e-Learning Site ? </h3>

              <p class="para1-howTo">                     What is e-Learning ? Ok after all firstly we move what is e learning system. 

              Quite simply, e-learning is electronic learning, and typically this means using a computer to deliver part, or all of a course whether it's in a school, part of your mandatory business training or a full distance learning course.
              In the early days it received a bad press, 
              as many people thought bringing computers into the classroom would remove that human element that some learners need, 
              but as time has progressed technology has developed, and now we embrace smartphones and tablets in the classroom and office, 
              as well as using a wealth of interactive designs that makes distance learning not only engaging for the users, 
              but valuable as a lesson delivery medium.............
               </p>    <a href="howToUse.php"><input type="submit" value="Read More" class="readMore-home"/></a>



 </div>


<div class="slider" id="main-slider">
	<div class="slider-wrapper">
		<img src="1.jpg" alt="First" class="slide" />
		<img src="2.jpg" alt="Second" class="slide" />
		<img src="3.jpg" alt="Third" class="slide" />
	</div>
</div>	







</body>
</html>