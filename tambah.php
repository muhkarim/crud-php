<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="name">NRP   :</label>
                <input type="text" name="nrp" id="nrp" require>
            </li>
            <li>
            <label for="name">Nama   :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="name">Email   :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="name">Jurusan   :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="name">Gambar   :</label>
                <input type="text" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        
        </ul>
    
    </form>
</body>
</html>