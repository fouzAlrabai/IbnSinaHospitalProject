-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 09:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ADate` date NOT NULL,
  `ATime` time NOT NULL,
  `File_Num` int(11) NOT NULL,
  `DUserName` varchar(25) NOT NULL,
  `IdAppointment` int(25) NOT NULL,
  `CName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ADate`, `ATime`, `File_Num`, `DUserName`, `IdAppointment`, `CName`) VALUES
('2019-04-03', '02:30:00', 2222, 'Abeer_1', 2, 'DENTAL'),
('2019-04-29', '15:33:00', 3333, 'hadeel_5', 3, 'OPHTHALMOLOGY'),
('2019-04-22', '01:00:00', 5555, 'Fouz_3', 5, 'FAMILY MEDICINE'),
('2018-02-12', '06:00:00', 3333, 'Abeer_1', 16, 'DENTAL'),
('2019-04-22', '01:00:00', 1111, 'Abeer_1', 23, 'DENTAL'),
('2019-05-22', '02:00:00', 1111, 'Alia_2', 24, 'EMERGENCY MEDICINE'),
('2019-05-28', '05:50:00', 1111, 'Heasa_4', 28, 'DENTAL'),
('2019-04-01', '01:00:00', 1111, 'Heasa_4', 30, 'OBSTETRICS AND GYNECOLOGY'),
('2019-04-30', '22:57:00', 4444, 'Alia_2', 31, 'OBSTETRICS AND GYNECOLOGY'),
('2019-04-26', '02:58:00', 4444, 'Abeer_1', 35, 'EMERGENCY MEDICINE');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `CName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`CName`) VALUES
('DENTAL'),
('EMERGENCY MEDICINE'),
('FAMILY MEDICINE'),
('OBSTETRICS AND GYNECOLOGY'),
('OPHTHALMOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DName` varchar(25) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `OFFICE_#` int(4) UNSIGNED NOT NULL,
  `Phone_#` int(10) NOT NULL,
  `CName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DName`, `UserName`, `Password`, `OFFICE_#`, `Phone_#`, `CName`) VALUES
('Abeer', 'Abeer_1', 'Abeer1', 1, 503489999, 'DENTAL'),
('Alia', 'Alia_2', 'Aia2', 2, 505054378, 'EMERGENCY MEDICINE'),
('amy', 'Amy_19', '1919', 800, 32840932, 'OPHTHALMOLOGY'),
('Fouz', 'Fouz_3', 'Fouz3', 3, 506783940, 'FAMILY MEDICINE'),
('hadeel', 'hadeel_5', 'hadeel5', 5, 555678901, 'OPHTHALMOLOGY'),
('Heasa', 'Heasa_4', 'Heasa4', 4, 578532148, 'OBSTETRICS AND GYNECOLOGY'),
('Khalid', 'khalid_7', '7777', 100, 353938, 'OBSTETRICS AND GYNECOLOGY'),
('Khulod', 'Kh_2', '2222', 70, 538971100, 'FAMILY MEDICINE'),
('Muhammad', 'Muh33', '3333', 80, 5559817, 'OBSTETRICS AND GYNECOLOGY'),
('Rima', 'Rima_4', '1111', 5, 548039393, 'DENTAL');

-- --------------------------------------------------------

--
-- Table structure for table `laptest`
--

CREATE TABLE `laptest` (
  `LDate` date NOT NULL,
  `LTime` time NOT NULL,
  `SINSTRUCTION` text NOT NULL,
  `Result` text NOT NULL,
  `File_Num` int(11) NOT NULL,
  `DUserName` varchar(25) NOT NULL,
  `Test_Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptest`
--

INSERT INTO `laptest` (`LDate`, `LTime`, `SINSTRUCTION`, `Result`, `File_Num`, `DUserName`, `Test_Type`) VALUES
('2019-04-30', '15:26:04', '', 'Positive', 1111, 'Heasa_4', 'Pregnancy test'),
('2019-04-02', '09:20:00', '1 day', '30,20 Deficient', 2222, 'Kh_2', 'Vitamin D'),
('2019-04-23', '21:07:00', '3 times a week', '1.2 Low', 2222, 'Fouz_3', 'Calcium'),
('2019-04-24', '15:05:00', '5 times ', '8 Normal,17 Hight', 1111, 'Fouz_3', 'WBCs');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PName` varchar(25) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `File_Num` int(11) NOT NULL DEFAULT '0',
  `Age` int(11) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PName`, `UserName`, `Password`, `File_Num`, `Age`, `City`, `Sex`, `Phone`) VALUES
