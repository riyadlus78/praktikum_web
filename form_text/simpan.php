<?php
$nama = $_POST['Nama'];
$tempat = $_POST['Tempat'];
$tanggalLahir = $_POST['TanggalLahir'];
$jenisKelamin = $_POST['JenisKelamin'] ?? "";
$alamat = $_POST['Alamat'];
$agama = $_POST['Agama'];

echo "<h2>Data Diri</h2>";

echo "Nama : $nama <br>";
echo "Tempat : $tempat <br>";
echo "Tanggal Lahir : $tanggalLahir <br>";
echo "Jenis Kelamin : $jenisKelamin <br>";
echo "Alamat : $alamat <br>";
echo "Agama : $agama <br>";

echo "<br>";
echo "Hobi Anda Adalah : <br>";

if (isset($_POST['Hobi1'])) {
    echo "- " . $_POST['Hobi1'] . "<br>";
}
if (isset($_POST['Hobi2'])) {
    echo "- " . $_POST['Hobi2'] . "<br>";
}
if (isset($_POST['Hobi3'])) {
    echo "- " . $_POST['Hobi3'] . "<br>";
}
if (isset($_POST['Hobi4'])) {
    echo "- " . $_POST['Hobi4'] . "<br>";
}
if (isset($_POST['Hobi5'])) {
    echo "- " . $_POST['Hobi5'] . "<br>";
}

$dir_upload = "files/";
$upload_file = $dir_upload . $_FILES['File']['name'];
if (is_uploaded_file($_FILES['File']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['File']['tmp_name'], $upload_file);
    if ($kirim) {
        echo "File berhasil diupload";
    } else {
        echo "File gagal diupload";
    }
    echo "<img src='" . htmlspecialchars($upload_file) . "' alt='Foto Profil' style='max-width: 200px; height: auto; border-radius: 8px; margin-top: 10px;'>";
}
// jika menggunakan array checkbox dengan nama yang sama (Hobi[]), maka kita perlu menggunakan loop untuk menampilkan hobi yang dipilih, sedangkan dengan nama checkbox yang berbeda (Hobi1, Hobi2, dll), kita bisa langsung memeriksa setiap checkbox secara terpisah dan menampilkan hobi yang dipilih tanpa perlu loop.
// $nama = $_POST['Nama'];
// $tempat = $_POST['Tempat'];
// $tanggalLahir = $_POST['TanggalLahir'];
// $jenisKelamin = $_POST['JenisKelamin'];
// $alamat = $_POST['Alamat'];
// $agama = $_POST['Agama'];

// $hobi = isset($_POST['Hobi']) ? implode(',<br> ', $_POST['Hobi']) : '';

// echo "Nama: " . $nama . "<br>";
// echo "Tempat: " . $tempat . "<br>";
// echo "Tanggal Lahir: " . $tanggalLahir . "<br>";
// echo "Jenis Kelamin: " . $jenisKelamin . "<br>";
// echo "Alamat: " . $alamat . "<br>";
// echo "Agama: " . $agama . "<br>";
// echo "Hobi: " . $hobi . "<br>";
$usernameBenar = "admin";
$passwordBenar = "12345";

$username = $_POST['Username'];
$password = $_POST['Password'];

if($username == $usernameBenar && $password == $passwordBenar){

    echo "<h2>Login Berhasil</h2>";
    echo "Selamat datang, ".$username;

}else{

    echo "<h2>Login Gagal</h2>";
    echo "Username atau Password salah";

}
?>