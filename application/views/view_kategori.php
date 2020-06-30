<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Kategori</h3>
    </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Kelola Kategori</a>
                </li>
                <li class="breadcrumb-item active">View Kategori</li>
            </ol>
        </div>
</div>

 <!-- End Bread crumb -->
 <!-- Container fluid -->

 <div class="container-fluid">
 <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kategori 
                        <a href="<?php echo base_url();?>index.php/kelola_kategori/tambah_kategori">
                            <button type="button" class="btn btn-info btn-flat btn-sm m-b10 m-l-5">Tambah Kategori</button>
                        </a>
                    </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                          
                                <?php
                                $n=1; foreach($kategori as $data)
                                {?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $n++?>
                                    </td>
                                    <td>
                                        <?php echo $data->nama_kategori ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url();?>index.php/kelola_kategori/edit_kategori/<?php echo $data->id_kategori ?>">
                                            <i class="fa fa-edit">Edit</i>
                                        </a>
                                        |
                                        <a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_kategori/hapus_kategori/<?php echo $data->id_kategori ?>">
                                            <i class="fa fa-trash">Hapus</i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid -->
