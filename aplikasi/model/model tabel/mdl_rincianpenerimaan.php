<?php
class mdl_rincianpenerimaan
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a="SELECT * FROM `rincian_penerimaan`
    ";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>