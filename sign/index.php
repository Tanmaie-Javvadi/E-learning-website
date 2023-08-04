<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		p4{
  padding: 60px;
  text-align: center;
  color: BLACK;
  font-size: 30px;
	}
	</style>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
     Welcome to my project page

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div>
	<p4><br>Get Started with excited courses for free with Excellent Guidance!!!!</p4>
	<a href="courses.html" class="btn started course-btn">Start Courses</a><br><br>
	<a href="elearning.html" class="btn started course-btn">Back to Home </a>
    </div>
</body>
</html>