<?php

include '../config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);

mysqli_query($conn,

"INSERT INTO users(
nama,
email,
password,
role
)

VALUES(
'$nama',
'$email',
'$password',
'mahasiswa'
)

");

header("Location: ../login.php");

?>