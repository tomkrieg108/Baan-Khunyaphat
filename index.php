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
        style="background-image: url('images/16-9-opt/FN001.jpg')"
      ></div>

      <div
        class="slide"
        style="background-image: url('images/16-9-opt/FN002.jpg')"
      ></div>

    <div class="dots"></div>

    <div class="hero-content">
      <h3 class = "heading-2">Baan Khunyaphat Villas and Residences</h3>
      <h1 class = "heading-1">Your new way of living</h1>
      <p class="heading-3">High quality, affordable villas and houses in Phuket</p>

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
          <h3 class = "heading-3">Welcome to Baan Khunyaphat Villas and Residences</h3>

          <p class="lead">
            We are pleased to announce that Baan Khunyaphat Villas & Residences will be located in the Thalang district of the island of Phuket.   The district of Thalang is a globally renowned health, wellness and sports destination welcoming tourists all year round.   
          </p>

          <p class="lead pb1">
            The island, nicknamed the pearl of the Andaman sea, provides modern services and an international airport. It is adorned with beautiful beaches, large mountains lush tropical vegetation. Our project will be situated near popular attractions such as Naiyang beach, Layan beach and Robinson Shopping Mall.
          </p>
        </div>
        <div class="intro-actions">
          <h3 class = "heading-3">Virtual Tour</h3>
          <p class="lead">Take a virtual 3D tour of one of our properties to view the interior layout, floorplan and measurments. Gain a glimpse of the picturesque surrounds.</p>
          <a class="btn btn-large" href="https://mp.my360int.com/tour/baan-khunyaphat" target="_blank">Take Tour</a>
        </div>
      </div>
    </div>
  </section>
  <section id="home-section2">
    <div class="container">
      <h3 class="heading-3">Features of our property projects</h3>
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