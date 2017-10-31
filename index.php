<?php
declare(strict_types=1);
require(__DIR__ . '/post.php');
require(__DIR__ . '/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Good-News-Project</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" id="fixtext" href="#">Good News Project</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1 class="my-4">Movie
            <small>blog</small>
          </h1>

        <!-- Blog Post -->
        <?php foreach ($posts as $post): ?>
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $post['Image']; ?>" alt="">
          <div class="card-body">
            <h2 class="card-title"><?php echo $post['Title']; ?></h2>
            <p class="card-text"><?php echo $post['Content']; ?></p>
          </div>
          <div class="card-footer text-muted">
              Posted by:
            <?php echo $post['Author']['name']; ?>
            <?php echo $post['Published']; ?>
            <a id="likes"><?php echo $post['Likes']; ?></a>
          </div>
        </div>
    <?php endforeach; ?>
      </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><?php echo $copyrightby ?></p>
    </div>
  </footer>
</body>
</html>
