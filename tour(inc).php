<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
  <?php include "session.php";?>
	<?php require_once "bootstrap.php";?>
  <?php require_once "bootstrap1.php";?>


<style type="text/css">
body{
  color: white;
}
.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
body {

  background-image: url(img/music.png);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color:white;
}


.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 36px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
.venue-list-item {
    padding-top: 5px;
    padding-bottom: 5px;
    border-top: 1px solid hsla(0, 0%, 100%, .3);
    border-bottom: 1px solid hsla(0, 0%, 100%, .3);
}

.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.65); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: max-content;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding-top: 20px;
  background-color: #2675ae;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}


@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

#a{
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
.label-link{
  margin-left: 7em;
}
.form-control{
  background-color: #ffffffc2;
}
#p{
  color: black;

}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
.inc{
  animation-name: shake;
  animation-duration: 1s;
}
</style>
</head>

<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit;background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;/* color: transparent; */"><font style="vertical-align: inherit;  font-family: sans-serif;">WE'RE COMING TO YOUR CITY!</font></font>
    </h1>
    
  </div>

  <div class="w-dyn-list" style="text-align: center;"><div class="w-dyn-items"><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>March 24, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">GLASTONBURY FESTIVAL</div>
            </div>
            <div class="w-col w-col-3">
              <div>Pilton, UK</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 9, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">WHEELCHAIR SURFING</div>
            </div>
            <div class="w-col w-col-3">
              <div>DUBLIN, IRELAND</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 20, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Hersheypark Stadium</div>
            </div>
            <div class="w-col w-col-3">
              <div>Hershey, PA</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 25, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">BANGKOK:THE HOTTEST SHOW IN MEMORY</div>
            </div>
            <div class="w-col w-col-3">
              <div>BANGKOK, THAILAND</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>May 25, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">BMW WELT AUDITORIUM</div>
            </div>
            <div class="w-col w-col-3">
              <div>MUNICH, GERMANY</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>May 30, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Loufest</div>
            </div>
            <div class="w-col w-col-3">
              <div>St Louis, MO</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>June 8, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Lincoln Hall</div>
            </div>
            <div class="w-col w-col-3">
              <div>Chicago, IL</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>June 10, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">ROYAL ALBERT HALL</div>
            </div>
            <div class="w-col w-col-3">
              <div>LONDON, UK</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>July 11, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">JEFFERSON THEATER</div>
            </div>
            <div class="w-col w-col-3">
              <div>Charlottesville, VA</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>July 30, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">SINGLETARY CENTER</div>
            </div>
            <div class="w-col w-col-3">
              <div>Lexington, KY</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="margin-top: -18px;">&times;</span>
      <h2 style="font-size: 23px;">Please Sign In To Buy Tickets</h2>
    </div>

    <div class="login">
      <form action="tour(cor).php" method="POST">
        <div class="head">
          <h1 style="color: black;"><b>Sign In</b></h1>
        </div>
        <div class="bd1">
          <h4 style="text-align: center; color: red;" class="inc">Incorrect Email or Password</h4>
          <label for="login">Email</label>
          <input type="email" name="mai" id="login" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required="Enter Username" placeholder="Enter Email ID">
          <label for="password">Password</label>
          <input type="password" name="pwd" id="password" placeholder="Enter Password" class="form-control form-control input-block" tabindex="2" required="Enter Password">
          <input type="submit" name="commit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…">
        </div>
      </form>
      <p class="new" id="p">
        "New to site"<i>
        <a data-ga-click="Sign in, switch to sign up" href="Signup.php" id="a" style="color: #2675ae;">Create an account</a></i>
      </p>
    </div>

  </div>

</div>

  <?php require_once "footer.php";?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function op() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

</script>

</body>
</html>