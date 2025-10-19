<?php

class nama_vendor extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_nama_vendor(){
        $data=$this->gunakan_model('mdl_nama_vendor')->ambil_data();
        $this->tampilkan_view('tampilan_nama_vendor',$data);
    }
}