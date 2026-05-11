<?php
$buah = array("Apel" => 15000, "Jeruk" => 10000, "Mangga" => 20000, "Pisang" => 5000);

// 1. array_keys() - Mengambil semua kunci (nama buah)
$nama_buah = array_keys($buah);
echo "<b>1. Nama-nama buah (array_keys):</b><br>";
print_r($nama_buah);
echo "<br><br>";

// 2. array_values() - Mengambil semua nilai (harga)
$harga_buah = array_values($buah);
echo "<b>2. Daftar harga saja (array_values):</b><br>";
print_r($harga_buah);
echo "<br><br>";

// 3. array_key_exists() - Memeriksa apakah kunci tertentu ada
echo "<b>3. Cek apakah 'Jeruk' ada (array_key_exists):</b><br>";
if (array_key_exists("Jeruk", $buah)) {
    echo "Buah Jeruk tersedia.";
} else {
    echo "Buah Jeruk tidak tersedia.";
}
echo "<br><br>";

// 4. array_sum() - Menjumlahkan semua nilai dalam array
$total_harga = array_sum($buah);
echo "<b>4. Total harga semua buah (array_sum):</b><br>";
echo "Rp " . number_format($total_harga);
echo "<br><br>";

// 5. array_slice() - Mengambil potongan tertentu dari array
$potongan = array_slice($buah, 1, 2);
echo "<b>5. Mengambil 2 elemen mulai dari indeks ke-1 (array_slice):</b><br>";
print_r($potongan);
?>

//Penjelasan fungsi array:
//1.array_keys() - Mengambil semua kunci dari array asosiatif, menghasilkan array baru yang berisi nama-nama buah.
//2.array_values() - Mengambil semua nilai dari array asosiatif, menghasilkan array baru yang berisi harga-harga buah.
//3.array_key_exists() - Memeriksa apakah kunci tertentu (misalnya "Jeruk") ada dalam array, mengembalikan true atau false.
//4.array_sum() - Menjumlahkan semua nilai dalam array, menghasilkan total harga semua buah.
//5.array_slice() - Mengambil potongan tertentu dari array, dalam contoh ini mengambil 2 elemen mulai dari indeks ke-1 (Jeruk dan Mangga).