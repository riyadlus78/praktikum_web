<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: form_login.php");
}?>

<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="simpan.php" method="post">
    Nama : <input type="text" name="Nama"> <br>
    Tempat : <input type="text" name="Tempat"> <br>
    Tanggal Lahir : <input type="date" name="TanggalLahir"> <br>
    Jenis Kelamin : <input type="radio" name="JenisKelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="JenisKelamin" value="Perempuan"> Perempuan <br>
    Alamat : <textarea name="Alamat"></textarea> <br>
    Agama : <select name="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
            </select> <br>
            Hobi : <input type="checkbox" name="Hobi1" value="Membaca"> Membaca <br>
            <input type="checkbox" name="Hobi2" value="Menulis"> Menulis <br>
            <input type="checkbox" name="Hobi3" value="Olahraga"> Olahraga <br>
            <input type="checkbox" name="Hobi4" value="Musik"> Musik <br>
            <input type="checkbox" name="Hobi5" value="Mancing"> Mancing <br>


    <!-- ini versi yang lebih sederhana, tapi saya buat 5 checkbox dengan nama yang berbeda agar lebih mudah untuk menampilkan hobi yang dipilih di halaman simpan.php, karena jika menggunakan array checkbox dengan nama yang sama (Hobi[]), maka kita perlu menggunakan loop untuk menampilkan hobi yang dipilih, sedangkan dengan nama checkbox yang berbeda (Hobi1, Hobi2, dll), kita bisa langsung memeriksa setiap checkbox secara terpisah dan menampilkan hobi yang dipilih tanpa perlu loop.
            Hobi : <input type="checkbox" name="Hobi[]" value="Membaca"> Membaca
            <input type="checkbox" name="Hobi[]" value="Menulis"> Menulis
            <input type="checkbox" name="Hobi[]" value="Olahraga"> Olahraga
            <input type="checkbox" name="Hobi[]" value="Musik"> Musik 
            <input type="checkbox" name="Hobi[]" value="Mancing"> Mancing <br> -->

            Masukkan Foto : <input type="file" name="File"> <br>
            

    <input type="submit" value="kirim">
    </form>
    

</body>
</html>