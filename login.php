<?php 
require('db.inc.php');

if(isset($_POST['username']) && isset($_POST['password'])){
  $uname=mysqli_real_escape_string($con,$_POST['username']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $res=mysqli_query($con,"select * from employee where username='$uname' and password='$password'");
  //  $_SESSION['empid'] = $emp_id;
  $count=mysqli_num_rows($res);
  if($count>0){
    $row=mysqli_fetch_assoc($res);
    // $_SESSION['ROLE']=$row['role'];
    //   $_SESSION['empid'] = $_POST['emp_id'];
    // $_SESSION['USER_ID']=$row['id'];
    // $_SESSION['USER_NAME']=$row['name'];
    header('location:index.html');
    die();
  }else{
    $msg2="Please enter correct login details";
    echo "Incorrect login details";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  

  <link rel="stylesheet" href="header.css">
</head>
<body>

  <!logo and navi>
  <img src="logo.png" width="160" 
  height="160">
<div class="topnav">
  <a class="active" href="index.html">Home</a>
  <a href="projects.html">Projects</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a href="help.html">Help&Support</a>
  <a href="feed.html">Feedback</a>
  <a href="login.html">Login</a>
</div>

<form method="post">
    <div class="imgcontainer">
      <img src="logo.png" alt="Avatar" class="avatar" style="width: 200px">
    </div>
  
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" /> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>