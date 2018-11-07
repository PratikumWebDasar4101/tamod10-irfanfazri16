<?php
require_once("konek.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl = $_POST["tgl_lahir"];



$sql = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl' WHERE nim=$nim";
if (mysqli_query($connection, $sql)) {
    echo "data berhasil diupdate";
    echo "<a href='index.php?nim=$nim'>kembali</a>";
}else {
    echo "tidak dapat update record: " . $sql . "<br>" . mysqli_error($connection);
}