-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 02:57 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `card_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`card_id`, `product_id`, `quantity`, `user_id`) VALUES
(1, 1511003480, 10, 'amitdutta121');

-- --------------------------------------------------------

--
-- Table structure for table `cupon`
--

CREATE TABLE `cupon` (
  `cupon_id` int(10) NOT NULL,
  `cupon_code` varchar(20) NOT NULL,
  `cupon_value` int(10) NOT NULL,
  `validate` varchar(10) NOT NULL,
  `used` int(10) NOT NULL,
  `max_use` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupon`
--

INSERT INTO `cupon` (`cupon_id`, `cupon_code`, `cupon_value`, `validate`, `used`, `max_use`) VALUES
(1, 'EID101', 20, '1', 10, 50),
(6, 'CSE111', 25, '1', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `product_id`, `image_url`) VALUES
(1, 0, ''),
(2, 0, ''),
(8, 1510895507, '1.png'),
(9, 1510895507, '15-background.jpg'),
(10, 1510895643, '0b827633050685.569e345ad9c29.jpg'),
(11, 1510895643, '1.png'),
(12, 1510895643, '15-background.jpg'),
(13, 1511002774, '63_180694.jpg'),
(14, 1511003156, '09_190226.jpg'),
(15, 1511003480, '04_172342.jpg'),
(16, 1511003755, '69_196334.jpg'),
(17, 1511004021, '66_195163.jpg'),
(18, 1511168126, ''),
(19, 1511450180, '51RZNjnfkJL._AC_.jpg'),
(20, 1511450191, '51RZNjnfkJL._AC_.jpg'),
(21, 1511450253, '51RZNjnfkJL._AC_.jpg'),
(22, 1511450530, 'h4.jpg'),
(23, 1511450530, 'h1.jpg'),
(24, 1511450530, 'h2.jpg'),
(25, 1511450530, 'h3.jpg'),
(26, 1511450725, 'hub.jpg'),
(27, 1511450725, 'hub2.jpg'),
(28, 1511450887, 's3.jpg'),
(29, 1511450887, 's1.jpg'),
(30, 1511450887, 's2.jpg'),
(31, 1511451022, '71IHqoMFLjL._SL1300_.jpg'),
(32, 1511451022, '61C344PN2dL._SL1200_.jpg'),
(33, 1511451022, '61kduE+D9tL._SL1500_.jpg'),
(35, 1511879320, '11505542079568-Levis-Men-Jeans-81505542079438-3.jp'),
(36, 1511879320, '11505542079587-Levis-Men-Jeans-81505542079438-2.jp'),
(37, 1511879320, '11505542079609-Levis-Men-Jeans-81505542079438-1.jp'),
(38, 1511879457, '11505542079568-Levis-Men-Jeans-81505542079438-3.jp'),
(39, 1511879457, '11505542079587-Levis-Men-Jeans-81505542079438-2.jp'),
(40, 1511879457, '11505542079609-Levis-Men-Jeans-81505542079438-1.jp'),
(41, 1511879746, '11500540723567-next-Men-Jackets-5631500540723528-2'),
(42, 1511879746, '11500540723588-next-Men-Jackets-5631500540723528-1'),
(43, 1511880061, '1_MuEo3hTSTXrNsQMEKwlpOQ.png'),
(44, 1511880061, '6.png'),
(45, 1511880061, '15-background.jpg'),
(46, 1511880310, '1_MuEo3hTSTXrNsQMEKwlpOQ.png'),
(47, 1511880310, '6.png'),
(48, 1511880310, '15-background.jpg'),
(49, 1511880380, 'carImg.png'),
(50, 1511880454, 'modern-geometric-background_23-2147493271.jpg'),
(51, 1511880771, '0b827633050685.569e345ad9c29.jpg'),
(52, 1511880785, '11500540723567-next-Men-Jackets-5631500540723528-2'),
(53, 1511880785, '11500540723588-next-Men-Jackets-5631500540723528-1'),
(54, 1511881163, '11500540723567-next-Men-Jackets-5631500540723528-2'),
(55, 1511881163, '11500540723588-next-Men-Jackets-5631500540723528-1'),
(56, 1511881361, '23435637_1948190032097939_373646818_n.jpg'),
(57, 1511881361, '23439628_1948190012097941_901085167_n.jpg'),
(58, 1511881674, 'jack1.jpg'),
(59, 1511881674, 'jack1a.jpg'),
(62, 1511882158, 'jack2.jpg'),
(63, 1511882158, 'jack2a.jpg'),
(64, 1511882726, 'jack3.jpg'),
(65, 1511882726, 'jack3a.jpg'),
(66, 1511883068, 'jack4.jpg'),
(67, 1511883068, 'jack4a.jpg'),
(68, 1511883829, 'jack5.jpg'),
(69, 1511883829, 'jack5a.jpg'),
(70, 1511884251, 'jeans1.jpg'),
(71, 1511884251, 'jeans1a.jpg'),
(72, 1511884251, 'jeans1b.jpg'),
(73, 1511884561, 'jeans2.jpg'),
(74, 1511884561, 'jeans2a.jpg'),
(75, 1511884561, 'jeans2b.jpg'),
(76, 1511884819, 'jeans3.jpg'),
(77, 1511884819, 'jeans3a.jpg'),
(78, 1511884819, 'jeans3b.jpg'),
(79, 1511885103, 'jeans4.jpg'),
(80, 1511885103, 'jeans4a.jpg'),
(81, 1511885103, 'jeans4b.jpg'),
(82, 1511885338, 'jeans5.jpg'),
(83, 1511885338, 'jeans5a.jpg'),
(84, 1511885338, 'jeans5b.jpg'),
(85, 1511885891, 'bag1.jpg'),
(86, 1511885891, 'bag1a.jpg'),
(87, 1511885891, 'bag1b.jpg'),
(88, 1511886266, 'bag2.jpg'),
(89, 1511886266, 'bag2a.jpg'),
(90, 1511886266, 'bag2b.jpg'),
(91, 1511886551, 'bag3.jpg'),
(92, 1511886551, 'bag3a.jpg'),
(93, 1511886551, 'bag3b.jpg'),
(94, 1511886844, 'bag4.jpg'),
(95, 1511886844, 'bag4a.jpg'),
(96, 1511886844, 'bag4b.jpg'),
(97, 1511888874, 'bag5.jpg'),
(98, 1511888874, 'bag5a.jpg'),
(99, 1511888874, 'bag5b.jpg'),
(100, 1511934627, 'de744.jpg'),
(101, 1511954278, 'LACA_29D.jpg'),
(102, 1511954528, '14_1__1_10.jpg'),
(103, 1511954528, '14_2__2_1.jpg'),
(104, 1511954528, 'download.jpg'),
(105, 1511963405, '844w.jpg'),
(106, 1511963859, 'img_4670.jpg'),
(107, 1511964207, '1.jpg'),
(108, 1511964207, '2.jpg'),
(109, 1511964207, '3.jpg'),
(110, 1511964482, '1 (1).jpg'),
(111, 1511964482, '1 (2).jpg'),
(112, 1511964482, '3 (1).jpg'),
(113, 1511964585, '1 (3).jpg'),
(114, 1511964665, '1 (4).jpg'),
(115, 1511964665, '2 (1).jpg'),
(116, 1511964808, '1 (5).jpg'),
(117, 1511964808, '2 (2).jpg'),
(118, 1511964808, '3 (2).jpg'),
(119, 1511965157, '1 (6).jpg'),
(120, 1511965288, '1 (7).jpg'),
(121, 1511965288, '2 (3).jpg'),
(122, 1511965385, '3 (3).jpg'),
(123, 1511965385, '1 (8).jpg'),
(124, 1511965385, '2 (4).jpg'),
(125, 1511965530, '1 (9).jpg'),
(126, 1511966110, '1.jpg'),
(127, 1511966110, '2.jpg'),
(128, 1511966110, '3.jpg'),
(129, 1511966773, '1 (1).jpg'),
(130, 1511966973, '1 (1).jpg'),
(131, 1511966973, '2 (1).jpg'),
(132, 1511966973, '3 (1).jpg'),
(133, 1511967151, '1 (2).jpg'),
(134, 1511967151, '2 (2).jpg'),
(135, 1511967151, '3 (2).jpg'),
(136, 1511967151, '4.jpg'),
(137, 1511967246, '1 (3).jpg'),
(138, 1511967325, '2 (3).jpg'),
(139, 1511967325, '1 (4).jpg'),
(140, 1511972338, '1.jpg'),
(141, 1511972401, '1 (1).jpg'),
(142, 1511972487, '3.jpg'),
(143, 1511972487, '1 (2).jpg'),
(144, 1511972702, '1 (3).jpg'),
(145, 1511972702, '2.jpg'),
(146, 1511972751, '1 (4).jpg'),
(155, 1511002774, '0b827633050685.569e345ad9c29.jpg'),
(157, 1512481002, '51qibZNVexL._SY747_.jpg'),
(158, 1512481002, 'a996dadf-402c-4082-9923-8a3472b719b0._SL300__.jpg'),
(159, 1512481002, 'da6157eb-26cf-4535-8b9d-b624328696ef._SL300__.jpg'),
(160, 1512484487, ''),
(161, 1512505068, '6.png'),
(162, 1512506503, 'macbook.jpg'),
(163, 1512506503, 'macbook_a.jpg'),
(164, 1512506503, 'macbook_b.jpg'),
(165, 1512509762, 'macbook.jpg'),
(166, 1512509762, 'macbook_a.jpg'),
(167, 1512509762, 'macbook_b.jpg'),
(168, 1512510250, 'women.jpg'),
(169, 1512510250, 'women_a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product_list`
--

CREATE TABLE `ordered_product_list` (
  `list_id` varchar(100) NOT NULL,
  `order_id` varchar(200) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordered_product_list`
--

INSERT INTO `ordered_product_list` (`list_id`, `order_id`, `product_id`, `title`, `quantity`) VALUES
('1511900412-156728189', '-303466685', '1511002774', 'MEN Supima Cotton', ''),
('1511900412-75355965', '-303466685', '1511003156', 'Dry Ex Short', ''),
('1511900683-355103823', '268567175', '1511002774', 'MEN Supima Cotton', '5'),
('1511900683-54099597', '268567175', '1511884561', ' Tapered Stretchable Jeans', '1'),
('1511900683-876222431', '268567175', '1511881674', ' Solid Tailored Jacket', '1'),
('1511927530-1016749381', '42606188', '1511880454', '44545', '10'),
('1511927750-750189432', '-567551225', '1511881674', ' Solid Tailored Jacket', '5'),
('1511928044-1505823626', '877782120', '1511003755', 'Slub Short', '5'),
('1511955103-1838696362', '793695293', '1511002774', 'MEN Supima Cotton', '1'),
('1511959327-2064780454', '747319143', '1511002774', 'MEN Supima Cotton', '1'),
('1511960793-665645619', '269408669', '1511003156', 'Dry Ex Short', '1'),
('1511968664-932608677', '1439719638', '1511002774', 'MEN Supima Cotton', '5'),
('1511968665-1171050045', '1439719638', '1511003480', 'Turtle Soft', '2'),
('1512484280-1558156075', '840608306', '1511003755', 'Slub Short', '1'),
('1512484280-599493154', '840608306', '1512481002', 'Apple iPhone X, Fully Unlocked', '100'),
('1512484963-60185159', '-46886170', '1511450887', 'Selfie Stick', '1'),
('1512485231-1300388282', '-515087478', '1511450253', 'Blue light  blocking  glass', '1'),
('1512510160-1825956717', '271085611', '1511003156', 'Dry Ex Short', '1'),
('1512513789-139587758', '768991611', '1511450887', 'Selfie Stick', '1'),
('1512513789-847997769', '768991611', '1511881674', ' Solid Tailored Jacket', '1'),
('1512513789-930210163', '768991611', '1511450530', 'Best Got Headphones', '1'),
('1512514252-102822392', '193799433', '1511954528', 'Women Viscose Short Sleeve T-s', '1'),
('1512514252-1965170791', '193799433', '1511954278', 'Unstitched Three Piece Laccha ', '10'),
('1512529034-1755330131', '-534167429', '1511450725', 'usb hub', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_rating` int(5) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_feature` int(10) NOT NULL,
  `product_video` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_image` int(10) NOT NULL,
  `product_primary_image` varchar(50) NOT NULL,
  `product_discount` int(10) NOT NULL,
  `product_category` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_rating`, `product_description`, `product_feature`, `product_video`, `product_price`, `product_image`, `product_primary_image`, `product_discount`, `product_category`, `status`, `owner`) VALUES
(1511002774, 'MEN Supima Cotton', 0, 'The all-purpose crew neck t-shirt! 100% premium cotton material for an elegant look.>- Made from 100% rare premium SupimaÂ® cotton.- Featuring the distinctive elegant, sooth texture only premium m', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1233, 1, '63_180694.jpg', 0, 'Tshirt', 0, 'amitdutta121'),
(1511003156, 'Dry Ex Short', 0, 'Our amazing quick-drying DRY-EX tee! Shadow check style great for sports or leisure.\r\n- Quick-drying DRY-EX material for a smooth, dry, cling-free feel.\r\n- Great for sweaty situations like a daytime r', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 499, 0, '09_190226.jpg', 70, 'Tshirt', 1, 'amitdutta121'),
(1511003480, 'Turtle Soft', 0, 'This turtleneck shirt is a stylish wardrobe essential. We designed the neck to the millimeter for an attractive fit. Made with Soft Touch fabric, it feels warm and cozy. Women can wear this shirt as a', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 799, 0, '04_172342.jpg', 20, 'Tshirt', 1, 'amitdutta121'),
(1511003755, 'Slub Short', 0, 'A wide striped t-shirt with a pre-washed feel and laid-back, casual style!\r\n-Casual t-shirt style reminiscent of the West Coast.\r\n-Slub material gives it a laid-back, casual style.\r\n-Pre-wash processi', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 499, 0, '69_196334.jpg', 80, 'Tshirt', 1, 'amitdutta121'),
(1511004021, 'Stripped Sleeve', 0, 'A striped t-shirt with a casual texture and cool style.\r\n- A special pre-wash gives this shirt its distinctive texture.\r\n- Made with thick, sturdy fabric for a comfortable, natural feel.\r\n- Featured i', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 599, 0, '66_195163.jpg', 50, 'Tshirt', 1, 'amitdutta121'),
(1511450253, 'Blue light  blocking  glass', 0, 'Computer Glass ,  Anti Uv', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 600, 0, '51RZNjnfkJL._AC_.jpg', 0, 'One', 1, 'amitdutta121'),
(1511450530, 'Best Got Headphones', 0, 'Gaming headphone', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2200, 0, 'h4.jpg', 0, 'electronic', 1, 'amitdutta121'),
(1511450725, 'usb hub', 0, 'Hub 3.0  , 4 slot', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 350, 0, 'hub.jpg', 0, 'electronic', 1, 'amitdutta121'),
(1511450887, 'Selfie Stick', 0, ' Awesome selfie  stick super easy way of taking your own photo', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 800, 0, 's3.jpg', 0, 'electronic', 1, 'amitdutta121'),
(1511451022, 'Mobile Projector ', 0, 'Mini Mobile projector , easy way of watching movie and other cool stuff in big screen ', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 4500, 0, '71IHqoMFLjL._SL1300_.jpg', 0, 'electronic', 1, 'amitdutta121'),
(1511881674, ' Solid Tailored Jacket', 0, 'Tan brown solid tailored jacket, has a mandarin collar, 2 pockets, zip closure, long sleeves, straight hem, unlined lining', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2250, 0, 'jack1.jpg', 0, 'Jacket', 1, 'amitdutta121'),
(1511882158, 'Solid parka jacket', 0, 'Olive green solid parka jacket, has a mock collar, 4 pockets, zip closure, long sleeves, straight hem, cotton lining', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1299, 0, 'jack2.jpg', 0, 'Jacket', 1, 'amitdutta121'),
(1511882726, 'Solid Quilted Jacket', 0, 'Navy Blue solid quilted jacket, has a mock collar, 2 pockets, zip closure, sleeveless, straight hem, unlined lining', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 999, 0, 'jack3.jpg', 0, 'Jacket', 1, 'amitdutta121'),
(1511883068, 'Long Quilted Jacket', 0, 'Black solid quilted jacket, has a mock collar, 2 pockets, zip closure, long sleeves, straight hem, unlined lining', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2850, 0, 'jack4.jpg', 0, 'Jacket', 1, 'amitdutta121'),
(1511883829, 'Charcoal Grey Jacket', 0, 'Charcoal grey jacket, has a spread collar, long sleeves, a zip closure on the front, three pockets', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 3199, 0, 'jack5.jpg', 0, 'Jacket', 1, 'amitdutta121'),
(1511884251, 'Mid-Rise Clean Look Stretchabl', 0, '5-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 899, 0, 'jeans1.jpg', 0, 'pants', 1, 'amitdutta121'),
(1511884561, ' Tapered Stretchable Jeans', 0, 'Blue medium wash 5-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 699, 0, 'jeans2.jpg', 0, 'pants', 1, 'amitdutta121'),
(1511884819, 'Fit Mid-Rise Low Distress Stre', 0, 'Blue medium wash 5-pocket mid-rise jeans, low distress with light fade, has a button and zip closure, waistband with belt loops', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 899, 0, 'jeans3.jpg', 0, 'pants', 1, 'amitdutta121'),
(1511885103, ' Fit Mildly Distressed Stretch', 0, 'Black dark wash 5-pocket mid-rise Jeans, mildly distressed with light fade, has a button and zip closure, waistband with belt loop', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1199, 0, 'jeans4.jpg', 0, 'pants', 1, 'amitdutta121'),
(1511885338, 'Mid-Rise Look Stretchable Jean', 0, 'Off-White light wash 5-pocket mid-rise jeans, clean look with no fade, has a button and zip closure, waistband with belt loops', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 799, 0, 'jeans5.jpg', 0, 'pants', 1, 'amitdutta121'),
(1511885891, 'Nike Unisex Black HPS ELT MAX ', 0, 'Black backpack\r\nNon-padded haul loop\r\n1 main compartment with zip closure\r\nPadded back\r\nPadded shoulder strap: Padded \r\nVolume: up to 23 litres\r\nWarranty: 6 months', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1550, 0, 'bag1.jpg', 0, 'Bags', 1, 'amitdutta121'),
(1511886266, 'Blue Solid Backpack', 0, 'Blue solid backpack\r\nNon-Padded haul loop, ergonomic shoulder straps\r\n2 main compartments with zip closure, has a laptop sleeve in one and organiser sleeve in the other\r\nPadded mesh back\r\nZip pocket a', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1299, 0, 'bag2.jpg', 0, 'Bags', 1, 'amitdutta121'),
(1511886551, ' Derrick Black Cabin Trolley B', 0, 'Black cabin trolley bag\r\nOne short handle on the top\r\nOne main zip compartment, has dual elasticated tabs secured with a click clasp\r\nUpto 15.6\' inches laptop', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2699, 0, 'bag3.jpg', 0, 'Bags', 1, 'amitdutta121'),
(1511886844, 'Black Luxur Laptop Backpack', 0, 'Black backpack\r\nOne padded haul loop, two padded and adjustable shoulder straps with stitched tabs\r\nTwo main zip compartments, one has a padded laptop sleeve secured with a tab-and-Velcro closure, the', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1199, 0, 'bag4.jpg', 0, 'Bags', 1, 'amitdutta121'),
(1511888874, 'AMERICAN TOURISTER Backpack', 0, 'Maroon solid backpack\r\nNon-padded haul loop, padded ergonomic shoulder straps\r\n3 main compartments with zip closure\r\nPadded back\r\nZip pocket and 1 stash pocket and 1 zip pocket on the sides', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1799, 0, 'bag5.jpg', 0, 'Bags', 1, 'amitdutta121'),
(1511934627, 'Devil Light Hooded Shirt DE744', 0, 'Devil Light Hooded Shirt DE744 â€¢ Product : Hooded Shirt â€¢ Brand : Devil â€¢ Model : DE744 â€¢ Fabrics: Cotton Flannel â€¢ Color: As Given Picture â€¢ Style : Casual Wear â€¢ Stylish And Slim Fit â', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 590, 0, 'de744.jpg', 0, 'Tshirt', 1, 'amit'),
(1511954278, 'Unstitched Three Piece Laccha ', 0, 'Body: Very Soft Gorgette \r\nWark: Glagi Embroidery\r\nDupatta: Shiffon\r\nSalowar: Shatton\r\nInaer: Shatoon', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2500, 0, 'LACA_29D.jpg', 0, 'Dresses', 1, 'dipto'),
(1511954528, 'Women Viscose Short Sleeve T-s', 0, 'Women Viscose Casual Short Sleeve T-shirtEDWTS0005S,M,L,XLAOP Multicolor95% Viscose 5% ElastaneS=Chest: 35.5 inch, Length: 25 inch;M=Chest: 38 inch, Length: 25.5 inch;L=Chest: 40 inch, L', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 620, 0, '14_1__1_10.jpg', 0, 'Dresses', 1, 'dipto'),
(1511963405, 'Tangail Silk Saree-844', 0, 'Origin - Tangail\r\nSize- 13.5 Haat with blouse Piece\r\nTangail Silk Sharee. \r\nExclusively collected from the original source of Tangail\r\nVery comfortable to use in any weather.\r\nColor - Same as picture', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1850, 0, '844w.jpg', 0, 'Dresses', 1, 'dipto'),
(1511963859, 'Salwar Kameez-A9170', 0, 'Salwar Kameez (2 pcs Set)\r\n2 pcs included by Kameez & Orna\r\nColor: Golden & Orange\r\nFashionable & Stylish Design', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1, 0, 'img_4670.jpg', 0, 'Dresses', 1, 'dipto'),
(1511964482, 'New Top Ten Coffee PU Leather ', 0, 'SKU	NE158AA0KB1D0NAFAMZWeight (kg)	0.2', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1750, 0, '1 (1).jpg', 0, 'Jewelry', 1, 'dipto'),
(1511964585, 'Corporation Thai Black Artific', 0, 'Product Type: Shoulder BagGender: WomenColor: BlackWidth: 7.5 InchHeight: 5.5 Inch', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1200, 0, '1 (3).jpg', 0, 'Jewelry', 1, 'dipto'),
(1511964665, ' Winner Bag Dark Olive Leather', 0, 'Product Type: Shoulder BagColor: Dark OliveGender: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1620, 0, '1 (4).jpg', 0, 'Jewelry', 1, 'dipto'),
(1511964808, 'Toyship Geometric Prism Patter', 0, 'Decoration: Hollow Out,ChainsGender: WomenClosure Type: ZipperHandbags Type: Shoulder BagsTypes of bags: Shoulder & Crossbody BagsHardness: SoftSize: 28 cm *17 cm *7 cm', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1350, 0, '1 (5).jpg', 0, 'Jewelry', 1, 'dipto'),
(1511965157, 'Le Reve Multi Color Mixed Fabr', 0, 'Product Type: JacketColor: Multi ColorGender: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2, 0, '1 (6).jpg', 0, 'Jacket', 1, 'dipto'),
(1511965288, 'EMWEST Brown Faux Leather Jack', 0, 'Product type: Jacket\r\nColor: Brown\r\nGender: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 3, 0, '1 (7).jpg', 0, 'Jacket', 1, 'dipto'),
(1511965385, ' MJ Fashion Park Twill Casual ', 0, 'Product Type: Winter Wear Coat\r\nColor: Red\r\nStyle: Casual\r\nGender: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 2999, 0, '3 (3).jpg', 0, 'Jacket', 1, 'dipto'),
(1511965530, 'Le Reve Navy Blue Mixed Fabric', 0, 'Product Type: Jacket\r\nColor: Navy Blue\r\nGender: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1890, 0, '1 (9).jpg', 0, 'Jacket', 1, 'dipto'),
(1511966773, 'Dukpion Dot com Purple Anti-Re', 0, 'Lenses Optical Attribute: Mirror\r\nLenses Material: Polycarbonate\r\nLenses Optical Attribute: Mirror,Anti-Reflective,UV400\r\nHigh Quality & Fashionable Design', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 850, 0, '1 (1).jpg', 0, 'Sunglass', 1, 'dipto'),
(1511966973, 'Rod Choshma Red Sunglass For W', 0, 'Product Type: Sunglass\r\nColor: Red\r\nGender: Women\r\nMain Material: N/A', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 350, 0, '1 (1).jpg', 0, 'Sunglass', 1, 'dipto'),
(1511967151, 'Gogon Accessories Fashion Sung', 0, 'Product Type: Sunglass\r\nColor: Black\r\nFor: Women', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 999, 0, '1 (2).jpg', 0, 'Sunglass', 1, 'dipto'),
(1511967246, 'Dukpion Dot com Purple Anti-Re', 0, 'Lenses Optical Attribute: Mirror\r\nLenses Material: Polycarbonate\r\nFrame Material: Metal & Plastic\r\nLenses Optical Attribute: Mirror, Anti-Reflective, UV400\r\nHigh Quality & Fashionable Design', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 849, 0, '1 (3).jpg', 0, 'Sunglass', 1, 'dipto'),
(1511967325, 'Dukpion Dot com Female Stylish', 0, 'Gender : Female\r\nLenses Optical Attribute: Polycarbonate\r\nLenses Material: Polycarbonate\r\nFrame Material:Metal\r\nLenses Specifications: Anti-Reflective,UV400\r\nHigh Quality & Fashionable Design', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 999, 0, '2 (3).jpg', 0, 'Sunglass', 1, 'dipto'),
(1511972487, 'Gerua Gold Color Sashimi Nose ', 0, 'Item Type:Body JewelryMetals Type:Lead-tin AlloyModel Number:ER197Shapepattern:GeometricMaterial:MetalBody Jewelry Type:Nose Rings & Studs', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 120, 0, '3.jpg', 0, 'Jewelry', 1, 'dipto'),
(1512481002, 'Apple iPhone X, Fully Unlocked', 0, 'An allâ€‘new 5.8â€‘inch Super Retina screen with all-screen OLED Multi-Touch display\r\n12MP wide-angle and telephoto cameras with Dual optical image stabilization\r\nWireless Qi charging\r\nSplash, water, ', 0, 'http://www.youtube.com/embed/W7qWa52k-nE', 1200, 0, '51qibZNVexL._SY747_.jpg', 0, 'Electronic', 1, 'amitdutta121'),
(1512510250, 'fdlfgkfdj', 0, 'fdsf', 0, 'sdj.com', 1500, 0, 'women.jpg', 0, 'Dresses', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `product_id` int(10) NOT NULL,
  `feature_id` int(10) NOT NULL,
  `feature_type` varchar(20) NOT NULL,
  `feature_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`product_id`, `feature_id`, `feature_type`, `feature_value`) VALUES
(1511002774, 66, 'Material', '100% cotton'),
(1511002774, 68, 'Style', 'Long sleeve'),
(1511003156, 70, 'Material', 'Polyester'),
(1511003156, 71, 'Color', 'Black'),
(1511003156, 72, 'Neck', 'Crew'),
(1511003480, 73, 'Material', '100% cotton'),
(1511003480, 74, 'Color', 'Gray'),
(1511003480, 75, 'Size', 'XL'),
(1511003480, 76, 'Neck', 'Turtle'),
(1511003755, 77, 'Material', '100% cotton'),
(1511003755, 78, 'Color', 'Navy'),
(1511003755, 79, 'Size', 'XL'),
(1511003755, 80, 'Neck', 'Crew'),
(1511004021, 81, 'Material', '100% cotton'),
(1511004021, 82, 'Color', 'White'),
(1511004021, 83, 'Size', 'XL'),
(1511004021, 84, 'Neck', 'Crew'),
(1511881674, 108, 'Material', 'Polyester & Viscose'),
(1511881674, 109, 'Color', 'Brown'),
(1511881674, 110, 'Size', 'L'),
(1511882158, 114, 'Material', 'Cotton'),
(1511882158, 115, 'Color', 'Green'),
(1511882158, 116, 'Size', 'L'),
(1511882726, 117, 'Material', 'Nylon '),
(1511882726, 118, 'Color', 'Navy Blue'),
(1511882726, 119, 'Size', 'L'),
(1511883068, 120, 'Material', 'Nylon'),
(1511883068, 121, 'Color', 'Black'),
(1511883068, 122, 'Size', 'L'),
(1511883829, 123, 'Material', 'Polyester, viscose a'),
(1511883829, 124, 'Color', 'Grey'),
(1511883829, 125, 'Size', 'L'),
(1511884251, 126, 'Material', '71% cotton, 18% poly'),
(1511884251, 127, 'Color', 'Light Blue'),
(1511884251, 128, 'Size', '30'),
(1511884561, 129, 'Material', 'Cotton 98% ,elastane'),
(1511884561, 130, 'Color', 'Blue'),
(1511884561, 131, 'Size', '30'),
(1511884819, 132, 'Material', '98% cotton, 2% elast'),
(1511884819, 133, 'Color', 'Light Blue'),
(1511884819, 134, 'Size', '30'),
(1511885103, 135, 'Material', '90% cotton, 8% polye'),
(1511885103, 136, 'Color', 'Dark black'),
(1511885103, 137, 'Size', '30'),
(1511885338, 138, 'Material', '98.7% cotton, 1.3% e'),
(1511885338, 139, 'Color', 'off-white'),
(1511885338, 140, 'Size', '30'),
(1511885891, 141, 'Material', 'Polyester '),
(1511885891, 142, 'Color', 'Black'),
(1511886266, 143, 'Material', 'Polyester'),
(1511886266, 144, 'Color', 'Blue'),
(1511886266, 145, 'Volume', 'upto 23 liters'),
(1511886266, 146, 'Water-resistance', 'No'),
(1511886551, 147, 'Material', 'Polyester'),
(1511886551, 148, 'Color', 'Black'),
(1511886551, 149, 'Volume', 'upto 25 liters'),
(1511886551, 150, 'Water-resistance', 'yes'),
(1511886844, 151, 'Material', 'PU'),
(1511886844, 152, 'Color', 'Black'),
(1511886844, 153, 'Volume', 'upto 17 liters'),
(1511886844, 154, 'Water-resistance', 'No'),
(1511888874, 155, 'Material', 'Polyester'),
(1511888874, 156, 'Color', 'Maroon'),
(1511888874, 157, 'Volume', 'upto 22 liters'),
(1511888874, 158, 'Water-resistance', 'Yes'),
(1511934627, 159, 'Product', 'Hooded Shirt'),
(1511934627, 160, 'Brand', 'Devil'),
(1511934627, 161, 'Model', 'DE744'),
(1511934627, 162, 'Fabrics', 'Cotton Flannel '),
(1511934627, 163, 'Color', 'RED'),
(1512481002, 167, 'Screen', '5.8â€ all-screen OL'),
(1512481002, 168, 'Display', 'Super Retina HD disp'),
(1512481002, 169, 'Screen resolution', '2436x1125 at 458ppi'),
(1512481002, 170, 'Camera resolution', '12MP Dual Camera	'),
(1512481002, 171, 'Camera', 'Wide-angle and telep'),
(1512481002, 172, 'Zoom', 'Optical zoom; digita'),
(1512481002, 173, 'Front Camera', '7MP TrueDepth camera'),
(1512481002, 174, 'Security', 'Face ID'),
(1512481002, 175, 'Wireless Charging', 'Yes'),
(1512481002, 176, 'Battery', 'Up to 21 hours Talk '),
(1511884819, 177, '', ''),
(1511002774, 179, 'Size', 'XXL'),
(1512510250, 186, 'dfsd', 'ds'),
(1512510250, 187, 'fv', 'fs');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` varchar(200) NOT NULL,
  `receipt_id` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `total` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `quantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`order_id`, `receipt_id`, `user_name`, `email`, `total`, `address`, `phone_no`, `zipcode`, `status`, `payment`, `order_date`, `title`, `quantity`) VALUES
