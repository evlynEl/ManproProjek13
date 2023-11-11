-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2023 pada 11.54
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpro13`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id` int(10) NOT NULL,
  `nama_nrp` varchar(50) DEFAULT NULL,
  `judul_skripsi` varchar(200) DEFAULT NULL,
  `konsentrasi` varchar(100) NOT NULL,
  `tanggal_sidang` datetime(6) DEFAULT NULL,
  `ruang_sidang` varchar(200) NOT NULL,
  `ketua_penguji` varchar(200) DEFAULT NULL,
  `anggota_penguji` varchar(200) DEFAULT NULL,
  `pembimbing_1` varchar(200) DEFAULT NULL,
  `pembimbing_2` varchar(200) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `nilai_akhir` int(10) DEFAULT NULL,
  `hasil_sidang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita_acara`
--

INSERT INTO `berita_acara` (`id`, `nama_nrp`, `judul_skripsi`, `konsentrasi`, `tanggal_sidang`, `ruang_sidang`, `ketua_penguji`, `anggota_penguji`, `pembimbing_1`, `pembimbing_2`, `catatan`, `nilai_akhir`, `hasil_sidang`) VALUES
(1, 'C14190008 RYAN JONATHAN SUGIHARTO', 'Project Management Mobile Application untuk meningkatkan Efisiensi dan Monitoring pegawai di PT. Indoserako Sejahtera', 'Mobile Application Development', '2023-11-22 16:00:00.000000', 'P308', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama`, `jabatan`, `jurusan`) VALUES
(1, 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Kepala Prodi', 'Informatika'),
(2, 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Sekretaris Prodi', 'Informatika'),
(3, 'YULIA, S.T., M.Kom.', 'Wakil Prodi', 'SIB'),
(4, 'LILY PUSPA DEWI, S.T., M.Kom.', 'Dosen Pembimbing Kegiatan', 'SIB'),
(5, 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Pengajar', 'Informatika'),
(6, 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Kepala Lab', 'Informatika'),
(7, 'Ir. KARTIKA GUNADI, M.T.', 'Pengajar', 'Informatika'),
(8, 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Pengajar', 'Informatika'),
(9, 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Pengajar', 'Informatika'),
(10, 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Pengajar', 'Informatika'),
(11, 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Pengajar', 'SIB'),
(12, 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Pengajar', 'DSA'),
(13, 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'Pengajar', 'SIB'),
(14, 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Pengajar', 'Infor'),
(15, 'SINGGIH MARDIANTO SOEPHOMO, S.Kom.', 'Pengajar', 'Infor'),
(16, 'RUDY ADIPRANATA, S.T, M.Eng.', 'Pengajar', 'Infor'),
(17, 'ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Pengajar', 'Infor'),
(18, 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Pengajar', 'Infor'),
(19, 'YUSAK TANOTO, S.T., M.Eng., Ph.D.', 'Pengajar', 'Infor'),
(20, 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Pengajar', 'Infor'),
(21, 'Dr.Ing. INDAR SUGIARTO, S.T., M.Sc.', 'Pengajar', 'Infor'),
(22, 'ANDRE GUNAWAN, S.Kom.', 'Pengajar', 'Infor'),
(23, 'Ir. RESMANA LIM, M.Eng.', 'Pengajar', 'Infor'),
(24, 'IVAN WIDIYANTO, S.Kom., M.MT.', 'Pengajar', 'Infor'),
(25, 'TANTI OCTAVIA, S.T., M.Eng.', 'Pengajar', 'SIB'),
(26, 'Ir. ENDANG SETYATI, M.T., DR.', 'Pengajar', 'Infor'),
(27, 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'Pengajar', 'Infor'),
(28, 'KRISNA WAHYUDI, S.Kom., M.T.', 'Pengajar', 'Infor'),
(29, 'LILIANA, S.T., M.Eng., Ph.D.', 'Pengajar', 'Infor'),
(30, 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'Pengajar', 'Infor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(10) NOT NULL,
  `tanggal_ruang` varchar(100) NOT NULL,
  `mahasiswa` varchar(200) NOT NULL,
  `team_penguji` varchar(200) NOT NULL,
  `judul_skripsi` varchar(200) NOT NULL,
  `ketua_penguji` varchar(100) NOT NULL,
  `anggota_penguji` varchar(200) NOT NULL,
  `pembimbing_1` varchar(200) NOT NULL,
  `pembimbing_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `tanggal_ruang`, `mahasiswa`, `team_penguji`, `judul_skripsi`, `ketua_penguji`, `anggota_penguji`, `pembimbing_1`, `pembimbing_2`) VALUES
