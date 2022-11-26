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
        style="background-image: url('images/16-9-opt/House_side.jpg')"
      ></div>

      <div
        class="slide"
        style="background-image: url('images/16-9-opt/1RGB1.jpg')"
      ></div>

      <div 
        class="slide" 
        style=" background-image: url('images/16-9-opt/1RGB2.jpg')">
    </div>

    <div class="dots"></div>

    <div class="hero-content">
      <h3 class = "heading-3">Baan Khunyaphat Villas and Residences</h3>
      <h1 class = "heading-1">Your new way of living</h1>
      <p class="lead">Offering high quality, affordable properties for sale in Phuket</p>
      <a id="btn-discover-more" class="btn" href="#home-section1">Discover More  &darr;
        <!-- <ion-icon name="arrow-down-outline"></ion-icon> -->
      </a>    
      <a class="btn btn-outline" href="contact.php">Arrange Visit  &rarr;
        <!-- <ion-icon name="arrow-forward-outline"></ion-icon> -->
      </a>  
    </div>
  </section>

  <section id=home-section1>
    <div class="container">
      <div class="intro">
        <div class="intro-text">
          <h3 class = "heading-3">Welcome to Baan Khunyaphat Villas and Residences</h3>
          <p class="lead">We develop high quality, adaptable and eco-friendly properties for sale in the pristine heart of Phuket, starting from 4 just Million Baht. </p>
          <p class="lead">Our houses are suitable for everyone. We design houses to meet the lifestyle of people from all age groups.</p>
        </div>
        <div class="intro-actions">
        <h3 class = "heading-3">Virtual Tour</h3>
        <p class="lead">Take a virtual 3D tour of one of our properties to view the interior layout, floorplan and measurments</p>
        <a class="btn btn-large" href="https://mp.my360int.com/tour/baan-khunyaphat" target="_blank">Take Tour</a>
        </div>
      </div>
    </div>
  </section>
  <section id="home-section2">
    <div class="container">
      <div class="features">
        <div class="feature">
          <ion-icon class="feature-icon" name="swap-horizontal-outline"></ion-icon>
          <h3 class = "heading-3">Adaptable</h3>
          <p class="lead">Freedom to live your way.  Adapt the layout according to your own needs and preferences.</p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
          <h3 class = "heading-3">Eco Friendly</h3>
          <p class="lead">Our houses are designed for the future. Use clean energy from solar cells and save on energy costs.</p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="image-outline"></ion-icon>
          <h3 class = "heading-3">Idyllic Location</h3>
          <p class="lead">Located in a tranquil and semi-rural area, while also offering easy access to all ammenities.</p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once './footer.php' ?>

<script src="js/image-slider.js"></script>

</body>
</html>