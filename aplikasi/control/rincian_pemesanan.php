<?php

class rincian_pemesanan extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_rincian_pemesanan(){
        $data=$this->gunakan_model('no4')->ambil_data();
        $this->tampilkan_view('tampilan_data4',$data);
    }
}