<?php
include 'includes/bootstrap.php';
?>
<!doctype html>
<html lang="en-US">
<head>
<?php
include 'includes/head.php';
?>
<meta name="description" content="Water Analyzers Company">
<title>Water Analyzers Company | Home Page</title>
</head>

<body>
<?php
include 'includes/navigation.php';
?>
<main>
  <header class="home-header"> 
    <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
      <ol class="carousel-indicators">
        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-2" data-slide-to="1"></li>
        <li data-target="#carousel-2" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <a href="products/product/">
          <picture>
            <source type="image/webp" srcset="img/carosel3.webp">
            <source type="image/png" srcset="img/carosel3.png">
            <img src="img/carosel3.webp" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption">
            <div>
              <h2>Water Monitoring One</h2>
              <p>Lorem ipsum dolor. <br>
                Lorem ipsum dolor. <br>
                Lorem ipsum dolor.</p>
              <span class="btn">See more</span> <!-- btn-sm btn-outline-secondary --> 
            </div>
          </div>
          </a> </div>
        <!-- /.carousel-item -->
        
        <div class="carousel-item"> <a href="products/product/">
          <picture>
            <source type="image/webp" srcset="img/carosel1.webp">
            <source type="image/png" srcset="img/carosel1.png">
            <img src="img/carosel1.webp" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption justify-content-center align-items-center">
            <div>
              <h2>Water Monitoring Two</h2>
              <p>Lorem ipsum dolor. <br>
                Lorem ipsum dolor. <br>
                Lorem ipsum dolor.</p>
              <span class="btn">See more</span> </div>
          </div>
          </a> </div>
        <!-- /.carousel-item -->
        <div class="carousel-item"> <a href="products/product/">
          <picture>
            <source type="image/webp" srcset="img/carosel2.webp">
            <source type="image/png" srcset="img/carosel2.png">
            <img src="img/carosel2.webp" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption justify-content-center align-items-center">
            <div>
              <h2>Water Monitoring Three</h2>
              <p>Lorem ipsum dolor. <br>
                Lorem ipsum dolor. <br>
                Lorem ipsum dolor.</p>
              <span class="btn">See more</span> </div>
          </div>
          </a> </div>
        <!-- /.carousel-item --> 
      </div>
      <!-- /.carousel-inner --> 
      <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <!-- /.carousel --> 
    
    <!-- /.container --> 
  </header>
  <!-- Introducing Last product -->
  <div class="home-1 margin-1">
    <h1>Oil in Water, Hydrocarbon, THM<br>
      and Ammonia Analyzers</h1>
  </div>
  <!-- SECTION WITH BUTTONS -->
  <div class="home-2 margin-1 on-scroll">
    <section>
      <h2>Title</h2>
      <ul>
        <li><a href="products/product/">Product #1</a></li>
        <li><a href="products/product/">Product #2</a></li>
        <li><a href="products/product/">Product #3</a></li>
        <li><a href="products/product/">Product #4</a></li>
        <li><a href="products/product/">Product #5</a></li>
        <li><a href="products/product/">Product #5</a></li>
      </ul>
      <a href="contacts/index.php" class="link-green">Find a Distributor</a> <a href="contacts/" class="btn">Contact Us</a> </section>
  </div>
  <!-- SECTION WITH CARDS -->
  <div class="home-3 margin-1 on-scroll">
    <section>
      <div class="wrapper flex-row">
        <article class="card bk-white">
          <picture class="img">
            <source type="image/webp" srcset="water-analyzers-website/img/products/oil-in-water-analyzer-400x300.webp">
            <source type="image/jpeg" srcset="water-analyzers-website/img/products/oil-in-water-analyzer-400x300.jpg">
            <img src="img/products/oil-in-water-analyzer-400x300.jpg" alt="Immagine"> </picture>
          <h3>Water Monitoring Three</h3>
          <h4>Title</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat optio corrupti maxime animi voluptates nobis molestias. Consequatur, odit illo iste rerum nemo explicabo, dolor sunt nobis sequi vel quas id!</p>
          <a href="products/product/" class="btn">Read more</a> </article>
        <article class="card bk-white">
          <picture class="img">
            <source type="image/webp" srcset="img/products/ms3500-ammonia-analyzer-wastewater-400x300.webp">
            <source type="image/jpeg" srcset="img/products/ms3500-ammonia-analyzer-wastewater-400x300.jpg">
            <img src="img/products/ms3500-ammonia-analyzer-wastewater-400x300.jpg" alt="Immagine"> </picture>
          <h3>Water Monitoring Three</h3>
          <h4>Title</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat optio corrupti maxime animi voluptates nobis molestias. Consequatur, odit illo iste rerum nemo explicabo, dolor sunt nobis sequi vel quas id!</p>
          <a href="products/product/" class="btn">Read more</a> </article>
        <article class="card bk-white">
          <picture class="img">
            <source type="image/webp" srcset="img/products/ms2000-thm-analyzer-400x320.webp">
            <source type="image/jpeg" srcset="img/products/ms2000-thm-analyzer-400x320.jpg">
            <img src="img/products/ms2000-thm-analyzer-400x320.jpg" alt="Immagine"> </picture>
          <h3>Water Monitoring Three</h3>
          <h4>Title</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat optio corrupti maxime animi voluptates nobis molestias. Consequatur, odit illo iste rerum nemo explicabo, dolor sunt nobis sequi vel quas id!</p>
          <a href="products/product/" class="btn">Read more</a></article>
      </div>
      <p><a href="products/" class="link-green">See all products</a></p>
    </section>
  </div>
  <!-- form contact -->
