<?php

interface InfoProduk{
   public function getInfoProduk();
}
 abstract class Produk {
     protected $judul,
            $penulis,
            $penerbit,
            $harga,
           $diskon = 0;
             

    public function __construct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga;
   

    }
    public function setJudul( $judul){
        if(!is_string($judul)){
           throw new Exception("Judul harus sting"); 
        }
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis( $penulis){
        $this->penulis = $penulis; 
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit( $penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
   
    // public function setDiskon( $diskon ){
    //     $this->diskon = $diskon;

    // }
    public function setDiskon( $diskon ){
        $this->diskon = $diskon;

    }
    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga(){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


    abstract public function getInfo();

}

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfo() {
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump,(Rp. 30000) - 100 Halaman.

        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk(){
    $str = "Komik :" . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
return $str;
}
}


class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfo() {
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump,(Rp. 30000) - 100 Halaman.

        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk(){
    $str = "Game : " . $this->getInfo(). "  - {$this->waktuMain} Jam.";
return $str;
}
}


class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ){
        $this->daftarProduk[] = $produk;
    }

    public function cetak () {
        $str = "DAFTAR PRODUK :  <br>";

        foreach($this->daftarProduk as $p) {
        $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;

    }
}

// $tes = new Produk();



// $produk = new Produk();

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2  = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduK();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);

echo $cetakProduk->cetak();



// echo $produk1->getInfoProduk();
// echo "<br>";
// echo  $produk2->getInfoProduk();

// echo "<hr>";

// $produk2->harga = 5000;
// $produk2->setDiskon(50);
// $produk2->diskon = 90;
// echo $produk2->getHarga();

// echo "<hr>";

// $produk1->setPenerbit("JanterHugo");
// echo $produk1->getPenerbit();
// $produk3 = new Produk ("BarangBaru");
// echo $produk3->judul;
// $produk1->setpenulis("ayamjago");
// echo $produk->getpenulis();
?>




