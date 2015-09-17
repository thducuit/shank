/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : shank

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-09-17 15:40:55
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `alias`
-- ----------------------------
DROP TABLE IF EXISTS `alias`;
CREATE TABLE `alias` (
  `alias_id` int(11) NOT NULL AUTO_INCREMENT,
  `alias_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alias_moduleid` int(11) NOT NULL,
  `alias_language` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`alias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of alias
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_content` text COLLATE utf8_unicode_ci,
  `category_order` int(11) NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT '0',
  `category_datecreated` datetime NOT NULL,
  `category_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category_seo_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_seo_keywords` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_seo_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_ismenu` tinyint(1) NOT NULL DEFAULT '1',
  `catparent_id` int(11) NOT NULL DEFAULT '0',
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `field_value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'seo_title_vi', 'NOATEK');
INSERT INTO `config` VALUES ('2', 'seo_keywords_vi', 'Thế giới sữa');
INSERT INTO `config` VALUES ('3', 'seo_description_vi', 'Thế giới sữa');
INSERT INTO `config` VALUES ('4', 'favicon', 'favicon_2012.12.12-08.36.26.ico');
INSERT INTO `config` VALUES ('5', 'hotline', '');
INSERT INTO `config` VALUES ('6', 'email_smtp_server', 'smtp.gmail.com');
INSERT INTO `config` VALUES ('7', 'email_smtp_port', '465');
INSERT INTO `config` VALUES ('8', 'email_smtp_auth', 'login');
INSERT INTO `config` VALUES ('9', 'email_smtp_ssl', 'ssl');
INSERT INTO `config` VALUES ('10', 'email_smtp_account', 'thducuit@gmail.com');
INSERT INTO `config` VALUES ('11', 'email_smtp_password', 'choancut');
INSERT INTO `config` VALUES ('12', 'email_receiver', 'thducuit@gmail.com');
INSERT INTO `config` VALUES ('13', 'offline_content', '<div style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"/data/upload/editor/images/Website_Page_Under_Construction.jpg\" style=\"width: 790px; height: 550px;\" /></div>\r\n');
INSERT INTO `config` VALUES ('14', 'offline_mode', '0');
INSERT INTO `config` VALUES ('15', 'ga_email', 'thducuit@gmail.com');
INSERT INTO `config` VALUES ('16', 'ga_password', 'thducuit123');
INSERT INTO `config` VALUES ('17', 'ga_profileid', '76329046');
INSERT INTO `config` VALUES ('18', 'ga_trackingcode', '<script>\r\n  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');\r\n\r\n  ga(\'create\', \'UA-43792321-1\', \'tqdesign.vn\');\r\n  ga(\'send\', \'pageview\');\r\n\r\n</script>');
INSERT INTO `config` VALUES ('19', 'googleplus', '#');
INSERT INTO `config` VALUES ('20', 'facebook', '#');
INSERT INTO `config` VALUES ('21', 'flickr', '#');
INSERT INTO `config` VALUES ('22', 'blogger', '#');
INSERT INTO `config` VALUES ('23', 'delicious', '#');
INSERT INTO `config` VALUES ('24', 'number_mostbuy', '10');
INSERT INTO `config` VALUES ('25', 'number_isnew', '8');
INSERT INTO `config` VALUES ('26', 'blacklist', '');
INSERT INTO `config` VALUES ('28', 'email_sender', 'thducuit@gmail.com');
INSERT INTO `config` VALUES ('29', 'seo_title_en', 'NOATEK');
INSERT INTO `config` VALUES ('30', 'seo_keywords_en', '');
INSERT INTO `config` VALUES ('31', 'seo_description_en', '');
INSERT INTO `config` VALUES ('32', 'number_product_paging', '1');
INSERT INTO `config` VALUES ('33', 'number_news_paging', '10');
INSERT INTO `config` VALUES ('34', 'email_webmaster', 'thdducuit@gmail.co1m');
INSERT INTO `config` VALUES ('35', 'facebook_link', 'http://facebook.com');

