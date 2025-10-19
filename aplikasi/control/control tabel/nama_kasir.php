<?php

class nama_kasir extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_nama_kasir(){
        $data=$this->gunakan_model('mdl_nama_kasir')->ambil_data();
        $this->tampilkan_view('tampilan_nama_kasir',$data);
    }
}