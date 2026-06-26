<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function PHP - Cepi Hndani</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; line-height: 1.6; }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 5px; margin-top: 30px; }
        pre { background: #f4f4f4; padding: 15px; border-left: 5px solid #007bff; font-size: 14px; }
        .highlight { color: #d9534f; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Rangkuman Program Function PHP (Web Programming Unpas)</h1>

    <h2>1. Built-in Function: Date & Time</h2>
    <p>PHP memiliki ratusan fungsi bawaan. Berikut adalah contoh fungsi pengelola waktu:</p>
    <pre>
    <?php
    // A. Fungsi date() -> Menampilkan tanggal dengan format tertentu
    // 'l' = nama hari, 'd' = tanggal, 'M' = nama bulan singkat, 'Y' = tahun
    echo "Hari & Tanggal saat ini: " . date("l, d M Y") . "<br>";

    // B. Fungsi time() -> Menampilkan Unix Timestamp (detik yang berlalu sejak 1 Jan 1970)
    echo "Unix Timestamp saat ini: " . time() . " detik.<br>";

    // C. Kombinasi date() dan time() untuk prediksi waktu
    // Rumus hitung detik: 60 detik * 60 menit * 24 jam * jumlah hari
    echo "100 hari lagi dari sekarang adalah hari: " . date("l", time() + (60*60*24*100)) . "<br>";
    echo "100 hari yang lalu adalah tanggal: " . date("d M Y", time() - (60*60*24*100)) . "<br>";

    // D. Fungsi mktime() -> Membuat sendiri detik Unix Timestamp dari tanggal tertentu
    // Format: mktime(jam, menit, detik, bulan, tanggal, tahun)
    $detik_lahir = mktime(0, 0, 0, 7, 6, 2010); 
    echo "Detik yang berlalu dari 1970 ke 6 Juli 2010: " . $detik_lahir . "<br>";
    echo "Maka, tanggal 6 Juli 2010 adalah hari: " . date("l", $detik_lahir) . "<br>";

    // E. Fungsi strtotime() -> Mengubah string teks tanggal menjadi detik Unix Timestamp
    $detik_string = strtotime("6 Jul 2010");
    echo "Cek hari pakai strtotime(): " . date("l", $detik_string) . "<br>";
    ?>
    </pre>


    <h2>2. User-Defined Function (Fungsi Buatan Sendiri)</h2>
    <p>Memanggil fungsi kustom dengan parameter dinamis:</p>
    
    <pre>
    <?php
    // DEFINISI FUNGSI: Membuat fungsi bernama 'salam'
    // $waktu dan $nama diberikan nilai default ("datang" dan "admin") sebagai cadangan jika argumen kosong
    function greeting($waktu = "datang", $nama = "admin") {
        return "Selamat $waktu, $nama!";
    }
    ?>

    <h3>
        Kondisi A (Kirim semua argumen): 
        <span class="highlight"><?= greeting("pagi", "Sandika"); ?></span>
    </h3>

    <h3>
        Kondisi B (Hanya kirim 1 argumen, sisanya pakai default): 
        <span class="highlight"><?= greeting("siang"); ?></span>
    </h3>

    <h3>
        Kondisi C (Kosong tanpa argumen, semua pakai default): 
        <span class="highlight"><?= greeting(); ?></span>
    </h3>
    </pre>


    <h2>3. Contekan Fungsi Penting Lainnya di PHP</h2>
    <ul>
        <li><b>String Functions:</b> 
            <ul>
                <li><code>strlen()</code> : Menghitung panjang string.</li>
                <li><code>strcmp()</code> : Membandingkan dua buah string.</li>
                <li><code>explode()</code> : Memecah string menjadi array (sering dipakai untuk memilah ekstensi file).</li>
                <li><code>htmlspecialchars()</code> : Mengamankan form input website dari serangan hacker/script iseng.</li>
            </ul>
        </li>
        <li><b>Utility Functions:</b>
            <ul>
                <li><code>var_dump()</code> : Mencetak isi variabel, array, atau objek secara mendetail untuk debugging.</li>
                <li><code>isset()</code> : Mengecek apakah sebuah variabel sudah pernah dibuat dan memiliki nilai atau belum (menghasilkan true/false).</li>
                <li><code>empty()</code> : Mengecek apakah variabel yang ada statusnya kosong atau tidak.</li>
                <li><code>die()</code> : Menghentikan eksekusi seluruh baris program di bawahnya seketika.</li>
                <li><code>sleep()</code> : Memberhentikan sementara jalannya program selama beberapa detik.</li>
            </ul>
        </li>
    </ul>

</body>
</html>