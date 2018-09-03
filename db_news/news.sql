/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50638
Source Host           : localhost:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50638
File Encoding         : 65001

Date: 2018-09-03 10:54:02
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'ІТ');
INSERT INTO `category` VALUES ('2', 'Навчання');
INSERT INTO `category` VALUES ('3', 'Розвиток');

-- ----------------------------
-- Table structure for `msgs`
-- ----------------------------
DROP TABLE IF EXISTS `msgs`;
CREATE TABLE `msgs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `category` int(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `source` varchar(40) DEFAULT NULL,
  `datetime` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msgs
-- ----------------------------
INSERT INTO `msgs` VALUES ('25', 'Drupal', '1', 'my first cms', 'infa sotka', '1535913603');
INSERT INTO `msgs` VALUES ('26', 'laravel', '1', 'next level play', 'future com', '1535920459');
INSERT INTO `msgs` VALUES ('33', 'PHP', '3', 'my all', 'infa sotka', '1535923679');
