<?php
$servername ="localhost";
$data ="readerkomik";
$username ="root";
$password ="";

$koneksi = mysqli_connect($servername, $username, $password, $data);

if(!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
        echo "";
}
?>
