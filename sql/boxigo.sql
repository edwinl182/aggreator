-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 05:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` varchar(120) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `verification_key` varchar(120) NOT NULL,
  `is_email_verified` varchar(20) NOT NULL DEFAULT 'no',
  `is_phone_verified` varchar(20) NOT NULL DEFAULT 'no',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `verification_key`, `is_email_verified`, `is_phone_verified`, `date_created`) VALUES
('B13959', 'Sam', 'Cladson', 'samcladson08@gmail.com', '1112223334', '6210838f643ef9844466ea0ba111e9d0', 'no', 'no', '2019-07-12 12:34:35'),
('B31640', 'Simson', 'Raju', 'samnishanth01@gmail.com', '6379106229', '4c823c3926ef6e341bd40fecdffdd82a', 'yes', 'no', '2019-07-10 20:26:03'),
('B41790', 'Sampath', 'Kumar', 'sampathkumar02041996@gmail.com', '9994052863', 'ff4c41dedae4cae4d52fb69840a9564f', 'yes', 'no', '2019-07-11 23:20:12'),
('B70544', 'Sam', 'Simson', 'samnsimson@gmail.com', '5512270813', 'e693e674044dba0976615313130a561a', 'yes', 'no', '2019-07-12 13:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `estimate_id` varchar(121) NOT NULL,
  `user_id` varchar(121) NOT NULL,
  `moving_from` varchar(121) NOT NULL,
  `moving_to` varchar(121) NOT NULL,
  `moving_on` varchar(121) NOT NULL,
  `property_size` varchar(121) NOT NULL,
  `old_floor_no` int(11) NOT NULL,
  `new_floor_no` int(11) NOT NULL,
  `old_elevator_availability` varchar(50) NOT NULL,
  `new_elevator_availability` varchar(50) NOT NULL,
  `old_parking_distance` int(11) NOT NULL,
  `new_parking_distance` int(11) NOT NULL,
  `items` text NOT NULL,
  `total_items` int(11) NOT NULL,
  `service_type` varchar(121) NOT NULL,
  `notification_sent` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`estimate_id`, `user_id`, `moving_from`, `moving_to`, `moving_on`, `property_size`, `old_floor_no`, `new_floor_no`, `old_elevator_availability`, `new_elevator_availability`, `old_parking_distance`, `new_parking_distance`, `items`, `total_items`, `service_type`, `notification_sent`, `status`, `date_created`) VALUES
('E12737', 'B35509', 'Coimbatore', 'Tirupur', '07/12/2019 6:32 AM', '1 BHK', 1, 1, 'available', 'available', 500, 50, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=2|sofa_2_seater=1|sofa_3_seater=2|home_theater=1|computer=2|television=1|fan=1|inverter=1', 18, 'bronze', 0, 1, '2019-07-12 10:33:12'),
('E13092', 'B31640', 'Trichy', 'Avinashi', '07/11/2019 7:06 PM', '3 BHK', 3, 2, 'available', 'available', 46, 50, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|bed_mattress=1|dressing_table=1|trolley_bag=3|split_ac=1', 17, 'silver', 0, 1, '2019-07-11 23:07:16'),
('E15227', 'B31640', 'Coimbatore', 'Tirupur', '07/11/2019 3:06 PM', '2 BHK', 1, 1, 'available', 'available', 50, 50, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=3|television=3|fan=3|inverter=3|dining_table_4_chairs=3|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|bicycle=1|bike=1|gear_bike=1|car_hatchback=1|car_sedan=1|car_suv=1|moped=1', 37, 'silver', 0, 0, '2019-07-11 19:07:37'),
('E24577', 'B70544', 'Pitchampalayam', 'Chithambalam', '07/13/2019 9:32 AM', '3 BHK', 1, 2, 'available', 'available', 46, 50, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=1|inverter=1', 16, 'bronze', 0, 0, '2019-07-12 13:32:31'),
('E35352', 'B70544', 'Coimbatore', 'Chennai', '07/12/2019 9:28 AM', '3+ BHK', 1, 2, 'available', 'available', 20, 20, 'center_table=2|side_table=2|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=2|tv_cabinet=1|sofa_2_seater=2|sofa_3_seater=2|home_theater=1|television=1|fan=1|inverter=1|baby_bed=1|bed_mattress=2|bunk_bed=2|double_cot_bed_boxed=2|double_cot_bed_regular=1|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wood=1|air_cooler=2|split_ac=1|table_fan=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=2|water_purifier=1|utensil_stand=1|dining_table_6_chairs=1', 46, 'gold', 0, 1, '2019-07-12 13:30:16'),
('E80684', 'B41790', 'Coimbatore', 'Tirupur', '07/11/2019 7:31 PM', '3+ BHK', 1, 1, 'available', 'available', 50, 12, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=1|inverter=1|baby_bed=1|bed_mattress=1|bunk_bed=1|double_cot_bed_boxed=1|double_cot_bed_regular=1|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1', 26, 'bronze', 0, 1, '2019-07-11 23:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`estimate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