-- ----------------------------
-- Table structure for `group`
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `group_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `group_builtin` tinyint(1) NOT NULL DEFAULT '0',
  `group_datecreated` datetime NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_permission` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', 'Administrator', 'Nhóm quản trị hệ thống', '1', '2012-10-18 17:08:37', '110', '{\"translate\":\"1|2|4|8|16\",\"webconfig\":\"1|2|4|8|16\",\"statistic\":\"1|2|4|8|16\",\"user\":\"1|2|4|8|16\",\"group\":\"1|2|4|8|16\",\"intro\":\"1|2|4|8|16\",\"about\":\"1|2|4|8|16\",\"trades\":\"1|2|4|8|16\",\"tradecate\":\"1|2|4|8|16\",\"trade\":\"1|2|4|8|16\",\"contact\":\"1|2|4|8|16\",\"contactlist\":\"1|2|4|8|16\",\"contactinfo\":\"1|2|4|8|16\",\"gallery\":\"1|2|4|8|16\",\"bannerhomepage\":\"1|2|4|8|16\",\"banner\":\"1|2|4|8|16\",\"ads\":\"1|2|4|8|16\",\"system\":\"1|2|4|8|16\",\"newsboard\":\"1|2|4|8|16\",\"news\":\"1|2|4|8|16\",\"careers\":\"1|2|4|8|16\",\"career\":\"1|2|4|8|16\"}');

-- ----------------------------
-- Table structure for `langmap`
-- ----------------------------
DROP TABLE IF EXISTS `langmap`;
CREATE TABLE `langmap` (
  `langmap_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `source_item_id` int(11) NOT NULL,
  `source_language_id` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`langmap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of langmap
-- ----------------------------

-- ----------------------------
-- Table structure for `language`
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `language_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('en', '0');

-- ----------------------------
-- Table structure for `media`
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `media_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `media_moduleid` int(11) NOT NULL DEFAULT '0',
  `media_filetype` enum('image','video','file','represent') COLLATE utf8_unicode_ci NOT NULL,
  `media_filename` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `media_thumb` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_linktype` enum('_blank','_self') COLLATE utf8_unicode_ci DEFAULT '_blank',
  `media_order` int(11) NOT NULL,
  `media_status` tinyint(1) NOT NULL DEFAULT '1',
  `media_datecreated` datetime NOT NULL,
  `media_datebegin` datetime DEFAULT NULL,
  `media_dateexpired` datetime DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of media
-- ----------------------------

-- ----------------------------
-- Table structure for `meta`
-- ----------------------------
DROP TABLE IF EXISTS `meta`;
CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `meta_moduleid` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of meta
-- ----------------------------

-- ----------------------------
-- Table structure for `module`
-- ----------------------------
DROP TABLE IF EXISTS `module`;
CREATE TABLE `module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `module_name` text COLLATE utf8_unicode_ci,
  `module_link` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `module_order` int(11) NOT NULL,
  `module_parent` int(11) NOT NULL DEFAULT '0',
  `module_option` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `module_level` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `module_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of module
-- ----------------------------
INSERT INTO `module` VALUES ('1', 'test', 'Test', '/#', '1', '0', '[\"27\",\"26\"]', '', '0');
INSERT INTO `module` VALUES ('2', 'test 2', 'Test 2', '/test2', '1', '1', '[\"27\",\"26\"]', '--', '0');
INSERT INTO `module` VALUES ('3', 'test 3', 'Test 3', '/test3', '1', '2', '[\"27\",\"26\"]', '----', '0');
INSERT INTO `module` VALUES ('4', 'test4', 'Test 4', '/test4', '1', '0', '[\"27\",\"26\"]', '', '0');
INSERT INTO `module` VALUES ('5', 'test5', 'Test 5', '/test5', '1', '1', '[\"27\",\"26\"]', '--', '0');
INSERT INTO `module` VALUES ('6', 'test6', 'Test 6', '', '1', '2', '[\"27\",\"26\"]', '----', '0');
INSERT INTO `module` VALUES ('7', 'test7', 'Test 7', '', '1', '1', '[\"27\",\"26\"]', '--', '0');

-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci,
  `post_content` text COLLATE utf8_unicode_ci,
  `post_datecreated` datetime NOT NULL,
  `post_datebegin` datetime DEFAULT NULL,
  `post_dateexpired` datetime DEFAULT NULL,
  `post_order` int(11) NOT NULL DEFAULT '0',
  `post_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: active; 0: deactive; -1: draft',
  `post_highlight` tinyint(1) NOT NULL DEFAULT '0',
  `post_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `post_seo_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_seo_keywords` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_seo_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of post
-- ----------------------------

-- ----------------------------
-- Table structure for `translate`
-- ----------------------------
DROP TABLE IF EXISTS `translate`;
CREATE TABLE `translate` (
  `translate_id` int(11) NOT NULL AUTO_INCREMENT,
  `translate_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `translate_content` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cac ngon ngu cach nhau bang ky tu sau: <[language_locale]>[noi dung]</[language_locale]>',
  PRIMARY KEY (`translate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bang dung de nhap lieu cac ngon ngu hien thi tren website';

-- ----------------------------
-- Records of translate
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `user_builtin` tinyint(4) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
