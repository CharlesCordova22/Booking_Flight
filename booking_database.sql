-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 03:25 PM
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
(1, 1, '10', '20', '30'),
(2, 2, '20', '10', '30'),
(3, 3, '30', '20', '10');

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
  `CUS_CODE` int(11) DEFAULT NULL,
  `is_deleted` enum('Booked','Cancelled') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charter`
--

INSERT INTO `charter` (`CHAR_TRIP`, `CHAR_DATE`, `AC_NUMBER`, `CHAR_DESTINATION`, `CHAR_DISTANCE`, `CHAR_HOURS_FLOWN`, `CHAR_HOURS_WAIT`, `CHAR_FUEL_GALLONS`, `CHAR_OIL_QTS`, `CUS_CODE`, `is_deleted`) VALUES
(1, '2023-05-23', 1, 'MANILA', 0.00, 0.00, 0.00, 0.00, 0.00, 1, 'Cancelled');

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
  `CUS_BALANCE` decimal(10,2) DEFAULT NULL,
  `is_deleted` enum('Booked','Cancelled') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_CODE`, `CUS_LNAME`, `CUS_FNAME`, `CUS_INITIAL`, `CUS_AREACODE`, `CUS_PHONE`, `CUS_BALANCE`, `is_deleted`) VALUES
(1, 'Cordova', 'Charles', 'B', 991, '2199216', 1500.00, 'Cancelled');

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
(1, 'CEBU', 'MANILA', 1, '2023-05-23', 1500),
(2, 'CEBU', 'MANILA', 2, '2023-05-23', 1700),
(3, 'CEBU', 'BOHOL', 1, '2023-05-24', 6000),
(4, 'CEBU', 'BOHOL', 2, '2023-05-27', 4500),
(5, 'CEBU', 'PALAWAN', 3, '2023-05-03', 7000),
(6, 'CEBU', 'PALAWAN', 3, '2023-07-01', 600);

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
(1, 'Airbus', 'AC290', '100'),
(2, 'BOEING', 'XZ9009', '200'),
(3, 'Black Horse', 'FG605', '150');

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
  ADD PRIMARY KEY (`AC_NUMBER`) USING BTREE,
  ADD KEY `MOD_CODE` (`MOD_CODE`);

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
  MODIFY `AC_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `charter`
--
ALTER TABLE `charter`
  MODIFY `CHAR_TRIP` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUS_CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMP_NUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FLIGHT_NUM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `MOD_CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD CONSTRAINT `aircraft_ibfk_1` FOREIGN KEY (`MOD_CODE`) REFERENCES `model` (`MOD_CODE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`AC_NUMBER`) REFERENCES `aircraft` (`AC_NUMBER`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
