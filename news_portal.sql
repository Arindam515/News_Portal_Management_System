-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(31, 'TechNews', 1),
(35, 'Covid', 1),
(33, 'Cricket', 3),
(34, 'Sports', 5);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(50, 'Olympic ', 'Australia were bowled out for 62 - their lowest T20 total - as Bangladesh claimed a thumping 60-run win in the fifth T20 international in Dhaka; Shakib Al Hasan took 4-9 as the hosts sealed a comprehensive 4-1 series win.', '34', '12 Aug, 2021', 37, '1628786241-1627109594-8221.jpg'),
(46, 'Sports', 'The Olympic Games are the world\'s only truly global, multi-sport, celebratory athletics competition. With more than 200 countries participating in over 400 events across the Summer and Winter Games, the Olympics are where the world comes to compete, feel inspired, and be together.', '34', '12 Aug, 2021', 37, '1628785950-2021-02-19-tokyo-thumbnail.jpg'),
(40, 'Covid', '                    “I’m going to upset some people on this, but I think we should,” he said, when asked if he thought teachers should be mandates to vaccinate teachers.\r\nHe continued: “We are in a critical situation now. We’ve had 615,000-plus deaths and we are in a major surge now as we’re going into the fall, into the school season. This is very serious business. You would wish that people would see why it’s so important to get vaccinated.”  \r\n\r\nThere won’t be central mandates from the federal government, he said. \r\n\r\n“But when you’re talking about local mandates, mandates for schools, for teachers, for universities, for colleges, I’m sorry, I mean I know people must like to have their individual freedom and not be told to do something,” he said. “But, I think we’re in such a serious situation now that under certain circumstances mandates should be done.” \r\n\r\nHe said that these mandates could “absolutely” come from governors, and he believes that when full approval for the vaccines comes from the US Food and Drug Administration, “I think you’re going to see that local institutions, local enterprises are going to feel empowered and appropriately so, they’re not worried about any, you know, getting sued or anything, that they’re going to be saying if you want to go to this university or if you want to go to this college, you got to be vaccinated. If you want to work in our organization, you have to be vaccinated. I think we’re going to see a lot more of that.”                 ', '35', '06 Aug, 2021', 28, '1628640071-corona_test_logo.jpg'),
(45, 'TechNews', '                                                            This is TechNews . This is Technews.                                           ', '31', '12 Aug, 2021', 37, '1628785230-1628639706-hack.jpg'),
(51, 'Olympic gold win ', 'Tokyo 2020 Olympic Games Medal Design Concept\r\nThe design of the Tokyo 2020 Olympic medals reflects the concept that, to achieve glory, athletes have to strive for victory on a daily basis. The medals resemble rough stones that have been polished and now shine, with “light” and “brilliance” their overall themes. The medals collect and reflect myriad patterns of light, symbolising the energy of the athletes and those who support them. Their design is intended to symbolise diversity and represent a world where people who compete in sports and work hard are honoured. The brilliance of the medals signifies the warm glow of friendship symbolising people all over the world holding hands.\r\n\r\nIn order to come up with a range of designs to choose from, Tokyo 2020 held a competition open to professional designers and design students which attracted more than 400 entries.', '34', '12 Aug, 2021', 37, '1628786311-16275750365201.jpg'),
(52, 'Olympic ', '                                        Tokyo 2020 Olympic Games Medal Design Concept\r\nThe design of the Tokyo 2020 Olympic medals reflects the concept that, to achieve glory, athletes have to strive for victory on a daily basis. The medals resemble rough stones that have been polished and now shine, with “light” and “brilliance” their overall themes. The medals collect and reflect myriad patterns of light, symbolising the energy of the athletes and those who support them. Their design is intended to symbolise diversity and represent a world where people who compete in sports and work hard are honoured. The brilliance of the medals signifies the warm glow of friendship symbolising people all over the world holding hands.\r\n\r\nIn order to come up with a range of designs to choose from, Tokyo 2020 held a competition open to professional designers and design students which attracted more than 400 entries.                                ', '34', '12 Aug, 2021', 37, '1628786491-334250-olypic.jpg'),
(43, 'Cricket', '                                                                                                    After taking a 2-0 series lead with memorable wins in the first two matches, the hosts aim to finish the job with another victory against the under-pressure visitors \r\n\r\nOverview\r\n\r\nBangladesh vs Australia, third T20I\r\nSher-e-Bangla National Cricket Stadium, Mirpur, Dhaka\r\n6 August, 18:00 local\r\n\r\nWith two matches in the bag, Bangladesh know that one final push will be enough to seal a historic series victory at home against the Australians. Another win will mean that the hosts will take an unassailable 3-0 lead in the five-match series. With so much at stake, Bangladesh will back their tried and trusted performers to get the job done. \r\n\r\nThe visitors on the other hand have been plagued by much of the same issues from the West Indies tour – a lack of explosiveness and consistency in their batting department. The bowlers have done well to keep Australia alive in matches, but the batting has failed to inspire any sort of confidence with their meek display. Staring at a series loss, it is a final opportunity for the batsmen to show an upturn in their form. \r\n\r\nRemember the last time\r\n\r\nAustralia again struggled with the bat against the variations of the Bangladesh bowlers, meandering their way to a total of 121/7. Mitchell Marsh (45) was the sole contributor during their batting effort.   kk                                                                              ', '33', '10 Aug, 2021', 37, '1628785970-2449035_New Project (1).jpg'),
(47, 'Bangladesh win vs Australia', 'Australia were bowled out for 62 - their lowest T20 total - as Bangladesh claimed a thumping 60-run win in the fifth T20 international in Dhaka; Shakib Al Hasan took 4-9 as the hosts sealed a comprehensive 4-1 series win.\r\n', '33', '12 Aug, 2021', 37, '1628786113-325580.4.jpg'),
(48, 'Bangladesh Cricket', 'Australia were bowled out for 62 - their lowest T20 total - as Bangladesh claimed a thumping 60-run win in the fifth T20 international in Dhaka; Shakib Al Hasan took 4-9 as the hosts sealed a comprehensive 4-1 series win.', '33', '12 Aug, 2021', 37, '1628786142-skysports-getty-bangladesh_5473392.jpg'),
(49, 'Australia vs Bangladesh ', 'Australia were bowled out for 62 - their lowest T20 total - as Bangladesh claimed a thumping 60-run win in the fifth T20 international in Dhaka; Shakib Al Hasan took 4-9 as the hosts sealed a comprehensive 4-1 series win.', '34', '12 Aug, 2021', 37, '1628786216-wo 01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Israfil', 'Israfil', '2021-08-13 19:57:10'),
(2, 1, 'How are you ? ', 'Jony', '2021-08-13 19:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(29, 'Md', 'Safi', 'safi', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(41, 'Tonmoy', 'Goesh', 'Tonmoy', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(37, 'Arindam', 'deyy', 'arindam', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(46, 'md.', 'Jony', 'Jony', '123Jony!@#', 0),
(45, 'Salman', 'Khan', 'Salman', 'Jony123!@#', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
