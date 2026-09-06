<?php

require_once "Book.php";

class DigitalBook extends Book {
    public $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile) {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    public function tampilkanInfo() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Ukuran File: " . $this->ukuranFile . " MB<br>";
        echo "Status: " . $this->status . "<br><br>";
    }
    
    public function download() {
    echo "Buku digital " . $this->judul . " siap untuk diunduh.<br><br>";
}
}
?>