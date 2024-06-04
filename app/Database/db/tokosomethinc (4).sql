-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosomethinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'administrator'),
(2, 'user', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(103, '::1', 'admin10@gmail.com', NULL, '2023-12-03 08:01:37', 0),
(104, '::1', 'admin@gmail.com', 11, '2023-12-03 08:07:32', 1),
(105, '::1', 'admin@gmail.com', 11, '2023-12-03 08:10:51', 1),
(106, '::1', 'diva@gmail.com', 15, '2023-12-03 10:41:58', 1),
(107, '::1', 'admin@gmail.com', 11, '2023-12-03 11:13:44', 1),
(108, '::1', 'admin@gmail.com', 11, '2023-12-03 21:55:43', 1),
(109, '::1', 'admin@gmail.com', 11, '2023-12-03 21:59:19', 1),
(110, '::1', 'divanadiva@gmail.com', 16, '2023-12-03 22:01:04', 1),
(111, '::1', 'admin@gmail.com', 11, '2023-12-03 22:21:25', 1),
(112, '::1', 'admin@gmail.com', 11, '2023-12-03 23:25:11', 1),
(113, '::1', 'admin@gmail.com', 11, '2023-12-03 23:27:47', 1),
(114, '::1', 'admin@gmail.com', NULL, '2023-12-04 03:29:00', 0),
(115, '::1', 'admin@gmail.com', 11, '2023-12-04 03:29:06', 1),
(116, '::1', 'admin@gmail.com', 11, '2023-12-04 03:42:59', 1),
(117, '::1', 'admin@gmail.com', NULL, '2023-12-04 03:44:00', 0),
(118, '::1', 'admin@gmail.com', 11, '2023-12-04 03:44:07', 1),
(119, '::1', 'admin@gmail.com', 11, '2023-12-04 04:08:47', 1),
(120, '::1', 'admin@gmail.com', 11, '2023-12-04 04:20:50', 1),
(121, '::1', 'admin@gmail.com', 11, '2023-12-04 04:31:35', 1),
(122, '::1', 'admin@gmail.com', 11, '2023-12-04 07:52:17', 1),
(123, '::1', 'admin@gmail.com', 11, '2023-12-04 08:42:06', 1),
(124, '::1', 'admin@gmail.com', 11, '2023-12-04 08:56:57', 1),
(125, '::1', 'admin@gmail.com', 11, '2023-12-04 10:06:15', 1),
(126, '::1', 'najla123@gmail.com', 17, '2023-12-04 10:17:35', 1),
(127, '::1', 'admin@gmail.com', 11, '2023-12-04 11:03:37', 1),
(128, '::1', 'admin@gmail.com', 11, '2023-12-04 18:00:29', 1),
(129, '::1', 'admin@gmail.com', 11, '2023-12-04 18:10:36', 1),
(130, '::1', 'najla345@gmail.com', 18, '2023-12-04 18:16:34', 1),
(131, '::1', 'najla345@gmail.com', 18, '2023-12-04 18:18:41', 1),
(132, '::1', 'admin@gmail.com', 11, '2023-12-04 18:18:56', 1),
(133, '::1', 'najlanajla@gmail.com', 19, '2023-12-04 22:05:10', 1),
(134, '::1', 'admin@gmail.com', 11, '2023-12-04 22:08:12', 1),
(135, '::1', 'admin@gmail.com', 11, '2023-12-04 22:31:00', 1),
(136, '::1', 'najla@gmail.com', NULL, '2023-12-04 22:37:46', 0),
(137, '::1', 'najla345@gmail.com', 18, '2023-12-04 22:37:57', 1),
(138, '::1', 'admin@gmail.com', 11, '2023-12-07 04:58:30', 1),
(139, '::1', 'admin@gmail.com', 11, '2023-12-07 07:25:46', 1),
(140, '::1', 'admin@gmail.com', 11, '2023-12-07 08:11:16', 1),
(141, '::1', 'diva@gmail.com', 15, '2023-12-07 08:29:12', 1),
(142, '::1', 'admin@gmail.com', 11, '2023-12-07 08:29:58', 1),
(143, '::1', 'diva@gmail.com', 15, '2023-12-07 09:06:40', 1),
(144, '::1', 'admin@gmail.com', 11, '2023-12-09 00:29:42', 1),
(145, '::1', 'diva@gmail.com', 15, '2023-12-09 00:30:30', 1),
(146, '::1', 'diva@gmail.com', 15, '2023-12-09 00:31:37', 1),
(147, '::1', 'admin@gmail.com', 11, '2023-12-09 02:05:18', 1),
(148, '::1', 'diva@gmail.com', 15, '2023-12-09 02:31:45', 1),
(149, '::1', 'admin@gmail.com', 11, '2023-12-09 03:33:22', 1),
(150, '::1', 'diva@gmail.com', 15, '2023-12-09 03:39:24', 1),
(151, '::1', 'admin@gmail.com', 11, '2023-12-09 04:31:05', 1),
(152, '::1', 'admin@gmail.com', 11, '2023-12-09 08:22:44', 1),
(153, '::1', 'admin@gmail.com', 11, '2023-12-09 20:38:15', 1),
(154, '::1', 'diva@gmail.com', 15, '2023-12-09 20:41:39', 1),
(155, '::1', 'diva@gmail.com', 15, '2023-12-09 20:44:23', 1),
(156, '::1', 'admin@gmail.com', 11, '2023-12-10 06:57:56', 1),
(157, '::1', 'admin@gmail.com', 11, '2023-12-10 07:44:29', 1),
(158, '::1', 'diva@gmail.com', 15, '2023-12-10 07:45:04', 1),
(159, '::1', 'diva@gmail.com', 15, '2023-12-10 07:47:03', 1),
(160, '::1', 'doraemon@gmail.com', 20, '2023-12-10 07:50:50', 1),
(161, '::1', 'doraemon@gmail.com', 20, '2023-12-10 07:54:20', 1),
(162, '::1', 'diva@gmail.com', 15, '2023-12-10 08:00:36', 1),
(163, '::1', 'diva@gmail.com', 15, '2023-12-10 08:07:02', 1),
(164, '::1', 'admin@gmail.com', 11, '2023-12-10 08:28:44', 1),
(165, '::1', 'admin@gmail.com', 11, '2023-12-10 09:41:38', 1),
(166, '::1', 'syifa@gmail.com', 21, '2023-12-10 09:43:09', 1),
(167, '::1', 'diva@gmail.com', 15, '2023-12-10 09:45:01', 1),
(168, '::1', 'najlanadiva@gmail.com', 22, '2023-12-10 09:46:57', 1),
(169, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-10 09:49:40', 0),
(170, '::1', 'najlanadiva@gmail.com', 22, '2023-12-10 09:49:47', 1),
(171, '::1', 'admin@gmail.com', 11, '2023-12-10 09:52:43', 1),
(172, '::1', 'admin@gmail.com', 11, '2023-12-11 03:44:22', 1),
(173, '::1', 'admin@gmail.com', NULL, '2023-12-11 04:17:09', 0),
(174, '::1', 'admin@gmail.com', 11, '2023-12-11 04:17:16', 1),
(175, '::1', 'diva@gmail.com', 15, '2023-12-11 04:22:46', 1),
(176, '::1', 'user123@gmail.com', 23, '2023-12-11 05:23:02', 1),
(177, '::1', 'admin@gmail.com', 11, '2023-12-11 05:34:35', 1),
(178, '::1', 'diva@gmail.com', 15, '2023-12-11 06:07:31', 1),
(179, '::1', 'admin@gmail.com', 11, '2023-12-11 06:12:09', 1),
(180, '::1', 'diva@gmail.com', 15, '2023-12-11 11:00:32', 1),
(181, '::1', 'admin@gmail.com', 11, '2023-12-11 11:02:34', 1),
(182, '::1', 'diva@gmail.com', 15, '2023-12-11 11:08:16', 1),
(183, '::1', 'najlanadiva@gmail.com', 22, '2023-12-11 18:21:27', 1),
(184, '::1', 'najlanadiva@gmail.com', 22, '2023-12-11 18:21:28', 1),
(185, '::1', 'admin@gmail.com', 11, '2023-12-11 18:23:26', 1),
(186, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 01:40:01', 0),
(187, '::1', 'najlanadiva@gmail.com', 22, '2023-12-14 01:40:02', 1),
(188, '::1', 'najlanadiva@gmail.com', 22, '2023-12-14 01:45:25', 1),
(189, '::1', 'user1@gmail.com', 24, '2023-12-14 02:08:57', 1),
(190, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:40:09', 0),
(191, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:40:59', 0),
(192, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:41:16', 0),
(193, '::1', 'admin@gmail.com', 11, '2023-12-14 02:41:36', 1),
(194, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:38', 0),
(195, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:39', 0),
(196, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:39', 0),
(197, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:40', 0),
(198, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:40', 0),
(199, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:41', 0),
(200, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:41', 0),
(201, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:41', 0),
(202, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:42', 0),
(203, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:42', 0),
(204, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:43', 0),
(205, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:43', 0),
(206, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:44', 0),
(207, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:44', 0),
(208, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:45', 0),
(209, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:45', 0),
(210, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:46', 0),
(211, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:46', 0),
(212, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:47', 0),
(213, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:47', 0),
(214, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:48', 0),
(215, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:48', 0),
(216, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:49', 0),
(217, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:49', 0),
(218, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:50', 0),
(219, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:50', 0),
(220, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:51', 0),
(221, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:51', 0),
(222, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:52', 0),
(223, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:52', 0),
(224, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:53', 0),
(225, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:53', 0),
(226, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:54', 0),
(227, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:54', 0),
(228, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:55', 0),
(229, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:55', 0),
(230, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:56', 0),
(231, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:56', 0),
(232, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:57', 0),
(233, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:57', 0),
(234, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:58', 0),
(235, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:58', 0),
(236, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:59', 0),
(237, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:42:59', 0),
(238, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:00', 0),
(239, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:00', 0),
(240, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:01', 0),
(241, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:01', 0),
(242, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:02', 0),
(243, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:02', 0),
(244, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:03', 0),
(245, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:03', 0),
(246, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:03', 0),
(247, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:04', 0),
(248, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:04', 0),
(249, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:05', 0),
(250, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:05', 0),
(251, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:06', 0),
(252, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:06', 0),
(253, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:06', 0),
(254, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:07', 0),
(255, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:07', 0),
(256, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:08', 0),
(257, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:08', 0),
(258, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:09', 0),
(259, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:09', 0),
(260, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:10', 0),
(261, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:10', 0),
(262, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:11', 0),
(263, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:11', 0),
(264, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:12', 0),
(265, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:12', 0),
(266, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:13', 0),
(267, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:13', 0),
(268, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:14', 0),
(269, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:14', 0),
(270, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:15', 0),
(271, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:15', 0),
(272, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:16', 0),
(273, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:16', 0),
(274, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:17', 0),
(275, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:17', 0),
(276, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:18', 0),
(277, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:18', 0),
(278, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:19', 0),
(279, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:19', 0),
(280, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:20', 0),
(281, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:20', 0),
(282, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:21', 0),
(283, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:21', 0),
(284, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:22', 0),
(285, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:22', 0),
(286, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:23', 0),
(287, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:23', 0),
(288, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:24', 0),
(289, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:24', 0),
(290, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:25', 0),
(291, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:25', 0),
(292, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:26', 0),
(293, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:27', 0),
(294, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:27', 0),
(295, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:28', 0),
(296, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:28', 0),
(297, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:29', 0),
(298, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:29', 0),
(299, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:30', 0),
(300, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:30', 0),
(301, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:31', 0),
(302, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:31', 0),
(303, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:32', 0),
(304, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:32', 0),
(305, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:33', 0),
(306, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:33', 0),
(307, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:34', 0),
(308, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:34', 0),
(309, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:35', 0),
(310, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:35', 0),
(311, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:36', 0),
(312, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:36', 0),
(313, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:37', 0),
(314, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:37', 0),
(315, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:38', 0),
(316, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:38', 0),
(317, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:39', 0),
(318, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:39', 0),
(319, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:40', 0),
(320, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:40', 0),
(321, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:41', 0),
(322, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:41', 0),
(323, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:42', 0),
(324, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:42', 0),
(325, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:43', 0),
(326, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:43', 0),
(327, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-14 02:43:44', 0),
(328, '::1', 'najlanadiva@gmail.com', 34, '2023-12-14 02:44:07', 1),
(329, '::1', 'nadiva7@gmail.com', 35, '2023-12-14 02:44:56', 1),
(330, '::1', 'nadiva979@gmail.com', 35, '2023-12-14 02:47:53', 1),
(331, '::1', 'admin@gmail.com', 11, '2023-12-14 02:48:49', 1),
(332, '::1', 'beauty@gmail.com', 36, '2023-12-14 02:56:01', 1),
(333, '::1', 'najla@gmail.com', NULL, '2023-12-14 08:36:52', 0),
(334, '::1', 'najla@gmail.com', 37, '2023-12-14 08:37:07', 1),
(335, '::1', 'beauty@gmail.com', 36, '2023-12-14 08:39:51', 1),
(336, '::1', 'usera1@gmail.com', NULL, '2023-12-14 08:41:31', 0),
(337, '::1', 'usera1@gmail.com', NULL, '2023-12-14 08:41:42', 0),
(338, '::1', 'usera1@gmail.com', NULL, '2023-12-14 08:42:02', 0),
(339, '::1', 'usera1@gmail.com', 24, '2023-12-14 08:42:09', 1),
(340, '::1', 'pretty@gmail.com', 38, '2023-12-14 08:43:54', 1),
(341, '::1', 'admin@gmail.com', 11, '2023-12-14 08:44:26', 1),
(342, '::1', 'admin@gmail.com', 11, '2023-12-14 08:45:48', 1),
(343, '::1', 'najlanadiva@gmail.com', 39, '2023-12-14 08:49:36', 1),
(344, '::1', 'admin@gmail.com', 11, '2023-12-14 08:51:50', 1),
(345, '::1', 'najlanadiva@gmail.com', 39, '2023-12-14 08:55:09', 1),
(346, '::1', 'admin@gmail.com', 11, '2023-12-14 08:56:37', 1),
(347, '::1', 'usera1@gmail.com', 24, '2023-12-14 09:03:33', 1),
(348, '::1', 'divv@gmail.com', 40, '2023-12-14 09:07:19', 1),
(349, '::1', 'najnaj@gmail.com', 41, '2023-12-14 09:09:34', 1),
(350, '::1', 'admin@gmail.com', NULL, '2023-12-14 09:14:22', 0),
(351, '::1', 'admin@gmail.com', NULL, '2023-12-14 09:14:28', 0),
(352, '::1', 'admin@gmail.com', 11, '2023-12-14 09:14:56', 1),
(353, '::1', 'admin@gmail.com', 11, '2023-12-14 09:20:22', 1),
(354, '::1', 'najlanadiva@gmail.com', 42, '2023-12-14 09:21:12', 1),
(355, '::1', 'admin@gmail.com', 11, '2023-12-14 09:22:40', 1),
(356, '::1', 'admin@gmail.com', 11, '2023-12-14 09:27:31', 1),
(357, '::1', 'admin@gmail.com', 11, '2023-12-14 20:51:13', 1),
(358, '::1', 'najlanadiva@gmail.com', 42, '2023-12-15 09:07:26', 1),
(359, '::1', 'admin@gmail.com', 11, '2023-12-15 09:08:53', 1),
(360, '::1', 'admin@gmail.com', 11, '2023-12-15 09:11:36', 1),
(361, '::1', 'admin@gmail.com', 11, '2023-12-15 09:19:29', 1),
(362, '::1', 'user1234@gmail.com', 43, '2023-12-15 09:25:59', 1),
(363, '::1', 'admin@gmail.com', 11, '2023-12-15 09:27:11', 1),
(364, '::1', 'najlanadiva@gmail.com', 42, '2023-12-15 09:36:59', 1),
(365, '::1', 'beauty@gmail.com', 44, '2023-12-15 10:07:45', 1),
(366, '::1', 'beauty@gmail.com', 44, '2023-12-15 10:08:17', 1),
(367, '::1', 'admin@gmail.com', 11, '2023-12-18 00:26:25', 1),
(368, '::1', 'admin@gmail.com', 11, '2023-12-18 07:39:40', 1),
(369, '::1', 'najlanadiva@gmail.com', 42, '2023-12-18 07:41:00', 1),
(370, '::1', 'admin@gmail.com', 11, '2023-12-18 07:47:14', 1),
(371, '::1', 'najlanadiva@gmail.com', 45, '2023-12-18 08:04:39', 1),
(372, '::1', 'admin@gmail.com', 11, '2023-12-18 09:09:58', 1),
(373, '::1', 'najlanadiva@gmail.com', 45, '2023-12-18 09:29:24', 1),
(374, '::1', 'admin@gmail.com', 11, '2023-12-18 17:14:05', 1),
(375, '::1', 'admin@gmail.com', 11, '2023-12-18 17:51:16', 1),
(376, '::1', 'admin@gmail.com', 11, '2023-12-18 18:06:15', 1),
(377, '::1', 'najlanadiva@gmail.com', 45, '2023-12-18 18:07:37', 1),
(378, '::1', 'admin@gmail.com', 11, '2023-12-18 18:09:42', 1),
(379, '::1', 'admin@gmail.com', 11, '2023-12-18 23:08:59', 1),
(380, '::1', 'admin@gmail.com', 11, '2023-12-18 23:44:20', 1),
(381, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-18 23:46:01', 0),
(382, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-18 23:46:58', 0),
(383, '::1', 'najlanadiva@gmail.com', 46, '2023-12-18 23:47:04', 1),
(384, '::1', 'admin@gmail.com', NULL, '2023-12-18 23:49:49', 0),
(385, '::1', 'admin@gmail.com', 11, '2023-12-18 23:49:57', 1),
(386, '::1', 'najla@gmail.com', 47, '2023-12-18 23:51:59', 1),
(387, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 00:06:22', 1),
(388, '::1', 'admin@gmail.com', 11, '2023-12-19 00:13:43', 1),
(389, '::1', 'najla@gmail.com', 47, '2023-12-19 00:38:09', 1),
(390, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 00:38:37', 1),
(391, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 00:45:44', 1),
(392, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 01:09:47', 1),
(393, '::1', 'admin@gmail.com', 11, '2023-12-19 01:11:45', 1),
(394, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 01:26:59', 1),
(395, '::1', 'admin@gmail.com', 11, '2023-12-19 01:30:25', 1),
(396, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 01:33:51', 1),
(397, '::1', 'najlanadiva@gmail.com', 46, '2023-12-19 01:49:29', 1),
(398, '::1', 'admin@gmail.com', 11, '2023-12-19 02:41:07', 1),
(399, '::1', 'najlanadiva@gmail.com', 48, '2023-12-19 02:42:03', 1),
(400, '::1', 'admin@gmail.com', 11, '2023-12-19 02:53:15', 1),
(401, '::1', 'admin@gmail.com', 11, '2023-12-19 03:33:56', 1),
(402, '::1', 'najlanadiva@gmail.com', 48, '2023-12-19 03:34:32', 1),
(403, '::1', 'najlanadiva@gmail.com', 48, '2023-12-19 07:30:15', 1),
(404, '::1', 'admin@gmail.com', 11, '2023-12-19 07:33:01', 1),
(405, '::1', 'admin@gmail.com', 11, '2023-12-21 05:10:53', 1),
(406, '::1', 'najlanadiva@gmail.com', 48, '2023-12-21 05:12:05', 1),
(407, '::1', 'admin@gmail.com', 11, '2023-12-22 23:09:58', 1),
(408, '::1', 'najlanadiva@gmail.com', NULL, '2023-12-22 23:10:32', 0),
(409, '::1', 'najlanadiva@gmail.com', 48, '2023-12-22 23:10:39', 1),
(410, '::1', 'najlanadiva@gmail.com', 48, '2023-12-23 22:58:26', 1),
(411, '::1', 'najlanadiva@gmail.com', 48, '2023-12-24 04:00:22', 1),
(412, '::1', 'najlanadiva@gmail.com', 48, '2023-12-24 04:51:52', 1),
(413, '::1', 'admin@gmail.com', 11, '2023-12-24 04:54:23', 1),
(414, '::1', 'admin@gmail.com', 11, '2023-12-25 09:29:24', 1),
(415, '::1', 'najlanadiva@gmail.com', 49, '2023-12-25 09:39:46', 1),
(416, '::1', 'admin@gmail.com', 11, '2023-12-25 10:01:42', 1),
(417, '::1', 'admin@gmail.com', 11, '2024-05-13 23:58:21', 1),
(418, '::1', 'admin@gmail.com', 11, '2024-05-22 01:51:54', 1),
(419, '::1', 'admin@gmail.com', 11, '2024-05-28 08:56:33', 1),
(420, '::1', 'admin@gmail.com', 11, '2024-05-28 09:07:30', 1),
(421, '::1', 'diva@gmail.com', NULL, '2024-05-28 09:12:23', 0),
(422, '::1', 'diva@gmail.com', NULL, '2024-05-28 09:13:08', 0),
(423, '::1', 'diva@gmail.com', NULL, '2024-05-28 09:13:15', 0),
(424, '::1', 'diva@gmail.com', 50, '2024-05-28 09:13:46', 1),
(425, '::1', 'admin@gmail.com', 11, '2024-06-01 02:45:09', 1),
(426, '::1', 'admin@gmail.com', NULL, '2024-06-01 03:21:06', 0),
(427, '::1', 'admin@gmail.com', 11, '2024-06-01 03:21:11', 1),
(428, '::1', 'admin@gmail.com', 11, '2024-06-01 03:32:19', 1),
(429, '::1', 'admin@gmail.com', 11, '2024-06-01 05:42:59', 1),
(430, '::1', 'admin@gmail.com', 11, '2024-06-01 06:09:40', 1),
(431, '::1', 'admin@gmail.com', 11, '2024-06-01 06:33:58', 1),
(432, '::1', 'diva@gmail.com', NULL, '2024-06-01 09:41:58', 0),
(433, '::1', 'nadiva345@gmail.com', 51, '2024-06-01 09:43:36', 1),
(434, '::1', 'nadiva345@gmail.com', 51, '2024-06-01 09:44:33', 1),
(435, '::1', 'admin@gmail.com', 11, '2024-06-01 10:02:03', 1),
(436, '::1', 'nadiva345@gmail.com', 51, '2024-06-01 10:05:35', 1),
(437, '::1', 'nadiva345@gmail.com', 51, '2024-06-01 10:42:46', 1),
(438, '::1', 'admin@gmail.com', 11, '2024-06-01 10:44:02', 1),
(439, '::1', 'admin@gmail.com', 11, '2024-06-01 10:48:28', 1),
(440, '::1', 'admin@gmail.com', 11, '2024-06-01 23:03:27', 1),
(441, '::1', 'admin@gmail.com', 11, '2024-06-02 00:08:50', 1),
(442, '::1', 'admin@gmail.com', 11, '2024-06-02 00:19:08', 1),
(443, '::1', 'admin@gmail.com', 11, '2024-06-02 00:54:16', 1),
(444, '::1', 'admin@gmail.com', 11, '2024-06-02 01:09:19', 1),
(445, '::1', 'admin@gmail.com', 11, '2024-06-02 01:09:20', 1),
(446, '::1', 'admin@gmail.com', 11, '2024-06-02 06:26:46', 1),
(447, '::1', 'admin@gmail.com', 11, '2024-06-02 06:28:01', 1),
(448, '::1', 'nadiva345@gmail.com', 51, '2024-06-02 06:49:50', 1),
(449, '::1', 'nadiva345@gmail.com', 51, '2024-06-02 06:52:20', 1),
(450, '::1', 'admin@gmail.com', 11, '2024-06-02 07:10:49', 1),
(451, '::1', 'admin@gmail.com', 11, '2024-06-02 07:14:36', 1),
(452, '::1', 'admin@gmail.com', 11, '2024-06-02 08:51:40', 1),
(453, '::1', 'admin@gmail.com', 11, '2024-06-02 10:20:41', 1),
(454, '::1', 'admin@gmail.com', 11, '2024-06-02 13:51:38', 1),
(455, '::1', 'admin@gmail.com', 11, '2024-06-02 20:32:49', 1),
(456, '::1', 'admin@gmail.com', 11, '2024-06-02 23:41:34', 1),
(457, '::1', 'admin@gmail.com', 11, '2024-06-03 00:19:38', 1),
(458, '::1', 'admin@gmail.com', 11, '2024-06-03 01:01:05', 1),
(459, '::1', 'admin@gmail.com', 11, '2024-06-03 03:33:36', 1),
(460, '::1', 'admin@gmail.com', NULL, '2024-06-04 00:47:01', 0),
(461, '::1', 'admin@gmail.com', 11, '2024-06-04 00:47:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` varchar(30) NOT NULL,
  `idKategori` varchar(30) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `caraPemakaian` varchar(255) NOT NULL,
  `komposisiBarang` varchar(255) NOT NULL,
  `klaimBarang` varchar(255) NOT NULL,
  `tanyaJawab` varchar(255) NOT NULL,
  `noBpom` varchar(20) NOT NULL,
  `hargaBarang` int(6) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `idKategori`, `namaBarang`, `deskripsi`, `caraPemakaian`, `komposisiBarang`, `klaimBarang`, `tanyaJawab`, `noBpom`, `hargaBarang`, `gambar`) VALUES
('AC3456', 'K1', 'serum somethinc', 'bagus', 'oleskan secukupnya', 'Encapsulated UV Filter Titanium Dioxide Benzophenone-4 (UVB absorber)', 'Gentle pH Balancer ', 'Apa perbedaan produk ini dengan serum eksfoliasi Somethinc lainnya? Somethinc memiliki rangkaian serum eksfoliasi yang dapat disesuaikan dengan jenis & profil kulitmu ', 'NA18211200050', 150000, 'stoner_3.png'),
('BT89970', 'K1', 'Glow Essence Toner', 'Diperkaya dengan kandungan Pro-Vitamin B5 yang melembabkan & menjadikan kulit wajah tampak lebih sehat & glowing sepanjang hari.', 'tetes', 'Encapsulated UV Filter Titanium Dioxide Benzophenone-4 (UVB absorber)', 'Shot Down Your Acne ', 'Apa kelebihan produk ini? Mudah diaplikasikan kembali tanpa menggeser makeup, No White Cast, tidak lengket, & memberikan tampilan Healthy Glow Finish!', 'NA897654389', 8250009, 'ssabun_5.jpg'),
('So1', 'K2', 'Lipstik SMo', 'bagus', '1. Bersihkan wajah dengan Somethinc Low pH Gentle Jelly Cleanser 2. Gunakan Somethinc Skin Goals Vita Propolis Glow Essence Toner dengan gerakan menepuk ke seluruh area wajah & leher 3. Lanjutkan dengan serum Somethinc favoritmu', 'Japanese Mugwort & Tea Tree', '#BrightBeautifully Skin in 28 Days! ', 'Apakah cocok untuk penggunaan sehari-hari?  Ya. SKIN GOALS Vita Propolis Glow Essence Toner ini cocok digunakan setiap hari, bahkan pagi & malam.   Apakah bisa double toning dengan Supple Power Essence Toner? Jika masalah utama kulitmu adalah kulit kusam ', 'NA897654389', 67000, 'scream_9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `Id_pemesanan` int(5) NOT NULL,
  `idBarang` varchar(30) NOT NULL,
  `jumlahPesanan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` varchar(30) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
('K1', 'Skincare'),
('K2', 'Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `Id` int(11) NOT NULL,
  `metodePembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`Id`, `metodePembayaran`) VALUES
(23, 'BSI'),
(28, 'Paytren');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pengiriman`
--

CREATE TABLE `metode_pengiriman` (
  `Id` int(11) NOT NULL,
  `metodePengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pengiriman`
--

INSERT INTO `metode_pengiriman` (`Id`, `metodePengiriman`) VALUES
(18, 'JNE'),
(21, 'JNE Express');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1669862883, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `metodePembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_pemesanan` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `metodePembayaran` varchar(20) NOT NULL,
  `metodePengiriman` varchar(20) NOT NULL,
  `jumlahBarang` int(11) NOT NULL,
  `alamatPelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`Id_pemesanan`, `email`, `metodePembayaran`, `metodePengiriman`, `jumlahBarang`, `alamatPelanggan`) VALUES
(148, '', 'BSI', 'JNE', 1, ''),
(149, '', 'Paytren', 'JNE', 2, ''),
(150, '', 'BSI', 'JNE', 2, ''),
(151, '', 'BSI', 'JNE', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `metodePengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `Id` int(11) NOT NULL,
  `namaPenjual` varchar(30) NOT NULL,
  `alamatPenjual` varchar(50) NOT NULL,
  `emailPenjual` varchar(50) NOT NULL,
  `socialMedia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`Id`, `namaPenjual`, `alamatPenjual`, `emailPenjual`, `socialMedia`) VALUES
(9, 'Somethinc', 'Padang, Indonesia', 'somethinc@beautyhaul.com', '@somethincofficial');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `alamatPelanggan` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `alamatPelanggan`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'admin@gmail.com', 'admin', 'jalan, Kelurahan 1, Kecamatan 1, Padang, Sumatera Barat, Indonesia, 23456', '$2y$10$aTTlVG7lHOts4ivNSjoyw.RxtNIiNArU3Jpx3ULVKE4ZV6IyIsNrS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-24 19:08:41', '2022-12-24 19:08:41', NULL),
(50, 'diva@gmail.com', 'diva123', '', '$2y$10$aTTlVG7lHOts4ivNSjoyw.RxtNIiNArU3Jpx3ULVKE4ZV6IyIsNrS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-05-28 09:12:58', '2024-05-28 09:12:58', NULL),
(51, 'nadiva345@gmail.com', 'nadiva345', 'Jalan Merapi, Kelurahan ree, Kecamatan 1, Jakarta, DKI Jakarta, Indonesia, 43221', '$2y$10$H9fcQYdTLa5AT3GtAA4FdulxOr6prx9pzzUU7L0Xt8lV6vGE1xFq2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-01 09:43:22', '2024-06-01 09:43:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `fk_idKategori` (`idKategori`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`idBarang`,`Id_pemesanan`) USING BTREE,
  ADD KEY `id_pemesanan` (`Id_pemesanan`,`idBarang`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`metodePembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_pemesanan`),
  ADD KEY `metodePembayaran` (`metodePembayaran`),
  ADD KEY `metodePengiriman` (`metodePengiriman`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`metodePengiriman`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `Id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`);

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
