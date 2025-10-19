<?php

class penerimaan extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_penerimaan(){
        $data=$this->gunakan_model('mdl_penerimaan')->ambil_data();
        $this->tampilkan_view('tampilan_penerimaan',$data);
    }
}