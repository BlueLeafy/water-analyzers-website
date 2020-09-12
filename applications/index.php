<?php
include '../includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Applications</title>
<meta name="description" content="Applications" />
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
    <h1 class="py-left-2">Applications of the Analyzers</h1>
  </div>
</header>
<main>
  <div id="center-container" class="py-2 margin-1">
    <section id="application-grid"> <a href="application/">
      <article class="bg-medium">
        <h2 class="text-green">Application #1</h2>
      </article>
      </a> <a href="application/">
      <article class="bg-medium">
        <h2 class="text-green">Application #2</h2>
      </article>
      </a> <a href="application/">
      <article class="bg-medium">
        <h2 class="text-green">Application #3</h2>
      </article>
      </a> <a href="application/">
      <article class="bg-medium">
        <h2 class="text-green">Application #4</h2>
      </article>
      </a> </section>
  </div>
  <?php
  include '../includes/footer.php';
  ?>
</body>
</html>
