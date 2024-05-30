-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 08:08 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--
create database online_exam;
use online_exam;

CREATE TABLE IF NOT EXISTS `contact_page` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL,
  `querydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`contact_id`, `name`, `email`, `phone`, `subject`, `message`, `querydate`) VALUES
(1, 'sangeeta', '9925587897', 'rohit@gmail.com', 'test series', 'msg', '2017-10-24 11:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive',
  `verifystring` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `querydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`userid`, `name`, `dob`, `gender`, `qualification`, `email`, `password`, `confirmpassword`, `city`, `state`, `pincode`, `address`, `status`, `verifystring`, `usertype`, `querydate`) VALUES
(9, 'Vaibhav', '2017-10-13', 'male', 'B Tech', 'rahul2313@gmail', '123', '123', 'bhopal', 'madhya pradesh', '462043', 'timarni', 'inactive', 'std00145#gg', 'Student', '2017-10-24 06:24:43'),
(12, 'Viraj', '2017-10-03', 'male', 'BE', 'ukm283@gmail.com', '283', '283', 'dhaka', 'bangladesh', '462113', 'bangladesh', 'inactive', 'std00145#gg', 'Student', '2017-10-27 07:09:51'),
(13, 'Upendra', '10/10/2001', 'male', '', 'admin@gmail.com', 'admin', 'admin', '', '', '', '', 'active', '', 'admin', '2017-10-27 08:05:27'),
(15, 'Neelesh Kumar Prajapati', '1988-12-22', 'male', 'MCA', 'nkp@gmail.com', 'asdf@123', 'asdf@123', 'Bhopal', 'MP', '462026', 'bhopal', 'inactive', 'std00145#gg', 'Student', '2017-10-31 06:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `papercat`
--

CREATE TABLE IF NOT EXISTS `papercat` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `catdetail` varchar(200) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `papercat`
--

INSERT INTO `papercat` (`catid`, `catname`, `catdetail`) VALUES
(1, 'HTML', 'Hyper Text Markup Language'),
(2, 'CSS', 'Cascading Style Sheet'),
(3, 'PHP', 'Hypertext Preprocessor'),
(4, 'JAVA', 'Object Oriented Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `qpaper`
--

CREATE TABLE IF NOT EXISTS `qpaper` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option_a` varchar(50) NOT NULL,
  `option_b` varchar(50) NOT NULL,
  `option_c` varchar(50) NOT NULL,
  `option_d` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `qpaper`
--

INSERT INTO `qpaper` (`qid`, `catid`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `status`) VALUES
(1, 1, 'The common element which describe the web page, is ?', 'heading', 'paragraph', 'list', 'all of these', 'D', 'active'),
(2, 1, '  HTML stands for?', 'Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 'A', 'Active'),
(3, 1, ' Which of the following tag is used to mark a beginning of paragraph ?', 'TD', 'br', 'P', 'TR', 'C', 'Active'),
(4, 1, '  From which tag descriptive list starts ?', 'LL', 'DD', 'DL', 'DS', 'C', 'Active'),
(5, 1, ' Correct HTML tag for the largest heading is', 'head', 'h6', 'heading', 'h1', 'D', 'Active'),
(6, 1, 'Markup tags tell the web browser', 'How to organize the page', 'How to display the page', 'How to display message box on page', 'None of these', 'B', 'Active'),
(7, 1, 'www is based on which model?', 'Local-server', 'Client-server', '3-tier', 'None of these', 'B', 'Active'),
(8, 1, '  What are Empty elements and is it valid?', 'No, there is no such terms as Empty Element', 'Empty elements are element with no data', 'No, it is not valid to use Empty Element', 'None of these', 'B', 'Active'),
(9, 1, 'Which of the following attributes of text box control allow to limit the maximum character?', 'size', 'len', 'maxlength', 'all of these', 'C', 'Active'),
(10, 1, 'Web pages starts with which of the following tag?', 'body', 'title', 'html', 'form', 'C', 'Active'),
(11, 2, 'Which of the following is correct about CSS?', 'CSS is used to control the style of a web document', 'CSS is the acronym for ', 'You can write CSS once and then reuse same sheet i', 'All of the above.', 'D', 'Active'),
(12, 2, 'What is css stands for', 'Color Style Sheets', 'Cascade Sheets Style', 'Cascade Style Sheet', 'Cascading Style Sheets', 'D', 'Active'),
(13, 2, ' In css what does h1 can be called as', 'Selector', 'Attribute', 'Value', 'Tag', 'A', 'Active'),
(14, 2, ' In css what does â€œcolor:redâ€ can be called as', 'Selector', 'Rule', 'Declaration', 'None of the above', 'C', 'Active'),
(15, 2, 'Which of the following attributes is used to specify elements to bind style rules to?', 'id', 'class', 'tag', 'all of the mentioned', 'D', 'Active'),
(16, 1, 'Which selectors are used to specify a rule to bind to a particular unique element ?', 'id', 'class', 'tag', 'both B and C', 'A', 'Active'),
(17, 2, 'In css what does â€œfont-sizeâ€ can be called as', 'Selector', 'Rule', 'Property', 'Property-Name', 'D', 'Active'),
(18, 2, 'Which selectors are used to specify a group of elements ?', 'id', 'class', 'tag', 'both B and C', 'B', 'Active'),
(19, 2, 'Which of the following tag is used to embed css in html page?', 'script', 'style', 'css', '!DOCTYPE html', 'B', 'Active'),
(20, 2, ' Where in an HTML document is the correct place to refer to an external style sheet?', 'In the head section', 'At the top of the document', 'In the body section', 'At the end of the document', 'A', 'Active'),
(21, 3, 'What does PHP stand for?', 'Personal Home Page', 'Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'B', 'Active'),
(22, 3, 'Which version of PHP introduced Try/catch Exception?', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 'B', 'Active'),
(23, 3, 'Which of the looping statements is/are supported by PHP?', 'for loop', ' do-while loop', 'foreach loop', 'all of the above.', 'D', 'Active'),
(24, 3, 'We can use ___ to comment a single line?', '/?', '//', '#', '/* */', 'C', 'Active'),
(25, 3, 'Which of the following PHP statements will not output Hello World on the screen?', 'echo (â€œHello Worldâ€);', 'print (â€œHello Worldâ€);', 'printf (â€œHello Worldâ€);', 'sprintf (â€œHello Worldâ€);', 'D', 'Active'),
(26, 3, 'Which of the below statements is equivalent to $add += $add ?', '$add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', 'B', 'Active'),
(27, 3, 'Which version of PHP introduced the instanceof keyword?', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 'B', 'Active'),
(28, 3, 'Which one of the following functions is used to determine whether a class exists?', 'exist()', 'exist_class()', 'class_exist()', '__exist()', 'C', 'Active'),
(29, 3, 'PHPâ€™s numerically indexed array begin with position', '1', '2', '0', '-1', 'C', 'Active'),
(30, 3, 'Which of the functions is used to sort an array in descending order?', 'rsort()', 'asort()', 'sort()', 'dsort()', 'A', 'Active'),
(31, 4, 'Which data type value is returned by all transcendental math functions?', 'int', 'float', 'long', 'double', 'D', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `testid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `totalq` int(11) NOT NULL,
  `correctans` int(11) NOT NULL,
  `wrongans` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  PRIMARY KEY (`reportid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `testid`, `catid`, `totalq`, `correctans`, `wrongans`, `email`) VALUES
(7, 9196, 1, 2, 0, 2, 'af@gmail'),
(8, 4599, 3, 2, 2, 0, 'af@gmail'),
(9, 9305, 1, 4, 2, 2, 'af@gmail'),
(10, 3434, 1, 4, 1, 3, 'af@gmail'),
(11, 6859, 3, 2, 1, 1, 'af@gmail'),
(12, 9427, 2, 2, 1, 1, 'af@gmail'),
(13, 8239, 3, 2, 1, 1, 'af@gmail'),
(14, 3177, 1, 2, 0, 2, 'af@gmail'),
(15, 3923, 3, 3, 2, 1, 'af@gmail'),
(16, 8577, 2, 2, 1, 1, 'af@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `testdata`
--

CREATE TABLE IF NOT EXISTS `testdata` (
  `testdataid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `testid` int(11) NOT NULL,
  PRIMARY KEY (`testdataid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

--
-- Dumping data for table `testdata`
--

INSERT INTO `testdata` (`testdataid`, `qid`, `answer`, `email`, `testid`) VALUES
(119, 21, 'B', 'af@gmail', 1587),
(120, 21, 'C', 'af@gmail', 1587),
(121, 25, 'C', 'af@gmail', 1587),
(122, 29, 'C', 'af@gmail', 1587),
(123, 29, 'A', 'af@gmail', 1587),
(124, 26, 'B', 'af@gmail', 1587),
(125, 26, 'C', 'af@gmail', 1587),
(126, 11, 'C', 'af@gmail', 8117),
(127, 13, 'D', 'af@gmail', 8117),
(128, 28, 'C', 'af@gmail', 7714),
(129, 24, 'C', 'af@gmail', 7714),
(130, 26, 'B', 'af@gmail', 7714),
(131, 29, 'B', 'af@gmail', 7714),
(132, 10, 'C', 'af@gmail', 2052),
(133, 10, 'B', 'af@gmail', 2052),
(134, 11, 'B', 'af@gmail', 2173),
(135, 17, 'C', 'af@gmail', 7977),
(136, 21, 'C', 'af@gmail', 7649),
(137, 23, 'B', 'af@gmail', 4197),
(138, 24, 'B', 'af@gmail', 4197),
(139, 30, 'C', 'af@gmail', 4197),
(140, 9, 'C', 'af@gmail', 6650),
(141, 16, 'D', 'af@gmail', 6650),
(142, 9, 'C', 'af@gmail', 6650),
(143, 9, 'D', 'af@gmail', 6650),
(144, 7, 'B', 'af@gmail', 6650),
(145, 17, 'D', 'af@gmail', 2484),
(146, 19, 'B', 'af@gmail', 2484),
(147, 15, 'B', 'af@gmail', 2484),
(148, 17, 'D', 'af@gmail', 2484),
(149, 20, 'A', 'af@gmail', 2484),
(150, 13, 'D', 'af@gmail', 2484),
(151, 18, 'B', 'af@gmail', 2484),
(152, 13, 'D', 'af@gmail', 1279),
(153, 11, 'D', 'af@gmail', 1279),
(154, 11, 'D', 'af@gmail', 1279),
(155, 18, '', 'af@gmail', 1279),
(156, 17, 'D', 'af@gmail', 1279),
(157, 6, 'A', 'af@gmail', 9867),
(158, 8, 'A', 'af@gmail', 9867),
(159, 7, 'A', 'af@gmail', 9867),
(160, 10, 'A', 'af@gmail', 9867),
(161, 9, 'A', 'af@gmail', 9867),
(162, 10, 'C', 'af@gmail', 9867),
(163, 4, 'C', 'af@gmail', 9364),
(164, 3, 'A', 'af@gmail', 9364),
(165, 7, 'B', 'af@gmail', 9364),
(166, 7, 'A', 'af@gmail', 1480),
(167, 5, 'B', 'af@gmail', 1480),
(168, 5, 'A', 'af@gmail', 1480),
(169, 16, 'A', 'af@gmail', 1480),
(170, 9, 'B', 'af@gmail', 1480),
(171, 6, 'D', 'af@gmail', 1480),
(172, 8, 'B', 'af@gmail', 1480),
(173, 1, 'B', 'af@gmail', 1480),
(174, 16, 'A', 'af@gmail', 1480),
(175, 1, 'D', 'af@gmail', 1480),
(176, 1, 'C', 'af@gmail', 1480),
(177, 6, 'B', 'af@gmail', 1480),
(178, 3, 'A', 'af@gmail', 9196),
(179, 1, 'C', 'af@gmail', 9196),
(180, 24, 'C', 'af@gmail', 4599),
(181, 30, 'A', 'af@gmail', 4599),
(182, 5, 'D', 'af@gmail', 9305),
(183, 10, 'C', 'af@gmail', 9305),
(184, 16, 'B', 'af@gmail', 9305),
(185, 7, 'C', 'af@gmail', 9305),
(186, 16, 'B', 'af@gmail', 3434),
(187, 10, 'C', 'af@gmail', 3434),
(188, 9, 'B', 'af@gmail', 3434),
(189, 9, 'D', 'af@gmail', 3434),
(190, 21, 'B', 'af@gmail', 6859),
(191, 29, 'D', 'af@gmail', 6859),
(192, 14, 'C', 'af@gmail', 9427),
(193, 20, 'B', 'af@gmail', 9427),
(194, 27, 'B', 'af@gmail', 8239),
(195, 29, 'D', 'af@gmail', 8239),
(196, 1, 'B', 'af@gmail', 3177),
(197, 16, 'D', 'af@gmail', 3177),
(198, 28, 'C', 'af@gmail', 3923),
(199, 22, 'C', 'af@gmail', 3923),
(200, 24, 'C', 'af@gmail', 3923),
(201, 13, 'A', 'af@gmail', 8577),
(202, 19, 'C', 'af@gmail', 8577);

-- --------------------------------------------------------

--
-- Table structure for table `testr`
--

CREATE TABLE IF NOT EXISTS `testr` (
  `testid` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testr`
--

INSERT INTO `testr` (`testid`, `email`, `catid`) VALUES
(1279, 'af@gmail', 2),
(1480, 'af@gmail', 1),
(1587, 'af@gmail', 3),
(1745, 'af@gmail', 2),
(2052, 'af@gmail', 1),
(2173, 'af@gmail', 2),
(2484, 'af@gmail', 2),
(3177, 'af@gmail', 1),
(3434, 'af@gmail', 1),
(3923, 'af@gmail', 3),
(4197, 'af@gmail', 3),
(4488, 'af@gmail', 2),
(4599, 'af@gmail', 3),
(6650, 'af@gmail', 1),
(6859, 'af@gmail', 3),
(7649, 'af@gmail', 3),
(7714, 'af@gmail', 3),
(7920, 'af@gmail', 1),
(7977, 'af@gmail', 2),
(8117, 'af@gmail', 2),
(8239, 'af@gmail', 3),
(8577, 'af@gmail', 2),
(9196, 'af@gmail', 1),
(9305, 'af@gmail', 1),
(9364, 'af@gmail', 1),
(9427, 'af@gmail', 2),
(9867, 'af@gmail', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
