-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2023 at 08:47 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u805851420_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `aboutID` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`aboutID`, `description`, `image`, `date`, `status`) VALUES
(1, '<p>&nbsp;TheAllchemy&#39;s mission is to deliver everyday items that are often overlooked but add great value to our lives. It caters to the shopping needs to discerning customers, who want these quality products at affordable prices. You will be delighted to browse through our curated collections of products made just for you. Our products are made of various fine materials from wood to glass to metal, and so on. We hope to make a difference to your well being by organizing miniature articles that are sourced from across the Indian geography. Happy Shopping !</p>\r\n\r\n<p>&nbsp;</p>', 'about1663932203russia-g2a168ea97_640.jpg', '2022-09-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminID` int(11) NOT NULL,
  `role` bigint(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminID`, `role`, `admin_name`, `email`, `admin_password`, `added_date`, `edited_date`, `status`) VALUES
(1, 1, 'The Allchemy', 'admin@gmail.com', '12345', '0000-00-00', '2021-08-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `productTitle` varchar(500) NOT NULL,
  `productDescritpion` blob NOT NULL,
  `productImage` text NOT NULL,
  `productQuantity` varchar(200) NOT NULL,
  `productSellingPrice` float NOT NULL,
  `productMRP` float NOT NULL,
  `productPreviewFee` float NOT NULL,
  `cartPrice` float NOT NULL,
  `cartIP` varchar(100) NOT NULL,
  `cartAddDate` date NOT NULL,
  `cartEditedDate` date NOT NULL,
  `cartStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartID`, `userID`, `categoryID`, `productID`, `productTitle`, `productDescritpion`, `productImage`, `productQuantity`, `productSellingPrice`, `productMRP`, `productPreviewFee`, `cartPrice`, `cartIP`, `cartAddDate`, `cartEditedDate`, `cartStatus`) VALUES
(187, 31, 16, 198, 'Ganesh Ji Murti ', '', 'meal1664191067ASP09952.jpg ', '1 ', 0, 1800, 0, 0, '6b3fe18ae40f2e3692081589d7902bcb', '0000-00-00', '0000-00-00', 1),
(188, 32, 18, 298, 'Decorative Showpiece (Terracotta, Multicolor) ', '', 'meal166738125130.png ', '2', 0, 1199, 0, 0, '330e2702008e83fe80714479922c1c57', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryID` int(11) NOT NULL,
  `adminID` bigint(20) NOT NULL,
  `category` varchar(400) NOT NULL,
  `cat_description` longblob NOT NULL,
  `category_image` varchar(300) NOT NULL,
  `category_resized_image` varchar(400) NOT NULL,
  `web_slug` varchar(400) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryID`, `adminID`, `category`, `cat_description`, `category_image`, `category_resized_image`, `web_slug`, `added_date`, `edited_date`, `status`) VALUES
(16, 0, 'Prayer', 0x3c703e5765206861766520612067726561742072616e6765206f6620746865206974656d732077686963682077652075736520696e207072617965722e3c2f703e, '1.png', '', '', '2022-09-24', '0000-00-00', 1),
(17, 0, 'Toys', 0x3c703e416c6c20796f7572206661766f757269746520746f79732061726520617661696c61626c652061742074686520616c6c6368656d792e3c2f703e, 'tu.png', '', '', '2022-09-24', '0000-00-00', 1),
(18, 0, 'House', 0x3c703e596f7572206661766f7572697465206974656d732077686963682077696c6c206465636f7261746520796f757220686f7573652061726520686572652e3c2f703e, '3.png', '', '', '2022-09-24', '0000-00-00', 1),
(19, 0, 'Kitchen', 0x3c703e4b69746368656e206e656564206974656d732077686963682077696c6c20616c736f206465636f7261746520796f7572206b69746368656e2e3c2f703e, 'ku.png', '', '', '2022-09-24', '0000-00-00', 1),
(20, 0, 'Accessories', 0x3c703e596f7572206163636573736f72696573206974656d7320617265206865726520746f20656e68616e636520796f757220706572736f6e616c6974792e3c2f703e, '5.png', '', '', '2022-09-24', '0000-00-00', 1),
(21, 0, 'Desk Organizer', 0x3c703e4465736b204f7267616e697a65727320746f206d616e61676520796f757220667265656c79206974656d73206f6620726567756c6172207573652e3c2f703e, '6.png', '', '', '2022-10-05', '0000-00-00', 1),
(22, 0, 'Self', 0x3c703e416c6c6368656d7920686176652067726561742072616e6765206f66207468652070726f647563747320776869636820796f752063616e206769667420746f20796f757273656c663c2f703e, 'su.png', '', '', '2022-10-07', '0000-00-00', 1),
(23, 0, 'Gift', 0x3c703e496d707265737320796f75722064656172206f6e65732062792067696674696e67207468656d2070726f6475637473207468617420746865792077696c6c206c696b652066726f6d2074686520616c6c6368656d793c2f703e, 'Gift.png', '', '', '2022-10-07', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`sno`, `name`, `email`, `phone`, `subject`, `message`, `date`, `status`) VALUES
(25, 'Divyanshi', 'bustlebank@gmail.com', '9089789067', 'Need Art Craft Painiting', 'Need Art craft painting', '2022-10-13', 1),
(26, 'Divyanshi', 'bustlebank@gmail.com', '9089789067', 'bank data', 'testt', '2022-10-13', 1),
(27, 'Anna Wilson', 'annawilson.web@gmail.com', '1201201200', 'Re : Website Design & Development service provide', 'Hope you are doing well!\r\n\r\nI am Nishant,\r\n\r\nWe collaborate with startups, SMBs, and new domain owners to provide Website design - re-design and development services at modest rate.\r\n\r\nWe have a dedicated team of 45 professional designers and developers with over 8 plus years of experience and we thrive on the idea that design makes a difference.\r\n\r\nOur services at a glance: -\r\n\r\nWebsite Designing/Re-Designing\r\n\r\n#E-commerce development (Magento, Shopify, Woo Commerce etc.)\r\n\r\n#Graphic Designing\r\n\r\n#WordPress Theme Design & Customization\r\n\r\n#Custom themes, Plugins & Widget Development\r\n\r\n#Custom Templates, Modules, Plugins Design & Development\r\n\r\nShare a brief about your project with your phone number (With Country Code) /Skype and suitable time (Meeting) to talk to you, and get a guaranteed response within 24 hours.\r\n\r\n\r\nI’m waiting for your reply.\r\n\r\nKinds Regards,\r\nAnna Wilson (Web Solution Manager)', '2022-11-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE `tbl_contact_info` (
  `sno` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `opening_hour` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`sno`, `address`, `email`, `phone`, `opening_hour`, `date`, `status`) VALUES
(1, '<p>51, Shastri Nagar, C Block, Meerut, Uttar Pradesh - 250004</p>', 'theallchemy@gmail.com', '+91 8077836517', '', '2022-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cupon`
--

CREATE TABLE `tbl_cupon` (
  `cuponID` int(11) NOT NULL,
  `adminID` bigint(20) NOT NULL,
  `cupon` varchar(400) NOT NULL,
  `discount` int(100) NOT NULL,
  `cupon_description` longblob NOT NULL,
  `cupon_image` varchar(300) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cupon`
--

INSERT INTO `tbl_cupon` (`cuponID`, `adminID`, `cupon`, `discount`, `cupon_description`, `cupon_image`, `added_date`, `edited_date`, `status`) VALUES
(1, 0, 'NEW30', 0, '', '', '0000-00-00', '0000-00-00', 0),
(27, 0, 'REVIEW30', 30, 0x3c703e52657669657720526577617264206375706f6e3c2f703e, 'cupon1667900401story-clear-review-pay-reward-2021.jpg', '2022-11-08', '0000-00-00', 1),
(29, 0, 'Newcupon', 20, 0x3c703e6e65773c2f703e, '', '2022-11-09', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `faqID` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` text NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`faqID`, `question`, `answer`, `added_date`, `edited_date`, `status`) VALUES
(1, 'What can I return?', '<p>You may request returns for most items you buy from sellers listed that are within the return window, except those that are explicitly identified as not returnable on the product detail page Returns policy.</p>', '2021-07-07', '0000-00-00', 1),
(2, 'How to return items?', '<p>Note: If you need to contact the seller for a return and the seller fails to address your query in two business days, the Ufove A-to-z Guarantee is available to you.</p>', '2021-07-07', '0000-00-00', 1),
(3, 'Can my order be replaced?', '<p>If the item you ordered arrived in a physically damaged or defective condition or is different from their description on the product detail page , or has missing parts or accessories, it will be eligible for a free replacement, provided the exact item is available with the same seller.</p>', '2021-07-07', '0000-00-00', 1),
(4, 'How can I return a Gift?', '<p>You can also return a gift item, if the gift giver has sent a Gift Receipt to you. Once we process the return, a refund is processed to the original payment method of the gift giver.</p>', '2021-07-07', '0000-00-00', 1),
(5, 'How can I return a Gift Card?', '<p>Gift cards once purchased cannot be cancelled or returned due to regulatory restrictions.</p>', '2021-07-07', '0000-00-00', 1),
(6, 'Can I return a Global Store Product?', '<p>The General Returns Policy is applicable for all Ufove Global Store Products. Eligible products can be returned through courier Pick-up or Self-return.</p>', '2021-07-07', '0000-00-00', 1),
(7, 'How to return items?h', '<p>jhgjgh</p>', '2021-09-01', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `galleryID` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `gallery_image` varchar(200) NOT NULL,
  `gallery_resized_image` varchar(300) NOT NULL,
  `gallery_slug` varchar(300) NOT NULL,
  `added_date` datetime NOT NULL,
  `edited_date` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`galleryID`, `title`, `gallery_image`, `gallery_resized_image`, `gallery_slug`, `added_date`, `edited_date`, `status`) VALUES
(2, 'Dishes', 'gallery163360539812.jpg', '', 'dishes', '2021-10-07 00:00:00', '', 1),
(3, 'Dishes', 'gallery163360540713.jpg', '', 'dishes', '2021-10-07 00:00:00', '', 1),
(4, 'Dishes', 'gallery163360541714.jpg', '', 'dishes', '2021-10-07 00:00:00', '', 1),
(5, 'Restaurant', 'gallery163360545512.jpgl', '', 'restaurant', '2021-10-07 00:00:00', '', 0),
(7, 'Restaurant', 'gallery1636521284Screenshot_20210201-133423.png', '', 'restaurant', '2021-11-10 00:00:00', '', 1),
(8, 'Restaurant', 'gallery1636521373IMG_20210518_152020358.jpg', '', 'restaurant', '2021-11-10 00:00:00', '', 1),
(9, 'Restaurant', 'gallery1636521433FB_IMG_1600816913194.jpg', '', 'restaurant', '2021-11-10 00:00:00', '', 1),
(10, 'Restaurant', 'gallery1636521468FB_IMG_1613154428615.jpg', '', 'restaurant', '2021-11-10 00:00:00', '', 1),
(11, 'Vd', 'gallery16399768983.jpg', '', 'vd', '2021-12-20 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `web_slug` varchar(300) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `reviewID` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `resized_image` varchar(300) NOT NULL,
  `review` text NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`reviewID`, `email`, `image`, `resized_image`, `review`, `added_date`, `edited_date`, `status`) VALUES
(11, 'prachisain1328@gmail.com', '', '', '', '2022-11-07', '0000-00-00', 1),
(12, 'kajalkakran@123gmail.com', '', '', '', '2022-11-07', '0000-00-00', 1),
(13, 'kajalkakran@123gmail.com', '', '', '', '2022-11-08', '0000-00-00', 1),
(14, 'kajalkakran@123gmail.com', '', '', '', '2022-11-08', '0000-00-00', 1),
(15, 'aradhyapanwar12@gmail.com', '', '', '', '2022-11-08', '0000-00-00', 1),
(16, 'aradhyapanwar12@gmail.com', '', '', '', '2022-11-08', '0000-00-00', 1),
(17, 'kajalkakran@123gmail.com', '', '', '', '2022-11-08', '0000-00-00', 1),
(18, 'vkakran626@gmail.com', '', '', '', '2022-11-09', '0000-00-00', 1),
(19, 'ommarblemurtikalakendra@gmail.com', '', '', '', '2022-11-17', '0000-00-00', 1),
(20, 'ommarblemurtikalakendra@gmail.com', '', '', '', '2022-11-17', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `ordersID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `shipping` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `shipment_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`ordersID`, `userID`, `first_name`, `last_name`, `county`, `street`, `city`, `state`, `zip`, `phone`, `email`, `message`, `total`, `shipping`, `created_at`, `modified_at`, `shipment_id`) VALUES
(35, 26, 'Shivam', 'Rani', 'India', '110A & 111A, 1st Floor', 'Meerut', 'Uttar Pradesh', '250001', '09068145151', 'prachisain1328@gmail.com', '', '0.00', '0.00', '2022-12-29 09:35:54', '2022-12-29 09:35:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_items`
--

CREATE TABLE `tbl_order_items` (
  `id` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `productTitle` varchar(500) NOT NULL,
  `productDescritpion` blob NOT NULL,
  `productImage` text NOT NULL,
  `productQuantity` varchar(200) NOT NULL,
  `productSellingPrice` float NOT NULL,
  `productMRP` float NOT NULL,
  `productPreviewFee` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_items`
--

INSERT INTO `tbl_order_items` (`id`, `userID`, `order_id`, `categoryID`, `productID`, `productTitle`, `productDescritpion`, `productImage`, `productQuantity`, `productSellingPrice`, `productMRP`, `productPreviewFee`, `created_at`, `modified_at`) VALUES
(49, 26, 1, 17, 269, 'Wooden kids puzzle game ', '', 'meal1666337237okned_400.jpg ', '1 ', 0, 399, 0, '2022-12-29 09:35:54', '2022-12-29 09:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preview_fee`
--

CREATE TABLE `tbl_preview_fee` (
  `previewfeeID` bigint(20) NOT NULL,
  `previewfee` float NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_preview_fee`
--

INSERT INTO `tbl_preview_fee` (`previewfeeID`, `previewfee`, `added_date`, `edited_date`, `status`) VALUES
(1, 20, '2021-06-03', '0000-00-00', 0),
(2, 20, '2021-06-05', '0000-00-00', 0),
(3, 25, '2021-06-05', '2021-06-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `product_description` blob NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL,
  `weight` int(100) NOT NULL,
  `height` int(100) NOT NULL,
  `width` int(100) NOT NULL,
  `lenth` int(100) NOT NULL,
  `searchkeyword` varchar(100) NOT NULL,
  `searchdescription` varchar(200) NOT NULL,
  `web_slug` varchar(300) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `corporate_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `categoryID`, `subcategoryID`, `title`, `product_description`, `price`, `image`, `weight`, `height`, `width`, `lenth`, `searchkeyword`, `searchdescription`, `web_slug`, `added_date`, `edited_date`, `status`, `corporate_status`) VALUES
(195, 16, 0, 'Diya', 0x3c703e746573743c2f703e, '70', '', 0, 0, 0, 0, '', '', 'diya', '2022-09-26', '0000-00-00', 0, 0),
(196, 16, 0, 'Insanse Holder', 0x3c703e546573743c2f703e, '300', 'meal16641760113.png', 0, 0, 0, 0, '', '', 'insanse-holder', '2022-09-26', '0000-00-00', 0, 0),
(197, 18, 0, 'Multipurpose Iron Vase', 0x3c703e4d756c7469707572706f73652049726f6e2056617365266e6273703b3c2f703e, '900', 'meal1664178943ASP00522.jpg', 800, 30, 15, 15, '', '', 'multipurpose-iron-vase', '2022-09-26', '2022-10-28', 1, 0),
(198, 16, 0, 'Ganesh Ji Murti', 0x3c703e47616e657368204a69204d757274693c2f703e, '1800', 'meal1664191067ASP09952.jpg', 1500, 25, 15, 15, '', '', 'ganesh-ji-murti', '2022-09-26', '2022-11-07', 1, 1),
(199, 16, 0, 'Puja Glass Bell', 0x3c703e454c4547414e5420534545205448524f5547482042454c4c205452414e53504152454e5420414e4420454c4547414e5420474c4153532042454c4c205749544820494d5052455353494f4e53204f46204f4d205349474e204f4e205448452053494445532e3c2f703e, '180', 'meal166419118860.jpg', 20, 15, 6, 6, '', '', 'puja-glass-bell', '2022-09-26', '2022-11-08', 1, 1),
(200, 16, 0, 'Wooden agarbatti stand', 0x3c703e576f6f646520616761726261747469266e6273703b7374616e64204d616b6520737061636520666f722061676172626174697320696e20796f752050756a61204768617220616e6420706f736974696f6e20697420696e746f207468697320737469666620616e6420706f6c697368656420776f6f64656e207374616e6420616c6f6e6720776974682069747320686f6c6465722e3c2f703e, '60', 'meal1664191262DSC04132.JPG', 20, 10, 5, 6, '', '', 'wooden-agarbatti-stand', '2022-09-26', '2022-11-07', 1, 0),
(201, 16, 0, 'Ganesh Ji Murti In Gold color', 0x3c703e4120444543454e5420464947555245204f46204c4f52442047414e4553484120534541544544204f4e204120524f434b205041494e54454420494e20474f4c4420414e44205245442e3c2f703e, '118', 'meal1664191348DSC03342_JPG.jpg', 50, 10, 5, 7, '', '', 'ganesh-ji-murti-in-gold-color', '2022-09-26', '2022-11-07', 1, 0),
(202, 17, 0, 'Ludo Board', 0x3c703e576f6f64656e204c75646f20626f617264204c75646f206f6e20626f61726420706c61636564206f6e206120776f6f64656e20626f78206d616b696e67206974207374726f6e67207374757264793c2f703e, '500', 'meal1664192475Ludo-Saap-Seedhi-MRP650-(1).JPG', 500, 10, 30, 30, '', '', 'ludo-board', '2022-09-26', '2022-11-07', 1, 0),
(203, 17, 0, 'Snake Ladder', 0x3c703e536e616b65206c6164646572206f6e20776f6f64656e20626f617264204120706c617966756c20616e642073747572647920736e616b65206c6164646572206f6e206120776f6f64656e20626f61726420736c6964696e6720696e20616e64206f7574206f6e206120776f6f64656e20626f782077697468206261736520636f6d706172746d656e742e20436f6d657320616c6f6e672077697468206120776f6f64656e206469636520686f6c6465722e3c2f703e, '699', 'meal1664192563Ludo-Saap-Seedhi-MRP650-(3).JPG', 500, 10, 30, 30, '', '', 'snake-ladder', '2022-09-26', '2022-11-07', 1, 0),
(204, 17, 0, 'Damru Combo', 0x3c703e42726967687420636f6c6f757265642064756d726f20636f6d626f20412077656c6c206275696c742064756d726f20636f6d626f20746f20706c617920776974682e20456e6a6f7920746869732073656375726520736574206f662064756d726f207061696e74656420696e206d756c746920616e642062726967687420636f6c6f7572733c2f703e, '199', 'meal1664192619Damru-MRP50.jpg', 50, 13, 8, 8, '', '', 'damru-combo', '2022-09-26', '2022-11-07', 1, 0),
(205, 17, 0, 'Goli Goli Game', 0x3c703e476f6c692047616d653c2f703e, '350', 'meal1664192695Gola-Goli-MRP200-(1).JPG', 150, 2, 16, 16, '', '', 'goli-goli-game', '2022-09-26', '2022-10-28', 0, 0),
(206, 18, 0, 'Wine Peelo Stand', 0x3c703e57696e65205374616e643c2f703e, '1200', 'meal1664192783Wine_Peelo_Stand_MRP1200_(1).jpg', 800, 46, 14, 23, '', '', 'wine-peelo-stand', '2022-09-26', '2022-10-28', 1, 0),
(207, 18, 0, 'Contry Bank Bottle', 0x3c703e436f6e7472792042616e6b20426f74746c653c2f703e, '600', 'meal1664192884Contry_Bank_Bottle_MRP600_(1).JPG', 200, 30, 14, 14, '', '', 'contry-bank-bottle', '2022-09-26', '2022-10-28', 1, 0),
(208, 18, 0, 'Ashok K Sher', '', '600', 'meal1664192936Ashok_Ke_Sher_Big_MRP600_(1).JPG', 150, 18, 6, 6, '', '', 'ashok-k-sher', '2022-09-26', '2022-10-28', 1, 0),
(209, 19, 0, 'Spice Box Jar', 0x3c703e576f6f64656e207370696365207261636b20416e2061757468656e74696320776f6f64206d61646520737069636573207261636b2077686963682069732062656175746966756c6c792063617276656420616e64207061696e74656420696e20666c6f776572792064657369676e732e2041626c6520746f20686f6c642061206772656174206361706163697479206f66207370696365732e20596f75206265747465722073706963652069742075703c2f703e, '1200', 'meal1664193010Sun-MRP1200-(1).JPG', 2000, 12, 23, 23, '', '', 'spice-box-jar', '2022-09-26', '2022-11-07', 1, 0),
(210, 19, 0, 'Almirah Spice Box', 0x3c703e2e20576f6f64656e207370696365207261636b20416e2061757468656e74696320776f6f64206d61646520737069636573207261636b2077686963682069732062656175746966756c6c792063617276656420616e64207061696e74656420696e20666c6f776572792064657369676e732e2041626c6520746f20686f6c642061206772656174206361706163697479206f66207370696365732e20596f75206265747465722073706963652069742075702e3c2f703e, '1200', 'meal1664193067Venus-MRP-1200-(4).jpg', 2000, 30, 15, 18, '', '', 'almirah-spice-box', '2022-09-26', '2022-11-07', 1, 0),
(211, 19, 0, 'Pirate Mug 300', 0x3c703e576f6f64656e206d756c7469707572706f7365206d756720416e74697175652066696e69736820676976656e20746f2074686973206d756c7469707572706f7365206d7567206d616465206f6620776f6f642069732061626c6520746f20686f6c642067726561742063617061636974792e205468652063757276792068616e646c6520676976696e6720676f6c64656e20746f75636820746f2074686520706965636520617320612077686f6c652e3c2f703e, '300', 'meal1664193119Pirate-Mug-MRP300-(2).JPG', 150, 18, 13, 15, '', '', 'pirate-mug-300', '2022-09-26', '2022-11-07', 1, 0),
(212, 19, 0, 'Serving Jar', 0x3c703e576f6f64656e2073657276696e6720747261792077697468206a61727320496e74656e73656c7920706f6c69736865642073657276696e67207472617920616c6f6e672077697468207468726565206d656469756d2073697a6564206a61727320666f722073657276696e6720707572706f736573206769766573207468652068696e74206f66206120636c61737369632070726f647563742e3c2f703e, '800', 'meal1664193163Server-Set-MRP800-(1).JPG', 300, 4, 21, 21, '', '', 'serving-jar', '2022-09-26', '2022-11-07', 1, 0),
(213, 20, 0, 'Girls Sling Bag', 0x3c703e536f756c206d61726b20736c696e672062616720534f4c495441525920534c494e4720424147204d41444520574954482048414e4420574f56454e204a55544520444546494e494e47205448452052415720414e442046524553482046454154555245532e204974206861732031206d61696e20636f6d706172746d656e7420616e642061206d61676e6574206c6f636b20636c6f737572653c2f703e, '300', 'meal1664194059DSC03492_JPG.jpg', 150, 26, 2, 26, '', '', 'girls-sling-bag', '2022-09-26', '2022-11-07', 1, 0),
(214, 18, 0, 'Iron Flower Vase', 0x3c703e49726f6e20466c6f7765722056617365266e6273703b3c2f703e, '150', 'meal1664267975Untitled.png', 150, 28, 15, 20, '', '', 'iron-flower-vase', '2022-09-27', '2022-10-28', 1, 0),
(216, 18, 0, 'Kachua Gamla', 0x3c703e4b61636875612047616d6c6120746f206465636f7261746520796f75722067617264656e20616e6420686f7573652e3c2f703e, '900', 'meal1664281371ASP09937.jpg', 2000, 12, 23, 33, '', '', 'kachua-gamla', '2022-09-27', '2022-10-28', 1, 0),
(217, 21, 0, 'Cane Pen Stand Combo', 0x3c703e50656e205374616e643c2f703e, '150', 'meal1664955426ASP00035.jpg', 50, 12, 5, 5, '', '', 'cane-pen-stand-combo', '2022-10-05', '2022-11-07', 1, 0),
(218, 19, 0, 'Shilon basket', 0x3c703e2e2043616e652073746f72616765206261736b657420536d616c6c2073697a65642063616e65206261736b657420666f722073746f72616765207769746820666c617420626173652e2041207374726f6e6720616e64207374757264792070726f6475637420666f722073746f72696e672073747566662e3c2f703e, '180', 'meal1664956694ASP00050.jpg', 150, 15, 23, 23, '', '', 'shilon-basket', '2022-10-05', '2022-11-07', 1, 0),
(219, 18, 0, 'Cane Flowere  vase', 0x3c703e3c7374726f6e673e6465636f72617469766520666c6f77657265207661736520666f7220686f7573653c2f7374726f6e673e3c2f703e, '150', 'meal1664956932ASP00022.jpg', 50, 22, 5, 5, '', '', 'cane-flowere-vase', '2022-10-05', '2022-11-07', 1, 0),
(220, 19, 0, 'Storage basket', 0x3c703e43616e652073746f72616765206261736b657420536d616c6c2073697a65642063616e65206261736b657420666f722073746f72616765207769746820666c617420626173652e2041207374726f6e6720616e64207374757264792070726f6475637420666f722073746f72696e672073747566662e202850524f445543542044455441494c53293c2f703e, '450', 'meal1664957305ASP00020.jpg', 100, 5, 6, 6, '', '', 'storage-basket', '2022-10-05', '2022-11-07', 1, 0),
(221, 18, 0, 'Round Large Size Table lamp Night Lamp', 0x3c703e526f756e64204c617267652053697a65205461626c65206c616d70204e69676874204c616d7020484f4d45204445434f52415445443c2f703e, '1500', 'meal1664966047round-shape-table-lamp-round-shape-table-lamp-the-allchemy-15-original-imaggbfbyvkugfc8(1).jpeg', 400, 15, 7, 9, '', '', 'round-large-size-table-lamp-night-lamp', '2022-10-05', '2022-10-28', 1, 0),
(222, 18, 0, 'Hanging  lamp', 0x3c703e68616e67696e67206c616d70206461636f726574656420726f6f6d3c2f703e, '450', 'meal16649715200-10-10-400-candle-jar-holder-the-allchemy-original-imaggkyw59kks6ud(1).jpeg', 400, 15, 7, 7, '', '', 'hanging-lamp', '2022-10-05', '2022-10-28', 1, 0),
(223, 22, 0, 'Damru', 0x3c703e44616d72753c2f703e, '60', 'meal1665121892Damru-MRP50.jpg', 50, 12, 5, 5, '', '', 'damru', '2022-10-07', '2022-10-28', 1, 0),
(224, 22, 0, 'Ball-in-a-maze puzzle game', 0x3c703e42616c6c2d696e2d612d6d617a652070757a7a6c652067616d65205468697320696e746572657374206275696c64696e672062616c6c20696e2061206d617a652070757a7a6c6520497320612063697263756c61722067616d65206d616465206f6620776f6f64207769746820666c6174206261736520737572666163652e2054727920616e6420636f6c6c656374207468652074687265652062616c6c73206174207468652063656e74726520696620796f752063616e2e3c2f703e, '299', 'meal1665121941Gola-Goli-MRP200-(2).JPG', 50, 1, 15, 15, '', '', 'ball-in-a-maze-puzzle-game', '2022-10-07', '2022-11-08', 1, 1),
(225, 22, 0, 'Lakdi ka stool', 0x3c703e4c414b4449204b412053544f4f4c266e6273703b3c2f703e, '799', 'meal1665121985Lakdi_Ka_Stool_MRP_600_(1).JPG', 3000, 35, 25, 25, '', '', 'lakdi-ka-stool', '2022-10-07', '2022-10-28', 1, 0),
(226, 22, 0, 'Moonch Khoonti', 0x3c703e4d6f6f6e6368204b686f6f6e74693c2f703e, '299', 'meal1665122557Mooch-Khoonti-MRP250-(1).JPG', 50, 17, 9, 8, '', '', 'moonch-khoonti', '2022-10-07', '2022-10-28', 1, 0),
(227, 23, 0, 'Mobile Stand', '', '259', 'meal1665122601Mobile-Stand-MRP250---Each-(2).JPG', 20, 17, 1, 6, '', '', 'mobile-stand', '2022-10-07', '2022-10-28', 1, 0),
(228, 23, 0, 'Pen Stand', '', '159', 'meal1665122632Dice-Pen-Stand-MRP150-(1).JPG', 50, 8, 8, 8, '', '', 'pen-stand', '2022-10-07', '2022-10-28', 1, 0),
(229, 23, 0, 'Contry Bank', '', '699', 'meal1665122667Contry_Bank_Bottle_MRP600_(1).JPG', 200, 25, 7, 10, '', '', 'contry-bank', '2022-10-07', '2022-10-28', 1, 0),
(230, 23, 0, 'Pirate Mug', 0x3c703e576f6f64656e206d756c7469707572706f7365206d756720416e74697175652066696e69736820676976656e20746f2074686973206d756c7469707572706f7365206d7567206d616465206f6620776f6f642069732061626c6520746f20686f6c642067726561742063617061636974792e205468652063757276792068616e646c6520676976696e6720676f6c64656e20746f75636820746f2074686520706965636520617320612077686f6c652e3c2f703e, '299', 'meal1665122764Pirate-Mug-MRP300-(2).JPG', 100, 14, 10, 14, '', '', 'pirate-mug', '2022-10-07', '2022-11-07', 1, 0),
(231, 18, 0, 'Table pen stand', 0x3c703e484f4d45205441424c452050454e205354414e44266e6273703b266e6273703b3c2f703e, '300', 'meal1666088389ASP09821.jpg', 200, 19, 13, 15, '', '', 'table-pen-stand', '2022-10-18', '2022-11-08', 1, 1),
(232, 18, 0, 'Blue Color Handicraft Flower Vase', 0x3c703e426c756520436f6c6f722048616e6469637261667420466c6f77657220566173653c2f703e, '250', 'meal1666089314DSC03480-scaled1.jpg', 100, 14, 6, 29, '', '', 'blue-color-handicraft-flower-vase', '2022-10-18', '2022-11-07', 1, 0),
(233, 18, 0, 'IRON TIGER', 0x3c703e484f4d45204445434f524554494f4e2049524f4e205449474552266e6273703b3c2f703e, '750', 'meal1666090149ASP00319.jpg', 2000, 14, 10, 43, '', '', 'iron-tiger', '2022-10-18', '2022-10-28', 1, 0),
(234, 18, 0, 'Hanging door shiv ji', 0x3c703e484f4d45204445434f524154494f4e2048414e47494e4720574f4f44454e2053484956204a49266e6273703b3c2f703e, '150', 'meal1666090403IMG_3174.jpg', 50, 10, 1, 12, '', '', 'hanging-door-shiv-ji', '2022-10-18', '2022-11-08', 1, 1),
(235, 18, 0, 'SWAN BLUE', 0x3c703e484f4d45204445434f524154494f4e205357414e20424c5545204455434b3c2f703e, '180', 'meal1666090685DSC03418-1.jpg', 30, 13, 8, 8, '', '', 'swan-blue', '2022-10-18', '2022-10-28', 1, 0),
(236, 18, 0, 'CORONA', 0x3c703e484f4d45204445434f524154494f4e20464f5220444557414c49205350454349414c204f46464552266e6273703b3c2f703e, '250', 'meal1666091665DSC03396-1.jpg', 50, 14, 5, 16, '', '', 'corona', '2022-10-18', '2022-10-28', 1, 0),
(237, 18, 0, 'CANDLE HOLDER', 0x3c703e4445434f524154494f4e20464f5220444557414c49205350454349414c204f464645522043414e444c4520484f4c4445523c2f703e, '180', 'meal1666092524WhatsAppImage2022-09-29at5_05_57AM.jpeg', 100, 13, 11, 11, '', '', 'candle-holder', '2022-10-18', '2022-10-28', 1, 0),
(238, 18, 0, 'CANDLE HOLDER AND DIYA HOLDER', 0x3c703e484f4d45204445434f524154494f4e2043444e41444c4520484f4c4445522041444e204449594120484f4c4445523c2f703e, '199', 'meal1666093380WhatsAppImage2022-10-07at4_11_49PM_(1).jpeg', 20, 13, 9, 9, '', '', 'candle-holder-and-diya-holder', '2022-10-18', '2022-10-28', 1, 0),
(239, 18, 0, 'TABLE LAMP', 0x3c703e484f4d45204445434f524554494f4e20464f5220444557414c49205350454349414c204f46464552266e6273703b205441424c45204c414d503c2f703e, '999', 'meal1666094018KarishmaMRP12002.jpg', 400, 33, 14, 14, '', '', 'table-lamp', '2022-10-18', '2022-10-28', 1, 0),
(240, 18, 0, 'IRON CYCLE', 0x3c703e484f4d45204445434f524154494f4e20464f5220444557414c49205350454349414c204f46464552266e6273703b3c2f703e, '450', '', 200, 15, 6, 19, '', '', 'iron-cycle', '2022-10-18', '2022-10-28', 0, 0),
(241, 18, 0, 'HOME DECORATION LAMP', 0x3c703e444557414c49205350454349414c204f4646455220484f4d45204445434f524154494f4e204c414d503c2f703e, '450', 'meal1666095984AnarkaliMRP9001.jpg', 0, 0, 0, 0, '', '', 'home-decoration-lamp', '2022-10-18', '0000-00-00', 1, 0),
(242, 18, 0, 'HANGING NIGHT LIGHT', 0x3c703e4e4947485420484f4d45204445434f524154494f4e266e6273703b20444557414c49205350454349414c204f464645523c2f703e, '210', 'meal1666096241AshaMRP300.jpg', 0, 0, 0, 0, '', '', 'hanging-night-light', '2022-10-18', '0000-00-00', 1, 0),
(243, 18, 0, 'TABLE LAMP HOME DECORATION  FOR DEWALI OFFER', 0x3c703e5441424c45204c414d5020484f4d45204445434f524154494f4e20266e6273703b464f5220444557414c49204f46464552266e6273703b3c2f703e, '399', 'meal1666096435MadhubalaMRP2000.jpg', 0, 0, 0, 0, '', '', 'table-lamp-home-decoration-for-dewali-offer', '2022-10-18', '0000-00-00', 1, 0),
(244, 21, 0, 'Table pen stand', 0x3c703e444557414c49205350454349414c204f46464552204441534b205441424c452050454e205354414e44266e6273703b3c2f703e, '232', 'meal1666175806xmyg0_400.jpg', 200, 19, 12, 13, '', '', 'table-pen-stand', '2022-10-19', '2022-11-08', 1, 1),
(245, 18, 0, 'Metal candle holder', 0x3c703e4d41544c45204c4f55545320444959412026616d703b2043414e444c4520266e6273703b484f4c4445523c2f703e, '199', 'meal1666180919hgwcx_400.jpg', 20, 3, 4, 13, '', '', 'metal-candle-holder', '2022-10-19', '2022-11-08', 1, 0),
(246, 18, 0, 'Decorated  lamp', 0x3c703e444557414c49205350454349414c204f4646455220534c494e47204c414d50204445434f524154494f4e20464f52204e4947485420484f4d45266e6273703b3c2f703e, '350', 'meal1666182185AnarkaliMRP9001.jpg', 500, 21, 7, 19, '', '', 'decorated-lamp', '2022-10-19', '2022-11-08', 1, 1),
(247, 18, 0, 'Pear diya stand', 0x3c703e44495941205354414e4420464f5220444557414c49204f4646455220464f522047494654494e47266e6273703b3c2f703e, '320', 'meal1666245758tlrwu_400.jpg', 80, 18, 10, 10, '', '', 'pear-diya-stand', '2022-10-20', '2022-11-08', 1, 1),
(248, 18, 0, 'Hanging multipurpose wooden', 0x3c703e484f4d45204445434f524154494f4e20464f5220444557414c49205350454349414c204f46464552204d554c5449504f555253452048414e47494e47266e6273703b3c2f703e, '399', 'meal1666245983d1msh_400.jpg', 100, 53, 8, 8, '', '', 'hanging-multipurpose-wooden', '2022-10-20', '2022-11-08', 1, 0),
(249, 18, 0, 'Candle holder & diya stand', 0x3c703e43414e444c452026616d703b2044495941205354414e4420464f5220444557414c49204f4646455220464f5220484f4d45204445434f524154494f4e266e6273703b3c2f703e, '299', 'meal1666248459arvc4_400.jpg', 500, 22, 10, 10, '', '', 'candle-holder-diya-stand', '2022-10-20', '2022-11-08', 1, 0),
(250, 18, 0, 'Diya stand', 0x3c703e444557414c49205350454349414c204f464645522048414e47494e472043414e444c452026616d703b2044495941205354414e443c2f703e, '250', 'meal1666249965b7nzh_400.jpg', 100, 20, 10, 10, '', '', 'diya-stand', '2022-10-20', '2022-11-08', 1, 1),
(251, 19, 0, 'Fruits basket', 0x3c703e5375706572206c69676874207765696768742063616e65206261736b6574206973206d756c7469707572706f7365207769746820676f6f642063617061636974792e20497420636f6d657320776974682061207374726f6e6720616e64207374757264792068616e646c652e204272696e672074686973206261736b657420686f6d6520696e20697473206d6f7374206e61747572616c2073746174652e202850524f445543542044455441494c53293c2f703e, '350', 'meal1666250131cw9kn_400.jpg', 150, 22, 15, 15, '', '', 'fruits-basket', '2022-10-20', '2022-11-08', 1, 1),
(252, 18, 0, 'Peacock diya stand', 0x3c703e444557414c49205350454349414c204f46464552266e6273703b504541434f434b20444959412026616d703b2043414e444c45205354414e44266e6273703b266e6273703b3c2f703e, '250', 'meal1666250781xod2n_400.jpg', 80, 12, 6, 6, '', '', 'peacock-diya-stand', '2022-10-20', '2022-11-08', 1, 1),
(253, 20, 0, 'Trendy woolen hand held purse', 0x3c703e5472656e647920776f6f6c6c656e2068616e642068656c6420707572736520427579207468697320776f6f6c6c656e2068616e642068656c642070757273652c206f6e65206f6620746865206d6f7374207472656e64696e672070696563657320696e206f7572206163636573736f726965732063617465676f72792e205468652070726574747920626c756520616e6420776869746520636f6d62696e6174696f6e206769766573206120636f6f6c20656e6572677920746f207468652062616720616e64206974206861732031206d61696e20636f6d706172746d656e7420776974682061206d61676e6574206c6f636b2e3c2f703e, '350', 'meal1666251660u7c67_400.jpg', 150, 20, 5, 25, '', '', 'trendy-woolen-hand-held-purse', '2022-10-20', '2022-11-08', 1, 1),
(254, 20, 0, 'Cloth owl sling bag', 0x3c703e436c6f7468206f776c20736c696e6720626167205768656e20796f752077616e7420746f206c6f6f6b2063617375616c20616e6420636f6f6c20646f6e26727371756f3b7420666f7267657420746f2074616b652074686973207072696e74656420636c6f7468206f776c20626167207769746820796f752e204974206861732061206e6f6e2d64657461636861626c6520736c696e67207374726170202c2031206d61696e20636f6d706172746d656e7420616e64206120746f70207361746368656c2e3c2f703e, '650', 'meal1666258240eb2pj_400.jpg', 150, 26, 17, 4, '', '', 'cloth-owl-sling-bag', '2022-10-20', '2022-11-08', 1, 1),
(255, 18, 0, 'Hanging candle holder', 0x3c703e444557414c49205350454349414c204f4646455220464f52266e6273703b2048414e47494e472043414e444c4520484f4c4445522026616d703b204449594120484f4c444552266e6273703b3c2f703e, '450', 'meal166737016433.png', 100, 37, 19, 24, '', '', 'hanging-candle-holder', '2022-10-20', '2022-11-08', 1, 0),
(256, 21, 0, 'Phone stand', 0x3c703e4441534b2050484f4e45205354414e4420444557414c49205350454349414c204f464645523c2f703e, '99', 'meal1666262371q6rau_400.jpg', 50, 18, 1, 12, '', '', 'phone-stand', '2022-10-20', '2022-11-08', 1, 1),
(257, 17, 0, 'Wooden Cube solver puzzle box', 0x3c703e576f6f64656e204375626520736f6c7665722070757a7a6c6520626f7820546869732070757a7a6c6520626f7820636f6d6573207769746820666f757220706965636573206f6620726561647920746f20736f6c76652063756265732e205468652076617269657479206f662063756265732061726520676f6f64206174206275696c64696e6720696e7465726573742e20426520706c617966753c2f703e, '950', 'meal1666262899oakqr_400.jpg', 200, 10, 14, 14, '', '', 'wooden-cube-solver-puzzle-box', '2022-10-20', '2022-11-08', 1, 1),
(258, 22, 0, 'Magic pancil', 0x3c703e4d415349432050454e43494c20464f52204b49445320444557414c49205350454349414c204f464645523c2f703e, '246', 'meal1666263345pytzx_400.jpg', 50, 17, 2, 1, '', '', 'magic-pancil', '2022-10-20', '2022-11-08', 1, 1),
(259, 18, 0, 'Candle stand', 0x3c703e4c49544520464f5220484f4d4520444557414c49205350454349414c204f464645522043414e444c45205354414e443c2f703e, '320', 'meal1666263719wndwy_400.jpg', 150, 26, 5, 5, '', '', 'candle-stand', '2022-10-20', '2022-11-08', 1, 0),
(260, 18, 0, 'Decorated diya  (PAKE OF 20)', 0x3c703e4445434f5241544544204449594120464f5220444557414c49205350454349414c204f46464552266e6273703b3c2f703e, '250', 'meal166737038532.png', 150, 15, 6, 6, '', '', 'decorated-diya-pake-of-20', '2022-10-20', '2022-11-08', 1, 1),
(261, 20, 0, 'Printed purse', 0x3c703e5072696e74656420736c696e67206261672054686973207072696e74656420736c696e672062616720617474616368656420776974682061206e6f6e2d64657461636861626c6520736c696e6720737472617020676976657320796f752063686963206c6f6f6b20616e64206973206d656469756d2073697a656420746f20686f6c64206d6f7374207468696e6773206c696b65206b6579732c206d616b6575702c206d6f62696c652070686f6e65206574632e204974206861732031206d61696e20636f6d706172746d656e7420616e64206d61676e6574206c6f636b20636c6f737572652e3c2f703e, '520', 'meal16662674974u7fv_400.jpg', 150, 12, 5, 23, '', '', 'printed-purse', '2022-10-20', '2022-11-08', 1, 1),
(262, 18, 0, 'Metal candle holder & diya stand', 0x3c703e484f4d45204445434f524154494f4e20464f5220444557414c49205350454349414c204f46464552204d41544c45204449594126616d703b2043414e444c45266e6273703b3c2f703e, '250', 'meal1666267698ffp4j_400.jpg', 20, 14, 6, 6, '', '', 'metal-candle-holder-diya-stand', '2022-10-20', '2022-11-08', 1, 1),
(263, 18, 0, 'Hanging candle holder & diya', 0x3c703e444557414c49205350454349414c204f46464552204d41544c45266e6273703b48414e47494e472043414e444c4520484f4c4445522026616d703b2044495941205354414e442059454c4c4f5720414e442057484954453c2f703e, '430', 'meal1666335647fjz1g_400.jpg', 350, 15, 10, 10, '', '', 'hanging-candle-holder-diya', '2022-10-21', '2022-11-08', 1, 0),
(264, 19, 0, 'Wooden water bottle', 0x3c703e576f6f64656e20776174657220626f74746c65205468697320736c696d20616e64206d656469756d2073697a656420776f6f64656e20776174657220626f74746c65206973206561737920746f2068616e646c6520616e6420686f6c647320676f6f642063617061636974793c2f703e, '870', 'meal16663364099x4gy_400.jpg', 150, 32, 6, 6, '', '', 'wooden-water-bottle', '2022-10-21', '2022-11-08', 1, 1),
(265, 17, 0, 'Fascinating 2- piece wooden Puzzle', 0x3c703e42616c6c2d696e2d612d6d617a652070757a7a6c652067616d65205468697320696e746572657374206275696c64696e672062616c6c20696e2061206d617a652070757a7a6c6520497320612063697263756c61722067616d65206d616465206f6620776f6f64207769746820666c6174206261736520737572666163652e2054727920616e6420636f6c6c656374207468652074687265652062616c6c73206174207468652063656e74726520696620796f752063616e2e3c2f703e, '450', 'meal1666336645pdbos_400.jpg', 200, 3, 15, 15, '', '', 'fascinating-2-piece-wooden-puzzle', '2022-10-21', '2022-11-08', 1, 1),
(266, 21, 0, 'Paper clip', 0x3c703e4441534b20504150455220434c495020574f4f44454e266e6273703b3c2f703e, '145', 'meal1666336800htc0g_400.jpg', 10, 7, 5, 5, '', '', 'paper-clip', '2022-10-21', '2022-11-08', 1, 0),
(267, 20, 0, 'Hand bag for women in cane', 0x3c703e4d696e6920746f7465206261672054686973206d696e69206261672069732068616e646d616465207769746820737472617720666f7220612072757374696320696e737069726564206c6f6f6b2077697468206a7574652068616e646c652074686174206d616b6573206974207374726f6e6720616e64206561737920746f20686f6c642e2048656c707320796f75206b65657020796f7572207468696e6773206f7267616e697a65642e3c2f703e, '799', 'meal1666336968vpknp_400.jpg', 150, 32, 14, 24, '', '', 'hand-bag-for-women-in-cane', '2022-10-21', '2022-11-08', 1, 0),
(268, 18, 0, 'Yellow Hanging candle holder', 0x3c703e59656c6c6f772048616e67696e672063616e646c6520686f6c6465723c2f703e, '350', 'meal1666337109kkvdb_400.jpg', 300, 18, 13, 13, '', '', 'yellow-hanging-candle-holder', '2022-10-21', '2022-11-07', 1, 0),
(269, 17, 0, 'Wooden kids puzzle game', 0x3c703e5468697320696e746572657374206275696c64696e672062616c6c20696e2061206d617a652070757a7a6c6520497320612063697263756c61722067616d65206d616465206f6620776f6f64207769746820666c6174206261736520737572666163652e2054727920616e6420636f6c6c656374207468652074687265652062616c6c73206174207468652063656e74726520696620796f752063616e2e3c2f703e, '399', 'meal1666337237okned_400.jpg', 60, 2, 17, 17, '', '', 'wooden-kids-puzzle-game', '2022-10-21', '2022-11-08', 1, 1),
(270, 19, 0, 'Beer Serving Holder (Space of two glass)', 0x3c703e426565722053657276696e6720486f6c64657220285370616365206f662074776f20676c617373293c2f703e, '450', 'meal1666337298himvc_400.jpg', 200, 32, 10, 24, '', '', 'beer-serving-holder-space-of-two-glass', '2022-10-21', '2022-11-07', 1, 0),
(271, 18, 0, 'Iron Vase (10 inch, Grey)', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e49726f6e20566173652028313020696e63682c20477265792920484f4d45204445434f524154494f4e20464f5220444557414c49205350454349414c204f46464552266e6273703b3c2f703e, '220', 'meal16663378005i8pr_400.jpg', 100, 24, 15, 24, '', '', 'iron-vase-10-inch-grey', '2022-10-21', '2022-10-28', 1, 0),
(272, 21, 0, 'Wooden paper clip', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e576f6f64656e20706170657220636c6970205645525920534d414c4c20414e442050524954593c2f703e, '150', 'meal1666341305jfjh0_400.jpg', 10, 7, 5, 5, '', '', 'wooden-paper-clip', '2022-10-21', '2022-10-28', 1, 0),
(273, 18, 0, 'Diya & Candle Holder (iron, purple)', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e446979612026616d703b2043616e646c6520486f6c646572202869726f6e2c20707572706c652920444557414c49266e6273703b5350454349414c204f46464552266e6273703b3c2f703e, '299', 'meal16663417485jtyj_400.jpg', 100, 14, 13, 13, '', '', 'diya-candle-holder-iron-purple', '2022-10-21', '2022-10-28', 1, 0),
(274, 17, 0, 'Kids puzzle game', 0x3c703e4d4153494320574f4f44454e2047414d4520464f52204b494453266e6273703b3c2f703e, '160', 'meal1666344424biuwc_400.jpg', 50, 14, 7, 12, '', '', 'kids-puzzle-game', '2022-10-21', '2022-11-08', 1, 1),
(275, 19, 0, 'Wooden mug', 0x3c703e576f6f64656e206d756c7469707572706f7365206d756720416e74697175652066696e69736820676976656e20746f2074686973206d756c7469707572706f7365206d7567206d616465206f6620776f6f642069732061626c6520746f20686f6c642067726561742063617061636974792e205468652063757276792068616e646c6520676976696e6720676f6c64656e20746f75636820746f2074686520706965636520617320612077686f6c652e3c2f703e, '200', 'meal1666345317q9mnp_400.jpg', 150, 8, 5, 7, '', '', 'wooden-mug', '2022-10-21', '2022-11-07', 1, 0),
(276, 20, 0, 'Sleeping doll key chain', 0x3c703e536c656570696e6720646f6c6c206b657920636861696e205468697320697320612062726f776e20636f6c6f75726564206b657920636861696e206f66206120736c656570696e6720646f6c6c20636f766572656420696e2066757220616c6c2061726f756e643c2f703e, '75', 'meal1666345594phsh3_400.jpg', 20, 5, 3, 3, '', '', 'sleeping-doll-key-chain', '2022-10-21', '2022-11-08', 1, 0),
(277, 18, 0, 'Decorated lamp', 0x3c703e266e6273703b4d656469756d2053697a65206c616d70205461626c65204c616d7073266e6273703b3c2f703e, '399', 'meal1666345869asua5_400.jpg', 2500, 20, 16, 16, '', '', 'decorated-lamp', '2022-10-21', '2022-11-08', 1, 1),
(278, 17, 0, 'Kids wooden puzzle game', 0x3c703e457865726369736520796f7572206b696473262333393b206d696e64207769746820746869732073696d706c6520796574206162736f7262696e67207069656365206f662070757a7a6c652e2054686973206561737920746f2075736520706168656c69206d616465206f6620776f6f64206272696e6773206f757420696e746572657374732e20547279206974206e6f772e46617363696e6174696e6720322d20706965636520776f6f64656e2050757a7a6c653c2f703e, '450', 'meal16663460426haiz_400.jpg', 100, 10, 5, 7, '', '', 'kids-wooden-puzzle-game', '2022-10-21', '2022-11-08', 1, 1),
(279, 18, 0, 'Chandelier Ceiling Lamp', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e4368616e64656c696572204365696c696e67204c616d7020464f5220444557414c49205350454349414c204f46464552266e6273703b3c2f703e, '999', 'meal1666346150si43l_400.jpg', 200, 25, 12, 12, '', '', 'chandelier-ceiling-lamp', '2022-10-21', '2022-10-27', 1, 0),
(280, 18, 0, 'Diya & Candle Holder (copper, golden)', 0x3c703e446979612026616d703b2043616e646c6520486f6c6465722028636f707065722c20676f6c64656e293c2f703e, '270', 'meal1666346252agjtv_400.jpg', 300, 14, 6, 8, '', '', 'diya-candle-holder-copper-golden', '2022-10-21', '2022-10-27', 1, 0),
(281, 19, 0, 'Wooden spices set', 0x3c703e576f6f64656e20737069636520626f782073657420526f756e6420616e64206561737920746f2075736520776f6f64656e2073706963657320736574207769746820736978207261636b732e20546865207261636b7320686f6c6420676f6f64206361706163697479206f66207370696365732e20466c6f77657279207061696e7420616e642063617276696e6773206f6e2074686520626f782061726520646f6e6520676976696e67206974206120636c617373696320747261646974696f6e616c20766962652e3c2f703e, '1299', 'meal16663464171rlfj_400.jpg', 2000, 10, 22, 22, '', '', 'wooden-spices-set', '2022-10-21', '2022-11-07', 1, 0),
(282, 18, 0, 'Chandeliers & Pendant Lights', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e4368616e64656c696572732026616d703b2050656e64616e74204c69676874733c2f703e, '450', 'meal1666346489oj5hy_400.jpg', 300, 42, 28, 28, '', '', 'chandeliers-pendant-lights', '2022-10-21', '2022-10-27', 1, 0),
(283, 18, 0, 'Designer candle holder with beautiful Vase', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e44657369676e65722063616e646c6520686f6c64657220776974682062656175746966756c20566173653c2f703e, '450', 'meal1666346671flueo_400.jpg', 100, 20, 20, 20, '', '', 'designer-candle-holder-with-beautiful-vase', '2022-10-21', '2022-10-27', 1, 0),
(285, 19, 0, 'Iron Fruit & Vegetable Basket (golden)', 0x3c703e526f756e64206672756974206261736b65747320536f66746c7920636f6c6f7572656420726f756e6420616e64206c6967687420776569676874206672756974206261736b6574732e204d756c7469707572706f73652069726f6e206261736b65747320776974682067726561742063617061636974792e3c2f703e, '671', 'meal16673714095.png', 400, 15, 25, 25, '', '', 'iron-fruit-vegetable-basket-golden', '2022-11-02', '2022-11-07', 0, 0),
(286, 18, 0, 'Flower Vase (Pack of 3)', 0x3c703e464c4f57455245205641534520285041434b204f462033293c2f703e, '1582', 'meal16673716044.png', 4000, 35, 25, 25, '', '', 'flower-vase-pack-of-3', '2022-11-02', '0000-00-00', 1, 0),
(287, 18, 0, 'Flower Vase', 0x3c703e464c4f57455245205641534520484f4d45204445434f524154494f4e20414e442047415244454e266e6273703b3c2f703e, '600', 'meal16673785141.png', 800, 35, 25, 25, '', '', 'flower-vase', '2022-11-02', '0000-00-00', 1, 0),
(288, 19, 0, 'Golden iron fruits basket', 0x3c703e526f756e64206672756974206261736b65747320536f66746c7920636f6c6f7572656420726f756e6420616e64206c6967687420776569676874206672756974206261736b6574732e204d756c7469707572706f73652069726f6e206261736b65747320776974682067726561742063617061636974792e3c2f703e, '599', 'meal16673789125.png', 500, 18, 35, 35, '', '', 'golden-iron-fruits-basket', '2022-11-02', '2022-11-08', 1, 1),
(289, 19, 0, 'Fruits iron basket', 0x3c703e526f756e64206672756974206261736b65747320536f66746c7920636f6c6f7572656420726f756e6420616e64206c6967687420776569676874206672756974206261736b6574732e204d756c7469707572706f73652069726f6e206261736b65747320776974682067726561742063617061636974792e3c2f703e, '900', 'meal16673790456.png', 500, 17, 35, 35, '', '', 'fruits-iron-basket', '2022-11-02', '2022-11-08', 1, 1),
(290, 19, 0, 'Iron basket (Combo Of 2)', 0x3c703e49524f4e204241534b45542028434f4d424f204f46203229526f756e64206672756974206261736b65747320536f66746c7920636f6c6f7572656420726f756e6420616e64206c6967687420776569676874206672756974206261736b6574732e204d756c7469707572706f73652069726f6e206261736b65747320776974682067726561742063617061636974792e3c2f703e, '1299', 'meal16673793247.png', 900, 17, 35, 35, '', '', 'iron-basket-combo-of-2', '2022-11-02', '2022-11-08', 1, 1),
(291, 21, 0, 'Teracota pen stand', 0x3c703e53545544454e54204441534b205441424c4520464f522050454e205354414e44266e6273703b3c2f703e, '210', 'meal166737958618.png', 300, 12, 9, 9, '', '', 'teracota-pen-stand', '2022-11-02', '2022-11-08', 1, 1),
(292, 18, 0, 'Decorative Showpiece  (Terracotta, Multicolor)', 0x3c703e4445434f5241544956452053484f575049454345202854455241434f5441204d554c5449434f4c4f5552293c2f703e, '410', 'meal166737979724.png', 800, 29, 21, 18, '', '', 'decorative-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(293, 18, 0, 'Teracota elephant flowere vase', 0x3c703e484f4d45204445434f524154494f4e2054455241434f544120464c4f574552452056415345266e6273703b3c2f703e, '1199', 'meal166738013219.png', 800, 17, 35, 35, '', '', 'teracota-elephant-flowere-vase', '2022-11-02', '2022-11-08', 1, 1),
(294, 18, 0, 'Decorative Showpiece & FLOWERE VASE   (Terracotta, Multicolor)', 0x3c703e4445434f5241544956452053484f5750494543452026616d703b266e6273703b20464c4f5745524520564153452054455241434f544120414e44204d554c5449434f4c4f5552266e6273703b3c2f703e, '2599', 'meal166738035423.png', 3500, 32, 29, 25, '', '', 'decorative-showpiece-flowere-vase-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(295, 18, 0, 'Buddha JI Decorative Showpiece (Cement, Brown)', 0x3c703e425544444841204a49266e6273703b4465636f7261746976652053686f777069656365202d20313620636d266e6273703b266e6273703b2843656d656e742c2042726f776e293c2f703e, '250', 'meal166738049113.png', 300, 25, 12, 12, '', '', 'buddha-ji-decorative-showpiece-cement-brown', '2022-11-02', '2022-11-08', 1, 1),
(296, 18, 0, 'Flowere vase Terracotta Vase  (15 inch, Multicolor)', 0x3c703e466c6f77657265207661736520616e64206465636f7261746976652073686f777069656365266e6273703b5465727261636f7474612056617365266e6273703b266e6273703b28313520696e63682c204d756c7469636f6c6f72293c2f703e, '2999', 'meal166738077728.png', 4000, 40, 35, 45, '', '', 'flowere-vase-terracotta-vase-15-inch-multicolor', '2022-11-02', '2022-11-08', 1, 0),
(297, 18, 0, 'Table lamp & Decorative Showpiece   (Terracotta, Multicolor)', 0x3c703e5461626c65206c616d702026616d703b206465636f7261746976652073686f777069656365202874657261636f7461206d756c7469636f6c6f72293c2f703e, '750', 'meal166738099415.png', 400, 17, 9, 9, '', '', 'table-lamp-decorative-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(298, 18, 0, 'Decorative Showpiece (Terracotta, Multicolor)', 0x3c703e4465636f7261746976652053686f777069656365202d20323820636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72294465636f7261746976652053686f777069656365202d20323820636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72294465636f7261746976652053686f777069656365202d20323820636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72294465636f7261746976652053686f777069656365202d20323820636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '1199', 'meal166738125130.png', 2500, 35, 30, 25, '', '', 'decorative-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(299, 16, 0, 'Terracotta figurine of lord Ganesha', 0x3c703e5465727261636f747461206669677572696e65206f66206c6f72642047616e65736861205468697320627269676874206d756c7469636f6c6f726564207069656365206f662047616e65736861206272696e677320656c6567616e636520776974682069747320756e6b65656e206375727665732e3c2f703e, '1450', 'meal166738150512.png', 2500, 27, 20, 22, '', '', 'terracotta-figurine-of-lord-ganesha', '2022-11-02', '2022-11-08', 1, 1),
(300, 18, 0, 'Decorative Ele[ Showpiece (Terracotta, Multicolor)', '', '', '', 0, 0, 0, 0, '', '', 'decorative-ele-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 0, 0),
(301, 18, 0, 'Decorative Elephant Showpiece  (Terracotta, Multicolor)', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e4465636f72617469766520456c657068616e742053686f77706965636520666f7220686f6d65206465636f726174696f6e3c2f703e, '799', 'meal166738211431.png', 400, 18, 9, 10, '', '', 'decorative-elephant-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(302, 18, 0, 'Iron flowere vase', 0x3c703e49726f6e2056617365266e6273703b266e6273703b28313520696e63682c20476f6c64293c2f703e, '299', 'meal16673822918.png', 200, 17, 9, 9, '', '', 'iron-flowere-vase', '2022-11-02', '0000-00-00', 1, 0),
(303, 18, 0, 'Decorative Showpiece - 28 cm  (Terracotta, Multicolor)', 0x3c703e6465636f7261746976652073686f777069656365266e6273703b4465636f7261746976652053686f777069656365202d20323820636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '1199', 'meal166738320120.png', 3500, 28, 26, 26, '', '', 'decorative-showpiece-28-cm-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(304, 18, 0, 'Decorative Showpiece   (Terracotta, Multicolor) pack of 4', 0x3c703e6465636f726174696e652073686f77706965636520686f6d65206465636f726174696f6e207061636b206f6620343c2f703e, '899', 'meal166738345522.png', 150, 8, 5, 5, '', '', 'decorative-showpiece-terracotta-multicolor-pack-of-4', '2022-11-02', '0000-00-00', 1, 0),
(305, 16, 0, 'Terracotta figurine of lord Ganesa', 0x3c703e5465727261636f747461206669677572696e65206f66206c6f72642047616e65736861205468697320627269676874206d756c7469636f6c6f726564207069656365206f662047616e65736861206272696e677320656c6567616e636520776974682069747320756e6b65656e206375727665732e202850524f445543542044455441494c53293c2f703e, '200', 'meal166738387111.png', 100, 9, 5, 5, '', '', 'terracotta-figurine-of-lord-ganesa', '2022-11-02', '2022-11-07', 1, 0),
(306, 18, 0, 'Decorative Showpiece - 4 cm  (Terracotta, Multicolor)', 0x3c703e266e6273703b4465636f7261746976652053686f777069656365202d203420636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '300', 'meal166738409810.png', 900, 7, 21, 21, '', '', 'decorative-showpiece-4-cm-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(307, 18, 0, 'Decorative Showpiece - 32 cm  (Terracotta, Multicolor)', 0x3c703e4465636f7261746976652053686f777069656365202d20333220636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '450', 'meal166738424414.png', 300, 17, 5, 6, '', '', 'decorative-showpiece-32-cm-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(308, 18, 0, 'Decorative Showpiece - 23 cm  (Terracotta, Multicolor)', 0x3c703e4465636f7261746976652053686f777069656365266e6273703b4465636f7261746976652053686f777069656365202d20323320636d266e6273703b266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '250', 'meal166738491729.png', 150, 7, 5, 5, '', '', 'decorative-showpiece-23-cm-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(309, 18, 0, 'Musician Showpiece pair   (Terracotta, Multicolor)', 0x3c703e4465636f7261746976652053686f77706965636520266e6273703b285465727261636f7474612c204d756c7469636f6c6f72293c2f703e, '600', 'meal166781661225.png', 200, 9, 5, 5, '', '<p>Decorative Showpiece &nbsp;(Terracotta, Multicolor)</p>', 'musician-showpiece-pair-terracotta-multicolor', '2022-11-02', '2022-11-07', 1, 0),
(310, 18, 0, 'Urli Decorative Showpiece (Terracotta, Multicolor)', 0x3c703e55726c69204465636f7261746976652053686f777069656365202874657261636f7461206d756c7469636f6c6f7220293c2f703e, '2399', 'meal1667385801ASP09997_b.jpg', 4500, 20, 35, 35, '', '', 'urli-decorative-showpiece-terracotta-multicolor', '2022-11-02', '0000-00-00', 1, 0),
(311, 18, 0, 'Teracota hanging lamp', 0x3c703e74657261636f74612068616e67696e67206c616d703c2f703e, '450', 'meal166738714626.png', 500, 35, 9, 9, '', '', 'teracota-hanging-lamp', '2022-11-02', '0000-00-00', 1, 0),
(312, 18, 0, 'Diya', 0x3c703e6465636f72617469766520646979613c2f703e, '250', '', 0, 0, 0, 0, '', '', 'diya', '2022-11-02', '0000-00-00', 0, 0),
(313, 18, 0, 'Diya (pack of 10)', 0x3c703e6465636f7261746976652064697961207061636b206f662031303c2f703e, '250', 'meal166738734232.png', 200, 10, 7, 7, '', '', 'diya-pack-of-10', '2022-11-02', '2022-11-07', 1, 0),
(314, 18, 0, 'Decorative Showpiece (Terracotta, Multicolor) flower vase', 0x3c703e4465636f7261746976652053686f77706965636520285465727261636f7474612c204d756c7469636f6c6f722920666c6f776572266e6273703b76617365266e6273703b3c2f703e, '250', 'meal166738748527.png', 100, 9, 5, 5, '', '', 'decorative-showpiece-terracotta-multicolor-flower-vase', '2022-11-02', '2022-11-07', 1, 0),
(315, 23, 0, 'Flower Vase (Pack of 3)', 0x3c703e666c6f776572266e6273703b766173652028205061636b206f66266e6273703b266e6273703b33293c2f703e, '1499', 'meal16673888004.png', 2000, 25, 15, 15, '', '', 'flower-vase-pack-of-3', '2022-11-02', '2022-11-07', 1, 0),
(316, 16, 0, 'Test', 0x3c703e746573743c2f703e, '20', 'meal1667466644ASP00231.jpg', 10, 9, 8, 8, 'Test', '<p>Test description</p>', 'test', '2022-11-03', '0000-00-00', 0, 0),
(317, 23, 0, 'Buddha JI Decorative Showpiece (Cement, Brown)', 0x3c703e427564646861204a49204465636f7261746976652053686f777069656365202843656d656e742c2042726f776e29266e6273703b3c2f703e, '300', 'meal166790274313.png', 300, 20, 9, 9, 'buddha ji', '<p>Buddha JI Decorative Showpiece (Cement, Brown)&nbsp;</p>', 'buddha-ji-decorative-showpiece-cement-brown', '2022-11-08', '0000-00-00', 1, 1),
(318, 18, 0, 'Iron bullet bike decorative showpiece', 0x3c703e49726f6e2062756c6c65742062696b65206465636f7261746976652073686f777069656365266e6273703b3c2f703e, '1033', 'meal16692024661.jpg', 200, 19, 9, 28, 'bike', '<p>bullet bike showpiece&nbsp;</p>', 'iron-bullet-bike-decorative-showpiece', '2022-11-23', '0000-00-00', 1, 0),
(319, 18, 0, 'Hinging glass flowere vase', 0x3c703e486f6d65206465636f726174696f6e20666f722068616e67696e6720676c61737320666c6f776572652076617365266e6273703b3c2f703e, '490', 'meal16692027004.jpg', 30, 15, 7, 7, 'flowere vase', '<p>flowere vase</p>', 'hinging-glass-flowere-vase', '2022-11-23', '0000-00-00', 1, 0),
(320, 18, 0, 'Living room decorative showpiece', 0x3c703e4c697665696e6720726f6f6d206465636f7261746976652073686f777069656365266e6273703b3c2f703e, '853', 'meal166920313010.jpg', 650, 16, 14, 31, 'showpiece', '<p>decorative showpiece for living room</p>', 'living-room-decorative-showpiece', '2022-11-23', '0000-00-00', 1, 0),
(321, 18, 0, 'Living room decorative item 2', 0x3c703e4c6976696e6720726f6f6d206465636f7261746976652073686f777069656365266e6273703b3c2f703e, '773', 'meal16692035397.jpg', 350, 15, 11, 25, 'showpiece for living room', '<p>decorative showpiece for living room and badroom&nbsp;</p>', 'living-room-decorative-item-2', '2022-11-23', '0000-00-00', 1, 0),
(322, 22, 0, 'Wooden tank  money bank', 0x3c703e576f6f64656e2074616e6b266e6273703b266e6273703b6d6f6e65792062616e6b266e6273703b3c2f703e, '933', 'meal166920555812.jpg', 450, 14, 13, 13, 'money bank', '<p>Wooden tank money bank</p>', 'wooden-tank-money-bank', '2022-11-23', '0000-00-00', 1, 0),
(323, 22, 0, 'Wooden wine money bank', 0x3c703e576f6f64656e206d6f6e65792062616e6b266e6273703b3c2f703e, '933', 'meal166920573515.jpg', 450, 19, 10, 10, 'money bank', '<p>Wooden tank money bank&nbsp;</p>', 'wooden-wine-money-bank', '2022-11-23', '0000-00-00', 1, 0),
(324, 18, 0, 'Metal decorative candle holder', 0x3c703e4d6574616c2063616e646c6520686f6c64657220666f72206465636f726174696f6e266e6273703b3c2f703e, '533', 'meal166920632620.jpg', 50, 9, 11, 11, 'candle holder', '<p>Candle holder&nbsp;</p>', 'metal-decorative-candle-holder', '2022-11-23', '0000-00-00', 1, 0),
(325, 19, 0, 'Metal net storage basket', 0x3c703e4d61746c65206e65742073746f72616765206261736b65743c2f703e, '1573', 'meal166920657925.jpg', 350, 16, 30, 30, 'basket', '<p>Metal net storage basket</p>', 'metal-net-storage-basket', '2022-11-23', '0000-00-00', 1, 0),
(326, 22, 0, 'Wooden wine bottle money bank', 0x3c703e576f6f64656e2077696e6520626f74746c65206d6f6d65792062616e6b3c2f703e, '933', 'meal166927052915.jpg', 350, 19, 10, 10, 'Gullak', '<p>Wooden wine bottle money bank</p>', 'wooden-wine-bottle-money-bank', '2022-11-24', '0000-00-00', 1, 0),
(327, 18, 0, 'Wooden swan coupal for decoration', 0x3c703e776f6f64656e207377616e20636f7570616c20666f72206465636f726174696f6e266e6273703b3c2f703e, '1213', 'meal166927080621.jpg', 200, 28, 7, 10, 'swan', '<p>wooden swan coupal decoration&nbsp;</p>', 'wooden-swan-coupal-for-decoration', '2022-11-24', '0000-00-00', 1, 0),
(328, 22, 0, 'Wooden ashtray', 0x3c703e576f6f64656e20617368747261793c2f703e, '473', 'meal166928964225.png', 20, 4, 10, 10, 'ashtray', '<p>Wooden&nbsp; Ashtray</p>', 'wooden-ashtray', '2022-11-24', '0000-00-00', 1, 0),
(329, 18, 0, 'Hukkah dastan showpiece', 0x3c703e48756b6b61682064617374616e2073686f777069656365266e6273703b3c2f703e, '973', 'meal166929072628.png', 10, 17, 3, 3, 'hukkah', '<p>Hukkah showpiece&nbsp;</p>', 'hukkah-dastan-showpiece', '2022-11-24', '0000-00-00', 1, 0),
(330, 18, 0, 'Wooden home key holder', 0x3c703e576f6f64656e20686f6d65206b657920686f6c646572266e6273703b3c2f703e, '733', 'meal166929093729.png', 100, 25, 5, 15, 'key holder', '<p>Wooden home key holder&nbsp;</p>', 'wooden-home-key-holder', '2022-11-24', '0000-00-00', 1, 0),
(331, 18, 0, 'Wooden small charpai', 0x3c703e576f6f64656e20736d616c6c2063616861727061693c2f703e, '1013', 'meal166929131431.png', 150, 10, 14, 26, 'charpai', '<p>Wooden small charpai</p>', 'wooden-small-charpai', '2022-11-24', '0000-00-00', 1, 0),
(332, 19, 0, 'Wooden multicolor charpai', 0x3c703e576f6f64656e206d756c7469636f6c6f722063686172706169266e6273703b3c2f703e, '1013', 'meal166929158538.png', 200, 10, 19, 19, 'toy charpai', '<p>Wooden multicolor charpai</p>', 'wooden-multicolor-charpai', '2022-11-24', '0000-00-00', 1, 0),
(333, 19, 0, 'Wooden hut tea costar (pack of 6)', 0x3c703e576f6f64656e206875742074656120636f7374617220287061636b206f662036293c2f703e, '633', 'meal166929279741.png', 50, 9, 9, 9, 'tea costar', '<p>Wooden hut tea coster&nbsp;</p>', 'wooden-hut-tea-costar-pack-of-6', '2022-11-24', '0000-00-00', 1, 0),
(334, 21, 0, 'Wooden hand stand', 0x3c703e4465736b204f7267616e697a657220576f6f64656e2068616e64207374616e64266e6273703b3c2f703e, '599', 'meal1670316167WhatsApp_Image_2022-12-01_at_12_12_07_PM_(1).jpeg', 80, 15, 4, 9, 'Mobile stand', '<p>Desk Organizer Wooden hand stand&nbsp;</p>', 'wooden-hand-stand', '2022-12-06', '0000-00-00', 1, 0),
(335, 19, 0, 'Wooden kitchen serving set tray', 0x3c703e576f6f64656e2073657276696e6720736574207472617920287061636b266e6273703b206f662033293c2f703e, '750', 'meal1670317459WhatsApp_Image_2022-12-02_at_2_42_28_PM.jpeg', 450, 2, 20, 25, 'serving tray', '<p>guest serving Wooden tray set (pack of 3)</p>', 'wooden-kitchen-serving-set-tray', '2022-12-06', '0000-00-00', 1, 0),
(336, 16, 0, 'Kedarnath Dham temple', 0x3c703e576f6f64656e2048616e646963726166742053687269204b656461726e617468204468616d202e205768696368206973206d616465206f6620736d616c6c20776f6f64202e2057652063616e2070757420696e207468652063617220666f72206465636f726174696f6e20616e642077652063616e206b656570204b656461726e6174682054656d706c6520617420686f6d65206465636f726174696f6e202e205468657265206973206e6f20616e7377657220746f20697473206265617574792c2069747320636f6c6f72206973206c696768742062726f776e20616e6420697473206f75746c696e6520697320646f6e652077697468206461726b2062726f776e20636f6c6f72202e20546869732069732074686520686f6c792061626f6465206f662062686f6c656e6174682053687269204b656461726e617468204468616d207768696368206973206b65707420696e2074686520686f75736520666f72206465636f726174696f6e202e20497420697320766572792077656c6c206465636f726174656420616e64206d616465202e2046726f6d20746869732077652063616e206275792066726f6d20546865416c6c6368656d792077656273697465202e205472697368756c20686173206265656e207365656e20616c6c206f7665722053687269204b656461726e617468204468616d2c20486973206d6f73742062656c6f766564204e616e64692073656174696e67202e3c2f703e, '633', 'meal1670318159WhatsApp_Image_2022-12-01_at_3_28_40_PM_(1).jpeg', 50, 10, 5, 10, 'tample', '<p>Wooden Handicraft Shri Kedarnath Dham . Which is made of small wood . We can put in the car for decoration and we can keep Kedarnath Temple at home decoration . There is no answer to its beauty, it', 'kedarnath-dham-temple', '2022-12-06', '0000-00-00', 1, 0),
(337, 16, 0, 'Buddha incense holder', 0x3c703e4d6564696174696e67204275646468612063616e206265206b65707420616e7920706c61636520666f72206465636f726174696f6e20696e2074686520626164726f6f6d20616e64206f6666696365202e204d6564696174696e67206d6f6e6b2062756464686120736d6f6b65206261636b67726f756e6420636f726e6572206d6179204465636f7220496e63656e7365206275726e6564203130204672616772616e6365642044687570204261747469204672656520776974682061204261636b666c6f77204468757020426174746920486f6c64657220536d6f6b6520427564646861206a692073697474696e67206c696b65207468697320696e206d656469746174696f6e2e2054686520736d6f6b65206f6620636f726e6572206d6179204468757020426174746920666c6f77696e6720646f776e206c696b6520612073747265616d204d6564696174696f6e20427564646861206973207072696e74656420776974682074776f20636f6c6f722062726f776e20616e6420626c75653c2f703e, '573', 'meal1670318709WhatsApp_Image_2022-12-01_at_4_51_36_PM.jpeg', 80, 18, 7, 9, 'buddha ji incense holder', '<p>Mediating Buddha can be kept any place for decoration in the badroom and office . Mediating monk buddha smoke background corner may Decor Incense burned 10 Fragranced Dhup Batti Free with a Backflo', 'buddha-incense-holder', '2022-12-06', '0000-00-00', 1, 0),
(338, 21, 0, 'Angel pen stand', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e4d616e756661637475726520616e6420537570706c696572206f662049726f6e204261627920416e676c652050656e20616e64204361726420446966666572656e742054797065206f662049726f6e20486f6c6465722e2041206c6974746c65204261627920416e676c6520536c656570696e672049726f6e2043617264206465636f72617469766520686f6c6465722f7374616e64202e205468652064657369676e206f6620616e676c652070656e20686f6c64657220697320736f2062656175746966756c206c696b652061206c6974746c6520616e676c652050656e207374616e642e2057652063616e20646f206974206279206b656570696e672070656e206f6e20746865207461626c652e2043616e20707574207468652070656e20686f6c646572206f6e20746865206465636f726174696f6e2e20546869732070656e686f6c646572206973206d616465206f662069726f6e3c2f703e, '813', 'meal1670319824WhatsApp_Image_2022-12-02_at_12_12_09_PM.jpeg', 350, 15, 7, 19, 'pen and card holder', '<p>&nbsp;</p>\r\n\r\n<p>Manufacture and Supplier of Iron Baby Angle Pen and Card Different Type of Iron Holder. A little Baby Angle Sleeping Iron Card decorative holder/stand . The design of angle pen hol', 'angel-pen-stand', '2022-12-06', '0000-00-00', 1, 0);
INSERT INTO `tbl_product` (`productID`, `categoryID`, `subcategoryID`, `title`, `product_description`, `price`, `image`, `weight`, `height`, `width`, `lenth`, `searchkeyword`, `searchdescription`, `web_slug`, `added_date`, `edited_date`, `status`, `corporate_status`) VALUES
(339, 19, 0, 'Wooden spice box of 6', 0x3c703e3920426f78206f6620737069636573206a617220776869636820697320766572792062656175746966756c20746f206c6f6f6b2061742c204d6179206265207573656420746f206b6565702073706963657320626f7820696e20746865206b69746368656e2e204120776f6f64656e20537069636520426f78206973207573656420746f2073746f72652073706963657320616e64206974206973207065726665637420666f7220796f7572206b69746368656e206163636573736f726965732e2049742069732061206d756c74692d707572706f736520626f7820746861742063616e206265207573656420746f2073746f726520647279206672756974732c204b656570206a6577656c72792c20616e64206f7468657220736d616c6c206974656d732e20537069636520426f7820436172653a20446f206e6f74206578706f7365206469726563746c7920746f2077617465722e204a7573742077697065206f7574207769746820736f667420636c6f7468207069656365732e3c2f703e, '1573', 'meal1670320357WhatsApp_Image_2022-12-01_at_12_12_21_PM_(2).jpeg', 500, 7, 20, 20, 'spice set box', '<p>9 Box of spices jar which is very beautiful to look at, May be used to keep spices box in the kitchen. A wooden Spice Box is used to store spices and it is perfect for your kitchen accessories. It ', 'wooden-spice-box-of-6', '2022-12-06', '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `reviewID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `resized_image` varchar(300) NOT NULL,
  `review` text NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`reviewID`, `name`, `email`, `image`, `resized_image`, `review`, `added_date`, `edited_date`, `status`) VALUES
(14, 'Prachi Sain', 'prachisain1328@gmail.com', '', '', 'Best website to purcahse handicraft decor items', '2022-11-07', '0000-00-00', 1),
(15, 'Aradhya panwar', 'aradhyapanwar12@gmail.com', '', '', 'I ordered a fruit basket and got it recently, it is an amazing piece with good quality and looks', '2022-11-08', '0000-00-00', 1),
(16, 'Puja', 'ajarchanakumari@gmail.com', '', '', 'Good', '2022-11-24', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `reviewID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `resized_image` varchar(300) NOT NULL,
  `review` text NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`reviewID`, `name`, `image`, `resized_image`, `review`, `added_date`, `edited_date`, `status`) VALUES
(1, 'Christopher Putrzenski', 'review16358341901.png', '', '<p>Novel idea! We got a whole cooked crab and all the fixin&rsquo;s. Awesome spot and friendly staff. This is the best spot in Florence.</p>', '2021-11-02', '0000-00-00', 1),
(2, 'Simone van Starkenburg', 'review16358347206.png', '', '<p>Absolutely fantastic no frill crab shack. Chowder bread bowl was a crowd fav. Crab comes right of the boat, super fresh. Nice folks, even got a bowl of water for our little dog. Will go back on next trip to Florence.</p>', '2021-11-02', '0000-00-00', 1),
(3, 'C C', 'review16358344313.png', '', '<p>This place is a &ldquo;must go&rdquo; when we are in Florence visiting my family!! It&rsquo;s down on the water, which really adds to the experience. You will have the best crab chowder you&rsquo;ve ever had! (Don&rsquo;t forget to add garlic bread) but really all your crab needs will be met! You can even get some smoked salmon&hellip;plus you&rsquo;ll probably see some seals too!!( they know what&rsquo;s up). DJ and Audrey are really rockin it down in old town!! Thanks you guys!!</p>', '2021-11-02', '0000-00-00', 1),
(4, 'Jason T. Ramos', 'review16358344914.png', '', '<p>As a native New Englander (Boston) there is no food I&#39;m more particular about than chowder. Novelli&#39;s blew my expectations out of the water. Some of the best chowder I&#39;ve ever had and adding an extra crab and garlic bread was took it to the next stratosphere.</p>', '2021-11-02', '0000-00-00', 1),
(8, 'Savannah Marcotte', 'review16358345515.png', '', '<p>If I could give 6 stars I would! We are from the east coast (RI) and their crab chowder, crabs and garlic bread was by far the best we&rsquo;ve had on the west coast!! The garlic bread is to die for, the crab chowder is amazing and the owner is so nice and such a hard worker! Definitely make the stop here on the dock if you&rsquo;re in the area.</p>', '2021-11-02', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `userID` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `guest_user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verificationcode` varchar(200) NOT NULL,
  `otp` varchar(400) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `verify_status` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`userID`, `name`, `ip`, `guest_user`, `email`, `mobile`, `password`, `verificationcode`, `otp`, `added_date`, `edited_date`, `verify_status`, `status`) VALUES
(29, 'Aman Malik', '', '', 'talluqat@gmail.com', '7078056562', 'Vampire1799@', '', '', '2022-11-08', '0000-00-00', 1, 1),
(28, 'Aradhya panwar', '', '', 'aradhyapanwar12@gmail.com', '8791897240', 'Aradhyakajal', '', '', '2022-11-06', '0000-00-00', 1, 1),
(27, 'Vaibhav Sharma', '', '', 'dixitvibs@gmail.com', '8923460979', '033200', '956311', '', '2022-10-19', '0000-00-00', 1, 1),
(26, 'Km Prachi', '', '', 'prachisain1328@gmail.com', '8077836517', 'Test@123', '', '903257', '2022-10-05', '0000-00-00', 1, 1),
(24, 'YASH KUMAR', '', '', 'yk45023@gmail.com', '8218453139', 'abc123', '', '', '2022-10-05', '0000-00-00', 1, 1),
(32, 'RISHIKESH ANAND', '', '', 'rishikeshanand2050@gmail.com', '9080984861', 'NOISEboy2019', '', '', '2022-12-29', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderID` int(11) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `banner_resized` varchar(300) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `button_name` varchar(300) NOT NULL,
  `button_link` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategoryID` bigint(20) NOT NULL,
  `adminID` bigint(20) NOT NULL,
  `categoryID` varchar(200) NOT NULL,
  `subcategory` varchar(200) NOT NULL,
  `subcategory_image` varchar(300) NOT NULL,
  `subcategory_resized_image` varchar(400) NOT NULL,
  `web_slug` varchar(300) NOT NULL,
  `added_date` varchar(200) NOT NULL,
  `edited_date` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribers`
--

CREATE TABLE `tbl_subscribers` (
  `sno` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribers`
--

INSERT INTO `tbl_subscribers` (`sno`, `email`, `date`, `status`) VALUES
(1, 'rochiemar@kinergytech.com', '2021-10-07', 0),
(2, 'rochiemar@kinergytech.com', '2021-10-07', 0),
(3, 'bhupinder.infotechzone@gmail.com', '2021-10-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `resized_image` varchar(300) NOT NULL,
  `review` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_today_deal`
--

CREATE TABLE `tbl_today_deal` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `product_description` blob NOT NULL,
  `price` text NOT NULL,
  `new_price` text NOT NULL,
  `image` text NOT NULL,
  `web_slug` varchar(300) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_today_deal`
--

INSERT INTO `tbl_today_deal` (`productID`, `categoryID`, `subcategoryID`, `title`, `product_description`, `price`, `new_price`, `image`, `web_slug`, `added_date`, `edited_date`, `status`) VALUES
(216, 18, 0, 'Dear Showpiece Item', 0x3c703e446561722053686f777069656365204974656d3c2f703e, '360', '288', 'deal1664271614ASP00244.jpg', 'dear-showpiece-item', '2022-09-27', '0000-00-00', 1),
(217, 19, 0, 'Storage Basket', 0x3c703e53746f72616765206261736b657420666f72206d756c7469707572706f7365207573652e3c2f703e, '180', '44', 'deal1664272434ASP00050.jpg', 'storage-basket', '2022-09-27', '0000-00-00', 1),
(218, 20, 0, 'Wooden Fish', 0x3c703e4d6f62696c6520486f6c6465723c2f703e, '100', '80', 'deal1664273517ASP00095.jpg', 'wooden-fish', '2022-09-27', '0000-00-00', 1),
(219, 19, 0, 'Fruit Basket', 0x3c703e4672756974204261736b65743c2f703e, '180', '144', 'deal1664273578ASP00091.jpg', 'fruit-basket', '2022-09-27', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraddress`
--

CREATE TABLE `tbl_useraddress` (
  `useraddressID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(300) NOT NULL,
  `postcode` varchar(300) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` bigint(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `lnumber` varchar(200) NOT NULL,
  `lstate` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `city` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `uimage` varchar(200) NOT NULL,
  `simage` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_login`
--

CREATE TABLE `tbl_vender_login` (
  `venderID` bigint(20) NOT NULL,
  `v_name` varchar(300) NOT NULL,
  `v_email` varchar(300) NOT NULL,
  `v_number` varchar(100) NOT NULL,
  `v_company` varchar(300) NOT NULL,
  `v_account` varchar(300) NOT NULL,
  `v_bank` varchar(300) NOT NULL,
  `v_country` varchar(200) NOT NULL,
  `v_address` text NOT NULL,
  `v_image` varchar(300) NOT NULL,
  `login_serial` varchar(200) NOT NULL,
  `verificationcode` varchar(100) NOT NULL,
  `v_password` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `edited_date` date NOT NULL,
  `verify_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`aboutID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_cupon`
--
ALTER TABLE `tbl_cupon`
  ADD PRIMARY KEY (`cuponID`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`faqID`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`galleryID`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`ordersID`);

--
-- Indexes for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_preview_fee`
--
ALTER TABLE `tbl_preview_fee`
  ADD PRIMARY KEY (`previewfeeID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderID`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategoryID`);

--
-- Indexes for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_today_deal`
--
ALTER TABLE `tbl_today_deal`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tbl_useraddress`
--
ALTER TABLE `tbl_useraddress`
  ADD PRIMARY KEY (`useraddressID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_vender_login`
--
ALTER TABLE `tbl_vender_login`
  ADD PRIMARY KEY (`venderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `aboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cupon`
--
ALTER TABLE `tbl_cupon`
  MODIFY `cuponID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `faqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `galleryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `ordersID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_preview_fee`
--
ALTER TABLE `tbl_preview_fee`
  MODIFY `previewfeeID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategoryID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_today_deal`
--
ALTER TABLE `tbl_today_deal`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `tbl_useraddress`
--
ALTER TABLE `tbl_useraddress`
  MODIFY `useraddressID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_vender_login`
--
ALTER TABLE `tbl_vender_login`
  MODIFY `venderID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
