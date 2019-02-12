<?php
require_once("../../koneksi.php");

// Deklarasi variable
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
        $ins = mysqli_query($con,"insert into t_tujuan(kode_klausal,kode_keamanan,kode_tujuan,tujuan,created_at) 
                                                        values ('$kodeklausal','$kodekeamanan','$kodetujuan','$nama','$tgl')");

        if($ins){
            echo "<script>alert('Berhasil Menambah Tujuan'); window.location=('http://localhost/ratih/admin/all-tujuan');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-tujuan');</script>";
        }
    }
}