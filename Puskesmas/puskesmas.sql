-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2025 pada 14.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `usia` int(11) DEFAULT NULL,
  `poli` varchar(50) NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `status` enum('menunggu','dipanggil','selesai') DEFAULT 'menunggu',
  `histori` datetime DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `nama_lengkap`, `usia`, `poli`, `nomor_antrian`, `status`, `histori`, `created_at`) VALUES
(4, 'Alvin Andhika', 19, 'poliklinik umum', 1, 'menunggu', '2025-11-26 19:19:05', '2025-11-26 12:19:05'),
(5, 'Kafka Akmal Dani', 19, 'poliklinik umum', 2, 'menunggu', '2025-11-26 19:19:29', '2025-11-26 12:19:29'),
(6, 'Partawijaya Rihal Dariretci', 19, 'poliklinik umum', 3, 'menunggu', '2025-11-26 19:19:52', '2025-11-26 12:19:52'),
(7, 'Rafael', 5, 'poliklinik ibu dan anak', 1, 'menunggu', '2025-11-26 19:20:12', '2025-11-26 12:20:12'),
(8, 'Margareta', 34, 'poliklinik ibu dan anak', 2, 'menunggu', '2025-11-26 19:20:41', '2025-11-26 12:20:41'),
(9, 'Udin', 10, 'poliklinik ibu dan anak', 3, 'menunggu', '2025-11-26 19:21:04', '2025-11-26 12:21:04');

--
-- Trigger `antrian`
--
DELIMITER $$
CREATE TRIGGER `before_insert_antrian` BEFORE INSERT ON `antrian` FOR EACH ROW BEGIN
    DECLARE next_no INT;

    -- Cari nomor antrian terbesar untuk poli tersebut
    SELECT IFNULL(MAX(nomor_antrian), 0) + 1
    INTO next_no
    FROM antrian
    WHERE poli = NEW.poli;

SET NEW.nomor_antrian = next_no;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `medical_checkup`
--

CREATE TABLE `medical_checkup` (
  `id_checkup` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `usia` int(11) DEFAULT NULL,
  `berat_badan` float DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `gaya_hidup` text DEFAULT NULL,
  `riwayat_penyakit` text DEFAULT NULL,
  `riwayat_alergi` text DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `medical_checkup`
--

INSERT INTO `medical_checkup` (`id_checkup`, `nama_lengkap`, `usia`, `berat_badan`, `nik`, `pekerjaan`, `gaya_hidup`, `riwayat_penyakit`, `riwayat_alergi`, `foto_kk`, `foto_ktp`, `created_at`) VALUES
(5, 'Joko Tingkir', 28, 60, '12345678', 'Tokoh', 'Tidak Merokok', 'Tidak Ada', 'Tidak Ada', 'Data Medical CheckUp Joko_Tingkir/kk.jpg', 'Data Medical CheckUp Joko_Tingkir/ktp.jpg', '2025-11-26 12:46:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_baru`
--

CREATE TABLE `pasien_baru` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien_baru`
--

INSERT INTO `pasien_baru` (`id_pasien`, `nama_pasien`, `foto_kk`, `foto_ktp`, `nik`, `tanggal_lahir`, `usia`, `created_at`) VALUES
(18, 'Joko Tingkir', 'Data Pasien Joko_Tingkir/kk.jpg', 'Data Pasien Joko_Tingkir/ktp.jpg', '12345678', '1554-07-26', 28, '2025-11-26 12:14:37'),
(19, 'Alvino', 'Data Pasien Alvino/kk.jpg', 'Data Pasien Alvino/ktp.jpg', '90876323', '2006-06-08', 19, '2025-11-26 12:17:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'SuperAdmin', 'admin', 'admin', 'admin', '2025-11-18 07:10:41'),
(2, 'test', 'test', 'test', 'user', '2025-11-19 14:54:04'),
(8, 'Alvin Andhika', 'Alvino', 'Alvino', 'user', '2025-11-26 12:05:20'),
(9, 'Joko', 'Joko', 'Joko123', 'user', '2025-11-26 12:08:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `medical_checkup`
--
ALTER TABLE `medical_checkup`
  ADD PRIMARY KEY (`id_checkup`);

--
-- Indeks untuk tabel `pasien_baru`
--
ALTER TABLE `pasien_baru`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `medical_checkup`
--
ALTER TABLE `medical_checkup`
  MODIFY `id_checkup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien_baru`
--
ALTER TABLE `pasien_baru`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
