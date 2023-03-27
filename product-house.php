<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="reference" class="py3">
    
    <div class="banner detached-home-bg">
      <h1 class="heading-1 pt3"><?php echo $detached_house['banner-title']?></h1>
      <!-- <div class="container container-narrow">
        <h1 class="heading-1 pt3"><?php echo $detached_house['banner-title']?></h1>
        <h4 class='subheading'><?php echo $detached_house['main-text-p1']?></h4>
      </div> -->
    </div>  
    
    <div class="container container-narrow text-center pt3">
      <p class="pb1 lead">
        <?php echo $detached_house['main-text-p1']?>
      </p>
      <p class="pb1 lead">
        <?php echo $detached_house['main-text-p2']?>
      </p>
      <p class='lead'>
        <?php echo $detached_house['main-text-p3']?>
      </p>
    </div>

    <div class="container">

      <div class="gallery">

      <figure class="gallery-item">
          <img src="images/1-1-opt/House_front.jpg" alt="Front of house" />
          <figcaption class="gallery-caption">
            <p>Front of house</p>
            <a class="btn btn-small" 
               href="images/original/House_front.png"
               data-lightbox="phase123"
               data-title="Front of house"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/House_side.jpg" alt="Side of house" />
          <figcaption class="gallery-caption">
            <p>Side of House</p>
            <a class="btn btn-small" 
               href="images/original/House_side.png"
               data-lightbox="phase123"
               data-title="Side of house"
              >View Gallery
            </a>
          </figcaption>
        </figure>

      <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB1.jpg" alt="Living Room" />
          <figcaption class="gallery-caption">
            <p>Living Room</p>
            <a class="btn btn-small" 
               href="images/original/1RGB1.png"
               data-lightbox="phase123"
               data-title="Living Room"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB2.jpg" alt="Bathroom" />
          <figcaption class="gallery-caption">
            <p>Bathroom</p>
            <a class="btn btn-small" 
               href="images/original/1RGB2.png"
               data-lightbox="phase123"
               data-title="Bathroom"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB3.jpg" alt="Bedroom" />
          <figcaption class="gallery-caption">
            <p>Bedroom</p>
            <a class="btn btn-small" 
               href="images/original/1RGB3.png"
               data-lightbox="phase123"
               data-title="Bedroom"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB4.jpg" alt="Living Room" />
          <figcaption class="gallery-caption">
            <p>Living Room</p>
            <a class="btn btn-small" 
               href="images/original/1RGB4.jpg.png"
               data-lightbox="phase123"
               data-title="Living Room"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB5.jpg" alt="Bedroom" />
          <figcaption class="gallery-caption">
            <p>Bedroom</p>
            <a class="btn btn-small" 
               href="images/original/1RGB5.jpg.png"
               data-lightbox="phase123"
               data-title="Bedroom"
              >View Gallery
            </a>
          </figcaption>
        </figure>
  
        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB6.jpg" alt="Kitchen" />
          <figcaption class="gallery-caption">
            <p>Kitchen</p>
            <a class="btn btn-small" 
               href="images/original/1RGB6.jpg.png"
               data-lightbox="phase123"
               data-title="Kitchen"
              >View Gallery
            </a>
          </figcaption>
        </figure>

        <figure class="gallery-item">
          <img src="images/1-1-opt/1RGB7.jpg" alt="Dining Room" />
          <figcaption class="gallery-caption">
            <p>Dining Room</p>
            <a class="btn btn-small" 
               href="images/original/1RGB7.jpg.png"
               data-lightbox="phase123"
               data-title="Dining Room"
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
