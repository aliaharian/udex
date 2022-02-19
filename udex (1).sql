-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2022 at 12:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udex`
--

-- --------------------------------------------------------

--
-- Table structure for table `architectionary`
--

CREATE TABLE `architectionary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `architectionary`
--

INSERT INTO `architectionary` (`id`, `uid`, `title`, `slug`, `content_text`, `excerpt`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Accessibility', 'accessibility', '<p>How easy is it for people to move around your building? This includes the elderly, disabled, pare&nbsp;How easy is it for people to move around your building? This includes the elderly, disabled, pare&nbsp;How easy is it for people to move around your building? This includes the elderly, disabled, pare&nbsp;How easy is it for people to move around your building? This includes the elderly, disabled, pare&nbsp;How easy is it for people to move around your building? This includes the elderly, disabled, pare&nbsp;How easy is it for people to move around your building? This includes the elderly, disabled, pare</p>', 'How easy is it for people to move around your building? This includes the elderly, disabled, pare How easy is it for people to move around your building? This includes the elderly, disabled, pare How easy is it for people to move around your building? This includes the elderly, disabled, pare How easy is it for people to move around your building? This includes the elderly, disabled, pare How easy is it for people to move around your building? This includes the elderly, disabled, pare How easy is it for people to move around your building? This includes the elderly, disabled, pare', 'published', '2021-07-03 13:17:29', '2021-07-03 13:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for_uid` bigint(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `uid`, `orgname`, `path`, `type`, `directory`, `for_uid`, `created_at`, `updated_at`) VALUES
(29, '24', 'Screen Shot 2022-01-18 at 12.09.50 PM.png', 'sk6RVCIURkueZqstwBBZbVX4IwoXQTLHARtj5FOO.png', 'png', 'connect-service/file', NULL, '2022-01-18 06:54:53', '2022-01-18 06:54:53'),
(30, '24', 'Screen Shot 2022-01-18 at 12.09.53 PM.png', 'UzmXMRWxOQVqnPH4d8bnBXo2so8xJr4otQ2Mu1v7.png', 'png', 'connect-service/file', NULL, '2022-01-18 06:54:53', '2022-01-18 06:54:53'),
(31, '24', 'WhatsApp Image 2022-01-16 at 4.33.39 PM.jpeg', 'bhza31JMyGdBpg16BwgnqT5rDBz9PEnRwXkmg33m.jpg', 'jpg', 'connect-service/file', NULL, '2022-01-18 06:55:21', '2022-01-18 06:55:21'),
(32, '24', 'WhatsApp Image 2022-01-16 at 5.33.37 PM.jpeg', 'Cp3PavTql9n2dmKjWStBt33d32p2T11eE99QVZfI.jpg', 'jpg', 'connect-service/file', NULL, '2022-01-18 06:55:21', '2022-01-18 06:55:21'),
(33, '24', 'Website-Development1.png', 'VK1PcV04kwaUCLxqCVS3BE114NM0aI4dBf7kGkNk.png', 'png', 'connect-service/file', NULL, '2022-02-16 08:56:39', '2022-02-16 08:56:39'),
(34, '24', 'Website-Development2.png', '35C2z5ZjRsC6hlDGDGQJOfY4FMjy7NSvIIVlxWkv.png', 'png', 'connect-service/file', NULL, '2022-02-16 08:56:39', '2022-02-16 08:56:39'),
(35, '24', 'Website-Development3.png', 'EHkXaEVV0WXrWyNBhzp8i4hUa4qOnZpdWxSMI0Kf.png', 'png', 'connect-service/file', NULL, '2022-02-16 08:56:39', '2022-02-16 08:56:39'),
(36, '24', 'Website-Development1.png', '8NrkYEHDnzq3E71SForGEFIPYI1PiKSxFMs9oL8G.png', 'png', 'connect-service/file', NULL, '2022-02-16 09:20:01', '2022-02-16 09:20:01'),
(37, '24', 'Website-Development1.png', 'ngM8FubFgkQu984oVtLe1ntoteauh9yFuiqZ1h82.png', 'png', 'connect-service/file', NULL, '2022-02-16 09:20:39', '2022-02-16 09:20:39'),
(38, '24', 'Website-Development2.png', 'lh9wjiBo0D7jh7Z7xIKAQEwdLHhn3UiqAuiRFctH.png', 'png', 'connect-service/file', NULL, '2022-02-16 09:20:39', '2022-02-16 09:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connect_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`connect_meta`)),
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `uid`, `slug`, `type`, `connect_meta`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(38, 24, '6ks2gogr', 'connect-service', '{\"service_are_you_looking\":\"cctv_survey\",\"describe_the_requirements_of_your_project\":null,\"address\":null,\"postcode\":null,\"0\":[31,32]}', NULL, '2022-01-18 06:55:21', '2022-01-18 06:55:21', NULL),
(39, 24, 'uha2gcd4', 'connect-service', '{\"service_are_you_looking\":\"party_wall\",\"describe_the_requirements_of_your_project\":null,\"address\":null,\"postcode\":\"12345\",\"0\":[31,32]}', NULL, '2022-01-18 06:55:21', '2022-01-18 06:55:21', NULL),
(40, 24, '6d3rqeg5', 'connect-service', '{\"service_are_you_looking\":\"contractor\",\"describe_the_requirements_of_your_project\":null,\"address\":null,\"postcode\":null,\"0\":[31,32]}', NULL, '2022-01-18 06:55:21', '2022-01-18 06:55:21', NULL),
(41, 24, 'q8ujdsin', 'connect-service', '{\"service_are_you_looking\":\"cctv_survey\",\"describe_the_requirements_of_your_project\":\"test text 1234\",\"address\":\"yfiyfyify\",\"postcode\":\"ytdydyd\",\"0\":[]}', NULL, '2022-01-26 08:56:33', '2022-01-26 08:56:33', NULL),
(42, 24, 'oqk3v7ok', 'connect-service', '{\"service_are_you_looking\":\"contractor\",\"describe_the_requirements_of_your_project\":\"test text 1234\",\"address\":\"yfiyfyify\",\"postcode\":\"ytdydyd\",\"0\":[]}', NULL, '2022-01-26 08:56:33', '2022-01-26 08:56:33', NULL),
(43, 25, 'ad7ifqkd', 'connect-service', '{\"service_are_you_looking\":\"contractor\",\"describe_the_requirements_of_your_project\":\"test\",\"address\":\"qwert\",\"postcode\":\"sdf\",\"0\":[]}', NULL, '2022-01-26 09:07:23', '2022-01-26 09:07:23', NULL),
(44, 24, 'ugmgzrrp', 'connect-service', '{\"service_are_you_looking\":\"approved_inspector\",\"describe_the_requirements_of_your_project\":\"tetst dev\",\"address\":\"dev\",\"postcode\":\"dev\",\"files\":[33,34,35]}', NULL, '2022-02-16 08:56:39', '2022-02-16 08:56:39', NULL),
(45, 24, 'f7xms6dy', 'connect-service', '{\"service_are_you_looking\":\"structural_engineer\",\"describe_the_requirements_of_your_project\":\"tetst dev\",\"address\":\"dev\",\"postcode\":\"dev\",\"files\":[33,34,35]}', NULL, '2022-02-16 08:56:39', '2022-02-16 08:56:39', NULL),
(46, 24, 'c2yczs5p', 'connect-service', '{\"service_are_you_looking\":\"structural_engineer\",\"describe_the_requirements_of_your_project\":\"kpokpk\",\"address\":\"opkopkpoopk\",\"postcode\":\"kpokpok\",\"files\":[36]}', NULL, '2022-02-16 09:20:01', '2022-02-16 09:20:01', NULL),
(47, 24, 'ubgcemqy', 'connect-service', '{\"service_are_you_looking\":\"party_wall\",\"describe_the_requirements_of_your_project\":\"kpokpk\",\"address\":\"opkopkpoopk\",\"postcode\":\"kpokpok\",\"files\":[36]}', NULL, '2022-02-16 09:20:01', '2022-02-16 09:20:01', NULL),
(48, 24, '43rpvg2m', 'connect-service', '{\"service_are_you_looking\":\"structural_engineer\",\"describe_the_requirements_of_your_project\":\"kpok\",\"address\":\"opokpk\",\"postcode\":\"opkopk\",\"files\":[37,38]}', NULL, '2022-02-16 09:20:39', '2022-02-16 09:20:39', NULL),
(49, 24, 'dsdstmmi', 'connect-service', '{\"service_are_you_looking\":\"cctv_survey\",\"describe_the_requirements_of_your_project\":\"kpok\",\"address\":\"opokpk\",\"postcode\":\"opkopk\",\"files\":[37,38]}', NULL, '2022-02-16 09:20:39', '2022-02-16 09:20:39', NULL),
(50, 24, 'iexh33gc', 'connect-service', '{\"service_are_you_looking\":\"contractor\",\"describe_the_requirements_of_your_project\":\"kpok\",\"address\":\"opokpk\",\"postcode\":\"opkopk\",\"files\":[37,38]}', NULL, '2022-02-16 09:20:39', '2022-02-16 09:20:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `connect_options`
--

CREATE TABLE `connect_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connect_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`connect_meta`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connect_options`
--

INSERT INTO `connect_options` (`id`, `connect_meta`) VALUES
(1, '{\"loft\":{\"small\":{\"avg_final\":\"2057.857143\",\"range_avg\":\"14.94208619\"},\"medium\":{\"avg_final\":\"2469.428571\",\"range_avg\":\"14.94208619\"},\"large\":{\"avg_final\":\"2675.208571\",\"range_avg\":\"14.94211425\"}},\"ground\":{\"small\":{\"avg_final\":\"2357.6\",\"range_avg\":\"22.05400982\"},\"medium\":{\"avg_final\":\"2829.12\",\"range_avg\":\"22.05400982\"},\"large\":{\"avg_final\":\"3064.88\",\"range_avg\":\"22.05400982\"}},\"first\":{\"small\":{\"avg_final\":\"2300\",\"range_avg\":\"25\"},\"medium\":{\"avg_final\":\"2760\",\"range_avg\":\"25\"},\"large\":{\"avg_final\":\"2990\",\"range_avg\":\"25\"}},\"basement\":{\"small\":{\"avg_final\":\"4025\",\"range_avg\":\"14.28\"},\"medium\":{\"avg_final\":\"4830\",\"range_avg\":\"14.28\"},\"large\":{\"avg_final\":\"5232.5\",\"range_avg\":\"14.28\"}},\"two_storey\":{\"small\":{\"avg_final\":\"2444\",\"range_avg\":\"17.63\"},\"medium\":{\"avg_final\":\"2932.8\",\"range_avg\":\"17.63\"},\"large\":{\"avg_final\":\"3177.2\",\"range_avg\":\"17.63\"}}}');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`design_meta`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `uid`, `slug`, `design_meta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 11, 'r5435a5m', '{\"address\":\"tehran masalan\",\"postcode\":\"12345\",\"what_type_of_property_is_this\":\"semi_detached\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"5345\",\"PlanningSupport\":\"34253245234\",\"ExistingDrawings\":\"3245\",\"BuildingRegulations\":\"4536435\",\"OnSiteMeasuredSurvey\":\"12333123\"}', '2021-11-19 15:59:03', '2021-11-19 15:59:03', NULL),
(20, 2, 'wvu3x3be', '{\"address\":\"tehran masalan\",\"postcode\":\"87653467\",\"what_type_of_property_is_this\":\"semi_detached\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"5345\",\"PlanningSupport\":\"34253245234\",\"ExistingDrawings\":\"3245\",\"BuildingRegulations\":\"4536435\",\"OnSiteMeasuredSurvey\":\"12333123\"}', '2021-12-06 22:46:17', '2021-12-06 22:46:17', NULL),
(21, 11, 'wnpxvaec', '{\"address\":\"sdsad\",\"postcode\":\"sadasdasd\",\"what_type_of_property_is_this\":\"semi_detached\",\"which_specific_parts_of_the_property\":\"loft_l_shaped_dormer\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"12354353245\",\"PlanningSupport\":\"4536435643\",\"ExistingDrawings\":\"3453245\",\"BuildingRegulations\":\"2436542642\",\"OnSiteMeasuredSurvey\":\"5324532\"}', '2021-12-06 23:38:40', '2021-12-06 23:38:40', NULL),
(22, 2, 'cbz4n3md', '{\"address\":\"jkhgsdjh\",\"postcode\":\"765756\",\"what_type_of_property_is_this\":\"detached\",\"which_specific_parts_of_the_property\":\"ground_side_and_rear\",\"how_many_bedrooms_does_this_property_have\":\"5\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"330\",\"BuildingRegulations\":\"1272.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2021-12-08 02:52:48', '2021-12-08 02:52:48', NULL),
(23, 11, 'sh7i2yvb', '{\"address\":\"dsfsfs\",\"postcode\":\"sdfsfd\",\"what_type_of_property_is_this\":\"detached\",\"which_specific_parts_of_the_property\":\"ground_side\",\"how_many_bedrooms_does_this_property_have\":\"1\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"330\",\"BuildingRegulations\":\"1272.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2021-12-08 02:56:14', '2021-12-08 02:56:14', NULL),
(24, 20, 'o6pmcbz0', '{\"address\":\"International House\",\"postcode\":\"N1 7SR\",\"what_type_of_property_is_this\":\"detached\",\"which_specific_parts_of_the_property\":\"ground_side\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"330\",\"BuildingRegulations\":\"1272.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2021-12-08 03:11:30', '2021-12-08 03:11:30', NULL),
(25, 21, '7u5d37jp', '{\"address\":\"Oxford\",\"postcode\":\"65fgi\",\"what_type_of_property_is_this\":\"detached\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"330\",\"BuildingRegulations\":\"1350.00\",\"OnSiteMeasuredSurvey\":\"308\"}', '2021-12-09 23:23:31', '2021-12-09 23:23:31', NULL),
(26, 21, 'oqi3owaf', '{\"address\":\"Bristol\",\"postcode\":\"B45ty7\",\"what_type_of_property_is_this\":\"bungalow\",\"which_specific_parts_of_the_property\":\"loft_hip_to_gable_with_no_dormer\",\"how_many_bedrooms_does_this_property_have\":\"4\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"358\",\"BuildingRegulations\":\"1311.00\",\"OnSiteMeasuredSurvey\":\"334\"}', '2021-12-09 23:29:01', '2021-12-09 23:29:01', NULL),
(27, 21, '256ncnqw', '{\"address\":\"Bristol\",\"postcode\":\"B45ty7\",\"what_type_of_property_is_this\":\"bungalow\",\"which_specific_parts_of_the_property\":\"loft_hip_to_gable_with_no_dormer\",\"how_many_bedrooms_does_this_property_have\":\"4\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"358\",\"BuildingRegulations\":\"1311.00\",\"OnSiteMeasuredSurvey\":\"334\"}', '2021-12-09 23:29:53', '2021-12-09 23:29:53', NULL),
(28, 23, 'aa0zsfwa', '{\"address\":\"123123\",\"postcode\":\"123123\",\"what_type_of_property_is_this\":\"semi_detached\",\"which_specific_parts_of_the_property\":\"first_side_and_rear\",\"how_many_bedrooms_does_this_property_have\":\"3\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_and_building_regulations\",\"ProposedDesign\":\"1175.00\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"340\",\"BuildingRegulations\":\"1350.00\",\"OnSiteMeasuredSurvey\":\"308\"}', '2021-12-15 19:50:40', '2021-12-15 20:48:30', '2021-12-15 20:48:30'),
(29, 25, '8qmunoub', '{\"address\":\"1234567\",\"postcode\":\"123456\",\"what_type_of_property_is_this\":\"terrace\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"2\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"829\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"248\",\"BuildingRegulations\":\"1116.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2022-01-27 01:48:17', '2022-01-27 01:48:17', NULL),
(30, 25, 'oqz8mygd', '{\"address\":\"1234567\",\"postcode\":\"123456\",\"what_type_of_property_is_this\":\"terrace\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"2\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"829\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"248\",\"BuildingRegulations\":\"1116.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2022-01-27 01:48:51', '2022-01-27 01:48:51', NULL),
(31, 25, 'xn3k5oen', '{\"address\":\"1234567\",\"postcode\":\"123456\",\"what_type_of_property_is_this\":\"terrace\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"2\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"829\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"248\",\"BuildingRegulations\":\"1116.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2022-01-27 01:48:54', '2022-01-27 01:48:54', NULL),
(32, 25, 'i4hcbvab', '{\"address\":\"1234567\",\"postcode\":\"123456\",\"what_type_of_property_is_this\":\"terrace\",\"which_specific_parts_of_the_property\":\"first_rear_over_ground_floor\",\"how_many_bedrooms_does_this_property_have\":\"2\",\"Would_you_like_to_add_Building_Regulation_drawings\":\"planning_only\",\"ProposedDesign\":\"829\",\"PlanningSupport\":\"120\",\"ExistingDrawings\":\"248\",\"BuildingRegulations\":\"1116.00\",\"OnSiteMeasuredSurvey\":\"256\"}', '2022-01-01 01:48:57', '2022-01-27 01:48:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `design_options`
--

CREATE TABLE `design_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detached_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `semi_detached_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `end_of_terrace_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `terrace_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flat_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `bungalow_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_options`
--

INSERT INTO `design_options` (`id`, `detached_meta`, `semi_detached_meta`, `end_of_terrace_meta`, `terrace_meta`, `flat_meta`, `bungalow_meta`) VALUES
(1, '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"256\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"256\\\",\\\"first_rear_over_outrigger\\\":\\\"308\\\",\\\"first_rear_over_ground_floor\\\":\\\"308\\\",\\\"first_side\\\":\\\"334\\\",\\\"first_side_and_rear\\\":\\\"334\\\",\\\"first_rear\\\":\\\"308\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"1272.00\\\",\\\"loft_main_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"334\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"308\\\",\\\"two_storey_side\\\":\\\"334\\\",\\\"two_storey_rear\\\":\\\"308\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"330\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"330\\\",\\\"first_rear_over_outrigger\\\":\\\"330\\\",\\\"first_rear_over_ground_floor\\\":\\\"330\\\",\\\"first_side\\\":\\\"381\\\",\\\"first_side_and_rear\\\":\\\"381\\\",\\\"first_rear\\\":\\\"330\\\",\\\"loft_l_shaped_dormer\\\":\\\"376\\\",\\\"loft_outrigger_dormer\\\":\\\"376\\\",\\\"loft_main_dormer\\\":\\\"376\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"376\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"376\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"321\\\",\\\"two_storey_side\\\":\\\"381\\\",\\\"two_storey_rear\\\":\\\"330\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"1175.00\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1175.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1175.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1175.00\\\",\\\"first_side\\\":\\\"1347.00\\\",\\\"first_side_and_rear\\\":\\\"1347.00\\\",\\\"first_rear\\\":\\\"1175.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1218.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1218.00\\\",\\\"loft_main_dormer\\\":\\\"1218.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1218.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1218.00\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"1131.00\\\",\\\"two_storey_side\\\":\\\"1347.00\\\",\\\"two_storey_rear\\\":\\\"1175.00\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"1272.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1272.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1350.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1350.00\\\",\\\"first_side\\\":\\\"1467.00\\\",\\\"first_side_and_rear\\\":\\\"1467.00\\\",\\\"first_rear\\\":\\\"1350.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1272.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1272.00\\\",\\\"loft_main_dormer\\\":\\\"1350.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1350.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1350.00\\\",\\\"basement_main_house\\\":\\\"0\\\",\\\"basement_outrigger\\\":\\\"0\\\",\\\"basement_part_house\\\":\\\"0\\\",\\\"basement_whole_house\\\":\\\"0\\\",\\\"two_storey_side\\\":\\\"1467.00\\\",\\\"two_storey_rear\\\":\\\"1350.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}', '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"231\\\",\\\"ground_side_and_rear\\\":\\\"231\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"256\\\",\\\"first_rear_over_outrigger\\\":\\\"282\\\",\\\"first_rear_over_ground_floor\\\":\\\"282\\\",\\\"first_side\\\":\\\"308\\\",\\\"first_side_and_rear\\\":\\\"308\\\",\\\"first_rear\\\":\\\"282\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"334\\\",\\\"loft_main_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"334\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"282\\\",\\\"two_storey_side\\\":\\\"308\\\",\\\"two_storey_rear\\\":\\\"308\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"289\\\",\\\"ground_side_and_rear\\\":\\\"289\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"330\\\",\\\"first_rear_over_outrigger\\\":\\\"289\\\",\\\"first_rear_over_ground_floor\\\":\\\"289\\\",\\\"first_side\\\":\\\"340\\\",\\\"first_side_and_rear\\\":\\\"340\\\",\\\"first_rear\\\":\\\"289\\\",\\\"loft_l_shaped_dormer\\\":\\\"376\\\",\\\"loft_outrigger_dormer\\\":\\\"335\\\",\\\"loft_main_dormer\\\":\\\"376\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"335\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"335\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"280\\\",\\\"two_storey_side\\\":\\\"340\\\",\\\"two_storey_rear\\\":\\\"330\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"1002.00\\\",\\\"ground_side_and_rear\\\":\\\"1002.00\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1175.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1002.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1002.00\\\",\\\"first_side\\\":\\\"1175.00\\\",\\\"first_side_and_rear\\\":\\\"1175.00\\\",\\\"first_rear\\\":\\\"1002.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1218.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1045.00\\\",\\\"loft_main_dormer\\\":\\\"1218.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1045.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1045.00\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"959\\\",\\\"two_storey_side\\\":\\\"1175.00\\\",\\\"two_storey_rear\\\":\\\"1175.00\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_side_and_rear\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"1155.00\\\",\\\"ground_side_and_rear\\\":\\\"1155.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1272.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1233.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1233.00\\\",\\\"first_side\\\":\\\"1350.00\\\",\\\"first_side_and_rear\\\":\\\"1350.00\\\",\\\"first_rear\\\":\\\"1233.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1272.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1155.00\\\",\\\"loft_main_dormer\\\":\\\"1350.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1233.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1233.00\\\",\\\"basement_main_house\\\":0,\\\"basement_outrigger\\\":0,\\\"basement_part_house\\\":0,\\\"basement_whole_house\\\":0,\\\"two_storey_side\\\":\\\"1350.00\\\",\\\"two_storey_rear\\\":\\\"1350.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}', '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"231\\\",\\\"ground_side_and_rear\\\":\\\"231\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"256\\\",\\\"first_rear_over_outrigger\\\":\\\"282\\\",\\\"first_rear_over_ground_floor\\\":\\\"282\\\",\\\"first_side\\\":\\\"308\\\",\\\"first_side_and_rear\\\":\\\"308\\\",\\\"first_rear\\\":\\\"282\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"334\\\",\\\"loft_main_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"334\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"282\\\",\\\"two_storey_side\\\":\\\"308\\\",\\\"two_storey_rear\\\":\\\"308\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"289\\\",\\\"ground_side_and_rear\\\":\\\"289\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"330\\\",\\\"first_rear_over_outrigger\\\":\\\"289\\\",\\\"first_rear_over_ground_floor\\\":\\\"289\\\",\\\"first_side\\\":\\\"340\\\",\\\"first_side_and_rear\\\":\\\"340\\\",\\\"first_rear\\\":\\\"289\\\",\\\"loft_l_shaped_dormer\\\":\\\"376\\\",\\\"loft_outrigger_dormer\\\":\\\"335\\\",\\\"loft_main_dormer\\\":\\\"335\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"335\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"335\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"280\\\",\\\"two_storey_side\\\":\\\"340\\\",\\\"two_storey_rear\\\":\\\"330\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"1002.00\\\",\\\"ground_side_and_rear\\\":\\\"1002.00\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1175.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1002.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1002.00\\\",\\\"first_side\\\":\\\"1175.00\\\",\\\"first_side_and_rear\\\":\\\"1175.00\\\",\\\"first_rear\\\":\\\"1002.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1218.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1045.00\\\",\\\"loft_main_dormer\\\":\\\"1045.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1045.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1045.00\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"959\\\",\\\"two_storey_side\\\":\\\"1175.00\\\",\\\"two_storey_rear\\\":\\\"1175.00\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_side_and_rear\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"1155.00\\\",\\\"ground_side_and_rear\\\":\\\"1155.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1272.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1233.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1233.00\\\",\\\"first_side\\\":\\\"1350.00\\\",\\\"first_side_and_rear\\\":\\\"1350.00\\\",\\\"first_rear\\\":\\\"1233.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1272.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1155.00\\\",\\\"loft_main_dormer\\\":\\\"1233.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1233.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1233.00\\\",\\\"basement_main_house\\\":0,\\\"basement_outrigger\\\":0,\\\"basement_part_house\\\":0,\\\"basement_whole_house\\\":0,\\\"two_storey_side\\\":\\\"1350.00\\\",\\\"two_storey_rear\\\":\\\"1350.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}', '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"231\\\",\\\"ground_side_and_rear\\\":\\\"231\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"231\\\",\\\"first_rear_over_outrigger\\\":\\\"256\\\",\\\"first_rear_over_ground_floor\\\":\\\"256\\\",\\\"first_side\\\":\\\"282\\\",\\\"first_side_and_rear\\\":\\\"282\\\",\\\"first_rear\\\":\\\"256\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"334\\\",\\\"loft_main_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"334\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"282\\\",\\\"two_storey_side\\\":\\\"282\\\",\\\"two_storey_rear\\\":\\\"308\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"238\\\",\\\"ground_side_and_rear\\\":\\\"280\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"280\\\",\\\"first_rear_over_outrigger\\\":\\\"248\\\",\\\"first_rear_over_ground_floor\\\":\\\"248\\\",\\\"first_side\\\":\\\"289\\\",\\\"first_side_and_rear\\\":\\\"289\\\",\\\"first_rear\\\":\\\"248\\\",\\\"loft_l_shaped_dormer\\\":\\\"376\\\",\\\"loft_outrigger_dormer\\\":\\\"294\\\",\\\"loft_main_dormer\\\":\\\"376\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"294\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"294\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"280\\\",\\\"two_storey_side\\\":\\\"289\\\",\\\"two_storey_rear\\\":\\\"330\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"829\\\",\\\"ground_side_and_rear\\\":\\\"1002.00\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1002.00\\\",\\\"first_rear_over_outrigger\\\":\\\"829\\\",\\\"first_rear_over_ground_floor\\\":\\\"829\\\",\\\"first_side\\\":\\\"1002.00\\\",\\\"first_side_and_rear\\\":\\\"1002.00\\\",\\\"first_rear\\\":\\\"829\\\",\\\"loft_l_shaped_dormer\\\":\\\"1218.00\\\",\\\"loft_outrigger_dormer\\\":\\\"873\\\",\\\"loft_main_dormer\\\":\\\"1218.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"873\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"873\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"959\\\",\\\"two_storey_side\\\":\\\"1002.00\\\",\\\"two_storey_rear\\\":\\\"1175.00\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_side_and_rear\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"1038.00\\\",\\\"ground_side_and_rear\\\":\\\"1155.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1155.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1116.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1116.00\\\",\\\"first_side\\\":\\\"1233.00\\\",\\\"first_side_and_rear\\\":\\\"1233.00\\\",\\\"first_rear\\\":\\\"1116.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1272.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1038.00\\\",\\\"loft_main_dormer\\\":\\\"1350.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1116.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1116.00\\\",\\\"basement_main_house\\\":0,\\\"basement_outrigger\\\":0,\\\"basement_part_house\\\":0,\\\"basement_whole_house\\\":0,\\\"two_storey_side\\\":\\\"1233.00\\\",\\\"two_storey_rear\\\":\\\"1350.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}', '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"231\\\",\\\"ground_side_and_rear\\\":\\\"231\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"231\\\",\\\"first_rear_over_outrigger\\\":\\\"256\\\",\\\"first_rear_over_ground_floor\\\":\\\"256\\\",\\\"first_side\\\":\\\"282\\\",\\\"first_side_and_rear\\\":\\\"282\\\",\\\"first_rear\\\":\\\"256\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"282\\\",\\\"loft_main_dormer\\\":\\\"282\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"282\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"282\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"282\\\",\\\"two_storey_side\\\":\\\"282\\\",\\\"two_storey_rear\\\":\\\"256\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"192\\\",\\\"ground_side_and_rear\\\":\\\"238\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"280\\\",\\\"first_rear_over_outrigger\\\":\\\"248\\\",\\\"first_rear_over_ground_floor\\\":\\\"248\\\",\\\"first_side\\\":\\\"289\\\",\\\"first_side_and_rear\\\":\\\"289\\\",\\\"first_rear\\\":\\\"248\\\",\\\"loft_l_shaped_dormer\\\":\\\"326\\\",\\\"loft_outrigger_dormer\\\":\\\"244\\\",\\\"loft_main_dormer\\\":\\\"244\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"244\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"244\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"280\\\",\\\"two_storey_side\\\":\\\"289\\\",\\\"two_storey_rear\\\":\\\"248\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"700\\\",\\\"ground_side_and_rear\\\":\\\"829\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1002.00\\\",\\\"first_rear_over_outrigger\\\":\\\"829\\\",\\\"first_rear_over_ground_floor\\\":\\\"829\\\",\\\"first_side\\\":\\\"1002.00\\\",\\\"first_side_and_rear\\\":\\\"1002.00\\\",\\\"first_rear\\\":\\\"829\\\",\\\"loft_l_shaped_dormer\\\":\\\"1218.00\\\",\\\"loft_outrigger_dormer\\\":\\\"873\\\",\\\"loft_main_dormer\\\":\\\"873\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"873\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"873\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"959\\\",\\\"two_storey_side\\\":\\\"1002.00\\\",\\\"two_storey_rear\\\":\\\"829\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_side_and_rear\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"921\\\",\\\"ground_side_and_rear\\\":\\\"1038.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1155.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1116.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1116.00\\\",\\\"first_side\\\":\\\"1233.00\\\",\\\"first_side_and_rear\\\":\\\"1233.00\\\",\\\"first_rear\\\":\\\"1116.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1233.00\\\",\\\"loft_outrigger_dormer\\\":\\\"999\\\",\\\"loft_main_dormer\\\":\\\"1077.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1077.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1077.00\\\",\\\"basement_main_house\\\":0,\\\"basement_outrigger\\\":0,\\\"basement_part_house\\\":0,\\\"basement_whole_house\\\":0,\\\"two_storey_side\\\":\\\"1233.00\\\",\\\"two_storey_rear\\\":\\\"1116.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}', '{\"OnSiteMeasuredSurvey\":\"{\\\"ground_side_infill\\\":\\\"231\\\",\\\"ground_side\\\":\\\"256\\\",\\\"ground_side_and_rear\\\":\\\"256\\\",\\\"ground_rear\\\":\\\"231\\\",\\\"ground_wraparound\\\":\\\"256\\\",\\\"first_rear_over_outrigger\\\":\\\"308\\\",\\\"first_rear_over_ground_floor\\\":\\\"308\\\",\\\"first_side\\\":\\\"334\\\",\\\"first_side_and_rear\\\":\\\"334\\\",\\\"first_rear\\\":\\\"308\\\",\\\"loft_l_shaped_dormer\\\":\\\"334\\\",\\\"loft_outrigger_dormer\\\":\\\"334\\\",\\\"loft_main_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"334\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"334\\\",\\\"basement_main_house\\\":\\\"282\\\",\\\"basement_outrigger\\\":\\\"282\\\",\\\"basement_part_house\\\":\\\"282\\\",\\\"basement_whole_house\\\":\\\"308\\\",\\\"two_storey_side\\\":\\\"334\\\",\\\"two_storey_rear\\\":\\\"308\\\",\\\"garden_annex\\\":\\\"231\\\",\\\"garage_conversion\\\":\\\"231\\\"}\",\"ExistingDrawings\":\"{\\\"ground_side_infill\\\":\\\"238\\\",\\\"ground_side\\\":\\\"330\\\",\\\"ground_side_and_rear\\\":\\\"330\\\",\\\"ground_rear\\\":\\\"280\\\",\\\"ground_wraparound\\\":\\\"330\\\",\\\"first_rear_over_outrigger\\\":\\\"330\\\",\\\"first_rear_over_ground_floor\\\":\\\"330\\\",\\\"first_side\\\":\\\"381\\\",\\\"first_side_and_rear\\\":\\\"381\\\",\\\"first_rear\\\":\\\"330\\\",\\\"loft_l_shaped_dormer\\\":\\\"358\\\",\\\"loft_outrigger_dormer\\\":\\\"358\\\",\\\"loft_main_dormer\\\":\\\"358\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"358\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"358\\\",\\\"basement_main_house\\\":\\\"280\\\",\\\"basement_outrigger\\\":\\\"280\\\",\\\"basement_part_house\\\":\\\"280\\\",\\\"basement_whole_house\\\":\\\"321\\\",\\\"two_storey_side\\\":\\\"381\\\",\\\"two_storey_rear\\\":\\\"330\\\",\\\"garden_annex\\\":\\\"289\\\",\\\"garage_conversion\\\":\\\"289\\\"}\",\"ProposedDesign\":\"{\\\"ground_side_infill\\\":\\\"829\\\",\\\"ground_side\\\":\\\"1175.00\\\",\\\"ground_side_and_rear\\\":\\\"1175.00\\\",\\\"ground_rear\\\":\\\"1002.00\\\",\\\"ground_wraparound\\\":\\\"1175.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1175.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1175.00\\\",\\\"first_side\\\":\\\"1347.00\\\",\\\"first_side_and_rear\\\":\\\"1347.00\\\",\\\"first_rear\\\":\\\"1175.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1175.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1175.00\\\",\\\"loft_main_dormer\\\":\\\"1175.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1175.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1175.00\\\",\\\"basement_main_house\\\":\\\"959\\\",\\\"basement_outrigger\\\":\\\"959\\\",\\\"basement_part_house\\\":\\\"959\\\",\\\"basement_whole_house\\\":\\\"1131.00\\\",\\\"two_storey_side\\\":\\\"1347.00\\\",\\\"two_storey_rear\\\":\\\"1175.00\\\",\\\"garden_annex\\\":\\\"1002.00\\\",\\\"garage_conversion\\\":\\\"851\\\"}\",\"PlanningSupport\":\"{\\\"ground_side_infill\\\":\\\"120\\\",\\\"ground_side\\\":\\\"120\\\",\\\"ground_side_and_rear\\\":\\\"120\\\",\\\"ground_rear\\\":\\\"120\\\",\\\"ground_wraparound\\\":\\\"120\\\",\\\"first_rear_over_outrigger\\\":\\\"120\\\",\\\"first_rear_over_ground_floor\\\":\\\"120\\\",\\\"first_side\\\":\\\"120\\\",\\\"first_side_and_rear\\\":\\\"120\\\",\\\"first_rear\\\":\\\"120\\\",\\\"loft_l_shaped_dormer\\\":\\\"120\\\",\\\"loft_outrigger_dormer\\\":\\\"120\\\",\\\"loft_main_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"120\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"120\\\",\\\"basement_main_house\\\":\\\"120\\\",\\\"basement_outrigger\\\":\\\"120\\\",\\\"basement_part_house\\\":\\\"120\\\",\\\"basement_whole_house\\\":\\\"120\\\",\\\"two_storey_side\\\":\\\"120\\\",\\\"two_storey_rear\\\":\\\"120\\\",\\\"garden_annex\\\":\\\"120\\\",\\\"garage_conversion\\\":\\\"120\\\"}\",\"BuildingRegulations\":\"{\\\"ground_side_infill\\\":\\\"1038.00\\\",\\\"ground_side\\\":\\\"1272.00\\\",\\\"ground_side_and_rear\\\":\\\"1272.00\\\",\\\"ground_rear\\\":\\\"1155.00\\\",\\\"ground_wraparound\\\":\\\"1272.00\\\",\\\"first_rear_over_outrigger\\\":\\\"1350.00\\\",\\\"first_rear_over_ground_floor\\\":\\\"1350.00\\\",\\\"first_side\\\":\\\"1467.00\\\",\\\"first_side_and_rear\\\":\\\"1467.00\\\",\\\"first_rear\\\":\\\"1350.00\\\",\\\"loft_l_shaped_dormer\\\":\\\"1233.00\\\",\\\"loft_outrigger_dormer\\\":\\\"1233.00\\\",\\\"loft_main_dormer\\\":\\\"1311.00\\\",\\\"loft_hip_to_gable_with_no_dormer\\\":\\\"1311.00\\\",\\\"loft_hip_to_gable_with_main_dormer\\\":\\\"1311.00\\\",\\\"basement_main_house\\\":0,\\\"basement_outrigger\\\":0,\\\"basement_part_house\\\":0,\\\"basement_whole_house\\\":0,\\\"two_storey_side\\\":\\\"1467.00\\\",\\\"two_storey_rear\\\":\\\"1350.00\\\",\\\"garden_annex\\\":\\\"1155.00\\\",\\\"garage_conversion\\\":\\\"1012.00\\\"}\"}');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `payment_step` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bt_transfer` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `uid`, `title`, `product_type`, `order_id`, `payment_step`, `amount`, `status`, `payer_id`, `bt_transfer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(46, 2, 'Design Quote', 'design', 20, '1', '7290.23', 'unpaid', NULL, NULL, '2021-12-06 22:46:17', '2021-12-06 22:46:17', NULL),
(47, 2, 'Design Quote', 'design', 20, '2', '7290.23', 'unpaid', NULL, NULL, '2021-12-06 22:46:17', '2021-12-06 22:46:17', NULL),
(48, 2, 'Design Quote', 'design', 20, '3', '7290.23', 'unpaid', NULL, NULL, '2021-12-06 22:46:17', '2021-12-06 22:46:17', NULL),
(49, 11, 'Design Quote', 'design', 21, '1', '0.3', 'paid', 'WSSTDFT3RTX2Y', NULL, '2021-12-06 23:38:40', '2021-12-06 23:42:51', NULL),
(50, 11, 'Design Quote', 'design', 21, '2', '0.3', 'unpaid', NULL, NULL, '2021-12-06 23:38:40', '2021-12-06 23:38:40', NULL),
(51, 11, 'Design Quote', 'design', 21, '3', '0.3', 'unpaid', NULL, NULL, '2021-12-06 23:38:40', '2021-12-06 23:38:40', NULL),
(52, 2, 'Design Quote', 'design', 22, '1', '2102', 'unpaid', NULL, NULL, '2021-12-08 02:52:48', '2021-12-08 02:52:48', NULL),
(53, 2, 'Design Quote', 'design', 22, '2', '1051', 'unpaid', NULL, NULL, '2021-12-08 02:52:48', '2021-12-08 02:52:48', NULL),
(54, 11, 'Design Quote', 'design', 23, '1', '2102', 'unpaid', NULL, NULL, '2021-12-08 02:56:14', '2021-12-08 02:56:14', NULL),
(55, 11, 'Design Quote', 'design', 23, '2', '1051', 'unpaid', NULL, NULL, '2021-12-08 02:56:14', '2021-12-08 02:56:14', NULL),
(56, 20, 'Design Quote', 'design', 24, '1', '1254', 'unpaid', NULL, NULL, '2021-12-08 03:11:30', '2021-12-08 03:11:30', NULL),
(57, 20, 'Design Quote', 'design', 24, '2', '627', 'unpaid', NULL, NULL, '2021-12-08 03:11:30', '2021-12-08 03:11:30', NULL),
(58, 21, 'Design Quote', 'design', 25, '1', '1094.33', 'unpaid', NULL, NULL, '2021-12-09 23:23:31', '2021-12-09 23:23:31', NULL),
(59, 21, 'Design Quote', 'design', 25, '2', '2188.66', 'unpaid', NULL, NULL, '2021-12-09 23:23:31', '2021-12-09 23:23:31', NULL),
(60, 21, 'Design Quote', 'design', 26, '1', '662.33', 'unpaid', NULL, NULL, '2021-12-09 23:29:01', '2021-12-09 23:29:01', NULL),
(61, 21, 'Design Quote', 'design', 26, '2', '1324.66', 'unpaid', NULL, NULL, '2021-12-09 23:29:01', '2021-12-09 23:29:01', NULL),
(62, 21, 'Design Quote', 'design', 27, '1', '662.33', 'unpaid', NULL, NULL, '2021-12-09 23:29:53', '2021-12-09 23:29:53', NULL),
(63, 21, 'Design Quote', 'design', 27, '2', '1324.66', 'unpaid', NULL, NULL, '2021-12-09 23:29:53', '2021-12-09 23:29:53', NULL),
(64, 23, 'Design Quote', 'design', 28, '1', '1097.67', 'unpaid', NULL, NULL, '2021-12-15 19:50:40', '2021-12-15 19:50:40', NULL),
(65, 23, 'Design Quote', 'design', 28, '2', '2195.34', 'unpaid', NULL, NULL, '2021-12-15 19:50:40', '2021-12-15 19:50:40', NULL),
(66, 25, 'Design Quote', 'design', 29, '1', '484.33', 'unpaid', NULL, NULL, '2022-01-27 01:48:18', '2022-01-27 01:48:18', NULL),
(67, 25, 'Design Quote', 'design', 29, '2', '968.66', 'unpaid', NULL, NULL, '2022-01-27 01:48:18', '2022-01-27 01:48:18', NULL),
(68, 25, 'Design Quote', 'design', 30, '1', '484.33', 'unpaid', NULL, NULL, '2022-01-27 01:48:51', '2022-01-27 01:48:51', NULL),
(69, 25, 'Design Quote', 'design', 30, '2', '968.66', 'unpaid', NULL, NULL, '2022-01-27 01:48:51', '2022-01-27 01:48:51', NULL),
(70, 25, 'Design Quote', 'design', 31, '1', '484.33', 'unpaid', NULL, NULL, '2022-01-27 01:48:54', '2022-01-27 01:48:54', NULL),
(71, 25, 'Design Quote', 'design', 31, '2', '968.66', 'unpaid', NULL, NULL, '2022-01-27 01:48:54', '2022-01-27 01:48:54', NULL),
(72, 25, 'Design Quote', 'design', 32, '1', '484.33', 'unpaid', NULL, NULL, '2022-01-27 01:48:57', '2022-01-27 01:48:57', NULL),
(73, 25, 'Design Quote', 'design', 32, '2', '968.66', 'unpaid', NULL, NULL, '2022-01-27 01:48:57', '2022-01-27 01:48:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `messages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`messages`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `uid`, `messages`, `created_at`, `updated_at`) VALUES
(13, 11, '[{\"message\":\"asdasd\",\"date\":1632736122,\"name\":null,\"role\":\"admin\"},{\"date\":1638921487,\"name\":null,\"role\":\"admin\",\"message\":\"Hiii\"}]', '2021-09-27 13:18:42', '2021-12-08 03:28:07'),
(14, 16, '[{\"message\":\"Hello\",\"date\":1638206431,\"name\":null,\"role\":\"user\"},{\"date\":1638206455,\"name\":null,\"role\":\"user\",\"message\":\"This is for test.\"}]', '2021-11-29 20:50:31', '2021-11-29 20:50:55');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_19_131130_add_paid_to_users', 2),
(5, '2021_02_19_211210_create_exam_table', 3),
(11, '2021_02_23_135037_create_exam_category_table', 9),
(12, '2021_03_12_100840_create_questions_table', 10),
(14, '2021_03_12_103044_create_questions_category_table', 12),
(15, '2021_03_12_135624_add_paid_to_questions', 13),
(18, '2021_03_12_192912_create_attachments', 15),
(19, '2021_04_20_183756_create_job_table', 16),
(20, '2021_04_20_184213_create_job_category_table', 17),
(21, '2021_05_03_222848_create_jobs_indicator_table', 18),
(22, '2021_05_14_191333_create_exam_report_table', 19),
(23, '2021_06_30_005524_create_messages_table', 20),
(24, '2021_07_03_000644_create_architectionary_table', 21),
(25, '2021_07_31_201425_create_projects_table', 22),
(30, '2021_12_23_115156_create_services_table', 23),
(31, '2021_12_23_115454_create_tradepeople_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`page_meta`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `uid`, `title`, `slug`, `content_text`, `template`, `page_meta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'FAQ', 'faq', '<p>Conetnt FAQ is Here</p>', 'faq', '{\"faq\":[{\"question\":\"1- Is the work that UDEX completes insured?\",\"answer\":\"This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.\"},{\"question\":\"2- Is the work that UDEX completes insured?\",\"answer\":\"This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.\"},{\"question\":\"3- Is the work that UDEX completes insured?\",\"answer\":\"This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.\"}]}', '2021-11-23 20:24:05', '2022-02-02 03:37:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saamkvn@gmail.com', '$2y$10$ojKEGQnW/bEkkZ.iX7HrYeeVH6au9beKySu/HPEEEbyPzSizFaEO6', '2021-11-29 20:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `project_meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`project_meta`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uid`, `project_meta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 11, '{\"address_number_name\":\"234\",\"address_street_name\":\"werwr\",\"postcode\":\"wewer\",\"special_considerations\":[\"It\'s on greenbelt land\"],\"special_considerations_information\":null,\"currently_own_this_property\":[\"We\'ve made an offer on this property\",\"We\'re just exploring\"],\"currently_own_this_property_information\":\"werwre\",\"about_your_property_describe\":\"werwrew\",\"dont_like_about_your_property_describe\":\"werwer\",\"purpose_of_this_property\":\"I\'ll be living in it\",\"purpose_of_this_property_information\":null,\"living_in_this_property_adults\":\"2\",\"living_in_this_property_children\":\"0\",\"living_in_this_property_pets\":\"0\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":\"wer\",\"have_you_ever_worked_with_an_architect_before\":\"yes\",\"have_you_ever_worked_with_an_architect_before_information\":null,\"concerns_about_starting_your_project\":\"wwerwr\",\"What_are_you_most_looking_forward_to_about_your_project\":\"Planning all the little details\",\"What_are_you_most_looking_forward_to_about_your_project_information\":\"werwre\",\"which_spaces_would_you_like_us_to_design_bathroom\":\"2\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"2\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"1\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"0\",\"which_spaces_would_you_like_us_to_design_living_room\":\"0\",\"which_spaces_would_you_like_us_to_design_detailed\":\"sdssdf\",\"pinterest_name\":null,\"website\":null,\"start_time_month\":\"select a month:\",\"start_time_year\":\"2021\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":null,\"price\":\"140000;300000\",\"how_flexible_is_your_budget\":\"Any increase would be very difficult for me\",\"how_flexible_is_your_budget_information\":null,\"how_are_you_financing_your_project\":[\"The creative process\",\"Selling a property\"],\"how_are_you_financing_your_project_information\":null,\"following_services\":[\"Architectural drawings\"],\"following_services_information\":null,\"you_like_to_be_in_the_build_phase\":\"I can be involved if required, to save costs\",\"you_like_to_be_in_the_build_phase_information\":null}', '2021-09-26 13:06:49', '2021-09-26 13:06:49', NULL),
(8, 11, '{\"address_number_name\":\"kjb\",\"address_street_name\":\"213wertyui87654\",\"postcode\":\"02146094496\",\"special_considerations\":[\"It\'s in a conservation area\"],\"special_considerations_information\":\"sadasd\",\"currently_own_this_property\":[\"Yes, I own the freehold\",\"We\'ve exchanged on this property\"],\"currently_own_this_property_information\":\"dasdad\",\"about_your_property_describe\":\"43aert45rta4etg3e\",\"dont_like_about_your_property_describe\":\"jdgsg\",\"purpose_of_this_property\":\"I\'ll be living in it\",\"purpose_of_this_property_information\":null,\"living_in_this_property_adults\":\"2\",\"living_in_this_property_children\":\"0\",\"living_in_this_property_pets\":\"0\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":\"gsdgfdsfgsdgfds\",\"have_you_ever_worked_with_an_architect_before\":\"yes\",\"have_you_ever_worked_with_an_architect_before_information\":\"43tAZerwgtq35ragreq5 tgear\",\"concerns_about_starting_your_project\":\"ewr\",\"What_are_you_most_looking_forward_to_about_your_project\":\"Learning something new\",\"What_are_you_most_looking_forward_to_about_your_project_information\":\"534tfeawr gerst34\",\"which_spaces_would_you_like_us_to_design_bathroom\":\"1\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"2\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"1\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"3\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"6\",\"which_spaces_would_you_like_us_to_design_living_room\":\"3\",\"which_spaces_would_you_like_us_to_design_detailed\":null,\"pinterest_name\":\"mehrzad deris\",\"website\":\"https:\\/\\/www.hausbiz.com\\/\",\"start_time_month\":\"3\",\"start_time_year\":\"2025\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":\"adsacxzfe\",\"price\":\"55000;180000\",\"how_flexible_is_your_budget\":\"I\'d like to meet my budget but I have some flexibility\",\"how_flexible_is_your_budget_information\":\"sdfsd\",\"how_are_you_financing_your_project\":[\"Remortgaged\",\"Selling a property\"],\"how_are_you_financing_your_project_information\":\"dsfdliuhyu,iok,iy\",\"following_services\":[\"Measured survey\",\"Architectural drawings\"],\"following_services_information\":\"sdfsdfdsf\",\"you_like_to_be_in_the_build_phase\":\"I can be involved if required, to save costs\",\"you_like_to_be_in_the_build_phase_information\":\"hkgcvgyjh hj h\",\"inspiration\":11}', '2021-11-19 16:01:10', '2021-11-19 16:01:10', NULL),
(9, 14, '{\"address_number_name\":\"16\",\"address_street_name\":\"Flat\",\"postcode\":\"KT1 3FD\",\"special_considerations\":[\"It\'s in a conservation area\"],\"special_considerations_information\":null,\"currently_own_this_property\":[\"Yes, I own the freehold\"],\"currently_own_this_property_information\":null,\"about_your_property_describe\":\"asasas\",\"dont_like_about_your_property_describe\":\"asasasas\",\"purpose_of_this_property\":\"I\'ll be living in it\",\"purpose_of_this_property_information\":null,\"living_in_this_property_adults\":\"0\",\"living_in_this_property_children\":\"3\",\"living_in_this_property_pets\":\"0\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":null,\"have_you_ever_worked_with_an_architect_before\":\"yes\",\"have_you_ever_worked_with_an_architect_before_information\":null,\"concerns_about_starting_your_project\":\"ASAS\",\"What_are_you_most_looking_forward_to_about_your_project\":\"Getting it done\",\"What_are_you_most_looking_forward_to_about_your_project_information\":\"AASA\",\"which_spaces_would_you_like_us_to_design_bathroom\":\"2\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"2\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"0\",\"which_spaces_would_you_like_us_to_design_living_room\":\"0\",\"which_spaces_would_you_like_us_to_design_detailed\":null,\"pinterest_name\":\"SDXSDX\",\"website\":\"SDSDXS\",\"start_time_month\":\"4\",\"start_time_year\":\"2021\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":null,\"price\":\"70000;300000\",\"how_flexible_is_your_budget\":\"Any increase would be very difficult for me\",\"how_flexible_is_your_budget_information\":null,\"how_are_you_financing_your_project\":[\"Remortgaged\"],\"how_are_you_financing_your_project_information\":null,\"following_services\":[\"Measured survey\"],\"following_services_information\":null,\"you_like_to_be_in_the_build_phase\":\"Not involved at all. I want someone to manage this\",\"you_like_to_be_in_the_build_phase_information\":null,\"inspiration\":12}', '2021-11-25 22:09:20', '2021-12-15 20:48:30', '2021-12-15 20:48:30'),
(10, 11, '{\"address_number_name\":\"16\",\"address_street_name\":\"Flat\",\"postcode\":\"KT1 3FD3\",\"special_considerations\":[\"It\'s in a conservation area\"],\"special_considerations_information\":null,\"currently_own_this_property\":[\"Yes, I own the freehold\"],\"currently_own_this_property_information\":null,\"about_your_property_describe\":\"asasas\",\"dont_like_about_your_property_describe\":\"asasasas\",\"purpose_of_this_property\":\"I\'ll be living in it\",\"purpose_of_this_property_information\":\"dfsaas23\",\"living_in_this_property_adults\":\"3\",\"living_in_this_property_children\":\"0\",\"living_in_this_property_pets\":\"0\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":\"sadfsf\",\"have_you_ever_worked_with_an_architect_before\":\"yes\",\"have_you_ever_worked_with_an_architect_before_information\":\"eafsds\",\"concerns_about_starting_your_project\":\"ASAS\",\"What_are_you_most_looking_forward_to_about_your_project\":\"Getting it done\",\"What_are_you_most_looking_forward_to_about_your_project_information\":\"AASA\",\"which_spaces_would_you_like_us_to_design_bathroom\":\"2\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"2\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"0\",\"which_spaces_would_you_like_us_to_design_living_room\":\"0\",\"which_spaces_would_you_like_us_to_design_detailed\":\"adsf\",\"pinterest_name\":\"SDXSDX\",\"website\":\"SDSDXS\",\"start_time_month\":\"4\",\"start_time_year\":\"2022\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":null,\"price\":\"70000;300000\",\"how_flexible_is_your_budget\":\"Any increase would be very difficult for me\",\"how_flexible_is_your_budget_information\":null,\"how_are_you_financing_your_project\":[\"Remortgaged\"],\"how_are_you_financing_your_project_information\":null,\"following_services\":[\"Measured survey\"],\"following_services_information\":null,\"you_like_to_be_in_the_build_phase\":\"Not involved at all. I want someone to manage this\",\"you_like_to_be_in_the_build_phase_information\":null,\"inspiration\":12}', '2021-11-25 22:09:20', '2021-12-13 00:31:54', NULL),
(11, 2, '{\"address_number_name\":\"32456\",\"address_street_name\":\"213wertyui87654\",\"postcode\":\"02146094496d\",\"special_considerations\":[\"It\'s in a conservation area\",\"It\'s in an area of outstanding natural beauty\",\"It\'s on greenbelt land\"],\"special_considerations_information\":\"asd\",\"currently_own_this_property\":[\"Yes, I own the freehold\",\"Yes, I own the leasehold\",\"We\'ve exchanged on this property\",\"We\'ve made an offer on this property\"],\"currently_own_this_property_information\":\"e34wteryhdg\",\"about_your_property_describe\":\"43aert45rta4etg3ed\",\"dont_like_about_your_property_describe\":\"dsfd\",\"purpose_of_this_property\":\"I\'m looking to sell it\",\"purpose_of_this_property_information\":\"234ertdgfh\",\"living_in_this_property_adults\":\"3\",\"living_in_this_property_children\":\"3\",\"living_in_this_property_pets\":\"2\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":\"ds\",\"have_you_ever_worked_with_an_architect_before\":\"no\",\"have_you_ever_worked_with_an_architect_before_information\":\"wer\",\"concerns_about_starting_your_project\":\"ewrd\",\"What_are_you_most_looking_forward_to_about_your_project\":\"The creative process\",\"What_are_you_most_looking_forward_to_about_your_project_information\":\"534tfeawr gerst34\",\"which_spaces_would_you_like_us_to_design_bathroom\":\"5\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"4\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"2\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"2\",\"which_spaces_would_you_like_us_to_design_living_room\":\"5\",\"which_spaces_would_you_like_us_to_design_detailed\":\"KJCSNBELIU hffeiau\",\"pinterest_name\":\"mehrzad derisj\",\"website\":\"http:\\/\\/dsfsd.com\\/\",\"start_time_month\":\"3\",\"start_time_year\":\"2027\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":\"adsacxzfe\",\"price\":\"100000;245000\",\"how_flexible_is_your_budget\":\"I\'d like to meet my budget but I have some flexibility\",\"how_flexible_is_your_budget_information\":\"sdfsd\",\"how_are_you_financing_your_project\":[\"The creative process\",\"Remortgaged\",\"Selling a property\"],\"how_are_you_financing_your_project_information\":\"dsfdliuhyu,iok,iy\",\"following_services\":[\"Measured survey\",\"Architectural drawings\"],\"following_services_information\":\"90puihjklg\",\"you_like_to_be_in_the_build_phase\":\"Not involved at all. I want someone to manage this\",\"you_like_to_be_in_the_build_phase_information\":\"hkgcvgyjh hj h\",\"inspiration\":18}', '2021-12-13 02:51:30', '2021-12-13 02:51:30', NULL),
(12, 22, '{\"address_number_name\":\"asd\",\"address_street_name\":\"ad\",\"postcode\":\"ad\",\"special_considerations\":[\"It\'s on greenbelt land\"],\"special_considerations_information\":null,\"currently_own_this_property\":[\"Yes, I own the leasehold\"],\"currently_own_this_property_information\":null,\"about_your_property_describe\":\"asdad\",\"dont_like_about_your_property_describe\":\"asdad\",\"purpose_of_this_property\":\"I\'ll be living in it\",\"purpose_of_this_property_information\":null,\"living_in_this_property_adults\":\"1\",\"living_in_this_property_children\":\"0\",\"living_in_this_property_pets\":\"0\",\"how_creative_would_you_like_us_to_be_with_your_space\":\"I want you to be creative with my space\",\"how_creative_would_you_like_us_to_be_with_your_space_information\":null,\"have_you_ever_worked_with_an_architect_before\":\"yes\",\"have_you_ever_worked_with_an_architect_before_information\":null,\"concerns_about_starting_your_project\":\"asdasdasda ]asdasda sdasd asd asd as dasd asd asd asd asdasd    asdasijasdiasjdiasjdiasjdiajdiasjdiasjdiasjdiajdiasjdasasd\",\"What_are_you_most_looking_forward_to_about_your_project\":\"Learning something new\",\"What_are_you_most_looking_forward_to_about_your_project_information\":null,\"which_spaces_would_you_like_us_to_design_bathroom\":\"0\",\"which_spaces_would_you_like_us_to_design_double_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_single_bedroom\":\"0\",\"which_spaces_would_you_like_us_to_design_dining_room\":\"1\",\"which_spaces_would_you_like_us_to_design_kitchen\":\"0\",\"which_spaces_would_you_like_us_to_design_living_room\":\"0\",\"which_spaces_would_you_like_us_to_design_detailed\":\"asdadd\",\"pinterest_name\":\"sdfs\",\"website\":\"sdf\",\"start_time_month\":\"4\",\"start_time_year\":\"2022\",\"how_flexible_are_you_on_this_timeframe\":\"Meeting my deadline is incredibly important\",\"how_flexible_are_you_on_this_timeframe_information\":null,\"price\":\"55000;155000\",\"how_flexible_is_your_budget\":\"Any increase would be very difficult for me\",\"how_flexible_is_your_budget_information\":null,\"how_are_you_financing_your_project\":[\"Remortgaged\"],\"how_are_you_financing_your_project_information\":null,\"following_services\":[\"Measured survey\"],\"following_services_information\":null,\"you_like_to_be_in_the_build_phase\":\"Not involved at all. I want someone to manage this\",\"you_like_to_be_in_the_build_phase_information\":null,\"inspiration\":19}', '2021-12-13 03:09:24', '2021-12-13 03:09:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'Approved Inspector', NULL, NULL, NULL),
(2, 'CCTV Surveyor', NULL, NULL, NULL),
(3, 'Structural Engineer', NULL, NULL, NULL),
(4, 'Building Contractor', NULL, NULL, NULL),
(5, 'Party Wall Surveyor', NULL, NULL, NULL),
(6, 'Other Supplier', NULL, NULL, '2022-02-05 01:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `tradepeople`
--

CREATE TABLE `tradepeople` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tradepeople`
--

INSERT INTO `tradepeople` (`id`, `name`, `last_name`, `email`, `phone`, `company_name`, `company_website`, `service_id`, `note`, `meta`, `created_at`, `updated_at`) VALUES
(3, 'jiojio', 'joijio', 'jj@op.co', 'iohijoji', 'ijoij', 'oijiojio', 2, NULL, '2,3,4', '2022-01-27 02:58:41', '2022-01-27 02:58:41'),
(4, 'joijoi', 'joijio', 'iuyiuy@voih', 'joijoi', 'joijoij', 'oijoij', 2, NULL, '2', '2022-02-05 01:29:10', '2022-02-05 01:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `postcode`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `phone`, `avatar`) VALUES
(2, 'Mehrzad Deris', '', '', '', 'mehrzad.deris@gmail.com', NULL, '$2y$10$AZ5KTRkufLWvtqwiZCeO4OuEXE2L5pqgGWc4MnWFxI5R8KfAwpq7S', 'admin', NULL, '2021-08-08 15:06:24', '2021-08-08 15:09:18', NULL, NULL),
(7, 'amirhosein', '', '', '', 'amirhnj@gmail.com', NULL, '$2y$10$pnV72glybcO9F4pZiemer.t3gRYsDYpfpAnvTIia1/xx2tU/UwB3.', 'author', NULL, '2021-08-08 13:44:56', '2021-08-08 20:27:59', NULL, NULL),
(11, 'Saam', 'Kaviani', 'Flat 602,', 'KT1 3FD', 'saamkvn@gmail.com', NULL, '$2y$10$aCA9efXA0cx4GqQO1pN/mOByF/thSEhQON4P2fleaLvI3vvPM/oli', 'admin', NULL, '2021-09-06 00:49:20', '2021-09-06 00:49:20', '07807059059', NULL),
(13, 'mehrzad', 'deris', 'ds', '02146094496', 'mehrzad.deris@fgmail.com', NULL, '$2y$10$F6Lh7Is/mTAKX1IE/13eiODe5MG7c7m8xYIp.8Y1m66vKyPaAh30S', 'user', NULL, '2021-11-25 22:02:38', '2021-11-25 22:02:38', '09901932636', NULL),
(16, 'Tawsif', 'Khan', 'Bukit beruang utama', '75450', 'tawsif.online@gmail.com', NULL, '$2y$10$fTOT5L.N1BkgGLHKxJFIrevFtYuAfv1SpaaPVkoXsuuznS/pd0tUO', 'user', NULL, '2021-11-29 20:48:19', '2021-11-29 20:48:19', '01139323579', NULL),
(20, 'samyar', 'Kaviani', 'International House', 'N1 7SR', 'saam@urdai.uk', NULL, '$2y$10$xpiWgyQ6nSuXWLy0zQM21uspkJIn36HIZPAsac0qEqyl3OowRI4M.', 'user', NULL, '2021-12-08 03:11:30', '2021-12-08 03:11:30', '0780705923059', NULL),
(21, 'JONATHAN', 'Bond', 'Oxford', '65fgi', 'j.bond@yahoo.com', NULL, '$2y$10$kpI1XqJuQIA8KpUYBoQiwOm0wn6KM7SSb2eVUR.XfKb0jmOjgK6f.', 'user', NULL, '2021-12-09 23:23:31', '2021-12-09 23:23:31', '087547894', NULL),
(22, 'saam2', 'kaviani2', '123123123', '12312321', 'samyarkvn@gmail.com', NULL, '$2y$10$64hWi2xQLmiJMhO56G/1XuEV9bkLsGJfae32wlSPuHvH8sa53UH0y', 'user', NULL, '2021-12-12 21:16:13', '2021-12-12 21:16:13', '1234567789', NULL),
(23, 'saam2', 'kaviani2', '123123123', '12312321', 'samyakrkvn@gmail.com', NULL, '$2y$10$64hWi2xQLmiJMhO56G/1XuEV9bkLsGJfae32wlSPuHvH8sa53UH0y', 'user', NULL, '2021-12-12 21:16:13', '2021-12-12 21:16:13', '1234567789', NULL),
(24, 'ali', 'aharian', '09', '09', 'aliaharian@yahoo.com', NULL, '$2y$10$VdDFGd6efI/lvRZiaRnhLe1KlvGNCkdjbKbt7KARZzo2mjitIQgO2', 'admin', NULL, '2021-12-16 06:22:41', '2021-12-16 06:22:41', '0912', NULL),
(25, 'ali', 'aharian', 'qwert', 'sdf', 'aliaharian5@yahoo.com', NULL, '$2y$10$PxtMuBruE7jt6kFkEeclH.ejJ8LRV6J6GdCfZlKgJCKca9Zq/sLF.', 'user', NULL, '2022-01-26 09:07:23', '2022-01-26 09:07:23', '09307473703', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whats_news`
--

CREATE TABLE `whats_news` (
  `id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content_text` text NOT NULL,
  `thumbnail` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whats_news`
--

INSERT INTO `whats_news` (`id`, `uid`, `title`, `content_text`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Design: Start or manage a design project', '<p>Get a quote for our services, ask our experts for advice, write your project brief, then follow the progress of a drawing/planning package every step of the way</p>', 20, 'published', '2021-12-15 14:03:55', '2021-12-15 19:51:38'),
(2, 2, 'your project brief, then follow', '<p>your project brief, then follow&nbsp;your project brief, then followyour project brief, then follow&nbsp;your project brief, then follow&nbsp;your project brief, then follow&nbsp;your project brief, then follow</p>', 22, 'published', '2021-12-15 14:04:34', '2021-12-15 19:54:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architectionary`
--
ALTER TABLE `architectionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect`
--
ALTER TABLE `connect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect_options`
--
ALTER TABLE `connect_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_options`
--
ALTER TABLE `design_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tradepeople`
--
ALTER TABLE `tradepeople`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whats_news`
--
ALTER TABLE `whats_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `architectionary`
--
ALTER TABLE `architectionary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `connect`
--
ALTER TABLE `connect`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `connect_options`
--
ALTER TABLE `connect_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `design_options`
--
ALTER TABLE `design_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tradepeople`
--
ALTER TABLE `tradepeople`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `whats_news`
--
ALTER TABLE `whats_news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
