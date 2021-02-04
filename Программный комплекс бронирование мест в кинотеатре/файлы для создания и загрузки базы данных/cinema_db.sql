-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 02:59 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `check_f` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `date`, `text`, `check_f`) VALUES
('Alexander339', '2020-05-03', 'Отличный кинотеатр! Изначально долгое время ходили в кинотеатр Олимп, там был цветной попкорн, аэрохокей и большой зал.. но, со временем качество фильмов, а именно звука и картинки, работы со светом и убраностью залов, стало совсем плохо, что побудило нас ездить дальше в новомодный на то время Мультиплекс.', 0),
('Over14234', '2020-03-09', 'Посещали недавно с девушкой. Решил устроить ей романтический вечер и приобрел пакет \"Свидание\". Очень понравилось качество обслуживания, как ребята устроили атмосферу. Остались позитивные впечатления у меня и моей второй половинки. Рекомендую для посещения. Думаю теперь посетить в компании своих друзей', 0),
('person3', '2020-05-04', 'nice plase for chill', 1);

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `name` varchar(40) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `film_id` int(6) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`name`, `begin_date`, `end_date`, `film_id`, `info`) VALUES
('Назад в будущее 3', '2020-05-03', '2020-07-16', 1, 'Из газет 1955 года Марти узнает, что доктор Браун погиб еще сто лет назад. Несмотря на просьбы Дока не навещать его в XIX веке, Марти вновь хочет вмешаться в ход событий и на машине времени уносится в 1885 год, навстречу Дикому Западу.\r\n\r\nЭто путешествие, как и все прежние, не обходится без опасных приключений, но смелый Марти, рискуя жизнью, предотвращает трагедию в жизни Эммета Брауна. Тот, в свою очередь, без памяти влюбляется в очаровательную незнакомку, которую спасает от гибели, и поездка домой — в будущее — теряет для него всякий смысл…'),
('Начало', '2020-03-08', '2020-06-30', 2, 'Кобб — талантливый вор, лучший из лучших в опасном искусстве извлечения: он крадет ценные секреты из глубин подсознания во время сна, когда человеческий разум наиболее уязвим. Редкие способности Кобба сделали его ценным игроком в привычном к предательству мире промышленного шпионажа, но они же превратили его в извечного беглеца и лишили всего, что он когда-либо любил.\r\n\r\nИ вот у Кобба появляется шанс исправить ошибки. Его последнее дело может вернуть все назад, но для этого ему нужно совершить невозможное — инициацию. Вместо идеальной кражи Кобб и его команда спецов должны будут провернуть обратное. Теперь их задача — не украсть идею, а внедрить ее. Если у них получится, это и станет идеальным преступлением.'),
('Престиж', '2020-05-10', '2020-05-20', 3, 'Роберт и Альфред — фокусники-иллюзионисты, которые на рубеже XIX и XX веков соперничали друг с другом в Лондоне. С годами их дружеская конкуренция на профессиональной почве перерастает в настоящую войну.\r\n\r\nОни готовы на все, чтобы выведать друг у друга секреты фантастических трюков и сорвать их исполнение. Непримиримая вражда, вспыхнувшая между ними, начинает угрожать жизни окружающих их людей…');

-- --------------------------------------------------------

--
-- Table structure for table `film_session`
--

CREATE TABLE `film_session` (
  `name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `places` text NOT NULL,
  `cost` int(11) NOT NULL,
  `hall` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film_session`
--

INSERT INTO `film_session` (`name`, `date`, `time`, `places`, `cost`, `hall`, `id`) VALUES
('Назад в будущее 2', '2020-06-11', '11:50:00', 'a:99:{i:0;s:1:\"0\";i:1;i:1;i:2;i:1;i:3;i:1;i:4;s:1:\"0\";i:5;i:1;i:6;i:1;i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;i:1;i:12;i:1;i:13;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:16;s:1:\"0\";i:17;s:1:\"0\";i:18;s:1:\"0\";i:19;s:1:\"0\";i:20;s:1:\"0\";i:21;s:1:\"0\";i:22;i:1;i:23;i:1;i:24;s:1:\"0\";i:25;s:1:\"0\";i:26;s:1:\"0\";i:27;s:1:\"0\";i:28;s:1:\"0\";i:29;s:1:\"0\";i:30;s:1:\"0\";i:31;s:1:\"0\";i:32;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:35;s:1:\"0\";i:36;s:1:\"0\";i:37;s:1:\"0\";i:38;s:1:\"0\";i:39;s:1:\"0\";i:40;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:45;s:1:\"0\";i:46;s:1:\"0\";i:47;s:1:\"0\";i:48;s:1:\"0\";i:49;s:1:\"0\";i:50;s:1:\"0\";i:51;s:1:\"0\";i:52;s:1:\"0\";i:53;s:1:\"0\";i:54;s:1:\"0\";i:55;s:1:\"0\";i:56;s:1:\"0\";i:57;s:1:\"0\";i:58;s:1:\"0\";i:59;s:1:\"0\";i:60;s:1:\"0\";i:61;s:1:\"0\";i:62;s:1:\"0\";i:63;s:1:\"0\";i:64;s:1:\"0\";i:65;s:1:\"0\";i:66;s:1:\"0\";i:67;s:1:\"0\";i:68;s:1:\"0\";i:69;s:1:\"0\";i:70;s:1:\"0\";i:71;s:1:\"0\";i:72;s:1:\"0\";i:73;s:1:\"0\";i:74;s:1:\"0\";i:75;s:1:\"0\";i:76;s:1:\"0\";i:77;s:1:\"0\";i:78;s:1:\"0\";i:79;s:1:\"0\";i:80;s:1:\"0\";i:81;s:1:\"0\";i:82;s:1:\"0\";i:83;s:1:\"0\";i:84;s:1:\"0\";i:85;s:1:\"0\";i:86;s:1:\"0\";i:87;s:1:\"0\";i:88;s:1:\"0\";i:89;s:1:\"0\";i:90;s:1:\"0\";i:91;s:1:\"0\";i:92;s:1:\"0\";i:93;s:1:\"0\";i:94;s:1:\"0\";i:95;s:1:\"0\";i:96;s:1:\"0\";i:97;s:1:\"0\";i:98;s:1:\"0\";}', 340, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `user` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `hall` int(1) NOT NULL,
  `place` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `film` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`user`, `price`, `hall`, `place`, `ticket_id`, `film`) VALUES
('person3', 340, 2, 22, 34, 'Назад в будущее 2'),
('person3', 340, 2, 23, 35, 'Назад в будущее 2');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `login` varchar(30) CHARACTER SET ucs2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `password`, `login`) VALUES
(2, 'person2', 'person2@mail.ru', 'root', 'person2'),
(3, 'person3', 'person3@mail.ru', 'af6a5a0029d9d190d8c0f8ace0d5d177', 'person3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `film_session`
--
ALTER TABLE `film_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `film_session`
--
ALTER TABLE `film_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
