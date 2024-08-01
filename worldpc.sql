-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 01 2024 г., 09:26
-- Версия сервера: 8.0.36
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `worldpc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hdd`
--

CREATE TABLE `hdd` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `obiemHDD` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `obiemKesh` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'HDD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `hdd`
--

INSERT INTO `hdd` (`id`, `name`, `chen`, `nalich`, `model`, `strana`, `garant`, `KodProizvod`, `obiemHDD`, `obiemKesh`, `img`, `karusel`, `tip`) VALUES
(1, '1 ТБ Жесткий диск Toshiba P300', '6200.руб', '10.штук', 'Toshiba P300', 'Китай', '12.мес', '[HDWD110UZSVA]', '1 ТБ', '64 МБ', '1715603857_678c0769d3ab2fb18b455909615baf7b1ad08554195eabdbe21570351fe6b8d2.jpg.webp', '1', 'HDD'),
(2, '1 ТБ Жесткий диск WD Blue', '6299.Р', '10.штук', '1 ТБ Жесткий диск WD Blue', 'Таиланд', '12.мес', '[WD10EZEX]', '1 ТБ', '64 МБ', '1715603938_531e1e880acf7fac191e35a5d616bb6b920d77fa31e8929909b1d7c5985e3b58.jpg.webp', '1', 'HDD'),
(3, '1 ТБ Жесткий диск Toshiba DT01-V Series', '6499.Р', '10.штук', 'Toshiba DT01-V Series', 'Китай', '12.мес', '[DT01ABA100V]', '1 ТБ', '64 МБ', '1715603994_6f1f4a584195cd3da32ffac62b5753a8431050b103f9a07da55000e32cbc9664.jpg.webp', '1', 'HDD');

-- --------------------------------------------------------

--
-- Структура таблицы `mat`
--

CREATE TABLE `mat` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `soket` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ChipSet` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `TipPam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `FormFakt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Материнская плата'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `mat`
--

INSERT INTO `mat` (`id`, `name`, `chen`, `nalich`, `soket`, `model`, `ChipSet`, `strana`, `garant`, `KodProizvod`, `TipPam`, `FormFakt`, `img`, `karusel`, `tip`) VALUES
(1, 'Материнская плата AFOX IG41-MA7', '2250.Р', '10.штук', 'LGA 775', 'AFOX IG41-MA7', 'Intel G41', 'Китай', '12.мес', 'нет', 'DDR3', 'Micro-ATX', '1715604271_feae201f2da66650df7a4ca104817a672e3765b9c3774cf2f925a85578a9be42.jpg.webp', '1', 'Материнская плата'),
(2, 'Материнская плата Esonic G31CHL3', '3599.Р', '10.штук', 'LGA 775', 'Esonic G31CHL3', 'Intel G31', 'Китай', '12.мес', 'нет', 'DDR2', 'Micro-ATX', '1715604370_54c89bc711db93b812132e291c31a199dcbd5c48ae1a471f0f51a0560615b6a8.jpg.webp', '1', 'Материнская плата');

-- --------------------------------------------------------

--
-- Структура таблицы `pitanie`
--

CREATE TABLE `pitanie` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `moshi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `FormFakt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Блок питания'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pitanie`
--

INSERT INTO `pitanie` (`id`, `name`, `chen`, `nalich`, `model`, `strana`, `garant`, `KodProizvod`, `moshi`, `FormFakt`, `img`, `karusel`, `tip`) VALUES
(1, 'Блок питания ExeGate AAA350', '750.Р', '10.штук', 'ExeGate AAA350', 'Китай', '12.мес', '[ES259589RUS]', '350 Вт', 'ATX', '1715604443_fbba53c3a8e620ab6631a8a8a57bdf9b6954ff255c5048cbb76e046f3a4ff941.jpg.webp', '1', 'Блок питания'),
(2, 'Блок питания ExeGate XP350', '1350.Р', '10.штук', 'ExeGate XP350', 'Китай', '12.мес', '[EX221985RUS]', '350 Вт', 'ATX', '1715604510_a7883bfe78966179ed332dce0d8dd56f8eae3246a4788eb8834e25cd522d8ab2.jpg.webp', '1', 'Блок питания');

-- --------------------------------------------------------

