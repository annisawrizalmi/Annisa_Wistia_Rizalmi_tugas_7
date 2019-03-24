<?php

//class oop {

//	var $satu;
//	var $dua;
//	var $tiga;

//	function f_satu($satuaja, $duaaja) {
//		return " Hellow Guys!!! "."<br> ".$satuaja."<br>".$duaaja;
//	}

//}

//$tesaja = new oop;

//echo $tesaja->f_satu("lihat aku1","lihat aku2") ;


//========= class 1 ==========

class nama {
	public $satu = " World 1 ";
	protected $dua = " World 2 ";
	private $tiga = " World 3 ";

	protected function f_satu() 
	{
		return "Hellow ".$this->tiga;
	}
}

//========== class 2 =======

class oop2 extends nama 
{
	public function f_dua() 
	{
		return "Berhasil".$this->dua;
	}

	public function toos() 
	{
		return $this->f_satu();
	}

}


$tuss = new oop2();

echo $tuss->toos();

?>