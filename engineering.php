<?php 
	session_start();
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Engineering</title>

	<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body background="eng1.jpg" >


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



<h1 style="color:#0771F0 ; font-size: 20pt; font-family:gotham; text-align:center" >Course : Engineering Technology </h1>





<div class="container">


<script>

function showDiv1() {
   document.getElementById('article').style.display = "block";
}

function emptyDiv() {
   document.getElementById('article').style.display = "none";
}

function showDiv2() {
   document.getElementById('article2').style.display = "block";
}

function emptyDiv2() {
   document.getElementById('article2').style.display = "none";
}




</script>

  
<nav>
  <ul>
    <li><input type="button" class="buttonCom" value="Add Notes" align="right" onclick="showDiv1()"></li><br><br><br><br>
    <a href="viewEngNotes.php" class="linkToview">View Notes</a>
  </ul>
</nav>

<div id="article" >

  <form action="addEngNotes.php" method="POST">
   <input type="text" placeholder="Title Here" class="noteTitle" name="noteTitle" /><br><br>
  <textarea class="txt" placeholder="Enter Your Notes" name="txtArea"></textarea>
  

  <div id="upload">
    Upload Files/Images : <br>
      <input type="file" value="Upload Here" name="file1"/><br>
      <input type="file" value="Upload Here" name="file2"/><br>
      <input type="file" value="Upload Here" name="file3"/><br>
      <input type="file" value="Upload Here" name="file4"/><br><br><br>


      Username : <input type="text" name="username"  class="idNo" /><br>

  </div>
        <input type="submit" value="Add Note" name="submit" class="addBtn"/>

        <input type="reset" value="Exit Adding Notes" name="cancel" class="addBtn" onclick="emptyDiv()" />

  </form>

</div>



<div id="article2" >


  <form action="#" method="POST">
  <h3 style="color:gray; font-size:30px; text-align:center; font-family:verdana">Your Notes</h3>
  


        <input type="reset" value="Exit Viewing" name="cancel" class="addBtn" onclick="emptyDiv2()" />
        
  </form>

</div>






</body>
</html>