<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);


if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    $_SESSION['id']    = $data['id'];
    $_SESSION['username']    = $data['username'];
    $_SESSION['password']    = $data['password'];
    $_SESSION['level']    = $data['level'];


    if ($data['level'] == "admin") {


        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location:admin/datapendaftar.php");
    } else if ($data['level'] == "user") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        header("location:user/indexuser.php");
    } else {
        header("location:../login.php?pesan=gagal");
    }
} else {
    header("location:../login.php?pesan=gagal");
}
