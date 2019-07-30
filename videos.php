<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
	<?php include "session.php";?>
	<?php require_once "bootstrap.php";?>
	<?php require_once "bootstrap1.php";?>
    

<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
<script>
jQuery(document).ready(function($) {
    $(".fancybox").magnificPopup({type:'iframe',iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            '<div class="mfp-title">Some caption</div>'+
            '</div>',
        patterns: {
            youtube: {
                index: 'youtube.com/', 
                id: 'v=',
                src: 'http://www.youtube.com/embed/%id%?rel=0&autoplay=1'
            }
        }
    }});
});
</script>
<style type="text/css">

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
    font-size: 45px;
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
.row{
	text-align: center;
}
.thumb{
	width: 100%;
    margin-bottom: 60px;
    float: left;
}	
.elastic{
	max-width: 80%;
}
.title{
	margin: 18px 0 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    color: white;
}
.timestamp{
	height: 11px;
    font-size: 11px;
    letter-spacing: 1px;
    line-height: 11px;
    font-style: italic;
    color: #636363;
    text-align: center;
    text-transform: uppercase;
}
.timestamp img {
    display: inline;
    margin-right: 3px;
    margin-bottom: 1px;
}
.nav-link.w--current {
    color: #fff;
    text-decoration: none;
}
</style>
</head>
<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-family: sans-serif;">Videos</font></font></h1>
    </div>
	<div class="w-container">
		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=k4V3Mo61fJM">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2018/11/fixyou.jpg" alt="Fix You (Live In São Paulo)">
							</div>							    							    
							<div class="title">Fix You (Live In São Paulo)</div>								
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">November 1, 2018</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=-ZvsGmYKhcU">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2018/10/viva.jpg" alt="Viva La Vida (Live In São Paulo)">
							</div>	    							    
								<div class="title">Viva La Vida (Live In São Paulo)</div>
								<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">October 18, 2018</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=z9BPMjL44Aw">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
						 		<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2017/07/4-1024x576.png" alt="Miracles (Someone Special)">
							</div>
							<div class="title">Miracles (Someone Special)</div>
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">July 15, 2017</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=4u6bWs-ZG0o">
						<div class="thumb videoThumb">
							<div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2017/06/thmb-1024x576.jpg" alt="Something Just Like This (Tokyo Remix)">
							</div>
							<div class="title">Something Just Like This (Tokyo Remix)</div>
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">June 23, 2017</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=vGZMvV9KBp8">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2016/08/bikingalong-1024x640.png" alt="A Head Full Of Dreams">
							</div>    							    
							<div class="title">A Head Full Of Dreams</div>
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">August 19, 2016</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=BPNTC7uZYrI">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2016/05/cm-1024x576.jpg" alt="Up&amp;Up">
							</div>
							<div class="title">Up&amp;Up</div>
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">May 16, 2016</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=YykjpeuMNEk">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2016/02/vid.jpg" alt="Hymn For The Weekend">
							</div>	    							    
							<div class="title">Hymn For The Weekend</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">February 5, 2016</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=vqOnUB9gnDM">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2016/01/birdsthmb-1024x640.jpg" alt="Birds">
							</div>	    							    
							<div class="title">Birds</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">January 2, 2016</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=QtXby3twMmI">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/CPaoal-1024x576.jpg" alt="Adventure Of A Lifetime">
							</div>	    							    
							<div class="title">Adventure Of A Lifetime</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">November 29, 2015</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=VPRjCeoBqrI">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/asfos.jpg" alt="A Sky Full Of Stars">
							</div>	    							    
							<div class="title">A Sky Full Of Stars</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">June 19, 2014</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=Qtb11P1FWnc">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/magic.jpg" alt="Magic">
							</div>	    							    
							<div class="title">Magic</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">April 7, 2014</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=1G4isv_Fylg">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/elephants.jpg" alt="Paradise">
							</div>	    							    
							<div class="title">Paradise</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">October 18, 2011</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=fXSovfzyx28">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/lit.jpg" alt="Life In Technicolor ii">
							</div>	    							    
							<div class="title">Life In Technicolor ii</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">January 20, 2009</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=Pkgeai985rA">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/lost.jpg" alt="Lost!">
							</div>	    							    
							<div class="title">Lost!</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">November 10, 2008</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=OTFFQkdhw6Q">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/lij.jpg" alt="Lovers In Japan">
							</div>	    							    
							<div class="title">Lovers In Japan</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">November 3, 2008</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=dvgZkm1xWPE">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/vlv.jpg" alt="Viva La Vida">
							</div>	    							    
							<div class="title">Viva La Vida</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">August 4, 2008</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=IakDItZ7f7Q">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/vh.jpg" alt="Violet Hill">
							</div>	    							    
							<div class="title">Violet Hill</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">May 19, 2008</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=f8zKtcKCaG8">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/vhdp.jpg" alt="Violet Hill (Dancing Politicians)">
							</div>	    							    
							<div class="title">Violet Hill (Dancing Politicians)</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">May 16, 2008</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=WAGbq3A9HfA">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/hp.jpg" alt="The Hardest Part">
							</div>	    							    
							<div class="title">The Hardest Part</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">April 6, 2006</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=EH9meoWmAOM">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/talk.jpg" alt="Talk">
							</div>	    							    
							<div class="title">Talk</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">December 19, 2005</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=k4V3Mo61fJM">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/fixyou.jpg" alt="Fix You">
							</div>	    							    
							<div class="title">Fix You</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">September 5, 2005</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=0k_1kvDh2UA">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
									<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/sos.jpg" alt="Speed Of Sound">
							</div>	    							    
							<div class="title">Speed Of Sound</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">May 23, 2005</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=qhIVgSoJVRc">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/gput.jpg" alt="God Put A Smile Upon Your Face">
							</div>	    							    
							<div class="title">God Put A Smile Upon Your Face</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">July 14, 2003</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=d020hcWA_Wg">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/clocks.jpg" alt="Clocks">
							</div>	    							    
							<div class="title">Clocks</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">April 2, 2003</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=RB-RcX5DS5A">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/scientist.jpg" alt="The Scientist">
							</div>	    							    
							<div class="title">The Scientist</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">November 4, 2002</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=gnIZ7RMuLpU">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2002/08/inmy2-1024x576.jpg" alt="In My Place">
							</div>	    							    
							<div class="title">In My Place</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">August 5, 2002</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=yWeuUwpEQfs">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/dontpanic-1024x576.jpg" alt="Don’t Panic">
							</div>	    							    
							<div class="title">Don’t Panic</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">March 19, 2001</div>
						</div>
					</a>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=kcASPx3-HuI">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/trouble-1024x576.jpg" alt="Trouble">
							</div>	    							    
							<div class="title">Trouble</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">October 23, 2000</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=yKNxeF4KMsY">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/yellow.jpg" alt="Yellow">
							</div>	    							    
							<div class="title">Yellow</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">June 26, 2000</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox"  href="https://www.youtube.com/watch?v=u8XFFTWwSvY">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="http://coldplay.com/wp-content/uploads/2015/11/maxresdefault-1024x576.jpg" alt="Shiver">
							</div>	    							    
							<div class="title">Shiver</div>	
							<div class="timestamp"><img src="http://coldplay.com/wp-content/themes/ahfod/images/clock.svg" height="11">March 6, 2000</div>
						</div>
					</a>
			</div>
		</div>

	</div>
					
	</div>

	<?php require_once "footer.php";?>

</body>