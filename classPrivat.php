<?php 
/**
 * 
 */
class Kucing {
    private static $warna = "Merah";
    private static $jumlah_kaki = 4;
    private static $jenis_ekor = "panjang";
    private static $makanan_fav = "ikan";

    public static function getWarna() {
        return self::$warna;
    }
    public static function getJumlahKaki() {
        return self::$jumlah_kaki;
    }
    public static function getJenisEkor() {
        return self::$jenis_ekor;
    }
    public static function getMakananFav() {
        return self::$makanan_fav;
    }
}

// Mencetak variabel menggunakan metode getter
echo "Warna: " . Kucing::getWarna() . "<br>";
echo "Jumlah Kaki: " . Kucing::getJumlahKaki() . "<br>";
echo "Jenis Ekor: " . Kucing::getJenisEkor() . "<br>";
echo "Makanan Favorit: " . Kucing::getMakananFav() . "<br>";
?>