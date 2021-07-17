-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 08:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngarot`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_berakhir` datetime NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tgl_mulai`, `tgl_berakhir`, `tgl_daftar`, `tgl_selesai`) VALUES
(1, '2021-07-12 21:39:00', '2021-07-12 21:40:00', '2021-07-15 22:20:00', '2021-07-17 22:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `lapak`
--

CREATE TABLE `lapak` (
  `id_lapak` bigint(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` bigint(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` int(255) NOT NULL,
  `pembuat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `pembuat`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'kaos', '<p>kaos putih</p>', 100000, 'roheti', 'atom.jpg', '2021-06-26 11:06:21', '2021-06-26 11:06:21'),
(3, 'baju', 'sas', 2000, 'sa', 'atom.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` bigint(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'sejarah ngarot', 'hjkjjk', NULL, NULL, '2021-06-19 22:07:36'),
(2, 'sejarah desa', 'lkguiopuythjk', NULL, NULL, '2021-06-19 22:09:58'),
(3, 'Persyaratan Ngarot', 'hjk;ld;asd;ska', NULL, NULL, '2021-06-19 22:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `peserta` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `level`, `email`, `ttl`, `jenis_kelamin`, `password`, `nohp`, `alamat`, `gambar`, `status`, `peserta`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '2021-06-02', 'laki-laki', '$2y$10$Munqo6WVRyHgsgXTcsIQ1.Rx6qoq/h/dOwE6gZ6NpcdfN0wAVCxbC', '0897775555', 'lelea', NULL, NULL, NULL, NULL, '2021-06-19 21:16:56'),
(3, 'roheti', 'peserta', 'roheti@gmail.com', '2021-06-09', 'Perempuan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '08798279', 'lelea', NULL, 1, 0, NULL, '2021-06-26 02:21:36'),
(4, 'Faiz titid', 'peserta', 'faiz1@gmail.com', 'indramayu, 12 januari 1997', 'Perempuan', '$2y$10$L/pnp3gqF6kdtcLn37mN6ur.9YcMF876BIKu.Uu7pTgZN4phjDHNa', '08976876889', 'leleaa', NULL, 1, 0, '2021-06-26 12:07:07', '2021-06-26 13:00:59'),
(6, 'Kris', 'peserta', 'kris@gmail.com', 'indramayu, 12 januari 1996', 'Laki - Laki', '$2y$10$kxfaZhqxlXRl1eRagSDLBu.2DLAT.iRTkoDTDc9gNLVizFQ/in.bK', '089123485358', 'Lohbener', 'atom.jpg', 0, 0, '2021-06-26 12:11:18', '2021-06-26 12:11:18'),
(7, 'wahyu', 'user', 'wahyu@gmail.com', '2021-07-02', 'Laki-Laki', '$2y$10$Munqo6WVRyHgsgXTcsIQ1.Rx6qoq/h/dOwE6gZ6NpcdfN0wAVCxbC', '089123485358', 'blok desa', NULL, 1, 0, '2021-07-09 19:57:28', '2021-07-09 20:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `lapak`
--
ALTER TABLE `lapak`
  ADD PRIMARY KEY (`id_lapak`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lapak`
--
ALTER TABLE `lapak`
  MODIFY `id_lapak` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
