<?php
class daftar{
    private $conn;

    public function daftar(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "daftar";       
        $this->conn = mysqli_connect($servername, $username, 
                           $password, $db);                        
    }    

    public function login(){
        $username = $_POST['nama'];
        $password = $_POST['password'];
        $sql    = "INSERT INTO login(nama,password) 
                    VALUES ('$username','$password')";
        mysqli_query($this->conn, $sql);        
    } 

     public function tambah(){
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $hobi = $_POST['hobi'];
        $film = $_POST['film'];
        $tempat = $_POST['tempat'];
        $tgl=  $_POST['tgl_lahir'];
        $sql    = "INSERT INTO siswa(namadepan,namabelakang, nim,kelas,hobi,film,wisata,tgl_lahir) 
                    VALUES ('$namadepan','$namabelakang','$nim','$kelas','$hobi','$film','$tempat','$tgl')";
        mysqli_query($this->conn, $sql);        
    }    
    public function hapus(){        
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $hobi = $_POST['hobi'];
        $film = $_POST['film'];
        $tempat = $_POST['tempat'];
        $tgl=  $_POST['tgl_lahir'];
        $sql    = "DELETE FROM siswa WHERE nim=$nim";        
        mysqli_query($this->conn, $sql);
    }
    public function tampil(){
        $sql= "SELECT * FROM siswa";        
        return mysqli_query($this->conn, $sql);

    }

}
$pilih = $_POST["pilih"];
$daftar = new daftar();
if($pilih == "login")
    $daftar->login();
    header("location:index.php");
if($pilih == "tambah")
    $daftar->tambah();
if($pilih == "hapus")
    $daftar->hapus();
if($pilih == "tampil"){
    $result = $daftar->tampil();
    require_once("data.php");
}
    

?>