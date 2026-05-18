<?php
include '../config/session.php';
include '../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,

"SELECT users.*, pendaftaran.*, berkas.*
FROM users

LEFT JOIN pendaftaran
ON users.id = pendaftaran.user_id

LEFT JOIN berkas
ON users.id = berkas.user_id

WHERE users.id='$id'

");

$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Detail Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="card shadow border-0 rounded-4 p-5">

<h2 class="mb-4">
Detail Mahasiswa
</h2>

<div class="row">

<div class="col-lg-6">

<p>
<b>Nama :</b>
<?= $row['nama']; ?>
</p>

<p>
<b>Email :</b>
<?= $row['email']; ?>
</p>

<p>
<b>NIK :</b>
<?= $row['nik']; ?>
</p>

<p>
<b>Alamat :</b>
<?= $row['alamat']; ?>
</p>

<p>
<b>Sekolah :</b>
<?= $row['sekolah_asal']; ?>
</p>

<p>
<b>Jurusan :</b>
<?= $row['jurusan']; ?>
</p>

</div>

<div class="col-lg-6">

<p>
<b>Foto :</b>
</p>

<img src="../assets/uploads/foto/<?= $row['foto']; ?>"
width="150"
class="img-thumbnail mb-3">

<p>
<b>Ijazah :</b>
<a target="_blank"
href="../assets/uploads/ijazah/<?= $row['ijazah']; ?>">

Lihat File

</a>

</p>

<p>
<b>Rapor :</b>
<a target="_blank"
href="../assets/uploads/rapor/<?= $row['rapor']; ?>">

Lihat File

</a>

</p>

<p>
<b>KTP :</b>
<a target="_blank"
href="../assets/uploads/ktp/<?= $row['ktp']; ?>">

Lihat File

</a>

</p>

</div>

</div>

</div>

</div>

</body>
</html>