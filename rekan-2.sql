-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jan 2021 pada 10.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `babel_pasca`
--

CREATE TABLE `babel_pasca` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'babel',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `babel_pasca`
--

INSERT INTO `babel_pasca` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `status`) VALUES
(1, '424141', 'destri', 'layo', 'babel', 'Smartfren', '08168819411', 'Backup', 'Fortinet', 'Disable'),
(2, '12411', 'bank mandiri', 'kapten a rivai', 'babel', 'Indosat', '084104', 'Main', 'Fortinet', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `babel_pra`
--

CREATE TABLE `babel_pra` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'babel',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `awal_pengisian` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `babel_pra`
--

INSERT INTO `babel_pra` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `awal_pengisian`, `masa_aktif`, `status`) VALUES
(6, '121224278e3431', 'putri ayu maysuroh', 'seoul', 'babel', 'Telkomsel', '342', 'Main', 'Fortinet', '2020-02-22', '2020-03-22', 'Aktif'),
(7, '1112', 'fawan', 'layo', 'babel', 'Telkomsel', '', 'Main', 'Fortinet', '2020-12-16', '2021-01-16', 'Aktif'),
(8, '222', 'bia', 'aal', 'babel', 'Telkomsel', '61174813', 'Main', 'Fortinet', '2020-12-28', '2021-01-28', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkulu_pasca`
--

CREATE TABLE `bengkulu_pasca` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'bengkulu',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bengkulu_pasca`
--

INSERT INTO `bengkulu_pasca` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `status`) VALUES
(1, '99997', 'sahrul', 'kertapati', 'bengkulu', 'Telkomsel', '08168819411', 'Main', 'Fortinet', 'Standby'),
(2, '13414', 'bris', 'veteran', 'bengkulu', 'Tri', '0981401', 'Main', 'Fortinet', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkulu_pra`
--

CREATE TABLE `bengkulu_pra` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'bengkulu',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `awal_pengisian` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bengkulu_pra`
--

INSERT INTO `bengkulu_pra` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `awal_pengisian`, `masa_aktif`, `status`) VALUES
(2, '0000', 'eka', 'tabung', 'bengkulu', 'Telkomsel', '0813', 'Main', 'Gazele', '2020-12-16', '2021-01-16', 'Disable'),
(3, '1189410', 'bsb syariah', 'kapten anwar', 'bengkulu', 'Telkomsel', '091422', 'Main', 'Fortinet', '2021-01-01', '2021-02-01', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jambi_pasca`
--

CREATE TABLE `jambi_pasca` (
  `id` int(11) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'babel',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jambi_pasca`
--

INSERT INTO `jambi_pasca` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `status`) VALUES
(1, '1141452', 'destri', 'seoul', 'babel', 'Smartfren', '08168819411', 'Main', 'Fortinet', 'Standby'),
(2, '741098', 'BBRI', 'muaro jambi', 'babel', 'Telkomsel', '0183974018082352', 'Main', 'Fortinet', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jambi_pra`
--

CREATE TABLE `jambi_pra` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'jambi',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `awal_pengisian` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jambi_pra`
--

INSERT INTO `jambi_pra` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `awal_pengisian`, `masa_aktif`, `status`) VALUES
(1, '9999', 'fawan p', 'bukit', 'jambi', 'Tri', '08074961981', 'Main', 'Mikrotik', '2020-12-17', '2021-01-17', 'Disable'),
(4, '555', 'ihsan', 'kuto', 'jambi', 'Telkomsel', '53183741481', 'Main', 'Fortinet', '2020-12-06', '2021-01-06', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampung_pasca`
--

CREATE TABLE `lampung_pasca` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'lampung',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lampung_pasca`
--

INSERT INTO `lampung_pasca` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `status`) VALUES
(2, '13121', 'Gilbert', 'Tulang bawang', 'lampung', 'Tri', '09183741', 'Backup', 'Mikrotik', 'Disable'),
(3, '5678', 'Rahma', 'plaju', 'lampung', 'Telkomsel', '18010207420', 'Main', 'Fortinet', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampung_pra`
--

CREATE TABLE `lampung_pra` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'lampung',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `awal_pengisian` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lampung_pra`
--

INSERT INTO `lampung_pra` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `awal_pengisian`, `masa_aktif`, `status`) VALUES
(1, '444', 'pandi', 'radial', '', 'Telkomsel', '794817', 'Backup', 'Gazele', '2020-12-11', '2021-01-11', 'Disable'),
(2, '982', 'jaidan jau', 'sekayu', '', 'Smartfren', '0804714089', 'Backup', 'Mikrotik', '2020-12-31', '2021-01-31', 'Disable'),
(3, '411', 'aan', 'kenten', '', 'XL', '704810518', 'Backup', 'Fortinet', '2021-01-29', '2021-03-01', 'Aktif'),
(4, '123', 'feri', 'merdeka', 'lampung', 'Telkomsel', '0897', 'Main', 'Fortinet', '2021-01-01', '2021-02-01', 'Disable');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plg_pasca`
--

CREATE TABLE `plg_pasca` (
  `id` int(11) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'palembang',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plg_pasca`
