/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : kuliah

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2018-01-30 00:06:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kodebarang` varchar(20) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `hargabarang` double NOT NULL,
  `entryuser` varchar(20) DEFAULT NULL,
  `entrytime` date DEFAULT NULL,
  `updateuser` varchar(20) DEFAULT NULL,
  `updatetime` date DEFAULT NULL,
  PRIMARY KEY (`kodebarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('6939cb724cf', 'Usb Flashdisk 8 GB', '75000', null, '2018-01-25', null, null);
INSERT INTO `barang` VALUES ('6b1b350395a', 'Laptop Core i5', '7600000', null, '2018-01-26', null, null);
INSERT INTO `barang` VALUES ('6dd2bac9b2a', 'NVIDIA GEFORCE 2GB Monster', '2450000', null, '2018-01-28', null, null);
INSERT INTO `barang` VALUES ('6dd3ac9b451', 'Akses Point UNIFI 5Ghz', '1756000', null, '2018-01-28', null, null);
INSERT INTO `barang` VALUES ('6f17fb8eba8', 'Xiaomi Note 3 Pro', '2350000', null, '2018-01-29', null, null);
INSERT INTO `barang` VALUES ('6f181135eb5', 'Acer Travelmate Z2359', '7650000', null, '2018-01-29', null, null);
INSERT INTO `barang` VALUES ('6f184228d7c', 'Razer Mouse RG23490', '5600000', null, '2018-01-29', null, null);

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text,
  `pengarang` varchar(200) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `tahunTerbit` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('7', 'Mengejar Wahyu ', 'Demian', 'PT RIBUT Selalu', '2014');
