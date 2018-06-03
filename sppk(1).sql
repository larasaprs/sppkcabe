-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2018 pada 17.30
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktor`
--

CREATE TABLE `faktor` (
  `id_faktor` int(2) NOT NULL,
  `faktor` varchar(20) NOT NULL,
  `level_1` double NOT NULL,
  `level_2` double NOT NULL,
  `level_3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faktor`
--

INSERT INTO `faktor` (`id_faktor`, `faktor`, `level_1`, `level_2`, `level_3`) VALUES
(7, 'Kotoran Kelinci', 3000, 4000, 5000),
(8, 'Bekatul', 150, 200, 250),
(9, 'Sekam', 300, 400, 500),
(11, 'Probiotik EM4', 10, 20, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilpercobaan`
--

CREATE TABLE `hasilpercobaan` (
  `id_percobaan` int(2) NOT NULL,
  `kotoran` double NOT NULL,
  `bekatul` double NOT NULL,
  `sekam` double NOT NULL,
  `probiotik` double NOT NULL,
  `hasil_1` double NOT NULL,
  `hasil_2` double NOT NULL,
  `hasil_3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilpercobaan`
--

INSERT INTO `hasilpercobaan` (`id_percobaan`, `kotoran`, `bekatul`, `sekam`, `probiotik`, `hasil_1`, `hasil_2`, `hasil_3`) VALUES
(1, 3000, 150, 300, 10, 650, 700, 750),
(2, 3000, 200, 400, 20, 850, 850, 900),
(3, 3000, 250, 500, 30, 600, 650, 650),
(4, 4000, 150, 400, 30, 600, 650, 550),
(5, 4000, 200, 500, 10, 550, 500, 600),
(6, 4000, 250, 300, 20, 500, 550, 600),
(7, 5000, 150, 500, 20, 500, 600, 550),
(8, 5000, 200, 300, 30, 250, 350, 300),
(9, 5000, 250, 400, 10, 400, 450, 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilprediksi`
--

CREATE TABLE `hasilprediksi` (
  `id_hasilPrediksi` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kotoran` varchar(15) NOT NULL,
  `bekatul` varchar(15) NOT NULL,
  `sekam` varchar(15) NOT NULL,
  `probiotik` varchar(15) NOT NULL,
  `hasil_kotoran` enum('KURANG OPTIMAL','OPTIMAL') NOT NULL,
  `hasil_bekatul` enum('OPTIMAL','KURANG OPTIMAL') NOT NULL,
  `hasil_sekam` enum('OPTIMAL','KURANG OPTIMAL') NOT NULL,
  `hasil_probiotik` enum('OPTIMAL','KURANG OPTIMAL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilprediksi`
--

INSERT INTO `hasilprediksi` (`id_hasilPrediksi`, `id_user`, `kotoran`, `bekatul`, `sekam`, `probiotik`, `hasil_kotoran`, `hasil_bekatul`, `hasil_sekam`, `hasil_probiotik`) VALUES
(1, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(16, 3, '3000-3999', '250-299', '300-399', '10-19', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(17, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(18, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(19, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(20, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL'),
(21, 3, '3000-3999', '150-199', '300-399', '10-19', 'OPTIMAL', 'OPTIMAL', 'KURANG OPTIMAL', 'KURANG OPTIMAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilpupuk`
--

CREATE TABLE `hasilpupuk` (
  `id_pupuk` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kotoran` double NOT NULL,
  `bekatul` double NOT NULL,
  `sekam` double NOT NULL,
  `probiotik` double NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilpupuk`
--

INSERT INTO `hasilpupuk` (`id_pupuk`, `id_user`, `kotoran`, `bekatul`, `sekam`, `probiotik`, `hasil`) VALUES
(1, 3, 1, 2, 3, 4, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('Admin','Petani') NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `nohp`) VALUES
(2, 'admin', 'admin', 'admin', 'Admin', '082234256789'),
(3, 'petaniku', 'petani', 'petani', 'Petani', '02342'),
(4, 'petani 2', 'petani2', 'petani2', 'Petani', '325'),
(5, 'afasf', '333', '3323', 'Petani', '231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faktor`
--
ALTER TABLE `faktor`
  ADD PRIMARY KEY (`id_faktor`);

--
-- Indexes for table `hasilpercobaan`
--
ALTER TABLE `hasilpercobaan`
  ADD PRIMARY KEY (`id_percobaan`);

--
-- Indexes for table `hasilprediksi`
--
ALTER TABLE `hasilprediksi`
  ADD PRIMARY KEY (`id_hasilPrediksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hasilpupuk`
--
ALTER TABLE `hasilpupuk`
  ADD PRIMARY KEY (`id_pupuk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faktor`
--
ALTER TABLE `faktor`
  MODIFY `id_faktor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hasilpercobaan`
--
ALTER TABLE `hasilpercobaan`
  MODIFY `id_percobaan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hasilprediksi`
--
ALTER TABLE `hasilprediksi`
  MODIFY `id_hasilPrediksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `hasilpupuk`
--
ALTER TABLE `hasilpupuk`
  MODIFY `id_pupuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasilprediksi`
--
ALTER TABLE `hasilprediksi`
  ADD CONSTRAINT `hasilprediksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `hasilpupuk`
--
ALTER TABLE `hasilpupuk`
  ADD CONSTRAINT `hasilpupuk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
