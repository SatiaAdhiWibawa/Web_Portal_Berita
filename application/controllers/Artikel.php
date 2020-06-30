<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Artikel extends CI_Controller {
    public function index() {
        $data['artikel'] = $this->M_Artikel->view_artikel();
        $data['konten'] = "view_artikel_front";
        $this->load->view('templet_front', $data);
    }

    public function artikel_kategori()
    {
        $data['artikel'] = $this->M_Artikel->view_artikel_kategori();
        $data['konten'] = "view_artikel_front";
        $this->load->view('templet_front', $data);
    }

}