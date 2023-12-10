-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 07.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `id_kecamatan`, `nama_desa`) VALUES
(0, 0, 'tidak diketahui'),
(1, 1, 'Pelaihari'),
(2, 1, 'Telaga'),
(3, 3, 'Takisung'),
(4, 1, 'Karang Taruna'),
(5, 2, 'Handil Bariyang Atas'),
(6, 2, 'Handil Birayang Bawah'),
(7, 1, 'Angsau'),
(8, 1, 'Bumi Jaya'),
(9, 1, 'Atu-Atu'),
(10, 1, 'Sarang Halang'),
(11, 3, 'Banua Lawas'),
(12, 3, 'Telaga Langsat'),
(13, 3, 'Ranggang'),
(14, 3, 'Batilai'),
(15, 4, 'Kuringkit'),
(16, 3, 'Gunung Makmur'),
(17, 1, 'Panggung'),
(18, 1, 'Pabahanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(0, 'tidak diketahui'),
(1, 'Pelaihari'),
(2, 'Bumi Makmur'),
(3, 'Takisung'),
(4, 'Panyipatan'),
(6, 'Bati-Bati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mustahik`
--

CREATE TABLE `tb_mustahik` (
  `no` int(11) NOT NULL,
  `tgl_regis` date DEFAULT NULL,
  `prov_kab` varchar(100) DEFAULT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
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
-- Dumping data untuk tabel `tb_mustahik`
--

INSERT INTO `tb_mustahik` (`no`, `tgl_regis`, `prov_kab`, `id_kecamatan`, `id_desa`, `nama`, `nama_kk`, `alamat`, `no_hp`, `nik`, `no_kk`, `jumlah_keluarga`, `bantuan`, `besar_bantuan`, `jenis_ashnaf`, `program_bantuan`, `sumber_dana`, `pekerjaan`, `status_pekerjaan_suami`, `status_pekerjaan_istri`, `total_pendapatan`, `simpanan`, `jenis_simpanan`, `hutang`, `total_pengeluaran`, `halaman_rumah`, `ukuran_rumah`, `dinding`, `lantai`, `atap`, `ruang_tamu`, `alat_dapur`, `mck`, `sumber_air`, `daya_listrik`, `sawah`, `luas_sawah`, `kepemilikan_kendaraan`, `jenis_kendaraan`, `ternak`, `jenis_ternak`, `elektronik`, `keluarga_beribadah`, `keluarga_jumlah_makan`, `pakaian_layak`, `sarana_kesehatan`, `siap_kerja`, `shalat`, `puasa`, `zakat`, `lingkungan_keluarga`, `kebijakan_pemerintah`, `indeks_rumah`, `kepemilikan_harta`, `pendapatan`, `indeks_kepribadian`, `rekomendasi_petugas`, `ket`) VALUES
(1, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 17, 'Darham', '', 'Jl. Melati RT. 01 RW. 01 Panggung', '83111245491', '6301031103680004', '', 0, 1, 0, 'Miskin', 'Ekonomi', '', 'Tukang Bangunan', 'Bekerja', 'Tidak Bekerja', 6000000, 'Tidak Ada', '', 'Tidak Ada', 182000, '> 9 m2', '> 8 m2', 'Bambu/Triplek', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', 'Radio/Tape/Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 5, 5, '', 'Tidak Layak', '', 'Layak', 'Layak', ''),
(2, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Hamkani', 'Hamkani', 'Jl. Pembangunan Gg. Ikhlas RT. 1 RW. 1 Kampung Adang', '85332498711', '6301032705770001', '6301032910090016', 5, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2600000, 'Tidak Ada', '', '500000', 362000, '< 5 m2', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(3, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Ernawati', '', 'Jl. Basuki Rahmat', '89691847544', '6301034904870005', '', 0, 0, 0, '', '', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', '', 'Beli', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(4, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 18, 'Sunardi', '', 'Jl. Limau Gunung RT. 1 RW.1 Pabahanan', '', '6301032605760001', '', 0, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', '140000', 870000, '', '', 'Semen', 'Plester', 'Genteng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(5, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 2, 'Fitrianor', 'Fitrianor', 'Jl. Telaga RT. 004 RW. 2', '83136489332', '6301032512890006', '6301031602120007', 4, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 400000, 'Tidak Ada', '', 'Ada', 122000, '< 5 m2', '> 8 m2', 'Papan', 'Plester', 'Genteng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(6, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 2, 'Isnawati', '', 'Jl. Bekatung RT. 2 RW. 2', '87736880690', '6301037112700005', '6301030706052340', 2, 0, 0, '', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 120000, 'Tidak Ada', '', 'Tidak Ada', 1262000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', 'Warisan/Hibah', '5 Borong', '', 'Roda 2', '', '', 'Kipas, Kulkas', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(7, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Ahmad Ramdani', 'Talmi Sani', 'Jl. Perintis 2', '81952329022', '6301032910040002', '6301032707100002', 4, 1, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Berjualan', 'Tidak Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 0, '< 5 m2', '> 8 m2', 'Papan', 'Keramik', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(8, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Subandi', 'Subandi', 'Jl. Perintis Tengah RT. 29 RW. 8', '081348181627/081349572929', '6301032904580001', '6301030404070012', 5, 0, 0, '', '', '', '', 'Bekerja', 'Tidak Bekerja', 600000, 'Tidak Ada', '', 'Ada hutang PIP', 114000, '', '', '', '', '', 'Tidak Ada', 'Kompor Gas', '', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(9, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Muhammad Hamdi', '', 'Jl. Berkat Permai RT. 4 RW. 1', '85348459435', '6301032406700001', '', 0, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 350000, '', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(10, '2023-06-03', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Mariani', '', 'Jl. Raya Takisung', '87818339285', '', '', 0, 0, 0, 'Miskin', 'Ekonomi', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(11, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Mariatul Kiftyah', '', 'Jl. Basuki Rahmat RT. 26 RW. 006', '83829236286', '6301036403820008', '', 7, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 2000000, 'Tidak Ada', '', 'Ada', 0, '', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(12, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Gutina Ariyani', 'Gustina Ariyani', 'Al Fatah RT. 27 RW. 7', '83134094046', '6301037108930004', '6301032910180001', 3, 1, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 132000, '7-9 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(13, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 1, 4, 'Yulia Anggraini', 'Yulia Anggraini', 'KOMP. ROEMAH LEGENDA, JL. AL FATAH MATAH II NO. 10E RT. 007/RW. 003', '', '6301036606890004', '6301032303200009', 3, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 5000000, 'Tidak Ada', '', 'Ada', 1970000, '', '', '', '', '', '', '', '', '', '', '', '', 'Warisan/Hibah', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(14, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 2, 5, 'Muhammmad Yusni', 'Muhammmad Yusni', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301111303830001', '6301110909090015', 4, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 190000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(15, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 2, 5, 'Husni', 'Husni', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301051906810003', '6301110802190003', 1, 0, 0, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 270000, '< 5 m2', '> 8 m2', 'Semen', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'PDAM', '900 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(16, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 2, 5, 'Arbain', 'Arbain', 'DS. HANDIL BIRAYANG ATAS RT.005/RW.003, KEC. BUMI MAKMUR', '', '6301041004760001', '6301040201061481', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 50000, 'Tidak Ada', '', 'Ada', 244000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '450 kwh', '', '', '', 'Roda 2', 'Beli', 'Itik', 'Radio/Tape/Kipas, Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', ''),
(17, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Adriyani', 'Adriyani', 'Jl. Raya Takisung RT. 13', '83143888412', '6301011203900003', '6301011305120001', 4, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Nelayan/Perikanan', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(18, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 0, 0, '', 'Aniah', '', '81349933122', '', '', 0, 0, 2000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 5500000, 'Tidak Ada', '', 'Tidak Ada', 1000000, '', '', '', '', '', '', '', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', 'Roda 2', '', '', 'Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(19, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Rajudin', 'Rajudin', 'Takisung RT. 004 RW.002', '', '6301011010720001', '6301012805073312', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(20, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Mulyadi Hartono', 'Mulyadi Hartono', 'Jl. Raya Takisung RT. 003 RW. 002', '', '6301010404830009', '6301011710110006', 4, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 150000, 'Ada', '', 'Tidak Ada', 247000, '', '', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', '', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(21, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Juhainah', 'Juhainah', 'Jl. Raya Takisung RT. 007 RW. 003', '', '6301014305740001', '6301012710220001', 2, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 112000, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(22, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Fitriani', 'Fitriani', 'Jl. Raya Takisung RT. 007 RW. 003', '', '6301010208810001', '6301012411140001', 5, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', '6000000', 254000, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', '', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(23, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Wahyudi', 'Wahyudi', 'Jl. Keramat RT. 008 RW. 003', '', '6301010107860065', '6301012210210001', 1, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', '', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(24, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 3, 'Akhmad Nawawi', 'Akhmad Nawawi', 'Jl. Suka Damai RT. 003 RW. 002, Takisung', '', '63011016033810001', '6301101312100002', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 402000, '', '', 'Bambu/Triplek', 'Semen', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(25, '2023-05-19', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Rusdi', 'Rusdi', 'Ds. Handil Birayang Bawah', '', '6301041301710001', '6301041008062874', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(26, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Abdul Gani', 'Abdul Gani', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301110101630001', '6301112203110002', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Ada', 215000, '> 9 m2', '> 8 m2', 'Kalsiboard', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '13', '', 'Roda 2', '', 'Itik 4 ekor', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(27, '2023-05-19', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Hasanah', 'Hasanah', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301115009790002', '6301110803120001', 6, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 157000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '450 kwh', '', 'Sewa', '', 'Roda 2', '', 'Itik 2 ekor', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 0, '', '', '', '', 'Layak', ''),
(28, '2023-05-19', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Sabariah', 'Sabariah', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301114509680001', '6301110802120002', 2, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Ada', 'Emas', 'Tidak Ada', 170000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '18 borong', '', 'Roda 2', '', 'Itik 2 ekor', 'Radio/Tape/Kipas, Tv, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(29, '2023-05-19', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Iman', 'Iman', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301040908910001', '6301112611190002', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', '', 'Tidak Bekerja', 'Bekerja', 750000, 'Tidak Ada', '', 'Tidak Ada', 95000, '> 9 m2', '> 8 m2', 'Kalsiboard', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '', '', '', '', 'Roda 2', '', 'Itik', 'Radio/Tape/Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(30, '2023-05-19', 'Kalimantan Selatan/Tanah Laut', 2, 6, 'Syakeran', 'Syakeran', 'Handil Birayang Bawah RT. 002 RW. 001', '', '6301041208610001', '6301110802120001', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Zakat', 'Petani', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 720000, '> 9 m2', '> 8 m2', 'Papan', 'Panggung', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '13 borong', '', 'Roda 2', '', 'Itik', 'Radio/Tape/Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(31, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Khalifah Shaleh', 'Khalifah Shaleh', 'Jl. Lok Serapang RT. 023 RW. 008', '', '6301030810010004', '6301031612210004', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(32, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Masturi', 'Masturi', 'Jl. Sawahan 1 Gg. Budi RT. 019 RW. 006', '', '6301030501630002', '6301030307120402', 4, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 150000, 'Tidak Ada', '', 'Tidak Ada', 1015000, '7-9 m2', '> 8 m2', 'Papan', 'Kayu', 'Jerami', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(33, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Muhammad Arsyad', 'Muhammad Arsyad', 'Jl. Niaga 1 Gg. Melati RT. 012 RW. 004 Kel. Pelaihari', '85251250686', '6301030107830029', '6,30103E+15', 5, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Jual Makanan', 'Bekerja', 'Tidak Bekerja', 400000, 'Tidak Ada', '', 'Ada', 800000, '> 9 m2', '> 8 m2', 'Kayu', 'Kayu', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(34, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Fathur Rakhim', 'Fathur Rakhim', 'Jl. Sawahan No. 9 RT. 019 RW. 006 Pelaihari', '', '6301031301820001', '6301031704170006', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 765000, '', '> 8 m2', 'Kayu', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(35, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Rahmat', 'Rahmat', 'Jl. KH. Dewantara RT. 07A RW. 03 Kel. Angsau', '81340202884', '6301031505700005', '6301030212160002', 2, 0, 1500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 120000, 'Tidak Ada', '', 'Ada', 900000, '< 5 m2', '> 8 m2', 'Bata', 'Semen', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 5, 4, 0, 5, 5, '', '', '', '', 'Layak', ''),
(36, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 4, 'Lidiawati', 'Basar', 'Jl. Karang Jawa RT. 003 RW. 001', '', '6301031212710006', '6301030507110003', 1, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 50000, 'Tidak Ada', '', 'Ada', 197500, '< 5 m2', '', 'Bata', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(37, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 8, 'Rakitem', 'Rakitem', 'Jl. P.Senopati RT. 09B RW. 004 Bumi Jaya', '83862168020', '6301035806760004', '6301032012190001', 4, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 260000, 'Ada', 'Emas', 'Ada', 2305000, '7-9 m2', '> 8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(38, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 9, 'Andri Parmana', 'Andri Parmana', 'Jl. H.M.Safri RT. 02 RW. 01 Desa Atu-Atu', '81251577747', '6301032201910006', '6301030301160001', 3, 1, 50000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 270000, '', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(39, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 9, 'Nambrani', 'Nambrani', 'Jl. H.M.Safri RT. 01 RW. 01 Desa Atu-Atu', '85251144921', '6301032109680001', '6301031612055294', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 300000, 'Tidak Ada', '', 'Ada', 3160000, '', '> 8 m2', 'Kayu', 'Kayu', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(40, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'A. Kursam', 'A. Kursam', 'Jl. Samudra RT. 011 RW. 004', '82149314461', '6301031711590004', '6301031905090004', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 200000, 'Tidak Ada', '', 'Tidak Ada', 530000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', 'Ayam', 'Kulkas, Mesin Cuci', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(41, '2019-11-06', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Didi Hartawan', 'Didi Hartawan', 'Jl Abadi Gg. Berlian RT. 003 RW. 001', '', '6301033011780008', '6301030405110009', 5, 3, 1250000, 'Miskin', 'Makmur', 'Infak', '', 'Bekerja', 'Bekerja', 1875000, 'Tidak Ada', '', 'Tidak Ada', 50000, '> 9 m2', '6-8 m2', 'Bambu/Triplek', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'PDAM', '', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(42, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 9, 'Basar', 'Lidiawati', 'Jl. Saka Permai RT. 09 RW. 01 Ds. Atu-Atu', '82296248821', '6301104405840003', '6301102012160001', 4, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Ada', 730000, '> 9 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', '', 'Sungai', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(43, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 10, 'Achmat Sapri', 'Achmat Sapri', 'Jl. Ambawang RT. 004 RW. 003', '', '6301031801740001', '6301030308070002', 5, 0, 500000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2200000, 'Tidak Ada', '', 'Tidak Ada', 750000, '< 5 m2', '> 8 m2', 'Papan', 'Papan', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', 'Beli', 'Ayam', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 5, 5, 5, '', '', '', '', 'Layak', ''),
(44, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Arbainah', 'Arbainah', 'Jl. Beramban Raya RT. 021 RW. 007', '85787039730', '6301034402820002', '6301030702190012', 8, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Tidak Bekerja', 'Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 300000, '< 5 m2', '> 8 m2', 'Papan', 'Plester', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Tv', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(45, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 4, 'Muhammad Erwinsyah', 'Muhammad Erwinsyah', 'Jl. Telaga Daim RT. 010 RW. 001 Karang Taruna', '81345097784', '6301032106940002', '6301032706160011', 4, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 40000, 'Tidak Ada', '', 'Tidak Ada', 270000, '< 5 m2', '> 8 m2', 'Kalsiboard', 'Kayu', 'Asbes/Seng', '', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', '', '', '', 'Kipas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(46, '2023-05-10', 'Kalimantan Selatan/Tanah Laut', 1, 9, 'Bibit Wijianto', 'Bibit Wijianto', 'Jl. Lingkar Komp. Sinar Atu-atu', '82150069449', '6301031711790009', '', 3, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2700000, 'Tidak Ada', '', 'Tidak Ada', 2310000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Kayu', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(47, '2023-05-02', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Ardiansyah', 'Ardiansyah', 'Jl. Ki Hajar Dewantara Gg. Berkat Permai RT. 007 RW. 003', '', '6301060412870001', '6301061412160005', 3, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 2500000, 'Tidak Ada', '', 'Tidak Ada', 0, '< 5 m2', '> 4 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 0, 0, 0, 0, 0, 'Layak', 'Tidak Layak', 'Layak', 'Layak', 'Layak', ''),
(48, '2023-05-02', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Rachmad Dhany', 'Rachmad Dhany', 'Gg. Syarif Husin RT. 16 RW. 05', '', '6301032508770001', '6301031603090012', 3, 0, 0, 'Miskin', '', '', '', 'Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 450000, '< 5 m2', '', '', '', '', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(49, '2023-04-29', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Sahidul', 'Sahidul', 'Jl. Beramban Raya RT. 025 RW. 007', '85349965989', '6301030202720007', '6301033110054270', 3, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 2250000, 'Tidak Ada', '', 'Ada', 245000, '> 9 m2', '> 8 m2', 'Papan', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', 'Roda 2', '', '', 'Radio/Tape/Kipas, Tv, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(50, '2023-04-29', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Santi Marlina', 'Santi Marlina', 'Jl . Sawahan RT. 005 RW. 007', '82251519952', '6301035205750005', '6301030301220002', 1, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Tidak Bekerja', 100000, 'Tidak Ada', '', 'Tidak Ada', 130000, '> 9 m2', '> 8 m2', 'Plester', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', '', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(51, '2023-04-29', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Muhammad', 'Muhammad', 'Jl. Beramban Raya RT. 026 RW. 007', '', '6301031711730001', '6301030201065850', 4, 0, 750000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 400000, '5-7 m2', '6-8 m2', 'Papan', 'Plester', 'Genteng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', 'Warisan/Hibah', '', 'Beli', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', '', '', '', 'Layak', ''),
(52, '2023-04-29', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'ABD Rahman', 'ABD Rahman', 'Jl. Matah II RT. 07B RW. 002', '', '6301030209790002', '6301031704120001', 7, 1, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(53, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Rahmani', 'Rahmani', 'Benua Lawas RT. 010 RW. 002', '', '6301010708840003', '6301011603120001', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 1120000, '< 5 m2', '6-8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', 'Roda 2', 'Beli', 'Ayam', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(54, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Riyan Sahruji', 'Riyan Sahruji', 'Jl. Raya Takisung RT. 010 RW. 002', '', '6301010503930002', '6301012501180006', 3, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 1950000, 'Tidak Ada', '', 'Tidak Ada', 1300000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(55, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Misrani', 'Misrani', 'Benua Lawas RT. 009 RW. 002', '', '6301010507850004', '6301011203120009', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Bekerja', 1800000, 'Tidak Ada', '', 'Ada', 467000, '< 5 m2', '> 8 m2', 'Bata', 'Plester', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(56, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Tulus Wahyudi', 'Tulus Wahyudi', 'Jl. Sentosa RT. 001 RW. 002', '', '6301011702800001', '6301012112090003', 4, 0, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Bekerja', 4800000, 'Ada', 'Tabungan', 'Ada', 1755000, '5-7 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Sofa', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '450 kwh', '', 'Kebun Karet', 'Beli', 'Roda 2', 'Beli', 'Sapi', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', '', '', '', 'Tidak Layak', ''),
(57, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Fajar Wibowo', 'Fajar Wibowo', 'Jl. Raya Takisung Banua Lawas RT. 002 RW. 002', '', '6301070802910001', '6301011909160007', 4, 1, 0, '', 'Ekonomi', '', '', 'Bekerja', 'Tidak Bekerja', 2500000, 'Ada', 'Tabungan', 'Ada', 450000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', 'Beli', '10 borong', 'Beli', 'Roda 2', '', '', 'Kipas, Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', 'Tidak Layak', ''),
(58, '0000-00-00', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Tarsono', 'Tarsono', 'Kebun Kopi Desa Telaga Langsat RT. 013 RT. 004', '', '6301010311780002', '6301010802110005', 3, 0, 0, '', '', '', '', 'Bekerja', 'Tidak Bekerja', 1000000, 'Tidak Ada', '', 'Tidak Ada', 1770000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Asbes/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', '', 'Roda 2', '', '', 'Tv, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Tidak Layak', ''),
(59, '2021-11-03', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Murahman', 'Murahman', 'Jl. Maga I Gg. Melati RT.012', '81344374416', '6301030405650006', '6301033110180002', 3, 0, 0, '', '', '', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(60, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Sameolla', 'Sameolla', 'Jl. Raya Telaga Langsat RT. 002 RW. 001', '', '6301011201860001', '6301010111130001', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 2100000, 'Tidak Ada', '', 'Ada', 800000, '5-7 m2', '4-5 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', '', '', '', 'Sapi', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(61, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Halimah', 'Halimah', 'Telaga Langsat RT. 002/001', '', '6301015012840002', '6301011010170002', 2, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 400000, 'Tidak Ada', '', 'Ada', 360000, '> 9 m2', '> 8 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Luar', 'PDAM', '900 kwh', '', '', '', 'Roda 2', '', '', 'TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', ''),
(62, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Ali Mahfuz', 'Ali Mahfuz', 'Tanah Rata RT. 012 RW. 003', '', '6301010604750002', '6,30101E+15', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 1800000, 'Tidak Ada', '', 'Tidak Ada', 300000, '5-7 m2', '6-8 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'WC Umum', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(63, '2021-03-15', 'Kalimantan Selatan/Tanah Laut', 3, 13, 'Kampiono', 'Kampiono', 'Ranggang RT. 005 RW. 002', '', '6301010507810007', '6301010105120008', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 0, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'Layak', ''),
(64, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Salasiah', 'Salasiah', 'Telaga Langsat RT. 001', '', '6301017112870001', '6301011601230003', 3, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 12500, 'Tidak Ada', '', 'Ada', 98000, '7-9 m2', '> 8 m2', 'Bambu/Triplek', '', '', 'Lesehan', 'Kompor Gas', 'Berbagi Pakai', 'PDAM', '450 kwh', '', '', '', 'Roda 2', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(66, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Budi Mursita', 'Budi Mursita', 'Telaga Langsat RT. 003/001', '', '6301010710640001', '6301010209120613', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 650000, 'Tidak Ada', '', 'Ada', 215000, '7-9 m2', '> 8 m2', 'Bata', 'Keramik', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', 'Beli', '10 borong', '', 'Roda 2', '', '', 'TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(67, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 12, 'Mahrita', 'Mahrita', 'Jl. Cempedak RT. 004/001', '', '6301015505770004', '6301010208100007', 4, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Bekerja', 1000000, 'Tidak Ada', '', 'Ada', 400000, '5-7 m2', '4-5 m2', 'Bambu/Triplek', 'Plester', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Dalam', 'Pamsimas', '900 kwh', '', '', '', 'Roda 2', '', '', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(68, '2018-05-28', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Suriansyah', 'Suriansyah', 'Jl. Raya Takisung RT. 003/001', '', '6301011307700002', '6301010808080001', 5, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Bekerja', 1600000, 'Tidak Ada', '', 'Tidak Ada', 200000, '< 5 m2', '6-8 m2', 'Kayu', 'Panggung', 'Abses/Seng', 'Tidak Ada', 'Kompor Gas', 'Sendiri Di Luar', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(69, '2023-03-07', 'Kalimantan Selatan/Tanah Laut', 3, 14, 'Sukiran', 'Sukiran', 'Ds. Batilai RT. 002 RW. 000', '', '6301011110690002', '6301012812110002', 2, 0, 500000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 1500000, 'Tidak Ada', '', 'Tidak Ada', 280000, '> 9 m2', '> 8 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', 'Warisan/Hibah', '', '', 'Roda 2', '', '', 'TV', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(70, '2022-11-07', 'Kalimantan Selatan/Tanah Laut', 4, 15, 'Misnawati', 'AH Arkoni', 'Kuringkit RT. 001 RW. 001', '', '6305055407870002', '6301062501170006', 0, 0, 0, 'Miskin', 'Makmur', 'Infak/Sedekah', 'Jualan mainan', 'Tidak Bekerja', 'Tidak Bekerja', 600000, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(71, '2021-11-26', 'Kalimantan Selatan/Tanah Laut', 3, 16, 'Norhadi Purwanto', 'Norhadi Purwanto', 'Jl Lambung Mangkurat RT. 015 RW. 000', '85349935352', '6301032204740001', '6301032210080006', 0, 0, 1500000, 'Miskin', 'Makmur', 'Infak/Sedekah', 'Tani', 'Tidak Bekerja', 'Tidak Bekerja', 3000000, 'Tidak Ada', '', 'Tidak Ada', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, '', '', '', '', 'Layak', ''),
(72, '2023-11-02', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'Muhammad Husin', 'Muhammad Husin', 'Jl. Mufakat RT.10 RW.04', '87735014834', '6301101012950002', '6301101508170003', 4, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak', 'Buruh tani', 'Bekerja', 'Bekerja', 5400000, 'Ada', 'Tabungan', 'Tidak Ada', 1310000, '< 5 m2', '', 'Bambu/Triplek', 'Panggung', 'Genteng', 'Lesehan', 'Kompor Gas', '', 'Sumur', '450 kwh', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi bahwa yang bersangkutan bekerja sebagai pendulang emas dan sang istri bekerja/berjualan makanan dan minuman di dekat sekolah. Beliau memiliki 2 orang anak dan salah satu bersekolah SD. Sehari hari sang istri PP dari Angsau ke Bajuin untuk berjualan.'),
(73, '2022-11-07', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Ahmad Yani', 'Ahmad Yani', 'Jl. Sawahan RT. 025 RW. 007', '81521678610', '6301030202940009', '6301031606200001', 1, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak', '', 'Tidak Bekerja', 'Tidak Bekerja', 50000, 'Tidak Ada', '', 'Tidak Ada', 610000, '5-7 m2', '', 'Kayu', 'Panggung', 'Sirap', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '450 kwh', '', '', '', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi bahwa yang bersangkutan berjualan sepatu, sendal, kaos, dll, (masih berjualan). Sehari hari jualan di simpang 3 TK Waladun Sholeh.'),
(74, '2022-11-07', 'Kalimantan Selatan/Tanah Laut', 1, 7, 'S. Herman Efendi', 'S. Herman Efendi', 'Jl. Beringin RT. 02A RW. 001', '81254042270', '6301072509750001', '6301032401190002', 7, 1, 750000, 'Miskin', 'Modal (usaha)', 'Infak/Sedekah', 'Suami : buruh tukang, istri : berjualan nasi', 'Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Tidak Ada', 2015000, '5-7 m2', '4-5 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau berjualan nasi untung yang beliau peroleh Rp 30.000/hari tidak menentu. Rumah yang beliau tempati mengontrak Rp. 500.000/bulan. Dari hasil verifikasi dengan mustahik beliau dibantu sebesar Rp 1.000.000. (Domisili : Desa Sungai Jelai RT. 005 RW. 002, Kec. '),
(75, '2023-02-01', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Sugit Parianto', 'Sugit Parianto', 'Jl. Raya Takisung RT. 009 RW. 002', '', '6301012512810001', '6301011307100001', 5, 1, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Tukang', 'Bekerja', 'Tidak Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 950000, '< 5 m2', '> 8 m2', 'Bata', 'Keramik', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '450 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Tidak Layak', 'Tidak Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau sebagai tukang dengan pendapatan yang tidak menentu. Anak beliau bekerja sebagai penjual pentol goreng keliling. Penghasilan lainnya bagi hasil sawah dengan panen 2x setahun. '),
(76, '2023-02-01', 'Kalimantan Selatan/Tanah Laut', 3, 11, 'Mahmudah', 'Mahmudah', 'Jl. Raya Takisung RT. 011 RW. 000', '', '6301016403740001', '6301010409180002', 5, 0, 750000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', 'Berjualan nasi', 'Tidak Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Tidak Ada', 595000, '5-7 m2', '6-8 m2', 'Semen', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau seorang janda, beliau bekerja berjualan nasi setiap pagi, beliau mempunyai 4 orang anak yang masih ditanggung.'),
(77, '2023-02-16', 'Kalimantan Selatan/Tanah Laut', 1, 4, 'Muhammad Alfian', 'Muhammad Alfian', 'Jl. Matah II RT. 007 RW. 003', '82149909369', '6301030904730005', '6301031505120001', 5, 0, 1000000, 'Miskin', 'Ekonomi', 'Infak', '', 'Bekerja', 'Tidak Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 5210000, '5-7 m2', '> 8 m2', 'Papan', 'Semen', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'Sumur', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Radio/Tape/Kipas, Kulkas, Mesin Cuci', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Tidak Layak', 'Layak', 'Layak', 'Berdasarkan hasil verifikasi bahwa yang bersangkutan berjualan buah dipasar bersama sang istri, memiliki 4 orang anak yang masih bersekolah. Memiliki cicilan kendaraan roda 2 sebesar Rp. 1.000.000/bulan dari sewa rumah Rp. 500.000/bulan. Memiliki pengeluaran yang besar setiap bulannya. Berjualan bua'),
(78, '2023-02-16', 'Kalimantan Selatan/Tanah Laut', 1, 1, 'Tarsi Arifin', 'Tarsi Arifin', 'Jl. Al-Fatah RT. 027 RW. 007', '82256175468', '6301031204410003', '6301031312090051', 3, 1, 1000000, 'Miskin', 'Ekonomi', 'Infak/Sedekah', '', 'Bekerja', 'Bekerja', 2400000, 'Tidak Ada', '', 'Ada', 790000, '> 9 m2', '> 8 m2', 'Bata', 'Plester', 'Abses/Seng', 'Lesehan', 'Kompor Gas', 'Sendiri Di Dalam', 'PDAM', '900 kwh', '', '', 'Beli', 'Roda 2', '', '', 'Kipas, TV, Kulkas', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 4, 4, 4, 4, 4, 'Layak', 'Layak', 'Layak', 'Layak', 'Layak', 'Dari hasil verifikasi dengan mustahik beliau berjualan snack dirumah, suami beliau pensiunan tentara.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `level`, `nama_pengguna`, `profile_image`, `created_at`) VALUES
(1, 'bagus', '$2y$10$Gma6sDRfMnB2.f2KkKuplOOn23Xt4BmvrBKxCngb1zyeJ3c9nGAvi', 'Admin', 'Bagus', NULL, '2023-11-09 16:51:50'),
(4, 'alal', '$2y$10$bmD9yKRfK.ZBKg2ZhgiUWe1EGPiZqno6SfoVadT8FGjA/Tgk0eB5u', 'Admin', 'Alal Lestari', NULL, '2023-11-13 14:15:56'),
(5, 'iqbal', '$2y$10$NgK/mgY44IIbXnamVKp5GOgBxpL1CDZZFx99c9CFR77KnOO.t5WQ6', 'Admin', 'Iqbal Maulana', NULL, '2023-11-13 14:16:23'),
(6, 'admin123', '$2y$10$wRUpwhipC8hk5eyjw6.jF.ck3x8QSVya0o4r4/De5J9yDuPR1025O', 'Admin', 'Admin', NULL, '2023-11-13 15:05:07'),
(7, 'petugas', '$2y$10$NTU/9P5/PPnw1BkC1gFjK.BNAQgPv8wuLXizAnMwzNvuC12XHFUju', 'Petugas', 'Petugas ', NULL, '2023-11-13 15:07:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `tb_mustahik`
--
ALTER TABLE `tb_mustahik`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kec` (`id_kecamatan`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD CONSTRAINT `tb_desa_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mustahik`
--
ALTER TABLE `tb_mustahik`
  ADD CONSTRAINT `tb_mustahik_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mustahik_ibfk_2` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
