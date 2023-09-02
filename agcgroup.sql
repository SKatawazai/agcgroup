-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 03:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agcgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `agcabout`
--

CREATE TABLE IF NOT EXISTS `agcabout` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agcabout`
--

INSERT INTO `agcabout` (`id`, `title`, `content`) VALUES
(1, 'Achieving Today, What Is Possible Tomorrow', '<p>\nWe build brands that people love - and that add value to the everyday lives of millions around the world. We are the Alokozay Group of Companies. With a glorious history that spans over a century, we are one of the largest FMCG multinational companies in the Middle East. Headquartered in Dubai, we have a wide manufacturing and distribution network spread across the Middle East, Asia, Africa, North America and Europe.\n</p><p>\nAs a brand, we are passionate about offering our customers only the best; this reflected in our premium quality range of products - from our signature teas, delectable biscuits, 100% pure sunflower cooking oils, extra virgin olive oil, and extensive range of non-alcoholic beverages, to our soft and hygienic facial tissues, bathroom tissues, multipurpose towel, maxi roll, meticulously manufactured and personal care products, oral care, adult & kids face mask, evaporated milk, premium detergents, and our engine oil.</p>'),
(2, 'Numbers That Tell A Story', '<p>\nOur journey began with trading goods along the ancient silk road. We have since gone on to establish ourselves as a global powerhouse, with a presence in over 40 countries and a 35,000-strong member team world-over. We are an ISO-certified company, and we operate our own large-scale state-of-the-art manufacturing facilities, warehouses and logistics.</p>'),
(3, 'A Brand that on Trust ', '<p>\nUltimately, all our efforts are focused on one single objective - to be a brand people can trust. We achieve this by ensuring that we always maintain the highest standards of quality in all our areas of business. We are leaders in product development, research, and logistics. We scour the globe, ensuring that we source only the best quality raw materials, and have invested in world-class manufacturing facilities, to uphold the quality levels we’ve committed to. \n</p><p>\nPresent in 40+ Countries \n</p><p>\n35,000+ Global Team \n</p><p>\nISO Certified Company </p>'),
(4, 'Changing the World for the Better ', '<p>\nWe strive to achieve our primary objectives by placing people at the of all our activities. Being a part of the change this world needs, lies at the heart of this. The communities in which we operate form an intrinsic part of this journey. Which is why we have set up production units in countries that are most in need of an economic boost. With the objective of fostering the spirit of inclusion, we are proud to have created a wide range of job opportunities across the globe, providing people with an empowering, engaging and positive work environment.\n</p><p>\nOur motto Achieving today, what is possible tomorrow reflects our vision to create a brand that is loved and trusted by all, backed by innovation and social responsibility. To that end, our promise as a brand from the Alokozay Family to yours, is to create a safer, healthier and happier future for one and all. \n</p>'),
(5, 'KT&G', '<p>\nAs one of the distributors of KT&G for over 25 years, Alokozay successful partnership with the company has significantly boosted its momentum in global markets, through sustainable management and superior marketing. As the fifth-largest tobacco manufacturers in the world, KT&G is widely recognised for its unwavering commitment to quality and innovation. With an unparalleled record of adapting to contemporary requirements of users and by their distinctive manufacturing expertise, KT&G has dominated over 70% of the domestic market for cigarettes and has expanded its distribution to over 40 markets across the globe.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `agccareer`
--

CREATE TABLE IF NOT EXISTS `agccareer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agccareer`
--

INSERT INTO `agccareer` (`id`, `Title`, `Description`) VALUES
(1, 'Let Your Career Soar with Alokozay', '<p>\r\nOur motto Achieving today what is possible tomorrow has been made a reality with our talented pool of professionals that support us in our relentless pursuit of excellence. \r\n</p><p>\r\nWe take a lot of pride in our people, providing them with avenues to exploit their talents in a thriving work environment that helps them grow both individually and collectively. Whether you are just at the start of your career or a seasoned professional, you will receive world-class training and mentorship, where you will work on challenging assignments, lead important initiatives and be given ownership across a myriad of special projects. \r\n</p><p>\r\nNo matter what your calling, there is an opportunity at the Alokozay Group of Companies waiting for you. \r\n</p><p>\r\nCome be a part of a leading, global FMCG brand and take your career to the next level. </p>'),
(2, '<hr/><hr/><hr/><center>Job Opportunities at Alokozay Group of Companies</center>', '<hr/><p><h3>\r\nHR Assistant</p></h3>\r\n<p>\r\n<b>Department: Human Resources</p></b>\r\n<hr/>\r\n<p><h3>\r\nMarketing Manager</p></h3>\r\n<p>\r\n<b>Department: Marketing</p></b>\r\n<hr/>\r\n<p><h3>\r\nFront Office Executive</p></h3>\r\n<p>\r\n<b>Department: Administration</p></b>\r\n<p><h2>\r\nPlease send your CV to\r\ninfo@agc.company.af\r\n</p></h2>');

-- --------------------------------------------------------

--
-- Table structure for table `agcgroup`
--

CREATE TABLE IF NOT EXISTS `agcgroup` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agcgroup`
--

