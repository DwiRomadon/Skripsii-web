<?php
require_once("../../koneksi.php");

// Deklarasi variable
$kodetujuan        = $_POST['kodetujuan'];
$kodeklausal       = $_POST['kodeklausal'];
$kodekeamanan      = $_POST['kodekeamanan'];
$kuisioner         = $_POST['kuisioner'];
$tgl               = date("Y-m-d H:i:s");
$submit            = $_POST['submit'];

if(isset($submit)){

    if(empty($kodeklausal) or empty($kodekeamanan) or empty($kodetujuan) or empty($kuisioner)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('http://localhost/ratih/admin/add-kuisioner') </script>";
    }else{
        $ins = mysqli_query($con,"insert into t_kuisioner(kode_klausal,kode_keamanan,kode_tujuan,kuisioner,created_at) 
                                                        values ('$kodeklausal','$kodekeamanan','$kodetujuan','$kuisioner','$tgl')");

        if($ins){
            echo "<script>alert('Berhasil Menambah Kuisioner'); window.location=('http://localhost/ratih/admin/all-kuisioner');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-kuisioner');</script>";
        }
    }
}