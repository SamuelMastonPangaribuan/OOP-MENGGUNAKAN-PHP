<?php 

// $tes = new Produk();



// $produk = new Produk();

require_once 'APP/init.php';


// $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2  = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 50);


// $cetakProduk = new CetakInfoProduK();
// $cetakProduk->tambahProduk( $produk1);
// $cetakProduk->tambahProduk( $produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";


use APP\Service\User as ServiceUser;
use APP\Produk\User as ProdukUser;

new ServiceUser();

echo "<br>";
new ProdukUser();







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


