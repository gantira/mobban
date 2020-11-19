/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : db_m_obban

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 19/11/2020 21:15:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bot_sfs
-- ----------------------------
DROP TABLE IF EXISTS `bot_sfs`;
CREATE TABLE `bot_sfs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sf_chat_id` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `datel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `track_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `odp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_sales` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `teknisi_chat_id` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_name_telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_name_telegram_teknisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `info_progress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sc_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nd_internet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nd_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `teknisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `layanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `wo_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bot_sfs
-- ----------------------------
INSERT INTO `bot_sfs` VALUES (1, '109690286', 'RJW', 'Inner WBB', 'Muhammad Fikri Arfiansyah', '10260717110001', '081572704451', '00', 'Jl. K. Natawijaya No.24/89, Cibadak, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40241', 'ODP-RJW-FEX/04', 'MKTLFH', '109690286', 'SeptianEL', NULL, 'sudah terpasang smua normal', 'LIVE', '10 Mbps Low FUP, 50 Menit', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:16:28', '2020-11-16 11:16:28');
INSERT INTO `bot_sfs` VALUES (2, '109690286', 'RJW', 'Inner WBB', 'JUWARIAH', '10261701690001', '082112877760', '00', 'Jl. Soekarno-Hatta No.85, Wr. Muncang, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212, Indonesia (samping SPBU Holis)', 'ODP-RJW-FFE/10', 'SPRSP27 - @anwar9t9', '109690286', 'SeptianEL', NULL, 'Kurang kabel', 'PERLU PT2/3', '3P', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:34:41', '2020-11-16 11:34:41');
INSERT INTO `bot_sfs` VALUES (3, '109690286', 'RJW', 'Inner WBB', 'Agus setiawan', '10261699340001', '081228754588', '00', 'Cimindi tengah Rt 04 Rw15 Kel cibereum Kec cimahi selatan', 'ODP-RJW-FDE/006', 'SPDEW35', '109690286', 'SeptianEL', NULL, 'sudah terpasang', 'LIVE', 'SBR TREG 3 20MBPS', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:40:04', '2020-11-16 11:40:04');
INSERT INTO `bot_sfs` VALUES (4, '109690286', 'RJW', 'Inner WBB', 'dea permana', '10261702010001', '081915435980', '00', 'Gg maskardi rt 07 rw 01', 'ODP-RJW-FEQ-017', 'SPNAU84', '109690286', 'SeptianEL', NULL, 'sudah full', 'ODP FULL', 'SBR TREG 3 20MBPS', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:39:30', '2020-11-16 11:39:30');
INSERT INTO `bot_sfs` VALUES (5, '109690286', 'RJW', 'Inner WBB', 'Nurjaman', '10261676650001', '0895352411800', '00', 'kp.cikendal rt.06/05 kel.melong kec.cimahi selatan', 'ODP-RJW-FEA/051', 'SPFBF91', '109690286', 'SeptianEL', NULL, 'Repair Alat', 'REPAIR', '3P SBR 20 MBPS (300K)', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:38:49', '2020-11-16 11:38:49');
INSERT INTO `bot_sfs` VALUES (6, '109690286', 'RJW', 'Inner WBB', 'Cucu Juariah', '10261615110002', '081221201184', '00', 'Jl. Rancabentang utara no 358 rt 02 rw 14 cibeureum cimahi selatan', 'ODP-RJW-FDJ/035', 'SPEGA90', '109690286', 'SeptianEL', NULL, 'sudah live', 'LIVE', 'SBR 20Mbps 3P 300rbu', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:38:03', '2020-11-16 11:38:03');
INSERT INTO `bot_sfs` VALUES (7, '109690286', 'RJW', 'Inner WBB', 'Selviana ramadanty', '10261630510001', '082115484611', '00', 'Jl.cijerah gg.sukarame rt/rw:05/02', 'Odp-rjw/fdx/58', 'Spbms45', '109690286', 'SeptianEL', NULL, 'tidak ada tiang', 'KENDALA', 'Phoenix 20 mbps', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:37:20', '2020-11-16 11:37:20');
INSERT INTO `bot_sfs` VALUES (8, '109690286', 'RJW', 'Inner WBB', 'PAUNDRA ATHA LUTHFI', '10261637980001', '081214512434', '00', 'Jln.maleber utara gg bakti 9 Rt 02Rw 07 Kecamatan:andir Kelurahan: maleber', 'ODP-RJW-FCS/061', 'SPDYO97', '109690286', 'SeptianEL', NULL, 'pelanggan tidak dirumah', 'PENDING', 'SBR 20MBPS', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:36:35', '2020-11-16 11:36:35');
INSERT INTO `bot_sfs` VALUES (9, '109690286', 'RJW', 'Inner WBB', 'Anita Windi Febriyani', '10261648350001', '08989718111', '00', 'Jalan holis no 84 rt 01 rw 04 kel cibuntu Kec. Bandung Kulon, Kota Bandung, Jawa Barat', 'ODP-RJW-FFF/91', 'SPMUT95', '109690286', 'SeptianEL', NULL, 'sedang dalam pengerjaan', 'IN PROGRESS', '2p 20mbps phoenix', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 10:38:18', '2020-11-16 10:38:18');
INSERT INTO `bot_sfs` VALUES (10, '109690286', 'CMI', 'Padalarang', 'Didik', '1026232396001', '081220488793', '00', 'cimahi', 'ODP-CMI-FBL/152', 'SPDOY67', '109690286', 'SeptianEL', NULL, 'penuh', 'ODP FULL', 'SBR', NULL, NULL, NULL, 'SeptianEL', NULL, NULL, '2020-11-16 11:35:33', '2020-11-16 11:35:33');
INSERT INTO `bot_sfs` VALUES (11, '109690286', 'SOR', 'Soreang', 'Septian Eka Lukmanto', '10218445970001', '081220717766', '00', 'Buah Batu', 'ODP-SOR-EYE/001', 'SEL123', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-17 11:55:19', '2020-11-17 11:55:19');
INSERT INTO `bot_sfs` VALUES (12, '109690286', 'CMI', 'Padalarang', 'yes', '1212', '00', '00', 'yes', 'odp', '00', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:05:59', '2020-11-19 21:05:59');
INSERT INTO `bot_sfs` VALUES (13, '109690286', 'NJG', 'Padalarang', 'oke', '123123', '00', '00', 'oke', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:06:46', '2020-11-19 21:06:46');
INSERT INTO `bot_sfs` VALUES (14, '109690286', 'LEM', 'Padalarang', 'nama', '1234', '00', '00', 'alamat', 'odp', 'kode', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:07:09', '2020-11-19 21:07:09');
INSERT INTO `bot_sfs` VALUES (15, '109690286', 'CSA', 'Padalarang', 'nama', '12345', '00', '00', 'alamat', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '3P', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:07:51', '2020-11-19 21:07:51');
INSERT INTO `bot_sfs` VALUES (16, '109690286', 'CSA', 'Padalarang', 'nama', '123456', '00', '00', 'alamat', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '3P', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:08:15', '2020-11-19 21:08:15');
INSERT INTO `bot_sfs` VALUES (17, '109690286', 'PDL', 'Padalarang', 'haha', '1234567', '00', '00', 'alamat', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:08:46', '2020-11-19 21:08:46');
INSERT INTO `bot_sfs` VALUES (18, '109690286', 'CPT', 'Padalarang', 'nama', '2323', '00', '00', 'lamat', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:09:09', '2020-11-19 21:09:09');
INSERT INTO `bot_sfs` VALUES (19, '109690286', 'CKW', 'Padalarang', 'nama', '1313', '00', '00', 'alamat', 'odp', 'kode', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:09:37', '2020-11-19 21:09:37');
INSERT INTO `bot_sfs` VALUES (20, '109690286', 'BTJ', 'Padalarang', 'naam', '3131', '00', '00', 'alamat', 'odp', 'kode', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:10:00', '2020-11-19 21:10:00');
INSERT INTO `bot_sfs` VALUES (21, '109690286', 'CLL', 'Padalarang', 'nama', '1414', '00', '00', 'alamat', 'odp', 'kode', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:10:31', '2020-11-19 21:10:31');
INSERT INTO `bot_sfs` VALUES (22, '109690286', 'GNH', 'Padalarang', 'corona', '3444', '00', '00', 'corona', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:11:08', '2020-11-19 21:11:08');
INSERT INTO `bot_sfs` VALUES (23, '109690286', 'SOR', 'Soreang', 'sore', '3313', '00', '00', 'malam', 'odp', 'sales', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:11:34', '2020-11-19 21:11:34');
INSERT INTO `bot_sfs` VALUES (24, '109690286', 'BJA', 'Soreang', 'asdas', '45523', '00', '00', 'alamat', 'odp', 'sale', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '3P', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:13:24', '2020-11-19 21:12:01');
INSERT INTO `bot_sfs` VALUES (25, '109690286', 'CWD', 'Soreang', 'asdasd', '123213123', '11', '11', 'asldka', 'odp', 'asdas', NULL, 'SeptianEL', NULL, NULL, 'WAITING', 'sad', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:12:30', '2020-11-19 21:12:30');
INSERT INTO `bot_sfs` VALUES (26, '109690286', 'PNL', 'Soreang', 'sadasdas', '123123124', '00', '00', 'aslama', 'odp', 'dodod', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:13:10', '2020-11-19 21:13:10');
INSERT INTO `bot_sfs` VALUES (27, '109690286', 'RCK', 'Soreang', 'asdjasd', '123123142', '00', '00', 'kjasndjkasnd', 'aksdjaksnd', 'jaskdnjasn', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TLP)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:13:48', '2020-11-19 21:13:48');
INSERT INTO `bot_sfs` VALUES (28, '109690286', 'CCL', 'Soreang', 'asdasda', '343432212', '000', '00', 'nasdjksan', 'jknasdjna', 'kjnasd', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:14:13', '2020-11-19 21:14:13');
INSERT INTO `bot_sfs` VALUES (29, '109690286', 'MJY', 'Soreang', 'asdas', '5151', '00', '00', 'asdasd', 'asdasd', 'asdas', NULL, 'SeptianEL', NULL, NULL, 'WAITING', '2P (INET + TV)', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 21:14:44', '2020-11-19 21:14:44');

-- ----------------------------
-- Table structure for bot_teknisis
-- ----------------------------
DROP TABLE IF EXISTS `bot_teknisis`;
CREATE TABLE `bot_teknisis`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `datel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `track_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `info_progress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `evidence_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `evidence_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_name_telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bot_teknisis
-- ----------------------------
INSERT INTO `bot_teknisis` VALUES (1, NULL, NULL, '10261648350001', 'sedang dalam pengerjaan', NULL, 'IN PROGRESS', '/public/evidence/24fe80f7606fb0bf876d0b82fd85d1d3.jpg', 'https://maps.google.com/?q=-6.885109,107.636727', 'SeptianEL', '2020-11-16 10:38:18', NULL);
INSERT INTO `bot_teknisis` VALUES (2, NULL, NULL, '10260717110001', 'sudah terpasang smua normal', NULL, 'LIVE', '/public/evidence/7aea097c1ecaaa3051d6d5c6913dfb13.jpg', 'https://maps.google.com/?q=-6.885099,107.636757', 'SeptianEL', '2020-11-16 11:16:28', NULL);
INSERT INTO `bot_teknisis` VALUES (3, NULL, NULL, '10261701690001', 'Kurang kabel', NULL, 'PERLU PT2/3', '/public/evidence/f8364cff11770902609c0d49f048e90f.jpg', 'https://maps.google.com/?q=-6.885065,107.636713', 'SeptianEL', '2020-11-16 11:34:41', NULL);
INSERT INTO `bot_teknisis` VALUES (4, NULL, NULL, '1026232396001', 'penuh', NULL, 'ODP FULL', '/public/evidence/412580a1aaf974cd2b719b198fba7ed6.jpg', 'https://maps.google.com/?q=-6.885075,107.636733', 'SeptianEL', '2020-11-16 11:35:33', NULL);
INSERT INTO `bot_teknisis` VALUES (5, NULL, NULL, '10261637980001', 'pelanggan tidak dirumah', NULL, 'PENDING', '/public/evidence/c8affd13384c84dbf684776471727871.jpg', 'https://maps.google.com/?q=-6.885085,107.636752', 'SeptianEL', '2020-11-16 11:36:35', NULL);
INSERT INTO `bot_teknisis` VALUES (6, NULL, NULL, '10261630510001', 'tidak ada tiang', NULL, 'KENDALA', '/public/evidence/c56d9f3fddea9cfe450fcd1a934ed92d.jpg', 'https://maps.google.com/?q=-6.885085,107.636752', 'SeptianEL', '2020-11-16 11:37:20', NULL);
INSERT INTO `bot_teknisis` VALUES (7, NULL, NULL, '10261615110002', 'sudah live', NULL, 'LIVE', '/public/evidence/cf611b1f720778d38c3429c4318a343f.jpg', 'https://maps.google.com/?q=-6.885089,107.636737', 'SeptianEL', '2020-11-16 11:38:03', NULL);
INSERT INTO `bot_teknisis` VALUES (8, NULL, NULL, '10261676650001', 'Repair Alat', NULL, 'REPAIR', '/public/evidence/a553f200ee851376d4497e85503d991b.jpg', 'https://maps.google.com/?q=-6.885085,107.636752', 'SeptianEL', '2020-11-16 11:38:49', NULL);
INSERT INTO `bot_teknisis` VALUES (9, NULL, NULL, '10261702010001', 'sudah full', NULL, 'ODP FULL', '/public/evidence/c66fc38a07f4a5cb91836dcaba1b8a95.jpg', 'https://maps.google.com/?q=-6.885085,107.636752', 'SeptianEL', '2020-11-16 11:39:30', NULL);
INSERT INTO `bot_teknisis` VALUES (10, NULL, NULL, '10261699340001', 'sudah terpasang', NULL, 'LIVE', '/public/evidence/d6e3d8abd73d787896f3bd67cf9c7adf.jpg', 'https://maps.google.com/?q=-6.885085,107.636752', 'SeptianEL', '2020-11-16 11:40:04', NULL);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (5, 'IN PROGRESS', '2020-11-08 23:36:36', '2020-11-08 23:36:36');
INSERT INTO `categories` VALUES (6, 'LIVE', '2020-11-08 23:36:46', '2020-11-08 23:36:46');
INSERT INTO `categories` VALUES (7, 'PERLU PT2/3', '2020-11-08 23:37:05', '2020-11-08 23:37:05');
INSERT INTO `categories` VALUES (8, 'ODP FULL', '2020-11-08 23:37:39', '2020-11-08 23:37:39');
INSERT INTO `categories` VALUES (9, 'REPAIR', '2020-11-08 23:37:46', '2020-11-08 23:37:46');
INSERT INTO `categories` VALUES (10, 'KENDALA', '2020-11-08 23:37:53', '2020-11-08 23:37:53');
INSERT INTO `categories` VALUES (11, 'PENDING', '2020-11-08 23:37:59', '2020-11-08 23:37:59');
INSERT INTO `categories` VALUES (12, 'WAITING', '2020-11-08 23:38:05', '2020-11-08 23:38:05');
INSERT INTO `categories` VALUES (13, 'ASSIGNED', '2020-11-08 23:38:11', '2020-11-08 23:38:11');
INSERT INTO `categories` VALUES (14, 'LIVE HI', '2020-11-17 04:18:27', '2020-11-17 04:18:27');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_10_30_113014_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (5, '2020_10_30_122404_create_bot_sfs_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_10_30_122416_create_bot_teknisis_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_11_03_104348_create_user_bots_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_11_05_130015_create_categories_table', 1);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 3);
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 5);
INSERT INTO `model_has_roles` VALUES (9, 'App\\Models\\User', 5);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'roles', 'web', '2020-11-08 18:47:45', '2020-11-08 18:47:45');
INSERT INTO `permissions` VALUES (2, 'dashboard', 'web', '2020-11-08 18:47:58', '2020-11-08 18:47:58');
INSERT INTO `permissions` VALUES (3, 'bot', 'web', '2020-11-08 18:48:02', '2020-11-08 18:48:02');
INSERT INTO `permissions` VALUES (4, 'user', 'web', '2020-11-08 18:48:07', '2020-11-08 18:48:07');
INSERT INTO `permissions` VALUES (5, 'category', 'web', '2020-11-08 18:48:09', '2020-11-08 18:48:09');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (2, 9);
INSERT INTO `role_has_permissions` VALUES (2, 10);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (3, 9);
INSERT INTO `role_has_permissions` VALUES (3, 10);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Super Admin', 'web', '2020-11-08 19:20:34', '2020-11-11 05:48:35');
INSERT INTO `roles` VALUES (9, 'Admin', 'web', '2020-11-08 23:04:25', '2020-11-11 05:48:42');
INSERT INTO `roles` VALUES (10, 'Guest', 'web', '2020-11-11 05:47:31', '2020-11-11 05:48:13');

-- ----------------------------
-- Table structure for user_bots
-- ----------------------------
DROP TABLE IF EXISTS `user_bots`;
CREATE TABLE `user_bots`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name_telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_bots
-- ----------------------------
INSERT INTO `user_bots` VALUES (3, 'mobban_sf_bot', 'septianel', '2020-11-07 22:04:39', '2020-11-11 02:00:30');
INSERT INTO `user_bots` VALUES (4, 'mobban_teknisi_bot', 'septianel', '2020-11-07 22:04:45', '2020-11-11 02:00:36');
INSERT INTO `user_bots` VALUES (7, 'mobban_sf_bot', 'gantira', '2020-11-11 05:28:34', '2020-11-11 05:28:34');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'Super Admin', 'superadmin@telkom.co.id', NULL, '$2y$10$Dh2h.lk9qtKm0X5MLNSmFeHfRJmoIqueCTXu7vT3dWd8tOW9KuwTa', NULL, '2020-11-08 04:51:59', '2020-11-08 22:43:57');
INSERT INTO `users` VALUES (5, 'Angga Gantira', 'angga.gantira@gmail.com', NULL, '$2y$10$OvdNfyHv5C5OzmVABMItgONHerI4fXNKFG3uXYDp5oug.5ShZZVgC', NULL, '2020-11-08 22:53:42', '2020-11-08 22:53:42');
INSERT INTO `users` VALUES (6, 'Septian EKa Lukmanto', 'septianekalukmanto@gmail.com', NULL, '$2y$10$KPsqoyM0ehVclG/3K9o5feLrm9dDx0dxAmNR8UUXZWIMrPIaiJRbq', NULL, '2020-11-08 23:39:58', '2020-11-11 05:50:09');

SET FOREIGN_KEY_CHECKS = 1;
