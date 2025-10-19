<?php

class nama_barang extends controller{
public function index()
{
$this->tampilkan_view("selamat_datang");
}


public function data_nama_barang(){
$data=$this->gunakan_model('mdl_nama_barang')->ambil_data();
$this->tampilkan_view('tampilan_nama_barang',$data);
}
}