(1, 'Jumat\n2 Juni 2023\n07:30\nP307', 'C14190126 ALVIN WISANA', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Sistem Informasi pada Laundry X', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', ''),
(2, 'Jumat\n2 Juni 2023\n07:30\nP306', 'C14170108 FRENDY HARIYONO', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\n91024 - Ir. RESMANA LIM, M.Eng.', 'Pembuatanpembuatan aplikasi middleware untuk monitoring proses kontrol antara plc dan Odoo ERP', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Ir. RESMANA LIM, M.Eng.'),
(3, 'Jumat\n2 Juni 2023\n10:00\nP306', 'C14180028 BINTANG ARTOMORO WINARTO', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n88004 - Ir. KARTIKA GUNADI, M.T.\n03024 - LILIANA, S.T., M.Eng., Ph.D.', 'Game untuk Memperkenalkan Museum 10 November menggunakan Unity', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Ir. KARTIKA GUNADI, M.T.', 'LILIANA, S.T., M.Eng., Ph.D.'),
(4, 'Jumat\n2 Juni 2023\n10:00\nP307', 'C14190123 RICO RONALDI', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n45404 - SINGGIH MARDIANTO SOEPHOMO, S.Kom.', 'Aplikasi Marketplace Group Buy dengan Social Commerce untuk Petani di Pedesaan dan Umat Keuskupan Surabaya', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'SINGGIH MARDIANTO SOEPHOMO, S.Kom.'),
(5, 'Jumat\n2 Juni 2023\n10:00\nP308', 'C14180127 TEDDY GHATSUNAGA', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Perancangan E-Report System Pada PT Deus Digital Transformasi Universal.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(6, 'Jumat\n2 Juni 2023\n13:00\nP307', 'C14190146 WILLIAM TANPUTRAWAN MULYONO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\n99015 - RUDY ADIPRANATA, S.T, M.Eng.', 'Sistem Absensi Mobile Menggunakan Wifi dan Bluetooth', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Ir. KARTIKA GUNADI, M.T.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'RUDY ADIPRANATA, S.T, M.Eng.'),
(7, 'Jumat\n2 Juni 2023\n13:00\nLab MM', 'C14190028 INDRA HERO', 'Ketua\nHANS JUWIANTHO, S.Kom., M.Kom.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45342 - ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Procedural Mesh Splitting untuk memecahkan masalah dalam Game Decomposition', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDHIKA EVANTIA IRAWAN, S.Kom.'),
(8, 'Senin\n5 Juni 2023\n07:30\nP307', 'C14180197 FERDINANT PANGESTU', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Aplikasi Sistem Informasi Manajemen Proyek Berbasis Website Pada PT. Sumur Batu', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', ''),
(9, 'Senin\n5 Juni 2023\n13:00\nP308', 'C14190050 JIMLEE CHRISTANTO WIDJAYA', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n04020 - YUSAK TANOTO, S.T., M.Eng., Ph.D.', 'Metode ARIMA, SARIMA, dan ARIMAX Untuk Memprediksi Temporal Hourly-Based Solar Photovoltaics Output di Jawa-Bali', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'YUSAK TANOTO, S.T., M.Eng., Ph.D.'),
(10, 'Senin\n5 Juni 2023\n13:00\nP318', 'C14190232 DIMAS RENANDA SOFYAN', 'Ketua\nYULIA, S.T., M.Kom.\nAnggota\nLILY PUSPA DEWI, S.T., M.Kom.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Aplikasi Penghubung Learning Management System Moodle dengan SIM OBE di Perguruan Tinggi X', 'YULIA, S.T., M.Kom.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', ''),
(11, 'Senin\n5 Juni 2023\n13:00\nP307', 'C14190227 JEREMY MULIAWAN MARIO', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nI GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n20004 - KRISNA WAHYUDI, S.Kom., M.T.', 'Aplikasi Prediksi Stok Barang Menggunakan Metode Arima, Holt-Winters dan Sarimax Pada Toko Best Charcoals', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'KRISNA WAHYUDI, S.Kom., M.T.'),
(12, 'Selasa\n6 Juni 2023\n07:30\nP308', 'C14190025 LUPITA SHARON KOESNADINATA', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Penerapan Googles Material Design terhadap UI/UX Programming pada Website Praskripsi Program Studi Informatika untuk Meningkatkan User Experience.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(13, 'Selasa\n6 Juni 2023\n07:30\nP307', 'C14170093 RICHARD BARAMULI ANTOLIS', 'Ketua\nYULIA, S.T., M.Kom.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Perancangan aplikasi perpustakaan Badan Pusat Statistik Parigi Moutong berbasis Web', 'YULIA, S.T., M.Kom.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.'),
(14, 'Selasa\n6 Juni 2023\n10:00\nP307', 'C14190125 LEONARDO CHRISTOFER', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Aplikasi Pendaftaran Rencana Studi (PRS) Online berbasis Microservices Pada PT X', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', ''),
(15, 'Selasa\n6 Juni 2023\n10:00\nP308', 'C14180193 JONATHAN EGBERT THENARDY', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Perancangan Dan Implementasi Sistem Administrasi Pada Toko Sinar Selatan', 'Ir. KARTIKA GUNADI, M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(16, 'Selasa\n6 Juni 2023\n10:00\nP318', 'C14190037 CHARLTON GILBERT SOEGIJANTO', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Aplikasi Mobile Pemandu Fitness Pemula untuk Memperdalam Pengetahuan tentang Fitness', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(17, 'Selasa\n6 Juni 2023\n13:00\nP318', 'C14190189 IVERSON AULDRYCH GIVEN KRYSTHIO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Sistem Kontrol Akses Ruangan Rapat Pada PT. XYZ Menggunakan Radio Frequency Identification (RFID)', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(18, 'Selasa\n6 Juni 2023\n13:00\nP308', 'C14190132 MARCELLINUS KELVIN TEDJOKUSUMO', 'Ketua\nLILY PUSPA DEWI, S.T., M.Kom.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n99036 - YULIA, S.T., M.Kom.', 'Penerapan Sistem Informasi untuk Manajemen Penjualan di PT FLS', 'LILY PUSPA DEWI, S.T., M.Kom.', 'Ir. KARTIKA GUNADI, M.T.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'YULIA, S.T., M.Kom.'),
(19, 'Rabu\n7 Juni 2023\n07:30\nP318', 'C14180016 ANDREAS KEVIN CHRISTOVIAN', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nLILIANA, S.T., M.Eng., Ph.D.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Pengembangan Game Mobile Perang Pangeran Diponegoro dengan Decision Tree dan Unity', 'Ir. KARTIKA GUNADI, M.T.', 'LILIANA, S.T., M.Eng., Ph.D.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(20, 'Rabu\n7 Juni 2023\n07:30\nP307', 'C14190020 BRYAN FERNANDO LIAUWAN', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.\n99036 - YULIA, S.T., M.Kom.', 'Sistem Personalisasi Gaya Belajar Berdasarkan Segmentasi Aktivitas Mahasiswa di Learning Management System Menggunakan Decision Tree dan Naive Bayes', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'YULIA, S.T., M.Kom.'),
(21, 'Rabu\n7 Juni 2023\n13:00\nP307', 'C14190052 HANSEL', 'Ketua\nLILY PUSPA DEWI, S.T., M.Kom.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n99015 - RUDY ADIPRANATA, S.T, M.Eng.', 'Aplikasi Payroll System untuk Karyawan pada PT BPR Dinar Pusaka menggunakan Framework Laravel', 'LILY PUSPA DEWI, S.T., M.Kom.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'RUDY ADIPRANATA, S.T, M.Eng.'),
(22, 'Rabu\n7 Juni 2023\n13:00\nP318', 'C14190058 MICHAEL ALEXANDER', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n91024 - Ir. RESMANA LIM, M.Eng.', 'Aplikasi Pengendali Smart Home Dengan Home Assistant Untuk Mendukung Save Energy melalui Demand Side Management menggunakan Particle Swarm Optimization', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Ir. RESMANA LIM, M.Eng.'),
(23, 'Kamis\n8 Juni 2023\n07:30\nP308', 'C14190008 RYAN JONATHAN SUGIHARTO', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Project Management Mobile Application untuk meningkatkan Efisiensi dan Monitoring pegawai di PT. Indoserako Sejahtera', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(24, 'Kamis\n8 Juni 2023\n07:30\nP307', 'C14180079 ALBERT BAYU SANI', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nLILIANA, S.T., M.Eng., Ph.D.\nPembimbing\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Sistem Peminjaman dan Penilaian Buku Perpustakaan Universitas Kristen Petra', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(25, 'Kamis\n8 Juni 2023\n08:30\nP318', '26416001 MARCELLINO DARMAWAN', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Aplikasi penentuan menu makanan sehat menggunakan metode Fuzzy Genetic Algorithm berbasis Android.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Ketua AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', ''),
(26, 'Kamis\n8 Juni 2023\n10:00\nP308', 'C14190103 ANDY', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nPembimbing\n01043 - SILVIA ROSTIANINGSIH, S.Kom., M.MT.\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Aplikasi Sentralisasi dan Distribusi Informasi dalam Lingkungan Internal Organisasi', 'Ir. KARTIKA GUNADI, M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.'),
(27, 'Kamis\n8 Juni 2023\n10:00\nP318', 'C14190168 MICHAEL WONG', 'Ketua\nLILIANA, S.T., M.Eng., Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Aplikasi Petra Freelancer: Sistem Layanan Penyedia Jasa Freelance Universitas Kristen Petra', 'LILIANA, S.T., M.Eng., Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.'),
(28, 'Kamis\n8 Juni 2023\n10:00\nP307', 'C14190145 LEVINA CHARIN', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Aplikasi Transaksi Depot Makanan XYZ dengan Sistem Omnichannel Berintegrasi menggunakan Go-Biz API', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(29, 'Kamis\n8 Juni 2023\n13:00\nLab MM', 'C14190114 JOHANSEN JUNIAS SUTANTO', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45342 - ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Optimalisasi Interactive Connectivity Establishment untuk Multiplayer Online Peer-to-Peer pada Aplikasi Metaverse', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Ir. KARTIKA GUNADI, M.T.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDHIKA EVANTIA IRAWAN, S.Kom.'),
(30, 'Kamis\n8 Juni 2023\n13:00\nP308', 'C14190156 KAINEN MADISON IRTANTO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n02002 - Dr.Ing. INDAR SUGIARTO, S.T., M.Sc.', 'Peningkatan Sistem Tugas Akhir di Prodi Teknik Elektro Universitas Kristen Petra.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Dr.Ing. INDAR SUGIARTO, S.T., M.Sc.'),
(31, 'Jumat\n9 Juni 2023\n07:30\nP308', 'C14190080 KEVIN NATAN ARIYANTO', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n01043 - SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Aplikasi Manajemen Proyek untuk Perusahaan Konstruksi X Berbasis Web', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Ir. KARTIKA GUNADI, M.T.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.'),
(32, 'Jumat\n9 Juni 2023\n07:30\nP307', 'C14190135 GREGORIUS TIFANICO SOETANTO', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n02002 - Dr.Ing. INDAR SUGIARTO, S.T., M.Sc.', 'KLASIFIKASI INTONASI DAN KECEPATAN BERBICARA MENGGUNAKAN SPEKTOGRAM DAN DEEP LEARNING', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Dr.Ing. INDAR SUGIARTO, S.T., M.Sc.'),
(33, 'Jumat\n9 Juni 2023\n07:30\nP318', 'C14180018 GERALDINO DHARMAWAN', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Sistem Monitoring dan Sinkronisasi Stok Inventaris Menggunakan Open API untuk Pengelolaan E-commerce', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', ''),
(34, 'Jumat\n9 Juni 2023\n10:00\nP308', 'C14190089 FELICIA MELODY SINJAYA', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nYULIA, S.T., M.Kom.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n45297 - ANDRE GUNAWAN, S.Kom.', 'Aplikasi Multi-level dan Multidimensional Market Basket Analysis dengan metode FP-Growth untuk membantu pengambilan keputusan bisnis pada supermarket XYZ.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'YULIA, S.T., M.Kom.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'ANDRE GUNAWAN, S.Kom.'),
(35, 'Jumat\n9 Juni 2023\n10:00\nLab JK', 'C14180103 JANITRA RHESA', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\n91024 - Ir. RESMANA LIM, M.Eng.', 'Sistem smart compartment penerimaan barang berbasis IoT dengan menggunakan Raspberry pi', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Ir. RESMANA LIM, M.Eng.'),
(36, 'Jumat\n9 Juni 2023\n10:00\nP318', 'C14190047 JOSEPH CLIO LIMANTARA', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Prediksi Arah Pergerakan Harga Saham Menggunakan Metode Graph Neural Network (GNN)', 'Ir. KARTIKA GUNADI, M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.'),
(37, 'Jumat\n9 Juni 2023\n13:00\nP308', 'C14190034 NICHOLAS SEBASTIAN VERON', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Pengenalan Aktivitas Manusia menggunakan Motion Vector dan CNN-LSTM', 'Ir. KARTIKA GUNADI, M.T.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(38, 'Jumat\n9 Juni 2023\n13:00\nP307', 'C14190205 MICHAEL CHRISTIAN LIE', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Sistem pendukung keputusan pemberian beasiswa menggunakan metode WASPAS di universitas X', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.'),
(39, 'Senin\n12 Juni 2023\n07:30\nLab MM', 'C14190116 JEREMY RYANTO', 'Ketua\nHANS JUWIANTHO, S.Kom., M.Kom.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45342 - ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Procedural Content Generator untuk Menghasilkan Maze yang Memiliki Algoritma Jalan Keluar yang Dinamis pada Game menggunakan Algoritma Recursive Backtracking, Penghancuran Dinding Maze, dan Penempatan', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDHIKA EVANTIA IRAWAN, S.Kom.'),
(40, 'Senin\n12 Juni 2023\n07:30\nP307', 'C14190138 DJIOE JAMES ALBERTO CIU', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Nunut : Aplikasi Rideshare untuk Civitas Universitas Kristen Petra untuk Mengatasi Mahalnya Bahan Bakar dan Hambatan Transportasi', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Ir. KARTIKA GUNADI, M.T.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.'),
(41, 'Senin\n12 Juni 2023\n08:00\nP318', 'C14180049 STEVEN ADHIWISESA SUHARSONO', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n01043 - SILVIA ROSTIANINGSIH, S.Kom., M.MT.\n92008 - Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc.', 'Sistem Chatbot dengan String Matching Pada Petra Career Centre', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc.'),
(42, 'Senin\n12 Juni 2023\n13:00\nlab MM', 'C14190115 JUSTIN JONATHAN', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45342 - ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Visualisasi Knapsack Problem dan Travelling Salesman Problem pada Computational Thinking dalam bentuk Game dengan balancing Artificial Intelligence.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDHIKA EVANTIA IRAWAN, S.Kom.'),
(43, 'Senin\n12 Juni 2023\n13:00\nP318', 'C14190140 MICHAEL FRANCESCO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Mendeteksi Hate Speech pada aplikasi media sosial Woilo dengan menggunakan penerapan metode Lexicon Based dan Machine Learning', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(44, 'Senin\n12 Juni 2023\n13:00\nP308', 'C14190173 ALESANDRO ANGGREK', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n14007 - IVAN WIDIYANTO, S.Kom., M.MT.', 'Aplikasi Mobile E-Modul dan Presensi QR Code untuk Kegiatan Welcome Grateful Generation', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'YULIA, S.T., M.Kom.', 'IVAN WIDIYANTO, S.Kom., M.MT.'),
(45, 'Selasa\n13 Juni 2023\n07:30\nP308', 'C14190185 RICHSON SEDJIE', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Penerapan Teknologi BLE Beacon pada Aplikasi Presensi Karyawan di PT. X berbasis Mobile', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(46, 'Selasa\n13 Juni 2023\n07:30\nP307', 'C14190134 ALBERTUS FARREL JUANDA', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Pengujian performa Metode Sistem Rekomendasi Terbaik Untuk merekomendasikan produk menggunakan MRR dan MAP@K', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.'),
(47, 'Selasa\n13 Juni 2023\n07:30\nP318', 'C14190015 LINDA TAMARA CHANDRA', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n98057 - TANTI OCTAVIA, S.T., M.Eng.', 'Aplikasi Metode Random Forest dan Recency, Frequency, Monetary Value untuk Klasifikasi Pendonor Darah di PMI Surabaya', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Ir. KARTIKA GUNADI, M.T.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'TANTI OCTAVIA, S.T., M.Eng.'),
(48, 'Selasa\n13 Juni 2023\n10:00\nP307', 'C14190187 JOSEPH ANGELUS LUKIANTO', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n45110 - Ir. ENDANG SETYATI, M.T., DR.', 'Sistem Rekomendasi Hairstyle DKapster dalam Penentuan Kesesuaian Model Rambut Pria dengan Menggunakan Metode Convolutional Neural Network', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Ir. ENDANG SETYATI, M.T., DR.'),
(49, 'Selasa\n13 Juni 2023\n10:00\nP318', 'C14190178 CHRISTIAN WILLSON', 'Ketua\nALEXANDER SETIAWAN, S.Kom., M.T.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Aplikasi Mobile Sistem Informasi dan Chat untuk Kegiatan Welcome Grateful Generation Universitas Kristen Petra', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(50, 'Selasa\n13 Juni 2023\n10:00\nP308', 'C14190225 ONG, RIO SURYA WIJAYA', 'Ketua\nHANS JUWIANTHO, S.Kom., M.Kom.\nAnggota\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Penelusuran Pengujian Metamorfik pada Sistem Pemrosesan Aliran Data', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.'),
(51, 'Selasa\n13 Juni 2023\n13:00\nP318', 'C14180208 KEVIN EDLYN CHANDRA', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nLILY PUSPA DEWI, S.T., M.Kom.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Implementasi Sistem Informasi Berbasis Mobile untuk Aset Manajemen di Gereja Katolik St. Aloysius Gonzaga', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'YULIA, S.T., M.Kom.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(52, 'Selasa\n13 Juni 2023\n13:00\nLab MM', 'C14190118 FRANCISCO ALLENXEON', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nProf. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Deteksi Gesture Tidak Tepat Public Speaker dengan Metode Long Short Term Memory', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(53, 'Selasa\n13 Juni 2023\n13:00\nP307', 'C14190177 YUNATA PUTRA GUNAWAN', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n88004 - Ir. KARTIKA GUNADI, M.T.\n45110 - Ir. ENDANG SETYATI, M.T., DR.', 'Deteksi Kegiatan Kecurangan dalam Ujian Tertulis Offline dengan Metode Object Tracking dan Deep Learning', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Ir. KARTIKA GUNADI, M.T.', 'Ir. ENDANG SETYATI, M.T., DR.'),
(54, 'Rabu\n14 Juni 2023\n07:30\nP307', 'C14190024 SERGIUS GEOFFREY HARYANTO', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n14007 - IVAN WIDIYANTO, S.Kom., M.MT.', 'Sistem Back-end Aplikasi Layanan HelpDesk Pusat Pengembangan Sistem Informasi untuk Mendukung Proses Manajemen Proyek dan Evaluasi Kinerja', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Ir. KARTIKA GUNADI, M.T.', 'YULIA, S.T., M.Kom.', 'IVAN WIDIYANTO, S.Kom., M.MT.'),
(55, 'Rabu\n14 Juni 2023\n07:30\nP318', 'C14190106 ANDREAN DEWANTA BISMA', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Multidimensional Market Basket Analysis pada PT X untuk membantu pengambilan keputusan strategi bisnis', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(56, 'Rabu\n14 Juni 2023\n07:30\nP308', 'C14180017 MARCO OCTAVIAN ELIM', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Aplikasi Mobile untuk Pertemanan Mahasiswa Universitas Kristen Petra', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(57, 'Rabu\n14 Juni 2023\n10:00\nP318', 'C14180035 MICHAEL SAMUEL', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nProf. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Penerapan metode behaviour tree dan logika fuzzy untuk NPC musuh di game Maze dengan Unity 3D', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(58, 'Rabu\n14 Juni 2023\n10:00\nP308', 'C14180060 VERICK GOZALI', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Pengecekkan Kesamaan Jawaban Ujian Tertulis Online Universitas Kristen Petra dengan Algoritma Term Frequency Inverse Document Frequency dan Cosine Similarity.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.'),
(59, 'Rabu\n14 Juni 2023\n10:00\nP307', 'C14190016 ALFRED', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n14007 - IVAN WIDIYANTO, S.Kom., M.MT.', 'Front-end Aplikasi Layanan HelpDesk Pusat Pengembangan Sistem Informasi untuk Mendukung Proses Manajemen Proyek dan Evaluasi Kinerja', 'Ir. KARTIKA GUNADI, M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'YULIA, S.T., M.Kom.', 'IVAN WIDIYANTO, S.Kom., M.MT.'),
(60, 'Rabu\n14 Juni 2023\n13:00\nP307', 'C14190059 NYOTO WIJAYA', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Analisa Metode N-Gram dan TF-IDF terhadap Kasus Plagiarisme Skripsi', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(61, 'Rabu\n14 Juni 2023\n13:00\nP308', 'C14190083 RAYMOND CHRISTOPER UTOMO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nYULIA, S.T., M.Kom.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n20004 - KRISNA WAHYUDI, S.Kom., M.T.', 'Aplikasi Peramalan Penjualan Kertas di CV. X', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'YULIA, S.T., M.Kom.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'KRISNA WAHYUDI, S.Kom., M.T.'),
(62, 'Rabu\n14 Juni 2023\n13:00\nP318', 'C14190094 VINCENT THEO SETIA BUDI', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.\n03024 - LILIANA, S.T., M.Eng., Ph.D.', 'Game quotRate My App Please!quot untuk meningkatkan pemahaman tentang UX', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'LILIANA, S.T., M.Eng., Ph.D.'),
(63, 'Kamis\n15 Juni 2023\n07:30\nP318', 'C14190194 WELLIAM SASTRADIPURA', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n88004 - Ir. KARTIKA GUNADI, M.T.', 'Mendeteksi dan Klasifikasi Konten Pornografi Dalam Gambar Menggunakan Metode Vision Transformer.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Ir. KARTIKA GUNADI, M.T.'),
(64, 'Kamis\n15 Juni 2023\n07:30\nP307', 'C14190054 FELICIA LAKSANA PUTRI', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Aplikasi ARTPro Berbasis Android Dengan Menggunakan Metode Design Thinking untuk Membantu Mencari Asisten Rumah Tangga', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(65, 'Kamis\n15 Juni 2023\n07:30\nP308', 'C14190042 WINSON EVANGELIS SUTANTO', 'Ketua\nHANS JUWIANTHO, S.Kom., M.Kom.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Merender Global Illumination Menggunakan Pix2pix Generative Adversarial Networks', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(66, 'Kamis\n15 Juni 2023\n10:00\nP318', 'C14190218 MIKAEL HANS UTOMO', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45297 - ANDRE GUNAWAN, S.Kom.', 'Multi Action Reinforcement Learning untuk Pembuatan Artificial Intelligence pada Game Tactical Shooter', 'Ir. KARTIKA GUNADI, M.T.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDRE GUNAWAN, S.Kom.'),
(67, 'Kamis\n15 Juni 2023\n10:00\nP307', 'C14180121 JOSHUA CHARIS ILANUNU', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Aplikasi Kamera Keamanan Berbasis Android untuk Pengawasan Pada Tindak Kekerasan Dalam Rumah Tangga', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(68, 'Kamis\n15 Juni 2023\n10:30\nP308', 'C14190171 ABED KURNIAWAN ALFIANTO', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nProf. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO', 'Pengenalan Logat Daerah Menggunakan k-NN untuk Automatic Speech Recognition', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO'),
(69, 'Kamis\n15 Juni 2023\n13:00\nP318', 'C14190079 ANDREAS KEVIN NYOTO', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n96007 - I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'Pembuatan Modul Principal Management dan Market Segmentation Menggunakan Odoo ERP dengan Metode Recency, Frequency, Monetary Value (RFM) pada Perusahaan Distributor PT. X', 'Ir. KARTIKA GUNADI, M.T.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'YULIA, S.T., M.Kom.', 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.'),
(70, 'Kamis\n15 Juni 2023\n13:00\nP307', 'C14180074 THEOFILUS RICCO WIGUNA', 'Ketua\nLILIANA, S.T., M.Eng., Ph.D.\nAnggota\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Pengimplementasian Procedural Content Generation untuk 3D Dungeon Menggunakan Grid System dan Manhattan Distance.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', ''),
(71, 'Kamis\n15 Juni 2023\n13:00\nP308', 'C14190159 SUMANO WIJAYA KSATRIA', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Pembuatan Aplikasi Mobile untuk peminjaman sepeda bagi civitas UK Petra', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(72, 'Jumat\n16 Juni 2023\n07:30\nP318', 'C14190056 ALYCIA JANE SIDARTA', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Game Numerasi Untuk Matematika Kelas 7', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', ''),
(73, 'Jumat\n16 Juni 2023\n07:30\nP307', 'C14180004 ANDREW KURNIAWAN', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n88004 - Ir. KARTIKA GUNADI, M.T.', 'Mendeteksi dan Memisahkan Suara Instrumen Piano, Gitar, Biola, dan Saxophone dari Sebuah File mp3 dengan Menggunakan Inception-ResNet-v2', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Ir. KARTIKA GUNADI, M.T.'),
(74, 'Jumat\n16 Juni 2023\n08:00\nP308', 'C14190120 MARSELUS RICHARD GIANTO', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n92008 - Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'CoRun, Aplikasi IOS sebagai Solusi Konsultasi Training Plan di Komunitas Indorunners', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.'),
(75, 'Jumat\n16 Juni 2023\n10:00\nP307', 'C14180054 WILLIAM LAYADI', 'Ketua\nHANS JUWIANTHO, S.Kom., M.Kom.\nAnggota\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\n03024 - LILIANA, S.T., M.Eng., Ph.D.', 'Procedural Content Generation untuk 3D Map menggunakan Perlin Noise pada Unity 3D', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.'),
(76, 'Jumat\n16 Juni 2023\n10:00\nP308', 'C14180022 KEVIN', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nALEXANDER SETIAWAN, S.Kom., M.T.\nPembimbing\n01043 - SILVIA ROSTIANINGSIH, S.Kom., M.MT.\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Perancangan Transaction Processing System (TPS) untuk Pengolaan Barang pada CV.XYZ', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.'),
(77, 'Jumat\n16 Juni 2023\n10:00\nP318', 'C14190067 PETER YUDHISTIRA', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Topic Modelling dan Clustering untuk Anomaly Detection pada Transkrip Diskusi Komunitas', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(78, 'Jumat\n16 Juni 2023\n13:00\nP307', 'C14180214 KEVIN PUTRA RADJA', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'SnoozeTale: Pembuatan Game Side-Scrolling Action Adventure untuk Memperkenalkan Cerita Dongeng Indonesia pada Pemain Game Internasional', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Ir. KARTIKA GUNADI, M.T.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(79, 'Jumat\n16 Juni 2023\n13:00\nP318', 'C14190109 ALEXANDER DEAN PANDREOU', 'Ketua\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Aplikasi Electronic Commerce Produk Bahan Bangunan pada Perusahaan PT. Mycon Sentra Bangunan Indonesia', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'ALEXANDER SETIAWAN, S.Kom., M.T.'),
(80, 'Jumat\n16 Juni 2023\n13:00\nP308', 'C14180128 RYAN KURNIA TEJAWIJAYA', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nI GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Sistem Optimalisasi Rute Menggunakan Metode Clarke and Wright Saving Heuristic dan Cheapest Insertion Heuristic Pada Jasa Pengiriman X', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(81, 'Senin\n19 Juni 2023\n07:30\nP308', 'C14190160 BRYAN ELMER CAHYADI', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Aplikasi Mobile Personal Asistant untuk Lansia', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.'),
(82, 'Senin\n19 Juni 2023\n07:30\nP318', 'C14190111 RENSIS YEHUDA', 'Ketua\nALEXANDER SETIAWAN, S.Kom., M.T.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n01043 - SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'Content-based filtering untuk Rekomendasi Pemilihan Dosen Pembimbing Skripsi dengan Cosine Similarity', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'Ir. KARTIKA GUNADI, M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', ''),
(83, 'Senin\n19 Juni 2023\n07:30\nP307', 'C14170137 BILLY TJUATJA', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Mengamankan File di OS Android Dengan Menggunakan Enkripsi AES dan Twofish.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', ''),
(84, 'Senin\n19 Juni 2023\n13:00\nP318', 'C14180047 MARZELLO IRVINE', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n99015 - RUDY ADIPRANATA, S.T, M.Eng.\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Penerapan Metode Fibonacci Retracement dan Exponential Moving Average pada Cryptocurrency Bitcoin untuk Algorithmic Trading di Perdagangan Derivatif Binance', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'RUDY ADIPRANATA, S.T, M.Eng.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.'),
(85, 'Senin\n19 Juni 2023\n13:00\nP308', 'C14190117 HENRY', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Sistem Informasi Manajemen pada Percetakan Soerabaja45', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'ALEXANDER SETIAWAN, S.Kom., M.T.'),
(86, 'Senin\n19 Juni 2023\n13:00\nlab MM', 'C14190108 FELICIA TANIA', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n45342 - ANDHIKA EVANTIA IRAWAN, S.Kom.', 'Hand Gesture dengan Visually Realistic Grasping System untuk Board Game Kartu Strategi', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ANDHIKA EVANTIA IRAWAN, S.Kom.'),
(87, 'Selasa\n20 Juni 2023\n07:30\nP308', 'C14180122 DANNY YURISTA', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Penerapan Domestic Violence Detection pada Kamera dalam Ruangan untuk Mendeteksi Kekerasan Fisik Menggunakan 3D Convolutional Neural Network', 'Ir. KARTIKA GUNADI, M.T.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.'),
(88, 'Selasa\n20 Juni 2023\n07:30\nP307', 'C14170063 JESSICA NURGOHO', 'Ketua\nYULIA, S.T., M.Kom.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n45023 - INDRO SETIAWAN, S.T.,M.T.', 'Pengembangan Sistem Reminder dan Revisi Dokumen menggunakan sistem automated-email pada PT Mitra Pinasthika Mulia', 'YULIA, S.T., M.Kom.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'INDRO SETIAWAN, S.T.,M.T.'),
(89, 'Selasa\n20 Juni 2023\n07:30\nP318', 'C14180118 GERVASIUS WISELY', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Analisa Strategi SEO dalam Peningkatan Rangking Website', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.'),
(90, 'Selasa\n20 Juni 2023\n10:00\nP318', '26416141 GEDE SURYA SUSILA', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.', 'Rancangan Modul Pembelajaran Digital Berbasis Web untuk Pembelajaran Struktur Data', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'LILIANA, S.T., M.Eng., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.'),
(91, 'Selasa\n20 Juni 2023\n10:00\nP307', 'C14190069 ALFONS RICHARDO SAMPURNO', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nProf. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Chatbot dengan Algoritma Bidirectional Long Short Term Memory untuk Website Admisi dan Humas Universitas Kristen Petra', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.'),
(92, 'Selasa\n20 Juni 2023\n10:00\nP308', 'C14180216 AARON DAVIS SENTONO', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Sistem Informasi Ekspor Impor pada Perusahaan Forwarding PT. Dinamika Expressindo Semarang', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Ir. KARTIKA GUNADI, M.T.', 'YULIA, S.T., M.Kom.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(93, 'Selasa\n20 Juni 2023\n13:00\nP318', 'C14190011 JANSEN FREDERICK MINGARDI', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nProf. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n99015 - RUDY ADIPRANATA, S.T, M.Eng.', 'Penerapan Metode Hierarchical Deep Convolutional Neural Networks untuk Pengenalan Karakter Optik pada Aksara Jawa', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.', 'RUDY ADIPRANATA, S.T, M.Eng.'),
(94, 'Selasa\n20 Juni 2023\n13:00\nP307', 'C14190088 CHRISTOPHER LOUIS', 'Ketua\nYULIA, S.T., M.Kom.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Sistem Rekomendasi Produk dan Promo Penjualan cross-selling dengan Algoritma FP-Growth pada Perusahaan Elektronika di Surabaya', 'YULIA, S.T., M.Kom.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(95, 'Selasa\n20 Juni 2023\n13:00\nP308', 'C14190048 KEZIA ANGELINE', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Sistem Rekomendasi Warna Lipstik Berdasarkan Warna Kulit dan Undertone Kulit Dengan Menggunakan Metode K-Means dan Ruang Warna YCbCr', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(96, 'Rabu\n21 Juni 2023\n07:30\nP308', 'C14180243 KRIYAN RANGKE SWAHA', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nPembimbing\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Aplikasi Sistem Manajemen Inventori dan Distribusi pada Toko Grosir Artha Makmur', 'Ir. KARTIKA GUNADI, M.T.', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', ''),
(97, 'Rabu\n21 Juni 2023\n07:30\nP318', 'C14190029 SANDRO CHRISTIAN', 'Ketua\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nAnggota\nYULIA, S.T., M.Kom.\nPembimbing\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Aplikasi Marketplace Jasa Reparasi Elektronik Berbasis Mobile App', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'YULIA, S.T., M.Kom.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', ''),
(98, 'Rabu\n21 Juni 2023\n07:30\nP307', 'C14190228 HARI DARMAWAN', 'Ketua\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nAnggota\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n96007 - I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'Aplikasi Prediksi Penjualan dengan Metode Sarimax, Moving Average dan Newsboy Problem pada Grosir X', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.'),
(99, 'Rabu\n21 Juni 2023\n10:00\nP318', 'C14190082 EUNIKE JEANNYFER CAROLINE', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nYULIA, S.T., M.Kom.\nPembimbing\n00016 - Dr. ANDREAS HANDOJO, S.T., M.MT.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Sistem Rekomendasi Wisata di Indonesia dengan Menggunakan Metode LightFM Pada Agen Travel ABC', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'YULIA, S.T., M.Kom.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(100, 'Rabu\n21 Juni 2023\n10:00\nP307', 'C14190009 GLORIA IMMANUELA ENDHY', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\n98031 - JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Penetration Testing Website Universitas X untuk Meningkatkan Keamanan dengan ISSAF', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.');
INSERT INTO `data_mahasiswa` (`id`, `tanggal_ruang`, `mahasiswa`, `team_penguji`, `judul_skripsi`, `ketua_penguji`, `anggota_penguji`, `pembimbing_1`, `pembimbing_2`) VALUES
(101, 'Rabu\n21 Juni 2023\n13:00\nP308', 'C14190164 SHERLYN CHRISTINE TANIWIJAYA', 'Ketua\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nAnggota\nHANS JUWIANTHO, S.Kom., M.Kom.\nPembimbing\n99036 - YULIA, S.T., M.Kom.\n22012 - ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Aplikasi Point of Sales Menggunakan Cross Channel strategy Pada Resto X', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'YULIA, S.T., M.Kom.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.'),
(102, 'Rabu\n21 Juni 2023\n13:00\nP307', 'C14190007 YEHEZKIEL KRISTANTO WIDJAJA', 'Ketua\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n92008 - Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.', 'Perbaikan Sistem, Penerepan OpenLayers pada Shuttle Bus Universitas Kristen Petra', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'Prof. Dr.(H.C.) Ir. ROLLY INTAN, M.A.Sc., Dr.Eng.'),
(103, 'Rabu\n21 Juni 2023\n13:00\nP318', 'C14190081 KEVIN WILLIAM WIBISONO', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'Arsitektur Microservices Pada Enterprise Resource Planning Untuk Scalability Studi Kasus Promo', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', ''),
(104, 'Kamis\n22 Juni 2023\n07:30\nLab PG', 'C14180249 FANUEL BERTANUS KRISNADHI', 'Ketua\nLILIANA, S.T., M.Eng., Ph.D.\nAnggota\nADI WIBOWO, S.T., M.T., Ph.D.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Penerapan Machine Learning untuk Mendeteksi Konten Hoax pada Berita Online di Indonesia', 'LILIANA, S.T., M.Eng., Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.'),
(105, 'Kamis\n22 Juni 2023\n07:30\nP318', 'C14190110 MARCELLA SHARON ALPHIAN', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Aplikasi Konsultasi Diet JP Smart Fitness', 'Ir. KARTIKA GUNADI, M.T.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(106, 'Kamis\n22 Juni 2023\n07:30\nLab STUDIO', 'C14190064 BASKARA BAGUS PANUNTUN', 'Ketua\nDr. ANDREAS HANDOJO, S.T., M.MT.\nAnggota\nLEO WILLYANTO SANTOSO, S.Kom., M.IT.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Pembuatan Sistem Manajemen dan Pelaporan untuk Tenaga Kebersihan, Layanan, dan Maintenance di PT. X', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(107, 'Kamis\n22 Juni 2023\n10:00\nP318', 'C14190201 GEORGE KIM ANDERSON KURNIAWANPUTRA', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n45145 - ANITA NATHANIA PURBOWO, S.KOM.,M.MT.', 'Penyediaan Jasa Bimbingan Belajar Menggunakan Konsep E-Marketplace Pada Aplikasi Mobile', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'ANITA NATHANIA PURBOWO, S.KOM.,M.MT.'),
(108, 'Kamis\n22 Juni 2023\n10:00\nLab PG', 'C14190099 JENNIFER ANGELINA', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nDr. ANDREAS HANDOJO, S.T., M.MT.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Platform Aplikasi Pemesanan Makanan di Tempat untuk Mempermudah Interaksi Pembeli-Penjual di Pujasera', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Dr. ANDREAS HANDOJO, S.T., M.MT.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.'),
(109, 'Kamis\n22 Juni 2023\n10:00\nLab Studio', 'C14190162 VINCENT DARMAWAN', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Deteksi Mimik Wajah Pembicara Publik pada Video menggunakan metode CNN-LSTM', 'Ir. KARTIKA GUNADI, M.T.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(110, 'Kamis\n22 Juni 2023\n13:00\nLab Studio', 'C14190226 KRISNA LAZARUS LOMI BEI', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Sistem Pendeteksi Kantuk Secara Real Time Pada Pengemudi Kendaraan Transportasi Di Jalan Tol Menggunakan Deep Learning.', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(111, 'Kamis\n22 Juni 2023\n13:00\nLab PG', 'C14190104 MICHAEL KURNIAWAN', 'Ketua\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n03023 - LEO WILLYANTO SANTOSO, S.Kom., M.IT.\n01036 - AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Aplikasi perencanaan keuangan untuk membantu mencapai tujuan keuangan berbasis mobile', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Ir. KARTIKA GUNADI, M.T.', 'LEO WILLYANTO SANTOSO, S.Kom., M.IT.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.'),
(112, 'Kamis\n22 Juni 2023\n13:00\nP318', 'C14190004 DENNY LIANTO', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nHENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.\nPembimbing\n93026 - STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'Aplikasi Pemesanan Layanan Servis Kendaraan Pada Bengkel X', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', ''),
(113, 'Jumat\n23 Juni 2023\n07:30\nP429', 'C14180141 VINCENT NATANAEL', 'Ketua\nALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n88004 - Ir. KARTIKA GUNADI, M.T.\n14001 - HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.', 'Generator Musik Menggunakan Generative Adversarial Network untuk Generasi Musik Klasik', 'ALVIN NATHANIEL TJONDROWIGUNO, S.Kom., M.T.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'Ir. KARTIKA GUNADI, M.T.', 'HENRY NOVIANUS PALIT, S.Kom., M.Kom., Ph.D.'),
(114, 'Jumat\n23 Juni 2023\n07:30\nP318', 'C14190075 HUGO OLIVIERA', 'Ketua\nSILVIA ROSTIANINGSIH, S.Kom., M.MT.\nAnggota\nI GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.\nPembimbing\n04021 - ALEXANDER SETIAWAN, S.Kom., M.T.\n00003 - ADI WIBOWO, S.T., M.T., Ph.D.', 'Sistem Informasi Perencanaan Kebutuhan Bahan Baku dengan Metode Economic Order Quantity pada Perusahaan Manufaktur PT.X', 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', 'I GEDE AGUS WIDYADANA, S.T., M.Eng., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'ADI WIBOWO, S.T., M.T., Ph.D.'),
(115, 'Jumat\n23 Juni 2023\n07:30\nLab MM', 'C14190149 MICHAEL ALVERIAN MARESCA', 'Ketua\nDr. GREGORIUS SATIA BUDHI, S.T., M.T.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.', 'Sistem Pengenalan Ekspresi Wajah Tidak Ideal pada Public Speaker dengan Model Convolutional Neural Network - Long Short Term Memory', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'LILIANA, S.T., M.Eng., Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.'),
(116, 'Jumat\n23 Juni 2023\n10:00\nP429', 'C14190033 CALVERT TANUDIHARDJO', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n99036 - YULIA, S.T., M.Kom.', 'Sistem Back-end Situs Web Administrasi Kemahasiswaan Universitas Kristen Petra', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.', 'YULIA, S.T., M.Kom.'),
(117, 'Jumat\n23 Juni 2023\n10:00\nP318', 'C14170055 JULIUS CASPAR SURYAPRANATA', 'Ketua\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nAnggota\nALEXANDER SETIAWAN, S.Kom., M.T.\nPembimbing\n98011 - LILY PUSPA DEWI, S.T., M.Kom.\n91024 - Ir. RESMANA LIM, M.Eng.', 'Smart Surveillance System dengan Raspberry Pi IP Camera dan Telegram', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'LILY PUSPA DEWI, S.T., M.Kom.', 'Ir. RESMANA LIM, M.Eng.'),
(118, 'Jumat\n23 Juni 2023\n10:00\nLab MM', 'C14190076 DICK JOVIAN', 'Ketua\nIr. DJONI HARYADI SETIABUDI, M.Eng.\nAnggota\nIr. KARTIKA GUNADI, M.T.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n04020 - YUSAK TANOTO, S.T., M.Eng., Ph.D.', 'Machine Learning Regression Model untuk memprediksi Temporal-hourly based Solar PV output di Jawa-Bali', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Ir. KARTIKA GUNADI, M.T.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'YUSAK TANOTO, S.T., M.Eng., Ph.D.'),
(119, 'Jumat\n23 Juni 2023\n13:00\nP429', 'C14190231 HANDRIAN ALANDI', 'Ketua\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nAnggota\nJUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.\nPembimbing\n03024 - LILIANA, S.T., M.Eng., Ph.D.\n14007 - IVAN WIDIYANTO, S.Kom., M.MT.', 'Perancangan dan Pembuatan Front-End Website Administrasi Kemahasiswaan Universitas Kristen Petra', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'JUSTINUS ANDJARWIRAWAN, S.T.,M.Eng.', 'LILIANA, S.T., M.Eng., Ph.D.', 'IVAN WIDIYANTO, S.Kom., M.MT.'),
(120, 'Jumat\n23 Juni 2023\n13:00\nP318', 'C14180255 JOSEPH BIMANTA RAY', 'Ketua\nALEXANDER SETIAWAN, S.Kom., M.T.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n21011 - HANS JUWIANTHO, S.Kom., M.Kom.\n98011 - LILY PUSPA DEWI, S.T., M.Kom.', 'Perancangan dan Pembuatan Aplikasi Sistem Informasi Reimbursement Berbasis Website Pada PT. XYZ', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'HANS JUWIANTHO, S.Kom., M.Kom.', 'LILY PUSPA DEWI, S.T., M.Kom.'),
(121, 'Jumat\n23 Juni 2023\n13:00\nlab MM', 'C14190005 SEAN FREDERICK MINGARDI', 'Ketua\nIr. KARTIKA GUNADI, M.T.\nAnggota\nAGUSTINUS NOERTJAHYANA, S.Kom., M.MT.\nPembimbing\n02030 - Dr. GREGORIUS SATIA BUDHI, S.T., M.T.\n04020 - YUSAK TANOTO, S.T., M.Eng., Ph.D.', 'Cluster analisis pada data temporal parameter kondisi penyinaran matahari dan suhu lingkungan di jawa bali untuk penentuan kapasitas solar photovoltaics plant', 'Ir. KARTIKA GUNADI, M.T.', 'AGUSTINUS NOERTJAHYANA, S.Kom., M.MT.', 'Dr. GREGORIUS SATIA BUDHI, S.T., M.T.', 'YUSAK TANOTO, S.T., M.Eng., Ph.D.'),
(122, 'Senin\n26 Juni 2023\n10:00\nP318', '26416080 FELICIA YULI WIYANA', 'Ketua\nALEXANDER SETIAWAN, S.Kom., M.T.\nAnggota\nSTEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.\nPembimbing\n00003 - ADI WIBOWO, S.T., M.T., Ph.D.', 'Penerapan Sistem Telemedicine, Pemesanan Perlengkapan Dan Perawatan Hewan Peliharaan', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', 'ADI WIBOWO, S.T., M.T., Ph.D.', ''),
(123, 'Selasa\n27 Juni 2023\n13:00\nP318', '26416034 JEREMY EVANDO IMMANUEL', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nALEXANDER SETIAWAN, S.Kom., M.T.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Aplikasi Program Diet di Rumah Untuk Pengguna Obesitas', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', ''),
(124, 'Selasa\n27 Juni 2022\n13:00\nP319', '26416034 JEREMY EVANDO IMMANUEL', 'Ketua\nADI WIBOWO, S.T., M.T., Ph.D.\nAnggota\nALEXANDER SETIAWAN, S.Kom., M.T.\nPembimbing\n85009 - Ir. DJONI HARYADI SETIABUDI, M.Eng.', 'Aplikasi Program Diet di Rumah Untuk Pengguna Obesitas', 'ADI WIBOWO, S.T., M.T., Ph.D.', 'ALEXANDER SETIAWAN, S.Kom., M.T.', 'Ir. DJONI HARYADI SETIABUDI, M.Eng.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_penilaian`
--

CREATE TABLE `kriteria_penilaian` (
  `id_kriteria` int(10) NOT NULL,
  `cpl` varchar(10) NOT NULL,
  `ik` float NOT NULL,
  `deskripsi_ik` varchar(200) NOT NULL,
  `bab` varchar(200) NOT NULL,
  `penilaian` varchar(200) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_penilaian`
--

INSERT INTO `kriteria_penilaian` (`id_kriteria`, `cpl`, `ik`, `deskripsi_ik`, `bab`, `penilaian`, `bobot`) VALUES
(1, 'CP 9', 9.3, 'Menganalisis data secara logis, kritis, sistematis, dan inovatif', 'JUDUL dan ABSTRAK dan BAB 1-2', 'Memenuhi 3 kriteria metode, tujuan, obyek, dapat menyebutkan yang mana masing2. abstrak berisi  rangkuman problem, solusi dan kesimpulan', 0.05),
(2, 'CP 9', 9.3, 'Menganalisis data secara logis, kritis, sistematis, dan inovatif', 'BAB 1-2', 'Latar belakang berisi detail problem, review singkat solusi dari peneliti sebelumnya, apa yang dikerjakan di skripsi ini; perumusan masalah berisi hipotesis; ruang lingkup selain apa yang dikerjakan, ', 0.1),
(3, 'CP 4', 4.4, 'Mengkonstruksi algoritma dan/atau program yang efektif untuk menyelesaikan masalah', 'BAB 3 dan BAB 4', 'Infor : studi kelayakan, pengamatan awal, analisa masalah, kerangka pemikiran. penjabaran solusi yang diusulkan dan penjelasan mengapa solusi tersebut dianggap dapat menyelesaikan masalah. Bagaimana m', 0.25),
(4, 'CP 7', 7.4, 'Membangun sistem informasi atau aplikasi bisnis untuk mendukung tercapainya tujuan organisasi', 'BAB 3 dan BAB 4', 'SIB : studi kelayakan, pengamatan awal, analisa masalah, kerangka pemikiran. Rancangan solusi dalam bentuk desain. Kesesuaian desain dengan kebutuhan proses bisnis yang nyata.', 0.25),
(5, 'CP 9', 9.3, 'Menganalisis data secara logis, kritis, sistematis, dan inovatif', 'BUKU', 'penulisan buku laporan yang runut dan lengkap. Tata bahasa baku dengan gaya bahasa laporan ilmiah. Sejauh mana daftar pustaka sudah dicek bahwa semua item benar2 dikutip di bab2 sebelumnya, bukan seke', 0.1),
(6, 'CP 8', 8.3, 'Menganalisis data secara logis, kritis, sistematis, dan inovatif', 'BAB 5 dan KESIMPULAN', '- merancang pengujian (bab 5). apakah langkah-langkah pengujian sistem serta hasil pengujian telah dijabarkan secara jelas lengkap (bilamana perlu dilengkapi dengan grafik, tabel, pembuktian. apakah l', 0.25),
(7, 'CP 5', 5.3, 'Menentukan metodologi pengembangan perangkat lunak yang sesuai konteks keadaan dan kebutuhan', 'PROGRAM', 'efisiensi program, kesesuaian program dengan rumus/ protocol/ alur bisnis? Apakah rancangan program sudah sesuai teori? Flowchart jelas dan detil? Efisiensi desain DFD/ ERD/ UML', 0.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `mahasiswa` varchar(100) NOT NULL,
  `cp_9_judul_abstrak` float NOT NULL,
  `cp_9_bab_1_2` float NOT NULL,
  `cp_4_bab_3_4_infor` float NOT NULL,
  `cp_7_bab_3_4_sib` float NOT NULL,
  `cp_9_buku` float NOT NULL,
  `cp_8_bab_5_kesimpulan` float NOT NULL,
  `cp_5_program` float NOT NULL,
  `nilai_akhir` float NOT NULL,
  `avg_nilai_akhir` float NOT NULL,
  `dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `type`, `password`) VALUES
('evelin', 'admin', '$2y$10$yZzGan18wC16VBZEcMThl.i4v/L4yOftTj4IIsxrRfhwMTCbXtELS'),
('okky', 'dosen', '$2y$10$yZzGan18wC16VBZEcMThl.i4v/L4yOftTj4IIsxrRfhwMTCbXtELS'),
('billy', 'ketua', '$2y$10$yZzGan18wC16VBZEcMThl.i4v/L4yOftTj4IIsxrRfhwMTCbXtELS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vakasi`
--

CREATE TABLE `vakasi` (
  `nomor_vakasi` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `tanggal_sidang` datetime(6) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `anggota_penguji` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vakasi`
--

INSERT INTO `vakasi` (`nomor_vakasi`, `nip`, `dosen`, `tanggal_sidang`, `nama_mhs`, `anggota_penguji`) VALUES
(1, 2, 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', '2023-11-02 08:30:00.000000', 'C14190054 FELICIA LAKSANA PUTRI', 'Ketua Penguji'),
(2, 1, 'ADI WIBOWO, S.T., M.T., Ph.D.', '2023-11-02 08:30:00.000000', 'C14190054 FELICIA LAKSANA PUTRI', 'Anggota Penguji'),
(3, 5, 'Dr. ANDREAS HANDOJO, S.T., M.MT.', '2023-11-02 08:30:00.000000', 'C14190054 FELICIA LAKSANA PUTRI', 'Pembimbing 1'),
(5, 1, 'ADI WIBOWO, S.T., M.T., Ph.D.', '2023-11-02 07:30:00.000000', 'C14180127 TEDDY GHATSUNAGA', 'Ketua Penguji'),
(6, 6, 'STEPHANUS A. ANANDA, S.T., M.Sc. Ph.D.', '2023-11-02 07:30:00.000000', 'C14180127 TEDDY GHATSUNAGA', 'Anggota Penguji'),
(8, 4, 'LILY PUSPA DEWI, S.T., M.Kom.', '2023-11-02 07:30:00.000000', 'C14180127 TEDDY GHATSUNAGA', 'Pembimbing 2'),
(9, 2, 'SILVIA ROSTIANINGSIH, S.Kom., M.MT.', '2023-11-02 07:00:00.000000', 'C14180197 FERDINANT PANGESTU', 'Ketua Penguji'),
(11, 7, 'Ir. KARTIKA GUNADI, M.T.', '2023-12-07 17:00:00.000000', 'C14180028 BINTANG ARTOMORO WINARTO', 'Pembimbing 1'),
(12, 29, 'LILIANA, S.T., M.Eng., Ph.D.', '2023-12-07 17:00:00.000000', 'C14180028 BINTANG ARTOMORO WINARTO', 'Pembimbing 2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `vakasi`
--
ALTER TABLE `vakasi`
  ADD PRIMARY KEY (`nomor_vakasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  MODIFY `id_kriteria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `vakasi`
--
ALTER TABLE `vakasi`
  MODIFY `nomor_vakasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
