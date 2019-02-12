<?php
require_once("../../koneksi.php");

// Deklarasi variable
$idtujuan          = $_POST['idtujuan'];
$kodetujuan        = $_POST['kodetujuan'];
$kodeklausal       = $_POST['kodeklausal'];
$kodekeamanan      = $_POST['kodekeamanan'];
$nama              = $_POST['nama'];
$tgl               = date("Y-m-d H:i:s");
$submit            = $_POST['submit'];

if(isset($submit)){

    if(empty($kodeklausal) or empty($kodekeamanan) or empty($nama) or empty($kodetujuan)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/add-tujuan') </script>";
    }else{
        $ins = mysqli_query($con,"update t_tujuan set kode_klausal='$kodeklausal', kode_keamanan='$kodekeamanan',
                                          kode_tujuan='$kodetujuan', tujuan='$nama' where id_tujuan='$idtujuan'");

        if($ins){
            echo "<script>alert('Berhasil Mengubah Tujuan'); window.location=('http://localhost/ratih/admin/all-tujuan');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-tujuan');</script>";
        }
    }
}