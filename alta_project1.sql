-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2022 lúc 09:15 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `alta_project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `device`
--

CREATE TABLE `device` (
  `device_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_category` int(10) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_conection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `device_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `device`
--

INSERT INTO `device` (`device_code`, `device_category`, `id`, `device_name`, `device_username`, `device_id`, `device_status`, `device_conection`, `device_title`, `created_at`, `updated_at`, `device_password`) VALUES
('koisk', 1, 9, 'máy lọc nước', 'vi', '1234', '0', '1', 'uống nước', NULL, NULL, 12345),
('123', 2, 10, 'máy giặt', 'vi', '11234', '1', '1', 'giặt ủi,giặt sấy', NULL, NULL, 1234),
('koisk', 2, 11, 'máy lọc nước uống', 'truongvi', '12345', '1', '1', 'lọc nước', NULL, NULL, 123456789),
('1233', 1, 12, 'máy giặt', 'vi 2', '1234567', '0', '0', 'giạt ủi', NULL, NULL, 123456),
('123', 2, 13, 'thiết bị demo edit', 'truongvi', '123456', '0', '1', 'demo 1,demo 2,demo 3', NULL, NULL, 123456);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `device_category`
--

CREATE TABLE `device_category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `device_category`
--

INSERT INTO `device_category` (`id`, `category_name`) VALUES
(1, 'Kiosk'),
(2, 'Kiosk 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_26_053156_device', 2),
(6, '2022_05_31_073424_service', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT 1,
  `service_min` int(10) DEFAULT NULL,
  `service_max` int(10) DEFAULT NULL,
  `service_Prefix` int(10) DEFAULT NULL,
  `service_Surfix` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `service_code`, `service_content`, `service_name`, `service_status`, `service_min`, `service_max`, `service_Prefix`, `service_Surfix`, `created_at`, `updated_at`) VALUES
(1, 'kiosk', 'khám tổng quát', 'khám tổng quát', 1, 1, 190, NULL, NULL, NULL, NULL),
(2, 'kiosk 3', 'abcd', 'khám tổng quát', 0, 1, 190, NULL, NULL, NULL, NULL),
(3, 'kiosk 3', 'abcd', 'Rửa mắt', 0, 1, 190, NULL, NULL, NULL, NULL),
(4, 'kiosk 4', 'qưertyu', 'Khám mắt', 0, 1, 190, NULL, NULL, NULL, NULL),
(5, 'kiosk 5', 'ádfghjkl', 'khám tổng quát', 1, 1, 190, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Trường vi', 'nguyentruongvi2203@gmail.com', NULL, '$2y$10$c7PZ.fAmCM/RiAPU1eT8SuBHP5aIjl8eMuulAW3vSBwkr0jdzVXsK', 'dxzIvgcvxiuDVmHbprG1ix7eVLfs9hMigr9cj2vvGOupS1HivTGytHJ6kUEN', '2022-05-25 21:12:10', '2022-05-29 22:14:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `device_category`
--
ALTER TABLE `device_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `device`
--
ALTER TABLE `device`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `device_category`
--
ALTER TABLE `device_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
