<?php
require_once("../../koneksi.php");

// Deklarasi variable
$id                = $_POST['id'];
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
        $ins = mysqli_query($con,"update t_kuisioner set kode_klausal='$kodeklausal', kode_keamanan='$kodekeamanan', kode_tujuan='$kodetujuan',
                                          kuisioner='$kuisioner', created_at='$tgl' where id_kuisioner='$id'");

        if($ins){
            echo "<script>alert('Berhasil Mengubah Kuisioner'); window.location=('http://localhost/ratih/admin/all-kuisioner');</script>";
        }else {
            echo "<script>alert('Gagal'); window.location=('http://localhost/ratih/admin/add-kuisioner');</script>";
        }
    }
}