<?php
class mdl_pemesanan
{
	private $dataku;

	public function __construct()
	{
		$this->dataku = new database;
	}

    public function ambil_data(){

    $a="SELECT * FROM `pemesanan`
    ";
        $this->dataku->isi_sql($a);
        return $this->dataku->ambil_banyak_baris();
    }
	
}
?>