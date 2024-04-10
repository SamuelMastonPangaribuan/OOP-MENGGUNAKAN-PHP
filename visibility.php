<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit;

    private $harga,
            $jmlHalaman,
            $waktuMain;
        

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    public function getHarga() {
        return $this->harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $tipe, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->tipe = $tipe;
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()}) ~ {$this->waktuMain} jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->getHarga()})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, "Action", 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

echo $produk2->getHarga(); // Corrected line
?>
