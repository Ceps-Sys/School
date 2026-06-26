<?php
echo "<h3>Percabangan</h3>";
echo "<p> adalah sebuah alur dalam pemrograman yang memungkinkan program untuk membuat keputusan berdasarkan kondisi tertentu. Dalam php percabangab digunakan dengan pernyataan if, elsem, dan elseif.</p>";

echo "<h3>Percabagan if</h3>";
$mantan = 'dewi';
if ($mantan == 'dewi') {
    echo "mantan ku adalah ".$mantan;
}

echo "<h3>Percabagan if else</h3>";
$mantan = 'dewi';
if ($mantan == 'sari') {
    echo "mantan ku adalah ".$mantan;
} else {
    echo "mantan ku bukan ".$mantan;
}

echo "<h3>Percabagan if elseif else</h3>";
$mantan2 = 'raihan';
if ($mantan2 == 'atha') {
    echo "mantan ku adalah ".$mantan2;
} elseif ($mantan2 == 'syahwan') {
    echo "mantan ku adalah ".$mantan2;
} else {
    echo "mantan ku bukan ".$mantan2;
}

echo "<h3>Percabagan switch</h3>";
$mantan2 = 'raihan';
switch ($mantan2) {
    case 'atha':
        echo "mantan ke-2 ku adalah ".$mantan2;
        break;
    case 'syahwan':
        echo "mantan ke-2 ku adalah ".$mantan2;
        break;
    case 'raihan':
        echo "mantan ke-2 ku adalah ".$mantan2;
        break;
    default:
        echo "mantan ku bukan ".$mantan2;
}

echo "<h3>If bertingkat</h3>";
echo "<p> adalah sebuah struktur percabangan yang memungkinkan kita untuk membuat keputusan yang lebih kompleks dengan menggunakan beberapa kondisi if di dalamnya.</p>";
echo ">=-85     : A ;SANGAT BAIK <br>";
echo "80 - 85   : B ;BAIK <br>";
echo "70 - 80   : C ;CUKUP <br>";
echo "60 - 70   : D ;KURANG <br>";
echo "< 60      : E ;SANGAT KURANG <br>";

$nilai = 80;
if ($nilai >= 85) {
    echo "Kamu mendapatka nilai ".$nilai." Maka anda mendapatkan nilai A dengan predikat SANGAT BAIK";
} elseif ($nilai >= 80) {
    echo "Kamu mendapatka nilai ".$nilai." Maka anda mendapatkan nilai B dengan predikat BAIK";
} elseif ($nilai >= 70) {
    echo "Kamu mendapatka nilai ".$nilai." Maka anda mendapatkan nilai C dengan predikat CUKUP";
} elseif ($nilai >= 60) {
    echo "Kamu mendapatka nilai ".$nilai." Maka anda mendapatkan nilai D dengan predikat KURANG";
} else {
    echo "Kamu mendapatka nilai ".$nilai." Maka anda mendapatkan nilai E dengan predikat SANGAT KURANG";
}
?>