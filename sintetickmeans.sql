-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 18.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sintetickmeans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal`
--

CREATE TABLE `centroid_awal` (
  `no` int(11) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c1c` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL,
  `c2c` varchar(50) NOT NULL,
  `c3a` varchar(50) NOT NULL,
  `c3b` varchar(50) NOT NULL,
  `c3c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal`
--

INSERT INTO `centroid_awal` (`no`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '365', '1500', '1706', '363', '750', '241', '364', '500', '91');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp`
--

CREATE TABLE `centroid_temp` (
  `id_temp` int(5) NOT NULL,
  `iterasi` int(50) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp`
--

INSERT INTO `centroid_temp` (`id_temp`, `iterasi`, `c1`, `c2`, `c3`) VALUES
(1, 1, '1', '0', '0'),
(2, 1, '0', '0', '1'),
(3, 1, '0', '1', '0'),
(4, 1, '0', '1', '0'),
(5, 1, '0', '1', '0'),
(6, 1, '0', '0', '1'),
(7, 1, '0', '0', '1'),
(8, 1, '0', '1', '0'),
(9, 1, '0', '1', '0'),
(10, 1, '0', '1', '0'),
(11, 1, '0', '0', '1'),
(12, 1, '0', '1', '0'),
(13, 1, '0', '1', '0'),
(14, 1, '0', '1', '0'),
(15, 1, '0', '1', '0'),
(16, 1, '0', '0', '1'),
(17, 1, '0', '0', '1'),
(18, 1, '0', '0', '1'),
(19, 1, '0', '0', '1'),
(20, 1, '0', '0', '1'),
(21, 1, '0', '1', '0'),
(22, 1, '1', '0', '0'),
(23, 2, '1', '0', '0'),
(24, 2, '0', '0', '1'),
(25, 2, '0', '1', '0'),
(26, 2, '0', '1', '0'),
(27, 2, '0', '1', '0'),
(28, 2, '0', '0', '1'),
(29, 2, '0', '0', '1'),
(30, 2, '0', '1', '0'),
(31, 2, '0', '1', '0'),
(32, 2, '0', '1', '0'),
(33, 2, '0', '0', '1'),
(34, 2, '0', '1', '0'),
(35, 2, '0', '1', '0'),
(36, 2, '0', '1', '0'),
(37, 2, '0', '1', '0'),
(38, 2, '0', '0', '1'),
(39, 2, '0', '0', '1'),
(40, 2, '0', '0', '1'),
(41, 2, '0', '0', '1'),
(42, 2, '0', '0', '1'),
(43, 2, '0', '1', '0'),
(44, 2, '1', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `no_data` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`no_data`, `title`, `ket`) VALUES
(1, 'SISTEM PERHITUNGAN PADA SINTETIC STORE MENGGUNAKAN ALGORITMA K-MEANS CLUSTERING', 'SINTETIC STORE'),
(2, 'PETUNJUK', 'K-Means Clustering merupakan algoritma clustering yang berulang-ulang. Algoritma K-Means dimulai dengan pemilihan secara acak K, K disini merupakan banyaknya cluster yang ingin dibentuk'),
(3, 'ABOUT', 'SISTEM PERHITUNGAN PADA SINTETIC STORE MENGGUNAKAN ALGORITMA K-MEANS CLUSTERING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(100) NOT NULL,
  `no_barang` int(10) NOT NULL,
  `kodebarang` varchar(255) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `no_barang`, `kodebarang`, `namabarang`, `jenis`) VALUES
