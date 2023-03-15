<header id="header">
  
  <!-- <div class="top-bar">
    <div class="container">
      <div class="contact-info">
        <ion-icon name="call-outline" class='icon-small px0'></ion-icon>
        <p class='pr1'>(+66) 076313123</p>
        <ion-icon name="mail-outline" class='icon-small px0'></ion-icon>
        <p>baankhunyaphatphuket@gmail.com</p>
        <a href="https://www.facebook.com/Preechaluck" target="_blank""><ion-icon name="logo-facebook" class='icon-small pl2'></ion-icon></a>
        <a href=""><ion-icon name="logo-tiktok" class='icon-small px0'></ion-icon></a>
      </div>
    </div>
  </div> -->
  
  <div class="container">
    <nav class="nav">
      <a href="index.php">
        <img src="images/logo/Logo-400.png" alt="LOGO" class="nav-logo" />
      </a>
      
      <ul class="nav-list">
        <li class="nav-link"><a href="index.php"><?php echo $nav['home']?></a></li>
        <!-- <li class="nav-link"><a href="index.php"><ion-icon class='icon-med px1' name="home-outline"></ion-icon></a></li> -->
        <li class="nav-link">
          <a
            class="activate-dropdown"
            href="#"
            data-target="dropdown-products"
            ><?php echo $nav['prod']?> <i class="fas fa-chevron-down"></i>
          </a>
          <ul id="dropdown-products" class="dropdown-menu">
            <li class="nav-link nav-link-dropdown">
              <a href="product-house.php"><?php echo $nav['house']?></a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="product-villa-a.php"><?php echo $nav['villa-a']?></a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="product-villa-b.php"><?php echo $nav['villa-b']?></a>
            </li>
          </ul>
        </li>
        <li class="nav-link"><a href="#"><?php echo $nav['fac']?></a></li>
        <li class="nav-link">
          <a class="activate-dropdown" href="#" data-target="dropdown-about"><?php echo $nav['about']?>
            <i class="fas fa-chevron-down"></i>
          </a>
          <ul id="dropdown-about" class="dropdown-menu">
            <li class="nav-link nav-link-dropdown">
              <a href="profile.php"><?php echo $nav['profile']?></a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="#"><?php echo $nav['developer']?></a>
            </li>
          </ul>
        </li>
        <li class="nav-link"><a href="reference.php"><?php echo $nav['ref']?></a></li>
        <li class="nav-link"><a href="contact.php"><?php echo $nav['contact']?></a></li>
        
        <li class="nav-link">
          <a class="activate-dropdown" href="#" data-target="dropdown-language">
            <div class="nav-flag">
              <img src=<?php echo $_SESSION['flag_img'] ?> height=40 alt="">
              <i class="fas fa-chevron-down"></i>
            </div>
          </a>
          <ul id="dropdown-language" class="dropdown-menu">
              <li class="nav-link nav-link-dropdown flag">
                <a href=<?php echo $_SERVER['PHP_SELF'] . '?lang=eng' ?>>
                  <img src=<?php FlagImg('eng') ?> height=40 alt="English flag">
                  <p>English</p>
                </a>
              </li>
              <li class="nav-link nav-link-dropdown flag">
                <a href=<?php echo $_SERVER['PHP_SELF'] . '?lang=thai' ?>>
                  <img src=<?php FlagImg('thai') ?> height=40 alt="Thai flag">
                  <p>ไทย</p>
                </a>
              </li>
          </ul>
        </li>

      </ul>          
    </nav>

  </div>

  <button class="btn-mobile-nav">
    <i class="fas fa-bars active"></i>
    <i class="fas fa-times"></i>
  </button>

</header>