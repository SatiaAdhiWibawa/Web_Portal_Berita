<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {
	public function index()
	{
	echo "Saat ini kita sedang berada pada Controllers
	Home";
	}

	//function bisa di panggil dalam url, dan akan menampilan hasil dari function tersebut
	public function codeigniter()
	{
	echo "Saat ini kita sedang berada pada Controllers
	Home dan Function codeigniter";
	}

	//Function ke 2 cara memanggil : http://localhost/codeIgniter/index.php/home/bootstrap
	public function bootstrap()
	{
	echo "Saat ini kita sedang berada pada Controllers
	Home dan Function bootstrap";
	}

	/*
	Sesuai dengan aturan cara pemanggilan function dalam Controller,
adalah dengan memanggil Controllers terlebih dahulu kemudian di ikuti
dengan nama functionnya, sekarang kita punya dua function yang kita
buat tadi dalam Controller Home, untuk memanggil function terakhir yang
kita buat yaitu function bootsrap maka url nya seperti berikut ini.
*/

	//Function ke 2 cara memanggil : http://localhost/codeIgniter/index.php/home/menampilkan_view
	
	public function menampilkan_view()
	{
	$this->load->view('halaman_home');
	}

}
?>