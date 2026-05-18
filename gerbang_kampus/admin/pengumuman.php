<?php
include '../config/session.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,

"SELECT users.nama,
hasil_seleksi.*
FROM hasil_seleksi

LEFT JOIN users
ON hasil_seleksi.user_id = users.id

");

$mahasiswa = mysqli_query($conn,
"SELECT * FROM users
WHERE role='mahasiswa'");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Pengumuman Seleksi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<h2 class="mb-4">
Pengumuman Seleksi
</h2>

<div class="card shadow border-0 rounded-4 p-4 mb-4">

<form action="../proses/hasil-proses.php"
method="POST">

<div class="row">

<div class="col-lg-5">

<select name="user_id"
class="form-select"
required>

<option value="">
Pilih Mahasiswa
</option>

<?php while($mhs=mysqli_fetch_assoc($mahasiswa)) : ?>

<option value="<?= $mhs['id']; ?>">

<?= $mhs['nama']; ?>

</option>

<?php endwhile; ?>

</select>

</div>

<div class="col-lg-5">

<select name="hasil"
class="form-select">

<option value="lulus">
Lulus
</option>

<option value="cadangan">
Cadangan
</option>

<option value="tidak_lulus">
Tidak Lulus
</option>

</select>

</div>

<div class="col-lg-2">

<button type="submit"
class="btn btn-primary w-100">

Simpan

</button>

</div>

</div>

</form>

</div>

<div class="card shadow border-0 rounded-4 p-4">

<table class="table table-bordered">

<thead class="table-dark">

<tr>

<th>No</th>
<th>Nama</th>
<th>Hasil</th>

</tr>

</thead>

<tbody>

<?php
$no=1;
while($row=mysqli_fetch_assoc($data)):
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $row['nama']; ?></td>

<td>

<?php if($row['hasil']=='lulus') : ?>

<span class="badge bg-success">
Lulus
</span>

<?php elseif($row['hasil']=='cadangan') : ?>

<span class="badge bg-warning">
Cadangan
</span>

<?php else : ?>

<span class="badge bg-danger">
Tidak Lulus
</span>

<?php endif; ?>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</body>
</html>