<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="reference" class="py3">
    <div class="banner villa-b-bg">
      <h1 class="heading-1 pt3"> <?php echo $villa_b['banner-title']?></h1>
      <!-- <div class="container container-narrow">
        <h1 class="heading-1 pt3"><?php echo $villa_b['banner-title']?></h1>
        <h4 class='subheading'><?php echo $villa_b['main-text-p1']?></h4>
      </div> -->
    </div>

    <div class="container container-narrow text-center pt3">
      <p class="pb1 lead">
        <?php echo $villa_b['main-text-p1']?>
      </p>
      <p class="pb1 lead">
        <?php echo $villa_b['main-text-p2']?>
      </p>
      <p class ='lead'>
        <?php echo $villa_b['main-text-p3']?>
      </p>
    </div>

    <div class="container">

      <div class="gallery">

        <figure class="gallery-item">
          <img src="images/16-9-opt/ED_002.jpg" alt="Pool Villa Type B - 3D layout from above" />
          <figcaption class="gallery-caption">
            <p>Pool Villa B layout</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/ED_002.jpg"
               data-lightbox="pool-villa-b"
               data-title="Pool Villa B Schematic"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN001.jpg" alt="Pool Villa Type B" />
          <figcaption class="gallery-caption">
            <p>Pool Villa B</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN001.jpg"
               data-lightbox="pool-villa-b"
               data-title="Pool Villa B"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN002.jpg" alt="Pool Villa Type B" />
          <figcaption class="gallery-caption">
            <p>Pool Villa B</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN002.jpg"
               data-lightbox="pool-villa-b"
               data-title="Pool Villa B"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN003.jpg" alt="Pool Villa Type B" />
          <figcaption class="gallery-caption">
            <p>Pool Villa B</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN003.jpg"
               data-lightbox="pool-villa-b"
               data-title="Pool Villa B"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN004.jpg" alt="Pool Villa" />
          <figcaption class="gallery-caption">
            <p>Pool Villa B</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN004.jpg"
               data-lightbox="pool-villa-b"
               data-title="Pool Villa B"
              >View Gallery
            </a>
          </figcaption>
        </figure>

      </div>
    </div>
  </section>
</main>

<?php require_once './footer.php' ?>

</body>
</html>
