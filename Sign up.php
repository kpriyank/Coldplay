<?php
$connect_mysql=mysqli_connect("localhost","root","root","signup");

echo("Hello");

if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$name=$_POST['first'];
$mail=$_POST['mail'];
$password=$_POST['pwd1'];

$sql="INSERT INTO user(name,mail,password) values('$name','$mail','$password')";
if($connect_mysql->query($sql) == TRUE)
{
    echo("Insertion Successful");
    header("Location:Sign in.php");
}
else
{
    echo("Something went wrong");
    header("Location:emailsignup.php");
}
?>