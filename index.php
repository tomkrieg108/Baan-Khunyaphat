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
      <h2 class="heading-2 pb2"><?php echo $home['features-title']?></h2>
      <div class="features">
        <div class="feature">
          <ion-icon class="feature-icon" name="swap-horizontal-outline"></ion-icon>
          <h3 class = "subheading"><?php echo $home['feature1-title']?></h3>
          <p class="lead"><?php echo $home['feature1-text']?></p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
          <h3 class = "subheading"><?php echo $home['feature2-title']?></h3>
          <p class="lead"><?php echo $home['feature2-text']?></p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="image-outline"></ion-icon>
          <h3 class = "subheading"><?php echo $home['feature3-title']?></h3>
          <p class="lead"><?php echo $home['feature3-text']?></p>
        </div>
        <div class="feature">
          <ion-icon class="feature-icon" name="star-outline"></ion-icon>
          <h3 class = "subheading"><?php echo $home['feature4-title']?></h3>
          <p class="lead"><?php echo $home['feature4-text']?></p>
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