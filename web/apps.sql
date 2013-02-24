-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 02:57 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `appID` int(11) NOT NULL AUTO_INCREMENT,
  `applink` varchar(255) NOT NULL,
  PRIMARY KEY (`appID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` VALUES(1, 'apps-list/images/7x7.png');
INSERT INTO `apps` VALUES(2, 'apps-list/images/Airbnb.png');
INSERT INTO `apps` VALUES(3, 'apps-list/images/Ask a Doctor.png');
INSERT INTO `apps` VALUES(4, 'apps-list/images/Bubbles.png');
INSERT INTO `apps` VALUES(5, 'apps-list/images/Bump.png');
INSERT INTO `apps` VALUES(6, 'apps-list/images/Calc.png');
INSERT INTO `apps` VALUES(7, 'apps-list/images/Cymera.png');
INSERT INTO `apps` VALUES(8, 'apps-list/images/Dropbox.png');
INSERT INTO `apps` VALUES(9, 'apps-list/images/Easy Launcher.png');
INSERT INTO `apps` VALUES(10, 'apps-list/images/E-Bay.png');
INSERT INTO `apps` VALUES(11, 'apps-list/images/Echofon.png');
INSERT INTO `apps` VALUES(12, 'apps-list/images/Espier.png');
INSERT INTO `apps` VALUES(13, 'apps-list/images/Evernote.png');
INSERT INTO `apps` VALUES(14, 'apps-list/images/Exchange.png');
INSERT INTO `apps` VALUES(15, 'apps-list/images/Facebook.png');
INSERT INTO `apps` VALUES(16, 'apps-list/images/Flipboard.png');
INSERT INTO `apps` VALUES(17, 'apps-list/images/Foursquare.png');
INSERT INTO `apps` VALUES(18, 'apps-list/images/Fruit Ninja.png');
INSERT INTO `apps` VALUES(19, 'apps-list/images/Geostar.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(1, 'aaaaa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'janvan.valleramos@yahoo.com');
INSERT INTO `user` VALUES(2, 'vvvv', '54fd1711209fb1c0781092374132c66e79e2241b', 'vie@yy.com');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `appID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  KEY `appID` (`appID`,`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

