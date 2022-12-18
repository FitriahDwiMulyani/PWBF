-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 02:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelabouts`
--

CREATE TABLE `artikelabouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikelkinds`
--

CREATE TABLE `artikelkinds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `databayars`
--

CREATE TABLE `databayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jenis_bayar` tinyint(1) NOT NULL,
  `jenis_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `konfirmasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `databayars`
--

INSERT INTO `databayars` (`id`, `nama`, `tgl_pembayaran`, `jenis_bayar`, `jenis_sampah`, `total_bayar`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 'Alex Smith', '2022-04-25', 1, 'Sampah Metal', 12000, 'Selesai', '2022-11-16 21:56:13', '2022-11-16 21:56:13'),
(2, 'Alkana Fares', '2022-04-25', 1, 'Sampah Metal', 9000, 'Selesai', '2022-11-16 21:56:13', '2022-11-16 21:56:13'),
(3, 'Asahila Hill', '2022-04-25', 1, 'Sampah Plastik', 2000, 'Selesai', '2022-11-16 21:56:13', '2022-11-16 21:56:13'),
(4, 'Tiger Nixon', '2022-04-25', 1, 'Sampah Kertas', 3000, 'Selesai', '2022-11-16 21:56:13', '2022-11-16 21:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `datacustomers`
--

CREATE TABLE `datacustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datacustomers`
--

INSERT INTO `datacustomers` (`id`, `nama`, `email`, `alamat`, `no_hp`, `start_date`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Alex Smith', 'alexsmith@gmail.com', 'Gubeng Airlangga No.37 Surabaya', '082345678123', '2022-04-25', 1, '2022-11-16 21:56:27', '2022-11-16 21:56:27'),
(2, 'Alkana Fares', 'alkanafares@gmail.com', 'Gubeng Airlangga No.08 Surabaya', '082345678435', '2022-04-25', 0, '2022-11-16 21:56:27', '2022-11-16 21:56:27'),
(3, 'Asahila Hill', 'asahilahill@gmail.com', 'Gubeng Kertajaya No.12 Surabaya', '082345678435', '2022-04-25', 1, '2022-11-16 21:56:27', '2022-11-16 21:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `datapengirims`
--

CREATE TABLE `datapengirims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `jenis_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_sampah` int(11) NOT NULL,
  `konfirmasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datapengirims`
--

INSERT INTO `datapengirims` (`id`, `nama`, `alamat`, `no_hp`, `tgl_pengiriman`, `jenis_sampah`, `berat_sampah`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 'Alex Smith', 'Gubeng Airlangga No.37 Surabaya', '082345678123', '2022-04-25', 'Sampah Metal', 4, 'Selesai', '2022-11-16 21:56:41', '2022-11-16 21:56:41'),
(2, 'Alkana Fares', 'Gubeng Airlangga No.08 Surabaya', '082345678435', '2022-04-25', 'Sampah Metal', 3, 'Selesai', '2022-11-16 21:56:41', '2022-11-16 21:56:41'),
(3, 'Asahila Hill', 'Gubeng Kertajaya No.12 Surabaya', '082345678435', '2022-04-25', 'Sampah Plastik', 1, 'Selesai', '2022-11-16 21:56:41', '2022-11-16 21:56:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_24_061605_create_databayars_table', 1),
(6, '2022_10_24_062315_create_artikelabouts_table', 1),
(7, '2022_10_24_064751_create_datacustomers_table', 1),
(8, '2022_10_24_073813_create_datapengirims_table', 1),
(9, '2022_10_25_040728_create_artikelkinds_table', 1),
(10, '2022_10_25_052344_create_userprofiles_table', 1),
(11, '2022_10_25_052947_create_usersendmytrashes_table', 1),
(12, '2022_11_06_042252_create_usertrackings_table', 1),
(13, '2022_11_06_044504_create_usertransactions_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan', 'jonathan@gmail.com', '$2y$10$qYVEjY8qjD1G.oGbb0uOYOOqhTWYe/JJgv9kfX2CHfdU4t8eDU4B6', NULL, 'admin', '2022-11-16 20:09:45', '2022-11-16 20:09:45'),
(2, 'Alex Smith', 'alexsmith@gmail.com', '$2y$10$zVBh.dzA8TxprYOZhBEbS.x1239vQcRmx/EKmYxfHHdFs1waMgH1C', NULL, 'customer', '2022-11-16 20:09:45', '2022-11-16 20:09:45'),
(3, 'Alkana Fares', 'alkanafares@gmail.com', '$2y$10$ZO5kbpE70qHOcPQKyULsH.zuGqhHV2FShV8ndEF9poYPpxt2P8zuG', NULL, 'customer', '2022-11-16 20:09:45', '2022-11-16 20:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `usertrackings`
--

CREATE TABLE `usertrackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Estimated_Delivery` datetime NOT NULL,
  `Shipping_By` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertransactions`
--

CREATE TABLE `usertransactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Income` int(11) NOT NULL,
  `Kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cost` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_send_my_trashes`
--

CREATE TABLE `user_send_my_trashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Province_City_District_PostalCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StreetName_Building_HouseNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Other_Details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikelabouts`
--
ALTER TABLE `artikelabouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikelkinds`
--
ALTER TABLE `artikelkinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databayars`
--
ALTER TABLE `databayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datacustomers`
--
ALTER TABLE `datacustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapengirims`
--
ALTER TABLE `datapengirims`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usertrackings`
--
ALTER TABLE `usertrackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertransactions`
--
ALTER TABLE `usertransactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_send_my_trashes`
--
ALTER TABLE `user_send_my_trashes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikelabouts`
--
ALTER TABLE `artikelabouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikelkinds`
--
ALTER TABLE `artikelkinds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `databayars`
--
ALTER TABLE `databayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datacustomers`
--
ALTER TABLE `datacustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `datapengirims`
--
ALTER TABLE `datapengirims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertrackings`
--
ALTER TABLE `usertrackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertransactions`
--
ALTER TABLE `usertransactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_send_my_trashes`
--
ALTER TABLE `user_send_my_trashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
