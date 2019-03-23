-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-03-23 15:30:53
-- 伺服器版本: 10.1.32-MariaDB
-- PHP 版本： 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `e1501`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `seq` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(2) NOT NULL DEFAULT '1',
  `fb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `book`
--

INSERT INTO `book` (`seq`, `user`, `time`, `title`, `con`, `sh`, `fb`) VALUES
(1, 'AAA', '2018-10-25 15:19:43', '測試TEST', 'TEST測試\r\nTEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試TEST測試', 0, 0),
(2, '管理者', '2018-10-25 16:05:55', '', '◥(ฅº￦ºฅ)◤ ◥ Wonderful Test ◤ ◥(ฅº￦ºฅ)◤', 1, 1),
(3, 'winner', '2018-10-25 16:02:50', ' 你 ᕦ(ò_óˇ)ᕤ 可以的！', '░░░░░░░ᕦ(ò_óˇ)ᕤ░░░░░░░░\r\n░░░░ᕦ(ò_óˇ)ᕤᕦ(ò_óˇ)ᕤ░░░░\r\nᕦ(ò_óˇ)ᕤᕦ(ò_óˇ)ᕤᕦ(ò_óˇ)ᕤ\r\n\r\n\r\n░░░░⧸⎩⎠⎞͏(・∀・)⎛͏⎝⎭⧹░░░░', 0, 0),
(5, '管理者', '2018-10-25 16:03:52', '', '       ！！！感謝您的支持！！！\r\n░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░ ░\r\nヽ(●´∀`●)ﾉ  ヽ(●´∀`●)ﾉ  ヽ(●´∀`●)ﾉ  ', 1, 3),
(6, '管理者', '2018-10-25 11:31:21', '', '─=≡Σ((( つ•̀ω•́)人( ●ω● ゞ ) ≡=- ', 1, 3),
(7, 'winner', '2018-10-25 16:19:20', '研究GET傳值', '研究會員修改自己的留言\r\n不知 input or button 怎傳 GET 值給另一頁 seq\r\n1.用onclick=＂location.href=’?type=edb&bseq=<?=$bseq?>’＂;\r\n　then？\r\n2.若是 checkbox 可用 value=＂<?=$bseq?>＂\r\n　then？', 0, 0),
(8, 'winner', '2018-10-25 16:57:22', 'ERROR回到上一頁ORZ', 'ERROR\r\ninput type =＂button＂ onclick=＂history.back()＂ value=＂回到上一頁＂>\r\n\r\nOK\r\nbutton onclick=＂location.href=’main.php?do=book’＂>回到上一頁</button>\r\nbutton onclick=＂location.href=’?do=book’＂>回到上一頁</button>\r\ninput type =＂button＂ onclick=＂location.href=’main.php?do=book’＂ value=＂回到上一頁＂>', 0, 0),
(10, 'winner', '2018-10-25 15:27:53', 'JQ傳值html() V.S. load()', 'JQ傳值～想結合兩者～用load取代留言列表內容（同新增留言方式，但要傳seq值！）\r\nfunction edit(seq){\r\n　$.post(＂edit.php＂,{seq},function(back){\r\n　$(＂#id＂).html(back) \r\n})\r\n}\r\nfunction edit(){\r\n　$(＂#id＂).load(＂edit.php＂)\r\n}', 0, 0),
(12, '管理者', '2018-10-25 15:17:42', '', '會員請試著刪除留言', 1, 11),
(13, '管理者', '2018-10-25 15:44:30', '', '(・ワ・❀)', 1, 7),
(14, '管理者', '2018-10-25 15:34:52', '', '寫出來了！！！ ｡:.ﾟヽ(*´∀`)ﾉﾟ.:｡ 恭喜！！！ノ(✿ﾟ▽ﾟ)⎠ \r\n進階版的（´◔ ₃ ◔`) 有機會問老師唄ORZ', 1, 10),
(15, 'AAA', '2018-10-25 16:11:34', 'CSS a:focus', '如何用CSS的 focus\r\n能讓按下的按鈕，保持 a:hover 的狀態！\r\n不受該頁面\r\n點選其他元素或按鈕\r\n的影響？', 0, 0),
(16, 'AAA', '2018-10-26 17:23:35', 'PHP串JS串PHP', '怎互串呢=@@=\r\nscript> \r\nalert(＂?php echo(＂12345＂);?>＂); \r\n/script> \r\n\r\n?php  \r\n$a = ＂12345＂; \r\necho(＂script>alert(.$a.);</script>＂); \r\n?> ', 0, 0),
(17, 'AAA', '2018-10-26 18:51:48', '管理系所', 'adep.php\r\n//為什麼這邊變數可一直重複使用?是因為同一資料表嗎?不怕撈錯欄位的原因是???\r\nｅ１５版ｂｕｇ\r\n//不明的空白，每修改一次就會多出一整列換行空白', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `class`
--

CREATE TABLE `class` (
  `seq` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `class`
--

INSERT INTO `class` (`seq`, `title`, `con`) VALUES
(1, '一般科目', '大學入門基礎\r\n人生哲學\r\n專業倫理-科技倫理\r\n體育\r\n國文\r\n外國語文\r\n資訊素養\r\n人文與藝術通識領域\r\n自然與科技通識領域\r\n社會科學通識領域'),
(2, '專業科目', '微積分(一)\r\n微積分(二)\r\n普通物理(一)\r\n普通物理(二)\r\n計算機概論 \r\n計算機概論實習\r\n計算機程式\r\n計算機程式實習\r\n工程數學－線性代數\r\n邏輯設計\r\n邏輯設計實驗\r\n電路學(一)\r\n電路學(二)\r\n工程數學－微分方程 \r\n工程數學－微分方程-英 \r\n工程數學－機率學\r\n訊號與系統\r\n訊號與系統-英 \r\n電子學(一)\r\n電子學(二)\r\n電路實驗\r\n電磁學(一)\r\n電子實驗(一)\r\n電子實驗(二)\r\n專題實驗(一)\r\n專題實驗(二)'),
(3, '選修科目', '電機電子概論\r\n電機電子實作(一)\r\n電機電子實作(二)\r\n離散數學\r\n硬體描述語言\r\n無線行動通訊科技概論\r\n電子科技講座\r\n生物醫學工程導論-英\r\n組合語言\r\n資料結構\r\n計算機網路概論\r\n半導體概論\r\n作業系統\r\n通訊系統模擬\r\n數值分析\r\n產業實習\r\n雷達系統設計\r\n醫用電子學');

-- --------------------------------------------------------

--
-- 資料表結構 `countm`
--

CREATE TABLE `countm` (
  `day` date NOT NULL,
  `men` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `countm`
--

INSERT INTO `countm` (`day`, `men`) VALUES
('2018-10-18', 2),
('2018-10-19', 5),
('2018-10-20', 1),
('2018-10-21', 4),
('2018-10-22', 3),
('2018-10-23', 2),
('2018-10-24', 2),
('2018-10-25', 2),
('2018-10-26', 1),
('2019-01-11', 1),
('2019-01-14', 1),
('2019-03-23', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `dep`
--

CREATE TABLE `dep` (
  `seq` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `dep`
--

INSERT INTO `dep` (`seq`, `title`, `con`) VALUES
(1, '教學目標與理念', '            本系辦學宗旨在於培育具備人文關懷之電機工程高等專業人才。\r\n制定教育目標如下: \r\n\r\n大學部 :\r\n全人教育、倫理涵養：實施全人教育，培育具備人文關懷與重視工程倫理的專業人才。\r\n理論紮根、實務訓練：傳授電機工程的專業知識，訓練學生實作與應用能力。\r\n團隊合作、跨域整合：培養學生溝通合作的能力，以團隊精神解決問題，學習跨領域整合。\r\n社會關懷、國際接軌：提昇學生國際視野，培養學生服務學習精神，進而持續關懷社會。\r\n\r\n研究所 碩士班暨碩士在職專班 :\r\n研究發展創新：傳授電機工程進階專業知識，培養獨立研究的能力。\r\n理論實務整合：訓練學生理論分析、計畫實務執行及論文撰寫的能力。\r\n專業倫理涵養：提升道德素養，重視團隊合作和工程倫理。\r\n國際視野提昇：瞭解國際科技產業發展，擴展國際多元文化交流。          '),
(2, '學系簡史', '            1977   成立電子工程學系   \r\n1993   增班\r\n1998   成立電子工程學系碩士班\r\n2001   成立碩士在職專班\r\n2007   電子工程學系減班成立電機工程系\r\n2010   電機及電子兩系整併為電機工程學系(所)   \r\n         大學部分「系統與晶片設計」及「電腦與通訊工程」兩組招生\r\n2017   電機碩士班增設在職生組   \r\n2018   碩士在職專班停招\r\n2018  「系統與晶片設計」及「電腦與通訊工程」兩組合併， 以電機工程學系招生 '),
(3, '師資結構', '            本系現有助理教授以上之專任教師十五位及專任講師一位共計十六位，兼任老師八位，助教職員五位。專任教師的專長領域主要涵蓋\r\n (1) 通訊領域: 包含訊號處理、通訊工程、微波工程 ，\r\n (2) 晶片設計領域: 包含IC設計、設計自動化、射頻電路，\r\n (3)  系統工程領域: 包含醫療電子、綠能電子、智慧控制，\r\n (4) 電腦領域: 包含人工智慧、網路、計算機系統。\r\n各領域皆擁有4至5位專任教師，以現階段人力而言足以開授四大領域的專業科目，另外聘請兼任老師以擴大教學及研究之範圍。為深化工程教育之專業實務教學，培育具有實作力及就業力之優質專業人才與產業接軌，本系聘請企業專業人士協同授課，以提供學生零距離之產業科技認知並縮短學校教育與業界人才需求之距離。 '),
(4, '教學資源及設備\r\n', '            電機系所提供完善的研究及實驗空間，實驗室共分有二大類，一類為基礎教學型實驗室，另一類為專業研究型實驗室。基礎教學型實驗室主要支援電路電子、計算機程式、微算機及數位邏輯線路等基礎實驗課程，專業研究型實驗室主要支援通訊、控制、綠能、VLSI及生醫等專業領域實驗課及相關研究。研究室主要提供各領域研究生之研讀及執行電腦模擬空間。\r\n\r\n本系所有實驗室空間及設備皆屬全系所共用，並依實驗室不同之性質，委託一位或數位老師共同負責維護管理，以求空間及設備使用效益最大。教學內容之設計充分規劃多元的實習操作課程以配合時代潮流與趨勢的需求。每年編列至少超過4~6百萬之充分經費用於研究設備之維護及採購，配合有效之管理，使各項設備能維持良好之運作情況。\r\n\r\n另外，與理工學院共同成立創新自造發展中心，培養學生創新自造精神，建立與產業界共同研發製作創意產品，整合校內外創新發展相關之研究與教學資源，並進一步提供社區創意教學服務。本校擁有優越的交通優勢(新莊及機場兩條捷運交點)及地理優勢(鄰近林口華亞科學園區及五股產業學園區)，由於設備完善，因此支援許多服務課程(如: 偏鄉教學，同時財團法人自強工業科學基金會及艾鍗科技也利用於本系實驗室於週末假期上課。 \r\n          ');

-- --------------------------------------------------------

--
-- 資料表結構 `game`
--

CREATE TABLE `game` (
  `seq` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gday` date NOT NULL,
  `stopday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `game`
--

INSERT INTO `game` (`seq`, `title`, `url`, `file`, `web`, `gday`, `stopday`) VALUES
(1, '測試', 'https://github.com/', 'E15預覽列印 - phpMyAdmin 4.8.0.pdf', 'https://sc.wdasec.gov.tw/', '2018-10-19', '2018-10-30'),
(2, '跑版??!!', 'http://localhost/websystem', 'e1501error.jpg', 'https://sc.wdasec.gov.tw', '2018-10-22', '2018-10-29'),
(3, '登入後台action可=空值', 'http://localhost/e1501/main.php?do=admin', 'admin-action可空值.txt', 'http://localhost/e1501', '2018-10-22', '2018-11-03'),
(5, '文字欄位不能輸入引號！’', 'http://localhost/e1501', 'utf8.txt', 'http://localhost/e1501/', '2018-10-23', '2018-10-24');

-- --------------------------------------------------------

--
-- 資料表結構 `imgnews`
--

CREATE TABLE `imgnews` (
  `seq` int(10) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `imgnews`
--

INSERT INTO `imgnews` (`seq`, `file`, `url`, `alt`) VALUES
(1, 'main.jpg', 'http://localhost/websystem', '競賽測試'),
(2, 'c01.jpg', 'http://localhost/e1501/images/c01.jpg', '樣式1'),
(3, 'c02.jpg', 'http://localhost/e1501/images/c02.jpg', ' 左選單同主選單黑色字'),
(4, 'c03.jpg', 'http://localhost/e1501/images/c03.jpg', ' 左選單字同選單底色'),
(6, 'd01.JPG', 'http://localhost/e1501/images/d01.jpg', ' 設計d01.jpg'),
(7, 'd02.jpg', 'http://localhost/e1501/images/d02.jpg', ' 設計d02.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `nseq` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` int(2) NOT NULL DEFAULT '1',
  `marq` int(2) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`nseq`, `title`, `url`, `file`, `img`, `new`, `marq`, `time`) VALUES
(1, '測試', 'https://sc.wdasec.gov.tw', '', 'banner01.jpg', 0, 1, '2018-10-22 09:43:39'),
(2, '跑版??!!', 'https://github.com/Madokacyan/php2017/', 'e1501error.jpg', 'e1501error.jpg', 1, 0, '2018-10-22 06:02:43'),
(5, '呵呵呵@@修好可錯哪忘了', 'http://localhost/e1501', 'PHP+JS.txt', 'main.jpg', 1, 0, '2018-10-22 09:44:16'),
(6, '怎Bug越來越難找ORZ', 'http://localhost/e1501/images/ImgBug.JPG', 'adnews抓不到值.txt', 'ImgBug.JPG', 1, 1, '2018-10-22 09:45:37');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `seq` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`seq`, `acc`, `pw`, `mail`, `act`) VALUES
(1, 'winner', 'isme', 'winner@isme.com', 1),
(2, 'AAA', 'AAA', 'winner@isme.com', 1),
(3, 'XXX', 'XXX', 'XXX', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `countm`
--
ALTER TABLE `countm`
  ADD PRIMARY KEY (`day`);

--
-- 資料表索引 `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `imgnews`
--
ALTER TABLE `imgnews`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nseq`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表 AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `dep`
--
ALTER TABLE `dep`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `game`
--
ALTER TABLE `game`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `imgnews`
--
ALTER TABLE `imgnews`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `nseq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
