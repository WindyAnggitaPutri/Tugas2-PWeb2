<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" data-toggle="pill"href="user_admin.php">Admin</a></li>
            <li><a class="dropdown-item" href="user_mahasiswa.php">Mahasiswa</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>DATA MAHASISWA TEKNIK INFORMATIKA</h3>
  <p>D3 Teknik Informatika adalah salah satu prodi yang terdapat di jurusan Komputer dan Bisnis. Salah satu prodi D3 yang terdapat di pnc.</p>
  <p>Website ini berisi tentang Informasi Yaitu Tentang Informasi Beasiswa, Magang, Wilayah Domisili, dan Informasi Teantang Mahasiswa Yang Berada Diangkatan 2023 </p>
</div>

</body>
</html>


