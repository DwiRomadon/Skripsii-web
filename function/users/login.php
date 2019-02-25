<?php
require_once("../koneksi.php");
session_start();
$password   = md5($_POST['password']);
$email      = $_POST['email'];

$login =$_POST['login'];

if(isset($login)){

    if(empty($password) or empty($email)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); </script>";
        header("location:http://".$_SERVER['HTTP_HOST'].'/ratih');
    }else{

        $query = mysqli_query($con,"select * from user_access where email = '$email' and password = '$password'");
        if(mysqli_num_rows($query) > 0){
            echo "Selamat datang admin";
            $r = mysqli_fetch_array($query);
            if($r['level'] == '1'){
                $_SESSION['username'] = $r['username'];
                $_SESSION['name']     = $r['name'];
                $_SESSION['email']    = $r['email'];
                $_SESSION['level']    = $r['level'];
                $_SESSION['create']   = $r['created_at'];
                header("location:http://".$_SERVER['HTTP_HOST'].'/ratih/admin/');
            }else{
                $_SESSION['name']     = $r['name'];
                $_SESSION['username'] = $r['username'];
                $_SESSION['email']    = $r['email'];
                $_SESSION['level']    = $r['level'];
                $_SESSION['create']   = $r['created_at'];
                $_SESSION['id']       = $r['id_user'];
                header("location:http://".$_SERVER['HTTP_HOST'].'/ratih/user');
            }
        }else{

            header("location:http://".$_SERVER['HTTP_HOST'].'/ratih');
        }
    }
}