('maha', 'Maha_1', '101010', 1111, 18, 'tabok', 'female', 50505050),
('Ahmad', 'Ahmad_2', 'Ahmad22', 2222, 43, 'Dammam', 'male', 505123456),
('Sara', 'Sara_33', 'Sara33', 3333, 36, 'Jeddah', 'female', 550657788),
('Nora', 'Nora_44', '8888', 4444, 12, 'tabuk', 'female', 505050505),
('Mohammed', 'Mohammed_55', 'Mohammed55', 5555, 30, 'Riyadh', 'male', 552211199);

-- --------------------------------------------------------

--
-- Table structure for table `patient_doctor`
--

CREATE TABLE `patient_doctor` (
  `File_Num` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_doctor`
--

INSERT INTO `patient_doctor` (`File_Num`, `UserName`) VALUES
(2222, 'Abeer_1'),
(4444, 'Alia_2'),
(5555, 'Fouz_3'),
(1111, 'Heasa_4'),
(3333, 'hadeel_5'),
(1111, 'Abeer_1'),
(4444, 'Abeer_1');

-- --------------------------------------------------------

--
-- Table structure for table `pharmecy`
--

CREATE TABLE `pharmecy` (
  `Med_Name` varchar(25) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Details` text NOT NULL,
  `File_Num` int(11) NOT NULL,
  `DUserName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmecy`
--

INSERT INTO `pharmecy` (`Med_Name`, `Quantity`, `Details`, `File_Num`, `DUserName`) VALUES
('nimalox', 3, '', 2222, 'Abeer_1'),
('adrenaline', 2, '', 4444, 'Alia_2'),
('avastin', 5, '', 3333, 'hadeel_5'),
('ecomi cream', 1, '', 1111, 'Heasa_4'),
('fevadol', 3, '', 5555, 'Fouz_3'),
('Brush', 2, 'Use it 3 times a day', 1111, 'Abeer_1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`IdAppointment`),
  ADD KEY `File_Num` (`File_Num`),
  ADD KEY `DUserName` (`DUserName`),
  ADD KEY `CName` (`CName`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`CName`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `CName` (`CName`);

--
-- Indexes for table `laptest`
--
ALTER TABLE `laptest`
  ADD KEY `File_Num` (`File_Num`),
  ADD KEY `DUserName` (`DUserName`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`File_Num`);

--
-- Indexes for table `patient_doctor`
--
ALTER TABLE `patient_doctor`
  ADD KEY `File_Num` (`File_Num`),
  ADD KEY `File_Num_2` (`File_Num`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `pharmecy`
--
ALTER TABLE `pharmecy`
  ADD KEY `File_Num` (`File_Num`),
  ADD KEY `DUserName` (`DUserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `IdAppointment` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`File_Num`) REFERENCES `patient` (`File_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`DUserName`) REFERENCES `doctor` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`CName`) REFERENCES `clinic` (`CName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`CName`) REFERENCES `clinic` (`CName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laptest`
--
ALTER TABLE `laptest`
  ADD CONSTRAINT `laptest_ibfk_1` FOREIGN KEY (`File_Num`) REFERENCES `patient` (`File_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laptest_ibfk_2` FOREIGN KEY (`DUserName`) REFERENCES `doctor` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_doctor`
--
ALTER TABLE `patient_doctor`
  ADD CONSTRAINT `patient_doctor_ibfk_1` FOREIGN KEY (`File_Num`) REFERENCES `patient` (`File_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_doctor_ibfk_2` FOREIGN KEY (`UserName`) REFERENCES `doctor` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pharmecy`
--
ALTER TABLE `pharmecy`
  ADD CONSTRAINT `pharmecy_ibfk_1` FOREIGN KEY (`File_Num`) REFERENCES `patient` (`File_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pharmecy_ibfk_2` FOREIGN KEY (`DUserName`) REFERENCES `doctor` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
