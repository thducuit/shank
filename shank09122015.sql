-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alias`
--

DROP TABLE IF EXISTS `alias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alias` (
  `alias_id` int(11) NOT NULL AUTO_INCREMENT,
  `alias_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `language_id` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`alias_id`),
  UNIQUE KEY `alias_nameID` (`alias_name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alias`
--

LOCK TABLES `alias` WRITE;
/*!40000 ALTER TABLE `alias` DISABLE KEYS */;
INSERT INTO `alias` VALUES (1,'test-1-vn','test',1,'vn'),(2,'test-1-en','test',2,'en'),(3,'test-2-vn2','test',3,'vn'),(4,'test-2-en2','test',4,'en'),(5,'test-3-vn','test',5,'vn'),(6,'test-3-en','test',6,'en'),(7,'test-4-vn','test',7,'vn'),(8,'test-4-en','test',8,'en'),(9,'test-1-vn-1','',NULL,NULL),(10,'test-1-en-1','',NULL,NULL),(11,'test9','test',9,'vn'),(12,'test10','test',10,'en'),(13,'dada','test',11,'vn'),(14,'test12','test',12,'en'),(15,'test13','test',13,'vn'),(16,'test14','test',14,'en'),(17,'test15','test',15,'vn'),(18,'test16','test',16,'en');
/*!40000 ALTER TABLE `alias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'test 1 vn2','',2,1,'2015-11-22 15:05:45','test','test 1 vn2','','',0,'vn','',1,0,'/test-1-vn-1'),(2,'test 1 en1','',2,1,'2015-11-22 15:05:08','test','test 1 en1','','',0,'en','',1,0,'/test-1-en'),(3,'test 2 vn','',1,0,'2015-11-22 16:03:30','test','test 2 vn','','',1,'vn','--',2,0,'/test-1-vn-1/test-2-vn2'),(4,'test 2 en','',1,0,'2015-11-22 16:03:30','test','test 2 en','','',2,'en','--',2,0,'/test-1-en/test-2-en2'),(5,'test 3 vn','',1,1,'2015-11-12 04:55:18','test','','','',3,'vn','----',3,0,'/test-1-vn/test-2-vn/test-3-vn'),(6,'test 3 en','',1,1,'2015-11-12 04:55:18','test','','','',4,'en','----',3,0,'/test-1-en/test-2-en/test-3-en'),(7,'test 4 vn','',1,1,'2015-11-12 04:56:13','test','','','',5,'vn','------',4,0,'/test-1-vn/test-2-vn/test-3-vn/test-4-vn'),(8,'test 4 en','',1,1,'2015-11-12 04:56:13','test','','','',6,'en','------',4,0,'/test-1-en/test-2-en/test-3-en/test-4-en'),(9,'','',1,1,'2015-11-26 05:48:57','test','','','',0,'vn','',5,1,'/'),(10,'','',1,1,'2015-11-26 05:48:57','test','','','',0,'en','',5,1,'/'),(11,'dada','',1,1,'2015-12-04 09:30:11','test','dada','','',0,'vn','',6,0,'/dada'),(12,'','',1,1,'2015-12-04 09:30:11','test','','','',0,'en','',6,1,'/'),(13,'','',1,1,'2015-12-04 09:35:20','test','','','',0,'vn','',7,1,'/'),(14,'','',1,1,'2015-12-04 09:35:20','test','','','',0,'en','',7,1,'/'),(15,'','',1,1,'2015-12-04 09:52:18','test','','','',0,'vn','',8,1,'/'),(16,'','',1,1,'2015-12-04 09:52:18','test','','','',0,'en','',8,1,'/');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `field_value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,'seo_title_vi','NOATEK'),(2,'seo_keywords_vi','Thế giới sữa'),(3,'seo_description_vi','Thế giới sữa'),(4,'favicon','favicon_2012.12.12-08.36.26.ico'),(5,'hotline',''),(6,'email_smtp_server','smtp.gmail.com'),(7,'email_smtp_port','465'),(8,'email_smtp_auth','login'),(9,'email_smtp_ssl','ssl'),(10,'email_smtp_account','thducuit@gmail.com'),(11,'email_smtp_password','choancut'),(12,'email_receiver','thducuit@gmail.com'),(13,'offline_content','<div style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"/data/upload/editor/images/Website_Page_Under_Construction.jpg\" style=\"width: 790px; height: 550px;\" /></div>\r\n'),(14,'offline_mode','0'),(15,'ga_email','thducuit@gmail.com'),(16,'ga_password','thducuit123'),(17,'ga_profileid','76329046'),(18,'ga_trackingcode','<script>\r\n  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');\r\n\r\n  ga(\'create\', \'UA-43792321-1\', \'tqdesign.vn\');\r\n  ga(\'send\', \'pageview\');\r\n\r\n</script>'),(19,'googleplus','#'),(20,'facebook','#'),(21,'flickr','#'),(22,'blogger','#'),(23,'delicious','#'),(24,'number_mostbuy','10'),(25,'number_isnew','8'),(26,'blacklist',''),(28,'email_sender','thducuit@gmail.com'),(29,'seo_title_en','NOATEK'),(30,'seo_keywords_en',''),(31,'seo_description_en',''),(32,'number_product_paging','1'),(33,'number_news_paging','10'),(34,'email_webmaster','thdducuit@gmail.co1m'),(35,'facebook_link','http://facebook.com');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,'Administrator','Nhóm quản trị hệ thống',1,'2012-10-18 17:08:37',110,'{\"translate\":\"1|2|4|8|16\",\"webconfig\":\"1|2|4|8|16\",\"statistic\":\"1|2|4|8|16\",\"user\":\"1|2|4|8|16\",\"group\":\"1|2|4|8|16\",\"intro\":\"1|2|4|8|16\",\"about\":\"1|2|4|8|16\",\"trades\":\"1|2|4|8|16\",\"tradecate\":\"1|2|4|8|16\",\"trade\":\"1|2|4|8|16\",\"contact\":\"1|2|4|8|16\",\"contactlist\":\"1|2|4|8|16\",\"contactinfo\":\"1|2|4|8|16\",\"gallery\":\"1|2|4|8|16\",\"bannerhomepage\":\"1|2|4|8|16\",\"banner\":\"1|2|4|8|16\",\"ads\":\"1|2|4|8|16\",\"system\":\"1|2|4|8|16\",\"newsboard\":\"1|2|4|8|16\",\"news\":\"1|2|4|8|16\",\"careers\":\"1|2|4|8|16\",\"career\":\"1|2|4|8|16\"}');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langmap`
--

DROP TABLE IF EXISTS `langmap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langmap` (
  `langmap_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `langmap_module` varchar(20) NOT NULL,
  PRIMARY KEY (`langmap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langmap`
--

LOCK TABLES `langmap` WRITE;
/*!40000 ALTER TABLE `langmap` DISABLE KEYS */;
INSERT INTO `langmap` VALUES (1,'test'),(2,'test'),(3,'test'),(4,'test'),(5,'test'),(6,'test'),(7,'test'),(8,'test');
/*!40000 ALTER TABLE `langmap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `language_id` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `language_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES ('en',0),('vn',1);
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta`
--

DROP TABLE IF EXISTS `meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `meta_moduleid` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta`
--

LOCK TABLES `meta` WRITE;
/*!40000 ALTER TABLE `meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` VALUES (1,'user','User','/index.php/admin/user',1,3,'[\"26\"]','',1),(2,'group','Group','/index.php/admin/group',1,3,'[\"27\",\"26\"]','',1),(3,'config','Cấu hình chung','#',1,0,'[\"27\",\"26\"]','',1);
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `post_highlight` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('a29388a105686f5764ffe52f1ff99c86','10.240.0.45','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1449226933,'a:2:{s:3:\"duc\";s:3:\"vip\";s:4:\"duc2\";s:3:\"heu\";}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'dukpro2910','ea80372593793457ecdc36f091291f36','asdasdsad','nguyen thanh duc',0,'asdasdsad','asdsadsad','0000-00-00 00:00:00',0,0,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-05  2:20:23
