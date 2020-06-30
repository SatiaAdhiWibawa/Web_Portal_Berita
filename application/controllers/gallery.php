<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class gallery extends CI_Controller {
        public function index()
        {
            $data['gallery']=$this->M_Gallery->view_gallery();
            $data['konten']="front/views_gallery";
            $this->load->view('template_front', $data);
        }
    }