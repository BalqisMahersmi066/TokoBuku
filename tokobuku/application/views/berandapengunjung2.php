<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Daftar Toko Buku</title>
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
    </style>
    <link href="<?php echo site_url('css/bootstrap-responsive.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('ico/apple-touch-icon-144-precomposed.png '); ?>" 
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('ico/apple-touch-icon-114-precomposed.png '); ?>" 
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('ico/apple-touch-icon-72-precomposed.png '); ?>" 
                    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('ico/apple-touch-icon-57-precomposed.png '); ?>" 
                                   <link rel="shortcut icon" href="<?php echo site_url('ico/favicon.png '); ?>" 
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">SISTEM INFORMASI ETALASE TOKO BUKU</a>
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-right">
              <div class="nav-collapse collapse">
                <ul class="nav">
                  
                <li><a href="<?php echo site_url('berandaadmin')?>">Beranda</a></li> 
             <li class="active"><a href="#">Daftar Toko Buku</a>
                 
                  
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wilayah <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Surabaya Utara</a></li>
                      <li><a href="#">Surabaya Selatan</a></li>
                      <li><a href="#">Surabaya Barat</a></li>
                      <li><a href="#">Surabaya Timur</a></li>      
                    </ul>
                  </li>
                  
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nama Toko buku <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Gramedia</a></li>
                      <li><a href="#">Togamas</a></li>
                      <li><a href="#">Uranus</a></li>

                    </ul>
                  </li>
                  
                </ul>
              <input class="span2" type="cari" placeholder="Cari">
              <button type="submit" class="btn">CARI</button>

            </form>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>

  <div class="container-fluid">
  <div class="row-fluid">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Daftar Toko Buku</h1>
        
      </div>

      <!-- Example row of columns -->
      
        <div class="span6">
          <h2>Gramedia Kertajaya</h2>
           <p><img src="img/_gramed.jpg" width="300" height="300" alt="gramed" /></p>
         </div>
		 
		 <div class = "span6">  
           <p>Nama Toko : Gramedia Kertajaya
           <p>Alamat : Kertajaya Indah No.29 A Surabaya
          <p>Nomer Telepon : (031) 866886       
          <p>Jam Operasional : 09.00 - 22.00          
         <h3>Komentar</h3>
         <img src="img/11549280-men-and-woman-police-with-hat-cartoons-vector-illustration-Stock-Vector.png" width="100" height="100" alt="sitta">
		<h5>Masitha</h5>
		<p>Menurut saya, gramedia merupakan pusat toko buku, tapi mahalnya itu lo minta ampun :D
          
          <p><a class="btn" href="#">Tulis Komentar &raquo;</a></p>
        </div>
       

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
	</div>
	</div>
    </div> 
	
    <!--/span--><!-- /container -->

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
