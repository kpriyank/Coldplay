<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
    <?php require_once "session.php";?>
	<?php require_once "bootstrap.php";?>
  <?php require_once "bootstrap1.php";?>
<script type="text/javascript">
  $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }

            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;
    });
    
});
</script>

<script type="text/javascript">
  $(document).ready(function(){

var quatiy=0;
   $('.quantity-right-plus1').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quanity = parseInt($('#quantty').val());
        
        // If is not undefined
            
           
           $('#quantty').val(quanity + 1);
            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;

          
            // Increment
        
    });

     $('.quantity-left-minus1').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantty').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantty').val(quantity - 1);
            }
            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;
    });
    
});
</script>
<script>
function che()
{
  var to=Number(document.getElementById("myText").value);
  if(to>0){
    document.getElementById("tic").click();
  }
  else{
    alert("Total amount should be greater than 0");
  }
}
</script>

<style type="text/css">
.center{
width: 150px;
  margin: 40px auto;
  
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
body{
	background-image:url(img/music.png); 
    background-size: cover;
    height: 100vh;
    background-position: 0px 0px, 50% 50%;
    color: white;
}

.modal {
  display: none; /* Hidden by default */
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
#mod{
  width: 60%;
}
/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: fit-content;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
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
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #1c1b1b;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding-top: 20px;
  color: black;
  border-top: 1px solid #7e7a7a;
}

.modal-body {padding: 2px 16px;}


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
@media screen and (max-width: 991px){

  #mod{
  width: 80% !important;
  }
  #fot{
    text-align: center !important;
  }
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
	
  #mod{
  width: 80% !important;
  }
  #fot{
    text-align: center !important;
  }
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
  #mod{
  width: 80% !important;
  }
  #fot{
    text-align: center !important;
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
  color: #0e0e0f;
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
.container{
    color: black;
    padding-left: 16px;
}
.col-sm-4{
  text-align: center;
}
.row{
      margin-left: 40px;
    margin-top: 20px;
}

.modal-footer {
    padding: 15px;
    text-align: left;
    border-top: 1px solid #7e7a7a;
    color: black;
    background-color: white;
}
.btn{
  width: 97px;
    border: 1px solid #0078ff;
    height: 32px;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 500;
    color: #0078ff;
    background-color: #fff;
}
.btn3{
  width: 97px;
    border: 1px solid #fff;
    height: 32px;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    background-color: #0078ff;
}
</style>
</head>

<body>
	<?php require_once "navbar.php"?>
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

  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="margin-top: -18px;">&times;</span>
      <h2 style="font-size: 23px; text-align: center;">Select Your Category</h2>
    </div>

    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <div class="col-sm-8">
            <span>GA Phase I</span><br>
            <span>₹ 4000.00</span>
            <span>GA Phase 1 tickets are General Admission tickets into the Arena</span>
          </div>
          <div class="col-sm-4">
              <div class="input-group" id="mod">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn btn-number" style="width: 50px;" data-type="minus" data-field="">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                  </span>
                  <input type="text" id="quantity" name="quantity" class="form-control input-number" style="margin-top: 0px; height: 32px; margin-bottom: 0px; width: 100%; float: none;  text-align: center;" value="0" min="0" max="10" disabled="">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus btn btn-number" style="width: 50px;" data-type="plus" data-field="">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </span>
              </div>
          </div>
        </div>
      </div>
      <div class="jumbotron">
        <div class="row">
            <div class="col-sm-8">
              <span>VIP Phase I</span><br>
              <span>₹ 9000.00</span>
              <span>VIP Phase 1 tickets give you entry into the VIP Section at the Arena. VIP section includes front of stage viewing, dedicated bars and toilets.</span>
            </div>
            <div class="col-sm-4">
              <div class="input-group" id="mod">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus1 btn btn-number" style="width: 50px;" data-type="minus" data-field="" onclick="am()">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                  </span>
                  <input type="text" id="quantty" name="quanty" class="form-control input-number" style="margin-top: 0px; height: 32px; margin-bottom: 0px; width: 100%; float: none;  text-align: center;" value="0" min="0" max="10" disabled="">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus1 btn btn-number" style="width: 50px;" data-type="plus" data-field="" onclick="am()">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <div class="row" id="fot">
        <div class="col-sm-8">
            <span class="final-prize">Total  ₹</span>
            <input type="text" id="myText" value="0" disabled size="6">
        </div>
        <div class="col-sm-4">
          <div class="proceed-button">
                <button class="btn3" id="bt" onclick="che()">Proceed</button>
                <a href="ticket.php" id="tic"></a>
          </div>
        </div>
      </div>
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