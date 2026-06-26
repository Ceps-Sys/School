<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Ruang - PHP</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; line-height: 1.6; }
        .card { background: #f9f9f9; padding: 15px; border-left: 5px solid #28a745; margin-bottom: 20px; }
        pre { background: #eee; padding: 10px; }
    </style>
</head>
<body>

    <h1>Program Hitung Volume Bangun Ruang (Prisma)</h1>

    <?php
    // =========================================================================
    // 1. MEMBUAT FUNCTION UNTUK MENGHITUNG VOLUME PRISMA
    // =========================================================================
    // Rumus Volume Prisma = Luas Alas x Tinggi
    // Di sini kita memberikan nilai default pada parameter: luas_alas = 50 dan tinggi = 3
    
    function hitungPrisma($luas_alas = 50, $tinggi = 3) {
        $volume = $luas_alas * $tinggi;
        
        // Menampilkan hasil perhitungan langsung dari dalam function
        echo "<div class='card'>";
        echo "<h3>Hasil Perhitungan Prisma:</h3>";
        echo "Luas Alas: " . $luas_alas . " cm²<br>";
        echo "Tinggi Prisma: " . $tinggi . " cm<br>";
        echo "<b>Volume Prisma (Luas Alas x Tinggi) = " . $volume . " cm³</b>";
        echo "</div>";
    }


    // =========================================================================
    // 2. MEMBUAT CLASS & PROPERTY (OOP) UNTUK DATA MAHASISWA
    // =========================================================================
    // Class digunakan sebagai cetakan untuk membuat objek identitas pembuat program
    
    class Mahasiswa {
        // Properti atau variabel di dalam class
        public $nama;
        public $nim;

        // Konstruktor/Fungsi untuk mengisi data properti saat objek dibuat
        public function __construct($nama, $nim) {
            $this->nama = $nama;
            $this->nim = $nim;
        }

        // Method untuk menampilkan identitas mahasiswa ke layar
        public function tampilkanIdentitas() {
            echo "<div class='card' style='border-left-color: #007bff;'>";
            echo "<h3>Identitas Pembuat Program:</h3>";
            echo "Nama: " . $this->nama . "<br>";
            echo "NIM: " . $this->nim . "<br>";
            echo "</div>";
        }
    }


    // =========================================================================
    // 3. EKSEKUSI PROGRAM (MEMANGGIL CLASS & FUNCTION)
    // =========================================================================

    // A. Membuat Objek Baru dari Class Mahasiswa dan memasukkan data real
    $mhs = new Mahasiswa("Dimas Nano Prayoga", "8020200220");
    
    // Memanggil method untuk menampilkan nama dan NIM
    $mhs->tampilkanIdentitas();

    // B. Memanggil function hitungPrisma() untuk melakukan kalkulasi bangun ruang
    // Karena parameter sudah ada nilai default-nya (50 dan 3), kita bisa langsung panggil seperti ini:
    hitungPrisma(); 
    
    // Catatan Tambahan: Jika ingin menghitung angka lain, kamu bisa memasukkan angka baru di dalam kurungnya,
    // contohnya: hitungPrisma(100, 5); -> Luas alas 100, tinggi 5.
    ?>

</body>
</html>