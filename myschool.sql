-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Sep 25, 2009, 12:35 PM
-- 伺服器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `myschool`
--
CREATE DATABASE `myschool` DEFAULT CHARACTER SET big5 COLLATE big5_chinese_ci;
USE `myschool`;

-- --------------------------------------------------------

--
-- 資料表格式： `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `cno` varchar(5) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- 列出以下資料庫的數據： `classes`
--

INSERT INTO `classes` (`sno`, `cno`) VALUES
('S001', 'CS101'),
('S001', 'CS102'),
('S001', 'CS203'),
('S002', 'CS101'),
('S002', 'CS102'),
('S002', 'CS201'),
('S005', 'CS204'),
('S005', 'CS203'),
('S006', 'CS201'),
('S006', 'CS203'),
('S006', 'CS204');

-- --------------------------------------------------------

--
-- 資料表格式： `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cno` varchar(5) NOT NULL DEFAULT '',
  `pname` varchar(12) NOT NULL DEFAULT '',
  `title` varchar(30) NOT NULL DEFAULT '',
  `credits` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`cno`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- 列出以下資料庫的數據： `courses`
--

INSERT INTO `courses` (`cno`, `pname`, `title`, `credits`) VALUES
('CS101', '陳慶新', '計算機概論', 3),
('CS102', '王陽明', '程式語言', 3),
('CS104', '張獻忠', '網頁設計', 3),
('CS201', '陳慶新', '資料結構', 4),
('CS203', '張獻忠', '多媒體網頁設計', 2),
('CS204', '王陽明', '資料庫系統', 4);

-- --------------------------------------------------------

--
-- 資料表格式： `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `name` varchar(12) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `username` varchar(12) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=big5 COMMENT='學生基本資料';

--
-- 列出以下資料庫的數據： `students`
--

INSERT INTO `students` (`sno`, `name`, `address`, `birthday`, `username`, `password`) VALUES
('S001', '陳會安', '台北縣五股鄉', '1967-10-05', 'hueyan', '1234'),
('S002', '江小魚', '台北縣中和市', '1970-01-02', 'smallfish', '1234'),
('S003', '周傑倫', '台北市松山區', '1972-05-01', 'jay', '1234'),
('S004', '蔡依玲', '台北市大安區', '1969-07-22', 'jolin', '1234'),
('S005', '張會妹', '台北巿信義區', '1980-03-01', 'chiang', '1234'),
('S006', '張無忌', '台北市內湖區', '1981-03-01', 'chiang1234', '1234');
