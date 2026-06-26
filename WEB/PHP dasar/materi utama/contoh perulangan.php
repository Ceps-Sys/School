<?php
echo "perulangan for <br>";
for ($mobil = 1; $mobil <= 15; $mobil++) {
    echo "Aku punya" . $mobil . "dirumah <br>";
}

echo "perulangan while <br>";
$buah = 20;
while ($buah > 0) {
    echo "Aku punya apel sebanyak " . $buah . " buah <br>";
    $buah--;
}

echo "perulangan do-while <br>";
$bensin = 1;
do {
    echo "Bensin gua masih ada sebanyak " . $bensin . " liter <br>";
    $bensin--;
} while ($bensin > 0);

echo "perulangan foreach <br>";
$mobil = array("chevrolet", "toyota", "dodge", "porche");
foreach ($mobil as $car) {
    echo "Merk mobil anda adalah: " . $car . "<br>";
}