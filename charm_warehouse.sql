/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : charm_warehouse

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-01 13:33:11
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
  `username` varchar(36) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `need` varchar(36) NOT NULL,
  `used` varchar(36) NOT NULL,
  `c` varchar(48) DEFAULT NULL,
  `time` int(10) NOT NULL,
  `ip` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contect
-- ----------------------------
INSERT INTO `contect` VALUES ('2', 'chen', '13656765671', '购买', '工业仓储', null, '1506834793', '127.0.0.1');
INSERT INTO `contect` VALUES ('3', '陈阿陈', '13767682671', '租赁', '工业厂房', null, '1506835584', '127.0.0.1');
INSERT INTO `contect` VALUES ('4', '王二小', '18976661231', '租赁', '工业仓储', null, '1506835602', '127.0.0.1');
INSERT INTO `contect` VALUES ('5', 'liaje', '18767672567', '购买', '工业厂房', 'origin', '1506835943', '127.0.0.1');

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
INSERT INTO `user` VALUES ('1', 'admin', '$2y$10$BMX/JDTSpXLSHZ/kjUjSmu3JyepTKS4UrTQIGD8NG0Qur.MaZQakC', '1500190776', '1505488344', '1506834898', '127.0.0.1', '1');
