<?php
require 'connection.php';
if (isset($_POST['add'])) {
    // menyimpan data dari form ke variabel
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $reting = $_POST['reting'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $tmp_gambar = $_FILES['gambar']['tmp_name'];
    $ukuran_gambar = $_FILES['gambar']['size'];
    $tipe_gambar = $_FILES['gambar']['type'];
    // memeriksa apakah tipe foto adalah jpeg, jpg, atau png
    if ($tipe_gambar != "image/jpeg" && $tipe_gambar != "image/jpg" && $tipe_gambar != "image/png") {
        $error = "Tipe file gambar harus jpeg, jpg, atau png!";
    } else {
        // mengupload foto ke folder "uploads" dan menyimpan data ke database
        move_uploaded_file($tmp_gambar, "../image/" . $gambar);
        $sql = "INSERT INTO wisata_papua (id,nama, reting, deskripsi, gambar) VALUES ('$id','$nama', '$reting','$deskripsi', '$gambar')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        echo '<script>alert("BERHASIL MENAMBAHKAN PAKET");window.location.href = "../admin.php";</script>';
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container container-center bg-success ">
        <table class="table table-secondary  text-center text-uppercase table-hover mt-5" border="2">
            <!-- form 1 -->
            <form action="" method="post" enctype="multipart/form-data">
                <table class="table table-secondary  text-center  text-uppercase table-hover mt-3" border="2">
                    <h3>WISATA PAPUA</h3>
                    <label class="label text-uppercase">nama</label><br />
                    <input type="text" name="nama" />
                    <br /><br />

                    <label class="label text-uppercase">reting</label><br />
                    <input type="text" name="reting" />
                    <br /><br />

                    <label class="label text-uppercase">deskripsi</label><br>
                    <textarea rows="10" cols="50" type="text" name="deskripsi" class="label " placeholder="deskripsi"></textarea>
                    <br /><br />

                    <label class="label text-uppercase">gambar</label><br />
                    <input type="file" name="gambar" />
                    <br /><br />


                    <input class="btn btn-warning text-uppercase text-daek" type="submit" name="add" value="Tambah Data">
                </table>
            </form>

        </table>

    </div>
</body>

</html>