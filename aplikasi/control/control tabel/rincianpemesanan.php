<?php

class rincianpemesanan extends controller{
public function index()
{
$this->tampilkan_view("selamat_datang");
}


public function data_rincianpemesanan(){
$data=$this->gunakan_model('mdl_rincianpemesanan')->ambil_data();
$this->tampilkan_view('tampilan_rincianpemesanan',$data);
}
}