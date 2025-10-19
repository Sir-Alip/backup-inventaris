<?php

class daftar_pemesanan extends controller{
	// public function index()
	// {
		// $this->tampilkan_view("selamat_datang");
	// }


    public function data_daftarpemesanan(){
    $data=$this->gunakan_model('no1')->ambil_data();
        $this->tampilkan_view('tampilan_data1',$data);
        cetak_var($data);
    }

    public function pemesanan_barang($x) {
    $data=$this->gunakan_model('no1')->ambil_satu_id_r_pemesanan($x);
    $this->tampilkan_view('lihat_1',$data);
    }


    public function testData1(){
        // $pesan1['pesanan'] = [

        //     "no" => "3",
        //     "tgl" => "2025-12-03"
        // ];

        $pesan1 = [
            [  "nama_brg" => "Tracking pole", "kuantitas_brg" => 5, "harga" => "95.000", "jumlah"=>"475.000"],

            [  "nama_brg" => "Hydropack", "kuantitas_brg" => 5, "harga" => "150.000", "jumlah"=>"750.000"]
            
          
        ];

        $pesan1["total"] = "1.225.000";

        // cetak_var($pesan1);

        $this->tampilkan_view("/lihat/lihat_1", $pesan1);
    }

     public function testData2(){
        $pesan1['pesanan'] = [

            "no" => "3",
            "tgl" => "2025-12-03"
        ];

        $pesan1["barang"] = [
            [  "nama_brg" => "Tracking pole", "kuantitas_brg" => 5, "harga" => "95.000", "jumlah"=>"475.000"],

            [  "nama_brg" => "Hydropack", "kuantitas_brg" => 5, "harga" => "150.000", "jumlah"=>"750.000"]
            
          
        ];

        $pesan1["total"] = "1.225.000";

        // cetak_var($pesan1);

        $this->tampilkan_view("/lihat/lihat_2", $pesan1);
    }
}

