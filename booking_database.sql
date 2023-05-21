-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cordova_database2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_customer` (IN `CUS_LNAME` VARCHAR(50), IN `CUS_FNAME` VARCHAR(50), IN `CUS_INITIAL` VARCHAR(2), IN `CUS_AREACODE` INT(11), IN `CUS_PHONE` VARCHAR(12), IN `CUS_BALANCE` DECIMAL(10,2))   BEGIN
INSERT INTO customer (CUS_LNAME,CUS_FNAME,CUS_INITIAL,CUS_AREACODE,CUS_PHONE,CUS_BALANCE)
VALUES(CUS_LNAME,CUS_FNAME,CUS_INITIAL,CUS_AREACODE,CUS_PHONE,CUS_BALANCE);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_employee` (IN `EMP_TITLE` VARCHAR(30), IN `EMP_LNAME` VARCHAR(50), IN `EMP_FNAME` VARCHAR(50), IN `EMP_INITIAL` VARCHAR(2), IN `EMP_JOB` VARCHAR(50), IN `EMP_HIRE_DATE` DATE)   BEGIN
INSERT INTO employee (EMP_TITLE,EMP_LNAME,EMP_FNAME,EMP_INITIAL,EMP_JOB,EMP_HIRE_DATE)
VALUES (EMP_TITLE,EMP_LNAME,EMP_FNAME,EMP_INITIAL,EMP_JOB,EMP_HIRE_DATE);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_model` (IN `MOD_MANUFACTURER` VARCHAR(50), IN `MOD_NAME` VARCHAR(50), IN `MOD_CHG_MILE` VARCHAR(30))   BEGIN
INSERT INTO model (MOD_MANUFACTURER,MOD_NAME,MOD_CHG_MILE)
VALUES (MOD_MANUFACTURER,MOD_NAME,MOD_CHG_MILE);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_customer` (IN `CUS_CODE` INT(11))   BEGIN
DELETE FROM customer WHERE customer.CUS_CODE = CUS_CODE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_employee` (IN `EMP_NUM` INT(11))   BEGIN
DELETE FROM employee WHERE employee.EMP_NUM = EMP_NUM;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_model` (IN `MOD_CODE` INT(11))   BEGIN
DELETE FROM model WHERE model.MOD_CODE = MOD_CODE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search_customer` (IN `CUS_FNAME` VARCHAR(50))   BEGIN
SELECT * FROM customer WHERE customer.CUS_FNAME = CUS_FNAME;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search_employee` (IN `EMP_FNAME` VARCHAR(50))   BEGIN
SELECT * FROM employee WHERE employee.EMP_FNAME = EMP_FNAME;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search_model` (IN `MOD_MANUFACTURER` VARCHAR(50))   BEGIN
SELECT * FROM model WHERE model.MOD_MANUFACTURER = MOD_MANUFACTURER;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_customer` (IN `CUS_LNAME` VARCHAR(50), IN `CUS_FNAME` VARCHAR(50), IN `CUS_INITIAL` VARCHAR(2), IN `CUS_AREACODE` INT(11), IN `CUS_PHONE` VARCHAR(12), IN `CUS_BALANCE` DECIMAL(10,2), IN `CUS_CODE` INT(11))   BEGIN
UPDATE customer SET CUS_LNAME = CUS_LNAME, CUS_FNAME = CUS_FNAME, CUS_INITIAL = CUS_INITIAL, CUS_AREACODE = CUS_AREACODE, CUS_PHONE = CUS_PHONE, CUS_BALANCE = CUS_BALANCE 
WHERE customer.CUS_CODE = CUS_CODE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_employee` (IN `EMP_TITLE` VARCHAR(30), IN `EMP_LNAME` VARCHAR(50), IN `EMP_FNAME` VARCHAR(50), IN `EMP_INITIAL` VARCHAR(2), IN `EMP_JOB` VARCHAR(50), IN `EMP_HIRE_DATE` DATE, IN `EMP_NUM` INT(11))   BEGIN
UPDATE employee SET EMP_TITLE = EMP_TITLE,EMP_LNAME = EMP_LNAME,EMP_FNAME = EMP_FNAME, EMP_INITIAL = EMP_INITIAL,EMP_JOB = EMP_JOB,EMP_HIRE_DATE = EMP_HIRE_DATE 
WHERE employee.EMP_NUM = EMP_NUM;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_model` (IN `MOD_MANUFACTURER` VARCHAR(50), IN `MOD_NAME` VARCHAR(50), IN `MOD_CHG_MILE` VARCHAR(30), IN `MOD_CODE` INT(11))   BEGIN
UPDATE model SET MOD_MANUFACTURER = MOD_MANUFACTURER, MOD_NAME = MOD_NAME, MOD_CHG_MILE = MOD_CHG_MILE 
WHERE model.MOD_CODE = MOD_CODE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_customer` ()   BEGIN
SELECT * FROM customer;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_employee` ()   BEGIN
SELECT * FROM employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_model` ()   BEGIN
SELECT * FROM model;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `AC_NUMBER` int(11) NOT NULL,
  `MOD_CODE` int(11) NOT NULL,
  `AC_TTAF` varchar(20) DEFAULT NULL,
  `AC_TTEL` varchar(20) DEFAULT NULL,
  `AC_TTER` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`AC_NUMBER`, `MOD_CODE`, `AC_TTAF`, `AC_TTEL`, `AC_TTER`) VALUES
(1, 1, '20', '20', '20'),
(2, 1, '30', '30', '30'),
(3, 2, '20', '10', '20'),
(4, 1, '20', '30', '20'),
(5, 2, '20', '30', '20');

-- --------------------------------------------------------

--
-- Table structure for table `charter`
--

CREATE TABLE `charter` (
  `CHAR_TRIP` int(15) NOT NULL,
  `CHAR_DATE` date DEFAULT NULL,
  `AC_NUMBER` int(11) DEFAULT NULL,
  `CHAR_DESTINATION` varchar(50) DEFAULT NULL,
  `CHAR_DISTANCE` decimal(10,2) DEFAULT NULL,
  `CHAR_HOURS_FLOWN` decimal(10,2) DEFAULT NULL,
  `CHAR_HOURS_WAIT` decimal(10,2) DEFAULT NULL,
  `CHAR_FUEL_GALLONS` decimal(10,2) DEFAULT NULL,
  `CHAR_OIL_QTS` decimal(10,2) DEFAULT NULL,
  `CUS_CODE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charter`
--

INSERT INTO `charter` (`CHAR_TRIP`, `CHAR_DATE`, `AC_NUMBER`, `CHAR_DESTINATION`, `CHAR_DISTANCE`, `CHAR_HOURS_FLOWN`, `CHAR_HOURS_WAIT`, `CHAR_FUEL_GALLONS`, `CHAR_OIL_QTS`, `CUS_CODE`) VALUES
(1, '0000-00-00', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $row i', 0.00, 0.00, 0.00, 0.00, 0.00, 3),
(2, '0000-00-00', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $row i', 0.00, 0.00, 0.00, 0.00, 0.00, 7),
(3, '0000-00-00', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $row i', 0.00, 0.00, 0.00, 0.00, 0.00, 8),
(8, '2023-05-16', 2, 'MANILA', 0.00, 0.00, 0.00, 0.00, 0.00, 13),
(9, '2023-05-24', 1, 'MANILA', 0.00, 0.00, 0.00, 0.00, 0.00, 14),
(10, '2023-05-24', 4, 'BOHOL', 0.00, 0.00, 0.00, 0.00, 0.00, 15),
(11, '2023-05-09', 3, 'BOHOL', 0.00, 0.00, 0.00, 0.00, 0.00, 16),
(13, '2023-05-24', 3, 'BOHOL', 0.00, 0.00, 0.00, 0.00, 0.00, 18),
(20, '2023-05-26', 2, 'MANILA', 0.00, 0.00, 0.00, 0.00, 0.00, 25),
(22, '2023-05-24', 1, 'MANILA', 0.00, 0.00, 0.00, 0.00, 0.00, 27);

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `CHAR_TRIP` varchar(15) NOT NULL,
  `EMP_NUM` int(11) NOT NULL,
  `CREW_JOB` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUS_CODE` int(11) NOT NULL,
  `CUS_LNAME` varchar(50) DEFAULT NULL,
  `CUS_FNAME` varchar(50) DEFAULT NULL,
  `CUS_INITIAL` varchar(2) DEFAULT NULL,
  `CUS_AREACODE` int(11) DEFAULT NULL,
  `CUS_PHONE` varchar(12) DEFAULT NULL,
  `CUS_BALANCE` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_CODE`, `CUS_LNAME`, `CUS_FNAME`, `CUS_INITIAL`, `CUS_AREACODE`, `CUS_PHONE`, `CUS_BALANCE`) VALUES
(1, 'Cordovaaaaaasas', 'Charles', 's', 991, '2199216', 444444.00),
(3, 'Cordova', 'Charles', 'B', 991, '2199216', 0.00),
(4, 'Cordova', 'TAE', 'IG', 991, '2199216', 0.00),
(5, 'ASDASD', 'ASDASD', 'A', 991, '2199216', 0.00),
(6, 'Cordova', 'Charles', 'A', 991, '2199216', 0.00),
(7, 'Cordova', 'rAJ', 'S', 991, '2199216', 0.00),
(8, 'Cordova', 'DANMAR', 'b', 991, '2199216', 0.00),
(9, 'Cordova', 'abdnormal', 's', 991, '2199216', 3000.00),
(12, 'Cordova', 'ANTON', 'BU', 991, '2199216', 2000.00),
(13, 'sssss', 'rja', 'bu', 991, '2199216', 2000.00),
(14, 'Cordova', 'Joseph', 'b', 6002, '09912199217', 2000.00),
(15, 'Sophia', 'Emmanuel', 'G', 6003, '0999123884', 2500.00),
(16, 'Gwapo', 'Lloyd', 'D', 8890, '091212312312', 1000.00),
(17, 'Gwapo', 'Lloyd', 'D', 8890, '091212312312', 1000.00),
(18, 'Cabucos', 'Lester', 'K', 6000, '091212299222', 5500.00),
(19, 'Allen', 'Sophia', 's', 4444, '211231231231', 5500.00),
(20, 'Dadelahi', 'Raj', 'D', 6666, '0991219927', 2000.00),
(21, 'Fajardo', 'Joanna', 'C', 6002, '099121312312', 2000.00),
(25, 'Cordova', 'Cheer', 'B', 6002, '09912199216', 3000.00),
(27, 'Cordova', 'Charles', 'b', 991, '2199216', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `earnedrating`
--

CREATE TABLE `earnedrating` (
  `EMP_NUM` int(11) NOT NULL,
  `RTG_CODE` int(11) NOT NULL,
  `EARNRTG_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_NUM` int(11) NOT NULL,
  `EMP_TITLE` varchar(30) DEFAULT NULL,
  `EMP_LNAME` varchar(50) DEFAULT NULL,
  `EMP_FNAME` varchar(50) DEFAULT NULL,
  `EMP_INITIAL` varchar(2) DEFAULT NULL,
  `EMP_JOB` varchar(50) DEFAULT NULL,
  `EMP_HIRE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_NUM`, `EMP_TITLE`, `EMP_LNAME`, `EMP_FNAME`, `EMP_INITIAL`, `EMP_JOB`, `EMP_HIRE_DATE`) VALUES
(1, 'TaeEEEEE', 'Kishvar', 'Raj', 'B', 'Freelance', '2023-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `FLIGHT_NUM` int(10) NOT NULL,
  `ORIGIN` varchar(50) NOT NULL,
  `DESTINATION` varchar(50) NOT NULL,
  `AC_NUMBER` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `PRICE` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`FLIGHT_NUM`, `ORIGIN`, `DESTINATION`, `AC_NUMBER`, `DATE`, `PRICE`) VALUES
(5, 'CEBU', 'MANILA', 1, '2023-05-24', 2000),
(6, 'CEBU', 'MANILA', 2, '2023-05-26', 3000),
(7, 'CEBU', 'MANILA', 1, '2023-05-31', 4000),
(8, 'CEBU', 'MANILA', 2, '2023-05-23', 5000),
(9, 'CEBU', 'BOHOL', 3, '2023-05-09', 1000),
(10, 'CEBU', 'BOHOL', 4, '2023-05-24', 2500),
(11, 'CEBU', 'BOHOL', 5, '2023-05-29', 3000),
(12, 'CEBU', 'BOHOL', 5, '2023-05-24', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `MOD_CODE` int(11) NOT NULL,
  `MOD_MANUFACTURER` varchar(50) DEFAULT NULL,
  `MOD_NAME` varchar(50) DEFAULT NULL,
  `MOD_CHG_MILE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`MOD_CODE`, `MOD_MANUFACTURER`, `MOD_NAME`, `MOD_CHG_MILE`) VALUES
