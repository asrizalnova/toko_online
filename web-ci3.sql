/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST V5
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : web-ci3

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 21/08/2021 21:23:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` enum('Reseller','Agen','Master Agen','VIP Agen') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ttl` date NOT NULL,
  `gender` enum('P,L') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_ktp` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_bergabung` datetime(0) NOT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES (1, 'devi', 'Reseller', 'Jombang', '2021-07-04', 'P,L', 12345, 'devi', '123', '2021-07-21 11:47:22');
INSERT INTO `customer` VALUES (2, 'arfina', 'Agen', 'Mojokerto', '2021-08-01', 'P,L', 34567, '', '', '2021-08-01 11:46:22');

-- ----------------------------
-- Table structure for detail_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `sub-total` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_product`(`id_product`) USING BTREE,
  INDEX `id_customer`(`id_customer`) USING BTREE,
  CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_transaksi
-- ----------------------------
INSERT INTO `detail_transaksi` VALUES (1, 1, 1, 40000, '40000');
INSERT INTO `detail_transaksi` VALUES (2, 2, 2, 22000, '22000');

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice`  (
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pesan` datetime(0) NOT NULL,
  `batas_bayar` datetime(0) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of invoice
-- ----------------------------
INSERT INTO `invoice` VALUES ('devi', 'Jombang, Jawa timur', '2021-08-05 21:25:47', '2021-08-06 21:25:47', 1);
INSERT INTO `invoice` VALUES ('Arfina', 'Jombang, Jawa timur', '2021-08-05 21:32:48', '2021-08-06 21:32:48', 2);
INSERT INTO `invoice` VALUES ('Dafa', 'Jombang, Jawa timur', '2021-08-05 21:33:56', '2021-08-06 21:33:56', 3);
INSERT INTO `invoice` VALUES ('aul', 'Kediri', '2021-08-18 12:47:12', '2021-08-19 12:47:12', 6);
INSERT INTO `invoice` VALUES ('ica', 'Tulungagung', '2021-08-18 12:49:07', '2021-08-19 12:49:07', 8);
INSERT INTO `invoice` VALUES ('Rizky', 'bandung', '2021-08-21 12:51:56', '2021-08-22 12:51:56', 9);
INSERT INTO `invoice` VALUES ('Rizky R', 'Bandung', '2021-08-21 13:05:45', '2021-08-22 13:05:45', 10);
INSERT INTO `invoice` VALUES ('Rizky R', 'Bandung', '2021-08-21 13:07:44', '2021-08-22 13:07:44', 11);

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES (1, 0, 2, 'Matcha', 1, 22000);
INSERT INTO `pesanan` VALUES (2, 0, 4, 'Milk', 1, 45000);
INSERT INTO `pesanan` VALUES (3, 0, 3, 'Choco', 1, 40000);
INSERT INTO `pesanan` VALUES (4, 0, 1, 'Coffie', 1, 40000);
INSERT INTO `pesanan` VALUES (5, 0, 2, 'Matcha', 1, 22000);
INSERT INTO `pesanan` VALUES (6, 0, 3, 'Choco', 1, 40000);
INSERT INTO `pesanan` VALUES (7, 0, 1, 'Coffie', 1, 40000);
INSERT INTO `pesanan` VALUES (8, 4, 6, 'strawbery', 2, 40000);
INSERT INTO `pesanan` VALUES (9, 5, 5, 'greentea', 1, 23000);
INSERT INTO `pesanan` VALUES (10, 5, 4, 'Milk', 1, 45000);
INSERT INTO `pesanan` VALUES (11, 6, 1, 'Coffie', 1, 40000);
INSERT INTO `pesanan` VALUES (12, 6, 2, 'Matcha', 1, 22000);
INSERT INTO `pesanan` VALUES (13, 6, 3, 'Choco', 1, 40000);
INSERT INTO `pesanan` VALUES (14, 6, 4, 'Milk', 1, 45000);
INSERT INTO `pesanan` VALUES (15, 8, 2, 'Matcha', 1, 22000);
INSERT INTO `pesanan` VALUES (16, 8, 3, 'Choco', 1, 40000);
INSERT INTO `pesanan` VALUES (17, 8, 4, 'Milk', 1, 45000);
INSERT INTO `pesanan` VALUES (18, 9, 1, 'Coffie', 50, 40000);
INSERT INTO `pesanan` VALUES (19, 10, 1, 'Coffie', 50, 40000);
INSERT INTO `pesanan` VALUES (20, 11, 1, 'Coffie', 50, 40000);
INSERT INTO `pesanan` VALUES (21, 11, 2, 'Matcha', 50, 22000);

-- ----------------------------
-- Table structure for point
-- ----------------------------
DROP TABLE IF EXISTS `point`;
CREATE TABLE `point`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) NULL DEFAULT NULL,
  `point` float NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of point
-- ----------------------------
INSERT INTO `point` VALUES (1, 11, 100, '2021-08-21 13:07:44');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` enum('20','50','100') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id_product`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'Coffie', '', '40000', 'by Oh My Skin', 'coffee.jpg', 'Masker by Oh My Skin\r\n', 749);
INSERT INTO `product` VALUES (2, 'Matcha', '', '22000', 'by Lea Gloria', 'matcha.jpg', 'Masker by Lea Gloria', 688);
INSERT INTO `product` VALUES (3, 'Choco', '', '40000', 'by Oh My Skin', 'choco.jpg\r\n', 'Masker by Oh My Skin', 148);
INSERT INTO `product` VALUES (4, 'Milk', '', '45000', 'by Oh My Skin', 'milk.jpg', 'Masker by Oh My Skin\r\n', 667);
INSERT INTO `product` VALUES (5, 'Greentea', '', '23000', 'by Oh My Skin', 'green.jpg', 'Masker by Oh My Skin', 459);
INSERT INTO `product` VALUES (6, 'Strawbery', '', '40000', 'by Lea Gloria', 'strawberry.jpg', 'Masker by Lea Gloria', 280);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu_transaksi` datetime(0) NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total` int(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `detail_transaksi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, '2021-08-01 11:49:04', 'Sudah dibayar', 40000);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'reseller', 'reseller', '123', 1);
INSERT INTO `user` VALUES (2, 'agen', 'agen', '123', 2);
INSERT INTO `user` VALUES (3, 'devi', 'devi', '123', 3);
INSERT INTO `user` VALUES (4, 'devi', 'devi', '123', 2);
INSERT INTO `user` VALUES (5, 'aul', 'aul', '1234', 2);
INSERT INTO `user` VALUES (6, 'Arfina', 'dev', '890', 2);
INSERT INTO `user` VALUES (7, 'arfina', 'arfinadevi@gmail.com', '123', 2);
INSERT INTO `user` VALUES (8, 'ica', 'devi12', '123', 2);

-- ----------------------------
-- Triggers structure for table pesanan
-- ----------------------------
DROP TRIGGER IF EXISTS `pesanan_penjualan`;
delimiter ;;
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE product SET stok = stok-NEW.jumlah
    WHERE id_product = NEW.id_product;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
