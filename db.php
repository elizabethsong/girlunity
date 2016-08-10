
<?php
 
$connection = mysqli_connect('localhost', 'esong', 'Es100601%', 'register');
//$connection = mysqli_connect('localhost', 'root', '', 'register');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Change database to "register" if needed
//mysqli_select_db($connection,'register');



/*
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('register');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
*/

?>