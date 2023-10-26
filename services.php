
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
      <img src="images/icons/php.png" alt="Image 1">
      <img src="images/icons/python.png" alt="Image 2">
      <img src="images/icons/java.png" alt="Image 3">
      <img src="images/icons/java-script.png" alt="Image 4">
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
      <img src="images/icons/wordpress.png" alt="Image 1">
      <img src="images/icons/laravel.png" alt="Image 2">
      <img src="images/icons/node.png" alt="Image 3">
      <img src="images/icons/css.png" alt="Image 4">
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