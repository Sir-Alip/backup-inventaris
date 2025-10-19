<?php

class daftar_vendor extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftar_vendor(){
        $data=$this->gunakan_model('no7')->ambil_data();
        $this->tampilkan_view('tampilan_data7',$data);
    }
}