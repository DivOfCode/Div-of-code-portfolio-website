<style type="text/css">

    .column1 {
      flex: 1;
      padding: 20px;
      border-right: 2px double #fff ;
      position: relative;
    }

    .column2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      justify-items: center;
      margin: 0px 0px 0px 20px;
    }

    .column2 img {
      display: block;
      padding: 10px;
      width: 10vh;
    }

    .content {
      position: relative;
      z-index: 1;
    }

    .word {
      font-family: 'Anton', sans-serif;
      perspective: 1000px;
      justify-content: center;
      z-index: 0;
      margin: 0px 0px 20px 0px;
    }

    .word span {
      cursor: pointer;
      display: inline-block;
      font-size: 10vh;
      user-select: none;
      line-height: 0.8;
      font-weight: 700;
    }
    .column1 p{
          width: 50vh;
    }
    .active{
      color:#c5f404 ;
    }
    .word span:nth-child(1).active {
      animation: balance 1.5s ease-out;
      transform-origin: bottom left;
    }

    @keyframes balance {
      0%, 100% {
        transform: rotate(0deg);
      }

      30%, 60% {
        transform: rotate(-45deg);
      }
    }

    .word span:nth-child(2).active {
      animation: shrinkjump 1s ease-in-out;
      transform-origin: bottom center;
    }

    @keyframes shrinkjump {
      10%, 35% {
        transform: scale(2, .2) translate(0, 0);
      }

      45%, 50% {
        transform: scale(1) translate(0, -150px);
      }

      80% {
        transform: scale(1) translate(0, 0);
      }
    }

    .word span:nth-child(3).active {
      animation: falling 2s ease-out;
      transform-origin: bottom center;
    }

    @keyframes falling {
      12% {
        transform: rotateX(240deg);
      }

      24% {
        transform: rotateX(150deg);
      }

      36% {
        transform: rotateX(200deg);
      }

      48% {
        transform: rotateX(175deg);
      }

      60%, 85% {
        transform: rotateX(180deg);
      }

      100% {
        transform: rotateX(0deg);
      }
    }

    .word span:nth-child(4).active {
      animation: rotate 1s ease-out;
    }

    @keyframes rotate {
      20%, 80% {
        transform: rotateY(180deg);
      }

      100% {
        transform: rotateY(360deg);
      }
    }

    .word span:nth-child(5).active {
      animation: toplong 1.5s linear;
    }

    @keyframes toplong {
      10%, 40% {
        transform: translateY(-48vh) scaleY(1);
      }

      90% {
        transform: translateY(-48vh) scaleY(4);
      }
    }

    @media (max-width: 992px) {
      .word span {
        font-size: 7vh;
      }
    }

    @media (max-width: 549px) {
      .word span {
        font-size: 5vh;
      }
      .column1 p {
        font-size: 10px;
        width: 25vh;
      }
    }
    @media (max-width: 375px) {
      .word span {
        font-size:4vh;
      }
      .column1 p {
        font-size: 8px;
        width: 15vh;
      }
    }
</style>
    <div class="serviecs-text">
      <div class="slogo"> <img src="images/favicon.png"> </div>
        <h1>Explore Our Services</h1>
        <p>Discover the perfect mix of creativity and innovation in our wide-ranging services. We're here to bring your vision to life. Start now!</p>
        <span>Scroll to Explore!</span>
    </div>
    <div class="cards" id="card-1">    
      <div class="column1">
      <div class="content">
        <h2 class="word">
          <span>Grap</span>
          <span>hics</span><br>
          <span>Des</span>
          <span>ign</span>
        </h2>
        <p>Elevate your brand and captivate your audience with our expert graphic design services. From logos to marketing materials, we bring your vision to life.</p>
      </div>
    </div>
    <div class="column2">
      <img src="images/icons/photoshop.png" alt="Image 1">
      <img src="images/icons/illustrator.png" alt="Image 2">
      <img src="images/icons/aftereffects.png" alt="Image 3">
      <img src="images/icons/premier.png" alt="Image 4">
    </div>
  </div>
    <div class="cards" id="card-2">
            <div class="column1">
      <div class="content">
        <h2 class="word">
          <span>Pro</span>
          <span>gra</span>-
          <span>mmi</span>
          <span>ng</span>
        </h2>
        <p>Unlock the full potential of your digital presence and captivate your audience with my exceptional programming expertise. From crafting dynamic web applications to engineering custom software solutions, I transform your imaginative concepts into captivating, functional realities.</p>
      </div>
    </div>
    <div class="column2">
      <img src="images/icons/photoshop.png" alt="Image 1">
      <img src="images/icons/illustrator.png" alt="Image 2">
      <img src="images/icons/aftereffects.png" alt="Image 3">
      <img src="images/icons/premier.png" alt="Image 4">
    </div>
    </div>
    <div class="cards" id="card-3">
            <div class="column1">
      <div class="content">
        <h2 class="word">
          <span>Web</span><br>
          <span>dev</span>
          <span>elo</span>
          <span>p</span>
        </h2>
        <p>Supercharge your online presence with my top-notch web development services. I specialize in user-friendly websites and robust online platforms that turn your vision into a captivating reality, helping you shine in the digital world.</p>
      </div>
    </div>
    <div class="column2">
      <img src="images/icons/photoshop.png" alt="Image 1">
      <img src="images/icons/illustrator.png" alt="Image 2">
      <img src="images/icons/aftereffects.png" alt="Image 3">
      <img src="images/icons/premier.png" alt="Image 4">
    </div>
    </div>
  <script type="text/javascript">
    const spans = document.querySelectorAll('.word span');

    spans.forEach((span, idx) => {
      span.addEventListener('click', (e) => {
        e.target.classList.add('active');
      });
      span.addEventListener('animationend', (e) => {
        e.target.classList.remove('active');
      });

      // Initial animation
      setTimeout(() => {
        span.classList.add('active');
      }, 750 * (idx + 1))
    });
  </script>