<?php

include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM wisata_papua WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
    <div class="container container-center bg-success mt-5 ">


        <form action="update.php" method="post">
            <table class="table table-secondary  text-center  text-uppercase table-hover mt-3" border="2">
                <h3>EDIT</h3>
                <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>" />

                <label class="label text-uppercase">nama</label><br />
                <input type="text" name="nama" value="<?php echo $result[0]['nama'] ?>" />
                <br /><br />

                <label class="label text-uppercase">reting</label><br />
                <input type="text" name="reting" value="<?php echo $result[0]['reting'] ?>" />
                <br /><br />

                <label class="label text-uppercase">deskripsi</label><br />
                <textarea rows="10" cols="50" type="text" name="deskripsi" class="label " placeholder="deskripsi" value="<?php echo $result[0]['deskripsi'] ?>"></textarea>
                <br /><br />

                <label class="label text-uppercase">gambar</label><br />
                <input type="file" name="gambar" value="<?php echo $result[0]['gambar'] ?>" />
                <br /><br />


                <button class="btn btn-warning text-uppercase text-daek" type="submit">Update</button>
        </form>
        </table>
    </div>
</body>



</html>