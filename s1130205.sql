-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2025 年 02 月 07 日 15:04
-- 伺服器版本： 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP 版本： 7.4.3-4ubuntu2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1130205`
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
(1, '歡迎來到本售票網站~~~', 1),
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
  `place` text DEFAULT NULL COMMENT '地點',
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '是否顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `events`
--

INSERT INTO `events` (`id`, `img`, `artist`, `title`, `ticket_date`, `ondate`, `place`, `sh`) VALUES
(9, 'taeyeon_250316.jpg', '泰妍', '標題1', '2025-02-11', '2025-03-16', '台北', 1),
(10, 'gfriend_250329.jpg', 'Gfriend', '標題2', '2025-02-12', '2025-03-29', '台北', 1),
(13, 'jhope_250524.jpg', 'J-Hope', '標題4', '2025-02-13', '2025-05-24', '台北', 1),
(14, 'nct127_250323.jpg', 'NCT 127', '標題3', '2025-02-14', '2025-03-23', '台北', 1),
(15, 'nctwish_240524.jpg', 'NCT WISH', '標題5', '2025-02-15', '2025-05-24', '台北', 1),
(16, 'bnd_250403.png', 'BOYNEXTDOOR', '標題67', '2025-02-16', '2025-04-03', '台北', 1),
(17, '2am_250222.png', '2am', '標題7', '2025-02-17', '2025-02-22', '台北', 1),
(18, '2ne1_250208.jpg', '2NE1', '標題8', '2025-02-18', '2025-02-08', '台北', 1);

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
(1, '?do=activities', '活動資訊', 1, 0),
(2, '?do=news', '最新消息', 1, 0),
(10, '?do=question', '常見問題', 1, 0),
(11, '?do=orders', '訂單查詢', 1, 0),
(12, '?do=login', '管理登入', 1, 0);

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
(4, '2025-02-03', '切勿向來源不明的管道提供您的訂購資訊及個人資料，請留意詐騙風險！', '服務僅提供官方電話客服及官網「聯繫我們」兩種管道，其他方式皆與本公司無關。\r\n⚠️切勿向來源不明的管道提供您的訂購資訊及個人資料⚠️，以避免詐騙風險！', 1),
(5, '2025-02-03', '反詐騙！提醒您「不碰不說」，離開網頁記得登出', '■ 不碰ATM\r\n詐騙集團會要求客戶去ATM轉換英文操作介面，是為了誘使您轉帳。ATM沒有退款、解除分期付款…等功能，請您務必小心。售票系統不會任意變更已付款的訂單，不會要求您依照指示操作使用ATM。\r\n\r\n■ 不說銀行帳戶/信用卡/資料\r\n售票系統不會以電話請您提供銀行帳戶、信用卡資料；亦不會以「問卷」或「中獎」形式通知您提供個人資料或要求匯款。\r\n\r\n防詐騙第一步，由維護個人資訊安全做起。\r\n\r\n■ 不用簡易密碼\r\n設定密碼時請不要使用簡易英數，例：生日、電話、身分證字號，或帳號與密碼相同。不同網站，請設定不同帳號密碼，並不定期更新。\r\n\r\n■ 不點開不明連結\r\n請不任意點選e-mail或通訊軟體夾帶的附件與連結。建議您謹慎使用任何P2P軟體，其下載檔案可能夾帶病毒或木馬程式。\r\n\r\n■ 不在公用電腦預訂\r\n\r\n公用電腦容易被安裝木馬程式，個人帳號及密碼可能會被側錄。另為強化個人資訊安全，提醒您應定期更新個人電腦網路瀏覽器版本，以杜絕不肖人士遠端侵害個人資料。\r\n以上若如有任何疑問，請聯繫165反詐騙諮詢專線', 1),
(6, '2025-02-03', '最新消息3', '最新消息的內容\r\n最新消息的內容\r\n最新消息的內容\r\n最新消息的內容333333', 1),
(7, '2025-02-03', '最新消息4', '最新消息的內容最新消息的內容最新消息的內容\r\n\r\n最新消息的內容最新消息的內容\r\n最新消息的內容最新消息的內容\r\n最新消息的內容最新消息的內容最新消息的內容4', 1),
(8, '2025-02-03', '最新消息5', '最新消息的內容\r\n最新消息的內容\r\n最新消息的內容\r\n最新消息的內容\r\n\r\n最新消息的內容\r\n5555', 1),
(9, '2025-02-03', '最新消息6', '最新消息的內容\r\n最新消息的內容最新消息的內容\r\n\r\n最新消息的內容最新消息的內容\r\n最新消息的內容\r\n最新消息的內容最新消息的內容\r\n最新消息的內容', 1),
(10, '2025-02-03', '最新消息7', '最新消息的內容\r\n\r\n最新消息的內容\r\n\r\n最新消息的內容\r\n\r\n最新消息的內容\r\n\r\n最新消息的內容最新消息的內容', 1),
(11, '2025-02-03', '最新消息8', '最新消息的內容最新消息的內容8', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `answer` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '是否顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `questions`
--

INSERT INTO `questions` (`id`, `title`, `answer`, `sh`) VALUES
(1, '111', 'fdafdsa', 1),
(3, '1234', '1234234234', 1);

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
(1, 'blue.jpg', '藍', 0),
(2, 'ewf.jpg', 'ewf', 0),
(3, 'black.jpg', '黑', 0),
(6, 'orange.jpg', 'orange', 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
