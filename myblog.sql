/*
 Navicat MySQL Data Transfer

 Source Server         : contact
 Source Server Version : 50621
 Source Host           : localhost
 Source Database       : myblog

 Target Server Version : 50621
 File Encoding         : utf-8

 Date: 01/25/2016 18:35:15 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  `admin_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_admin`
-- ----------------------------
BEGIN;
INSERT INTO `t_admin` VALUES ('1', 'lisi', '123456', 'images/blog1.jpg'), ('2', 'wangwu', '1', 'images/blog2.jpg'), ('3', 'liu', '1', 'images/blog3.jpg');
COMMIT;

-- ----------------------------
--  Table structure for `t_blog`
-- ----------------------------
DROP TABLE IF EXISTS `t_blog`;
CREATE TABLE `t_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `author` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_blog`
-- ----------------------------
BEGIN;
INSERT INTO `t_blog` VALUES ('2', '0sfd', 'images/blog-post2.jpg', '0fadsfsa123456', '2016-01-12 16:50:57', '2'), ('3', 'liu', 'images/blog-post3.jpg', 'dsfda sfkaslfj  khjksahfhdlkfhguawh fhwkhsdl uhsfhsljd jshfl ffljksdfjisjfidajifjlvakdfsd', '2016-01-12 16:51:11', '3'), ('4', '0safsad', 'images/blog-post4.jpg', 'dsfda sfkaslfj  khjksahfhdlkfhguawh fhwkhsdl uhsfhsljd jshfl ffljksdfjisjfidajifjlvakdfsd', '2016-01-12 16:51:25', '3'), ('5', 'fsds0', 'images/blog-post5.jpg', '0sdfsadfa', '2016-01-12 16:52:15', '3'), ('7', 'lkjksaf', 'images/blog-post2.jpg', 'lkfjklas ;lksf kls;kfd k;kladfjs ', '2016-01-14 10:30:16', '1'), ('8', 'slkfjsd', 'images/blog-post2.jpg', 'klsadfja; sa;kldf j;jiweri8r w8eorwoe', '2016-01-14 10:30:33', '2'), ('27', '2222222', 'uploads/20160123164202_68979.jpg', '2222222', '2016-01-23 23:42:02', '3');
COMMIT;

-- ----------------------------
--  Table structure for `t_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_comment`;
CREATE TABLE `t_comment` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `subject` text,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_id` int(11) NOT NULL,
  PRIMARY KEY (`comm_id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_comment`
-- ----------------------------
BEGIN;
INSERT INTO `t_comment` VALUES ('1', 'sdfas', 'sdfasfas', 'sfs', 'sdfgaekjh kjsfiasd l askfjl a askljf l', '2016-01-13 11:04:46', '1'), ('6', 'fs', 'sdf', 'kjl', '6789', '2016-01-13 15:08:03', '2'), ('7', 'sfsdafs', 'sdf', '234', 'dfdsgds', '2016-01-13 15:10:03', '2'), ('8', 'sdfds', 'sdfds', 'fdsf', '32423', '2016-01-13 15:10:55', '2'), ('9', '2313', 'wqew', '123', '4', '2016-01-13 15:13:39', '2'), ('10', 'fds', 'dsf', 'fsf', 'sefsdf', '2016-01-13 15:16:47', '2'), ('11', '1234', '123456', '1234', '3r4235rt43224t34r2', '2016-01-13 16:07:49', '2'), ('12', '1234', '123456', '1234', '3r4235rt43224t34r2', '2016-01-13 16:08:06', '3'), ('13', 'liubingnan', 'sdfsd', 'sfsa', 'sdfafsfa', '2016-01-13 16:09:29', '3'), ('14', 'dff', 'sdfa', 'sf', 'asdfasdf', '2016-01-13 16:22:35', '3'), ('15', 'liubingnan', 'sd@asd', '', 'liubingnan', '2016-01-14 14:59:38', '2'), ('21', 'e', 'we', 'we', 'we', '2016-01-17 16:42:59', '0'), ('22', 'sdfa', 'asd', 'ds', 'sdsasdasd1234', '2016-01-17 16:44:00', '0'), ('23', 'sfs', 'fads', 'fad', 'wfds', '2016-01-17 16:44:38', '0'), ('24', 'sfs', 'fads', 'fad', 'wfds', '2016-01-17 16:44:40', '0'), ('25', 'sfs', 'fads', 'fad', 'wfds', '2016-01-17 16:44:40', '0'), ('26', 'sfs', 'fads', 'fad', 'wfds', '2016-01-17 16:44:49', '0'), ('27', 'sfs', 'fads', 'fad', 'wfds', '2016-01-17 16:44:49', '0'), ('28', 'sfasa', 'wds', 'we', '123456', '2016-01-17 16:45:40', '0'), ('29', 'wf', 'fed', 'fd', 'fds', '2016-01-17 16:46:30', '0'), ('30', 'sfa', 'fsdf', 'fasdf', 'fds', '2016-01-17 17:02:00', '0'), ('31', 'wds', 'asd', 'dsad', 'qdas', '2016-01-17 17:04:31', '0'), ('32', 'qwe', 'weq', 'we', '123456', '2016-01-17 17:17:47', '0'), ('33', 'sfd', 'sfd', 'safd', 'fdsw', '2016-01-17 17:19:23', '2'), ('34', 'sf', 'sdf', 'asfd', 'sf', '2016-01-17 17:35:54', '2'), ('35', 'sf', 'sdf', 'asfd', 'sf', '2016-01-17 17:35:55', '2'), ('36', 'sf', 'afd', 'fd', 'sdfdsd', '2016-01-17 17:44:39', '2'), ('37', 'sdf', 'fsdf', 'fsd', 'fsdf', '2016-01-17 17:51:23', '2'), ('38', 'sf', 'fsd', 'fas', 'fasa', '2016-01-17 17:53:07', '2'), ('39', 'sdvs', 'sd', 'fasd', 'afs', '2016-01-17 17:53:40', '2'), ('40', 'sdf', 'fsa', 'asfd', 'fasfd', '2016-01-17 17:55:03', '2'), ('41', 'sdf', 'fas', 'afss', 'fas', '2016-01-17 17:58:03', '2'), ('42', 'sdf', 'afsq', 'asf', 'afsa', '2016-01-17 17:59:03', '2'), ('43', 'sdf', 'fsd', 'sfd', 'fsd', '2016-01-17 17:59:49', '2'), ('44', 'ssdf', 'fs', 'fas', 'dfaq', '2016-01-17 18:02:31', '2'), ('45', 'sdf', 'asdf', 'fasd', 'fasd', '2016-01-17 18:02:49', '2'), ('46', 'dgf', 'fds', 'qfdf', 'fsdf', '2016-01-17 18:09:14', '2'), ('47', 'sdf', 'fds', 'fdsd', 'fsd', '2016-01-17 18:13:50', '2'), ('48', 'sdf', 'fsd', 'sdf', 'f', '2016-01-17 18:14:11', '2'), ('49', 'sdf', 'fds', 'fas', 'fsda', '2016-01-17 18:14:43', '2'), ('50', 'sf', 'fsd', 'fads', 'fdsa', '2016-01-17 18:57:15', '2'), ('54', 'liubing', '@@@`asd', 'dw', 'dws', '2016-01-17 19:11:34', '2');
COMMIT;

-- ----------------------------
--  Table structure for `t_message`
-- ----------------------------
DROP TABLE IF EXISTS `t_message`;
CREATE TABLE `t_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_message`
-- ----------------------------
BEGIN;
INSERT INTO `t_message` VALUES ('1', 'zhangsan', '111@d', 'dskflasjfs;f', '2016-01-08 16:39:13'), ('2', '方法', '方式的', '谁的身上', '2016-01-09 12:50:37'), ('4', 'sds', 'asdasd', 'asdsad', '2016-01-09 14:22:51'), ('5', 'sdas', 'asd', 'asdas', '2016-01-09 14:27:39'), ('6', 'sdas', 'asd', 'asdassfsd', '2016-01-09 14:28:48');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
