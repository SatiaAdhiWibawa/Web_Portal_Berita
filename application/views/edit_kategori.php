<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Edit Kategori</h3>
    </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Kelola Kategori</a></li>
                <li class="breadcrumb-item active">Edit Kategori</li>
            </ol>
        </div>
</div>

 <!-- End Bread crumb -->
 <!-- Container fluid -->

 <div class="container-fluid">
 <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url()?>index.php/kelola_kategori/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="post">
                        <div class="form-body">
                            <h4 class="card-title m-t15">Form Edit Kategori</h4><hr>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group has-success">
                                            <label class="controllabel">Nama Kategori</label>
                                            <input type="text" id="firstName" required class="form-control input-default" name="nama_kategori" value="<?php echo $kategori->nama_kategori ?>">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> 
                                <i class="fa facheck"></i> Update
                            </button>
                            <a href="<?php echo base_url();?>index.php/kelola_kategori/view_kategori">
                                <button type="button" class="btn btninverse">Batal</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Row -->
</div>
<!-- End Container fluid -->
</div>