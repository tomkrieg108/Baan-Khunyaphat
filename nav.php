<header id="header">
      <div class="container">
        <nav class="nav">
          <a href="index.php">
            <img src="images/Logo.jpg" alt="LOGO" class="nav-logo" />
          </a>
          <ul class="nav-list">
            <li class="nav-link">
              <a
                class="activate-dropdown"
                href="#"
                data-target="dropdown-products"
                >Products <i class="fas fa-chevron-down"></i>
              </a>
            </li>
            <li class="nav-link"><a href="#">Facilities</a></li>
            <li class="nav-link">
              <a class="activate-dropdown" href="#" data-target="dropdown-about"
                >About Us
                <i class="fas fa-chevron-down"></i>
              </a>
            </li>
            <li class="nav-link"><a href="reference.php">Reference</a></li>
            <li class="nav-link"><a href="contact.php">Contact Us</a></li>
            <li class="nav-link nav-link-flag"><a href="#">Language</a></li>
          </ul>
        </nav>
        <ul id="dropdown-products" class="dropdown-menu">
          <li class="nav-link nav-link-dropdown">
            <a href="#">Product 1</a>
          </li>
          <li class="nav-link nav-link-dropdown">
            <a href="#">Product 2</a>
          </li>
          <li class="nav-link nav-link-dropdown">
            <a href="#">Product 3 Here is a long link</a>
          </li>
        </ul>
        <ul id="dropdown-about" class="dropdown-menu">
          <li class="nav-link nav-link-dropdown">
            <a href="profile.php">Company Profile</a>
          </li>
          <li class="nav-link nav-link-dropdown">
            <a href="#">Our Developer</a>
          </li>
        </ul>
      </div>

      <button class="btn-mobile-nav btn-mobile-nav-open">
        <i class="fas fa-bars"></i>
      </button>
      <button class="btn-mobile-nav btn-mobile-nav-close">
        <i class="fas fa-times"></i>
      </button>

      <div class="sidenav"></div>
    </header>