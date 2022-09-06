-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 02:53 AM
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
-- Database: `bangla_typing`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_rankings`
--

CREATE TABLE `exam_rankings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paragraph_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_given_paragraph` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_paragraph_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diff_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_input_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_percentage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wpm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accuracy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_rankings`
--

INSERT INTO `exam_rankings` (`id`, `user_id`, `paragraph_id`, `user_given_paragraph`, `total_paragraph_words`, `diff_words`, `user_input_words`, `missing_percentage`, `result`, `wpm`, `accuracy`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন।', '69', '35', '28', NULL, '49.275362318841', '14', '-25', '50.724637681159', '2022-08-23 12:07:57', '2022-08-23 12:08:21'),
(2, 3, 1, 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি।', '69', '12', '49', NULL, '82.608695652174', '24.5', '75.510204081633', '17.391304347826', '2022-08-23 12:09:51', '2022-08-23 12:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2022_07_12_231953_create_paragraphs_table', 1),
(18, '2022_08_04_160321_create_results_table', 2),
(19, '2022_08_23_175547_create_exam_rankings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `paragraphs`
--

CREATE TABLE `paragraphs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paragraphs`
--

INSERT INTO `paragraphs` (`id`, `chapter`, `paragraph`, `time`, `created_at`, `updated_at`) VALUES
(1, 'test 2', 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি। এখানে বেশ কয়েকটি দিককে চিহ্নিত করে দেওয়া হলো, যেগুলোর প্রতি নজর দেওয়ার মাধ্যমে আপনিও বেশ ভালো একটি প্যারাগ্রাফ লিখতে পারবেন।', '10', '2022-08-23 01:50:22', '2022-08-23 01:50:22'),
(2, 'Test 3', 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি। এখানে বেশ কয়েকটি দিককে চিহ্নিত করে দেওয়া হলো, যেগুলোর প্রতি নজর দেওয়ার মাধ্যমে আপনিও বেশ ভালো একটি প্যারাগ্রাফ লিখতে পারবেন।	সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন।', '30', '2022-08-23 15:17:21', '2022-08-23 15:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paragraph_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_given_paragraph` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_paragraph_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diff_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_input_words` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_percentage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wpm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accuracy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `paragraph_id`, `user_given_paragraph`, `total_paragraph_words`, `diff_words`, `user_input_words`, `missing_percentage`, `result`, `wpm`, `accuracy`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়।', '69', '52', '12', NULL, '24.63768115942', '6', '-333.33333333333', '75.36231884058', '2022-08-23 12:07:57', '2022-08-23 12:07:57'),
(2, 1, 1, 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন।', '69', '35', '28', NULL, '49.275362318841', '14', '-25', '50.724637681159', '2022-08-23 12:08:20', '2022-08-23 12:08:20'),
(3, 3, 1, 'সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি।', '69', '12', '49', NULL, '82.608695652174', '24.5', '75.510204081633', '17.391304347826', '2022-08-23 12:09:51', '2022-08-23 12:09:51'),
(4, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 12:50:04', '2022-08-23 12:50:04'),
(5, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 12:56:12', '2022-08-23 12:56:12'),
(6, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 12:56:35', '2022-08-23 12:56:35'),
(7, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 12:57:16', '2022-08-23 12:57:16'),
(8, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 13:02:26', '2022-08-23 13:02:26'),
(9, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 13:02:54', '2022-08-23 13:02:54'),
(10, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 13:05:11', '2022-08-23 13:05:11'),
(11, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 13:06:24', '2022-08-23 13:06:24'),
(12, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 13:07:14', '2022-08-23 13:07:14'),
(13, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 14:27:36', '2022-08-23 14:27:36'),
(14, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 14:30:33', '2022-08-23 14:30:33'),
(15, 1, 1, 'সদ্য ধসা দসাজখদ দসাকধ দক্সাহদ কঝদসা ধদসাপাউদ আদসাওইদি', '69', '69', '8', NULL, '0', '4', '-762.5', '100', '2022-08-23 14:31:39', '2022-08-23 14:31:39'),
(16, 1, 1, 'দসাদসদ দাস', '69', '69', '2', NULL, '0', '1', '-3350', '100', '2022-08-23 15:07:29', '2022-08-23 15:07:29'),
(17, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-23 15:18:27', '2022-08-23 15:18:27'),
(18, 1, 1, 'দসাওদজ দসাওদ জসা দ;লাজদস্লক;সাজদ ক্লাস দল্কাস দল্কসাজদল্কসাজদপসাএদপ্বক এপ্বক এপ্বকেওওকি এসাপদ [দিও অএপওদসাজদল্ক দজপওেপওেপওকেপওজদল্কসাজ', '69', '69', '13', NULL, '0', '6.5', '-430.76923076923', '100', '2022-08-23 15:18:48', '2022-08-23 15:18:48'),
(19, 1, 1, 'শাদাতন আমরা বই', '69', '68', '3', NULL, '1.4492753623188', '1.5', '-2166.6666666667', '98.550724637681', '2022-08-23 16:22:50', '2022-08-23 16:22:50'),
(20, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-26 20:57:30', '2022-08-26 20:57:30'),
(21, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-26 20:58:00', '2022-08-26 20:58:00'),
(22, 1, 1, NULL, '69', '69', '1', NULL, '0', '0.5', '-6800', '100', '2022-08-26 21:00:11', '2022-08-26 21:00:11'),
(23, 1, 1, 'সাধারণ আমারা বই পত্রে যেভাবে', '69', '68', '5', NULL, '1.4492753623188', '2.5', '-1260', '98.550724637681', '2022-08-26 21:00:29', '2022-08-26 21:00:29'),
(24, 1, 1, 'সাধারণ আমারা বই পত্রে যেভাবে', '69', '68', '5', NULL, '1.4492753623188', '2.5', '-1260', '98.550724637681', '2022-08-26 21:01:29', '2022-08-26 21:01:29'),
(25, 1, 1, 'সাধারণ আমারা বই পত্রে যেভাবে', '69', '68', '5', NULL, '1.4492753623188', '2.5', '-1260', '98.550724637681', '2022-08-26 21:01:39', '2022-08-26 21:01:39'),
(26, 1, 1, 'সাধারণভাবে আমারা বই পতত্রী', '69', '68', '4', NULL, '1.4492753623188', '2', '-1600', '98.550724637681', '2022-08-26 21:06:35', '2022-08-26 21:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Simon Norris', 'admin@mail.com', NULL, '$2y$10$pbfxBa0OQmxAJKgwIoqK5OILTjA67CD5Pph2a1UYppOaCPBJGkvXu', 'admin', NULL, '2022-08-04 10:35:40', '2022-08-04 10:35:40'),
(2, 'Amery Hobbs', 'customer@mail.com', NULL, '$2y$10$pbfxBa0OQmxAJKgwIoqK5OILTjA67CD5Pph2a1UYppOaCPBJGkvXu', 'user', NULL, '2022-08-23 01:42:00', '2022-08-23 01:42:00'),
(3, 'Howard Todd', 'mumu@mail.com', NULL, '$2y$10$pbfxBa0OQmxAJKgwIoqK5OILTjA67CD5Pph2a1UYppOaCPBJGkvXu', 'user', NULL, '2022-08-23 12:09:40', '2022-08-23 12:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_rankings`
--
ALTER TABLE `exam_rankings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_rankings`
--
ALTER TABLE `exam_rankings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
