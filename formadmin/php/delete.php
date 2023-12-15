<?php

include('connection.php');

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM wisata_papua WHERE id='$id' ");

if ($delete)
	header('Location : ../admin.php');
else
	echo 'Delete Data Gagal';
