<?php
	require 'inc/data.php';
	require 'inc/function.php';
	require 'inc/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php
	require 'inc/head.php';
	?>
	<title>Div Of Code</title>
</head>
<body>
<div class="container-fluid">
<div class="section1">
    <! --- header start --->
<?php include_once 'inc/navbar.php';?>
	<! --- header start --->
<!-- <img  class="heroicon"src="images/favicon.png"> -->
<?php include_once 'inc/textslideshow.php';?>
<?php include_once 'inc/neonheading.php';?>
<div class="wraper">
<div class="left1">
    <h1>Client Solutions</h1>
</div>
<div class="cent1">
        <div class="circle">
            <div class="rounded-text">
                <p>★ Scroll Down to Discover ★ Services </p>
            </div>
        </div>
    </div>
<div class="right1">
    <h1>Business Growth</h1>
</div>
</div>
</div>
<?php include 'inc/textslideshowsmall.php';?>
<div id="About">
<?php include 'about.php';?>
</div>
<div id="main">
			<?php include 'inc/textslideshowsmall.php';?>
			<?php include 'videosection.php';?>
	</div>
	<div id="section">
		<?php include 'strip.php';?>
	</div>
<div class="projects">
	<?php include 'projects.php';?>
	</div>
<div id="serviecs">
	<?php include 'inc/textslideshowsmall.php';?>
    <?php include 'services.php';?>
</div>

<div id="contact">
    
</div>
</div>
<!---javascripts --->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="js/gsap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/mobile.js"></script>
<!---javascripts ends --->
</body>
</html>