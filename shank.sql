/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : shank

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-12-29 09:34:30
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
  `fid` int(11) DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langmap_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`alias_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of alias
-- ----------------------------
INSERT INTO `alias` VALUES ('1', 'a', '', '1', 'jp', null);
INSERT INTO `alias` VALUES ('2', 'b', '', '2', 'en', null);
INSERT INTO `alias` VALUES ('3', 'tin-tuc-tieng-nhat', 'news', '1', 'jp', null);
INSERT INTO `alias` VALUES ('4', 'tin-tuc-tieng-anh', 'news', '2', 'en', null);
INSERT INTO `alias` VALUES ('5', 'tin-tuc-tieng-nhat', 'news', '3', 'jp', null);
INSERT INTO `alias` VALUES ('6', 'tin-tuc-tieng-anh', 'news', '4', 'en', null);
INSERT INTO `alias` VALUES ('7', 'career-tieng-nhat', 'career', '3', 'jp', null);
INSERT INTO `alias` VALUES ('8', 'career-tieng-anh', 'career', '4', 'en', null);
INSERT INTO `alias` VALUES ('11', 'vision-mission-jp', 'about', '7', 'jp', '6');
INSERT INTO `alias` VALUES ('12', 'vision-mission-en', 'about', '8', 'en', '6');
INSERT INTO `alias` VALUES ('13', 'message-from-ceo-jp', 'about', '9', 'jp', null);
INSERT INTO `alias` VALUES ('14', 'message-from-ceo-en', 'about', '10', 'en', null);
INSERT INTO `alias` VALUES ('17', 'company-history-jp', 'about', '13', 'jp', null);
INSERT INTO `alias` VALUES ('18', 'company-history-en', 'about', '14', 'en', null);
INSERT INTO `alias` VALUES ('19', 'tu-jp', 'productcat', '3', 'jp', null);
INSERT INTO `alias` VALUES ('20', 'tu-en', 'productcat', '4', 'en', null);
INSERT INTO `alias` VALUES ('21', 'tu-1-jp', 'product', '15', 'jp', null);
INSERT INTO `alias` VALUES ('22', 'tu-1-en', 'product', '16', 'en', null);
INSERT INTO `alias` VALUES ('23', 'tu-2-jp', 'product', '17', 'jp', null);
INSERT INTO `alias` VALUES ('24', 'tu-2-en', 'product', '18', 'en', null);
INSERT INTO `alias` VALUES ('25', 'tu-3-jp', 'product', '19', 'jp', null);
INSERT INTO `alias` VALUES ('26', 'tu-3-en', 'product', '20', 'en', null);
INSERT INTO `alias` VALUES ('27', 'ghe-jp', 'productcat', '5', 'jp', '22');
INSERT INTO `alias` VALUES ('28', 'ghe-en', 'productcat', '6', 'en', '22');
INSERT INTO `alias` VALUES ('29', 'ghe-1-jp', 'product', '37', 'jp', '23');
INSERT INTO `alias` VALUES ('30', 'ghe-1-en', 'product', '38', 'en', '23');
INSERT INTO `alias` VALUES ('31', 'ghe-2-jp', 'product', '39', 'jp', '24');
INSERT INTO `alias` VALUES ('32', 'ghe-2-en', 'product', '40', 'en', '24');
INSERT INTO `alias` VALUES ('33', 'ghe-3-jp', 'product', '41', 'jp', '25');
INSERT INTO `alias` VALUES ('34', 'ghe-3-en', 'product', '42', 'en', '25');
INSERT INTO `alias` VALUES ('35', 'tui-ten-duc-js', 'career', '46', 'jp', '29');
INSERT INTO `alias` VALUES ('36', 'tui-ten-duc-en', 'career', '47', 'en', '29');

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
  `catparent_id` int(11) NOT NULL DEFAULT '0',
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `category_level` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langmap_id` int(11) DEFAULT NULL,
  `category_lock` tinyint(4) DEFAULT '0',
  `category_link` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('3', 'Tủ jp', '<p>tủ jp</p>\r\n', '1', '1', '2015-12-21 18:33:16', 'productcat', 'Tủ jp', '', '', '0', 'jp', '', '10', '0', '/tu-jp');
