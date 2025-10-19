<?php

class daftar_penerimaan extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_daftarpenerimaan(){
        $data=$this->gunakan_model('no2')->ambil_data();
        $this->tampilkan_view('tampilan_data2',$data);
    }
}