<?php
include "connect.php";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$Telp = (isset($_POST['Telp'])) ? htmlentities($_POST['Telp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_user (nama, username, level, Telp, alamat, password) values ('$name', '$username', '$level', '$Telp', '$alamat', '$password')");
    if ($query) {
        $message = "<script>alert('Data berhasil dimasukkan'); window.location='../user'</script>";
    } else {
        $message = "<script>alert('Data gagal dimasukkan')</script>";
    }
    echo $message;
}
?>