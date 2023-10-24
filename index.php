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
	<title>Home</title>
</head>
<style>

#serviecs{
    gap: 10vh;
    align-items: center;
    justify-content: center;
    width: 100%;
    min-height: 100vh;
    
/*    background-image: url(images/bg.gif);*/
    background-size: cover;
    background-position: center;
    overflow: hidden;
    position: relative;
}
  .cards {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40%;
    height: 40vh;
    background-position: center;
    background-size: cover;
    object-fit: cover;
    border-radius: 50px;
    background-color: #222;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #444;
    border-radius: 5px;
    border: 5px double #c5f404;
/*    box-shadow: -1px 0px 15px 7px rgb(197 244 4 / 24%);*/
    overflow: hidden;
}

#card-1 {
        top: 130%;

}

#card-2 {
    top: 230%;

}

#card-3 {
    top: 250%;

}

.serviecs-text{
    position: absolute;
    width: 100%;
    top: 25%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.slogo img{
    width: 6vw;
}

.serviecs-text h1{
    font-size: 5vw;
    color: #fff;
    text-align: center;
    font-weight: 700;
}

.serviecs-text p{
    font-size: 1vw;
    color: rgb(126, 126, 126);
    text-align: center;

}
.serviecs-text span{
    font-size: 1vw;
    color: #c3f104;
    text-align: center;


}
#section1{
    width: 100%;
    height: 100vh;
}
.wraper{
    width: 100%;
    height: 45vh;
    display: flex;
    background-color: #222;
    font-family: "anthon", sans-serif;
}
.left1{
    width: 40%;
    height: 100%;
    background-color: red;
}
.left1 h1{
    font-size: 10vw;
    font-weight: 1000;
    line-height: 0.8;
    padding: 20px 0px 0px 20px;
}
.right1{
    width: 40%;
    height: 100%;
    background-color: green;
}
.right1 h1{
    font-size: 10vw;
    font-weight: 1000;
    line-height: 0.8;
    padding: 20px 20px 0px 0px;
    float: right;
}
.cent1{
    justify-content: center;
    align-items: center;
    width: 20%;
    height: 100%;
    background-color: blue;
    position: relative;
}
.cent1 span{
    position: absolute;
    font-weight: 1000;
    top: 50%;
    left: 50%;
}


</style>
<body>

	<div class="cursordot" data-cursor-dot></div>
	<div class="cursor-outline" data-cursor-outline></div>
<div class="container-fluid">
<div class="section1">
	<! --- header start --->
<?php include_once 'inc/navbar.php';?>
	<! --- header start --->
<?php include_once 'inc/neonheading.php';?>
<?php include_once 'inc/textslideshow.php';?>
<div class="wraper">
<div class="left1">
    <h1>Saqib nazar</h1>
</div>
<div class="cent1"> <Span>scroll</Span></div>
<div class="right1">
    <h1>nazar</h1>
</div>
</div>
</div>





<?php include 'inc/textslideshowsmall.php';?>
<div id="About">
	<div id="top">
		<h1 id="top-h">About.</h1>
	</div>
	<div id="center">
		<div class="about-me">
       			<?php include 'aboutcontent.php';?>
			    <?php include 'inc/slideshow.php';?>
		</div>			
	</div>
	<div id="bottom">
		<h1 id="bot-h">About.</h1>
	</div>
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
</div>
<!---javascripts --->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="js/gsap.js"></script>
<script type="text/javascript" src="js/three.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/mobile.js"></script>
<!---javascripts ends --->
</body>
</html>