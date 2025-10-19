<?php

class daftar_barang extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftar_barang(){
        $data=$this->gunakan_model('no6')->ambil_data();
        $this->tampilkan_view('tampilan_data6',$data);
    }
}