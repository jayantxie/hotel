-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 04 日 08:42
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `ID` char(18) NOT NULL,
  `phonenum` char(11) NOT NULL,
  `psw` varchar(18) NOT NULL,
  `state` varchar(4) NOT NULL,
  PRIMARY KEY (`phonenum`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `customer`
--


-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `num` char(4) NOT NULL,
  `psw` varchar(18) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`num`, `psw`) VALUES
('1001', '13291883598'),
('1002', '1076408511');

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomnum` char(4) NOT NULL,
  `state` varchar(8) DEFAULT NULL,
  `price` float(5,1) NOT NULL,
  PRIMARY KEY (`roomnum`),
  UNIQUE KEY `roomnum` (`roomnum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `room`
--

INSERT INTO `room` (`roomnum`, `state`, `price`) VALUES
('2001', '空房', '80.0'),
('2002', '空房', '80.0'),
('2003', '空房', '80.0'),
('2004', '空房', '80.0'),
('2005', '空房', '80.0'),
('2006', '空房', '80.0'),
('2010', '空房', '90.0'),
('2011', '空房', '90.0'),
('2012', '空房', '90.0'),
('2020', '空房', '100.0' ),
('2021', '空房', '100.0'),
('2022', '空房', '100.0'),
('2030', '空房', '110.0'),
('2031', '空房', '110.0'),
('2032', '空房', '110.0'),
('3001', '空房', '199.0'),
('3002', '空房', '199.0'),
('3011', '空房', '30.0'),
('3012', '空房', '30.0');


-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `phonenum` char(9) NOT NULL,
  `roomnum` char(4) NOT NULL,
  `checkdate` char(10) NOT NULL,
  `state` varchar(8) DEFAULT NULL,
  `cost` float(5,1) NOT NULL,
  `discount` float(4,2) NOT NULL,
  PRIMARY KEY (`phonenum`),
  UNIQUE KEY `phonenum` (`phonenum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

