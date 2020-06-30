<!DOCTYPE>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?php echo base_url()?>assets/front/images/icon.ico">
		<title>Fans Marvel</title>
		<link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/csssaya.css">
		<!-- galerryfront -->
		<link href="<?php echo base_url()?>assets/front/css/galfont.css" rel="stylesheet">
			
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/css/mainfix.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/galerryfront/cards-gallery/cards-gallery.css">	
		<link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/galcss1.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/galcss2.css" />
	</head>

<body background="<?php echo base_url()?>/assets/front/images/logo25.png" >

<!--Navigation Bar-->
<header>
 <?php $this->load->view('nav_menu/menu_front.php')?>
</header>
<!--Navigation Bar-->

<?php if ($this->uri->segment(2) == '') { ?>
	
	<?php } ?>
<main role="main">
<!--Carousel-->
<div class="container-fluid">
	<div style="opacity:0;">sengaja saya hiden by : Satia Adhi</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" >
					<img class="first-slide" src="<?php echo base_url()?>assets/front/images/bg3.jpg" alt="Firstslide">
						<div class="carousel-caption text-left d-none d-md-block">
							<h1>Avengers: Endgame</h1>
							<p>Para penggemar marvel studio pasti tidak sabar menunggu dirilisnya Avengers: Endgame yang akan segera diputar pada 26 April 2019 di bioskop. </p>
							<p>
								<a class="btn btn-lg btn-primary" href="https://www.marvel.com/movies" role="button" target="_blank">Selengkapnya</a>
							</p>
						</div>
				</div>
				<div class="carousel-item" >
					<img class="second-slide" src="<?php echo base_url()?>assets/front/images/bg1.jpg" alt="Secondslide">
					
						<div class="carousel-caption d-none d-md-block" >
							<h1>Marvel Cinematic Universe (MCU)</h1>
							<p>adalah media waralaba Amerika dan alam semesta bersama yang berpusat pada serangkaian film pahlawan super, independen diproduksi oleh Marvel Studios dan berdasarkan karakter yang muncul dalam publikasi oleh Marvel Comics. </p>
							<p>
								<a class="btn btn-lg btn-primary" href="https://www.marvel.com/" role="button" target="_blank">Selengkapnya</a>
							</p>
						</div>
				</div>
				<div class="carousel-item">
					<img class="third-slide" src="<?php echo base_url()?>assets/front/images/bg2.jpg" alt="Thirdslide">
					
						<div class="carousel-caption text-right d-none d-md-block">
							<h1 id="profil">Avengers : endgame</h1>
							<p>Marvel Studio telah merilis beberapa trailer yang menampilkan para karakter superhero yang akan berlaga di dalam Avengers: Endgame.</p>
							<p>
								<a class="btn btn-lg btn-primary" href="https://id.wikipedia.org/wiki/Avengers:_Endgame" role="button" target="_blank">Selengkapnya</a>
							</p>
						</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>


	</div>
</div>
</main>
<!--Carousel Penutup-->


<!--Grid-->
	<div class="container">
		<?php $this->load->view($konten)?>
	</div>
<!--Grid-->



	<!--footer-->

<footer class="container-fluid" >
	<p class="float-right" >
		<a href="#">Back to top</a>
	</p>
	<p>&copy; 2019 <font style="color:#00e6e6;">Satia</font>Adhi<font style="color:#33ff33;">Wibawa</font> &middot;
		<a href="#"> Privacy</a>&middot;
		<a href="#">Terms</a>
	</p>
</footer>
<!--Penutup footer-->

<!-- </div> -->
</body>
<script src="<?php echo base_url()?>assets/front/js/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
<!-- galerryfront -->

		<script src="<?php echo base_url()?>assets/galerryfront/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="<?php echo base_url()?>assets/front/js/galjs1.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?php echo base_url()?>assets/galerryfront/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url()?>assets/galerryfront/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>assets/galerryfront/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url()?>assets/galerryfront/js/parallax.min.js"></script>
		<script src="<?php echo base_url()?>assets/galerryfront/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url()?>assets/front/js/galjs2.js"></script>
    	<script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    	</script>