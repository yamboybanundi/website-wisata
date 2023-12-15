<?php

include('php/connection.php');

$query = "SELECT * FROM wisata_papua";
$db = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Admin</title>
    <link rel="stylesheet" href="styleadmin.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <div class="menu">
                <li class="active">
                    <a href="#"><i class="bx bx-home"></i><span>Dasboard</span> </a>
                </li>
                <li>

                    <a href="#"><i class='bx bx-user'></i><span>profile</span></a>
                </li>
                <li>

                    <a href="#"><i class='bx bxs-bar-chart-alt-2'></i><span>Statictic</span> </a>
                </li>

                <li>

                    <a href="#"><i class="bx bx-cog"></i><span>Settings</span> </a>
                </li>
                <li>

                    <a href="../index.html"><i class="bx bx-log-out"></i><span>logout</span> </a>
                </li>
                </li>
            </div>
        </div>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Dasboard</span>
                <h2>Admin</h2>
            </div>
            <div class="user--info">
                <div class="search--box">

                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search">
                </div>
                <img src="profil.jpg" alt="one-piece">
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">today's date</h3>
            <div class="card--wrapper">
                <!-- car1 -->
                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <sapn class="title">payment amount</sapn>
                            <sapn class="amount-value">$200.00</sapn>
                        </div>
                        <i class='bx bx-group  icon dark-green'></i>
                    </div>
                    <span class="card-detail">**** **** **** 8896</span>
                </div>
                <!-- car2 -->

                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <sapn class="title">payment amount</sapn>
                            <sapn class="amount-value">$500.00</sapn>
                        </div>
                        <i class='bx bx-dollar icon'></i>
                    </div>
                    <span class="card-detail">**** **** **** 3438</span>
                </div>
                <!-- car3 -->
                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <sapn class="title">payment amount</sapn>
                            <sapn class="amount-value">$350.00</sapn>
                        </div>
                        <i class='bx bx-list-ul icon dark-purple'></i>
                    </div>
                    <span class="card-detail">**** **** **** 5542</span>
                </div>
                <!-- car4 -->
                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <sapn class="title">payment amount</sapn>
                            <sapn class="amount-value">$150.00</sapn>
                        </div>
                        <i class='bx bx-check icon dark-blue'></i>
                    </div>
                    <span class="card-detail">**** **** **** 7745</span>
                </div>
            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main-title">Data Tempat Wisata</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Tempat Wisata</th>
                            <th>reting</th>
                            <th>deskripsi</th>
                            <th>gambar</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <?php while ($row = mysqli_fetch_assoc($db)) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['reting'] ?></td>
                                <td><?php echo $row['deskripsi'] ?></td>
                                <td><img src="../assets/img/<?php echo $row['gambar']; ?>" style="width:200px; height:200px;"></td>
                                <td>
                                    <a href="php/edit.php?id=<?php echo $row['id'] ?>"><button class=" edit ">EDIT</button></a> <br>
                                    <a href="php/delete.php?id=<?php echo $row['id'] ?>"><button class="hapus ">HAPUS<button></a>
                                </td>
                            </tr>
                        </tbody>

                    <?php endwhile; ?>
                </table>
                <a href="php/add.php"><button class="tambah-data">TAMBAH DATA </button></a>
            </div>
        </div>
    </div>
</body>

</html>