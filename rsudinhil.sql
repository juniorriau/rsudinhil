-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cake_sessions`;
CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  `deleted` int(11) unsigned NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  `deleted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cake_sessions` (`id`, `data`, `expires`, `deleted`, `time`, `deleted_date`) VALUES
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00'),
('jbnknccb7bke4bvo6qbkcjgiq2',  'Config|a:8:{s:12:\"company_name\";s:22:\"Gaivo Systemworks, Inc\";s:15:\"company_address\";s:86:\"Graha Raflesia Jl. Raflesia Selatan 11/10 Citra Raya - Tangerang Banten Indonesia15710\";s:13:\"company_phone\";s:6:\"234324\";s:11:\"company_fax\";s:9:\"234324234\";s:13:\"company_email\";s:16:\"123213@wewqe.com\";s:8:\"app_name\";s:16:\"Najla Accounting\";s:25:\"accounting_current_period\";s:1:\"1\";s:15:\"company_website\";s:25:\"http://www.miznokruge.net\";}Message|a:0:{}', 1397674648, 0,  0,  '0000-00-00 00:00:00');

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

INSERT INTO `com_backgrounds` (`id`, `title`, `description`, `src`, `isactive`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 'Map of the world', 'Map of the world', 'login-1.jpg',  1,  '2014-12-14 01:03:38',  '2014-12-21 00:54:26',  0,  '0000-00-00 00:00:00'),
(2, 'dsfdsfds', 'fdsfdsfdsf', 'login-2.jpg',  0,  '2014-12-14 01:03:38',  '2015-01-08 16:55:27',  0,  '0000-00-00 00:00:00'),
(3, 'dsfdsfds', 'fdsfdsfdsf', 'login-3.jpg',  0,  '2014-12-14 01:03:38',  '2014-12-15 08:51:47',  0,  '0000-00-00 00:00:00'),
(4, 'dsfdsfds', 'fdsfdsfdsf', 'login-4.jpg',  0,  '2014-12-14 01:03:38',  '2014-12-15 08:51:47',  0,  '0000-00-00 00:00:00'),
(5, 'dsfdsfds', 'fdsfdsfdsf', 'login-5.jpg',  0,  '2014-12-14 01:03:38',  '2015-01-08 17:08:43',  0,  '0000-00-00 00:00:00'),
(6, 'login-whisp.png',  'login-whisp.png',  'login-whisp.png',  0,  '2014-12-21 08:20:47',  '2015-01-08 16:53:53',  0,  '0000-00-00 00:00:00'),
(7, 'Veniam inventore ut eos maxime deserunt incididunt non vel id in aliquam veniam',  'Asperiores laborum eum ex aliquid sapiente nemo quidem voluptas sint.',  'Ut porro adipisicing doloribus dolore consequatur Anim tempora dolores omnis in rerum elit tempore anim hic itaque', 1,  '2015-01-22 00:15:02',  '2015-01-22 09:12:55',  1,  '2015-01-22 09:12:55');

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

INSERT INTO `configs` (`id`, `nama`, `keterangan`, `displayed`, `deleted`, `deleted_date`) VALUES
(1, 'app_name', 'BASEAPP\r\n',  0,  0,  '2035-01-01 00:00:00'),
(2, 'company_name', 'BASEAPP',  1,  0,  '2035-01-01 00:00:00'),
(3, 'company_address',  'Jl. Raya Serang km 14.0 Cikupa, Tangerang Banten 15710', 1,  0,  '0000-00-00 00:00:00'),
(4, 'company_phone',  '021 4234324324', 1,  0,  '0000-00-00 00:00:00'),
(5, 'company_fax',  '021 345435345',  1,  0,  '0000-00-00 00:00:00'),
(6, 'company_email',  'info@miznokruge.net ', 1,  0,  '0000-00-00 00:00:00'),
(7, 'Graha Raflesia, Jl.Raflesia Selatan 11 no 10 Citra Raya, Tangerang', 'Graha Raflesia, Jl.Raflesia Selatan 11 no 10 Citra Raya, Tangerang', 1,  1,  '2015-03-09 22:20:12'),
(8, 'company_website',  'http://www.miznokruge.net',  1,  0,  '0000-00-00 00:00:00'),
(9, 'welcome_message',  'Selamat Datang Di Perpustakaan STF Muhammadiyah Tangerang\r\nSelamat Datang!\r\nSitus ini ditujukan untuk anggota Perpustakaan STF Muhammadiyah Tangerang secara khusus dan masyarakat pada umumnya. Layanan-layanan jarak jauh disediakan pada situs ini untuk memberikan kemudahan bagi pengguna jasa Perpustakaan STF Muhammadiyah Tangerang untuk meningkatkan pengetahuannya.\r\n\r\nPerpustakaan STF Muhammadiyah Tangerang merupakan unit yang berfungsi memberikan pelayanan informasi kepada mahasiswa, dosen dalam melaksanakan tugas-tugas Tri Dharma Perguruan Tinggi yang mencakup pendidikan, penelitian dan pengabdian kepada masyarakat. Perpustakaan STF Muhammadiyah Tangerang dilengkapi dengan beragam bahan pustaka yang terdiri dari buku literatur baik dalam bahasa Indonesia maupun bahasa Inggris, majalah, jurnal ilmiah serta buku ilmu pengetahuan lainnya. Fasilitas Perpustakaan STF Muhammadiyah Tangerang digunakan oleh mahasiswa, dosen, karyawan dan alumni STF Muhammadiyah Tangerang.\r\n\r\nPerpustakaan STF Muhammadiyah Tangerang untuk program profesional dan sarjana terletak beberapa lokasi kampus yaitu di kampus D - depok , kampus E - kelapa dua,kampus J - Kalimalang, Akademi Kebidanan serta perpustakaan program pasca sarjana terletak di kampus C - kenari . Sedangkan perpustakaan audio visual dan Jurnal Elektronik terdapat di kampus depok. Dan semua cabang perpustakaan universitas gunadarma menggunakan sistem informasi perpustakaan yang terintegrasi satu sama lain. ',  1,  0,  '0000-00-00 00:00:00'),
(10,  'debug_mode', '0',  1,  0,  '0000-00-00 00:00:00'),
(11,  'logo', '1422438735.jpg', 1,  0,  '0000-00-00 00:00:00');

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `specialist` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

INSERT INTO `faqs` (`id`, `title`, `body`, `created`, `deleted_date`, `deleted`) VALUES
(1, 'berapa lama peminjaman untuk anggota?',  '4 hari untuk mahasiswa,\r\n5 hari untuk dosen',  '2013-10-17 01:48:01',  '0000-00-00 00:00:00',  0),
(2, 'sdfdsf', 'erewrewrewrewrejwre\r\nwrewrewrweghjrgwejhrgejkwrwe\r\nrewhjrwegjhrgwejrwe\r\nrewrbwenmkrbewrewr\r\n', '2013-10-17 01:50:31',  '0000-00-00 00:00:00',  0),
(3, 'Suspendisse sapien elit, iaculis vel lectus vel, aliquam elementum sem! Curabitur euismod massa non sapien feugiat gravida et non tortor. Duis consectetur, leo porttitor cras amet.\r\n', 'Morbi dictum semper leo in auctor. Vestibulum ante ipsum primis in faucibus orci volutpat.\r\n', '2013-10-17 01:50:50',  '0000-00-00 00:00:00',  0),
(4, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ullamcorper enim est, vitae condimentum nibh elementum in. Phasellus orci aliquam.\r\n', 'Curabitur ultrices ullamcorper nunc nec porta. Vivamus molestie felis commodo turpis duis.\r\n', '2013-10-17 01:51:09',  '0000-00-00 00:00:00',  0),
(5, 'Quisque ac iaculis lorem, eget fringilla ligula. Maecenas fringilla aliquam posuere. Fusce rutrum lacinia felis ut ullamcorper? Pellentesque a nullam.\r\n', 'Quisque suscipit justo magna, sit amet fermentum quam malesuada in. Curabitur suscipit sed tortor sed dignissim. Proin viverra, nulla id ultricies aliquet, tortor lectus hendrerit orci, ut convallis erat lectus vulputate dolor. Aliquam quis diam non felis congue consectetur! Donec arcu enim; nullam.\r\n', '2013-10-17 01:52:47',  '0000-00-00 00:00:00',  0);

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

INSERT INTO `groups` (`id`, `name`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 'admin',  '2012-02-26 21:15:51',  '2012-02-26 21:15:51',  0,  '0000-00-00 00:00:00'),
(2, 'manager',  '2012-02-26 21:16:02',  '2012-02-26 21:16:02',  0,  '0000-00-00 00:00:00'),
(3, 'sales',  '2012-02-26 21:16:08',  '2012-02-26 21:16:08',  0,  '0000-00-00 00:00:00'),
(4, 'analyst',  '2012-04-16 11:37:45',  '2012-04-16 11:37:45',  0,  '0000-00-00 00:00:00'),
(5, 'sales-keliling', '2012-11-21 05:47:48',  '2012-11-21 05:47:48',  0,  '0000-00-00 00:00:00'),
(6, 'accountant', '2012-11-22 02:40:15',  '2012-11-22 02:40:15',  0,  '0000-00-00 00:00:00'),
(7, 'customer-service ',  '2013-09-27 05:45:48',  '2013-09-27 05:45:48',  0,  '0000-00-00 00:00:00'),
(8, 'sales-assistant ', '2013-09-27 05:48:06',  '2013-09-27 05:48:06',  0,  '0000-00-00 00:00:00'),
(9, 'satisfaction', '2013-09-27 05:48:47',  '2013-09-27 10:20:51',  0,  '0000-00-00 00:00:00');

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


DROP TABLE IF EXISTS `mediafiles`;
CREATE TABLE `mediafiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `type` varchar(5) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

