-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2017 at 02:25 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `company`, `title`, `email`, `phone`, `address`, `city`, `state`, `zip`, `notes`) VALUES
(20, 'Adam', 'Smith', 'Cisco', 'CEO', 'a.smith@cisco.com', '919-153-2963', '106 Fan Branch Ln', 'Chapel Hill', 'NC', '27514', 'Likes dogs'),
(21, 'Barny', 'Jones', 'Apple', 'Sales', 'barnyjones@apple.com', '919-520-4963', '200 Mendel Dr', 'Chapel Hill', 'NC', '27514', 'Likes cats'),
(25, 'Joe', 'Jones', 'SAS', 'Network Administrator', 'jj@yahoo.com', '919-406-3593', '193 Davis Dr', 'Cary', 'NC', '27513', 'Likes food'),
(26, 'Sam', 'Theman', 'NY Times', 'Editor', 'samistheman@nytimes.com', '343-204-1496', '495 Broadway Ave', 'Queens', 'NY', '548295', 'Likes books'),
(27, 'Bobby', 'Newport', 'Sweetums', 'CEO', 'bbnp@gmail.com', '195-395-3928', '222 Sweetums Ln', 'Portland', 'ID', '38567', 'Sweet'),
(28, 'Mary', 'Lee', 'The Independent Planners', 'Artist', 'MaryBLee@teleworm.us', '678-355-2359', '926 Meadowbrook Mall Rd', 'Wilmington', 'CA', '90744', 'Favorite color is blue'),
(29, 'Evan', 'Brown', 'UPS', 'Driver', 'evanb1337@ups.com', '773-245-3963', '395 Big Baller Ln', 'Chicago', 'IL', '60605', 'Nice guy'),
(30, 'Rita', 'Castile', 'Morville', 'Dentist', 'ritalicious@hotmail.com', '619-364-3737', '286 Ashcraft Court', 'San Diego', 'CA', '92110', 'Has 12 cats'),
(33, 'Patricia', 'Harvey', 'Chipotle', 'Chef', 'p.harvey@yahoo.com', '971-204-7245', '4931 Hope Street', 'Joplin', 'MS', '64804', 'Widow'),
(34, 'Neiman', 'Marcus', 'Nordstrom', 'Personal Stylist', 'nmarc@gmail.com', '706-765-7027', '2829 Radio Park Drive', 'Atlanta', 'GA', '30328', 'Blond hair'),
(35, 'Rick', 'Owens', 'Nike', 'CFO', 'bigrick1@nike.com', '917-714-4692', '4273 Hanover St', 'New York', 'NY', '10007', 'Favorite color is black'),
(36, 'Hank', 'Hill', 'Strickland Propane', 'Manager', 'iluvpropane@hotmail.com', '570-748-2363', '4269 Simons Hollow Rd', 'Arlen', 'TX', '26587', 'Republican'),
(37, 'Shirley', 'Lu', 'Paws n'' Claws', 'CEO', 'hello@pawsnclaws', '919-583-2953', '1201 Bow Wow Ave', 'New York', 'NY', '11101', 'Best vet'),
(38, 'Hilda', 'Jones', 'Xerox', 'Database Administrator', 'hilda@hotmail.com', '262-836-8264', ' 2508 Joseph St', 'Milwaukee', 'WI', '53202', 'Has dog named Max'),
(39, 'George', 'Reece', 'Starbucks', 'Cashier', 'gmreece@gmail.com', '530-394-6756', '1788 Riverwood Dr', 'Birmingham', 'AL', '35282', 'Don''t ask about wife'),
(40, 'Deborah', 'Muse', 'HP', 'Sales Manager', 'dmuse@hp.com', '830-885-4515', '4810 Parrish Av', 'Waco', 'TX', '78130', 'Hates kids'),
(41, 'Linda', 'Seay', 'Harris Teeter', 'Pharmacy Technician', 'lindaseay@email.unc.edu', '813-833-5729', '1783 Collins St', 'Muncie', 'IN', '47303', 'Favorite movie is Django'),
(42, 'Hilda', 'Jones', 'Xerox', 'Database Administrator', 'hilda@hotmail.com', '262-836-8264', '2508 Joseph St', 'Milwaukee', 'WI', '53202', 'Has dog named Max'),
(43, 'Linda', 'Otis', 'Time Warner Cable', 'Salesperson', 'lindabinda@gmail.com', '808-282-9118', '4350 Stratford Dr', 'Waipahu', 'HI', '96797', '5'' 3"'),
(44, 'Issac', 'Quintero', 'Best Buy', 'Geek Squad Technician', 'issacq@bestbuy.com', '770-309-0861', '3020 Fowler Av', 'Debary', 'FL', '32753', 'Prefers PCs');

-- --------------------------------------------------------

--
-- Table structure for table `edit_id`
--

DROP TABLE IF EXISTS `edit_id`;
CREATE TABLE IF NOT EXISTS `edit_id` (
  `edit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edit_id`
--

INSERT INTO `edit_id` (`edit_id`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `first_letter`
--

DROP TABLE IF EXISTS `first_letter`;
CREATE TABLE IF NOT EXISTS `first_letter` (
  `letter` char(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_letter`
--

INSERT INTO `first_letter` (`letter`, `id`) VALUES
('a', 0),
('b', 0),
('c', 0),
('d', 0),
('e', 0),
('f', 0),
('g', 0),
('h', 0),
('i', 0),
('j', 0),
('k', 0),
('l', 0),
('m', 0),
('n', 0),
('o', 0),
('p', 0),
('q', 0),
('r', 0),
('s', 0),
('t', 0),
('u', 0),
('v', 0),
('w', 0),
('x', 0),
('y', 0),
('z', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_id`
--
ALTER TABLE `edit_id`
  ADD PRIMARY KEY (`edit_id`);

--
-- Indexes for table `first_letter`
--
ALTER TABLE `first_letter`
  ADD PRIMARY KEY (`letter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
