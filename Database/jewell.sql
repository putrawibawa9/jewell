/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.24-MariaDB : Database - jewell
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jewell` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `jewell`;

/*Table structure for table `pembelian` */

DROP TABLE IF EXISTS `pembelian`;

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_beli` int(20) NOT NULL,
  `totalharga` bigint(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `metode_pembayaran` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`,`id_user`,`id_barang`),
  KEY `fkiduser` (`id_user`),
  KEY `fkidikan` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pembelian` */

insert  into `pembelian`(`id_pembelian`,`id_user`,`id_barang`,`nama_barang`,`jumlah_beli`,`totalharga`,`status`,`metode_pembayaran`) values 
(2,1,1,'White Rock Necklace',2,1000000,'LUNAS','cod'),
(3,2,1,'White Rock Necklace',2,0,'Belum Lunas','paylater');

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id_admin`,`nama_admin`,`username`,`password`,`no_hp`) values 
(1,'admin','admin','admin',8562561565);

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stok` int(20) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`id_barang`,`nama_barang`,`deskripsi`,`stok`,`harga`,`gambar`,`tanggal_input`) values 
(1,'White Rock Necklace','test',100,2000000,'jewel1.jpg','2024-01-19'),
(3,'White Snow Bracelet','test',10,100000,'jewel2.jpg','2024-01-19'),
(4,'Gold Ring','test',100,500000,'jewel3.jpg','2024-01-19'),
(5,'Gold Bracelet','test',100,200000,'jewel4.jpg','2024-01-19'),
(6,'Double Gld Ring','test',200,400000,'jewel5.jpg','2024-01-19'),
(7,'6 Sins bracelet','test',200,1000000,'jewel6.jpg','2024-01-19'),
(8,'DIOR Gold Bracelet','test',100,1000000,'jewel7.jpg','2024-01-19');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis` varchar(2) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`username`,`password`,`alamat`,`jenis`,`no_hp`,`tanggal_lahir`) values 
(1,'Yohanes Surya Wijaya','yohansw','yohansw','Denpasar','L',85858781375,'0000-00-00'),
(2,'test','test','test','test','L',867167613,'0000-00-00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
