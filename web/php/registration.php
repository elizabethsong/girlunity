<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration for Mentors | girl unity</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">

</head>
<body>
<?php
	require('db.php');

    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){


        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($connection, $username);
		$email = stripslashes($email);
		$email = mysqli_real_escape_string($connection, $email);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($connection, $password);
		$trn_date = date("Y-m-d H:i:s");
        
        

        
        // Check username availability.
        $query = "SELECT username FROM users WHERE username = '$username';";
        $result_login = mysqli_query($connection,$query);
        $anything_found = mysqli_num_rows($result_login);

        if($anything_found>0)
        {
            echo "<div class='form'> <h3>Username taken. </h3><br/> Click here to <a href='javascript:history.go(-1)'>return.</a></div>";
            return false;  
        }
        else 
        { 
            $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
            //echo($query);
            $result = mysqli_query($connection, $query);
            if($result){
                echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>login.</a></div>"; 
            } 
        }

    
    }else{
?>


<h1>girl unity</h1> 
<img id="lightbulb" src="../images/faviconteal2.png" alt="girl unity Lightbulb"> 
<h3>Registration (Mentor)</h3>
<div class="form">

<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />


</form>

<p>Register as a mentee instead? <a href='registrationMentee.php'>Register Here</a></p>
<p>Already registered? <a href='login.php'>Log In Here</a></p>
</div>
<?php } ?>
</body>
</html>
