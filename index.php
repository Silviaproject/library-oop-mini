<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

// Membuat beberapa object Book
$buku1 = new Book("Laskar Pelangi", "Andrea Hirata");
$buku2 = new Book("Bumi", "Tere Liye");
$buku3 = new Book("Negeri 5 Menara", "Ahmad Fuadi");

// Membuat object DigitalBook
$bukuDigital = new DigitalBook("Filosofi Teras", "Henry Manampiring", 5);

// Membuat object Member
$member1 = new Member("Silvia", "M001");
$member2 = new Member("Alya", "M002");

// Menampilkan informasi buku
echo "<h2>DAFTAR BUKU</h2>";

$buku1->tampilkanInfo();
$buku2->tampilkanInfo();
$buku3->tampilkanInfo();

// Menampilkan informasi digital book
echo "<h2>DIGITAL BOOK</h2>";

$bukuDigital->tampilkanInfo();

// Menampilkan informasi member
echo "<h2>INFORMASI MEMBER</h2>";

$member1->tampilInfo();
$member2->tampilInfo();

// Simulasi peminjaman
echo "<h2>SIMULASI PEMINJAMAN</h2>";

echo $member1->nama . " meminjam buku.<br>";
$buku1->pinjam();

// Menampilkan status buku setelah dipinjam
echo "<h2>STATUS BUKU SETELAH DIPINJAM</h2>";

$buku1->tampilkanInfo();

?>