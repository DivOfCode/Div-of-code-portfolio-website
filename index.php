<?php
require_once 'inc/data.php';
require_once  'inc/function.php';
require_once  'inc/config.php';
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
    <div id="section1">
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


     <style type="text/css">

      #contact {
        background-color: #0a0a0a;
        width: 100%;
        height: 100vh;
        background-size: 40px 40px;
        position: relative;
        background-image:
        linear-gradient(to right, #262626 1px, transparent 1px),
        linear-gradient(to bottom, #262626 1px, transparent 1px);
      }

      .contactmarquee {
        margin: 0px 0px 0px 0px;
      }

      .contact-content {
        display: flex;
        width: 100%;
        height: 80vh;
        margin: 20px 0px 0px 0px;
      }

      .socials {
        width: 50%;
      }

      .shortdesc {
        width: 50%;
      }

      .links-wrapper {
        margin: 20vh 0px 0px 100px;
        width: 200px;
      }

      .s-links {
        display: block;
        color: #fff;
        font-size: 3vh;
      }
       .s-links img{
        width: 30px;
      }

      .contact-info {
        width: 100%;
        font-size: 3vh;
        text-align: end;
        padding: 30px 40px 0px 0px;
      }

      .discrp {
        font-size: 3vh;
        margin: 8vh 0px 0px 8vh;
      }

      canvas  {
        height: 100%;
        width: 100%;
        border: 2px solid #fff;
        display: none;
        position: absolute;
        top: 0%;
      }
      #scorespan{
        display: none;
      }
      .blink {
        animation:blink 2s infinite linear;
        opacity:.4
      }
      @keyframes blink {
        50% {
          opacity:.1
        }
      }
      .game{
        color: #c3f104;
      }

    </style>
    <div id="contact">
      <div class="contact-wrapper">
        <?php include 'inc/contacttextslideshow.php';?>

        <div class="contact-content">
          <div class="socials">
            <div class="links-wrapper">
              <nav class="social-links">
                <a class="s-links" href="#"><img class="social-img" src="images/icons/Linkedin.png" alt=""> Linkedin </a>
                <a class="s-links" href="#"><img class="social-img" src="images/icons/Facebook.png" alt=""> Facebook </a>
                <a class="s-links" href="#"><img class="social-img" src="images/icons/Instagram.png" alt=""> Instagram </a>
                <a class="s-links" href="#"><img class="social-img" src="images/icons/X.png" alt=""> X </a>
                <a class="s-links" href="#"><img class="social-img" src="images/icons/Github.png" alt=""> Github </a>
              </nav>
            </div>
          </div>
          <div class="shortdesc">
            <div class="contact-info">
              <div class="con-email">
                <h2>Contact@DivofCode.com</h2>
              </div>
              <div class="con-ph">
                <h2>+923352580114</h2>
              </div>
            </div>
            <div class="discrp">
              <h2 class="disch1">Open the door to communication –<br> reach out and let's craft something amazing together!</h2>   
              <span class="game blink" id="startGame">Click to Start</span>
              <span class="game" id="score">Score: 0</span>
            </div>
          </div>
        </div>
      </div>
      <canvas id="gameCanvas"></canvas>
    </div>

    <!---javascripts --->
    <?php require_once 'scriptslinks.php';?>


    <!---javascripts ends --->



    <script>



  </script>
</body>
</html>