INSERT INTO `memberships` (`id`, `name`, `price`, `valid_until`, `created`, `modified`, `deleted`, `display`, `class`, `pembahasan_soal`, `kunci_jawaban`, `kisi2_soal`, `jumlah_set_soal`) VALUES
(1, 'admin',  0,  0,  '2012-02-26 21:15:51',  '2012-02-26 21:15:51',  0,  0,  '', '', '', '', '0'),
(2, 'Platinum', 5000000,  12, '2012-02-26 21:16:02',  '2012-02-26 21:16:02',  0,  1,  '', 'ok', 'ok', 'ok', 'unlimited'),
(3, 'Gold', 3500000,  8,  '2012-02-26 21:16:08',  '2012-02-26 21:16:08',  0,  1,  'orange', 'remove', 'ok', 'remove', '100'),
(4, 'Silver', 2000000,  6,  '2012-04-16 11:37:45',  '2012-04-16 11:37:45',  0,  1,  '', 'remove', 'ok', 'remove', '60'),
(5, 'Premium',  1000000,  3,  '2012-11-21 05:47:48',  '2012-11-21 05:47:48',  0,  1,  '', 'remove', 'remove', 'remove', '40'),
(6, 'Standard', 0,  0,  '2012-11-22 02:40:15',  '2012-11-22 02:40:15',  0,  0,  '', 'remove', 'remove', 'remove', '20');

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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

