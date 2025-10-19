<?php

class rincianpenerimaan extends controller{
public function index()
{
$this->tampilkan_view("selamat_datang");
}


public function data_rincianpenerimaan(){
$data=$this->gunakan_model('mdl_rincianpenerimaan')->ambil_data();
$this->tampilkan_view('tampilan_rincianpenerimaan',$data);
}
}