﻿# Host: localhost  (Version 5.6.20)
# Date: 2017-02-19 16:34:40
# Generator: MySQL-Front 5.4  (Build 4.10)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "cake_sessions"
#

DROP TABLE IF EXISTS `cake_sessions`;
CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  `deleted` int(11) unsigned NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "cake_sessions"
#

INSERT INTO `cake_sessions` VALUES ('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00'),('jbnknccb7bke4bvo6qbkcjgiq2','Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}',1397674648,0,0,'0000-00-00 00:00:00');

#
# Structure for table "carousels"
#

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "carousels"
#


#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'Berita',0,'2017-02-19 15:28:24',NULL),(2,'Pengumuman',0,'2017-02-19 15:29:31',NULL);

#
# Structure for table "com_backgrounds"
#

DROP TABLE IF EXISTS `com_backgrounds`;
CREATE TABLE `com_backgrounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(200) NOT NULL,
  `description` text NOT NULL,
  `src` char(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "com_backgrounds"
#

INSERT INTO `com_backgrounds` VALUES (1,'Map of the world','Map of the world','login-1.jpg',1,'2014-12-14 01:03:38','2014-12-21 00:54:26',0,'0000-00-00 00:00:00'),(2,'dsfdsfds','fdsfdsfdsf','login-2.jpg',0,'2014-12-14 01:03:38','2015-01-08 16:55:27',0,'0000-00-00 00:00:00'),(3,'dsfdsfds','fdsfdsfdsf','login-3.jpg',0,'2014-12-14 01:03:38','2014-12-15 08:51:47',0,'0000-00-00 00:00:00'),(4,'dsfdsfds','fdsfdsfdsf','login-4.jpg',0,'2014-12-14 01:03:38','2014-12-15 08:51:47',0,'0000-00-00 00:00:00'),(5,'dsfdsfds','fdsfdsfdsf','login-5.jpg',0,'2014-12-14 01:03:38','2015-01-08 17:08:43',0,'0000-00-00 00:00:00'),(6,'login-whisp.png','login-whisp.png','login-whisp.png',0,'2014-12-21 08:20:47','2015-01-08 16:53:53',0,'0000-00-00 00:00:00'),(7,'Veniam inventore ut eos maxime deserunt incididunt non vel id in aliquam veniam','Asperiores laborum eum ex aliquid sapiente nemo quidem voluptas sint.','Ut porro adipisicing doloribus dolore consequatur Anim tempora dolores omnis in rerum elit tempore anim hic itaque',1,'2015-01-22 00:15:02','2015-01-22 09:12:55',1,'2015-01-22 09:12:55');

#
# Structure for table "configs"
#

DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` char(200) NOT NULL,
  `keterangan` text NOT NULL,
  `displayed` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "configs"
#

INSERT INTO `configs` VALUES (1,'app_name','BASEAPP\r\n',0,0,'2035-01-01 00:00:00'),(2,'company_name','BASEAPP',1,0,'2035-01-01 00:00:00'),(3,'company_address','Jl. Raya Serang km 14.0 Cikupa, Tangerang Banten 15710',1,0,'0000-00-00 00:00:00'),(4,'company_phone','021 4234324324',1,0,'0000-00-00 00:00:00'),(5,'company_fax','021 345435345',1,0,'0000-00-00 00:00:00'),(6,'company_email','info@miznokruge.net ',1,0,'0000-00-00 00:00:00'),(7,'Graha Raflesia, Jl.Raflesia Selatan 11 no 10 Citra Raya, Tangerang','Graha Raflesia, Jl.Raflesia Selatan 11 no 10 Citra Raya, Tangerang',1,1,'2015-03-09 22:20:12'),(8,'company_website','http://www.miznokruge.net',1,0,'0000-00-00 00:00:00'),(9,'welcome_message','Selamat Datang Di Perpustakaan STF Muhammadiyah Tangerang\r\nSelamat Datang!\r\nSitus ini ditujukan untuk anggota Perpustakaan STF Muhammadiyah Tangerang secara khusus dan masyarakat pada umumnya. Layanan-layanan jarak jauh disediakan pada situs ini untuk memberikan kemudahan bagi pengguna jasa Perpustakaan STF Muhammadiyah Tangerang untuk meningkatkan pengetahuannya.\r\n\r\nPerpustakaan STF Muhammadiyah Tangerang merupakan unit yang berfungsi memberikan pelayanan informasi kepada mahasiswa, dosen dalam melaksanakan tugas-tugas Tri Dharma Perguruan Tinggi yang mencakup pendidikan, penelitian dan pengabdian kepada masyarakat. Perpustakaan STF Muhammadiyah Tangerang dilengkapi dengan beragam bahan pustaka yang terdiri dari buku literatur baik dalam bahasa Indonesia maupun bahasa Inggris, majalah, jurnal ilmiah serta buku ilmu pengetahuan lainnya. Fasilitas Perpustakaan STF Muhammadiyah Tangerang digunakan oleh mahasiswa, dosen, karyawan dan alumni STF Muhammadiyah Tangerang.\r\n\r\nPerpustakaan STF Muhammadiyah Tangerang untuk program profesional dan sarjana terletak beberapa lokasi kampus yaitu di kampus D - depok , kampus E - kelapa dua,kampus J - Kalimalang, Akademi Kebidanan serta perpustakaan program pasca sarjana terletak di kampus C - kenari . Sedangkan perpustakaan audio visual dan Jurnal Elektronik terdapat di kampus depok. Dan semua cabang perpustakaan universitas gunadarma menggunakan sistem informasi perpustakaan yang terintegrasi satu sama lain. ',1,0,'0000-00-00 00:00:00'),(10,'debug_mode','0',1,0,'0000-00-00 00:00:00'),(11,'logo','1422438735.jpg',1,0,'0000-00-00 00:00:00');

#
# Structure for table "doctor_schedules"
#

DROP TABLE IF EXISTS `doctor_schedules`;
CREATE TABLE `doctor_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `sunday` varchar(50) NOT NULL,
  `monday` varchar(50) NOT NULL,
  `tuesday` varchar(50) NOT NULL,
  `wednesday` varchar(50) NOT NULL,
  `thursday` varchar(50) NOT NULL,
  `friday` varchar(50) NOT NULL,
  `saturday` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "doctor_schedules"
#


#
# Structure for table "doctors"
#

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `specialist` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "doctors"
#


#
# Structure for table "faqs"
#

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `deleted_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "faqs"
#

