<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="reference" class="py3">
    <div class="banner villa-a-bg">
      <h1 class="heading-1 pt3"><?php echo $villa_a['banner-title']?></h1>
      <!-- <div class="container container-narrow">
        <h1 class="heading-1 pt3"><?php echo $villa_a['banner-title']?></h1>
        <h4 class='subheading'><?php echo $villa_a['main-text-p1']?></h4>
      </div> -->
    </div>

    <div class="container container-narrow text-center pt3">
      <p class="pb1 lead">
        <?php echo $villa_a['main-text-p1']?>
      </p>
      <p class="pb1 lead">
        <?php echo $villa_a['main-text-p2']?>
      </p>
      <p class='lead'>
        <?php echo $villa_a['main-text-p3']?>
      </p>
    </div>

    <div class="container">

      <div class="gallery">

        <figure class="gallery-item">
          <img src="images/16-9-opt/ED_1.jpg" alt="Pool Villa Type A - 3D layout from above" />
          <figcaption class="gallery-caption">
            <p>Pool Villa A layout</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/ED_1.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A Schematic"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN01.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa A</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN01.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN02.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa A</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN02.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN03.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa A</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN03.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN04.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa A</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN04.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
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
