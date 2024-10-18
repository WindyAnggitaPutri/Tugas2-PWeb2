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
            die("Koneksi Gagal!! : ". mysqli_connect_error());
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

        $result = mysqli_query($this->getConnection(), $query);

        //perintah untuk mengecek apakah query berhasil atau tidak
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

        $result = mysqli_query($this->getConnection(), $query);

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

        $result = mysqli_query($this->getConnection(), $query);

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

        $result = mysqli_query($this->getConnection(), $query);

        //perintah untuk mengecek apak query berhasil atau tidak
        if(!$result){
            die("Query Gagal : " . mysqli_error($this->connection));
        }

        //mengembalikan nilai
        return $result;
    }
} 
?>