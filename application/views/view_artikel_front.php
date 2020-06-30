<BR>
<div class="row">
<?php $n=1; foreach($artikel as $data) {?>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-2">
                <img src="<?php echo base_url()?>assets/gallery/<?php echo $data->gambara ?>" witdh="150px" height="150px">
                <br>
            </div>
            <div class="col-lg-8">
                <h2><?php echo $data->nama_artikel ?></h2> 
                <p align="justify"><?php echo $data->isi_artikel ?></p>
                <br><hr> 
            </div>
            <div class="col-lg-2">
                <br><br>
                <p><small>Kategori Berita : <?php echo $data->nama_kategori ?></small></p>
            </div>
        </div>
    </div>
    <?php }?>
</div>