<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Artikel</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Artikel</a></li>
            <li class="breadcrumb-item active">View Artikel</li>
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
                        <h4 class="card-title">Data Artikel <a href="<?php echo base_url();?>index.php/kelola_artikel/tambah_artikel">
                            <button type="button" class="btn btn-info btn-flat btn-sm m-b-10 m-l5">Tambah Artikel</button></a>
                        </h4>
                            <div class="table-responsive m-t-40">
                                <table id="table_id" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Artikel</th>
                                            <th>Nama Kategori</th>
                                            <th>Gambar</th>
                                            <th>Isi Artikel</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
        
                                    
                                    <tbody>
                                    <?php $n=1; foreach($artikel as $data) {?>
                                        <tr>
                                            <td><?php echo $n++?></td>
                                            <td><?php echo $data->nama_artikel ?></td>
                                            <td><?php echo $data->nama_kategori ?></td>
                                            <td><img src="<?php echo base_url()?>assets/gallery/<?php echo $data->gambara ?>" witdh="100px" height="100px"></td>
                                            <td><?php echo $data->isi_artikel ?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>index.php/kelola_artikel/edit_artikel/<?PHP echo $data->id_artikel?>">
                                                    <i class="fa fa-edit">Edit</i>
                                                </a>
                                                    |
                                                <a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_artikel/hapus_artikel/<?PHP echo $data->id_artikel ?>">
                                                    <i class="fa fa-trash">Hapus</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>

                                     
   
                                </table>
                            </div>
                    </div>
                </div>
             </div>
        </div>
    <!-- End PAge Content -->
    </div>
<!-- End Container fluid -->