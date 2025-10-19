<?php
class no9
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	pembayaran.id,
    nama_kasir.nama_kasir,
    agregat2.jumlah_dokumen_pembayaran,
    agregat3.total_nilai_pembayaran,
    agregat4.total_nilai_pemesanan
FROM
	pembayaran
LEFT JOIN
	nama_kasir
ON
	pembayaran.id_kasir=nama_kasir.id
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
	penerimaan.id_yang_menerima) agregat2
ON
	pembayaran.id_kasir=agregat2.id_yang_menerima
LEFT JOIN
	(SELECT
	penerimaan.id_yang_menerima,
    SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_pembayaran
FROM
	penerimaan
LEFT JOIN
	rincian_penerimaan
ON
	penerimaan.id_yang_menerima=rincian_penerimaan.id
GROUP BY
	penerimaan.id_yang_menerima) agregat3
ON
	pembayaran.id_kasir=agregat3.id_yang_menerima
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
	pembayaran.id_kasir=agregat4.id_vendor
GROUP BY
	pembayaran.id;




";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>