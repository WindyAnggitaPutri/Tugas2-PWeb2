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
    <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Home Angkatan 2023-->
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Beasiswa-->
          <a class="nav-link" href="beasiswa.php?role=mahasiswa">Beasiswa</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Magang-->
          <a class="nav-link" href="magang.php?role=mahasiswa">Magang</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Wilayah-->
          <a class="nav-link" href="wilayah.php?role=mahasiswa">Wilayah</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Angkatan 2023-->
          <a class="nav-link" href="angkatan.php?role=mahasiswa">Angkatan 2023</a>
        </li>     
      </ul>
    </div>
  </div>
</nav>

<h1><center>Selamat Datang</center></h1> <!--Perintah untuk Membuat Judul utama Pada Halaman-->
<h3>Anda User Sebagai Mahasiswa</h3> <!--Perintah untuk membuat judul setelah judul utama do halaman-->
<p>Selamat Datang, Di Website Ini Anda Dapat Mengakses Beasiswa dan Magang. Dimana Anda Dapat Melihat Mahasiswa Mana Saja Yang Mendapat Beasiswa, Yang Sudah Magang dan Mahasiswa Yang Memiliki Domisili Cilacap</p> <!--Perintah untuk memberikan penjelasan berupa teks-->
