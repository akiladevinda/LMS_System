<?php 
//process input
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  

//making sql
  $sql="INSERT INTO student_info(First_Name,Last_Name,Email,Password) VALUES('$fname','$lname','$email','$pass')";

//connect the database
  $link=mysqli_connect('localhost','root','','account_information');

//to complete
  $res=mysqli_query($link,$sql);













 ?>