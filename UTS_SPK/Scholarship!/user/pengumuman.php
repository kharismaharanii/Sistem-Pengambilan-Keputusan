<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>
    alert('Silahkan login terlebih dahulu');
    document.location.href = '../index.php'
    </script>";
}
if ($_SESSION['level'] != "user") {
    echo "<script>
    alert('Anda tidak memiliki akses');
    document.location.href = '../index.php'
    </script>";
}
include('../koneksi.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/img/logo2.png" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/style/styleuser.css">
    <script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
    <title>User</title>
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-2 pr-3 pt-4" style="height:600px; background-color:#81d0de;">
            <ul class="nav flex-column ">
                <li class="nav-item">
                    <center>
                        <h3 style="color:black; margin-top:20px">
                            <b><img src="../assets/img/logo2.png" style="height: 80px;"> Scholarship!</b>
                            <hr class=bg-secondary>
                        </h3>
                    </center>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="indexuser.php" style="color:black"><i class="fas fa-tachometer-alt" style="margin-right: 5px;"></i> Dashboard</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrasi.php" style="color:black"><i class="fas fa-plus " style="margin-right: 5px"></i> Registrasi</a>
                    <hr class=bg-secondary>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="pengumuman.php" style="color:black"><i class="fas fa-bullhorn" style="margin-right: 5px"></i> Pengumuman</a>
                    <hr class=bg-secondary>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="../logout.php" style="color:black"><i class="fas fa-sign-out-alt" style="margin-right: 5px"></i> Keluar</a>
                    <hr class=bg-secondary>
                </li>
            </ul>
        </div>
        <div class=" col-md-10">
            <h2 style="color:#008cba; margin-top:40px; margin-bottom:20px">
                <b>Pengumuman</b>
                <hr class=bg-secondary>
            </h2>
            <div class="container">
                <div class="card border-info mb-3" style="height:390px; width:1000px; margin-top:40px">
                    <div style="margin: 30px 30px 30px 30px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Rangking</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Hasil Akhir</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $data = $koneksi->query("SELECT DISTINCT nama,hasilakhir from hasil ORDER BY hasilakhir DESC");
                                while ($tampil = $data->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tampil['nama'] ?></td>
                                        <td><?php echo $tampil['hasilakhir'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <p style="color: #008cba;">NB : Hanya siswa rangking 1 yang berhak menerima beasiswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>