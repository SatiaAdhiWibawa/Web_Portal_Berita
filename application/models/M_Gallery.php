<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Gallery extends ci_Model {
        public function __construct()
        {
            parent::__construct();
        }
        

        // Read
        public function view_gallery()
        {
         return $this->db->query("SELECT * FROM tbl_gallery")->result();
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
            "gambar"=>$nama_file,
            "nama"=>$this->input->post('nama'),
            "deskripsi"=>$this->input->post('deskripsi'),
            );
            $this->db->insert("tbl_gallery",$data);
        }

        // Update
        public function edit_gallery($id)
        {
            $this->db->where("id_gallery",$id);
            return $this->db->get("tbl_gallery")->row();
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
            "gambar"=>$nama_file,
            "nama"=>$this->input->post('nama'),
            "deskripsi"=>$this->input->post('deskripsi'),
            );
            $this->db->where("id_gallery",$id);
            return $this->db->update("tbl_gallery",$data);
        }


        // Delete
        public function hapus_gallery($id)
        {
            $this->db->where("id_gallery",$id);
            return $this->db->delete("tbl_gallery");
        }

        //Ambil Data
        function get_detail($gallery)
        {
        $gallery = array('id_gallery' => $gallery);
        return $this->db->get_where('tbl_gallery',$gallery);
        }
}

?>