INSERT INTO `menus` (`id`, `name`, `parent_id`, `controller`, `action`, `label`, `icon`, `order_row`, `deleted`, `deleted_date`, `enabled`) VALUES
(67,  'system', NULL, 'system', 'index',  'System', 'fa-cubes', 99, 0,  '0000-00-00 00:00:00',  1),
(69,  'menu', 90, 'Menus',  'index',  'Menu', 'fa-cubes', 99, 0,  '0000-00-00 00:00:00',  1),
(70,  'permission', 91, 'user_group_permissions', 'index',  'Permission', 'fa-cubes', 99, 0,  '0000-00-00 00:00:00',  0),
(71,  'user-group', 91, 'user_groups',  'index',  'User Group', 'fa-users', 99, 0,  '0000-00-00 00:00:00',  0),
(72,  'configuration',  90, 'configs',  'index',  'Configuration',  'fa-cog', 99, 0,  '0000-00-00 00:00:00',  1),
(73,  'background', 90, 'combackgrounds', 'index',  'Background', 'fa-image', 99, 0,  '0000-00-00 00:00:00',  1),
(89,  'users',  91, 'users',  'index',  'Users',  'fa-user',  99, 0,  '0000-00-00 00:00:00',  1),
(90,  'system-configuration', 67, '', '', 'System Configuration', '', 0,  0,  '0000-00-00 00:00:00',  0),
(91,  'user-management',  67, '', '', 'User Management',  '', 0,  0,  '0000-00-00 00:00:00',  0),
(98,  'pages',  NULL, 'Pages',  'icon', 'Pages',  '', 99, 0,  '0000-00-00 00:00:00',  0),
(105, 'help', NULL, '', '', 'Help', '', 99, 0,  '0000-00-00 00:00:00',  1),
(106, 'help-box', 105,  '', '', 'Help-Box', '', 99, 0,  '0000-00-00 00:00:00',  1),
(107, 'help', 106,  'Pages',  'help', 'Help', '', 99, 0,  '0000-00-00 00:00:00',  1),
(108, 'check-for-updates',  106,  'pages',  'check_updates',  'Check for Updates',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(109, 'about',  106,  'pages',  'about',  'About',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(117, 'change-logo',  90, 'Configs',  'change_logo',  'Change Logo',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(118, 'Sekolah',  NULL, 'SchoolClasses',  'index',  'Sekolah',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(119, 'kelas',  118,  'SchoolClasses',  'index',  'kelas',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(120, 'Murid',  118,  'SchoolStudents', 'index',  'kelas',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(121, 'Mata Pelajaran', 118,  'SchoolSubjects', 'index',  'kelas',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(122, 'Guru', 118,  'SchoolTeachers', 'index',  'kelas',  '', 99, 0,  '0000-00-00 00:00:00',  1),
(123, 'Hasil Ujian',  118,  'SchoolExams',  'index',  'kelas',  '', 99, 0,  '0000-00-00 00:00:00',  1);

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


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `content` longtext NOT NULL,
  `dateadd` date NOT NULL,
  `datemodify` date NOT NULL,
  `featureimage` varchar(100) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `roomclasses`;
CREATE TABLE `roomclasses` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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


DROP TABLE IF EXISTS `room_categories`;
CREATE TABLE `room_categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `settingname` varchar(225) NOT NULL,
  `settingvalue` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`, `created`, `modified`, `board_id`, `display_ticket`, `display_ticket2`, `phone_address`, `ip_address`, `name`, `foto`, `description`, `deleted`, `deleted_date`, `user_group_id`, `email_verified`, `salt`, `membership_id`, `active`) VALUES
(4, 'sales',  '3db1537f747c9d57dfa057739d3ae613', 'sales@belifurniture.com',  1,  '2012-02-23 06:48:24',  '2015-01-12 01:06:19',  '', 1,  0,  '', '', '', '1420081220.jpg', '', 0,  '0000-00-00 00:00:00',  3,  1,  'fa43ce2c1539ee83e2bcdb0d50302b39', 0,  1),
(5, 'god',  '121e66302f6cb4ed91b62200cc3b5a7d', 'somawisnu@gmail.com',  1,  '2012-02-23 08:18:30',  '2015-01-07 22:21:54',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  '37ec5e69da28a0e5f9b31c6dd6587598', 0,  1),
(6, 'boss', 'a5c7080dcf5cbdf8f64cd331a05f454a', 'iamthe@boss.com',  2,  '2012-02-26 21:33:36',  '2015-01-07 22:21:56',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  2,  1,  '56616bc744dc1e661335bf1b832393fb', 0,  1),
(7, 'sales1', '93eccd81b93a68a5cffab7f7f1450cf2', 'sales1@belifurniture.com', 3,  '2012-02-26 22:15:32',  '2015-01-07 22:21:57',  NULL, 1,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  3,  1,  '241833e5382ffc21ff5861438c27554d', 0,  1),
(8, 'mundo',  '7b4de7fbb5ee88c740c9e6aaf7f7d218', 'somawisnu@gmail.com',  1,  '2012-03-08 01:46:54',  '2015-01-07 22:21:57',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  '2f4a82d00c1e1c2cb9dd5e4498bfd729', 0,  1),
(9, 'analyst',  'feda9b294c7802820c8ab381e0a04cce', 'analyst@analyst.com',  4,  '2012-04-23 03:45:27',  '2015-01-07 22:21:59',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  4,  1,  'ddc8df41c526ddeda6d09274a0b8e372', 0,  1),
(10,  'dahpit', '12a8637eee275006c3cb319961cf9571', 'dahpit@gmail.com', 5,  '2012-11-21 05:48:35',  '2015-01-07 22:22:00',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  5,  1,  '8753aa14d162238683fff5c5572714a0', 0,  1),
(11,  'ayu',  'ee55f6533f74608fb9966be05952bd3a', 'ayu@gmail.com',  6,  '2012-11-22 02:41:18',  '2015-01-07 22:22:00',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  6,  1,  '402f1ad28d1b21a3cfc926755aea960f', 0,  1),
(12,  'mizno',  '4879c1fce99fa58e9c807a1b3931d369', 'mizno.kruge@gmail.com',  1,  '2013-04-30 14:40:10',  '2015-01-28 17:44:22',  '', 0,  0,  '', '', '', '1422441862.jpg', '', 0,  '0000-00-00 00:00:00',  1,  1,  '7140adf0acb3999433b76aba2789e3f8', 0,  1),
(13,  'inka', 'f2ce6afc685d81047eba1feaea652bb5', 'inka@yahoo.com', 2,  '2013-06-05 15:45:06',  '2015-01-07 22:22:01',  '519daaad6f55aadd60001b4f', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  2,  1,  'bdc326291d653e89921646e218be8621', 0,  1),
(14,  'werwer', 'bed2f92a60bdcc89981437405e889d08', '4234@asd.com', 1,  '2013-06-05 16:30:38',  '2015-01-07 22:22:02',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  '380a6dd4c428eec6e5f209b96ab338b6', 0,  1),
(15,  'wrewrew',  '5017aaf4077977e80c5956429b508bac', '42345@asd.com',  1,  '2013-06-05 16:50:35',  '2015-01-07 22:22:03',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  'df4b0249225eddd2ca7fb0f24a0ed5f5', 0,  1),
(17,  'bobo', '36981c2243b7bb34a15c5487432980af', 'bobo@bobo.com',  1,  '2013-06-13 12:42:17',  '2015-01-07 22:22:03',  '78787878787',  0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  'b4b1239e622c749673fbb847d9af1808', 0,  1),
(18,  'xxx',  '6ceb57de09ddeca6b190a1ecaa7a687d', 'xxx@xx.com', 3,  '2013-09-10 11:24:31',  '2015-01-07 22:22:04',  '', 0,  1,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  3,  1,  '98972e9fa17bd83dbaf8a0ca516a8543', 0,  1),
(19,  'www',  '48901abbc66e059499970a69d517a17a', 'www@www.com',  2,  '2013-09-10 11:36:59',  '2015-01-07 22:22:05',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  2,  1,  '4e131ae9095559efaa8c42e6f9ea2cab', 0,  1),
(20,  'NA', '2d7cdf5724c3a91d0dc6c979b724359f', 'somawisnu@gmail.com',  3,  NULL, '2015-01-07 22:22:07',  NULL, 1,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  3,  1,  '937d5344da96b5e05d42a968a05ca841', 0,  1),
(21,  'satisfaction-t', '0f0b89cd929942c84ec4ddef8ba92241', 'satisfaction@gmail.com', 9,  '2013-09-27 05:50:04',  '2015-01-07 22:22:07',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  9,  1,  '3c64ebd41d04c25aa5ce709e6beeab2b', 0,  1),
(23,  'sales_nih',  'f3aa72dc8341e763183622fb6a4d5130', 'sales@hell.com', 1,  '2014-02-05 00:00:00',  '2015-01-07 22:22:08',  '5',  0,  1,  '', '', '', '1417808837.jpg', '', 0,  '0000-00-00 00:00:00',  1,  1,  '6cdd41240de60c69887ed2e091db145c', 0,  1),
(24,  'cs', '1d7aab0e5ef623a91f3fa989a05d904b', 'kljhkhk@gmail.com',  7,  '2014-02-12 15:35:34',  '2015-01-07 22:22:10',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  7,  1,  'f430aa77c95982ca3052800d8ac52480', 0,  1),
(25,  'stephanus',  'fd80874f3d288d71916ced31c6732ebf', 'stephanus.bf@gmail.com', 1,  '2014-02-24 10:15:12',  '2015-01-07 22:22:11',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  '17ac63201049beabc22207f6675e56b3', 0,  1),
(26,  'inka', '8b490d5191a71770f57563d1cf0cef77', 'inka@bf.com',  1,  '2014-03-11 12:15:36',  '2015-01-07 22:22:13',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  '1e4bea7c949c37a74d72161b23b10045', 0,  1),
(27,  'new_cs', '841b01340d0fd6b6534cf51b37316aea', 'fajar_cs@gmail.com', 7,  NULL, '2015-01-07 22:22:14',  NULL, 1,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  7,  1,  'e0881c04e34ea86851a9b62b1dce6692', 0,  1),
(28,  'inka', '2a0b2335c4cec05ea58b0b5c2b60fdb6', 'inka@maho.com',  1,  '2014-03-20 23:54:10',  '2015-01-07 22:22:15',  '1',  0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  1,  1,  'd39dadd775bbf6e8b4472bd5da2129e2', 0,  1),
(29,  'admin',  '98b5b202e251161c7f841b54c4d96eb6', 'admin@admin.com',  1,  NULL, '2015-01-13 21:35:44',  NULL, 0,  0,  '', '', '', '1421159744.jpg', '', 0,  '0000-00-00 00:00:00',  1,  1,  'cb0b112384303c3165130a7c4e006c01', 0,  1),
(30,  NULL, 'b060e3e42f8bba23000749e8ace8f4c2', NULL, NULL, '2015-01-07 08:56:16',  '2015-01-07 22:22:15',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  '76a81df440199b81a493d51bcd6319ab', 0,  1),
(31,  NULL, '47fd97c7080633016dfb9caa8dd56a62', NULL, NULL, '2015-01-07 08:58:19',  '2015-01-07 22:22:16',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  '243fc6b6fc71c58536d03450e0ff664a', 0,  1),
(32,  NULL, '5a6525e622e3c2afaa6dfec67d8a9922', NULL, NULL, '2015-01-07 08:59:25',  '2015-01-07 22:22:16',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  'ad834160f5e16ceb8d72a9b419d064f9', 0,  1),
(33,  NULL, 'b628a2ba0410ffc2f23bcce89946964d', NULL, NULL, '2015-01-07 09:00:50',  '2015-01-07 22:22:17',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  'c562c838b0f7b42f346d86c4d59a8a47', 0,  1),
(34,  NULL, 'e4624d71e636f65dedf949314dc35a88', NULL, NULL, '2015-01-11 23:07:34',  '2015-01-11 23:07:34',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  '9cba62450930848444df3d8d18e7c5dc', 0,  1),
(35,  NULL, 'c127d47d83fadcb6b95ce104f51243d7', NULL, NULL, '2015-01-12 11:16:41',  '2015-01-12 11:16:41',  NULL, 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 0,  '2280a132492f4eddc6e800fe8affa082', 0,  0),
(36,  'akhfan', 'qwerty', 'akhfan@gmail.com', 1,  '2015-03-06 15:27:54',  '2015-03-06 15:27:54',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 1,  NULL, 0,  1),
(37,  'dwian',  'dwian',  '', 1,  '2015-03-10 08:29:12',  '2015-03-10 08:29:12',  '', 0,  0,  '', '', '', '', '', 0,  '0000-00-00 00:00:00',  NULL, 0,  NULL, 0,  0);