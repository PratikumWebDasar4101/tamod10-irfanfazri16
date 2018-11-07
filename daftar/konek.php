<?php
$sname = "localhost";
$user = "root";
$pass = "";
$db = "daftar";

$connection = mysqli_connect($sname,$user,$pass,$db);

if (!$connection) {
	die("koneksi gagal: " . mysqli_connect_error());
}