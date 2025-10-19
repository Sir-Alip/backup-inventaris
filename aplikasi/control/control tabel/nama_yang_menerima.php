<?php

class nama_yang_menerima extends controller{
	public function index()
	{
		$this->tampilkan_view("selamat_datang");
	}


    public function data_nama_yang_menerima(){
        $data=$this->gunakan_model('mdl_nama_yang_menerima')->ambil_data();
        $this->tampilkan_view('tampilan_nama_yang_menerima',$data);
    }
}