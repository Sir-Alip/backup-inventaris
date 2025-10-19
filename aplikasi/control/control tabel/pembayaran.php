<?php

class pembayaran extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_pembayaran(){
        $data=$this->gunakan_model('mdl_pembayaran')->ambil_data();
        $this->tampilkan_view('tampilan_pembayaran',$data);
    }
}