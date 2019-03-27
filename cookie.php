<?php
$connect_mysql=mysqli_connect("localhost","root","root","signup");
if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$mail=$_POST['mai'];
$password=$_POST['pwd'];
$ret=mysqli_query( $connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
    
    if ($row) {    
        header('Location: Sign in.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['mail'];
    }
    
} else {
    header('Location: Sign in.php');
}
?>