<section class="home-4 bk-grey">
  <form class="form-wrap" id="contactForm" data-toggle="validator">
    <input type="text" name="name" id="name" placeholder="Name" required data-error="Please enter your name">
    <input type="tel" name="phone" id="phone" placeholder="+1 555 555 555" required data-error="Please enter your phone">
    <input type="email" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
    <input type="submit" id="submit" value="Request a Call" class="btn">
  </form>
</section>

  <!-- SECTION FLEX -->
  <div class="home-5 margin-1 on-scroll">
    <section>
      <div class="flex-row">
        <div class="box-1"></div>
        <div class="box-2 py-1">
          <article>
            <h2>Title 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
            <a href="products/product/" class="btn">Learn More</a> 
            <!-- 
          <a href="#" class="link-green">Application Note</a> 
           --> 
            
          </article>
        </div>
      </div>
      <div class="flex-row">
        <div class="box-1"></div>
        <div class="box-2 py-1">
          <article>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
            <a href="products/product/" class="btn">Learn More</a> <a href="#" class="link-green">Read the Detailed Study</a> </article>
        </div>
      </div>
    </section>
  </div>
  
  <!-- SECTION WITH CARDS CASES -->
  <div id="home-cases" class="home-3 margin-1 on-scroll">
    <section>
      <div class="wrapper flex-row">
        <article class="card bk-white">
          <picture>
            <source type="image/webp" srcset="img/case-study-river-intake-monitor-400w.webp">
            <source type="image/jpeg" srcset="img/case-study-river-intake-monitor-400w.jpg">
            <img src="img/case-study-river-intake-monitor-400w.jpg" alt="Immagine"> </picture>
          <h3>Title 3</h3>
          <h4>Product Series Number</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus esse maiores labore veritatis consectetur dolores, nisi officiis ducimus facere sint neque sequi at pariatur, doloribus asperiores voluptatem officia, saepe culpa dolore, dolorum mollitia dolorem? Pariatur, assumenda, repellendus. Voluptas, omnis deserunt, quis praesentium laborum facere dolore voluptatibus, magnam neque est ex.</p>
          <a href="#" class="btn">Read Full Case Study</a> </article>
        <article class="card bk-white">
          <picture>
            <source type="image/webp" srcset="img/case-study-ro-membrane-protection-400w.webp">
            <source type="image/jpeg" srcset="img/case-study-ro-membrane-protection-400w.jpg">
            <img src="img/case-study-ro-membrane-protection-400w.jpg" alt="Immagine"> </picture>
          <h3>Title 3</h3>
          <h4>Product Series Number</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus esse maiores labore veritatis consectetur dolores, nisi officiis ducimus facere sint neque sequi at pariatur, doloribus asperiores voluptatem officia, saepe culpa dolore, dolorum mollitia dolorem? Pariatur, assumenda, repellendus. Voluptas, omnis deserunt, quis praesentium laborum facere dolore voluptatibus, magnam neque est ex.</p>
          <a href="#" class="btn">Read Full Case Study</a></article>
        <article class="card bk-white">
          <picture>
            <source type="image/webp" srcset="img/case-study-thm-in-drinking-water-400w.webp">
            <source type="image/jpeg" srcset="img/case-study-thm-in-drinking-water-400w.jpg">
            <img src="img/case-study-thm-in-drinking-water-400w.jpg" alt="Immagine"> </picture>
          <h3>Title 3</h3>
          <h4>Product Series Number</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus esse maiores labore veritatis consectetur dolores, nisi officiis ducimus facere sint neque sequi at pariatur, doloribus asperiores voluptatem officia, saepe culpa dolore, dolorum mollitia dolorem? Pariatur, assumenda, repellendus. Voluptas, omnis deserunt, quis praesentium laborum facere dolore voluptatibus, magnam neque est ex.</p>
          <a href="#" class="btn">Read Full Case Study</a> </article>
      </div>
      <p><a href="casestudies/" class="link-green">See all the case studies</a></p>
    </section>
  </div>
  
  <!-- SECTION DOCUMENTATION -->
  <section class="home-7 flex-row margin-1 on-scroll">
    <div class="box-1">
      <article class="card bk-white">
        <h2>Documentation</h2>
        <p>In this section you can find all the documentation related to our products. </p>
      </article>
    </div>
    <article class="box-2 bk-white py-1">
      <h3>Documentation</h3>
      <hr>
      <ul class="simple-nav">
        <li>Title <br>
          <a href="#" class="link-green">PDF</a></li>
        <li>Title <br>
          <a href="#" class="link-green">PDF</a></li>
        <li>Title<br>
          <a href="#" class="link-green">PDF</a></li>
        <li>Title <br>
          <a href="#" class="link-green">PDF</a></li>
        <li>Title <br>
          <a href="#" class="link-green">PDF</a></li>
      </ul>
      <hr>
      <a href="documentation/" class="link-green">See the Case Studies</a> </article>
  </section>
  
  <!-- SECTION home about -->
  <section class="home-8 wrapper margin-1 py-1 on-scroll">
    <div class="box-1">
      <picture>
        <source type="image/webp" srcset="img/meeting.webp">
        <source type="image/jpeg" srcset="img/meeting.jpg">
        <img src="img/meeting.jpg" alt="meeting"> </picture>
    </div>
    <article class="box-2">
      <h3>About Us.</h3>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus atque eligendi, magnam, sed obcaecati pariatur libero fuga blanditiis nemo fugiat eum vitae consequatur laboriosam consequuntur incidunt in, quaerat excepturi aspernatur assumenda. Cum temporibus expedita id debitis quasi, sequi quam rem nisi itaque qui porro quibusdam, optio eligendi libero cupiditate iste esse placeat quisquam laudantium.</p> 
     <p>Quaerat, odio voluptatem ipsam distinctio perspiciatis unde ducimus eveniet fugit dolorum veniam commodi magnam ad magni. Saepe recusandae cupiditate magnam perferendis assumenda repellendus totam inventore aliquam molestias asperiores officiis necessitatibus perspiciatis hic et rerum, labore, illo. </p>
      <a href="about-us/" class="btn">Read More About Us</a> </article>
  </section>
  
  <!-- FOOTER HERE -->
  <?php
  include 'includes/footer.php';
  ?>
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>

</html>
