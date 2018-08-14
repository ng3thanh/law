/*
Navicat MySQL Data Transfer

Source Server         : SV - ng3thanh
Source Server Version : 50719
Source Host           : ng3thanh.ciwuxqpsxgmt.ap-southeast-1.rds.amazonaws.com:3306
Source Database       : ng3thanh

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-08-14 08:42:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activations
-- ----------------------------
DROP TABLE IF EXISTS `activations`;
CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of activations
-- ----------------------------
INSERT INTO `activations` VALUES ('1', '1', '5gHbBzZgNeezk6QCsu2jKSA4u8J2ypvn', '1', '2018-08-11 18:03:30', '2018-08-11 18:03:30', '2018-08-11 18:03:30');
INSERT INTO `activations` VALUES ('2', '2', 'XCxHYaTjXPwDHT4o6GSeBNliLL8CqxiQ', '1', '2018-08-11 18:03:30', '2018-08-11 18:03:30', '2018-08-11 18:03:30');

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES ('4', 'admin', 'upload/blogs/4/blog_4_main_image.jpg', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:17:16', '2018-08-12 08:17:16', null);
INSERT INTO `blogs` VALUES ('5', 'admin', 'upload/blogs/5/blog_5_main_image.jpg', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:18:29', '2018-08-12 08:18:29', null);
INSERT INTO `blogs` VALUES ('6', 'admin', 'upload/blogs/6/blog_6_main_image.jpg', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:19:09', '2018-08-12 08:19:09', null);
INSERT INTO `blogs` VALUES ('7', 'admin', 'upload/blogs/7/blog_7_main_image.jpg', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:19:51', '2018-08-12 08:19:51', null);
INSERT INTO `blogs` VALUES ('8', 'admin', 'upload/blogs/8/blog_8_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:38:06', '2018-08-12 08:38:06', null);
INSERT INTO `blogs` VALUES ('9', 'admin', 'upload/blogs/9/blog_9_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:38:19', '2018-08-12 08:38:19', null);
INSERT INTO `blogs` VALUES ('10', 'admin', 'upload/blogs/10/blog_10_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:38:32', '2018-08-12 08:38:32', null);
INSERT INTO `blogs` VALUES ('11', 'admin', 'upload/blogs/11/blog_11_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:38:40', '2018-08-12 08:38:40', null);
INSERT INTO `blogs` VALUES ('12', 'admin', 'upload/blogs/12/blog_12_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:38:54', '2018-08-12 08:38:54', null);
INSERT INTO `blogs` VALUES ('13', 'admin', 'upload/blogs/13/blog_13_main_image.png', '0', '2018-08-12 00:00:00', '2020-08-30 00:00:00', '2018-08-12 08:39:06', '2018-08-12 08:39:06', null);

-- ----------------------------
-- Table structure for blogs_translate
-- ----------------------------
DROP TABLE IF EXISTS `blogs_translate`;
CREATE TABLE `blogs_translate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blogs_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_translate_blogs_id_locale_unique` (`blogs_id`,`locale`),
  KEY `blogs_translate_locale_index` (`locale`),
  CONSTRAINT `blogs_translate_blogs_id_foreign` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blogs_translate
-- ----------------------------
INSERT INTO `blogs_translate` VALUES ('1', '4', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><span style=\"font-family:Times New Roman,Times,serif\"><strong>Types of E-Commerce business</strong></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>kkk</td>\r\n			<td>mk</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>3</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><strong>The e-commerce service provision website is of the following types:</strong></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- E-commerce trading floor;</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- Online auction website;</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- Online promotion website;</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">- Goods sale application, eCommerce service provision application, etc.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-family:Times New Roman,Times,serif\"><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></span></h2>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">For more information, please leave a message in chat box, or</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></span></p>');
INSERT INTO `blogs_translate` VALUES ('2', '4', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('3', '5', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:6250px; width:2500px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:1563px; width:4688px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('4', '5', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('5', '6', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:6250px; width:2500px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:1563px; width:4688px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('6', '6', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('7', '7', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:6250px; width:2500px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:1563px; width:4688px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('8', '7', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('9', '8', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('10', '8', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('11', '9', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('12', '9', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('13', '10', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('14', '10', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('15', '11', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('16', '11', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('17', '12', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('18', '12', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `blogs_translate` VALUES ('19', '13', 'en', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/Steps-to-register-ecommerce-company-in-Vietnam.jpg\" style=\"height:1625px; width:650px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>SHOULD YOU ENGAGE IN A LAWYER AND AN ACCOUNTANT</strong></h2>\r\n\r\n<p>Investment registration may seem like a major step in a new business venture for many people. Like anything, it can be daunting if you haven&rsquo;t done it before and you definitely to make sure that it&rsquo;s done correctly. Otherwise, you may waste a lot of time and pay fines if you do mistake, even a little one.</p>\r\n\r\n<p>The process is generally quite smooth if you involve a professional to help you out. Every one wants to spend less time administering their business and more time running it. In Feline Legal, with many years experience in corporate services, lawyers and accountants will assist you and provide advance with forming your company. We also complete the paperwork, register your company and follow steps after that. You can save a lot of time and enjoy good services with reasonable price</p>\r\n\r\n<p>For more information, please leave a message in chat box, or</p>\r\n\r\n<p><img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/03/contact-Feline-Legal.jpg\" style=\"height:217px; width:650px\" /></p>');
INSERT INTO `blogs_translate` VALUES ('20', '13', 'vi', 'How to register an eCommerce company in Vietnam', 'how-to-register-an-ecommerce-company-in-vietnam', 'Recently, 50 millions of Vietnamese are internet users. In Vietnam, people use the internet everyday at home, at work or anywhere with mobile devices that have WiFi and 3G connectivity. This is a very good condition for e-commerce development to boom in the coming time as well as the increase of enterprises and forms of e-commerce.', '<p><strong>Types of E-Commerce business&nbsp;</strong></p>\r\n\r\n<p>- <em><strong>Sales e-commerce website</strong></em> is an e-commerce website developed by traders, organizations or individuals by themselves to serve their commercial promotion, sales or service provision.</p>\r\n\r\n<p>- <em><strong>E-commerce service provision website</strong></em> is an e-commerce website developed by traders or organizations to provide an environment for other traders, organizations or individuals to conduct their commercial activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The e-commerce service provision website is of the following types:</strong></p>\r\n\r\n<p>- E-commerce trading floor;</p>\r\n\r\n<p>- Online auction website;</p>\r\n\r\n<p>- Online promotion website;</p>\r\n\r\n<p>- Goods sale application, eCommerce service provision application, etc.</p>\r\n\r\n<p>For example, LAZADA is one of the biggest eCommerce companies in Vietnam. LAZADA has registered as an eCommerce trading floor - online promotion website, as well as an eCommerce service provision application.</p>\r\n\r\n<p>[caption id=&quot;attachment_346&quot; align=&quot;aligncenter&quot; width=&quot;756&quot;]<img alt=\"\" src=\"http://felinelegal.com/wp-content/uploads/2018/02/lazada.png\" style=\"height:643px; width:756px\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lazada Vietnam[/caption]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('1', 'KGK', 'upload/clients/1/client_1_main_image.png', '2018-08-12 08:38:55', '2018-08-12 08:38:55', null);
INSERT INTO `clients` VALUES ('2', 'Zoomlion', 'upload/clients/2/client_2_main_image.jpg', '2018-08-12 08:39:43', '2018-08-12 08:39:43', null);
INSERT INTO `clients` VALUES ('3', 'ADT', 'upload/clients/3/client_3_main_image.png', '2018-08-12 08:40:06', '2018-08-12 08:40:06', null);
INSERT INTO `clients` VALUES ('4', 'Paxpoll', 'upload/clients/4/client_4_main_image.png', '2018-08-12 08:59:58', '2018-08-12 08:59:58', null);
INSERT INTO `clients` VALUES ('5', 'Mì Hàn Quốc', 'upload/clients/5/client_5_main_image.jpg', '2018-08-12 09:16:02', '2018-08-12 09:16:02', null);

-- ----------------------------
-- Table structure for feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of feedbacks
-- ----------------------------

-- ----------------------------
-- Table structure for introduces
-- ----------------------------
DROP TABLE IF EXISTS `introduces`;
CREATE TABLE `introduces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of introduces
-- ----------------------------
INSERT INTO `introduces` VALUES ('1', 'upload/introduces/1/introduce_1_main_image.jpg', '2018-08-11 18:03:31', '2018-08-12 08:46:45', null);

-- ----------------------------
-- Table structure for introduces_translate
-- ----------------------------
DROP TABLE IF EXISTS `introduces_translate`;
CREATE TABLE `introduces_translate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `introduce_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `introduces_translate_introduce_id_locale_unique` (`introduce_id`,`locale`),
  KEY `introduces_translate_locale_index` (`locale`),
  CONSTRAINT `introduces_translate_introduce_id_foreign` FOREIGN KEY (`introduce_id`) REFERENCES `introduces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of introduces_translate
-- ----------------------------
INSERT INTO `introduces_translate` VALUES ('1', '1', 'en', 'IBLC Firm', '<p><span style=\"font-size:14px\">Planning to start a business in Vietnam? You&#39;re probably wondering just how much money you&#39;re going to need. This article I will explain the capital of company from the legal point of view. What is the minimum capital for a FDI company in Vietnam There is no requirement for minimum capital under current regulations</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Planning to start a business in Vietnam? You&#39;re probably wondering just how much money you&#39;re going to need. This article I will explain the capital of company from the legal point of view. What is the minimum capital for a FDI company in Vietnam There is no requirement for minimum capital under current regulations</span></p>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `introduces_translate` VALUES ('2', '1', 'vi', 'IBLC Firm', '<p>Let&#39;s doing business in Vietnam today</p>');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_07_02_230147_migration_cartalyst_sentinel', '1');
INSERT INTO `migrations` VALUES ('2', '2018_06_29_100750_create_services_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_06_29_100845_create_blogs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_06_29_100854_create_slides_table', '1');
INSERT INTO `migrations` VALUES ('5', '2018_06_29_100907_create_feedbacks_table', '1');
INSERT INTO `migrations` VALUES ('6', '2018_07_28_143556_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('7', '2018_07_31_041335_update_setting_table', '1');
INSERT INTO `migrations` VALUES ('8', '2018_07_31_150755_create_introduces_table', '1');
INSERT INTO `migrations` VALUES ('9', '2018_07_31_150822_create_clients_table', '1');
INSERT INTO `migrations` VALUES ('10', '2018_07_31_151025_change_db_services_table', '1');
INSERT INTO `migrations` VALUES ('11', '2018_07_31_165100_change_db_client_table', '1');
INSERT INTO `migrations` VALUES ('12', '2018_08_01_031409_change_db_feedbacks_table', '1');
INSERT INTO `migrations` VALUES ('13', '2018_08_07_141927_create_service_translate', '1');
INSERT INTO `migrations` VALUES ('14', '2018_08_07_141955_create_blogs_translate', '1');
INSERT INTO `migrations` VALUES ('15', '2018_08_07_142144_create_introduces_translate', '1');

-- ----------------------------
-- Table structure for persistences
-- ----------------------------
DROP TABLE IF EXISTS `persistences`;
CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of persistences
-- ----------------------------
INSERT INTO `persistences` VALUES ('1', '1', 'ET2P0NLT2h9V0eZizEFJOyxz6fR4lMN8', '2018-08-12 07:15:23', '2018-08-12 07:15:23');
INSERT INTO `persistences` VALUES ('2', '1', 'jfq46zPKc80GResX3qdesCIDuD3IaswI', '2018-08-12 08:37:46', '2018-08-12 08:37:46');

-- ----------------------------
-- Table structure for reminders
-- ----------------------------
DROP TABLE IF EXISTS `reminders`;
CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reminders
-- ----------------------------

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES ('1', '1', '2018-08-11 18:03:31', '2018-08-11 18:03:31');
INSERT INTO `role_users` VALUES ('2', '3', '2018-08-11 18:03:31', '2018-08-11 18:03:31');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'administrator', 'Administrator', '{\"users.create\":true,\"users.update\":true,\"users.view\":true,\"users.destroy\":true,\"roles.create\":true,\"roles.update\":true,\"roles.view\":true,\"roles.delete\":true}', '2018-08-11 18:03:30', '2018-08-11 18:03:30');
INSERT INTO `roles` VALUES ('2', 'moderator', 'Moderator', '{\"users.update\":true,\"users.view\":true}', '2018-08-11 18:03:31', '2018-08-11 18:03:31');
INSERT INTO `roles` VALUES ('3', 'subscriber', 'Subscriber', '', '2018-08-11 18:03:31', '2018-08-11 18:03:31');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(4,2) NOT NULL,
  `vote` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', null, '5.00', '0', 'upload/services/1/service_1_main_image.png', '0', '2018-08-12 08:22:26', '2018-08-12 08:22:26', null);
INSERT INTO `services` VALUES ('2', null, '5.00', '0', 'upload/services/2/service_2_main_image.png', '0', '2018-08-12 08:25:27', '2018-08-12 08:25:27', null);
INSERT INTO `services` VALUES ('3', null, '5.00', '0', 'upload/services/3/service_3_main_image.png', '0', '2018-08-12 08:34:22', '2018-08-12 08:34:22', null);
INSERT INTO `services` VALUES ('4', null, '5.00', '0', 'upload/services/4/service_4_main_image.png', '0', '2018-08-12 09:08:42', '2018-08-12 09:08:42', null);

-- ----------------------------
-- Table structure for services_translate
-- ----------------------------
DROP TABLE IF EXISTS `services_translate`;
CREATE TABLE `services_translate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `services_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_translate_services_id_locale_unique` (`services_id`,`locale`),
  KEY `services_translate_locale_index` (`locale`),
  CONSTRAINT `services_translate_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services_translate
-- ----------------------------
INSERT INTO `services_translate` VALUES ('1', '1', 'en', 'Register Company', 'register-company', '<p>asasda</p>', '<p>assdasd</p>');
INSERT INTO `services_translate` VALUES ('2', '1', 'vi', 'Register Company', 'register-company', '<p>asda</p>', '<p>asda</p>');
INSERT INTO `services_translate` VALUES ('3', '2', 'en', 'Register Representative Office', 'register-representative-office', '<p>&aacute;dasd</p>', '<p>&aacute;dasda</p>');
INSERT INTO `services_translate` VALUES ('4', '2', 'vi', 'Đăng ký Văn phòng đại diện', 'dang-ky-van-phong-dai-dien', '<p>&aacute;dasdas&aacute;das</p>', '<p>&aacute;dsadasdấ</p>');
INSERT INTO `services_translate` VALUES ('5', '3', 'en', 'Tax Consulting', 'tax-consulting', '<p>&aacute;dasd&nbsp; cv</p>', '<p>dfdf vb</p>');
INSERT INTO `services_translate` VALUES ('6', '3', 'vi', 'Tư vấn thuế', 'tu-van-thue', '<p>fđf</p>', '<p>fdđ</p>');
INSERT INTO `services_translate` VALUES ('7', '4', 'en', 'Accounting', 'accounting', '<p>asdada</p>', '<p>sssss</p>');
INSERT INTO `services_translate` VALUES ('8', '4', 'vi', 'Kế Toán', 'ke-toan', '<p>sdsds</p>', '<p>dd&nbsp; bbvvbbvb</p>');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT 'Location of data in footer',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', '1', 'introduce', 'globe', 'fgfgfgfgfg bgbvbvbv', '2018-08-11 18:03:31', '2018-08-12 09:14:07', null);
INSERT INTO `settings` VALUES ('2', '2', 'phone', 'phone', '962690696', '2018-08-11 18:03:31', '2018-08-12 09:14:07', null);
INSERT INTO `settings` VALUES ('3', '2', 'address', 'map', '60/68 Lâm Văn Bền', '2018-08-11 18:03:31', '2018-08-12 09:14:07', null);
INSERT INTO `settings` VALUES ('4', '2', 'email', 'envelope-o', 'minhphuonglegal@gmail.com', '2018-08-11 18:03:31', '2018-08-12 09:14:07', null);
INSERT INTO `settings` VALUES ('5', '3', 'facebook', 'facebook-square', 'https://www.facebook.com/Feline-Legal-2072962026310820/', '2018-08-11 18:03:31', '2018-08-12 09:11:59', null);
INSERT INTO `settings` VALUES ('6', '3', 'twitter', 'globe', null, '2018-08-11 18:03:31', '2018-08-12 09:11:59', null);
INSERT INTO `settings` VALUES ('7', '3', 'google', 'globe', null, '2018-08-11 18:03:31', '2018-08-12 09:11:59', null);
INSERT INTO `settings` VALUES ('8', '3', 'instagram', 'globe', null, '2018-08-11 18:03:31', '2018-08-12 09:11:59', null);
INSERT INTO `settings` VALUES ('9', '2', 'abc', 'envelope', 'bvbvbvbv', '2018-08-12 09:25:18', '2018-08-12 09:25:18', null);

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alt` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES ('1', 'slide', 'upload/slides/1/slide_1_main_image.jpg', '2018-08-12 08:44:00', '2018-08-12 08:44:32', '2018-08-12 08:44:32');
INSERT INTO `slides` VALUES ('2', 'slide', 'upload/slides/2/slide_2_main_image.jpg', '2018-08-12 08:44:32', '2018-08-12 09:34:13', '2018-08-12 09:34:13');
INSERT INTO `slides` VALUES ('3', 'slide', 'upload/slides/3/slide_3_main_image.jpg', '2018-08-12 08:54:17', '2018-08-12 09:34:13', null);

-- ----------------------------
-- Table structure for throttle
-- ----------------------------
DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of throttle
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@admin.com', '$2y$10$s6Kqdwl8OPDUJasvlS3ZuOLgKlDC3bzI82eubu2XiaRwmmIopd6PW', null, '2018-08-12 08:37:46', null, null, '2018-08-11 18:03:30', '2018-08-12 08:37:46');
INSERT INTO `users` VALUES ('2', 'user1', 'user@user.com', '$2y$10$1BXyHUUvtb17WAVos.Mgv.TlFuDXLJ35.jf5UQ3ccIgh3iFEsFUEa', null, null, null, null, '2018-08-11 18:03:30', '2018-08-11 18:03:30');
