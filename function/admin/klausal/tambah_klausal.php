<?php

require_once("../../koneksi.php");

// Deklarasi variable
$kode       = $_POST['kode'];
$nama       = $_POST['nama'];
$tgl        = date("Y-m-d H:i:s");
$submit     = $_POST['submit'];

if(isset($submit)){

    if(empty($kode) or empty($nama)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/all-klausal') </script>";
    }else{
        $ins = mysqli_query($con,"insert into t_klausal(kode_klausal,klausal,created_at) 
                                                        values ('$kode','$nama', '$tgl')");

        if($ins){
            echo "<script>alert('Berhasil Menambah Klausal'); window.location=('http://localhost/ratih/admin/all-klausal');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-klausal');</script>";
        }
    }
}