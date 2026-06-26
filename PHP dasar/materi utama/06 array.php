<?php
echo "<h3>Array</h3>";
echo "<p>Array adalah sebuah struktur data yang digunakan untuk menyimpan beberapa nilai dalam satu variabel. Dalam php array ada beberapa jenis sepereti sting,integer,dan bahkan array lainnya.Array dapat diakses menggunakan indeks atau kunci tertentu.</p>";

echo "<h3> membuat array </h3>";
//membuat array dengan isi yang kosong
$buah = array();
$buah = [];

//membuat array dengan isi
$buah = array("apel", "jeruk", "mangga", "pisang");
$buah = ["apel", "jeruk", "mangga", "pisang"];

//array bisa di buat dengan data campuran
$barang = array("laptop",5000000,"smartphone",3000000);
$barang = ["laptop",5000000,"smartphone",3000000];

//membjuat array dengan ideks tertentu
$buah[0] = "apel";
$buah[1] = "jeruk";
$buah[2] = "mangga";
$buah[3] = "pisang";

echo "<h3>menampilkan array</h3>";
//pastikan sudah punya array
echo "buah pertama: ".$buah[0]."<br>";
echo "buah kedua: ".$buah[1]."<br>";
echo "buah ketiga: ".$buah[2]."<br>";
echo "buah keempat: ".$buah[3]."<br>";

//menmapilkan array dengan lebih efektif
echo "<h3>Menampilkan array dengan perulangan for</h3>";
//menampilkan array yang sudah ada,yaitu array buah

for ($i = 0; $i < count($buah); $i++) {
    echo "buah ke-".($i+1).": ".$buah[$i]."<br>";
}

echo "<h3>Menampilkan array dengan perulangan foreach</h3>";
foreach ($buah as $b) {
    echo "buah: ".$b."<br>";
}

echo "<h3>menampilkan array dengan while</h3>";
$i = 0;
while ($i < count($buah)) {
    echo "buah ke-".($i+1).": ".$buah[$i]."<br>";
    $i++;
}

echo "<h3>menghapus array</h3>";
//buat dulu mantan ku
$mantanku = array("Dewi", "Sari", "Raihan", "Syahwan");
//hapus array dengan fungsi unset()

unset($mantanku);

//coba tampilkan array
print_r($mantanku);
echo $mnantanku[0]; //ini akan menampilkan error undefined karena array sudah dihapus dengan unset()

echo "<p> array mantanku sudah dihapus,jadi tidak bisa ditampilkan lagi</p>";

echo "<h3>menambahkan element ke array</h3>";
//buat dulu array mantanku
$mantanku = array("Dewi", "Rahma", "Clarista", "Naila");
//menambahkan element baru ke array mantanku
$mantanku[] = "imelda";//ini akan menambah imelda ke array
$mantanku[2] = "putri";//ini akan mengganti "clarista" dengan "putri" karena index 2 sudah ada di array mantanku

//kita munculkan array mantanku menggunakan foreach
foreach ($mantanku as $m) {
    echo "mantan ku: ".$m."<br>";
}

echo "<hr>Jenis array Array numerik dan assosiatif</hr>";
echo "<h3>Array numerik</h3>";
//array numerik adalah array yang menggunakan indeks angka untuk mengakses elemennya.indeks dimulai dari 0 dan bertambah secara otomatis untuk setiap elemen baru yang ditambahkan ke array.
// Contoh array numerik
$buah = array("apel", "jeruk", "mangga", "pisang");
// atau bisa juga dengan cara berikut
$buah = ["apel", "jeruk", "mangga", "pisang"];

echo "<h3>Array assosiatif</h3>";
//array assosiatiif adalah array yang menggunakan kunci (key) untuk mengakses elemennya.kunci bisa berupa string atau angka, dan kita bisa menentukan kunci bisa berupa string atau angka, dan kita bisa menentukan kunci tersebut sesuai kebutuhan. Contoh array assoatif
$hargabuah = array(
    "apel" => 5000,
    "jeruk" => 3000,
    "mangga" => 7000,
    "pisang" => 2000
);
//atau bisa juga dengan cara berikut
$hargabuah = [
    "apel" => 5000,
    "jeruk" => 3000,
    "mangga" => 7000,
    "pisang" => 2000
];

echo "harga Apel: ".$hargabuah["apel"]."<br>";
echo "harga Jeruk: ".$hargabuah["jeruk"]."<br>";
echo "harga Mangga: ".$hargabuah["mangga"]."<br>";
echo "harga Pisang: ".$hargabuah["pisang"]."<br>";

//kita menggunakan simbol => untuk membuat array asosiatif, dimana bagian kiri dari simbol => adalah kunci (key) dan bagian kanan adalah nilai (value). Kita bisa mengakses nilai dalam array asosiatif dengan menggunakan kunci yang sesuai. Misalnya, untuk mengakses harga apel, kita menggunakan $hargabuah["apel"], yang akan mengembalikan nilai 5000. Array asosiatif sangat berguna ketika kita ingin menyimpan data yang memiliki hubungan antara kunci dan nilai, seperti nama dan harga dalam contoh ini.

echo "<h3>Array multidimensi</h3>";
//array multidimensi adalah array yang memiliki lebih dari satu dimensi, artinya array yang berisi array lain di dalamnya. Array multidimensi sering digunakan untuk menyimpan data yang lebih kompleks, seperti tabel atau matriks. Contoh array multidimensi
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
//atau bisa juga dengan cara berikut
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "elemen di baris pertama, kolom kedua: ".$matrix[0][2]."<br>"; //ini akan menampilkan angka 2
echo "elemen di baris kedua, kolom ketiga: ".$matrix[1][2]."<br>";//ini akan menampilkan angka 6
echo "elemen di baris ketiga, kolom pertama: ".$matrix[2][0]."<br>;";//ini akan menampilkan angka 7

//membuat array dua dimensi yang berisi array assosiatif
$mahasiswa = array(
    array(
        "nama" => "Andi",
        "umur" => 20,
        "jurusan" => "Informatika"
    ),
    array(
        "nama" => "Budi",
        "umur" => 21,
        "jurusan" => "Sistem Informasi"
    ),
    array(
        "nama" => "Citra",
        "umur" => 19,
        "jurusan" => "Teknik Komputer"
    )

);
//menampilkan array multudimensi dengan perulangan foreach
echo "<h3>Menampilkan array multidimensi </h3>";
foreach ($mahasiswa as $m) {
    echo "Nama: ".$m["nama"]."<br>";
    echo "Umur: ".$m["umur"]."<br>";
    echo "Jurusan: ".$m["jurusan"]."<br><hr>";
}


?>