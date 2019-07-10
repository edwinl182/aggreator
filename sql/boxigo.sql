-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 06:12 PM
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
('B71950', 'Sam', 'Simson', 'samnsimson@gmail.com', '5512270813', 'd2ee1d90d318198fecbbff6f699df454', 'yes', 'no', '2019-07-09 20:56:02'),
('B81336', 'Sam', 'Nishanth', 'samnishanth01@gmail.com', '6379106229', '08399ea05e6ded0fbd6f8e4db6455658', 'yes', 'no', '2019-07-10 14:47:50');

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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`estimate_id`, `user_id`, `moving_from`, `moving_to`, `moving_on`, `property_size`, `old_floor_no`, `new_floor_no`, `old_elevator_availability`, `new_elevator_availability`, `old_parking_distance`, `new_parking_distance`, `items`, `total_items`, `service_type`, `notification_sent`, `date_created`) VALUES
('E46111', 'B71950', 'Coimbatore', 'Tirupur', '07/09/2019 4:55 PM', '1 BHK', 1, 1, 'available', 'available', 50, 50, 'center_table=3|side_table=3|computer_table=3|study_table=3|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=3|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=2|inverter=1|baby_bed=1|bed_mattress=1|bunk_bed=1|double_cot_bed_boxed=1|double_cot_bed_regular=1|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wood=1|air_cooler=1|split_ac=1|table_fan=1|window_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=1|utensil_stand=1|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|pooja_temple=1|sewing_machine=1|shoe_rack=1|treadmill=1|vaccuum_cleaner=1|washing_machine=1|book_boxes=1|cloth_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|gear_bike=1|car_hatchback=1|car_sedan=1|car_suv=1|moped=1', 0, 'gold', 0, '2019-07-09 21:44:26'),
('E57356', 'B71950', 'Coimbatore', 'Tirupur', '07/09/2019 4:55 PM', '1 BHK', 1, 1, 'available', 'available', 50, 50, 'center_table=3|side_table=3|computer_table=3|study_table=3|foldable_chair=4|non_foldable_chair=10|plastic_chair=1|tv_cabinet=1|sofa_1_seater=3|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=2|inverter=1|baby_bed=1|bed_mattress=1|bunk_bed=1|double_cot_bed_boxed=1|double_cot_bed_regular=1|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wood=1|air_cooler=1|split_ac=1|table_fan=1|window_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=1|utensil_stand=1|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|pooja_temple=1|sewing_machine=1|shoe_rack=1|treadmill=1|vaccuum_cleaner=1|washing_machine=1|book_boxes=1|cloth_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|gear_bike=1|car_hatchback=1|car_sedan=1|car_suv=1|moped=1', 87, 'silver', 0, '2019-07-09 21:46:20'),
('E72570', 'B81336', 'Coimbatore', 'Chennai', '07/10/2019 10:43 AM', '1 BHK', 3, 2, 'available', 'not available', 46, 10, 'center_table=1|side_table=1|computer_table=1|study_table=1|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=1|inverter=1|baby_bed=1|bed_mattress=2|bunk_bed=2|double_cot_bed_boxed=2|double_cot_bed_regular=1|single_cot_bed_regular=1|wardrobe_steel=1|air_cooler=1|split_ac=1|table_fan=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=1|utensil_stand=2|dining_table_4_chairs=2|dining_table_6_chairs=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|pooja_temple=1|sewing_machine=1|shoe_rack=1|treadmill=1|vaccuum_cleaner=1|washing_machine=1|book_boxes=1|cloth_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=2|bike=1|car_sedan=1', 59, 'bronze', 0, '2019-07-10 14:52:12'),
('E77924', 'B71950', 'Coimbatore', 'Tirupur', '07/09/2019 4:55 PM', '1 BHK', 1, 1, 'available', 'available', 50, 50, 'center_table=3|side_table=3|computer_table=3|study_table=3|foldable_chair=1|non_foldable_chair=1|plastic_chair=1|tv_cabinet=1|sofa_1_seater=3|sofa_2_seater=1|sofa_3_seater=1|home_theater=1|computer=1|television=1|fan=2|inverter=1|baby_bed=1|bed_mattress=1|bunk_bed=1|double_cot_bed_boxed=1|double_cot_bed_regular=1|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wood=1|air_cooler=1|split_ac=1|table_fan=1|window_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=1|utensil_stand=1|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|pooja_temple=1|sewing_machine=1|shoe_rack=1|treadmill=1|vaccuum_cleaner=1|washing_machine=1|book_boxes=1|cloth_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|gear_bike=1|car_hatchback=1|car_sedan=1|car_suv=1|moped=1', 0, 'bronze', 0, '2019-07-09 21:42:21'),
('E93771', 'B27215', 'Palladam', 'Trichy', '07/13/2019 4:25 AM', '3 BHK', 1, 1, 'not available', 'not available', 10, 10, 'center_table=1|side_table=2|computer_table=1|study_table=1|foldable_chair=2|non_foldable_chair=3|plastic_chair=4|home_theater=1|computer=1|television=1|fan=3|bed_mattress=1|dressing_table=1|trolley_bag=3|wardrobe_steel=2|table_fan=1|refrigerator=1|utensil_stand=1|gas_cylinder=1|gas_stove=1|plastic_drum=1|sewing_machine=1|treadmill=1|washing_machine=1|book_boxes=1|cloth_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|gear_bike=1', 43, 'bronze', 0, '2019-07-10 08:29:37');

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
