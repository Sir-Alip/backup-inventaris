<?php
class mdl_nama_kasir
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a="SELECT * FROM `nama_kasir`
    ";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>