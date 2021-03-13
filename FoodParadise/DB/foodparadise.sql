-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 06:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodparadise`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items_master`
--

CREATE TABLE `items_master` (
  `id` int(255) NOT NULL,
  `item_photo` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `miniutes` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_master`
--

INSERT INTO `items_master` (`id`, `item_photo`, `item_name`, `category`, `address`, `rating`, `miniutes`, `price`, `type`, `status`) VALUES
(1, 'uploded/Hotel The Lotus Park.jpg', 'Hotel The Lotus Park', 'Chinese', 'Paldi, Paldi & Ambawadi', '4.5', 24, 250, 'Veg', 'active'),
(3, 'uploded/Season 9.jpg', 'Season 9', 'Chinese', 'Naranpura,ahemdabad', '4.2', 40, 230, 'Veg', 'active'),
(4, 'uploded/CIA Chinese.jpg', 'CIA Chinese', 'Chinese', 'Navrangpura, Paldi & Ambawadi', '3.0', 27, 200, 'Veg', 'active'),
(5, 'uploded/CIA Chinese (1).jpg', 'CIA Chinese', 'Chinese', 'Prahlad Nagar, Navrangpura', '3.9', 26, 300, 'Veg', 'active'),
(7, 'uploded/Paramount Restaurant.jpg', 'Paramount Restaurant', 'Chinese', 'Bhadra, LalDarwaja , ahemdabad', '3.2', 27, 750, 'Veg', 'active'),
(9, 'uploded/offer1.jpg', 'offer 1', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(10, 'uploded/offer2.jpg', 'offer 2', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(11, 'uploded/offer3.jpg', 'offer 3', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(12, 'uploded/offer4.jpg', 'offer 4', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(13, 'uploded/offer5.jpg', 'offer 5', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(14, 'uploded/offer6.jpg', 'offer 6', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(15, 'uploded/offer7.jpg', 'offer 7', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(16, 'uploded/offer8.jpg', 'offer 8', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(17, 'uploded/offer9.jpg', 'offer 9', 'Offers', '-', '-', 0, 0, 'Veg', 'active'),
(18, 'uploded/Timpani Radisson Blu.jpg', 'Timpani Radisson Blu', 'North Indian', 'Radisson Blu, Ambavadi, Paldi & Ambawadi', '3.0', 23, 600, 'Veg', 'active'),
(19, 'uploded/Lunchbox.jpg', 'Lunchbox', 'North Indian', 'PANCHVATI ELLIS BRIDGE, Navrangpura | Change Outlet ', '4.1', 27, 200, 'Veg', 'active'),
(20, 'uploded/Navjivan Restaurant.jpg', 'Navjivan Restaurant', 'North Indian', 'Paldi, Paldi & Ambawadi', '4.2', 26, 400, 'Veg', 'active'),
(21, 'uploded/Bikanervala.jpg', 'Bikanervala', 'North Indian', 'Satellite, Prahlad Nagar', '3.7', 26, 600, 'Veg', 'active'),
(22, 'uploded/Brothers Brand.jpg', 'Brothers Brand', 'North Indian', ' Navrangpura, Navrangpura', '4.0', 26, 550, 'Veg', 'active'),
(23, 'uploded/Udupi Shree Darshini Restaurant.jpg', 'Udupi Shree Darshini Restaurant', 'South Indian', 'Ellis Bridge, Navrangpura', '4.4', 20, 300, 'Veg', 'active'),
(24, 'uploded/The Bent Spoon.jpg', 'The Bent Spoon ', 'South Indian', 'Paldi & Ambawadi, Navrangpura', '4.1', 29, 300, 'Veg', 'active'),
(25, 'uploded/Ambrosia Restaurant.jpg', 'Ambrosia Restaurant', 'South Indian', 'Ellis Bridge, Navrangpura', '4.6', 17, 600, 'Veg', 'active'),
(26, 'uploded/Shuddh Cup.jpg', 'Shuddh Cup', 'South Indian', ' Paldi & Ambawadi, Paldi & Ambawadi', '4.2', 26, 250, 'Veg', 'active'),
(27, 'uploded/Vittlebox.jpg', 'Vittlebox', 'South Indian', 'Navrangpura,Ahmedabad ', '4.3', 28, 250, 'Veg', 'active'),
(28, 'uploded/Bikanervala.jpg', 'Bikanervala ', 'South Indian', ' Satellite, Prahlad Nagar', '3.7', 30, 600, 'Veg', 'active'),
(29, 'uploded/Idliwale.jpg', 'Idliwale - The Taste Of Madurai', 'South Indian', 'Vastrapur,Ahmedabad ', '4.4', 34, 300, 'Veg', 'active'),
(30, 'uploded/Urban Khichdi.jpg', 'Urban Khichdi', 'South Indian', 'IIM cross road, Navrangpura', '4.3', 29, 300, 'Veg', 'active'),
(31, 'uploded/Choice Snack Bar.jpg', 'Choice Snack Bar', 'South Indian', 'Ocean Park, Paldi & Ambawadi | Change Outlet ', '4.1', 30, 450, 'Veg', 'active'),
(33, 'uploded/Vaibhav Restaurant.jpg', 'Vaibhav Restaurant', 'South Indian', 'Ambavadi, Navrangpura', '4.3', 28, 250, 'Veg', 'active'),
(34, 'uploded/PUROHIT RESTAURANT.jpg', 'PUROHIT RESTAURANT', 'South Indian', 'Paldi & Ambawadi, Paldi & Ambawadi', '3.6', 37, 200, 'Veg', 'active'),
(35, 'uploded/R.K.Centre.jpg', 'R.K.Centre', 'South Indian', 'Navrangpura,Ahmedabad ', '4.2', 30, 200, 'Veg', 'active'),
(36, 'uploded/Upsouth.jpg', 'Upsouth', 'South Indian', 'Vastrapur,Ahmedabad ', '3.6', 32, 600, 'Veg', 'active'),
(37, 'uploded/ANNA DOSA POINT.jpg', 'ANNA DOSA POINT', 'South Indian', 'Prahlad Nagar, Navrangpura', '4.0', 31, 200, 'Veg', 'active'),
(39, 'uploded/The Blue Oven.jpg', 'The Blue Oven', 'South Indian', 'Vastrapur,Ahmedabad ', '4.4', 46, 600, 'Veg', 'active'),
(41, 'uploded/Birmies.jpg', 'Birmies', 'Chinese', 'Mithakali, Navrangpura | Change Outlet ', '4.0', 26, 350, 'Veg', 'active'),
(42, 'uploded/Hotel Zk.jpg', 'Hotel Zk', 'Chinese', 'Relief Road, LalDarwaja', '4.0', 34, 400, 'Veg', 'active'),
(43, 'uploded/Honest.jpg', 'Honest', 'Chinese', 'Paldi & Ambawadi, Paldi & Ambawadi | Change Outlet ', '4.1', 28, 250, 'Veg', 'active'),
(44, 'uploded/Momoman.jpg', 'Momoman', 'Chinese', 'Vijay Cross road, Navrangpura | Change Outlet ', '4.2', 32, 250, 'Veg', 'active'),
(45, 'uploded/Marky Momos.jpg', 'Marky Momos', 'Chinese', 'Satellite, Prahlad Nagar', '4.2', 35, 450, 'Veg', 'active'),
(46, 'uploded/Bon Homie.jpg', 'Bon Homie', 'Chinese', 'Paldi, Paldi & Ambawadi | Change Outlet ', '4.4', 30, 700, 'Veg', 'active'),
(47, 'uploded/Upper Crust.jpg', 'Upper Crust ', 'Chinese', 'Navrangpura, Navrangpura | Change Outlet ', '4.4', 39, 500, 'Veg', 'active'),
(48, 'uploded/Evening Post.jpg', 'Evening Post', 'Chinese', 'Naranpura,ahemdabad', '4.2', 32, 650, 'Veg', 'active'),
(49, 'uploded/Meritorious.jpg', 'Meritorious', 'Chinese', 'Swapneel 5, Navrangpura', '4.1', 32, 350, 'Veg', 'active'),
(50, 'uploded/RK Restaurant.jpg', 'RK Restaurant', 'Chinese', 'Sola, Ghatlodia', '4.2', 38, 350, 'Veg', 'active'),
(51, 'uploded/Food On Way.jpg', 'Food On Way', 'North Indian', 'Vastrapur, Vastrapur | Change Outlet ', '4.1', 28, 200, 'Veg', 'active'),
(52, 'uploded/Scenaria.jpg', 'Scenaria', 'North Indian', 'Navrangpura,Ahmedabad ', '4.0', 19, 250, 'Veg', 'active'),
(53, 'uploded/Jalaram.jpg', 'Jalaram', 'North Indian', 'Relief Road, LalDarwaja', '4.3', 30, 250, 'Veg', 'active'),
(54, 'uploded/TIKKA Express.jpg', 'TIKKA Express', 'North Indian', 'AMBAWADI , NEHRU NAGAR , NAVRANGPURA,', '4.6', 4, 600, 'Veg', 'active'),
(55, 'uploded/Jani Locho.jpg', 'Jani Locho ', 'North Indian', 'Prahlad Nagar, Prahlad Nagar | Change Outlet ', '4.1', 38, 200, 'Veg', 'active'),
(56, 'uploded/Faasos.jpg', 'Faasos', 'North Indian', 'PANCHVATI ELLIS BRIDGE, Navrangpura | Change Outlet ', '4.2', 29, 200, 'Veg', 'active'),
(57, 'uploded/Day and Night.jpg', 'Day and Night ', 'North Indian', 'Navrangpura,Ahmedabad ', '4.0', 24, 400, 'Veg', 'active'),
(58, 'uploded/Artisan - Regenta Antarim.jpg', 'Artisan - Regenta Antarim', 'North Indian', 'Navrangpura, Paldi & Ambawadi', '3.6', 20, 200, 'Veg', 'active'),
(59, 'uploded/Palms Kitchen .jpg', 'Palms Kitchen', 'North Indian', 'Ashram Road, Naranpura', '4.4', 28, 600, 'Veg', 'active'),
(61, 'uploded/Chai Wai.jpg', 'Chai Wai', 'Fast Food', 'Gulbai Tekra, Navrangpura | Change Outlet ', '4.6', 20, 200, 'Veg', 'active'),
(62, 'uploded/Karnavati Snacks.jpg', 'Karnavati Snacks', 'Fast Food', 'Science City, Paldi & Ambawadi | Change Outlet ', '4.0', 26, 200, 'Veg', 'active'),
(63, 'uploded/MS Food.jpg', 'MS Food', 'Fast Food', 'Maninagar, Maninagar', '4.0', 37, 400, 'Veg', 'active'),
(64, 'uploded/Burger King.jpg', 'Burger King', 'Fast Food', 'Himalaya Mall, Gurukul, Vastrapur | Change Outlet ', '4.2', 33, 350, 'Veg', 'active'),
(65, 'uploded/Amdos Kitchen.jpg', 'Amdos Kitchen', 'Fast Food', 'Paldi, Paldi & Ambawadi', '4.0', 25, 300, 'Veg', 'active'),
(66, 'uploded/Subway.jpg', 'Subway', 'Fast Food', 'Mithakali, Navrangpura | Change Outlet ', '4.2', 23, 350, 'Veg', 'active'),
(67, 'uploded/Mocha.jpg', 'Mocha', 'Fast Food', 'CG Road, Navrangpura | Change Outlet ', '4.2', 33, 700, 'Veg', 'active'),
(68, 'uploded/Burgometry.jpg', 'Burgometry', 'Fast Food', 'Navrangpura,Ahmedabad ', '4.0', 34, 250, 'Veg', 'active'),
(69, 'uploded/Vadapav.jpg', 'Vadapav', 'Fast Food', 'Ambavadi, Navrangpura | Change Outlet ', '3.9', 27, 200, 'Veg', 'active'),
(70, 'uploded/Tummy Fillers.jpg', 'Tummy Fillers', 'Fast Food', 'Nehru Nagar, Ambawadi, Paldi & Ambawadi | Change Outlet ', '4.1', 27, 200, 'Veg', 'active'),
(71, 'uploded/KFC.jpg', 'KFC', 'Fast Food', 'Parimal garden, Navrangpura | Change Outlet ', '4.3', 24, 400, 'Non-Veg', 'active'),
(72, 'uploded/LAXMI FAST FOOD.jpg', 'LAXMI FAST FOOD', 'Fast Food', 'Naranpura,ahemdabad', '3.6', 35, 150, 'Veg', 'active'),
(73, 'uploded/Arbuda fast food.jpg', 'Smosa', 'Fast Food', 'Vastrapur,Ahmedabad ', '3.2', 27, 150, 'Veg', 'active'),
(74, 'uploded/Hotdogs.jpg', 'Hotdogs', 'Fast Food', 'Nehru Nagar, Navrangpura', '3.9', 40, 300, 'Veg', 'active'),
(75, 'uploded/Dabeli.jpg', 'Dabeli', 'Fast Food', 'Naranpura, Naranpura | Change Outlet ', '4.1', 23, 50, 'Veg', 'active'),
(76, 'uploded/Pizza Hut.jpg', 'Pizza Hut', 'Pizza', 'navrangpura, Navrangpura | Change Outlet ', '3.9', 29, 350, 'Veg', 'active'),
(77, 'uploded/Dominos pizza.jpg', 'Domino-s Pizza', 'Pizza', 'Near Law Garden, Navrangpura', '4.0', 30, 400, 'Veg', 'active'),
(78, 'uploded/La Pinoz Pizza.jpg', 'La Pino-z Pizza', 'Pizza', 'Ellis bridge, Paldi & Ambawadi | Change Outlet ', '4.3', 27, 500, 'Veg', 'active'),
(79, 'uploded/Ovenstory Pizza.jpg', 'Ovenstory Pizza', 'Pizza', 'ANIMESH COMPLEX, Navrangpura | Change Outlet ', '4.2', 32, 600, 'Veg', 'active'),
(80, 'uploded/Sams Pizza.jpg', 'Sams Pizza', 'Pizza', 'Navrangpura, Navrangpura | Change Outlet ', '4.2', 28, 350, 'Veg', 'active'),
(81, 'uploded/1441 Pizzeria.jpg', '1441 Pizzeria', 'Pizza', 'Navrangpura,Ahmedabad ', '3.6', 32, 600, 'Veg', 'active'),
(82, 'uploded/Rps Pizzeria.jpg', 'Rp-s Pizzeria', 'Pizza', 'Paldi & Ambawadi, Paldi & Ambawadi | Change Outlet ', '3.8', 33, 550, 'Veg', 'active'),
(83, 'uploded/Pizza Zone.jpg', 'Pizza Zone', 'Pizza', 'Naranpura, Naranpura | Change Outlet ', '3.9', 40, 250, 'Veg', 'active'),
(84, 'uploded/William Johns Pizza.jpg', 'William John-s Pizza', 'Pizza', 'Paldi, Paldi & Ambawadi', '3.8', 31, 500, 'Veg', 'active'),
(85, 'uploded/US Pizza.jpg', 'US Pizza', 'Pizza', 'Bodakdev, Vastrapur', '3.8', 40, 400, 'Veg', 'active'),
(86, 'uploded/Cuppuccion.jpg', 'Cuppuccino', 'Pizza', ' Navrangpura, Navrangpura', '3.9', 32, 350, 'Veg', 'active'),
(87, 'uploded/Classic Pizzeria.jpg', 'Classic Pizzeria', 'Pizza', 'Vastrapur, Ghatlodia', '3.7', 36, 250, 'Veg', 'active'),
(88, 'uploded/One Uno Pizza.jpg', 'One Uno Pizza', 'Pizza', 'Navrangpura', '4.6', 36, 600, 'Veg', 'active'),
(89, 'uploded/The Blue Ovan.jpg', 'The Blue Oven', 'Pizza', 'Vastrapur, Ghatlodia', '4.4', 40, 600, 'Veg', 'active'),
(90, 'uploded/No Mad Baker.jpg', 'No Mad Baker - The Pizzeria', 'Pizza', 'Vastrapur', '4.0', 34, 600, 'Veg', 'active'),
(91, 'uploded/Sams Pizza.jpg', 'Sizzling Pizza', 'Pizza', 'Vastrapur, Vastrapur | Change Outlet ', '3.2', 32, 350, 'Veg', 'active'),
(92, 'uploded/The Chocolate Room.jpg', 'The Chocolate Room', 'Sweets', 'Navrangpura, Navrangpura | Change Outlet ', '4.0', 19, 400, 'Veg', 'active'),
(93, 'uploded/Sweet Truth.jpg', 'Sweet Truth', 'Sweets', 'PANCHVATI ELLIS BRIDGE, Navrangpura | Change Outlet ', '4.3', 26, 200, 'Veg', 'active'),
(94, 'uploded/Melt In.jpg', 'Melt In', 'Sweets', 'Bodakdev, Vastrapur | Change Outlet ', '3.8', 37, 300, 'Veg', 'active'),
(95, 'uploded/Its A Cake Day.jpg', 'Its A Cake Day', 'Sweets', 'Navrangpura,Ahmedabad ', '4.3', 36, 800, 'Veg', 'active'),
(96, 'uploded/Fresh N Fresh.jpg', 'Fresh N Fresh', 'Sweets', 'Vastrapur, Vastrapur | Change Outlet ', '4.3', 23, 250, 'Veg', 'active'),
(97, 'uploded/SHAHI BERA.jpg', 'SHAHI BERA CAKE ', 'Sweets', 'Shahibag', '4.3', 30, 950, 'Veg', 'active'),
(98, 'uploded/The Waffle Co.jpg', 'The Waffle Co', 'Sweets', 'Chandkheda, Naranpura', '3.5', 30, 150, 'Veg', 'active'),
(99, 'uploded/Bellezoe Sweets.jpg', 'Baker-s Den', 'Sweets', 'Panjra Pole, Navrangpura', '4.5', 25, 200, 'Veg', 'active'),
(100, 'uploded/Sugarless Life.jpg', 'Sugarless Life', 'Sweets', 'Navrangpura, Navrangpura', '3.9', 29, 300, 'Veg', 'active'),
(101, 'uploded/THE CHOCOLATE ROOM(1).jpg', 'THE CHOCOLATE ROOM', 'Sweets', 'Paldi & Ambawadi, Paldi & Ambawadi', '4.5', 32, 200, 'Veg', 'active'),
(102, 'uploded/Huber & Holly.jpg', 'Huber & Holly', 'Sweets', 'Navrangpura, Navrangpura | Change Outlet ', '4.4', 23, 350, 'Veg', 'active'),
(103, 'uploded/Vipul Dudhiya Sweets.jpg', 'Kaju Katri', 'Sweets', 'Science City, Ghatlodia', '4.6', 36, 550, 'Veg', 'active'),
(104, 'uploded/The Bakers Dozen.jpg', 'Bellezoe Sweets', 'Sweets', 'Vastrapur, Ghatlodia', '4.1', 25, 200, 'Veg', 'active'),
(105, 'uploded/Happy Sugar.jpg', 'Happy Sugar', 'Sweets', 'AMBAWADI , NEHRU NAGAR , NAVRANGPURA,', '3.5', 30, 350, 'Veg', 'active'),
(106, 'uploded/Baker-s Den.jpg', 'The Bakers Dozen ', 'Sweets', 'Ambawadi, Paldi & Ambawadi', '4.6', 32, 350, 'Veg', 'active'),
(108, 'uploded/Havmor .jpg', ' Shahi Indian', 'North Indian', 'Navrangpura Bus Stand, Navrangpura | Change Outlet ', '43', 39, 450, 'Veg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_email`, `product_id`, `quantity`, `status`, `total_price`) VALUES
(88, 'inam@gmail.com', 5, 1, 'delivered', 300),
(133, 'inam@gmail.com', 29, 1, 'delivered', 300),
(141, 'inam@gmail.com', 7, 1, 'delivered', 750),
(144, 'user1@gmail.com', 23, 3, 'delivered', 900),
(147, 'inam@gmail.com', 42, 1, 'delivered', 400),
(149, 'inam@gmail.com', 3, 10, 'delivered', 2300),
(151, 'user1@gmail.com', 96, 1, 'pending', 250);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `address`, `mobile`) VALUES
(1, 'husain', 'inam@gmail.com', '12345', 'LalDarwaja , ahemdabad', '8140063604'),
(2, 'user1', 'user1@gmail.com', 'user1', 'WestGate, 22nd Floor, Sarkhej, Ahmedabad,', '0123456789'),
(3, 'ADMIN', 'admin', 'admin', '-', '0'),
(4, 'user2', 'user2@gmail.com', 'user2', 'ilol', '0000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_master`
--
ALTER TABLE `items_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `items_master`
--
ALTER TABLE `items_master`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
