<?php

include('connection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$reting = $_POST['reting'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];


$update = mysqli_query($conn, "UPDATE wisata_papua SET 
nama='$nama',reting='$reting', deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id' ");

if ($update)
    header('Location:../admin.php');
else
    echo 'Update Data Gagal';
