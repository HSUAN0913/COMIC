-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-05 17:37:34
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `comics`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `Book_ID` int(11) NOT NULL,
  `Img_ID` varchar(30) DEFAULT NULL,
  `Book_Title` varchar(20) DEFAULT NULL,
  `Book_Author` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Paragraph_tw` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`Book_ID`, `Img_ID`, `Book_Title`, `Book_Author`, `Price`, `Paragraph_tw`) VALUES
(1, '1.jpg', '肌肉魔法使―MASHLE― ', '甲本一', 80, NULL),
(2, '2.jpg', '咒術迴戰', '芥見 下々', 80, NULL),
(3, '3.jpg', '黑色五葉草', '田畠裕基', 80, NULL),
(4, '4.jpg', 'SAKAMOTO DAYS 坂本日常', '鈴木祐斗', 80, NULL),
(5, '5.jpg', '笑波衝天', '小畑健 浅倉秋成', 80, NULL),
(6, '6.jpg', 'WITCH WATCH 魔女守護者', '篠原健太', 80, NULL),
(7, '7.jpg', '鬼滅之刃', '吾峠呼世晴', 80, NULL),
(8, '8.jpg', '排球少年', '古館春一', 80, NULL),
(9, '9.jpg', 'ONE PIECE～航海王～', '尾田栄一郎', 80, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
