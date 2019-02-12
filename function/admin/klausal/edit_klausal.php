<?php


require_once("../../koneksi.php");

// Deklarasi variable
$id         = $_POST['id'];
$kode       = $_POST['kode'];
$nama       = $_POST['nama'];
$tgl        = date("Y-m-d H:i:s");
$submit     = $_POST['submit'];

if(isset($submit)){

    if(empty($kode) or empty($nama)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/all-klausal') </script>";
    }else{
        $ins = mysqli_query($con,"update t_klausal set kode_klausal='$kode', klausal='$nama', created_at='$tgl' where id_klausal='$id'");

        if($ins){
            echo "<script>alert('Berhasil Mengubah Klausal'); window.location=('http://localhost/ratih/admin/all-klausal');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-klausal');</script>";
        }
    }
}