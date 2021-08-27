<?php

include('koneksi.php');


$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);

        $query = "INSERT INTO webdb (latitude, longtitude, lokasi, tanggal, deskripsi, gambar) VALUES ('$latitude', '$longtitude', '$lokasi', '$tanggal', '$deskripsi', '$gambar') ";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error : " . mysqli_error($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('data berhasil ditambahkan!');window.location='contact.php';</script>";
        }
    } else {
        echo "<script>alert('data hanya jpg!');window.location='contact.php';</script>";
    }
} else {
    $query = "INSERT INTO webdb (latitude, longtitude, lokasi, tanggal, deskripsi) VALUES ('$latitude', '$longtitude', '$lokasi', '$tanggal', '$deskripsi') ";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error : " . mysqli_error($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('data berhasil ditambahkan!');window.location='contact.php';</script>";
    }
}
