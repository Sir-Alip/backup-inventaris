<?php
class no3
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	rincian_penerimaan.id,
    pembayaran.tanggal_pembayaran,
    pembayaran.nomor_pembayaran,
    nama_kasir.nama_kasir,
    agregat3.jumlah_jenis_barang_dibayar,
    agregat3.total_nilai_pembayaran,
    penerimaan.tanggal_penerimaan,
    nama_yang_menerima.nama_yang_menerima,
    pemesanan.tanggal_pemesanan,
    pemesanan.nomor_pemesanan,
    agregat7.jumlah_jenis_barang_dipesan,
    agregat7.total_nilai_pemesanan,
    nama_vendor.nama_vendor
FROM
	rincian_penerimaan
LEFT JOIN
	pembayaran
ON	
	rincian_penerimaan.id_penerimaan=pembayaran.id
LEFT JOIN
	nama_kasir
ON
	pembayaran.id_kasir=nama_kasir.id
LEFT JOIN
	(SELECT 
    rincian_penerimaan.id_penerimaan,
    COUNT(rincian_penerimaan.kuantitas_diterima) jumlah_jenis_barang_dibayar,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima)total_nilai_pembayaran
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_penerimaan)agregat3
ON
	rincian_penerimaan.id_penerimaan=agregat3.id_penerimaan
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
	(SELECT 
    rincian_pemesanan.id_pemesanan,
    COUNT(rincian_pemesanan.kuantitas_pesanan) jumlah_jenis_barang_dipesan,
    SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan)total_nilai_pemesanan
FROM
	rincian_pemesanan
GROUP BY
	rincian_pemesanan.id_pemesanan)agregat7
ON
	rincian_penerimaan.id_penerimaan=agregat7.id_pemesanan
LEFT JOIN
	nama_vendor
ON
	pemesanan.id_vendor=nama_vendor.id
GROUP BY
	rincian_penerimaan.id_penerimaan;
";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>