<?php

class Member {
    public $nama;
    public $idMember;

    public function __construct($nama, $idMember) {
        $this->nama = $nama;
        $this->idMember = $idMember;
    }

    public function tampilInfo() {
        echo "Nama Member: " . $this->nama . "<br>";
        echo "ID Member: " . $this->idMember . "<br><br>";
    }
}
?>