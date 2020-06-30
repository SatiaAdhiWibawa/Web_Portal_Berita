<!-- Start service Area -->
<section class="gallery-block service-area cards-gallery">

				<div class="container">
        <div class="heading">
	          <h2 style="text-align: center">Gallery</h2>
	        </div>
					<div class="row">

          <?php foreach($gallery as $r) : ?>
						<div class="col-md-4">
              <div class="single-service" >
              <img class="card-img-top" width="525" height="400" src="<?= base_url()?>assets/gallery/<?php echo $r->gambar; ?>" alt="Image">
              
              <div class="overlay overlay-content">
									<h4 class="text-uppercase"><?php echo $r->nama; ?></h4>
									<p><?php echo $r->deskripsi; ?></p>
                  <a class="lightbox d-block mb-4 h-100" href="<?= base_url()?>assets/gallery/<?php echo $r->gambar; ?>"></a>
								</div>
							</div>
            </div>
            <?php endforeach; ?>
          </div>
         </div>
     
</section>
