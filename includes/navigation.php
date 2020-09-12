<!-- NAVBAR -->
<div class="container nav-sticky">
  <nav class="navbar-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <a href="<?php echo BASE_URL; ?>" id="logo-header">
    <picture class="py-left-2">
      <source type="image/jpg" srcset="<?php echo BASE_URL; ?>img/logo.jpg">
      <img src="<?php echo BASE_URL; ?>img/logo.jpg" alt="Immagine"> </picture></a>
    <ul class="navbar">
      <li><a href="<?php echo BASE_URL; ?>index.php"><i class="fas fa-home"></i></a></li>
      <li><a href="<?php echo BASE_URL; ?>products/"><i class="fas fa-arrow-circle-down"></i> Products</a>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>products/product/">Product</a></li>
          <li><a href="<?php echo BASE_URL; ?>products/product/">Product</a></li>
            <li><a href="<?php echo BASE_URL; ?>products/landing-page/">Landing Page</a></li>
          <li><a href="<?php echo BASE_URL; ?>products/">See all</a></li>
        </ul>
      </li>
      <li><a href="<?php echo BASE_URL; ?>applications/"><i class="fas fa-arrow-circle-down"></i> Applications</a>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>applications/application/">Application</a></li>
          <li><a href="<?php echo BASE_URL; ?>applications/application/">Application</a></li>
          <li><a href="<?php echo BASE_URL; ?>applications/application/">	Application </a></li>
        </ul>
      </li>
      <li><a href="<?php echo BASE_URL; ?>casestudies/">Case Studies</a>
      </li>
      <li><a href="<?php echo BASE_URL; ?>about-us/"><i class="fas fa-arrow-circle-down"></i> Company</a>
       
      </li>
      <li><a href="<?php echo BASE_URL; ?>news/">News</a></li>
      <li><a href="<?php echo BASE_URL; ?>contacts/">Contacts</a></li>
    </ul>
  </nav>
</div>