/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'berapa lama peminjaman untuk anggota?','4 hari untuk mahasiswa,\r\n5 hari untuk dosen','2013-10-17 01:48:01','0000-00-00 00:00:00',0),(2,'sdfdsf','erewrewrewrewrejwre\r\nwrewrewrweghjrgwejhrgejkwrwe\r\nrewhjrwegjhrgwejrwe\r\nrewrbwenmkrbewrewr\r\n','2013-10-17 01:50:31','0000-00-00 00:00:00',0),(3,'Suspendisse sapien elit, iaculis vel lectus vel, aliquam elementum sem! Curabitur euismod massa non sapien feugiat gravida et non tortor. Duis consectetur, leo porttitor cras amet.\r\n','Morbi dictum semper leo in auctor. Vestibulum ante ipsum primis in faucibus orci volutpat.\r\n','2013-10-17 01:50:50','0000-00-00 00:00:00',0),(4,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ullamcorper enim est, vitae condimentum nibh elementum in. Phasellus orci aliquam.\r\n','Curabitur ultrices ullamcorper nunc nec porta. Vivamus molestie felis commodo turpis duis.\r\n','2013-10-17 01:51:09','0000-00-00 00:00:00',0),(5,'Quisque ac iaculis lorem, eget fringilla ligula. Maecenas fringilla aliquam posuere. Fusce rutrum lacinia felis ut ullamcorper? Pellentesque a nullam.\r\n','Quisque suscipit justo magna, sit amet fermentum quam malesuada in. Curabitur suscipit sed tortor sed dignissim. Proin viverra, nulla id ultricies aliquet, tortor lectus hendrerit orci, ut convallis erat lectus vulputate dolor. Aliquam quis diam non felis congue consectetur! Donec arcu enim; nullam.\r\n','2013-10-17 01:52:47','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

#
# Structure for table "groups"
#

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "groups"
#

/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','2012-02-26 21:15:51','2012-02-26 21:15:51',0,'0000-00-00 00:00:00'),(2,'manager','2012-02-26 21:16:02','2012-02-26 21:16:02',0,'0000-00-00 00:00:00'),(3,'sales','2012-02-26 21:16:08','2012-02-26 21:16:08',0,'0000-00-00 00:00:00'),(4,'analyst','2012-04-16 11:37:45','2012-04-16 11:37:45',0,'0000-00-00 00:00:00'),(5,'sales-keliling','2012-11-21 05:47:48','2012-11-21 05:47:48',0,'0000-00-00 00:00:00'),(6,'accountant','2012-11-22 02:40:15','2012-11-22 02:40:15',0,'0000-00-00 00:00:00'),(7,'customer-service ','2013-09-27 05:45:48','2013-09-27 05:45:48',0,'0000-00-00 00:00:00'),(8,'sales-assistant ','2013-09-27 05:48:06','2013-09-27 05:48:06',0,'0000-00-00 00:00:00'),(9,'satisfaction','2013-09-27 05:48:47','2013-09-27 10:20:51',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

#
# Structure for table "login_tokens"
#

DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  `deleted_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "login_tokens"
#


#
# Structure for table "mediafiles"
#

DROP TABLE IF EXISTS `mediafiles`;
CREATE TABLE `mediafiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `type` varchar(5) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "mediafiles"
#


#
# Structure for table "memberships"
#

DROP TABLE IF EXISTS `memberships`;
CREATE TABLE `memberships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `valid_until` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(3) NOT NULL DEFAULT '0',
  `display` int(1) NOT NULL,
  `class` varchar(50) NOT NULL,
  `pembahasan_soal` varchar(12) NOT NULL,
  `kunci_jawaban` varchar(12) NOT NULL,
  `kisi2_soal` varchar(12) NOT NULL,
  `jumlah_set_soal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "memberships"
#

/*!40000 ALTER TABLE `memberships` DISABLE KEYS */;
INSERT INTO `memberships` VALUES (1,'admin',0,0,'2012-02-26 21:15:51','2012-02-26 21:15:51',0,0,'','','','','0'),(2,'Platinum',5000000,12,'2012-02-26 21:16:02','2012-02-26 21:16:02',0,1,'','ok','ok','ok','unlimited'),(3,'Gold',3500000,8,'2012-02-26 21:16:08','2012-02-26 21:16:08',0,1,'orange','remove','ok','remove','100'),(4,'Silver',2000000,6,'2012-04-16 11:37:45','2012-04-16 11:37:45',0,1,'','remove','ok','remove','60'),(5,'Premium',1000000,3,'2012-11-21 05:47:48','2012-11-21 05:47:48',0,1,'','remove','remove','remove','40'),(6,'Standard',0,0,'2012-11-22 02:40:15','2012-11-22 02:40:15',0,0,'','remove','remove','remove','20');
/*!40000 ALTER TABLE `memberships` ENABLE KEYS */;

#
# Structure for table "menus"
#

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `order_row` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

#
# Data for table "menus"
#

INSERT INTO `menus` VALUES (67,'system',NULL,'system','index','System','fa-cubes',99,0,'0000-00-00 00:00:00',1),(69,'menu',90,'Menus','index','Menu','fa-cubes',99,0,'0000-00-00 00:00:00',1),(70,'permission',91,'user_group_permissions','index','Permission','fa-cubes',99,0,'0000-00-00 00:00:00',0),(71,'user-group',91,'user_groups','index','User Group','fa-users',99,0,'0000-00-00 00:00:00',0),(72,'configuration',90,'configs','index','Configuration','fa-cog',99,0,'0000-00-00 00:00:00',1),(73,'background',90,'combackgrounds','index','Background','fa-image',99,0,'0000-00-00 00:00:00',1),(89,'users',91,'users','index','Users','fa-user',99,0,'0000-00-00 00:00:00',1),(90,'system-configuration',67,'','','System Configuration','',0,0,'0000-00-00 00:00:00',0),(91,'user-management',67,'','','User Management','',0,0,'0000-00-00 00:00:00',0),(98,'pages',NULL,'Pages','icon','Pages','',99,0,'0000-00-00 00:00:00',0),(105,'help',NULL,'','','Help','',99,0,'0000-00-00 00:00:00',1),(106,'help-box',105,'','','Help-Box','',99,0,'0000-00-00 00:00:00',1),(107,'help',106,'Pages','help','Help','',99,0,'0000-00-00 00:00:00',1),(108,'check-for-updates',106,'pages','check_updates','Check for Updates','',99,0,'0000-00-00 00:00:00',1),(109,'about',106,'pages','about','About','',99,0,'0000-00-00 00:00:00',1),(117,'change-logo',90,'Configs','change_logo','Change Logo','',99,0,'0000-00-00 00:00:00',1),(118,'Sekolah',NULL,'SchoolClasses','index','Sekolah','',99,0,'0000-00-00 00:00:00',1),(119,'kelas',118,'SchoolClasses','index','kelas','',99,0,'0000-00-00 00:00:00',1),(120,'Murid',118,'SchoolStudents','index','kelas','',99,0,'0000-00-00 00:00:00',1),(121,'Mata Pelajaran',118,'SchoolSubjects','index','kelas','',99,0,'0000-00-00 00:00:00',1),(122,'Guru',118,'SchoolTeachers','index','kelas','',99,0,'0000-00-00 00:00:00',1),(123,'Hasil Ujian',118,'SchoolExams','index','kelas','',99,0,'0000-00-00 00:00:00',1),(124,'posts',NULL,'Posts','index','Posts','',99,0,'0000-00-00 00:00:00',1);

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_code` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sendto_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  `sent` int(11) DEFAULT '0',
  `is_read` int(11) DEFAULT '0',
  `deleted` int(11) DEFAULT '0',
  `deleted_date` datetime NOT NULL,
  `dropped` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "messages"
#


#
# Structure for table "notifications"
#

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `isread` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  `pushed` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "notifications"
#


#
# Structure for table "pages"
#

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `content` longtext NOT NULL,
  `dateadd` date NOT NULL,
  `datemodify` date NOT NULL,
  `ismenu` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `featureimage` varchar(100) NOT NULL,
  `published` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "pages"
#


#
# Structure for table "post_categories"
#

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE `post_categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) DEFAULT '0',
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted` int(11) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "post_categories"
#

INSERT INTO `post_categories` VALUES (1,0,1,'0000-00-00 00:00:00',0,NULL),(2,0,2,'0000-00-00 00:00:00',0,NULL);

#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `content` longtext NOT NULL,
  `dateadd` date NOT NULL,
  `datemodify` date NOT NULL,
  `featureimage` varchar(100) DEFAULT NULL,
  `published` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'rewrewrew','rewrewrew.html','rewrewrewr','2017-02-19','2017-02-19','32432432',1,0),(2,'wewqe','wewqe.html','wqewqewqe','2017-02-19','2017-02-19','qwewqewq',1,0);

#
# Structure for table "room_categories"
#

DROP TABLE IF EXISTS `room_categories`;
CREATE TABLE `room_categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "room_categories"
#


#
# Structure for table "roomclasses"
#

DROP TABLE IF EXISTS `roomclasses`;
CREATE TABLE `roomclasses` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "roomclasses"
#


#
# Structure for table "rooms"
#

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `room_category_id` int(6) NOT NULL,
  `roomclass_id` int(2) NOT NULL,
  `detail` varchar(225) NOT NULL,
  `price` int(12) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomclass_id` (`roomclass_id`),
  CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`roomclass_id`) REFERENCES `roomclasses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "rooms"
#


#
# Structure for table "settings"
#

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `settingname` varchar(225) NOT NULL,
  `settingvalue` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "settings"
#


#
# Structure for table "user_group_permissions"
#

DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `deleted_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=541 DEFAULT CHARSET=latin1;

#
# Data for table "user_group_permissions"
#

INSERT INTO `user_group_permissions` VALUES (1,1,'Pages','display',1,'0000-00-00 00:00:00',0),(2,2,'Pages','display',1,'0000-00-00 00:00:00',0),(3,3,'Pages','display',1,'0000-00-00 00:00:00',0),(4,1,'UserGroupPermissions','index',1,'0000-00-00 00:00:00',0),(5,2,'UserGroupPermissions','index',0,'0000-00-00 00:00:00',0),(6,3,'UserGroupPermissions','index',0,'0000-00-00 00:00:00',0),(7,1,'UserGroupPermissions','update',1,'0000-00-00 00:00:00',0),(8,2,'UserGroupPermissions','update',0,'0000-00-00 00:00:00',0),(9,3,'UserGroupPermissions','update',0,'0000-00-00 00:00:00',0),(10,1,'UserGroups','index',1,'0000-00-00 00:00:00',0),(11,2,'UserGroups','index',0,'0000-00-00 00:00:00',0),(12,3,'UserGroups','index',0,'0000-00-00 00:00:00',0),(13,1,'UserGroups','addGroup',1,'0000-00-00 00:00:00',0),(14,2,'UserGroups','addGroup',0,'0000-00-00 00:00:00',0),(15,3,'UserGroups','addGroup',0,'0000-00-00 00:00:00',0),(16,1,'UserGroups','editGroup',1,'0000-00-00 00:00:00',0),(17,2,'UserGroups','editGroup',0,'0000-00-00 00:00:00',0),(18,3,'UserGroups','editGroup',0,'0000-00-00 00:00:00',0),(19,1,'UserGroups','deleteGroup',1,'0000-00-00 00:00:00',0),(20,2,'UserGroups','deleteGroup',0,'0000-00-00 00:00:00',0),(21,3,'UserGroups','deleteGroup',0,'0000-00-00 00:00:00',0),(22,1,'Users','index',1,'0000-00-00 00:00:00',0),(23,2,'Users','index',0,'0000-00-00 00:00:00',0),(24,3,'Users','index',0,'0000-00-00 00:00:00',0),(25,1,'Users','viewUser',1,'0000-00-00 00:00:00',0),(26,2,'Users','viewUser',0,'0000-00-00 00:00:00',0),(27,3,'Users','viewUser',0,'0000-00-00 00:00:00',0),(28,1,'Users','myprofile',1,'0000-00-00 00:00:00',0),(29,2,'Users','myprofile',1,'0000-00-00 00:00:00',0),(30,3,'Users','myprofile',0,'0000-00-00 00:00:00',0),(31,1,'Users','login',1,'0000-00-00 00:00:00',0),(32,2,'Users','login',1,'0000-00-00 00:00:00',0),(33,3,'Users','login',1,'0000-00-00 00:00:00',0),(34,1,'Users','logout',1,'0000-00-00 00:00:00',0),(35,2,'Users','logout',1,'0000-00-00 00:00:00',0),(36,3,'Users','logout',1,'0000-00-00 00:00:00',0),(37,1,'Users','register',1,'0000-00-00 00:00:00',0),(38,2,'Users','register',1,'0000-00-00 00:00:00',0),(39,3,'Users','register',1,'0000-00-00 00:00:00',0),(40,1,'Users','changePassword',1,'0000-00-00 00:00:00',0),(41,2,'Users','changePassword',1,'0000-00-00 00:00:00',0),(42,3,'Users','changePassword',0,'0000-00-00 00:00:00',0),(43,1,'Users','changeUserPassword',1,'0000-00-00 00:00:00',0),(44,2,'Users','changeUserPassword',0,'0000-00-00 00:00:00',0),(45,3,'Users','changeUserPassword',0,'0000-00-00 00:00:00',0),(46,1,'Users','addUser',1,'0000-00-00 00:00:00',0),(47,2,'Users','addUser',0,'0000-00-00 00:00:00',0),(48,3,'Users','addUser',0,'0000-00-00 00:00:00',0),(49,1,'Users','editUser',1,'0000-00-00 00:00:00',0),(50,2,'Users','editUser',0,'0000-00-00 00:00:00',0),(51,3,'Users','editUser',0,'0000-00-00 00:00:00',0),(52,1,'Users','dashboard',1,'0000-00-00 00:00:00',0),(53,2,'Users','dashboard',1,'0000-00-00 00:00:00',0),(54,3,'Users','dashboard',0,'0000-00-00 00:00:00',0),(55,1,'Users','deleteUser',1,'0000-00-00 00:00:00',0),(56,2,'Users','deleteUser',0,'0000-00-00 00:00:00',0),(57,3,'Users','deleteUser',0,'0000-00-00 00:00:00',0),(58,1,'Users','makeActive',1,'0000-00-00 00:00:00',0),(59,2,'Users','makeActive',0,'0000-00-00 00:00:00',0),(60,3,'Users','makeActive',0,'0000-00-00 00:00:00',0),(61,1,'Users','accessDenied',1,'0000-00-00 00:00:00',0),(62,2,'Users','accessDenied',1,'0000-00-00 00:00:00',0),(63,3,'Users','accessDenied',1,'0000-00-00 00:00:00',0),(64,1,'Users','userVerification',1,'0000-00-00 00:00:00',0),(65,2,'Users','userVerification',1,'0000-00-00 00:00:00',0),(66,3,'Users','userVerification',1,'0000-00-00 00:00:00',0),(67,1,'Users','forgotPassword',1,'0000-00-00 00:00:00',0),(68,2,'Users','forgotPassword',1,'0000-00-00 00:00:00',0),(69,3,'Users','forgotPassword',1,'0000-00-00 00:00:00',0),(70,1,'Users','makeActiveInactive',1,'0000-00-00 00:00:00',0),(71,2,'Users','makeActiveInactive',0,'0000-00-00 00:00:00',0),(72,3,'Users','makeActiveInactive',0,'0000-00-00 00:00:00',0),(73,1,'Users','verifyEmail',1,'0000-00-00 00:00:00',0),(74,2,'Users','verifyEmail',0,'0000-00-00 00:00:00',0),(75,3,'Users','verifyEmail',0,'0000-00-00 00:00:00',0),(76,1,'Users','activatePassword',1,'0000-00-00 00:00:00',0),(77,2,'Users','activatePassword',1,'0000-00-00 00:00:00',0),(78,3,'Users','activatePassword',1,'0000-00-00 00:00:00',0),(79,1,'Accounts','index',1,'0000-00-00 00:00:00',0),(80,2,'Accounts','index',1,'0000-00-00 00:00:00',0),(81,3,'Accounts','index',0,'0000-00-00 00:00:00',0),(82,4,'Accounts','index',0,'0000-00-00 00:00:00',0),(83,1,'Accounts','view',1,'0000-00-00 00:00:00',0),(84,2,'Accounts','view',1,'0000-00-00 00:00:00',0),(85,3,'Accounts','view',0,'0000-00-00 00:00:00',0),(86,4,'Accounts','view',0,'0000-00-00 00:00:00',0),(87,1,'Accounts','add',1,'0000-00-00 00:00:00',0),(88,2,'Accounts','add',1,'0000-00-00 00:00:00',0),(89,3,'Accounts','add',0,'0000-00-00 00:00:00',0),(90,4,'Accounts','add',0,'0000-00-00 00:00:00',0),(91,1,'Accounts','edit',1,'0000-00-00 00:00:00',0),(92,2,'Accounts','edit',1,'0000-00-00 00:00:00',0),(93,3,'Accounts','edit',0,'0000-00-00 00:00:00',0),(94,4,'Accounts','edit',0,'0000-00-00 00:00:00',0),(95,1,'Accounts','delete',1,'0000-00-00 00:00:00',0),(96,2,'Accounts','delete',1,'0000-00-00 00:00:00',0),(97,3,'Accounts','delete',0,'0000-00-00 00:00:00',0),(98,4,'Accounts','delete',0,'0000-00-00 00:00:00',0),(99,1,'Api','caller_new',1,'0000-00-00 00:00:00',0),(100,2,'Api','caller_new',1,'0000-00-00 00:00:00',0),(101,3,'Api','caller_new',0,'0000-00-00 00:00:00',0),(102,4,'Api','caller_new',0,'0000-00-00 00:00:00',0),(103,1,'Api','caller_old',1,'0000-00-00 00:00:00',0),(104,2,'Api','caller_old',1,'0000-00-00 00:00:00',0),(105,3,'Api','caller_old',0,'0000-00-00 00:00:00',0),(106,4,'Api','caller_old',0,'0000-00-00 00:00:00',0),(107,1,'Api','caller_lookup',1,'0000-00-00 00:00:00',0),(108,2,'Api','caller_lookup',1,'0000-00-00 00:00:00',0),(109,3,'Api','caller_lookup',0,'0000-00-00 00:00:00',0),(110,4,'Api','caller_lookup',0,'0000-00-00 00:00:00',0),(111,1,'Api','cust_lookup',1,'0000-00-00 00:00:00',0),(112,2,'Api','cust_lookup',1,'0000-00-00 00:00:00',0),(113,3,'Api','cust_lookup',0,'0000-00-00 00:00:00',0),(114,4,'Api','cust_lookup',0,'0000-00-00 00:00:00',0),(115,1,'Api','lookup_OpenOrder',1,'0000-00-00 00:00:00',0),(116,2,'Api','lookup_OpenOrder',1,'0000-00-00 00:00:00',0),(117,3,'Api','lookup_OpenOrder',0,'0000-00-00 00:00:00',0),(118,4,'Api','lookup_OpenOrder',0,'0000-00-00 00:00:00',0),(119,1,'Api','lookup_suppliers',1,'0000-00-00 00:00:00',0),(120,2,'Api','lookup_suppliers',1,'0000-00-00 00:00:00',0),(121,3,'Api','lookup_suppliers',0,'0000-00-00 00:00:00',0),(122,4,'Api','lookup_suppliers',0,'0000-00-00 00:00:00',0),(123,1,'Api','send_supplier',1,'0000-00-00 00:00:00',0),(124,2,'Api','send_supplier',1,'0000-00-00 00:00:00',0),(125,3,'Api','send_supplier',0,'0000-00-00 00:00:00',0),(126,4,'Api','send_supplier',0,'0000-00-00 00:00:00',0),(127,1,'Api','lookup_TicketType',1,'0000-00-00 00:00:00',0),(128,2,'Api','lookup_TicketType',1,'0000-00-00 00:00:00',0),(129,3,'Api','lookup_TicketType',0,'0000-00-00 00:00:00',0),(130,4,'Api','lookup_TicketType',0,'0000-00-00 00:00:00',0),(131,1,'Api','maketicket',1,'0000-00-00 00:00:00',0),(132,2,'Api','maketicket',1,'0000-00-00 00:00:00',0),(133,3,'Api','maketicket',0,'0000-00-00 00:00:00',0),(134,4,'Api','maketicket',0,'0000-00-00 00:00:00',0),(135,1,'Api','lookup_users',1,'0000-00-00 00:00:00',0),(136,2,'Api','lookup_users',1,'0000-00-00 00:00:00',0),(137,3,'Api','lookup_users',0,'0000-00-00 00:00:00',0),(138,4,'Api','lookup_users',0,'0000-00-00 00:00:00',0),(139,1,'Api','search',1,'0000-00-00 00:00:00',0),(140,2,'Api','search',1,'0000-00-00 00:00:00',0),(141,3,'Api','search',0,'0000-00-00 00:00:00',0),(142,4,'Api','search',0,'0000-00-00 00:00:00',0),(143,1,'Api','update_version',1,'0000-00-00 00:00:00',0),(144,2,'Api','update_version',1,'0000-00-00 00:00:00',0),(145,3,'Api','update_version',0,'0000-00-00 00:00:00',0),(146,4,'Api','update_version',0,'0000-00-00 00:00:00',0),(147,1,'AuditDeltas','index',1,'0000-00-00 00:00:00',0),(148,2,'AuditDeltas','index',1,'0000-00-00 00:00:00',0),(149,3,'AuditDeltas','index',0,'0000-00-00 00:00:00',0),(150,4,'AuditDeltas','index',0,'0000-00-00 00:00:00',0),(151,1,'AuditDeltas','view',1,'0000-00-00 00:00:00',0),(152,2,'AuditDeltas','view',1,'0000-00-00 00:00:00',0),(153,3,'AuditDeltas','view',0,'0000-00-00 00:00:00',0),(154,4,'AuditDeltas','view',0,'0000-00-00 00:00:00',0),(155,1,'AuditDeltas','add',1,'0000-00-00 00:00:00',0),(156,2,'AuditDeltas','add',1,'0000-00-00 00:00:00',0),(157,3,'AuditDeltas','add',0,'0000-00-00 00:00:00',0),(158,4,'AuditDeltas','add',0,'0000-00-00 00:00:00',0),(159,1,'AuditDeltas','edit',1,'0000-00-00 00:00:00',0),(160,2,'AuditDeltas','edit',1,'0000-00-00 00:00:00',0),(161,3,'AuditDeltas','edit',0,'0000-00-00 00:00:00',0),(162,4,'AuditDeltas','edit',0,'0000-00-00 00:00:00',0),(163,1,'AuditDeltas','delete',1,'0000-00-00 00:00:00',0),(164,2,'AuditDeltas','delete',1,'0000-00-00 00:00:00',0),(165,3,'AuditDeltas','delete',0,'0000-00-00 00:00:00',0),(166,4,'AuditDeltas','delete',0,'0000-00-00 00:00:00',0),(167,1,'Audits','index',1,'0000-00-00 00:00:00',0),(168,2,'Audits','index',1,'0000-00-00 00:00:00',0),(169,3,'Audits','index',0,'0000-00-00 00:00:00',0),(170,4,'Audits','index',0,'0000-00-00 00:00:00',0),(171,1,'Audits','view',1,'0000-00-00 00:00:00',0),(172,2,'Audits','view',1,'0000-00-00 00:00:00',0),(173,3,'Audits','view',0,'0000-00-00 00:00:00',0),(174,4,'Audits','view',0,'0000-00-00 00:00:00',0),(175,1,'Audits','detail',1,'0000-00-00 00:00:00',0),(176,2,'Audits','detail',1,'0000-00-00 00:00:00',0),(177,3,'Audits','detail',0,'0000-00-00 00:00:00',0),(178,4,'Audits','detail',0,'0000-00-00 00:00:00',0),(179,1,'Audits','add',1,'0000-00-00 00:00:00',0),(180,2,'Audits','add',1,'0000-00-00 00:00:00',0),(181,3,'Audits','add',0,'0000-00-00 00:00:00',0),(182,4,'Audits','add',0,'0000-00-00 00:00:00',0),(183,1,'Audits','edit',1,'0000-00-00 00:00:00',0),(184,2,'Audits','edit',1,'0000-00-00 00:00:00',0),(185,3,'Audits','edit',0,'0000-00-00 00:00:00',0),(186,4,'Audits','edit',0,'0000-00-00 00:00:00',0),(187,1,'Audits','delete',1,'0000-00-00 00:00:00',0),(188,2,'Audits','delete',1,'0000-00-00 00:00:00',0),(189,3,'Audits','delete',0,'0000-00-00 00:00:00',0),(190,4,'Audits','delete',0,'0000-00-00 00:00:00',0),(191,1,'Banks','index',1,'0000-00-00 00:00:00',0),(192,2,'Banks','index',1,'0000-00-00 00:00:00',0),(193,3,'Banks','index',0,'0000-00-00 00:00:00',0),(194,4,'Banks','index',0,'0000-00-00 00:00:00',0),(195,1,'Banks','save',1,'0000-00-00 00:00:00',0),(196,2,'Banks','save',1,'0000-00-00 00:00:00',0),(197,3,'Banks','save',0,'0000-00-00 00:00:00',0),(198,4,'Banks','save',0,'0000-00-00 00:00:00',0),(199,1,'Banks','remove',1,'0000-00-00 00:00:00',0),(200,2,'Banks','remove',1,'0000-00-00 00:00:00',0),(201,3,'Banks','remove',0,'0000-00-00 00:00:00',0),(202,4,'Banks','remove',0,'0000-00-00 00:00:00',0),(203,1,'Belifurniture','index',1,'0000-00-00 00:00:00',0),(204,2,'Belifurniture','index',1,'0000-00-00 00:00:00',0),(205,3,'Belifurniture','index',0,'0000-00-00 00:00:00',0),(206,4,'Belifurniture','index',0,'0000-00-00 00:00:00',0),(207,1,'Belifurniture','product',1,'0000-00-00 00:00:00',0),(208,2,'Belifurniture','product',1,'0000-00-00 00:00:00',0),(209,3,'Belifurniture','product',0,'0000-00-00 00:00:00',0),(210,4,'Belifurniture','product',0,'0000-00-00 00:00:00',0),(211,1,'Big','display',1,'0000-00-00 00:00:00',0),(212,2,'Big','display',1,'0000-00-00 00:00:00',0),(213,3,'Big','display',0,'0000-00-00 00:00:00',0),(214,4,'Big','display',0,'0000-00-00 00:00:00',0),(215,1,'Big','tickets',1,'0000-00-00 00:00:00',0),(216,2,'Big','tickets',1,'0000-00-00 00:00:00',0),(217,3,'Big','tickets',0,'0000-00-00 00:00:00',0),(218,4,'Big','tickets',0,'0000-00-00 00:00:00',0),(219,1,'Big','delivery',1,'0000-00-00 00:00:00',0),(220,2,'Big','delivery',1,'0000-00-00 00:00:00',0),(221,3,'Big','delivery',0,'0000-00-00 00:00:00',0),(222,4,'Big','delivery',0,'0000-00-00 00:00:00',0),(223,1,'BonusPayments','index',1,'0000-00-00 00:00:00',0),(224,2,'BonusPayments','index',1,'0000-00-00 00:00:00',0),(225,3,'BonusPayments','index',0,'0000-00-00 00:00:00',0),(226,4,'BonusPayments','index',0,'0000-00-00 00:00:00',0),(227,1,'BonusPayments','view',1,'0000-00-00 00:00:00',0),(228,2,'BonusPayments','view',1,'0000-00-00 00:00:00',0),(229,3,'BonusPayments','view',0,'0000-00-00 00:00:00',0),(230,4,'BonusPayments','view',0,'0000-00-00 00:00:00',0),(231,1,'BonusPayments','add',1,'0000-00-00 00:00:00',0),(232,2,'BonusPayments','add',1,'0000-00-00 00:00:00',0),(233,3,'BonusPayments','add',0,'0000-00-00 00:00:00',0),(234,4,'BonusPayments','add',0,'0000-00-00 00:00:00',0),(235,1,'BonusPayments','edit',1,'0000-00-00 00:00:00',0),(236,2,'BonusPayments','edit',1,'0000-00-00 00:00:00',0),(237,3,'BonusPayments','edit',0,'0000-00-00 00:00:00',0),(238,4,'BonusPayments','edit',0,'0000-00-00 00:00:00',0),(239,1,'BonusPayments','delete',1,'0000-00-00 00:00:00',0),(240,2,'BonusPayments','delete',1,'0000-00-00 00:00:00',0),(241,3,'BonusPayments','delete',0,'0000-00-00 00:00:00',0),(242,4,'BonusPayments','delete',0,'0000-00-00 00:00:00',0),(243,1,'Bonuses','index',1,'0000-00-00 00:00:00',0),(244,2,'Bonuses','index',1,'0000-00-00 00:00:00',0),(245,3,'Bonuses','index',0,'0000-00-00 00:00:00',0),(246,4,'Bonuses','index',0,'0000-00-00 00:00:00',0),(247,1,'Bonuses','view',1,'0000-00-00 00:00:00',0),(248,2,'Bonuses','view',1,'0000-00-00 00:00:00',0),(249,3,'Bonuses','view',0,'0000-00-00 00:00:00',0),(250,4,'Bonuses','view',0,'0000-00-00 00:00:00',0),(251,1,'Bonuses','add',1,'0000-00-00 00:00:00',0),(252,2,'Bonuses','add',1,'0000-00-00 00:00:00',0),(253,3,'Bonuses','add',0,'0000-00-00 00:00:00',0),(254,4,'Bonuses','add',0,'0000-00-00 00:00:00',0),(255,1,'Bonuses','edit',1,'0000-00-00 00:00:00',0),(256,2,'Bonuses','edit',1,'0000-00-00 00:00:00',0),(257,3,'Bonuses','edit',0,'0000-00-00 00:00:00',0),(258,4,'Bonuses','edit',0,'0000-00-00 00:00:00',0),(259,1,'Bonuses','delete',1,'0000-00-00 00:00:00',0),(260,2,'Bonuses','delete',1,'0000-00-00 00:00:00',0),(261,3,'Bonuses','delete',0,'0000-00-00 00:00:00',0),(262,4,'Bonuses','delete',0,'0000-00-00 00:00:00',0),(263,1,'Buys','index',1,'0000-00-00 00:00:00',0),(264,2,'Buys','index',1,'0000-00-00 00:00:00',0),(265,3,'Buys','index',0,'0000-00-00 00:00:00',0),(266,4,'Buys','index',0,'0000-00-00 00:00:00',0),(267,1,'Buys','view',1,'0000-00-00 00:00:00',0),(268,2,'Buys','view',1,'0000-00-00 00:00:00',0),(269,3,'Buys','view',0,'0000-00-00 00:00:00',0),(270,4,'Buys','view',0,'0000-00-00 00:00:00',0),(271,1,'Buys','add',1,'0000-00-00 00:00:00',0),(272,2,'Buys','add',1,'0000-00-00 00:00:00',0),(273,3,'Buys','add',0,'0000-00-00 00:00:00',0),(274,4,'Buys','add',0,'0000-00-00 00:00:00',0),(275,1,'Buys','edit',1,'0000-00-00 00:00:00',0),(276,2,'Buys','edit',1,'0000-00-00 00:00:00',0),(277,3,'Buys','edit',0,'0000-00-00 00:00:00',0),(278,4,'Buys','edit',0,'0000-00-00 00:00:00',0),(279,1,'Buys','delete',1,'0000-00-00 00:00:00',0),(280,2,'Buys','delete',1,'0000-00-00 00:00:00',0),(281,3,'Buys','delete',0,'0000-00-00 00:00:00',0),(282,4,'Buys','delete',0,'0000-00-00 00:00:00',0),(283,1,'Buys','admin_index',1,'0000-00-00 00:00:00',0),(284,2,'Buys','admin_index',1,'0000-00-00 00:00:00',0),(285,3,'Buys','admin_index',0,'0000-00-00 00:00:00',0),(286,4,'Buys','admin_index',0,'0000-00-00 00:00:00',0),(287,1,'Buys','admin_view',1,'0000-00-00 00:00:00',0),(288,2,'Buys','admin_view',1,'0000-00-00 00:00:00',0),(289,3,'Buys','admin_view',0,'0000-00-00 00:00:00',0),(290,4,'Buys','admin_view',0,'0000-00-00 00:00:00',0),(291,1,'Buys','admin_add',1,'0000-00-00 00:00:00',0),(292,2,'Buys','admin_add',1,'0000-00-00 00:00:00',0),(293,3,'Buys','admin_add',0,'0000-00-00 00:00:00',0),(294,4,'Buys','admin_add',0,'0000-00-00 00:00:00',0),(295,1,'Buys','admin_edit',1,'0000-00-00 00:00:00',0),(296,2,'Buys','admin_edit',1,'0000-00-00 00:00:00',0),(297,3,'Buys','admin_edit',0,'0000-00-00 00:00:00',0),(298,4,'Buys','admin_edit',0,'0000-00-00 00:00:00',0),(299,1,'Buys','admin_delete',1,'0000-00-00 00:00:00',0),(300,2,'Buys','admin_delete',1,'0000-00-00 00:00:00',0),(301,3,'Buys','admin_delete',0,'0000-00-00 00:00:00',0),(302,4,'Buys','admin_delete',0,'0000-00-00 00:00:00',0),(303,1,'Callers','index',1,'0000-00-00 00:00:00',0),(304,2,'Callers','index',1,'0000-00-00 00:00:00',0),(305,3,'Callers','index',0,'0000-00-00 00:00:00',0),(306,4,'Callers','index',0,'0000-00-00 00:00:00',0),(307,1,'Callers','transfer',1,'0000-00-00 00:00:00',0),(308,2,'Callers','transfer',1,'0000-00-00 00:00:00',0),(309,3,'Callers','transfer',0,'0000-00-00 00:00:00',0),(310,4,'Callers','transfer',0,'0000-00-00 00:00:00',0),(311,1,'Callers','logs',1,'0000-00-00 00:00:00',0),(312,2,'Callers','logs',1,'0000-00-00 00:00:00',0),(313,3,'Callers','logs',0,'0000-00-00 00:00:00',0),(314,4,'Callers','logs',0,'0000-00-00 00:00:00',0),(315,1,'Cashflow','index',1,'0000-00-00 00:00:00',0),(316,2,'Cashflow','index',1,'0000-00-00 00:00:00',0),(317,3,'Cashflow','index',0,'0000-00-00 00:00:00',0),(318,4,'Cashflow','index',0,'0000-00-00 00:00:00',0),(319,1,'Cashflow','getRange',1,'0000-00-00 00:00:00',0),(320,2,'Cashflow','getRange',1,'0000-00-00 00:00:00',0),(321,3,'Cashflow','getRange',0,'0000-00-00 00:00:00',0),(322,4,'Cashflow','getRange',0,'0000-00-00 00:00:00',0),(323,1,'Categories','index',1,'0000-00-00 00:00:00',0),(324,2,'Categories','index',1,'0000-00-00 00:00:00',0),(325,3,'Categories','index',0,'0000-00-00 00:00:00',0),(326,4,'Categories','index',0,'0000-00-00 00:00:00',0),(327,1,'Categories','view',1,'0000-00-00 00:00:00',0),(328,2,'Categories','view',1,'0000-00-00 00:00:00',0),(329,3,'Categories','view',0,'0000-00-00 00:00:00',0),(330,4,'Categories','view',0,'0000-00-00 00:00:00',0),(331,1,'Categories','add',1,'0000-00-00 00:00:00',0),(332,2,'Categories','add',1,'0000-00-00 00:00:00',0),(333,3,'Categories','add',0,'0000-00-00 00:00:00',0),(334,4,'Categories','add',0,'0000-00-00 00:00:00',0),(335,1,'Categories','edit',1,'0000-00-00 00:00:00',0),(336,2,'Categories','edit',1,'0000-00-00 00:00:00',0),(337,3,'Categories','edit',0,'0000-00-00 00:00:00',0),(338,4,'Categories','edit',0,'0000-00-00 00:00:00',0),(339,1,'Categories','delete',1,'0000-00-00 00:00:00',0),(340,2,'Categories','delete',1,'0000-00-00 00:00:00',0),(341,3,'Categories','delete',0,'0000-00-00 00:00:00',0),(342,4,'Categories','delete',0,'0000-00-00 00:00:00',0),(343,1,'Checkorder','base',1,'0000-00-00 00:00:00',0),(344,2,'Checkorder','base',1,'0000-00-00 00:00:00',0),(345,3,'Checkorder','base',0,'0000-00-00 00:00:00',0),(346,4,'Checkorder','base',0,'0000-00-00 00:00:00',0),(347,1,'Checkorder','save_discount',1,'0000-00-00 00:00:00',0),(348,2,'Checkorder','save_discount',1,'0000-00-00 00:00:00',0),(349,3,'Checkorder','save_discount',0,'0000-00-00 00:00:00',0),(350,4,'Checkorder','save_discount',0,'0000-00-00 00:00:00',0),(351,1,'Checkorder','invoice_prep',1,'0000-00-00 00:00:00',0),(352,2,'Checkorder','invoice_prep',1,'0000-00-00 00:00:00',0),(353,2,'Checkorder','invoicegen',1,'0000-00-00 00:00:00',0),(354,2,'Checkorder','accept',1,'0000-00-00 00:00:00',0),(355,2,'Checkorder','reject',1,'0000-00-00 00:00:00',0),(356,2,'Checkorder','getNextId',1,'0000-00-00 00:00:00',0),(357,2,'Checkorder','pendingOrderValidation',1,'0000-00-00 00:00:00',0),(358,2,'Checkorder','gateway',1,'0000-00-00 00:00:00',0),(359,2,'Checkorder','next',1,'0000-00-00 00:00:00',0),(360,2,'Checkorder','getName',1,'0000-00-00 00:00:00',0),(361,2,'Cities','index',1,'0000-00-00 00:00:00',0),(362,2,'Cities','view',1,'0000-00-00 00:00:00',0),(363,2,'Cities','add',1,'0000-00-00 00:00:00',0),(364,2,'Cities','edit',1,'0000-00-00 00:00:00',0),(365,2,'Cities','generate',1,'0000-00-00 00:00:00',0),(366,2,'Cities','city_migration',1,'0000-00-00 00:00:00',0),(367,2,'Cities','merge_city',1,'0000-00-00 00:00:00',0),(368,2,'Coas','index',1,'0000-00-00 00:00:00',0),(369,2,'Coas','load',1,'0000-00-00 00:00:00',0),(370,2,'Coas','add',1,'0000-00-00 00:00:00',0),(371,2,'Coas','account',1,'0000-00-00 00:00:00',0),(372,2,'Coas','remove',1,'0000-00-00 00:00:00',0),(373,2,'ComBackgrounds','index',1,'0000-00-00 00:00:00',0),(374,2,'ComBackgrounds','view',1,'0000-00-00 00:00:00',0),(375,2,'ComBackgrounds','add',1,'0000-00-00 00:00:00',0),(376,2,'ComBackgrounds','edit',1,'0000-00-00 00:00:00',0),(377,2,'ComBackgrounds','delete',1,'0000-00-00 00:00:00',0),(378,2,'Configs','index',1,'0000-00-00 00:00:00',0),(379,2,'Configs','view',1,'0000-00-00 00:00:00',0),(380,2,'Configs','getConfig',1,'0000-00-00 00:00:00',0),(381,2,'Configs','add',1,'0000-00-00 00:00:00',0),(382,2,'Configs','edit',1,'0000-00-00 00:00:00',0),(383,2,'Configs','delete',1,'0000-00-00 00:00:00',0),(384,2,'Configs','keepalive',1,'0000-00-00 00:00:00',0),(385,2,'Configs','set_miniview',1,'0000-00-00 00:00:00',0),(386,2,'Counter','index',1,'0000-00-00 00:00:00',0),(387,2,'Countries','index',1,'0000-00-00 00:00:00',0),(388,2,'Countries','view',1,'0000-00-00 00:00:00',0),(389,2,'Countries','add',1,'0000-00-00 00:00:00',0),(390,2,'Countries','edit',1,'0000-00-00 00:00:00',0),(391,2,'Countries','delete',1,'0000-00-00 00:00:00',0),(392,2,'Currencies','index',1,'0000-00-00 00:00:00',0),(393,2,'Currencies','view',1,'0000-00-00 00:00:00',0),(394,2,'Currencies','add',1,'0000-00-00 00:00:00',0),(395,2,'Currencies','edit',1,'0000-00-00 00:00:00',0),(396,2,'Currencies','delete',1,'0000-00-00 00:00:00',0),(397,2,'Currencyrates','index',1,'0000-00-00 00:00:00',0),(398,2,'Currencyrates','view',1,'0000-00-00 00:00:00',0),(399,2,'Currencyrates','add',1,'0000-00-00 00:00:00',0),(400,2,'Currencyrates','edit',1,'0000-00-00 00:00:00',0),(401,2,'Currencyrates','delete',1,'0000-00-00 00:00:00',0),(402,2,'CustomerBanks','index',1,'0000-00-00 00:00:00',0),(403,2,'CustomerBanks','view',1,'0000-00-00 00:00:00',0),(404,2,'CustomerBanks','add',1,'0000-00-00 00:00:00',0),(405,2,'CustomerBanks','edit',1,'0000-00-00 00:00:00',0),(406,2,'CustomerBanks','delete',1,'0000-00-00 00:00:00',0),(407,2,'CustomerStates','index',1,'0000-00-00 00:00:00',0),(408,2,'CustomerStates','view',1,'0000-00-00 00:00:00',0),(409,2,'CustomerStates','add',1,'0000-00-00 00:00:00',0),(410,2,'CustomerStates','edit',1,'0000-00-00 00:00:00',0),(411,2,'CustomerStates','delete',1,'0000-00-00 00:00:00',0),(412,2,'CustomerStates','admin_index',1,'0000-00-00 00:00:00',0),(413,2,'CustomerStates','admin_view',1,'0000-00-00 00:00:00',0),(414,2,'CustomerStates','admin_add',1,'0000-00-00 00:00:00',0),(415,2,'CustomerStates','admin_edit',1,'0000-00-00 00:00:00',0),(416,2,'CustomerStates','admin_delete',1,'0000-00-00 00:00:00',0),(417,2,'CustomerTickets','index',1,'0000-00-00 00:00:00',0),(418,2,'CustomerTickets','check_tickets',1,'0000-00-00 00:00:00',0),(419,2,'CustomerTickets','getDisplayTicketUsers',1,'0000-00-00 00:00:00',0),(420,2,'Customers','index',1,'0000-00-00 00:00:00',0),(421,2,'Customers','scroll',1,'0000-00-00 00:00:00',0),(422,2,'Customers','graph',1,'0000-00-00 00:00:00',0),(423,2,'Customers','view',1,'0000-00-00 00:00:00',0),(424,2,'Customers','add',1,'0000-00-00 00:00:00',0),(425,2,'Customers','edit',1,'0000-00-00 00:00:00',0),(426,2,'Customers','delete',1,'0000-00-00 00:00:00',0),(427,2,'Customers','admin_index',1,'0000-00-00 00:00:00',0),(428,2,'Customers','admin_view',1,'0000-00-00 00:00:00',0),(429,2,'Customers','admin_add',1,'0000-00-00 00:00:00',0),(430,2,'Customers','admin_edit',1,'0000-00-00 00:00:00',0),(431,2,'Customers','admin_delete',1,'0000-00-00 00:00:00',0),(432,2,'Customers','merge',1,'0000-00-00 00:00:00',0),(433,2,'Customers','merge2',1,'0000-00-00 00:00:00',0),(434,2,'Customers','cetak',1,'0000-00-00 00:00:00',0),(435,2,'Dashboard','index',0,'0000-00-00 00:00:00',0),(436,2,'Dashboard','index3',0,'0000-00-00 00:00:00',0),(437,2,'Dashboard','index2',0,'0000-00-00 00:00:00',0),(438,2,'Dashboard','about',0,'0000-00-00 00:00:00',0),(439,2,'Dashboard','home',0,'0000-00-00 00:00:00',0),(440,2,'Deadline','index',1,'0000-00-00 00:00:00',0),(441,2,'Deadline','ganti_tanggal',1,'0000-00-00 00:00:00',0),(442,2,'Deadline','getTagihanCount',1,'0000-00-00 00:00:00',0),(443,2,'Delivery','index',1,'0000-00-00 00:00:00',0),(444,2,'Delivery','predelivery_check',1,'0000-00-00 00:00:00',0),(445,1,'Dashboard','index',1,'0000-00-00 00:00:00',0),(446,3,'Dashboard','index',0,'0000-00-00 00:00:00',0),(447,4,'Dashboard','index',0,'0000-00-00 00:00:00',0),(448,1,'Dashboard','index3',1,'0000-00-00 00:00:00',0),(449,3,'Dashboard','index3',0,'0000-00-00 00:00:00',0),(450,4,'Dashboard','index3',0,'0000-00-00 00:00:00',0),(451,1,'Dashboard','index2',1,'0000-00-00 00:00:00',0),(452,3,'Dashboard','index2',0,'0000-00-00 00:00:00',0),(453,4,'Dashboard','index2',0,'0000-00-00 00:00:00',0),(454,1,'Dashboard','about',1,'0000-00-00 00:00:00',0),(455,3,'Dashboard','about',0,'0000-00-00 00:00:00',0),(456,4,'Dashboard','about',0,'0000-00-00 00:00:00',0),(457,1,'Dashboard','home',1,'0000-00-00 00:00:00',0),(458,3,'Dashboard','home',0,'0000-00-00 00:00:00',0),(459,4,'Dashboard','home',0,'0000-00-00 00:00:00',0),(460,1,'Posend','base',1,'0000-00-00 00:00:00',0),(461,2,'Posend','base',1,'0000-00-00 00:00:00',0),(462,3,'Posend','base',0,'0000-00-00 00:00:00',0),(463,4,'Posend','base',1,'0000-00-00 00:00:00',0),(464,1,'Posend','getStockId',1,'0000-00-00 00:00:00',0),(465,2,'Posend','getStockId',1,'0000-00-00 00:00:00',0),(466,3,'Posend','getStockId',1,'0000-00-00 00:00:00',0),(467,4,'Posend','getStockId',1,'0000-00-00 00:00:00',0),(468,1,'Pocreate','base',1,'0000-00-00 00:00:00',0),(469,2,'Pocreate','base',1,'0000-00-00 00:00:00',0),(470,3,'Pocreate','base',1,'0000-00-00 00:00:00',0),(471,4,'Pocreate','base',1,'0000-00-00 00:00:00',0),(472,4,'Users','register',1,'0000-00-00 00:00:00',0),(473,1,'Salesorders','index',1,'0000-00-00 00:00:00',0),(474,2,'Salesorders','index',1,'0000-00-00 00:00:00',0),(475,3,'Salesorders','index',0,'0000-00-00 00:00:00',0),(476,4,'Salesorders','index',0,'0000-00-00 00:00:00',0),(477,1,'Salesorders','view',0,'0000-00-00 00:00:00',0),(478,2,'Salesorders','view',0,'0000-00-00 00:00:00',0),(479,3,'Salesorders','view',0,'0000-00-00 00:00:00',0),(480,4,'Salesorders','view',0,'0000-00-00 00:00:00',0),(481,1,'Salesorders','add',0,'0000-00-00 00:00:00',0),(482,2,'Salesorders','add',0,'0000-00-00 00:00:00',0),(483,3,'Salesorders','add',0,'0000-00-00 00:00:00',0),(484,4,'Salesorders','add',0,'0000-00-00 00:00:00',0),(485,1,'Salesorders','edit',0,'0000-00-00 00:00:00',0),(486,2,'Salesorders','edit',0,'0000-00-00 00:00:00',0),(487,3,'Salesorders','edit',0,'0000-00-00 00:00:00',0),(488,4,'Salesorders','edit',0,'0000-00-00 00:00:00',0),(489,1,'Salesorders','delete',0,'0000-00-00 00:00:00',0),(490,2,'Salesorders','delete',0,'0000-00-00 00:00:00',0),(491,3,'Salesorders','delete',0,'0000-00-00 00:00:00',0),(492,4,'Salesorders','delete',0,'0000-00-00 00:00:00',0),(493,1,'Users','forget_password',0,'0000-00-00 00:00:00',0),(494,2,'Users','forget_password',0,'0000-00-00 00:00:00',0),(495,3,'Users','forget_password',1,'0000-00-00 00:00:00',0),(496,4,'Users','forget_password',0,'0000-00-00 00:00:00',0),(497,1,'Users','add',0,'0000-00-00 00:00:00',0),(498,2,'Users','add',0,'0000-00-00 00:00:00',0),(499,3,'Users','add',0,'0000-00-00 00:00:00',0),(500,4,'Users','add',0,'0000-00-00 00:00:00',0),(501,1,'Users','profile',0,'0000-00-00 00:00:00',0),(502,2,'Users','profile',0,'0000-00-00 00:00:00',0),(503,3,'Users','profile',0,'0000-00-00 00:00:00',0),(504,4,'Users','profile',0,'0000-00-00 00:00:00',0),(505,1,'Users','social_endpoint',1,'0000-00-00 00:00:00',0),(506,2,'Users','social_endpoint',1,'0000-00-00 00:00:00',0),(507,3,'Users','social_endpoint',1,'0000-00-00 00:00:00',0),(508,4,'Users','social_endpoint',1,'0000-00-00 00:00:00',0),(509,1,'Users','social_login',1,'0000-00-00 00:00:00',0),(510,2,'Users','social_login',1,'0000-00-00 00:00:00',0),(511,3,'Users','social_login',1,'0000-00-00 00:00:00',0),(512,4,'Users','social_login',1,'0000-00-00 00:00:00',0),(513,1,'Pages','about',0,'0000-00-00 00:00:00',0),(514,2,'Pages','about',0,'0000-00-00 00:00:00',0),(515,3,'Pages','about',1,'0000-00-00 00:00:00',0),(516,4,'Pages','about',0,'0000-00-00 00:00:00',0),(517,1,'Pages','check_updates',0,'0000-00-00 00:00:00',0),(518,2,'Pages','check_updates',0,'0000-00-00 00:00:00',0),(519,3,'Pages','check_updates',1,'0000-00-00 00:00:00',0),(520,4,'Pages','check_updates',0,'0000-00-00 00:00:00',0),(521,1,'Pages','index',1,'0000-00-00 00:00:00',0),(522,2,'Pages','index',1,'0000-00-00 00:00:00',0),(523,3,'Pages','index',1,'0000-00-00 00:00:00',0),(524,4,'Pages','index',1,'0000-00-00 00:00:00',0),(525,1,'Pages','home',0,'0000-00-00 00:00:00',0),(526,2,'Pages','home',0,'0000-00-00 00:00:00',0),(527,3,'Pages','home',1,'0000-00-00 00:00:00',0),(528,4,'Pages','home',0,'0000-00-00 00:00:00',0),(529,1,'Pages','schedules',0,'0000-00-00 00:00:00',0),(530,2,'Pages','schedules',0,'0000-00-00 00:00:00',0),(531,3,'Pages','schedules',1,'0000-00-00 00:00:00',0),(532,4,'Pages','schedules',0,'0000-00-00 00:00:00',0),(533,1,'Blog','detail',1,'0000-00-00 00:00:00',0),(534,2,'Blog','detail',1,'0000-00-00 00:00:00',0),(535,3,'Blog','detail',1,'0000-00-00 00:00:00',0),(536,4,'Blog','detail',1,'0000-00-00 00:00:00',0),(537,1,'Blog','index',1,'0000-00-00 00:00:00',0),(538,2,'Blog','index',1,'0000-00-00 00:00:00',0),(539,3,'Blog','index',1,'0000-00-00 00:00:00',0),(540,4,'Blog','index',1,'0000-00-00 00:00:00',0);

#
# Structure for table "user_groups"
#

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "user_groups"
#

INSERT INTO `user_groups` VALUES (1,'Admin','Admin',0,'2015-01-04 06:44:22','2015-01-04 06:44:22','0000-00-00 00:00:00',0),(2,'User','User',1,'2015-01-04 06:44:22','2015-01-04 06:44:22','0000-00-00 00:00:00',0),(3,'Guest','Guest',0,'2015-01-04 06:44:22','2015-01-04 06:44:22','0000-00-00 00:00:00',0),(4,'Sales','Sales',1,NULL,NULL,'0000-00-00 00:00:00',0);

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `board_id` varchar(50) DEFAULT NULL,
  `display_ticket` int(11) DEFAULT '0',
  `display_ticket2` int(11) NOT NULL,
  `phone_address` varchar(18) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `name` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL,
  `user_group_id` int(11) DEFAULT NULL,
  `email_verified` tinyint(3) DEFAULT '0',
  `salt` varchar(255) DEFAULT NULL,
  `membership_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `phone_address` (`phone_address`),
  KEY `ip_address` (`ip_address`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (4,'sales','3db1537f747c9d57dfa057739d3ae613','sales@belifurniture.com',1,'2012-02-23 06:48:24','2015-01-12 01:06:19','',1,0,'','','','1420081220.jpg','',0,'0000-00-00 00:00:00',3,1,'fa43ce2c1539ee83e2bcdb0d50302b39',0,1),(5,'god','121e66302f6cb4ed91b62200cc3b5a7d','somawisnu@gmail.com',1,'2012-02-23 08:18:30','2015-01-07 22:21:54','',0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'37ec5e69da28a0e5f9b31c6dd6587598',0,1),(6,'boss','a5c7080dcf5cbdf8f64cd331a05f454a','iamthe@boss.com',2,'2012-02-26 21:33:36','2015-01-07 22:21:56',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',2,1,'56616bc744dc1e661335bf1b832393fb',0,1),(7,'sales1','93eccd81b93a68a5cffab7f7f1450cf2','sales1@belifurniture.com',3,'2012-02-26 22:15:32','2015-01-07 22:21:57',NULL,1,0,'','','','','',0,'0000-00-00 00:00:00',3,1,'241833e5382ffc21ff5861438c27554d',0,1),(8,'mundo','7b4de7fbb5ee88c740c9e6aaf7f7d218','somawisnu@gmail.com',1,'2012-03-08 01:46:54','2015-01-07 22:21:57',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'2f4a82d00c1e1c2cb9dd5e4498bfd729',0,1),(9,'analyst','feda9b294c7802820c8ab381e0a04cce','analyst@analyst.com',4,'2012-04-23 03:45:27','2015-01-07 22:21:59',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',4,1,'ddc8df41c526ddeda6d09274a0b8e372',0,1),(10,'dahpit','12a8637eee275006c3cb319961cf9571','dahpit@gmail.com',5,'2012-11-21 05:48:35','2015-01-07 22:22:00',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',5,1,'8753aa14d162238683fff5c5572714a0',0,1),(11,'ayu','ee55f6533f74608fb9966be05952bd3a','ayu@gmail.com',6,'2012-11-22 02:41:18','2015-01-07 22:22:00',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',6,1,'402f1ad28d1b21a3cfc926755aea960f',0,1),(12,'mizno','4879c1fce99fa58e9c807a1b3931d369','mizno.kruge@gmail.com',1,'2013-04-30 14:40:10','2015-01-28 17:44:22','',0,0,'','','','1422441862.jpg','',0,'0000-00-00 00:00:00',1,1,'7140adf0acb3999433b76aba2789e3f8',0,1),(13,'inka','f2ce6afc685d81047eba1feaea652bb5','inka@yahoo.com',2,'2013-06-05 15:45:06','2015-01-07 22:22:01','519daaad6f55aadd60001b4f',0,0,'','','','','',0,'0000-00-00 00:00:00',2,1,'bdc326291d653e89921646e218be8621',0,1),(14,'werwer','bed2f92a60bdcc89981437405e889d08','4234@asd.com',1,'2013-06-05 16:30:38','2015-01-07 22:22:02',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'380a6dd4c428eec6e5f209b96ab338b6',0,1),(15,'wrewrew','5017aaf4077977e80c5956429b508bac','42345@asd.com',1,'2013-06-05 16:50:35','2015-01-07 22:22:03',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'df4b0249225eddd2ca7fb0f24a0ed5f5',0,1),(17,'bobo','36981c2243b7bb34a15c5487432980af','bobo@bobo.com',1,'2013-06-13 12:42:17','2015-01-07 22:22:03','78787878787',0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'b4b1239e622c749673fbb847d9af1808',0,1),(18,'xxx','6ceb57de09ddeca6b190a1ecaa7a687d','xxx@xx.com',3,'2013-09-10 11:24:31','2015-01-07 22:22:04','',0,1,'','','','','',0,'0000-00-00 00:00:00',3,1,'98972e9fa17bd83dbaf8a0ca516a8543',0,1),(19,'www','48901abbc66e059499970a69d517a17a','www@www.com',2,'2013-09-10 11:36:59','2015-01-07 22:22:05','',0,0,'','','','','',0,'0000-00-00 00:00:00',2,1,'4e131ae9095559efaa8c42e6f9ea2cab',0,1),(20,'NA','2d7cdf5724c3a91d0dc6c979b724359f','somawisnu@gmail.com',3,NULL,'2015-01-07 22:22:07',NULL,1,0,'','','','','',0,'0000-00-00 00:00:00',3,1,'937d5344da96b5e05d42a968a05ca841',0,1),(21,'satisfaction-t','0f0b89cd929942c84ec4ddef8ba92241','satisfaction@gmail.com',9,'2013-09-27 05:50:04','2015-01-07 22:22:07','',0,0,'','','','','',0,'0000-00-00 00:00:00',9,1,'3c64ebd41d04c25aa5ce709e6beeab2b',0,1),(23,'sales_nih','f3aa72dc8341e763183622fb6a4d5130','sales@hell.com',1,'2014-02-05 00:00:00','2015-01-07 22:22:08','5',0,1,'','','','1417808837.jpg','',0,'0000-00-00 00:00:00',1,1,'6cdd41240de60c69887ed2e091db145c',0,1),(24,'cs','1d7aab0e5ef623a91f3fa989a05d904b','kljhkhk@gmail.com',7,'2014-02-12 15:35:34','2015-01-07 22:22:10','',0,0,'','','','','',0,'0000-00-00 00:00:00',7,1,'f430aa77c95982ca3052800d8ac52480',0,1),(25,'stephanus','fd80874f3d288d71916ced31c6732ebf','stephanus.bf@gmail.com',1,'2014-02-24 10:15:12','2015-01-07 22:22:11','',0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'17ac63201049beabc22207f6675e56b3',0,1),(26,'inka','8b490d5191a71770f57563d1cf0cef77','inka@bf.com',1,'2014-03-11 12:15:36','2015-01-07 22:22:13','',0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'1e4bea7c949c37a74d72161b23b10045',0,1),(27,'new_cs','841b01340d0fd6b6534cf51b37316aea','fajar_cs@gmail.com',7,NULL,'2015-01-07 22:22:14',NULL,1,0,'','','','','',0,'0000-00-00 00:00:00',7,1,'e0881c04e34ea86851a9b62b1dce6692',0,1),(28,'inka','2a0b2335c4cec05ea58b0b5c2b60fdb6','inka@maho.com',1,'2014-03-20 23:54:10','2015-01-07 22:22:15','1',0,0,'','','','','',0,'0000-00-00 00:00:00',1,1,'d39dadd775bbf6e8b4472bd5da2129e2',0,1),(29,'admin','98b5b202e251161c7f841b54c4d96eb6','admin@admin.com',1,NULL,'2015-01-13 21:35:44',NULL,0,0,'','','','1421159744.jpg','',0,'0000-00-00 00:00:00',1,1,'cb0b112384303c3165130a7c4e006c01',0,1),(30,NULL,'b060e3e42f8bba23000749e8ace8f4c2',NULL,NULL,'2015-01-07 08:56:16','2015-01-07 22:22:15',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,'76a81df440199b81a493d51bcd6319ab',0,1),(31,NULL,'47fd97c7080633016dfb9caa8dd56a62',NULL,NULL,'2015-01-07 08:58:19','2015-01-07 22:22:16',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,'243fc6b6fc71c58536d03450e0ff664a',0,1),(32,NULL,'5a6525e622e3c2afaa6dfec67d8a9922',NULL,NULL,'2015-01-07 08:59:25','2015-01-07 22:22:16',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,'ad834160f5e16ceb8d72a9b419d064f9',0,1),(33,NULL,'b628a2ba0410ffc2f23bcce89946964d',NULL,NULL,'2015-01-07 09:00:50','2015-01-07 22:22:17',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,'c562c838b0f7b42f346d86c4d59a8a47',0,1),(34,NULL,'e4624d71e636f65dedf949314dc35a88',NULL,NULL,'2015-01-11 23:07:34','2015-01-11 23:07:34',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,'9cba62450930848444df3d8d18e7c5dc',0,1),(35,NULL,'c127d47d83fadcb6b95ce104f51243d7',NULL,NULL,'2015-01-12 11:16:41','2015-01-12 11:16:41',NULL,0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,0,'2280a132492f4eddc6e800fe8affa082',0,0),(36,'akhfan','qwerty','akhfan@gmail.com',1,'2015-03-06 15:27:54','2015-03-06 15:27:54','',0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,1,NULL,0,1),(37,'dwian','dwian','',1,'2015-03-10 08:29:12','2015-03-10 08:29:12','',0,0,'','','','','',0,'0000-00-00 00:00:00',NULL,0,NULL,0,0);
