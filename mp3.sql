-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2015 at 06:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mp3`
--
CREATE DATABASE IF NOT EXISTS `mp3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mp3`;

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE IF NOT EXISTS `baihat` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tenbaihat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `duongdan` varchar(200) NOT NULL,
  `loibaihat` varchar(9999) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `casy`, `tacgia`, `theloai`, `duongdan`, `loibaihat`, `luotnghe`) VALUES
(40, 'Bad Boy', 'Đông Nhi', '', 'Việt Nam', 'nhac/Dong Nhi - Bad Boy.mp3', '', 17),
(46, 'Khuôn Mặt Đáng Thương', 'Sơn Tùng M-TP', '', 'Việt Nam', 'nhac/Khuon Mat Dang Thuong.mp3', '', 12),
(47, 'Thu Cuối', 'Yanbi ft. Mr T ft. Hằng BingBoong', '', 'Việt Nam', 'nhac/Thu Cuoi.mp3', '', 10),
(45, 'Gạt Đi Nước Mắt', 'Noo Phước Thịnh ft. Tonny Việt', '', 'Việt Nam', 'nhac/Gat di nuoc mat.mp3', '', 9),
(48, 'Because I Miss You', 'Jung Yong Hwa', '', 'Hàn Quốc', 'nhac/Because I Miss You - Jung Yong Hwa.mp3', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `baihathot`
--

CREATE TABLE IF NOT EXISTS `baihathot` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tenbaihat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `duongdan` varchar(200) NOT NULL,
  `loibaihat` varchar(9999) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Table structure for table `baihatmoi`
--

CREATE TABLE IF NOT EXISTS `baihatmoi` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tenbaihat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `duongdan` varchar(200) NOT NULL,
  `loibaihat` varchar(9999) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Table structure for table `bangquyen`
--

CREATE TABLE IF NOT EXISTS `bangquyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `casy`
--

CREATE TABLE IF NOT EXISTS `casy` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `casy` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `casy`
--

INSERT INTO `casy` (`id`, `casy`) VALUES
(78, '365 Daband'),
(77, 'Đông Nhi'),
(76, 'Sơn Tùng M-TP');

-- --------------------------------------------------------

--
-- Table structure for table `chuchay`
--

CREATE TABLE IF NOT EXISTS `chuchay` (
  `id` int(11) NOT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chuchay`
--

INSERT INTO `chuchay` (`id`, `noidung`) VALUES
(1, 'Web nghe nhạc trực tuyền Online Mp3 | Phát Nguyễn');

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE IF NOT EXISTS `chude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chude` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`id`, `chude`) VALUES
(10, 'Nhạc Hot Việt'),
(11, 'Nhạc Chờ Hot'),
(12, 'Nhạc Việt Mới'),
(13, 'Nhạc Hot Rap Việt'),
(15, 'Hôm Nay Nghe Gì? '),
(16, 'Love Songs'),
(17, 'Nhạc Sàn'),
(18, 'Nhạc Giáng Sinh');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(10) NOT NULL,
  `noidung` varchar(9999) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `noidung`) VALUES
(1, '<h1 style="font-family: Arial, Verdana; font-size: 10pt; font-weight: normal; text-align: center;"><hr></h1><h3 style="font-family: Arial, Verdana; font-size: 10pt; text-align: center;"><br></h3><blockquote style="margin: 0px 0px 0px 40px; border: none; padding: 0px;"><h1 style="font-family: Arial, Verdana; font-size: 10pt; text-align: center;"></h1><h4 style="text-align: center;"><font color="#ff0000" size="5" face="Courier New"><u>Phát Nguyễn</u></font></h4><div style="font-family: Arial, Verdana; font-size: 10pt;"><font color="#ff0000"><u><br></u></font></div><div style="font-size: 10pt; text-align: center;"><font color="#ff0000" face="Comic Sans MS"><b><u>Liên hệ Facebook:</u></b>&nbsp;http://facebook.com/phatvalong<b>&nbsp;<u>Điện Thoại:</u> </b>01227100449</font></div></blockquote><hr style="font-family: Arial, Verdana; font-size: 10pt; font-weight: normal; font-style: normal; font-variant: normal; line-height: normal;">');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `noidung`) VALUES
(1, 'images/logo/header.png');

-- --------------------------------------------------------

--
-- Table structure for table `luot`
--

CREATE TABLE IF NOT EXISTS `luot` (
  `luot` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luot`
--

INSERT INTO `luot` (`luot`) VALUES
(1529);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tinhtrang` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `tinhtrang`) VALUES
(1, 'OK'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `noidung`) VALUES
(17, 'Nhạc Quốc Tế'),
(16, 'Việt Nam'),
(19, 'Âu Mỹ'),
(20, 'Hàn Quốc'),
(21, 'Rap Việt'),
(22, 'Cách Mạng');

-- --------------------------------------------------------

--
-- Table structure for table `timelog`
--

CREATE TABLE IF NOT EXISTS `timelog` (
  `id` int(255) NOT NULL,
  `time` date NOT NULL,
  `day` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'OK',
  `gioitinh` varchar(4) NOT NULL,
  `ngaysinh` varchar(30) NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `status`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Phát Nguyễn', 'OK', '', '', 'RAH', 'phatvalong@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `session` varchar(99) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('r6cggvec4l6kdbei4fingr8vp1', '1434026198');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
