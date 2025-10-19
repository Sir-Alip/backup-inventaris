<?php
class no7
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	nama_vendor.id,
    nama_vendor.nama_vendor,
    nama_vendor.alamat_vendor,
    nama_vendor.no_telp_vendor,
    agregat2.jumlah_dokumen_pemesanan,
    agregat3.total_nilai_pemesanan,
    agregat4.jumlah_dokumen_penerimaan,
    agregat5.total_nilai_penerimaan,
    agregat6.jumlah_dokumen_pembayaran,
    agregat7.total_nilai_pembayaran
FROM	
	nama_vendor
LEFT JOIN
	(SELECT	
	pemesanan.id_vendor,
    COUNT(rincian_pemesanan.kuantitas_pesanan) AS jumlah_dokumen_pemesanan
FROM
	pemesanan
LEFT JOIN
	rincian_pemesanan
ON	
	pemesanan.id_vendor=rincian_pemesanan.id
GROUP BY
	pemesanan.id_vendor) agregat2
ON
	nama_vendor.id_vendor=agregat2.id_vendor
LEFT JOIN
	(SELECT	
	pemesanan.id_vendor,
    SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) AS total_nilai_pemesanan
FROM
	pemesanan
LEFT JOIN
	rincian_pemesanan
ON	
	pemesanan.id_vendor=rincian_pemesanan.id
GROUP BY
	pemesanan.id_vendor) agregat3
ON
	nama_vendor.id_vendor=agregat3.id_vendor
LEFT JOIN
	(SELECT
	pemesanan.id_vendor,
    COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_penerimaan
FROM
	pemesanan
LEFT JOIN
	rincian_penerimaan
ON	
	pemesanan.id_vendor=rincian_penerimaan.id
GROUP BY
	pemesanan.id_vendor) agregat4
ON
	nama_vendor.id_vendor=agregat4.id_vendor
LEFT JOIN
	(SELECT
	pemesanan.id_vendor,
    SUM(rincian_penerimaan.kuantitas_diterima) AS total_nilai_penerimaan
FROM
	pemesanan
LEFT JOIN
	rincian_penerimaan
ON	
	pemesanan.id_vendor=rincian_penerimaan.id
GROUP BY
	pemesanan.id_vendor) agregat5
ON
	nama_vendor.id_vendor=agregat5.id_vendor
LEFT JOIN
	(SELECT
	pemesanan.id_vendor,
    COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_pembayaran
FROM
	pemesanan
LEFT JOIN
	rincian_penerimaan
ON	
	pemesanan.id_vendor=rincian_penerimaan.id
GROUP BY
	pemesanan.id_vendor) agregat6
ON
	nama_vendor.id_vendor=agregat6.id_vendor
INNER JOIN
	(SELECT
	pemesanan.id_vendor,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_pembayaran
FROM
	pemesanan
INNER JOIN
	rincian_penerimaan
ON	
	pemesanan.id_vendor=rincian_penerimaan.id
GROUP BY
	pemesanan.id_vendor) agregat7
ON
	nama_vendor.id_vendor=agregat7.id_vendor
GROUP BY
	nama_vendor.id_vendor;



";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>