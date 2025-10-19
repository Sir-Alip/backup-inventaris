<?php

class daftar_kasir extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftar_kasir(){
        $data=$this->gunakan_model('no9')->ambil_data();
        $this->tampilkan_view('tampilan_data9',$data);
    }
}