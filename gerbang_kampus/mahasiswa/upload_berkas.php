<?php
include '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Upload Berkas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="col-lg-7 mx-auto">

<div class="card shadow border-0 rounded-4 p-4">

<h2 class="mb-4">
Upload Berkas
</h2>

<form action="../proses/upload-proses.php"
method="POST"
enctype="multipart/form-data">

<input type="hidden"
name="user_id"
value="<?= $_SESSION['id']; ?>">

<div class="mb-3">

<label>Foto</label>

<input type="file"
name="foto"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Ijazah</label>

<input type="file"
name="ijazah"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Rapor</label>

<input type="file"
name="rapor"
class="form-control"
required>

</div>

<div class="mb-3">

<label>KTP</label>

<input type="file"
name="ktp"
class="form-control"
required>

</div>

<button type="submit"
class="btn btn-success">

Upload Berkas

</button>

</form>

</div>

</div>

</div>

</body>
</html>