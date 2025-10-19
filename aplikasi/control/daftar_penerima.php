<?php

class daftar_penerima extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftar_penerima(){
        $data=$this->gunakan_model('no8')->ambil_data();
        $this->tampilkan_view('tampilan_data8',$data);
    }
}