<?php

include '../config/koneksi.php';

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn,

"UPDATE berkas SET
status='$status'
WHERE id='$id'

");

header("Location: ../admin/verifikasi-berkas.php");

?>