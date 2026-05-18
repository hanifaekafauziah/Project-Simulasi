<?php
include '../config/session.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,

"SELECT users.*, pendaftaran.*
FROM users
LEFT JOIN pendaftaran
ON users.id = pendaftaran.user_id
WHERE users.role='mahasiswa'

");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Data Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>Data Mahasiswa</h2>

<a href="dashboard.php"
class="btn btn-dark">

Kembali

</a>

</div>

<div class="card shadow border-0 rounded-4 p-4">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-dark">

<tr>

<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>NIK</th>
<th>Sekolah</th>
<th>Jurusan</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no = 1;
while($row = mysqli_fetch_assoc($data)) :
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $row['nama']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['nik']; ?></td>

<td><?= $row['sekolah_asal']; ?></td>

<td><?= $row['jurusan']; ?></td>

<td>

<?php if($row['status'] == 'diterima') : ?>

<span class="badge bg-success">
Diterima
</span>

<?php elseif($row['status'] == 'ditolak') : ?>

<span class="badge bg-danger">
Ditolak
</span>

<?php else : ?>

<span class="badge bg-warning">
Pending
</span>

<?php endif; ?>

</td>

<td>

<a href="detail-mahasiswa.php?id=<?= $row['user_id']; ?>"
class="btn btn-primary btn-sm">

Detail

</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>