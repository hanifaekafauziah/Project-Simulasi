<?php
include '../config/session.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,

"SELECT users.nama,
berkas.*
FROM berkas

LEFT JOIN users
ON berkas.user_id = users.id

");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Verifikasi Berkas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<h2 class="mb-4">
Verifikasi Berkas
</h2>

<div class="card shadow border-0 rounded-4 p-4">

<table class="table table-bordered">

<thead class="table-dark">

<tr>

<th>No</th>
<th>Nama</th>
<th>Status</th>
<th>Aksi</th>

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

<?php if($row['status']=='valid') : ?>

<span class="badge bg-success">
Valid
</span>

<?php elseif($row['status']=='revisi') : ?>

<span class="badge bg-danger">
Revisi
</span>

<?php else : ?>

<span class="badge bg-warning">
Pending
</span>

<?php endif; ?>

</td>

<td>

<a href="../proses/verifikasi-proses.php?id=<?= $row['id']; ?>&status=valid"
class="btn btn-success btn-sm">

Valid

</a>

<a href="../proses/verifikasi-proses.php?id=<?= $row['id']; ?>&status=revisi"
class="btn btn-danger btn-sm">

Revisi

</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</body>
</html>