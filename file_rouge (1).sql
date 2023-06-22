-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 01:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_rouge`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `model` varchar(15) NOT NULL,
  `year` year(4) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `transmission_type` varchar(50) NOT NULL,
  `mileage` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'available',
  `engine_capacity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`) VALUES
(1, 'Sentra', '2020', 70000, 'black', 'Nissan', 'gasoline', 'automatic', 6660, 'available', '2'),
(2, 'Mazda3', '2021', 300000, 'Blue', 'Mazda', 'giesel', 'automatic', 40000, 'sold', '3'),
(3, 'X3', '2022', 550000, 'white', 'BMW', 'gasoline', 'continuously variable', 47000, 'available', '4'),
(4, 'Polo', '2019', 300000, 'red', 'Volkswagen', 'hydrogen', 'tiptronic', 5550, 'reserved', '3.5'),
(7, 'Accord', '2018', 590000, 'Black', 'Honda', 'liquefied petroleum gas', 'direct shift gearbox', 70000, 'available', '4'),
(8, 'CX-5', '2022', 1000000, 'Blue', 'Mazda', 'electric', 'dual-clutch', 82000, 'available', '3.5'),
(9, 'Wrangler', '2016', 100, 'White', 'Jeep', 'electric', 'automatic', 89999, 'sold', '3.2'),
(10, 'F8 Tributo', '2021', 250000, 'orounge', 'Ferrari', 'hybrid', 'semi-automatic', 5000, 'available', '4'),
(11, 'Sentra', '2019', 14000, 'Black', 'Nissan', 'hydrogen', 'direct shift gearbox', 70000, 'available', '3'),
(12, 'Camry', '2015', 50, 'Black', 'Toyota', 'compressed natural gas', 'dual-clutch ', 80000, 'sold', '2'),
(13, 'Wrangler', '2017', 60, 'Black', 'Jeep', 'diesel', 'manual', 60000, 'available', '3'),
(24, 'F360 Modena Ber', '2002', 64000, 'red', 'Ferrari', 'diesel', 'automatic', 201000, 'available', '3.5'),
(26, 'mercedes-benz c', '2020', 300000, 'blue', 'mercedes', 'diesel', 'semi-automatic', 90000, 'available', '3');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`image_id`, `image_url`, `is_main`, `car_id`) VALUES
(1, 'Uploads/buy/SentraNissan517166/351514.jpg', 1, 1),
(2, 'Uploads/buy/SentraNissan517166/745475.jpg', 0, 1),
(3, 'Uploads/buy/SentraNissan517166/925256.jpg', 0, 1),
(4, 'Uploads/buy/SentraNissan517166/143078.jpg', 0, 1),
(5, 'Uploads/buy/SentraNissan517166/600338.jpg', 0, 1),
(6, 'Uploads/buy/SentraNissan517166/285250.jpg', 0, 1),
(7, 'Uploads/buy/SentraNissan517166/83672.jpg', 0, 1),
(8, 'Uploads/buy/SentraNissan517166/647551.jpg', 0, 1),
(9, 'Uploads/buy/SentraNissan517166/589251.jpg', 0, 1),
(10, 'Uploads/buy/SentraNissan517166/495112.jpg', 0, 1),
(11, 'Uploads/buy/SentraNissan517166/605462.jpg', 0, 1),
(12, 'Uploads/buy/SentraNissan517166/613891.jpg', 0, 1),
(13, 'Uploads/buy/SentraNissan517166/569345.jpg', 0, 1),
(14, 'Uploads/buy/SentraNissan517166/923582.jpg', 0, 1),
(15, 'Uploads/buy/SentraNissan517166/122837.jpg', 0, 1),
(16, 'Uploads/buy/SentraNissan517166/837739.jpg', 0, 1),
(17, 'Uploads/buy/SentraNissan517166/745638.jpg', 0, 1),
(18, 'Uploads/buy/SentraNissan517166/753542.jpg', 0, 1),
(19, 'Uploads/buy/SentraNissan517166/307055.jpg', 0, 1),
(20, 'Uploads/buy/SentraNissan517166/873559.jpg', 0, 1),
(21, 'Uploads/buy/Mazda3Mazda85036/463355.jpeg', 1, 2),
(22, 'Uploads/buy/Mazda3Mazda85036/969899.jpeg', 0, 2),
(23, 'Uploads/buy/Mazda3Mazda85036/896467.jpeg', 0, 2),
(24, 'Uploads/buy/Mazda3Mazda85036/799256.jpeg', 0, 2),
(25, 'Uploads/buy/Mazda3Mazda85036/692566.jpeg', 0, 2),
(26, 'Uploads/buy/Mazda3Mazda85036/323174.jpeg', 0, 2),
(27, 'Uploads/buy/Mazda3Mazda85036/793699.jpeg', 0, 2),
(28, 'Uploads/buy/Mazda3Mazda85036/456048.jpeg', 0, 2),
(29, 'Uploads/buy/Mazda3Mazda85036/270552.jpeg', 0, 2),
(30, 'Uploads/buy/Mazda3Mazda85036/279743.jpeg', 0, 2),
(31, 'Uploads/buy/Mazda3Mazda85036/5953.jpeg', 0, 2),
(32, 'Uploads/buy/Mazda3Mazda85036/490151.jpeg', 0, 2),
(33, 'Uploads/buy/Mazda3Mazda85036/99890.jpeg', 0, 2),
(34, 'Uploads/buy/Mazda3Mazda85036/36843.jpeg', 0, 2),
(35, 'Uploads/buy/Mazda3Mazda85036/401719.jpeg', 0, 2),
(36, 'Uploads/buy/Mazda3Mazda85036/955783.jpeg', 0, 2),
(37, 'Uploads/buy/Mazda3Mazda85036/501638.jpeg', 0, 2),
(38, 'Uploads/buy/X3BMW606099/636909.png', 1, 3),
(39, 'Uploads/buy/X3BMW606099/326889.jpg', 0, 3),
(40, 'Uploads/buy/X3BMW606099/818080.jpg', 0, 3),
(41, 'Uploads/buy/X3BMW606099/740364.jpg', 0, 3),
(42, 'Uploads/buy/X3BMW606099/600176.jpg', 0, 3),
(43, 'Uploads/buy/X3BMW606099/440102.jpg', 0, 3),
(44, 'Uploads/buy/X3BMW606099/320102.jpg', 0, 3),
(45, 'Uploads/buy/X3BMW606099/549554.png', 0, 3),
(46, 'Uploads/buy/X3BMW606099/111329.jpg', 0, 3),
(47, 'Uploads/buy/X3BMW606099/393249.jpg', 0, 3),
(48, 'Uploads/buy/X3BMW606099/2862.jpg', 0, 3),
(49, 'Uploads/buy/X3BMW606099/735527.jpg', 0, 3),
(50, 'Uploads/buy/X3BMW606099/848993.jpg', 0, 3),
(51, 'Uploads/buy/X3BMW606099/270044.jpg', 0, 3),
(52, 'Uploads/rent/PoloVolkswagen225758/677742.jpeg', 1, 4),
(53, 'Uploads/rent/PoloVolkswagen225758/48886.jpeg', 0, 4),
(54, 'Uploads/rent/PoloVolkswagen225758/65678.jpeg', 0, 4),
(55, 'Uploads/rent/PoloVolkswagen225758/918066.jpeg', 0, 4),
(56, 'Uploads/rent/PoloVolkswagen225758/941628.jpeg', 0, 4),
(57, 'Uploads/rent/PoloVolkswagen225758/359272.jpeg', 0, 4),
(58, 'Uploads/rent/PoloVolkswagen225758/529341.jpeg', 0, 4),
(59, 'Uploads/rent/PoloVolkswagen225758/969995.jpeg', 0, 4),
(60, 'Uploads/rent/PoloVolkswagen225758/468434.jpeg', 0, 4),
(98, 'Uploads/buy/AccordHonda502692/544724.jpeg', 1, 7),
(99, 'Uploads/buy/AccordHonda502692/493467.jpeg', 0, 7),
(100, 'Uploads/buy/AccordHonda502692/741119.jpeg', 0, 7),
(101, 'Uploads/buy/AccordHonda502692/604499.jpeg', 0, 7),
(102, 'Uploads/buy/AccordHonda502692/716812.jpeg', 0, 7),
(103, 'Uploads/buy/AccordHonda502692/751936.jpeg', 0, 7),
(104, 'Uploads/buy/AccordHonda502692/785497.jpeg', 0, 7),
(105, 'Uploads/buy/AccordHonda502692/766877.jpeg', 0, 7),
(106, 'Uploads/buy/AccordHonda502692/295269.jpeg', 0, 7),
(107, 'Uploads/buy/AccordHonda502692/626604.jpeg', 0, 7),
(108, 'Uploads/buy/AccordHonda502692/296404.jpeg', 0, 7),
(109, 'Uploads/buy/AccordHonda502692/881670.jpeg', 0, 7),
(110, 'Uploads/buy/AccordHonda502692/849898.jpeg', 0, 7),
(111, 'Uploads/buy/AccordHonda502692/280299.jpeg', 0, 7),
(112, 'Uploads/buy/CX-5Mazda756980/329022.jpg', 1, 8),
(113, 'Uploads/buy/CX-5Mazda756980/725867.jpg', 0, 8),
(114, 'Uploads/buy/CX-5Mazda756980/672959.jpg', 0, 8),
(115, 'Uploads/buy/CX-5Mazda756980/957900.jpg', 0, 8),
(116, 'Uploads/buy/CX-5Mazda756980/25118.jpg', 0, 8),
(117, 'Uploads/buy/CX-5Mazda756980/362873.jpg', 0, 8),
(118, 'Uploads/buy/CX-5Mazda756980/816741.jpg', 0, 8),
(119, 'Uploads/buy/CX-5Mazda756980/408577.jpg', 0, 8),
(120, 'Uploads/buy/CX-5Mazda756980/406251.jpg', 0, 8),
(121, 'Uploads/buy/CX-5Mazda756980/125423.jpg', 0, 8),
(122, 'Uploads/buy/CX-5Mazda756980/839682.jpg', 0, 8),
(123, 'Uploads/buy/CX-5Mazda756980/57302.jpg', 0, 8),
(124, 'Uploads/buy/CX-5Mazda756980/205747.jpg', 0, 8),
(125, 'Uploads/buy/CX-5Mazda756980/829279.jpg', 0, 8),
(126, 'Uploads/buy/CX-5Mazda756980/208470.jpg', 0, 8),
(127, 'Uploads/buy/CX-5Mazda756980/725918.jpg', 0, 8),
(128, 'Uploads/buy/CX-5Mazda756980/65375.jpg', 0, 8),
(129, 'Uploads/buy/CX-5Mazda756980/987025.jpg', 0, 8),
(130, 'Uploads/buy/CX-5Mazda756980/603549.jpg', 0, 8),
(131, 'Uploads/buy/CX-5Mazda756980/309679.jpg', 0, 8),
(132, 'Uploads/rent/WranglerJeep397111/212445.jpeg', 1, 9),
(133, 'Uploads/rent/WranglerJeep397111/239063.jpeg', 0, 9),
(134, 'Uploads/rent/WranglerJeep397111/598363.jpeg', 0, 9),
(135, 'Uploads/rent/WranglerJeep397111/299675.jpeg', 0, 9),
(136, 'Uploads/rent/WranglerJeep397111/550010.jpeg', 0, 9),
(137, 'Uploads/rent/WranglerJeep397111/661478.jpeg', 0, 9),
(138, 'Uploads/rent/WranglerJeep397111/491414.jpeg', 0, 9),
(139, 'Uploads/rent/WranglerJeep397111/56013.jpeg', 0, 9),
(140, 'Uploads/rent/WranglerJeep397111/480880.jpeg', 0, 9),
(141, 'Uploads/rent/WranglerJeep397111/863288.jpeg', 0, 9),
(142, 'Uploads/rent/WranglerJeep397111/292925.jpeg', 0, 9),
(143, 'Uploads/rent/WranglerJeep397111/391827.jpeg', 0, 9),
(144, 'Uploads/rent/WranglerJeep397111/192629.jpeg', 0, 9),
(145, 'Uploads/rent/WranglerJeep397111/617677.jpeg', 0, 9),
(146, 'Uploads/rent/WranglerJeep397111/458332.jpeg', 0, 9),
(147, 'Uploads/rent/WranglerJeep397111/681322.jpeg', 0, 9),
(148, 'Uploads/rent/WranglerJeep397111/678962.jpeg', 0, 9),
(149, 'Uploads/rent/WranglerJeep397111/489307.jpeg', 0, 9),
(150, 'Uploads/rent/WranglerJeep397111/338787.jpeg', 0, 9),
(151, 'Uploads/rent/WranglerJeep397111/620986.jpeg', 0, 9),
(152, 'Uploads/buy/F8TributoFerrari110046/530945.jpg', 1, 10),
(153, 'Uploads/buy/F8TributoFerrari110046/402542.jpg', 0, 10),
(154, 'Uploads/buy/F8TributoFerrari110046/80641.jpg', 0, 10),
(155, 'Uploads/buy/F8TributoFerrari110046/116090.jpg', 0, 10),
(156, 'Uploads/buy/F8TributoFerrari110046/276266.jpg', 0, 10),
(157, 'Uploads/buy/F8TributoFerrari110046/403657.jpg', 0, 10),
(158, 'Uploads/buy/F8TributoFerrari110046/268179.jpg', 0, 10),
(159, 'Uploads/buy/F8TributoFerrari110046/205987.jpg', 0, 10),
(160, 'Uploads/buy/F8TributoFerrari110046/205021.jpg', 0, 10),
(161, 'Uploads/buy/F8TributoFerrari110046/225269.jpg', 0, 10),
(162, 'Uploads/buy/F8TributoFerrari110046/618466.jpg', 0, 10),
(163, 'Uploads/buy/F8TributoFerrari110046/15343.jpg', 0, 10),
(164, 'Uploads/buy/F8TributoFerrari110046/867631.jpg', 0, 10),
(165, 'Uploads/buy/SentraNissan273148/310908.jpg', 1, 11),
(166, 'Uploads/buy/SentraNissan273148/914929.jpg', 0, 11),
(167, 'Uploads/buy/SentraNissan273148/104387.jpg', 0, 11),
(168, 'Uploads/buy/SentraNissan273148/579992.jpg', 0, 11),
(169, 'Uploads/buy/SentraNissan273148/898265.jpg', 0, 11),
(170, 'Uploads/buy/SentraNissan273148/75586.jpg', 0, 11),
(171, 'Uploads/buy/SentraNissan273148/237485.jpg', 0, 11),
(172, 'Uploads/buy/SentraNissan273148/551463.jpg', 0, 11),
(173, 'Uploads/buy/SentraNissan273148/168568.jpg', 0, 11),
(174, 'Uploads/rent/CamryToyota348616/22301.jpeg', 1, 12),
(175, 'Uploads/rent/CamryToyota348616/597211.jpeg', 0, 12),
(176, 'Uploads/rent/CamryToyota348616/32801.jpeg', 0, 12),
(177, 'Uploads/rent/CamryToyota348616/564858.jpeg', 0, 12),
(178, 'Uploads/rent/CamryToyota348616/563848.jpeg', 0, 12),
(179, 'Uploads/rent/CamryToyota348616/185324.jpeg', 0, 12),
(180, 'Uploads/rent/CamryToyota348616/903890.jpeg', 0, 12),
(181, 'Uploads/rent/CamryToyota348616/191697.jpeg', 0, 12),
(182, 'Uploads/rent/CamryToyota348616/620702.jpeg', 0, 12),
(183, 'Uploads/rent/CamryToyota348616/473711.jpeg', 0, 12),
(184, 'Uploads/rent/CamryToyota348616/648977.jpeg', 0, 12),
(185, 'Uploads/rent/CamryToyota348616/150593.jpeg', 0, 12),
(186, 'Uploads/rent/CamryToyota348616/232452.jpeg', 0, 12),
(187, 'Uploads/rent/CamryToyota348616/145900.jpeg', 0, 12),
(188, 'Uploads/rent/CamryToyota348616/642488.jpeg', 0, 12),
(189, 'Uploads/rent/CamryToyota348616/292427.jpeg', 0, 12),
(190, 'Uploads/rent/CamryToyota348616/684239.jpeg', 0, 12),
(191, 'Uploads/rent/CamryToyota348616/799781.jpeg', 0, 12),
(192, 'Uploads/rent/CamryToyota348616/335974.jpeg', 0, 12),
(193, 'Uploads/rent/CamryToyota348616/416792.jpeg', 0, 12),
(194, 'Uploads/rent/WranglerJeep292573/95568.jpeg', 1, 13),
(195, 'Uploads/rent/WranglerJeep292573/719776.jpeg', 0, 13),
(196, 'Uploads/rent/WranglerJeep292573/367677.jpeg', 0, 13),
(197, 'Uploads/rent/WranglerJeep292573/693952.jpeg', 0, 13),
(198, 'Uploads/rent/WranglerJeep292573/566573.jpeg', 0, 13),
(199, 'Uploads/rent/WranglerJeep292573/214577.jpeg', 0, 13),
(200, 'Uploads/rent/WranglerJeep292573/936722.jpeg', 0, 13),
(201, 'Uploads/rent/WranglerJeep292573/245675.jpeg', 0, 13),
(202, 'Uploads/rent/WranglerJeep292573/639954.jpeg', 0, 13),
(203, 'Uploads/rent/WranglerJeep292573/945737.jpeg', 0, 13),
(316, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/267987.jpg', 1, 24),
(317, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/437223.jpg', 0, 24),
(318, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/583850.jpg', 0, 24),
(319, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/537203.jpg', 0, 24),
(320, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/148711.jpg', 0, 24),
(321, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/916804.jpg', 0, 24),
(322, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/467153.jpg', 0, 24),
(323, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/848564.jpg', 0, 24),
(324, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/879564.jpg', 0, 24),
(325, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/228371.jpg', 0, 24),
(326, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/402459.jpg', 0, 24),
(327, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/853305.jpg', 0, 24),
(328, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/925348.jpg', 0, 24),
(329, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/587752.jpg', 0, 24),
(330, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/768901.jpg', 0, 24),
(331, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/842701.jpg', 0, 24),
(332, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/273425.jpg', 0, 24),
(333, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/354675.jpg', 0, 24),
(334, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/889974.jpg', 0, 24),
(335, 'Uploads/buy/F360ModenaBerlinettaFERRARI181949/604420.jpg', 0, 24),
(349, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/709250.jpg', 1, 26),
(350, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/445449.jpg', 0, 26),
(351, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/596957.jpg', 0, 26),
(352, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/15138.jpg', 0, 26),
(353, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/479796.jpg', 0, 26),
(354, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/4122.jpg', 0, 26),
(355, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/484829.jpg', 0, 26),
(356, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/587705.jpg', 0, 26),
(357, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/795536.jpg', 0, 26),
(358, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/481443.jpg', 0, 26),
(359, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/410975.jpg', 0, 26),
(360, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/304093.jpg', 0, 26),
(361, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/746759.jpg', 0, 26),
(362, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/625327.jpg', 0, 26),
(363, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/363672.jpg', 0, 26),
(364, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/549722.jpg', 0, 26),
(365, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/687922.jpg', 0, 26),
(366, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/195137.jpg', 0, 26),
(367, 'Uploads/buy/MERCEDES-BENZC200Coupé4MaticAMGLine9G-TronicMERCEDES433308/692156.jpg', 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `image_profile` varchar(255) DEFAULT NULL,
  `admin` int(1) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `points` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `full_name`, `phone_number`, `email`, `password`, `image_profile`, `admin`, `CIN`, `points`) VALUES
(2, 'jalil bd', 'jalil bd', 'jalilbd@gmail.com', '7385c18d5dd5c2c2d295c984739af5be', 'Uploads/Client/mageprofaile.jpg', 0, 'k68736', 0),
(3, 'adnan bnsarsa', 'adnan bnsarsa', 'adnanbnsarsa@gmail.com', '06b8410f2808d2ecfe566b4fa8b91491', 'Uploads/Client/mageprofaile.jpg', 1, 'k343434', 0),
(5, 'mohamed', 'mohamed', 'mohamed@gmail.com', 'c1a276b8587995e9f29e1b7fe9148169', 'Uploads/Client/mageprofaile.jpg', 0, 'k232323', 0),
(6, 'jerome kline', 'jerome kline', 'jabizotyba@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k232323', 0),
(7, 'evan bryan', 'evan bryan', 'lasi@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'o65565', 0),
(37, 'imrane sarsri', 'imrane sarsri', 'sasrsri@gmail.ma', '9c3fbf8ef06f0b5127b30aef305369cb', 'Uploads/Client/mageprofaile.jpg', 1, 'k23231', 2),
(38, 'wendy mcclain', 'wendy mcclain', 'qavo@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k2323', 0),
(42, 'imrane chdid', 'imrane chdid', 'sarsri.imrane.solicode@gmail.com', '162dd2c0102ffa4b65b74423712bad00', 'Uploads/Client/mageprofaile.jpg', 0, 'k232323', 0),
(44, 'naida richardson', 'naida richard', 'symevafi@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'temporibus', 0),
(46, 'imrane chdid', '0626156115', 'sarsri.im@gmail.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k2112', 0),
(47, 'farah', '0612137143', 'farah@gmail.com', '8cc889449cff1c24e251fe8a6587857e', 'Uploads/Client/mageprofaile.jpg', 0, 'k3823', 0),
(48, 'imrane sarsri', '0723823211', 'ayman@gmail.com', '62a223c338b09848dc622e2b92ba910b', 'Uploads/Client/mageprofaile.jpg', 0, 'l23131', 0),
(49, 'imrane', '0623232122', 'imrane@gmail.ma', 'd31f310fa71b9fe55934b2e9c555fa1d', 'Uploads/Client/mageprofaile.jpg', 0, 'k23131', 0),
(50, 'tashya holder', '0531313978', 'lybaxo@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k12121', 0),
(51, 'ciara williams', '0621211212', 'lomygerud@mailinator.com', '56de48825b002939979921f9ea0c9033', 'Uploads/Client/mageprofaile.jpg', 0, 'quia conse', 0),
(52, 'rooney steele', '+1 (626) 267-', 'gasoxumid@mailinator.com', '56de48825b002939979921f9ea0c9033', 'Uploads/Client/mageprofaile.jpg', 0, 'aliquip ut', 0),
(53, 'baker combs', '+1 (136) 985-', 'huxejasys@mailinator.com', '56de48825b002939979921f9ea0c9033', 'Uploads/Client/mageprofaile.jpg', 0, 'ea molesti', 0),
(54, 'asqqe as', '0632323121', 'ywqw@gmail.com', 'b06303342aada935d4c22f20803e7da1', 'Uploads/Client/mageprofaile.jpg', 0, 'k131313', 0),
(55, 'vivien dodson', '0623728759', 'gaqudyno@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k171212', 0),
(56, 'james hunt', '0754323434', 'bevuqotec@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k554554', 0),
(57, 'imead', '0723232321', 'sjggq57w@efghj.com', 'a9a9965285aa782164a07f70b83217de', 'Uploads/Client/mageprofaile.jpg', 0, 'k12561', 0),
(58, 'unity lewis', '0543298980', 'nekulivu@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k23231', 0),
(59, 'amos guerra', '0645342121', 'zere@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k67673', 0),
(60, 'imra e', '0626156115', 'imranesarsri04@gmail.com', 'de0a5563b6cd5eb10311ca51d4bed3f5', 'Uploads/Client/mageprofaile.jpg', 0, 'k3168', 0),
(61, 'naomi blair', '+1 (502) 422-', 'muwi@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'expedita q', 1),
(62, 'sasha tyler', '0655555555', 'cozog@mailinator.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k86744', 1),
(63, 'imrane chdid', '0626156115', 'sarsri.imrd@gmail.com', 'bd81e2fe4c020ab91ab62ee8f2e09634', 'Uploads/Client/mageprofaile.jpg', 0, 'f2323', 1),
(64, 'imrane sarsri', '0677665432', 'imranesarsri@gmail.com', 'e551bf09b78733b3ca565f3e829a2cb5', 'Uploads/Client/mageprofaile.jpg', 0, 'k6575', 1),
(65, 'ciaran alvarez', '0647455456', 'ledysoho@mailinator.com', 'ledysoho@mailinator.com', 'Uploads/Client/mageprofaile.jpg', 0, 'k657647', 2),
(66, 'david vinson', '0724274824', 'jihyn@mailinator.com', '2c4e28381a9911c8f2f5f30711dd49d5', 'Uploads/Client/mageprofaile.jpg', 0, 'k26322', -1),
(67, 'amin ha', '0617726221', 'amin@gmail.com', '27647ec40069ff8584e66b381a910574', 'Uploads/Client/mageprofaile.jpg', 1, 'k121211', -3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `date_reservation` date NOT NULL,
  `date_end_reservation` date NOT NULL,
  `status_reservation` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `car_id`, `id_client`, `date_reservation`, `date_end_reservation`, `status_reservation`) VALUES
(46, 4, 37, '2023-06-20', '2023-06-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seled`
--

