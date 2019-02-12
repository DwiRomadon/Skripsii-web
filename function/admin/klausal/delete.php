<?php
require_once("../../koneksi.php");

//menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$ins = mysqli_query($con,"delete from t_klausal where id_klausal='$id'");

if($ins){
    echo "<script>alert('Berhasil menghapus'); window.location=('http://localhost/ratih/admin/all-klausal');</script>";
}else {
    echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/all-klausal');</script>";
}