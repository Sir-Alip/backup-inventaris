<?php
class no6
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a= "SELECT
	rincian_pemesanan.id,
    nama_barang.nama_barang,
    agregat2.jumlah_dokumen_pemesanan,
    agregat3.total_kuantitas_pemesanan,
    agregat4.total_nilai_pemesanan,
    agregat5.jumlah_dokumen_penerimaan,
    agregat6.total_kuantitas_diterima,
    agregat7.total_nilai_diterima,
    agregat8.jumlah_dokumen_pembayaran,
    agregat9.total_kuantitas_dibayar,
    agregat10.total_nilai_pembayaran
FROM
	rincian_pemesanan
LEFT JOIN
	nama_barang
ON
	rincian_pemesanan.id_pemesanan=nama_barang.id
LEFT JOIN 
	(SELECT
    rincian_pemesanan.id,
        count(rincian_pemesanan.kuantitas_pesanan) AS jumlah_dokumen_pemesanan
    FROM
            rincian_pemesanan
    GROUP BY
            rincian_pemesanan.id_barang) agregat2
ON
	rincian_pemesanan.id_barang=agregat2.id
LEFT JOIN
	(SELECT
	rincian_pemesanan.id_barang,
	SUM(rincian_pemesanan.kuantitas_pesanan) AS total_kuantitas_pemesanan
FROM
	rincian_pemesanan
GROUP BY
	rincian_pemesanan.id_barang) agregat3
ON
	rincian_pemesanan.id_barang=agregat3.id_barang
LEFT JOIN
	(SELECT
	rincian_pemesanan.id_barang,
	SUM(rincian_pemesanan.kuantitas_pesanan*rincian_pemesanan.harga_pesanan) AS total_nilai_pemesanan
FROM
	rincian_pemesanan
GROUP BY
	rincian_pemesanan.id_barang) agregat4
ON
	rincian_pemesanan.id_barang=agregat4.id_barang
LEFT JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_penerimaan
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat5
ON
	rincian_pemesanan.id_barang=agregat5.id_barang
LEFT JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	SUM(rincian_penerimaan.kuantitas_diterima) AS total_kuantitas_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat6
ON
	rincian_pemesanan.id_barang=agregat6.id_barang
LEFT JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_diterima
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat7
ON
	rincian_pemesanan.id_barang=agregat7.id_barang
INNER JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	COUNT(rincian_penerimaan.kuantitas_diterima) AS jumlah_dokumen_pembayaran
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat8
ON
	rincian_pemesanan.id_barang=agregat8.id_barang
INNER JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	SUM(rincian_penerimaan.kuantitas_diterima) AS total_kuantitas_dibayar
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat9
ON
	rincian_pemesanan.id_barang=agregat9.id_barang
INNER JOIN
	(SELECT
	rincian_penerimaan.id_barang,
	SUM(rincian_penerimaan.kuantitas_diterima*rincian_penerimaan.harga_diterima) AS total_nilai_pembayaran
FROM
	rincian_penerimaan
GROUP BY
	rincian_penerimaan.id_barang) agregat10
ON
	rincian_pemesanan.id_barang=agregat10.id_barang
GROUP BY
	rincian_pemesanan.id_barang;


";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>