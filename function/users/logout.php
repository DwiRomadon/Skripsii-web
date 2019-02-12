<?php
session_start();

unset($_SESSION['username']);
header("location:http://".$_SERVER['HTTP_HOST'].'/ratih');