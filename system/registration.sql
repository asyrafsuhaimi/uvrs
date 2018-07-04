-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 06:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_category` varchar(50) NOT NULL,
  `fee_collected` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_category`, `fee_collected`) VALUES
('staff', 48),
('student', 50),
('total', 98);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_no` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_no`, `name`, `phone_no`, `location`, `position`, `address`) VALUES
('A32150', 'Rafidah Hani Binti Hassan Basri', '0165437760', 'Language And Islamic Studies Center', 'Lecturer', 'LADANG JENTAYU, BT 8, JLN JENIANG, 08300 GURUN KEDAH'),
('A32456', 'Nur Rasyidah Binti Mohd Ghalil', '054012225', 'FKM', 'Lecturer', 'No 10, Lorong Bendahara 20, Taman Sentosa Utama, 41000 Klang, Selangor'),
('A44123', 'Muhd Jasri Bin Abdul Rais', '0178120191', 'Language And Islamic Studies Center', 'Lecturer', '73A, Jalan BBP1, Taman Batu Berendam Putera, 75350 Bukit Beruang, Melaka'),
('C01213', 'Mohd Razali Bin Rashdi', '0125078910', 'FTMK', 'Driver', '370 Jalan Melaka Raya 4, Taman Melaka Raya, 75000 Melaka'),
('D01122', 'Azizan Awang Bin Kamaruddin', '0124456078', 'Language And Islamic Studies Center', 'Driver', 'NO.77, JALAN MERANTI 6C/3 FASA 3, BANDAR UTAMA BATANG KALI, SELANGOR'),
('D01291', 'Noor Jamilah Binti Hassan', '0186675020', 'FKE', 'Lab Assistant', 'No 33, PRI 7, Taman Paya Rumput Indah 76450 Melaka'),
('D10291', 'Azizah Bin Rahman', '0132234050', 'FTMK', 'Lab Assistant', 'RM 345, Taman Bukit Rumbia, 78000 Alor Gajah, Melaka Tel: 06 4'),
('D11101', 'Nur Azimah Binti Mohd Khairul', '0142235670', 'FTMK', 'Lab Assistant', '541A, Jalan Merdeka, Taman Melaka Raya 75000 Melaka'),
('D12435', 'Azman Hasni Bin Rahman', '0142122010', 'FKE', 'Driver', 'JB 760, Jalan balkis 2, Taman Balkis, Jalan Bukit Tembakau Umbai, 77300 Merlimau, Melaka'),
('D12810', 'Muhd Azma Azmin Binti Khusairi', '0198721062', 'FTMK', 'Driver', '104-1, Jalan Mutiara 1, Taman Mutiara Melaka, 75350 Batu Berendam, Melaka'),
('D20191', 'Syuib Adnan Bin Suhaimi', '0126651029', 'FKE', 'Driver', '27 PERSIARAN BLM3 , BNDR LAGUNA, 08000 KEDAH'),
('D45312', 'Mohd Fazmi Bin Hadi', '052015662', 'FKE', 'Driver', 'NO 7 PERSIARAN PERPADUAN 7, TAMAN PERPADUAN, 31150 ULU KINTA, PERAK'),
('dsf', 'test', 'dfsas', 'Chancellery', 'Lab Assistant', 'fasdf'),
('F09678', 'Mohd Izhar Tajuddin Bin Kamal', '0165541029', 'Sport Center', 'Driver', '20 JLN 3/16A, BANDAR BARU SELAYANG, 68100 BT CAVE, SELANGOR'),
('F10112', 'Muhd Razali Bin Hamdan', '0192018871', 'Sport Center', 'Driver', 'LADANG JENTAYU, BT 8, JLN JENIANG, 08300 GURUN KEDAH'),
('F105431', 'Abdul  Jalil Bin Mohd Julali', '0141125069', 'Sport Center', 'Driver', '175 JLN TUJU/3A SEK 7, 43650 BANDAR BARU BANGI, SELANGOR.'),
('F76890', 'Jamaludin Hamdan Bin Khalid', '0143356078', 'Sport Center', 'Driver', 'JB 853, Jalan Tbu 12, Taman Bemban Utama, 77200 Jasin, Melaka'),
('F98123', 'Akmal Baharudin Bin Azizul Rahman', '0196674321', 'Sport Center', 'Driver', 'RM 345, Taman Bukit Rumbia, 78000 Alor Gajah, Melaka');

