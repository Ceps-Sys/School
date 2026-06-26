<?php
echo "<h3> Tipe Data String</h3>";
echo "Cara penulisan <strong> Tipe Data String</strong> <br> bisa menggunakan tanda petik dua (\" \") atau tanda petik satu (' '). <br> Contoh : <br>";
$kalimat1 = "Hello, World!";
$kalimat2 = 'PHP adalah bahasa pemrograman yang populer.';
echo strrev($kalimat1) . "<br>";
echo strrev($kalimat2) . "<br>";
echo str_word_count($kalimat1) . "<br>";
echo str_word_count($kalimat2) . "<br>";

echo "<h3>Tipe Data Integer</h3>";
echo "Tipe data integer adalah tipe data yang digunakan untuk menyimpan bilangan bulat. <br> Contoh : <br>";

$bilangan1 = 20;
$bilangan2 = 15;

echo "Bilangan 1 : $bilangan1 <br> Bilangan 2 : $bilangan2 <br>";
echo "Jumlah: ".($bilangan1 + $bilangan2);

echo "<h3>Tipe Data Boolean</h3>";
echo "Tipe data boolean adalah tipe data yang digunakan untuk menyimpan nilai true atau false. <br> Contoh : <br>";

$nilai1 = true;
$nilai2 = false;

echo "Nilai1: " . ($nilai1 ? 'true' :'false');
echo '<br>';
echo "Nilai2: " . ($nilai2 ? 'true' :'false');
echo '<br>';
echo "Hasil AND: " . (($nilai1 && $nilai2) ? 'true' : 'false');
echo '<br>';
echo "Hasil OR: " . (($nilai1 || $nilai2) ? 'true' : 'false');
echo '<br>';

echo "<h3>Tipe Data Float</h3>";
echo "Tipe Data float adalah Tipe data yang digunakan untuk menyimpan nilai bilangan desimal.";
echo '<br>';
$angka1 = 3.14;
echo "Angka 1: $angka1";

echo "<h3>Tipe Data Array</h3>";
echo "Tipe data array adalah tipe data yang digunakan untuk menyimpan beberapa nilai dalam satu variabel. <br> Contoh : <br>";
$buah = array("apel", "jeruk", "mangga");
echo "Buah 1: $buah[0] <br> Buah 2: $buah[1] <br> Buah 3: $buah[2]";



?> 