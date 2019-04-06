<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>COLDPLAY</title>
<?php require_once "bootstrap1.php";?>
<style>
a {
    color: #2675ae;
    text-decoration: none;
}
.new{
	margin-top: 16px;
    padding: 15px 20px;
    text-align: center;
}
.head{
	
	text-align: center;
}
.login{

	margin: 0 auto;
    width: 340px;
}
label{
	color: white;
}
.bd1{

	background-color: transparent;
    font-size: 14px;
    padding: 20px;
}
.btn-primary {
    background-color: #2675aed9;
}
form label {
    display: block;
    margin-bottom: 7px;
}
input{
	margin-bottom: 15px;
    margin-top: 5px;
}
body{
	background-image: url("img/back4.png");
	background-size: auto;
	background-repeat: no-repeat;
	color: white;
}
.label-link{
	margin-left: 7em;
}
.form-control{
	background-color: #ffffffc2;
}
p{
	color: #ffffffba;

}
</style>
</head>
<body>
<div class="login">
	
	<form action="signin.php" method="POST">
		<div class="head">
			<h1><b>Sign In</b></h1>
		</div>
		<div class="bd1">
			<label for="login">Email</label>
			<input type="email" name="mai" id="login_field" class="form-control input-block" tabindex="1" autofocus="autofocus" required="Enter Email" placeholder="Enter Email ID" value="<?php 

				if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
    			echo $_COOKIE['mail'];
				}
				else
				{
					echo "";
				}

			?>">
			<label for="password">Password</label>
			<input type="password" name="pwd" id="password" placeholder="Enter Password" class="form-control form-control input-block" tabindex="2" required="Enter Password" value="<?php 

				if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
    			echo $_COOKIE['password'];
				}
				else
				{
					echo "";
				}

			?>">
			<input type="submit" name="commit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…">
			
		</div>
	</form>
	<p class="new">
		"New to site"<i>
		<a data-ga-click="Sign in, switch to sign up" href="Signup.php" style="color: white;">Create an account</a></i><br>OR<br><i>
		<a href="index.php" style="color: white;">Skip Sign In</a></i>
	</p>
</div>


</body>
</html>