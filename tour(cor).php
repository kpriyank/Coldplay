<?php
$connect_mysql=mysqli_connect("localhost","root","root","signup");
if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$mail=$_POST['mai'];
$password=$_POST['pwd'];
$message="Incorrect Email or Password";
$ret=mysqli_query( $connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: tour(inc).php");
		}
		else {
	    	setcookie('mail', $_POST['mai'], time()+60);
            setcookie('password', $_POST['pwd'], time()+60);
			header('location: tour1.php');
		}
?>