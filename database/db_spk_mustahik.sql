-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 04:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_mustahik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `id_kecamatan`, `nama_desa`) VALUES
(14, 1, 'Galam'),
(16, 1, 'Tirta Jaya'),
(19, 2, 'Kait-Kait'),
(20, 4, 'Atu-Atu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Bajuin'),
(2, 'Bati-Bati'),
(4, 'Pelaihari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mustahik`
--

CREATE TABLE `tb_mustahik` (
  `no` int(11) NOT NULL,
  `tgl_regis` varchar(30) DEFAULT NULL,
  `prov_kab` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `ds_kel` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_kk` varchar(200) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `jumlah_keluarga` int(2) DEFAULT NULL,
  `bantuan` int(2) DEFAULT NULL,
  `besar_bantuan` int(11) DEFAULT NULL,
  `jenis_ashnaf` varchar(50) DEFAULT NULL,
  `program_bantuan` varchar(50) DEFAULT NULL,
  `sumber_dana` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status_pekerjaan_suami` varchar(20) DEFAULT NULL,
  `status_pekerjaan_istri` varchar(20) DEFAULT NULL,
  `total_pendapatan` int(11) DEFAULT NULL,
  `simpanan` varchar(15) DEFAULT NULL,
  `jenis_simpanan` varchar(30) DEFAULT NULL,
  `hutang` varchar(50) DEFAULT NULL,
  `total_pengeluaran` int(11) DEFAULT NULL,
  `halaman_rumah` varchar(10) DEFAULT NULL,
  `ukuran_rumah` varchar(10) DEFAULT NULL,
  `dinding` varchar(15) DEFAULT NULL,
  `lantai` varchar(10) DEFAULT NULL,
  `atap` varchar(15) DEFAULT NULL,
  `ruang_tamu` varchar(15) DEFAULT NULL,
  `alat_dapur` varchar(15) DEFAULT NULL,
  `mck` varchar(20) DEFAULT NULL,
  `sumber_air` varchar(10) DEFAULT NULL,
  `daya_listrik` varchar(10) DEFAULT NULL,
  `sawah` varchar(20) DEFAULT NULL,
  `luas_sawah` varchar(20) DEFAULT NULL,
  `kepemilikan_kendaraan` varchar(15) DEFAULT NULL,
  `jenis_kendaraan` varchar(10) DEFAULT NULL,
  `ternak` varchar(30) DEFAULT NULL,
  `jenis_ternak` varchar(20) DEFAULT NULL,
  `elektronik` varchar(100) DEFAULT NULL,
  `keluarga_beribadah` varchar(7) DEFAULT NULL,
  `keluarga_jumlah_makan` varchar(7) DEFAULT NULL,
  `pakaian_layak` varchar(7) DEFAULT NULL,
  `sarana_kesehatan` varchar(7) DEFAULT NULL,
  `siap_kerja` varchar(7) DEFAULT NULL,
  `shalat` int(2) DEFAULT NULL,
  `puasa` int(2) DEFAULT NULL,
  `zakat` int(2) DEFAULT NULL,
  `lingkungan_keluarga` int(2) DEFAULT NULL,
  `kebijakan_pemerintah` int(2) DEFAULT NULL,
  `indeks_rumah` varchar(15) DEFAULT NULL,
  `kepemilikan_harta` varchar(15) DEFAULT NULL,
  `pendapatan` varchar(15) DEFAULT NULL,
  `indeks_kepribadian` varchar(15) DEFAULT NULL,
  `rekomendasi_petugas` varchar(15) DEFAULT NULL,
  `ket` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mustahik`
--

INSERT INTO `tb_mustahik` (`no`, `tgl_regis`, `prov_kab`, `kec`, `ds_kel`, `nama`, `nama_kk`, `alamat`, `no_hp`, `nik`, `no_kk`, `jumlah_keluarga`, `bantuan`, `besar_bantuan`, `jenis_ashnaf`, `program_bantuan`, `sumber_dana`, `pekerjaan`, `status_pekerjaan_suami`, `status_pekerjaan_istri`, `total_pendapatan`, `simpanan`, `jenis_simpanan`, `hutang`, `total_pengeluaran`, `halaman_rumah`, `ukuran_rumah`, `dinding`, `lantai`, `atap`, `ruang_tamu`, `alat_dapur`, `mck`, `sumber_air`, `daya_listrik`, `sawah`, `luas_sawah`, `kepemilikan_kendaraan`, `jenis_kendaraan`, `ternak`, `jenis_ternak`, `elektronik`, `keluarga_beribadah`, `keluarga_jumlah_makan`, `pakaian_layak`, `sarana_kesehatan`, `siap_kerja`, `shalat`, `puasa`, `zakat`, `lingkungan_keluarga`, `kebijakan_pemerintah`, `indeks_rumah`, `kepemilikan_harta`, `pendapatan`, `indeks_kepribadian`, `rekomendasi_petugas`, `ket`) VALUES
(1, '', 'Kalimantan Selatan/Tanah Laut', '', '', 'Darham', '', 'Jl. Melati RT. 01 RW. 01 Panggung', '83111245491', '6301031103680004', '', 0, 1, 0, 'Miskin', 'Ekonomi', '', 'Tukang Bangunan', 'Bekerja', 'Tidak Bekerja', 6000000, 'Tidak Ada', '', 'Tidak Ada', 182000, '> 9 m2', '> 8 m2', 'Bambu/Triplek', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', 'Radio/Tape/Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 5, 5, '', 'Tidak Layak', '', 'Layak', 'Layak', ''),
(2, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Hamkani', 'Hamkani', 'Jl. Pembangunan Gg. Ikhlas RT. 1 RW. 1 Kampung Adang', '85332498711', '6301032705770001', '6301032910090016', 5, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2600000, 'Tidak Ada', '', '500000', 362000, '< 5 m2', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(3, '', 'Kalimantan Selatan/Tanah Laut', '', '', 'Ernawati', '', 'Jl. Basuki Rahmat', '89691847544', '6301034904870005', '', 0, 0, 0, '', '', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', '', 'Beli', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(4, '', 'Kalimantan Selatan/Tanah Laut', '', '', 'Sunardi', '', 'Jl. Limau Gunung RT. 1 RW.1 Pabahanan', '', '6301032605760001', '', 0, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', '140000', 870000, '', '', 'Semen', 'Plester', 'Genteng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(5, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Telaga', 'Fitrianor', 'Fitrianor', 'Jl. Telaga RT. 004 RW. 2', '83136489332', '6301032512890006', '6301031602120007', 4, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 400000, 'Tidak Ada', '', 'Ada', 122000, '< 5 m2', '> 8 m2', 'Papan', 'Plester', 'Genteng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(6, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Telaga', 'Isnawati', '', 'Jl. Bekatung RT. 2 RW. 2', '87736880690', '6301037112700005', '6301030706052340', 2, 0, 0, '', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 120000, 'Tidak Ada', '', 'Tidak Ada', 1262000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', 'Warisan/Hibah', '5 Borong', '', 'Roda 2', '', '', 'Kipas, Kulkas', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(7, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Ahmad Ramdani', 'Talmi Sani', 'Jl. Perintis 2', '81952329022', '6301032910040002', '6301032707100002', 4, 1, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Berjualan', 'Tidak Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 0, '< 5 m2', '> 8 m2', 'Papan', 'Keramik', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(8, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Subandi', 'Subandi', 'Jl. Perintis Tengah RT. 29 RW. 8', '081348181627/081349572929', '6301032904580001', '6301030404070012', 5, 0, 0, '', '', '', '', 'Bekerja', 'Tidak Bekerja', 600000, 'Tidak Ada', '', 'Ada hutang PIP', 114000, '', '', '', '', '', 'Tidak Ada', 'Kompor Gas', '', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(9, '', 'Kalimantan Selatan/Tanah Laut', '', '', 'Muhammad Hamdi', '', 'Jl. Berkat Permai RT. 4 RW. 1', '85348459435', '6301032406700001', '', 0, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 350000, '', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(10, '3 Juni 2023', 'Kalimantan Selatan/Tanah Laut', '', '', 'Mariani', '', 'Jl. Raya Takisung', '87818339285', '', '', 0, 0, 0, 'Miskin', 'Ekonomi', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(11, '', 'Kalimantan Selatan/Tanah Laut', '', '', 'Mariatul Kiftyah', '', 'Jl. Basuki Rahmat RT. 26 RW. 006', '83829236286', '6301036403820008', '', 7, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 2000000, 'Tidak Ada', '', 'Ada', 0, '', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(12, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Gutina Ariyani', 'Gustina Ariyani', 'Al Fatah RT. 27 RW. 7', '83134094046', '6301037108930004', '6301032910180001', 3, 1, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 132000, '7-9 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(13, '', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Karang Taruna', 'Yulia Anggraini', 'Yulia Anggraini', 'KOMP. ROEMAH LEGENDA, JL. AL FATAH MATAH II NO. 10E RT. 007/RW. 003', '', '6301036606890004', '6301032303200009', 3, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 5000000, 'Tidak Ada', '', 'Ada', 1970000, '', '', '', '', '', '', '', '', '', '', '', '', 'Warisan/Hibah', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(14, '', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Bariyang Atas', 'Muhammmad Yusni', 'Muhammmad Yusni', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301111303830001', '6301110909090015', 4, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 190000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(15, '', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Bariyang Atas', 'Husni', 'Husni', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301051906810003', '6301110802190003', 1, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 270000, '< 5 m2', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'PDAM', '900 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(16, '', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Bariyang Atas', 'Arbain', 'Arbain', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301041004760001', '6301040201061481', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 50000, 'Tidak Ada', '', 'Ada', 244000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '450 kwh', '', '', '', 'Roda 2', 'Beli', 'Itik', 'Radio/Tape/Kipas, Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(17, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Adriyani', 'Adriyani', 'Jl. Raya Takisung RT. 13', '83143888412', '6301011203900003', '6301011305120001', 4, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Nelayan/Perikanan', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(18, '', 'Kalimantan Selatan/Tanah Laut', '', '', '', '', '', '81349933122', '', '', 0, 0, 2000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 5500000, 'Tidak Ada', '', 'Tidak Ada', 1000000, '', '', '', '', '', '', '', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', 'Roda 2', '', '', 'Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(19, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Rajudin', 'Rajudin', 'Takisung RT. 004 RW.002', '', '6301011010720001', '6301012805073312', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(20, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Mulyadi Hartono', 'Mulyadi Hartono', 'Jl. Raya Takisung RT. 003 RW. 002', '', '6301010404830009', '6301011710110006', 4, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 150000, 'Ada', '', 'Tidak Ada', 247000, '', '', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', '', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(21, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Juhainah', 'Juhainah', 'Jl. Raya Takisung RT. 007 RW. 003', '', '6301014305740001', '6301012710220001', 2, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 112000, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(22, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Fitriani', 'Fitriani', 'Jl. Raya Takisung RT. 007 RW. 003', '', '6301010208810001', '6301012411140001', 5, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', '6000000', 254000, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', '', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(23, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Wahyudi', 'Wahyudi', 'Jl. Keramat RT. 008 RW. 003', '', '6301010107860065', '6301012210210001', 1, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', '', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(24, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Takisung', 'Akhmad Nawawi', 'Akhmad Nawawi', 'Jl. Suka Damai RT. 003 RW. 002, Takisung', '', '63011016033810001', '6301101312100002', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 402000, '', '', 'Bambu/Triplek', 'Semen', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(25, '19/05/23', 'Kalimantan Selatan/Tanah Laut', '', 'Handil Birayang', 'Rusdi', 'Rusdi', 'Ds. Handil Birayang Bawah', '', '6301041301710001', '6301041008062874', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(26, '', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Birayang Bawah', 'Abdul Gani', 'Abdul Gani', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301110101630001', '6301112203110002', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Ada', 215000, '> 9 m2', '> 8 m2', 'Kalsiboard', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '13', '', 'Roda 2', '', 'Itik 4 ekor', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(27, '19/05/23', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Birayang Bawah', 'Hasanah', 'Hasanah', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301115009790002', '6301110803120001', 6, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 157000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '450 kwh', '', 'Sewa', '', 'Roda 2', '', 'Itik 2 ekor', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 0, '', '', '', '', 'Layak', ''),
(28, '19/05/23', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Birayang Bawah', 'Sabariah', 'Sabariah', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301114509680001', '6301110802120002', 2, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Ada', 'Emas', 'Tidak Ada', 170000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '18 borong', '', 'Roda 2', '', 'Itik 2 ekor', 'Radio/Tape/Kipas, Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(29, '19/05/23', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Birayang Bawah', 'Iman', 'Iman', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301040908910001', '6301112611190002', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Bekerja', 750000, 'Tidak Ada', '', 'Tidak Ada', 95000, '> 9 m2', '> 8 m2', 'Kalsiboard', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '', '', '', '', 'Roda 2', '', 'Itik', 'Radio/Tape/Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(30, '19/05/23', 'Kalimantan Selatan/Tanah Laut', 'Bumi Makmur', 'Handil Birayang Bawah', 'Syakeran', 'Syakeran', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301041208610001', '6301110802120001', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 720000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '13 borong', '', 'Roda 2', '', 'Itik', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(31, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Khalifah Shaleh', 'Khalifah Shaleh', 'Jl. Lok Serapang RT. 023 RW. 008', '', '6301030810010004', '6301031612210004', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(32, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Masturi', 'Masturi', 'Jl. Sawahan 1 Gg. Budi RT. 019 RW. 006', '', '6301030501630002', '6301030307120402', 4, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 150000, 'Tidak Ada', '', 'Tidak Ada', 1015000, '7-9 m2', '> 8 m2', 'Papan', 'Kayu', 'Jerami', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(33, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Muhammad Arsyad', 'Muhammad Arsyad', 'Jl. Niaga 1 Gg. Melati RT. 012 RW. 004 Kel. Pelaihari', '85251250686', '6301030107830029', '6,30103E+15', 5, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Jual Makanan', 'Bekerja', 'Tidak Bekerja', 400000, 'Tidak Ada', '', 'Ada', 800000, '> 9 m2', '> 8 m2', 'Kayu', 'Kayu', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(34, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Fathur Rakhim', 'Fathur Rakhim', 'Jl. Sawahan No. 9 RT. 019 RW. 006 Pelaihari', '', '6301031301820001', '6301031704170006', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 765000, '', '> 8 m2', 'Kayu', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(35, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Angsau', 'Rahmat', 'Rahmat', 'Jl. KH. Dewantara RT. 07A RW. 03 Kel. Angsau', '81340202884', '6301031505700005', '6301030212160002', 2, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 120000, 'Tidak Ada', '', 'Ada', 900000, '< 5 m2', '> 8 m2', 'Bata', 'Semen', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 5, 4, 0, 5, 5, '', '', '', '', 'Layak', ''),
(36, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Karang Taruna', 'Lidiawati', 'Basar', 'Jl. Karang Jawa RT. 003 RW. 001', '', '6301031212710006', '6301030507110003', 1, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 50000, 'Tidak Ada', '', 'Ada', 197500, '< 5 m2', '', 'Bata', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(37, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Bumi Jaya', 'Rakitem', 'Rakitem', 'Jl. P.Senopati RT. 09B RW. 004 Bumi Jaya', '83862168020', '6301035806760004', '6301032012190001', 4, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 260000, 'Ada', 'Emas', 'Ada', 2305000, '7-9 m2', '> 8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(38, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Atu-atu', 'Andri Parmana', 'Andri Parmana', 'Jl. H.M.Safri RT. 02 RW. 01 Desa Atu-Atu', '81251577747', '6301032201910006', '6301030301160001', 3, 1, 50000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 270000, '', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(39, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Atu-atu', 'Nambrani', 'Nambrani', 'Jl. H.M.Safri RT. 01 RW. 01 Desa Atu-Atu', '85251144921', '6301032109680001', '6301031612055294', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 300000, 'Tidak Ada', '', 'Ada', 3160000, '', '> 8 m2', 'Kayu', 'Kayu', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(40, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'A. Kursam', 'A. Kursam', 'Jl. Samudra RT. 011 RW. 004', '82149314461', '6301031711590004', '6301031905090004', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 200000, 'Tidak Ada', '', 'Tidak Ada', 530000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', 'Ayam', 'Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(41, '06/11/19', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Didi Hartawan', 'Didi Hartawan', 'Jl Abadi Gg. Berlian RT. 003 RW. 001', '', '6301033011780008', '6301030405110009', 5, 3, 1250000, 'Miskin', 'Makmur', 'Infak', '', 'Bekerja', 'Bekerja', 1875000, 'Tidak Ada', '', 'Tidak Ada', 50000, '> 9 m2', '6-8 m2', 'Bambu/Triplek', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'PDAM', '', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(42, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Atu-atu', 'Basar', 'Lidiawati', 'Jl. Saka Permai RT. 09 RW. 01 Ds. Atu-Atu', '82296248821', '6301104405840003', '6301102012160001', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Ada', 730000, '> 9 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sungai', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(43, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Sarang Halang', 'Achmat Sapri', 'Achmat Sapri', 'Jl. Ambawang RT. 004 RW. 003', '', '6301031801740001', '6301030308070002', 5, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2200000, 'Tidak Ada', '', 'Tidak Ada', 750000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', 'Beli', 'Ayam', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 5, 5, 5, '', '', '', '', 'Layak', ''),
(44, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Arbainah', 'Arbainah', 'Jl. Beramban Raya RT. 021 RW. 007', '85787039730', '6301034402820002', '6301030702190012', 8, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 300000, '< 5 m2', '> 8 m2', 'Papan', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(45, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Karang Taruna', 'Muhammad Erwinsyah', 'Muhammad Erwinsyah', 'Jl. Telaga Daim RT. 010 RW. 001 Karang Taruna', '81345097784', '6301032106940002', '6301032706160011', 4, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 40000, 'Tidak Ada', '', 'Tidak Ada', 270000, '< 5 m2', '> 8 m2', 'Kalsiboard', 'Kayu', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', '', '', '', 'Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(46, '10/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Atu-atu', 'Bibit Wijianto', 'Bibit Wijianto', 'Jl. Lingkar Komp. Sinar Atu-atu', '82150069449', '6301031711790009', '', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2700000, 'Tidak Ada', '', 'Tidak Ada', 2310000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(47, '02/05/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Angsau', 'Ardiansyah', 'Ardiansyah', 'Jl. Ki Hajar Dewantara Gg. Berkat Permai RT. 007 RW. 003', '', '6301060412870001', '6301061412160005', 3, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 2500000, 'Tidak Ada', '', 'Tidak Ada', 0, '< 5 m2', '> 4 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Layak', 'Tidak Layak', 'Layak', 'Layak', 'Layak', ''),
(48, '02/05/23', 'Kalimantan Selatan/Tanah Laut', '', '', 'Rachmad Dhany', 'Rachmad Dhany', 'Gg. Syarif Husin RT. 16 RW. 05', '', '6301032508770001', '6301031603090012', 3, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 450000, '< 5 m2', '', '', '', '', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(49, '29/04/23', 'Kalimantan Selatan/Tanah Laut', '', '', 'Sahidul', 'Sahidul', 'Jl. Beramban Raya RT. 025 RW. 007', '85349965989', '6301030202720007', '6301033110054270', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 2250000, 'Tidak Ada', '', 'Ada', 245000, '> 9 m2', '> 8 m2', 'Papan', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(50, '29/04/23', 'Kalimantan Selatan/Tanah Laut', '', '', 'Santi Marlina', 'Santi Marlina', 'Jl . Sawahan RT. 005 RW. 007', '82251519952', '6301035205750005', '6301030301220002', 1, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 130000, '> 9 m2', '> 8 m2', 'Plester', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(51, '29/04/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Muhammad', 'Muhammad', 'Jl. Beramban Raya RT. 026 RW. 007', '', '6301031711730001', '6301030201065850', 4, 0, 750000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 400000, '5-7 m2', '6-8 m2', 'Papan', 'Plester', 'Genteng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', 'Warisan/Hibah', '', 'Beli', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', '', '', '', 'Layak', ''),
(52, '29/04/23', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'ABD Rahman', 'ABD Rahman', 'Jl. Matah II RT. 07B RW. 002', '', '6301030209790002', '6301031704120001', 7, 1, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(53, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Rahmani', 'Rahmani', 'Benua Lawas RT. 010 RW. 002', '', '6301010708840003', '6301011603120001', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 1120000, '< 5 m2', '6-8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', 'Roda 2', 'Beli', 'Ayam', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(54, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Riyan Sahruji', 'Riyan Sahruji', 'Jl. Raya Takisung RT. 010 RW. 002', '', '6301010503930002', '6301012501180006', 3, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 1950000, 'Tidak Ada', '', 'Tidak Ada', 1300000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(55, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Misrani', 'Misrani', 'Benua Lawas RT. 009 RW. 002', '', '6301010507850004', '6301011203120009', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Bekerja', 1800000, 'Tidak Ada', '', 'Ada', 467000, '< 5 m2', '> 8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(56, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Tulus Wahyudi', 'Tulus Wahyudi', 'Jl. Sentosa RT. 001 RW. 002', '', '6301011702800001', '6301012112090003', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Bekerja', 4800000, 'Ada', 'Tabungan', 'Ada', 1755000, '5-7 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', 'Kebun Karet', 'Beli', 'Roda 2', 'Beli', 'Sapi', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', '', '', '', 'Tidak Layak', ''),
(57, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Fajar Wibowo', 'Fajar Wibowo', 'Jl. Raya Takisung Banua Lawas RT. 002 RW. 002', '', '6301070802910001', '6301011909160007', 4, 1, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 2500000, 'Ada', 'Tabungan', 'Ada', 450000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', 'Beli', '10 borong', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(58, '', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Tarsono', 'Tarsono', 'Kebun Kopi Desa Telaga Langsat RT. 013 RT. 004', '', '6301010311780002', '6301010802110005', 3, 0, 0, '', '', '', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 1770000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Tidak Layak', ''),
(59, '03 November 2021', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Murahman', 'Murahman', 'Jl. Maga I Gg. Melati RT.012', '81344374416', '6301030405650006', '6301033110180002', 3, 0, 0, '', '', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(60, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Sameolla', 'Sameolla', 'Jl. Raya Telaga Langsat RT. 002 RW. 001', '', '6301011201860001', '6301010111130001', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 2100000, 'Tidak Ada', '', 'Ada', 800000, '5-7 m2', '4-5 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', '', '', 'Sapi', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(61, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Halimah', 'Halimah', 'Telaga Langsat RT. 002/001', '', '6301015012840002', '6301011010170002', 2, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 400000, 'Tidak Ada', '', 'Ada', 360000, '> 9 m2', '> 8 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '900 kwh', '', '', '', 'Roda 2', '', '', 'TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(62, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Ali Mahfuz', 'Ali Mahfuz', 'Tanah Rata RT. 012 RW. 003', '', '6301010604750002', '6,30101E+15', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 1800000, 'Tidak Ada', '', 'Tidak Ada', 300000, '5-7 m2', '6-8 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'WC Umum', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(63, '15 Maret 2021', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Ranggang', 'Kampiono', 'Kampiono', 'Ranggang RT. 005 RW. 002', '', '6301010507810007', '6301010105120008', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(64, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Salasiah', 'Salasiah', 'Telaga Langsat RT. 001', '', '6301017112870001', '6301011601230003', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 12500, 'Tidak Ada', '', 'Ada', 98000, '7-9 m2', '> 8 m2', 'Bambu/Triplek', '', '', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(66, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Budi Mursita', 'Budi Mursita', 'Telaga Langsat RT. 003/001', '', '6301010710640001', '6301010209120613', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 650000, 'Tidak Ada', '', 'Ada', 215000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', 'Beli', '10 borong', '', 'Roda 2', '', '', 'TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(67, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Telaga Langsat', 'Mahrita', 'Mahrita', 'Jl. Cempedak RT. 004/001', '', '6301015505770004', '6301010208100007', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 1000000, 'Tidak Ada', '', 'Ada', 400000, '5-7 m2', '4-5 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Pamsimas', '900 kwh', '', '', '', 'Roda 2', '', '', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(68, '28 Mei 2018', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Suriansyah', 'Suriansyah', 'Jl. Raya Takisung RT. 003/001', '', '6301011307700002', '6301010808080001', 5, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 1600000, 'Tidak Ada', '', 'Tidak Ada', 200000, '< 5 m2', '6-8 m2', 'Kayu', 'Panggung', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(69, '07 Maret 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Batilai', 'Sukiran', 'Sukiran', 'Ds. Batilai RT. 002 RW. 000', '', '6301011110690002', '6301012812110002', 2, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 280000, '> 9 m2', '> 8 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'TV', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(70, '07 November 2022', 'Kalimantan Selatan/Tanah Laut', 'Panyipatan', 'Kuringkit', 'Misnawati', 'AH Arkoni', 'Kuringkit RT. 001 RW. 001', '', '6305055407870002', '6301062501170006', 0, 0, 0, 'Miskin', 'Makmur', 'Infak/Sedekah', 'Jualan mainan', 'Tidak Bekerja', 'Tidak Bekerja', 600000, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(71, '26 November', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Gunung Makmur', 'Norhadi Purwanto', 'Norhadi Purwanto', 'Jl Lambung Mangkurat RT. 015 RW. 000', '85349935352', '6301032204740001', '6301032210080006', 0, 0, 1500000, 'Miskin', 'Makmur', 'Infak/Sedekah', 'Tani', 'Tidak Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(72, '02 November 2023', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Angsau', 'Muhammad Husin', 'Muhammad Husin', 'Jl. Mufakat RT.10 RW.04', '87735014834', '6301101012950002', '6301101508170003', 4, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak', 'Buruh tani', 'Bekerja', 'Bekerja', 5400000, 'Ada', 'Tabungan', 'Tidak Ada', 1310000, '< 5 m2', '', 'Bambu/Triplek', 'Panggung', 'Genteng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '450 kwh', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi bahwa yang bersangkutan bekerja sebagai pendulang emas dan sang istri bekerja/berjualan makanan dan minuman di dekat sekolah. Beliau memiliki 2 orang anak dan salah satu bersekolah SD. Sehari hari sang istri PP dari Angsau ke Bajuin untuk berjualan.'),
(73, '07 November 2022', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Ahmad Yani', 'Ahmad Yani', 'Jl. Sawahan RT. 025 RW. 007', '81521678610', '6301030202940009', '6301031606200001', 1, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 50000, 'Tidak Ada', '', 'Tidak Ada', 610000, '5-7 m2', '', 'Kayu', 'Panggung', 'Sirap', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi bahwa yang bersangkutan berjualan sepatu, sendal, kaos, dll, (masih berjualan). Sehari hari jualan di simpang 3 TK Waladun Sholeh.'),
(74, '07 November 2022', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Angsau', 'S. Herman Efendi', 'S. Herman Efendi', 'Jl. Beringin RT. 02A RW. 001', '81254042270', '6301072509750001', '6301032401190002', 7, 1, 750000, 'Miskin', 'Modal (usaha)', 'Infak/Sedekah', 'Suami : buruh tukang, istri : berjualan nasi', 'Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Tidak Ada', 2015000, '5-7 m2', '4-5 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau berjualan nasi untung yang beliau peroleh Rp 30.000/hari tidak menentu. Rumah yang beliau tempati mengontrak Rp. 500.000/bulan. Dari hasil verifikasi dengan mustahik beliau dibantu sebesar Rp 1.000.000. (Domisili : Desa Sungai Jelai RT. 005 RW. 002, Kec. '),
(75, '01 Februari 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Sugit Parianto', 'Sugit Parianto', 'Jl. Raya Takisung RT. 009 RW. 002', '', '6301012512810001', '6301011307100001', 5, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Tukang', 'Bekerja', 'Tidak Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 950000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau sebagai tukang dengan pendapatan yang tidak menentu. Anak beliau bekerja sebagai penjual pentol goreng keliling. Penghasilan lainnya bagi hasil sawah dengan panen 2x setahun. '),
(76, '01 Februari 2023', 'Kalimantan Selatan/Tanah Laut', 'Takisung', 'Banua Lawas', 'Mahmudah', 'Mahmudah', 'Jl. Raya Takisung RT. 011 RW. 000', '', '6301016403740001', '6301010409180002', 5, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Berjualan nasi', 'Tidak Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Tidak Ada', 595000, '5-7 m2', '6-8 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau seorang janda, beliau bekerja berjualan nasi setiap pagi, beliau mempunyai 4 orang anak yang masih ditanggung.'),
(77, '16 Februari 2023', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Karang Taruna', 'Muhammad Alfian', 'Muhammad Alfian', 'Jl. Matah II RT. 007 RW. 003', '82149909369', '6301030904730005', '6301031505120001', 5, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 5210000, '5-7 m2', '> 8 m2', 'Papan', 'Semen', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', 'Berdasarkan hasil verifikasi bahwa yang bersangkutan berjualan buah dipasar bersama sang istri, memiliki 4 orang anak yang masih bersekolah. Memiliki cicilan kendaraan roda 2 sebesar Rp. 1.000.000/bulan dari sewa rumah Rp. 500.000/bulan. Memiliki pengeluaran yang besar setiap bulannya. Berjualan bua'),
(78, '16 Februari 2023', 'Kalimantan Selatan/Tanah Laut', 'Pelaihari', 'Pelaihari', 'Tarsi Arifin', 'Tarsi Arifin', 'Jl. Al-Fatah RT. 027 RW. 007', '82256175468', '6301031204410003', '6301031312090051', 3, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 790000, '> 9 m2', '> 8 m2', 'Bata', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau berjualan snack dirumah, suami beliau pensiunan tentara.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_mustahik`
--
ALTER TABLE `tb_mustahik`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD CONSTRAINT `tb_desa_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
