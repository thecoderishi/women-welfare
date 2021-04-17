-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 09:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u744852351_guj`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `blockName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hBlockName` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gBlockName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `districtId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `blockName`, `hBlockName`, `gBlockName`, `deleted`, `districtId`, `lastUpdate`, `remark`, `orderBy`) VALUES
(1, 'BAVLA', 'बावला', 'બાવળા', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(2, 'DASKROI', 'दासक्रोई', 'દશક્રોઇ', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(3, 'DETROJ ', 'देत्रोज', 'ડેટ્રોજે', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(4, 'DHANDHUKA', 'धन्धुका', 'ધંધુકા', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(5, 'DHOLERA', 'धोलेरा', 'ધોલેરા', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(6, 'DHOLKA', 'धोलका', 'ધોળકા', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(7, 'MANDAL', 'मंडल', 'મંડલ', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(8, 'SANAND', 'सानंद', 'સૌંદુર', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(9, 'VIRAMGAM', 'विरामगाम', 'વિરમગામ', '0', 1, '2018-03-30 23:51:56', NULL, NULL),
(10, 'AMRELI', 'अमरेली', 'અમરેલી', '0', 2, '2018-03-31 00:30:02', NULL, NULL),
(11, 'BABRA', 'बाबर', 'બાબર', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(12, 'BAGASARA', 'बगसरा', 'બગાસર', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(13, 'DHARI', 'धरी', 'ધર્મ', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(14, 'JAFRABAD', 'जाफराबाद', 'જાફ્રાબાદ', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(15, 'KHAMBHA', 'खम्भा', 'ખંભા', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(16, 'KUNKAVAV -VADIA', 'कुनावाव -वाडिया', 'કુંકવાવ - વૅડિયા', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(17, 'LATHI', 'लाठी', 'લાઠી', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(18, 'LILIA', 'लिलिया', 'લિલિયા', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(19, 'RAJULA', 'राजुला', 'રાજુલા', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(20, 'SAVERKUNDLA', 'सावरकुंडला', 'સાવરકુંડા', '0', 2, '2018-03-31 00:34:39', NULL, NULL),
(21, 'ANAND', 'आनन्द', 'આનંદ', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(22, 'ANKLAV', 'अन्क्लाव', 'અંક્લાવ', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(23, 'BORSAD', 'बोरसद', 'બોરદ', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(24, 'KHAMBHAT', 'खंभात', 'ખંભાત', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(25, 'PETLAD', 'पेटलाद', 'પેટલાડ', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(26, 'SOJITRA', 'सोजित्रा', 'સોજીત્રા', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(27, 'TARAPUR', 'तारापुर', 'તારાપુર', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(28, 'UMRETH', 'उमरेठ', 'ઉમરેથ', '0', 3, '2018-03-31 00:41:13', NULL, NULL),
(29, 'BAYAD', 'बायद', 'બાયડ', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(30, 'BHILODA', 'भिलोदा', 'ભિલોડા', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(31, 'DHANSURA', 'धनसुरा', 'ડાન્સુરા', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(32, 'MALPUR', 'मालपुर', 'મલપુર', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(33, 'MEGHRAJ', 'मेघराज', 'મેગ્રેજ', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(34, 'MODASA', 'मोडासा', 'મોડાસા', '0', 4, '2018-03-31 00:58:28', NULL, NULL),
(35, 'AMIRGADH', 'अमिरगढ़', 'અમિરગઢ', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(36, 'BHABHAR', 'भाभर', 'ભરવાર', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(37, 'DANTA', 'दांता', 'ડાંટા', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(38, 'DANTIVADA', 'दंतिवादा', 'દાંટીવાડા', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(39, 'DEESA ', 'दीसा', 'ડીસા', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(40, 'DEODAR', 'देवदार', 'દેવદાર', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(41, 'DHANERA', 'धनेरा', 'ધનરા', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(42, 'KANKREJ', 'कांकरेज', 'કંક્રેજે', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(43, 'LAKHANI', 'लखानी', 'લોખાણી', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(44, 'PALANPUR', 'पालनपुर', 'પાલલપુર', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(45, 'SUIGAM', 'सुइगम', 'SUIGAM', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(46, 'THARAD', 'थारद', 'થારે', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(47, 'VADGAM', 'वाडगम', 'વૅડગામ', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(48, 'VAV', 'वाव', 'વાવ', '0', 5, '2018-03-31 01:06:41', NULL, NULL),
(49, 'AMOD', 'आमोद', 'આમોદ', '0', 6, '2018-03-31 03:12:14', NULL, NULL),
(50, 'ANKLESVAR', 'अन्क्लेस्वर', 'અંકલેશ્વર', '0', 6, '2018-03-31 03:12:14', NULL, NULL),
(51, 'BHARUCH', 'भारुच', 'ભરૂચ', '0', 6, '2018-03-31 03:12:14', NULL, NULL),
(52, 'HANSOT', 'हंसोत', 'હાન્સોટ', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(53, 'JAMBUSAR', 'जम्बुसार', 'જમ્બુસર', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(54, 'JHAGADIA', 'झगडिया', 'જગદિયા', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(55, 'NETRANG', 'नेतरंग', 'નેતરંગ', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(56, 'VAGRA', 'वागरा', 'વાગરા', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(57, 'VALIA', 'वलिया', 'વૅલિયા', '0', 6, '2018-03-31 03:12:15', NULL, NULL),
(58, 'BHAVNAGAR', 'भावनगर', 'ભાવનગર', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(59, 'GARIADHAR', 'गरियाधर', 'ગિરનાર', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(60, 'GHOGHA', 'घोघा', 'ઘોઘા', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(61, 'jesar', 'जेसार', 'જેસર', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(62, 'MAHUVA', 'महुवा', 'મહુવા', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(63, 'PALITANA', 'पालिताना', 'પાલિતા', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(64, 'SIHOR', 'सीहोर', 'SIHOR', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(65, 'TALAJA', 'तलाजा', 'તાલેજા', '0', 7, '2018-03-31 03:19:17', NULL, NULL),
(66, 'UMRALA', 'उम्राला', 'ઉમરાલા', '0', 7, '2018-03-31 03:19:18', NULL, NULL),
(67, 'VALLABHIPUR', 'वल्लभीपुर', 'વલ્લભપુર', '0', 7, '2018-03-31 03:19:18', NULL, NULL),
(68, 'BARVALA', 'बरवाला', 'બરવલા', '0', 8, '2018-03-31 03:24:46', NULL, NULL),
(69, 'BOTAD', 'बोटाड', 'બોટડ', '0', 8, '2018-03-31 03:24:46', NULL, NULL),
(70, 'GADHADA', 'गढ़ादा', 'ગઢડા', '0', 8, '2018-03-31 03:24:46', NULL, NULL),
(71, 'RANPUR', 'रानपुर', 'રાણપુર', '0', 8, '2018-03-31 03:24:46', NULL, NULL),
(72, 'Block Name', 'ब्लॉक नाम', 'બ્લોક નામ', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(73, 'BODELI', 'बोड़ेली', 'બોડેલી', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(74, 'CHHOTA UDEPUR', 'चोट्टा उदेपुर', 'ચૌટા ઉડેપુર', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(75, 'JETPUR PAVI', 'जेटपुर पाई', 'જેપ્પ પાવી', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(76, 'KAWANT', 'कुवंत', 'કવન્ટ', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(77, 'NASWADI', 'नसवादी', 'નાસ્વાદી', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(78, 'SANKHEDA', 'संखेडा', 'સંખેડા', '0', 9, '2018-03-31 03:32:03', NULL, NULL),
(79, 'AHWA', 'अह्वा', 'એએચડબ્લ્યુએ', '0', 10, '2018-03-31 05:43:30', NULL, NULL),
(80, 'SUBIR', 'सुबीर', 'સુબીર', '0', 10, '2018-03-31 05:43:30', NULL, NULL),
(81, 'VAGHAI', 'वाघई', 'વાઘીએ', '0', 10, '2018-03-31 05:43:30', NULL, NULL),
(82, 'BHANVAD', 'भन्वाद', 'ભાનવદ', '0', 11, '2018-03-31 05:47:32', NULL, NULL),
(83, 'KALYANPUR', 'कल्याणपुर', 'કલ્યાણપુર', '0', 11, '2018-03-31 05:47:32', NULL, NULL),
(84, 'KHAMBHALIA', 'खम्भलिया', 'ખંભાલા', '0', 11, '2018-03-31 05:47:32', NULL, NULL),
(85, 'OKHAMANDAL', 'ओखामंडल', 'ઓકેમાન્ડલ', '0', 11, '2018-03-31 05:47:32', NULL, NULL),
(90, 'BHANAVAD', 'भन्वाद!', 'ભાનવદA', '0', 12, '2018-03-31 05:58:01', NULL, NULL),
(94, 'DHARAMPUR', 'धरमपुर', 'ધરમપુર', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(95, 'KAPRADA', 'कपराडा', 'કેપ્રાડા', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(96, 'PARDI', 'पारदी', 'પારડી', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(97, 'UMBERGAON', 'उम्बेरगांव', 'ઉંબરેગૉન', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(98, 'VALSAD', 'वलसाड', 'વાલસાદ', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(99, 'VAPI', 'वापी', 'વાપી', '0', 33, '2018-03-31 06:36:12', NULL, NULL),
(100, 'DABHOI', 'दभोई', 'ડભોઇ', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(101, 'Desar', 'देसार', 'દેસર', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(102, 'KARJAN', 'कर्जन', 'કરજણ', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(103, 'PADRA', 'पादरा', 'પદ્રા', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(104, 'SAVLI', 'सावली', 'સાવલી', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(105, 'SHINOR', 'शिनोर', 'શિનર', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(106, 'VADODARA(CITY & RURAL)', 'वडोदरा (शहर और ग्रामीण)', 'વડોદરા (શહેર અને ગ્રામ)', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(107, 'WAGHODIA', 'वाघोडिया', 'વાઘોડિયા', '0', 32, '2018-03-31 06:39:45', NULL, NULL),
(108, 'NIZAR', 'निज़ार', 'નિઝાર્', '0', 31, '2018-03-31 06:43:19', NULL, NULL),
(109, 'SONGADH', 'सोनगढ़', 'સોનગઢ', '0', 31, '2018-03-31 06:43:19', NULL, NULL),
(110, 'UCHCHHAL', 'उच्छल', 'ઉચ્છલ', '0', 31, '2018-03-31 06:43:19', NULL, NULL),
(111, 'VALOD', 'वालोड', 'વલોડ', '0', 31, '2018-03-31 06:43:19', NULL, NULL),
(112, 'VYARA', 'व्यारा', 'વ્યારા', '0', 31, '2018-03-31 06:43:19', NULL, NULL),
(113, 'CHOTILA', 'चोटिला', 'ચોટીલા', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(114, 'CHUDA', 'छुड़ा', 'ચુડા', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(115, 'DASADA', 'दसदा', 'દાસડા', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(116, 'DHRANGADHRA', 'ध्रांगधरा', 'ધરંજન', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(117, 'LAKHTAR', 'लख्तर', 'લખ્ત', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(118, 'LIMBDI', 'लिम्बडी', 'લીમ્બડી', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(119, 'MULI', 'मुली', 'મુલ્ય', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(120, 'SAYLA', 'सायला', 'સાયલા', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(121, 'THANGADH', 'थानगढ़', 'થાણાગઢ', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(122, 'WADHWAN', 'वधावन', 'વાઘવન', '0', 30, '2018-03-31 06:46:47', NULL, NULL),
(123, 'BARDOLI', 'बारडोली', 'બોર્ડોલી', '0', 29, '2018-03-31 06:49:18', NULL, NULL),
(124, 'CHORASI', 'ચોરાસી', 'ચોરાસી', '0', 29, '2018-03-31 06:49:18', NULL, NULL),
(125, 'KAMREJ', 'કામરેજ', 'કેમરજે', '0', 29, '2018-03-31 06:49:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branchName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hBranchName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gBranchName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branchName`, `hBranchName`, `gBranchName`, `deleted`, `remark`) VALUES
(1, 'Head office', 'मुख्य कार्यालय', 'મુખ્ય કાર્યાલય', '0', NULL),
(2, 'Sub office', 'उप-कार्यालय', 'સબ કાર્યાલય', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hCategoryName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gCategoryName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IntUptDel` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `hCategoryName`, `gCategoryName`, `deleted`, `lastUpdate`, `requestedUser`, `remark`, `IntUptDel`) VALUES
(1, 'Education', 'शैक्षणिक सशक्तिकरण ', 'શૈક્ષણિક સશક્તિકરણ', '0', '2018-03-31 06:50:56', '0', NULL, NULL),
(2, 'Sport', 'खेल', 'રમત', '0', '2018-03-30 07:24:33', '0', NULL, NULL),
(3, 'Child ', 'बच्चा', 'બાળક', '0', '2018-03-30 13:29:17', '0', NULL, NULL),
(4, 'BPL', 'बीपीएल ', 'બીપીએલ', '0', '2018-03-30 13:30:45', '0', NULL, NULL),
(5, 'Marriage', 'शादी', 'લગ્ન', '0', '2018-03-30 13:31:42', '0', NULL, NULL),
(6, 'Welfare and safety', 'कल्याण और सुरक्षा ', 'કલ્યાણ અને સલામતી', '0', '2018-03-30 18:38:19', '0', NULL, NULL),
(7, 'Financial', 'आर्थिक सशक्तिकरण ', 'આર્થિક સશક્તિકરણ', '0', '2018-03-30 18:34:28', '0', NULL, NULL),
(8, 'Pention', 'पेंशन', 'પેન્શન', '0', '2018-03-30 13:34:37', '0', NULL, NULL),
(9, 'Hostel', 'छात्रावास', 'છાત્રાલય', '1', '2018-03-31 06:36:29', '0', NULL, NULL),
(10, 'Health and nutrition', 'आरोग्य एवं पोषण ', 'આરોગ્ય અને પોષણ', '1', '2018-03-31 06:36:11', '0', NULL, NULL),
(11, 'fhcfd', 'ज्ञ्हजलकज', 'ઇગુજકકોઝ', '1', '2018-03-31 07:34:58', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categoryTemp`
--

CREATE TABLE `categoryTemp` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hCategoryName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gCategoryName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `categoryId` int(11) DEFAULT NULL,
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `InsUptDel` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `countryName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hCountryName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `gCountryName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryName`, `hCountryName`, `gCountryName`, `deleted`, `lastUpdate`, `remark`) VALUES
(1, 'India', 'भारत', 'ભારત', '0', '2018-03-30 20:48:20', NULL),
(2, 'China', 'चीन ', 'ચીન ', '0', '2018-03-30 20:44:05', NULL),
(3, 'Australia', ' ऑस्ट्रेलिया', ' ઑસ્ટ્રેલિયા', '0', '2018-03-30 20:46:14', NULL),
(4, 'Iran', 'ईरान ', 'ઈરાન ', '1', '2018-03-31 04:13:13', NULL),
(5, 'pakist', 'पाकिस्तान ', 'પાકિસ્તાન ', '0', '2018-03-31 06:22:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countUser`
--

CREATE TABLE `countUser` (
  `id` int(11) NOT NULL,
  `schemeLike` bigint(20) DEFAULT NULL,
  `schemeDisLike` bigint(20) DEFAULT NULL,
  `schemeId` int(11) DEFAULT NULL,
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designationName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `districtName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hDistrictName` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gDistrictName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `stateId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `gLat` decimal(10,7) DEFAULT NULL,
  `gLong` decimal(10,7) DEFAULT NULL,
  `zoom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `districtName`, `hDistrictName`, `gDistrictName`, `deleted`, `stateId`, `lastUpdate`, `remark`, `orderBy`, `gLat`, `gLong`, `zoom`) VALUES
(1, 'Ahmedabad', 'अहमदाबाद', 'અમદાવાદ', '0', 1, '2018-03-30 06:59:48', NULL, 1, NULL, NULL, NULL),
(2, 'Amreli', 'अमरेली', 'અમરેલી', '0', 1, '2018-03-30 07:01:33', NULL, 9, NULL, NULL, NULL),
(3, 'Anand', 'आनंद', 'આનંદ', '0', 1, '2018-03-30 07:02:33', NULL, 14, NULL, NULL, NULL),
(4, 'Aravalli', 'अरावली', 'અરવલ્લી', '0', 1, '2018-03-30 07:02:27', NULL, 13, NULL, NULL, NULL),
(5, 'Banaskantha', 'बनासकांठा', 'બનાસકાંઠા', '0', 1, '2018-03-30 07:03:02', NULL, 17, NULL, NULL, NULL),
(6, 'Bharuch', 'भरूच', 'ભરૂચ', '0', 1, '2018-03-30 07:04:51', NULL, 25, NULL, NULL, NULL),
(7, 'Bhavnagar', 'भावनगर', 'ભાવનગર', '0', 1, '2018-03-30 07:00:34', NULL, 4, NULL, NULL, NULL),
(8, 'Botad', 'बोटाड', 'બોટાદ', '0', 1, '2018-03-30 07:00:40', NULL, 5, NULL, NULL, NULL),
(9, 'Chhota Udaipur', 'छोटा उदयपुर', 'છોટા ઉદેપુર', '0', 1, '2018-03-30 07:04:57', NULL, 26, NULL, NULL, NULL),
(10, 'Dahod', 'दाहोद', 'દાહોદ', '0', 1, '2018-03-30 07:04:12', NULL, 21, NULL, NULL, NULL),
(11, 'Dang', 'डांग', 'ડાંગ', '0', 1, '2018-03-30 07:05:33', NULL, 28, NULL, NULL, NULL),
(12, 'Devbhoomi Dwarka', 'देवभूमि द्वारका ', 'દેવભૂમિ દ્વારકા', '0', 1, '2018-03-30 07:02:10', NULL, 12, NULL, NULL, NULL),
(13, 'Gandhinagar', 'गांधीनगर', 'ગાંધીનગર', '0', 1, '2018-03-30 07:02:48', NULL, 16, NULL, NULL, NULL),
(14, 'Gir Somnath', 'गिर सोमनाथ', 'ગીર સોમનાથ', '0', 1, '2018-03-30 07:00:48', NULL, 6, NULL, NULL, NULL),
(15, 'Jamnagar', 'जामनगर', 'જામનગર', '0', 1, '2018-03-30 07:01:54', NULL, 11, NULL, NULL, NULL),
(16, 'Junagadh', 'जूनागढ़', 'જુનાગઢ', '0', 1, '2018-03-30 07:01:25', NULL, 8, NULL, NULL, NULL),
(17, 'Kutch', 'कच्छ', 'કચ્છ', '0', 1, '2018-03-30 07:04:03', NULL, 20, NULL, NULL, NULL),
(18, 'Kheda', 'खेड़ा', 'ખેડા', '0', 1, '2018-03-30 07:02:40', NULL, 15, NULL, NULL, NULL),
(19, 'Mahisagar', 'महीसागर', 'મહેસાગર', '0', 1, '2018-03-30 07:03:12', NULL, 18, NULL, NULL, NULL),
(20, 'Mehsana', 'मेहसाणा', 'મહેસાણા', '0', 1, '2018-03-30 07:06:11', NULL, 32, NULL, NULL, NULL),
(21, 'Morbi', 'मोरबी', 'મોરબી', '0', 1, '2018-03-30 06:59:56', NULL, 2, NULL, NULL, NULL),
(22, 'Narmada', 'नर्मदा', 'નર્મદા', '0', 1, '2018-03-30 07:04:24', NULL, 23, NULL, NULL, NULL),
(23, 'Navsari', 'नवसारी', 'નવસારી', '0', 1, '2018-03-30 07:05:05', NULL, 27, NULL, NULL, NULL),
(24, 'Panchmahal', 'पंचमहल', 'પંચમહાલ', '0', 1, '2018-03-30 07:04:17', NULL, 22, NULL, NULL, NULL),
(25, 'Patan', 'पाटन', 'પાટણ', '0', 1, '2018-03-30 07:03:26', NULL, 19, NULL, NULL, NULL),
(26, 'Porbandar', 'पोरबंदर', 'પોરબંદર', '0', 1, '2018-03-30 07:00:58', NULL, 7, NULL, NULL, NULL),
(27, 'Rajkot', 'राजकोट', 'રાજકોટ', '0', 1, '2018-03-30 07:01:44', NULL, 10, NULL, NULL, NULL),
(28, 'Sabarkantha', 'साबरकांठा', 'સાબરકાંઠા', '0', 1, '2018-03-30 07:06:17', NULL, 33, NULL, NULL, NULL),
(29, 'Surat', 'सूरत', 'સુરત', '0', 1, '2018-03-30 07:00:24', NULL, 3, NULL, NULL, NULL),
(30, 'Surendranagar', 'सुरेंद्रनगर', 'સુરેન્દ્રનગર', '0', 1, '2018-03-30 07:06:00', NULL, 31, NULL, NULL, NULL),
(31, 'Tapi', 'तापी', 'તાપી', '0', 1, '2018-03-30 07:05:43', NULL, 29, NULL, NULL, NULL),
(32, 'Vadodara', 'वडोदरा', 'વડોદરા', '0', 1, '2018-03-30 07:04:41', NULL, 24, NULL, NULL, NULL),
(33, 'Valsad', 'वलसाड', 'વલસાડ', '0', 1, '2018-03-30 07:05:52', NULL, 30, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `fileName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hFileName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `gFileName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `fileLocation` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schemeId` int(11) NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `fileName`, `hFileName`, `gFileName`, `fileLocation`, `schemeId`, `deleted`, `requestedUser`, `remark`) VALUES
(1, 'a', 'स ', 'અ ', 'first.pdf', 2, '0', '0', NULL),
(2, 'B', 'बी', 'બી ', 'first.php', 3, '0', '0', NULL),
(5, 'c', 'सी ', 'સી ', 'first.php', 4, '0', '0', NULL),
(6, 'D', 'डी ', 'ડી ', ' first.php', 13, '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `imageName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hImageName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `gImageName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `imageLocation` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schemeId` int(11) NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loginMaster`
--

CREATE TABLE `loginMaster` (
  `id` int(11) NOT NULL,
  `logName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `lastPasswordUpdate` datetime DEFAULT NULL,
  `adminReset` datetime DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loginValidUpto` datetime DEFAULT NULL,
  `loginFailsCount` int(11) DEFAULT NULL,
  `loginSuspendUpto` datetime DEFAULT NULL,
  `activationLink` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approvedDate` datetime DEFAULT NULL,
  `approvedById` int(11) DEFAULT NULL,
  `userTypeId` int(11) NOT NULL,
  `activationLinkValidUpto` datetime DEFAULT NULL,
  `emailVerified` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileVerified` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officeName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OfficeAddress` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeLevelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loginMaster`
--

INSERT INTO `loginMaster` (`id`, `logName`, `mobile`, `address`, `email`, `password`, `lastPasswordUpdate`, `adminReset`, `lastUpdate`, `loginValidUpto`, `loginFailsCount`, `loginSuspendUpto`, `activationLink`, `approvedDate`, `approvedById`, `userTypeId`, `activationLinkValidUpto`, `emailVerified`, `mobileVerified`, `deleted`, `status`, `remark`, `officeName`, `OfficeAddress`, `designation`, `active`, `typeLevelId`) VALUES
(3, 'manoj', '789', 'asdf', 'asfd', 'asdfs', NULL, NULL, '2018-03-31 02:48:40', NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, ':a1', ':a2', ':a3', ':a4', ':a5', NULL, NULL, '2018-03-31 05:50:50', NULL, NULL, NULL, ':a8', NULL, NULL, 1, '2018-03-31 05:50:50', NULL, NULL, '0', NULL, NULL, ':a9', ':a10', ':a7', NULL, 2),
(9, 'supriya', 'dfjnv', 'dfgjvnf', 'rishirverma512@gmail.com', 'dfj', NULL, NULL, '2018-03-31 09:38:55', NULL, 1, NULL, 'de13b63fa87ab500b3fbd92c6cfdd5b9', NULL, NULL, 1, '2018-03-31 06:09:39', NULL, NULL, '0', NULL, NULL, 'fn', 'dfn', 'djf', NULL, 3),
(10, 'dshc', 'xxcx', 'xcjds', 'hemashree26698@gmail.comjhjk', 'xjxbc', NULL, NULL, '2018-03-31 06:31:51', NULL, NULL, NULL, '8d96bf3302406dc59c841fb323602c4e', NULL, NULL, 1, '2018-03-31 06:30:21', NULL, NULL, '0', NULL, NULL, 'sdhui', 'zxhb', 'dsjchb', NULL, 4),
(11, 'qwwee', 'dfdsf', 'dsfnc', 'hemashree26698@gmail.comkdfg', 'dsj', NULL, NULL, '2018-03-31 06:56:02', NULL, NULL, NULL, '4af6dc457d183e99f522455de0835f3f', NULL, NULL, 2, '2018-03-31 06:32:40', NULL, NULL, '0', NULL, NULL, 'weir', 'dsf', 'dsjchb', NULL, 2),
(13, 'fdjdfv', 'dsf', 'cx', 'hemashree26698@gmail.comf', 'dfchd', NULL, NULL, '2018-03-31 06:56:25', NULL, NULL, NULL, 'f85c5862f27dabe83297e2bbff64a57b', NULL, NULL, 1, '2018-03-31 06:36:43', NULL, NULL, '0', NULL, NULL, 'dfd', 'dsf', 'fdgvd', NULL, 3),
(14, 'dgij', 'efr', 'fgnb', 'dd', 'fgtnjr', NULL, NULL, '2018-03-31 07:07:15', NULL, NULL, NULL, 'f2852f1073e10606df7eae90cd0fafda', NULL, NULL, 1, '2018-03-31 06:56:31', NULL, NULL, '0', NULL, NULL, 'rjgn', 'rgtrh', 'fgfh', NULL, 3),
(15, 'asdadsa', '9999', '999', 'hemashree26698@gmail.com35435', 'sssss', NULL, NULL, '2018-03-31 07:18:37', NULL, NULL, NULL, '72352b0bb61fd2b3028443fa685351a0', NULL, NULL, 1, '2018-03-31 07:07:46', NULL, NULL, '0', NULL, NULL, '99', 'fgA', 'ss', NULL, 1),
(16, 'qere', 'sdf', 'dfdg', 'hemashree26698@gmail.comlk', 'asd', NULL, NULL, '2018-03-31 07:39:16', NULL, NULL, NULL, 'e09c23c0cbeb36a6e76349d9cc7caf71', NULL, NULL, 1, '2018-03-31 07:20:07', NULL, NULL, '0', NULL, NULL, 'sdf', 'dsf', 'sdhf', NULL, 4),
(17, 'hef', 'fdvhb', 'ggfb', 'hemashree26698@gmail.comm', 'dfgvhb', NULL, NULL, '2018-03-31 07:54:27', NULL, NULL, NULL, '54bc4fffdb3439e8be59864b7dae7dc7', NULL, NULL, 1, '2018-03-31 07:39:59', NULL, NULL, '0', NULL, NULL, 'gfbf', 'fbggf', 'fdgvd', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `noOfBeneficiaries`
--

CREATE TABLE `noOfBeneficiaries` (
  `id` int(11) NOT NULL,
  `schemeId` int(11) DEFAULT NULL,
  `blockId` int(11) DEFAULT NULL,
  `levelType` int(11) DEFAULT NULL,
  `applicationFilled` int(11) DEFAULT NULL,
  `applicationUnderProcess` int(11) DEFAULT NULL,
  `givenBenifit` int(11) DEFAULT NULL,
  `loginId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noOfBeneficiaries`
--

INSERT INTO `noOfBeneficiaries` (`id`, `schemeId`, `blockId`, `levelType`, `applicationFilled`, `applicationUnderProcess`, `givenBenifit`, `loginId`) VALUES
(1, 2, 1, 2, 50, 15, 20, 3),
(2, 16, 2, 2, 12, 333, 52, 9);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `officeName` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hOfficeName` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gOfficeName` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `officeAddress` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hOfficeAddress` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `gOfficeAddress` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `phoneNo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gpsLat` decimal(10,7) DEFAULT NULL,
  `gpsLong` decimal(10,7) DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdateId` int(11) DEFAULT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `branchId` int(11) NOT NULL,
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `typeLevelId` int(11) NOT NULL,
  `addressId` int(11) DEFAULT NULL,
  `dId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `officeName`, `hOfficeName`, `gOfficeName`, `officeAddress`, `hOfficeAddress`, `gOfficeAddress`, `phoneNo`, `gpsLat`, `gpsLong`, `lastUpdate`, `lastUpdateId`, `deleted`, `branchId`, `remark`, `requestedUser`, `typeLevelId`, `addressId`, `dId`) VALUES
(1, 'office of collector , Gandhinagar', 'महिला एवं बाल विकास विभाग', 'મહિલા અને બાળ વિકાસ વિભાગ', 'Block No. 9, 6th Floor,\r\nNew Sachivalaya, Gandhinagar.\r\nphone no-', 'ब्लॉक नंबर 9, 6 वीं मंजिल,\r\nनया सचिवालय, गांधीनगर', 'બ્લોક નં .9, 6 મા માળે,\r\nન્યૂ સચિવાલય, ગાંધીનગર\r\n', NULL, '23.2202880', '72.6584160', '2018-03-31 01:53:35', NULL, '0', 1, NULL, '0', 2, 1, 1),
(2, 'Office of the WCDD,Gandhinagar', 'महिला एवं बाल विकास विभाग', 'મહિલા અને બાળ વિકાસ વિભાગ', 'Block No. 9, 6th Floor,New Sachivalaya, Surat', 'ब्लॉक नंबर 9, 6 वीं मंजिल,नया सचिवालय, गांधीनगर सूरत', 'બ્લોક નં .9, 6 મા માળે,ન્યૂ સચિવાલય, સુરત', NULL, '21.1654354', '72.8360408', '2018-03-31 01:53:42', NULL, '0', 1, NULL, '0', 3, 13, 13),
(3, 'Women & Child Development Department', 'महिला एवं बाल विकास विभाग', 'મહિલા અને બાળ વિકાસ વિભાગ\'', 'Block No. 9, 6th Floor,\\r\\nNew Sachivalaya ', '\'ब्लॉक नंबर 9, 6 वीं मंजिल,\\r\\nनया सचिवालय, गांधीनगर', '્લોક નં .9, 6 મા માળે,\\r\\nન્યૂ સચિવાલય, ગાંધીનગર', NULL, '24.0717838', '71.4932061', '2018-03-31 02:25:56', NULL, '0', 1, NULL, '0', 5, NULL, 5),
(4, 'Women Welfare Society', 'महिला कल्याण समिति', 'મહિલા કલ્યાણ સમિતિ', '213-J-Type, Sector-13, Opposite-Govt School Sector-13, Sector-13, Gandhinagar, Gujarat 382016', '213-जे-प्रकार, सेक्टर -13, विपरीत-सरकारी स्कूल सेक्टर -13, सेक्टर -13, गांधीनगर, गुजरात 382016', '213-જે-પ્રકાર, સેક્ટર -13, વિરુધ્ધ સરકારી શાળા સેકટર -13, સેક્ટર -13, ગાંધીનગર, ગુજરાત 382016', '7923244910', '23.2265567', '72.5642948', '2018-03-31 02:36:59', NULL, '0', 1, NULL, '0', 2, NULL, 13),
(5, 'Gujarat Women Economic Development Corporation Ltd', 'गुजरात महिला आर्थिक विकास निगम लिमिटेड', 'ગુજરાત મહિલા આર્થિક વિકાસ નિગમ લી', 'Block 8 9th Floor, Udyog Bhavan, Sector 11, Gandhinagar, Gujarat 382017', '9 8 वीं मंजिल ब्लॉक, उद्योग भवन, सेक्टर 11, गांधीनगर, गुजरात 382017', 'બ્લોક 8 9 માળ, ઉદ્યોગ ભવન, સેક્ટર 11, ગાંધીનગર, ગુજરાત 382017', '7923230713', '23.2192565', '72.5761207', '2018-03-31 02:45:30', NULL, '0', 2, NULL, '0', 3, NULL, 13),
(6, 'Self Employed Women\'s Association ', 'स्व नियोजित महिला एसोसिएशन', 'સ્વ રોજગારી મહિલા એસોસિયેશન', 'Opp. Victoria Garden, Bhadra, Ahmedabad, Gujarat 380001', 'ऑप। विक्टोरिया गार्डन, भद्र, अहमदाबाद, गुजरात 380001', 'સામે વિક્ટોરિયા ગાર્ડન, ભદ્ર, અમદાવાદ, ગુજરાત 380001', '7925506444', '23.0226803', '72.5772526', '2018-03-31 03:01:55', NULL, '0', 2, NULL, '0', 6, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `officeReference`
--

CREATE TABLE `officeReference` (
  `id` int(11) NOT NULL,
  `schemeId` int(11) DEFAULT NULL,
  `officeId` int(11) DEFAULT NULL,
  `contactPerson` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hContactPerson` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `gContactPerson` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `contactNo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `officeReference`
--

INSERT INTO `officeReference` (`id`, `schemeId`, `officeId`, `contactPerson`, `hContactPerson`, `gContactPerson`, `contactNo`, `deleted`, `remark`) VALUES
(1, 4, 1, 'Mahesh', 'महेश ', 'મહેશ ', '8956232314', '0', NULL),
(2, 2, 1, 'Ajay', 'अजय ', 'અજય ', '9827898973', '0', NULL),
(3, 14, 1, 'Mohan', 'मोहन', 'મોહન ', '7000509090', '0', NULL),
(4, 15, 2, 'Ritesh', 'रितेश ', 'રીતેશ ', '9300754343', '0', NULL),
(5, 3, 6, 'Sagar', 'सागर ', 'સાગર ', '9898877373', '0', NULL),
(6, 16, 3, 'Jigar', 'जिगर', 'જીગર ', '9898766543', '0', NULL),
(7, 4, 4, 'Diksha', 'दीक्षा ', 'દીક્ષા ', '8989898943', '0', NULL),
(8, 17, 2, 'Rakesh', 'राकेश ', 'રાકેશ ', '9087654321', '0', NULL),
(9, 18, 4, 'Diplav', 'दिप्लाव ', 'દીપ્લાવ ', '9998765433', '0', NULL),
(10, 19, 3, 'Dikesh', 'दिक्ष ', 'દીકેશ ', '9998766543', '0', NULL),
(11, 5, 4, 'Rahul', 'राहुल ', 'રાહુલ ', '9876789876', '0', NULL),
(12, 6, 1, 'Gajendra', 'गजेन्द्र ', 'ગજેન્દ્ર ', '9898989876', '0', NULL),
(13, 8, 2, 'Vipin', 'विपिन ', 'વિપિન ', '9876786543', '0', NULL),
(14, 7, 6, 'Tikesh', 'टिकेश ', 'તીકેશ ', '9770876543', '0', NULL),
(15, 11, 3, 'Manish', 'मनीष ', 'मनीश ', '8985008787', '0', NULL),
(16, 12, 5, 'Deepak', 'दीपक ', 'દિપક ', '9900884562', '0', NULL),
(17, 13, 6, 'kunal', 'कुनाल ', 'કુણાલ ', '9770987765', '0', NULL),
(18, 4, 3, 'Richa', 'ऋचा ', 'રિચા ', '8976543212', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `schemeName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hSchemeName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `gSchemeName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `schemeDescription` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hSchemeDescription` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `gSchemeDescription` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `lastUpdateBy` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loginId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `schemeTypeId` int(11) NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `validUpto` date DEFAULT NULL,
  `IntUptDel` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapDistrict` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestedUser` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `schemeName`, `hSchemeName`, `gSchemeName`, `schemeDescription`, `hSchemeDescription`, `gSchemeDescription`, `lastUpdateBy`, `status`, `lastUpdate`, `loginId`, `categoryId`, `schemeTypeId`, `deleted`, `remark`, `validUpto`, `IntUptDel`, `mapDistrict`, `requestedUser`) VALUES
(2, 'Beti Bachao Beti Padhao', '\'बेटी बचाओ बेटी पढाओ', 'બેટી બચાવો', 'Gujarat is suffering from one of the worst outcomes of gender-based discrimination, To maintain male-female sex ratio. The state average of child sex ratio (0-6 years) declined dramatically. To address this issue various efforts are being made, one of the major being the ‘Beti Bachao Campaign’ that was launched by Women and Child Development Department, Gujarat. Gender Resource centre, an autonomous body, was an active partner in the campaign who was involved in documentation and publications with a realization that it could play a vital role in changing the perception of the society in general on such important issue.', 'गुजरात लिंग आधारित भेदभाव के सबसे खराब परिणामों में से एक है, पुरुष-महिला लिंग अनुपात बनाए रखने के लिए। बाल यौन अनुपात (0-6 साल) की राज्य औसत नाटकीय रूप से गिरावट आई है। इस मुद्दे को संबोधित करने के लिए विभिन्न प्रयास किए जा रहे हैं, एक प्रमुख \\\'बेटी बचाओ अभियान\\\', जिसे महिला एवं बाल विकास विभाग, गुजरात द्वारा शुरू किया गया था, में से एक है। लिंग संसाधन केंद्र, एक स्वायत्त निकाय, अभियान में एक सक्रिय भागीदार था जो दस्तावेज़ीकरण और प्रकाशनों में शामिल था, जो कि इस तथ्य के साथ सामान्य रूप से समाज की धारणा को बदलने में महत्वपूर्ण भूमिका निभा सकता है।', '\'ગુજરાત લિંગ આધારિત ભેદભાવના સૌથી ખરાબ પરિણામ પૈકી એક છે, પુરુષ-સ્ત્રી જાતિ ગુણોત્તર જાળવવા માટે. બાળ જાતીય ગુણોત્તર (0-6 વર્ષ) ની રાજ્ય સરેરાશ નાટ્યાત્મક ઘટાડો થયો આ મુદ્દાને સંબોધવા માટે વિવિધ પ્રયત્નો કરવામાં આવી રહ્યા છે, જે મુખ્ય છે \\\'બેટી બચાવો અભિયાન\\\' કે જે મહિલા અને બાળ વિકાસ વિભાગ, ગુજરાત દ્વારા શરૂ કરવામાં આવી હતી. જેન્ડર રિસોર્સ સેન્ટર, સ્વાયત્ત સંસ્થા, ઝુંબેશમાં એક સક્રિય ભાગીદાર હતી જે દસ્તાવેજીકરણ અને પ્રકાશનમાં સામેલ હતા અને તે અનુભૂતિ સાથે સંકળાયેલી હતી કે તે આવા મહત્વના મુદ્દા પર સામાન્ય રીતે સમાજના દ્રષ્ટિકોણને બદલવામાં મહત્વપૂર્ણ ભૂમિકા ભજવી શકે છે.\'', NULL, NULL, '2018-03-31 06:19:26', 3, 1, 5, '0', NULL, NULL, NULL, NULL, NULL),
(3, 'Fish Entrepreneur Yojana for SC/ST women', 'एससी / एसटी महिलाओं के लिए मछली उद्यमी योजना', 'એસસી / એસટી મહિલાઓ માટે માછલી એન્ટ્રપ્રિન્યર યોજના', 'Under this scheme, It encourages to scheduled caste/tribe women to sell fishes to be self-reliant. For the purpose, required instruments and facility is provided to buy a weighing machine, Insulated box, etc. On average Rs.10,000/- Unit cost, 50% assistance is given to women belonging to scheduled caste/tribe. Training is given to Women for the growth of ‘Zingo’ fishes under a ten-day course of Rs.100/- scholarship.', 'इस योजना के अंतर्गत, यह अनुसूचित जाति / जनजाति महिलाओं को मछुआरों को आत्मनिर्भर रहने के लिए प्रोत्साहित करता है। उद्देश्य के लिए आवश्यक उपकरण और सुविधा वजनी मशीन, अछूता हुआ बॉक्स, आदि खरीदने के लिए उपलब्ध करायी जाती है। औसतन 10000 / - यूनिट लागत, अनुसूचित जाति / जनजाति से संबंधित महिलाओं को 50% सहायता दी जाती है। \\\'ज़िंगो\\\' मछलियों के विकास के लिए महिला को प्रशिक्षण दिया गया है, जो छात्रवृत्ति 100 रुपये के दस दिवसीय पाठ्यक्रम के अंतर्गत है।', 'આ યોજના અંતર્ગત, તે અનુસૂચિત જાતિ / આદિજાતિ સ્ત્રીઓને સ્વ-નિર્ભર રહેવા માટે માછલીઓ વેચવા પ્રોત્સાહિત કરે છે. ઉદ્દેશ્ય માટે, જરૂરી સાધનો અને સુવિધા વજનના મશીન, અવાહક બોક્સ, વગેરે ખરીદવા માટે આપવામાં આવે છે. સરેરાશ રૂ. 10,000 / - એકમ ખર્ચ, 50% સહાય અનુસૂચિત જાતિ / આદિજાતિની મહિલાઓને આપવામાં આવે છે. 100 / - શિષ્યવૃત્તિના દસ દિવસના અભ્યાસ હેઠળ \\\'ઝિંગો\\\' માછલીઓના વિકાસ માટે મહિલાને તાલીમ આપવામાં આવે છે.', NULL, 'Active', '2018-03-30 12:43:41', 3, 7, 6, '0', NULL, NULL, NULL, NULL, NULL),
(4, 'Ghardivda Bankable Finance Scheme for BPL women financial assistance, Loan', 'बीपीएल महिला वित्तीय सहायता के लिए घर्डिवडा बैंक योग्य वित्त योजना, ऋण', 'બીપીએલ મહિલા નાણાકીય સહાય માટે ઘારડીવા બેંકેબલ ફાયનાન્સ સ્કીમ, લોન', 'This scheme aims for economic upliftment of women living below the poverty line(BPL). The scheme is being implemented from the year 1996. Women whose annual income is Rs. 36,000/- are considered eligible under the scheme. Qualified women are provided loan amount up to Rs. 50,000/- through Nationalized Banks.', 'इस योजना का लक्ष्य गरीबी रेखा (बीपीएल) के नीचे रहने वाले महिलाओं के आर्थिक उत्थान के लिए है। यह योजना 1 99 6 से कार्यान्वित की जा रही है। महिलाएं जिनकी वार्षिक आय रुपए है 36,000 / - को योजना के तहत पात्र माना जाता है। योग्य महिलाएं लोन की रकम रु। 50,000 / - राष्ट्रीयकृत बैंकों के माध्यम से', 'આ યોજનાનો હેતુ ગરીબી રેખા (બીપીએલ) નીચે જીવતા મહિલાઓના આર્થિક ઉત્કર્ષ માટે છે. આ યોજના વર્ષ 1996 થી અમલમાં આવી રહી છે. જેની વાર્ષિક આવક રૂ. 36,000 / - ની યોજનાને આ યોજના હેઠળ પાત્ર ગણવામાં આવે છે. લાયકાત ધરાવતી સ્ત્રીઓને રૂ. 50,000 / - રાષ્ટ્રીયકૃત બૅન્કો દ્વારા.', NULL, 'Active', '2018-03-30 12:46:23', 3, 4, 6, '0', NULL, NULL, NULL, NULL, NULL),
(5, 'Mahila Vrudh Ashram, Gujarat', '\'महिला वृद्धा आश्रम, गुजरात', '\'મહિલા વૃધ્ધ આશ્રમ, ગુજરાત', 'This is for the women who are abandoned by their children. Old Parents are day by day being neglected by the Youth. In order to solve this social issue, State Government of Gujarat has made arrangements for uncared women and foster their needs. State Government has set up Old Age Homes for such destitute. Exclusive Women Old Age homes are structured with an exclusive existing Home at Jamnagar.', 'यह उन महिलाओं के लिए है जो अपने बच्चों द्वारा छोड़े गए हैं पुराने माता-पिता को दिन-प्रतिदिन युवाओं द्वारा उपेक्षित किया जा रहा है इस सामाजिक मुद्दे को हल करने के लिए, गुजरात सरकार ने अपरिचित महिलाओं के लिए व्यवस्था की है और उनकी जरूरतों को बढ़ावा दिया है। राज्य सरकार ने ऐसे निराशों के लिए ओल्ड आयु होम्स की स्थापना की है। विशेष महिला ओल्ड एज घरों जामनगर में एक विशेष मौजूदा घर के साथ संरचित हैं।', 'આ તે સ્ત્રીઓ માટે છે જે તેમના બાળકો દ્વારા છોડી દેવામાં આવે છે. જૂના માતાપિતા દિવસના રોજ યુવા દ્વારા અવગણવામાં આવે છે. આ સામાજિક મુદ્દાને હલ કરવા માટે, ગુજરાત રાજ્ય સરકારે નકામા સ્ત્રીઓ માટે વ્યવસ્થા કરી છે અને તેમની જરૂરિયાતોને પ્રોત્સાહન આપી છે. રાજ્ય સરકારે આવી નિરાધાર માટે ઓલ્ડ એજ હોમ્સની સ્થાપના કરી છે. વિશિષ્ટ મહિલા ઓલ્ડ એજ હોમ્સ જામનગર ખાતે એક વિશિષ્ટ હાલની હોમથી રચાયેલ છે', NULL, 'Active', '2018-03-30 12:48:21', 3, 2, 5, '0', NULL, NULL, NULL, NULL, NULL),
(6, 'Mata Yashoda Gaurav Nidhi for Anganwadi workers and Helpers', 'आंगनवाड़ी कार्यकर्ताओं और हेल्पर्स के लिए माता यशोदा गौरव निधि\'', 'આંગણવાડી કાર્યકરો અને હેલ્પરો માટે માતા યશોડા ગૌરવ નિધિ', 'Gujarat is the first state of India providing an insurance coverage for Anganwadi Workers (AWW) and Anganwadi Helpers (AWH). After the maturation period of the insurance, Rs.50,000 is given to the nominee in case of death of the insured and the interest of the money being deposited.\\r\\nUnder this scheme, during the working years of the Anganwadi Workers (AWW) and AWHs, Rs. 100 per month is paid out of which Rs. 50 is paid by Gujarat Government and Rs. 50 is paid by Anganwadi Workers (AWW) and Anganwadi Helpers (AWH). On maturity of the insurance that is after the death of the AWW /AWH, the nominee of the insured receives an amount of Rs.50,000 along with 8% interest in case of death of the insured.\\r\\n\'', 'गुजरात भारत का पहला राज्य है जो आंगनवाड़ी श्रमिकों (एडब्ल्यूडब्ल्यू) और आंगनवाड़ी सहायक (एडब्ल्यूएच) के लिए एक बीमा कवरेज प्रदान करता है। बीमा की परिपक्वता अवधि के बाद, बीमाधारक की मृत्यु के मामले में नामांकित व्यक्ति को 50,000 रुपये और जमा किए जाने वाले धन के हित में दिया जाता है।\\r\\nइस योजना के तहत आंगनवाड़ी कार्यकर्ता (एडब्ल्यूडब्ल्यू) और ए.डब्ल्यूएच। के कार्यरत वर्षों के दौरान, रु। 100 प्रति माह का भुगतान किया जाता है जिसमें से रु। 50 गुजरात सरकार और रुपये का भुगतान किया जाता है। 50 आँगनवाड़ी श्रमिकों (एडब्ल्यूडब्ल्यू) और आंगनवाड़ी सहायक (एडब्ल्यूएच) द्वारा भुगतान किया जाता है। बीमा की परिपक्वता पर जो कि एडब्ल्यूडब्ल्यूडब्ल्यू / एडब्ल्यूएच की मृत्यु के बाद है, बीमाधारक की मृत्यु के मामले में बीमाधारक के नामांकित व्यक्ति को 50,000 रुपये की राशि और 8% ब्याज प्राप्त होती है।\'', '\'ગુજરાત એગંગવાડી વર્કર્સ (એડબલ્યુડબલ્યુ) અને આંગણવાડી હેલ્પર્સ (એડબલ્યુએચ) માટે વીમા કવરેજ પૂરું પાડવાના ભારતનો પ્રથમ રાજ્ય છે. વીમાની પરિપક્વતા અવધિ પછી, વીમાધારકની મૃત્યુના કિસ્સામાં નોમિનીને રૂ. 50,000 અને જમા કરવામાં આવેલા નાણાંના હિતને રૂ. 50,000 આપવામાં આવે છે.\\r\\nઆ યોજના હેઠળ, આંગણવાડી કામદારો (એડબલ્યુડબલ્યુ) અને એ.ડબ્લ્યુ.એચ.ના કામકાજના વર્ષોમાં રૂ. 100 દર મહિને ચૂકવવામાં આવે છે જેમાંથી રૂ. 50 ગુજરાત સરકાર દ્વારા ચૂકવવામાં આવે છે અને રૂ. 50 એ આંગણવાડી કામદારો (એડબલ્યુડબલ્યુ) અને આંગણવાડી હેલ્પર્સ (એડબલ્યુએચ) દ્વારા ચૂકવવામાં આવે છે. AWW / AWH ના મૃત્યુ પછી વીમાની પાકતી મુદત પર, વીમાધારકના મૃત્યુના કિસ્સામાં વીમાધારકના નોમિની રૂ .50,000 ની રકમ અને 8% વ્યાજ મેળવે છે.\'', NULL, 'Active', '2018-03-30 12:50:24', 3, 6, 5, '0', NULL, NULL, NULL, NULL, NULL),
(7, 'Saat Phera Samuh Yojna for SC Women financial assistance', 'एससी महिला वित्तीय सहायता के लिए सात फीड़ा सामूहिक योजना', 'એસ.સી. મહિલા નાણાકીય સહાય માટે સાત ફીરા સમહ યોજના', 'Women & Child Development Department, Gujarat has initiated this scheme of Joint marriages.For SC families having an annual income of 11,000, and for minimum five couple, this scheme is initiated. The couple gets 5000 in the form of Narmada Shreeneedhi certificate along with merit certificate. For organizing the marriage, a sum of 10,000 is given.', 'महिला एवं बाल विकास विभाग, गुजरात ने संयुक्त विवाह की इस योजना की शुरुआत की है। 11,000 की वार्षिक आय वाले अनुसूचित जातियों के परिवारों के लिए, और न्यूनतम पांच दंपतियों के लिए, यह योजना शुरू की जाती है। इस युगल को नर्मदा श्रीइनदेही प्रमाणपत्र के रूप में 5000 रुपए मिले हैं। शादी के आयोजन के लिए, 10,000 की राशि दी गई है।\'', 'મહિલા અને બાળ વિકાસ વિભાગ, ગુજરાતે સંયુક્ત લગ્નની આ યોજના શરૂ કરી છે. 11,000 ની વાર્ષિક આવક ધરાવતા એસસી કુટુંબો અને ઓછામાં ઓછા પાંચ દંપતિ માટે આ યોજના શરૂ કરવામાં આવી છે. આ દંપતિને નર્મદા શ્રિનીદેહના પ્રમાણપત્રમાં મેરિર્ટ સર્ટિફિકેટ સાથે 5000 રૂપિયાની રકમ મળે છે. લગ્નના આયોજન માટે, 10,000 ની રકમ આપવામાં આવે છે.', NULL, 'Active', '2018-03-30 12:52:21', 3, 5, 6, '0', NULL, NULL, NULL, NULL, NULL),
(8, 'Sakhi Mandal Yojna for women who are poor financial services', 'गरीब वित्तीय सेवाओं वाले महिलाओं के लिए सखी मंडल योजना\'', 'ગરીબ નાણાકીય સેવાઓ ધરાવતી સ્ત્રીઓ માટે સખી મંડળ યોજન', 'This scheme is to enable the poor women, particularly in rural areas of Gujarat. This scheme aims to improve their access to resources and consequently strengthen livelihoods and quality of life. Sakhi Mandals are a formation of women self-help groups based on thrift and credit principles. It provides financial services to increase the process of economic development and ensure the welfare of women. They are encouraged to foster decision skills and develop a framework of a wider range of participation in microfinance development', 'यह योजना गरीब महिलाओं विशेषकर गुजरात के ग्रामीण क्षेत्रों में सक्षम है। इस योजना का उद्देश्य संसाधनों तक पहुंच में सुधार करना और फलस्वरूप जीवन की गुणवत्ता और जीवन की गुणवत्ता को मजबूत करना है। सखी मंडल बचत और क्रेडिट सिद्धांतों के आधार पर महिलाओं के स्व-सहायता समूह का गठन कर रहे हैं। यह आर्थिक विकास की प्रक्रिया को बढ़ाने और महिलाओं के कल्याण को सुनिश्चित करने के लिए वित्तीय सेवाएं प्रदान करता है। उन्हें निर्णय कौशल को बढ़ावा देने और सूक्ष्म वित्त विकास के क्षेत्र में व्यापक भागीदारी के एक रूपरेखा को विकसित करने के लिए प्रोत्साहित किया जाता है।\'', 'આ યોજના ગરીબ મહિલાઓને, ખાસ કરીને ગુજરાતનાં ગ્રામ્ય વિસ્તારોમાં સક્રિય કરવા છે. આ યોજનાનો હેતુ સંસાધનોની તેમની પહોંચને સુધારવા માટે અને પરિણામે જીવનધોરણ અને જીવનની ગુણવત્તાને મજબૂત કરે છે. સખી મંડળો ત્રેવડ અને ક્રેડિટના સિદ્ધાંતો પર આધારિત મહિલા સ્વ-સહાય સમૂહોનું નિર્માણ છે. તે આર્થિક વિકાસની પ્રક્રિયાને વધારવા અને સ્ત્રીઓના કલ્યાણને નિશ્ચિત કરવા નાણાકીય સેવાઓ પૂરી પાડે છે. તેમને નિર્ણય કુશળતાને પ્રોત્સાહન આપવા માટે પ્રોત્સાહિત કરવામાં આવે છે અને માઇક્રોફાઇનાન્સ વિકાસમાં ભાગીદારીની વિશાળ શ્રેણીના માળખાને વિકસાવવામાં આવે છે', NULL, 'Active', '2018-03-30 12:54:15', 3, 7, 5, '0', NULL, NULL, NULL, NULL, NULL),
(11, 'SWADHAR home scheme for women to provide shelter', 'महिलाओं को शरण देने के लिए सुधा गृह योजना', 'મહિલાઓને આશ્રય પૂરો પાડવા માટે સ્વામી હોમ સ્કીમ', 'The scheme is being implemented jointly by State (25 % share) and Central Government to provide shelter to women in need. Apart from shelter, this homes would also provide other necessary items to women during their stay.', '\'यह योजना राज्य द्वारा संयुक्त रूप से कार्यान्वित की जा रही है (25% हिस्सा) और केंद्र सरकार को जरूरत के मुताबिक महिलाओं को आश्रय प्रदान किया जा रहा है। आश्रय के अलावा, यह घर अपने प्रवास के दौरान महिलाओं को अन्य आवश्यक वस्तुओं को भी प्रदान करेगा।', 'આ સ્કીમ રાજ્ય દ્વારા (25% શેર) સંયુક્તપણે અમલમાં મુકવામાં આવી છે અને કેન્દ્ર સરકારે મહિલાઓને જરૂર પડવા માટે આશ્રય પૂરો પાડવો. આશ્રય ઉપરાંત, આ ઘરો મહિલાઓ તેમના રોકાણ દરમિયાન અન્ય જરૂરી વસ્તુઓ પણ પૂરી પાડશે.\'', NULL, 'Active', '2018-03-30 12:57:11', 3, 8, 5, '0', NULL, NULL, NULL, NULL, NULL),
(12, 'Swayamsidh Yojna-Self Reliance and empowerment of women', 'स्वयंमसिद्ध योजना- स्वयं रिलायंस और महिलाओं के सशक्तिकरण', 'સ્વયંસિંહ યોજના- સ્વયં રિલાયન્સ અને મહિલાઓની સશક્તિકરણ', 'This scheme is an integrated project for development and empowerment of women, an overall development of women – social, economic and cultural is initiated by providing them with the resources through a sustained the process of mobilization and amalgamation of all current projects, with its focus on community, oriented innovations, group formation, building knowledge and mobilization of activities.\\r\\nThis scheme aims to achieve an all round empowerment of women. This scheme mainly focuses on Community oriented innovations, working in groups, building team spirit, mobilization of activities, gaining knowledge and awareness to empower financially. This project has brought women into the mainstream of development in the rural areas of Gujarat\\r\\n', 'यह योजना महिलाओं के विकास और सशक्तिकरण के लिए एक एकीकृत परियोजना है, महिलाओं के समग्र विकास - सामाजिक, आर्थिक और सांस्कृतिक, उन्हें सभी मौजूदा परियोजनाओं को एकीकरण और एकीकरण के माध्यम से संसाधनों प्रदान करके शुरू किया गया है, जिस पर इसका ध्यान केंद्रित किया गया है। समुदाय, उन्मुख नवाचार, समूह गठन, ज्ञान का निर्माण और गतिविधियों का जुड़ाव।\\r\\nइस योजना का उद्देश्य महिलाओं के समस्त सशक्तिकरण को प्राप्त करना है। यह योजना मुख्य रूप से सामुदायिक उन्मुख नवोन्मेषों पर केंद्रित है, समूहों में काम कर रही है, टीम की भावना का निर्माण, गतिविधियों को क्रियान्वित करने, ज्ञान प्राप्त करने और वित्तीय रूप से सशक्त बनाने के लिए जागरूकता। इस परियोजना ने गुजरात के ग्रामीण क्षेत्रों में महिलाओं को विकास की मुख्यधारा में लाया है\'', 'આ યોજના સ્ત્રીઓના વિકાસ અને સશક્તિકરણ માટેનું એક સંકલિત પ્રોજેક્ટ છે, જે સ્ત્રીઓનું એકંદર વિકાસ - સામાજિક, આર્થિક અને સાંસ્કૃતિક છે, તેમને સગવડની ગતિવિધિની પ્રક્રિયા અને તમામ વર્તમાન યોજનાઓનું એકીકરણ, તેના પર ધ્યાન કેન્દ્રિત કરીને, દ્વારા પૂરી પાડવામાં આવે છે. સમુદાય, લક્ષી નવીનતાઓ, જૂથ રચના, જ્ઞાનનું નિર્માણ અને ગતિવિધિઓની ગતિશીલતા.\\r\\nઆ સ્કીમનો ઉદ્દેશ મહિલાઓની સશક્તિકરણ હાંસલ કરવાનો છે. આ યોજના મુખ્યત્વે સમુદાય આધારિત નવીનતાઓ પર ધ્યાન કેન્દ્રિત કરે છે, જૂથોમાં કામ કરે છે, ટીમની લાગણીનું નિર્માણ કરે છે, ગતિવિધિની ગતિશીલતા, જ્ઞાન મેળવવા અને નાણાકીય રીતે સશક્તિકરણ માટે જાગરૂકતા. આ પ્રોજેક્ટ ગુજરાતનાં ગ્રામીણ વિસ્તારોમાં મહિલાઓના વિકાસની મુખ્યપ્રવાહમાં લાવ્યા છે\'', NULL, NULL, '2018-03-30 12:59:10', 3, 6, 6, '0', NULL, NULL, NULL, NULL, NULL),
(13, 'Vidhva Sahay and Talim Yojna for women who lost their husbands, Monetary help', 'महिलाओं के लिए विद्या सहाय और तालीम योजना जो अपने पति को खो दी, मौद्रिक मदद', 'વિદ્વ સહાય અને તાલિમ યોજના, જેણે પોતાના પતિઓને ગુમાવ્યાં છે, નાણાકીય મદદ', 'This scheme is for women between 18-40 years who have lost their husbands. this is the scheme for their empowerment and improvement of economic living conditions. Rs. 3000 is given under Manav Garima yoga to help them to be self-reliant. Monetary help by the application is given to the women (Rs. 500) and Rs. 80 (per child) every month through the post office.', 'यह योजना 18-40 साल के बीच महिलाओं के लिए है, जिन्होंने अपने पतियों को खो दिया है। यह उनके सशक्तिकरण और आर्थिक जीवन स्थितियों के सुधार की योजना है। रुपये। 3000 मानव ग्रिम योग के तहत उन्हें आत्मनिर्भर होने में मदद करने के लिए दिया जाता है। आवेदन द्वारा मौद्रिक सहायता महिलाओं को दी गई है (500 रुपये) और रुपये पोस्ट ऑफिस के माध्यम से हर महीने 80 (प्रति बच्चा)', 'આ યોજના 18 થી 40 વર્ષ વચ્ચેની સ્ત્રીઓ માટે છે, જેઓ તેમના પતિને ગુમાવે છે. આ તેમના સશક્તિકરણ અને આર્થિક વસવાટ કરો છો પરિસ્થિતિઓમાં સુધારાની યોજના છે. રૂ. 3000 માનવ ગરિમા યોગ હેઠળ તેમને સ્વ-નિર્ભર બનવામાં મદદ કરવા માટે આપવામાં આવે છે. એપ્લિકેશન દ્વારા નાણાંકીય સહાય સ્ત્રીઓને આપવામાં આવે છે (રૂ .500) અને રૂ. પોસ્ટ ઓફિસ દ્વારા દર મહિને 80 (બાળક દીઠ)\'', NULL, NULL, '2018-03-30 13:02:06', 3, 5, 5, '0', NULL, NULL, NULL, NULL, NULL),
(14, 'Chiranjeevi Yojna for girls for the pregnant women belonging to below poverty line(BPL)', 'गरीबी रेखा (बीपीएल) से संबंधित गर्भवती महिलाओं के लिए लड़कियों के लिए चिरंजीवी योजना', 'ગર્ભવતી મહિલાઓ માટે ગરીબી રેખા નીચે (બીપીએલ) કન્યાઓ માટે ચિરંજીવી યોજના\'', 'This scheme is a State Sponsored Scheme by the Government Of Gujarat. This scheme is for the pregnant women belonging to below poverty line(BPL) It provides financial assistance as well as other health care assistance.', 'यह योजना गुजरात सरकार द्वारा राज्य प्रायोजित योजना है। यह योजना गरीबी रेखा (बीपीएल) से संबंधित गर्भवती महिलाओं के लिए है जो वित्तीय सहायता प्रदान करती है साथ ही साथ अन्य स्वास्थ्य देखभाल सहायता भी करती है|', 'આ યોજના ગુજરાત સરકાર દ્વારા રાજ્ય પ્રાયોજીત યોજના છે. આ યોજના ગરીબી રેખા (બીપીએલ) ની નીચે રહેલી ગર્ભવતી સ્ત્રીઓ માટે છે જે નાણાકીય સહાય તેમજ અન્ય સ્વાસ્થ્ય સંભાળ સહાય પૂરી પાડે છે', NULL, NULL, '2018-03-30 13:04:25', 3, 3, 6, '0', NULL, NULL, NULL, NULL, NULL),
(15, 'Dikri Bachao Campaign (Save Girl Child) – Matru Vandana Yatra', 'डिकरी बचाओ अभियान (सहेजें लड़की बाल) - मातृ वंदना यात्रा\'', 'દીકરી બચાવો ઝુંબેશ (બાળ બચાવો) - માતૃ વંદના યાત્રા', 'This scheme is popularly known as Beti Vadhaao Abhiyan. This scheme is for the mothers whose offspring are only one daughter or both daughters and no son And the financial assistance is given to such mothers/women.', 'इस योजना को लोकप्रिय रूप से बेटी वाधो अभियान के रूप में जाना जाता है। यह योजना माताओं के लिए होती है जिनकी संतान केवल एक बेटी या दोनों बेटियां और कोई बेटा नहीं है और ऐसी माताओं / महिलाओं को वित्तीय सहायता दी जाती है।', 'આ યોજનાને બેટી વઢો અભિયાન તરીકે ઓળખવામાં આવે છે. આ યોજના માતાઓ માટે છે કે જેમના સંતાન માત્ર એક પુત્રી અથવા બંને પુત્રીઓ અને કોઈ પુત્ર છે અને આવા માતાઓ / સ્ત્રીઓને નાણાકીય સહાય આપવામાં આવે છે.\'', NULL, NULL, '2018-03-30 13:07:19', 3, 6, 6, '0', NULL, NULL, NULL, NULL, NULL),
(16, 'Free Higher Education for Girls,Government of Gujarat', 'लड़कियों के लिए मुफ्त उच्च शिक्षा, गुजरात सरकार', 'કન્યાઓ માટે મફત ઉચ્ચ શિક્ષણ, ગુજરાત સરકાર', 'Under this scheme, free higher education is provided to the girls. This scheme is State Sponsored Scheme by the Government of Gujarat.', 'इस योजना के तहत, लड़कियों को मुफ्त उच्च शिक्षा प्रदान की जाती है। यह योजना गुजरात सरकार द्वारा राज्य प्रायोजित योजना है।\'', 'આ યોજના હેઠળ કન્યાઓને મફત ઉચ્ચ શિક્ષણ આપવામાં આવે છે. આ યોજના ગુજરાત સરકાર દ્વારા રાજ્ય પ્રાયોજીત યોજના છે.', NULL, 'Active', '2018-03-30 13:10:31', 3, 9, 6, '0', NULL, NULL, NULL, NULL, NULL),
(17, 'Kanya Kelavani Nidhi : Spreading Girl Child Education for a golden future, Gujarat', 'कन्या केल्वाणी निधि: सुनहरे भविष्य के लिए लड़की बाल शिक्षा प्रसार, गुजरात', 'કન્યા કેળવણી નિધિ: સોનેરી ભાવિ, ગુજરાત માટે કન્યા બાળ શિક્ષણ ફેલાવવું\'', 'With the support of Kanya Kelavani Nidhi Fund, It helps to the girl child.', 'कन्या केळवानी निधि के समर्थन से, यह लड़की की बच्ची में मदद करता है', '\'કન્યા કેળવણી નિધિ ફંડની સહાયથી, તે છોકરી બાળકને મદદ કરે છે.', NULL, 'Active', '2018-03-30 13:12:09', 3, 1, 6, '0', NULL, NULL, NULL, NULL, NULL),
(18, 'Kasturba Poshan Sahay Yojana (KPSY) for women belonging to below poverty line(BPL), Gujarat', 'कस्तूरबा पोषण सहायता योजना (केपीएसई) गरीबी रेखा से नीचे की महिलाओं (बीपीएल), गुजरात', 'કસ્તૂરબ નુષણ સહાય યોજના (કેપીએસઈ) ગરીબી રેખાથી નીચેનું મહિલા (બી.પી.એલ.), ગુજરાત\'', 'Under this scheme, the financial assistance is given to the pregnant women belonging to below poverty line(BPL). This scheme has been initiated in order to achieve the goals i.e. to ensure safe motherhood and institutional deliveries, to reduce the morbidity and mortality.', 'इस योजना के अंतर्गत, गरीबी रेखा से नीचे की गरीबी रेखा (बीपीएल) की गर्भवती महिलाओं को वित्तीय सहायता दी जाती है। इस योजना को लक्ष्य प्राप्त करने के लिए शुरू किया गया है ताकि सुरक्षित मातृत्व और संस्थागत प्रसव सुनिश्चित किया जा सके, ताकि रोग और मृत्यु दर कम हो सके।', '\'આ યોજના હેઠળ, ગરીબી રેખા નીચે (ગરીબી રેખા નીચે) સગર્ભા સ્ત્રીઓને નાણાકીય સહાય આપવામાં આવે છે. આ યોજનાની શરૂઆત લક્ષ્યાંક હાંસલ કરવા માટે કરવામાં આવી છે જેથી સલામત માતૃત્વ અને સંસ્થાકીય ડિલિવરીની ખાતરી કરવા માટે, રોગ અને મૃત્યુદર ઘટાડવો.', NULL, 'Active', '2018-03-30 13:13:49', 3, 4, 6, '0', NULL, NULL, NULL, NULL, NULL),
(19, 'Kunverbai nu Mameru scheme for SC Girls Financial assistance, Gujarat', 'एससी बेटी वित्तीय सहायता, गुजरात के लिए कुन्वरबाई न्यू मेमरू योजना\'', '\'એસસી બેટી ફાઇનાન્સિયલ સપોર્ટ, ગુજરાત માટે કુનવરબાઈ નમરે યોજના\'', 'For daughters of SC, having an annual income of 11,000. For first daughter’s marriage, they can avail Rs.5000 and Rs.2000 is given to girl’s parents/guardian and 3000 to the girl in the form of Kisan Vikas Patra.', 'एससी के बेटों के लिए, 11,000 की वार्षिक आय वाले पहली बेटी की शादी के लिए, उन्हें 5000 रुपये और लड़की के माता-पिता / अभिभावक को 2,000 रुपये और किसान विकास पत्र के रूप में 3000 रुपये की राशि का लाभ मिल सकता है।', '11,000 ની વાર્ષિક આવક ધરાવતા એસસીની દીકરીઓ માટે પ્રથમ પુત્રીના લગ્ન માટે, તેઓ રૂા. 5000 અને રૂ. 2,000 ને છોકરીના માતા-પિતા / પાલકને આપી શકે છે અને 3000 ને છોકરીને કિશન વિકાસ પત્રના રૂપમાં આપી શકાય છે.', NULL, 'Active', '2018-03-30 13:16:11', 3, 7, 6, '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schemeDescription`
--

CREATE TABLE `schemeDescription` (
  `id` int(11) NOT NULL,
  `schemeId` int(11) DEFAULT NULL,
  `fieldName` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hFieldName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gFieldName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feildDescription` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schemeDescription`
--

INSERT INTO `schemeDescription` (`id`, `schemeId`, `fieldName`, `hFieldName`, `gFieldName`, `feildDescription`, `deleted`) VALUES
(1, 2, 'Description', 'विवरण', 'વર્ણન', 'Gujarat is suffering from one of the worst outcomes of gender-based discrimination, To maintain male-female sex ratio. The state average of child sex ratio (0-6 years) declined dramatically. To address this issue various efforts are being made, one of the major being the ‘Beti Bachao Campaign’ that was launched by Women and Child Development Department, Gujarat. Gender Resource centre, an autonomous body, was an active partner in the campaign who was involved in documentation and publications with a realization that it could play a vital role in changing the perception of the society in general on such important issue.', '0'),
(2, 2, 'Objective', NULL, NULL, 'The objectives of this scheme are summarised as below:\r\nTo promote birth of the girl child/Encouraging people to welcome the birth of a female child\r\nTo ensure the rightful place of pride in society for a girl child, to assure her of her safety and security.\r\nTo improve the sex ratio.\r\nAddress the declining sex ratio through scholarship programmes', '0'),
(3, 2, 'Eligibility', NULL, NULL, 'The following criteria should be fulfilled to avail the benefits:\r\nAge of the women should be below 35 years on the date of vasectomy/tubectomy (family planning operation).\r\nWhen there is only one daughter, the age of the daughter should be more than one year.\r\nSocial Defence Certificate is given to families who adopt family planning after having one or two daughters or and have no son.\r\n', '0'),
(4, 2, 'Beneficiaries', NULL, NULL, 'All chilren\r\n', '0'),
(5, 2, 'Benefits', NULL, NULL, 'Rs. 6000 aid is granted to a family having only one daughter and no son.\r\nRs. 5000 aid is granted to a family having two daughters and no son.\r\n', '0'),
(7, 2, 'sponsored By', NULL, NULL, 'State', '0'),
(8, 2, 'Ministry', NULL, NULL, 'Women and Child Development Department, Gujarat', '0'),
(9, 2, 'Sector', NULL, NULL, 'Women & child', '0'),
(10, 3, 'Ministry', NULL, NULL, 'Women & Child Development Department, Gujarat\r\n', '0'),
(11, 3, 'Description', 'विवरण', 'વર્ણન', 'Under this scheme, It encourages to scheduled caste/tribe women to sell fishes to be self-reliant. For the purpose, required instruments and facility is provided to buy a weighing machine, Insulated box, etc. On average Rs.10,000/- Unit cost, 50% assistance is given to women belonging to scheduled caste/tribe. Training is given to Women for the growth of ‘Zingo’ fishes under a ten-day course of Rs.100/- scholarship.', '0'),
(12, 3, 'Sponsored By', NULL, NULL, 'state', '0'),
(13, 3, 'Objective', NULL, NULL, 'To encourage the scheduled caste/tribe women to sell fishes to be self-reliant.', '0'),
(14, 3, 'Eligibility', NULL, NULL, 'Women', '0'),
(15, 3, 'Beneficiaries', NULL, NULL, 'SC/ST women', '0'),
(16, 3, 'Benefits', NULL, NULL, 'On Rs. 10,000 unit cost to buy weighing machines, insulated boxes 50% assistance is given. Training is provided for the growth of Zingo fishes under 10 days course with 100/- scholarship.', '0'),
(18, 3, 'Sector', NULL, NULL, 'Women and Child', '0'),
(19, 4, 'Description', 'विवरण', 'વર્ણન', 'This scheme aims for economic upliftment of women living below the poverty line(BPL). The scheme is being implemented from the year 1996. Women whose annual income is Rs. 36,000/- are considered eligible under the scheme. Qualified women are provided loan amount up to Rs. 50,000/- through Nationalized Banks.\r\n', '0'),
(20, 4, 'Objective', NULL, NULL, 'The objective of this scheme are as follows:\r\nTo create various events of economic activities and make the women of Gujarat earn income for their better livelihood.\r\nTo plan, encourage and coordinate different activities in the field of economic development of women.\r\nTo make awareness amongst deprived women of the state and bring them into mainstream and make them economically and socially sound so that they also may contribute to the development of the state.', '0'),
(21, 4, 'Eligibility', NULL, NULL, 'Women whose annual income is Rs. 36,000/- are considered eligible under the scheme.', '0'),
(22, 4, 'Beneficiaries', NULL, NULL, 'Women', '0'),
(23, 4, 'Benefits', NULL, NULL, 'The loan amount up to Rs. 50,000/- through Nationalized Banks are given to qualified women including a subsidy ranging between Rs.7,500/- to Rs.12,500/-.', '0'),
(25, 4, 'Sponsored By', NULL, NULL, 'State', '0'),
(26, 4, 'Ministry', NULL, NULL, 'Women and Child Development Department, Gujarat', '0'),
(27, 4, 'Sector', NULL, NULL, 'Women and Child', '0'),
(28, 5, 'Description', 'विवरण', 'વર્ણન', 'This is for the women who are abandoned by their children. Old Parents are day by day being neglected by the Youth. In order to solve this social issue, State Government of Gujarat has made arrangements for uncared women and foster their needs. State Government has set up Old Age Homes for such destitute. Exclusive Women Old Age homes are structured with an exclusive existing Home at Jamnagar.', '0'),
(29, 5, 'Objective', NULL, NULL, 'To help and to give free home to live for the old age women.', '0'),
(30, 5, 'Eligibility', NULL, NULL, 'Any old age women who have no home.Or no support from their children.', '0'),
(31, 5, 'Beneficiaries', NULL, NULL, 'Old age women\r\n', '0'),
(32, 5, 'Benefits', NULL, NULL, 'Exclusive Women Old Age homes are provided to old people.', '0'),
(34, 5, 'Sponsored By', NULL, NULL, 'State', '0'),
(35, 5, 'Ministry', NULL, NULL, 'Women and Child Development Department, Gujarat', '0'),
(36, 5, 'Sector', NULL, NULL, 'Women and Child\r\n', '0'),
(37, 6, 'Description', 'विवरण', 'વર્ણન', 'Gujarat is the first state of India providing an insurance coverage for Anganwadi Workers (AWW) and Anganwadi Helpers (AWH). After the maturation period of the insurance, Rs.50,000 is given to the nominee in case of death of the insured and the interest of the money being deposited.\r\nUnder this scheme, during the working years of the Anganwadi Workers (AWW) and AWHs, Rs. 100 per month is paid out of which Rs. 50 is paid by Gujarat Government and Rs. 50 is paid by Anganwadi Workers (AWW) and Anganwadi Helpers (AWH). On maturity of the insurance that is after the death of the AWW /AWH, the nominee of the insured receives an amount of Rs.50,000 along with 8% interest in case of death of the insured.', '0'),
(38, 6, 'Objective', NULL, NULL, 'An insurance scheme for Anganwadi workers In an attempt to provide social security to AWWs and AWHs, Mata YashodaGauravNidhi Insurance has been started by the Gujarat State Government.', '0'),
(39, 6, 'Eligibility', NULL, NULL, 'Anganwadi Workers (AWW) and Anganwadi Helpers (AWH)', '0'),
(40, 6, 'Beneficiaries', NULL, NULL, 'Insurance is given to the Anganwadi Workers (AWW) and Anganwadi Helpers (AWH).', '0'),
(41, 6, 'Benefits', NULL, NULL, 'Insurance is given to the Anganwadi Workers (AWW) and Anganwadi Helpers (AWH).', '0'),
(43, 6, 'Sponsored By', NULL, NULL, 'State', '0'),
(44, 6, 'Ministry', NULL, NULL, 'Women and Child Development Department, Gujarat', '0'),
(45, 6, 'Sector', NULL, NULL, 'Women ad Child\r\n', '0'),
(46, 7, 'Description', 'विवरण', 'વર્ણન', 'Women & Child Development Department, Gujarat has initiated this scheme of Joint marriages.For SC families having an annual income of 11,000, and for minimum five couple, this scheme is initiated. The couple gets 5000 in the form of Narmada Shreeneedhi certificate along with merit certificate. For organizing the marriage, a sum of 10,000 is given.', '0'),
(47, 7, 'Objective', NULL, NULL, 'To reduce the expenditure on marriages by promoting group marriages.', '0'),
(48, 7, 'Eligibility', NULL, NULL, 'All persons of Gujarat State belonging to scheduled castes.\r\n', '0'),
(49, 7, 'Beneficiaries', NULL, NULL, 'Married couple at Samuh Lagna', '0'),
(50, 7, 'Benefits', NULL, NULL, 'The married couple will get Rs.5000/- in the form of Narmada Shreenidhi Certificate along with Merit Certificate. For organizing the Samuh Lagna, (group marriage), a sum of Rs.1000/- is given to them.', '0'),
(52, 7, 'Sponsored By\r\n', NULL, NULL, 'State', '0'),
(53, 7, 'Ministry', NULL, NULL, 'Women & Child Development Department, Gujarat', '0'),
(54, 7, 'Sector', NULL, NULL, 'Women and Child', '0'),
(55, 8, 'Description', 'विवरण', 'વર્ણન', 'This scheme is to enable the poor women, particularly in rural areas of Gujarat. This scheme aims to improve their access to resources and consequently strengthen livelihoods and quality of life. Sakhi Mandals are a formation of women self-help groups based on thrift and credit principles. It provides financial services to increase the process of economic development and ensure the welfare of women. They are encouraged to foster decision skills and develop a framework of a wider range of participation in microfinance development.', '0'),
(56, 8, 'Objective', NULL, NULL, ' To enable the poor women, particularly in rural areas of Gujarat.\r\n', '0'),
(57, 8, 'Eligibility', NULL, NULL, 'B.P.L. women may join as the member in maximum limit of 30% to form Sakhi mandals under the Sakhi Mandal scheme. In order to from Sakhi Mandal, district panchayat, bhuj, I.C.D.S. branch and district rural development agency, Bhuj may be contacted.', '0'),
(58, 8, 'Beneficiaries', NULL, NULL, 'Rural poor families-APL/BPL.', '0'),
(59, 8, 'Benefits', NULL, NULL, 'They are paid the stipend and transportation cost for the training period.', '0'),
(60, 8, 'Sponsored By', NULL, NULL, 'State', '0'),
(61, 8, 'Ministry', NULL, NULL, 'Women & Child Development Department, Gujarat', '0'),
(62, 8, 'Sector', NULL, NULL, 'Women and Child', '0'),
(63, 11, 'Description', 'विवरण', 'વર્ણન', 'The scheme is being implemented jointly by State (25 % share) and Central Government to provide shelter to women in need. Apart from shelter, this homes would also provide other necessary items to women during their stay.', '0'),
(64, 11, 'Objective', NULL, NULL, 'To enable the poor women, particularly in rural areas of Gujarat.', '0'),
(65, 11, 'Eligibility', NULL, NULL, 'Anganwadi Workers (AWW) and Anganwadi Helpers (AWH)', '0'),
(66, 11, 'Beneficiaries', NULL, NULL, 'Women', '0'),
(67, 11, 'Benefits', NULL, NULL, 'Insurance is given to the Anganwadi Workers (AWW) and Anganwadi Helpers (AWH).', '0'),
(68, 11, 'Ministry', NULL, NULL, 'Women and Child Development Department, Gujarat', '0'),
(69, 11, 'Sponsored By', NULL, NULL, 'State', '0');

-- --------------------------------------------------------

--
-- Table structure for table `schemeType`
--

CREATE TABLE `schemeType` (
  `id` int(11) NOT NULL,
  `schemeTypeName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hSchemeTypeName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gSchemeTypeName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schemeType`
--

INSERT INTO `schemeType` (`id`, `schemeTypeName`, `hSchemeTypeName`, `gSchemeTypeName`, `deleted`, `remark`) VALUES
(5, 'Central', 'केंद्रीय', 'કેન્દ્રીય', '0', NULL),
(6, 'State', 'राज्य', 'રાજ્ય', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `stateName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hStateName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `gStateName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `countryId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `hStateName`, `gStateName`, `deleted`, `countryId`, `lastUpdate`, `remark`) VALUES
(1, 'Gujarat', 'गुजरात', 'ગુજરાત', '0', 1, '2018-03-30 06:28:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `typeLevel`
--

CREATE TABLE `typeLevel` (
  `id` int(11) NOT NULL,
  `level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hLevel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gLevel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `lastUpdateBy` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typeLevel`
--

INSERT INTO `typeLevel` (`id`, `level`, `hLevel`, `gLevel`, `deleted`, `lastUpdateBy`, `remark`) VALUES
(1, 'Admin', 'एडमिन ', 'આદમીન ', '0', '2018-03-30 19:05:37', NULL),
(2, 'District', 'जिला', 'જિલ્લા', '0', '2018-03-30 19:06:12', NULL),
(3, 'Block', 'विकास खंड ', 'વિકાસ બ્લોક', '0', '2018-03-30 19:08:00', NULL),
(4, 'Village', 'गाँव', 'ગામ', '0', '2018-03-30 19:08:00', NULL),
(5, 'NGO', 'गैर सरकारी संगठन', 'બિન સરકારી સંસ્થા', '0', '2018-03-30 19:08:59', NULL),
(6, 'other', 'अन्य', 'અન્ય', '0', '2018-03-30 19:10:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userType`
--

CREATE TABLE `userType` (
  `id` int(11) NOT NULL,
  `userTypeName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hUserTypeName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `gUserTypeName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `remark` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userType`
--

INSERT INTO `userType` (`id`, `userTypeName`, `hUserTypeName`, `gUserTypeName`, `lastUpdate`, `deleted`, `remark`) VALUES
(1, 'Admin', 'एडमिन ', 'આદમીન ', '2018-03-30 13:40:56', '0', NULL),
(2, 'User', 'यूजर ', 'ઉસેર ', '2018-03-30 13:41:20', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `id` int(11) NOT NULL,
  `villageName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hVillageName` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gVillageName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `deleted` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `blockId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`id`, `villageName`, `hVillageName`, `gVillageName`, `deleted`, `blockId`, `lastUpdate`, `remark`, `orderBy`) VALUES
(3, 'art', 'गज hgb ', 'ઉયજ khj ', '1', 1, '2018-03-31 05:22:08', NULL, NULL),
(4, 'dgdfgdgd', 'डफगड़ ', 'ડગ ', '1', 1, '2018-03-31 06:26:29', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blockName` (`blockName`),
  ADD UNIQUE KEY `gBlockName` (`gBlockName`),
  ADD UNIQUE KEY `hBlockName` (`hBlockName`),
  ADD UNIQUE KEY `districtId` (`districtId`,`blockName`,`hBlockName`,`gBlockName`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branchName` (`branchName`),
  ADD UNIQUE KEY `hBranchName` (`hBranchName`),
  ADD UNIQUE KEY `gBranchName` (`gBranchName`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoryName` (`categoryName`),
  ADD UNIQUE KEY `hCategoryName` (`hCategoryName`),
  ADD UNIQUE KEY `gCategoryName` (`gCategoryName`);

--
-- Indexes for table `categoryTemp`
--
ALTER TABLE `categoryTemp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoryName` (`categoryName`),
  ADD UNIQUE KEY `hCategoryName` (`hCategoryName`),
  ADD UNIQUE KEY `gCategoryName` (`gCategoryName`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countryName` (`countryName`),
  ADD UNIQUE KEY `hCountryName` (`hCountryName`),
  ADD UNIQUE KEY `gCountryName` (`gCountryName`);

--
-- Indexes for table `countUser`
--
ALTER TABLE `countUser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countUser_schemeId_scheme` (`schemeId`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designationName` (`designationName`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districtName` (`districtName`),
  ADD UNIQUE KEY `gDistrictName` (`gDistrictName`),
  ADD UNIQUE KEY `hDistrictName` (`hDistrictName`),
  ADD UNIQUE KEY `stateId` (`stateId`,`districtName`,`hDistrictName`,`gDistrictName`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_schemeId_scheme` (`schemeId`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_schemeId_scheme` (`schemeId`);

--
-- Indexes for table `loginMaster`
--
ALTER TABLE `loginMaster`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `loginMaster_approvedById_loginMaster` (`approvedById`),
  ADD KEY `loginMaster_userTypeId_userType` (`userTypeId`),
  ADD KEY `loginMaster_typeLevelId_typeLevel` (`typeLevelId`);

--
-- Indexes for table `noOfBeneficiaries`
--
ALTER TABLE `noOfBeneficiaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noOfBeneficiaries_schemeID` (`schemeId`),
  ADD KEY `noOfBeneficiaries_loginId` (`loginId`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `officeAddress` (`officeAddress`,`officeName`),
  ADD UNIQUE KEY `hOfficeAddress` (`hOfficeAddress`,`hOfficeName`),
  ADD UNIQUE KEY `gOfficeAddress` (`gOfficeAddress`,`gOfficeName`),
  ADD KEY `office_branchId_branch` (`branchId`),
  ADD KEY `office_typeLevelId_typeLevel` (`typeLevelId`);

--
-- Indexes for table `officeReference`
--
ALTER TABLE `officeReference`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `officeId` (`officeId`,`schemeId`),
  ADD KEY `officeReference_schemeId_scheme` (`schemeId`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scheme_loginId_loginMaster` (`loginId`),
  ADD KEY `scheme_categoryId_category` (`categoryId`),
  ADD KEY `scheme_schemeTypeId_schemeType` (`schemeTypeId`);

--
-- Indexes for table `schemeDescription`
--
ALTER TABLE `schemeDescription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schemeDescription_schemeId_scheme` (`schemeId`);

--
-- Indexes for table `schemeType`
--
ALTER TABLE `schemeType`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schemeTypeName` (`schemeTypeName`),
  ADD UNIQUE KEY `hSchemeTypeName` (`hSchemeTypeName`),
  ADD UNIQUE KEY `gSchemeTypeName` (`gSchemeTypeName`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countryId` (`countryId`,`stateName`,`hStateName`,`gStateName`);

--
-- Indexes for table `typeLevel`
--
ALTER TABLE `typeLevel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `level` (`level`,`hLevel`,`gLevel`);

--
-- Indexes for table `userType`
--
ALTER TABLE `userType`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userTypeName` (`userTypeName`),
  ADD UNIQUE KEY `hUserTypeName` (`hUserTypeName`),
  ADD UNIQUE KEY `gUserTypeName` (`gUserTypeName`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `villageName` (`villageName`),
  ADD UNIQUE KEY `gVillageName` (`gVillageName`),
  ADD UNIQUE KEY `hVillageName` (`hVillageName`),
  ADD UNIQUE KEY `blockId` (`blockId`,`villageName`,`hVillageName`,`gVillageName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categoryTemp`
--
ALTER TABLE `categoryTemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countUser`
--
ALTER TABLE `countUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginMaster`
--
ALTER TABLE `loginMaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `noOfBeneficiaries`
--
ALTER TABLE `noOfBeneficiaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `officeReference`
--
ALTER TABLE `officeReference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `schemeDescription`
--
ALTER TABLE `schemeDescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `schemeType`
--
ALTER TABLE `schemeType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `typeLevel`
--
ALTER TABLE `typeLevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userType`
--
ALTER TABLE `userType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `block_districtId_district` FOREIGN KEY (`districtId`) REFERENCES `district` (`id`);

--
-- Constraints for table `countUser`
--
ALTER TABLE `countUser`
  ADD CONSTRAINT `countUser_schemeId_scheme` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_stateId_state` FOREIGN KEY (`stateId`) REFERENCES `state` (`id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_schemeId_scheme` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_schemeId_scheme` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `loginMaster`
--
ALTER TABLE `loginMaster`
  ADD CONSTRAINT `loginMaster_approvedById_loginMaster` FOREIGN KEY (`approvedById`) REFERENCES `loginMaster` (`id`),
  ADD CONSTRAINT `loginMaster_typeLevelId_typeLevel` FOREIGN KEY (`typeLevelId`) REFERENCES `typeLevel` (`id`),
  ADD CONSTRAINT `loginMaster_userTypeId_userType` FOREIGN KEY (`userTypeId`) REFERENCES `userType` (`id`);

--
-- Constraints for table `noOfBeneficiaries`
--
ALTER TABLE `noOfBeneficiaries`
  ADD CONSTRAINT `noOfBeneficiaries_loginId` FOREIGN KEY (`loginId`) REFERENCES `loginMaster` (`id`),
  ADD CONSTRAINT `noOfBeneficiaries_schemeID` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `office_branchId_branch` FOREIGN KEY (`branchId`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `office_typeLevelId_typeLevel` FOREIGN KEY (`typeLevelId`) REFERENCES `typeLevel` (`id`);

--
-- Constraints for table `officeReference`
--
ALTER TABLE `officeReference`
  ADD CONSTRAINT `officeReference_officeId_office` FOREIGN KEY (`officeId`) REFERENCES `office` (`id`),
  ADD CONSTRAINT `officeReference_schemeId_scheme` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `scheme`
--
ALTER TABLE `scheme`
  ADD CONSTRAINT `scheme_categoryId_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `scheme_loginId_loginMaster` FOREIGN KEY (`loginId`) REFERENCES `loginMaster` (`id`),
  ADD CONSTRAINT `scheme_schemeTypeId_schemeType` FOREIGN KEY (`schemeTypeId`) REFERENCES `schemeType` (`id`);

--
-- Constraints for table `schemeDescription`
--
ALTER TABLE `schemeDescription`
  ADD CONSTRAINT `schemeDescription_schemeId_scheme` FOREIGN KEY (`schemeId`) REFERENCES `scheme` (`id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_countryId_country` FOREIGN KEY (`countryId`) REFERENCES `country` (`id`);

--
-- Constraints for table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `village_blockId_block` FOREIGN KEY (`blockId`) REFERENCES `block` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
