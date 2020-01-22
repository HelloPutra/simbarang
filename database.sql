/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_pengadaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pengadaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pengadaan`;

/*Table structure for table `tb_asset` */

DROP TABLE IF EXISTS `tb_asset`;

CREATE TABLE `tb_asset` (
  `id_asset` int(5) NOT NULL AUTO_INCREMENT,
  `nip` varchar(51) DEFAULT NULL,
  `nama_asset` varchar(51) DEFAULT NULL,
  `satuan` varchar(51) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga_asset` int(10) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_asset`),
  KEY `id_kategori` (`id_kategori`),
  KEY `nip` (`nip`),
  CONSTRAINT `tb_asset_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_asset_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `tb_user` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tb_asset` */

insert  into `tb_asset`(`id_asset`,`nip`,`nama_asset`,`satuan`,`jumlah`,`harga_asset`,`tgl_masuk`,`keterangan`,`id_kategori`) values 
(9,'001','Buku','buah',1,90000,'2019-11-04','AING',7),
(10,'10115359','Binder','buah',1,5000,'2019-11-13','dikit',7),
(11,'10115359','anjing','buah',5,15000,'2019-11-27','Tersedia',9),
(12,'001','Binder','lusin',1,500,'2019-11-19','Tersedia',8),
(13,'001','Mesin Bubut','Unit',-2320,1111111,'2019-11-21','Tersedia',4),
(14,'001','Jahit','unit',-31237,90000,'2019-11-11','dikit',4),
(15,'001','jojodog','buah',-232343,90000,'2019-12-20','banyak',4),
(16,'001','Buku Belajar','Pcs',4,999,'2020-02-23','aasd',7),
(17,'001','Arak','liter',12,99999999,'1999-02-23','Lmao',9),
(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tb_bangunan` */

DROP TABLE IF EXISTS `tb_bangunan`;