CREATE TABLE `seled` (
  `id_sale` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `date_of_sale` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seled`
--

INSERT INTO `seled` (`id_sale`, `car_id`, `id_client`, `date_of_sale`) VALUES
(1, 1, 49, '2023-06-18'),
(2, 12, 37, '2023-06-18'),
(3, 12, 37, '2023-06-18'),
(4, 13, 37, '2023-06-18'),
(5, 13, 37, '2023-06-18'),
(6, 24, 37, '2023-06-18'),
(7, 24, 37, '2023-06-18'),
(8, 26, 37, '2023-06-18'),
(9, 13, 37, '2023-06-18'),
(10, 24, 37, '2023-06-18'),
(11, 1, 37, '2023-06-18'),
(12, 26, 37, '2023-06-18'),
(13, 10, 37, '2023-06-18'),
(14, 3, 37, '2023-06-18'),
(15, 11, 37, '2023-06-18'),
(16, 11, 62, '2023-06-18'),
(17, 9, 62, '2023-06-18'),
(18, 9, 62, '2023-06-18'),
(19, 12, 63, '2023-06-19'),
(20, 1, 64, '2023-06-19'),
(21, 7, 65, '2023-06-19'),
(22, 2, 66, '2023-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `seled`
--
ALTER TABLE `seled`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `seled`
--
ALTER TABLE `seled`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `car_images_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Constraints for table `seled`
--
ALTER TABLE `seled`
  ADD CONSTRAINT `seled_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`),
  ADD CONSTRAINT `seled_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
