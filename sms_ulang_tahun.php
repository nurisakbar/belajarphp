<?php
// konfigurasi database
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "tutorial";
$connect = mysqli_connect($host, $user, $password, $database);

// script untuk mendapatkan data tanggal hari ini
$dateNow = date("Y-m-d");

// mendapatkan data mahasiswa yang ulang tahun hari ini
$mahasiswa = mysqli_query($connect, "select * from mahasiswa where tanggal_lahir='$dateNow'");
while($row= mysqli_fetch_array($mahasiswa)){
    echo $row['nama_lengkap'];
    echo "<br>";
}
?>