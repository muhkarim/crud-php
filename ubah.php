<?php
require 'functions.php';

// ambil data dari URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
// pakai function query yang sudah dibuat di functions
// pakai array numeric ke 0 (pertama) karena kita  hanya akan mengambil data tsb
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump( $mhs["nama"]);

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
        <script>
        alert('data gagal diubah');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
    <input type="hidden" name ="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
            <label for="name">NRP   :</label>
                <input type="text" name="nrp" id="nrp" require value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
            <label for="name">Nama   :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
            <label for="name">Email   :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
            <label for="name">Jurusan   :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
            <label for="name">Gambar   :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        
        </ul>
    
    </form>
</body>
</html>