<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>

  <section class="hero">
    <div class="slider-container">
      <div
        class="slide active"
        style="background-image: url('images/16-9-opt/House_front.jpg')"
      ></div>
      <div
        class="slide"
        style="background-image: url('images/16-9-opt/FN01.jpg')"
      ></div>

      <div
        class="slide"
        style="background-image: url('images/16-9-opt/FN001.jpg')"
      ></div>

    <div class="dots"></div>

    <div class="hero-content">
      <h3 class = "heading-2">Baankhunyaphat Villas and Residences</h3>
      <h1 class = "heading-1">Your new way of living</h1>
      <p class="heading-3">High quality, affordable properties in Phuket</p>

      <div class="hero-buttons">
        <a id="btn-discover-more" class="btn" href="#home-section1">Learn More &darr;</a>    
        <a class="btn btn-outline" href="contact.php">Visit Us &rarr;</a>  
      </div>
    </div>
  </section>

  <section id=home-section1>
    <div class="container">
      <div class="intro">
        <div class="intro-text">
          <h2 class = "heading-2"><?php echo $home['title']?></h2>

          <p class="lead">
            <?php echo $home['main-text-p1']?> 
          </p>

          <p class="lead pb1">
            <?php echo $home['main-text-p2']?> 
          </p>
        </div>
        <div class="intro-actions">
          <h3 class = "heading-3"><?php echo $home['virtual-tour-title']?></h3>
          <p class="lead"><?php echo $home['virtual-tour-p1']?></p>
          <a class="btn btn-large" href="https://mp.my360int.com/tour/baan-khunyaphat" target="_blank"><?php echo $home['virtual-tour-btn']?></a>
        </div>
      </div>
    </div>
  </section>
  <section id="home-section2">
    <div class="container">
      <h2 class="heading-2 pb2">Features of our property projects</h2>
      <div class="features">
        <div class="feature">
          <ion-icon class="feature-icon" name="swap-horizontal-outline"></ion-icon>
          <h3 class = "subheading">Adaptable</h3>
          <p class="lead">Freedom to live your way.  Adapt the property layout according to your own needs and preferences.</p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
          <h3 class = "subheading">Eco Friendly</h3>
          <p class="lead">Our houses are designed for the future. Use clean energy from solar cells and save on energy costs.</p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="image-outline"></ion-icon>
          <h3 class = "subheading">Idyllic Location</h3>
          <p class="lead">Located in a tranquil and scenic area, but also offering quick and easy access to all ammenities.</p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="star-outline"></ion-icon>
          <h3 class = "subheading">High Quality</h3>
          <p class="lead">From material selection, construction, fittings and furnishings, we make quality our priority.</p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once './footer.php' ?>

<script src="js/image-slider.js"></script>
<script src="js/smooth-scrolling.js"></script>

</body>
</html>