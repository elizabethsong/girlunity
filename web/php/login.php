<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap php.">
    <meta name="author" content="www.girlunity.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


	<meta charset="utf-8">
	<title>Login | girl unity</title>
	<link rel="stylesheet" href="../css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($connection,$username);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($connection,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($connection,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<!-- Navbar -->
		<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" id="name" href="../index.html"><img style="width: 72px;" src="../images/faviconteal2.png" alt="girl unity Lightbulb">girl unity</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="../index.html">HOME</a></li>
		        <li><a href="../index.html#mission">MISSION</a></li>
		        <li><a href="../aboutus.html">ABOUT US</a></li>
		        <li><a href="dashboard.php">MY PROFILE</a></li>
		        <li><a href="mailto:girlunity.contact@gmail.com">CONTACT</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>


<h1>girl unity</h1> 
<img id="lightbulb" src="../images/faviconteal2.png" alt="girl unity Lightbulb"> 
<h3>Log In</h3>

<div class="form">
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>

<p id="footerSep">Not registered yet? Register As: <a href='registration.php'>A Mentor</a> | <a href='registrationMentee.php'>A Mentee</a></p>

</div>

		<footer class="container-fluid text-center" id="bottom">
		  <p id="contact">Contact Us: <a href="mailto:girlunity.contact@gmail.com">girlunity.contact@gmail.com</a></p> 
		  <ul>Elizabeth Song</ul>
		  <ul>Katrina Sarango</ul>
		  <ul>Suchita Mistry</ul>
		  <ul><a id="nolink" href="aboutus_funny.html">Girl Unity™ 2016</a></ul>
		</footer>

<?php } ?>
</body>
</html>
