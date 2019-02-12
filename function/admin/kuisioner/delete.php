<?php
require_once("../../koneksi.php");

//menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
$ins = mysqli_query($con,"delete from t_kuisioner where id_kuisioner='$id'");

if($ins){
    echo "<script>alert('Berhasil menghapus'); window.location=('http://localhost/ratih/admin/all-kuisioner');</script>";
}else {
    echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/all-kuisioner');</script>";
}