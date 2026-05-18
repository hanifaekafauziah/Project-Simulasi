<?php

include '../config/koneksi.php';

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn,

"UPDATE daftar_ulang SET
status='$status'
WHERE id='$id'

");

header("Location: ../admin/verifikasi-daftar-ulang.php");

?>