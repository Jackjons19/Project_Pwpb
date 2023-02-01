<?php
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$md5 = md5($password);
$query_sql = "INSERT INTO tb_user (username, email, password)
            VALUES ('$username', '$email', '$md5')";
            
if (mysqli_query($koneksi, $query_sql)) {
    header("Location: index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>
