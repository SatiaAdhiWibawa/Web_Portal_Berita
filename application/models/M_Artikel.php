<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Artikel extends ci_Model {
    public function __construct()
    {
        parent::__construct();
    }
    
    // Read
    public function view_artikel()
    {
        return $this->db->query("SELECT * FROM tbl_artikel AS ta JOIN tbl_kategori AS tk ON ta.`id_kategori` = tk.`id_kategori`")->result();
    }

    // Create
    public function proses_tambah()
    {
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $direktori = "assets/gallery/$nama_file";
        if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file,$direktori);
        }
        $data=array(
        "nama_artikel"=>$this->input->post('nama_artikel'),
        "id_kategori"=>$this->input->post('id_kategori'),
        "gambara"=>$nama_file, 
        "isi_artikel"=>$this->input->post('isi_artikel'),
        );
        
        $this->db->insert("tbl_artikel",$data);
    }

    // Update
    public function edit_artikel($id)
    {
        $this->db->where("id_artikel",$id);
        return $this->db->get("tbl_artikel")->row();
    }
    public function proses_edit($id)
    {

        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $direktori = "assets/gallery/$nama_file";
        if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file,$direktori);
        }
        $data=array(
        "nama_artikel"=>$this->input->post('nama_artikel'),
        "id_kategori"=>$this->input->post('id_kategori'),
        "gambara"=>$nama_file, 
        "isi_artikel"=>$this->input->post('isi_artikel'),
        );
        $this->db->where("id_artikel",$id);
        return $this->db->update("tbl_artikel",$data);
    }


    // Delete
    public function hapus_artikel($id)
    {
        $this->db->where("id_artikel",$id);
        return $this->db->delete("tbl_artikel");
    }

    // ambil arikel berdasarkan katagory by id
    public function view_artikel_kategori()
    {
    $kondisi = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM tbl_artikel AS ta JOIN tbl_kategori AS tk ON ta.`id_kategori` = tk.`id_kategori` WHERE tk.id_kategori = $kondisi")->result();
    }

 
  
}

?>