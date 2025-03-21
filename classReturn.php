<?php 
class Kucing {
	public $warna = "merah";
	public $jumlah_kaki = 4;

	public function berburu( )
	{
		return "berburu ikan";
	}

 }

 $kucing1 = new Kucing();
	echo $kucing1->warna;         // Output: merah
	echo $kucing1->jumlah_kaki;   // Output: 4
	echo $kucing1->berburu();     // Output: berburu ikan

 ?>
