-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 07:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_e_Mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`user_id`, `name`, `c_e_Mail`) VALUES
(3, 'camtasia', 'camtasia@gmail.com'),
(12, 'cic', 'wa@gmail.com'),
(4, 'wso2', 'lanka@gmail.com'),
(18, 'andsew', 'annee@gmail.com'),
(22, 'banda', 'banda123@gmail.com'),
(61, 'koka industries', '132@gmail.'),
(63, 'hadi', 'hadilkhlkhlk@gmail.com'),
(66, '123345', 'abci@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_cv`
--

CREATE TABLE `job_cv` (
  `job_id` int(5) NOT NULL,
  `apply_company` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cv_name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_cv`
--

INSERT INTO `job_cv` (`job_id`, `apply_company`, `fname`, `lname`, `email`, `cv_name`, `location`) VALUES
(0, '', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(0, '', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(10, 'sysco labs', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(7, 'wso2', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(7, 'wso2', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(10, 'sysco labs', '', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(8, 'sysco labs', 'oshada ', 'senanayaka', 'oshada@gmail.com', 'h.png', '../uploads/cv/h.png'),
(10, 'sysco labs', 'oshada ', 'senanayaka', 'oshada@gmail.com', 'IT3204_2012_Part2_ans.pdf', '../uploads/cv/IT3204_2012_Part2_ans.pdf'),
(18, 'wso2', 'bhagya', 'minali', 'bagya@gmail.com', 'IT3204_2011_Part2_ans.pdf', '../uploads/cv/IT3204_2011_Part2_ans.pdf'),
(9, 'sysco labs', 'anurasiri', 'muthumala', 'anurasiri@gmail.com', 'IT3204_2012_Part2_ans.pdf', '../uploads/cv/IT3204_2012_Part2_ans.pdf'),
(6, 'camtasia', 'anurasiri', 'muthumala', 'anurasiri@gmail.com', 'IT3204_2012_Part1.pdf', '../uploads/cv/IT3204_2012_Part1.pdf'),
(5, 'camtasia', 'anurasiri', 'muthumala', 'anurasiri@gmail.com', 'IT3204_2012_Part2_ans.pdf', '../uploads/cv/IT3204_2012_Part2_ans.pdf'),
(23, 'banda', 'oshada ', 'senanayaka', 'oshada@gmail.com', 'CMS.pdf', '../uploads/cv/CMS.pdf'),
(2, 'camtasia', 'siripala', 'sumanadasa', 'siripala@gmail.com', '2_2015_s_n.pdf', '../uploads/cv/2_2015_s_n.pdf'),
(23, 'amith industries', 'thisura', 'thisura', 'thisura@gmail.com', 'reserve.png', '../uploads/cv/reserve.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `job_id` int(5) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `user_id` int(10) NOT NULL,
  `attachment_loc` varchar(50) NOT NULL,
  `attachment_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`job_id`, `job_title`, `type`, `c_name`, `description`, `user_id`, `attachment_loc`, `attachment_name`) VALUES
(1, 'web development', 'web application', 'ucsc', 'i want to hire web developer', 10, 'hhh', '123'),
(2, 'sdsds', 'web_application', 'camtasia', 'sdsds', 3, '1', 'upload.php'),
(3, 'dfgdmngdfng', 'data_entry', 'camtasia', 'sdsds', 3, '1', 'city_percen'),
(4, 'dfgdmngdfngsdsdsdsdsds', 'data_entry', 'camtasia', 'sdsdssdsd', 3, '../uploads/files/IT3204_2013_Part1_ans.pdf', '../uploads/'),
(5, 'dfgdmngdfngsdsdsdsdsds', 'data_entry', 'camtasia', 'sdsdssdsd', 3, '../uploads/files/IT3205_2016_Part I.pdf', 'IT3205_2016'),
(6, 'qq', 'web_application', 'camtasia', 'wq', 3, '../uploads/files/IT3204_2013_Part1_ans.pdf', 'IT3204_2013'),
(8, 'software engineer', 'software_engineering', 'sysco labs', 'i want to hire a software enngineer', 7, '../uploads/files/a.jpg', 'a.jpg'),
(9, 'software engineer', 'HR', 'sysco labs', 'i want to hire ahr assistance', 7, '../uploads/files/a_002.jpg', 'a_002.jpg'),
(10, 'software engineer', 'accounting', 'sysco labs', 'i want to hire ahraccounting', 7, '../uploads/files/Untitled Project_player.html', 'Untitled Pr'),
(11, 'quality assuarance', 'accounting', 'wso2', 'dsfdsfdsfdsgfdbsgdfgbfdb', 4, '../uploads/files/IT3204_2011_Part1_ans.pdf', 'IT3204_2011'),
(14, 'dsfdsf', 'web_application', '', 'dsfsdfdsf', 0, '../uploads/files/IT3204_2013_Part1_ans.pdf', 'IT3204_2013'),
(18, 'quality assuarance', 'web_application', 'wso2', 'dfdsfdsfdsf', 4, '../uploads/files/IT3204_2012_Part2_ans.pdf', 'IT3204_2012'),
(20, 'fbgdfbg', 'web_application', 'wso2', 'sdfgsdgdsgdgd', 4, '../uploads/files/IS 2003 - 2016.pdf', 'IS 2003 - 2'),
(21, 'fbgdfbg', 'web_application', 'wso2', 'sdfgsdgdsgdgd', 4, '../uploads/files/IS 2003 - 2016.pdf', 'IS 2003 - 2'),
(22, 'dsfdsf', 'web_application', 'wso2', 'gfhgfhgfhgf', 4, '../uploads/files/IS 2003 - 2015.pdf', 'IS 2003 - 2');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `type_id` int(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`type_id`, `type`, `value`) VALUES
(1, 'web application', 'web_application'),
(2, 'data entry', 'data_entry'),
(3, 'accounting', 'accounting'),
(4, 'HR', 'HR'),
(5, 'software engineering', 'software_engineering'),
(6, 'bank', 'bank');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(400) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Fname`, `Lname`, `email`, `password`, `telephone`, `usertype`) VALUES
(3, 'malindu ', 'muthumala', 'lanka123@gmail.com', 'c379ce0ebbf20b9bd736b7b614ef568061d97d94d53f7046138daf083bd207bb', '0112147575', 'company'),
(4, 'lanka', 'rathnayaka', 'lanka@gmail.com', '91948e8d77bd7ec7ebff21c6d846cdbc160acad663718b609c34f56790d055bf', '0769346108', 'company'),
(5, 'gayath', 'chandira', 'gayath@gmail.com', '2b59f1fb3354e9c2a30b2f5f226e026a03cfed3b3a89c43f8f71e012c149d2ae', '011454554', 'company'),
(7, 'himath', 'himath', 'himath@gmail.com', '0dcd29436fbb84fee727ca51dc471d9e6e97b29450842c84b70018994c7129f4', '077325454', 'company'),
(9, 'warushika', 'hazanda', 'warushika@gmail.com', 'bb05a7f16df11d1e6e7830e1d0acf164ad57ceb8003717e3fa1d26bed24915cd', '074512541', 'company'),
(10, 'ayesh', 'nipun', 'ayesh@gmail.com', '9f1c2abd5a3fc74dd6f6d5db3ef4d993aebe9e76b08bcb2a5e2bb4528802fc2d', '687687', 'company'),
(11, 'nilakshi', 'jayasundara', 'nilakshi@gmail.com', 'ff75ae181321f36b11d35611d4367802a6e8bf08b126b41e21bbbecf9eb139c5', '01545454', 'company'),
(12, 'bathiya', 'mihitran', 'mihiran@gmail.com', '7d6386ed538082df27e6d631214d8d9274e7ade5a2d0712022cece1674621f33', '545454', 'company'),
(13, 'oshada ', 'senanayaka', 'oshada@gmail.com', 'e73ee49e3775d7b299eb83d25068e1362d060e07b799c6733a86abb7d2e31637', '077929561', 'employee'),
(14, 'bhagya', 'minali', 'bagya@gmail.com', 'cd1ba85f300ec86c4b5f5a76cb6074784ac3a9cb3b49181117feda1211bc0219', '5456464654', 'employee'),
(15, 'anurasiri', 'muthumala', 'anurasiri@gmail.com', '92073e8ea2c117af3c24adf2f6774d6ddf90df6fb4415a520adccadbc86c89ef', '0121212', 'employee'),
(17, 'admin', 'admin', 'admin@gmail.com', '57a147b2257ec66adb150f43d86a73594fbf0e37c0698c04892f6b36b392265a', 'admin', 'admin'),
(18, 'anne', 'lasanthi', 'anne@gmail.com', '489843e536e30a5311a49fadf8dc5f5a131bd06e0e1dd7403c1824c4aebc5b9d', '07122541245', 'company'),
(22, 'rajithta', 'banda', 'banda@gmail.com', 'd9e6c0549c002b565c63a1798169f373d27d84012126fc5fe423ac021602d21e', '35456464', 'company'),
(51, 'malindu', '', 'asjkfhjsaf', '5a76c03fdd69266a97ab34e52533a285817e55792d597c6899ed8230f8d348da', 'lasiyflisaf', 'company'),
(63, 'amith', 'liyanage', 'hadi@gmail.com', '84d1f05cdadc11c50c35e4ecb50a74c1113d6af76a5510eca0efa8fccb3aab60', '21', 'company'),
(66, 'abcd', 'efgh', 'dinithi@gmail.com', '724b5e922c55c595aa78783918b38b61ce23cfd4cc1fe7c3c46c0ebba55750fe', '12121', 'company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
