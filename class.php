<?php 
/**
 * 
 */
class Kucing {
    public static $warna = "Merah";
    public static $jumlah_kaki = 4;
    public static $jenis_ekor = "panjang";
    public static $makanan_fav = "ikan";
}

// Mencetak variabel tanpa membuat objek
// echo "Warna: " . Kucing::$warna . "<br>";
// echo "Jumlah Kaki: " . Kucing::$jumlah_kaki . "<br>";
// echo "Jenis Ekor: " . Kucing::$jenis_ekor . "<br>";
// echo "Makanan Favorit: " . Kucing::$makanan_fav . "<br>";
?>

<!-- Untuk mencetak nilai variabel tanpa membuat objek, 
ubah properti menjadi static dan akses dengan self:: di dalam class 
atau ClassName:: dari luar class. -->
