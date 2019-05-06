<?php
session_start();
	$connect_mysql=mysqli_connect("localhost","root","root","form");

	if(!$connect_mysql)
	{
	    alert("Connection Failed" . mysqli_connect_error());
	}

	$mail=$_POST['emai'];
	$password=$_POST['pass'];
	//$msg="";


	$result=mysqli_query( $connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password' ");
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) {

				$_SESSION["mail"] = $row[email];;
				$_SESSION["password"] = $row[pass];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (20*60) ;
				/*echo "<script type='text/javascript'>alert('$message');</script>";
				header("Location: Inc(Signin).php");*/
			}
				setcookie('mail', $_POST['emai'], time()+60);
	            setcookie('password', $_POST['pass'], time()+60);

				header('location: home.html');
			}
			else{
				//$message = "Invalid Username or Password!";
				header("Location:practical2.html");
			}
			
?>