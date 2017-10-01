/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : charm_ly

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-24 12:04:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `board`
-- ----------------------------
DROP TABLE IF EXISTS `board`;
CREATE TABLE `board` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(36) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(16) NOT NULL,
  `contect` text,
  `ip` varchar(36) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of board
-- ----------------------------
INSERT INTO `board` VALUES ('4', '陈先生啊', 'in1993@123.com', '18334567234', '我想留个言', '127.0.0.1', '1506223494');
INSERT INTO `board` VALUES ('5', '王二小', 'ininin@164.com', '18334567234', 'jiushi xaing liuyan', '127.0.0.1', '1506223863');

-- ----------------------------
-- Table structure for `contect`
-- ----------------------------
DROP TABLE IF EXISTS `contect`;
CREATE TABLE `contect` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(48) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `contact` varchar(36) DEFAULT NULL,
  `ip` varchar(36) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contect
-- ----------------------------
INSERT INTO `contect` VALUES ('1', '陈a', '18336344657', '1', '1', '127.0.0.1', '1506219378');
INSERT INTO `contect` VALUES ('2', '陈先生啊', '18336744567', '18336744567', '18336744567', '127.0.0.1', '1506221991');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) DEFAULT NULL,
  `login_time` int(10) DEFAULT NULL,
  `ip` varchar(48) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '$2y$10$BMX/JDTSpXLSHZ/kjUjSmu3JyepTKS4UrTQIGD8NG0Qur.MaZQakC', '1500190776', '1505488344', '1506219696', '127.0.0.1', '1');
