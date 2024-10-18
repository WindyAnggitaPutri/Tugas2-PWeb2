-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 01:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `mahasiswa_id` int NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`mahasiswa_id`, `nim`, `nama_mhs`, `alamat`, `email`, `no_telp`) VALUES
(101, '230102072', 'Windy', 'Jalan Tidar, cilacap', 'windy@gmail.com', '0882005003947'),
(102, '240202087', 'Putri', 'Teluk Penyu, Cilacap', 'putri@gmail.com', '0812345678'),
(103, '230102050', 'Amanda', 'Purwokerto', 'amanda@gmail.com', '0812349876'),
(104, '240102052', 'andin', 'sokaeaja,purwokerto', 'Andin@gmail.com', '09123456'),
(105, '250102098', 'fijar', 'adipala, cilacap', 'fijar@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nilai_id` int NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_akhir` decimal(10,2) NOT NULL,
  `mahasiswa_id` int NOT NULL,
  `matkul_id` int NOT NULL,
  `semester_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nilai_id`, `nilai`, `nilai_akhir`, `mahasiswa_id`, `matkul_id`, `semester_id`) VALUES
(201, '90.00', '80.00', 101, 301, 3),
(202, '34.00', '56.00', 102, 302, 5),
(203, '78.00', '87.00', 103, 303, 1),
(204, '88.00', '56.00', 104, 304, 5),
(206, '88.00', '76.00', 105, 305, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`nilai_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `mahasiswa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `tbl_mahasiswa` (`mahasiswa_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
