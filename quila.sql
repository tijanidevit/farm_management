-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 10:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quila`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `commenter_id`, `comment`, `comment_time`) VALUES
(17, 2, 19, 'Seriously. I love this', '2020-03-17 22:00:59'),
(18, 2, 19, 'Keep it up', '2020-03-17 22:18:48'),
(19, 2, 19, 'You really tried', '2020-03-17 22:18:59'),
(20, 2, 19, 'Keep Learning sir', '2020-03-17 22:19:15'),
(21, 2, 19, 'More of what I love', '2020-03-17 22:19:25'),
(22, 2, 19, 'Bravo', '2020-03-17 22:19:39'),
(37, 2, 19, 'I love your writing', '2020-03-17 22:40:59'),
(38, 2, 19, 'Good one bro', '2020-03-17 22:48:48'),
(39, 2, 19, 'Nice', '2020-03-17 22:50:20'),
(40, 2, 19, 'Keep on going', '2020-03-17 22:50:51'),
(41, 2, 19, 'Good', '2020-03-17 22:51:45'),
(42, 2, 19, ' Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box ', '2020-03-17 22:52:19'),
(50, 2, 19, ' Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box  Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box ', '2020-03-17 22:53:29'),
(51, 2, 19, 'Oh Yeah!', '2020-03-18 17:30:33'),
(52, 2, 19, 'You are going places.', '2020-03-18 17:37:33'),
(53, 2, 19, 'Great', '2020-03-18 17:38:33'),
(54, 2, 19, 'Go', '2020-03-18 17:39:47'),
(55, 2, 19, 'Go', '2020-03-18 17:39:47'),
(56, 2, 19, 'Go', '2020-03-18 17:39:48'),
(57, 2, 19, 'Go', '2020-03-18 17:39:48'),
(58, 2, 19, 'Go', '2020-03-18 17:39:48'),
(59, 2, 19, 'Go', '2020-03-18 17:39:48'),
(60, 2, 19, 'Go', '2020-03-18 17:39:48'),
(61, 2, 19, 'Go', '2020-03-18 17:39:48'),
(62, 2, 19, 'Go', '2020-03-18 17:39:48'),
(63, 2, 19, 'Go', '2020-03-18 17:39:48'),
(64, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(65, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(66, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(67, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(68, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(69, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(70, 2, 19, 'Yeah', '2020-03-18 17:40:14'),
(71, 2, 19, 'Yeah', '2020-03-18 17:40:15'),
(72, 2, 19, 'Yeah', '2020-03-18 17:40:15'),
(73, 2, 19, 'Yeah', '2020-03-18 17:40:15'),
(74, 2, 19, 'Yes', '2020-03-18 17:43:04'),
(75, 2, 19, 'No', '2020-03-18 17:43:12'),
(76, 2, 19, 'Great', '2020-03-18 17:47:26'),
(77, 2, 19, 'Help oThers TOO', '2020-03-18 17:47:57'),
(78, 2, 19, 'Cool', '2020-03-18 17:50:20'),
(79, 2, 19, 'Cool', '2020-03-18 17:50:45'),
(80, 2, 19, 'Yeah', '2020-03-18 17:50:51'),
(81, 2, 19, 'Okay naaa', '2020-03-18 17:50:57'),
(82, 2, 19, 'Keep it on', '2020-03-18 17:52:33'),
(83, 2, 19, 'To hte hdh', '2020-03-18 17:52:47'),
(84, 2, 19, 'Okay', '2020-03-18 17:52:59'),
(85, 2, 19, 'Okay', '2020-03-18 17:55:40'),
(86, 2, 19, 'Okay', '2020-03-18 17:55:47'),
(87, 2, 19, 'GOne', '2020-03-18 18:48:30'),
(88, 2, 19, 'Lovely', '2020-03-18 18:48:39'),
(89, 2, 19, 'Cool', '2020-03-18 18:49:17'),
(90, 2, 19, 'Yes', '2020-03-18 18:49:26'),
(91, 2, 19, 'Right', '2020-03-18 18:49:39'),
(92, 2, 19, 'Oh', '2020-03-18 18:50:21'),
(93, 2, 19, 'Yes', '2020-03-18 18:50:32'),
(94, 2, 19, 'Hello', '2020-03-18 18:50:43'),
(95, 2, 19, 'Find it well', '2020-03-18 18:51:31'),
(96, 2, 19, 'Alright', '2020-03-18 18:51:53'),
(97, 2, 19, 'Yeah', '2020-03-18 19:51:10'),
(98, 2, 19, 'Yeah', '2020-03-18 19:51:45'),
(99, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(100, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(101, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(102, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(103, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(104, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(105, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(106, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(107, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(108, 2, 19, 'Okay', '2020-03-18 19:55:46'),
(109, 2, 19, 'Yes', '2020-03-18 19:56:07'),
(110, 2, 19, 'h', '2020-03-18 20:00:13'),
(111, 2, 19, 'Cool', '2020-03-18 20:02:25'),
(112, 1, 19, 'Great One', '2020-03-18 21:13:45'),
(113, 1, 19, ' Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.', '2020-03-18 21:14:50'),
(114, 3, 19, 'Great one sir', '2020-03-19 14:30:37'),
(115, 3, 19, 'Cool', '2020-03-19 14:31:29'),
(116, 19, 19, 'Alright', '2020-03-19 14:49:13'),
(117, 19, 19, 'Holla', '2020-03-19 14:50:18'),
(118, 18, 19, 'Fly', '2020-03-24 21:45:46'),
(119, 18, 19, 'Go', '2020-03-24 21:47:03'),
(120, 18, 19, 'Go', '2020-03-24 21:47:03'),
(121, 18, 19, 'Go', '2020-03-24 21:47:03'),
(122, 18, 19, 'Go', '2020-03-24 21:47:03'),
(123, 18, 19, 'Go', '2020-03-24 21:47:03'),
(124, 18, 19, 'Go', '2020-03-24 21:47:03'),
(125, 18, 19, 'Go', '2020-03-24 21:47:03'),
(126, 18, 19, 'Go', '2020-03-24 21:47:03'),
(127, 18, 19, 'Go', '2020-03-24 21:47:03'),
(128, 18, 19, 'Go', '2020-03-24 21:47:03'),
(129, 18, 19, 'Keep On', '2020-03-24 21:47:11'),
(130, 18, 19, 'Go', '2020-03-24 21:47:16'),
(131, 18, 19, 'Yeah', '2020-03-24 21:48:15'),
(132, 18, 19, 'Yeah', '2020-03-24 21:55:29'),
(133, 14, 61, 'Great', '2020-03-25 04:26:35'),
(134, 20, 19, 'great\r\n', '2020-04-07 13:25:47'),
(135, 59, 19, 'Fine. I love it', '2020-04-07 15:03:43'),
(136, 59, 19, 'Keep it up', '2020-04-07 15:03:53'),
(137, 59, 19, 'Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.', '2020-04-07 21:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `main_category_id` int(11) NOT NULL,
  `main_category` varchar(60) NOT NULL,
  `main_category_description` text NOT NULL,
  `main_category_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`main_category_id`, `main_category`, `main_category_description`, `main_category_icon`) VALUES
