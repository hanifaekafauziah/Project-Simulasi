<?php
include '../config/session.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$data = mysqli_query($conn,
"SELECT * FROM pendaftaran
WHERE user_id='$id'");

$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pendaftaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="container py-5">

<div class="col-lg-8 mx-auto">

<div class="card shadow border-0 rounded-4 p-4">

<h2 class="mb-4">
Form Pendaftaran Mahasiswa
</h2>

<form action="../proses/pendaftaran-proses.php"
method="POST">

<input type="hidden"
name="user_id"
value="<?= $_SESSION['id']; ?>">

<div class="mb-3">

<label>NIK</label>

<input type="text"
name="nik"
class="form-control"
required
value="<?= $row['nik'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Alamat</label>

<textarea name="alamat"
class="form-control"
required><?= $row['alamat'] ?? ''; ?></textarea>

</div>

<div class="mb-3">

<label>Sekolah Asal</label>

<input type="text"
name="sekolah_asal"
class="form-control"
required
value="<?= $row['sekolah_asal'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Jurusan</label>

<select name="jurusan"
class="form-select">

<option value="Informatika">Informatika</option>

<option value="Sistem Informasi">Sistem Informasi</option>

<option value="Teknik Komputer">Teknik Komputer</option>

<option value="Manajemen">Manajemen</option>

</select>

</div>

<button type="submit"
class="btn btn-primary">

Simpan Pendaftaran

</button>

</form>

</div>

</div>

</div>

</body>
</html>