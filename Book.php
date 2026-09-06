<?php

class Book {
    public $judul;
    public $penulis;
    public $status;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->status = "Tersedia";
    }

    public function tampilkanInfo() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Status: " . $this->status . "<br><br>";
    }

    public function pinjam() {
        if ($this->status == "Tersedia") {
            $this->status = "Dipinjam";
            echo "Buku " . $this->judul . " berhasil dipinjam.<br><br>";
        } else {
            echo "Buku " . $this->judul . " sedang tidak tersedia.<br><br>";
        }
    }
}
?>