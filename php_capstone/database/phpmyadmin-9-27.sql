-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-09-27 21:05:31
-- 服务器版本： 8.0.20-0ubuntu0.20.04.1
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `php_capstone`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Landscape Projects'),
(2, 'Artwork'),
(3, 'Photo'),
(4, 'IT');

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `project_id` int NOT NULL,
  `comments` longtext NOT NULL,
  `like_dislike` enum('Like','Dislike') DEFAULT NULL,
  `score` float(2,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 表的结构 `log`
--

CREATE TABLE `log` (
  `id` int NOT NULL,
  `event` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `log`
--

INSERT INTO `log` (`id`, `event`, `created_at`) VALUES
(1, '09/21/20 10:49AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 10:49:06'),
(2, '09/21/20 10:57AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 10:57:50'),
(3, '09/21/20 11:04AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:04:27'),
(4, '09/21/20 11:33AM | GET  | /aout  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:33:55'),
(5, '09/21/20 11:35AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:35:52'),
(6, '09/21/20 11:54AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:54:03'),
(7, '09/21/20 11:54AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:54:13'),
(8, '09/21/20 11:54AM | GET  | /  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:54:49'),
(9, '09/21/20 11:56AM | GET  | /gallery  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:15'),
(10, '09/21/20 11:56AM | GET  | /port  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:16'),
(11, '09/21/20 11:56AM | GET  | /intro  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:17'),
(12, '09/21/20 11:56AM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:18'),
(13, '09/21/20 11:56AM | GET  | /sign_in  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:19'),
(14, '09/21/20 11:56AM | GET  | /gallery  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:21'),
(15, '09/21/20 11:56AM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 11:56:23'),
(16, '09/21/20 12:07PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 12:07:41'),
(17, '09/21/20 03:30PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:30:46'),
(18, '09/21/20 03:34PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:34:19'),
(19, '09/21/20 03:34PM | GET  | /gallery  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:34:23'),
(20, '09/21/20 03:34PM | GET  | /intro  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:34:24'),
(21, '09/21/20 03:34PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:34:25'),
(22, '09/21/20 03:34PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:34:40'),
(23, '09/21/20 03:35PM | GET  | /index  | 200  | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\r', '2020-09-21 15:35:30');

-- --------------------------------------------------------

--
-- 表的结构 `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `tools` varchar(255) NOT NULL,
  `discription` longtext NOT NULL,
  `created_year` int NOT NULL,
  `created_location` char(3) NOT NULL,
  `status` enum('Finished','In Progress') NOT NULL,
  `visited_times` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `projects`
--

INSERT INTO `projects` (`id`, `name`, `image`, `category_id`, `tools`, `discription`, `created_year`, `created_location`, `status`, `visited_times`, `created_at`, `updated_at`) VALUES
(1, 'Chaotianmen Plaza', 'IMG_0992.JPG', 1, 'PS AutoCAD Ai Lumion SketchUp', 'This is a landscape architecture project in Chongqing province of China. The project is located at the point of intersection between Jialing River and Changjiang River.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Vitamin of City', 'IMG_0895.JPG', 1, 'PS AutoCAD Ai Lumion SketchUp', 'This is a landscape architecture project which is in ChongQing from China as well. The project is located at a neighbourhood surrouded by office buildings and redidential area.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'The City Above the Water', 'IMG_0993.JPG', 1, 'PS AutoCAD Ai Lumion SketchUp', 'This is a landscape architecture and urban planning project. The project is located in Suzhou from China, which is known as Oriental Venice.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'An Old Man', 'IMG_0995.JPG', 2, 'Pencil Charcoal', 'This is a 3-hour sketch of a model from one model company. I emphasized his tanned skin and facial structure to present the feeling of an elder.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Old Man with Hat', 'IMG_0998.JPG', 2, 'Pencil Charcoal', 'This is a 3.5-hour sketch of an old man who live next to the studio where I make this sketch. The model has an inherently suspicious face and I caught this one moment of his eyes to reinforces the emotion.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Young Girl', 'IMG_1000.JPG', 2, 'Pencil Charcoal', 'This is a 3.5-hour sketch of a young female model who has beautiful eyes. It is hard to draw a young gril after drawing old men all the time.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Midage Lady', 'IMG_1001.JPG', 2, 'Pencil Charcoal', 'This ss a 4-hour sketch of a midage lady from one model company. This is a sketch right after I finished some copies from Nicolai Ivanovich Fechin and trying to find some inspiration by imitating his style.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Janitor', 'IMG_1002.JPG', 2, 'Pencil Charcoal', 'This is a 3-hour sketch of one janitor in my community centre. Because this lady has never be a model before so she was showing a confused, nervous, and curious looking face. ', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'My Neighbor', 'IMG_1003.JPG', 2, 'Pencil Charcoal', 'This is a 3.5-hour sketch of my neighbour. This is me trying to adapt to another style which is similar to chinese ink painting.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'My Classmate', 'IMG_1004.JPG', 2, 'Pencil Charcoal', 'This a 30-minute sketch of my classmate in the studio. I chose this angle because I was attracted by the material of her jacket and also to capture a better posture.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Some Fruits', 'IMG_1005.JPG', 2, 'Gouache', 'This is a gouache practise which helped me to grasp the better understanding of how to improve my painting. I broke down the steps into 4 stages to show to process of drawing a gouache.', 2018, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'In Powerlong Museum', 'IMG_1006.JPG', 3, 'Camera', 'This is a photo taken in Powerlong museum in Shanghai from China.', 2018, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'In Montreal', 'IMG_1014.JPG', 3, 'Camera', 'This is a photo taken in Montreal during a Christmas trip.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'In New Zealand', 'IMG_1008.JPG', 3, 'Camera', 'This is a photo taken during a trip to New Zealand.', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'In Russia', 'IMG_1009.JPG', 3, 'Camera', 'This is a photo taken during the trip to Russia. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'My Website', 'IMG_1010.JPG', 4, 'HTML CSS JavaScript PS PHP', 'This is my personal site created during my one year study in PACE of University of Winnipeg. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2019, 'CA', 'In Progress', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'An Animation', 'IMG_1011.JPG', 3, 'An', 'This is an animation using Adobe Animate, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2019, 'CA', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Javascript Game', 'IMG_1011.JPG', 4, 'HTML CSS JavaScript PS', 'This is a mini game made during my JavaScript course, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2019, 'CA', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'My School', 'IMG_1012.JPG', 2, 'IPhone Camera', 'This is a morning view in my university where I got my bachlor degree, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2018, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Graduation', 'IMG_1013.JPG', 2, 'IPhone Camera', 'This was taken on my way to the train station at the day when I graduated and left my university, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2019, 'CN', 'Finished', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postalcode` varchar(6) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `user_level` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `country`, `province`, `city`, `street`, `postalcode`, `phone`, `email`, `password`, `created_at`, `updated_at`, `user_level`) VALUES
(23, 'Ziyang', 'Xu', 'canada', 'Manitoba', 'Winnipeg', '320 Colony St', 'R3C 0E', '2046987311', 'asdiop963@hotmail.com', '$2y$10$oFQ/ByPd2F7pRadd0SCrs.3ticy9HYPi3NaSNC44hESMrEXv26nV6', '2020-09-04 16:20:27', NULL, 0),
(24, 'Ziyang', 'Xu', 'canada', 'Manitoba', 'Winnipeg', '320 Colony St', 'R3C 0E', '2046987311', '463523832@qq.com', '$2y$10$9PFEWuvwRyZ543vIPnn.xODJAQTY7mNHoohSINCcL8dvUk0Im0TR6', '2020-09-05 04:41:43', NULL, 0),
(26, 'Carlos', 'Xu', 'canada', 'Manitoba', 'Winnipeg', '320 Colony St', 'R3C 0E', '2046987311', 'admin@admin.com', '$2y$10$oFQ/ByPd2F7pRadd0SCrs.3ticy9HYPi3NaSNC44hESMrEXv26nV6', '2020-09-04 16:20:27', NULL, 1);

--
-- 转储表的索引
--

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- 表的索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `project_id_idx` (`project_id`);

--
-- 表的索引 `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_idx` (`category_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `log`
--
ALTER TABLE `log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用表AUTO_INCREMENT `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 限制导出的表
--

--
-- 限制表 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- 限制表 `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
