<?php
class no4 extends model
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT 
	rincian_pemesanan.id,
    rincian_pemesanan.kuantitas_pesanan,
    rincian_pemesanan.harga_pesanan,
	SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) 
	AS jumlah_pemesanan,
	nama_barang.nama_barang,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    nama_vendor.nama_vendor,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima,
    virtual7.kuantitas_diterima,
    virtual7.harga_diterima,
    virtual7.jumlah_diterima,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir
FROM
	rincian_pemesanan
LEFT JOIN
	nama_barang
ON
	rincian_pemesanan.id_pemesanan=nama_barang.id
LEFT JOIN
	pemesanan
ON
	rincian_pemesanan.id_pemesanan=pemesanan.id
LEFT JOIN
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
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
    rincian_penerimaan.kuantitas_diterima,
    rincian_penerimaan.harga_diterima,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima)
AS	jumlah_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_penerimaan)virtual7
ON
	rincian_pemesanan.id_pemesanan=virtual7.id_penerimaan
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

";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }

	public function ambil_satu_id_rinci_pemesanan($h)
	{

	$a= "SELECT 
	rincian_pemesanan.id,
    rincian_pemesanan.kuantitas_pesanan,
    rincian_pemesanan.harga_pesanan,
	SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) 
	AS jumlah_pemesanan,
	nama_barang.nama_barang,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    nama_vendor.nama_vendor,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima,
    virtual7.kuantitas_diterima,
    virtual7.harga_diterima,
    virtual7.jumlah_diterima,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir
FROM
	rincian_pemesanan
LEFT JOIN
	nama_barang
ON
	rincian_pemesanan.id_pemesanan=nama_barang.id
LEFT JOIN
	pemesanan
ON
	rincian_pemesanan.id_pemesanan=pemesanan.id
LEFT JOIN
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
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
    rincian_penerimaan.kuantitas_diterima,
    rincian_penerimaan.harga_diterima,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima)
AS	jumlah_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_penerimaan)virtual7
ON
	rincian_pemesanan.id_pemesanan=virtual7.id_penerimaan
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

WHERE pemesanan_detail.id_pemesanan = :x";

$this->dataku->isi_sql($a);

$this->dataku->isi_parameter("x", $h);

return $this->dataku->ambil_banyak_baris();
	}
	
}
?>