(1, 'BOEINGasas', 'XZ900', '200'),
(2, 'AIRBUS', 'AZXC900', '400');

-- --------------------------------------------------------

--
-- Table structure for table `pilot`
--

CREATE TABLE `pilot` (
  `EMP_NUM` int(11) NOT NULL,
  `PIL_LICENSE` varchar(30) DEFAULT NULL,
  `PIL_MED_TYPE` varchar(30) DEFAULT NULL,
  `PIL_MED_DATE` datetime DEFAULT NULL,
  `PIL_PT135_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RTG_CODE` int(11) NOT NULL,
  `RTG_NAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `userpassword`) VALUES
('user', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`AC_NUMBER`,`MOD_CODE`);

--
-- Indexes for table `charter`
--
ALTER TABLE `charter`
  ADD PRIMARY KEY (`CHAR_TRIP`),
  ADD KEY `CUS_CODE` (`CUS_CODE`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`CHAR_TRIP`,`EMP_NUM`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_CODE`);

--
-- Indexes for table `earnedrating`
--
ALTER TABLE `earnedrating`
  ADD PRIMARY KEY (`RTG_CODE`,`EMP_NUM`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_NUM`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FLIGHT_NUM`),
  ADD KEY `AC_NUMBER` (`AC_NUMBER`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`MOD_CODE`);

--
-- Indexes for table `pilot`
--
ALTER TABLE `pilot`
  ADD PRIMARY KEY (`EMP_NUM`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RTG_CODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircraft`
--
ALTER TABLE `aircraft`
  MODIFY `AC_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `charter`
--
ALTER TABLE `charter`
  MODIFY `CHAR_TRIP` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUS_CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMP_NUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FLIGHT_NUM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `MOD_CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`AC_NUMBER`) REFERENCES `aircraft` (`AC_NUMBER`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