('-46886170', '-46886170', 'abc', 'amitdutta121@gmail.com', 800, 'dhaka Bangladesh', '01980064568', '07460', 'Delivered', 'Bkash', '2017-12-05', '', ''),
('-515087478', '-515087478', 'abc', 'amitdutta121@gmail.com', 600, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Paypal', '2017-12-05', '', ''),
('-534167429', '-534167429', 'amitdutta121', 'amitdutta121@gmail.com', 350, 'dhaka Bangladesh', '1980064568', '07460', 'Processing', 'Bkash', '2017-12-06', '', ''),
('1', 'HCLNIGNTM-59', 'dipto', 'dipto@gmail.com', 1200, 'mohakhali Dhaka', '01980064568', '07460', 'Delivered', 'Cash On Delivery', '2017-11-23', '', ''),
('1439719638', '1439719638', 'amitdutta121', 'amitdutta121@gmail.com', 5093, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Bkash', '2017-11-29', '', ''),
('193799433', '193799433', 'test', 'amitdutta121@gmail.com', 25620, 'dhaka Bangladesh', '00000111112222333', '07460', 'Processing', '', '2017-12-05', '', ''),
('269408669', '269408669', 'dipto', 'amitdutta121@gmail.com', 50, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Cash on delivery', '2017-11-29', '', ''),
('271085611', '271085611', 'test', '', 499, '', '01980064568', '', 'Processing', '', '2017-12-05', '', ''),
('3', 'HCLNIGNTM-59', 'dipto', 'dipto@gmail.com', 8500, 'dhaka', '98745698', '01456', 'Processing', 'Cash On delivery', '2017-11-15', '', ''),
('747319143', '747319143', 'dipto', '', 699, '', '01980064568', '', 'Processing', '', '2017-11-29', '', ''),
('768991611', '768991611', 'test', 'amitdutta121@gmail.com', 5250, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Bkash', '2017-12-05', '', ''),
('793695293', '793695293', 'dipto', 'amitdutta121@gmail.com', 699, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Cash on delivery', '2017-11-29', '', ''),
('840608306', '840608306', 'amitdutta121', 'amitdutta121@gmail.com', 12050, 'dhaka Bangladesh', '01980064568', '07460', 'Processing', 'Paypal', '2017-12-05', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `review_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `review` varchar(200) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `review_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`review_id`, `product_id`, `review`, `user_id`, `review_date`) VALUES
(11, 1511002774, '989898989', 'amitdutta121', '0000-00-00'),
(12, 1511451022, 'dddddddd', 'amitdutta121', '0000-00-00'),
(13, 1511450887, 'nice product', 'dipto', '0000-00-00'),
(14, 1511002774, 'good', 'amitdutta121', '0000-00-00'),
(15, 1511003156, '1234867494', 'amitdutta121', '0000-00-00'),
(16, 1511003156, 'good product', 'amitdutta121', ''),
(17, 1511003156, 'nice product', 'amitdutta121', '2017-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image_url`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` int(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `Notes` varchar(100) NOT NULL,
  `Folowers` int(10) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_type`, `email`, `education`, `Notes`, `Folowers`, `profession`, `user_image`, `balance`) VALUES
(62, 'amitdutta121', 12345, 'Administrator', 'amitdutta121@gmail.com', 'BRAC UNiversity', 'GGGGGG', 700, 'Student', '67190b2076ccdf40951b613878e6bdf8.png', 48157.8),
(69, 'dipto', 12345, 'Administrator', 'dipto@gmail.com', '', '', 0, '', '6.png', 10349.1),
(70, 'ashraf', 12345, 'Administrator', 'ashraf@gmail.com', 'BRAC UNIVERSITY', 'alpha Q', 0, 'Student', 's.jpg', 10000),
(71, 'admin', 12345, 'Administrator', 'admin@gmail.com', '', '', 0, '', '', 8421.4),
(72, 'amit', 0, 'Seller', 'amitdutta121@gmail.com', '', '', 0, '', '6.png', 7204),
(74, 'abc', 12345, 'Seller', 'abc@a.com123000', '', '', 0, '', '', 98600),
(76, 'amittt', 123456, 'Seller', 'amitdutta121@gmail.com', '', '', 0, '', '', 100000),
(80, 'test', 12345, 'Seller', 'test123@gmail.com', '', '', 0, '', '', 68831);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `product_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `cart_ibfk_1` (`product_id`);

--
-- Indexes for table `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`cupon_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `images_ibfk_1` (`product_id`);

--
-- Indexes for table `ordered_product_list`
--
ALTER TABLE `ordered_product_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`feature_id`),
  ADD KEY `product_features_ibfk_1` (`product_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_review_ibfk_1` (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `wishlist_ibfk_1` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cupon`
--
ALTER TABLE `cupon`
  MODIFY `cupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `feature_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_features`
--
ALTER TABLE `product_features`
  ADD CONSTRAINT `product_features_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
