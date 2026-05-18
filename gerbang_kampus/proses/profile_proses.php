<?php

include '../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

if($password != ''){

$password = md5($password);

mysqli_query($conn,

"UPDATE users SET
nama='$nama',
email='$email',
password='$password'
WHERE id='$id'

");

}else{

mysqli_query($conn,

"UPDATE users SET
nama='$nama',
email='$email'
WHERE id='$id'

");

}

header("Location: ../mahasiswa/profile.php");

?>