INSERT INTO `buku` VALUES ('8', 'Cinta Satu Malam', 'Rahmat Dimas', 'PT. Kenari Alam International', '2016');
INSERT INTO `buku` VALUES ('9', 'Resah Dalam Debu', 'Dinara', 'PT. Yahoo Inc', '2013');
INSERT INTO `buku` VALUES ('10', 'test', 'Demian', 'Bintang Senja', '2016');
INSERT INTO `buku` VALUES ('11', 'Lima Hari Dalam Parit Perang Dunia 1', 'Van Kissel', 'Aksara Dunia', '1987');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `kodecustomer` varchar(10) NOT NULL,
  `namacustomer` varchar(20) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`kodecustomer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('b616b69', 'PT. Astra Agro Lesta', '02187566652', '', 'Jl. Kawasan Industri Pulogadung');
INSERT INTO `customer` VALUES ('d700f88', 'Dimas Renggono 1', '08977876', 'dimas@renggono.com', 'Jakarta');
INSERT INTO `customer` VALUES ('e5789d8', 'Rahmat Effendi', '0218898778976', 'rahmat@gamil.com', 'Jakarta Barat');
INSERT INTO `customer` VALUES ('fb30fcb', 'Ahmad Mustavi', '08988787677', 'ahmusta@gmail.com', 'Jl Delima Raya No 2 ');

-- ----------------------------
-- Table structure for pembelian
-- ----------------------------
DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE `pembelian` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `notransaksi` varchar(20) NOT NULL,
  `kodesupplier` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `entryuser` varchar(20) NOT NULL,
  `entrytime` date NOT NULL,
  `updateuser` varchar(20) NOT NULL,
  `updatetime` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notransaksi` (`notransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembelian
-- ----------------------------
INSERT INTO `pembelian` VALUES ('1', 'c8dcd91', 'KD98878', '681edcb93c9', '2018-01-24', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('2', 'df5e357', 'Supplier01', '681f451086f', '2018-01-24', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('3', '23101ec', 'KD87', '682f3d78bcc', '2018-01-24', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('4', '505414f', 'a641a3aca1', '683871d092c', '2018-01-24', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('9', '556777c', 'KD98878', '694287f3941', '2018-01-25', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('10', 'b77643d', 'KD87', '6942d4b664e', '2018-01-25', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('11', '5d72b93', 'a641a3aca1', '694377b34c9', '2018-01-25', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('15', '8172a0c', 'KD98878', '6dd3946b919', '2018-01-28', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('16', 'd7acf60', 'a64178e899', '6dd3f050881', '2018-01-28', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('17', '6525e9d', 'KD98878', '6f1877573d6', '2018-01-29', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pembelian` VALUES ('18', '904ba01', 'a641a3aca1', '6f18a6a4ce1', '2018-01-29', '', '0000-00-00', '', '0000-00-00');

-- ----------------------------
-- Table structure for pembelian_detail
-- ----------------------------
DROP TABLE IF EXISTS `pembelian_detail`;
CREATE TABLE `pembelian_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `notransaksi` varchar(20) NOT NULL,
  `kodebarang` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `harga` double NOT NULL,
  `subtotal` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `kodebarang` (`kodebarang`),
  KEY `notransaksi` (`notransaksi`),
  CONSTRAINT `pembelian_detail_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `barang` (`kodebarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pembelian_detail_ibfk_2` FOREIGN KEY (`notransaksi`) REFERENCES `pembelian` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembelian_detail
-- ----------------------------
INSERT INTO `pembelian_detail` VALUES ('15', '8172a0c', '6939cb724cf', '450', '125000', '56250000');
INSERT INTO `pembelian_detail` VALUES ('16', 'd7acf60', '6dd3ac9b451', '50', '1540000', '77000000');
INSERT INTO `pembelian_detail` VALUES ('17', '6525e9d', '6f17fb8eba8', '67', '2250000', '150750000');
INSERT INTO `pembelian_detail` VALUES ('18', '904ba01', '6f181135eb5', '12', '5420000', '65040000');

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id_user` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE `penjualan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `notransaksi` varchar(20) NOT NULL,
  `kodecustomer` varchar(10) NOT NULL,
  `no_po` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `entryuser` varchar(20) NOT NULL,
  `entrytime` date NOT NULL,
  `updateuser` varchar(20) NOT NULL,
  `updatetime` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notransaksi` (`notransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjualan
-- ----------------------------
INSERT INTO `penjualan` VALUES ('29', '0e33236c025d3c', 'e5789d8', '1', '2018-01-28', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `penjualan` VALUES ('30', '72927a699fa25a', 'fb30fcb', '2', '2018-01-29', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `penjualan` VALUES ('31', '7c6477453087ba', 'fb30fcb', '3', '2018-01-29', '', '0000-00-00', '', '0000-00-00');

-- ----------------------------
-- Table structure for penjualan_detail
-- ----------------------------
DROP TABLE IF EXISTS `penjualan_detail`;
CREATE TABLE `penjualan_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `notransaksi` varchar(20) NOT NULL,
  `kodebarang` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `harga` double NOT NULL,
  `subtotal` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kodebarang` (`kodebarang`),
  KEY `notransaksi` (`notransaksi`),
  CONSTRAINT `penjualan_detail_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `barang` (`kodebarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penjualan_detail_ibfk_2` FOREIGN KEY (`notransaksi`) REFERENCES `penjualan` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjualan_detail
-- ----------------------------
INSERT INTO `penjualan_detail` VALUES ('13', '0e33236c025d3c', '6dd3ac9b451', '2', '1756000', '3512000');
INSERT INTO `penjualan_detail` VALUES ('14', '72927a699fa25a', '6f184228d7c', '3', '125000', '375000');
INSERT INTO `penjualan_detail` VALUES ('15', '72927a699fa25a', '6dd2bac9b2a', '23', '3450000', '79350000');
INSERT INTO `penjualan_detail` VALUES ('16', '72927a699fa25a', '6f181135eb5', '2', '7650000', '15300000');
INSERT INTO `penjualan_detail` VALUES ('17', '7c6477453087ba', '6f181135eb5', '1', '7560000', '7560000');
INSERT INTO `penjualan_detail` VALUES ('18', '7c6477453087ba', '6f184228d7c', '23', '145000', '3335000');

-- ----------------------------
-- Table structure for stock
-- ----------------------------
DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stock
-- ----------------------------

-- ----------------------------
-- Table structure for stocklog
-- ----------------------------
DROP TABLE IF EXISTS `stocklog`;
CREATE TABLE `stocklog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stocklog
-- ----------------------------

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `kodesupplier` varchar(20) NOT NULL,
  `namasupplier` varchar(120) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('KD98878', 'PT Internusa Perkasa', '021889877876', 'internusa@gmail.com', 'Jl. Pulogadung Raya No 4');
INSERT INTO `supplier` VALUES ('KD87', 'PT. Dua Kelinci . TB', '02188977866', 'duakelinci@gmail.com', 'Pulogadung');
INSERT INTO `supplier` VALUES ('Supplier01', 'Beras Kita TBK', '027889817789', 'beraskita@gmail.com', 'Karawang');
INSERT INTO `supplier` VALUES ('a6416ef3ab', 'PT. Resah Abadi Perk', '08997781977', 'repm@gmail.com', 'Jl. Industri Dwi Warna 1');
INSERT INTO `supplier` VALUES ('a64174c979', 'PT. Jabar Internusa', '08891778716', 'internusa.jabar@gmail.com', 'Bandung');
INSERT INTO `supplier` VALUES ('a64178e899', 'CV. Rajawali', '0988918', 'rajaw.ali@gmail.com', 'Bekasi');
INSERT INTO `supplier` VALUES ('a641a3aca1', 'PT. Multicom', '0218767778', 'multicom@com.com', 'Jagakarsa');

-- ----------------------------
-- View structure for vw_beli
-- ----------------------------
DROP VIEW IF EXISTS `vw_beli`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vw_beli` AS SELECT
supplier.namasupplier,
pembelian.no_invoice,
pembelian.tanggal,
pembelian.notransaksi,
pembelian.id AS id_pembelian,
barang.namabarang,
barang.kodebarang AS kdbrg
FROM
supplier
INNER JOIN pembelian ON supplier.kodesupplier = pembelian.kodesupplier
INNER JOIN pembelian_detail ON pembelian_detail.notransaksi = pembelian.notransaksi
INNER JOIN barang ON pembelian_detail.kodebarang = barang.kodebarang
ORDER BY
id_pembelian ASC ;

-- ----------------------------
-- View structure for vw_jual
-- ----------------------------
DROP VIEW IF EXISTS `vw_jual`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vw_jual` AS SELECT
penjualan.notransaksi,
penjualan.no_po,
customer.namacustomer,
penjualan.tanggal
FROM
penjualan
INNER JOIN customer ON customer.kodecustomer = penjualan.kodecustomer 
ORDER BY penjualan.id ;

-- ----------------------------
-- View structure for vw_stok
-- ----------------------------
DROP VIEW IF EXISTS `vw_stok`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vw_stok` AS SELECT
barang.kodebarang AS kdbrg,
barang.namabarang,
(SELECT pembelian_detail.qty) as pembelian_qty, 
(SELECT penjualan_detail.qty) as penjualan_qty,
(select pembelian_qty - penjualan_qty) as stock
FROM
pembelian_detail
RIGHT JOIN barang ON barang.kodebarang = pembelian_detail.kodebarang
LEFT JOIN penjualan_detail ON penjualan_detail.kodebarang = barang.kodebarang
GROUP BY barang.kodebarang ;