(1, 'Poems', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'football.png'),
(2, 'Prose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur ', 'football.png'),
(3, 'Stories', 'Series', 'football.png'),
(4, 'Professional Post', 'Professional Post', 'football.png'),
(5, 'Educational Post', 'Educational Post', 'football.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(300) NOT NULL,
  `post_rating` int(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `sub_category_id`, `topic`, `content`, `media`, `post_rating`, `post_time`) VALUES
(1, 1, 1, 'Arteta got recovered from Corona Virus', '<p class=\"\">Efficiently revolutionize impactful architectures for robust leadership. \r\n					Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \r\n					integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \r\n					relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \r\n					friendly networks.</p>\r\n				<p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \r\n					multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \r\n					echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \r\n					Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\r\n				<p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p>', 'arteta.jpg', 104, '2020-03-15 00:54:46'),
(2, 1, 1, 'Where next is corona virus taking football to?', '<p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p><p>Synergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing \r\n					procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical \r\n					methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively \r\n					integrate 24/7 methods of empowerment rather than sustainable channels.</p>\r\n				<p>Holisticly transition distinctive supply chains vis-a-vis high-quality initiatives. Conveniently visualize \r\n					value-added customer service before high-quality supply chains. Progressively promote ethical ROI with \r\n					long-term high-impact paradigms. Professionally morph user-centric bandwidth through resource sucking \r\n					catalysts for change. Uniquely grow unique partnerships whereas wireless systems.</p>\r\n				<p>Dramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource \r\n					sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and \r\n					collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. \r\n					Credibly build next-generation potentialities through standardized \"outside the box\" thinking.</p>', 'bof.jpg', 90, '2020-03-15 13:59:03'),
(3, 1, 1, 'Arteta1', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 71, '2020-03-19 14:23:07'),
(4, 1, 1, 'Arteta2', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:17'),
(5, 1, 1, 'Arteta3', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:17'),
(6, 1, 1, 'Arteta4', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:17'),
(7, 1, 1, 'Arteta5', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:17'),
(8, 1, 1, 'Arteta6', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:17'),
(9, 1, 1, 'Arteta7', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:41'),
(10, 1, 1, 'Arteta8', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:41'),
(11, 1, 1, 'Arteta9', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:41'),
(12, 1, 1, 'Arteta10', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:41'),
(13, 1, 1, 'Arteta11', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:41'),
(14, 1, 1, 'Arteta12', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 69, '2020-03-19 14:23:41'),
(15, 1, 1, 'Arteta13', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:42'),
(16, 1, 1, 'Arteta14', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:42'),
(17, 1, 1, 'Arteta15', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 67, '2020-03-19 14:23:42'),
(18, 1, 1, 'Arteta16', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 97, '2020-03-19 14:23:42'),
(19, 1, 1, 'Arteta17', '<p class=\\\"\\\">Efficiently revolutionize impactful architectures for robust leadership. \\r\\n Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer \\r\\n integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time \\r\\n relationships without intuitive communities. Rapidiously coordinate seamless content rather than user \\r\\n friendly networks.</p>\\r\\n <p>Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace \\r\\n multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric \\r\\n echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. \\r\\n Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.</p>\\r\\n <p>Synergistically create alternative ROI via', 'arteta.png', 71, '2020-03-19 14:23:42'),
(20, 19, 2, 'Bola', '           vvvhv     ', '7553-800px-M', 2, '2020-04-07 13:24:04'),
(21, 19, 2, 'Bola', '           vvvhv     ', '2112-800px-M', 0, '2020-04-07 13:24:17'),
(22, 19, 0, 'jhjh', '           jj     ', '5264-800px-M', 0, '2020-04-07 14:33:50'),
(23, 19, 0, 'jhjh', '           jj     ', '7522-800px-M', 0, '2020-04-07 14:33:53'),
(24, 19, 0, 'jhjh', '           jj     ', '9080-800px-M', 0, '2020-04-07 14:33:53'),
(25, 19, 0, 'jhjh', '           jj     ', '7736-800px-M', 0, '2020-04-07 14:33:53'),
(26, 19, 0, 'jhjh', '           jj     ', '2843-800px-M', 0, '2020-04-07 14:33:54'),
(27, 19, 0, 'jhjh', '           jj     ', '6913-800px-M', 0, '2020-04-07 14:34:16'),
(28, 19, 0, 'jhjh', '           jj     ', '2959-800px-M', 0, '2020-04-07 14:34:17'),
(29, 19, 0, 'jhjh', '           jj     ', '3574-800px-M', 0, '2020-04-07 14:34:18'),
(30, 19, 0, 'jhjh', '           jj     ', '6326-800px-M', 0, '2020-04-07 14:34:18'),
(31, 19, 0, 'jhjh', '           jj     ', '8939-800px-M', 0, '2020-04-07 14:34:18'),
(32, 19, 0, 'jhjh', '           jj     ', '2113-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:36:41'),
(33, 19, 0, 'jhjh', '           jj     ', '3807-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:38:07'),
(34, 19, 0, 'jhjh', '           jj     ', '3922-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:38:09'),
(35, 19, 0, 'jhjh', '           jj     ', '9503-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:38:09'),
(36, 19, 0, 'jhjh', '           jj     ', '8054-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:38:09'),
(37, 19, 0, 'jhjh', '           jj     ', '4621-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:38:09'),
(38, 19, 0, 'jhjh', '           jj     ', '2551-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:17'),
(39, 19, 0, 'jhjh', '           jj     ', '8990-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:18'),
(40, 19, 0, 'jhjh', '           jj     ', '3336-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:19'),
(41, 19, 0, 'jhjh', '           jj     ', '4418-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:19'),
(42, 19, 0, 'jhjh', '           jj     ', '3004-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:19'),
(43, 19, 0, 'jhjh', '           jj     ', '3656-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:19'),
(44, 19, 0, 'jhjh', '           jj     ', '5127-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:19'),
(45, 19, 0, 'jhjh', '           jj     ', '7308-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:20'),
(46, 19, 0, 'jhjh', '           jj     ', '9121-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:20'),
(47, 19, 0, 'jhjh', '           jj     ', '9822-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:39:20'),
(48, 19, 2, 'hjhj', '           kjnjs     ', '8929-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:30'),
(49, 19, 2, 'hjhj', '           kjnjs     ', '4040-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:32'),
(50, 19, 2, 'hjhj', '           kjnjs     ', '3576-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:32'),
(51, 19, 2, 'hjhj', '           kjnjs     ', '5405-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:32'),
(52, 19, 2, 'hjhj', '           kjnjs     ', '3886-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:33'),
(53, 19, 2, 'hjhj', '           kjnjs     ', '2137-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:33'),
(54, 19, 2, 'hjhj', '           kjnjs     ', '8481-800px-Manihot_Esculenta_Crantz_leaves.jpg', 0, '2020-04-07 14:40:33'),
(55, 19, 2, 'kj', '             n   ', '5905-Anthracnose_1.jpg', 0, '2020-04-07 14:41:15'),
(56, 19, 2, 'kj', '             n   ', '7629-Anthracnose_1.jpg', 0, '2020-04-07 14:41:41'),
(57, 19, 2, 'vjvggh', '             vvvj   ', '3717-Brown-leaf-spot.png', 0, '2020-04-07 14:43:37'),
(58, 19, 2, 'fjfg', 'ljknk                ', '4400-Anthracnose_1.jpg', 0, '2020-04-07 14:44:30'),
(59, 19, 2, 'Haunted Holiday', '     fficiently revolutionize impactful architectures for robust leadership. Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time relationships without intuitive communities. Rapidiously coordinate seamless content rather than user friendly networks.\r\n\r\nCredibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.\r\nfficiently revolutionize impactful architectures for robust leadership. Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time relationships without intuitive communities. Rapidiously coordinate seamless content rather than user friendly networks.\r\n\r\nCredibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.\r\nfficiently revolutionize impactful architectures for robust leadership. Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time relationships without intuitive communities. Rapidiously coordinate seamless content rather than user friendly networks.\r\n\r\nCredibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.\r\nfficiently revolutionize impactful architectures for robust leadership. Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time relationships without intuitive communities. Rapidiously coordinate seamless content rather than user friendly networks.\r\n\r\nCredibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.\r\nfficiently revolutionize impactful architectures for robust leadership. Intrinsicly e-enable inexpensive web-readiness vis-a-vis leveraged technology. Enthusiastically re-engineer integrated niche markets rather than principle-centered materials. Collaboratively unleash real-time relationships without intuitive communities. Rapidiously coordinate seamless content rather than user friendly networks.\r\n\r\nCredibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.           ', '7035-photo31@2x.jpg', 6, '2020-04-07 15:02:43');
INSERT INTO `posts` (`post_id`, `user_id`, `sub_category_id`, `topic`, `content`, `media`, `post_rating`, `post_time`) VALUES
(60, 19, 2, 'Life Alone', 'Credibly develop plug-and-play collaboration and idea-sharing and sticky systems. Dynamically embrace multifunctional web-readiness vis-a-vis client-centered core competencies. Appropriately utilize client-centric echnology after enterprise-wide sources. Assertively enable global innovation with process-centric expertise. Conveniently engage collaborative leadership vis-a-vis economically sound growth strategies.\r\n\r\nSynergistically create alternative ROI via flexible services. Appropriately scale cutting-edge testing procedures whereas emerging data. Proactively syndicate revolutionary mindshare without mission-critical methodologies. Holisticly exploit dynamic action items for out-of-the-box value. Collaboratively integrate 24/7 methods of empowerment rather than sustainable channels.\r\n\r\nDramatically develop bleeding-edge networks and functionalized content. Monotonectally aggregate resource sucking e-commerce before accurate e-commerce. Monotonectally iterate efficient testing procedures and collaborative partnerships. Holisticly iterate plug-and-play technologies before innovative e-commerce. Credibly build next-generation potentialities through standardized \"outside the box\" thinking.', '4579-bg_hero_landing.jpg', 0, '2020-04-07 21:35:31'),
(61, 19, 1, 'Love', '<p>Let me Introduce you to love:</p>\r\n<p><strong>I stopped</strong></p>\r\n<h1>Okay</h1>', '4877-bg_hero_landing.jpg', 0, '2020-04-07 22:13:15'),
(62, 19, 2, 'd', '', '1049-bg_hero_landing.jpg', 0, '2020-04-07 23:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `post_like_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`post_like_id`, `liker_id`, `post_id`) VALUES
(8, 19, 2),
(9, 19, 1),
(14, 19, 3),
(16, 19, 19),
(20, 61, 14),
(21, 19, 20),
(22, 19, 59),
(23, 19, 61),
(25, 19, 60);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_category_id` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `sub_category` varchar(70) NOT NULL,
  `sub_category_description` varchar(400) NOT NULL,
  `sub_category_icon` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_category_id`, `main_category_id`, `sub_category`, `sub_category_description`, `sub_category_icon`) VALUES
(1, 1, 'Love', 'Love', 'football.png'),
(2, 1, 'Fiction', 'Fiction', 'football.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_likes`
--

CREATE TABLE `sub_category_likes` (
  `sub_category_like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category_likes`
--

INSERT INTO `sub_category_likes` (`sub_category_like_id`, `user_id`, `sub_category_id`) VALUES
(67, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othernames` varchar(102) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_image` varchar(20) NOT NULL DEFAULT 'default.png',
  `status` int(11) NOT NULL,
  `verification_key` varchar(80) NOT NULL,
  `user_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `othernames`, `username`, `password`, `email`, `profile_image`, `status`, `verification_key`, `user_rating`) VALUES
(1, 'Mustapha', 'Mustapha Adekunle', 'tijanidevit', '80047cbb7ee39b73a48fd22ccec81042', 'thenewxpat@gmail.com', 'lap.png', 1, 'igcmiheer-11980271584106525', 17),
(18, 'Tijani', 'Mustapha Adekunle', 'Tijani', 'da21bbca54d339a4991fc6c6db075eb7', 'thenewxpat@gmail.co', 'default.png', 0, 'hergceiim-21869451584106919', 0),
(19, 'olaoluwa', 'olabiyi olakanmi', 'olaolaola', 'a065a175adad66ce851d7b76e0a2deea', 'olakunmiolaoluwa@gmail.com', 'default.png', 1, 'eimgiehrc-15890491584304996', 43),
(20, 'Tijani', 'Ayobami Ismail', 'adekunle1', '1ab1f3c9679aec21d94a28b7e9517efa', 'mubarak@gmail.com', 'default.png', 0, 'rcimegeih-10073441584569509', 0),
(61, 'Mustapha', 'Mustapha', 'thenewxpat', '770b2fde7ec39bddff39e1a0229a21e2', 'tijanidevit@gmail.com', 'default.png', 0, '512459', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`main_category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`post_like_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `sub_category_likes`
--
ALTER TABLE `sub_category_likes`
  ADD PRIMARY KEY (`sub_category_like_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `main_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `post_like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category_likes`
--
ALTER TABLE `sub_category_likes`
  MODIFY `sub_category_like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
