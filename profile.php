<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="company-profile-banner" class="py3">
    <div class="banner phuket-1">
      <h1 class="heading-1 pt3"><?php echo $company_profile['banner-title']?></h1>
    </div>
  </section>

    <!-- <div id="test" class="test-red">
    </div> -->
  <section id="company-profile-content" class='pt1 pb2'>
    <div class="container">
      <h3 class="heading-3"><?php echo $company_profile['title']?></h3>  
      <div class="profile-content">
        <div class="profile-content-text">
          <p class="py0 lead">
            <?php echo $company_profile['text-p1']?>
          </p>
          <p class="py0 lead">
            <?php echo $company_profile['text-p2']?>
          </p>
          <p class="py0 lead">
            <?php echo $company_profile['text-p3']?>
          </p>
        </div>
        <div class="profile-content-image">
          <img class="responsive-img" src="images/house/sm-16-9/front.jpg" alt="House front">
        </div>
      </div>
      
      
    </div>
  </section>
</main>

<?php require_once './footer.php' ?>

</body>
</html>
