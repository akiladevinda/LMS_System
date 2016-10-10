<?php 
  session_start();
 ?>


<!DOCTYPE html>
<html>
<head>

	<title>How To ?</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="myJS.js"></script>


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<body background="bg1.jpg" >

<div id="header-wrap">  

<ul>
  <li><img src="eLeraningLogo.jpg" width="300px" height="45px" border="2"></li>
  <li><a class="active-home" href="main.php">Home</a></li>
  <li><a class="active-news" href="http://www.nsbm.lk/news">News</a></li>
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
      <a href="http://lms.nsbm.lk/mod/resource/view.php?id=5655&subdir=/Computing">Class Time Tables</a>
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

<h2 class="h2-howToPage"> How To Use This e-Learning Site ? </h2> <br><br>

<h3 class="h3-eLearning">What is e-Learning ?</h3><br><br>
<p class="para1-elearning">          Quite simply, e-learning is electronic learning, and typically this means using a computer to deliver part, or all of a course whether it's in a school, part of your mandatory business training or a full distance learning course.

In the early days it received a bad press, as many people thought bringing computers into the classroom would remove that human element that some learners need, but as time has progressed technology has developed, and now we embrace smartphones and tablets in the classroom and office, as well as using a wealth of interactive designs that makes distance learning not only engaging for the users, but valuable as a lesson delivery medium.


Building partnerships with quality training providers, and combining this with a dedicated experienced technical team and support staff, Virtual College provides the perfect blended learning environment, offering anyone the chance to take their online training to the next level. </p>


            <h3 class="h3-eLearning">How to use ? Step by step ... </h3><br><br>

            <h4 class="h4-eLearning">(1) Click on 'Register' and go to this page </h4><br><br><br>

            <img src="1.PNG" width="1200px" height="700px" >

            <br><br><br><h4 class="h4-eLearning">(2) Fill the above form and complete the regitration ! </h4><br><br><br>

            <h4 class="h4-eLearning">Then you will redirect to Login page !  </h4><br><br><br>

            <img src="2.PNG" width="1200px" height="700px" >

            <br><br><br><h4 class="h4-eLearning">(3) Provide your username and password to Login & Select your course under 'Courses' menu </h4><br><br><br>

            <img src="3.PNG" width="1200px" height="700px" > <br><br><br><br><br><br>

            <h4 class="h4-eLearning">(4) After that you can add notes..view them or delete them !! </h4><br><br><br>

            <img src="5.PNG" width="1200px" height="700px" >

  



</body>
</html>