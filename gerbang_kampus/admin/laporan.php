<?php
include '../config/session.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,

"SELECT users.nama,
users.email,
pendaftaran.jurusan,
hasil_seleksi.hasil

FROM users

LEFT JOIN pendaftaran
ON users.id = pendaftaran.user_id

LEFT JOIN hasil_seleksi
ON users.id = hasil_seleksi.user_id

WHERE users.role='mahasiswa'

");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Laporan PMB</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>
Laporan PMB
</h2>

<button onclick="window.print()"
class="btn btn-dark">

Print

</button>

</div>

<div class="card shadow border-0 rounded-4 p-4">

<table class="table table-bordered">

<thead class="table-dark">

<tr>

<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Jurusan</th>
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

<td><?= $row['email']; ?></td>

<td><?= $row['jurusan']; ?></td>

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