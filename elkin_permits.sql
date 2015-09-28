-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 12:53 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elkins_permits`
--
CREATE DATABASE IF NOT EXISTS `elkins_permits` DEFAULT CHARACTER SET ascii COLLATE ascii_general_ci;
USE `elkins_permits`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `update_submission`(IN `submitter` VARCHAR(255), IN `json` VARBINARY(30000), IN `id` INT)
    MODIFIES SQL DATA
BEGIN
UPDATE `submissions` SET `identifier` = submitter, `data_string` = json WHERE `submission_number` = id; 
END$$

CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `upload_attachment`(IN `fileName` VARCHAR(30), IN `fileType` VARCHAR(30), IN `fileSize` INT, IN `content` MEDIUMBLOB, IN `submission_id` INT)
    MODIFIES SQL DATA
BEGIN
INSERT INTO attachments (`name`, `type`, `size`, `content`,`submission_number`) 
VALUES (fileName, fileType, fileSize, content, submission_id);
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `submit_form`(`submitter` VARCHAR(255), `form_name` VARCHAR(255), `json` VARBINARY(30000)) RETURNS bigint(64)
    MODIFIES SQL DATA
BEGIN
INSERT INTO `submissions` (`identifier`, `form_name`, `Date/Time`, `data_string`) 
VALUES (submitter, form_name, now(), json);
RETURN LAST_INSERT_ID();
END$$

CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `verify_submission`(`p_identifier` VARCHAR(255), `p_form_name` VARCHAR(255), `p_data_string` VARBINARY(30000)) RETURNS tinyint(1)
    READS SQL DATA
BEGIN
DECLARE stored_identifier VARCHAR(255);
DECLARE stored_form_name VARCHAR(255);
DECLARE stored_data_string VARBINARY(30000);

SELECT identifier, form_name, data_string 
INTO stored_identifier, stored_form_name, stored_data_string
FROM submissions WHERE submission_number = LAST_INSERT_ID();

IF p_identifier <> stored_identifier THEN RETURN false; END IF;
IF p_form_name <> stored_form_name THEN RETURN false; END IF;
IF p_data_string <> stored_data_string THEN RETURN false; END IF;

RETURN true;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `content` mediumblob NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `submission_number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=234 ;

--
-- Table structure for table `submissions`
--

CREATE TABLE IF NOT EXISTS `submissions` (
  `submission_number` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) DEFAULT NULL,
  `form_name` varchar(255) NOT NULL,
  `Date/Time` datetime NOT NULL,
  `data_string` varchar(30000) DEFAULT NULL,
  PRIMARY KEY (`submission_number`),
  UNIQUE KEY `submission_number` (`submission_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=83 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
