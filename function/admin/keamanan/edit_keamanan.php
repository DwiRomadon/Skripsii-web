<?php

require_once("../../koneksi.php");

// Deklarasi variable
$id                = $_POST['id'];
$kodeklausal       = $_POST['kodekalusal'];
$kodekeamanan      = $_POST['kodekeamanan'];
$nama              = $_POST['nama'];
$tgl               = date("Y-m-d H:i:s");
$submit            = $_POST['submit'];

if(isset($submit)){

    if(empty($kodekeamanan) or empty($nama) or empty($kodeklausal)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/edit_keamanan') </script>";
    }else{
        $ins = mysqli_query($con,"update t_keamanan set kode_klausal='$kodeklausal', kode_keamanan='$kodekeamanan',keamanan='$nama', created_at='$tgl' where id_keamanan='$id'");

        if($ins){
            echo "<script>alert('Berhasil Mengubah Keamanan'); window.location=('http://localhost/ratih/admin/all-keamanan');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/all-keamanan');</script>";
        }
    }
}