<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:rgba(0,0,0,.6)!important;">
<a class="navbar-brand" href="#"><font style="color:#00e6e6;">Avengers</font>Endgame.<font style="color:#33ff33;">com</font></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/beranda">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/beranda/artikel">Artikel</a>
			</li>


			<li class="nav-item dropdown">
				
			<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				<?php 
				$query= $this->db->get('tbl_kategori')->result(); 
				foreach ($query as $r) : ?>
				<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/beranda/artikel_kategori/<?php echo $r->id_kategori; ?>"><?php echo $r->nama_kategori; ?></a>
				<?php endforeach; ?>
				</div>
			</li>
			

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/gallery">Gallery</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/login">Login</a>
			</li>
		</ul>
	</div>
</nav>