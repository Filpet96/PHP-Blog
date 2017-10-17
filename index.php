<?php
require(__DIR__ . '/post.php')

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
  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

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

        <h1 class="my-4">DeLorean
            <small>Blog</small>
          </h1>

          <div class="container">
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
          			                <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name">
          			    					</div>
          			    				</div>
          			    				<div class="col-xs-4 col-sm-4 col-md-4">
          			    					<div class="form-group">
          			    						<input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name">
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
              </div>



        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="./images/delorean.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $firstname; ?></h2>
            <p class="card-text">I'm too loud. I can't believe it. I'm never gonna get a chance to play in front of anybody. George, aren't you gonna kiss me? Without any sugar. What's the meaning of this. Thank you. In about thirty years.

This is uh, this is heavy duty, Doc, this is great. Uh, does it run on regular unleaded gasoline? Hey George, heard you laid out Biff, nice going. You're gonna break his arm. Biff, leave him alone. Let him go. Let him go. Whoa, they really cleaned this place up, looks brand new. That's right, twenty five years into the future. I've always dreamed on seeing the future, looking beyond my years, seeing the progress of mankind. I'll also be able to see who wins the next twenty-five world series.</p>

          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>




      </div>




        <!-- Side Widget -->


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Filip Petersson 2017</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
