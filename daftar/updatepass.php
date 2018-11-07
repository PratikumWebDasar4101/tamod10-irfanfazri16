<?php
require_once("konek.php");
$id = $_POST["id"];
$username = $_POST["nama"];
$password = $_POST["password"];



$sql = "UPDATE login SET nama='$nama', password='$password' WHERE id=$id";
if (mysqli_query($connection, $sql)) {
    echo "data berhasil diupdate";
    echo "<a href='login.php?id=$id'>kembali</a>";
}else {
    echo "tidak dapat update record: " . $sql . "<br>" . mysqli_error($connection);
}