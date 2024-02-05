-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megadataweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--
CREATE DATABASE megadataweb;
USE megadataweb;
CREATE TABLE `tb_barang` (
  `id_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `merek`, `tipe`, `jumlah`) VALUES
('1e2ac932-712d-4003-88b1-ee60d248cfe1', 'converter', 'HSAirPo', 'HS-CM200', 33),
('388227ef-06d9-4471-94d0-3f7baabe6cb2', 'modem', 'ZTE', 'ZXHN F609', 27),
('72733bc2-c039-4a68-9d62-74d3579736cc', 'modem', 'Echo Life', 'HG8546M', 40),
('b8695ce3-316f-49f0-a1c0-02d5f3feacc5', 'Switch', 'tp-link', 'TL-SF1008D', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` varchar(50) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_client`
--

INSERT INTO `tb_client` (`id_client`, `nama_client`, `nik`, `alamat`, `no_telp`) VALUES
('027f3aee-ada0-4a9b-82f4-9a6d97d31c2d', 'BU LOSO', '3273160707970036', 'GANG CENDANA', '085674892999'),
('0b144303-bf8e-4275-b339-8ed5316c5699', 'BAYU-SEROJA', '3273160707970028', 'BELAKANG BRI', '087625124566'),
('246e38dc-aaad-4cbd-9c43-575f8a048601', 'DIAH BADRID', '3273160707970040', 'JL. SEROJA', '085678490299'),
('701ef74d-2d30-418e-9879-ccfc1f5d50ef', 'TIKA PANJI', '3273160707970034', 'SAMPING POSEK PANJI', '087625671213'),
('777cfe93-943b-4d54-8086-ff80baa4f5d2', 'IKE PUJI', '3273160707970035', 'OLEAN', '089762564788'),
('84107e86-f9ef-4486-ae85-dbad62cccb30', 'HARTO', '3273160707970031', 'DAWUHAN', '083257890200'),
('9c38f34b-852b-4d78-a76f-4b18488faf1a', 'FARIS', '3273160707970030', 'DAWUHAN', '085267892100'),
('b86c0cb3-9c5f-4347-b0cf-95e82b479b12', 'IBU-TITIN', '3273160707970027', 'DAWUHAN', '087512266125'),
('bd4aa22d-2bbf-4f9c-a284-f0c1a4108ed7', 'AFIF', '3273160707970039', 'OLEAN', '089756892945'),
('c086fb4a-4086-46ab-9e1d-140a1ed57cab', 'AZIZUN', '32731607079700241', 'TALKANDANG ASRI', '089456782991'),
('d0e67a60-bb3f-44c5-8110-285b3499fdc1', 'JAELANI GREENHILL', '3273160707970038', 'GREENHILL', '082341455267'),
('d2ffea5b-75c1-4492-bb10-9b380125ea1a', 'PRIO PATOKAN', '3273160707970033', 'BELAKANG KECAMATAN SITUBONDO', '087654782788'),
('e28c30da-f7a0-4496-8ab5-511f874e324a', 'NUR HIDAYAT', '3273160707970029', 'OLEAN', '0897625687812'),
('e3ddb2d2-0d8b-411f-9c5b-f145a04c0e56', 'YULIANTONO', '3273160707970042', 'PANPER', '085789696912'),
('e99a21db-2fda-45c3-912a-70a012e9bf22', 'KAMTO', '3273160707970037', 'JL. WR SUPRATMAN', '087586292111'),
('fcfd5aa7-189a-46c6-9033-0194de05148b', 'IPONG/YADI DAWUHAN', '3273160707970032', 'DAWUHAN', '089765274892');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instalasi`
--

CREATE TABLE `tb_instalasi` (
  `id_instalasi` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `odp_port` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `koordinat` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `vlan` varchar(20) NOT NULL,
  `noc` varchar(20) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `sn_modem` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_instalasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_instalasi`
--

INSERT INTO `tb_instalasi` (`id_instalasi`, `id_client`, `odp_port`, `ip`, `koordinat`, `pic`, `vlan`, `noc`, `id_barang`, `sn_modem`, `username`, `password`, `tgl_instalasi`) VALUES
('57ca8e4d-5656-4f88-bd06-27cdf005412c', 'bd4aa22d-2bbf-4f9c-a284-f0c1a4108ed7', 'KANDANG / 2', '172.16.2.141', '-7.723170+113.996785', '085292200577', '801', 'HUSEIN', '388227ef-06d9-4471-94d0-3f7baabe6cb2', 'ZXHNCBDE57D9C', 'afif', '12345678', '2023-12-05'),
('a2618724-e68c-4b5b-8c82-8c44834a8b49', 'b86c0cb3-9c5f-4347-b0cf-95e82b479b12', 'ODP PONDOK PORT 2', '172.16.2.145', '7.63015 114 0199E', '085292200578', '801', 'husein', '388227ef-06d9-4471-94d0-3f7baabe6cb2', 'ZXHNCBDE57D9E', 'ibutitin', '12345678', '2023-12-23'),
('c1d6023c-c090-4440-bfd1-96df0bc39651', 'e3ddb2d2-0d8b-411f-9c5b-f145a04c0e56', 'ODP DEPAN SMK PANJI ', '172.16.2.144', '-7.707182 +114.021934', '087261264712', '801', 'husein', '388227ef-06d9-4471-94d0-3f7baabe6cb2', 'ZXHNCBDE57D9D', 'yuliantono', '12345678', '2023-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instalasi_teknisi`
--

CREATE TABLE `tb_instalasi_teknisi` (
  `id` int(11) NOT NULL,
  `id_instalasi` varchar(50) NOT NULL,
  `id_teknisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_instalasi_teknisi`
--

INSERT INTO `tb_instalasi_teknisi` (`id`, `id_instalasi`, `id_teknisi`) VALUES
(21, '57ca8e4d-5656-4f88-bd06-27cdf005412c', '70657d3b-c299-4039-b74b-db177f7a3cff'),
(22, 'c1d6023c-c090-4440-bfd1-96df0bc39651', 'ace692cd-39b3-48c3-b571-e61b5d354355'),
(23, 'a2618724-e68c-4b5b-8c82-8c44834a8b49', 'f957a7da-90ff-43fe-b941-435f6b615d9c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfo`
--

CREATE TABLE `tb_rfo` (
  `id_rfo` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `couse` varchar(50) NOT NULL,
  `root_couse` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_rfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rfo`
--

INSERT INTO `tb_rfo` (`id_rfo`, `id_client`, `couse`, `root_couse`, `action`, `status`, `tgl_rfo`) VALUES
('6bf96a0a-6c50-42df-a729-e7b0cbdc8bb8', '027f3aee-ada0-4a9b-82f4-9a6d97d31c2d', 'TIDAK BISA INTERNETAN / WA', 'CHANNEL COLLISSION / TABRAKAN CHANNEL', 'GANTI PENGATURAN CHANNEL', 'solved', '2024-01-01'),
('46194b33-5504-4387-9fa1-bdd423d52090', '9c38f34b-852b-4d78-a76f-4b18488faf1a', 'WIFI TIDAK ADA INTERNET', 'MODEM HANG', 'REPLACE MODEM / GANTI MODEM', 'solved', '2024-01-01'),
('397641f6-ab68-41eb-9912-db293d8ea097', '9c38f34b-852b-4d78-a76f-4b18488faf1a', 'TIDAK ADA INTERNET', 'CONVERTER MATI / RUSAK', 'REPLACE CONVERTER', 'solved', '2023-12-13'),
('f09be3eb-3682-4405-a273-28cb4dcd9afd', 'e28c30da-f7a0-4496-8ab5-511f874e324a', 'WIFI MATI', 'ADAPTOR KURANG NYOLOK', 'DICOLOKIN', 'solved', '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfo_barang_keluar`
--

CREATE TABLE `tb_rfo_barang_keluar` (
  `id` int(11) NOT NULL,
  `id_rfo` varchar(50) NOT NULL,
  `id_barang_keluar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rfo_barang_keluar`
--

INSERT INTO `tb_rfo_barang_keluar` (`id`, `id_rfo`, `id_barang_keluar`) VALUES
(22, '46194b33-5504-4387-9fa1-bdd423d52090', '1e2ac932-712d-4003-88b1-ee60d248cfe1'),
(23, '397641f6-ab68-41eb-9912-db293d8ea097', '1e2ac932-712d-4003-88b1-ee60d248cfe1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfo_barang_masuk`
--

CREATE TABLE `tb_rfo_barang_masuk` (
  `id` int(11) NOT NULL,
  `id_rfo` varchar(50) NOT NULL,
  `id_barang_masuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rfo_barang_masuk`
--

INSERT INTO `tb_rfo_barang_masuk` (`id`, `id_rfo`, `id_barang_masuk`) VALUES
(9, 'c2705885-9109-451e-bea4-014916474672', '6cb2d2ce-b027-4dad-ada0-4aaeeb1574c7');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfo_barang_rusak`
--

CREATE TABLE `tb_rfo_barang_rusak` (
  `id` int(11) NOT NULL,
  `id_rfo` varchar(50) NOT NULL,
  `id_barang_rusak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rfo_barang_rusak`
--

INSERT INTO `tb_rfo_barang_rusak` (`id`, `id_rfo`, `id_barang_rusak`) VALUES
(6, '46194b33-5504-4387-9fa1-bdd423d52090', '1e2ac932-712d-4003-88b1-ee60d248cfe1'),
(7, '397641f6-ab68-41eb-9912-db293d8ea097', '1e2ac932-712d-4003-88b1-ee60d248cfe1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfo_teknisi`
--

CREATE TABLE `tb_rfo_teknisi` (
  `id` int(11) NOT NULL,
  `id_rfo` varchar(50) NOT NULL,
  `id_teknisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rfo_teknisi`
--

INSERT INTO `tb_rfo_teknisi` (`id`, `id_rfo`, `id_teknisi`) VALUES
(46, '6bf96a0a-6c50-42df-a729-e7b0cbdc8bb8', '70657d3b-c299-4039-b74b-db177f7a3cff'),
(47, '46194b33-5504-4387-9fa1-bdd423d52090', '5a5652c5-dd8a-4d58-9335-200c9aae1a03'),
(48, '397641f6-ab68-41eb-9912-db293d8ea097', 'ace692cd-39b3-48c3-b571-e61b5d354355'),
(49, '397641f6-ab68-41eb-9912-db293d8ea097', 'f957a7da-90ff-43fe-b941-435f6b615d9c'),
(50, 'f09be3eb-3682-4405-a273-28cb4dcd9afd', '70657d3b-c299-4039-b74b-db177f7a3cff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` varchar(50) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `nama_teknisi`, `alamat`, `no_telp`) VALUES
('5a5652c5-dd8a-4d58-9335-200c9aae1a03', 'Fahri', 'Jl. Argopuro GG VII RT.03/RW.20 MIMBAAN PANJI SITUBONDO', '089610443373'),
('70657d3b-c299-4039-b74b-db177f7a3cff', 'Rochman', 'Kampung Krajan RT/RW 001/001 Desa Wringin Anom, Kecamatan Asembagus', '089530452353'),
('ace692cd-39b3-48c3-b571-e61b5d354355', 'Rifki', 'BANJAR PATOMAN, RT 04/RW 04, AMANDANOM, DAMPIT, KAB. MALANG, JAWA TIMUR', '082131409224'),
('f957a7da-90ff-43fe-b941-435f6b615d9c', 'Tezar', 'Wringin anom Rt 01 Rw 01 Asembagus Situbondo', '082231232066');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('3e5e4821-a4de-11ee-a593-0a0027000012', 'Rahel MAulidya', 'rahel', '3e5ba10fd34eb4f4515875bf6531ba27373001a3'),
('9e7b6e30-a4dd-11ee-a593-0a0027000012', 'Ridho Alba', 'albadriyano', '40bd001563085fc35165'),
('f7f32729-a4dd-11ee-a593-0a0027000012', 'Bintang Aulia', 'bintang', '1e1166f6d3034379d06c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tb_instalasi`
--
ALTER TABLE `tb_instalasi`
  ADD PRIMARY KEY (`id_instalasi`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_instalasi_teknisi`
--
ALTER TABLE `tb_instalasi_teknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rfo_barang_keluar`
--
ALTER TABLE `tb_rfo_barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rfo_barang_masuk`
--
ALTER TABLE `tb_rfo_barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rfo_barang_rusak`
--
ALTER TABLE `tb_rfo_barang_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rfo_teknisi`
--
ALTER TABLE `tb_rfo_teknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_instalasi_teknisi`
--
ALTER TABLE `tb_instalasi_teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_rfo_barang_keluar`
--
ALTER TABLE `tb_rfo_barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_rfo_barang_masuk`
--
ALTER TABLE `tb_rfo_barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_rfo_barang_rusak`
--
ALTER TABLE `tb_rfo_barang_rusak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_rfo_teknisi`
--
ALTER TABLE `tb_rfo_teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_instalasi`
--
ALTER TABLE `tb_instalasi`
  ADD CONSTRAINT `tb_instalasi_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`),
  ADD CONSTRAINT `tb_instalasi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
