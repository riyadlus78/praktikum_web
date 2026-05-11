<?php
// Membuat array asosiatif
$buah = array(
    "Apel" => 15000,
    "Jeruk" => 10000,
    "Mangga" => 20000,
    "Pisang" => 5000
);

echo "<b>Array Asli:</b><br>";
print_r($buah);
echo "<br><br>";

// 1. asort() - Urutkan berdasarkan nilai (Value) secara Ascending
asort($buah);
echo "<b>Setelah asort() (Nilai Asc):</b><br>";
print_r($buah);
echo "<br><br>";

// 2. arsort() - Urutkan berdasarkan nilai (Value) secara Descending
arsort($buah);
echo "<b>Setelah arsort() (Nilai Desc):</b><br>";
print_r($buah);
echo "<br><br>";

// 3. ksort() - Urutkan berdasarkan kunci (Key) secara Ascending
ksort($buah);
echo "<b>Setelah ksort() (Kunci Asc):</b><br>";
print_r($buah);
echo "<br><br>";

// 4. krsort() - Urutkan berdasarkan kunci (Key) secara Descending
krsort($buah);
echo "<b>Setelah krsort() (Kunci Desc):</b><br>";
print_r($buah);
?>

//pengurutan array asosiatif dibedakan berdasarkan apa yang ingin diurutkan (Kunci atau Nilai) dan arahnya (Menaik atau Menurun).

//asort() (Associative Sort):
Mengurutkan isi array berdasarkan Nilainya (Value) secara Ascending (dari kecil ke besar). Fungsi ini tetap mempertahankan hubungan antara kunci dan nilainya.

//arsort() (Associative Reverse Sort):
Sama seperti asort, tapi mengurutkan secara Descending (dari besar ke kecil) berdasarkan Nilainya.

//ksort() (Key Sort):
Mengurutkan array berdasarkan Kuncinya (Key) secara Ascending (sesuai abjad A-Z atau angka terkecil).

//krsort() (Key Reverse Sort):
Mengurutkan array berdasarkan Kuncinya secara Descending (Z-A atau angka terbesar).

//Contoh di atas menunjukkan bagaimana setiap fungsi mengurutkan array asosiatif $buah berdasarkan kunci atau nilai, dan dalam