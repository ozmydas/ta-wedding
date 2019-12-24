-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(128) NOT NULL,
  `info` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `galeri` (`id`, `gambar`, `info`) VALUES
(7,	'f872617d46cd79ab7a0407009c747bd9.jpg',	'wedding'),
(8,	'13cea73149325b6dcb11e75ff99c014c.jpg',	'wedding'),
(9,	'17f6fa6aed1f7f882bdc91ec3a0d2fe8.jpg',	'wedding'),
(10,	'd4d8da6d0095aea233d4b0231e43566c.jpg',	'wedding'),
(11,	'e5c07e7ba06f849ae8f0d2baf86f08ec.jpg',	'wedding'),
(12,	'5c2e8fceb4ce06e41283ceb68544c075.jpg',	'wedding'),
(13,	'17ca1c94a7f7ea1e0d7b97a8b2d64224.jpg',	'wedding'),
(14,	'ac8487a0bc24b86c32b329c813710889.jpg',	'wedding'),
(15,	'20892689776aa8bcba35b2137ff589f7.jpg',	'wedding'),
(16,	'3914be8eb8ac1e12b1292140003451a2.jpg',	'wedding'),
(17,	'43108641d5af62eb73543cec74bcdd4c.jpg',	'wedding'),
(18,	'c7a975c520ece954519d12c344d45afd.jpg',	'wedding'),
(19,	'09b452b806819bafe86386cc775253ae.jpg',	'wedding'),
(20,	'f256a04b3f58cdb792cb754824c129bf.jpg',	'wedding'),
(21,	'd22796f96a0512bb674f97170a36d991.jpg',	'wedding'),
(22,	'59f9dcd8dc9b3ff45b544dab9218d874.jpg',	'wedding'),
(23,	'14ae55ed1126dcbe3eb2a76335352b28.jpg',	'wedding'),
(24,	'ec5c5df2b2e0b952635bc24fed9a2595.jpg',	'wedding'),
(25,	'd4d636de06320a5848c39b514dc4d652.jpg',	'wedding'),
(26,	'bfaf8ae73c98c84c89825410f7e7aace.jpg',	'wedding'),
(27,	'd65f07e83eb9f7e2e8b0c07efbe7c866.jpg',	'fasilitas'),
(28,	'db0c100c9c8c5e513d720b6c12fa6883.jpg',	'fasilitas'),
(29,	'9eabe934cc0a219f4d2d06737a55a259.jpg',	'fasilitas'),
(30,	'89896c13b65ebdb5560b9da54d9bb5f2.jpg',	'fasilitas'),
(31,	'09b46774a934613a1a47abc7e0afc264.jpg',	'fasilitas'),
(32,	'65b96a3521fa3aeb81e70a12a480d730.jpg',	'fasilitas'),
(33,	'6f0d7ece9abe740e1c5983e4f477264e.jpg',	'fasilitas'),
(34,	'1be30b38cfaf2b9b6833a4cb913a06ca.jpg',	'fasilitas'),
(35,	'f7680dc921dd2b91e5f2253c9048cb31.jpg',	'fasilitas'),
(36,	'2af71337e8e3f956b9c94e0b0a4b4334.jpg',	'fasilitas'),
(37,	'7184099abc3230b0e7bc7dd89682516b.jpg',	'fasilitas'),
(38,	'fc4a1c1481070558f2742fb131cd49a0.jpg',	'dekorasi'),
(39,	'8e65d82e949add23bee43c85d2af29a9.jpg',	'dekorasi'),
(40,	'7a919003936105524ed37c95a2f596f1.jpg',	'dekorasi'),
(41,	'19b07b805b862c361daa375831717a86.jpg',	'dekorasi'),
(42,	'35507bd68f42b24f56b084693171f29b.jpg',	'dekorasi'),
(43,	'8cde6f32dbb00cb9d840fd57831629e1.jpg',	'dekorasi'),
(44,	'1b171536ffa086e7283977a50cee87a9.jpg',	'dekorasi'),
(45,	'15ee3d023dd4f23060918587aad199b0.jpg',	'dekorasi');

