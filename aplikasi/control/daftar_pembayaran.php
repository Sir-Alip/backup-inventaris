<?php

class daftar_pembayaran extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftarpembayaran(){
        $data=$this->gunakan_model('no3')->ambil_data();
        $this->tampilkan_view('tampilan_data3',$data);
    }
}