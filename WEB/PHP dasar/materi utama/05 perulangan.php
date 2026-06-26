<?php
echo "<h3>Perulangan</h3>";
echo "<p> adalah sebuah struktur alur dalam pemrograman yang memungkinkan program untuk menjalankan suatu block kode secara berulang-ulang selama kondisi tertentu terpenuhi. Dalam php perulangan digunakan dengan pernyataan for, while, do-while, dan foreach.</p>";
echo "<h3>Perulangan for</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-".$i."<br>";
}

echo "<h3>Perulangan while</h3>";
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke-".$i."<br>";
    $i++;
}

echo "<h3>Perulangan do-while</h3>";
$i = 1;
do {
    echo "Perulangan ke-".$i."<br>";
    $i++;
} while ($i <= 10);

echo "<h3>Perulangan foreach</h3>";
$buah = array("apel", "jeruk", "mangga", "pisang");
foreach ($buah as $b) {
    echo "Buah: ".$b."<br>";
}