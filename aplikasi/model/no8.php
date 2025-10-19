<?php
class no8
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	penerimaan.id,
    nama_yang_menerima.nama_yang_menerima,
    agregat2.jumlah_dokumen_penerimaan,
    agregat3.total_nilai_penerimaan,
    agregat4.total_nilai_pemesanan,
    agregat5.jumlah_dokumen_pembayaran,
    agregat6.total_nilai_pembayaran
FROM
	penerimaan
LEFT JOIN
	nama_yang_menerima
ON
	penerimaan.id_yang_menerima=nama_yang_menerima.id
LEFT JOIN
	(SELECT
	penerimaan.id_yang_menerima,
    COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_penerimaan
FROM
	penerimaan
LEFT JOIN
	rincian_penerimaan
ON	
	penerimaan.id_yang_menerima=rincian_penerimaan.id
GROUP BY
	penerimaan.id_yang_menerima) agregat2
ON
	penerimaan.id_yang_menerima=agregat2.id_yang_menerima
LEFT JOIN
	(SELECT
	penerimaan.id_yang_menerima,
    SUM(rincian_penerimaan.kuantitas_diterima) AS total_nilai_penerimaan
FROM
	penerimaan
LEFT JOIN
	rincian_penerimaan
ON	
	penerimaan.id_yang_menerima=rincian_penerimaan.id
GROUP BY
	penerimaan.id_yang_menerima) agregat3
ON
	penerimaan.id_yang_menerima=agregat3.id_yang_menerima
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
	pemesanan.id_vendor) agregat4
ON
	penerimaan.id_yang_menerima=agregat4.id_vendor
LEFT JOIN
	(SELECT
	penerimaan.id_yang_menerima,
    COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_pembayaran
FROM
	penerimaan
LEFT JOIN
	rincian_penerimaan
ON	
	penerimaan.id_yang_menerima=rincian_penerimaan.id
GROUP BY
	penerimaan.id_yang_menerima) agregat5
ON
	penerimaan.id_yang_menerima=agregat5.id_yang_menerima
INNER JOIN
	(SELECT
	penerimaan.id_yang_menerima,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_pembayaran
FROM
	penerimaan
INNER JOIN
	rincian_penerimaan
ON	
	penerimaan.id_yang_menerima=rincian_penerimaan.id
GROUP BY
	penerimaan.id_yang_menerima)agregat6
ON
	penerimaan.id_yang_menerima=agregat6.id_yang_menerima
GROUP BY
	penerimaan.id_yang_menerima;



";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>