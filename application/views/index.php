<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=10" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Me Store</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/mestore.css" rel="stylesheet">
<!--     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel.css"> --> <script src="<?php echo base_url(); ?>assets/js/jquery.js" ></script>
  </head>

  <body>dghdfghghf

    <header>
      <nav class="navbar navbar-expand-md bg-info navbar-info">
        <!-- Brand -->
        <a class="navbar-brand text-white" href="#">Me Store</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler text-white"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         Menu
        
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white"  href="#">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo site_url('login') ?>">Login</a>
            </li> 
          </ul>
        </div> 
      </nav>


    </header>

    <main role="main">
     <?php $this->load->view($link); ?>
    </main>

    <footer class="text-muted bg-info">
      <div class="container text-white">
        <p class="float-right">
          <a href="#" class="text-white">Back to top</a>
        </p>
        <p>Album example is &copy; </p>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
<!--     <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-slim.min.js"><\/script>')</script> -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/holder.min.js"></script>
  </body>
</html>
