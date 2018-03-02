<!DOCTYPE html>
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
     <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <!--  <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
     <script src="<?php echo base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>
 -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<header>
      <nav class="navbar navbar-expand-md bg-info navbar-dark">
        <button class="btn btn-info btn-sm" id="menu"  type="button" data-toggle="collapse" aria-hidden="true" aria-expanded="false"
            aria-control="sidebar"data-target="#sidebar">
              <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand " href="#">Me Store</a>
    
       
      </nav>

    </header>
    <div class="container-fuild">
        <div class="row d-flex">
          <nav class="col-md-2 collapse bg-dark  width"  id="sidebar">
              <ul class="list-group bg-dark">
                <li class="list-group-item bg-dark text-center text-white header"><b>Menu</b></li>
                <a href="<?php echo site_url(); ?>/member/home" class="list-group-item list-group-item-dark"><span class="fa fa-home"></span> Home</a>
                <a href="<?php echo site_url(); ?>/member/produk" class="list-group-item list-group-item-dark"><span class="fa fa-magic"></span> Produk</a>
                <a href="<?php echo site_url(); ?>/member/kategori" class="list-group-item list-group-item-dark"><span class="fa fa-tag"></span> Kategori</a>
                <a href="#" class="list-group-item list-group-item-dark">dll</a>
              </ul>
          </nav>
          <main class="col-md-10 bg-light"  >
            <div class="container">
            <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
                <?php $this->load->view("member/$link"); ?>
            </div>
          
          </main>
           
      </div>
    </div>
    
  </body>
</html>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url(); ?>assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
        $(function(){
          i=0;
            $("#menu").click(function(){
              if(i==0)
              {
                i=1;
                $("main").removeClass("col-md-10").addClass("col-md-12");
              }
              else
              {
                $("main").removeClass("col-md-12").addClass("col-md-10");
                i=0;
              }
            });
          if($(window).width()<768){
            $("#sidebar").removeClass("show").addClass("hide").css("height","auto");
           
          }else{
            $("#sidebar").removeClass("hide").addClass("show").css("height","90vh");
  
          }
        });
    </script>
  </body>
</html>