--

INSERT INTO `plg_pasca` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `status`) VALUES
(4, '111', 'destri watson', 'palembang', 'palembang', 'Smartfren', '1112342', 'Main', 'Gazele', 'Disable'),
(5, '2314', 'Dihan', 'bukit', 'palembang', 'XL', '08168819411', 'Main', 'Mikrotik', 'Aktif'),
(6, '8875', 'jefven', 'bangka', 'palembang', 'Telkomsel', '876542321', 'Main', 'Fortinet', 'Aktif'),
(7, '73141', 'Panji umar', '111', 'palembang', 'Indosat', '1381830', 'Main', 'Fortinet', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plg_pra`
--

CREATE TABLE `plg_pra` (
  `id` int(50) NOT NULL,
  `no_jaringan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT 'palembang',
  `provider` varchar(50) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `status_layanan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `awal_pengisian` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plg_pra`
--

INSERT INTO `plg_pra` (`id`, `no_jaringan`, `pelanggan`, `lokasi`, `area`, `provider`, `no_kartu`, `status_layanan`, `perangkat`, `awal_pengisian`, `masa_aktif`, `status`) VALUES
(6, '137129', 'Danamon Opi Mall', 'Opi', 'palembang', 'Telkomsel', '082126796852', 'Main', 'Fortinet', '2020-10-18', '2020-11-18', 'Aktif'),
(7, '41414', 'bri syariah', 'mata merah', 'palembang', 'Telkomsel', '1740814', 'Main', 'Fortinet', '2020-11-30', '2020-12-30', 'Aktif'),
(8, '087654', 'Rahma Destriani', 'plaju', 'palembang', 'Telkomsel', '082180', 'Backup', 'Mikrotik', '2020-12-17', '2021-01-17', 'Aktif'),
(10, '0812', 'Putri', 'plaju', 'palembang', 'Indosat', '08219809', 'Backup', 'Gazele', '2020-12-26', '2021-01-26', 'Disable');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `babel_pasca`
--
ALTER TABLE `babel_pasca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `babel_pra`
--
ALTER TABLE `babel_pra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bengkulu_pasca`
--
ALTER TABLE `bengkulu_pasca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bengkulu_pra`
--
ALTER TABLE `bengkulu_pra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jambi_pasca`
--
ALTER TABLE `jambi_pasca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jambi_pra`
--
ALTER TABLE `jambi_pra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lampung_pasca`
--
ALTER TABLE `lampung_pasca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lampung_pra`
--
ALTER TABLE `lampung_pra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plg_pasca`
--
ALTER TABLE `plg_pasca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plg_pra`
--
ALTER TABLE `plg_pra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `babel_pasca`
--
ALTER TABLE `babel_pasca`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `babel_pra`
--
ALTER TABLE `babel_pra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bengkulu_pasca`
--
ALTER TABLE `bengkulu_pasca`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bengkulu_pra`
--
ALTER TABLE `bengkulu_pra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jambi_pasca`
--
ALTER TABLE `jambi_pasca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jambi_pra`
--
ALTER TABLE `jambi_pra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lampung_pasca`
--
ALTER TABLE `lampung_pasca`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lampung_pra`
--
ALTER TABLE `lampung_pra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `plg_pasca`
--
ALTER TABLE `plg_pasca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `plg_pra`
--
ALTER TABLE `plg_pra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
