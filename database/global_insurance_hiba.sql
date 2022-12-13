-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_insurance_hiba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('global@10', 'hiba@05');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
('hiba@101', 'hiba@12', 'hiba', 'koregaon Bhima', '7798182682'),
('nazrana@301', 'nazrana@098', 'nazrana', 'katraj', '7896352417'),
('saniya@103', 'saniya@123', 'saniya', 'hadapsar', '7986258145'),
('shifa@109', 'shifa@234', 'shifa', 'mumbai', '7896352417'),
('shirlyn@102', 'shirlyn@09', 'shirlyn', 'camp', '8836452541'),
('zohaib@208', 'zohaib@123', 'zohaib', 'kondhwa', '8956022004');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `policy_id`, `agent_id`, `image`) VALUES
('1668520890', 'ayyan@123', 'Ayyan anis inamdar', 'male', '07/03/2005', 'single', 'Indian', '7798182681', 'koregaon bhima taluka shirur dist pune', '201', 'hiba@101', 'user.gif'),
('1668606699', 'avize@13', 'Avize Anis Inamdar', 'male', '23/04/2008', 'single', 'Indian', '9685344628', 'koregaon park ', '2', 'hiba@101', 'WhatsApp Image 2022-11-09 at 9.07.44 AM.jpeg'),
('1668666909', 'abc@123', 'ABC', 'male', '15/09/2002', 'single', 'Indian', '7798182681', 'pune', '13', 'zohaib@208', 'imgonline-com-ua-resize-hwlMO3BXxXX1tU.jpg'),
('1668690062', 'deep@13', 'deep', 'male', '07/03/2005', 'single', 'Indian', '8956022004', 'koregaon bhima taluka shirur dist pune', '1', 'hiba@101', 'WhatsApp Image 2022-11-09 at 9.07.44 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` varchar(200) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`) VALUES
('1668520890-2043567298', '1668520890', 'anis', 'male', '10/01/1984', 'Indian', 'father', 'high', '9673655990'),
('1668606699-783963194', '1668606699', 'hina', 'female', '1/071978', 'Indian', 'mother', 'high', '7596358421'),
('1668666909-395250474', '1668666909', 'xyz', 'female', '10/01/1984', 'Indian', 'father', 'high', '9673655990'),
('1668690062-1743940635', '1668690062', 'xyz', 'female', '1/071978', 'Indian', 'father', 'high', '9673655990');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `payment_date`, `payment_method`, `month`, `amount`, `due`, `fine`, `agent_id`) VALUES
('1669303743_444756784', '1668437989', '2022-11-24', 'cash', 'november', '5000', '0', '0', 'zohaib@208');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(50) NOT NULL,
  `policy_desc` varchar(255) NOT NULL,
  `term` varchar(50) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `per_year` int(10) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(50) NOT NULL,
  `age_limit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `policy_desc`, `term`, `total_amount`, `per_year`, `payment_method`, `coverage`, `age_limit`) VALUES
(1, 'Your family needs your love and care. What they also need is financial security. Financial security to enjoy a comfortable lifestyle today, as well fund their dreams and goals in the future. And, as you work towards their financial security, Aditya Birla ', '10 years', 500000, 10000, 'cash', '90%', 45),
(2, 'While strengthening your physical immunity, you need to build your financial immunity to prepare for life\'s uncertainties. With SBI Life - eShield Next, a new age protection plan that enables you to take care of your current requirements and your changing', '6', 45253623, 663922, 'cash/cheque', '40%', 25),
(3, 'Your financial needs are as unique as your life experiences and goals. You may be planning to buy a house, send your children for higher studies or even retire early. No matter what your milestones, you need a protection solution that is tailored to help ', '6', 452536, 66392, 'cash/cheque', '60%', 35),
(4, 'Click 2 Protect Plus is a term insurance plan launched by HDFC life that assures an extensive protection to your loved ones against life\'s uncertainties. Even their timely necessities will be taken care of with a monthly income under the Income and Income', '5 years', 2300000, 639512, 'cash/cheque', '95%', 45),
(5, '\r\nTop 10 Life Insurance Policies in India\r\nVisit the BankBazaar website to know about the top insurance plans for this year. This will help you know about the type of insurance product that you are looking for yourself and which is the best insurance poli', '8 years', 67585421, 663928, 'cash/cheque', '80%', 45),
(6, 'BSLI Protect@Ease Plan is a term insurance plan that guarantees an end-to-end financial protection to your family in the event of your death. The plan has been tailored to meet each and every requirement of a family, and hence it comes with flexible cover', '9 years', 8900000, 5469713, 'cash/cheque', '98%', 45),
(7, 'Jeevan Pragati is a non-linked life insurance plan offered by LIC, which is a combination of life cover and savings. The plan qualifies for an automatic increase in risk cover in every 5 years during the term. Policyholders can also avail loan facility un', '10 years', 2300000, 66392223, 'cash', '76%', 52),
(8, 'awnaibwrci hewuiubtoinern jewhrivtrn rutg jeriyubmr n i', '5', 500000, 10000, 'cash/cheque', '50%', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);
  ADD UNIQUE KEY `admin_id` (`admin_id`);
--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
