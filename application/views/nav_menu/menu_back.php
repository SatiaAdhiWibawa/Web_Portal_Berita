<?php
    $level=$this->session->userdata('level');
    if($level=="Admin")

    {
?>

<ul id="sidebarnav">
    <li class="nav-devider"></li>
    <li class="nav-label">Home</li>
    <li>
        <a href="<?php echo base_url()?>index.php/dashboard"><i class="fa fa-home">
        </i><span class="hidemenu">Beranda</span></a>
    </li>
    <li>
        <a href="<?php echo base_url()?>index.php/kelola_artikel/view_artikel">
        <i class="fa fa-book"></i><span class="hide-menu">Kelola Artikel</span></a>
    </li>
    <li>
        <a href="<?php echo base_url()?>index.php/kelola_kategori/view_kategori">
        <i class="fa fa-list"></i><span class="hide-menu">Kelola Kategori</span></a>
    </li>
    <li>
        <a href="<?php echo base_url()?>index.php/kelola_gallery/view_gallery" >
        <i class="fa fa-image"></i><span class="hide-menu">Kelola Gallery</span></a>
    </li>
    <li>
        <a href="<?php echo base_url()?>assets/front/animation-satia.html" >
        <i class="fa fa-book"></i><span class="hide-menu">halaman FAQ</span></a>
    </li>
    <li>
        <a href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-power-off"></i><span class="hidemenu">Logout</span></a>
    </li>
    </ul>
    
    <?php }
    ?>