CREATE TABLE `paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(160) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `keterangan` text DEFAULT NULL,
  `gambar` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `paket` (`id`, `nama_paket`, `harga`, `keterangan`, `gambar`, `active`) VALUES
(16,	'PAKET WEDDING A - Standard',	10000000,	'Tata rias\r\n-2x Ganti Pengatin\r\n-2 Pasang Bapak + Ibu\r\n-2 Among Tamu\r\n-2 Penerimaan Tamu\r\nDEKORASI / BUNGA HIDUP\r\n-Pelaminan\r\n-Panggung Pelaminan\r\n-Pintu Masuk\r\n-1 Buah Janur\r\n-Garden Mini\r\nTENDA 4 LOKAL UKURAN (4X4 m)\r\n-100 Kursi + Tutup\r\n-100 Piring + Sendok + Garpu\r\n-1 Set Meja Prasmanan\r\n-1 Set Tempat Prasmanan\r\n-2 Meja Penerima Tamu\r\n-2 Tempat Angpau\r\n-2 Gubuka\r\nDiluar Paket ada Biaya Tambahan',	'pic.png',	1),
(17,	'PAKET WEDDING B - Deluxe',	15000000,	'Tata rias\r\n-3x Ganti Pengatin\r\n-2 Pasang Bapak + Ibu\r\n-2 Among Tamu\r\n-4 Pager Ayu (Penjaga Tamu)\r\nDEKORASI  BUNGA HIDUP\r\n-Pelaminan\r\n-Panggung Pelaminan\r\n-Pintu Masuk\r\n-1 Buah Janur\r\n-Garden\r\nTENDA 5 LOKAL UKURAN (4X4 m)\r\n-100 Kursi + Tutup\r\n-150 Piring + Sendok + Garpu\r\n-1 Set Meja Prasmanan\r\n-1 Set Tempat Prasmanan\r\n-2 Meja Penerima Tamu + 2 Gubukan\r\n-2 Tempat Angpau\r\n-3 Ucapan Selamat\r\nFOTO',	'8d0664db60177ecad4b11e93ced24d9f.png',	1),
(18,	'PAKET WEDDING C - Ekslusif',	25000000,	'Tata rias\r\n-3x Ganti Pengatin\r\n-2 Pasang Bapak + Ibu\r\n-4 Among Tamu\r\n-4 Pager Ayu \r\nDEKORASI  BUNGA HIDUP\r\n-Pelaminan            -2 Buah Bunga Meja Tamu\r\n-Panggung Pelaminan\r\n-Pintu Masuk     \r\n-2 Buah Janur Besar/Kecil\r\n-1 Buah Rangkaian Bunga Prasmanan\r\nTENDA 6 LOKAL UKURAN (4X4 m)\r\n-150 Kursi + Tutup\r\n-200 Piring + Sendok + Garpu\r\n-1 Set Meja Prasmanan\r\n-1 Set Tempat Prasmanan (Kotak Besar)\r\n-2 Meja Penerima Tamu + 3 Gubukan\r\n-2 Tempat Angpau\r\n-3 Ucapan Selamat\r\nHIBURAN\r\n-Organ Tunggal\r\n-2Penyanyi + 1 Mc Music\r\n-Panggung Hiburan\r\n-Sound Sistem\r\nFOTO + VEDEO',	'f415fab2e5be8c2e513a04d3d38b857a.png',	1),
(19,	'PAKET WEDDING D - Set Lapangan',	30000000,	'Tata rias\r\n-3x Ganti Pengatin    \r\n-2 Pasang Bapak + Ibu\r\n-4 Among Tamu + 2 Pager Bagus\r\n-4 Pager Ayu \r\nDEKORASI  BUNGA HIDUP\r\n-Pelaminan 6 m          \r\n-Panggung Pelaminan\r\n-Pintu Masuk  + Garden Pelaminan  \r\n-2 Buah Janur Besar + Standing Jalan\r\n-2 Buah Rangkaian Bunga Prasmanan\r\nTENDA 8 LOKAL UKURAN 4X4 m ( VIP )\r\n-150 Kursi + Tutup\r\n-300 Piring + Sendok + Garpu\r\n-1 Set Meja Prasmanan\r\n-1 Set Tempat Prasmanan (Rol Top)\r\n-2 Meja Penerima Tamu + 3 Gubukan\r\n-2 Tempat Angpau\r\n-3 Ucapan Selamat + Gazebo Pintu Masuk\r\nHIBURAN\r\n-Organ Tunggal\r\n-2 Penyanyi + 1 Mc Music\r\n-1 Set  Panggung + Sound Sistem    \r\n                         * Acara AdatJawa/Sunda\r\nFOTO + VEDEO       * mc akad nikah\r\n',	'70bb9d251440f5c0a68a2aab8c1a76b6.png',	1);

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_id` int(11) NOT NULL,
  `invoice` varchar(16) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `nama_paket` varchar(160) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL,
  `bayar` int(11) NOT NULL DEFAULT 0,
  `pesta_date` date NOT NULL,
  `keterangan` text NOT NULL,
  `is_lunas` int(11) NOT NULL DEFAULT 0 COMMENT 'sudah lunas bayar',
  `is_visible` int(11) NOT NULL DEFAULT 1,
  `created_datetime` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`paket_id`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pesanan` (`id`, `paket_id`, `invoice`, `nama_user`, `nama_paket`, `gambar`, `harga`, `bayar`, `pesta_date`, `keterangan`, `is_lunas`, `is_visible`, `created_datetime`) VALUES
(1,	16,	'1909119560',	'Jaka Sembung',	'PAKET WEDDING Standardd',	'385d5f3fbd08fa29d31566094214eb0f.jpg',	100000,	100000,	'2019-09-11',	'dp 100rb\r\n\r\nalamat jalan sentosa',	1,	1,	'2019-09-11 17:27:09'),
(2,	16,	'1909119560',	'Asep',	'PAKET WEDDING Standardd',	'pic.png',	100000,	100000,	'2020-09-11',	'sdsdsdsd<br />\r\n<br />\r\nkjkjkkjk',	1,	1,	'2019-09-11 18:59:15'),
(3,	19,	'1909119560',	'kriwil',	'PAKET WEDDING D - set lapangan',	'70bb9d251440f5c0a68a2aab8c1a76b6.png',	52000000,	52000000,	'2019-09-11',	'paket tambahan biduan',	1,	1,	'2019-09-11 19:22:08'),
(4,	17,	'1909119560',	'Beta Karotin',	'PAKET WEDDING B - deluxe',	'8d0664db60177ecad4b11e93ced24d9f.png',	30000000,	30000000,	'2019-09-11',	'',	1,	1,	'2019-09-11 19:24:34'),
(5,	18,	'1909128393',	'Para Setamol',	'PAKET WEDDING C - ekslusif',	'f415fab2e5be8c2e513a04d3d38b857a.png',	45000000,	40000000,	'2019-09-12',	'fgfggfgggf',	0,	1,	'2019-09-12 10:54:12');

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `testimoni` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `testimoni` (`id`, `nama`, `testimoni`, `gambar`) VALUES
(29,	'Dian Sastra',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(30,	'Yudika',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(31,	'Babang Tamvan',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(32,	'Antoni',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(34,	'Hari Tani',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(35,	'Joko',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(36,	'Wowo',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg'),
(37,	'XXXX',	'Lizza Wedding Memudahkan Pernikahan Saya',	'd013b6bf1524b82ac2c7d5fb9cec1b84.jpg');

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jkel` varchar(6) NOT NULL DEFAULT 'pria',
  `role` varchar(12) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `telp`, `alamat`, `jkel`, `role`) VALUES
(1,	'admin',	'admin',	'User Admin',	'-',	'-',	'-',	'admin'),
(2,	'finance',	'finance',	'User Keuangan',	'-',	'-',	'-',	'finance');

-- 2019-09-12 09:53:06
