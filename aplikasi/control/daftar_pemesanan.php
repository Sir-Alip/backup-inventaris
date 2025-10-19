<?php

class daftar_pemesanan extends controller
{
    // public function index()
    // {
    // $this->tampilkan_view("selamat_datang");
    // }


    public function data_daftarpemesanan()
    {
        $data = $this->gunakan_model('no1')->ambil_data();
        $this->tampilkan_view('tampilan_data1', $data);
        cetak_var($data);
    }




    public function testData1()
    {

        $this->tampilkan_view("/lihat/lihat_1", "");
    }

    public function testData2()
    {

        $this->tampilkan_view("/lihat/lihat_2", "");
    }
    public function testData3()
    {

        $this->tampilkan_view("/lihat/lihat_3", "");
    }

    public function testData4()
    {

        $this->tampilkan_view("/lihat/lihat_4", "");
    }

    public function testData5()
    {

        $this->tampilkan_view("/lihat/lihat_5", "");
    }

    public function testData6()
    {

        $this->tampilkan_view("/lihat/lihat_6", "");
    }

    public function testData7()
    {

        $this->tampilkan_view("/lihat/lihat_7", "");
    }

    public function testData8()
    {

        $this->tampilkan_view("/lihat/lihat_8", "");
    }
}
