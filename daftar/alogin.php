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
        $sql    = "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";
        mysqli_query($this->conn, $sql);        
    } 
    }
$pilih = $_POST["pilih"];
$daftar = new daftar();
if($pilih == "login")
    $daftar->login();
   

    

?>