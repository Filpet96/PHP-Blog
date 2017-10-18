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

  <title></title>

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
          <!-- <div class="container">
                  <div class="row centered-form">
                  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4" id="fixwid">
                  	<div class="panel panel-default">
                  		<div class="panel-heading">
          			    		<h3 class="panel-title">Create Post</h3>
          			 			</div>
          			 			<div class="panel-body">
                        <form role="form" action="index.php" method="POST">
          			    			<div class="row">
          			    				<div class="col-xs-4 col-sm-4 col-md-4">
          			    					<div class="form-group">
          			                <input type="text" name="Author" id="firstname" class="form-control input-sm" placeholder="Author">
          			    					</div>
          			    				</div>

          			    			</div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
          			    			<div class="form-group">
          			    				<input type="text" name="title" id="title" class="form-control input-sm marginfix" placeholder="Title">
          			    			</div>
                        </div>
          			    			<div class="row">
          			    				<div class="col-xs-9 col-sm-9 col-md-9">
          			    					<div class="form-group">
          			    						<textarea rows="5" name="text" id="text" class="form-control input-sm" placeholder="Text"></textarea>
          			    					</div>
          			    				</div>

          			    			</div>

          			    			<input type="submit" value="Post" class="btn btn-info btn-block">

          			    		</form>
          			    	</div>
          	    		</div>
              		</div>
              	</div>
              </div> -->
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
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
