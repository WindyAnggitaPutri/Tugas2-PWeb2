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
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <?php if ($_GET['role'] == "mahasiswa") { ?> <!--Perintah untuk masuk ke dalam mode mahasiswa-->
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Beasiswa-->
          <a class="nav-link" href="beasiswa.php?role=mahasiswa">Beasiswa</a>
        </li>
        <li class="nav-item">
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Magang-->
            <a class="nav-link" href="magang.php?role=mahasiswa">Magang</a>
        </li>
        <li class="nav-item">
            <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Domisili-->
            <a class="nav-link" href="domisili.php?role=mahasiswa">Domisili</a>
        </li>
        <li class="nav-item">
            <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Angkatan-->
            <a class="nav-link" href="angkatan.php?role=mahasiswa">Angkatan</a>
        </li>
      <?php } elseif ($_GET['role'] == "admin") { ?> <!--Perintah untuk masuk ke dalam mode admin-->
        <li class="nav-item">
            <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Data Mahasiwa-->
            <a class="nav-link" href="mahasiswa.php?role=admin">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
            <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Data Nilai Mahasiswa-->
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
          <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Angkatan-->
            <a class="nav-link" href="domisili.php?role=admin">Domisili</a>
        </li>
        <li class="nav-item">
            <!--Memberikan perintah agar saat di klik akan mengarah ke halaman Angkatan 2023-->
            <a class="nav-link" href="angkatan.php?role=admin">Angkatan 2023</a>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
<h2>Daftar Mahasiswa Magang</h2> <!--Perintah untuk membuat judul di halaman-->
<p>Daftar Mahasiswa D3 Teknik Informatika Yang Bisa Magang</p><!--Perintah untuk memberikan penjelasan berupa teks-->              
  <div class="card-body">
    <!--Perintah- perinath untuk membuat tabel yang menampilkan data mahasiswa-->
    <table class="table table-bordered" id="Magang" name="Magang">
      <thead>
        <tr>
          <!--perintah untuk membuat kolom pada table-->
          <th scope="col">NO</th><!--Perintah untuk membuat kolom nomer-->
          <th scope="col">ID NILAI</th><!--Perintah untuk membuat kolom nilai_id-->
          <th scope="col">NILAI</th><!--Perintah untuk membuat kolom nilai-->
          <th scope="col">NILAI AKHIR</th><!--Perintah untuk membuat kolom nilai_akhir-->
          <th scope="col">ID MAHASISWA</th><!--Perintah untuk membuat kolom mahasiswa_id-->
          <th scope="col">ID MATKUL</th><!--Perintah untuk membuat kolom matkul_id-->
          <th scope="col">ID SEMESTER</th><!--Perintah untuk membuat kolom semester_id-->
        </tr>
        </thead>
        <tbody>
          <?php
            include('koneksi.php');//perintah untuk menghubungkannya ke file koneksi
            $magang = new Magang();//membuat objek baru dari class magang
            $query = $magang->tampilData(); //mengambil data dari database 

            $no = 1;//perintah untuk melakuka  inisialisasi nomor urut mulai dari 1
            while ($row = mysqli_fetch_assoc($query)){ //perintah untuk mengambil setiap baris data
          ?>
          <tr>
            
            <td><?php echo $no++ ?></td><!--perintah untuk menampilkan nomer urut-->
            <td><?php echo $row['nilai_id'] ?></td><!--perintah untuk menampilkan nilai_id-->
            <td><?php echo $row['nilai'] ?></td><!--perintah untuk menampilkan nilai-->
            <td><?php echo $row['nilai_akhir'] ?></td><!--perintah untuk menampilkan nilai_akhir-->
            <td><?php echo $row['mahasiswa_id'] ?></td><!--perintah untuk menampilkan mahasiswa_id-->
            <td><?php echo $row['matkul_id'] ?></td><!--perintah untuk menampilkan matkul_id-->
            <td><?php echo $row['semester_id'] ?></td><!--perintah untuk menampilkan semester_i-->
          </tr>

          <?php
               }?>
        </tbody>
    </table>
    <h4>Daftar Data Mahasiswa Yang Magang</h4> <!--Perintah untuk membuat judul di halaman-->
    <!--Perintah- perinath untuk membuat tabel yang menampilkan data mahasiswa-->
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <!--perintah untuk membuat kolom pada table-->
          <th scope="col">NO</th><!--Perintah untuk membuat kolom nomer ururt-->
          <th scope="col">ID MAHASISWA</th><!--Perintah untuk membuat kolom maasiswa_id-->
          <th scope="col">NAMA MAHASISWA</th><!--Perintah untuk membuat kolom nama_mhs-->
        </tr>
      </thead> 
      <tbody>
        <?php
          $database = new Database();//membuat objek baru dari class database
          $connection = $database->getConnection(); //mengambil data dari database 

          $no = 1;//perintah untuk melakuka  inisialisasi nomor urut mulai dari 1
          //
          $query = $connection->query("SELECT * FROM tbl_mahasiswa 
          WHERE mahasiswa_id IN (
          SELECT mahasiswa_id FROM tbl_nilai WHERE semester_id = '5')");
          while ($row = mysqli_fetch_assoc($query)){ //perintah untuk mengambil setiap baris data
        ?>
        <tr>
          <td><?php echo $no++ ?></td><!--perintah untuk menampilkan nomor urut-->
          <td><?php echo $row['mahasiswa_id'] ?></td><!--perintah untuk menampilkan mahasiswa_id-->
          <td><?php echo $row['nama_mhs'] ?></td><!--perintah untuk menampilkan nama_mhs-->
        </tr>
        <?php
            }?>
       </tbody>
    </table>
  </div>
</div>
</body>
</html>