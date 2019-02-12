<?php

require_once("../../koneksi.php");

// Deklarasi variable
$kodeklausal       = $_POST['kodeklausal'];
$kodekeamanan      = $_POST['kodekeamanan'];
$nama              = $_POST['nama'];
$tgl               = date("Y-m-d H:i:s");
$submit            = $_POST['submit'];

if(isset($submit)){

    if(empty($kodeklausal) or empty($kodekeamanan) or empty($nama)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/add-keamanan') </script>";
    }else{
        $ins = mysqli_query($con,"insert into t_keamanan(kode_klausal,kode_keamanan,keamanan,created_at) 
                                                        values ('$kodeklausal','$kodekeamanan', '$nama','$tgl')");

        if($ins){
            echo "<script>alert('Berhasil Menambah Keamanan'); window.location=('http://localhost/ratih/admin/all-keamanan');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-keamanan');</script>";
        }
    }
}