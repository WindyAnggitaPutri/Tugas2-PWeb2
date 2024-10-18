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

<!--Navbar yang menggunakan Bootstrap-->
<nav class="navbar navbar-expand-sm bg-danger  navbar-dark">
  <div class="container-fluid">
    <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Beranda-->
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Data Mahasiswa-->
          <a class="nav-link"  href="mahasiswa.php?role=admin">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Daftar Nilai Mahasiswa-->
          <a class="nav-link" href="nilai.php?role=admin">Data Nilai Mahasiswa</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Beasiswa-->
          <a class="nav-link" href="beasiswa.php?role=admin">Beasiswa</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Magang-->
          <a class="nav-link" href="magang.php?role=admin">Magang</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Wilayah-->
          <a class="nav-link" href="wilayah.php?role=admin">Wilayah</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Angkatan 2023-->
          <a class="nav-link" href="angkatan.php?role=admin">Angkatan 2023</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1><center>Selamat Datang</center></h1> <!--Perintah untuk Membuat Judul utama Pada Halaman-->
<h3>Anda User Sebagai Admin</h3> <!--Perintah untuk membuat judul setelah judul utama do halaman-->
<p>Selamat Datang, Di Website Ini Anda Dapat Mengakses Data Mahasiswa, Data Nilai Mahasiswa, Beasiswa dan Magang</p> <!--Perintah untuk memberikan penjelasan berupa teks-->

</body>
</html>