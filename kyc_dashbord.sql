-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 04:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyc_dashbord`
--

-- --------------------------------------------------------

--
-- Table structure for table `kyc_table`
--

CREATE TABLE `kyc_table` (
  `kyc_id` int(11) NOT NULL,
  `kyc_type` set('self','shg','mfg','jlg','or') NOT NULL,
  `status` set('approve','reject','pending','seek_con') NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `gender` set('male','female','transgender','') NOT NULL,
  `marital_status` set('married','unmarried','others','') NOT NULL,
  `caste` set('st','sc','obc','general','minority') NOT NULL,
  `religion` set('hindu','muslim','christian','others') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kyc_table`
--

INSERT INTO `kyc_table` (`kyc_id`, `kyc_type`, `status`, `member_name`, `gender`, `marital_status`, `caste`, `religion`, `created_at`) VALUES
(1, 'self', 'approve', 'asim saha', 'male', 'married', 'sc', 'hindu', '2021-09-13 22:49:11'),
(2, 'shg', 'pending', 'kusum', 'female', 'unmarried', 'obc', 'hindu', '2021-09-13 22:49:11'),
(3, 'jlg', 'reject', 'ram', 'male', 'married', 'obc', 'hindu', '2021-09-13 22:52:59'),
(4, 'jlg', 'reject', 'faisal', 'male', 'married', 'minority', 'muslim', '2021-09-13 22:52:59'),
(5, 'self', 'approve', 'sunil', 'male', 'unmarried', 'sc', 'hindu', '2021-09-14 20:12:31'),
(6, 'shg', 'reject', 'asim', 'male', 'married', 'st', 'hindu', '2021-09-14 20:12:31'),
(7, 'jlg', 'pending', 'bhaskar', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(8, 'or', 'seek_con', 'jamal', 'female', 'unmarried', 'general', 'hindu', '2021-09-14 20:12:31'),
(9, 'mfg', 'reject', 'kuntal', 'male', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(10, 'self', 'approve', 'anima', 'female', 'unmarried', 'general', 'muslim', '2021-09-14 20:12:31'),
(11, 'jlg', 'reject', 'afsara', 'female', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(12, 'mfg', 'approve', 'jalam', 'female', 'unmarried', 'general', 'hindu', '2021-09-14 20:12:31'),
(13, 'or', 'reject', 'ram', 'female', 'unmarried', 'obc', 'christian', '2021-09-14 20:12:31'),
(14, 'shg', 'pending', 'sam', 'male', 'married', 'general', 'muslim', '2021-09-14 20:12:31'),
(15, 'or', 'approve', 'jodu', 'female', '', 'minority', 'others', '2021-09-14 20:12:31'),
(16, 'mfg', '', 'sunil1', 'transgender', 'married', 'obc', 'christian', '2021-09-14 20:12:31'),
(17, 'shg', 'reject', 'sunil2', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(18, 'self', 'reject', 'sunil3', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(19, 'self', 'pending', 'sunil3', 'male', 'married', 'general', 'christian', '2021-09-14 20:12:31'),
(20, 'or', '', 'sunil5', 'male', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(21, 'jlg', 'reject', 'sunil6', 'male', 'unmarried', 'sc', 'hindu', '2021-09-14 20:12:31'),
(22, 'or', 'approve', 'sunil7', 'male', 'married', 'obc', 'muslim', '2021-09-14 20:12:31'),
(23, 'mfg', 'pending', 'sunil8', 'female', 'unmarried', 'sc', 'hindu', '2021-09-14 20:12:31'),
(24, 'jlg', 'approve', 'sunil9', 'female', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(25, 'self', 'reject', 'sunil10', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(26, 'shg', '', 'sunil11', 'male', 'married', 'general', 'christian', '2021-09-14 20:12:31'),
(27, 'shg', 'reject', 'sunil12', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(28, 'or', '', 'sunil13', 'female', 'married', 'general', 'others', '2021-09-14 20:12:31'),
(29, 'jlg', 'reject', 'sunil14', 'transgender', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(30, 'or', '', 'sunil15', 'female', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(31, 'self', 'reject', 'sunil16', 'male', 'others', 'sc', 'others', '2021-09-14 20:12:31'),
(32, 'shg', '', 'sunil17', 'female', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(33, 'mfg', '', 'sunil18', 'male', 'married', 'general', 'christian', '2021-09-14 20:12:31'),
(34, 'jlg', 'reject', 'sunil19', 'male', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(35, 'or', '', 'sunil20', 'male', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(36, 'self', 'reject', 'sunil21', 'male', 'married', 'general', 'muslim', '2021-09-14 20:12:31'),
(37, 'shg', '', 'sunil22', 'female', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(38, 'mfg', '', 'sunil23', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(39, 'or', 'reject', 'sunil24', 'female', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(40, 'jlg', '', 'sunil25', 'male', 'married', 'general', 'hindu', '2021-09-14 20:12:31'),
(41, 'mfg', 'pending', 'sunil26', 'female', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(42, 'self', '', 'sunil27', 'transgender', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(43, 'or', 'reject', 'sunil28', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(44, 'jlg', 'seek_con', 'sunil29', 'female', 'unmarried', 'obc', 'christian', '2021-09-14 20:12:31'),
(45, 'shg', 'reject', 'sunil30', 'male', 'married', 'general', 'muslim', '2021-09-14 20:12:31'),
(46, 'or', '', 'sunil31', 'female', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(47, 'or', 'reject', 'sunil32', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(48, 'mfg', '', 'sunil33', 'female', 'others', 'obc', 'others', '2021-09-14 20:12:31'),
(49, 'shg', 'approve', 'sunil34', 'male', 'others', 'general', 'muslim', '2021-09-14 20:12:31'),
(50, 'jlg', 'reject', 'sunil35', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(51, 'self', '', 'sunil36', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(52, 'self', 'seek_con', 'sunil37', 'transgender', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(53, 'or', 'reject', 'sunil38', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(54, 'shg', 'pending', 'sunil39', 'male', 'married', 'general', 'christian', '2021-09-14 20:12:31'),
(55, 'shg', '', 'sunil40', 'female', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(56, 'jlg', 'reject', 'sunil41', 'male', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(57, 'mfg', '', 'sunil42', 'female', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(58, 'self', 'reject', 'sunil43', 'male', 'unmarried', 'general', 'hindu', '2021-09-14 20:12:31'),
(59, 'or', '', 'sunil44', 'male', 'others', 'sc', 'muslim', '2021-09-14 20:12:31'),
(60, 'jlg', 'pending', 'sunil45', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(61, 'mfg', 'pending', 'sunil46', 'male', 'married', 'general', 'others', '2021-09-14 20:12:31'),
(62, 'shg', '', 'sunil47', 'female', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(63, 'jlg', '', 'sunil48', 'transgender', 'married', 'sc', 'christian', '2021-09-14 20:12:31'),
(64, 'or', 'reject', 'sunil49', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(65, 'self', '', 'sunil50', 'male', 'others', 'sc', 'muslim', '2021-09-14 20:12:31'),
(66, 'mfg', 'approve', 'sunil51', 'transgender', 'unmarried', 'sc', 'others', '2021-09-14 20:12:31'),
(67, 'jlg', '', 'sunil52', 'male', 'others', 'general', 'hindu', '2021-09-14 20:12:31'),
(68, 'or', 'reject', 'sunil53', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(69, 'shg', 'approve', 'sunil54', 'male', 'unmarried', 'sc', 'christian', '2021-09-14 20:12:31'),
(70, 'mfg', '', 'sunil55', 'female', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(71, 'jlg', 'reject', 'sunil56', 'male', 'married', 'obc', 'others', '2021-09-14 20:12:31'),
(72, 'or', '', 'sunil57', 'male', 'unmarried', 'general', 'muslim', '2021-09-14 20:12:31'),
(73, 'mfg', '', 'sunil58', 'male', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(74, 'self', '', 'sunil59', 'male', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(75, 'or', 'reject', 'sunil60', 'male', 'unmarried', 'sc', 'hindu', '2021-09-14 20:12:31'),
(76, 'or', '', 'sunil61', 'female', 'others', 'obc', 'muslim', '2021-09-14 20:12:31'),
(77, 'or', 'approve', 'sunil62', 'male', 'others', 'general', 'others', '2021-09-14 20:12:31'),
(78, 'or', '', 'sunil63', 'male', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(79, 'mfg', 'reject', 'sunil64', 'female', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(80, 'jlg', '', 'sunil65', 'transgender', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(81, 'shg', 'pending', 'sunil66', 'transgender', 'married', 'general', 'hindu', '2021-09-14 20:12:31'),
(82, 'self', '', 'sunil67', 'male', 'others', 'obc', 'others', '2021-09-14 20:12:31'),
(83, 'self', '', 'sunil68', 'female', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(84, 'self', 'reject', 'sunil69', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(85, 'or', '', 'sunil70', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(86, 'shg', '', 'sunil71', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(87, 'jlg', 'reject', 'sunil72', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(88, 'mfg', '', 'sunil73', 'female', 'married', 'general', 'others', '2021-09-14 20:12:31'),
(89, 'self', 'approve', 'sunil74', 'transgender', 'married', 'sc', 'christian', '2021-09-14 20:12:31'),
(90, 'self', 'approve', 'sunil75', 'female', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(91, 'self', '', 'sunil76', 'male', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(92, 'self', 'pending', 'sunil77', 'male', 'married', 'obc', 'others', '2021-09-14 20:12:31'),
(93, 'or', '', 'sunil78', 'male', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(94, '', 'reject', 'sunil79', 'female', 'others', 'general', 'hindu', '2021-09-14 20:12:31'),
(95, 'shg', '', 'sunil80', 'transgender', 'others', 'sc', 'christian', '2021-09-14 20:12:31'),
(96, 'or', 'approve', 'sunil81', 'female', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(97, 'or', '', 'sunil82', 'male', 'others', 'general', 'hindu', '2021-09-14 20:12:31'),
(98, 'shg', 'approve', 'sunil83', 'transgender', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(99, 'mfg', 'reject', 'sunil84', 'male', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(100, 'self', '', 'sunil85', 'female', 'others', 'general', 'hindu', '2021-09-14 20:12:31'),
(101, 'jlg', 'approve', 'sunil86', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(102, 'mfg', 'approve', 'sunil87', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(103, 'jlg', 'seek_con', 'sunil88', 'male', 'unmarried', 'general', 'others', '2021-09-14 20:12:31'),
(104, 'mfg', 'approve', 'sunil89', 'female', 'others', 'sc', 'muslim', '2021-09-14 20:12:31'),
(105, 'shg', '', 'sunil90', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(106, 'or', '', 'sunil91', 'transgender', 'married', 'sc', 'christian', '2021-09-14 20:12:31'),
(107, 'jlg', '', 'sunil93', 'female', 'unmarried', 'general', 'muslim', '2021-09-14 20:12:31'),
(108, 'self', 'reject', 'sunil94', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(109, 'self', '', 'sunil95', 'male', 'others', 'general', 'hindu', '2021-09-14 20:12:31'),
(110, 'or', '', 'sunil96', 'female', 'unmarried', 'obc', 'christian', '2021-09-14 20:12:31'),
(111, 'shg', 'approve', 'sunil97', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(112, 'mfg', 'approve', 'sunil98', 'female', 'married', 'obc', 'muslim', '2021-09-14 20:12:31'),
(113, 'jlg', '', 'sunil99', 'male', 'unmarried', 'general', 'hindu', '2021-09-14 20:12:31'),
(114, 'mfg', 'pending', 'sunil100', 'male', 'others', 'minority', 'muslim', '2021-09-14 20:12:31'),
(115, 'jlg', '', 'sunil101', 'female', 'unmarried', 'obc', 'christian', '2021-09-14 20:12:31'),
(116, 'or', 'pending', 'sunil102', 'transgender', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(117, 'shg', 'approve', 'sunil103', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(118, 'jlg', '', 'sunil104', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(119, 'or', 'approve', 'sunil105', 'female', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(120, 'or', '', 'sunil106', 'male', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(121, 'or', 'reject', 'sunil107', 'female', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(122, 'or', '', 'sunil108', 'transgender', 'others', 'minority', 'muslim', '2021-09-14 20:12:31'),
(123, 'jlg', 'approve', 'sunil109', 'male', 'unmarried', 'obc', 'christian', '2021-09-14 20:12:31'),
(124, 'mfg', '', 'sunil110', 'female', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(125, 'self', 'approve', 'sunil111', 'transgender', 'married', 'obc', 'others', '2021-09-14 20:12:31'),
(126, 'self', '', 'sunil112', 'female', 'married', 'minority', 'others', '2021-09-14 20:12:31'),
(127, 'self', 'approve', 'sunil113', 'male', 'married', 'obc', 'christian', '2021-09-14 20:12:31'),
(128, 'or', '', 'sunil114', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(129, 'jlg', '', 'sunil115', 'female', 'married', 'minority', 'muslim', '2021-09-14 20:12:31'),
(130, 'or', 'reject', 'sunil116', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(131, 'shg', '', 'sunil117', 'female', 'unmarried', 'minority', 'muslim', '2021-09-14 20:12:31'),
(132, 'mfg', 'reject', 'sunil118', 'transgender', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(133, 'jlg', 'reject', 'sunil119', 'female', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(134, 'jlg', '', 'sunil120', 'male', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(135, 'jlg', '', 'sunil121', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(136, 'jlg', 'reject', 'sunil122', 'female', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(137, 'mfg', 'approve', 'sunil123', 'male', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(138, 'jlg', '', 'sunil124', 'female', 'married', 'minority', 'others', '2021-09-14 20:12:31'),
(139, 'or', 'approve', 'sunil125', 'male', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(140, 'or', '', 'sunil126', 'female', 'others', 'minority', 'others', '2021-09-14 20:12:31'),
(141, 'or', 'approve', 'sunil127', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(142, 'shg', '', 'sunil128', 'male', 'unmarried', 'minority', 'muslim', '2021-09-14 20:12:31'),
(143, 'shg', '', 'sunil129', 'female', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(144, 'mfg', 'approve', 'sunil130', 'female', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(145, 'jlg', '', 'sunil131', 'transgender', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(146, 'shg', 'reject', 'sunil132', 'male', 'unmarried', 'minority', 'hindu', '2021-09-14 20:12:31'),
(147, 'shg', 'seek_con', 'sunil133', 'male', 'married', 'sc', 'christian', '2021-09-14 20:12:31'),
(148, 'shg', '', 'sunil134', 'transgender', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(149, 'or', 'approve', 'sunil135', 'female', 'unmarried', 'sc', 'muslim', '2021-09-14 20:12:31'),
(150, 'or', 'approve', 'sunil136', 'male', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(151, 'or', '', 'sunil137', 'male', 'unmarried', 'minority', 'muslim', '2021-09-14 20:12:31'),
(152, 'jlg', 'approve', 'sunil138', 'female', 'married', 'sc', 'others', '2021-09-14 20:12:31'),
(153, 'shg', 'seek_con', 'sunil139', 'male', 'married', 'minority', 'muslim', '2021-09-14 20:12:31'),
(154, 'jlg', '', 'sunil140', 'male', 'unmarried', 'sc', 'christian', '2021-09-14 20:12:31'),
(155, 'or', 'reject', 'sunil141', 'male', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(156, 'shg', '', 'sunil142', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(157, 'shg', 'pending', 'sunil143', 'male', 'unmarried', 'minority', 'hindu', '2021-09-14 20:12:31'),
(158, 'shg', '', 'sunil144', 'female', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(159, 'or', 'pending', 'sunil145', 'male', 'unmarried', 'obc', 'hindu', '2021-09-14 20:12:31'),
(160, 'or', '', 'sunil146', 'transgender', 'married', 'obc', 'muslim', '2021-09-14 20:12:31'),
(161, 'self', '', 'sunil147', 'female', 'married', 'minority', 'others', '2021-09-14 20:12:31'),
(162, 'self', 'reject', 'sunil148', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(163, 'mfg', 'approve', 'sunil149', 'male', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(164, 'jlg', '', 'sunil150', 'female', 'others', 'obc', 'others', '2021-09-14 20:12:31'),
(165, 'or', 'reject', 'sunil151', 'male', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(166, 'self', 'reject', 'sunil152', 'male', 'married', 'sc', 'christian', '2021-09-14 20:12:31'),
(167, 'jlg', 'seek_con', 'sunil153', 'male', 'others', 'obc', 'hindu', '2021-09-14 20:12:31'),
(168, 'jlg', '', 'sunil154', 'female', 'unmarried', 'sc', 'others', '2021-09-14 20:12:31'),
(169, 'shg', '', 'sunil155', 'female', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(170, 'or', 'seek_con', 'sunil156', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(171, 'jlg', '', 'sunil157', 'female', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(172, 'mfg', 'approve', 'sunil158', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(173, 'jlg', 'seek_con', 'sunil159', 'female', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(174, 'mfg', 'approve', 'sunil160', 'male', 'unmarried', 'obc', 'muslim', '2021-09-14 20:12:31'),
(175, 'jlg', '', 'sunil161', 'male', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(176, 'self', 'pending', 'sunil162', 'female', 'married', 'sc', 'muslim', '2021-09-14 20:12:31'),
(177, 'self', '', 'sunil163', 'male', 'others', 'sc', 'hindu', '2021-09-14 20:12:31'),
(178, 'or', '', 'sunil164', 'male', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(179, 'shg', 'reject', 'sunil165', 'male', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(180, 'shg', 'reject', 'sunil166', 'transgender', 'married', 'obc', 'hindu', '2021-09-14 20:12:31'),
(181, 'shg', 'reject', 'sunil167', 'male', 'married', 'minority', 'hindu', '2021-09-14 20:12:31'),
(182, 'mfg', '', 'sunil168', 'male', 'unmarried', 'sc', 'christian', '2021-09-14 20:12:31'),
(183, 'mfg', '', 'sunil169', 'female', 'unmarried', 'sc', 'christian', '2021-09-14 20:12:31'),
(184, 'shg', 'reject', 'sunil170', 'male', 'unmarried', 'sc', 'others', '2021-09-14 20:12:31'),
(185, 'jlg', '', 'sunil171', 'female', 'unmarried', 'sc', 'others', '2021-09-14 20:12:31'),
(186, 'jlg', 'reject', 'sunil172', 'male', 'others', 'minority', 'others', '2021-09-14 20:12:31'),
(187, 'shg', '', 'sunil173', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(188, 'self', 'approve', 'sunil174', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(189, 'self', 'approve', 'sunil175', 'female', 'married', 'sc', 'hindu', '2021-09-14 20:12:31'),
(190, 'shg', 'pending', 'julia', 'female', 'married', 'obc', 'christian', '2020-09-09 23:32:18'),
(191, 'mfg', 'pending', 'ram', 'male', 'married', 'general', 'hindu', '2021-08-11 23:32:18'),
(192, 'shg', 'reject', 'rahul', 'male', 'unmarried', 'sc', 'hindu', '2021-08-10 23:33:33'),
(193, 'self', 'seek_con', 'sonali', 'female', 'married', 'obc', 'hindu', '2021-08-18 23:33:33'),
(194, 'shg', 'reject', 'noman', 'male', 'married', 'obc', 'christian', '2021-07-08 23:34:57'),
(195, 'mfg', 'pending', 'ram2', 'male', 'unmarried', 'obc', 'hindu', '2021-06-01 23:34:57'),
(196, 'self', 'reject', 'ram3', '', 'unmarried', 'obc', 'hindu', '2021-05-01 23:36:17'),
(197, 'shg', 'pending', 'ram4', 'male', 'unmarried', 'obc', 'hindu', '2021-05-01 23:36:17'),
(198, 'mfg', 'pending', 'tuhin', 'male', 'unmarried', 'obc', 'hindu', '2021-04-01 23:37:32'),
(199, 'shg', 'approve', 'kunal', 'male', 'married', 'sc', 'hindu', '2020-09-15 23:37:32'),
(200, 'mfg', 'pending', 'sakil', 'male', 'unmarried', 'sc', 'muslim', '2021-09-16 23:40:07'),
(201, 'shg', 'reject', 'rahim', 'male', 'unmarried', 'obc', 'muslim', '2021-09-16 23:40:07'),
(202, 'shg', 'reject', 'rahim', 'male', 'unmarried', 'general', 'muslim', '2021-09-17 12:53:45'),
(203, 'mfg', 'seek_con', 'savana', 'female', 'married', 'obc', 'muslim', '2021-09-17 12:53:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyc_table`
--
ALTER TABLE `kyc_table`
  ADD PRIMARY KEY (`kyc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kyc_table`
--
ALTER TABLE `kyc_table`
  MODIFY `kyc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
