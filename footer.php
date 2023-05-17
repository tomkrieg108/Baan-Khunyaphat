
<footer class="footer">

  <div class="footer-top">
    <div class="container">
      <div class="connect">
        <h3 class='subheading'><?php echo $footer['connect']?></h3>
        <div class="social">
          <a href="https://www.facebook.com/Preechaluck" target="_blank">
            <!-- <i class="fab fa-facebook fa-2x"></i> -->
            <ion-icon name="logo-facebook" class='icon-big'></ion-icon>
          </a>
          <a href="#">
            <!-- <i class="fa-brands fa-tiktok fa-2x"></i> -->
            <ion-icon name="logo-tiktok" class='icon-big'></ion-icon>
          </a>
          <a href="images/L_gainfriends_qr.png"
            data-lightbox="qr-code"
            data-title="Please use this QR code to connect with us on the LINE App.">
            <div class="line-icon">
              <img src="images/LINE_Brand_icon.png" alt="" class="responsive-img">
            </div>
          </a> 
        </div>
      </div>

      <div class="contact">
        <h3 class='subheading'><?php echo $footer['contact']?></h3>
        <div class='pb0'>
          <ion-icon class="icon-small pr0" name="mail-outline"></ion-icon>
          <inline class="lead">baankhunyaphatphuket@gmail.com</inline>
        </div>
        <div>
          <ion-icon class="icon-small pr0" name="call-outline"></ion-icon>
          <inline class="lead">092 312 1333</inline>
        </div>
      </div>
      
      <div class='logo'>
        <img src="images/logo/Logo-200.png" alt="LOGO" class="nav-logo" />
      </div>

    </div>
  </div>
  
  <p class="copywrite">
    Copyright &copy; <?php echo date("Y"); ?> - Baankhunyaphat Villas and
    Residences.
  </p>

</footer>

<!-- Nav Used in all pages => can go in footer.php -->
<script src="js/nav.js"></script>

<!-- Lightbox used in footer  -->
<!--Import jQuery - needed for lightbox-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- light box https://lokeshdhakar.com/projects/lightbox2 -->
<script src="js/lightbox.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      lightbox.option({
          'alwaysShowNavOnTouchDevices': true
       });
  });
</script>

<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 