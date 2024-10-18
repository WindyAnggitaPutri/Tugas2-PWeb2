# Tugas2 - OOP Study Case
### Case Study NPM 1,2 : 230102072 = mahasiswa & nilai

Task:<br>
1. Create an OOP-based View, by retrieving data from the MySQL database <br>
2. Use the _construct as a link to the database <br>
3. Apply encapsulation according to the logic of the case study <br>
4. Create a derived class using the concept of inheritance <br>
5. Apply polymorphism for at least 2 roles according to the case study <br>

### OOP adalah 
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali. Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara. <br>
### Konsep Dasar OOP
#### 1. Class 
Class adalah sebuah blueprint untuk menciptakan objek atau instansiasi objek<br>
#### 2. Objek
Objek adalah merupakan bentuk dari instansiasi dari sebuah class<br>
#### 3. Method
Method adalah sebuah perilaku yang dapat dimiliki oleh class atau objek.<br>
#### 4. Encapsulation
Encapsulation adalah method untuk menyembunyikan detail implementasi dan hanya memberikan akses melalui method tertentu<br>
#### 5. Inheritance 
Inheritance adalah sebuah method dimana Kelas dapat mewarisi properti dan metode dari kelas lain.<br>
#### 6. Polymorphism 
Polymorphism adalah mengimplementasikan method yang sama kedalam semua class turunan dengan cara yang berbeda.<br>
#### 7. Abstraction
Abstraction adalah sebuah method yang dimana berfungsi menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.<br>


## Task :
### 1.  Create an OOP-based View, by retrieving data from the MySQL database
Hasl Pertama dilakukan karena disini kita mengambil data dari Database, maka tentu kita harus membuat database sesuai dengan ERD yang Telah disiapkan.
#### a. Menyiapkan Databse
 - Tabel Mahasiswa
