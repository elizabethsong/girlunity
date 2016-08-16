<?php

?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Profile | girl unity</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">

 
</head>
<body>
<div class="form">
<h1>girl unity</h1>
<h3><?php echo $_SESSION['username']; ?>'s Profile</h3>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<a href="message.php">Want to message someone instead?</a>
<p>If the webcam is not working, either change your browser to Firefox or click <a href="https://appear.in/girl-unity">here.</a></p>
</div>
<iframe src="https://appear.in/girl-unity" width="800" height="640" frameborder="0"></iframe>

<div class="container">
<p><a href="index.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
