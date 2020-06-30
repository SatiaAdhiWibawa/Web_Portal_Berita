<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Tambah Artikel</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Kelola Artikel</a>
                </li>
                <li class="breadcrumb-item active">Tambah Artikel</li>
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
                        <form action="<?php echo base_url()?>index.php/kelola_artikel/proses_tambah" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h4 class="card-title m-t15">Form Input Artikel</h4>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group has-success">
                                            <label class="controllabel">Nama Artikel</label>
                                            <input type="text" id="firstName" required class="form-control input-default" name="nama_artikel">
                                        </div>
                                    </div>
                                </div>
                                


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-success">
                                            <label class="controllabel">Kategori</label>
                                            <select class="formcontrol" name="id_kategori">
                                                <?php 
                                                foreach
                                                    ($list_kategori as $list) {
                                                        echo "<option value='$list->id_kategori'>$list->nama_kategori</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row p-t-20">
                                     <div class="col-md-12">
                                        <div class="form-group has-success">
                                            <label class="controllabel">Gambar</label>
                                            <input id="gambar" type="file" required class="formcontrol input-default" name="gambar">
                                        </div>
                                    </div>
                                </div>

                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-success">
                                            <label class="controllabel">Isi Artikel</label>
                                            <textarea class="textarea_edit or form-control" rows="15" placeholder="Enter text ..." style="height:300px" name="isi_artikel"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-success"> 
                                    <i class="fa facheck"></i> Simpan
                                </button>
                                    <a href="<?php echo base_url();?>index.php/kelola_artikel/view_artikel">
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