INSERT INTO `agcgroup` (`id`, `title`, `content`) VALUES
(1, 'Achieving Today, What Is Possible Tomorrow', '<p>The Alokozay Group of Companies (AGC) is a leading ISO certified multinational FMCG company, has a proud history of 100 years of business, producing a diversified range of FMCG products including tea and coffee, soft drinks, evaporated milk, biscuits and potato chips, detergents, baby care products and a wide range of other personal care products.</p>\r\n\r\n<p>AGC is headquartered in Dubai, in the United Arab Emirates, but has a presence in over 40 countries. It operates its own state of the art factories, warehouses and logistics operations and has an extensive distribution network across the Middle East, Central Asia, Asia, Europe, Africa and North America.</p>\r\n\r\n<p>With over 35,000 staff and a rapidly developing consumer base, ACG is well on its way to fulfilling its mission of becoming one of the world&rsquo;s leading brands. We invite you to explore our website to learn more about ACG and our exciting vision.</p>\r\n'),
(2, 'Product Portfolio', '<p>The product portfolio under Alokozay own banner is growing rapidly. From the highly successful Alokozay Tea to the flourishing Alokozay Biscuits,Cooking Oils, Tissues, Evaporated Milk, Coffee, 3in1 Tea &amp; Coffee, Pasta, Wet Wipes, Shampoo, Conditioner, Shower Gel, Hand wash, Bar Soap, Toothpaste, Toothbrush, Mouthwash, Detergent Powder, Engine Oil and many more premium products, Alokozay continues to expand its horizon.</p>\r\n'),
(3, 'Alokozay Cola Production Company', '<p>Alokozay Cola Production Company in Kabul, Afghanistan is the bottling and distribution plant for the entire range of Carbonated Soft Drinks, Energy Drink, Ice Tea, NonAlcoholic Beer, CSD Juices, Natural Juices &amp; Water.</p>\r\n'),
(4, 'Alokozay Product Range:', '<ul>\r\n	<li>Alokozay Cola.</li>\r\n	<li>Alokozay Cola Light.</li>\r\n	<li>Alokozay WOW.</li>\r\n	<li>Alokozay Breeze.</li>\r\n	<li>Alokozay Magic.</li>\r\n	<li>Alokozay Energy Drink.</li>\r\n	<li>Alokozay Energy Sugar Free.</li>\r\n</ul>\r\n'),
(6, 'A mission that sets us apart', '<p>ACG has a strong and meaningful mission. We strive to become one of the world&rsquo;s leading brands through:</p>\r\n\r\n<ul>\r\n	<li>Providing a quality product at an affordable price.</li>\r\n	<li>Providing real consumer choice and variety.</li>\r\n	<li>Assisting our customers to make healthy choices.</li>\r\n</ul>\r\n\r\n<p>And we are dedicated to simultaneously making a real and positive change to society by:</p>\r\n\r\n<ul>\r\n	<li>Establishing our production facilities in countries in need of economic stimulation.</li>\r\n	<li>Providing new and significant employment opportunities throughout all of the countries in which we operate.</li>\r\n	<li>Providing all of our employees with a positive, balanced and challenging work environment.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `agcnetwork`
--

CREATE TABLE IF NOT EXISTS `agcnetwork` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agcnetwork`
--

INSERT INTO `agcnetwork` (`id`, `title`, `content`, `image`) VALUES
(3, 'Alokozay Distribution Network', '<p>The Alokozay Group, a name that has been living up to its reputation for the last 100 years, has expanded its distribution network all over the world to meet the expectations of its target market. Touching the lives of innumerable consumers on a daily basis, the company takes pride in its operations and offered products. And that&#39;s why Alokozay has made its offices in various countries all over the world to further expand its consumer base. The company strongly believes in constant progre', 'products/dist_network_temp.png'),
(4, 'Our Brands, Our Pride', '<p>The Alokozay Group has broadened its distribution network to reach various countries all over the world. We feel proud to enter the trade markets that were not previously explored. We promote and distribute brands and products that are just perfect to meet your every day needs for hygiene, nutrition, personal care, and of course, business. Alokozay helps people look fresh, feel fresh, and give a fresh touch to their daily lives with our exclusive global brands. From hygiene to health to busin', ''),
(5, 'Alokozay â€“ Trusted Every day, Everywhere', '<p>The Alokozay Group manufactures, distributes, and promotes brands that:</p>\r\n\r\n<ul>\r\n	<li>Signify innovation.</li>\r\n	<li>Retailers wish to have in their stores.</li>\r\n	<li>Have a strong, powerful image for consumers.</li>\r\n	<li>Make our consumers lives easier and healthier.</li>\r\n	<li>Ensure superior lives for a better, sustainable future.</li>\r\n</ul>\r\n\r\n<p>The FMCG products presented by Alokozay are household favorites across the world as they help our consumers choose organ</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `agcproduct`
--

CREATE TABLE IF NOT EXISTS `agcproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `images` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `agcproduct`
--

INSERT INTO `agcproduct` (`id`, `Title`, `Description`, `images`) VALUES
(1, 'ALOKOZAY PRODUCTS', 'Black Face Mask', 'blackfacemask.jpg'),
(2, '', 'Alokozay Water', 'alokozaywater.jpg'),
(3, '', 'Rooibos Organic Herbal Tea', 'rooibosorganicherbaltea.jpg'),
(4, '', 'Alokozay Sunflower Oil', 'sunfloweroil.jpg'),
(5, '', 'Alokozay Ramadan Gift', 'Ramadan.jpg'),
(6, '', 'Alokozay Extra Virgin Oil', 'extravirginoil.jpg'),
(7, '', 'Alokozay Bathroom Tissue', 'bathroomtissue.jpg'),
(8, '', 'Alokozay Ginseng Energy', 'ginsengenergydrink.jpg'),
(9, '', 'Alokozay Gulfood', 'gulffood.jpg'),
(10, '', 'Alokozay Hand Sanitizer', 'handsanitizer.jpg'),
(11, '', 'Alokozay Engine Oil', 'alokozayengineoil.jpg'),
(12, '', 'Alokozay Paper Towel Dispenser', 'papertoweldispenser.jpg'),
(13, '', 'Alokozay Pomegranate Drink', 'pomegranatedrink.jpg'),
(14, '', 'Alokozay Iftar Box', 'iftarbox.jpg'),
(15, '', 'Alokozay Maxi Roll Tissue', 'maxiroll.jpg'),
(16, '', 'Alokozay Kids Face Mask', 'kidsfacemask.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `developerinfo`
--

CREATE TABLE IF NOT EXISTS `developerinfo` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `information` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `developerinfo`
--

INSERT INTO `developerinfo` (`id`, `information`) VALUES
(1, '<p>&copy; 2021-2022 All Rights Reserved | Designed &amp; Developed by: Akhtar Gul Aqtash</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `homeabout`
--

CREATE TABLE IF NOT EXISTS `homeabout` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `homeabout`
--

INSERT INTO `homeabout` (`id`, `title`, `content`, `image`) VALUES
(71, 'Staying True To Alokozay Legacy', '<p>Alokozay Group of Companies is a leading ISO certified multinational FMCG company with its headquarters in Dubai, UAE and having its presence in over 40 countries with an extensive distribution network in Middle East, Central Asia, Asia, Europe, Africa and North America. AGC has a diversified range of FMCG products with state of the art logistics and warehousing facilities. Our portfolio includes products like Tea, Tissue, Biscuits, Oil, Evaporated milk, Detergent Coffee, Cookies, Chewing Gum, Potato chips, Bottled water, Detergent, Pocket Tissues, Baby Diapers..</p>\r\n', 'homeabout/home_left_aggrp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imgall`
--

CREATE TABLE IF NOT EXISTS `imgall` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `imgall`
--

INSERT INTO `imgall` (`id`, `pagename`, `image`) VALUES
(27, 'AGC_Group', 'imgall/AGC-building.jpg'),
(28, 'AGC_Network', 'imgall/dist_network_temp.png'),
(29, 'AGC_About', 'imgall/about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(2, 'logo/page_image_abco_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(8, 'slider/agcbuilding.jpg'),
(9, 'slider/ktgbuilding.jpg'),
(10, 'slider/alokozay_breeze_can.jpg'),
(11, 'slider/alokozay_cola_can.jpg'),
(12, 'slider/alokozay_energy_can.jpg'),
(13, 'slider/alokozay_icetea.jpg'),
(14, 'slider/alokozay_waterpet.jpg'),
(15, 'slider/alokozay_tissues_blue.jpg'),
(16, 'slider/alokozaymagicpomogranatepet2.jpg'),
(17, 'slider/alokozay_digestive_biscuits.jpg'),
(18, 'slider/alokozay_wow_can.jpg'),
(19, 'slider/alokozaymagicapplepet2.jpg'),
(20, 'slider/alokozay_engineoil_01.jpg'),
(21, 'slider/alokozay_colalight_can.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_type` int(250) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_type` (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `user_type`) VALUES
(15, 'Admin', 'admin13', 'slmkhan342@gmail.com', 1),
(16, 'Mujeeb', 'ayoubi13', 'ayoubi_mujib@yahoo.com', 2),
(19, 'Saleem', 'ayoubi13', 'slmkhan342@gmail.com', 2),
(23, 'Hamid', 'hamid13', 'hamid.13@yahoo.com', 2),
(24, 'Amanullah', 'aman13', 'anam123@hotmail.com', 1),
(25, 'Farid', 'farid13', 'farid234@hotamil.com', 1),
(26, 'Mahir', '1', 'sss', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `ut_id` int(250) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`ut_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ut_id`, `type`) VALUES
(1, 'admin'),
(2, 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
