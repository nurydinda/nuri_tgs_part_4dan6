<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Data mahsiswa</h1>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

    if (!koneksi){
        die("koneksi gagal :" .mysqli_connect_error());
    }
    $mhs =mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    var_dump($mhs);
    echo "<br>"
    $datamhs = mysqli

    ?>
</body>
</html>