<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="description" content="Keep True Design performs web and user experience design for local businesses and communities in Northern and Central New York.">
<meta name="keywords" content="design,web design,ux,ux design,user experience design,upstate new york,central new york,northern new york,baldwinsville new york, watertown new york, sackets harbor new york">
<title>Keep True Design - About</title>
<!--[if lt IE 9]>
  <script src="./assets/javascripts/html5.js"></script>
<![endif]-->
<!--<link rel="stylesheet" href="./css/style_demo.css" />-->
<link rel="stylesheet" href="./css/style.css" />
<!--[if (gt IE 8) | (IEMobile)]><!-->
  <link rel="stylesheet" href="./css/structure.css" />
<!--<![endif]-->
<!--[if (lt IE 9) & (!IEMobile)]>
  <link rel="stylesheet" href="./css/ie_structure.css" />
<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700italic,800,800italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Tienne:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
  <div class="grid-container" style="">
	
    <div class="grid-100 top-bar">
		<section class="main-navigation">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>About</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</section>
    </div>
	
	<div class="content-container">
	
		<div class="grid-100 header-container">			
			<img src="./assets/KT_logo.png" width="138" height="138" style="padding-left: 80px; float: left; " />
			<span style="float: left; margin-left: 20px; ">
				<h1>
					Keep True Design
				</h1>
			</span>				
			<span style="float: left; margin-left: 120px; margin-top: -20px; ">
				<h2>Building Unique and Engaging Experiences</h2>
			</span>
		</div>
		
		<div class="grid-100" style="text-align: right; margin-top: -24px; margin-left: -10px; ">
			<a href="http://www.facebook.com/KeepTrueDesign" target="_blank"><img src="./assets/facebook_icon.png" width="48px" height="48px" /></a>
			<a href="http://twitter.com/keeptruedesign" target="_blank"><img src="./assets/twitter_icon.png" width="48px" height="48px" /></a>
		</div>
		
		<div class="grid-100 body-container" style="margin-top: -30px; ">
			<h1>Some things about Keep True ...</h1>
			<img src="./assets/photos/myPic.png" width="237px" height="200px" style="float: right; margin-left: 20px; " />
			<p>
				Keep True Design is owned an operated by me, Mark Hazlewood. I'm 
				a freelance web and user experience designer, working part-time
				from my home in Baldwinsville, New York. I also work full-time as a
				usability engineer for a local company and have over a decade of 
				experience designing, building, and maintaining web sites and other
				interactive applications.
			</p>
			<p>
				I'm passionate about technology and leveraging it to improve people's lives. I think so
				much of the technology we see around us only makes things more difficult, and I
				believe in doing what I can to help change that.
			</p>
			<p>
				I've got one amazing wife and two amazing daughters who help to keep me grounded.
				When I'm not busy engineering or designing, I like to spend time at my in-laws' cottage
				on Lake Ontario, just Southwest of Sacket's Harbor in Henderson, NY.
			</p>
			<p>
				Here's a few photos taken in the area. Hopefully you can see why we call this place home.
			</p>
		</div>
		
		<hr />
		
		<div class="grid-100 body-container">		
			<img src="./assets/photos/sunset.png" height="135" width="820" style="margin-right: auto; margin-left: auto; padding-top: 20px; padding-bottom: 30px; " />		
		</div>
		
		<div class="grid-100 column-container">
			<div class="grid-35">
				<img src="./assets/photos/tinpan.png" width="300px" height="200px" style="padding-bottom: 30px; " />
			</div>
			<div class="push-30 grid-35">
				<img src="./assets/photos/wine.png" width="300px" height="200px" style="padding-bottom: 30px; " />
			</div>
		</div>
		
		<div class="grid-100 column-container">
			<div class="grid-35">
				<img src="./assets/photos/lilacs.png" width="300px" height="200px" style="padding-bottom: 30px; " />
			</div>
			<div class="push-30 grid-35">
				<img src="./assets/photos/camp_dog.png" width="300px" height="200px" style="padding-bottom: 30px; " />
			</div>
		</div>
		
		<hr />
		<hr />		
	
	</div>
	
	<div class="grid-100 bottom-bar">
		<section class="footer">
			<p style="float: left; ">
				Design by <a href="#">Keep True Design</a>
			</p>
			<p style="float: right; ">
				<?php
					echo "Last updated on " . date ("F d Y", getlastmod());
				?>
			</p>
		</section>
	</div>
    
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <!--<script src="./js/responsive.js"></script>-->
</body>
</html>