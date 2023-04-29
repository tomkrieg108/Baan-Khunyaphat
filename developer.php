<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="developer-banner" class="py3">
    <div class="banner phuket-9">
      <h1 class="heading-1 pt3"><?php echo $developer['banner-title']?></h1>
    </div>
  </section>

    <!-- <div id="test" class="test-red">
    </div> -->
  <section id="developer-content" class='pt1 pb3'>
    <div class="container">
      <h3 class="heading-3"><?php echo $developer['banner-title']?></h3>  
      <div class="profile-content">
        <div class="profile-content-text">
          <p class="lead mb-1">
            <?php echo $developer['name']?>
          </p>
          <p class="lead mb-4">
            <?php echo $developer['experience']?>
          </p>
          <img class="developer-img" src="images/developer.jpg" alt="Developer profile picture">
        </div>
        <div class="profile-content-image">
        <img class="responsive-img" src="images/16-9-opt/FN001.jpg" alt="Pool Villa B - House front">
        </div>
      </div>
      
      
    </div>
  </section>
</main>

<?php require_once './footer.php' ?>

</body>
</html>
