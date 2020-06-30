<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Beranda extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Artikel');
        }

        public function index()
        {
            $data['artikel']=$this->M_Artikel->view_artikel();
            $data['konten']="view_beranda" ;
            $this->load->view('template_front',$data);
        }

        public function artikel()
        {
            $data['artikel']=$this->M_Artikel->view_artikel();
            $data['konten']="view_artikel_front";
            $this->load->view('template_front',$data);
        }

        public function artikel_kategori()
        {
            $data['artikel']=$this->M_Artikel->view_artikel_kategori();
            $data['konten']="view_artikel_front";
            $this->load->view('template_front',$data);
        }

}
?>
