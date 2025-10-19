<?php

class pemesanan extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_pemesanan(){
        $data=$this->gunakan_model('mdl_pemesanan')->ambil_data();
        $this->tampilkan_view('tampilan_pemesanan',$data);
    }
}