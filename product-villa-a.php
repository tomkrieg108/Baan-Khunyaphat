<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="reference" class="py3">
    <div class="banner villa-a-bg">
      <h1 class="heading-1 pt3"> <?php echo $villa_a['banner-title']?></h1>
    </div>

    <div class="container container-narrow text-center pt3">
      <p class="pb1 lead">
        <?php echo $villa_a['main-text-p1']?>
      <!-- We are offering for sale 3 Bedrooms Pool Villa which are all fully furnished, fully fitted kitchen, and luxurious package furniture by Kenkoon.  -->
      </p>
      <p class="pb1 lead">
      <!-- We are surrounded with the best architects and interior designers to develop the concept of our resort hotel. We also have the support of The KENKOON BRAND, a contemporary furniture brand that skillfully uses teak wood, marble and steel. -->
      </p>
      <p class='lead'>
        <!-- Please see the picture gallery below showing the layout and design of our pool villas. -->
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
              >View
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN01.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN01.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN02.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN02.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN03.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN03.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/16-9-opt/FN04.jpg" alt="Pool Villa Type A" />
          <figcaption class="gallery-caption">
            <p>Pool Villa</p>
            <a class="btn btn-small" 
               href="images/16-9-opt/FN04.jpg"
               data-lightbox="pool-villa-a"
               data-title="Pool Villa A"
              >View
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
