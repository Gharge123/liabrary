-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 07:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourinsti_nes_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `copy_of_facultymaster`
--

CREATE TABLE `copy_of_facultymaster` (
  `FacultyID` varchar(9) DEFAULT NULL,
  `FacultyName` varchar(24) DEFAULT NULL,
  `FacultyType` varchar(11) DEFAULT NULL,
  `Designation` varchar(11) DEFAULT NULL,
  `Department` varchar(28) DEFAULT NULL,
  `BooksAllowed` varchar(12) DEFAULT NULL,
  `DateofBirth` varchar(11) DEFAULT NULL,
  `AcademicYear` varchar(12) DEFAULT NULL,
  `Add1` varchar(69) DEFAULT NULL,
  `Add2` varchar(4) DEFAULT NULL,
  `Add3` varchar(4) DEFAULT NULL,
  `Pincode` varchar(7) DEFAULT NULL,
  `Telno` varchar(20) DEFAULT NULL,
  `EmailID` varchar(25) DEFAULT NULL,
  `Daysallowed` varchar(11) DEFAULT NULL,
  `Description` varchar(11) DEFAULT NULL,
  `ImagePath` varchar(13) DEFAULT NULL,
  `College` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `copy_of_facultymaster`
--

INSERT INTO `copy_of_facultymaster` (`FacultyID`, `FacultyName`, `FacultyType`, `Designation`, `Department`, `BooksAllowed`, `DateofBirth`, `AcademicYear`, `Add1`, `Add2`, `Add3`, `Pincode`, `Telno`, `EmailID`, `Daysallowed`, `Description`, `ImagePath`, `College`) VALUES
('FacultyID', 'FacultyName', 'FacultyType', 'Designation', 'Department', 'BooksAllowed', 'DateofBirth', 'AcademicYear', 'Add1', 'Add2', 'Add3', 'Pincode', 'Telno', 'EmailID', 'Daysallowed', 'Description', 'ImagePath', 'College'),
('F0034', 'JAWALE YOGINI', '', 'LECTURER', 'ETC', '5', '7/17/2012', '12-13', '103,BLD.NO,4,SHANKESHWAR KIRAN,WAYLE NGR. KALYAN(W)', '', '', '', '9867411033', '', '7', '', '', ''),
('F0035', 'GURAV PRITI', '', 'LECTURER', 'ETC', '5', '7/18/2012', '12-13', '', '', '', '', '', '', '15', '', '', ''),
('F0036', 'GUPTA VINITA', '', 'LECTURER', 'ELECTRICAL', '5', '7/20/2012', '12-13', 'D4/2 P & T COLONY,MULUND (W)', '', '', '400079', '9975085266', 'vinitagupta85@yahoo.com', '7', '', '', ''),
('F0037', 'JADHAV PRAJAKTA S.', '', 'LECTURER', 'ETC', '5', '7/23/2012', '12-13', '307,RAVINDRA NIVAS CHS.KOLSEWADI,KALYAN(E)', '', '', '', '9029585384', 'prajakta0305@gmail.com', '15', '', '', ''),
('F0038', 'PATIL DEVYANI DILIP', '', 'LECTURER', 'ETC', '52', '7/23/2012', '12-13', 'OM MANGESHI PRASAD TANAJI NGR. KALYAN (W)', '', '', '', '9561827481', 'patildevyani466@gmail.com', '15', '', '', ''),
('F0011', 'GHAG MANOJ', '', 'LECTURER', 'DRAWING', '5', '7/17/2012', '12-13', 'VAKRATUND PALACE/104,NEAR MARATHI MNC. CORP.BHANDUP (W)', '', '', '', '9870090137', '', '15', '', '', ''),
('F0012', 'KANTUTE ANITA', '', 'HOD', 'ETC.', '5', '7/17/2012', '12-13', 'B-1 APRATIM CHS.RH-155,SUDAMA NGR, DOMBIVALI (E)', '', '', '', '9820521045', '', '15', '', '', ''),
('F0013', 'KADAM PRAKASH', '', 'PEON', 'OFFICE', '5', '7/17/2012', '12-13', 'BHANDUP', '', '', '', '', '', '15', '', '', ''),
('F0014', 'PATIL T.P.', '', 'LECTURER', 'PHY', '5', '7/17/2012', '12-13', 'A/304,SURESH TOWER, SANTOSHI MATA RD.RAMBAUG-04, KALYAN (W)-421301', '', '', '', '9869929164', '', '15', '', '', ''),
('F0015', 'PIMPALKAR MAHESH', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', 'ABHISHEK BLDG.NO.3,PLOT NO.2, MANISHA NGR THANE KALWA', '', '', '', '9870657645', '', '15', '', '', ''),
('F0016', 'PATIL ABHIMAN', '', 'LAB ASSTT.', 'ELECTRICAL', '3', '7/16/2012', '12-13', '206,DHREE SHANKARAN,B/14 SHIVSENA OFFICE,VADAWLI SECTION AMBERNATH(E)', '', '', '', '9763871795', '', '15', '', '', ''),
('F0017', 'PATIL SUNIL', '', 'LAB ASSTT.', 'WORKSHOP', '3', '7/17/2012', '12-13', '102,SHREE SAI KRIPA,CHS.JADHAV COLONY,BADLAPUR-(W) 421503', '', '', '', '9763871795', '', '15', '', '', ''),
('F0018', 'PATHAN NASIR', '', 'LAB ASSTT.', 'ETC.', '3', '3/15/1979', '12-13', '504,SATYAM CHS.ANKIT NGR. MRDA,CHEMBUR,MUMBAI', '', '', '', '9323710635', 'pathannasir7@gmail.com', '15', '', 'LORD (63).jpg', ''),
('F0019', 'PATIL GIRISH', '', 'LAB ASSTT.', 'WORKSHOP', '3', '7/17/2012', '12-13', '9-2SHRADDHA PARK,BIRLA COLLAGE ROAD,KALYAN (W)', '', '', '', '9869600906', '', '15', '', '', ''),
('F0020', 'PENDASE MANSI', '', 'LECTURER', 'ETC.', '5', '7/17/2012', '12-13', '8, OM SHATANAND SOC. JOSHI PATH, PHADKE ROAD,DOMBIVALI (E)', '', '', '', '9930197960', '', '15', '', '', ''),
('F0021', 'SALASKAR SUSHMA', '', 'LECTURER', 'CHEMISTRY', '5', '7/17/2012', '12-13', 'B-202 SAISHRUSHTI APPT.,T.P.ROAD.BHANDUP. (W.)', '', '', '', '9220971593', '', '15', '', '', ''),
('F0022', 'WAYKOLE SANJAY', '', 'LAB ASSTT.', 'DRAWING', '3', '7/17/2012', '12-13', 'PUSHPANJALI APPT.ROOM NO.5 KATEMANIVALI,KOLSEVADI,KALYAN (E)', '', '', '', '9869933025', '', '15', '', '', ''),
('F0023', 'YEDEKAR T.B.', '', 'LAB ASSTT.', 'CHEMISTRY', '3', '7/17/2012', '12-13', 'MOHONE,AMBIVALI', '', '', '', '9819839597', '', '15', '', '', ''),
('F0024', 'PATIL ATULYA (PRINCIPAL)', '', 'PRINCIPAL', 'OFFICE', '5', '7/17/2012', '12-13', 'AIROLI,NEW MUMBAI', '', '', '', '', '', '15', '', '', ''),
('F0025', 'KHODADE ABHIJIT S.', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', '110/3694,POLICE OFFICER`S COLONY,NEHRUNAGAR,KURLA (E)', '', '', '', '7588169089/966493838', '', '15', '', '', ''),
('F0026', 'NACHANE APEKSHA', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', '21 CHANDAN,OPP. TO VASANT VIHAR CLUB,THANA (W)', '', '', '', '9004635690', '', '15', '', '', ''),
('F0027', 'PATIL SEEMA N.', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', 'LAXMIKRUPA BLD.,FLAT NO.202,NEAR R.T.O.,KALYAN (W)', '', '', '', '9702773234', '', '15', '', '', ''),
('F0028', 'PAWAR BHARTI', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', 'NEW ARCHANA CHS.,PLOT NO. 63,ROOM NO.17,SHIVAI NGR,THANA(W).', '', '', '', '9867953032', 'vbpawar922@gmail.com', '15', '', '', ''),
('F0029', 'MULANI NILOFER S.', '', 'LECTURER', 'COMPUTER', '5', '7/17/2012', '12-13', '4/4/D/5276,TAGORE NGR-7 VIKROLI (E),MUMBAI-83', '', '', '', '7738327100', '', '15', '', '', ''),
('F0030', 'CHAVAN MADHURI', 'COMPUTER', 'LECTURER', 'COMPUTER & INFORMATION TECH.', '5', '7/17/2012', '09-10', '', '', '', '', '', '', '7', '', '', ''),
('F0031', 'MAHAJAN RUPALI', '', 'LECTURER', 'ETC', '5', '7/17/2012', '12-13', 'B/8,GANESH PREM CHS.NEAR RAM MANDIR,SHASTRI NAGAR,DOMBIVALI(W)', '', '', '', '9860519890', '', '15', '', '', ''),
('F0032', 'MAHAJAN HARSHLATA M.', '', 'LECTURER', 'ETC', '5', '7/17/2012', '2012-13', 'B/8,GANESH PREM CHS,NEAR RAM MANDIR,SHASTRI NAGAR,DOMBIVALI(W)', '', '', '', '9096733407', '', '15', '', '', ''),
('F0033', 'PATIL SONALI B.', '', 'LECTURER', 'COMPUTER & INFORMATION TECH.', '5', '7/17/2012', '2012-13', 'SAKET COLONY,CHAWL NO.7,VITTHALWADI,KALYAN(E)', '', '', '', '9702217954', '', '7', '', '', ''),
('F0001', 'AMTE PRASHANT', '', 'HOD', 'ELECTRICL', '5', '7/17/2012', '12-13', 'C-207,RIDDHISIDDHI SOC.LOVISWADI THANE (W)', '', '', '', '9004036581', '', '15', '', '', ''),
('F0002', 'BHARAMBE S.B.', '', 'LECTURER', 'MATHS', '5', '7/17/2012', '12-13', 'AIROLI,NEW MUMBAI', '', '', '', '9324538615', '', '15', '', '', ''),
('F0003', 'BHOIR AJAY', '', 'HOD', 'MECHANICAL', '5', '7/17/2012', '12-13', 'SARVAMANGAL SOC. BLOCK.19,4TH FLR.BETURKAR PADA KALYAN(W)', '', '', '', '9867941665', '', '15', '', '', ''),
('F0004', 'BHAMRE PRAVIN', '', 'HOD', 'COMPUTER', '5', '7/17/2012', '12-13', 'ABHISHEK BLDG.NO.3,PLOT NO.2, MANISHA NGR THANE KALWA', '', '', '', '9819839597', '', '15', '', '', ''),
('F0005', 'BHOITE PRAMOD', '', 'SUPERWISER', 'WORKSHOP', '5', '7/17/2012', '12-13', 'JON MICAL HOUSE,ROOM NO.3, GOVANDI (E)', '', '', '', '9869115472', '', '15', '', '', ''),
('F0006', 'CHAMAT RAJESH', '', 'LECTURER', 'ELECTRICL', '5', '7/17/2012', '12-13', 'SAI SIDDHI,A/303,SANT NAMDEVVADI,JARIMARI MANDIR RD.TISGAON KALYAN(E)', '', '', '', '9819405092', '', '15', '', '', ''),
('F0007', 'CHAUDHARI H.U.', '', 'LAB ASSTT.', 'PHYSICS', '3', '7/17/2012', '12-13', 'SAHYADRI CHS,BUILDING NO.-5-A/9,KALWA THANE', '', '', '', '9869830610', '', '15', '', '', ''),
('F0008', 'DERE TRIPTI', '', 'LECTURER', 'ELECTRICL', '5', '7/17/2012', '12-13', '307 B, MANISHA NGR. PRIYADARSHINI BLDG. THANE KALWA.', '', '', '', '9322035033', '', '15', '', '', ''),
('F0009', 'DURGULE KAVITA', '', 'LAB ASSTT.', 'ETC.', '5', '7/17/2012', '12-13', 'DURGULE HOUSE SHIVAJI NGR TEMBHIPADA RD. BHANDUP ,MUMBAI-78', '', '', '', '9767473906', '', '15', '', '', ''),
('F0010', 'DHANOLE KIRAN', '', 'LAB ASSTT.', 'MECHANICAL', '3', '7/17/2012', '12-13', 'G/1,SHREYA SWAPNA JADHAV COLONY,NEAR SWAPNAGRI,BADLAPUR (W)', '', '', '', '9920773838', '', '15', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
