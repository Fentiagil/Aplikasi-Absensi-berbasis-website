-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 08.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `foto`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_matkul`
--

CREATE TABLE `daftar_matkul` (
  `id` int(10) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `matkul` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_matkul`
--

INSERT INTO `daftar_matkul` (`id`, `npm`, `kode_matkul`, `matkul`) VALUES
(1, '2008101000', 'FIK001', 'Pemrograman Web C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_absen`
--

CREATE TABLE `data_absen` (
  `npm` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(20) NOT NULL,
  `bukti` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_izin`
--

CREATE TABLE `data_izin` (
  `npm` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `komen` varchar(100) NOT NULL,
  `bukti` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `email` varchar(30) NOT NULL,
  `nidn` char(15) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL,
  `email_dosen` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`email`, `nidn`, `nama_dosen`, `email_dosen`, `password`, `foto`) VALUES
('2009017052@dosen.ac.id', '2009017052', 'Fawwaz Ali Akbar', 'dosen1@gmail.com', 'dosen123', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `email` varchar(25) NOT NULL,
  `npm` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`email`, `npm`, `nama`, `password`, `foto`) VALUES
('20081010@student.upnjatim', '20081010000', 'mahasiswa1\r\n', 'user123', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `nidn` char(25) NOT NULL,
  `jadwal` varchar(25) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `password_matkul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`, `nama_dosen`, `nidn`, `jadwal`, `jam_masuk`, `jam_selesai`, `password_matkul`) VALUES
('FIK001', 'Pemrograman Web C', 'Fawwaz Ali Akbar', '2009017052', 'rabu', '09:30:00', '12:00:00', 'pemweb123'),
('FIK002', 'PBO C', 'Fawwaz Ali Akbar', '2009017052', 'senin', '13:00:00', '15:30:00', 'PBO123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_matkul`
--
ALTER TABLE `daftar_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_matkul`
--
ALTER TABLE `daftar_matkul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
