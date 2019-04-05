<?php
 session_start();
 if (isset($_SESSION['mail'])) {
  
    $now = time();
 // checking the time now when home page starts
 
 if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
        header("Location:signexp.php");
 
    }
}
else
{
	header("Location:Sign in.php");	
}
 
    
 //starting this else one [else1]

?>