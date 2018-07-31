/*
Navicat MySQL Data Transfer

Source Server         : Vagrant
Source Server Version : 50719
Source Host           : 192.168.10.10:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-08-01 00:31:35
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
INSERT INTO `activations` VALUES ('1', '1', 'zSRH1TRXiGAk3o30xu2CSmbzRzLXeimn', '1', '2018-07-28 13:37:38', '2018-07-28 13:37:38', '2018-07-28 13:37:38');
INSERT INTO `activations` VALUES ('2', '2', 'K8N75T3XLmpV1hAZ88azYYuHVMHCC8zY', '1', '2018-07-28 13:37:38', '2018-07-28 13:37:38', '2018-07-28 13:37:38');

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES ('1', 'Diversity in Engineering: The Effect on Questions', 'diversity-in-engineering-the-effect-on-questions', 'admin', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p><img alt=\"...\" src=\"http://project.local/web/img/featured-pic-3.jpeg\" style=\"height:401px; width:600px\" /></p>\r\n\r\n<h3>Lorem Ipsum Dolor</h3>\r\n\r\n<p>div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda temporibus iusto voluptates deleniti similique rerum ducimus sint ex odio saepe. Sapiente quae pariatur ratione quis perspiciatis deleniti accusantium</p>\r\n\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>\r\n\r\n<p>Someone famous in&nbsp;<cite>Source Title</cite></p>\r\n</blockquote>\r\n\r\n<p>quasi nam. Libero dicta eum recusandae, commodi, ad, autem at ea iusto numquam veritatis, officiis. Accusantium optio minus, voluptatem? Quia reprehenderit, veniam quibusdam provident, fugit iusto ullam voluptas neque soluta adipisci ad.</p>', 'upload/blogs/1/blog_1_main_image.jpeg', '0', '2018-07-28 00:00:00', '2022-02-13 00:00:00', '2018-07-28 14:48:39', '2018-07-28 15:26:00', null);
INSERT INTO `blogs` VALUES ('2', 'Diversity in Engineering: The Effect on Questions 2', 'diversity-in-engineering-the-effect-on-questions-2', 'admin', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p><img alt=\"...\" src=\"http://project.local/web/img/featured-pic-3.jpeg\" style=\"height:401px; width:600px\" /></p>\r\n\r\n<h3>Lorem Ipsum Dolor</h3>\r\n\r\n<p>div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda temporibus iusto voluptates deleniti similique rerum ducimus sint ex odio saepe. Sapiente quae pariatur ratione quis perspiciatis deleniti accusantium</p>\r\n\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>\r\n\r\n<p>Someone famous in&nbsp;<cite>Source Title</cite></p>\r\n</blockquote>\r\n\r\n<p>quasi nam. Libero dicta eum recusandae, commodi, ad, autem at ea iusto numquam veritatis, officiis. Accusantium optio minus, voluptatem? Quia reprehenderit, veniam quibusdam provident, fugit iusto ullam voluptas neque soluta adipisci ad.</p>', 'upload/blogs/2/blog_2_main_image.jpeg', '0', '2018-07-28 00:00:00', '2022-02-13 00:00:00', '2018-07-28 15:10:08', '2018-07-28 15:26:15', null);

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
INSERT INTO `clients` VALUES ('1', 'Nguyễn Bá Thanh', 'upload/clients/1/client_1_main_image.jpg', '2018-07-31 16:52:14', '2018-07-31 16:52:14', null);
INSERT INTO `clients` VALUES ('2', 'Nguyễn Bá Thanh 2', 'upload/clients/2/client_2_main_image.jpg', '2018-07-31 17:00:00', '2018-07-31 17:00:00', null);
INSERT INTO `clients` VALUES ('3', 'Thanh haha', 'upload/clients/3/client_3_main_image.jpg', '2018-07-31 17:00:14', '2018-07-31 17:00:14', null);
INSERT INTO `clients` VALUES ('4', 'Blo bla', 'upload/clients/4/client_4_main_image.jpg', '2018-07-31 17:00:26', '2018-07-31 17:00:26', null);
INSERT INTO `clients` VALUES ('5', 'Test test', 'upload/clients/5/client_5_main_image.jpg', '2018-07-31 17:00:37', '2018-07-31 17:00:37', null);

-- ----------------------------
-- Table structure for feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of introduces
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('11', '2014_07_02_230147_migration_cartalyst_sentinel', '1');
INSERT INTO `migrations` VALUES ('12', '2018_06_29_100750_create_services_table', '1');
INSERT INTO `migrations` VALUES ('13', '2018_06_29_100845_create_blogs_table', '1');
INSERT INTO `migrations` VALUES ('14', '2018_06_29_100854_create_slides_table', '1');
INSERT INTO `migrations` VALUES ('15', '2018_06_29_100907_create_feedbacks_table', '1');
INSERT INTO `migrations` VALUES ('16', '2018_07_28_143556_create_settings_table', '2');
INSERT INTO `migrations` VALUES ('17', '2018_07_31_041335_update_setting_table', '3');
INSERT INTO `migrations` VALUES ('18', '2018_07_31_150755_create_introduces_table', '4');
INSERT INTO `migrations` VALUES ('19', '2018_07_31_150822_create_clients_table', '4');
INSERT INTO `migrations` VALUES ('20', '2018_07_31_151025_change_db_services_table', '5');
INSERT INTO `migrations` VALUES ('21', '2018_07_31_165100_change_db_client_table', '6');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of persistences
-- ----------------------------
INSERT INTO `persistences` VALUES ('1', '1', 'DZeqA9B4DBKqtlhjdZWgaNqW8MWmdFZR', '2018-07-28 14:15:55', '2018-07-28 14:15:55');
INSERT INTO `persistences` VALUES ('2', '1', 'CFJhD3lYHnNH1Y9gIUavhXAPvJHwzxh8', '2018-07-29 10:58:02', '2018-07-29 10:58:02');
INSERT INTO `persistences` VALUES ('3', '1', '3YqgpL2hiGWkE1T4VPdL7vrconDKfvDg', '2018-07-31 14:00:46', '2018-07-31 14:00:46');

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
INSERT INTO `role_users` VALUES ('1', '1', '2018-07-28 13:37:38', '2018-07-28 13:37:38');
INSERT INTO `role_users` VALUES ('2', '3', '2018-07-28 13:37:38', '2018-07-28 13:37:38');

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
INSERT INTO `roles` VALUES ('1', 'administrator', 'Administrator', '{\"users.create\":true,\"users.update\":true,\"users.view\":true,\"users.destroy\":true,\"roles.create\":true,\"roles.update\":true,\"roles.view\":true,\"roles.delete\":true}', '2018-07-28 13:37:38', '2018-07-28 13:37:38');
INSERT INTO `roles` VALUES ('2', 'moderator', 'Moderator', '{\"users.update\":true,\"users.view\":true}', '2018-07-28 13:37:38', '2018-07-28 13:37:38');
INSERT INTO `roles` VALUES ('3', 'subscriber', 'Subscriber', '', '2018-07-28 13:37:38', '2018-07-28 13:37:38');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(4,2) NOT NULL,
  `vote` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', 'Web design', 'web-design', null, '5.00', '0', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', 'upload/services/1/service_1_main_image.png', '<p>asdasdasd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/upload/uploader/images/1322822487.jpg\" style=\"height:315px; width:850px\" /></p>', '0', '2018-07-31 16:03:34', '2018-07-31 16:29:20', null);
INSERT INTO `services` VALUES ('2', 'Web development', 'web-development', null, '5.00', '0', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', 'upload/services/2/service_2_main_image.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '0', '2018-07-31 16:30:00', '2018-07-31 16:30:00', null);
INSERT INTO `services` VALUES ('3', 'Photography', 'photography', null, '5.00', '0', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', 'upload/services/3/service_3_main_image.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '0', '2018-07-31 16:31:16', '2018-07-31 16:31:16', null);
INSERT INTO `services` VALUES ('4', 'Ecommerce', 'ecommerce', null, '5.00', '0', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', 'upload/services/4/service_4_main_image.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '0', '2018-07-31 16:31:39', '2018-07-31 16:31:39', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', '1', 'introduce', 'globe', 'Supporting Your Company Enter And Thrive in Southeast Asia', '2018-07-31 14:10:04', '2018-07-31 14:20:17', null);
INSERT INTO `settings` VALUES ('2', '2', 'phone', 'phone-square', '0936200593', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('3', '2', 'address', 'street-view', 'SGR Building, 4th floor, 167-169 Dien Bien Phu street, Da Kao ward, District 1, Ho Chi Minh City, Vietnam', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('4', '2', 'email', 'envelope', 'vietnam@emerhub.com', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('5', '3', 'facebook', 'facebook-square', 'https://www.facebook.com/ng3thanh', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('6', '3', 'twitter', 'twitter-square', 'No twitter', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('7', '3', 'google', 'google', 'ng3thanh@gmail.com', '2018-07-31 14:10:05', '2018-07-31 14:23:58', null);
INSERT INTO `settings` VALUES ('8', '3', 'instagram', 'rss-square', 'adasd', '2018-07-31 14:10:05', '2018-07-31 14:20:18', null);
INSERT INTO `settings` VALUES ('9', '2', 'ABC', 'map', null, '2018-07-31 14:51:11', '2018-07-31 14:51:11', null);
INSERT INTO `settings` VALUES ('10', '1', 'Thanh', 'hourglass', 'Tesst', '2018-07-31 14:54:04', '2018-07-31 14:54:04', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES ('1', 'sdfsdfsdf', 'upload/slides/1/slide_1_main_image.jpg', '2018-07-28 14:29:09', '2018-07-28 14:29:29', null);
INSERT INTO `slides` VALUES ('2', 'Thanh test 1', 'upload/slides/2/slide_2_main_image.jpg', '2018-07-28 14:29:24', '2018-07-28 14:29:29', '2018-07-28 14:29:29');

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
INSERT INTO `users` VALUES ('1', 'admin', 'admin@admin.com', '$2y$10$q/FW65SEkj/LPvHPy4.85.iWyDyWFsHrEL/a9n0dJbDuMOksP12FC', null, '2018-07-31 14:00:46', null, null, '2018-07-28 13:37:37', '2018-07-31 14:00:46');
INSERT INTO `users` VALUES ('2', 'user1', 'user@user.com', '$2y$10$cpZkzAadSl9kaD0e3cJZCufP8bPD4qRuQfALEhg9VOlE0RolfP2sK', null, null, null, null, '2018-07-28 13:37:38', '2018-07-28 13:37:38');
