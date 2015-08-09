-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2015 at 04:35 PM
-- Server version: 5.5.44-37.3-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `breezeca_hosapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Family'),
(2, 'Friend'),
(3, 'Office'),
(4, 'Dating'),
(5, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(30) NOT NULL,
  `address_1` varchar(30) NOT NULL,
  `address_2` varchar(30) NOT NULL,
  `company_city` varchar(30) NOT NULL,
  `company_country` varchar(30) NOT NULL,
  `company_phone` varchar(15) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_contact` varchar(30) NOT NULL,
  `company_vat` varchar(15) NOT NULL,
  `company_reg` varchar(15) NOT NULL,
  `company_position` varchar(30) NOT NULL,
  `company_num_emp` int(11) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `address_1`, `address_2`, `company_city`, `company_country`, `company_phone`, `company_email`, `company_contact`, `company_vat`, `company_reg`, `company_position`, `company_num_emp`) VALUES
(22, 'New Company', '5 Beverly crescent', 'LEWISBURG', 'Dublin', 'Ireland', '5635881187', 'tom@breezecatcher.com', 'Tommy D', 'ie 1234567 d', '87654321', 'Manager', 870),
(23, 'HosApp', '1 Crane st', 'James Gate', 'Dublin', 'Ireland', '9313592201', 'tom@hosapp.ie', 'Tom Delaney', 'ie 1234567 d', '87654321', 'Manager', 100),
(24, 'Bewleys', '1 Crane st', 'James Gate', 'Dublin', 'Ireland', '9313592201', 'tom@hosapp.ie', 'Tom Delaney', 'ie 1234567 d', '87654321', 'Manager', 100),
(25, 'Farm', '10 This street', 'Hometown', 'Cork', 'Ireland', '125478123', 'here@farm.ie', 'Mr Goat', '123456', '12345', 'The hen house', 10),
(26, 'Breeze', '', '', '', '', '', '', '', '', '', '', 0),
(27, 'Coffee_Cathys', '', '', '', '', '', '', '', '', '', '', 0),
(28, 'DSA', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `category_id`) VALUES
(1, 'lorem', 'lorem@sample.com', '08787878', 'lorem address', 1),
(3, 'Lorem', 'Lorem@sample.com', '', 'Address for Lorem', 3),
(4, 'ipsum', 'ipsum@sample.com', '', 'Address for ipsum', 1),
(5, 'dolor', 'dolor@sample.com', '', 'Address for dolor', 4),
(6, 'sit', 'sit@sample.com', '', 'Address for sit', 3),
(7, 'amet,', 'amet,@sample.com', '', 'Address for amet,', 5),
(8, 'consectetur', 'consectetur@sample.com', '', 'Address for consectetur', 2),
(9, 'adipisicing', 'adipisicing@sample.com', '', 'Address for adipisicing', 1),
(10, 'elit,', 'elit,@sample.com', '', 'Address for elit,', 2),
(11, 'sed', 'sed@sample.com', '', 'Address for sed', 5),
(12, 'do', 'do@sample.com', '', 'Address for do', 2),
(13, 'eiusmod\ntempor', 'eiusmod\ntempor@sample.com', '', 'Address for eiusmod\ntempor', 1),
(14, 'incididunt', 'incididunt@sample.com', '', 'Address for incididunt', 4),
(15, 'ut', 'ut@sample.com', '', 'Address for ut', 1),
(16, 'labore', 'labore@sample.com', '', 'Address for labore', 1),
(17, 'et', 'et@sample.com', '', 'Address for et', 2),
(18, 'dolore', 'dolore@sample.com', '', 'Address for dolore', 4),
(19, 'magna', 'magna@sample.com', '', 'Address for magna', 3),
(20, 'aliqua', 'aliqua.@sample.com', '', 'Address for aliqua.', 4),
(21, 'Ut', 'Ut@sample.com', '', 'Address for Ut', 2),
(22, 'enim', 'enim@sample.com', '', 'Address for enim', 4),
(23, 'ad', 'ad@sample.com', '', 'Address for ad', 5),
(24, 'minim', 'minim@sample.com', '', 'Address for minim', 5),
(25, 'veniam,\nquis', 'veniam,\nquis@sample.com', '', 'Address for veniam,\nquis', 3),
(26, 'nostrud', 'nostrud@sample.com', '', 'Address for nostrud', 4),
(27, 'exercitation', 'exercitation@sample.com', '', 'Address for exercitation', 1),
(28, 'ullamco', 'ullamco@sample.com', '', 'Address for ullamco', 5),
(29, 'laboris', 'laboris@sample.com', '', 'Address for laboris', 4),
(30, 'nisi', 'nisi@sample.com', '', 'Address for nisi', 3),
(31, 'ut', 'ut@sample.com', '', 'Address for ut', 5),
(32, 'aliquip', 'aliquip@sample.com', '', 'Address for aliquip', 3),
(33, 'ex', 'ex@sample.com', '', 'Address for ex', 3),
(34, 'ea', 'ea@sample.com', '', 'Address for ea', 2),
(35, 'commodo\nconsequat', 'commodo\nconsequat.@sample.com', '', 'Address for commodo\nconsequat.', 2),
(36, 'Duis', 'Duis@sample.com', '', 'Address for Duis', 5),
(37, 'aute', 'aute@sample.com', '', 'Address for aute', 2),
(38, 'irure', 'irure@sample.com', '', 'Address for irure', 3),
(39, 'dolor', 'dolor@sample.com', '', 'Address for dolor', 5),
(40, 'in', 'in@sample.com', '', 'Address for in', 4),
(41, 'reprehenderit', 'reprehenderit@sample.com', '', 'Address for reprehenderit', 5),
(42, 'in', 'in@sample.com', '', 'Address for in', 2),
(43, 'voluptate', 'voluptate@sample.com', '', 'Address for voluptate', 5),
(44, 'velit', 'velit@sample.com', '', 'Address for velit', 2),
(45, 'esse\ncillum', 'esse\ncillum@sample.com', '', 'Address for esse\ncillum', 4),
(46, 'dolore', 'dolore@sample.com', '', 'Address for dolore', 3),
(47, 'eu', 'eu@sample.com', '', 'Address for eu', 4),
(48, 'fugiat', 'fugiat@sample.com', '', 'Address for fugiat', 2),
(49, 'nulla', 'nulla@sample.com', '', 'Address for nulla', 3),
(50, 'pariatur', 'pariatur.@sample.com', '', 'Address for pariatur.', 1),
(51, 'Excepteur', 'Excepteur@sample.com', '', 'Address for Excepteur', 3),
(52, 'sint', 'sint@sample.com', '', 'Address for sint', 5),
(53, 'occaecat', 'occaecat@sample.com', '', 'Address for occaecat', 4),
(54, 'cupidatat', 'cupidatat@sample.com', '', 'Address for cupidatat', 3),
(55, 'non\nproident,', 'non\nproident,@sample.com', '', 'Address for non\nproident,', 5),
(56, 'sunt', 'sunt@sample.com', '', 'Address for sunt', 4),
(57, 'in', 'in@sample.com', '', 'Address for in', 5),
(58, 'culpa', 'culpa@sample.com', '', 'Address for culpa', 4),
(59, 'qui', 'qui@sample.com', '', 'Address for qui', 1),
(60, 'officia', 'officia@sample.com', '', 'Address for officia', 2),
(61, 'deserunt', 'deserunt@sample.com', '', 'Address for deserunt', 1),
(62, 'mollit', 'mollit@sample.com', '', 'Address for mollit', 2),
(63, 'anim', 'anim@sample.com', '', 'Address for anim', 3),
(64, 'id', 'id@sample.com', '', 'Address for id', 1),
(65, 'est', 'est@sample.com', '', 'Address for est', 2),
(66, 'laborum', 'laborum.@sample.com', '', 'Address for laborum.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `lname`, `subject`, `message`) VALUES
(6, 'Thomas', 'Delaney', 'This is the subject', 'ashjdasdashdhsabdkj'),
(5, 'Thomas', 'Delaney', 'This is the subject', 'This is the message'),
(4, 'Thomas', 'Delaney', 'Test', 'This is a test message from the web site'),
(7, 'Thomas', 'Delaney', 'This is the subject', 'I really need to learn to code.'),
(8, 'Thomas', 'Delaney', 'This is the subject', 'The quick brown fox jumped over the lazy dogs back.'),
(9, 'Thomas', 'Delaney', 'This is the subject', 'hgfcuv6uyjfffffgv,jhvf   cvjhyfv'),
(10, 'Thomas', 'Delaney', 'This is the subject', 'tesr this ates'),
(11, 'Thomas', 'Delaney', 'This is the subject', 'juyh vfgt mjkiuhb mjkhuy.'),
(12, 'Thomas', 'Delaney', 'This is the subject', 'ghfdfdrtdgfc'),
(13, 'Thomas', 'Delaney', 'account', 'Please call me on 086 1234567. Need to talk about new account. Thanks'),
(14, 'Thomas', 'Delaney', 'New account', 'Please call me on 086 12345678 regarding a new account.\n\nThanks'),
(15, 'Thomas', 'Delaney', 'This is the subject', 'grfderscfdxfg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(30) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(60) NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `course_no_modules` int(10) NOT NULL,
  `couses_provider` varchar(30) NOT NULL,
  `number_of_quizs` int(3) NOT NULL,
  `course_reserved_2` varchar(30) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`, `course_no_modules`, `couses_provider`, `number_of_quizs`, `course_reserved_2`) VALUES
(1, 'Select course to add', '', 10, '', 0, ''),
(2, 'Manual handling', 'It covers a range of topics in order to give the learner confidence to risk assess manual handling tasks and perform said tasks within their workplace.\r\nThis course is intended for people who wish to receive the theory and practical skills required for correct manual handling.\r\n', 5, 'Teacher 2', 4, ''),
(5, 'Manual handling trainer', 'The aim of this Manual Handling Instructor course is to equip the learner with the knowledge, skill and competence to effectively design and deliver manual handling instruction in the workplace.', 10, 'Teacher 2', 9, ''),
(8, 'Customer service level 1', 'This programme is designed to enable the learner gain a detailed understanding of the customer service function within an organisation and to facilitate the development of effective customer service skills. The programme is suitable for persons already working in a customer services role who would like a recognised qualification to support their practical experience or those new to customer services.', 10, 'Teacher 2', 9, ''),
(9, 'Customer service level 2', 'This is an interactive course, covering a wide range of customer care skills including communication, understanding customers,building loyalty and handling difficult situations professionally.  It builds on skills from customer service module 1.', 12, 'Teacher 2', 11, ''),
(10, 'Barista basics', 'This course in Barista Skills gives you the basic knowledge needed to become a professional barista. The course is mainly theoretical and serves to increase your knowledge before moving onto more practical courses. This course is fundamental for any aspiring barista.', 8, 'Teacher 3', 7, ''),
(13, 'Introduction to Allergens', 'Course includes\r\n\r\n•	What is a food allergy?\r\n•	What are food intolerances ?\r\n•	How to deal with A food allergic customer\r\n•	Food Allergies and the law\r\n•	Labelling and food allergens\r\n', 6, 'Teacher 4', 5, ''),
(14, 'Allergens training for trainer & managers', 'Develops on the content from ‘Introduction to Allergens’ and looks at the businesses responsibilities surrounding food allergens, risk assessment of food allergens in your work place and development of a plan around food allergens for your business.', 6, 'Teacher 4', 5, ''),
(15, 'Introduction to calories on menus', 'The course includes:\r\n\r\n•	What are calories?\r\n•	Basic nutrition\r\n•	Importance of calories\r\n•	How to explain calories on menus to the customer\r\nThis course is aimed at front of house staff including wait and bar staff serving food and taking orders.\r\n', 6, 'Teacher 5', 5, ''),
(16, 'Calories on menus for trainers & managers', 'This course is focused on chefs, managers and trainers of staff.  It covers menu planning, balanced nutrition for your menu and business and how to communicate the idea of calories on menus to your customers.', 5, 'Teacher 6', 4, ''),
(17, 'Food handling level 1', 'There is a legal requirement Regulation (EC) 852/2004 that all food handlers undertake food safety training commensurate to their duties.  The Food Safety & Hygiene course takes into account the basic requirements of Food Safety legislation and standards based on the Guide to Food Safety Training published by the Food Safety Authority of Ireland (FSAI).', 10, 'Teacher 6', 9, ''),
(18, 'Food handling level 2', 'The level 2 food handling course builds on the level 1 covering responsibilities of managers and supervisors, risk assessment and planning.', 10, 'Teacher 6', 9, ''),
(19, 'Introduction to Specialist diets (gluten free, vegan)', 'An introduction to specialist diets such as gluten free, vegan and halal.  We will also focus on examining special diets, children’s diets, marketing terminology and food labels', 5, 'Teacher 8', 4, ''),
(20, 'Bar supervisor', 'The course covers the application of business principles to bar and beverage service operations in the areas of marketing, merchandising and sales and cost control. You will also learn how to identify and apply appropriate legislation in relation to: equality, employment, environmental best practice, food safety legislation, health and safety, and licensing laws including responsible serving of alcohol.', 5, 'Teacher 5', 4, ''),
(21, 'Bar manager', 'The indicative content includes: Managing customer care in an effective and efficient manner; stock control procedures in the bar; security and training of bar personnel; problem solving and decision making required; setting operational standards for licensed premises to deliver quality of service; creating a good working environment and effectively using ‘man power; manage and improve the quality of food and drinks.', 6, 'Teacher 8', 5, ''),
(22, 'Restaurant supervisor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. \r\nAccusantium alias, blanditiis eligendi expedita ipsam \r\nminus non numquam quidem reiciendis ut?', 6, 'Teacher 7', 5, ''),
(23, 'Restaurant supervisor', 'This comprehensive course, equips existing Team Leaders and Supervisors (and those considering a career in managing people) with skills to lead and supervise teams successfully. Students will learn how to: (1) analyse situations and make decisions, (2) develop quality customer service plans, (3) plan and organise people, and (4) understand the role of strategic planning and change management.', 8, 'Teacher 4', 7, ''),
(24, 'Restaurant manager', 'Covered in this course are:\r\n\r\n•	Trends in Catering\r\n•	Menu Planning\r\n•	Menu Costing and Pricing\r\n•	Kitchen Operations Management\r\n•	Setting up a Systems based business\r\n•	Being organized as a caterer\r\n•	Hiring and managing staff for catering\r\n•	Finding and dealing with food suppliers\r\n•	Buying the right equipment\r\n•	Getting the Coffee and Tea bits right\r\n•	Simple service skills for staff\r\n•	Legal responsibilities in Food Service\r\n•	Waste management\r\n', 8, 'Teacher 4', 7, ''),
(25, 'HACCP', 'HACCP (Hazard Analysis and Critical Control Point) is a food safety management system.   It is based around a systematic approach to identifying and controlling hazards, whether microbiological, chemical or physical, that could pose a threat to the production of safe food – in simple terms, it involves identifying what could go wrong in a food system and planning how to prevent it.  The course covers information relevant to the delivery of HACCP in a business.', 10, 'Teacher 1', 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_results`
--

CREATE TABLE IF NOT EXISTS `employee_results` (
  `count` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `course_id` int(5) NOT NULL,
  `number_of_modules` int(3) NOT NULL,
  `current_module` int(2) NOT NULL,
  `number_of_quizs` int(3) NOT NULL,
  `current_quiz` int(3) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `completed` int(2) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=774 ;

--
-- Dumping data for table `employee_results`
--

INSERT INTO `employee_results` (`count`, `user_id`, `course_id`, `number_of_modules`, `current_module`, `number_of_quizs`, `current_quiz`, `last_access`, `start_date`, `end_date`, `completed`) VALUES
(617, 43, 5, 12, 0, 11, 0, '2015-07-28 22:02:15', '2015-07-28 17:02:15', '0000-00-00 00:00:00', 0),
(618, 43, 8, 6, 0, 5, 0, '2015-07-28 22:02:19', '2015-07-28 17:02:19', '0000-00-00 00:00:00', 0),
(619, 43, 13, 5, 0, 4, 0, '2015-07-28 22:03:01', '2015-07-28 17:02:25', '2015-07-28 17:03:01', 1),
(620, 43, 16, 6, 0, 5, 0, '2015-07-28 22:02:30', '2015-07-28 17:02:30', '0000-00-00 00:00:00', 0),
(621, 43, 21, 10, 0, 9, 0, '2015-07-28 22:03:05', '2015-07-28 17:02:38', '2015-07-28 17:03:05', 1),
(622, 46, 2, 5, 0, 4, 0, '2015-07-28 22:07:46', '2015-07-28 17:07:14', '2015-07-28 17:07:46', 1),
(623, 46, 5, 12, 0, 11, 0, '2015-07-28 22:07:18', '2015-07-28 17:07:18', '0000-00-00 00:00:00', 0),
(624, 46, 16, 6, 0, 5, 0, '2015-07-28 22:07:49', '2015-07-28 17:07:22', '2015-07-28 17:07:49', 1),
(625, 46, 19, 10, 0, 9, 0, '2015-07-28 22:07:27', '2015-07-28 17:07:27', '0000-00-00 00:00:00', 0),
(626, 46, 22, 10, 0, 9, 0, '2015-07-28 22:07:53', '2015-07-28 17:07:31', '2015-07-28 17:07:53', 1),
(627, 47, 2, 5, 0, 4, 0, '2015-07-29 16:14:48', '2015-07-29 03:15:30', '2015-07-29 11:14:48', 1),
(628, 47, 5, 12, 0, 11, 0, '2015-07-29 08:15:37', '2015-07-29 03:15:37', '0000-00-00 00:00:00', 0),
(629, 47, 9, 6, 0, 5, 0, '2015-07-29 16:14:54', '2015-07-29 03:15:42', '2015-07-29 11:14:54', 1),
(630, 47, 13, 5, 0, 4, 0, '2015-07-29 08:15:46', '2015-07-29 03:15:46', '0000-00-00 00:00:00', 0),
(631, 49, 5, 12, 0, 11, 0, '2015-07-29 11:26:08', '2015-07-29 06:26:08', '0000-00-00 00:00:00', 0),
(632, 49, 10, 5, 0, 4, 0, '2015-07-29 11:26:12', '2015-07-29 06:26:12', '0000-00-00 00:00:00', 0),
(633, 49, 16, 6, 0, 5, 0, '2015-07-29 11:26:45', '2015-07-29 06:26:18', '2015-07-29 06:26:45', 1),
(634, 49, 8, 6, 0, 5, 0, '2015-07-29 11:26:24', '2015-07-29 06:26:24', '0000-00-00 00:00:00', 0),
(635, 49, 20, 10, 0, 9, 0, '2015-07-29 11:26:50', '2015-07-29 06:26:31', '2015-07-29 06:26:50', 1),
(637, 13, 5, 12, 0, 11, 0, '2015-07-29 11:34:54', '2015-07-29 06:34:54', '0000-00-00 00:00:00', 0),
(638, 13, 9, 6, 0, 5, 0, '2015-07-29 11:34:58', '2015-07-29 06:34:58', '0000-00-00 00:00:00', 0),
(639, 13, 13, 5, 0, 4, 0, '2015-07-29 11:35:03', '2015-07-29 06:35:03', '0000-00-00 00:00:00', 0),
(640, 44, 19, 10, 0, 9, 0, '2015-07-29 11:35:15', '2015-07-29 06:35:15', '0000-00-00 00:00:00', 0),
(643, 45, 5, 12, 0, 11, 0, '2015-08-04 08:23:08', '2015-07-29 06:35:31', '2015-08-04 03:23:08', 1),
(644, 45, 13, 5, 0, 4, 0, '2015-07-29 11:35:38', '2015-07-29 06:35:38', '0000-00-00 00:00:00', 0),
(645, 45, 8, 6, 0, 5, 0, '2015-07-29 11:35:42', '2015-07-29 06:35:42', '0000-00-00 00:00:00', 0),
(646, 46, 8, 6, 0, 5, 0, '2015-07-29 11:39:07', '2015-07-29 06:39:07', '0000-00-00 00:00:00', 0),
(647, 46, 10, 5, 0, 4, 0, '2015-07-29 11:39:11', '2015-07-29 06:39:11', '0000-00-00 00:00:00', 0),
(648, 50, 5, 12, 0, 11, 0, '2015-07-29 11:51:30', '2015-07-29 06:50:49', '2015-07-29 06:51:30', 1),
(649, 50, 14, 5, 0, 4, 0, '2015-07-29 11:51:33', '2015-07-29 06:50:53', '2015-07-29 06:51:33', 1),
(650, 50, 16, 6, 0, 5, 0, '2015-07-29 11:50:57', '2015-07-29 06:50:57', '0000-00-00 00:00:00', 0),
(653, 51, 10, 5, 0, 4, 0, '2015-07-29 12:55:17', '2015-07-29 07:54:30', '2015-07-29 07:55:17', 1),
(655, 51, 22, 10, 0, 9, 0, '2015-07-29 12:55:12', '2015-07-29 07:54:41', '2015-07-29 07:55:12', 1),
(660, 43, 15, 6, 0, 5, 0, '2015-07-29 16:15:56', '2015-07-29 11:15:56', '0000-00-00 00:00:00', 0),
(663, 52, 8, 6, 0, 5, 0, '2015-07-29 21:44:39', '2015-07-29 16:43:10', '2015-07-29 16:44:39', 1),
(664, 52, 9, 6, 0, 5, 0, '2015-07-29 21:43:15', '2015-07-29 16:43:15', '0000-00-00 00:00:00', 0),
(665, 52, 17, 8, 0, 7, 0, '2015-07-29 21:44:44', '2015-07-29 16:43:21', '2015-07-29 16:44:44', 1),
(668, 52, 15, 6, 0, 5, 0, '2015-07-29 21:44:24', '2015-07-29 16:44:24', '0000-00-00 00:00:00', 0),
(669, 48, 25, 10, 0, 9, 0, '2015-07-29 22:03:27', '2015-07-29 17:03:27', '0000-00-00 00:00:00', 0),
(670, 48, 24, 10, 0, 9, 0, '2015-07-29 22:04:39', '2015-07-29 17:03:32', '2015-07-29 17:04:39', 1),
(671, 48, 23, 10, 0, 9, 0, '2015-07-29 22:04:43', '2015-07-29 17:03:38', '2015-07-29 17:04:43', 1),
(673, 48, 13, 5, 0, 4, 0, '2015-07-29 22:04:48', '2015-07-29 17:03:53', '2015-07-29 17:04:48', 1),
(674, 48, 5, 12, 0, 11, 0, '2015-07-29 22:04:02', '2015-07-29 17:04:02', '0000-00-00 00:00:00', 0),
(690, 45, 2, 5, 0, 4, 0, '2015-08-04 08:22:34', '2015-08-04 03:22:34', '0000-00-00 00:00:00', 0),
(691, 49, 14, 5, 0, 4, 0, '2015-08-04 08:25:15', '2015-08-04 03:25:15', '0000-00-00 00:00:00', 0),
(692, 59, 2, 5, 0, 4, 0, '2015-08-04 08:26:07', '2015-08-04 03:26:07', '0000-00-00 00:00:00', 0),
(693, 59, 5, 12, 0, 11, 0, '2015-08-04 08:26:12', '2015-08-04 03:26:12', '0000-00-00 00:00:00', 0),
(694, 59, 9, 6, 0, 5, 0, '2015-08-04 08:26:16', '2015-08-04 03:26:16', '0000-00-00 00:00:00', 0),
(695, 59, 8, 6, 0, 5, 0, '2015-08-04 08:26:20', '2015-08-04 03:26:20', '0000-00-00 00:00:00', 0),
(696, 50, 19, 10, 0, 9, 0, '2015-08-04 08:26:53', '2015-08-04 03:26:53', '0000-00-00 00:00:00', 0),
(697, 50, 8, 6, 0, 5, 0, '2015-08-04 08:27:14', '2015-08-04 03:27:14', '0000-00-00 00:00:00', 0),
(703, 55, 2, 5, 0, 4, 0, '2015-08-04 09:37:47', '2015-08-04 04:35:59', '2015-08-04 04:37:47', 1),
(704, 55, 5, 12, 0, 11, 0, '2015-08-04 09:37:50', '2015-08-04 04:36:05', '2015-08-04 04:37:50', 1),
(705, 55, 8, 6, 0, 5, 0, '2015-08-04 09:36:10', '2015-08-04 04:36:10', '0000-00-00 00:00:00', 0),
(706, 55, 9, 6, 0, 5, 0, '2015-08-04 09:36:15', '2015-08-04 04:36:15', '0000-00-00 00:00:00', 0),
(707, 55, 10, 5, 0, 4, 0, '2015-08-04 09:36:32', '2015-08-04 04:36:32', '0000-00-00 00:00:00', 0),
(710, 3, 17, 8, 0, 7, 0, '2015-08-04 09:39:18', '2015-08-04 04:39:18', '0000-00-00 00:00:00', 0),
(711, 3, 20, 10, 0, 9, 0, '2015-08-04 09:39:22', '2015-08-04 04:39:22', '0000-00-00 00:00:00', 0),
(712, 4, 22, 10, 0, 9, 0, '2015-08-04 09:39:31', '2015-08-04 04:39:31', '0000-00-00 00:00:00', 0),
(713, 4, 9, 6, 0, 5, 0, '2015-08-04 09:39:35', '2015-08-04 04:39:35', '0000-00-00 00:00:00', 0),
(714, 4, 17, 8, 0, 7, 0, '2015-08-04 09:39:39', '2015-08-04 04:39:39', '0000-00-00 00:00:00', 0),
(715, 4, 14, 5, 0, 4, 0, '2015-08-04 09:39:43', '2015-08-04 04:39:43', '0000-00-00 00:00:00', 0),
(716, 6, 24, 10, 0, 9, 0, '2015-08-04 09:39:50', '2015-08-04 04:39:50', '0000-00-00 00:00:00', 0),
(717, 6, 8, 6, 0, 5, 0, '2015-08-04 09:39:54', '2015-08-04 04:39:54', '0000-00-00 00:00:00', 0),
(718, 6, 15, 6, 0, 5, 0, '2015-08-04 09:39:58', '2015-08-04 04:39:58', '0000-00-00 00:00:00', 0),
(719, 34, 23, 10, 0, 9, 0, '2015-08-04 09:41:43', '2015-08-04 04:41:43', '0000-00-00 00:00:00', 0),
(720, 34, 16, 6, 0, 5, 0, '2015-08-04 09:42:02', '2015-08-04 04:42:02', '0000-00-00 00:00:00', 0),
(722, 55, 14, 5, 0, 4, 0, '2015-08-04 09:52:06', '2015-08-04 04:52:06', '0000-00-00 00:00:00', 0),
(723, 55, 15, 6, 0, 5, 0, '2015-08-04 09:52:15', '2015-08-04 04:52:15', '0000-00-00 00:00:00', 0),
(724, 9, 13, 5, 0, 4, 0, '2015-08-04 09:53:37', '2015-08-04 04:53:37', '0000-00-00 00:00:00', 0),
(728, 51, 13, 5, 0, 4, 0, '2015-08-05 12:44:58', '2015-08-05 07:44:58', '0000-00-00 00:00:00', 0),
(729, 54, 23, 10, 0, 9, 0, '2015-08-05 12:45:08', '2015-08-05 07:45:08', '0000-00-00 00:00:00', 0),
(730, 56, 15, 6, 0, 5, 0, '2015-08-05 12:45:24', '2015-08-05 07:45:24', '0000-00-00 00:00:00', 0),
(731, 57, 17, 8, 0, 7, 0, '2015-08-05 12:45:34', '2015-08-05 07:45:34', '0000-00-00 00:00:00', 0),
(741, 2, 9, 6, 0, 5, 0, '2015-08-07 10:19:00', '2015-08-05 17:43:34', '2015-08-07 05:19:00', 1),
(742, 2, 15, 6, 0, 5, 0, '2015-08-07 10:19:03', '2015-08-05 17:44:00', '2015-08-07 05:19:03', 1),
(743, 2, 17, 8, 0, 7, 0, '2015-08-05 23:17:02', '2015-08-05 18:17:02', '0000-00-00 00:00:00', 0),
(744, 35, 5, 12, 0, 11, 0, '2015-08-06 14:26:49', '2015-08-06 09:26:49', '0000-00-00 00:00:00', 0),
(745, 35, 8, 6, 0, 5, 0, '2015-08-06 14:26:53', '2015-08-06 09:26:53', '0000-00-00 00:00:00', 0),
(746, 58, 10, 5, 0, 4, 0, '2015-08-06 14:27:33', '2015-08-06 09:27:33', '0000-00-00 00:00:00', 0),
(747, 8, 2, 5, 0, 4, 0, '2015-08-06 20:47:53', '2015-08-06 15:47:17', '2015-08-06 15:47:53', 1),
(748, 8, 5, 12, 0, 11, 0, '2015-08-07 10:14:18', '2015-08-06 15:47:21', '2015-08-07 05:14:18', 1),
(749, 8, 8, 6, 0, 5, 0, '2015-08-07 10:14:22', '2015-08-06 15:47:45', '2015-08-07 05:14:22', 1),
(766, 37, 23, 10, 0, 9, 0, '2015-08-06 23:12:18', '2015-08-06 18:10:53', '0000-00-00 00:00:00', 0),
(767, 37, 16, 6, 0, 5, 0, '2015-08-06 23:10:56', '2015-08-06 18:10:56', '0000-00-00 00:00:00', 0),
(768, 8, 22, 10, 0, 9, 0, '2015-08-06 23:21:52', '2015-08-06 18:21:52', '0000-00-00 00:00:00', 0),
(769, 2, 5, 12, 0, 11, 0, '2015-08-07 16:18:18', '2015-08-07 11:18:18', '0000-00-00 00:00:00', 0),
(770, 36, 24, 10, 0, 9, 0, '2015-08-07 17:35:12', '2015-08-07 12:35:12', '0000-00-00 00:00:00', 0),
(771, 9, 5, 12, 0, 11, 0, '2015-08-09 12:39:48', '2015-08-09 07:39:48', '0000-00-00 00:00:00', 0),
(772, 3, 8, 6, 0, 5, 0, '2015-08-09 15:36:46', '2015-08-09 10:36:46', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_to_course`
--

CREATE TABLE IF NOT EXISTS `employee_to_course` (
  `count` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `number_of_modules` int(3) NOT NULL,
  `current_module` int(2) NOT NULL,
  `number_of_quizs` int(3) NOT NULL,
  `current_quiz` int(2) NOT NULL,
  `completed` int(2) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=901 ;

--
-- Dumping data for table `employee_to_course`
--

INSERT INTO `employee_to_course` (`count`, `user_id`, `company`, `course_id`, `number_of_modules`, `current_module`, `number_of_quizs`, `current_quiz`, `completed`) VALUES
(744, 43, 'Bewleys', 5, 10, 0, 9, 0, 0),
(745, 43, 'Bewleys', 8, 10, 0, 9, 0, 0),
(747, 43, 'Bewleys', 16, 5, 0, 4, 0, 0),
(750, 46, 'Bewleys', 5, 10, 0, 9, 0, 0),
(752, 46, 'Bewleys', 19, 5, 0, 4, 0, 0),
(755, 47, 'Bewleys', 5, 10, 0, 9, 0, 0),
(757, 47, 'Bewleys', 13, 6, 0, 5, 0, 0),
(758, 49, 'Bewleys', 5, 10, 0, 9, 0, 0),
(759, 49, 'Bewleys', 10, 8, 0, 7, 0, 0),
(761, 49, 'Bewleys', 8, 10, 0, 9, 0, 0),
(764, 13, 'Bewleys', 5, 10, 0, 9, 0, 0),
(765, 13, 'Bewleys', 9, 12, 0, 11, 0, 0),
(766, 13, 'Bewleys', 13, 6, 0, 5, 0, 0),
(767, 44, 'Bewleys', 19, 5, 0, 4, 0, 0),
(771, 45, 'Bewleys', 13, 6, 0, 5, 0, 0),
(772, 45, 'Bewleys', 8, 10, 0, 9, 0, 0),
(773, 46, 'Bewleys', 8, 10, 0, 9, 0, 0),
(774, 46, 'Bewleys', 10, 8, 0, 7, 0, 0),
(777, 50, 'Bewleys', 16, 5, 0, 4, 0, 0),
(787, 43, 'Bewleys', 15, 6, 0, 5, 0, 0),
(791, 52, 'Bewleys', 9, 12, 0, 11, 0, 0),
(795, 52, 'Bewleys', 15, 6, 0, 5, 0, 0),
(796, 48, 'Bewleys', 25, 10, 0, 9, 0, 0),
(801, 48, 'Bewleys', 5, 10, 0, 9, 0, 0),
(817, 45, 'Bewleys', 2, 5, 0, 4, 0, 0),
(818, 49, 'Bewleys', 14, 6, 0, 5, 0, 0),
(819, 59, 'Bewleys', 2, 5, 0, 4, 0, 0),
(820, 59, 'Bewleys', 5, 10, 0, 9, 0, 0),
(821, 59, 'Bewleys', 9, 12, 0, 11, 0, 0),
(822, 59, 'Bewleys', 8, 10, 0, 9, 0, 0),
(823, 50, 'Bewleys', 19, 5, 0, 4, 0, 0),
(824, 50, 'Bewleys', 8, 10, 0, 9, 0, 0),
(832, 55, 'HosApp', 8, 10, 0, 9, 0, 0),
(833, 55, 'HosApp', 9, 12, 0, 11, 0, 0),
(834, 55, 'HosApp', 10, 8, 0, 7, 0, 0),
(837, 3, 'HosApp', 17, 10, 0, 9, 0, 0),
(838, 3, 'HosApp', 20, 5, 0, 4, 0, 0),
(839, 4, 'HosApp', 22, 6, 0, 5, 0, 0),
(840, 4, 'HosApp', 9, 12, 0, 11, 0, 0),
(841, 4, 'HosApp', 17, 10, 0, 9, 0, 0),
(842, 4, 'HosApp', 14, 6, 0, 5, 0, 0),
(843, 6, 'HosApp', 24, 8, 0, 7, 0, 0),
(844, 6, 'HosApp', 8, 10, 0, 9, 0, 0),
(845, 6, 'HosApp', 15, 6, 0, 5, 0, 0),
(846, 34, 'HosApp', 23, 8, 0, 7, 0, 0),
(847, 34, 'HosApp', 16, 5, 0, 4, 0, 0),
(849, 55, 'HosApp', 14, 6, 0, 5, 0, 0),
(850, 55, 'HosApp', 15, 6, 0, 5, 0, 0),
(851, 9, 'HosApp', 13, 6, 0, 5, 0, 0),
(855, 51, 'HosApp', 13, 6, 0, 5, 0, 0),
(856, 54, 'HosApp', 23, 8, 0, 7, 0, 0),
(857, 56, 'HosApp', 15, 6, 0, 5, 0, 0),
(858, 57, 'HosApp', 17, 10, 0, 9, 0, 0),
(870, 2, 'HosApp', 17, 10, 0, 9, 0, 0),
(871, 35, 'HosApp', 5, 10, 0, 9, 0, 0),
(872, 35, 'HosApp', 8, 10, 0, 9, 0, 0),
(873, 58, 'HosApp', 10, 8, 0, 7, 0, 0),
(893, 37, 'HosApp', 23, 8, 0, 7, 0, 0),
(894, 37, 'HosApp', 16, 5, 0, 4, 0, 0),
(895, 8, 'HosApp', 22, 6, 0, 5, 0, 0),
(896, 2, 'HosApp', 5, 10, 0, 9, 0, 0),
(897, 36, 'HosApp', 24, 8, 0, 7, 0, 0),
(898, 9, 'HosApp', 5, 10, 0, 9, 0, 0),
(899, 3, 'HosApp', 8, 10, 0, 9, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'member', 'members'),
(3, 'student', 'student'),
(4, 'manager', 'manager'),
(5, 'instructor', 'instructor');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `meaasge_id` int(5) NOT NULL AUTO_INCREMENT,
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `res1` int(5) NOT NULL,
  `res2` int(5) NOT NULL,
  `res3` int(5) NOT NULL,
  `res4` int(5) NOT NULL,
  PRIMARY KEY (`meaasge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`meaasge_id`, `from_id`, `to_id`, `message`, `date`, `res1`, `res2`, `res3`, `res4`) VALUES
(1, 2, 33, 'Hi Pee\n\nThis a message from your leader.\n\nThe Boss\n', '2015-08-03 13:42:26', 0, 0, 0, 0),
(2, 2, 6, 'Hi Ima\n\nThis is a test message from your leader.\n\nThe Boss', '2015-08-03 13:46:07', 0, 0, 0, 0),
(3, 2, 16, 'Hi Ricky\n\nThis is a message from your leader.\n\nThe Boss\n', '2015-08-03 13:52:33', 0, 0, 0, 0),
(4, 2, 51, 'Hi Ima\n\nYou have a message from your leader.\n\nThe leader\n\n\n', '2015-08-03 14:01:15', 0, 0, 0, 0),
(5, 2, 9, 'Hi Imatool\n\nThis is a message from your leader.\n\nThe leader\n', '2015-08-03 14:09:38', 0, 0, 0, 0),
(6, 2, 35, 'Hi Betty\n\nThis is a message from your leader.\n\nThe leader\n', '2015-08-03 14:42:14', 0, 0, 0, 0),
(7, 2, 37, 'Hello John\n\nCan you get up to date with your course work.\n\nThe Boss\n', '2015-08-03 14:43:25', 0, 0, 0, 0),
(8, 2, 35, 'Hello Betty\n\nGreat job.\n\nThe Boss\n', '2015-08-03 14:44:09', 0, 0, 0, 0),
(9, 2, 3, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss\n\n', '2015-08-03 17:56:46', 0, 0, 0, 0),
(10, 2, 4, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:56:54', 0, 0, 0, 0),
(11, 2, 6, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:01', 0, 0, 0, 0),
(12, 2, 7, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:08', 0, 0, 0, 0),
(13, 2, 8, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:23', 0, 0, 0, 0),
(14, 2, 16, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:30', 0, 0, 0, 0),
(15, 2, 33, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:38', 0, 0, 0, 0),
(16, 2, 34, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:47', 0, 0, 0, 0),
(17, 2, 35, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:57:55', 0, 0, 0, 0),
(18, 2, 36, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss#\n', '2015-08-03 17:58:05', 0, 0, 0, 0),
(19, 2, 36, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:58:13', 0, 0, 0, 0),
(20, 2, 37, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:58:20', 0, 0, 0, 0),
(21, 2, 51, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:58:31', 0, 0, 0, 0),
(22, 2, 54, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss\n', '2015-08-03 17:58:38', 0, 0, 0, 0),
(23, 2, 55, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss\n\n', '2015-08-03 17:58:48', 0, 0, 0, 0),
(24, 2, 56, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss\n', '2015-08-03 17:58:56', 0, 0, 0, 0),
(25, 2, 57, 'Test message to employee\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nBest regards\nThe Boss', '2015-08-03 17:59:03', 0, 0, 0, 0),
(26, 2, 57, 'This is a second test message to Michael', '2015-08-03 18:01:04', 0, 0, 0, 0),
(28, 13, 43, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n\n', '2015-08-03 20:04:50', 0, 0, 0, 0),
(29, 13, 44, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:04:56', 0, 0, 0, 0),
(30, 13, 45, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:03', 0, 0, 0, 0),
(31, 13, 46, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:10', 0, 0, 0, 0),
(32, 13, 47, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:17', 0, 0, 0, 0),
(33, 13, 48, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:24', 0, 0, 0, 0),
(34, 13, 49, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:30', 0, 0, 0, 0),
(35, 13, 50, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:38', 0, 0, 0, 0),
(36, 13, 52, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:46', 0, 0, 0, 0),
(37, 13, 50, 'Hi \n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.\n\nRegards\n', '2015-08-03 20:05:57', 0, 0, 0, 0),
(38, 13, 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.', '2015-08-03 20:08:45', 0, 0, 0, 0),
(39, 13, 45, 'Hi Francis\n\nWell done on completing the course.\n\nRegards\nThe Boss\n', '2015-08-04 08:24:29', 0, 0, 0, 0),
(40, 2, 3, 'Hi Rose\n\nWell done completing the course.\n\nRegards\nThe Boss\n\n', '2015-08-04 09:02:22', 0, 0, 0, 0),
(41, 58, 33, 'Hello Pee\n\nThe Boss is watching\n\n', '2015-08-04 09:55:06', 0, 0, 0, 0),
(42, 58, 55, 'Hi Afro Baby\n\nTime for a hair cut.\n\n', '2015-08-04 09:55:40', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `indx` int(11) NOT NULL AUTO_INCREMENT,
  `student_ccv_number` int(3) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `student_card_number` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `payment_processed` tinyint(1) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`indx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`indx`, `student_ccv_number`, `month`, `year`, `student_card_number`, `user_id`, `active`, `payment_processed`, `payment_date`) VALUES
(44, 877, '05', '2017', '2345 6789 3214 8976', 2, 1, 0, '2015-07-31 14:43:12'),
(45, 765, '09', '2016', '8978 5432 7865 9876', 10, 1, 0, '2015-06-19 13:27:41'),
(46, 873, '04', '2020', '8978 5432 7865 9876', 3, 1, 0, '2015-06-19 22:00:36'),
(47, 555, '08', '2017', '8978 5432 7865 9876', 11, 1, 0, '2015-06-20 14:57:44'),
(48, 683, '02', '2018', '4450 3390 0700 1578', 4, 1, 0, '2015-06-20 15:07:57'),
(49, 555, '01', '2018', '9999888877776666', 1, 1, 0, '2015-06-20 20:53:31'),
(50, 765, '10', '2018', '6543 7564 8765 3456', 7, 1, 0, '2015-06-20 22:34:38'),
(51, 587, '02', '2018', '9746 8734 6453 8645', 42, 1, 0, '2015-07-16 20:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_scores`
--

CREATE TABLE IF NOT EXISTS `quiz_scores` (
  `count` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_number` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `first_name`, `last_name`, `company`, `position`, `email`, `phone_number`, `created_on`) VALUES
(6, 'Billy', 'Goat', 'The Farm', 'example_value1', 'billy@thefarm.ie', 2147483647, '2015-06-16 09:33:35'),
(25, 'Thomas', 'Delaney', 'Breeze', 'Manager', 'tom@breezecatcher.com', 2147483647, '2015-07-21 15:11:15'),
(24, 'Thomas', 'Delaney', 'Breeze', 'Manager', 'tom@dsa.ie', 87, '2015-07-05 20:28:11'),
(23, 'Billy', 'Barry', 'The Band', 'Owner', 'billy@thebank.ie', 85, '2015-06-16 14:52:51'),
(22, 'Tom', 'Delaney', 'Breeze', 'Manager', 'tom@dsa.ie', 87, '2015-06-16 14:28:11'),
(18, 'Peggy', 'Pig', 'The farm', 'example_value1', 'peggy@thefarm.ie', 2147483647, '2015-06-16 10:10:43'),
(19, 'Goofey', 'Goose', 'The Farm', 'example_value1', 'g@thefarm.ie', 86258123, '2015-06-16 10:16:19'),
(20, 'Moo', 'Cow', 'The Farm', 'example_value1', 'moo@thefarm.ie', 86987987, '2015-06-16 10:27:55'),
(21, 'Thomas', 'Delaney', 'DSA', 'example_value1', 'tom@dsa.ie', 87147852, '2015-06-16 11:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `count` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bio` varchar(500) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_to_course`
--

CREATE TABLE IF NOT EXISTS `teacher_to_course` (
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `current_module` int(2) NOT NULL,
  `current_quiz` int(3) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `course_id` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`current_module`, `current_quiz`, `course_name`, `course_id`) VALUES
(0, 0, 'Customer service level 2', 9),
(0, 0, 'Bar manager', 21),
(0, 0, 'Introduction to Allergens', 13),
(0, 0, 'Bar supervisor', 20),
(0, 0, 'Calories on menus for trainers & managers', 16),
(0, 0, 'Restaurant supervisor', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `department` varchar(30) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `department`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$HdJFGVrbLV5EZaOXgP/KrODN0ojhK9WJrkZ/FYSZ1L8ncW8FKLx4q', '', 'admin@admin.com', '', NULL, NULL, 'p/.ALkk0.aqSx14qPSvbUe', 1268889823, 1438956853, 1, 'Admin', 'istrator', 'HosApp', 'Sales', '0'),
(2, '46.7.30.62', 'thomas delaney', '$2y$08$MrQZe8qbFMy0Qq1ALtstUOMNyU1/jLhUiu.L.kkZc5tcYvSm9KykW', NULL, 'thomas.delaney@webinnovate.ie', NULL, NULL, NULL, 'ta8jJPcUGfcAwr2yYMcj8O', 1433861169, 1439155930, 1, 'Thomas', 'Delaney', 'HosApp', 'IT', '083 xxx xxx xxx'),
(3, '46.7.30.62', 'rose barrett', '$2y$08$kHgrU99Pabc8FKJQFiq8wu8YZJ.Ut/UeZg77MIVTxdpCIroOxxg9q', NULL, 'rose.barrett@webinnovate.ie', NULL, NULL, NULL, 'v7r/yd3XNb/KyxO02ncyAe', 1433864725, 1435071471, 1, 'Rose', 'Barrett', 'HosApp', 'Front desk', '087 xxx xxx xxxx'),
(4, '46.7.30.62', 'sarah barrows', '$2y$08$FdS9OpBbeK77ArjxHk0CbOW5Db1jWfstdgiIzlxCmxFbxA98M8fvK', NULL, 'sarah.barrow@webinnovate.ie', NULL, NULL, NULL, 'T7AzTESiHlfPdXvf8/yYHO', 1434016858, 1435071206, 1, 'Sarah', 'Barrow', 'HosApp', 'Kitchen', '083 xxx xxx xxx'),
(5, '46.7.30.62', 'daniel griffin', '$2y$08$5ui2AGMoW1tmOv.f9pmjjOpU/9dpdW8W9qCEOF//ADFTtzMxWm2PK', NULL, 'daniel@das.ie', NULL, NULL, NULL, 'mMZeJ085WGaaT4y2yUGku.', 1434023765, 1437081500, 1, 'Daniel', 'Griffin', 'DSA', 'Coding', '083 xxx xxx xxx'),
(6, '46.7.30.62', 'student student', '$2y$08$v/jWLIicywx7BKuwyHmHOuvNR3f4S8Rq4sYIm576kUmL1wQoo7Hru', NULL, 'student@dsa.ie', NULL, NULL, NULL, 'dGjHUOkmcaZvP424KdloWO', 1434098791, 1438120682, 1, 'Ima', 'Student', 'HosApp', 'Restaurant', '087 xxx xxx xxx'),
(7, '46.7.30.62', 'instructor instructor', '$2y$08$f5BJo.NjnEUF4pFkglkE2eglCJvvHFiXULKqZGMwhNvl/Ku7iQ/g6', NULL, 'instructor@dsa.ie', NULL, NULL, NULL, '.iAX3ksucLtV82G2HbLaMu', 1434098838, 1436097088, 1, 'Iwas', 'Instructor', 'HosApp', 'Training', '083 xxx xxx xxx'),
(8, '46.7.30.62', 'manager manager', '$2y$08$tSglhCsdUn8usJ4ErVzyVuhoe131Uv7pxm4ZjU7epNq1eWbswLNSO', NULL, 'manager@dsa.ie', NULL, NULL, NULL, 'wpm7X7mefNaNC4sVdME1BO', 1434098875, 1437081223, 1, 'Iam', 'Manager', 'HosApp', 'Admin Office', '083 xxx xxx xxx'),
(9, '46.7.30.62', 'member member', '$2y$08$g9LGqscVvux/dLzD/3MGg.IrlAD6we2SU3cxS553rgAozKxntRnPq', NULL, 'ima@dsa.ie', NULL, NULL, NULL, 'RT2rVSypn4Y5d5TNPwCg3O', 1434098925, 1438614370, 1, 'Imatool', 'Manager', 'HosApp', 'Back Office', '083 xxx xxx xxx'),
(10, '46.7.30.62', 'billy goat', '$2y$08$1tyAjlHi/yU1NDVY7EZsWuZ58MLKx6Yoo3VbKVA5jdX3rIXuht116', NULL, 'billy@thefarm.ie', NULL, NULL, NULL, 'vKZkoxvEJtJzVPQgf1TQSu', 1434473011, 1437073961, 1, 'Billy', 'Goat', 'Farm', '', '087 xxx xxx xxx'),
(11, '46.7.30.62', 'moo cow', '$2y$08$9RTHlbczZGFfZLzLPwgGbeNFdf48kHr6G.bAiybrqq63aNfkqNtDe', NULL, 'moo@thefarm.ie', NULL, NULL, NULL, 'ZFikX8S/kEyGnbBVJuD5Mu', 1434473600, 1435071602, 1, 'Moo', 'Cow', 'Farm', '', '087 xxx xxx xxx'),
(12, '46.7.30.62', 'daffy duck', '$2y$08$HSQYGlx3uc/QpuzhOCcbweySahbd5Gep5/t5f1gz7GGqV00S0RhfG', NULL, 'daffy@dsa.ie', NULL, NULL, NULL, '0Du5ADddfT7nl4q.3GyMre', 1434641243, 1437071676, 1, 'Daffy', 'Duck', 'The park', '', '087 xxxxxxxxx'),
(13, '46.7.30.62', 'mark bewley', '$2y$08$SuyV6fbS9wXCFmjn0eqXO.7ELA/7HtbGcDabCR7slRULFQAnwoaG2', NULL, 'mark@bewleys.ie', NULL, NULL, NULL, 'keiWKwh7UQv0epefv532me', 1435047856, 1438946660, 1, 'Mark', 'Bewley', 'Bewleys', '', '083 123 456'),
(14, '46.7.30.62', 'cathy_coffee ', '$2y$08$Jjdk6u066/bIwHfYqgXKU.KWVyTHy/LKglC12xrBv5CiVDfVWt9b.', NULL, 'cathy@coffee.ie', NULL, NULL, NULL, 'rDSubjbELprWHT4QSHZyPO', 1435047934, 1435060294, 1, 'Cathy', 'Coffee', 'Coffee_Cathys', '', '087 xxx xxx xxx'),
(15, '46.7.30.62', 'tanya trainee ', '$2y$08$78qePrgp0VhXYvIj7T0VrOC8fPZKbD.TVI6FdDLf4hD/N2p6i8oJO', NULL, 'tanya@coffee.ie', NULL, NULL, NULL, 'd9JcNksr7IC00MOednsmA.', 1435048002, 1435070421, 1, 'Tanya', 'Trainee', 'Coffee_Cathys', '', '083 xxx xxx xxx'),
(16, '188.141.1.4', 'john smith', '$2y$08$mMuy4vvkWEy0S.qfN4CpyOurzuQgh2u1ZKp4gnuhEbdBe1OJpiQF2', NULL, 'ricky@dsa.ie', NULL, NULL, NULL, NULL, 1436043593, NULL, 1, 'Ricky', 'Smith', 'HosApp', 'Kitchen', '083 xxx xxx xxx'),
(23, '188.141.1.4', 'mike delaney', '$2y$08$0eIOGDUn3DfuDmQ4CaxivuFubkH6b8QcnIdmZMOPH1lEuBi7wFDNG', NULL, 'mike@hosapp.ie', NULL, NULL, NULL, NULL, 1436219965, NULL, 1, 'Mike', 'Delaney', 'Breeze', '', '083 xxx xxx xxx'),
(24, '188.141.1.4', 'tom delaney', '$2y$08$Km9AmTkrqTytU1Xv9kIDXOhijW0oqDCpj3vYliwdCLcfruTQq0ELq', NULL, 'tom@breezecatcher.com', NULL, NULL, NULL, NULL, 1436222742, NULL, 1, 'Tom', 'Delaney', 'Breeze', '', '5635881187'),
(25, '188.141.1.4', 'tom delaney1', '$2y$08$BWiy6HH8MeFySkVgRnDnu.qJCE1dsIdemKCfARq5pMOoN5.6fV6T.', NULL, 'tom@delaney.com', NULL, NULL, NULL, NULL, 1436223335, NULL, 1, 'Tom', 'Delaney', 'Breeze', '', '5635881187'),
(26, '188.141.1.4', 'thomas delaney1', '$2y$08$eA1ut8vOPdcGMrvW7tyPNeTyZJxsoy8R86IKTmnCpmO1HwbmwU0JS', NULL, 'jon@delaney.com', NULL, NULL, NULL, NULL, 1436223723, NULL, 1, 'Thomas', 'Delaney', 'Breeze', '', '083 xxx xxx xxx'),
(32, '188.141.1.4', 'rick roeder', '$2y$08$kZjy5fg7/ZHvwK68wz0fgOQHO4jXFgkZqAKQtgEqpcqBuqVSScYZu', NULL, 'nicky@dsa.ie', NULL, NULL, NULL, NULL, 1436272504, NULL, 1, 'Rick', 'Roeder', 'Eartheasy', '', '5635881187'),
(33, '188.141.1.4', 'pee diddy', '$2y$08$2vT6HPGrpe1WQUJKgf0lTu9cxSzxfOLRhdGo2ww.sGcz5KuxPBKj.', NULL, 'pee@hosapp.ie', NULL, NULL, NULL, NULL, 1436272556, 1438559674, 1, 'Pee', 'Diddy', 'HosApp', 'Back Office', '087 xxx xxx xxx'),
(34, '188.141.1.4', 'ima tool', '$2y$08$ka3GSV50ob1f9jB0yMtlbObVIwiL7HliTKqoGLVSOqBhxOsIi2lwK', NULL, 'imatool@dsa.ie', NULL, NULL, NULL, NULL, 1436272602, NULL, 1, 'Ima', 'Tooltoo', 'HosApp', 'Back Office', '083 xxx xxx xxx'),
(35, '188.141.1.4', 'betty foster', '$2y$08$GAo/ZM9dkwVSuYV8USC9GOc9VjZNhVRJdSN9brxKYbPBN5Qy4j0Ja', NULL, 'betsey@dsa.ie', NULL, NULL, NULL, NULL, 1436272651, NULL, 1, 'Betty', 'Foster', 'HosApp', 'Kitchen', '9313592201'),
(36, '188.141.1.4', 'susan tifft', '$2y$08$OWpwW.Kx.UALFNnrkG/vbuHw0OW.zE0l1mPCvaqHPrYyDlT7ozOjW', NULL, 'sue@bh.ie', NULL, NULL, NULL, NULL, 1436272685, 1437646829, 1, 'Susan', 'Tifft', 'HosApp', 'Kitchen', '4108211598'),
(37, '188.141.1.4', 'john tifft', '$2y$08$9j8c6Xo3SSzeXtndX/xCwupmYja9fL8qVsCh4857LjK4BH.W/YhSq', NULL, 'tiffy@dsa.ie', NULL, NULL, NULL, NULL, 1436272736, 1437490655, 1, 'John', 'Tifft', 'HosApp', 'Maintenance dept', '083 xxx xxx xxx'),
(41, '188.141.1.4', 'other othercompany', '$2y$08$fimbmUdrirI8eDlxGGUlgOT1aNDjkYJJs5r33mqkNTWZvfzIlMhy2', NULL, 'other@thefarm.ie', NULL, NULL, NULL, NULL, 1436283774, NULL, 1, 'Other', 'Othercompany', 'Farm', '', '083 xxx xxx xxx'),
(42, '188.141.1.4', 'baba blacksheep', '$2y$08$v3vBI8Zppf0AsVp68FdUUOTMPNdoULAny1z0dFn5NphM5I.PvLXuK', NULL, 'baba@thefarm.ie', NULL, NULL, NULL, '6sdVXyT4TKobBsd9zeMffu', 1436452297, 1437080040, 1, 'Baba', 'Blacksheep', 'Farm', '', '087 xxx xxx xxx'),
(43, '188.141.1.4', 'jessy jones', '$2y$08$Es7w/RKHQh5yeDjlO8C8g.CBEqp9iJBpeodHNfXyrOE2ijGEGDZ5m', NULL, 'jessy@bewleys.ie', NULL, NULL, NULL, NULL, 1436452397, NULL, 1, 'Jessy', 'Jones', 'Bewleys', '', '083 xxx xxx xxx'),
(44, '188.141.1.4', 'looerum lipsum', '$2y$08$lNJKlpRSNZcYtLMf7SpnIuoqcuC1y1ujdvXCpVg3WP0zufBTuRCgG', NULL, 'lor@bewleys.ie', NULL, NULL, NULL, NULL, 1436452591, NULL, 1, 'looerum', 'Lipsum', 'Bewleys', '', '087 xxx xxx xxx'),
(45, '188.141.1.4', 'francis foster', '$2y$08$j3/3JoW1gijeOqFayLTeAOoL6OJZlu2g0qk5i7iNVRtuonXWlJH2i', NULL, 'fr@bewleys.ie', NULL, NULL, NULL, NULL, 1436452718, 1438187665, 1, 'Francis', 'Foster', 'Bewleys', '', '9313592201'),
(46, '188.141.1.4', 'joe smith', '$2y$08$HyhQ64ncgxvDdXT9ewzkT.M9Qdl2ktPYtV0JfnQQ/bx/Kne9EQeNG', NULL, 'joe@fewleys.ie', NULL, NULL, NULL, NULL, 1438121077, NULL, 1, 'Joe', 'Smith', 'Bewleys', 'IT', '083 xxx xxx xxx'),
(47, '188.141.1.4', 'patti watti', '$2y$08$0OTpEWqszXup/kBZ4ok82.oYh8iclQ7A16rgLWS1nvF3dDKr6krby', NULL, 'patti@bewleys.ie', NULL, NULL, NULL, NULL, 1438126431, 1438157943, 1, 'Patti', 'Watti', 'Bewleys', '', '083 xxx xxx xxx'),
(48, '188.141.1.4', 'dessie smith', '$2y$08$JKzHQihab1Qt3SMB2L1/z.k5jzTbnUgnY80SNpnLDaXTqleytA3T2', NULL, 'dessie@bewleys.ie', NULL, NULL, NULL, NULL, 1438157589, NULL, 1, 'Dessie', 'Smith', 'Bewleys', '', '087 xxx xxx xxx'),
(49, '188.141.1.4', 'billy barns', '$2y$08$88FcrLZZexSD4tBmaZfsVe/VR5ZjSG5ViRniwf3/Goev7fXcW2n6a', NULL, 'billy@bewleys.ie', NULL, NULL, NULL, NULL, 1438167347, 1438167764, 1, 'Billy', 'Barns', 'Bewleys', '', '083 xxx xxx xxxx'),
(50, '188.141.1.4', 'jenny anderson', '$2y$08$iwccXR.T15iJco0haHpTh./4MzweKp2q3Ij5lAV6Gb7ZbRVVbk8ta', NULL, 'lenny@bewleys.ie', NULL, NULL, NULL, NULL, 1438170588, 1438679033, 1, 'Jenny', 'Anderson', 'Bewleys', 'Kitchen', '087 xxx xxx xxx'),
(51, '188.141.1.4', 'new user', '$2y$08$lThi9kuqoxeyKSz45ooPMeKcN3dpiD1ojuV/nZXgCQta3hB4I9C5u', NULL, 'jenny@hosapp.ie', NULL, NULL, NULL, NULL, 1438174330, 1438174571, 1, 'Iam', 'Newuser', 'HosApp', 'Kitchen staff', '083 xxx xxx xxxx'),
(52, '188.141.1.4', 'ger carthy', '$2y$08$ULpS3kPrRlilDHy3y1H9eOVo0ufuHjzMr30RV/TLBqpNyyhHVz94.', NULL, 'get@bewleys.ie', NULL, NULL, NULL, NULL, 1438199284, 1438632609, 1, 'Ger', 'Carthy', 'Bewleys', 'Kitchen', '083 xxx xxx xxxx'),
(54, '188.141.1.4', 'iama newuser', '$2y$08$8oeL9vdLjL30PJj8Zut8d.RmPZUCoeAryGjV4X9cu6elYgmftQiGG', NULL, 'iman@hosapp.ie', NULL, NULL, NULL, NULL, 1438344680, NULL, 1, 'Iama', 'Newuser', 'HosApp', 'Kitchen', '083 xxx xxx xxx'),
(55, '188.141.1.4', 'another newuser', '$2y$08$0G4PvYuN5tXPSuQZZeMqqu0jrQNH8.xt4RGPshogxQREEVEwkYqqy', NULL, 'afro@hoaspp.ie', NULL, NULL, NULL, 'RUpJM7WawWNXB9HcEVtxPO', 1438353058, 1438949367, 1, 'Afro', 'Baby', 'HosApp', 'IT', '087 xxx xxx xxx'),
(56, '188.141.1.4', 'sean ncdermot', '$2y$08$SnHTXaYTK7NuPEg5fWycI.wJb67/FfDeDqnqzl69MLXuKkkCwEUWy', NULL, 'seanmc@hosapp.ie', NULL, NULL, NULL, NULL, 1438356681, NULL, 1, 'Sean', 'McDermot', 'HosApp', '', '087 xxx xxx xxx'),
(57, '188.141.1.4', 'michael boyle', '$2y$08$vGn.JxyNtvVKBGU/YW9LuOQGlZmfK48/85m1lQGidPBm6nnTWxuqu', NULL, 'mick@hosapp.ie', NULL, NULL, NULL, NULL, 1438356858, 1438629007, 1, 'Michael', 'Boyle', 'HosApp', '', '087 xxx xxx xxx'),
(58, '188.141.1.4', 'tom delaney2', '$2y$08$QPX1d9Hs.3PgoWapqcuoi.tJ17Poab8ZstZf0FHFcuc7Mkn1C.cKi', NULL, 'tom@hosapp.ie', NULL, NULL, NULL, NULL, 1438634910, 1438813863, 1, 'tom', 'Delaney', 'HosApp', '', '083 xxx xxx xxx'),
(59, '188.141.1.4', 'tom delaney3', '$2y$08$s5ylE1web2KyB1tLeD5s4u5ikQU8xhAa1XXTmbD46gZ9aEqLMtYvq', NULL, 'tom@bewleys.ie', NULL, NULL, NULL, NULL, 1438635065, 1438768442, 1, 'tom', 'Delaney', 'Bewleys', '', '087 xxx xxx xxx'),
(60, '188.141.1.4', 'tom delaney4', '$2y$08$1coCTiBfPsxNHi9wYSRkXervyR/oOssgH0fpAwHJUyiLWk7tJGeaO', NULL, 'tom@farm.ie', NULL, NULL, NULL, NULL, 1438635150, 1438635777, 1, 'Tom', 'Delaney', 'Farm', '', '087 xxx xxx xxx');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(152, 1, 1),
(123, 2, 1),
(122, 3, 1),
(121, 4, 1),
(120, 5, 1),
(119, 6, 3),
(117, 7, 3),
(118, 8, 4),
(108, 9, 4),
(102, 10, 3),
(116, 11, 3),
(54, 12, 3),
(61, 13, 4),
(62, 14, 4),
(63, 15, 3),
(67, 16, 3),
(109, 23, 3),
(74, 24, 2),
(75, 25, 2),
(76, 26, 2),
(82, 32, 2),
(83, 33, 3),
(84, 34, 3),
(115, 35, 3),
(105, 36, 3),
(114, 37, 3),
(113, 41, 3),
(98, 42, 4),
(112, 43, 3),
(111, 44, 3),
(110, 45, 3),
(143, 46, 3),
(128, 47, 3),
(127, 48, 3),
(131, 49, 3),
(132, 50, 3),
(134, 51, 3),
(135, 52, 3),
(137, 54, 3),
(150, 55, 3),
(142, 56, 3),
(141, 57, 3),
(145, 58, 4),
(147, 59, 1),
(149, 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE IF NOT EXISTS `user_image` (
  `user_id` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
