<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>
    alert('Silahkan login terlebih dahulu');
    document.location.href = '../index.php'
    </script>";
}
if ($_SESSION['level'] != "admin") {
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
    <title>Admin</title>
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-2 pr-3" style="height:670px; background-color:#81d0de;">
            <ul class="nav flex-column ">
                <li class="nav-item">
                    <center>
                        <h3 style="color:black; margin-top:20px">
                            <b><img src="../assets/img/logo2.png" style="height: 70px;"> Scholarship!</b>
                            <hr class=bg-secondary>
                        </h3>
                    </center>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datapendaftar.php" style="color:black"><i class="fas fa-star" style="margin-right: 5px;"></i> Data Pendaftar</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kriteria.php" style="color:black"><i class="fas fa-balance-scale" style="margin-right: 5px;"></i> Kriteria Bobot</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nilaimax.php" style="color:black"><i class="fas fa-sort-amount-up" style="margin-right: 5px;"></i> Nilai</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matriks.php" style="color:black"><i class="fas fa-divide" style="margin-right: 5px;"></i> Matriks Normalisasi</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hasil.php" style="color:black"><i class="fas fa-poll" style="margin-right: 5px;"></i> Hasil</a>
                    <hr class=bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rangking.php" style="color:black"><i class="fas fa-graduation-cap" style="margin-right: 5px;"></i> Perangkingan</a>
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
                <b>Nilai Maksimal Minimal</b>
                <hr class=bg-secondary>
            </h2>
            <div class="container">
                <div class="card border-info mb-3" style="height:390px; width:1000px; margin-top:40px">
                    <div style="margin: 30px 30px 30px 30px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Maksimal C1</th>
                                    <th scope="col">Minimal C2</th>
                                    <th scope="col">Maksimal C3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;

                                $c1 = $koneksi->query("SELECT MAX(ratarata) AS MaksC1 from pendaftaran");
                                $tampil = mysqli_fetch_assoc($c1);
                                $MaksC1 = $tampil['MaksC1'];


                                $c2 = $koneksi->query("SELECT MIN(penghasilan) AS MinC2 from pendaftaran");
                                $tampil = mysqli_fetch_assoc($c2);
                                $MinC2 = $tampil['MinC2'];

                                $c3 = $koneksi->query("SELECT MAX(tanggungan) AS MaksC3 from pendaftaran");
                                $tampil = mysqli_fetch_assoc($c3);
                                $MaksC3 = $tampil['MaksC3'];

                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $MaksC1 ?></td>
                                    <td><?php echo $MinC2 ?></td>
                                    <td><?php echo $MaksC3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>