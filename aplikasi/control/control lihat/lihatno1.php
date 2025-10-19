<?php

class lihatno1 extends controller{
	public function index()
	{
		$this->tampilkan_view("lihat_1");
	}


	// kode untuk menampilkan data
	// public function kosong()
	// {
	// 	// menampilkan halaman kosong
	// 	// $data=$this->gunakan_model('mdl_pemesanan')->ambil_well();
	// 	$data=$this->gunakan_model('no1')->ambil_data();
	// 	$this-> tampilkan_view("kosong",$data);
	
	// }
}