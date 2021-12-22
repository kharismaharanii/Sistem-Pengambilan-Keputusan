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
                <b>Registrasi</b>
                <hr class=bg-secondary>
            </h2>
            <div class="container">
                <div class="card border-info mb-3" style="height:390px; width:1000px; margin-top:40px">
                    <div style="margin:10px 30px 30px 30px">
                        <form method="POST">
                            <div class="form-group">
                                <label style="color: #008cba; margin-bottom:10px">Nama</label>
                                <input type="text" class="form-control" id="nama" style="margin-bottom:10px" name="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="form-group">
                                <label style="color: #008cba; margin-bottom:10px">Rata-rata Raport</label>
                                <select class="form-select" aria-label="Default select example" name="ratarata" style="margin-bottom: 10px;">
                                    <option value="1">Dibawah 50</option>
                                    <option value="2">51 - 85</option>
                                    <option value="3">86 - 100</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="color: #008cba; margin-bottom:10px">Penghasilan Orang Tua</label>
                                <select class="form-select" aria-label="Default select example" name="penghasilan" style="margin-bottom: 10px;">
                                    <option value="1">1.000.000 - 2.000.000</option>
                                    <option value="2">2.000.000 - 3.000.000</option>
                                    <option value="3">Diatas 3.000.000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="color: #008cba; margin-bottom:10px">Tanggungan Orang Tua</label>
                                <select class="form-select" aria-label="Default select example" name="tanggungan" style="margin-bottom: 10px;">
                                    <option value="1">1 - 2</option>
                                    <option value="2">3 - 4</option>
                                    <option value="3">Diatas 5</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="height:40px; width:940px; background-color: #008cba;" name="simpan">Submit</button>
                        </form>
                        <?php if (isset($_POST['simpan'])) {
                            $insert = mysqli_query(
                                $koneksi,
                                "INSERT INTO pendaftaran (nama, ratarata, penghasilan, tanggungan) 
                                VALUES ('$_POST[nama]', 
                                '$_POST[ratarata]',
                                '$_POST[penghasilan]',
                                '$_POST[tanggungan]')
                                "
                            );
                            if ($insert) {
                                echo "<script>
                                    alert('Registrasi Sukses');
                                    document.location='registrasi.php';
                                    </script>";
                            } else {
                                echo "<script>
                                alert('Registrasi Gagal');
                                document.location='registrasi.php';
                                </script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>