CREATE TABLE `tb_bangunan` (
  `id_bangunan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bangunan` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `luas` varchar(10) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_bangunan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bangunan` */

insert  into `tb_bangunan`(`id_bangunan`,`nama_bangunan`,`lokasi`,`luas`,`keterangan`) values 
(1,'Bangunan Kantor 1 Ciawi','Jl. Pelita 1 Ciawi','1200m','Ciawi'),
(2,'Kantor 2','Jl. Perjuangan','1500m','');

/*Table structure for table `tb_bg_bangunan` */

DROP TABLE IF EXISTS `tb_bg_bangunan`;

CREATE TABLE `tb_bg_bangunan` (
  `id_bg_bangunan` int(11) NOT NULL AUTO_INCREMENT,
  `id_bangunan` int(11) DEFAULT NULL,
  `nama_bagian` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_bg_bangunan`),
  KEY `id_bangunan` (`id_bangunan`),
  CONSTRAINT `tb_bg_bangunan_ibfk_1` FOREIGN KEY (`id_bangunan`) REFERENCES `tb_bangunan` (`id_bangunan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bg_bangunan` */

insert  into `tb_bg_bangunan`(`id_bg_bangunan`,`id_bangunan`,`nama_bagian`,`status`,`keterangan`) values 
(6,NULL,'Kusen Jendela Samping','Baik','Mantap'),
(7,2,'Kusen Jendela Samping','Baik','Mantap'),
(8,1,'Pintu Depan','Baik','Mantap');

/*Table structure for table `tb_bg_mesin` */

DROP TABLE IF EXISTS `tb_bg_mesin`;

CREATE TABLE `tb_bg_mesin` (
  `id_bg_mesin` int(5) NOT NULL AUTO_INCREMENT,
  `id_asset` int(5) DEFAULT NULL,
  `nama_bagian` varchar(51) DEFAULT NULL,
  `status` varchar(31) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_bg_mesin`),
  KEY `id_lokasi` (`nama_bagian`),
  KEY `id_asset` (`id_asset`),
  CONSTRAINT `tb_bg_mesin_ibfk_1` FOREIGN KEY (`id_asset`) REFERENCES `tb_asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bg_mesin` */

insert  into `tb_bg_mesin`(`id_bg_mesin`,`id_asset`,`nama_bagian`,`status`,`keterangan`) values 
(3,13,'baud','Baik','kepo'),
(4,13,'Gear','Rusak','kitulah'),
(5,14,'jarum suntik baru','Baik','aasddsadsadsadsa');

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(51) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id_kategori`,`nama_kategori`) values 
(4,'Mesin'),
(5,'Tanah'),
(6,'Barang'),
(7,'Peralatan'),
(8,'Makanan'),
(9,'Minuman');

/*Table structure for table `tb_keluar` */

DROP TABLE IF EXISTS `tb_keluar`;

CREATE TABLE `tb_keluar` (
  `id_keluar` int(5) NOT NULL AUTO_INCREMENT,
  `id_asset` int(5) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jumlah_keluar` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_keluar`),
  KEY `id_asset` (`id_asset`),
  CONSTRAINT `tb_keluar_ibfk_1` FOREIGN KEY (`id_asset`) REFERENCES `tb_asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_keluar` */

insert  into `tb_keluar`(`id_keluar`,`id_asset`,`tgl_keluar`,`jumlah_keluar`) values 
(4,9,'2019-11-06',4),
(6,12,'2019-11-14',3),
(7,15,'2019-12-23',7);

/*Table structure for table `tb_pengadaan` */

DROP TABLE IF EXISTS `tb_pengadaan`;

CREATE TABLE `tb_pengadaan` (
  `id_pengadaan` int(5) NOT NULL AUTO_INCREMENT,
  `id_asset` int(5) DEFAULT NULL,
  `tgl_pengadaan` date DEFAULT NULL,
  `jumlah_kebutuhan` int(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `status` varchar(51) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengadaan`),
  KEY `id_asset` (`id_asset`),
  CONSTRAINT `tb_pengadaan_ibfk_1` FOREIGN KEY (`id_asset`) REFERENCES `tb_asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengadaan` */

insert  into `tb_pengadaan`(`id_pengadaan`,`id_asset`,`tgl_pengadaan`,`jumlah_kebutuhan`,`total_harga`,`status`,`keterangan`) values 
(4,12,'2019-11-15',4,2000,'Ditolak',NULL),
(5,9,'2019-12-20',3,270000,'Pending','loba'),
(6,13,'2019-10-14',6,6666666,'Pending','KEPO'),
(7,15,'2020-01-13',9898,890820000,'Pending','Bagian Barang Kantor');

/*Table structure for table `tb_perbaikan` */

DROP TABLE IF EXISTS `tb_perbaikan`;

CREATE TABLE `tb_perbaikan` (
  `id_perbaikan` int(5) NOT NULL AUTO_INCREMENT,
  `id_asset` int(5) DEFAULT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `jumlah_perbaikan` int(5) DEFAULT NULL,
  `biaya_perbaikan` int(10) DEFAULT NULL,
  `status` varchar(51) DEFAULT NULL,
  `id_bg_mesin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_perbaikan`),
  KEY `id_asset` (`id_asset`),
  KEY `id_bg_mesin` (`id_bg_mesin`),
  CONSTRAINT `tb_perbaikan_ibfk_1` FOREIGN KEY (`id_asset`) REFERENCES `tb_asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_perbaikan_ibfk_2` FOREIGN KEY (`id_bg_mesin`) REFERENCES `tb_bg_mesin` (`id_bg_mesin`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_perbaikan` */

insert  into `tb_perbaikan`(`id_perbaikan`,`id_asset`,`tgl_perbaikan`,`tgl_selesai`,`jumlah_perbaikan`,`biaya_perbaikan`,`status`,`id_bg_mesin`) values 
(1,14,'2019-11-19','2019-11-21',2,10000,'Ditolak',3),
(2,13,'2019-11-21','2019-11-22',2,9,'Pending',3),
(3,14,'2019-12-23','2019-12-26',1,99999,'Pending',3),
(6,15,'2019-12-20','2019-12-28',3,234567,'Pending',4),
(7,14,'2019-12-27','2019-12-31',23,32,'Pending',5);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `nip` varchar(255) NOT NULL,
  `nama` varchar(51) DEFAULT NULL,
  `jabatan` varchar(51) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `username` varchar(51) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`nip`,`nama`,`jabatan`,`no_telp`,`username`,`password`) values 
('001','Pak Admin Saja','Admin','001','admin','21232f297a57a5a743894a0e4a801fc3'),
('011111','ektur','Direktur','0193014904','ektur','80c9af721910cb93559010d7f47e91bb'),
('0115355','Juragan','Kepala Keuangan','0183083013','agan','21232f297a57a5a743894a0e4a801fc3'),
('10115344','Yudi','Kepala Asset','092082058','yudi','c232864d5de2064450915c0b9e4cc0b5'),
('10115359','Ghani','Kepala Bagian','089606264375','ghani','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
