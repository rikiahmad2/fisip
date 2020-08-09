-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for fisip
CREATE DATABASE IF NOT EXISTS `fisip` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fisip`;

-- Dumping structure for table fisip.aktif_kuliah
CREATE TABLE IF NOT EXISTS `aktif_kuliah` (
  `id_aktif` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `keperluan` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_aktif`),
  KEY `FK_aktif_kuliah_mahasiswa` (`id_mahasiswa`),
  CONSTRAINT `FK_aktif_kuliah_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.aktif_kuliah: ~1 rows (approximately)
/*!40000 ALTER TABLE `aktif_kuliah` DISABLE KEYS */;
INSERT INTO `aktif_kuliah` (`id_aktif`, `id_mahasiswa`, `keperluan`, `created`) VALUES
	(1, 1, 'beasiswa', '2020-08-03 09:01:02');
/*!40000 ALTER TABLE `aktif_kuliah` ENABLE KEYS */;

-- Dumping structure for table fisip.beasiswa
CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `nama_beasiswa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_beasiswa`),
  KEY `FK_beasiswa_mahasiswa` (`id_mahasiswa`),
  CONSTRAINT `FK_beasiswa_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.beasiswa: ~1 rows (approximately)
/*!40000 ALTER TABLE `beasiswa` DISABLE KEYS */;
INSERT INTO `beasiswa` (`id_beasiswa`, `id_mahasiswa`, `nama_beasiswa`) VALUES
	(1, 1, 'Bank Indonesia');
/*!40000 ALTER TABLE `beasiswa` ENABLE KEYS */;

-- Dumping structure for table fisip.magang
CREATE TABLE IF NOT EXISTS `magang` (
  `id_magang` int(11) NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(50) DEFAULT NULL,
  `di` varchar(50) DEFAULT NULL,
  `id_mahasiswa` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_magang`),
  KEY `FK_magang_mahasiswa` (`id_mahasiswa`),
  CONSTRAINT `FK_magang_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.magang: ~1 rows (approximately)
/*!40000 ALTER TABLE `magang` DISABLE KEYS */;
INSERT INTO `magang` (`id_magang`, `tujuan`, `di`, `id_mahasiswa`) VALUES
	(1, 'Kepala Bapenas', 'PT. Inti', 1);
/*!40000 ALTER TABLE `magang` ENABLE KEYS */;

-- Dumping structure for table fisip.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '0',
  `nim` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `semester` varchar(50) NOT NULL DEFAULT '0',
  `program` varchar(50) DEFAULT NULL,
  `tahun_akademik` varchar(50) DEFAULT NULL,
  `nomor_hp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.mahasiswa: ~3 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `password`, `nim`, `jurusan`, `semester`, `program`, `tahun_akademik`, `nomor_hp`) VALUES
	(1, 'riki', 'riki', '1177050100', 'Informatika', '7', 'S1', '2020', '055442'),
	(2, 'ade', 'ade', '1177050200', 'psiko', '8', 'S1', '2019', '45555555'),
	(6, 'ROYAN', 'ROYAN', '1177050900', 'Sosiologi', 'S1', '8', '2020', '0222229');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table fisip.notif
CREATE TABLE IF NOT EXISTS `notif` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `id_aktif` int(11) DEFAULT NULL,
  `id_magang` int(11) DEFAULT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_beasiswa` int(11) DEFAULT NULL,
  `id_sk` int(11) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_notif`),
  KEY `FK_notif_aktif_kuliah` (`id_aktif`),
  KEY `FK_notif_mahasiswa` (`id_mahasiswa`),
  KEY `FK_notif_magang` (`id_magang`),
  KEY `FK_notif_beasiswa` (`id_beasiswa`),
  KEY `FK_notif_sksidang` (`id_sk`),
  CONSTRAINT `FK_notif_aktif_kuliah` FOREIGN KEY (`id_aktif`) REFERENCES `aktif_kuliah` (`id_aktif`) ON DELETE CASCADE,
  CONSTRAINT `FK_notif_beasiswa` FOREIGN KEY (`id_beasiswa`) REFERENCES `beasiswa` (`id_beasiswa`) ON DELETE CASCADE,
  CONSTRAINT `FK_notif_magang` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE,
  CONSTRAINT `FK_notif_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE,
  CONSTRAINT `FK_notif_sksidang` FOREIGN KEY (`id_sk`) REFERENCES `sksidang` (`id_sk`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.notif: ~4 rows (approximately)
/*!40000 ALTER TABLE `notif` DISABLE KEYS */;
INSERT INTO `notif` (`id_notif`, `id_aktif`, `id_magang`, `id_mahasiswa`, `id_beasiswa`, `id_sk`, `jenis`) VALUES
	(1, NULL, 1, 1, NULL, NULL, 'Izin Magang'),
	(2, 1, NULL, 1, NULL, NULL, 'Aktif Kuliah'),
	(3, NULL, NULL, 1, 1, NULL, 'Beasiswa'),
	(4, NULL, NULL, 1, NULL, 1, 'SK Sidang');
/*!40000 ALTER TABLE `notif` ENABLE KEYS */;

-- Dumping structure for table fisip.sksidang
CREATE TABLE IF NOT EXISTS `sksidang` (
  `id_sk` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `judul` text,
  `dp1` varchar(50) DEFAULT NULL,
  `dp2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sk`),
  KEY `FK_sksidang_mahasiswa` (`id_mahasiswa`),
  CONSTRAINT `FK_sksidang_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.sksidang: ~1 rows (approximately)
/*!40000 ALTER TABLE `sksidang` DISABLE KEYS */;
INSERT INTO `sksidang` (`id_sk`, `id_mahasiswa`, `judul`, `dp1`, `dp2`) VALUES
	(1, 1, 'PEMBUATAN SOFTWARE INVOICE OTOMATIS DAN PEMANTAUAN PROJECT BERBASIS WEB PT.SENOPATI', 'Drs. H. Ade Hidayat, M.Ag.', 'Drs. H. Ade Hidayat, M.Ag.');
/*!40000 ALTER TABLE `sksidang` ENABLE KEYS */;

-- Dumping structure for table fisip.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_notif` int(11) DEFAULT NULL,
  `Jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_surat_keluar`),
  KEY `FK_surat_keluar_notif` (`id_notif`),
  CONSTRAINT `FK_surat_keluar_notif` FOREIGN KEY (`id_notif`) REFERENCES `notif` (`id_notif`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.surat_keluar: ~1 rows (approximately)
/*!40000 ALTER TABLE `surat_keluar` DISABLE KEYS */;
INSERT INTO `surat_keluar` (`id_surat_keluar`, `id_notif`, `Jenis`) VALUES
	(9, 3, 'Beasiswa');
/*!40000 ALTER TABLE `surat_keluar` ENABLE KEYS */;

-- Dumping structure for table fisip.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table fisip.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
	(1, 'admin', 'admin', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
