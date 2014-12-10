-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2014 г., 18:29
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `network`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_21_115556_create_posts_table', 1),
('2014_11_21_120147_create_users_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `author_id`, `text`, `likes`, `created_at`, `updated_at`) VALUES
(1, '', 4, 'adfgadfgadfgadfg', 0, '2014-11-27 05:24:33', '2014-11-27 05:24:33'),
(2, '', 4, 'ва', 0, '2014-12-01 11:28:06', '2014-12-01 11:28:06'),
(3, '', 4, 'dghjmghj', 0, '2014-12-01 11:59:57', '2014-12-01 11:59:57'),
(4, '', 4, 'adfhdafhadfh', 0, '2014-12-01 12:18:24', '2014-12-01 12:18:24'),
(5, '', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quisquam quae corporis numquam nam culpa minima esse ut atque voluptas neque, sunt amet non eligendi maxime nostrum repudiandae dolores voluptatem eos, cum in laudantium, nemo. Voluptate numquam, laudantium corporis consectetur consequatur dignissimos, a eveniet. Culpa rem dignissimos, delectus dolor corrupti dolores consequuntur dolorum repellendus sapiente esse veniam accusamus, nisi adipisci numquam quia aspernatur velit dolorem dicta, nulla iure impedit deleniti atque. Quas distinctio at voluptatum ipsum mollitia, quidem, magnam quia perferendis vel quis corporis sunt? Alias inventore repellendus dicta, repudiandae itaque rem fugit reiciendis deleniti quia, quibusdam voluptas earum incidunt odit ullam sint architecto laboriosam quas dolores expedita facilis minus. Blanditiis, impedit! Illum voluptates commodi facere consequuntur itaque aspernatur blanditiis expedita. Atque qui, in facere facilis consectetur voluptatibus, ex voluptatem fugiat sed minus doloribus nobis molestiae fugit eos deleniti porro aperiam. Amet quidem quas quia id numquam libero aut alias accusamus vel eligendi, blanditiis a non cum sapiente, maiores inventore. Non, accusamus suscipit assumenda temporibus animi obcaecati ipsum inventore ipsa reprehenderit adipisci ab dolorem repudiandae, earum cumque omnis porro accusantium iusto nisi delectus illo, deleniti sapiente beatae? Provident eius commodi possimus esse atque tenetur, molestiae fuga, consectetur inventore ad quia.', 0, '2014-12-01 12:19:27', '2014-12-01 12:19:27'),
(6, '', 4, 'Привет, Мир!', 0, '2014-12-01 12:35:30', '2014-12-01 12:35:30'),
(7, '', 4, 'фыафыа', 0, '2014-12-01 12:35:38', '2014-12-01 12:35:38'),
(8, '', 4, 'asfasfasfasfasfasf', 0, '2014-12-01 12:36:11', '2014-12-01 12:36:11'),
(9, '', 4, '1234', 0, '2014-12-01 12:43:46', '2014-12-01 12:43:46'),
(10, '', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quisquam quae corporis numquam nam culpa minima esse ut atque voluptas neque, sunt amet non eligendi maxime nostrum repudiandae dolores voluptatem eos, cum in laudantium, nemo. Voluptate numquam, laudantium corporis consectetur consequatur dignissimos, a eveniet. Culpa rem dignissimos, delectus dolor corrupti dolores consequuntur dolorum repellendus sapiente esse veniam accusamus, nisi adipisci numquam quia aspernatur velit dolorem dicta, nulla iure impedit deleniti atque. Quas distinctio at voluptatum ipsum mollitia, quidem, magnam quia perferendis vel quis corporis sunt? Alias inventore repellendus dicta, repudiandae itaque rem fugit reiciendis deleniti quia, quibusdam voluptas earum incidunt odit ullam sint architecto laboriosam quas dolores expedita facilis minus. Blanditiis, impedit! Illum voluptates commodi facere consequuntur itaque aspernatur blanditiis expedita. Atque qui, in facere facilis consectetur voluptatibus, ex voluptatem fugiat sed minus doloribus nobis molestiae fugit eos deleniti porro aperiam. Amet quidem quas quia id numquam libero aut alias accusamus vel eligendi, blanditiis a non cum sapiente, maiores inventore. Non, accusamus suscipit assumenda temporibus animi obcaecati ipsum inventore ipsa reprehenderit adipisci ab dolorem repudiandae, earum cumque omnis porro accusantium iusto nisi delectus illo, deleniti sapiente beatae? Provident eius commodi possimus esse atque tenetur, molestiae fuga, consectetur inventore ad quia.', 0, '2014-12-01 12:44:06', '2014-12-01 12:44:06'),
(11, '', 4, 'asfasfasfasfasf', 0, '2014-12-01 12:45:11', '2014-12-01 12:45:11'),
(12, '', 4, 'э', 0, '2014-12-09 13:07:54', '2014-12-09 13:07:54');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `second_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Peter', 'Petrov', 'peter@mail.ru', '$2y$10$Q99pAlL.HWimUjL0ac8p2u8m/0ZZkHZqsEBCn3hOGGm1k.2UqZ.P.', NULL, '2014-11-23 07:39:05', '2014-11-23 07:39:05'),
(2, 'Gregori', 'Gregoriy', 'Gregori@mail.ru', '$2y$10$UlH1BTAUknY0PFBWNrzQB.LPB7tnn1S9e4yX2sOTcxy9IBQLhoFNq', NULL, '2014-11-23 07:39:43', '2014-11-23 07:39:43'),
(3, 'Kraken', 'Morskoy', 'krakenn@gmail.com', '$2y$10$9HFJ/mQQz1IVH.47i/TzzOuA/EHSQKnkLolDJfkSQO/2k/F67XQfm', NULL, '2014-11-23 07:42:24', '2014-11-23 07:42:24'),
(4, 'ecrofeg', 'ecrofegovich', 'ecrofeg@mail.ru', '$2y$10$.PoQYdkpZeyex6qRzvP/se2Lrr2rFjmuOy/3NjlgDUD5vzE4ngica', '1eQQ8His4svYmJ2O6StQVyq2N8b77FT4IYgY8rAmrGi4ta7ecBcOlh9QP7Ur', '2014-11-23 07:47:44', '2014-12-01 11:27:59'),
(5, 'Kesov', 'Leroy', 'keso@mail.ru', '$2y$10$J6mHcbELHZbdzHiWVE5zSOjFexfTld.8KKIt7WY6rurxdceWAsvbS', '6HVP8jKC1Zhbo4YOsq0gE2uQSOvo0LP3ahntfNehwCGyqBsNMWXnLLUPzlcJ', '2014-11-24 08:31:04', '2014-11-24 08:31:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