--
-- Структура таблицы `procc`
--

CREATE TABLE `procc` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `potoki` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chastota` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `iadra` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Процессор'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `procc`
--

INSERT INTO `procc` (`id`, `name`, `chen`, `model`, `potoki`, `strana`, `garant`, `KodProizvod`, `chastota`, `img`, `karusel`, `nalich`, `iadra`, `tip`) VALUES
(1, 'Процессор AMD A8-7680 OEM', '1899.Р', 'AMD A8-7680 OEM', '4', 'Китай', '12.мес', '[AD7680ACI43AB]', '3.5 ГГц', '1715604587_a980a69827e875d21b9a1c11570c907d1ccadb4e52cc18a99ffe211368831317.jpg.webp', '1', '10.штук', '4', 'Процессор'),
(2, 'Процессор AMD Athlon 200GE OEM', '3599.Р', 'AMD Athlon 200GE', '2', 'Малайзия', '12.мес', '[YD200GC6M2OFB]', '3.2 ГГц', '1715604659_3fb9efcf4830ec421505832e2a11d2acd8cfc738508cdb0af17e0b57b53e10db.jpg.webp', '1', '10.штук', '2', 'Процессор');

-- --------------------------------------------------------

--
-- Структура таблицы `ram`
--

CREATE TABLE `ram` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Оперативная память',
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `obiem` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `takt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `proizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `TipPam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ram`
--

INSERT INTO `ram` (`id`, `name`, `chen`, `model`, `tip`, `nalich`, `obiem`, `takt`, `strana`, `garant`, `proizvod`, `TipPam`, `img`, `karusel`) VALUES
(2, 'Оперативная память DEXP 4 ГБ', '650.Р', 'DEXP', 'Оперативная память', '10.штук', '4 ГБ', '1600 МГц', 'Китай', '36.мес', '[DEXP4GD3UD16]', 'DDR3', '1715595390_3c56624e59eb70ab2ebbef5cd2d08c533f6d466d9c87dcfb38ee555b1d7eb772.jpg.webp', '1'),
(3, 'Оперативная память DEXP [DEXP4GD4UD26] 4 ГБ', '1050.Р', 'DEXP', 'Оперативная память', '10.штук', '4 ГБ', '2666 МГц', 'Китай', '36.мес', '[DEXP4GD4UD26]', 'DDR4', '1715595791_c79f5a4722a3cbaad47f487de9ab566a6b6a3b514e7aa2fdd22c1b3a89e801ba.jpg.webp', '1'),
(4, 'Оперативная память AMD Radeon R5 Entertainment Series 4 ГБ', '1099.Р', 'AMD Radeon R5 Entertainment Series', 'Оперативная память', '10.штук', '4 ГБ', '1600 МГц', 'Китай', '24.мес', '[R5S34G1601U1S]', 'DDR3', '1715595874_a6d3b7d9752ea17d1c299c3d0832943d8ac957ab1bad7baa1cee8ffd4eea9a1d.jpg.webp', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `ssd`
--

CREATE TABLE `ssd` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Obiem` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `MaksSkorZap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `MaksSkorCtenia` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'SSD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ssd`
--

