/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 8.0.30 : Database - db_school
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_school` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_school`;

/*Table structure for table `tb_students` */

DROP TABLE IF EXISTS `tb_students`;

CREATE TABLE `tb_students` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nis` char(7) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `gambar` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_students` */

insert  into `tb_students`(`id`,`nama`,`nis`,`status`,`alamat`,`tanggal_lahir`,`gambar`) values 
(1,'Aghnia Aulia','22.6385','Active','Karanganyar Gg. 6 RT 004 RW 002 Tirto Kab. Pekalongan','2007-04-22','AU.png'),
(2,'Ahmad Liwaul Hamdi','22.6386','Active','Desa Karangbrai RT 010 RW 003 Kec. Bodeh, Kab. Pemalang','2007-04-01','ALH.png'),
(3,'Ahmad Putra Binangkit','22.6387','Active','Kelurahan Purbasana, Kec. tarub, Kab. Tegal','2007-08-21','APB.png'),
(4,'Akhmad Rif\'an Riziq','22.6388','Active','Kec. Ampel Gading, Kab Pemalang','2007-05-01','RR.png'),
(5,'Amelia Zahra','22.6389','Active','Simbang Kulon, Kec. Buaran, Kab. Pekalongan','2007-08-04','AZ.png'),
(6,'Azhar Ahmad LB','22.6390','Active','Pekuncen, Kec Wiradesa, Kab Pekalongan','2007-05-05','AH.png'),
(7,'Azizah Ibtisamaah','22.6391','Active','Kec. Jeruksari, Kab Pekalongan','2007-03-31','AI.png'),
(8,'Dani Ramadhan','22.6392','Me','Dusun Sentul, Kel. Cikampek Selatan, Kec. Cikampek, Kab. Karawang','2007-09-17','RM.jpg'),
(9,'Farel Ahmad Ardiansyah','22.6393','Active','Waru Kidul, Kec. Wiradesa, Kab. Pekalongan','2007-05-18','FA.png'),
(10,'Fiqih Hadinata','22.6394','Active','Jatiroyom, Kec. Bodeh, Kab. Pemalang','2007-01-04','FH.png'),
(11,'Indri Aryani','22.6395','Active','Jl Karya Bakti, Kec. Pekalongan Barat, Kab. Pekalongan','2008-01-02','IA.png'),
(12,'Karima','22.6396','Active','Sokoduwet, Kec. Pekalongan Selatan, Kab. Pekalongan','2007-07-01','K.png'),
(13,'Khoeru Ziddan','22.6397','Active','Sokoduwet, Kec. Pekalongan Selatan, Kab. Pekalongan','2006-05-17','KZ.png'),
(14,'Adrik Manzela','22.6398','Active','Dusun Milahan Timur, Rowoembu, Kec Wonopringgo, Kab Pekalongan','2007-07-30','AM.png'),
(15,'Najwa Shidqi','22.6399','Active','JL. Otto Iskandardinata Sokoduwet, Kec Pekalongan Selatan, Kab Pekalongan','2006-11-01','NS.png'),
(16,'Marissa Fatika Sari','22.6400','Active','JL. Otto Iskandardinata Sokoduwet, Kec Pekalongan Selatan, Kab Pekalongan','2007-06-08','MF.png'),
(17,'Arfin Willy','22.6401','Active','Bardao Atambua Barat Belu, Nusa Tenggara Timur','2007-09-03','AW.png'),
(18,'Muchammad arvi Ichsan','22.6402','Active','Kel. Bendan, Kec.  Pekalongan Barat, Kab. Pekalongan','2007-03-18','AIC.png'),
(19,'Muhamad Afrizal Sayfulah','22.6403','Active','Ds. Krajan, Kec. Jambu, Kab. Semarang','2007-04-22','AS.png'),
(20,'Muhamad Ibnu Jarir Ath-Thabari','22.6404','Active','Ds. Gembongdadi, Suradadi, Tegal','2006-08-24','IJ.png'),
(21,'Muhamad Ilham Al Ghofiri','22.6405','Siswa Keluar','Radudongkal, Kab. Pemalang',NULL,'XI.png'),
(22,'Muhammad Adi Ghilman','22.6406','Active','Dusun Pamutihan RT 10 RW 03, Kel. Karangbrai, Kec. Bodeh, Kab. Pemalang','2006-05-06','AG.png'),
(23,'Muhammad Daniel Firdaus','22.6407','Active','Jl. Balaidesa Podo No. 53 RT 07 RW 2 Gang Masjid Jami Darul Falah','2007-02-06','DF.png'),
(24,'Muhamad Dava Mubaligh','22.6408','Active','Dukuh Pujut RT RW 004 002 Kelurahan Pujut Kec. Tersono Kab. Batang','2006-07-24','DM.png'),
(25,'Muhammad Dimas Saputro','22.6409','Active','Buaran Gg 3 No. 277 A RT 05 RW 03 Kec. Pekalongan Selatan','2007-05-07','DS.png'),
(26,'Muhammad Indra Isnawan','22.6410','Active','Dk Pujut RT RW 005 002 Kelurahan Pujut Kec. Tersono Kab. Batang','2007-01-26','II.png'),
(27,'Muhammad Jihadil Barran','22.6412','Siswa Keluar','NO DATA',NULL,'XI.png'),
(28,'Muhammad Irfan Amrullah','22.6411','Active','Kec. Warungasem, Kab. Batang','2007-01-22','IAM.png'),
(29,'Muhammad Khirzul Iman','22.6413','Active','Kuripan Lor RT 3 RW 2 Kec. Pekalongan Selatan','2007-06-26','KI.png'),
(30,'Muhammad Najmudin Alwan','22.6414','Active','Desa Balutan RT RW 008 004 Kelurahan Purwoharjo Kec. Comal Kab. Pemalang','2007-04-03','NAL.png'),
(31,'Nabila Oktaviani','22.6415','Active',': Jl. Otto Iskandardinata RT 003 RW 004 Sokoduwet Kota Pekalongan','2006-10-01','NO.png'),
(32,'Naifila Putri Agustina','22.6416','Active','Simbang Kulon Gg.2 RT 2 RW 1 Kec. Buaran Kab. Pekalongan','2007-08-17','NP.png'),
(33,'Nova Andini','22.6417','Active','Simbang Kulon RT 20 RW 7 Buaran Pekalongan 51171','2007-01-06','NAN.png'),
(34,'Nur Atikah','22.6418','Active','Kebahan Lor RT 03 RW 06 Banyurip Ageng Pekalongan 51131','2007-04-11','NA.png'),
(35,'Qolby Surur Hidayat','22.6419','status','Kalimas RT 17 RW 02 Randudongkal Pemalang 52353','2007-07-20','QS.png'),
(36,'Raffa Jihan Nur Assyifa','22.6420','Active','Dusun Bayatan Purwosari RT 02 RW 02 Comal Pemalang 52363','2007-05-29','RJ.png'),
(37,'Reza Ubaidillah Kurniawan','22.6421','Active','Jl. Siklepuh Raya Perum Shapire Residence Blok O No. 20 Kab. Tegal','2007-10-23','RU.png'),
(38,'Siti Nurhaliza','22.6422','Active','Bendulmerisi Gg. 2 1 Kec. Wonocolo Kota Surabaya','2006-08-18','SN.png'),
(39,'Sultan Daffa Arya satya','22.6423','Active','Jatingarang RT 02 RW 01 Jatirejo Ampel Gading Pemalang','2007-06-08','SD.png'),
(40,'Wildan Zakky Alfattan','22.6424','Active','Kebandungan RT 001 RW 003 Bodeh Pemalang','2007-10-10','WZ.png'),
(41,'Mine','22.2222','My GF','Perum Griya Citra Persada Blok A no 44 Cikampek, Karawang','2007-11-04','mine.png');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`) values 
(1,'admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
