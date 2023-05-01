<?php 

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul = ‘judul’, $penulis = ‘penulis’, $penerbit = ‘penerbit’, $harga = 0) {
        $this ->judul = $judul;
        $this ->penulis = $penulis;
        $this ->penerbit = $penerbit;
        $this ->harga = $harga;
    }

    public function getLabel() {
        return “$this->judul, $this->penulis, $this->penerbit, $this->harga”; 
    }

    public function getInfoProduk () {
        $str = “$this->judul | $this->penulis, $this->penerbit (Rp.$this->harga,-)”;
        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = ‘judul’, $penulis = ‘penulis’, $penerbit = ‘penerbit’, $harga = 0) {
        parent :: __construct ($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman=$jmlHalaman;
    }

public function getInfoProduk() {
    $str = “Komik: ” . parent::getInfoProduk() . “ - $this->jmlHalaman
    Halaman”;

    return $str;
    }

    class Game extends

}

$produk4 = new Produk();

echo $produks1 ->getInfoProduk();
echo “<br>”;
echo $produk2 ->getInfoProduk();
echo “<br>”;
echo $produk3 ->getInfoProduk();
