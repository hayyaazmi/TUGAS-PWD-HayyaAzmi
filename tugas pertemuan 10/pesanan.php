<?php

class MenuMakanan{
    public $nama, $kategori, $harga;

    public function __construct($nama, $kategori, $harga){
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
    }

    public function getInfo(){
        return $this->nama." (".$this->kategori.") - Rp".$this->harga;
    }
}

class Pesanan{
    public $daftarMakanan = [];

    public function tambahMakanan(MenuMakanan $makanan){
        $this->daftarMakanan[] = $makanan;
    }

    public function hitungTotal(){
        $total = 0;
        foreach($this->daftarMakanan as $makanan){
            $total += $makanan->harga;
        }
        return $total;
    }

    public function tampilkanPesanan(){
        echo "<h1>Detail Pesanan</h1>";
        echo "<ul>";
        foreach($this->daftarMakanan as $makanan){
            echo "<li>".$makanan->getInfo()."</li>";
        }
        echo "</ul>";
        echo "<b>Total: Rp ".$this->hitungTotal()."</b>";
    }
}