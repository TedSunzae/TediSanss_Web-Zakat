-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2023 pada 21.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fakultas`, `alamat`) VALUES
('10000001', 'Hafidz Nurul Iman', 'Teknik Informatika', '            Curug, Kab.Tangerang - Banten            '),
('12001007', 'Harsya Febridiyas', 'Teknik Informatika', 'Depok'),
('12001010', 'Mardana', 'Teknik Informatika', 'Jl. Raya Kelapa Dua Tangerang Banten       '),
('12001011', 'Muhammad Nufal', 'Teknik Informatika', 'Dasana Indah, Tangerang - Banten'),
('12001015', 'Rangga Dwi Tanara', 'Teknik Informatika', 'Mawaddah, Kelapa Dua, Tangerang - Banten'),
('12001017', 'Shona Setiadi', 'Teknik Informatika', '            Gang.Kemekan, Perum Tangerang - Banten        '),
('12001019', 'Syabina Nur Pajriyanti', 'Teknik Informatika', 'Balaraja - Banten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'Harsya Febrydias', 'harsya142@gmail.com', '$2y$10$FUnzmAkJ87bogDzJbcDJTe0cuErHJ67sK0OYDnfsciUURLer53BFe', '2023-03-14 14:23:53'),
(2, 'MichaelDeSanta', 'test@gmail.com', '$2y$10$DkVVBAGd73nUc7ixgA4SVOGnK0Dg9c3wT6dftIfSIBEMyT2iOOgnS', '2023-03-14 15:00:51'),
(3, 'ina', 'ina@gmail.com', '$2y$10$44iaw3npGuNowh0Xb3nbJ.F5Fmn7gnl2jY0bbpumgzob/3KKPk15O', '2023-04-04 14:47:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `tbl_fitrah` (
  `nik` int(20) NOT NULL,
  `keluarga` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_zakat` varchar(100) NOT NULL,
  `jumlah_jiwa` varchar(100) NOT NULL,
  `nominal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

ALTER TABLE `tbl_fitrah`
  ADD PRIMARY KEY (`nik`);


  INSERT INTO `tbl_fitrah`(`nik`, `keluarga`, `no_hp`, `jenis_zakat`, `jumlah_jiwa`, `nominal`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

  CREATE TABLE `tbl_mal` (
  `nik` int(20) NOT NULL,
  `keluarga` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_zakat` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nominal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

ALTER TABLE `tbl_mal`
  ADD PRIMARY KEY (`nik`);
