<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi PHP Array | Cepi Handani</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; line-height: 1.6; }
        h2 { color: #333; border-bottom: 2px solid #ffc107; padding-bottom: 5px; margin-top: 30px; }
        pre { background: #f8f9fa; padding: 10px; border-left: 5px solid #ffc107; }
    </style>
</head>
<body>

    <h1>Rangkuman Program Array PHP (Bro Code)</h1>

    <h2>1. Indexed Array & Fungsi Manipulasinya</h2>
    <pre>
    <?php
    // Membuat array bertipe Indexed Array
    $foods = ["apple", "orange", "banana", "coconut"];

    // Mengubah isi data berdasarkan posisi nomor indeksnya
    $foods[0] = "pineapple"; // Mengubah "apple" menjadi "pineapple"

    // --- FUNGSI MANIPULASI (ARRAY FUNCTIONS) ---
    
    // array_push() -> Menambahkan data baru ke posisi paling AKHIR
    array_push($foods, "mango", "guava");

    // array_pop() -> Menghapus 1 data dari posisi paling AKHIR
    array_pop($foods); 

    // array_unshift() -> Menambahkan data baru ke posisi paling AWAL/DEPAN
    array_unshift($foods, "strawberry");

    // array_shift() -> Menghapus 1 data dari posisi paling AWAL/DEPAN
    array_shift($foods);

    // array_reverse() -> Membalikkan urutan isi array (belakang jadi depan)
    // Catatan: Fungsi ini menghasilkan array baru, jadi kita timpa variabel lamanya
    $foods = array_reverse($foods);

    // count() -> Menghitung total jumlah seluruh data di dalam array
    echo "Total menu makanan saat ini: " . count($foods) . " jenis.<br><br>";

    // Membongkar dan menampilkan seluruh isi array dengan Foreach Loop
    echo "<b>Daftar Makanan (Setelah Manipulasi):</b><br>";
    foreach($foods as $food) {
        echo "- " . $food . "<br>";
    }
    ?>
    </pre>


    <h2>2. Associative Array (Key & Value)</h2>
    <pre>
    <?php
    // Membuat Associative Array (Format -> "Key" => "Value")
    $capitals = [
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    ];

    // Mengubah nilai Value berdasarkan nama Key-nya
    $capitals["USA"] = "Las Vegas"; // Mengubah ibu kota USA menjadi Las Vegas

    // Menambah pasangan Key-Value baru langsung ke dalam array yang sudah ada
    $capitals["Indonesia"] = "Jakarta";

    // --- FUNGSI KHUSUS ASSOCIATIVE ARRAY ---

    // array_keys() -> Mengambil semua nama "Key" saja dan diubah menjadi array biasa
    $keys = array_keys($capitals);
    
    // array_values() -> Mengambil semua nama "Value" saja dan diubah menjadi array biasa
    $values = array_values($capitals);

    // array_flip() -> Menukar posisi (Key jadi Value, Value jadi Key)
    $flipped = array_flip($capitals);


    // --- CARA MENAMPILKAN DATA DI LAYAR ---

    // A. Memanggil satu data spesifik lewat nama Key-nya
    echo "Ibu kota Negara Jepang adalah: " . $capitals["Japan"] . "<br><br>";

    // B. Looping untuk mengambil pasangan Key dan Value secara utuh
    echo "<b>Daftar Negara dan Ibu Kota:</b><br>";
    foreach($capitals as $key => $value) {
        echo "- Negara " . $key . " beribukota di " . $value . "<br>";
    }
    ?>
    </pre>

</body>
</html>