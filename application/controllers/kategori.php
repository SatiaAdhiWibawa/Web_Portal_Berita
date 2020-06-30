<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class kategori extends CI_Controller {
        public function index()
        {
            $data['kategori']=$this->M_Kategori->edit_kategori();
            $data['konten']="front/views_artikel";
            $this->load->view('template_front', $data);
        }
    }