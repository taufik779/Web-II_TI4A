<?php 
/**
 * 
 */
class kucing {
	public $warna = "Merah";
	public $jumlah_kaki = 4;
	public $jenis_ekor = "panjang";
	public $makanan_fav = "ikan";
 }
 // Membuat objek dari kelas Kucing
$kucing1 = new Kucing();

// Mencetak variabel dari objek kucing1
echo "Warna: " . $kucing1->warna . "<br>";
echo "Jumlah Kaki: " . $kucing1->jumlah_kaki . "<br>";
echo "Jenis Ekor: " . $kucing1->jenis_ekor . "<br>";
echo "Makanan Favorit: " . $kucing1->makanan_fav . "<br>";
 ?>