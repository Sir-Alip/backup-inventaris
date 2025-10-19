<?php
class no1
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

	public function ambil_data()
	{

		$a = "SELECT
	rincian_pemesanan.id_pemesanan,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    nama_vendor.nama_vendor,
    nama_vendor.alamat_vendor,
    nama_vendor.no_telp_vendor,
    agregat3.jumlah_jenis_barang,
    agregat3.total_nilai_penerima,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima AS nama_penerima,
   	agregat6.total_nilai_diterima,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir
FROM
	rincian_pemesanan
LEFT JOIN
	pemesanan
ON
	rincian_pemesanan.id_pemesanan=pemesanan.id
LEFT JOIN 
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
left JOIN
	(SELECT 
rincian_pemesanan.id_pemesanan,
COUNT(rincian_pemesanan.kuantitas_pesanan) jumlah_jenis_barang, 
SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) 
 total_nilai_penerima
 FROM
 rincian_pemesanan
 GROUP BY
 rincian_pemesanan.id_pemesanan)agregat3
ON
	rincian_pemesanan.id_pemesanan=agregat3.id_pemesanan	
LEFT JOIN
	penerimaan
ON
	rincian_pemesanan.id_pemesanan=penerimaan.id
LEFT JOIN
	nama_yang_menerima
ON
	penerimaan.id_yang_menerima=nama_yang_menerima.id
LEFT JOIN
	(SELECT
	rincian_penerimaan.id_penerimaan,
	SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_penerimaan) agregat6
ON
	rincian_pemesanan.id_pemesanan=agregat6.id_penerimaan
LEFT JOIN
	pembayaran
ON
	rincian_pemesanan.id_pemesanan=pembayaran.id
LEFT JOIN
	nama_kasir
ON 	
	pembayaran.id_kasir=nama_kasir.id
GROUP BY
	rincian_pemesanan.id_pemesanan
    ";
		$this->dataku->isi_sql($a);
		return $this->dataku->ambil_banyak_baris();
	}

	public function ambil_satu_id_r_pemesanan($n)
	{
		$a = "SELECT
	rincian_pemesanan.id_pemesanan,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    nama_vendor.nama_vendor,
    nama_vendor.alamat_vendor,
    nama_vendor.no_telp_vendor,
    agregat3.jumlah_jenis_barang,
    agregat3.total_nilai_penerima,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima AS nama_penerima,
   	agregat6.total_nilai_diterima,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir
FROM
	rincian_pemesanan
LEFT JOIN
	pemesanan
ON
	rincian_pemesanan.id_pemesanan=pemesanan.id
LEFT JOIN 
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
left JOIN
	(SELECT 
rincian_pemesanan.id_pemesanan,
COUNT(rincian_pemesanan.kuantitas_pesanan) jumlah_jenis_barang, 
SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) 
 total_nilai_penerima
 FROM
 rincian_pemesanan
 GROUP BY
 rincian_pemesanan.id_pemesanan)agregat3
ON
	rincian_pemesanan.id_pemesanan=agregat3.id_pemesanan	
LEFT JOIN
	penerimaan
ON
	rincian_pemesanan.id_pemesanan=penerimaan.id
LEFT JOIN
	nama_yang_menerima
ON
	penerimaan.id_yang_menerima=nama_yang_menerima.id
LEFT JOIN
	(SELECT
	rincian_penerimaan.id_penerimaan,
	SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_penerimaan) agregat6
ON
	rincian_pemesanan.id_pemesanan=agregat6.id_penerimaan
LEFT JOIN
	pembayaran
ON
	rincian_pemesanan.id_pemesanan=pembayaran.id
LEFT JOIN
	nama_kasir
ON 	
	pembayaran.id_kasir=nama_kasir.id
GROUP BY
	rincian_pemesanan.id_pemesanan;
    WHERE pemesanan.id =:y";

		$this->dataku->isi_sql($a);

		$this->dataku->isi_parameter("y", $n);

		$this->dataku->ambil_satu_baris();

		return $this->dataku->ambil_satu_baris();
	}
}
