<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kelola_Artikel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_artikel');
        $this->load->model('m_kategori');
    }
    // Read
    public function view_artikel()
        {
        $data['artikel']=$this->m_artikel->view_artikel();
        $data['konten']="view_artikel";
        $this->load->view('template_back',$data);
    }
    // Create
    public function tambah_artikel()
    {
        $data['list_kategori']=$this->m_kategori->ListKategori();
        $data['konten']="tambah_artikel";
        $this->load->view('template_back',$data);
    }

    // Proses_Create
    public function proses_tambah()
    {
        $data['artikel']=$this->m_artikel->proses_tambah();
        $msg="<script>alert('Data Berhasil Ditambah!')</script>";
        $this->session->set_flashdata("pesan",$msg);
        redirect("kelola_artikel/view_artikel");
    }

    // Get_Data_By_ID
    public function edit_artikel($id)
    {
        $data['list_kategori']=$this->m_kategori->ListKategori();
        $data['artikel']=$this->m_artikel->edit_artikel($id);
        $data['konten']="edit_artikel";
        $this->load->view('template_back',$data);
    }

    // Proses_Update
    public function proses_edit($id)
    {
        $this->m_artikel->proses_edit($id);
        $msg="<script>alert('Data Berhasil Diedit')</script>";
        $this->session->set_flashdata('pesan',$msg);
        redirect("kelola_artikel/view_artikel");
    }
    // Delete

    public function hapus_artikel($id)
    {
        $this->m_artikel->hapus_artikel($id);
        $msg="<script>alert('Data Berhasil Dihapus')</script>";
        $this->session->set_flashdata('pesan',$msg);
        redirect("kelola_artikel/view_artikel");
    }
}

?>