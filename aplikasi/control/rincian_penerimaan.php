<?php

class rincian_penerimaan extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_rincian_penerimaan(){
        $data=$this->gunakan_model('no5')->ambil_data();
        $this->tampilkan_view('tampilan_data5',$data);
    }
}