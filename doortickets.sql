-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-03 09:07:35
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
-- 資料庫： `doortickets`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(4, 'admin', '1234'),
(5, '111', '111'),
(6, '222', '222');

-- --------------------------------------------------------

--
-- 資料表結構 `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ads`
--

INSERT INTO `ads` (`id`, `text`, `sh`) VALUES
(1, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(2, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 0),
(3, '轉知2012年全國青年水墨創作大賽活動', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(1) UNSIGNED NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2024-12-13 今天禮拜五');

-- --------------------------------------------------------

--
-- 資料表結構 `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL COMMENT '縮略圖',
  `artist` text NOT NULL COMMENT '主要人物',
  `title` text NOT NULL COMMENT '標題',
  `ticket_date` date DEFAULT NULL COMMENT '售票日',
  `ondate` date DEFAULT NULL COMMENT '開演日',
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '是否顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `events`
--

INSERT INTO `events` (`id`, `img`, `artist`, `title`, `ticket_date`, `ondate`, `sh`) VALUES
(9, '01D10.jpg', 'A', '標題1', '2025-02-11', '2025-03-21', 1),
(10, '01D01.jpg', 'B', '標題2', '2025-02-12', '2025-03-22', 1),
(13, '01D09.jpg', 'C', '標題4', '2025-02-13', '2025-03-23', 1),
(14, '01D08.jpg', 'AA', '標題3', '2025-02-14', '2025-03-24', 1),
(15, '01D07.jpg', 'BB', '標題5', '2025-02-15', '2025-03-25', 1),
(16, '01D06.jpg', 'CC', '標題67', '2025-02-16', '2025-03-26', 1),
(17, '01D05.jpg', 'DD', '標題7', '2025-02-17', '2025-03-27', 1),
(18, '01D04.jpg', 'D', '標題8', '2025-02-18', '2025-03-28', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `href` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `main_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menus`
--

INSERT INTO `menus` (`id`, `href`, `text`, `sh`, `main_id`) VALUES
(1, '?do=login', '管理登入', 1, 0),
(2, 'index.php', '網站首頁', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `detail`, `sh`) VALUES
(4, '2025-02-03', '教師研習「世界公民生命園丁國內研習會」', '1.主辦單位：世界展望會 2.研習日期：101年11月14日（三）～15日（四） 3.詳情請參考： http://gc.worldvision.org.tw/seed.html。 請線上報名。', 1),
(5, '2025-02-03', '公告綜合高中一年級英數補救教學時間', '上課日期:10/27.11/3.11/10.11/24共計四次 上課時間:早上8:00~11:50半天 費用:全程免費 參加同學:綜合科一年級第一次段考成績需加強者 已將名單送交各班及導師 參加同學請帶紙筆.課本.第一次段考考卷 並將家長通知單給家長 若有任何疑問 請洽綜合高中學程主任', 1),
(6, '2025-02-03', '102年全國大專校院運動會', '「主題標語及吉祥物命名」 網路票選活動 一、活動期間：自10月25日起至11月4日止。 二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」 活動網址：http://102niag.niu.edu.tw/', 1),
(7, '2025-02-03', '台灣亞洲藝術文化教育交流學會第一屆年會國際研討會', '活動日期：101年3月3～4日(六、日) 活動主題：創造力、文化、全人教育 有意參加者請至http://www.caaetaiwan.org下載報名表', 1),
(8, '2025-02-03', '11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場', '舉辦「高中職生涯輔導知能研習」 中區學校每校至多2名 以普通科、專業類科教師優先報名參加 生涯規劃教師次之，參加人員公差假 並核實派代課 當天還有專車接送(8:35前在員林火車站集合) 如此好康的機會，怎能錯過？！ 熱烈邀請師長們向輔導室(分機234)報名 名額有限，動作要快！！ 報名截止日期：本周四 10月25日17:00前！', 1),
(9, '2025-02-03', '台視百萬大明星節目辦理海選活動', '活動活動活動活動活動', 1),
(10, '2025-02-03', '國立故宮博物院辦理', ' 「商王武丁與后婦好 殷商盛世文化藝術特展」暨 「赫赫宗周 西周文化特展」', 1),
(11, '2025-02-03', '財團法人漢光教育基金會', ' 辦理2012「舊愛新歡-古典詩詞譜曲創作暨歌唱表演競賽」 參賽獎金豐厚!!', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(1, '01B01.jpg', '卓越科技大學校園資訊系統', 0),
(2, '01B02.jpg', '卓越科技大學校園資訊系統', 0),
(3, '01B03.jpg', '卓越科技大學校園資訊系統', 1),
(5, '01B04.jpg', '卓越科技大學校園資訊系統', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
