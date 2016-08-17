<?php

?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
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
	<title>My Profile | girl unity</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">


 	<script type='text/javascript'>
	(function() { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//d2yy16lkdmfg04.cloudfront.net/resource/chat.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
	})(); window.embeddedChatAsyncInit = function() { embeddedChat.init("8081"); }
	</script>
</head>
<body>

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


<div class="form">
<h1>girl unity</h1>
<h3><?php echo $_SESSION['username']; ?>'s Profile</h3>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Both video chat and messaging are available.</p>

<p>If the webcam is not working, either change your browser to Firefox or click <a href="https://appear.in/girl-unity">here.</a></p>
</div>
<iframe src="https://appear.in/girl-unity" width="800" height="640" frameborder="0"></iframe>

<div class="embedded-chat" style="height: 500px; width: 500px;" ></div>

<div class="container">
<p><a href="index.php">Dashboard</a></p>
<p id="footerSep"><a href="logout.php">Logout</a></p>
</div>

		<footer class="container-fluid text-center" id="bottom">
		  <p id="contact">Contact Us: <a href="mailto:girlunity.contact@gmail.com">girlunity.contact@gmail.com</a></p> 
		  <ul>Elizabeth Song</ul>
		  <ul>Katrina Sarango</ul>
		  <ul>Suchita Mistry</ul>
		  <ul><a id="nolink" href="aboutus_funny.html">Girl Unity™ 2016</a></ul>
		</footer>
</body>
</html>