INSERT INTO `ssd` (`id`, `name`, `chen`, `model`, `strana`, `nalich`, `Obiem`, `MaksSkorZap`, `garant`, `KodProizvod`, `MaksSkorCtenia`, `img`, `karusel`, `tip`) VALUES
(1, '60 ГБ 2.5\" SATA накопитель ExeGate NextPro UV500TS60', '1199.Р', 'ExeGate NextPro UV500TS60', 'Китай', '10.штук', '60 ГБ', '400 Мбайт/сек', '36.мес', '[EX278215RUS]', '450 Мбайт/сек', '1715604947_9d0210052da6501cd5fecb67a2111ae2ce8f89dffdd8d8fda88e7f97f83dbafd.jpg.webp', '1', 'SSD'),
(2, '120 ГБ 2.5\" SATA накопитель QUMO Novation 3D OEM', '1350.Р', 'QUMO Novation 3D OEM', 'Китай', '10.штук', '120 ГБ', '450 Мбайт/сек', '24.мес', '[Q3DT-120GSCY OEM]', '550 Мбайт/сек', '1715605006_1d5f400fa6ae8f3d31772b0034d1dbb2f53535c9a644056fca8dc9f167ad4888.jpg.webp', '1', 'SSD');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `admin` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `admin`) VALUES
(2, 'maksimglotkin@mail.ru', '$2y$10$4CnSC1dxVpvy.gf5Jqm10.2zQGbHSBki935KfkaVMtvtEj/YzBHuC', 'Maks', 1),
(3, 'rotar@mail.ru', '$2y$10$6QCjPSYRSfmlN07/utyP0OuPeMKEN8uJehKu7E.OAl6TlDDY7RdEW', 'sor1', 1),
(6, 'ssss@mail.ru', '$2y$10$CFAVUGhgsbVMYp/7ADu7P.ztSfeDL.BW10hZtQyAKXhFJjzWz.qc2', 'sori', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ventilator`
--

CREATE TABLE `ventilator` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `maxScor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `maxPotok` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Кулер'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ventilator`
--

INSERT INTO `ventilator` (`id`, `name`, `chen`, `nalich`, `model`, `strana`, `garant`, `KodProizvod`, `maxScor`, `maxPotok`, `img`, `karusel`, `tip`) VALUES
(1, 'Кулер для процессора Cooler Master A30', '450.Р', '10.штук', 'Cooler Master A30', 'Китай', '24.мес', '[RH-A30-25FK-R1]', '2500 об/мин', '30 CFM', '1715605083_3d58a95ad17db621307d5bedeca765865d0ba6731bad8002ec374f52f84b067f.jpg.webp', '1', 'Кулер'),
(2, 'Кулер для процессора DEEPCOOL Alta 9 [LGA1700]', '650.Р', '10.штук', 'DEEPCOOL Alta 9 [LGA1700]', 'Китай', '24.мес', '[DP-ICAP-AT9-17]', '2200 об/мин', '42.35 CFM', '1715605153_2ef11815f8b45c600a3cab79dd352ebe9b2b24eaceea5ee779d735b99f15881b.jpg.webp', '1', 'Кулер');

-- --------------------------------------------------------

--
-- Структура таблицы `videokarta`
--

CREATE TABLE `videokarta` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nalich` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ObiemPam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Frequency` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `strana` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `KodProizvod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `GrafProce` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `karusel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Видеокарта'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `videokarta`
--

INSERT INTO `videokarta` (`id`, `name`, `chen`, `nalich`, `ObiemPam`, `model`, `Frequency`, `strana`, `garant`, `KodProizvod`, `GrafProce`, `img`, `karusel`, `tip`) VALUES
(1, 'Видеокарта GIGABYTE GeForce GT 710 LP (rev. 2.0)', '5499.Р', '10', '2 ГБ', 'GIGABYTE GeForce GT 710 LP (rev. 2.0)', '1600 МГц', 'Китай', '36.мес', '[GV-N710D3-2GL Rev2.0]', 'GeForce GT 710', '1715604090_0b191381ededb060aa07e8bc830a25ed74296bc001a3d766de59a9c2d8864aa6.jpg.webp', '1', 'Видеокарта'),
(2, 'Видеокарта GIGABYTE GeForce GT 710 Silent LP', '5799.Р', '10.штук', '2 ГБ', 'GIGABYTE GeForce GT 710 Silent LP', '5010 МГц', 'Китай', '36.мес', '[GV-N710D5SL-2GL]', 'GeForce GT 710', '1715604176_5d1bf83b258eb801c95ddee5e5654b8107e118e98b3e39a596262f789e8858fc.jpg.webp', '1', 'Видеокарта');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `mat`
--
ALTER TABLE `mat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `pitanie`
--
ALTER TABLE `pitanie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `procc`
--
ALTER TABLE `procc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `ventilator`
--
ALTER TABLE `ventilator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- Индексы таблицы `videokarta`
--
ALTER TABLE `videokarta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hdd`
--
ALTER TABLE `hdd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `mat`
--
ALTER TABLE `mat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pitanie`
--
ALTER TABLE `pitanie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `procc`
--
ALTER TABLE `procc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `ssd`
--
ALTER TABLE `ssd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `ventilator`
--
ALTER TABLE `ventilator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `videokarta`
--
ALTER TABLE `videokarta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
