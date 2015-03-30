<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url('css/bootstrap.css'); ?>"  rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo site_url('css/bootstrap-responsive.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('ico/apple-touch-icon-144-precomposed.png'); ?>" 
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('ico/apple-touch-icon-114-precomposed.png'); ?>"
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('ico/apple-touch-icon-72-precomposed.png'); ?>"
                    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('ico/apple-touch-icon-57-precomposed.png'); ?>"
                                   <link rel="shortcut icon" href="<?php echo site_url('ico/favicon.png'); ?>"
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">SISTEM INFORMASI ETALASE TOKO BUKU</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="#">Beranda</a></li>
              <li><a href="<?php echo site_url('berandapengunjung')?>">Daftar Toko</a></li>
			  
              <li><a href="#">Jumlah Pengunjung</a></li>
              <li><a href="#">Komentar</a></li>
              <li><a href="#">Konfigrasi</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          <div class="jumbotron">
            <h2>Toko Buku Paling Sering Dilihat</h2>
            
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h3>Gramedia</h3>
              
              <p><img src="img/_gramed.jpg" width="300" height="300" alt="gramed" /></p>
              
			  <p><a class="btn" href="<?php echo site_url('berandapengunjung2')?>">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Togamas</h3>
              
               <p><img src="img/toko-buku-petra-togamas.jpg" width="300" height="300" alt="togamas" /></p>
               
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Uranus</h3>
              
               <p><img src="img/TB Uranus.jpg" width="300" height="300" alt="uranus" /></p>
               
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          
            <div class="hero-unit">
          <div class="jumbotron">
            <h2>Toko Buku Dengan Rating Tertinggi</h2>
            
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h3>Gramedia</h3>
              
              <p><img src="img/_gramed.jpg" width="300" height="300" alt="gramed" /></p>
              
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Togamas</h3>
              
               <p><img src="img/toko-buku-petra-togamas.jpg" width="300" height="300" alt="togamas" /></p>
               
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Uranus</h3>
              
               <p><img src="img/TB Uranus.jpg" width="300" height="300" alt="uranus" /></p>
               
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
         
          
          
          <div class="row-fluid">
            <div class="span4">
              
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo site_url('js/jquery.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-transition.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-alert.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-modal.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-dropdown.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-scrollspy.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tab.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tooltip.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-popover.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-button.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-collapse.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-carousel.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-typeahead.js')?>"></script>
    <script>

  </body>
</html>
