-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 03:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_ttd` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tempat_kegiatan` varchar(100) NOT NULL,
  `sasaran_kegiatan` text NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `id_ttd`, `nama_kegiatan`, `tempat_kegiatan`, `sasaran_kegiatan`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 0, 'Pembinaan Rumah Diet', '- Ds. Bumi Rahayu\r\n- Ds. Gunung Sari\r\n- Ds.  Apung', '- Keluarga yang memiliki balita\r\n- Keluarga yang memiliki bayi', '2020-08-02', '2020-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama_desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `id_kec`, `nama_desa`) VALUES
(1, 1, 'Puruk Cahu Seberang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_domisili`
--

CREATE TABLE `tb_domisili` (
  `id_domisili` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_domisili`
--

INSERT INTO `tb_domisili` (`id_domisili`, `no_surat`, `id_ttd`, `id_penduduk`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/domisili/VII/2021', 1, 1, '2020-07-30', '2020-07-30', 'Proses'),
(2, '', 0, 2, '2020-08-01', '1970-01-01', ''),
(3, '', 1, 2, '2020-08-01', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_imb`
--

CREATE TABLE `tb_imb` (
  `id_imb` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_bangunan` varchar(100) NOT NULL,
  `alamat_bangunan` text NOT NULL,
  `persil_bangunan` varchar(50) NOT NULL,
  `status_tanah` varchar(25) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_imb`
--

INSERT INTO `tb_imb` (`id_imb`, `no_surat`, `id_ttd`, `id_penduduk`, `nama_bangunan`, `alamat_bangunan`, `persil_bangunan`, `status_tanah`, `lampiran`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/IMB/VII/2020', 2, 2, 'Roko ', 'Kurau', 'ajsklajska', 'Milik', 'Puisi.pdf', '2020-07-29', '2020-07-29', 'Proses'),
(3, NULL, 1, 1, 'Roko ', 'Kurau', 'ajsklajska', 'Milik', 'Lingkungan.pdf', '2020-08-06', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin_usaha`
--

CREATE TABLE `tb_izin_usaha` (
  `id_izin_usaha` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `js_usaha` varchar(25) NOT NULL,
  `lokasi_usaha` text NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_izin_usaha`
--

INSERT INTO `tb_izin_usaha` (`id_izin_usaha`, `no_surat`, `id_ttd`, `id_penduduk`, `js_usaha`, `lokasi_usaha`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, NULL, 1, 1, 'Membuat Aplikasi', 'Pelaihari Kota', '2020-07-28', '2020-07-30', 'Selesai'),
(2, '002/test/VII/2020', 2, 2, 'Membuat Aplikasi', 'Kurau', '2020-07-29', '2020-09-30', 'Proses'),
(4, '', 1, 2, 'Membuat Aplikasi 2', 'test 2', '2020-08-01', NULL, 'Proses'),
(5, NULL, 1, 1, 'Membuat Aplikasi 2', 'jj', '2020-08-06', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_kec` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Murung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kehilangan`
--

CREATE TABLE `tb_kehilangan` (
  `id_kehilangan` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan` text NOT NULL,
  `keterangan_kehilangan` text NOT NULL,
  `berlaku` date DEFAULT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kehilangan`
--

INSERT INTO `tb_kehilangan` (`id_kehilangan`, `no_surat`, `id_ttd`, `id_penduduk`, `keperluan`, `keterangan_kehilangan`, `berlaku`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/Kehilangan/VII/2021', 1, 2, 'Pengantar kehilangan KTP', 'KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama', '2020-07-31', '2020-07-30', '2020-07-30', 'Proses'),
(2, '', 1, 2, 'Pengantar kehilangan KTP', 'testttt', NULL, '2020-08-01', NULL, 'Proses'),
(3, NULL, 1, 1, 'Pengantar kehilangan KTP 2', 'KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama KTP tersebut Hilang pada tanggal 20 Juni 2020 di Pasar Lama ', NULL, '2020-08-08', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE `tb_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_kelahiran` varchar(100) NOT NULL,
  `jk_k` varchar(25) NOT NULL,
  `tmp_lahir_k` varchar(100) NOT NULL,
  `tgl_lahir_k` date NOT NULL,
  `jam_k` varchar(15) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`id_kelahiran`, `no_surat`, `id_ttd`, `id_penduduk`, `nama_kelahiran`, `jk_k`, `tmp_lahir_k`, `tgl_lahir_k`, `jam_k`, `nama_ayah`, `anak_ke`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/Kelahiran/VII/2020', 2, 2, 'Adiguna', 'Laki-Laki', 'Banjarmasin', '2020-07-29', '10:00', 'Testing', 3, '2020-07-29', '2020-07-28', 'Proses'),
(2, NULL, 1, 1, 'Adiguna', 'Laki-Laki', 'Banjarmasin', '2020-08-08', '12:00', 'Testing', 2, '2020-08-08', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `id_kematian` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `hari_kematian` varchar(15) NOT NULL,
  `tgl_kematian` date NOT NULL,
  `sebab_kematian` varchar(100) NOT NULL,
  `tempat_kematian` varchar(100) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`id_kematian`, `no_surat`, `id_ttd`, `id_penduduk`, `hari_kematian`, `tgl_kematian`, `sebab_kematian`, `tempat_kematian`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/Kematian/VII/2021', 2, 2, 'Selasa', '2020-07-23', 'Demam', 'Pelaihari', '2020-07-30', '2020-09-30', 'Proses'),
(2, NULL, 1, 1, 'Selasa', '2020-08-08', 'Demam', 'Pelaihari', '2020-08-08', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `status_kk` varchar(25) DEFAULT NULL,
  `foto_kk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `id_penduduk`, `status_kk`, `foto_kk`) VALUES
(2, '12345', 2, 'Kepala Keluarga', 'IMG-20200216-WA0010.jpg'),
(7, '123', 3, 'Kepala Keluarga', 'IMG-20191121-WA0079.jpg'),
(8, '12345', 4, 'Istri', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nikah`
--

CREATE TABLE `tb_nikah` (
  `id_nikah` int(11) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nikah`
--

INSERT INTO `tb_nikah` (`id_nikah`, `no_surat`, `id_ttd`, `id_penduduk`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, '001/nikah/VII/2020', 1, 2, '2020-07-30', '2020-07-30', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(4, 'Belum/tidak bekerja'),
(5, 'Mengurus rumah tangga'),
(6, 'Pelajar/Mahasiswa'),
(7, 'Pensiun'),
(8, 'Pegawai Negeri Sipil'),
(9, 'Tentara Nasional Indonesi'),
(10, 'Kepolisian RI'),
(11, 'Perdagangan'),
(12, 'Petani/pekebun');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'SD/Sederajat'),
(2, 'SLTA/Sederajat'),
(3, 'SLTP/Sederajat'),
(4, 'Tidak/Belum Sekolah'),
(5, 'Akademi/Diploma III/S. Mu'),
(6, 'Strata II'),
(7, 'Strata III'),
(8, 'Belum Tamat SD'),
(9, 'Diploma I/II'),
(10, 'Diploma IV/Strata I');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `id_kec` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `foto_ktp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nik`, `nama_penduduk`, `tmp_lahir`, `tgl_lahir`, `gol_darah`, `jk`, `alamat_lengkap`, `rt`, `rw`, `id_kec`, `id_desa`, `agama`, `status_perkawinan`, `kewarganegaraan`, `id_pendidikan`, `id_pekerjaan`, `foto_ktp`) VALUES
(1, '6253652627', 'M. Syahbani Adiguna', 'Landasan Ulin Timur', '2020-07-27', 'B', 'Laki-laki', 'Asam-Asam', '02', '01', 1, 1, 'Islam', 'Belum', 'WNI', 2, 5, 'IMG-20200216-WA0010.jpg'),
(2, '62536526273', 'M. Syahbani Adiguna 2', 'Landasan Ulin Timur', '2020-07-27', 'B', 'Laki-laki', 'Jl. A. Yani KM. 22', '03', '02', 1, 1, 'Islam', 'Belum', 'WNI', 3, 4, 'frame IG SMK.jpg'),
(3, '1234567890', 'Emil', 'Banjarmasin', '2020-08-08', 'A', 'Laki-laki', 'Test', '03', '02', 1, 1, 'Islam', 'Belum kawin', 'WNI', 5, 6, 'IMG-20200216-WA0010.jpg'),
(4, '12345678901', 'Adiguna', 'Banjarmasin', '2020-08-10', 'B', 'Laki-laki', 'Jln. Bina Bersama ', '02', '01', 1, 1, 'Islam', 'Belum kawin', 'WNI', 5, 4, 'IMG-20191121-WA0079.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_penduduk` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto_pengguna` varchar(40) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `id_penduduk`, `username`, `password`, `level`, `foto_pengguna`) VALUES
(1, NULL, 'admin', 'admin', 'Admin', 'frame IG SMK.jpg'),
(3, NULL, 'pimpinan', 'pimpinan', 'Pimpinan', 'default.png'),
(4, 2, '1234', '1234', 'Masyarakat', 'default.png'),
(9, 3, '123', '123', 'Masyarakat', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `alamat_pindah` text NOT NULL,
  `jumlah_pindah` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pindah`
--

INSERT INTO `tb_pindah` (`id_pindah`, `no_surat`, `id_ttd`, `id_penduduk`, `alamat_pindah`, `jumlah_pindah`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, NULL, 0, 1, 'Tanah Laut', 2, '2020-07-29', '2020-07-29', 'Selesai'),
(2, '001/Pindah/VII/2021', 1, 1, 'Tanah Laut', 2, '2020-07-29', '2020-07-29', 'Proses'),
(3, '', 1, 2, 'Tanah Laut 2', 3, '2020-08-01', NULL, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tidak_mampu`
--

CREATE TABLE `tb_tidak_mampu` (
  `id_tidak_mampu` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tidak_mampu`
--

INSERT INTO `tb_tidak_mampu` (`id_tidak_mampu`, `no_surat`, `id_ttd`, `id_penduduk`, `keterangan`, `tgl_permohonan`, `tgl_selesai`, `status`) VALUES
(1, NULL, 1, 1, 'Untuk Mendaftar Kuliah', '2020-08-08', NULL, 'Proses'),
(2, '001/tidak_mapu/VII/2', 1, 2, 'Untuk Mendaftar Kuliah', '2020-08-10', '1970-01-01', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ttd`
--

CREATE TABLE `tb_ttd` (
  `id_ttd` int(11) NOT NULL,
  `nama_ttd` varchar(100) NOT NULL,
  `nik_ttd` varchar(25) NOT NULL,
  `tgl_lahir_ttd` date NOT NULL,
  `tmp_lahir_ttd` varchar(50) NOT NULL,
  `alamat_ttd` text,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ttd`
--

INSERT INTO `tb_ttd` (`id_ttd`, `nama_ttd`, `nik_ttd`, `tgl_lahir_ttd`, `tmp_lahir_ttd`, `alamat_ttd`, `jabatan`) VALUES
(1, 'M. Syahbani Adiguna', '6253652627', '2020-07-27', 'Landasan Ulin Timur', 'Kurau', 'Kepala Desa'),
(2, 'M. Syahbani Adiguna', '62536526273', '2020-07-27', 'Landasan Ulin Timur', NULL, 'Sekertaris Desa'),
(3, 'Emiliyana', '1234567890', '2020-07-30', 'Banjarmasin', 'Asam-asam 1', 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indexes for table `tb_imb`
--
ALTER TABLE `tb_imb`
  ADD PRIMARY KEY (`id_imb`);

--
-- Indexes for table `tb_izin_usaha`
--
ALTER TABLE `tb_izin_usaha`
  ADD PRIMARY KEY (`id_izin_usaha`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `tb_kehilangan`
--
ALTER TABLE `tb_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indexes for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_nikah`
--
ALTER TABLE `tb_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indexes for table `tb_tidak_mampu`
--
ALTER TABLE `tb_tidak_mampu`
  ADD PRIMARY KEY (`id_tidak_mampu`);

--
-- Indexes for table `tb_ttd`
--
ALTER TABLE `tb_ttd`
  ADD PRIMARY KEY (`id_ttd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  MODIFY `id_domisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_imb`
--
ALTER TABLE `tb_imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_izin_usaha`
--
ALTER TABLE `tb_izin_usaha`
  MODIFY `id_izin_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kehilangan`
--
ALTER TABLE `tb_kehilangan`
  MODIFY `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_nikah`
--
ALTER TABLE `tb_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_tidak_mampu`
--
ALTER TABLE `tb_tidak_mampu`
  MODIFY `id_tidak_mampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_ttd`
--
ALTER TABLE `tb_ttd`
  MODIFY `id_ttd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
