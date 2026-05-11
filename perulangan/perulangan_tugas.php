<?php

// Nomor 1
echo "Bilangan kelipatan 10 dari 5 s/d 100:<br>";

for ($i = 5; $i <= 100; $i++) {
    if ($i % 10 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// Nomor 2
$jumlah = 0;

for ($i = 2; $i <= 50; $i++) {
    $jumlah += $i;
}

echo "Jumlah bilangan 2 s/d 50 = " . $jumlah;

echo "<br><br>";


// Nomor 3
$banyak = 0;

for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        $banyak++;
    }
}

echo "Banyak bilangan kelipatan 6 dari 3 s/d 127 = " . $banyak;

?>