INSERT INTO `category` VALUES ('4', 'Tủ en', '<p>tủ en</p>\r\n', '1', '1', '2015-12-21 18:33:16', 'productcat', 'Tủ en', '', '', '0', 'en', '', '10', '0', '/tu-en');
INSERT INTO `category` VALUES ('5', 'Ghe jp', '', '1', '1', '2015-12-26 06:02:45', 'productcat', 'Ghe jp', '', '', '0', 'jp', '', '22', '0', '/ghe-jp');
INSERT INTO `category` VALUES ('6', 'ghe en', '', '1', '1', '2015-12-26 06:02:45', 'productcat', 'ghe en', '', '', '0', 'en', '', '22', '0', '/ghe-en');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', 'Administrator', 'Nhóm quản trị hệ thống', '1', '2015-12-29 03:25:45', '1', '{\"config\":\"15\",\"user\":\"15\",\"group\":\"15\",\"library\":\"15\",\"slider\":\"15\",\"ads\":\"15\",\"newspage\":\"15\",\"news\":\"15\",\"careerpage\":\"15\",\"career\":\"15\",\"aboutpage\":\"15\",\"about\":\"15\",\"productpage\":\"15\",\"productcat\":\"15\",\"product\":\"15\",\"page\":\"15\"}');
INSERT INTO `group` VALUES ('2', 'tui ten Duc1', '', '1', '2015-12-25 11:54:00', '1', '{ \"config\": \"15\", \"user\": \"15\", \"group\": \"15\", \"library\": \"15\", \"slider\": \"15\", \"ads\": \"15\", \"newspage\": \"15\", \"news\": \"15\", \"careerpage\": \"15\", \"career\": \"15\", \"aboutpage\": \"15\", \"about\": \"15\", \"productpage\": \"15\", \"productcat\": \"15\", \"product\": \"15\", \"page\": \"15\" }');

-- ----------------------------
-- Table structure for `langmap`
-- ----------------------------
DROP TABLE IF EXISTS `langmap`;
CREATE TABLE `langmap` (
  `langmap_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `langmap_module` varchar(20) NOT NULL,
  PRIMARY KEY (`langmap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of langmap
-- ----------------------------
INSERT INTO `langmap` VALUES ('1', 'news');
INSERT INTO `langmap` VALUES ('2', 'news');
INSERT INTO `langmap` VALUES ('3', 'news');
INSERT INTO `langmap` VALUES ('4', 'career');
INSERT INTO `langmap` VALUES ('5', 'about');
INSERT INTO `langmap` VALUES ('6', 'about');
INSERT INTO `langmap` VALUES ('7', 'about');
INSERT INTO `langmap` VALUES ('8', 'about');
INSERT INTO `langmap` VALUES ('9', 'about');
INSERT INTO `langmap` VALUES ('10', 'productcat');
INSERT INTO `langmap` VALUES ('11', 'product');
INSERT INTO `langmap` VALUES ('12', 'product');
INSERT INTO `langmap` VALUES ('13', 'product');
INSERT INTO `langmap` VALUES ('14', 'page');
INSERT INTO `langmap` VALUES ('15', 'page');
INSERT INTO `langmap` VALUES ('16', 'page');
INSERT INTO `langmap` VALUES ('17', 'page');
INSERT INTO `langmap` VALUES ('18', 'page');
INSERT INTO `langmap` VALUES ('19', 'page');
INSERT INTO `langmap` VALUES ('20', 'page');
INSERT INTO `langmap` VALUES ('21', 'page');
INSERT INTO `langmap` VALUES ('22', 'productcat');
INSERT INTO `langmap` VALUES ('23', 'product');
INSERT INTO `langmap` VALUES ('24', 'product');
INSERT INTO `langmap` VALUES ('25', 'product');
INSERT INTO `langmap` VALUES ('26', 'career');
INSERT INTO `langmap` VALUES ('27', 'career');
INSERT INTO `langmap` VALUES ('28', 'career');
INSERT INTO `langmap` VALUES ('29', 'career');

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
INSERT INTO `language` VALUES ('jp', '1');

-- ----------------------------
-- Table structure for `media`
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `media_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `media_file` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langmap_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('5', 'Gallery ads', 'ads', null, 'jp', '[{\\\"img\\\":\\\"/upload/files/aa.jpg\\\",\\\"w\\\":\\\"\\\",\\\"h\\\":\\\"\\\",\\\"a\\\":\\\"http://google.com.vn\\\"}]', '31');
INSERT INTO `media` VALUES ('6', 'Gallery ads', 'ads', null, 'en', '[]', '31');

-- ----------------------------
-- Table structure for `meta`
-- ----------------------------
DROP TABLE IF EXISTS `meta`;
CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of meta
-- ----------------------------
INSERT INTO `meta` VALUES ('1', 'career', '46', '_quantity', '12222dd');
INSERT INTO `meta` VALUES ('2', 'career', '46', '_deadline', '1ddd');
INSERT INTO `meta` VALUES ('3', 'career', '47', '_quantity', '12222dd');
INSERT INTO `meta` VALUES ('4', 'career', '47', '_deadline', '1ddd');

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
  `module_menu` int(11) DEFAULT '0',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of module
-- ----------------------------
INSERT INTO `module` VALUES ('1', 'user', 'User', '/index.php/admin/user', '1', '3', '[\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('2', 'group', 'Group', '/index.php/admin/group', '1', '3', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('3', 'config', 'Cấu hình chung', '#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('4', 'library', 'Thư viện', '#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('5', 'slider', 'Ảnh trang chủ', '/index.php/admin/gallery?mod=slider', '1', '4', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('6', 'ads', 'Quảng cáo', '/index.php/admin/gallery?mod=ads', '1', '4', '[\"27\",\"26\"]', '--', '1', null);
INSERT INTO `module` VALUES ('7', 'newspage', 'Tin tức', '/#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('8', 'news', 'Bài viết Tin Tức', '/index.php/admin/post?mod=news', '1', '7', '[\"27\",\"26\"]', '--', '1', '1');
INSERT INTO `module` VALUES ('9', 'careerpage', 'Nghề nghiệp', '/#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('10', 'career', 'Bài viết Nghề nghiệp', '/index.php/admin/post?mod=career', '1', '9', '[\"27\",\"26\"]', '--', '1', '1');
INSERT INTO `module` VALUES ('11', 'aboutpage', 'Giới thiệu', '/#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('12', 'about', 'Bài viết Giới thiệu', '/index.php/admin/post?mod=about', '1', '11', '[\"27\",\"26\"]', '--', '1', '1');
INSERT INTO `module` VALUES ('13', 'productpage', 'Sản phẩm', '/#', '1', '0', '[\"27\",\"26\"]', '', '1', null);
INSERT INTO `module` VALUES ('14', 'productcat', 'Danh mục', '/index.php/admin/category?mod=productcat', '1', '13', '[\"27\",\"26\"]', '--', '1', '1');
INSERT INTO `module` VALUES ('15', 'product', 'Sản phẩm', '/index.php/admin/post?mod=product', '1', '13', '[\"27\",\"26\"]', '--', '1', '1');
INSERT INTO `module` VALUES ('16', 'page', 'Trang', '/index.php/admin/page', '1', '0', '[\"27\",\"26\"]', '', '1', '0');
INSERT INTO `module` VALUES ('17', 'contact', 'Liên hệ', '/#', '1', '0', '[\"27\",\"26\"]', '', '0', '1');
INSERT INTO `module` VALUES ('18', 'index', 'Trang chủ', '/#', '1', '0', '[\"27\",\"26\"]', '', '0', '1');
INSERT INTO `module` VALUES ('19', 'sitemap', 'Sơ đồ web', '/#', '1', '0', '[\"27\",\"26\"]', '', '0', '1');
INSERT INTO `module` VALUES ('20', 'equipment', 'Thiết bị', '/#', '1', '0', '[\"27\",\"26\"]', '', '0', '1');

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
  `post_order` int(11) NOT NULL DEFAULT '0',
  `post_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: active; 0: deactive; -1: draft',
  `post_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `post_seo_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_seo_keywords` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_seo_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `post_lock` tinyint(4) DEFAULT NULL,
  `post_link` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langmap_id` int(11) DEFAULT NULL,
  `post_featured_image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_highlight` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'Tin tuc tieng Nhat', '<p>Tin tuc tieng Nhat mota</p>\r\n', '<p>Tin tuc tieng Nhat noi dung</p>\r\n', '2015-12-16 18:52:55', '1', '1', 'news', '0', 'Tin tuc tieng Nhat', '', '', 'jp', '0', '/tin-tuc-tieng-nhat', '2', '', 'post', '1');
INSERT INTO `post` VALUES ('2', 'Tin tuc tieng Anh', '<p>Tin tuc tieng Anh mo ta</p>\r\n', '<p>Tin tuc tieng Anh noi dung</p>\r\n', '2015-12-16 18:52:55', '1', '1', 'news', '0', 'Tin tuc tieng Anh', '', '', 'en', '0', '/tin-tuc-tieng-anh', '2', '', 'post', '1');
INSERT INTO `post` VALUES ('3', 'Career tieng Nhat', '', '<p>content tieng Nhat</p>\r\n', '2015-12-18 06:39:06', '1', '1', 'career', '0', 'Career tieng Nhat', '', '', 'jp', '0', '/career-tieng-nhat', '4', '', 'post', '1');
INSERT INTO `post` VALUES ('4', 'Career tieng Anh', '', '<p>content Tieng Anh</p>\r\n', '2015-12-18 06:39:06', '1', '1', 'career', '0', 'Career tieng Anh', '', '', 'en', '0', '/career-tieng-anh', '4', '', 'post', '1');
INSERT INTO `post` VALUES ('7', 'vision mission jp', '', 'content vision mission jp', '2015-12-19 03:33:27', '1', '1', 'about', '0', 'vision mission jp', '', '', 'jp', '0', '/vision-mission-jp', '6', '', 'post', '1');
INSERT INTO `post` VALUES ('8', 'vision mission en', '', 'content vision mission en', '2015-12-19 03:33:28', '1', '1', 'about', '0', 'vision mission en', '', '', 'en', '0', '/vision-mission-en', '6', '', 'post', '1');
INSERT INTO `post` VALUES ('13', 'company_history jp', '', 'content company_history jp', '2015-12-19 03:35:11', '1', '1', 'about', '0', 'company_history jp', '', '', 'jp', '0', '/company-history-jp', '9', '', 'post', '1');
INSERT INTO `post` VALUES ('14', 'company_history en', '', 'content company_history en', '2015-12-19 03:35:11', '1', '1', 'about', '0', 'company_history en', '', '', 'en', '0', '/company-history-en', '9', '', 'post', '1');
INSERT INTO `post` VALUES ('15', 'Tủ 1 jp', '', '', '2015-12-21 19:43:44', '1', '1', 'product', '3', 'Tủ 1 jp', '', '', 'jp', '0', '/tu-1-jp', '11', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('16', 'tủ 1 en', '', '', '2015-12-21 19:43:44', '1', '1', 'product', '4', 'tủ 1 en', '', '', 'en', '0', '/tu-1-en', '11', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('17', 'tủ 2 jp', '', '', '2015-12-21 19:50:39', '1', '1', 'product', '3', 'tủ 2 jp', '', '', 'jp', '0', '/tu-2-jp', '12', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('18', 'tủ 2 en', '', '', '2015-12-21 19:50:39', '1', '1', 'product', '4', 'tủ 2 en', '', '', 'en', '0', '/tu-2-en', '12', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('19', 'tủ 3 jp', '', '', '2015-12-21 19:51:19', '1', '1', 'product', '3', 'tủ 3 jp', '', '', 'jp', '0', '/tu-3-jp', '13', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('20', 'tủ 3 en', '', '', '2015-12-21 19:51:19', '1', '1', 'product', '4', 'tủ 3 en', '', '', 'en', '0', '/tu-3-en', '13', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('21', 'Tin tức', '', '', '2015-12-23 02:48:25', '5', '1', 'news', '0', 'Tin tức', '', '', 'jp', '0', '/tin-tuc', '14', '', 'page', '1');
INSERT INTO `post` VALUES ('22', 'News', '', '', '2015-12-23 02:48:25', '5', '1', 'news', '0', 'News', '9o', 'lo9ol', 'en', '0', '/news', '14', '', 'page', '1');
INSERT INTO `post` VALUES ('23', 'Nghề nghiệp', '', '', '2015-12-23 02:49:21', '6', '1', 'career', '0', 'Nghề nghiệp', '', '', 'jp', '0', '/nghe-nghiep', '15', '', 'page', '1');
INSERT INTO `post` VALUES ('24', 'Career', '', '', '2015-12-23 02:49:21', '6', '1', 'career', '0', 'Career', '', '', 'en', '0', '/career', '15', '', 'page', '1');
INSERT INTO `post` VALUES ('25', 'Giới thiệu', '', '', '2015-12-23 02:49:56', '2', '1', 'about', '0', 'Giới thiệu', '', '', 'jp', '0', '/gioi-thieu', '16', '', 'page', '1');
INSERT INTO `post` VALUES ('26', 'About Us', '', '', '2015-12-23 02:49:56', '2', '1', 'about', '0', 'About Us', '', '', 'en', '0', '/about-us', '16', '', 'page', '1');
INSERT INTO `post` VALUES ('27', 'Sản phẩm', '', '', '2015-12-23 02:50:46', '3', '1', 'product', '0', 'Sản phẩm', '', '', 'jp', '0', '/san-pham', '17', '', 'page', '1');
INSERT INTO `post` VALUES ('28', 'Product', '', '', '2015-12-23 02:50:46', '3', '1', 'product', '0', 'Product', '', '', 'en', '0', '/product', '17', '', 'page', '1');
INSERT INTO `post` VALUES ('29', 'Liên hệ', '', 'test', '2015-12-23 19:19:15', '7', '1', 'contact', '0', 'Liên hệ', '', '', 'jp', '0', '/lien-he', '18', '', 'page', '1');
INSERT INTO `post` VALUES ('30', 'Contact', '', '', '2015-12-23 19:19:15', '7', '1', 'contact', '0', 'Contact', '', '', 'en', '0', '/contact', '18', '', 'page', '1');
INSERT INTO `post` VALUES ('31', 'Trang chủ', '', '', '2015-12-23 19:23:52', '1', '1', 'index', '0', 'Trang chủ', '', '', 'jp', '0', '/trang-chu', '19', '', 'page', '1');
INSERT INTO `post` VALUES ('32', 'Home', '', '', '2015-12-23 19:23:52', '1', '1', 'index', '0', 'Home', '', '', 'en', '0', '/home', '19', '', 'page', '1');
INSERT INTO `post` VALUES ('33', 'Sơ đồ web', '', '', '2015-12-23 20:21:16', '8', '1', 'sitemap', '0', 'Sơ đồ web', '', '', 'jp', '0', '/so-do-web', '20', '', 'page', '1');
INSERT INTO `post` VALUES ('34', 'Sitemap', '', '', '2015-12-23 20:21:16', '8', '1', 'sitemap', '0', 'Sitemap', '', '', 'en', '0', '/sitemap', '20', '', 'page', '1');
INSERT INTO `post` VALUES ('35', 'Thiết bị', '', '', '2015-12-23 20:22:04', '4', '1', 'equipment', '0', 'Thiết bị', '', '', 'jp', '0', '/thiet-bi', '21', '', 'page', '1');
INSERT INTO `post` VALUES ('36', 'The main equipment, machinery', '', '', '2015-12-23 20:22:04', '4', '1', 'equipment', '0', 'The main equipment, machinery', '', '', 'en', '0', '/the-main-equipment-machinery', '21', '', 'page', '1');
INSERT INTO `post` VALUES ('37', 'ghe 1 jp', '', '', '2015-12-26 06:03:39', '1', '1', 'product', '5', 'ghe 1 jp', '', '', 'jp', '0', '/ghe-1-jp', '23', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('38', 'ghe 1 en', '', '', '2015-12-26 06:03:39', '1', '1', 'product', '6', 'ghe 1 en', '', '', 'en', '0', '/ghe-1-en', '23', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('39', 'ghe 2 jp', '', '', '2015-12-26 06:04:18', '1', '1', 'product', '5', 'ghe 2 jp', '', '', 'jp', '0', '/ghe-2-jp', '24', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('40', 'ghe 2 en', '', '', '2015-12-26 06:04:18', '1', '1', 'product', '6', 'ghe 2 en', '', '', 'en', '0', '/ghe-2-en', '24', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('41', 'ghe 3 jp', '', '', '2015-12-26 06:04:46', '1', '1', 'product', '5', 'ghe 3 jp', '', '', 'jp', '0', '/ghe-3-jp', '25', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('42', 'ghe 3 en', '', '', '2015-12-26 06:04:46', '1', '1', 'product', '6', 'ghe 3 en', '', '', 'en', '0', '/ghe-3-en', '25', '/upload/files/aa.jpg', 'post', '1');
INSERT INTO `post` VALUES ('43', 'tui ten duc js', '', '', '2015-12-28 18:01:47', '1', '1', 'career', '0', 'tui ten duc js', '', '', 'jp', '0', '/tui-ten-duc-js', '26', '', 'post', '1');
INSERT INTO `post` VALUES ('44', 'tui ten duc js', '', '', '2015-12-28 18:04:22', '1', '1', 'career', '0', 'tui ten duc js', '', '', 'jp', '0', '/tui-ten-duc-js', '27', '', 'post', '1');
INSERT INTO `post` VALUES ('45', 'tui ten duc js', '', '', '2015-12-28 18:04:31', '1', '1', 'career', '0', 'tui ten duc js', '', '', 'jp', '0', '/tui-ten-duc-js', '28', '', 'post', '1');
INSERT INTO `post` VALUES ('46', 'tui ten duc js', '', '', '2015-12-28 18:15:58', '1', '1', 'career', '0', 'tui ten duc js', '', '', 'jp', '0', '/tui-ten-duc-js', '29', '', 'post', '1');
INSERT INTO `post` VALUES ('47', 'tui ten duc en', '', '', '2015-12-28 18:15:58', '1', '1', 'career', '0', 'tui ten duc en', '', '', 'en', '0', '/tui-ten-duc-en', '29', '', 'post', '1');

-- ----------------------------
-- Table structure for `sessions`
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('f90e2f9aa8cbb115e9cd33b13993252b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/52.2.98 Chrome/46.2.2490.98 Safari/5', '1451356084', 'a:1:{s:11:\"user_entity\";a:13:{s:7:\"user_id\";s:1:\"7\";s:8:\"username\";s:10:\"dukpro2910\";s:8:\"password\";s:32:\"26fbe80ee81082af6cdf70178639c89b\";s:5:\"email\";s:19:\"nthanhduc@gmail.com\";s:8:\"fullname\";s:10:\"Duc Nguyen\";s:6:\"gender\";s:1:\"0\";s:7:\"address\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:11:\"datecreated\";s:19:\"0000-00-00 00:00:00\";s:6:\"active\";s:1:\"1\";s:12:\"user_builtin\";s:1:\"1\";s:8:\"group_id\";s:1:\"2\";s:10:\"permission\";a:16:{s:6:\"config\";s:2:\"15\";s:4:\"user\";s:2:\"15\";s:5:\"group\";s:2:\"15\";s:7:\"library\";s:2:\"15\";s:6:\"slider\";s:2:\"15\";s:3:\"ads\";s:2:\"15\";s:8:\"newspage\";s:2:\"15\";s:4:\"news\";s:2:\"15\";s:10:\"careerpage\";s:2:\"15\";s:6:\"career\";s:2:\"15\";s:9:\"aboutpage\";s:2:\"15\";s:5:\"about\";s:2:\"15\";s:11:\"productpage\";s:2:\"15\";s:10:\"productcat\";s:2:\"15\";s:7:\"product\";s:2:\"15\";s:4:\"page\";s:2:\"15\";}}}');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('7', 'dukpro2910', '26fbe80ee81082af6cdf70178639c89b', 'nthanhduc@gmail.com', 'Duc Nguyen', '0', '', '', '0000-00-00 00:00:00', '1', '1', '2');
