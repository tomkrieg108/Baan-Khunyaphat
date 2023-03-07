<header id="header">
  <div class="container">
    <nav class="nav">
      <a href="index.php">
        <img src="images/logo/Logo-400.png" alt="LOGO" class="nav-logo" />
      </a>
      <ul class="nav-list">
      <li class="nav-link"><a href="index.php">Home</ion-icon></a></li>
        <li class="nav-link">
          <a
            class="activate-dropdown"
            href="#"
            data-target="dropdown-products"
            ><?php echo $nav['prod']?> <i class="fas fa-chevron-down"></i>
          </a>
          <ul id="dropdown-products" class="dropdown-menu">
            <li class="nav-link nav-link-dropdown">
              <a href="product-phase-1-to-3.php">Phase 1, 2 & 3</a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="#">Phase 4</a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="product-villas.php">Pool Villas</a>
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
              <a href="profile.php">Company Profile</a>
            </li>
            <li class="nav-link nav-link-dropdown">
              <a href="#">Our Developer</a>
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