-- --------------------------------------------------------

--
-- Table structure for table `staff_license`
--

CREATE TABLE `staff_license` (
  `staff_no` varchar(30) NOT NULL,
  `license_no` varchar(30) NOT NULL,
  `license_valid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_license`
--

INSERT INTO `staff_license` (`staff_no`, `license_no`, `license_valid`) VALUES
('A10229', '00192812', '0000-00-00'),
('A12556', '00212456', '2018-07-12'),
('A32145', '22131445', '0000-00-00'),
('A32150', '00321039', '0000-00-00'),
('A32456', '09102969', '2017-02-08'),
('A33152', '001211301', '2016-12-23'),
('A44123', '00124598', '2017-01-25'),
('C01213', '00192867', '0000-00-00'),
('D01122', '00124120', '0000-00-00'),
('D01291', '02112050', '0000-00-00'),
('D10291', '00978659', '0000-00-00'),
('D11101', '01221807', '0000-00-00'),
('D12435', '01110210', '0000-00-00'),
('D12810', '00192867', '0000-00-00'),
('D20191', '10112406', '0000-00-00'),
('D45312', '012210102', '0000-00-00'),
('dsf', 'fsadf', '2016-12-13'),
('F09678', '07403392', '0000-00-00'),
('F10112', '00876959', '0000-00-00'),
('F105431', '00454567', '0000-00-00'),
('F76890', '00665678', '0000-00-00'),
('F98123', '01221019', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_registration`
--

CREATE TABLE `staff_registration` (
  `staff_no` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_registration`
--

INSERT INTO `staff_registration` (`staff_no`, `vehicle_no`) VALUES
('A10229', 'MDF 1000'),
('A12556', 'PDX 6005'),
('A32145', 'WTP 1233'),
('A32150', 'MDM 5006'),
('A32456', 'BHG 1022'),
('A33152', 'WTX 5862'),
('A44123', 'MBA 8990'),
('C01213', 'MDA 2212'),
('D01122', 'MCN 785'),
('D01291', 'JDA 3012'),
('D10291', 'MCA 1991'),
('D11101', 'AFA 5605'),
('D12435', 'MCS 7877'),
('D12810', 'MDM 1121'),
('D20191', 'MAD 6766'),
('D45312', 'MDM 9011'),
('dsf', 'fsdaf'),
('F09678', 'MAC 2678'),
('F10112', 'MBC 5421'),
('F105431', 'MAF 3567'),
('F76890', 'MDE 8778'),
('F98123', 'MCS 9978');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `matric_no` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `applicant` varchar(50) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `matric_no`, `faculty`, `address`, `phone_number`, `applicant`, `resident`, `Time`) VALUES
('Mohd Jamal Azri Bin Razman', 'B031410004', 'FKP', '69 JLN CECAWI 6/27, KOTA DAMANSARA, 47810 P JAYA, SELANGOR', '0125089910', 'College Student Residence', 'Kenanga', '2016-11-22 13:24:31'),
('Nur Fatihah Binti Mohd Syukor', 'B031410222', 'FKP', 'NO.15, JLN. 3/4, TMN. SRI INDAH, 43200, BALAKONG,SELANGOR.', '0135456010', 'College Student Residence', 'Kemboja', '2016-11-22 13:17:45'),
('Nur Zahidah Bin Ramlan', 'B031410561', 'FKM', '15 LORONG 2, TAMAN BKT MAS, 34000 TAIPING', '0123449810', 'College Student Residence', 'Kemboja', '2016-11-22 13:14:58'),
('Muhd Zaidi Bin Kamsar', 'B031501118', 'FKE', '1112 LRG SERAI SETIA 2/5, TMN SERAI SETIA, 09400 PDG SERAI, KEDAH', '0147780192', 'College Student Residence', 'Kenanga', '2016-11-22 13:19:56'),
('Mohd Fazlie Bin Yahya', 'B031510001', 'FTMK', '27 PERSIARAN BLM3 , BNDR LAGUNA, 08000 KEDAH', '0167728890', 'College Student Residence', 'Kemboja', '2016-11-22 12:44:37'),
('Muhammad Izzat Syakir Bin Suhaimi', 'B031510003', 'FKM', 'NO 19, TAMAN SERI TENGGARA, 34200 PARIT BUNTAR', '0125009074', 'College Student Residence', 'Melati', '2016-11-22 13:05:12'),
('Nur Aqilah Binti Musa', 'B031510005', 'FKE', '27 LALUAN TASIK TIMUR, 16A GERBANG BERCHAM SELAMAT, 31400 IPOH, PERAK', '0196765510', 'College Student Residence', 'Melati', '2016-11-22 13:13:17'),
('Nadiatul Akmar Binti Azman', 'B031510016', 'FKP', 'NO 7 PERSIARAN PERPADUAN 7, TAMAN PERPADUAN, 31150 ULU KINTA, PERAK', '0132445678', 'College Student Residence', 'Melati', '2016-11-22 13:10:48'),
('Nur Safirah Binti Suhaimi', 'B031510101', 'FPTT', 'NO 131072, JALAN SRI DESA 11, TANAH HITAM ,31200 CHEMOR, PERAK', '0125850268', 'College Student Residence', 'Kemboja', '2016-11-22 13:03:17'),
('Fakhri Muizzudin Bin Rasdi', 'B031510111', 'FTMK', 'NO 4, 7/5 JALAN KESUMA, FASA 3A, BANDAR TASIK KESUMA, 43700 BERANANG, SELANGOR', '0128888100', 'College Student Residence', 'Kemboja', '2016-11-22 12:39:37'),
('Abdul Halim Bin Kassim', 'B031510211', 'FTMK', 'PT 2627, KAMPUNG TERSUSUN, KELEDANG UTAMA FASA 1,31100 SG. SIPUT(U), PERAK', '0135467708', 'College Student Residence', 'Kenanga', '2016-11-22 12:35:15'),
('Nor Ain Athirah Binti Zulkifli', 'B031510232', 'FKM', 'PLOT 110, KG TERSUSUN SG ARA, 11900 P PINANG', '0187601232', 'College Student Residence', 'Kenanga', '2016-11-22 13:22:06'),
('Zulhilmi Zaim Bin Mohd Razali', 'B031510240', 'FTMK', 'BATU 18 3/4 LORONG HAJAH TIAH MANAN, KAMPUNG LEKOK, 78300 MASJID TANAH, MELAKA', '0123310012', 'College Student Residence', 'Melati', '2016-11-22 12:37:12'),
('Muhammad Haziq Bin Muhd Zulkifli', 'B031510272', 'FTMK', '79 LG 29, TAMAN PATANI JAYA, 08000 SG PETANI, KEDAH', '0167782110', 'College Student Residence', 'Kemboja', '2016-11-22 12:42:51'),
('Muhamad Asyraf Bin Suhaimi', 'B031510274', 'FTMK', 'No 131072, Jalan Sri Desa 11, Tanah Hitam ,31200 Chemor , Perak', '0134265214', 'College Student Residence', 'Kenanga', '2016-11-22 12:31:03'),
('Khairunnisa Nasirah Binti Nasir', 'B031510282', 'FKP', 'NO 2, LRG MACHANG BUBUK 4,TAMAN MACHANG BUBUK,14020 BUKIT MERTAJAM, SEBERANG PERAI', '0186795050', 'College Student Residence', 'Sri Emas', '2016-11-22 13:01:30'),
('Nur Haliza Binti Kamaruddin', 'B031510400', 'FKP', '105, JLN LEGENDA 14,LAGENDA HEIGHTS, S.PETANI', '0176650912', 'College Student Residence', 'Melati', '2016-11-22 12:48:44'),
('Nur Syarifah Suhaila Binti Idrus', 'B031620109', 'FPTT', '6, JALAN MADRASAH, RAPAT SETIA, 31350 IPOH, PERAK', '014225067', 'College Student Residence', 'Kemboja', '2016-11-22 13:08:42'),
('Muhd Syafiq Bin Mohd Bani', 'B031710800', 'FTK', 'C-6 FASA 1D1,  32040 SERI MANJONG,  PERAK', '0125541029', 'College Student Residence', 'Kenanga', '2016-11-22 13:06:52'),
('Muhd Khairi Bin Junaidi', 'B041210100', 'FKE', '17 JLN CERDIK 5, TAMAN UNIVERSITI, 43000 BANGI, SELANGOR', '0176540019', 'College Student Residence', 'Sri Emas', '2016-11-22 13:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_license`
--

CREATE TABLE `student_license` (
  `matric_no` varchar(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  `license_valid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_license`
--

INSERT INTO `student_license` (`matric_no`, `license_no`, `license_valid`) VALUES
('B031410004', '00125645', '2016-12-23'),
('B031410222', '00323675', '0000-00-00'),
('B031410561', '00345121', '0000-00-00'),
('B031501118', '00197867', '0000-00-00'),
('B031510001', '23432134', '0000-00-00'),
('B031510003', '00897657', '0000-00-00'),
('B031510005', '00675345', '0000-00-00'),
('B031510016', '02976682', '0000-00-00'),
('B031510101', '67546578', '0000-00-00'),
('B031510111', '22134256', '0000-00-00'),
('B031510211', '34325654', '0000-00-00'),
('B031510232', '00765487', '0000-00-00'),
('B031510240', '54367654', '0000-00-00'),
('B031510272', '65786540', '0000-00-00'),
('B031510274', '99765467', '0000-00-00'),
('B031510282', '13432156', '0000-00-00'),
('B031510400', '32445675', '2018-12-04'),
('B031620109', '00897221', '0000-00-00'),
('B031710800', '33245437', '0000-00-00'),
('B041210100', '02112176', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `matric_no` varchar(50) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`matric_no`, `vehicle_number`) VALUES
('B031410004', 'BJK 1211'),
('B031410222', 'BHJ 6540'),
('B031410561', 'AGH 1111'),
('B031501118', 'KED 6767'),
('B031510001', 'JLJ 6708'),
('B031510003', 'AKM 9595'),
('B031510005', 'AJE 7610'),
('B031510016', 'AKN 6709'),
('B031510101', 'AJM 4520'),
('B031510111', 'WQQ 9286'),
('B031510211', 'AFK 1201'),
('B031510232', 'PFK 1012'),
('B031510240', 'MBS 4220'),
('B031510272', 'MCM 7860'),
('B031510274', 'WTX 5862'),
('B031510282', 'PFL 3211'),
('B031510400', 'KFJ 3211'),
('B031620109', 'AEF 3443'),
('B031710800', 'AJK 2210'),
('B041210100', 'BGH 1091');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `password`) VALUES
('asyraf', '12345'),
('user', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id_no` varchar(30) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL,
  `road_tax` varchar(50) NOT NULL,
  `vehicle_ownership` varchar(50) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_staff`
--

CREATE TABLE `vehicle_staff` (
  `staff_no` varchar(30) NOT NULL,
  `vehicle_no` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `vehicle_ownership` varchar(30) NOT NULL,
  `road_tax` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_staff`
--

INSERT INTO `vehicle_staff` (`staff_no`, `vehicle_no`, `vehicle_type`, `vehicle_ownership`, `road_tax`) VALUES
('A32150', 'MDM 5006', 'Car', 'University Vehicle Officer', '0000-00-00'),
('A32456', 'BHG 1022', 'Car', 'Private', '2017-01-19'),
('A44123', 'MBA 8990', 'Motorcycle', 'Private', '2017-12-13'),
('asdfaadf', 'fasdasdf', 'Car', 'University Vehicle', '2016-12-14'),
('C01213', 'MDA 2212', 'Van', 'University Vehicle', '0000-00-00'),
('D01122', 'MCN 785', 'Car', 'University Vehicle', '0000-00-00'),
('D01291', 'JDA 3012', 'Motorcycle', 'Private', '0000-00-00'),
('D10291', 'MCA 1991', 'Car', 'Private', '0000-00-00'),
('D11101', 'AFA 5605', 'Motorcycle', 'Private', '0000-00-00'),
('D12435', 'MCS 7877', 'Van', 'University Vehicle', '0000-00-00'),
('D12810', 'MDM 1121', 'Van', 'University Vehicle', '0000-00-00'),
('D20191', 'MAD 6766', 'Van', 'University Vehicle', '0000-00-00'),
('D45312', 'MDM 9011', 'Van', 'University Vehicle', '0000-00-00'),
('dsf', 'fsdaf', 'Van', 'University Vehicle Officer', '2016-11-30'),
('F09678', 'MAC 2678', 'Bus', 'University Vehicle', '0000-00-00'),
('F10112', 'MBC 5421', 'Bus', 'University Vehicle', '0000-00-00'),
('F105431', 'MAF 3567', 'Bus', 'University Vehicle', '0000-00-00'),
('F76890', 'MDE 8778', 'Bus', 'University Vehicle', '0000-00-00'),
('F98123', 'MCS 9978', 'Bus', 'University Vehicle', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_student`
--

CREATE TABLE `vehicle_student` (
  `matric_no` varchar(30) NOT NULL,
  `vehicle_no` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `vehicle_ownership` varchar(30) NOT NULL,
  `road_tax` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_student`
--

INSERT INTO `vehicle_student` (`matric_no`, `vehicle_no`, `vehicle_type`, `vehicle_ownership`, `road_tax`) VALUES
('B031410004', 'BJK 1211', 'Car', 'Private', '2017-01-19'),
('B031410222', 'BHJ 6540', 'Car', 'Private', '0000-00-00'),
('B031410561', 'AGH 1111', 'Motorcycle', 'Private', '0000-00-00'),
('B031501118', 'KED 6767', 'Motorcycle', 'Private', '0000-00-00'),
('B031510001', 'JLJ 6708', 'Motorcycle', 'Private', '0000-00-00'),
('B031510003', 'AKM 9595', 'Car', 'Private', '0000-00-00'),
('B031510005', 'AJE 7610', 'Motorcycle', 'Private', '0000-00-00'),
('B031510016', 'AKN 6709', 'Motorcycle', 'Private', '0000-00-00'),
('B031510101', 'AJM 4520', 'Car', 'Private', '0000-00-00'),
('B031510111', 'WQQ 9286', 'Car', 'Private', '0000-00-00'),
('B031510211', 'AFK 1201', 'Motorcycle', 'Private', '0000-00-00'),
('B031510232', 'PFK 1012', 'Motorcycle', 'Private', '0000-00-00'),
('B031510240', 'MBS 4220', 'Motorcycle', 'Private', '0000-00-00'),
('B031510272', 'MCM 7860', 'Motorcycle', 'Private', '0000-00-00'),
('B031510274', 'WTX 5862', 'Car', 'Private', '0000-00-00'),
('B031510282', 'PFL 3211', 'Motorcycle', 'Private', '0000-00-00'),
('B031510400', 'KFJ 3211', 'Car', 'Private', '2017-08-08'),
('B031620109', 'AEF 3443', 'Motorcycle', 'Private', '0000-00-00'),
('B031710800', 'AJK 2210', 'Motorcycle', 'Private', '0000-00-00'),
('B041210100', 'BGH 1091', 'Motorcycle', 'Private', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_category`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `staff_license`
--
ALTER TABLE `staff_license`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `staff_registration`
--
ALTER TABLE `staff_registration`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`matric_no`);

--
-- Indexes for table `student_license`
--
ALTER TABLE `student_license`
  ADD PRIMARY KEY (`matric_no`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`matric_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `vehicle_staff`
--
ALTER TABLE `vehicle_staff`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `vehicle_student`
--
ALTER TABLE `vehicle_student`
  ADD PRIMARY KEY (`matric_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