(1, 1, 'NPB', 'NSA PREMIUM BLACK', 'PREMIUM'),
(2, 11, 'NPBH', 'NSA PREMIUM BLACK HEATHER', 'PREMIUM'),
(3, 21, 'NPBGH', 'NSA PREMIUM BURGINDURY HEATHER', 'PREMIUM'),
(4, 31, 'NPCB', 'NSA PREMIUM CAROLINA BLUE', 'PREMIUM'),
(5, 41, 'NPC', 'NSA PREMIUM CHARCOAL', 'PREMIUM'),
(6, 51, 'NPD', 'NSA PREMIUM DAISY', 'PREMIUM'),
(7, 61, 'NPDC', 'NSA PREMIUM DARK CHOCOLATE', 'PREMIUM'),
(8, 71, 'NPDGH', 'NSA PREMIUM DARK GREEN HEATHER', 'PREMIUM'),
(9, 81, 'NPFG', 'NSA PREMIUM FOREST GREEN', 'PREMIUM'),
(10, 91, 'NPG', 'NSA PREMIUM GOLD', 'PREMIUM'),
(11, 101, 'NPIG', 'NSA PREMIUM IRISH GREEN', 'PREMIUM'),
(12, 111, 'NPLP', 'NSA PREMIUM LIGHT PINK', 'PREMIUM'),
(13, 121, 'NPM', 'NSA PREMIUM MAROON', 'PREMIUM'),
(14, 131, 'NPMG', 'NSA PREMIUM MILITARY GREEN', 'PREMIUM'),
(15, 141, 'NPN', 'NSA PREMIUM NAVY', 'PREMIUM'),
(16, 151, 'NPNH', 'NSA PREMIUM NAVY HEATHER', 'PREMIUM'),
(17, 161, 'NPR', 'NSA PREMIUM RED', 'PREMIUM'),
(18, 171, 'NPRH', 'NSA PREMIUM RED HEATHER', 'PREMIUM'),
(19, 181, 'NPRB', 'NSA PREMIUM ROYAL BLUE', 'PREMIUM'),
(20, 191, 'NPS', 'NSA PREMIUM SAND', 'PREMIUM'),
(21, 201, 'NPSG', 'NSA PREMIUM SPORT GREY', 'PREMIUM'),
(22, 211, 'NPW', 'NSA PREMIUM WHITE', 'PREMIUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_frequency`
--

CREATE TABLE `data_frequency` (
  `id_frequency` int(100) NOT NULL,
  `no_barang` int(100) NOT NULL,
  `kodebarang` varchar(20) NOT NULL,
  `s` varchar(100) NOT NULL,
  `m` varchar(100) NOT NULL,
  `l` varchar(100) NOT NULL,
  `xl` varchar(100) NOT NULL,
  `xxl` varchar(100) NOT NULL,
  `totalsize` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_frequency`
--

INSERT INTO `data_frequency` (`id_frequency`, `no_barang`, `kodebarang`, `s`, `m`, `l`, `xl`, `xxl`, `totalsize`) VALUES
(1, 1, 'NPB', '180', '418', '600', '388', '120', 1706),
(2, 11, 'NPBH', '13', '23', '30', '16', '9', 91),
(3, 21, 'NPBGH', '15', '30', '26', '16', '9', 96),
(4, 31, 'NPCB', '19', '39', '36', '22', '10', 126),
(5, 41, 'NPC', '19', '56', '74', '45', '15', 209),
(6, 51, 'NPD', '8', '18', '17', '6', '4', 53),
(7, 61, 'NPDC', '12', '27', '18', '15', '5', 77),
(8, 71, 'NPDGH', '9', '28', '34', '14', '10', 95),
(9, 81, 'NPFG', '42', '80', '108', '67', '22', 319),
(10, 91, 'NPG', '19', '29', '30', '26', '9', 113),
(11, 101, 'NPIG', '3', '3', '4', '5', '0', 15),
(12, 111, 'NPLP', '22', '42', '27', '15', '2', 108),
(13, 121, 'NPM', '19', '81', '104', '79', '23', 306),
(14, 131, 'NPMG', '15', '37', '51', '24', '5', 132),
(15, 141, 'NPN', '20', '72', '79', '53', '33', 257),
(16, 151, 'NPNH', '8', '22', '26', '20', '10', 86),
(17, 161, 'NPR', '4', '15', '23', '14', '6', 62),
(18, 171, 'NPRH', '5', '11', '10', '8', '5', 39),
(19, 181, 'NPRB', '2', '8', '18', '8', '6', 42),
(20, 191, 'NPS', '6', '12', '9', '10', '3', 40),
(21, 201, 'NPSG', '18', '69', '82', '54', '18', 241),
(22, 211, 'NPW', '157', '334', '451', '290', '79', 1311);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_monetary`
--

CREATE TABLE `data_monetary` (
  `id_monetary` int(100) NOT NULL,
  `no_barang` int(100) NOT NULL,
  `kodebarang` varchar(100) NOT NULL,
  `monetary` int(100) NOT NULL,
  `klasifikasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_monetary`
--

INSERT INTO `data_monetary` (`id_monetary`, `no_barang`, `kodebarang`, `monetary`, `klasifikasi`) VALUES
(1, 1, 'NPB', 73612000, 1500),
(2, 11, 'NPBH', 3902000, 500),
(3, 21, 'NPBGH', 4107000, 750),
(4, 31, 'NPCB', 5247500, 750),
(5, 41, 'NPC', 8934000, 750),
(6, 51, 'NPD', 2252000, 500),
(7, 61, 'NPDC', 3300000, 500),
(8, 71, 'NPDGH', 4096000, 750),
(9, 81, 'NPFG', 14111000, 1500),
(10, 91, 'NPG', 4891000, 750),
(11, 101, 'NPIG', 628000, 500),
(12, 111, 'NPLP', 4593000, 750),
(13, 121, 'NPM', 13309500, 1500),
(14, 131, 'NPMG', 5581000, 750),
(15, 141, 'NPN', 11248000, 1500),
(16, 151, 'NPNH', 3684000, 500),
(17, 161, 'NPR', 2633000, 500),
(18, 171, 'NPRH', 1652000, 500),
(19, 181, 'NPRB', 1819000, 500),
(20, 191, 'NPS', 1730000, 500),
(21, 201, 'NPSG', 10409500, 750),
(22, 211, 'NPW', 49366000, 1500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `id_penjualan` int(100) NOT NULL,
  `kodeitem` varchar(100) NOT NULL,
  `namaitem` varchar(100) NOT NULL,
  `size` varchar(5) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jumlahbarang` int(100) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `totalpendapatan` int(100) NOT NULL,
  `no_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`id_penjualan`, `kodeitem`, `namaitem`, `size`, `jenis`, `merk`, `jumlahbarang`, `satuan`, `totalpendapatan`, `no_barang`) VALUES
(1, 'NPB L', 'NSA PREMIUM BLACK L', 'L', 'PREMIUM', 'NSA', 600, 'PCS', 25114000, 1),
(2, 'NPW L', 'NSA PREMIUM WHITE L', 'L', 'PREMIUM', 'NSA', 451, 'PCS', 16623500, 211),
(3, 'NPB M', 'NSA PREMIUM BLACK M', 'M', 'PREMIUM', 'NSA', 418, 'PCS', 17683500, 1),
(4, 'NPB XL', 'NSA PREMIUM BLACK XL', 'XL', 'PREMIUM', 'NSA', 388, 'PCS', 16297500, 1),
(5, 'NPW M', 'NSA PREMIUM WHITE M', 'M', 'PREMIUM', 'NSA', 334, 'PCS', 12325000, 211),
(6, 'NPW XL', 'NSA PREMIUM WHITE XL', 'XL', 'PREMIUM', 'NSA', 290, 'PCS', 10666500, 211),
(7, 'NPB S', 'NSA PREMIUM BLACK S', 'S', 'PREMIUM', 'NSA', 180, 'PCS', 7620500, 1),
(8, 'NPW S', 'NSA PREMIUM WHITE S', 'S', 'PREMIUM', 'NSA', 157, 'PCS', 5859000, 211),
(9, 'NPB XXL', 'NSA PREMIUM BLACK XXL', 'XXL', 'PREMIUM', 'NSA', 120, 'PCS', 5662500, 1),
(10, 'NPFG L', 'NSA PREMIUM FOREST GREEN L', 'L', 'PREMIUM', 'NSA', 108, 'PCS', 4605000, 81),
(11, 'NPM L', 'NSA PREMIUM MAROON L', 'L', 'PREMIUM', 'NSA', 104, 'PCS', 4328500, 121),
(12, 'NPSG L', 'NSA PREMIUM SPORT GREY L', 'L', 'PREMIUM', 'NSA', 82, 'PCS', 3452500, 201),
(13, 'NPM M', 'NSA PREMIUM MAROON M', 'M', 'PREMIUM', 'NSA', 81, 'PCS', 3415500, 121),
(14, 'NPFG M', 'NSA PREMIUM FOREST GREEN M', 'M', 'PREMIUM', 'NSA', 80, 'PCS', 3421000, 81),
(15, 'NPM XL', 'NSA PREMIUM MAROON XL', 'XL', 'PREMIUM', 'NSA', 79, 'PCS', 3262500, 121),
(16, 'NPN L', 'NSA PREMIUM NAVY L', 'L', 'PREMIUM', 'NSA', 79, 'PCS', 3335000, 141),
(17, 'NPW XXL', 'NSA PREMIUM WHITE XXL', 'XXL', 'PREMIUM', 'NSA', 79, 'PCS', 3323000, 211),
(18, 'NPC L', 'NSA PREMIUM CHARCOAL L', 'L', 'PREMIUM', 'NSA', 74, 'PCS', 3131500, 41),
(19, 'NPN M', 'NSA PREMIUM NAVY M', 'M', 'PREMIUM', 'NSA', 72, 'PCS', 3074500, 141),
(20, 'NPSG M', 'NSA PREMIUM SPORT GREY M', 'M', 'PREMIUM', 'NSA', 69, 'PCS', 2945000, 201),
(21, 'NPFG XL', 'NSA PREMIUM FOREST GREEN XL', 'XL', 'PREMIUM', 'NSA', 67, 'PCS', 2862500, 81),
(22, 'NPC M', 'NSA PREMIUM CHARCOAL M', 'M', 'PREMIUM', 'NSA', 56, 'PCS', 2380500, 41),
(23, 'NPSG XL', 'NSA PREMIUM SPORT GREY XL', 'XL', 'PREMIUM', 'NSA', 54, 'PCS', 2281000, 201),
(24, 'NPN XL', 'NSA PREMIUM NAVY XL', 'XL', 'PREMIUM', 'NSA', 53, 'PCS', 2221000, 141),
(25, 'NPMGL', 'NSA PREMIUM MILITARY GREEN L', 'L', 'PREMIUM', 'NSA', 51, 'PCS', 2143500, 131),
(26, 'NPC XL', 'NSA PREMIUM CHARCOAL XL', 'XL', 'PREMIUM', 'NSA', 45, 'PCS', 1909500, 41),
(27, 'NPFG S', 'NSA PREMIUM FOREST GREEN S', 'S', 'PREMIUM', 'NSA', 42, 'PCS', 1795500, 81),
(28, 'NPLP M', 'NSA PREMIUM LIGHT PINK M', 'M', 'PREMIUM', 'NSA', 42, 'PCS', 1775000, 111),
(29, 'NPCB M', 'NSA PREMIUM CAROLINA BLUE M', 'M', 'PREMIUM', 'NSA', 39, 'PCS', 1623000, 31),
(30, 'NPMG M', 'NSA PREMIUM MILITARY GREEN M', 'M', 'PREMIUM', 'NSA', 37, 'PCS', 1559500, 131),
(31, 'NPCB L', 'NSA PREMIUM CAROLINA BLUE L', 'L', 'PREMIUM', 'NSA', 36, 'PCS', 1479000, 31),
(32, 'NPDGH L', 'NSA PREMIUM DARK GREEN HEATHER L', 'L', 'PREMIUM', 'NSA', 34, 'PCS', 1448000, 71),
(33, 'NPN XXL', 'NSA PREMIUM NAVY XXL', 'XXL', 'PREMIUM', 'NSA', 33, 'PCS', 1561000, 141),
(34, 'NPG L', 'NSA PREMIUM GOLD L', 'L', 'PREMIUM', 'NSA', 30, 'PCS', 1286000, 91),
(35, 'NPBH L', 'NSA PREMIUM BLACK HEATHER L', 'L', 'PREMIUM', 'NSA', 30, 'PCS', 1261000, 11),
(36, 'NPBGH M', 'NSA PREMIUM BURGUNDY HEATHER M', 'M', 'PREMIUM', 'NSA', 30, 'PCS', 1275000, 21),
(37, 'NPG M', 'NSA PREMIUM GOLD M', 'M', 'PREMIUM', 'NSA', 29, 'PCS', 1247000, 91),
(38, 'NPDGH M', 'NSA PREMIUM DARK GREEN HEATHER M', 'M', 'PREMIUM', 'NSA', 28, 'PCS', 1194000, 71),
(39, 'NPLP L', 'NSA PREMIUM LIGHT PINK L', 'L', 'PREMIUM', 'NSA', 27, 'PCS', 1157000, 111),
(40, 'NPDC M', 'NSA PREMIUM DARK CHOCOLATE M', 'M', 'PREMIUM', 'NSA', 27, 'PCS', 1151000, 61),
(41, 'NPNH L', 'NSA PREMIUM NAVY HEATHER L', 'L', 'PREMIUM', 'NSA', 26, 'PCS', 1096000, 151),
(42, 'NPG XL', 'NSA PREMIUM GOLD XL', 'XL', 'PREMIUM', 'NSA', 26, 'PCS', 1114000, 91),
(43, 'NPBGH L', 'NSA PREMIUM BURGUNDY HEATHER L', 'L', 'PREMIUM', 'NSA', 26, 'PCS', 1093000, 21),
(44, 'NPMG XL', 'NSA PREMIUM MILITARY GREEN XL', 'XL', 'PREMIUM', 'NSA', 24, 'PCS', 1001500, 131),
(45, 'NPR L', 'NSA PREMIUM RED L', 'L', 'PREMIUM', 'NSA', 23, 'PCS', 945000, 161),
(46, 'NPBH M', 'NSA PREMIUM BLACK HEATHER M', 'M', 'PREMIUM', 'NSA', 23, 'PCS', 979000, 11),
(47, 'NPM XXL', 'NSA PREMIUM MAROON XXL', 'XXL', 'PREMIUM', 'NSA', 23, 'PCS', 1076000, 121),
(48, 'NPCB XL', 'NSA PREMIUM CAROLINA BLUE XL', 'XL', 'PREMIUM', 'NSA', 22, 'PCS', 901000, 31),
(49, 'NPFG XXL', 'NSA PREMIUM FOREST GREEN XXL', 'XXL', 'PREMIUM', 'NSA', 22, 'PCS', 1056000, 81),
(50, 'NPNH M', 'NSA PREMIUM NAVY HEATHER M', 'M', 'PREMIUM', 'NSA', 22, 'PCS', 931000, 151),
(51, 'NPLP S', 'NSA PREMIUM LIGHT PINK S', 'S', 'PREMIUM', 'NSA', 22, 'PCS', 922000, 111),
(52, 'NPN S', 'NSA PREMIUM NAVY S', 'S', 'PREMIUM', 'NSA', 20, 'PCS', 844500, 141),
(53, 'NPNH XL', 'NSA PREMIUM NAVY HEATHER M', 'M', 'PREMIUM', 'NSA', 20, 'PCS', 843000, 151),
(54, 'NPC S', 'NSA PREMIUM CHARCOAL S', 'S', 'PREMIUM', 'NSA', 19, 'PCS', 797500, 41),
(55, 'NPM S', 'NSA PREMIUM MAROON S', 'S', 'PREMIUM', 'NSA', 19, 'PCS', 813500, 121),
(56, 'NPG S', 'NSA PREMIUM GOLD S', 'S', 'PREMIUM', 'NSA', 19, 'PCS', 817000, 91),
(57, 'NPCB S', 'NSA PREMIUM CAROLINA BLUE S', 'S', 'PREMIUM', 'NSA', 19, 'PCS', 796000, 31),
(58, 'NPD M', 'NSA PREMIUM DAISY M', 'M', 'PREMIUM', 'NSA', 18, 'PCS', 760000, 51),
(59, 'NPSG S', 'NSA PREMIUM SPORT GREY S', 'S', 'PREMIUM', 'NSA', 18, 'PCS', 768500, 201),
(60, 'NPDC L', 'NSA PREMIUM DARK CHOCOLATE L', 'L', 'PREMIUM', 'NSA', 18, 'PCS', 764000, 61),
(61, 'NPRB L', 'NSA PREMIUM ROYAL BLUE L', 'L', 'PREMIUM', 'NSA', 18, 'PCS', 767000, 181),
(62, 'NPSG XXL', 'NSA PREMIUM SPORT GREY XXL', 'XXL', 'PREMIUM', 'NSA', 18, 'PCS', 856500, 201),
(63, 'NPD L', 'NSA PREMIUM DAISY L', 'L', 'PREMIUM', 'NSA', 17, 'PCS', 714000, 51),
(64, 'NPBH XL', 'NSA PREMIUM BLACK HEATHER M', 'M', 'PREMIUM', 'NSA', 16, 'PCS', 676000, 11),
(65, 'NPBGH XL', 'NSA PREMIUM BURGUNDY HEATHER XL', 'XL', 'PREMIUM', 'NSA', 16, 'PCS', 672000, 21),
(66, 'NPLP XL', 'NSA PREMIUM LIGHT PINK XL', 'XL', 'PREMIUM', 'NSA', 15, 'PCS', 643000, 111),
(67, 'NPMG S', 'NSA PREMIUM MILITARY GREEN S', 'S', 'PREMIUM', 'NSA', 15, 'PCS', 636500, 131),
(68, 'NPDC XL', 'NSA PREMIUM DARK CHOCOLATE XL', 'XL', 'PREMIUM', 'NSA', 15, 'PCS', 634000, 61),
(69, 'NPR M', 'NSA PREMIUM RED M', 'M', 'PREMIUM', 'NSA', 15, 'PCS', 641000, 161),
(70, 'NPC XXL', 'NSA PREMIUM CHARCOAL XXL', 'XXL', 'PREMIUM', 'NSA', 15, 'PCS', 715000, 41),
(71, 'NPBGH S', 'NSA PREMIUM BURGUNDY HEATHER S', 'S', 'PREMIUM', 'NSA', 15, 'PCS', 640000, 21),
(72, 'NPDGH XL', 'NSA PREMIUM DARK GREEN HEATHER XL', 'XL', 'PREMIUM', 'NSA', 14, 'PCS', 592000, 71),
(73, 'NPR XL', 'NSA PREMIUM RED XL', 'XL', 'PREMIUM', 'NSA', 14, 'PCS', 592000, 161),
(74, 'NPBH S', 'NSA PREMIUM BLACK HEATHER S', 'S', 'PREMIUM', 'NSA', 13, 'PCS', 554000, 11),
(75, 'NPS M', 'NSA PREMIUM SAND M', 'M', 'PREMIUM', 'NSA', 12, 'PCS', 516000, 191),
(76, 'NPDC S', 'NSA PREMIUM DARK CHOCOLATE S', 'S', 'PREMIUM', 'NSA', 12, 'PCS', 511000, 61),
(77, 'NPRH M', 'NSA PREMIUM RED HEATHER M', 'M', 'PREMIUM', 'NSA', 11, 'PCS', 463000, 171),
(78, 'NPS XL', 'NSA PREMIUM SAND XL', 'XL', 'PREMIUM', 'NSA', 10, 'PCS', 430000, 191),
(79, 'NPDGH XXL', 'NSA PREMIUM DARK GREEN HEATHER XXL', 'XXL', 'PREMIUM', 'NSA', 10, 'PCS', 480000, 71),
(80, 'NPCB XXL', 'NSA PREMIUM CAROLINA BLUE XXL', 'XXL', 'PREMIUM', 'NSA', 10, 'PCS', 448500, 31),
(81, 'NPNH XXL', 'NSA PREMIUM NAVY HEATHER XXL', 'XXL', 'PREMIUM', 'NSA', 10, 'PCS', 475000, 151),
(82, 'NPRH L', 'NSA PREMIUM RED HEATHER L', 'L', 'PREMIUM', 'NSA', 10, 'PCS', 410000, 171),
(83, 'NPG XXL', 'NSA PREMIUM GOLD XXL', 'XXL', 'PREMIUM', 'NSA', 9, 'PCS', 427000, 91),
(84, 'NPDGH S', 'NSA PREMIUM DARK GREEN HEATHER S', 'S', 'PREMIUM', 'NSA', 9, 'PCS', 382000, 71),
(85, 'NPBH XXL', 'NSA PREMIUM BLACK HEATHER XXL', 'XXL', 'PREMIUM', 'NSA', 9, 'PCS', 432000, 11),
(86, 'NPS L', 'NSA PREMIUM SAND L', 'L', 'PREMIUM', 'NSA', 9, 'PCS', 382000, 191),
(87, 'NPBGH XXL', 'NSA PREMIUM BURGUNDY HEATHER XXL', 'XXL', 'PREMIUM', 'NSA', 9, 'PCS', 427000, 21),
(88, 'NPRB XL', 'NSA PREMIUM ROYAL BLUE XL', 'XL', 'PREMIUM', 'NSA', 8, 'PCS', 334000, 181),
(89, 'NPRH XL', 'NSA PREMIUM RED HEATHER XL', 'XL', 'PREMIUM', 'NSA', 8, 'PCS', 334000, 171),
(90, 'NPD S', 'NSA PREMIUM DAISY S', 'S', 'PREMIUM', 'NSA', 8, 'PCS', 340000, 51),
(91, 'NPNH S', 'NSA PREMIUM NAVY HEATHER S', 'S', 'PREMIUM', 'NSA', 8, 'PCS', 339000, 151),
(92, 'NPRB M', 'NSA PREMIUM ROYAL BLUE M', 'M', 'PREMIUM', 'NSA', 8, 'PCS', 344000, 181),
(93, 'NPD XL', 'NSA PREMIUM DAISY XL', 'XL', 'PREMIUM', 'NSA', 6, 'PCS', 246000, 51),
(94, 'NPS S', 'NSA PREMIUM SAND S', 'S', 'PREMIUM', 'NSA', 6, 'PCS', 258000, 191),
(95, 'NPR XXL', 'NSA PREMIUM RED XXL', 'XXL', 'PREMIUM', 'NSA', 6, 'PCS', 283000, 161),
(96, 'NPRB XXL', 'NSA PREMIUM ROYAL BLUE XXL', 'XXL', 'PREMIUM', 'NSA', 6, 'PCS', 288000, 181),
(97, 'NPMG XXL', 'NSA PREMIUM MILITARY GREEN XXL', 'XXL', 'PREMIUM', 'NSA', 5, 'PCS', 240000, 131),
(98, 'NPIG XL', 'NSA PREMIUM IRISH GREEN XL', 'XL', 'PREMIUM', 'NSA', 5, 'PCS', 211000, 101),
(99, 'NPDC XXL', 'NSA PREMIUM DARK CHOCOLATE XXL', 'XXL', 'PREMIUM', 'NSA', 5, 'PCS', 240000, 61),
(100, 'NPRH S', 'NSA PREMIUM RED HEATHER S', 'S', 'PREMIUM', 'NSA', 5, 'PCS', 210000, 171),
(101, 'NPRH XXL', 'NSA PREMIUM RED HEATHER XXL', 'XXL', 'PREMIUM', 'NSA', 5, 'PCS', 235000, 171),
(102, 'NPIG L', 'NSA PREMIUM IRISH GREEN L', 'L', 'PREMIUM', 'NSA', 4, 'PCS', 163000, 101),
(103, 'NPR S', 'NSA PREMIUM RED S', 'S', 'PREMIUM', 'NSA', 4, 'PCS', 172000, 161),
(104, 'NPD XXL', 'NSA PREMIUM DAISY XXL', 'XXL', 'PREMIUM', 'NSA', 4, 'PCS', 192000, 51),
(105, 'NPIG S', 'NSA PREMIUM IRISH GREEN S', 'X', 'PREMIUM', 'NSA', 3, 'PCS', 127000, 101),
(106, 'NPS XXL', 'NSA PREMIUM SAND XXL', 'XXL', 'PREMIUM', 'NSA', 3, 'PCS', 144000, 191),
(107, 'NPIG M', 'NSA PREMIUM IRISH GREEN M', 'M', 'PREMIUM', 'NSA', 3, 'PCS', 127000, 101),
(108, 'NPRB S', 'NSA PREMIUM ROYAL BLUE S', 'S', 'PREMIUM', 'NSA', 2, 'PCS', 86000, 181),
(109, 'NPLP XXL', 'NSA PREMIUM LIGHT PINK XXL', 'XXL', 'PREMIUM', 'NSA', 2, 'PCS', 96000, 111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_proses`
--

CREATE TABLE `data_proses` (
  `no_barang` int(100) NOT NULL,
  `kodebarang` varchar(10) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `recency` varchar(50) NOT NULL,
  `frequency` varchar(50) NOT NULL,
  `monetary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_proses`
--

INSERT INTO `data_proses` (`no_barang`, `kodebarang`, `namabarang`, `recency`, `frequency`, `monetary`) VALUES
(1, 'NPB', 'NSA PREMIUM BLACK', '365', '1706', '1500'),
(11, 'NPBH', 'NSA PREMIUM BLACK HEATHER', '364', '91', '500'),
(21, 'NPBGH', 'NSA PREMIUM BURGUNDURY HEATHER', '363', '96', '750'),
(31, 'NPCB', 'NSA PREMIUM CAROLINA BLUE', '364', '126', '750'),
(41, 'NPC', 'NSA PREMIUM CHARCOAL', '364', '209', '750'),
(51, 'NPD', 'NSA PREMIUM DAISY', '336', '53', '500'),
(61, 'NPDC', 'NSA PREMIUM DARK CHOCOLATE', '365', '77', '500'),
(71, 'NPDGH', 'NSA PREMIUM DARK GREEN HEATHER', '364', '95', '750'),
(81, 'NPFG', 'NSA PREMIUM FOREST GREEN', '364', '326', '1500'),
(91, 'NPG', 'NSA PREMIUM GOLD', '352', '113', '750'),
(101, 'NPIG', 'NSA PREMIUM IRISH GREEN', '360', '15', '500'),
(111, 'NPLP', 'NSA PREMIUM LIGHT PINK', '360', '108', '750'),
(121, 'NPM', 'NSA PREMIUM MAROON', '363', '314', '1500'),
(131, 'NPMG', 'NSA PREMIUM MILITARY GREEN', '365', '132', '750'),
(141, 'NPN', 'NSA PREMIUM NAVY', '365', '261', '1500'),
(151, 'NPNH', 'NSA PREMIUM NAVY HEATHER', '361', '86', '500'),
(161, 'NPR', 'NSA PREMIUM RED', '351', '62', '500'),
(171, 'NPRH', 'NSA PREMIUM RED HEATHER', '364', '39', '500'),
(181, 'NPRB', 'NSA PREMIUM ROYAL BLUE', '363', '42', '500'),
(191, 'NPS', 'NSA PREMIUM SAND', '360', '40', '500'),
(201, 'NPSG', 'NSA PREMIUM SPORT GREY', '363', '241', '750'),
(211, 'NPW', 'NSA PREMIUM WHITE', '364', '1311', '1500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_recency`
--

CREATE TABLE `data_recency` (
  `id_recency` int(100) NOT NULL,
  `no_barang` int(100) NOT NULL,
  `kodebarang` varchar(100) NOT NULL,
  `transaksiterakhir` varchar(50) NOT NULL,
  `recency` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_recency`
--

INSERT INTO `data_recency` (`id_recency`, `no_barang`, `kodebarang`, `transaksiterakhir`, `recency`) VALUES
(1, 1, 'NPB', '31 Oktober 2020', 365),
(2, 11, 'NPBH', '30 Oktober 2020', 364),
(3, 21, 'NPBGH', '29 Oktober 2020', 363),
(4, 31, 'NPCB', '30 Oktober 2020', 364),
(5, 41, 'NPC', '30 Oktober 2020', 364),
(6, 51, 'NPD', '02 Oktober 2020', 336),
(7, 61, 'NPDC', '31 Oktober 2020', 365),
(8, 71, 'NPDGH', '30 Oktober 2020', 364),
(9, 81, 'NPFG', '30 Oktober 2020', 364),
(10, 91, 'NPG', '18 Oktober 2020', 352),
(11, 101, 'NPIG', '26 Oktober 2020', 360),
(12, 111, 'NPLP', '26 Oktober 2020', 360),
(13, 121, 'NPM', '29 Oktober 2020', 363),
(14, 131, 'NPMG', '31 Oktober 2020', 365),
(15, 141, 'NPN', '31 Oktober 2020', 365),
(16, 151, 'NPNH', '27 Oktober 2020', 361),
(17, 161, 'NPR', '17 Oktober 2020', 351),
(18, 171, 'NPRH', '30 Oktober 2020', 364),
(19, 181, 'NPRB', '29 Oktober 2020', 363),
(20, 191, 'NPS', '26 Oktober 2020', 360),
(21, 201, 'NPSG', '29 Oktober 2020', 363),
(22, 211, 'NPW', '30 Oktober 2020', 364);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tahun`
--

CREATE TABLE `data_tahun` (
  `id_tahun` int(10) NOT NULL,
  `tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(5) NOT NULL,
  `no_barang` int(100) NOT NULL,
  `predikat` varchar(30) NOT NULL,
  `y1` int(15) NOT NULL,
  `y2` int(15) NOT NULL,
  `y3` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `no_barang`, `predikat`, `y1`, `y2`, `y3`) VALUES
(1, 1, 'Tertinggi (C1)', 0, 739, 872),
(2, 11, 'Rendah (C3)', 872, 133, 0),
(3, 21, 'Sedang (C2)', 787, 48, 85),
(4, 31, 'Sedang (C2)', 777, 38, 95),
(5, 41, 'Sedang (C2)', 749, 10, 123),
(6, 51, 'Rendah (C3)', 894, 155, 22),
(7, 61, 'Rendah (C3)', 876, 137, 4),
(8, 71, 'Sedang (C2)', 787, 48, 85),
(9, 81, 'Sedang (C2)', 463, 276, 409),
(10, 91, 'Sedang (C2)', 785, 46, 87),
(11, 101, 'Rendah (C3)', 899, 160, 27),
(12, 111, 'Sedang (C2)', 784, 45, 88),
(13, 121, 'Sedang (C2)', 467, 272, 405),
(14, 131, 'Sedang (C2)', 775, 36, 97),
(15, 141, 'Sedang (C2)', 483, 256, 389),
(16, 151, 'Rendah (C3)', 875, 136, 3),
(17, 161, 'Rendah (C3)', 886, 147, 14),
(18, 171, 'Rendah (C3)', 889, 150, 17),
(19, 181, 'Rendah (C3)', 889, 150, 17),
(20, 191, 'Rendah (C3)', 890, 151, 18),
(21, 201, 'Sedang (C2)', 489, 250, 383),
(22, 211, 'Tertinggi (C1)', 132, 607, 740);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilkmeans`
--

CREATE TABLE `hasilkmeans` (
  `id` int(50) NOT NULL,
  `iterasi` int(10) NOT NULL,
  `no_barang` int(50) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `c1` int(50) NOT NULL,
  `c2` int(50) NOT NULL,
  `c3` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilkmeans`
--

INSERT INTO `hasilkmeans` (`id`, `iterasi`, `no_barang`, `namabarang`, `c1`, `c2`, `c3`) VALUES
(1, 1, 1, 'NSA PREMIUM BLACK', 0, 1646, 1900),
(2, 1, 11, 'NSA PREMIUM BLACK HEATHER', 1900, 292, 1),
(3, 1, 21, 'NSA PREMIUM BURGINDURY HEATHER', 1776, 145, 250),
(4, 1, 31, 'NSA PREMIUM CAROLINA BLUE', 1749, 115, 252),
(5, 1, 41, 'NSA PREMIUM CHARCOAL', 1674, 32, 276),
(6, 1, 51, 'NSA PREMIUM DAISY', 1932, 314, 47),
(7, 1, 61, 'NSA PREMIUM DARK CHOCOLATE', 1911, 299, 14),
(8, 1, 71, 'NSA PREMIUM DARK GREEN HEATHER', 1777, 146, 250),
(9, 1, 81, 'NSA PREMIUM FOREST GREEN', 1387, 754, 1026),
(10, 1, 91, 'NSA PREMIUM GOLD', 1761, 128, 251),
(11, 1, 101, 'NSA PREMIUM IRISH GREEN', 1967, 339, 79),
(12, 1, 111, 'NSA PREMIUM LIGHT PINK', 1765, 133, 251),
(13, 1, 121, 'NSA PREMIUM MAROON', 1400, 753, 1023),
(14, 1, 131, 'NSA PREMIUM MILITARY GREEN', 1744, 109, 253),
(15, 1, 141, 'NSA PREMIUM NAVY', 1449, 750, 1014),
(16, 1, 151, 'NSA PREMIUM NAVY HEATHER', 1904, 294, 5),
(17, 1, 161, 'NSA PREMIUM RED', 1924, 308, 31),
(18, 1, 171, 'NSA PREMIUM RED HEATHER', 1944, 321, 52),
(19, 1, 181, 'NSA PREMIUM ROYAL BLUE', 1941, 320, 49),
(20, 1, 191, 'NSA PREMIUM SAND', 1943, 321, 51),
(21, 1, 201, 'NSA PREMIUM SPORT GREY', 1646, 0, 292),
(22, 1, 211, 'NSA PREMIUM WHITE', 395, 1307, 1577),
(23, 2, 1, 'NSA PREMIUM BLACK', 198, 1619, 1930),
(24, 2, 11, 'NSA PREMIUM BLACK HEATHER', 1735, 464, 36),
(25, 2, 21, 'NSA PREMIUM BURGINDURY HEATHER', 1599, 222, 253),
(26, 2, 31, 'NSA PREMIUM CAROLINA BLUE', 1573, 212, 260),
(27, 2, 41, 'NSA PREMIUM CHARCOAL', 1500, 206, 293),
(28, 2, 51, 'NSA PREMIUM DAISY', 1766, 473, 22),
(29, 2, 61, 'NSA PREMIUM DARK CHOCOLATE', 1746, 467, 22),
(30, 2, 71, 'NSA PREMIUM DARK GREEN HEATHER', 1600, 222, 253),
(31, 2, 81, 'NSA PREMIUM FOREST GREEN', 1190, 562, 1034),
(32, 2, 91, 'NSA PREMIUM GOLD', 1584, 216, 257),
(33, 2, 101, 'NSA PREMIUM IRISH GREEN', 1800, 485, 44),
(34, 2, 111, 'NSA PREMIUM LIGHT PINK', 1589, 218, 255),
(35, 2, 121, 'NSA PREMIUM MAROON', 1203, 559, 1031),
(36, 2, 131, 'NSA PREMIUM MILITARY GREEN', 1568, 211, 261),
(37, 2, 141, 'NSA PREMIUM NAVY', 1252, 551, 1020),
(38, 2, 151, 'NSA PREMIUM NAVY HEATHER', 1739, 465, 30),
(39, 2, 161, 'NSA PREMIUM RED', 1759, 470, 10),
(40, 2, 171, 'NSA PREMIUM RED HEATHER', 1777, 477, 18),
(41, 2, 181, 'NSA PREMIUM ROYAL BLUE', 1775, 476, 15),
(42, 2, 191, 'NSA PREMIUM SAND', 1777, 476, 16),
(43, 2, 201, 'NSA PREMIUM SPORT GREY', 1473, 213, 311),
(44, 2, 211, 'NSA PREMIUM WHITE', 198, 1254, 1605);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centroid`
--

CREATE TABLE `hasil_centroid` (
  `no` int(5) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c1c` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL,
  `c2c` varchar(50) NOT NULL,
  `c3a` varchar(50) NOT NULL,
  `c3b` varchar(50) NOT NULL,
  `c3c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_centroid`
--

INSERT INTO `hasil_centroid` (`no`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '364.5', '1500', '1508.5', '362.45454545455', '954.54545454545', '182', '358.22222222222', '500', '55.777777777778'),
(2, '364.5', '1500', '1508.5', '362.45454545455', '954.54545454545', '182', '358.22222222222', '500', '55.777777777778');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', 'admin', 1, 'Ridho Firmansah'),
(2, 'manager', 'manager', 2, 'Samuel Wibisono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rata_rata`
--

CREATE TABLE `rata_rata` (
  `id_rata` int(10) NOT NULL,
  `no_barang` int(10) NOT NULL,
  `rata_rata` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rata_rata`
--

INSERT INTO `rata_rata` (`id_rata`, `no_barang`, `rata_rata`) VALUES
(1, 1, 1190),
(2, 11, 318),
(3, 21, 403),
(4, 31, 413),
(5, 41, 441),
(6, 51, 296),
(7, 61, 314),
(8, 71, 403),
(9, 81, 727),
(10, 91, 405),
(11, 101, 291),
(12, 111, 406),
(13, 121, 723),
(14, 131, 415),
(15, 141, 707),
(16, 151, 315),
(17, 161, 304),
(18, 171, 301),
(19, 181, 301),
(20, 191, 300),
(21, 201, 701),
(22, 211, 1058);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_frequency`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_frequency` (
`no_barang` int(10)
,`kodebarang` varchar(255)
,`namabarang` varchar(255)
,`S` decimal(65,0)
,`M` decimal(65,0)
,`L` decimal(65,0)
,`XL` decimal(65,0)
,`XXL` decimal(65,0)
,`total` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_monetary`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_monetary` (
`no_barang` int(10)
,`kodebarang` varchar(255)
,`S` decimal(65,0)
,`M` decimal(65,0)
,`L` decimal(65,0)
,`XL` decimal(65,0)
,`XXL` decimal(65,0)
,`TOTAL` decimal(65,0)
,`klasifikasi` varchar(4)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_proses`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_proses` (
`no_barang` int(10)
,`kodebarang` varchar(255)
,`namabarang` varchar(255)
,`recency` int(100)
,`frequency` decimal(65,0)
,`klasifikasi` varchar(4)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_frequency`
--
DROP TABLE IF EXISTS `view_frequency`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_frequency`  AS SELECT `data_barang`.`no_barang` AS `no_barang`, `data_barang`.`kodebarang` AS `kodebarang`, `data_barang`.`namabarang` AS `namabarang`, sum(case when `data_penjualan`.`size` = 'S' then `data_penjualan`.`jumlahbarang` else 0 end) AS `S`, sum(case when `data_penjualan`.`size` = 'M' then `data_penjualan`.`jumlahbarang` else 0 end) AS `M`, sum(case when `data_penjualan`.`size` = 'L' then `data_penjualan`.`jumlahbarang` else 0 end) AS `L`, sum(case when `data_penjualan`.`size` = 'XL' then `data_penjualan`.`jumlahbarang` else 0 end) AS `XL`, sum(case when `data_penjualan`.`size` = 'XXL' then `data_penjualan`.`jumlahbarang` else 0 end) AS `XXL`, sum(case when `data_penjualan`.`size` = 'S' then `data_penjualan`.`jumlahbarang` else 0 end) + sum(case when `data_penjualan`.`size` = 'M' then `data_penjualan`.`jumlahbarang` else 0 end) + sum(case when `data_penjualan`.`size` = 'L' then `data_penjualan`.`jumlahbarang` else 0 end) + sum(case when `data_penjualan`.`size` = 'XL' then `data_penjualan`.`jumlahbarang` else 0 end) + sum(case when `data_penjualan`.`size` = 'XXL' then `data_penjualan`.`jumlahbarang` else 0 end) AS `total` FROM (`data_barang` join `data_penjualan` on(`data_barang`.`no_barang` = `data_penjualan`.`no_barang`)) GROUP BY `data_barang`.`kodebarang` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_monetary`
--
DROP TABLE IF EXISTS `view_monetary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_monetary`  AS SELECT `data_barang`.`no_barang` AS `no_barang`, `data_barang`.`kodebarang` AS `kodebarang`, sum(case when `data_penjualan`.`size` = 'S' then `data_penjualan`.`totalpendapatan` else 0 end) AS `S`, sum(case when `data_penjualan`.`size` = 'M' then `data_penjualan`.`totalpendapatan` else 0 end) AS `M`, sum(case when `data_penjualan`.`size` = 'L' then `data_penjualan`.`totalpendapatan` else 0 end) AS `L`, sum(case when `data_penjualan`.`size` = 'XL' then `data_penjualan`.`totalpendapatan` else 0 end) AS `XL`, sum(case when `data_penjualan`.`size` = 'XXL' then `data_penjualan`.`totalpendapatan` else 0 end) AS `XXL`, sum(`data_penjualan`.`totalpendapatan`) AS `TOTAL`, if(sum(`data_penjualan`.`totalpendapatan`) >= 11000000,'1500',if(sum(`data_penjualan`.`totalpendapatan`) < 11000000 and sum(`data_penjualan`.`totalpendapatan`) >= 4000000,'750','500')) AS `klasifikasi` FROM (`data_barang` join `data_penjualan` on(`data_barang`.`no_barang` = `data_penjualan`.`no_barang`)) GROUP BY `data_barang`.`kodebarang` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_proses`
--
DROP TABLE IF EXISTS `view_proses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_proses`  AS SELECT `data_barang`.`no_barang` AS `no_barang`, `data_barang`.`kodebarang` AS `kodebarang`, `data_barang`.`namabarang` AS `namabarang`, `data_recency`.`recency` AS `recency`, `view_frequency`.`total` AS `frequency`, `view_monetary`.`klasifikasi` AS `klasifikasi` FROM (((`data_barang` join `view_frequency` on(`data_barang`.`kodebarang` = `view_frequency`.`kodebarang`)) join `view_monetary` on(`data_barang`.`kodebarang` = `view_monetary`.`kodebarang`)) join `data_recency` on(`data_barang`.`kodebarang` = `data_recency`.`kodebarang`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `centroid_awal`
--
ALTER TABLE `centroid_awal`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `centroid_temp`
--
ALTER TABLE `centroid_temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no_data`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_frequency`
--
ALTER TABLE `data_frequency`
  ADD PRIMARY KEY (`id_frequency`);

--
-- Indeks untuk tabel `data_monetary`
--
ALTER TABLE `data_monetary`
  ADD PRIMARY KEY (`id_monetary`);

--
-- Indeks untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `data_proses`
--
ALTER TABLE `data_proses`
  ADD PRIMARY KEY (`no_barang`);

--
-- Indeks untuk tabel `data_recency`
--
ALTER TABLE `data_recency`
  ADD PRIMARY KEY (`id_recency`);

--
-- Indeks untuk tabel `data_tahun`
--
ALTER TABLE `data_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `hasilkmeans`
--
ALTER TABLE `hasilkmeans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `rata_rata`
--
ALTER TABLE `rata_rata`
  ADD PRIMARY KEY (`id_rata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `centroid_awal`
--
ALTER TABLE `centroid_awal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `centroid_temp`
--
ALTER TABLE `centroid_temp`
  MODIFY `id_temp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `no_data` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_frequency`
--
ALTER TABLE `data_frequency`
  MODIFY `id_frequency` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_monetary`
--
ALTER TABLE `data_monetary`
  MODIFY `id_monetary` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `id_penjualan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `data_recency`
--
ALTER TABLE `data_recency`
  MODIFY `id_recency` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_tahun`
--
ALTER TABLE `data_tahun`
  MODIFY `id_tahun` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `hasilkmeans`
--
ALTER TABLE `hasilkmeans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rata_rata`
--
ALTER TABLE `rata_rata`
  MODIFY `id_rata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
