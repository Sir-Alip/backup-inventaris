<?php
class no5
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	rincian_penerimaan.id,
    rincian_penerimaan.kuantitas_diterima,
    rincian_penerimaan.harga_diterima,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima)
    AS jumlah_diterima,
    nama_barang.nama_barang,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    nama_vendor.nama_vendor,
    virtual7.kuantitas_pesanan,
    virtual7.harga_pesanan,
    virtual7.jumlah_pemesanan,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir
FROM
	rincian_penerimaan
LEFT JOIN
	nama_barang
ON
	rincian_penerimaan.id_penerimaan=nama_barang.id
LEFT JOIN
	penerimaan
ON
	rincian_penerimaan.id_penerimaan=penerimaan.id
LEFT JOIN
	nama_yang_menerima
ON
	penerimaan.id_yang_menerima=nama_yang_menerima.id
LEFT JOIN
	pemesanan
ON
	rincian_penerimaan.id_penerimaan=pemesanan.id
LEFT JOIN
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
LEFT JOIN
	(SELECT 
    rincian_pemesanan.id_pemesanan,
    rincian_pemesanan.kuantitas_pesanan,
    rincian_pemesanan.harga_pesanan,
    SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan)
AS	jumlah_pemesanan
FROM
	rincian_pemesanan
GROUP BY
	rincian_pemesanan.id_pemesanan)virtual7
ON
	rincian_penerimaan.id_penerimaan=virtual7.id_pemesanan
LEFT JOIN
	pembayaran
ON
	rincian_penerimaan.id_penerimaan=pembayaran.id
LEFT JOIN
	nama_kasir
ON
	pembayaran.id_kasir=nama_kasir.id
 
GROUP BY
	rincian_penerimaan.id_penerimaan;


";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>