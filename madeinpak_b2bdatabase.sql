-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2022 at 02:12 PM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madeinpak_b2bdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `-product_tag`
--

CREATE TABLE `-product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Edward Camacho', 'fuguny@mailinator.com', NULL, '$2y$10$YkMSOX70niwoUOAFZksZQO.9WNdRhiMgD0G.y3e9lpjQk5Zs9O9RO', NULL, NULL, '2020-11-19 00:56:15', '2020-11-19 00:56:15'),
(5, 'Waheed Sindhani', 'admin@example.com', NULL, '$2y$10$XtDxh4b7yw3.Ph35vmuXmuUmU2uO81UsnKckYMH9ufzT1zNQHA67m', NULL, NULL, '2020-11-19 01:09:57', '2020-11-19 01:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeoforigin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shelf_life` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fresh',
  `inventory` bigint(20) UNSIGNED NOT NULL DEFAULT 1200,
  `weight` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `profile_photo_path`, `status`, `suspended`, `provider_id`, `created_at`, `updated_at`) VALUES
(24, '15615', 'qwerty@123.com', NULL, '$2y$10$wrNYYEeMbxgn/NLkeOl2Yuy3BpftaoFwK5Ug54wX/RNMusGgGuhUG', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-07 10:10:40', '2020-12-07 10:10:40'),
(25, 'Waheed Sindhani', 'waheed.eliccs@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '113970270698613935207', '2020-12-07 11:08:10', '2020-12-07 11:08:10'),
(26, 'BilawalBasheer', 'test@test.com', NULL, '$2y$10$aOShjmn3FKcI3dq2E.FOLu9ASOZOEHHTEM1BoL9pJIGaRy43bnMni', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 07:15:56', '2020-12-08 07:15:56'),
(27, 'BilawalBasheer', 'buyer@gmail.com', NULL, '$2y$10$o56JKY8b3gdNWgO8UG7HPu21DGwjUUpso7DeaHh0T2GAX8IUy3o46', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 07:28:19', '2020-12-08 07:28:19'),
(28, 'bilawal', 'bilawalbasheer@gmail.com', NULL, '$2y$10$zia9F1Dnz8SDyx/JzOokA.343nnH1xY9qn9wv48/ppj6Xb08mhEtC', NULL, 'customer', NULL, 1, 0, NULL, '2020-12-08 12:58:37', '2020-12-09 12:50:13'),
(29, 'abad ullah', 'abadullah572@gmail.com', NULL, NULL, NULL, 'customer', NULL, 1, 0, '101306821795336780130', '2020-12-08 17:10:50', '2020-12-09 12:50:07'),
(31, 'Waheed Sindhani', 'waheed33.eliccs@gmail.com', NULL, '$2y$10$W/EVajaKBU4UEuEmvPJhZ.KXCJgGTjDTdXtpLNG7Cj40zh5ZtqqXG', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 20:23:17', '2020-12-08 20:23:17'),
(32, 'Waheed Sindhani', 'waheed34.eliccs@gmail.com', NULL, '$2y$10$8KcP2Nsyh.OPfJDjxL7HpOsPkoTcH81VVCIxseyALQZwLkwhtCfEy', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 20:24:17', '2020-12-08 20:24:17'),
(33, 'Waheed Sindhani', 'waheed55.eliccs@gmail.com', NULL, '$2y$10$IDEOFOFVpL/83avAd1a56eAKMlXnUihNfKZBxtfE/sTp9150m/G8O', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 20:24:39', '2020-12-08 20:24:39'),
(34, 'Waheed Sindhani', 'waheed555.eliccs@gmail.com', NULL, '$2y$10$ixWl05k39yWaB269BIAqp.bU86YJwO57wz8F1/p5BnSDD3C9AFk0G', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-08 20:25:22', '2020-12-08 20:25:22'),
(35, 'Shah Fahad', 'kingshahfahad6@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '106257241724070126904', '2020-12-10 06:45:35', '2020-12-10 06:45:35'),
(36, 'today10', 'today10@gmail.com', NULL, '$2y$10$6QZBqpVzMnWyJVsiKrvNm.7F9DlARwpDAyM5ptHxy8wIMA4ClBCQ2', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-10 12:08:37', '2020-12-10 12:08:37'),
(37, 'Arisha Kamran', 'arishakamran1997@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '107884032896189212735', '2020-12-11 09:50:10', '2020-12-11 09:50:10'),
(38, 'sasas', 'justchillbabyyyyy@gmail.com', NULL, '$2y$10$./ty0UHvXjT564qtGj5cs.JH5GDsFsrlSnOBMOqA979BBoe8pkL0S', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-11 11:12:28', '2020-12-11 11:12:28'),
(39, 'Ten Tech', 'tentech123@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '113928410733756237643', '2020-12-11 11:16:03', '2020-12-11 11:16:03'),
(40, 'Bilawal Shah', 'bilawalb92@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '104180443152798232723', '2020-12-11 11:26:13', '2020-12-11 11:26:13'),
(41, 'BNTech News', 'bilawalbasheershah@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '111075108583955213027', '2020-12-11 11:28:40', '2020-12-11 11:28:40'),
(42, 'Muneer Ahmad', 'munirahmad4848@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '115418745392220185083', '2020-12-11 11:43:48', '2020-12-11 11:43:48'),
(43, 'USMAN JADOON', 'USMAN11@GMAIL.COM', NULL, '$2y$10$lZwnhNo33zrOHVSTAuwxb.QfrBK957185.tFBM5e4qeyC0CvH7YLK', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-11 12:18:17', '2020-12-11 12:18:17'),
(44, 'Arham Ali', 'arhamalibilgrami@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '104407246897004260696', '2020-12-11 12:47:09', '2020-12-11 12:47:09'),
(45, 'Cplus Soft', 'cplusoft@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '114132144558409785442', '2020-12-12 10:12:24', '2020-12-12 10:12:24'),
(47, 'test', 'test@test.co', NULL, '$2y$10$jReulrVUvqUv1eRyXGCF.eTyHub6nXNCOurQB77eQKnDq9Evzb/tW', NULL, 'customer', NULL, 0, 0, NULL, '2020-12-14 14:01:11', '2020-12-14 14:01:11'),
(48, 'Drake Wright', 'Hamid@gmail.com', NULL, '$2y$10$KFPoSnUVkaWXBuDMMzBqiOwWD98i.rp7NXf9oYSuklizJqS26fugG', NULL, 'customer', NULL, 0, 0, NULL, '2021-01-04 06:16:14', '2021-01-04 06:16:14'),
(49, 'Gamer Z', 'rohait007@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '117781598519538045424', '2021-01-05 08:24:24', '2021-01-05 08:24:24'),
(50, 'zeeeshan', 'zeeshan@gmail.com', NULL, '$2y$10$HKP5Ai6LcnFAvqC8C8b5R.ZOijjO4.VsYtJSp80040dcMxzcfpdOm', NULL, 'customer', NULL, 0, 0, NULL, '2021-01-07 15:19:13', '2021-01-07 15:19:13'),
(51, 'tajamul hussain', 'tajamulhussain986@gmail.com', NULL, NULL, NULL, 'customer', NULL, 1, 0, '107626716779788347931', '2021-01-14 07:24:08', '2021-01-14 07:27:55'),
(52, 'Arisha Kamran', 'arishakamran27@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '109283118885504213640', '2021-03-08 10:18:05', '2021-03-08 10:18:05'),
(53, 'Muneer Ahmad', 'user7@gmail.com', NULL, '$2y$10$ftc4xqiXI9OOHOixSvlbjO86756rKbPh7ow8VWu234Xscydx1NZKO', NULL, 'customer', NULL, 0, 0, NULL, '2021-03-31 21:35:33', '2021-03-31 21:35:33'),
(54, 'LIO', 'lio@gmail.com', NULL, '$2y$10$s/2D/uO/Qal2P45vTMyciOpOeFBBEeIzvDSwhGuyjJO22gEbPCFfS', NULL, 'customer', NULL, 0, 0, NULL, '2021-03-31 21:56:48', '2021-03-31 21:56:48'),
(55, 'sit', 'sit@gmail.com', NULL, '$2y$10$acLFGKTzSXF4PE.wgFl6GOaN/RGvYX/na/V.0EKuoRZ0JxhjH9zcK', NULL, 'customer', NULL, 0, 0, NULL, '2021-03-31 22:20:17', '2021-03-31 22:28:13'),
(56, 'Adil Aroma', 'thearomabakers@gmail.com', NULL, NULL, NULL, 'customer', NULL, 0, 0, '111887629589884730896', '2021-04-03 07:32:45', '2021-04-03 07:32:45'),
(57, 'abcde', 'abcdefgh@gmail.com', NULL, '$2y$10$PBbwltle00U2mbaW.w0WIOhlzBETRl6I8hjFFCs0sU9cB.X8PC4IK', NULL, 'customer', NULL, 0, 0, NULL, '2021-04-03 07:41:44', '2021-04-03 07:41:44'),
(58, 'new buyer', 'newbuyer@gmail.com', NULL, '$2y$10$hYsF38T0VUdw1WcBL0y3Keuwz5MVarZCivLUWuf2KkSDaVcP2Xknu', NULL, 'customer', NULL, 0, 0, NULL, '2021-05-06 05:30:07', '2021-05-06 05:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `buyer_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `buyer_id`) VALUES
(1, 160, 27),
(26, 166, 37),
(37, 166, 45),
(24, 171, 37),
(23, 168, 37),
(22, 167, 37),
(36, 160, 36),
(29, 167, 39),
(28, 168, 38),
(27, 167, 38),
(30, 168, 39),
(31, 160, 41),
(32, 192, 43),
(33, 173, 43),
(38, 167, 45),
(39, 172, 45),
(40, 168, 45),
(41, 166, 36),
(42, 167, 36),
(43, 180, 36),
(44, 172, 36),
(45, 171, 36),
(46, 172, 48);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(115, 'Agriculture', NULL, '2020-12-08 13:14:31', '2020-12-08 13:14:31'),
(116, 'Clothing', NULL, '2020-12-08 13:15:07', '2020-12-08 13:15:07'),
(117, 'Meat', NULL, '2020-12-08 13:15:37', '2020-12-08 13:15:37'),
(118, 'Industry', NULL, '2020-12-08 13:16:19', '2020-12-08 13:16:19'),
(119, 'Minerals', NULL, '2020-12-11 12:38:58', '2020-12-11 12:38:58'),
(120, 'Cars', NULL, '2021-03-31 22:32:46', '2021-03-31 22:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nameOfCompany` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typesOfCompany` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceoname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishmentYear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headOffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionalOffice1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionalOffice2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionalOffice3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryAddress1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryAddress2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryAddress3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GpsOfFactory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headOfficeLandline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headOfficeMobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webSiteUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faxNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalEmployee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyExport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listOfCountries` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearestPorts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forigenOffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntnNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webocID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fillerUpToDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntnCertificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamberOfCommerece` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proTexCertificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annualRs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankStatename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seller_id` int(10) UNSIGNED DEFAULT NULL,
  `bankName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankBranch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `vendor_id`, `nameOfCompany`, `typesOfCompany`, `ceoname`, `establishmentYear`, `headOffice`, `regionalOffice1`, `regionalOffice2`, `regionalOffice3`, `factoryAddress1`, `factoryAddress2`, `factoryAddress3`, `GpsOfFactory`, `headOfficeLandline`, `headOfficeMobile`, `email`, `webSiteUrl`, `faxNumber`, `totalEmployee`, `companyExport`, `listOfCountries`, `nearestPorts`, `portName`, `forigenOffice`, `ntnNo`, `gstNo`, `webocID`, `fillerUpToDate`, `ntnCertificate`, `chamberOfCommerece`, `proTexCertificate`, `annualRs`, `bankStatename`, `accountNumber`, `active`, `created_at`, `updated_at`, `seller_id`, `bankName`, `bankBranch`, `branchCode`) VALUES
(1, 1, 'Gutierrez and Nielsen Associates', 'Gilliam and Torres Co', 'Leilani Mullins', '1997-02-12', 'Voluptas sunt assum', 'Aut voluptatibus qua', 'Quis ut ut ea atque', 'Dolores mollit quis', '153 Green Clarendon Court', 'Quaerat corporis ame', 'Qui consequuntur con', 'Doloribus est ipsa', '+1 (599) 353-7534', '+1 (296) 554-5923', 'zumivigar@mailinator.com', 'https://www.midez.org.au', 'https://www.hyvasybicowol.cm', '35', 'Morrison Duffy Traders', 'Lorem voluptatem nos', 'Voluptatem distincti', 'Hanae Rosales', 'Accusantium doloribu', 'Inventore nobis dict', 'Qui est doloremque u', 'Voluptas voluptatem', '30-Jan-2009', 'Iure exercitationem', 'Ut sit eos reprehen', 'Possimus corrupti', 'Velit laboris dicta', 'Jennifer Morton', '21', 7, '2020-11-20 00:54:43', '2020-11-20 00:54:43', 2, NULL, NULL, NULL),
(2, 1, 'Reid and Jacobson Associates', 'Barrera Miller Co', 'Fritz Lamb', '2008-05-27', 'Autem voluptas atque', 'Incididunt itaque te', 'Id inventore laborum', 'Quis assumenda maxim', '72 North Cowley Parkway', 'Qui alias dolore rep', 'Incididunt sit dolor', 'Voluptas quae obcaec', '+1 (827) 463-1839', '+1 (414) 119-4238', 'fyviry@mailinator.com', 'https://www.pekytadotamyl.net', 'https://www.qimemomusyno.ws', '31', 'Dillard and Myers LLC', 'Aliqua Eum dicta ve', 'Unde qui quam amet', 'Lacey Cline', 'Odit vel cumque cons', 'Harum iure provident', 'Nihil culpa eum cumq', 'Nihil earum nulla po', '31-Aug-1976', 'Sit laboriosam mod', 'In molestias illo ut', 'Voluptas perspiciati', 'Blanditiis et dolor', 'Dane Daniels', '11', 48, '2020-11-20 02:25:55', '2020-11-20 02:25:55', 2, NULL, NULL, NULL),
(3, 1, 'Hayden and Ochoa Traders', 'Day and Diaz LLC', 'Penelope Hopkins', '2000-04-21', 'Dolorem ea tempor at', 'Similique nihil ut i', 'Non doloribus mollit', 'Sit accusamus aut co', '54 Oak Lane', 'Molestias in consequ', 'Autem voluptate eius', 'Dolore in at non rem', '+1 (704) 451-7584', '+1 (667) 371-1126', 'rihugo@mailinator.com', 'https://www.syzetuzupof.me', 'https://www.pygunoguvu.in', '68', 'Clayton and Cain Co', 'Beatae sunt quod dic', 'Voluptatem enim veri', 'Sylvester Lara', 'Velit est dicta accu', 'Magni omnis quasi do', 'Dolores sed tempore', 'Molestiae repellendu', '03-May-1981', 'Quod exercitation qu', 'Neque dolore praesen', 'Eu animi lorem non', 'Minima occaecat aut', 'Talon Moran', '642', 1, '2020-11-20 02:47:01', '2020-11-20 02:47:01', 1, NULL, NULL, NULL),
(4, 1, 'Goodman and Mcbride Traders', 'Sanchez Stout Trading', 'Haviva Shannon', '1993-08-01', 'Voluptas dignissimos', 'Perspiciatis laudan', 'Adipisicing irure om', 'Facere excepturi et', '370 West Clarendon Street', 'Laboris ratione fuga', 'Est magni nulla nost', 'Reprehenderit neque', '+1 (964) 378-7791', '+1 (443) 306-3895', 'cysajol@mailinator.com', 'https://www.qysuhyq.me', 'https://www.nujiqywabacu.co', '44', 'Barrett and Hubbard Trading', 'Assumenda in tempore', 'At sit quidem aliqu', 'Donovan Boyer', 'Sapiente cum veniam', 'Non beatae dolor sae', 'Mollitia qui est ut', 'Voluptatum accusamus', '02-Apr-1991', 'Animi at alias eos', 'Temporibus odit aute', 'Non impedit laborio', 'Ut amet proident e', 'Unity Pennington', '432', 96, '2020-11-20 09:10:25', '2020-11-20 09:10:25', 14, NULL, NULL, NULL),
(5, 1, 'Dunlap and Workman Inc', 'Huber Sandoval Inc', 'Dale Haley', '1994-03-18', 'Ut rerum minima comm', 'Ab recusandae Sapie', 'Adipisicing praesent', 'Veniam dolore sunt', '46 Oak Boulevard', 'Perspiciatis volupt', 'Lorem laboriosam la', 'Quis nostrud in volu', '+1 (507) 889-9085', '+1 (943) 531-3547', 'quhyp@mailinator.com', 'https://www.wysulekikunose.us', 'https://www.pisyqoharanyxa.info', '64', 'Burris and Cline Associates', 'Tenetur et error eos', 'Do nesciunt dolores', 'Amelia Mullen', 'Veniam possimus ve', 'Aperiam mollit in ad', 'Dolor quas magnam cu', 'Quos facilis molesti', '07-Mar-2020', 'Nemo velit dignissim', 'Quia ut exercitation', 'Rerum voluptates do', 'Tempor dolores non e', 'Allegra Ferguson', '439', 97, '2020-11-21 04:34:31', '2020-11-21 04:34:31', 19, NULL, NULL, NULL),
(6, 1, 'Callahan Newton Associates', 'Arnold and Pollard Plc', 'Serina Knox', '2018-10-13', 'In qui et dolorem qu', 'Tempora suscipit dol', 'Repudiandae neque re', 'Vitae ipsum adipisi', '523 South Old Lane', 'Labore ut omnis quid', 'Aut exercitationem r', 'Proident ullamco el', '+1 (837) 675-8586', '+1 (438) 796-8504', 'rohydygeto@mailinator.com', 'https://www.feqamedaqydo.ca', 'https://www.zevuhutoxezek.biz', '32', 'Herman and Golden Co', 'Numquam excepteur de', 'Maxime autem ullam e', 'Orlando Lane', 'Omnis nisi minus sus', 'Et voluptatem ullamc', 'Quia sed tenetur del', 'Possimus quis adipi', '25-Sep-2020', 'Consequatur occaeca', 'Rerum qui tenetur ac', 'Eligendi dolorum ut', 'Ipsum quae sint exce', 'Mona Franks', '664', 100, '2020-11-21 04:45:43', '2020-11-21 04:45:43', 20, NULL, NULL, NULL),
(7, 1, 'Keller Meadows Traders', 'Gallegos and Contreras Plc', 'Olympia Huber', '2000-11-25', 'Aspernatur voluptate', 'Quos expedita soluta', 'Laboris maiores volu', 'Voluptas ipsam accus', '43 Green Clarendon Extension', 'Omnis enim excepturi', 'Ea aut aut quaerat i', 'Atque sed facere id', '+1 (258) 682-6023', '+1 (678) 207-2651', 'xuwagukud@mailinator.com', 'https://www.faj.cc', 'https://www.voro.mobi', '9', 'Emerson Hoffman Trading', NULL, 'Et fugit voluptatem', 'Portia Keith', 'Quod molestiae sed c', 'Ipsum cumque ut ab r', 'Dolores non temporib', 'Nobis dolorem quibus', '2013-05-25', NULL, 'Culpa saepe vel et', 'Labore recusandae D', 'Sunt consequatur ut', NULL, '400', 0, '2020-11-22 00:51:35', '2020-11-22 00:51:35', 22, NULL, NULL, NULL),
(8, 1, 'Morris Cannon Traders', 'Sloan Francis LLC', 'April Snow', '2003-06-06', 'Deleniti expedita od', 'Totam blanditiis nat', 'Ex aut mollitia cill', 'Mollitia odit amet', '68 South Green Milton Lane', 'Qui sint ea pariatur', 'Cum mollitia atque f', 'Natus architecto ess', '+1 (475) 659-6759', '+1 (963) 495-5117', 'quba@mailinator.com', 'https://www.norigaxotiwudy.cc', 'https://www.zudyrobuxozoki.org', '88', 'Dominguez and Wright Associates', NULL, 'Consequatur Anim co', 'Ali Oliver', 'Quis sed suscipit lo', 'Repellendus Qui eni', 'Aut qui nostrud opti', 'Autem autem eveniet', '2017-10-10', NULL, 'Voluptas qui qui Nam', 'At accusamus repelle', 'Expedita praesentium', NULL, '256', 0, '2020-11-22 01:08:18', '2020-11-22 01:08:18', 22, NULL, NULL, NULL),
(9, 1, 'Lloyd Mcintyre Inc', 'Rose and Blackburn Associates', 'Daniel Middleton', '2004-03-22', 'Voluptas id error im', 'Et quia alias minim', 'Quos occaecat eaque', 'Omnis duis sapiente', '70 Clarendon Boulevard', 'Dolores rerum rem ve', 'Dolorem exercitation', 'Culpa sed omnis ex', '+1 (313) 905-6157', '+1 (698) 586-7569', 'xuxozoca@mailinator.com', 'https://www.jyc.com', 'https://www.dexuv.ws', '18', 'Bradford Hines Trading', NULL, 'Perferendis eius off', 'Tad Grant', 'Ipsa dolore mollit', 'Magnam qui autem eni', 'Molestias esse qui', 'Cillum et enim ad do', '2012-08-11', NULL, 'Do voluptatem tempo', 'Expedita beatae cons', 'Culpa culpa do odit', NULL, '722', 0, '2020-11-22 01:10:09', '2020-11-22 01:10:09', 24, NULL, NULL, NULL),
(10, 1, 'Foster and Molina Plc', 'Cunningham Rush Trading', 'Tanya Potts', '1975-02-17', 'Qui quis accusantium', 'Hic quo soluta repud', 'Commodi incididunt l', 'Consequatur Sit eiu', '789 East First Lane', 'Nostrud reprehenderi', 'Qui incididunt saepe', 'Neque aute enim dolo', '+1 (929) 458-1448', '+1 (334) 521-6865', 'bimuz@mailinator.com', 'https://www.dimixosef.com', 'https://www.kimasyso.biz', '35', 'Ingram Landry Traders', NULL, 'Delectus rerum omni', 'Malcolm Mills', 'Eaque magnam a corpo', 'In voluptate aliqua', 'Consequat Nostrum m', 'Ex aspernatur corrup', '2006-04-04', NULL, 'Libero impedit repr', 'Velit elit assumend', 'Iste quisquam archit', NULL, '490', 0, '2020-11-22 01:11:35', '2020-11-22 01:11:35', 24, NULL, NULL, NULL),
(11, 1, 'Parsons and Robles Plc', 'Weber Short Associates', 'Rachel Kim', '2009-07-20', 'Ut expedita tenetur', 'Qui id sequi recusa', 'Veniam quis eum qui', 'Cupiditate aliquip e', '84 Second Road', 'Eos officiis in dolo', 'In et dolores ea sae', 'Facilis commodi comm', '+1 (459) 102-6834', '+1 (438) 218-5067', 'byrabusohe@mailinator.com', 'https://www.runynyzekuzuri.co', 'https://www.cohakumaw.tv', '51', 'Lawson Gill Traders', NULL, 'Corporis molestiae e', 'Wing Morris', 'Ut eum dolorem offic', 'Nulla quas culpa ist', 'Excepturi sit in odi', 'Et eum id nemo magn', '1976-07-12', NULL, 'Rem unde perspiciati', 'Quasi voluptas magni', 'Minima velit cupidi', NULL, '235', 0, '2020-11-22 01:12:41', '2020-11-22 01:12:41', 25, NULL, NULL, NULL),
(12, 1, 'Acosta and Caldwell Associates', 'Johnson Sears Plc', 'Dillon Ballard', '1991-06-17', 'In aperiam cumque do', 'Et asperiores qui do', 'Laborum dolore modi', 'Nemo eius sapiente e', '69 East Fabien Parkway', 'Do Nam vero debitis', 'Tempor in amet et q', 'Facilis sit aperiam', '+1 (362) 989-6051', '+1 (875) 115-8942', 'jefelu@mailinator.com', 'https://www.rivy.cm', 'https://www.zyrotal.in', '17', 'Sargent and Ortega Plc', NULL, 'Consequatur Tempor', 'Conan Slater', 'Quaerat perferendis', 'Dolores corrupti no', 'Velit voluptatibus u', 'Ea ducimus quod est', '1999-10-15', NULL, 'Consequat At aspern', 'Laborum Est aute do', 'In consequat Omnis', NULL, '69', 0, '2020-11-22 01:14:07', '2020-11-22 01:14:07', 26, NULL, NULL, NULL),
(13, 1, 'Marshall Decker Trading', 'Lewis Blair LLC', 'Nicholas Mercer', '1994-06-28', 'In distinctio Volup', 'Reiciendis esse fug', 'Pariatur Quia animi', 'Fuga Elit rerum do', '95 Nobel Extension', 'Eveniet commodo eve', 'Laboriosam qui dolo', 'Commodo repellendus', '+1 (568) 935-6083', '+1 (234) 164-5273', 'bysigadija@mailinator.com', 'https://www.tesuvytuqobaw.info', 'https://www.siguf.ca', '84', 'Garrett and Mcmillan Trading', NULL, 'Enim dignissimos qua', 'Cole James', 'Esse ea dolorem accu', 'Voluptatem iusto qui', 'Non laboris ab ipsa', 'Explicabo Omnis eve', '1988-03-26', NULL, 'Quis ea nulla eaque', 'Officiis culpa id q', 'Ut voluptate vel sit', NULL, '488', 0, '2020-11-22 01:16:05', '2020-11-22 01:16:05', 28, NULL, NULL, NULL),
(14, 1, 'Cherry Odonnell LLC', 'Haynes Hunt Associates', 'Nash Vang', '1986-07-25', 'At est nihil culpa', 'Culpa eius quasi sed', 'Et reprehenderit ali', 'Reiciendis elit et', '674 South Cowley Street', 'Neque nemo voluptate', 'Voluptatem est in v', 'Rerum molestias cons', '+1 (495) 204-3759', '+1 (802) 105-3628', 'wyjywyhuhu@mailinator.com', 'https://www.harosymej.tv', 'https://www.wefohogovyzasev.mobi', '71', 'Chaney and Houston LLC', NULL, 'Minim corrupti volu', 'Lacy Norris', 'Aliquid nisi officia', 'Nihil quis facere id', 'Rem aut autem sit ei', 'Molestiae mollit ut', '1985-12-11', NULL, 'Laborum Fugiat comm', 'Consectetur facere s', 'Quia voluptatem enim', NULL, '512', 0, '2020-11-22 08:36:38', '2020-11-22 08:36:38', 37, NULL, NULL, NULL),
(20, 1, 'Baxter Brock Plc', 'Montoya and Knapp Traders', 'Amethyst Wilkerson', '1975-10-16', 'Sequi architecto eni', 'Repudiandae voluptas', 'Suscipit do quia est', 'Rem magna voluptate', '68 Oak Drive', 'Rerum beatae praesen', 'Quod id non ut ad de', NULL, '+1 (911) 951-3481', '+1 (122) 601-6789', 'zinaxizabi@mailinator.com', 'https://www.zoxyxilikes.com.au', 'https://www.kesedenega.me.uk', '54', 'Ochoa and Bradley Co', NULL, 'Dolorem et sunt eos', 'Darrel Mcdowell', 'Consectetur harum e', 'Nihil labore non fug', 'Cillum consectetur', 'Vel cum minim natus', '1998-08-20', NULL, 'Exercitationem vel u', '1606207767-pro-tax-certificate.jpg', '36', '1606207767-bank-statement.png', '12', 0, '2020-11-24 03:32:15', '2020-11-24 03:49:27', 44, 'Charles Tyson', 'Minim aute odit minu', 'Perferendis non exce'),
(21, 1, 'Sindhani Group of Compnies', 'Holt Ross Associates', 'WAheed Sindhani', '1999-03-18', 'Tempore sed dolore', 'Repudiandae ab magni', 'Exercitationem eaque', 'Explicabo Voluptate', '33 Rocky Fabien Extension', 'Ut et facere fuga S', 'Et labore nihil quis', 'Molestias veniam ve', '+1 (841) 509-9881', '+1 (741) 802-1577', 'xekuhuf@mailinator.com', 'https://www.wucilyhakaw.org.au', 'https://www.rumalojubese.us', '65', 'Swanson Livingston Associates', NULL, 'Eum alias iusto ipsu', 'Logan Mcguire', 'Eveniet ad aut temp', 'Minus est et quod su', 'Obcaecati consectetu', 'Sunt molestiae duis', '2011-04-17', NULL, 'Ab nemo id itaque ev', '1606538136-pro-tax-certificate.png', '63', '1606538136-bank-statement.png', '304', 0, '2020-11-27 23:35:37', '2020-11-27 23:35:37', 45, 'Xantha Walter', 'Amet culpa quia co', 'Exercitation et cons'),
(22, 1, 'Sindhani Group of Compnies', 'Holt Ross Associates', 'WAheed Sindhani', '1999-03-18', 'Tempore sed dolore', 'Repudiandae ab magni', 'Exercitationem eaque', 'Explicabo Voluptate', '33 Rocky Fabien Extension', 'Ut et facere fuga S', 'Et labore nihil quis', 'Molestias veniam ve', '+1 (841) 509-9881', '+1 (741) 802-1577', 'xekuhuf@mailinator.com', 'https://www.wucilyhakaw.org.au', 'https://www.rumalojubese.us', '65', 'Swanson Livingston Associates', NULL, 'Eum alias iusto ipsu', 'Logan Mcguire', 'Eveniet ad aut temp', 'Minus est et quod su', 'Obcaecati consectetu', 'Sunt molestiae duis', '2011-04-17', NULL, 'Ab nemo id itaque ev', '1606538136-pro-tax-certificate.png', '63', '1606538136-bank-statement.png', '304', 0, '2020-11-27 23:37:26', '2020-11-27 23:37:26', 45, 'Xantha Walter', 'Amet culpa quia co', 'Exercitation et cons'),
(23, 1, 'The education network', 'educational consultants', 'Khadim hussain rizvi', '2018-12-03', 'Bahria town phase 1, sctor A', 'Bahria town phase 1, sctor A', 'Bahria town phase 1, sctor A', 'Bahria town phase 1, sctor E', 'Bahria town phase 1, sctor A', 'Bahria town phase 1, sctor A', 'Bahria town phase 1, sctor A', NULL, '0515421145', '03254551112', 'husain@live.com', 'https://priceoye.pk/', 'https://priceoye.pk/', '7', '25465456', NULL, 'sialkot', 'karachi', 'nil', '872389728974`', 'y2372897`', 'UISAIHAIO', '2020-12-25', NULL, '54564564', '1607347349-pro-tax-certificate.jpg', '5000', '1607347349-bank-statement.jpg', '456456486', 0, '2020-12-07 13:22:29', '2020-12-07 13:22:29', 68, 'JKLSJAKLDJA', 'AHJKHASJK', '0255'),
(24, 1, 'BN Tech', 'Computer Science', 'Bilawal Basheer', '2021-03-23', 'Islamabad', 'Newyork', 'London', 'Beigeing', '441 Rocky Oak Road', 'Illum est sequi qu', 'Nisi sint porro repr', NULL, '+1 (736) 987-6423', '+1 (622) 741-4355', 'fovezez@mailinator.com', 'https://www.kadiz.cm', 'https://www.biqawuqanufikaj.us', '20000', 'Herrera and Hunt Trading', NULL, 'Non magni saepe nisi', 'Kirsten Franco', 'Rerum eu perferendis', 'Laborum animi volup', 'In odio est rerum id', 'Et doloribus ut elig', '2015-04-02', NULL, 'Quas aut eum omnis s', '1607413920-pro-tax-certificate.jpg', '99', '1607413920-bank-statement.jpg', '612', 0, '2020-12-08 07:52:00', '2020-12-08 07:52:00', 71, 'Nero Macias', 'Deserunt ut sint ea', 'Facilis et enim in c'),
(25, 1, 'Matthews Baldwin Associates', 'Odonnell Hale Inc', 'Linus Cox', '2003-08-20', 'Perspiciatis maiore', 'Obcaecati voluptatib', 'Dolor animi ut exer', 'Natus laborum Eos', '266 Second Court', 'A quis quam saepe se', 'Modi modi laboris te', NULL, '+1 (429) 191-1224', '+1 (519) 146-1977', 'riji@mailinator.com', 'https://www.qipikipamyjy.tv', 'https://www.qunylafygax.mobi', '83', 'Flynn and Vang Plc', NULL, 'Exercitation exercit', 'Karyn Campbell', 'Sequi eligendi volup', 'Nulla quia iusto in', 'Qui iure ea quia adi', 'Qui est sint in eius', '2006-10-08', NULL, 'Ut quod perferendis', '1607446269-pro-tax-certificate.jpg', '49', '1607446269-bank-statement.jpg', '460', 0, '2020-12-08 16:51:10', '2020-12-08 16:51:10', 73, 'Erin Cooley', 'Vel dolorem quia asp', 'Rerum dolores vitae'),
(26, 1, 'TEN PK', 'TEN PK', 'Khadim hussain rizvi', '2020-12-08', 'sdasda', 'dsaad', 'House 626, Street 44, Umar Block Bahria Town Phase 8', 'House 626, Street 44, Umar Block Bahria Town Phase 8', 'habib@admin.com', 'habib@admin.com', 'habib@admin.com', NULL, '0515421145', '03254551112', 'arishakamran1997@gmail.com', 'https://priceoye.pk/', 'https://priceoye.pk/', '15', '25465456', NULL, 'TEN PK', 'karachi', 'House 626, Street 44, Umar Block Bahria Town Phase 8', '872389728974`', 'y2372897`', 'UISAIHAIO', '2020-12-22', NULL, '54564564', '1607449979-pro-tax-certificate.jpg', '5', '1607449979-bank-statement.jpg', 'sadad', 0, '2020-12-08 17:53:00', '2020-12-08 17:53:00', 74, 'JKLSJAKLDJA', 'AHJKHASJK', '0255'),
(27, 1, 'TEN PK', 'TEN PK', 'Khadim hussain rizvi', '2020-12-15', '54534545345', '4545646', 'House 626, Street 44, Umar Block Bahria Town Phase 8', 'House 626, Street 44, Umar Block Bahria Town Phase 8', 'House 18-A, Awami Villas 5, Bahria Phase 8', 'sdadada', 'jakljdksajka', NULL, '0515421145', '03254551112', 'admin@example.com', 'https://priceoye.pk/', 'https://priceoye.pk/', '4', '25465456', NULL, 'TEN PK', 'karachi', 'House 18-A, Awami Villas 5, Bahria Phase 8', '872389728974`', 'y2372897`', 'UISAIHAIO', '2020-12-24', NULL, '54564564', '1607451456-pro-tax-certificate.png', '4', '1607451456-bank-statement.png', 'sadad', 0, '2020-12-08 18:17:37', '2020-12-08 18:17:37', 76, 'JKLSJAKLDJA', 'AHJKHASJK', '0255'),
(28, 1, 'Hester and Walters Associates', 'Madden Farley Co', 'Plato Dale', '1984-02-17', 'Veniam temporibus e', 'Amet libero eiusmod', 'Facilis consequatur', 'Et consequuntur quo', '95 East Green Old Extension', 'Aliquid est sunt ve', 'Excepturi consequat', NULL, '+1 (849) 122-5883', '+1 (762) 505-4746', 'pogulicecu@mailinator.com', 'https://www.pasowewisax.cc', '+1 (219) 664-3673', '34', 'Turner Vinson Co', NULL, 'Ipsam incidunt culp', 'Montana Workman', 'Incidunt culpa ad e', 'Aliquip quod et aut', 'Et numquam impedit', 'Nostrud eos modi vo', '1991-09-15', NULL, 'Excepteur expedita q', '1607531680-pro-tax-certificate.jpg', '9', '1607531680-bank-statement.jpg', '134', 0, '2020-12-09 16:34:42', '2020-12-09 16:34:42', 77, 'Hayes Christian', 'Quis dolor minim sit', 'Adipisicing commodi'),
(29, 1, 'Bilawal', 'Chen Rasmussen Traders', 'Carl Byers', '2000-04-10', 'Suscipit id elit s', 'Nostrum necessitatib', 'Voluptate aut esse', 'Dignissimos eos in', '832 East First Extension', 'In iste labore fugia', 'Voluptas aliquip aut', NULL, '+1 (985) 496-6769', '+1 (247) 587-2874', 'tugoviqu@mailinator.com', 'https://www.xifofiqomy.co.uk', '+1 (623) 723-8155', '66', 'Lynn and Wolfe Associates', NULL, 'Fugit eum proident', 'Macaulay George', 'Natus cupiditate non', 'Molestias ex commodi', 'Deserunt voluptatem', 'Iusto nihil non ut v', '2019-06-26', NULL, 'Repellendus Velit', '1607602598-pro-tax-certificate.jpg', '47', '1607602598-bank-statement.jpg', '647', 0, '2020-12-10 12:16:38', '2020-12-10 12:16:38', 78, 'Quintessa Preston', 'Ipsam animi dolor n', 'Modi ducimus dolore'),
(30, 1, 'Dickson Cain LLC', 'Holland and Gamble Associates', 'Sheila Beasley', '1996-03-09', 'Porro cumque ipsum', 'Qui dolores temporib', 'Laborum Quis autem', 'Qui sint qui deserun', '707 Milton Drive', 'Atque alias Nam lore', 'Irure expedita itaqu', 'Consequatur eos te', '+1 (155) 934-2923', '+1 (447) 261-8769', 'cutiwesu@mailinator.com', 'https://www.mynybysus.co', '+1 (728) 184-9322', '46', 'Hernandez Mercado Trading', NULL, 'Quia nostrum odio na', 'Orla Duncan', 'Occaecat quia lorem', 'Placeat excepteur e', 'Ea soluta non at nec', 'Qui in id ad eos vo', '1979-05-23', NULL, 'Vero blanditiis qui', '1607687795-pro-tax-certificate.jpg', '68', '1607687795-bank-statement.jpg', '41', 0, '2020-12-11 11:56:36', '2020-12-11 11:56:36', 80, 'India Rivas', 'Corrupti et volupta', 'Esse sapiente harum'),
(31, 1, NULL, NULL, 'usman', '2013-09-23', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', 'house 432 , street 3, sector a, askari 13 rawalpindi', NULL, '051542334', '03246557776', 'usmanjadoon@live.com', 'https://www.facebook.com', '051445171', '21', 'nul', NULL, 'sialko', 'karachi', 'nul', '7366677-8827', '232372388737129', NULL, '2020-12-01', NULL, 'test', '1607688376-pro-tax-certificate.png', '887', '1607688376-bank-statement.png', '87878', 0, '2020-12-11 12:06:16', '2020-12-11 12:06:16', 81, 'ubl', 'khi90', '89'),
(32, 1, 'Noel and Saunders Plc', 'Reid and Sweeney LLC', 'Freya Herring', '1981-07-23', 'Reprehenderit in ess', 'Quibusdam sequi omni', 'Tempore labore a od', 'Labore sit possimus', '824 Milton Court', 'Atque ex minim provi', 'Quis officia itaque', NULL, '+1 (772) 146-5644', '+1 (675) 935-6089', 'qyzoq@mailinator.com', 'https://www.herexici.net', '+1 (246) 588-1284', '47', 'Mckinney and Pierce LLC', NULL, 'Non deserunt qui vol', 'Stephanie Hancock', 'Sunt maxime eveniet', 'Obcaecati et minima', 'Debitis laborum quid', 'Neque ipsum ut moles', '2006-06-23', NULL, 'Rerum et hic eos bl', NULL, '77', NULL, '306', 0, '2020-12-14 13:12:29', '2020-12-14 13:12:29', 82, 'Nyssa Odonnell', 'Quae reprehenderit t', 'Qui non sunt mollit'),
(33, 1, 'Harrington Pope LLC', 'Bowers and Mitchell Co', 'Jenette Booker', '1989-02-07', 'Ut quia eius nisi ac', 'Obcaecati ipsum dol', 'Sit minus qui odit d', 'Pariatur Voluptatib', '859 First Parkway', 'Voluptatum quis dolo', 'Et nisi ad dolor ill', NULL, '+1 (795) 684-7606', '+1 (222) 339-9237', 'guxez@mailinator.com', 'https://www.syg.org.uk', '+1 (783) 514-5126', '98', 'Mccarty and Douglas Plc', NULL, 'Ex nobis Nam rerum e', 'Akeem Morales', 'Voluptate eveniet i', 'Quia qui non eos eli', 'Animi quo quibusdam', 'Nesciunt architecto', '1985-05-26', NULL, 'Est lorem facilis re', '1607951784-pro-tax-certificate.jpg', '62', '1607951784-bank-statement.jpg', '290', 0, '2020-12-14 13:16:25', '2020-12-14 13:16:25', 82, 'Brock Stephenson', 'Elit sapiente enim', 'Natus vel est molest'),
(34, 1, 'Sak', 'Text', 'Rohait', '2019', 'c block', NULL, NULL, NULL, 'c block', NULL, NULL, NULL, '054124123', '03341110894', 'rohait007@gmail.com', NULL, NULL, '10', NULL, NULL, 'rawal', 'Racal', NULL, '213', '13123', '12312', '12', NULL, 'test', NULL, NULL, NULL, 'rak', 0, '2021-01-05 08:40:22', '2021-01-05 08:40:22', 83, 'Meezan', NULL, '7861'),
(35, 1, 'Roth Moran Traders', 'Higgins Chandler Associates', 'Curran Wilkins', '1990-07-02', 'Minima sint corrupt', 'Ut iste fugiat ea d', 'Vel deleniti occaeca', 'Maiores et quis ea c', '272 Nobel Court', 'Deleniti ea et accus', 'Fugiat labore sit ma', NULL, '+1 (537) 393-9839', '+1 (423) 775-2497', 'pukajy@mailinator.com', 'https://www.lad.org', '+1 (133) 278-2513', '80', 'Stark Cervantes Traders', NULL, 'At natus molestias i', 'Jordan Sanders', 'Dolorem fuga Conseq', 'Soluta nihil unde se', 'Omnis ab quam laboru', 'Assumenda in repudia', '1988-09-25', NULL, 'Corporis aliquid qua', '1617231671-pro-tax-certificate.docx', '2', '1617231671-bank-statement.rtf', '267', 0, '2021-03-31 22:01:12', '2021-03-31 22:01:12', 85, 'Hollee Kim', 'Voluptate architecto', 'Ipsum assumenda volu'),
(36, 1, 'Aguirre Mcintosh Inc', 'Simpson and Jarvis Traders', 'Karleigh Owen', '1979-08-11', 'Sint deleniti in des', 'Cum sunt delectus i', 'Neque voluptatem id', 'Eos sunt non enim f', '311 South White Old Drive', 'Dolore error natus d', 'Non mollit dolores a', NULL, '+1 (918) 627-3246', '+1 (309) 985-3579', 'xobysavic@mailinator.com', 'https://www.xudurypaduh.cc', '+1 (589) 531-8219', '100', 'Rich and Travis Traders', NULL, 'Corporis unde esse', 'Vincent Kemp', 'Laborum dolores in l', 'Dolor nisi et et eni', 'Ea et nobis commodo', 'Ducimus adipisicing', '1975-12-10', NULL, 'Adipisicing eveniet', '1617233173-pro-tax-certificate.rtf', '5', '1617233173-bank-statement.rtf', '196', 0, '2021-03-31 22:26:13', '2021-03-31 22:26:13', 86, 'Brent Wiggins', 'Esse nemo cupidatat', 'Aliquip mollitia dol'),
(37, 1, 'Phelps and Robbins Co', 'Mcknight Alford LLC', 'Mollie Allen', '1970-12-10', 'Enim sunt et nulla', 'Cum minus possimus', 'Qui voluptatem Quo', 'Illum aut quisquam', '30 Green Hague Boulevard', 'Qui autem dolor moll', 'Velit harum perferen', NULL, '+1 (709) 851-5038', '+1 (536) 528-2313', 'rebiq@mailinator.com', 'https://www.nexypemymanesa.info', '+1 (336) 144-4432', '12', 'Downs Huff Inc', NULL, 'Quod voluptas ullam', 'Audra Goodman', 'Ut quia qui ipsa in', 'Accusantium temporib', 'Reprehenderit consec', 'Qui et duis elit in', '1989-07-02', NULL, 'Quis dolore delectus', '1620282184-pro-tax-certificate.jpeg', '41', '1620282184-bank-statement.jpeg', '96', 0, '2021-05-06 05:23:05', '2021-05-06 05:23:05', 87, 'Wynter Hill', 'Est in autem aut di', 'Cumque sint alias a');

-- --------------------------------------------------------

--
-- Table structure for table `company_documents`
--

CREATE TABLE `company_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_documents`
--

INSERT INTO `company_documents` (`id`, `url`, `type`, `company_id`, `created_at`, `updated_at`) VALUES
(11, '1606206481-ntn-certificate-0.jpg', NULL, 20, '2020-11-24 03:48:47', '2020-11-24 03:48:47'),
(12, '1606206481-ntn-certificate-1.jpg', NULL, 20, '2020-11-24 03:48:47', '2020-11-24 03:48:47'),
(13, '1606207767-ntn-certificate-0.jpg', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(14, '1606207767-ntn-certificate-1.jpg', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(15, '1606207767-ntn-certificate-2.png', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(16, '1606207767-ntn-certificate-3.jpg', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(17, '1606207767-ntn-certificate-4.png', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(18, '1606207767-ntn-certificate-5.png', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(19, '1606207767-ntn-certificate-6.jpg', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(20, '1606207767-ntn-certificate-7.jpg', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(21, '1606207767-ntn-certificate-8.png', NULL, 20, '2020-11-24 03:49:28', '2020-11-24 03:49:28'),
(22, '1606538136-ntn-certificate-0.png', NULL, 21, '2020-11-27 23:35:37', '2020-11-27 23:35:37'),
(23, '1606538136-ntn-certificate-0.png', NULL, 22, '2020-11-27 23:37:26', '2020-11-27 23:37:26'),
(24, '1607347349-ntn-certificate-0.jpg', NULL, 23, '2020-12-07 13:22:29', '2020-12-07 13:22:29'),
(25, '1607347349-ntn-certificate-1.jpg', NULL, 23, '2020-12-07 13:22:29', '2020-12-07 13:22:29'),
(26, '1607347349-ntn-certificate-2.jpg', NULL, 23, '2020-12-07 13:22:29', '2020-12-07 13:22:29'),
(27, '1607413920-ntn-certificate-0.jpg', NULL, 24, '2020-12-08 07:52:00', '2020-12-08 07:52:00'),
(28, '1607446269-ntn-certificate-0.jpg', NULL, 25, '2020-12-08 16:51:10', '2020-12-08 16:51:10'),
(29, '1607449979-ntn-certificate-0.jpg', NULL, 26, '2020-12-08 17:53:00', '2020-12-08 17:53:00'),
(30, '1607451456-ntn-certificate-0.png', NULL, 27, '2020-12-08 18:17:37', '2020-12-08 18:17:37'),
(31, '1607531680-ntn-certificate-0.jpg', NULL, 28, '2020-12-09 16:34:42', '2020-12-09 16:34:42'),
(32, '1607531680-ntn-certificate-1.jpg', NULL, 28, '2020-12-09 16:34:42', '2020-12-09 16:34:42'),
(33, '1607531680-ntn-certificate-2.jpg', NULL, 28, '2020-12-09 16:34:42', '2020-12-09 16:34:42'),
(34, '1607602598-ntn-certificate-0.jpg', NULL, 29, '2020-12-10 12:16:38', '2020-12-10 12:16:38'),
(35, '1607687795-ntn-certificate-0.jpg', NULL, 30, '2020-12-11 11:56:36', '2020-12-11 11:56:36'),
(36, '1607688376-ntn-certificate-0.png', NULL, 31, '2020-12-11 12:06:16', '2020-12-11 12:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '7620d7fd-f765-4c72-a6f1-8bdfe559de7f', 'database', 'default', '{\"uuid\":\"7620d7fd-f765-4c72-a6f1-8bdfe559de7f\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:82;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Algolia\\AlgoliaSearch\\Exceptions\\BadRequestException: Operations quota exceeded. Change plan to get more Operations. in /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php:219\nStack trace:\n#0 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php(167): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->handleResponse(Object(GuzzleHttp\\Psr7\\Response), Object(Algolia\\AlgoliaSearch\\Http\\Psr7\\Request))\n#1 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php(101): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->request(\'POST\', \'/1/indexes/sell...\', Object(Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptions), Array, 30, Array)\n#2 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(299): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->write(\'POST\', \'/1/indexes/sell...\', Array, Object(Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptions))\n#3 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(338): Algolia\\AlgoliaSearch\\SearchIndex->rawBatch(Array, Array)\n#4 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(183): Algolia\\AlgoliaSearch\\SearchIndex->splitIntoBatches(\'updateObject\', Array, Array)\n#5 /home/madeinpak/public_html/mainproj/vendor/laravel/scout/src/Engines/AlgoliaEngine.php(71): Algolia\\AlgoliaSearch\\SearchIndex->saveObjects(Array)\n#6 /home/madeinpak/public_html/mainproj/vendor/laravel/scout/src/Jobs/MakeSearchable.php(42): Laravel\\Scout\\Engines\\AlgoliaEngine->update(Object(Illuminate\\Database\\Eloquent\\Collection))\n#7 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Laravel\\Scout\\Jobs\\MakeSearchable->handle()\n#8 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#14 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#15 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(91): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Laravel\\Scout\\Jobs\\MakeSearchable), false)\n#17 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#18 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#19 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(93): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(62): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#21 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#33 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Command/Command.php(258): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(920): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(266): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(142): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 /home/madeinpak/public_html/mainproj/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 {main}', '2020-12-14 11:44:42'),
(4, '22c3e4bf-1bd1-4f27-8b1b-e2c6774c1b19', 'database', 'default', '{\"uuid\":\"22c3e4bf-1bd1-4f27-8b1b-e2c6774c1b19\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:193;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Algolia\\AlgoliaSearch\\Exceptions\\BadRequestException: Operations quota exceeded. Change plan to get more Operations. in /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php:219\nStack trace:\n#0 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php(167): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->handleResponse(Object(GuzzleHttp\\Psr7\\Response), Object(Algolia\\AlgoliaSearch\\Http\\Psr7\\Request))\n#1 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php(101): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->request(\'POST\', \'/1/indexes/prod...\', Object(Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptions), Array, 30, Array)\n#2 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(299): Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper->write(\'POST\', \'/1/indexes/prod...\', Array, Object(Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptions))\n#3 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(338): Algolia\\AlgoliaSearch\\SearchIndex->rawBatch(Array, Array)\n#4 /home/madeinpak/public_html/mainproj/vendor/algolia/algoliasearch-client-php/src/SearchIndex.php(183): Algolia\\AlgoliaSearch\\SearchIndex->splitIntoBatches(\'updateObject\', Array, Array)\n#5 /home/madeinpak/public_html/mainproj/vendor/laravel/scout/src/Engines/AlgoliaEngine.php(71): Algolia\\AlgoliaSearch\\SearchIndex->saveObjects(Array)\n#6 /home/madeinpak/public_html/mainproj/vendor/laravel/scout/src/Jobs/MakeSearchable.php(42): Laravel\\Scout\\Engines\\AlgoliaEngine->update(Object(Illuminate\\Database\\Eloquent\\Collection))\n#7 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Laravel\\Scout\\Jobs\\MakeSearchable->handle()\n#8 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#14 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#15 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(91): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Laravel\\Scout\\Jobs\\MakeSearchable), false)\n#17 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#18 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#19 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(93): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(62): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Laravel\\Scout\\Jobs\\MakeSearchable))\n#21 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Container/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#33 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Command/Command.php(258): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(920): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(266): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 /home/madeinpak/public_html/mainproj/vendor/symfony/console/Application.php(142): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Console/Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 /home/madeinpak/public_html/mainproj/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 /home/madeinpak/public_html/mainproj/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 {main}', '2020-12-14 13:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'jpg1605391043.jpg', 54, 'App\\Models\\Category', '2020-11-14 16:57:23', '2020-11-14 16:57:23'),
(2, 'jpg1605391349.jpg', 55, 'App\\Models\\Category', '2020-11-14 17:02:29', '2020-11-14 17:02:29'),
(3, 'jpg1605391588.jpg', 56, 'App\\Models\\Category', '2020-11-14 17:06:28', '2020-11-14 17:06:28'),
(4, '25cff6f80c5801eb51a55f23e34cc615573b6d33.jpg', 1, 'App\\Models\\Product', '2020-11-16 00:33:54', '2020-11-16 00:33:54'),
(5, '7b0211a2c1ceda83b167516b2a747ae1a38d99eb.jpg', 2, 'App\\Models\\Product', '2020-11-16 01:57:13', '2020-11-16 01:57:13'),
(6, '3e1a137ca853e329d0dd0e67e5c3684de5fec3c9.jpeg', 3, 'App\\Models\\Product', '2020-11-18 09:43:30', '2020-11-18 09:43:30'),
(7, 'dad02614bfadf3342880109e4cc545ed1e941cda.jpg', 4, 'App\\Models\\Product', '2020-11-18 07:58:14', '2020-11-18 07:58:14'),
(8, 'f892e1a873b795cc1ae0e528ade79415f0918e09.jpg', 5, 'App\\Models\\Product', '2020-11-18 07:58:57', '2020-11-18 07:58:57'),
(9, '96ed44e5f7fc4bec528513625577d84db9875416.jpg', 6, 'App\\Models\\Product', '2020-11-18 07:59:34', '2020-11-18 07:59:34'),
(10, 'ddf753d2198790fd0029d1a053865b6e43b32035.jpg', 7, 'App\\Models\\Product', '2020-11-18 08:00:05', '2020-11-18 08:00:05'),
(11, '4f9f8ffdd520597b5a653e8d2c978a1bedeefe22.jpg', 8, 'App\\Models\\Product', '2020-11-18 08:00:40', '2020-11-18 08:00:40'),
(12, '040724fa962df17f575c88b604f9733bf889d9f7.jpg', 9, 'App\\Models\\Product', '2020-11-18 08:01:09', '2020-11-18 08:01:09'),
(13, '99d4f82c45dc20ea88afad67971b537191a9e7b1.jpg', 10, 'App\\Models\\Product', '2020-11-18 08:01:41', '2020-11-18 08:01:41'),
(14, 'bdc3ccf2decfbdfa34c7a57addb4fdab64380fa6.jpg', 11, 'App\\Models\\Product', '2020-11-18 08:02:33', '2020-11-18 08:02:33'),
(15, '48ca0f8ff20e331a612ee9c86a1a6ba3a6bce961.jpg', 12, 'App\\Models\\Product', '2020-11-18 08:25:17', '2020-11-18 08:25:17'),
(16, 'df8720c2c286155f5bb17795aa2a4b3144bb497b.jpg', 13, 'App\\Models\\Product', '2020-11-18 08:26:03', '2020-11-18 08:26:03'),
(17, 'jpg1605789923.jpg', 76, 'App\\Models\\Category', '2020-11-19 07:45:23', '2020-11-19 07:45:23'),
(18, '4b92e96538c03a14f5bda16066786d6651c788b1.jpg', 14, 'App\\Models\\Product', '2020-11-21 04:39:26', '2020-11-21 04:39:26'),
(19, '22a1c2a30c4c9d42b7bbfc491255bcedb02a1eb9.jpg', 15, 'App\\Models\\Product', '2020-11-22 01:03:15', '2020-11-22 01:03:15'),
(20, '8d812bb65ac7451ef1ec465dcec62db9878ba849.png', 16, 'App\\Models\\Product', '2020-11-24 07:58:58', '2020-11-24 07:58:58'),
(25, '1636599075-subcategory-image.png', 440, 'App\\Models\\SubCategory', '2020-11-30 07:48:27', '2020-11-30 07:48:27'),
(26, 'jpg1607344075.jpg', 113, 'App\\Models\\Category', '2020-12-07 12:27:55', '2020-12-07 12:27:55'),
(27, '1555971567-subcategory-image.jpg', 508, 'App\\Models\\SubCategory', '2020-12-07 12:31:47', '2020-12-07 12:31:47'),
(28, '1879962415-subcategory-image.jpg', 509, 'App\\Models\\SubCategory', '2020-12-07 12:33:34', '2020-12-07 12:33:34'),
(29, '1704491218-subcategory-image.jpg', 510, 'App\\Models\\SubCategory', '2020-12-07 13:35:31', '2020-12-07 13:35:31'),
(30, 'jpg1607417273.jpg', 114, 'App\\Models\\Category', '2020-12-08 08:47:53', '2020-12-08 08:47:53'),
(31, '1492800294-subcategory-image.jpg', 511, 'App\\Models\\SubCategory', '2020-12-08 08:51:04', '2020-12-08 08:51:04'),
(32, '735432164-subcategory-image.jpg', 512, 'App\\Models\\SubCategory', '2020-12-08 08:53:59', '2020-12-08 08:53:59'),
(33, 'jpg1607433271.jpg', 115, 'App\\Models\\Category', '2020-12-08 13:14:31', '2020-12-08 13:14:31'),
(34, 'jpg1607433307.jpg', 116, 'App\\Models\\Category', '2020-12-08 13:15:07', '2020-12-08 13:15:07'),
(35, 'jpg1607433337.jpg', 117, 'App\\Models\\Category', '2020-12-08 13:15:37', '2020-12-08 13:15:37'),
(36, 'jpg1607433379.jpg', 118, 'App\\Models\\Category', '2020-12-08 13:16:19', '2020-12-08 13:16:19'),
(37, '1741195842-subcategory-image.jpg', 513, 'App\\Models\\SubCategory', '2020-12-09 08:52:47', '2020-12-09 08:52:47'),
(38, '1128694295-subcategory-image.jpg', 514, 'App\\Models\\SubCategory', '2020-12-09 08:54:12', '2020-12-09 08:54:12'),
(39, '2113117890-subcategory-image.jpg', 515, 'App\\Models\\SubCategory', '2020-12-09 08:56:02', '2020-12-09 08:56:02'),
(40, '837285424-subcategory-image.jpg', 516, 'App\\Models\\SubCategory', '2020-12-09 08:57:00', '2020-12-09 08:57:00'),
(41, '1997853215-subcategory-image.jpg', 517, 'App\\Models\\SubCategory', '2020-12-09 08:58:03', '2020-12-09 08:58:03'),
(42, '871510607-subcategory-image.jpg', 518, 'App\\Models\\SubCategory', '2020-12-09 08:59:33', '2020-12-09 08:59:33'),
(43, '1116798710-subcategory-image.jpg', 519, 'App\\Models\\SubCategory', '2020-12-09 09:00:34', '2020-12-09 09:00:34'),
(44, '239712138-subcategory-image.jpg', 520, 'App\\Models\\SubCategory', '2020-12-09 09:02:05', '2020-12-09 09:02:05'),
(45, '1225268347-subcategory-image.jpg', 521, 'App\\Models\\SubCategory', '2020-12-09 11:10:21', '2020-12-09 11:10:21'),
(46, '1371453457-subcategory-image.jpg', 522, 'App\\Models\\SubCategory', '2020-12-09 11:20:37', '2020-12-09 11:20:37'),
(47, 'png1607690338.png', 119, 'App\\Models\\Category', '2020-12-11 12:38:58', '2020-12-11 12:38:58'),
(48, '577742681-subcategory-image.jpg', 523, 'App\\Models\\SubCategory', '2020-12-17 06:36:55', '2020-12-17 06:36:55'),
(49, 'png1617233566.png', 120, 'App\\Models\\Category', '2021-03-31 22:32:46', '2021-03-31 22:32:46'),
(50, '1281408087-subcategory-image.png', 524, 'App\\Models\\SubCategory', '2021-03-31 22:33:17', '2021-03-31 22:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `subcategory_id`, `category_id`, `created_at`, `updated_at`) VALUES
(177, 'Apple', 513, 115, '2020-12-09 09:02:52', '2020-12-09 09:02:52'),
(178, 'Mango', 513, 115, '2020-12-09 09:03:05', '2020-12-09 09:03:05'),
(179, 'Potato', 514, 115, '2020-12-09 09:03:26', '2020-12-09 09:03:26'),
(180, 'Onion', 514, 115, '2020-12-09 09:03:40', '2020-12-09 09:03:40'),
(182, 'Shirt', 515, 116, '2020-12-09 09:05:46', '2020-12-09 09:05:46'),
(183, 'Pent', 515, 116, '2020-12-09 09:05:57', '2020-12-09 09:05:57'),
(184, 'Abaya', 516, 116, '2020-12-09 09:06:09', '2020-12-09 09:06:09'),
(185, 'Chaddar', 516, 116, '2020-12-09 09:06:28', '2020-12-09 09:06:28'),
(186, 'Chicken', 517, 117, '2020-12-09 09:06:46', '2020-12-09 09:06:46'),
(187, 'Egg', 517, 117, '2020-12-09 09:06:58', '2020-12-09 09:06:58'),
(188, 'Simon', 518, 117, '2020-12-09 09:07:26', '2020-12-09 09:07:26'),
(189, 'Mashka', 518, 117, '2020-12-09 09:07:45', '2020-12-09 09:07:45'),
(190, 'Coat', 519, 118, '2020-12-09 09:08:01', '2020-12-09 09:08:01'),
(191, 'Gloves', 519, 118, '2020-12-09 09:08:26', '2020-12-09 09:08:26'),
(192, 'school', 520, 118, '2020-12-09 09:08:47', '2020-12-09 09:08:47'),
(193, 'Laptop', 520, 118, '2020-12-09 09:09:12', '2020-12-09 09:09:12'),
(194, 'ahsahjsjkah', 524, 120, '2021-03-31 22:33:48', '2021-03-31 22:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(133, 'default', '{\"uuid\":\"bb2ce1da-e82d-4838-b280-cc146de006fb\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:83;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1609835486, 1609835486),
(134, 'default', '{\"uuid\":\"ba60cd87-ed75-4740-8608-610f2412987c\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:194;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1609836624, 1609836624),
(135, 'default', '{\"uuid\":\"33fb5e02-02d0-4390-8961-837c26592b55\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:160;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1610609315, 1610609315),
(136, 'default', '{\"uuid\":\"c9794ed7-d596-436d-ad4d-24281ec3334a\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:84;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1613638797, 1613638797),
(137, 'default', '{\"uuid\":\"b4d932b1-edeb-4d2a-bb5d-a98e2d1d1f73\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:85;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617231585, 1617231585),
(138, 'default', '{\"uuid\":\"dd977f2a-f1b3-4cb3-9662-a4965c570e01\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:86;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617233045, 1617233045),
(139, 'default', '{\"uuid\":\"34ea635d-7685-486d-b254-f7363dba69d8\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:185;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617233414, 1617233414),
(140, 'default', '{\"uuid\":\"d58ddaf6-4592-4ba4-b787-a2b90fc556ad\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:185;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617233419, 1617233419),
(141, 'default', '{\"uuid\":\"1c1227e1-58e2-4f3e-b4da-da6fd1c9ce9f\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:195;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617233893, 1617233893),
(142, 'default', '{\"uuid\":\"2f30f5fa-128a-4a85-af4e-88d382029826\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:195;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617234074, 1617234074),
(143, 'default', '{\"uuid\":\"bca9672e-6047-4f4d-86cd-5012fcd3387f\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:191;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617438177, 1617438177),
(144, 'default', '{\"uuid\":\"0978be8a-c216-4f41-927f-85df78cec856\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:191;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1617438182, 1617438182),
(145, 'default', '{\"uuid\":\"f47c0b89-0b79-4305-bb43-9c781eb2e618\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Seller\\\";s:2:\\\"id\\\";a:1:{i:0;i:87;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1620282116, 1620282116),
(146, 'default', '{\"uuid\":\"04238878-d08d-4c66-817e-1912dc8bfe2a\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:196;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1620282500, 1620282500),
(147, 'default', '{\"uuid\":\"1386b2ec-0d46-48f8-857a-341cbb99e6f5\",\"displayName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\",\"command\":\"O:33:\\\"Laravel\\\\Scout\\\\Jobs\\\\MakeSearchable\\\":9:{s:6:\\\"models\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Product\\\";s:2:\\\"id\\\";a:1:{i:0;i:196;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:10:\\\"connection\\\";s:8:\\\"database\\\";s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1620282523, 1620282523);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_00_00_000000_create_websockets_statistics_entries_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2018_08_06_175146_create_messages_table', 1),
(6, '2018_08_08_100000_create_telescope_entries_table', 1),
(7, '2018_09_01_093253_add_receiver_id_field_to_messages_table', 1),
(8, '2018_11_18_082207_add_image_column_to_messages', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2020_05_21_100000_create_teams_table', 1),
(12, '2020_05_21_200000_create_team_user_table', 1),
(13, '2020_10_12_140842_create_sellers_table', 1),
(14, '2020_10_12_141049_create_images_table', 1),
(15, '2020_10_13_021224_create_buyers_table', 1),
(16, '2020_10_13_052047_create_permission_tables', 1),
(17, '2020_10_15_084245_create_categories_table', 1),
(18, '2020_10_16_041534_create_tags_table', 1),
(19, '2020_10_16_042549_create_product_tag_table', 1),
(20, '2020_10_16_120915_create_sessions_table', 1),
(21, '2020_10_20_090258_create_products_table', 1),
(22, '2020_10_27_052520_create_reviews_table', 1),
(23, '2020_10_28_083744_create_shoppingcart_table', 1),
(24, '2020_10_29_045450_create_attributes_table', 1),
(25, '2020_10_29_111610_create_companies_table', 1),
(26, '2020_10_29_112406_create_product_attributes_table', 1),
(27, '2020_11_01_041154_create_rfqs_table', 1),
(28, '2020_11_02_083440_create_rfq_responses_table', 1),
(29, '2020_11_07_103727_create_subcategories_table', 1),
(30, '2020_11_11_120255_create_orders_table', 1),
(31, '2020_11_13_080258_create_offers_table', 1),
(32, '2020_11_18_063620_create_settings_table', 2),
(33, '2020_11_19_043544_create_admins_table', 3),
(35, '2020_11_23_091603_create_company_documents_table', 4),
(36, '2020_11_25_071913_create_product_images_table', 5),
(38, '2020_11_26_064216_create_items_table', 6),
(40, '2020_12_01_054058_create_slider_images_table', 7),
(42, '2020_12_01_110603_create_news_letters_table', 8),
(43, '2020_12_07_110018_create_jobs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@example.com', '2020-12-07 11:08:43', '2020-12-07 11:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `rfq_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `status` enum('-1','0','1','') COLLATE utf8mb4_unicode_ci DEFAULT '-1',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offerDocument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `product_name`, `quantity`, `price`, `customer_id`, `rfq_id`, `created_at`, `updated_at`, `product_id`, `seller_id`, `status`, `description`, `offerDocument`) VALUES
(53, 'Victoria Little', 555, 230, 25, 23, '2020-12-09 09:47:46', '2020-12-09 09:50:13', 166, 2, '0', 'kkk', '1607507266-offer-file.jpg'),
(54, 'Victoria Little', 99, 230, 25, 23, '2020-12-09 09:50:55', '2020-12-09 09:51:03', 166, 2, '1', 'test 2', '1607507455-offer-file.jpg'),
(55, 'Victoria Little', 556, 15, 25, 23, '2020-12-09 09:53:27', '2020-12-09 09:53:43', 166, 2, '1', 'aaaaaaaaaaaaaaaaa', '1607507607-offer-file.jpg'),
(56, 'Arden Gaines', 99, 15, 25, 23, '2020-12-09 09:58:22', '2020-12-09 09:58:35', 167, 2, '0', 'test rfq five', '1607507902-offer-file.jpg'),
(57, 'Red', 1000, 278, 36, 24, '2020-12-10 12:59:01', '2020-12-10 13:01:49', 191, 78, '0', 'sdfkllasjf', '1607605141-offer-file.jpg'),
(58, 'sargoda special 100% organic potatoes', 65, 56, 43, 26, '2020-12-11 12:24:53', '2020-12-11 12:26:28', 192, 81, '0', 'USMAN11@GMAIL.COMUJJJSMAN11@GMAIL.COM', '1607689493-offer-file.png'),
(59, 'Neil Vang', 500, 680, 57, 31, '2021-04-03 07:45:48', '2021-04-03 07:48:00', 195, 86, '0', 'saljdkajlasdk', '1617439548-offer-file.rtf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_no` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `document`, `order_no`, `order_date`, `update_date`, `payment_method`, `retail_price`, `status`, `printed`, `actions`, `customer_id`, `seller_id`, `product_id`, `offer_id`, `created_at`, `updated_at`, `total`) VALUES
(65, NULL, 'POVI1414', NULL, NULL, NULL, '230', '1', NULL, NULL, 25, 2, 166, 53, '2020-12-09 09:50:13', '2020-12-09 09:50:13', 127650),
(66, NULL, 'POAR5149', NULL, NULL, NULL, '15', '1', NULL, NULL, 25, 2, 167, 56, '2020-12-09 09:58:35', '2020-12-09 09:58:35', 1485),
(67, NULL, 'APRE3908', NULL, NULL, NULL, '278', '1', NULL, NULL, 36, 78, 191, 57, '2020-12-10 13:01:49', '2020-12-10 13:01:49', 278000),
(68, NULL, 'POSA6863', NULL, NULL, NULL, '56', '1', NULL, NULL, 43, 81, 192, 58, '2020-12-11 12:26:28', '2020-12-11 12:26:28', 3640),
(69, NULL, 'PONE1369', NULL, NULL, NULL, '680', '1', NULL, NULL, 57, 86, 195, 59, '2021-04-03 07:48:00', '2021-04-03 07:48:00', 340000);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `min_price` int(11) NOT NULL,
  `max_price` int(11) DEFAULT NULL,
  `per_product` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeoforigin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shelf_life_days` int(15) DEFAULT NULL,
  `shelf_life_weeks` int(10) DEFAULT NULL,
  `shelf_life_months` int(10) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `weight_unit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supply_days` int(10) DEFAULT NULL,
  `supply_weeks` int(11) DEFAULT NULL,
  `supply_months` int(11) DEFAULT NULL,
  `supply_availibility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_capacity` int(11) DEFAULT NULL,
  `capacity_per_item` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_per_duration` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_terms` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `packaging_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_order_qty` int(11) DEFAULT NULL,
  `item_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `active`, `min_price`, `max_price`, `per_product`, `brand_name`, `qty`, `category_id`, `subcategory_id`, `size`, `placeoforigin`, `shelf_life_days`, `shelf_life_weeks`, `shelf_life_months`, `color`, `port`, `weight`, `weight_unit`, `type`, `style`, `supply_days`, `supply_weeks`, `supply_months`, `supply_availibility`, `product_capacity`, `capacity_per_item`, `capacity_per_duration`, `certification`, `model_no`, `payment_terms`, `features`, `stock`, `packaging_details`, `seller_id`, `tags`, `minimum_order_qty`, `item_id`, `created_at`, `updated_at`) VALUES
(160, 'white', NULL, '0', 57, 406, 'mt', 'David Gibson', 863, 115, 514, 'xs', 'Thalo', 1, 11, 2, 'Chocolate', '453', 920, 'g', 'consumer', 'Erasmus Baldwin', 8, 3, 5, 'Et iste enim in sit', 10, 'month', NULL, NULL, 'Vera May', 'Nostrum ad sit eu du', NULL, NULL, NULL, 71, 'Deirdre Witt', 706, 179, '2020-12-09 09:12:19', '2021-01-14 07:28:35'),
(166, 'Victoria Little', '<p>Voluptatem. Cupidita.</p>', '1', 336, 832, 'mt', 'Iona Henson', 662, 115, 514, 'lg', 'Pirmahal', 1, 48, 7, 'Cornsilk', '309', 502, 'gt', 'durable', 'Brenden Lane', 4, 2, 12, 'Non dolorem neque en', 29, 'week', NULL, NULL, 'Warren French', 'Illum autem dolor m', '<p>Vel dolores consequa.</p>', NULL, '<p>Aute magna nobis aut.</p>', 2, 'Odysseus Baker', 355, 179, '2020-12-09 09:25:42', '2020-12-10 06:44:11'),
(167, 'Arden Gaines', NULL, '1', 873, 383, 'dozen', 'Kane Herring', 835, 115, 514, 'xl', 'Saidu Sharif', 16, 32, 1, 'Aqua', '836', 606, 'kg', 'consumer', 'Courtney Russo', 26, 18, 12, 'Voluptas alias in la', 98, 'week', NULL, NULL, 'Myles White', 'Libero assumenda dol', NULL, NULL, NULL, 74, 'Melvin Browning', 383, 183, '2020-12-09 09:56:56', '2020-12-10 06:46:49'),
(168, 'Jena Dillon', NULL, '1', 164, 558, 'packet', 'Maris Rios', 569, 117, 518, 'lg', 'Keti Bandar', 14, 4, 6, 'SaddleBrown', '904', 112, 'gt', 'industrial', 'Nomlanga York', 11, 15, 2, 'Voluptate et deserun', 26, 'year', NULL, NULL, 'Adria Clark', 'Dolorem eu qui est p', NULL, NULL, NULL, 74, 'Zelda Acevedo', 59, 188, '2020-12-09 09:58:30', '2020-12-10 06:46:45'),
(169, 'Andrew Murphy', NULL, '1', 826, 827, 'packet', 'Nell Crane', 537, 116, 516, 'xl', 'Surab', 14, 46, 7, 'DarkBlue', '340', 647, 'g', 'industrial', 'Suki Barton', 21, 36, 3, 'Vel pariatur Sed ne', 60, 'month', NULL, NULL, 'Leila Snow', 'In in vel non volupt', NULL, NULL, NULL, 74, 'Gareth Norton', 397, 184, '2020-12-09 09:59:01', '2020-12-10 06:46:32'),
(170, 'Venus Gray', NULL, '1', 649, 891, 'g', 'Sheila Palmer', 905, 117, 518, 'xl', 'Loralai', 4, 28, 7, 'LightSeaGreen', '631', 327, 'mt', 'industrial', 'Rebekah Lopez', 9, 16, 7, 'Veniam placeat con', 19, 'day', NULL, NULL, 'Kitra Watkins', 'Rerum laborum expedi', NULL, NULL, NULL, 74, 'Andrew Tanner', 335, 188, '2020-12-09 10:03:09', '2020-12-10 06:46:25'),
(171, 'Hammett Hawkins', NULL, '1', 614, 994, 'piece', 'Odette Britt', 528, 118, 520, 'lg', 'Shahpur', 16, 8, 9, 'FireBrick', '100', 281, 'kg', 'consumer', 'Indira Espinoza', 15, 1, 11, 'Laboris ipsum facer', 90, 'month', NULL, NULL, 'Alika Dillard', 'Qui quaerat do qui f', NULL, NULL, NULL, 74, 'Lael Long', 716, 193, '2020-12-09 10:04:47', '2020-12-10 06:46:17'),
(172, 'Kareem Parker', NULL, '1', 512, 588, 'packet', 'Uriah Green', 656, 117, 517, 'xs', 'Shahpur Chakar', 22, 31, 7, 'DarkOliveGreen', '472', 121, 'gt', 'durable', 'Randall Dawson', 6, 52, 6, 'Porro eum esse volu', 30, 'year', NULL, NULL, 'Tarik Bradley', 'Amet nesciunt ipsa', NULL, NULL, NULL, 74, 'Nicholas Wright', 618, 186, '2020-12-09 10:05:37', '2020-12-10 06:46:11'),
(173, 'Nissim Baldwin', NULL, '0', 936, 596, 'g', 'Courtney Allison', 23, 116, 515, 'xl', 'Gulistan', 2, 28, 3, 'LightGrey', '835', 297, 'gt', 'durable', 'Dorian Logan', 25, 41, 1, 'Amet nostrum unde r', 64, 'month', NULL, NULL, 'Morgan Goff', 'Quas quis vero dolor', NULL, NULL, NULL, 74, 'Walter Hurst', 402, 182, '2020-12-09 10:07:12', '2020-12-11 12:36:44'),
(174, 'Calista Mckinney', NULL, '1', 674, 608, 'kg', 'Keane Small', 728, 118, 520, 'md', 'Chichawatni', 1, 49, 5, 'MediumBlue', '808', 839, 'gt', 'consumer', 'Cameron Finch', 10, 7, 4, 'Dolores labore ut te', 14, 'year', NULL, NULL, 'Gillian Hanson', 'Molestiae velit con', NULL, NULL, NULL, 74, 'Hilel England', 861, 192, '2020-12-09 10:08:34', '2020-12-10 06:45:58'),
(175, 'Donna Conner', NULL, '1', 5, 837, 'packet', 'Hunter Knowles', 748, 115, 513, 'xl', 'Sujawal', 5, 9, 4, 'MediumOrchid', '896', 44, 'gt', 'industrial', 'Francesca West', 4, 43, 1, 'Nostrum aspernatur c', 24, 'month', NULL, NULL, 'Odette Hickman', 'Vitae excepteur iust', NULL, NULL, NULL, 74, 'Kitra Swanson', 645, 178, '2020-12-09 10:25:43', '2020-12-10 06:45:52'),
(176, 'Nayda Savage', NULL, '1', 883, 484, 'mt', 'Shaine Ballard', 135, 116, 516, 'xl', 'Bhalwal', 15, 4, 2, 'Green', '309', 741, 'mt', 'industrial', 'Noelle Merritt', 18, 51, 5, 'In mollitia quisquam', 56, 'week', NULL, NULL, 'Denise Pope', 'Suscipit excepteur d', NULL, NULL, NULL, 74, 'Aristotle Hood', 906, 184, '2020-12-09 10:30:26', '2020-12-10 06:45:44'),
(177, 'Wallace Caldwell', NULL, '1', 156, 569, 'mt', 'Kessie Ortega', 500, 117, 517, 'md', 'Nagha Kalat', 25, 42, 6, 'gold', '636', 836, 'gt', 'consumer', 'Wang Johnson', 25, 45, 3, 'Enim veniam enim do', 41, 'week', NULL, NULL, 'Joshua Pope', 'Tempora consequatur', NULL, NULL, NULL, 74, 'Galvin Marsh', 621, 177, '2020-12-09 10:31:27', '2020-12-10 06:45:36'),
(178, 'Norman Flynn', NULL, '1', 551, 926, 'mt', 'Abigail Colon', 34, 115, 514, 'lg', 'Mach', 23, 17, 5, 'Indigo', '538', 761, 'mt', 'industrial', 'Charissa Serrano', 24, 48, 11, 'Nihil dolore irure a', 100, 'month', NULL, NULL, 'Lila Franks', 'Placeat incididunt', NULL, NULL, NULL, 74, 'Michael Frye', 937, 185, '2020-12-09 10:41:49', '2020-12-10 06:45:30'),
(179, 'Astra Mckee', NULL, '1', 338, 434, 'g', 'Dorian Buckley', 980, 117, 518, 'lg', 'Mansehra', 13, 31, 8, 'LawnGreen', '825', 183, 'kg', 'durable', 'Gray Whitney', 8, 43, 12, 'Ea quia atque perspi', 25, 'month', NULL, NULL, 'Tanya Decker', 'Nobis quidem dolor m', NULL, NULL, NULL, 74, 'Ethan Pate', 386, 189, '2020-12-09 10:43:04', '2020-12-10 06:45:26'),
(180, 'Jada Shepherd', NULL, '1', 702, 187, 'g', 'Dorian Conner', 253, 117, 518, 'md', 'Layyah', 28, 30, 11, 'DeepSkyBlue', '325', 654, 'mt', 'consumer', 'Zorita Whitaker', 24, 3, 3, 'Ut necessitatibus se', 24, 'week', NULL, NULL, 'Pamela Skinner', 'Deserunt odio itaque', NULL, NULL, NULL, 74, 'Yasir Hughes', 354, 190, '2020-12-09 10:44:04', '2020-12-10 06:45:23'),
(181, 'Sebastian Martinez', NULL, '1', 78, 353, 'packet', 'Chloe Hobbs', 343, 116, 516, 'md', 'Adezai', 18, 49, 7, 'AliceBlue', '567', 6, 'mt', 'consumer', 'Patrick Nolan', 15, 11, 2, 'Assumenda odit occae', 9, 'day', NULL, NULL, 'Keane Doyle', 'Et iusto nisi Nam re', NULL, NULL, NULL, 74, 'Mia Chavez', 734, 184, '2020-12-09 10:45:01', '2020-12-10 06:45:18'),
(182, 'Caldwell Fields', NULL, '1', 931, 600, 'mt', 'Nissim Vaughn', 691, 117, 518, 'lg', 'Ayubia', 9, 14, 6, 'DarkTurquoise', '702', 548, 'kg', 'consumer', 'Leo Lindsey', 2, 51, 3, 'Placeat doloremque', 20, 'day', NULL, NULL, 'Noah Wade', 'Corrupti eos dolore', NULL, NULL, NULL, 74, 'Tamekah Hays', 288, 191, '2020-12-09 10:45:42', '2020-12-10 06:45:13'),
(183, 'Lois Floyd', NULL, '1', 930, 962, 'g', 'Ginger Callahan', 200, 116, 515, 'xl', 'Khanewal', 11, 8, 1, 'BlueViolet', '72', 103, 'g', 'consumer', 'Alexis Roach', 24, 49, 2, 'Officia accusamus du', 58, 'week', NULL, NULL, 'Jaden Torres', 'Consequuntur ipsum v', NULL, NULL, NULL, 74, 'Diana Bradford', 738, 187, '2020-12-09 10:46:19', '2020-12-10 06:44:26'),
(184, 'Ori Knight', NULL, '1', 943, 971, 'dozen', 'Whilemina Olson', 535, 117, 517, 'sm', 'Mianwali', 2, 9, 2, 'FireBrick', '308', 828, 'g', 'durable', 'Davis Hogan', 25, 21, 4, 'Illum necessitatibu', 18, 'month', NULL, NULL, 'Isabelle Herrera', 'Mollitia ex sed alia', NULL, NULL, NULL, 74, 'Scott Malone', 652, 178, '2020-12-09 10:47:16', '2020-12-10 06:44:23'),
(185, 'Hyacinth Rocha', NULL, '0', 460, 104, 'packet', 'Jarrod Clements', 60, 118, 519, 'xl', 'Kalam', 14, 40, 1, 'DimGrey', '549', 770, 'gt', 'industrial', 'Nicholas Bowers', 12, 29, 6, 'Ullam eos quae labo', 52, 'year', NULL, NULL, 'Upton Sampson', 'Cupiditate quas dolo', NULL, NULL, NULL, 74, 'Chandler Hartman', 456, 180, '2020-12-09 10:48:31', '2021-03-31 22:30:19'),
(186, 'Jasper Bentley', NULL, '1', 50, 280, 'packet', 'Rhonda Warner', 432, 115, 513, 'sm', 'Jhudo', 17, 41, 9, 'black', '945', 691, 'kg', 'industrial', 'Ezekiel Maldonado', 14, 19, 10, 'Aliquid quaerat aute', 2, 'week', NULL, NULL, 'Heidi Rutledge', 'Voluptatem Expedita', NULL, NULL, NULL, 74, 'Kimberly Baker', 141, 186, '2020-12-09 10:50:02', '2020-12-10 06:45:10'),
(191, 'Red', '<p>Apples are edible fruits that are cultivated around the world. It is one of the common fruits available in the world. The origin of the apple can be found in Central Asia. Apples are brought by the European colonists to Asia and Europe.</p>', '0', 143, 121, 'dozen', 'Jermaine Potter', 276, 115, 513, 'md', 'Chakwal', 23, 46, 1, 'Chocolate', '61', 921, 'g', 'durable', 'Hamish Cross', 18, 40, 8, 'Explicabo Molestiae', 81, 'month', NULL, NULL, 'Kaseem Mullins', 'Blanditiis dolor vel', '<p>Apples are edible fruits that are cultivated around the world. It is one of the common fruits available in the world. The origin of the apple can be found in Central Asia. Apples are brought by the European colonists to Asia and Europe.</p>', NULL, '<p>Apples are edible fruits that are cultivated around the world. It is one of the common fruits available in the world. The origin of the apple can be found in Central Asia. Apples are brought by the European colonists to Asia and Europe.</p>', 78, 'Raymond Browning', 843, 177, '2020-12-10 12:40:35', '2021-04-03 07:23:02'),
(192, 'sargoda special 100% organic potatoes', '<p>house 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindi</p>', '1', 34, 78, 'kg', 'malikpotato', 12, 115, 514, 'sm', 'Sargodha', 14, 17, 5, 'Azure', 'fasilabad', 12, 'g', 'consumer', 'juicy', 17, 16, 3, 'all season', 11, 'week', NULL, NULL, '99890', 'PAYPAL', '<p>house 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindihouse 432 , street 3, sector a, askari 13 rawalpindi</p>', NULL, '<p>house 432 , street 3, sector a, askari 13 rawalpindi</p>', 81, 'potato,mango,', 5, 179, '2020-12-11 12:15:30', '2020-12-11 12:16:42'),
(193, 'Taylor Conrad', NULL, '0', 159, 319, 'packet', 'Leonard Lara', 811, 116, 516, 'sm', 'Kalandi', 1, 2, 11, 'Peru', '301', 33, 'tonne', 'industrial', 'Nissim Pittman', 6, 9, 9, 'Voluptatem duis vol', 45, 'month', NULL, NULL, 'Dana Barrett', 'Earum rerum harum te', NULL, NULL, '<p>dfghjk</p>', 82, 'Wylie Craft', 708, 184, '2020-12-14 13:49:32', '2020-12-14 13:49:32'),
(194, 'ABAYA', '<p>abaya women</p>', '0', 100, 1000, 'piece', 'sak', 1000, 116, 516, 'xs', 'Rawalpindi', 10, 2, 5, 'Aqua', 'Rawal', 0, 'kg', 'consumer', 'abaya', 7, 1, 1, '100', 100, 'day', NULL, NULL, '211', 'cash', '<p>abaya</p>', NULL, '<p>abaya</p>', 83, 'abaya', 1, 184, '2021-01-05 08:50:24', '2021-01-05 08:50:24'),
(195, 'Neil Vang', '<p>dadasdadada</p>', '1', 442, 792, 'mt', 'Brent Mccoy', 755, 117, 517, 'md', 'Jauharabad', 9, 10, 4, 'LightSlateGray', '307', 57, 'tonne', 'industrial', 'Dorian Aguirre', 15, 2, 11, 'Et reprehenderit pro', 20, 'week', NULL, NULL, 'Hilda Patton', 'Amet quaerat quo ve', '<p>asdadadada</p>', NULL, '<p>asadadadada</p>', 86, 'Gabriel Morales', 915, 179, '2021-03-31 22:38:13', '2021-03-31 22:41:14'),
(196, 'Rosalyn Gentry', NULL, '1', 463, 327, 'packet', 'Alexa Bauer', 821, 118, 519, 'xs', 'Nal', 28, 36, 3, 'AntiqueWhite', '724', 186, 'gt', 'durable', 'Devin Owens', 8, 3, 12, 'Velit aut consequat', 70, 'year', NULL, NULL, 'Phoebe Riley', 'Sed quos aspernatur', NULL, NULL, '<p>lkhkljlkhjk</p>', 87, 'Ciara Travis', 476, 194, '2021-05-06 05:28:20', '2021-05-06 05:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` int(11) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `url`, `thumbnail`, `product_id`, `created_at`, `updated_at`) VALUES
(388, '793528069-product-thumbnail.jpg', 1, 160, '2020-12-09 09:12:19', '2020-12-09 09:12:19'),
(389, '1266053400-product.jpg', NULL, 160, '2020-12-09 09:12:19', '2020-12-09 09:12:19'),
(390, '1311005999-product.jpg', NULL, 160, '2020-12-09 09:12:19', '2020-12-09 09:12:19'),
(391, '341692079-product.jpg', NULL, 160, '2020-12-09 09:12:19', '2020-12-09 09:12:19'),
(392, '952292933-product.jpg', NULL, 160, '2020-12-09 09:12:19', '2020-12-09 09:12:19'),
(410, '2045518501-product-thumbnail.jpg', 1, 166, '2020-12-09 09:25:42', '2020-12-09 09:25:42'),
(411, '1609943525-product.jpg', NULL, 166, '2020-12-09 09:25:42', '2020-12-09 09:25:42'),
(412, '1679511444-product.jpg', NULL, 166, '2020-12-09 09:25:42', '2020-12-09 09:25:42'),
(413, '1398008853-product.jpg', NULL, 166, '2020-12-09 09:25:42', '2020-12-09 09:25:42'),
(414, '1721903139-thumbnail-image.jpg', 1, 167, '2020-12-09 09:56:56', '2020-12-09 09:56:56'),
(415, '1760621724-product.jpg', NULL, 167, '2020-12-09 09:56:56', '2020-12-09 09:56:56'),
(416, '46583048-thumbnail-image.jpg', 1, 168, '2020-12-09 09:58:30', '2020-12-09 09:58:30'),
(417, '1983474657-product.jpg', NULL, 168, '2020-12-09 09:58:30', '2020-12-09 09:58:30'),
(418, '1955908112-thumbnail-image.jpg', 1, 169, '2020-12-09 09:59:01', '2020-12-09 09:59:01'),
(419, '643452922-product.jpg', NULL, 169, '2020-12-09 09:59:01', '2020-12-09 09:59:01'),
(420, '1377860217-thumbnail-image.jpg', 1, 170, '2020-12-09 10:03:09', '2020-12-09 10:03:09'),
(421, '1036645925-product.jpg', NULL, 170, '2020-12-09 10:03:09', '2020-12-09 10:03:09'),
(422, '1016076802-thumbnail-image.jpg', 1, 171, '2020-12-09 10:04:47', '2020-12-09 10:04:47'),
(423, '186808570-product.jpg', NULL, 171, '2020-12-09 10:04:47', '2020-12-09 10:04:47'),
(424, '1372247426-thumbnail-image.jpg', 1, 172, '2020-12-09 10:05:37', '2020-12-09 10:05:37'),
(425, '314355737-product.jpg', NULL, 172, '2020-12-09 10:05:37', '2020-12-09 10:05:37'),
(426, '1352149626-thumbnail-image.jpg', 1, 173, '2020-12-09 10:07:12', '2020-12-09 10:07:12'),
(427, '1502260049-product.jpg', NULL, 173, '2020-12-09 10:07:12', '2020-12-09 10:07:12'),
(428, '375348322-thumbnail-image.jpg', 1, 174, '2020-12-09 10:08:34', '2020-12-09 10:08:34'),
(429, '1916176837-product.jpg', NULL, 174, '2020-12-09 10:08:34', '2020-12-09 10:08:34'),
(430, '1623921413-thumbnail-image.jpg', 1, 175, '2020-12-09 10:25:43', '2020-12-09 10:25:43'),
(431, '1439399310-product.jpg', NULL, 175, '2020-12-09 10:25:43', '2020-12-09 10:25:43'),
(432, '1363089878-thumbnail-image.jpg', 1, 176, '2020-12-09 10:30:26', '2020-12-09 10:30:26'),
(433, '1491880374-product.jpg', NULL, 176, '2020-12-09 10:30:26', '2020-12-09 10:30:26'),
(434, '2007458943-thumbnail-image.jpg', 1, 177, '2020-12-09 10:31:27', '2020-12-09 10:31:27'),
(435, '299138870-product.jpg', NULL, 177, '2020-12-09 10:31:27', '2020-12-09 10:31:27'),
(436, '640906911-thumbnail-image.jpg', 1, 178, '2020-12-09 10:41:49', '2020-12-09 10:41:49'),
(437, '1092002706-product.jpg', NULL, 178, '2020-12-09 10:41:49', '2020-12-09 10:41:49'),
(438, '1874988328-thumbnail-image.jpg', 1, 179, '2020-12-09 10:43:04', '2020-12-09 10:43:04'),
(439, '1883706049-product.jpg', NULL, 179, '2020-12-09 10:43:04', '2020-12-09 10:43:04'),
(440, '111272275-thumbnail-image.jpg', 1, 180, '2020-12-09 10:44:04', '2020-12-09 10:44:04'),
(441, '953436902-product.jpg', NULL, 180, '2020-12-09 10:44:04', '2020-12-09 10:44:04'),
(442, '1464123795-thumbnail-image.jpg', 1, 181, '2020-12-09 10:45:01', '2020-12-09 10:45:01'),
(443, '968791606-product.jpg', NULL, 181, '2020-12-09 10:45:01', '2020-12-09 10:45:01'),
(444, '1296628724-thumbnail-image.jpg', 1, 182, '2020-12-09 10:45:42', '2020-12-09 10:45:42'),
(445, '1995015215-product.jpg', NULL, 182, '2020-12-09 10:45:42', '2020-12-09 10:45:42'),
(446, '816771567-thumbnail-image.jpg', 1, 183, '2020-12-09 10:46:19', '2020-12-09 10:46:19'),
(447, '1435708110-product.jpg', NULL, 183, '2020-12-09 10:46:19', '2020-12-09 10:46:19'),
(448, '564785356-thumbnail-image.jpg', 1, 184, '2020-12-09 10:47:16', '2020-12-09 10:47:16'),
(449, '313916428-product.jpg', NULL, 184, '2020-12-09 10:47:16', '2020-12-09 10:47:16'),
(450, '2081202971-thumbnail-image.jpg', 1, 185, '2020-12-09 10:48:31', '2020-12-09 10:48:31'),
(451, '1453424010-product.jpg', NULL, 185, '2020-12-09 10:48:31', '2020-12-09 10:48:31'),
(452, '1344950632-thumbnail-image.jpg', 1, 186, '2020-12-09 10:50:02', '2020-12-09 10:50:02'),
(453, '2040541255-product.jpg', NULL, 186, '2020-12-09 10:50:02', '2020-12-09 10:50:02'),
(468, '1125636216-product-thumbnail.jpg', 1, 191, '2020-12-10 12:40:35', '2020-12-10 12:40:35'),
(469, '1966905039-product.jpg', NULL, 191, '2020-12-10 12:40:35', '2020-12-10 12:40:35'),
(470, '909396765-product.jpg', NULL, 191, '2020-12-10 12:40:35', '2020-12-10 12:40:35'),
(471, '722453630-product.jpg', NULL, 191, '2020-12-10 12:40:35', '2020-12-10 12:40:35'),
(472, '503170340-product-thumbnail.png', 1, 192, '2020-12-11 12:15:30', '2020-12-11 12:15:30'),
(473, '365611013-product.png', NULL, 192, '2020-12-11 12:15:30', '2020-12-11 12:15:30'),
(474, '1748090036-product-thumbnail.jpg', 1, 193, '2020-12-14 13:49:32', '2020-12-14 13:49:32'),
(475, '445996011-product.jpg', NULL, 193, '2020-12-14 13:49:32', '2020-12-14 13:49:32'),
(476, '126236236-product.jpg', NULL, 193, '2020-12-14 13:49:32', '2020-12-14 13:49:32'),
(477, '244153159-product-thumbnail.jpeg', 1, 194, '2021-01-05 08:50:24', '2021-01-05 08:50:24'),
(478, '1273451184-product.jpeg', NULL, 194, '2021-01-05 08:50:24', '2021-01-05 08:50:24'),
(479, '259750727-thumbnail-image.png', 1, 195, '2021-03-31 22:38:13', '2021-03-31 22:38:13'),
(480, '151172586-product.png', NULL, 195, '2021-03-31 22:38:13', '2021-03-31 22:38:13'),
(481, '1085081640-product.png', NULL, 195, '2021-03-31 22:38:13', '2021-03-31 22:38:13'),
(482, '139295007-product.png', NULL, 195, '2021-03-31 22:38:13', '2021-03-31 22:38:13'),
(483, '1010557827-thumbnail-image.jpg', 1, 196, '2021-05-06 05:28:20', '2021-05-06 05:28:20'),
(484, '1232005878-product.jpg', NULL, 196, '2021-05-06 05:28:20', '2021-05-06 05:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `description`, `rating`, `approved`, `created_at`, `updated_at`, `email`) VALUES
(10, NULL, 167, '5 star rating is outstanding', 5, 1, '2020-12-09 15:44:59', '2020-12-09 16:00:39', 'waheed.eliccs2@gmail.com'),
(11, NULL, 167, 'Yes Raty is really realy good.', 3, 1, '2020-12-09 15:45:47', '2020-12-09 16:00:37', 'waheed2.eliccs@gmail.com'),
(12, NULL, 173, 'Test is good with rating', 4, 0, '2020-12-10 07:44:59', '2020-12-10 07:44:59', 'waheed.eliccs@gmail.com'),
(13, NULL, 191, 'good', NULL, 1, '2020-12-10 13:07:53', '2020-12-10 13:08:51', 'test@test.com'),
(14, NULL, 178, 'uyuiihui', 4, 0, '2020-12-11 09:53:01', '2020-12-11 09:53:01', 'justchillbabyy@gmail.com'),
(15, NULL, 192, 'VERY GOOD', NULL, 1, '2020-12-11 12:28:39', '2020-12-11 12:30:23', 'USMAN11@GMAIL.COM'),
(16, NULL, 174, 'Laudantium animi f', 2, 0, '2021-01-04 06:08:37', '2021-01-04 06:08:37', 'sipec@mailinator.com'),
(17, NULL, 160, NULL, NULL, 0, '2021-01-06 19:08:26', '2021-01-06 19:08:26', 'buyer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rfqs`
--

CREATE TABLE `rfqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-1',
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `rfqDocument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rfqs`
--

INSERT INTO `rfqs` (`id`, `status`, `customer_id`, `product_id`, `qty`, `content`, `customer_name`, `email`, `created_at`, `updated_at`, `subject`, `seller_id`, `rfqDocument`) VALUES
(23, '-1', 25, 166, 899, 'kkkk', 'Waheed Sindhani', 'supplier ABC Nasir Khan Jan', '2020-12-09 09:46:40', '2020-12-09 09:46:40', 'Inquiry About  ( Victoria Little )', 2, '1607507200rfq-file.jpg'),
(24, '-1', 36, 191, 940, 'bilawalshah', 'today10', 'supplier ABC Nasir Khan Jan', '2020-12-10 12:57:22', '2020-12-10 12:57:22', 'Inquiry About  ( Red )', 78, '1607605042rfq-file.jpg'),
(25, '-1', 37, 178, 10, 'ooiiopp', 'Arisha Kamran', 'supplier ABC Nasir Khan Jan', '2020-12-11 09:53:29', '2020-12-11 09:53:29', 'Inquiry About  ( Norman Flynn )', 74, '1607680409rfq-file.jpg'),
(26, '-1', 43, 192, 12, 'I NEED 4 TONS', 'USMAN JADOON', 'supplier ABC Nasir Khan Jan', '2020-12-11 12:21:16', '2020-12-11 12:21:16', 'Inquiry About  ( sargoda special 100% organic potatoes )', 81, '1607689276rfq-file.png'),
(27, '-1', 48, 172, 12, 'ewwe', 'Drake Wright', 'supplier ABC Nasir Khan Jan', '2021-01-04 06:22:28', '2021-01-04 06:22:28', 'Inquiry About  ( Kareem Parker )', 74, '1609741348rfq-file.jpg'),
(28, '-1', 51, 167, 50, 'dksjklsjkljskjfldskjfd', 'tajamul hussain', 'supplier ABC Nasir Khan Jan', '2021-01-14 07:25:27', '2021-01-14 07:25:27', 'Inquiry About  ( Arden Gaines )', 74, '1610609127rfq-file.jpg'),
(29, '-1', 54, 167, 500, 'sjakjksajkldjklajsdkla', 'LIO', 'supplier ABC Nasir Khan Jan', '2021-03-31 21:58:38', '2021-03-31 21:58:38', 'Inquiry About  ( Arden Gaines )', 74, '1617231518rfq-file.rtf'),
(30, '-1', 55, 167, 2222, 'dadsasdhashdjsahdjkshajsdhad', 'sit', 'supplier ABC Nasir Khan Jan', '2021-03-31 22:22:11', '2021-03-31 22:22:11', 'Inquiry About  ( Arden Gaines )', 74, '1617232931rfq-file.rtf'),
(31, '-1', 57, 195, 500, 'please give me soon haskjaskj', 'abcde', 'supplier ABC Nasir Khan Jan', '2021-04-03 07:42:30', '2021-04-03 07:42:30', 'Inquiry About  ( Neil Vang )', 86, '1617439350rfq-file.rtf'),
(32, '-1', 58, 196, 940, 'klajsdfklajlkdfjakljdajdklfsdjfklsdjfdjsdsdjkliokliokjoiiokljuokljiouljikl', 'new buyer', 'supplier ABC Nasir Khan Jan', '2021-05-06 05:31:16', '2021-05-06 05:31:16', 'Inquiry About  ( Rosalyn Gentry )', 87, '1620282676rfq-file.png');

-- --------------------------------------------------------

--
-- Table structure for table `rfq_responses`
--

CREATE TABLE `rfq_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfq_id` int(10) UNSIGNED DEFAULT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'buyer', 'web', NULL, NULL),
(3, 'seller', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo_path`, `status`, `suspended`, `company_id`, `created_at`, `updated_at`) VALUES
(2, 'Waheed Sindhani', 'admin@example.com', NULL, '$2y$10$oDmwQvlH4HHABcMgg/yN/.FTN69d9EBnDM3PEe1tC9VhiRYI7.DVe', NULL, NULL, 0, 1, NULL, '2020-11-14 15:55:04', '2021-04-03 07:01:49'),
(3, 'Muneer Ahmad', 'justchillbabyy@gmail.com', NULL, '$2y$10$iExEYRDgh05289eCZPEGWuicI8hBMu0ulxALSuj3WiAkPsd5wtAnS', NULL, NULL, 0, 0, NULL, '2020-11-17 13:39:20', '2021-04-03 07:02:16'),
(4, 'test seller', 'test@email.com', NULL, '$2y$10$ycKVg6HjpY8s7CdwcPqQKO.D.Vm9B7561VU/KmAGkXqSG5Wyr8W2m', NULL, NULL, 0, 0, NULL, '2020-11-20 02:27:38', '2020-11-30 02:56:16'),
(5, 'Tana Osborn', 'rydijopole@mailinator.com', NULL, '$2y$10$inbjZroJsq379Yjq/5MqwOnirpwWYYoC3iwYY2NELtGHNxeMNXKja', NULL, NULL, 0, 0, NULL, '2020-11-20 02:38:54', '2020-12-09 12:40:28'),
(6, 'Jaquelyn Knapp', 'rubume@mailinator.com', NULL, '$2y$10$bYvQrxK85hQ7H1P0CP4.buLipOnOAfxwFfgUbnVW1xapz3M5IGJS6', NULL, NULL, 1, 0, NULL, '2020-11-20 02:43:15', '2020-11-27 02:24:20'),
(7, 'Apple', 'apple@apple.com', NULL, '$2y$10$g8/EvRQA86ocVKfu6wU7EeXdh/7Q.2IGUmhFOLFvk/zWULoS.P886', NULL, NULL, 0, 0, NULL, '2020-11-20 02:46:09', '2020-11-20 04:01:17'),
(8, 'Octavius Potts', 'sotil@mailinator.com', NULL, '$2y$10$8v8hPylbe5ucYhOO.WY2KOk1eZTE0FAiX/3EuFgo4To.MDlrad/46', NULL, NULL, 0, 0, NULL, '2020-11-20 08:58:58', '2020-11-20 08:58:58'),
(9, 'Sarah Griffin', 'baqije@mailinator.com', NULL, '$2y$10$C4b2CQoGG3I.s0HcqnOBCO3cpPD1JObJy3yazVmBPFN2pMJTTmgaC', NULL, NULL, 0, 0, NULL, '2020-11-20 08:59:19', '2020-11-20 08:59:19'),
(11, 'Lane Cash', 'gasisihevo@mailinator.com', NULL, '$2y$10$g2IrXjfvlae3.whrMsUFCOJptJidJehkub7oC63SqT6Ur8uQHOOuC', NULL, NULL, 1, 0, NULL, '2020-11-20 09:01:09', '2020-11-27 02:29:03'),
(12, 'Cameron Kemp', 'mehi@mailinator.com', NULL, '$2y$10$w30i/mnU3iottDNiM5ZhHuUkUtYs1OO/.IA3jep3BDoQWrNZOISOS', NULL, NULL, 0, 0, NULL, '2020-11-20 09:05:10', '2020-11-20 09:05:10'),
(13, 'Mallory Thornton', 'sebom@mailinator.com', NULL, '$2y$10$jbNDrGQo6IN3x8Ckf3k4EOa8VGK.yKM6.fpyufBAzftK2Nc4F/y5y', NULL, NULL, 0, 0, NULL, '2020-11-20 09:05:28', '2020-11-20 09:05:28'),
(14, 'abbbbbb', 'ibrar@gmail.com', NULL, '$2y$10$mSNGx3bRLmLT9g.FZ/XRHe/hCFAtkfK3dbLD2SIaE/9qzG0Nt0HNC', NULL, NULL, 1, 0, NULL, '2020-11-20 09:06:39', '2020-11-20 09:12:32'),
(15, 'test4', 'test4@gmail.com', NULL, '$2y$10$V46lhN/YC2rVObh8r5/0FO2TR9dJm5KqjUT1pvXJfsg6hetbs2pfu', NULL, NULL, 1, 0, NULL, '2020-11-20 09:08:42', '2020-11-20 09:12:22'),
(16, 'Waheed Sindhani33', 'test5@gmail.com', NULL, '$2y$10$VvRmWPGDDMHsXI5RqHAJIexOjOu8ooOuZG7W8KinH.vOh4R9wzJuK', NULL, NULL, 0, 0, NULL, '2020-11-21 04:22:16', '2020-11-21 04:22:16'),
(17, 'Carson Jacobs', 'fucycohy@mailinator.com', NULL, '$2y$10$N86q8Cg6D15/yqzHhvUVjOZWvusvGc6D6Hy65CQ.x1ztXyKbJvh6a', NULL, NULL, 0, 0, NULL, '2020-11-21 04:29:37', '2020-11-21 04:29:37'),
(18, 'Valentine Adkins', 'rydygamisu@mailinator.com', NULL, '$2y$10$uruI3WwoOx.hIz.HaLX9F.nFfFSgvmtNVMYV7Fm300Aondtd3vmEK', NULL, NULL, 0, 0, NULL, '2020-11-21 04:31:51', '2020-11-21 04:31:51'),
(19, 'Gay Fleming', 'abcde@gmail.com', NULL, '$2y$10$r.WvjjEAGHl8P.iyYV9DG.8upgY.dlQicuHZ3wAWzKHH6yMCWS.i.', NULL, NULL, 1, 0, NULL, '2020-11-21 04:32:35', '2020-11-21 04:35:45'),
(20, 'Iliana French', 'test6@gmail.com', NULL, '$2y$10$nd9qsa11VHZqbhcn.v5aSOeu8wSuEp4CJmf/hYeynKvdL4sx70GBe', NULL, NULL, 1, 0, NULL, '2020-11-21 04:45:06', '2020-11-21 05:00:38'),
(21, 'Waheed Sindhani', 'Waheed.eliccs@gmail.com', NULL, '$2y$10$3dr0fDW08OyIR/KllznEFOcouWgxrF1XEqwgttoThc8JJiSwiBqTa', NULL, NULL, 0, 0, NULL, '2020-11-21 16:24:35', '2020-11-21 16:24:35'),
(22, 'Abaid', 'abaid@admin.com', NULL, '$2y$10$W.KVQZ5Tl5/c3/O9yzq/9O.KhPYK9geNYE4vhoD13vEhfj9mBd03m', NULL, NULL, 0, 0, NULL, '2020-11-22 00:43:30', '2020-11-22 01:06:51'),
(23, 'Kumail', 'kumail@admin.com', NULL, '$2y$10$95/dKIqHcU63u9Pfe6EdE.YPGvUurAfT108SL7jVUvkP3PSeiUh6q', NULL, NULL, 0, 0, NULL, '2020-11-22 01:07:56', '2020-11-22 01:07:56'),
(24, 'kumail2', 'kumail2@admin.com', NULL, '$2y$10$W4EbIkpRdacGmZiart62k.BvyGyqjtl3d7Wkq6IyoI82UWJPgDJL2', NULL, NULL, 0, 0, NULL, '2020-11-22 01:09:25', '2020-11-22 01:09:25'),
(25, 'unknown', 'unkown@admin.com', NULL, '$2y$10$5T3q5OQMEq1H9JAORKr/QegCrFOFM.3x9uI9unqI6T7jXLnxHaL9G', NULL, NULL, 1, 0, NULL, '2020-11-22 01:11:07', '2020-11-22 02:08:19'),
(26, 'cplussoft', 'cplussoft@admin.com', NULL, '$2y$10$nIU4l9E5RvrAcmEI4B6jKe8g2mdgtl45mE1ViywlfkmNBgPR8mprK', NULL, NULL, 0, 0, NULL, '2020-11-22 01:13:30', '2020-11-22 01:13:30'),
(28, 'random', 'random@random.com', NULL, '$2y$10$mh3EhAI530PUC4Y9XLK6MuoIQCwsjilIhBQFxaAOUpBohJmXUlW5W', NULL, NULL, 1, 0, NULL, '2020-11-22 01:15:29', '2020-11-22 01:17:39'),
(32, 'abc', 'abc@gmail.com', NULL, '$2y$10$j3jznTgx8osJTjiE08.MDOBEmTwGk0am1/2lSMRXgjSXniRxYgL8.', NULL, NULL, 0, 0, NULL, '2020-11-22 02:04:07', '2020-11-22 02:04:07'),
(33, 'Waheed Sindhani', 'incognito@gmail.com', NULL, '$2y$10$yhfhsHM97RsQU6r2tzaK/ul3KhOvbW9WsrlkF6NnlxxgX1gdgAxj2', NULL, NULL, 0, 0, NULL, '2020-11-22 02:05:26', '2020-11-22 02:05:26'),
(34, 'Waheed Sindhani', 'random6@gmail.com', NULL, '$2y$10$5XfjuB3fgCB8fi2gyrjETO6/7aTPMflclqGw2CS95RH1hLLQ1WegC', NULL, NULL, 0, 0, NULL, '2020-11-22 04:58:43', '2020-11-22 04:58:43'),
(35, 'Beta Testing Seller', 'betatestingseller@test.com', NULL, '$2y$10$ftWdbNEDPWx3OqrUHWCnvunFlZbn2EKsU0ns80m4MiSAa7fdFgqb.', NULL, NULL, 0, 0, NULL, '2020-11-22 08:23:12', '2020-11-22 08:23:12'),
(36, 'betatestingseller2@test.com', 'betatestingseller2@test.com', NULL, '$2y$10$Xbby0hTtPAj3vzOzzoOY5O4A7FYzF1X2l3Dh1cnWktiQQpOPNUtfO', NULL, NULL, 0, 0, NULL, '2020-11-22 08:24:06', '2020-11-22 08:27:36'),
(37, 'Test Seller 3', 'testseller3@test.com', NULL, '$2y$10$sx00FcBmGYVp0h9ALcJqFOyORm7GsZTrPoEnI5HuIv5TqsAIMf0jS', NULL, NULL, 1, 0, NULL, '2020-11-22 08:34:54', '2020-11-22 08:38:40'),
(38, 'Waheed Sindhani', 'a122@g.com', NULL, '$2y$10$81vsi38jlRsIVr0yb8dekekFVliCzYxHgiO.k86jfj2BeWcu31cfS', NULL, NULL, 0, 0, NULL, '2020-11-22 14:38:18', '2020-11-22 14:38:18'),
(39, 'Kendall Humphrey', 'lyregedo@mailinator.com', NULL, '$2y$10$.VqbnMQWx9qpkvJEAsabCehswN3ZRHlf2y9U6k4n/.hk5Iv.b89NC', NULL, NULL, 0, 0, NULL, '2020-11-22 14:39:20', '2020-11-22 14:39:20'),
(40, 'Nathaniel Dotson', 'baky@mailinator.com', NULL, '$2y$10$rpR0Ipa.pC3K6UdhEURjK.ET9Qpc6nMO63ihE1TPjCkLWJdLR7hTK', NULL, NULL, 0, 0, NULL, '2020-11-23 02:24:16', '2020-11-23 02:24:16'),
(41, 'Alana Houston', 'hocekinofe@mailinator.com', NULL, '$2y$10$m8hV/ZEFm5zh9Ngu4DEKQejRXpapOmBBJQ0C.6jYjV2de3va9ErnS', NULL, NULL, 0, 0, NULL, '2020-11-23 04:20:23', '2020-11-23 04:20:23'),
(42, 'Yardley Gibson', 'gakiqo@mailinator.com', NULL, '$2y$10$5BNObAYaO1VFLEtRGtG5duVn84lUWsUaFSDRSeZwWGegPivM9Ywd2', NULL, NULL, 0, 0, NULL, '2020-11-24 01:00:28', '2020-11-24 01:00:28'),
(43, 'Genevieve Leach', 'riciq@mailinator.com', NULL, '$2y$10$5ZBwj/HyM1Pn7muJ5E0MK.6FbM4/PWyYNv5egHLyo7EZfzgURUwUa', NULL, NULL, 0, 0, NULL, '2020-11-24 01:23:37', '2020-11-24 01:23:37'),
(44, 'Rafael Lester', 'jymenonyfo@mailinator.com', NULL, '$2y$10$nXMFI.j5NI3kJZDRx3C3NOHcoTy58udQnu8HxNzytbiJQNvDVihnS', NULL, NULL, 0, 0, NULL, '2020-11-24 02:06:22', '2020-11-24 02:06:22'),
(45, 'Cherokee Shelton', 'peqex@mailinator.com', NULL, '$2y$10$Rj7Y8Z5tk9tYzed9xoHUceAifZaPv154VclKHcQbPBH/4//pnF2dq', NULL, NULL, 1, 0, NULL, '2020-11-27 23:32:32', '2020-11-27 23:37:49'),
(46, 'Muneer Ahmad', 'cplusoft@gmail.com', NULL, '$2y$10$Y5epdjSNJFM8/B3n3y5xX.u.PGYl5jF5EaNacCI6hfiV5yrrShmFi', NULL, NULL, 0, 0, NULL, '2020-12-02 14:37:41', '2020-12-02 14:37:41'),
(47, 'Waheed Sindhani', 'livetest@gmail.com', NULL, '$2y$10$X.ws3JLd/nBNEf/MUeuOkOyMeG2gQXP8FgvE/wh979yufGF/3BEf6', NULL, NULL, 0, 0, NULL, '2020-12-02 14:38:24', '2020-12-02 14:38:24'),
(48, 'test', 'test@test1.com', NULL, '$2y$10$QlsVDWGP5VIqEVsDjcM.g.Xb4DAx5.jGQAwFpTpFeKKn0eM4T5pFy', NULL, NULL, 0, 0, NULL, '2020-12-02 14:44:05', '2020-12-02 14:44:05'),
(49, 'Waheed Sindhani', 'livetest3@gmail.com', NULL, '$2y$10$WNje3Yc3DxMPy3BvaIEROu3V28fKGExkDa2Te9K97aQaVXM84R426', NULL, NULL, 0, 0, NULL, '2020-12-02 14:45:05', '2020-12-02 14:45:05'),
(51, 'Waheed Sindhani', 'waheed.eliccsseller@gmail.com', NULL, '$2y$10$cChgouHOYZ.HNvu.Hg9g1eb4RNeJe.aPrgp1turTIAKdOkcDzrrJy', NULL, NULL, 0, 0, NULL, '2020-12-03 07:03:44', '2020-12-03 07:03:44'),
(52, 'Waheed Sindhani', 'waheed.eliccstest3@gmail.com', NULL, '$2y$10$FQqqaF8q76jT9sXlxoJcx.hyTMGTmDeLCezEMwweBo63Bt99FkOTy', NULL, NULL, 0, 0, NULL, '2020-12-03 07:07:53', '2020-12-03 07:07:53'),
(53, 'Waheed Sindhani', 'waheed.eliccstest@gmail.com', NULL, '$2y$10$fdtI/ztvhHAxmGgsHVTLVOTlQzPp5MEgnxXH2vuIPknDACwu65Azm', NULL, NULL, 0, 0, NULL, '2020-12-03 07:26:49', '2020-12-03 07:26:49'),
(54, 'Waheed Sindhani', 'dev@dev.gamil.com', NULL, '$2y$10$zoT9US0LIdqiPvcz8unOaOv0otv2sYJXVplYNn9ClMPNXEcwYhV32', NULL, NULL, 0, 0, NULL, '2020-12-03 07:29:01', '2020-12-03 07:29:01'),
(55, 'Waheed Sindhani', 'dev@test.com', NULL, '$2y$10$AZS51Z2rEvX.JOwCkXTboe8zYO0.bJFVdUl42szp/RnW/ss40yCj.', NULL, NULL, 0, 0, NULL, '2020-12-03 07:29:51', '2020-12-03 07:29:51'),
(56, 'testseller6@gmail.com', 'testseller6@gmail.com', NULL, '$2y$10$ThjwvNRvEF/2qEWzl1EiruZdI0OzE2FKg1N6Po8te0CKD8e3VRTji', NULL, NULL, 0, 0, NULL, '2020-12-03 07:55:59', '2020-12-03 07:55:59'),
(57, 'test@dev.dev', 'test@dev.dev', NULL, '$2y$10$2hqffMkq1IV.HQTcA1Z/Ne9czaIU1/DIXDSwLeiCaLLivSrtz5Z5i', NULL, NULL, 0, 0, NULL, '2020-12-03 08:02:02', '2020-12-03 08:02:02'),
(58, 'testdev@test.com', 'testdev@test.com', NULL, '$2y$10$0InJRtIQI55x/wE6K6oLHu0nc2WylsNSrktrx0jrpx9nuX1bVVn82', NULL, NULL, 0, 0, NULL, '2020-12-03 08:10:49', '2020-12-03 08:10:49'),
(59, 'test', 'test@aol.com', NULL, '$2y$10$HnVgpwnP3JjsWy6kV8B3ROhanfm42rfccTJGyNPoNmwHHcqFeRpR6', NULL, NULL, 1, 1, NULL, '2020-12-03 17:07:31', '2020-12-03 17:07:57'),
(61, 'aaa', 'aaa@aaa.com', NULL, '$2y$10$PDPDiM4MTsSgn8R65uu46ODRCmaWD42513GN9Wh2ippI9CxZDOHOO', NULL, NULL, 0, 0, NULL, '2020-12-07 09:49:11', '2020-12-07 09:49:11'),
(64, '1212', '1234@123.com', NULL, '$2y$10$VNAjGIBolMWVoHLg.Yqsz.0G/Au1LKA7NEYitSl0BlMa6tAVaLcAO', NULL, NULL, 0, 0, NULL, '2020-12-07 10:06:37', '2020-12-07 10:06:37'),
(66, 'qwerty', 'qwerty@123.com', NULL, '$2y$10$11D7MjUy6gumyO5/TOcRiut9fbcXgxJL.pdWARLNLGTZCyGgs.QtW', NULL, NULL, 0, 0, NULL, '2020-12-07 10:09:22', '2020-12-07 10:09:22'),
(67, 'Colorado Fulton', 'cemopoj@mailinator.com', NULL, '$2y$10$UfgQ.NnMFQj8Y3m2Wv7HyOXQUGwwxzjQbuInHmUrBNjNRdMR9tF6O', NULL, NULL, 0, 0, NULL, '2020-12-07 10:16:31', '2020-12-07 10:16:31'),
(68, 'kumail', 'kumail@1234.com', NULL, '$2y$10$U4.XiNKbS1xgvcgVytChLusJz8Aijn7GUOU52wcyB7vEl9Qkq1gTm', NULL, NULL, 1, 0, NULL, '2020-12-07 13:02:45', '2020-12-07 13:29:08'),
(70, 'seller', 'seller@test.com', NULL, '$2y$10$hNsEfjvRFndhB8rlYPgOJ.j55q57fFnHyGxsixRVdHRBQDXvT4nIO', NULL, NULL, 0, 0, NULL, '2020-12-08 07:18:30', '2020-12-08 07:18:30'),
(71, 'BilawalBasheer', 'test@test.com', NULL, '$2y$10$YKOZ1OpzWvi3lRaOw7zMwuSEzEudAyUVPrrCDI85.9eixbIA5hcxe', NULL, NULL, 1, 0, NULL, '2020-12-08 07:23:30', '2020-12-08 08:07:48'),
(72, 'Belle Tran', 'rucup@mailinator.com', NULL, '$2y$10$ynCLI6ZkdvbNRFe2O0NHC.fiwnQmAcb77I.2FmP8SpuTMi2KuXfcq', NULL, NULL, 0, 0, NULL, '2020-12-08 16:45:01', '2020-12-08 16:45:01'),
(73, 'Hanna Harrington', 'sivudybut@mailinator.com', NULL, '$2y$10$e5r2IqmuiZL7Nd6d4hZ/G.qWgLW3x0VedJXAeXC2Z.NB0uWPzLbV2', NULL, NULL, 1, 0, NULL, '2020-12-08 16:46:52', '2020-12-08 16:51:47'),
(74, 'newSeller', 'seller@admin.com', NULL, '123456789', NULL, NULL, 1, 0, NULL, '2020-12-08 17:47:54', '2021-05-06 05:19:32'),
(76, 'Muneer Ahmad', 'habib12@admin.com', NULL, '$2y$10$Vf3BihGdRDKYss6zl7VkZOZYoZduYzCg0lheVCGz6Y7iauQmPKunu', NULL, NULL, 1, 0, NULL, '2020-12-08 18:12:52', '2020-12-08 18:19:26'),
(77, 'Waheed Sindhani', 'testing@testing2.com', NULL, '$2y$10$O6ujwVjnYfaMGxOY8WG28.FeJgkRaRWXPlogmQYMuaFMHXOCor0Qi', NULL, NULL, 1, 0, NULL, '2020-12-09 16:33:27', '2020-12-09 16:39:57'),
(78, 'stoday10', 'stoday10@gmail.com', NULL, '$2y$10$Jl5lJ.52G1RtwCEBwH0QJ.tGO9nt.Lvhpi4FXrDOKdxh1JuSeHpoG', NULL, NULL, 1, 0, NULL, '2020-12-10 12:09:58', '2020-12-10 12:18:05'),
(79, 'kumail bhai', 'kumail123@gmail.com', NULL, '$2y$10$DKwvfuAJa4E2cOC.rZXEfOVGTs10KEcNzyY6N.I68U.g0RLcIeyvi', NULL, NULL, 0, 0, NULL, '2020-12-11 11:51:21', '2020-12-11 11:51:21'),
(80, 'Kumailbhai', 'asd123@gmail.com', NULL, '$2y$10$2P7IhKEC7oKQxqKXqgHwnudcCA9Pi/1154EjCTV1PjJGcxq8zULbe', NULL, NULL, 1, 0, NULL, '2020-12-11 11:55:13', '2020-12-11 11:58:07'),
(81, 'bill', 'usmanjadoon1@live.com', NULL, '$2y$10$QPFeTgegbMDO/xC55ooEDehnLsARgSYqRJeEBlKAI4/tJ3k.zn9.G', NULL, NULL, 1, 1, NULL, '2020-12-11 12:01:09', '2020-12-11 12:33:54'),
(82, 'azan', 'ahsan@gmail.com', NULL, '$2y$10$1wijfLjodMMrYKqrSCAlNOEGNaxemL/eYZ.iYu2GVMrvn6w2z5woW', NULL, NULL, 1, 0, NULL, '2020-12-14 11:44:38', '2020-12-14 13:17:44'),
(83, 'Rohait', 'rohait007@gmail.com', NULL, '$2y$10$TktsBa9BRgOK6J.5WfUl2eLeOW3XQvyLAgc.4EKZyYAPXaXknxfkq', NULL, NULL, 1, 0, NULL, '2021-01-05 08:31:26', '2021-01-05 08:42:33'),
(84, 'ghulam', 'rasooljilniaug2016@gmil.com', NULL, '$2y$10$JedYN2L4N7ik8.453npBDuW2rW64wwEDZtwj7ta8/uWIlso/Bjq6S', NULL, NULL, 1, 0, NULL, '2021-02-18 08:59:57', '2021-02-18 09:01:23'),
(85, 'lio', 'lio123@gmail.com', NULL, '$2y$10$zmXhZu2ZH8iqYqXgnk8KpO3KZnSCcHueEEjtHSPPZ/xxuSnEz2oWu', NULL, NULL, 1, 0, NULL, '2021-03-31 21:59:45', '2021-03-31 22:05:10'),
(86, 'sit', 'sit123@gmail.com', NULL, '$2y$10$/59okC.WpH/EorPgTAtznebrSLLg/oLpcsCXH.zDFtIB3t1g6Lg/i', NULL, NULL, 1, 0, NULL, '2021-03-31 22:24:05', '2021-03-31 22:29:53'),
(87, 'New', 'new@gmail.com', NULL, '$2y$10$Cy5WSqETCAQn5CPP90Xr8O7qUNoPQY1O2iCyRZfTfkwpwKo4HO6Wm', NULL, NULL, 1, 1, NULL, '2021-05-06 05:21:56', '2021-05-06 05:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1ZYNS9lCfdrwskiVsIi0Bm57FpAsQfObIDsLWtkl', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6IlR2c09ob002S2FQaUo2N1RNR1BjYmFuOFE4OGtHNHp1eGtMdEpMcmgiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc2VsbGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJwcm9kdWN0IjtzOjA6IiI7aTowO2k6MTtzOjM6InVybCI7YTowOnt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6NTM6ImxvZ2luX3NlbGxlcl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTM7czo1MjoibG9naW5fYnV5ZXJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMzt9', 1606917546);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_image` blob DEFAULT NULL,
  `brand_images` blob DEFAULT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `address`, `category`, `slide_image`, `brand_images`, `header_logo`, `footer_logo`, `created_at`, `updated_at`) VALUES
(1, '{\"\'mobile\'\":\"03051387510\",\"\'phone\'\":\"03051387510\",\"\'fax\'\":null}', 'Adyala road Rawalpindi', '[\"115\",\"116\",\"117\",\"118\"]', 0x613a333a7b693a303b733a32353a2237313935343834322d736c696465722d696d6167652e706e67223b693a313b733a32373a22313330313431353436372d736c696465722d696d6167652e706e67223b693a323b733a32373a22313636333535363431372d736c696465722d696d6167652e706e67223b7d, 0x613a343a7b693a303b733a32353a223239343633323532372d6272616e642d696d6167652e6a7067223b693a313b733a32363a22313633363634393936352d6272616e642d696d6167652e6a7067223b693a323b733a32353a223536323038363431382d6272616e642d696d6167652e6a7067223b693a333b733a32363a22323030373336353136362d6272616e642d696d6167652e6a7067223b7d, '2013963399-header-logo.jpg', '556777952-footer-logo.JPG', '2020-11-18 06:06:05', '2020-12-10 13:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `slider_heading`, `slider_description`, `slider_image_url`, `setting_id`, `created_at`, `updated_at`) VALUES
(9, 'Test Slider', 'Get it before it ends.', '1444252601-slider-image.jpg', 1, '2020-12-09 12:21:51', '2020-12-09 12:21:51'),
(10, 'Test Slider Headessssr', 'This sale will not stay long.', '1431628579-slider-image.png', 1, '2020-12-09 12:22:19', '2020-12-11 12:41:19'),
(11, 'Slide Header Three', 'Testing Sale is ended Up', '1353892359-slider-image.jpg', 1, '2020-12-09 12:22:55', '2020-12-09 12:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(513, 'Fruits', 115, '2020-12-09 08:52:46', '2020-12-09 08:52:46'),
(514, 'Vegetable', 115, '2020-12-09 08:54:12', '2020-12-09 08:54:12'),
(515, 'Men Apparel', 116, '2020-12-09 08:56:02', '2020-12-09 08:56:02'),
(516, 'Women Apparel', 116, '2020-12-09 08:57:00', '2020-12-09 08:57:00'),
(517, 'Poultry', 117, '2020-12-09 08:58:03', '2020-12-09 08:58:03'),
(518, 'Fishery', 117, '2020-12-09 08:59:33', '2020-12-09 08:59:33'),
(519, 'Uniforms', 118, '2020-12-09 09:00:34', '2020-12-09 09:00:34'),
(520, 'Bags and Cases', 118, '2020-12-09 09:02:05', '2020-12-09 09:02:05'),
(521, 'Bike', 118, '2020-12-09 11:10:21', '2020-12-09 11:10:21'),
(522, 'bilawal', 118, '2020-12-09 11:20:37', '2020-12-09 11:20:37'),
(523, 'Salt', 119, '2020-12-17 06:36:55', '2020-12-17 06:36:55'),
(524, 'mercedes', 120, '2021-03-31 22:33:17', '2021-03-31 22:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `user_type`, `profile_photo_path`, `status`, `suspended`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'aaa@aaa.com', NULL, '$2y$10$rtsMkL43jELmlOvtoY1imu6UBuZ5BmwrNEvzK7eVt.VVWiC9PaQHG', NULL, NULL, NULL, NULL, 'customer', NULL, 0, 0, NULL, '2020-12-07 09:45:28', '2020-12-07 09:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `-product_tag`
--
ALTER TABLE `-product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buyers_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfqs`
--
ALTER TABLE `rfqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfq_responses`
--
ALTER TABLE `rfq_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_images_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `-product_tag`
--
ALTER TABLE `-product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `company_documents`
--
ALTER TABLE `company_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rfqs`
--
ALTER TABLE `rfqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rfq_responses`
--
ALTER TABLE `rfq_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=572227;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD CONSTRAINT `slider_images_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`);

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
