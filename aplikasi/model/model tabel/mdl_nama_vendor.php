<?php
class mdl_nama_vendor
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a="SELECT * FROM `nama_vendor`
    ";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>