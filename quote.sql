-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 18, 2021 at 02:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_id`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `quote_table`
--

CREATE TABLE `quote_table` (
  `id` int(11) NOT NULL,
  `quotes` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `quote_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_table`
--

INSERT INTO `quote_table` (`id`, `quotes`, `images`, `quote_by`) VALUES
(17, ' “Failure is simply the opportunity to begin again, this time more intelligently.”', 'quote.jpg', 'Henry Ford'),
(18, ' “A person who never made a mistake never tried anything new.”', 'quote.jpg', 'Albert'),
(19, ' “Darkness cannot drive out darkness; only light can do that. Hate cannot drive out hate; only love can do that.” ', 'quote.jpg', 'Martin Luther King, Jr.'),
(20, ' “Kindness is the language which the deaf can hear and the blind can see.” ', 'quote.jpg', 'Mark Twain'),
(21, '“With or without religion, you would have good people doing good things and evil people doing evil things. But for good people to do evil things, that takes religion.” ', 'quote.jpg', 'Steven Weinberg'),
(22, '“Positive thinking will let you do everything better than negative thinking will.”', 'quote.jpg', 'Zig Ziglar'),
(23, '“You have enemies? Good. That means you’ve stood up for something, sometime in your life.” ', 'quote.jpg', 'Winston Churchill'),
(24, '“Once you replace negative thoughts with positive ones, you’ll start having positive results.”', 'quote.jpg', 'Willie Nelson'),
(25, ' “When obstacles arise, you change your direction to reach your goal; you do not change your decision to get there.”', 'quote.jpg', 'Zig Ziglar'),
(26, ' “People must learn to hate. And if they can learn to hate, they can be taught to love.”', 'quote.jpg', 'Nelson Mandela'),
(27, '“The ultimate measure of a man is not where he stands in moments of comfort and convenience, but where he stands at times of challenge and controversy.”', 'quote.jpg', 'Martin Luther King, Jr.'),
(28, '“Spend your free time the way you like, not the way you think you’re supposed to.”', 'quote.jpg', 'Susan Cain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_table`
--
ALTER TABLE `quote_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quote_table`
--
ALTER TABLE `quote_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
