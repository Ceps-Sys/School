<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cepi Handani | Materi PHP Loops (Perulangan)</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; line-height: 1.6; }
        h2 { color: #333; border-bottom: 2px solid #333; padding-bottom: 5px; margin-top: 30px; }
        pre { background: #f4f4f4; padding: 10px; border-left: 5px solid #007bff; }
    </style>
</head>
<body>

 
    <h2>1. Contoh FOR Loop (Maju)</h2>
    <p>Mencetak nilai variabel counter <code>$x</code> dari angka 0 sampai kurang dari 10:</p>
    <pre>
    <?php
    // $x = 0  -> Mulai counter dari 0
    // $x < 10 -> Loop jalan terus selama $x kurang dari 10
    // $x++    -> Setiap selesai 1 putaran, nilai $x ditambah 1
    for ($x = 0; $x < 10; $x++) {
        echo "Nilai dari x adalah: " . $x . "<br>";
    }
    ?>
    </pre>


    <h2>2. Contoh WHILE Loop</h2>
    <p>Mengecek kondisi di awal, jalan selama nilai kurang dari 10:</p>
    <pre>
    <?php
    $number = 2; // Inisialisasi awal

    while ($number < 10) {
        echo "Nomor saat ini: " . $number . "<br>";
        
        $number++; // CRITICAL: Mengubah nilai agar kondisi suatu saat menjadi false dan perulangan berhenti
    }
    ?>
    </pre>


    <h2>3. Contoh DO...WHILE Loop</h2>
    <p>Meskipun kondisi awalnya salah (misal: 20 kurang dari 10 adalah SALAH), kode akan tetap dieksekusi 1 kali:</p>
    <pre>
    <?php
    $angka = 20; // Set angka 20 (yang jelas-jelas tidak kurang dari 10)

    do {
        echo "Ini tercetak minimal sekali, nilai angka: " . $angka . "<br>";
        $angka++;
    } while ($angka < 10); // Kondisi dicek di akhir putaran
    ?>
    </pre>


    <h2>4. Contoh FOREACH Loop (Khusus Array)</h2>
    <p>Membongkar isi array secara otomatis:</p>
    <pre>
    <?php
    // Membuat contoh array data campuran
    $daftar_data = [1, "Amir", "YouTube", 3];

    echo "<b>A. Hanya mengambil nilainya saja (Value):</b><br>";
    foreach ($daftar_data as $value) {
        echo "Isi datanya: " . $value . "<br>";
    }

    echo "<br><b>B. Mengambil posisi Index (Key) sekaligus nilainya (Value):</b><br>";
    foreach ($daftar_data as $key => $value) {
        echo "Index ke-" . $key . " berisi data: " . $value . "<br>";
    }
    ?>
    </pre>

</body>
</html>