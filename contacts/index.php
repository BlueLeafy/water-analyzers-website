<?php
include '../includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Contact Us</title>
<meta name="description" content="Contact page for the website." />
<?php
include '../includes/head.php';
?>
</head>

<body>
<?php
include '../includes/navigation.php';
?>

<!-- HEADER -->
<header class="about-header">
  <div class="about-tagline">
    <h1 class="py-left-2">Contact Us</h1>
  </div>
</header>
<main>
  <div id="center-container">
    <section class="margin-1 bg-medium">
      <form id="contactForm" class="contact-form shake py-2" data-toggle="validator">
        <div class="form-group">
          <div class="controls">
            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <button type="submit" id="submit" class="btn btn-success"> Send Message </button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
      </form>
    </section>
    <section id="contact-b" class="margin-1 bg-medium d-inline-flex justify-content-space-between">
      <article class="py-2">
        <h2 class="text-green">Company Name.</h2>
        <address>
        Company Name <br />
        Building <br />
        Street <br />
        City <br />
        Post Code <br />
        Country <br />
        </address>
        <p> P:  +00 (0)000 000 0000 </p>
        <p> E: <a href="#"> info@water-analyzers-website.com</a> </p>
        <p> H: Monday - Friday: 9:00 AM to 5:00 PM </p>
      </article>
      <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4711672.300451059!2d-7.449374069943286!3d54.78662465153366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2suk!4v1599915069760!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>
    
  </div>
  <?php
  include '../includes/footer.php';
  ?>
</body>
</html>