![1](https://github.com/user-attachments/assets/898fe0c7-affe-4370-b514-c1e02e6aba82)

Pada di gambar ERD yang telah dibagikan bahwa disini terdapat beberapa kolom, yaitu dimana mahasiswa_id menjadi Primary Key di tabel mahasiswa dan menjadi Foreign Key di table Nilai<br>
 - Tabel Nilai
![2](https://github.com/user-attachments/assets/b98a81c5-0cb6-4a72-922e-72f8240f81bb)
Tertera di gambar atas ini, bahwa mahasiswa_id menjadi foreign key di table nilai, dan primary ke table nilai adalah nilai_id.

#### b. Setelah menyiapkan Database, maka selanjutnya adalah membuat koneksi 
###### codingan menghubungkan koneksi
```php
<?php
//perintah untuk membuka perintah php
//membuat class Database
class Database {
    //membuat atribut dengan hak akses private
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_kampus";
    private $connection;
    
    //perintah untuk membuat methhod construct untuk melakukan inisialisasi objek database
    public function __construct(){
        $this->getConnection();
    }

    //perintah membuat method untuk mendapatkan koneksi ke database 
    public function getConnection(){
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        
        //perintah untuk melakukan pengecekan koneksi berhasil atau tidak
        if(!$this->connection){
            die("Koneksi Gagal!! : ". mysqli_conncet_error());
        } 

        mysqli_set_charset($this->connection, 'utf8');
        return $this->connection; // perintah untuk mengembalikan nilai
    }

    //perintah untuk mengembalikan koneksi
    public function getConn() {
        return $this->conn; // T+ambahkan method untuk mengembalikan koneksi
    }

    //method untuk menampilkan data
    public function tampilData(){
        return "";
    }
}
?>
```
Codingan di atas adalah codingan untuk menghubungkan koneksi ke database.

#### c. selanjutanya dalah membuat tampilan web dengan menggunakan bootstrap
###### Codingan :
```php
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
```
###### Hasil Outputnya :
![3](https://github.com/user-attachments/assets/a13e46ba-9366-4eef-bb7a-69d91a302cc4)

Dalam tampilan di atas saya ingin membuat menjadi dua role, yaitu admin dan mahasiswa
![4](https://github.com/user-attachments/assets/e63b4ddd-1826-4f43-ae0e-7b824c38c144)

Berikut tampilannya jika ingin memilih harus memilih role admin atau mahasiswa, karena memilii 2 izin akses yang berbeda. 

#### d. Membuat Tampilan/ Index Untuk User Admin 
###### Codingan :
```php
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
```
###### Hasil Output :
![5](https://github.com/user-attachments/assets/bc55874a-c96e-4196-a077-d96971644324)
Di atas di berikan tampilan saat memilih mode role Admin, maka akan diberik akses untuk melihat Data Mahasiswa, Data Nilai Mahasiswa, Beasiswa, Magang, Wilayah Domisili dan Angkatan 2023.

#### e. Membuat Tampilan/ Index Untuk User Mahasiswa
###### Codingan :
```php
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

```

###### Hasil Output :
![6](https://github.com/user-attachments/assets/b0a2c6a8-bb5c-442e-9613-da8593ceab26)
Di atas di berikan tampilan saat memilih mode role Mahasiswaa, maka akan diberikan akses untuk melihat Beasiswa, Magang, Wilayah Domisili dan Angkatan 2023.

### 2. Use the _construct as a link to the database <br>
Melakukan __construct untuk menghubungkan sebuah link ke database 
berikut codingannya, dibawah ini akan ada codingan construct dari beberapa class
###### a. Codingan class database 
```php
<?php
 class Database {
    //membuat atribut dengan hak akses private
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_kampus";
    private $connection;
    
    //perintah untuk membuat methhod construct untuk melakukan inisialisasi objek database
    public function __construct(){
        $this->getConnection();
    }
?>
```
###### b. Codingan class Mahasiswa
```php
<?php
//Membuat class mahasiswa dari turunan database
class Mahasiswa extends Database{

    // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }
?>
```
###### c. Codingn Class Nilai
```php
<?php
//Perintah untuk membuat class nilai extends mahasiswa
class Nilai extends Mahasiswa{
     // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }
?>
```
###### d. Codingan Class Beasiswa
```php
<?php
//Perintah untuk membuat class Beasiswa extends Nilsi
class Beasiswa extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }
?>
```
###### e. Codingan Class Magang
```php
<?php
//perintah untuk membuat class magang extends nilai
class Magang extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

?>
```
###### d. Codingan Class Wilayah
```php
<?php
//perintah untuk membuat class wilayah extends mahasiswa
class Wilayah extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

?>
```
###### e. Codingan Class Angkatan 
```php
<?php
//perintah untuk membuat class angkatan23 extends mahasiswa
class angkatan23 extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }
?>
```

### 3. Apply encapsulation according to the logic of the case study <br>
Encapsulation adalah method untuk menyembunyikan detail implementasi
###### codingan encapsulation
```php
<?php
//membuat class Database
class Database {
    //membuat atribut dengan hak akses private
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_kampus";
    private $connection;
    
?>
```

### 4.  Create a derived class using the concept of inheritance <br>
Inheritance adalah method yang merupakan dimana sebuah class merupakan turunan dari class induk
###### a. Class Mahasiswa Extends Database
```php
<?php
//Membuat class mahasiswa dari turunan database
class Mahasiswa extends Database{

    // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData 
    public function tampilData(){
        return "Mahasiswa dapat mengakses Beasiswa, Magang, Wilayah dan Angkatan 2023 ";
    }
} 
?>
```
###### b. Class Nilai Extends Mahasiswa
```php
<?php
//Perintah untuk membuat class nilai extends mahasiswa
class Nilai extends Mahasiswa{
     // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData 
    public function tampilData(){
        return "";
    }
} 
?>
```
###### c. Class Beasiswa Extends Nilai
```php
<?php
//Perintah untuk membuat class Beasiswa extends Nilsi
class Beasiswa extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data 
    public function tampilData(){
        $query = "SELECT * FROM tbl_nilai WHERE nilai_akhir >= 75";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }

}
?>
```
###### d. Class Magang Extends Nilai
```php
<?php
//perintah untuk membuat class magang extends nilai
class Magang extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_nilai WHERE semester_id = 5";

        $result = mysqli_query($this->connection, $query);

         //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Error : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }
} 
?>
```
###### e. Class Wilayah Extends Mahasiswa
```php
<?php
//perintah untuk membuat class wilayah extends mahasiswa
class Wilayah extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_mahasiswa WHERE alamat LIKE '%Cilacap%'";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }

} 
?>
```
###### f. Class Angkatan23 Extends Mahasiswa
```php
<?php
//perintah untuk membuat class angkatan23 extends mahasiswa
class angkatan23 extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method untuk mendapatkan angkatan dari nim
    public function angkatan(){
        return substr($this->nim, 0, 2);
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_mahasiswa WHERE LEFT(nim, 2) = '23'";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }
} 
?>
```
### 5. Apply polymorphism for at least 2 roles according to the case study <br>
Polymorphism adalah method yang dimana mengimplementasikan method sama tetapi dengan cara yang berbeda. Dibawah ini saya cantumkan 2 Polymorhpism, Penerapan Polymorphism di setiap class turunan dengan method yang sama namun cara yang berbeda, dan saya akan menerapkan Polymorphism dengan 2 Role yang berbeda. 
##### a. Polymorphism dengan menerapkan method yang sama dengan cara yang berbeda
Disini saya akan menampilkan seluruh codingan class turunan, method yang di implemnetasikan dengan cara yang berbeda yaitu method **tampilData()** 
```php
<?php
<?php
//perintah untuk membuka perintah php
//membuat class Database
class Database {
    //membuat atribut dengan hak akses private
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_kampus";
    private $connection;
    
    //perintah untuk membuat methhod construct untuk melakukan inisialisasi objek database
    public function __construct(){
        $this->getConnection();
    }

    //perintah membuat method untuk mendapatkan koneksi ke database 
    public function getConnection(){
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        
        //perintah untuk melakukan pengecekan koneksi berhasil atau tidak
        if(!$this->connection){
            die("Koneksi Gagal!! : ". mysqli_conncet_error());
        } 

        mysqli_set_charset($this->connection, 'utf8');
        return $this->connection; // perintah untuk mengembalikan nilai
    }

    //perintah untuk mengembalikan koneksi
    public function getConn() {
        return $this->conn; // T+ambahkan method untuk mengembalikan koneksi
    }

    //method untuk menampilkan data
    public function tampilData(){
        return "";
    }

}

//Membuat class mahasiswa dari turunan database
class Mahasiswa extends Database{

    // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData 
    public function tampilData(){
        return "Mahasiswa dapat mengakses Beasiswa, Magang, Wilayah dan Angkatan 2023 ";
    }
} 

//Perintah untuk membuat class nilai extends mahasiswa
class Nilai extends Mahasiswa{
     // memanggil contructor class database 
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData 
    public function tampilData(){
        return "";
    }
} 

//Perintah untuk membuat class Beasiswa extends Nilsi
class Beasiswa extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data 
    public function tampilData(){
        $query = "SELECT * FROM tbl_nilai WHERE nilai_akhir >= 75";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }

} 

//perintah untuk membuat class magang extends nilai
class Magang extends Nilai{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_nilai WHERE semester_id = 5";

        $result = mysqli_query($this->connection, $query);

         //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Error : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }
} 

//perintah untuk membuat class wilayah extends mahasiswa
class Wilayah extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_mahasiswa WHERE alamat LIKE '%Cilacap%'";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }

} 

//perintah untuk membuat class angkatan23 extends mahasiswa
class angkatan23 extends Mahasiswa{
    // memanggil contructor class database
    public function __construct(){
        parent::__construct();
    }

    //perintah untuk membuat method untuk mendapatkan angkatan dari nim
    public function angkatan(){
        return substr($this->nim, 0, 2);
    }

    //perintah untuk membuat method tampilData untuk menampilkan data
    public function tampilData(){
        $query = "SELECT * FROM tbl_mahasiswa WHERE LEFT(nim, 2) = '23'";

        $result = mysqli_query($this->connection, $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }
} 
?>


?>
```

##### b. Polymorphism dengan menerapkan 2 Role. 
2 Role yang saya gunakan disini adalah Admin dan Mahasiswa
 - Admin
  Admin disini saya berikan izin akses yaitu akses ke data mahasiswa, data nilai mahasiswa, beasiswa, magang, wilayah dan angkatan23
- Mahasiswa
  Sedangkan Role Mahasiswa diberikan izin akses ke beasiswa, magang, wilayah dan angkatan23
  **Codingan Index**
```php
<?php
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



?>
```
**Hasil Output Index**
![3](https://github.com/user-attachments/assets/254b6d92-7a65-4266-8da5-2eb1f51cdafb)
Hasil Output dibawah ini menunjukan 2 role yaitu admin dan mahasiswa
![4](https://github.com/user-attachments/assets/49516f55-cf2b-475e-a1c2-e83e8ea3524b)

  **Codingan User Admin**
  ```php
<?php
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
?>
```
**Hasil Output User Admin**
![5](https://github.com/user-attachments/assets/40f5e3f1-9b97-4b94-aa97-6ce2e522f4fb)

**Codingan User Mahasiswa**
```php
<?php
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

?>
```

**Hasil Output User Mahasiswa**
![6](https://github.com/user-attachments/assets/dc6f49d3-229e-41a3-b31e-9a088a63e68c)

### Kode Sumber
1. **substr** adalah mengambil nilai tertentu dari string, seperti bagian dari kode atau nomor ID. Disini saya menggunakannya sebagai penentu 2 angka di depan dalam nim.
2. 





