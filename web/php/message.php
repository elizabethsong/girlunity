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
	<link rel="stylesheet" href="../css/demo.css" />
	<link rel="stylesheet" href="../css/style2.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">

 
</head>
<body>
<div class="form">
<h1>girl unity</h1>
<h3><?php echo $_SESSION['username']; ?>'s Messaging Chat</h3>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Start chatting!</p>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57a9f99937f9b71822fbf032/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="container">
<a href="dashboard.php">Profile</a>
<p><a href="index.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>

