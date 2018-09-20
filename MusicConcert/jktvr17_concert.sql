-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 06 2018 г., 14:12
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jktvr17_concert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `affiche`
--

CREATE TABLE `affiche` (
  `ID_affiche` int(5) NOT NULL,
  `ID_band` int(5) NOT NULL,
  `ID_location` int(5) NOT NULL,
  `Info` text COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Price` int(4) NOT NULL,
  `Poster` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `affiche`
--

INSERT INTO `affiche` (`ID_affiche`, `ID_band`, `ID_location`, `Info`, `Date`, `Price`, `Poster`) VALUES
(1, 1, 2, 'NASTY - Сумасшедшее сочетание битдауна и дес метала, эти четверо парней могут разнести площадку любого уровня, что уже не раз было доказано. Группа крепко закрепилась в топе европейских коллективов, уже несколько лет подряд проводя свой личный фестиваль-тур «TASTE OF ANARCHY TOUR». После успешнейшего альбома «SHOKKA» откатав где только можно, группа приступила к записи нового альбома, недавно вышел сингл «AT WAR WITH LOVE» который скорее всего войдет в новую пластинку которая выйдет в 2017 году!', '2018-09-22', 0, 'nasty.jpg'),
(2, 2, 1, 'Play it Loud Booking представляет:\r\nCARNIFEX (USA)\r\nНеумолимые калифорнийские палачи возвращаются на российские земли с забойным новым альбомом \"Slow Death\". Еще больше разрушительных бластбитов и убийственных брейкдаунанов от пропитанных ненавистью мясников на предстоящих концертах в России и в Европе!\r\nПоддержат американцев две мощнейшие ,банды из Великобритании: The Five Hundred и A Night In The Abyss.', '2018-11-26', 20, 'carnifex.jpg'),
(3, 3, 1, 'Новоорлеанские легенды sludge-metal – группа Crowbar возвращается в Восточную Европу. Тяжелый и медленный как поступь мамонта, тягучий и жаркий как пустыни Аризоны, сладж-метал в исполнении Crowbar даст фору любой молодой группе. Первопроходцы жанра во главе с могучим Кирком Уиндстейном снова едут в тур, на этот раз – с новым альбомом The Serpent Only Lies, который, по мнению критиков всего мира, установил новые стандарты тяжести.\r\nЗапомни: если ты не видел Crowbar, ты не знаешь, как звучит настоящий метал!', '2018-10-28', 20, 'crowbar.jpg'),
(5, 5, 1, 'Спустя ровно год с прошлого приезда в Россию возвращаются экстравагантные пост-хардкорщики I SET MY FRIENDS ON FIRE!\r\nВ декабре группа выпустит новый альбом, с презентацией которого и посетит наши края.\r\nНе пропусти самые фееричные концерты этой зимы!', '2018-12-08', 15, ''),
(6, 6, 4, 'Deez Nuts - возвращаются в Европу и Россию, любимцы  публики посетят необъятную уже в пятый раз, мощнейшие шоу пройдут не только в столицах. Встречаем!', '2018-12-19', 15, ''),
(7, 4, 1, 'Концерт в Таллинне станет первым и единственным шоу Rammstein под открытым небом в странах Балтии.', '2018-11-30', 10, 'rammstein.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `band`
--

CREATE TABLE `band` (
  `ID_band` int(5) NOT NULL,
  `Name_band` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `band`
--

INSERT INTO `band` (`ID_band`, `Name_band`, `Info`) VALUES
(1, 'Nasty', 'Nasty - группа из четырёх человек, основанная в Бельгии и Германии, играющая в стиле, который они сами именуют как terror beatdown. Проще говоря это битдаун хардкор с влиянием дэт-метала. Участники группы, вдохновленные идеей писать самую агрессивную музыку, какую только возможно, берут cвоё начало в ноябре 2004-го. Первоначальным названием коллектива они выбрали Van Damme, но после некоторых изменений в составе команда стала называться Nasty.'),
(2, 'Carnifex', 'Carnifex (в переводе с лат.  \"Палач\") — метал-группа из Сан-Диего (США, Калифорния), сформированная в декабре 2005 года. Стиль Carnifex включает в себя дэткор и дэт-метал. Они находятся под большим влиянием блэк-метала. Элементы дэткора можно заметить в брейкдаунах и низконастроеных гитарах. Элементы дэт-метала включают в себя дэт-металлический гроул и техничную игру. Тем более, начиная с альбома Hell Chose Me у них стали появляться тремоло из блэк-метала, темы ада и проклятий.'),
(3, 'Crowbar', 'Crowbar (с англ. — «гвоздодёр») — американская сладж-метал-группа из Нового Орлеана, штат Луизиана, характеризующиеся крайне медленной, неброской, тяжелой музыкой. 			'),
(4, 'Rammstein', 'Группа Rammstein хороша известна своим театрализованными концертными шоу, основными элементами которых являются пиротехнические и световые эффекты, масштабные сценические декорации, провокационные костюмы и конечно же «раммштайновская» музыка. Но в центре шоу всегда остаются шесть музыкантов - Till Lindemann, Flake Lorenz, Christoph Schneider, Paul Landers, Richard Z. Kruspe ja Oliver Riedel – та творческая составляющая, вокруг которой всё и вращается.'),
(5, 'I Set My Friends On Fire', 'I Set My Friends on Fire — уже бывший дуэт из Майами, штат Флорида, созданный Matt Mehana (вокал и тексты) и Nabil Moo (отвечающим за программирование, гитары и бэк-вокал) в конце августа 2007 года, которые до этого пару лет играли в We Are The Cavalry, сколотив этот проект ещё будучи школьниками. I Set My Friends on Fire стали известны благодаря MySpace, где выложили свой screamo-кавер на песню Soulja Boy’s «Crank Dat», переименовав её в «Crank Dat Cavalry Boy» — трек быстро стал популярным и на сегодняшний день проигрывался на сайте более миллиона раз, несмотря на то, что страница ISMFOF удалялась три раза по причине того, что MySpace считал, что дуэт использует программное обеспечение, чтобы искусственно повысить число участников/'),
(6, 'Deez Nuts', 'Deez Nuts — хардкор группа из Мельбурна, Австралия. Группа образовалась в 2007 году после распада другой австралийской группы I Killed The Prom Queen, двое участников которой теперь играют в Deez Nuts. Это бывший ударник Джей Джей Питерс (теперь он в роли вокалиста) и басист Шон. Также в группе Бен Койт, Эндрю Нюфелд в качестве второго вокалиста. За свою историю группа прокатилась в туры по всему миру с такими группами, как Parkway Drive, Bring Me The Horizon, Architects, Suicide Silence, Emmure, The Amity Affliction и др.');

-- --------------------------------------------------------

--
-- Структура таблицы `location`
--

CREATE TABLE `location` (
  `ID_location` int(5) NOT NULL,
  `Country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `location`
--

INSERT INTO `location` (`ID_location`, `Country`, `City`, `Place`, `Description`) VALUES
(1, 'Estonia', 'Tallinn', 'Tapper', 'Klubi Tapper Pärnu mnt. 158g\r\n11317 Tallinn \r\ntel: (+372) 6 547 518 \r\nemail: info [at] tapper.ee \r\nhttp://www.tapper.ee\r\nhttp://www.myspace.com/clubtapper\r\n'),
(2, 'Latvia', 'Riga', 'Nabaklab', 'Adrese: Zigfrīda Annas Meierovica bulvāris 12, Rīga, Latvija, LV-1010\r\n\r\nPirmdiena - Ceturtdiena: 17:00 - 00:00\r\nPiektdiena - Sestdiena: 17:00 - 03:00\r\nSvētdiena: slēgts, izņemot iepriekš izziņotus pasākumus\r\n\r\nIeeja klubā no 18 gadu vecuma\r\n\r\nKontaktiem: info@nabaklab.lv'),
(3, 'Estonia', 'Tallinn', 'Tallinna Lauluväljak', 'Tallinna lauluväljak\r\nNarva mnt 95\r\nTallinn\r\nPõhja-Eesti\r\nЭстония'),
(4, 'Estonia', 'Tallinn', 'Cathouse', 'Tartu mnt. 17, Tallinn 10117 Estonia\r\ninfo@cathouse.ee  \r\n+372 655 7700');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID_User` int(5) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID_User`, `Email`, `Password`, `Username`, `Pass`) VALUES
(1, 'admin@gmail.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'admin', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `affiche`
--
ALTER TABLE `affiche`
  ADD PRIMARY KEY (`ID_affiche`);

--
-- Индексы таблицы `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`ID_band`);

--
-- Индексы таблицы `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID_location`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `affiche`
--
ALTER TABLE `affiche`
  MODIFY `ID_affiche` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `band`
--
ALTER TABLE `band`
  MODIFY `ID_band` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `location`
--
ALTER TABLE `location`
  MODIFY `ID_location` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
