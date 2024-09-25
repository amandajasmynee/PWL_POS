-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 06:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_13_143159_create_m_level_table', 1),
(6, '2024_09_13_144839_create_m_kategori_table', 2),
(7, '2024_09_13_145556_create_m_supplier_table', 3),
(8, '2024_09_13_151654_create_m_user_table', 4),
(9, '2024_09_13_160322_create_m_barang_user_table', 5),
(10, '2024_09_13_163110_create_t_penjualan_user_table', 6),
(11, '2024_09_13_164146_create_t_stok_user_table', 7),
(12, '2024_09_13_164836_create_t_penjualan_detail_user_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `barang_id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `barang_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`barang_id`, `kategori_id`, `barang_kode`, `barang_nama`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 'FNB001', 'Mineral Water', 3000, 5000, NULL, NULL),
(2, 1, 'FNB002', 'Bread', 8000, 12000, NULL, NULL),
(3, 1, 'FNB003', 'Milk', 15000, 20000, NULL, NULL),
(4, 1, 'FNB004', 'Instant Noodles', 10000, 13000, NULL, NULL),
(5, 1, 'FNB005', 'Black Coffee', 15000, 20000, NULL, NULL),
(6, 2, 'ELC001', 'Smartphone 64GB', 2000000, 2500000, NULL, NULL),
(7, 2, 'ELC002', 'LED TV 32 Inch', 1800000, 2300000, NULL, NULL),
(8, 2, 'ELC003', 'Laptop Core i5', 6000000, 7500000, NULL, NULL),
(9, 2, 'ELC004', 'Bluetooth Headset', 200000, 300000, NULL, NULL),
(10, 2, 'ELC005', 'Camera DSLR 24MP', 4000000, 5000000, NULL, NULL),
(11, 3, 'CLT001', 'Tee', 25000, 50000, NULL, NULL),
(12, 3, 'CLT002', 'Hoodie', 80000, 120000, NULL, NULL),
(13, 3, 'CLT003', 'Jeans', 100000, 150000, NULL, NULL),
(14, 3, 'CLT004', 'Flanel', 75000, 110000, NULL, NULL),
(15, 3, 'CLT005', 'Sneakers', 150000, 200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kategori_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_kode`, `kategori_nama`, `created_at`, `updated_at`) VALUES
(1, 'FNB', 'Food and Beverage', NULL, NULL),
(2, 'ELC', 'Electronics', NULL, NULL),
(3, 'CLT', 'Clothing', NULL, NULL),
(4, 'HNB', 'Health and Beauty', NULL, NULL),
(5, 'HNK', 'Home and Kitchen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `level_id` bigint UNSIGNED NOT NULL,
  `level_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_level`
--

INSERT INTO `m_level` (`level_id`, `level_kode`, `level_nama`, `created_at`, `updated_at`) VALUES
(1, 'ADM', 'Administrator', NULL, NULL),
(2, 'MNG', 'Manager', NULL, NULL),
(3, 'STF', 'Staff/Kasir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `supplier_id` bigint UNSIGNED NOT NULL,
  `supplier_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_supplier`
--

INSERT INTO `m_supplier` (`supplier_id`, `supplier_kode`, `supplier_nama`, `supplier_alamat`, `created_at`, `updated_at`) VALUES
(1, 'SUP-FNB01', 'Fresh Food Supplies', 'Jl. Raya Makanan No. 10, Jakarta', NULL, NULL),
(2, 'SUP-ELC01', 'ElectroTech Supplies', 'Jl. Teknologi No. 45, Bandung', NULL, NULL),
(3, 'SUP-CLT01', 'ClothMaster', 'Jl. Fashion No. 22, Surabaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `level_id`, `username`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Admin', '$2y$12$UUpmhCFGUMDnUMC3kjkV2.cjLpn5hDabgVaI51lRPMmQpb0aPdwB6', NULL, '2024-09-20 01:40:29'),
(2, 2, 'manager', 'Manager', '$2y$12$dmnrLjn/zWwYshi9yXhiLua.yY4yG6dni6s7z/18j8rsvtrHhBajq', NULL, NULL),
(3, 3, 'staff', 'Staff/Kasir', '$2y$12$GrK1NpvbTtNuSlOee2YoPuXs7KBeHeHSZpw1ZMgFv8vMR0w8bEDuq', NULL, NULL),
(5, 2, 'customer-1', 'Pelanggan', '$2y$12$sZgJX2xCU8hcfb4dfnqcgONvuOKKLf.DecpZ.omqDFFAJQXVkuSsW', NULL, NULL),
(9, 2, 'customer-2', 'Pelanggan', '$2y$12$3Uy1wBDm/VwI/mzM.iHIaOdDkndbKMWRidiacVocg31i4l2PpdFxq', NULL, NULL),
(10, 2, 'manager_dua', 'Manager 2', '$2y$12$LrXiDHq5YEp9h2JVsT.3peyP.SrI92/Mz7AjnL2chf08al/MwnlQm', '2024-09-19 05:22:46', '2024-09-19 05:22:46'),
(11, 2, 'manager22', 'Manager Dua Dua', '$2y$12$JTxcTS12nZWUvTh5Zp5t1uVqe5Ij5/iXjk5iG7uncqI3EYM6uKce.', '2024-09-19 07:17:58', '2024-09-19 07:17:58'),
(13, 2, 'manager33', 'Manager Tiga Tiga', '$2y$12$PvdhKyiBfFjaUBgWTadmweWZIEp3mLCSJzZFD0RYbIeN1VIZ8WRHS', '2024-09-19 07:30:22', '2024-09-19 07:30:22'),
(18, 2, 'manager56', 'Manager55', '$2y$12$xAWsbmT5z6PmVVqBBl1.TO5GnY1j.G7LnT5FgjvguaDrTL7bB1LBa', '2024-09-19 07:53:30', '2024-09-19 07:53:30'),
(19, 2, 'manager12', 'Manager11', '$2y$12$mD/jwnkpPN7oE2D4K4BoTevgKOCqoM67XdRXdXc0kHjPdgP0iJiyK', '2024-09-19 07:59:42', '2024-09-19 07:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `pembeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan`
--

INSERT INTO `t_penjualan` (`penjualan_id`, `user_id`, `pembeli`, `penjualan_kode`, `penjualan_tanggal`, `created_at`, `updated_at`) VALUES
(1, 3, 'Daniel', 'TR001', '2024-08-08 00:00:00', NULL, NULL),
(2, 3, 'Justin', 'TR002', '2024-08-08 00:00:00', NULL, NULL),
(3, 3, 'Juno', 'TR003', '2024-08-08 00:00:00', NULL, NULL),
(4, 3, 'Barack', 'TR004', '2024-08-13 00:00:00', NULL, NULL),
(5, 3, 'Ethan', 'TR005', '2024-08-13 00:00:00', NULL, NULL),
(6, 3, 'Lily', 'TR006', '2024-08-17 00:00:00', NULL, NULL),
(7, 3, 'Taylor', 'TR007', '2024-08-17 00:00:00', NULL, NULL),
(8, 3, 'Sabrina', 'TR008', '2024-08-17 00:00:00', NULL, NULL),
(9, 3, 'Niki', 'TR009', '2024-08-19 00:00:00', NULL, NULL),
(10, 3, 'Shawn', 'TR010', '2024-08-19 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_detail`
--

CREATE TABLE `t_penjualan_detail` (
  `detail_id` bigint UNSIGNED NOT NULL,
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan_detail`
--

INSERT INTO `t_penjualan_detail` (`detail_id`, `penjualan_id`, `barang_id`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2500000, 3, NULL, NULL),
(2, 1, 2, 240000, 4, NULL, NULL),
(3, 1, 3, 180000, 5, NULL, NULL),
(4, 2, 4, 50000, 7, NULL, NULL),
(5, 2, 5, 750000, 2, NULL, NULL),
(6, 2, 6, 150000, 5, NULL, NULL),
(7, 3, 7, 400000, 4, NULL, NULL),
(8, 3, 8, 3000000, 3, NULL, NULL),
(9, 3, 9, 400000, 3, NULL, NULL),
(10, 4, 10, 350000, 3, NULL, NULL),
(11, 4, 11, 100000, 4, NULL, NULL),
(12, 4, 12, 5000000, 9, NULL, NULL),
(13, 5, 13, 700000, 6, NULL, NULL),
(14, 5, 14, 230000, 2, NULL, NULL),
(15, 5, 15, 45000, 3, NULL, NULL),
(16, 6, 15, 70000, 2, NULL, NULL),
(17, 6, 14, 170000, 4, NULL, NULL),
(18, 6, 13, 40000, 3, NULL, NULL),
(19, 7, 12, 20000, 5, NULL, NULL),
(20, 7, 11, 50000, 2, NULL, NULL),
(21, 7, 10, 4000, 4, NULL, NULL),
(22, 8, 9, 75000, 3, NULL, NULL),
(23, 8, 8, 150000, 5, NULL, NULL),
(24, 8, 7, 550000, 6, NULL, NULL),
(25, 9, 6, 60000, 3, NULL, NULL),
(26, 9, 5, 40000, 2, NULL, NULL),
(27, 9, 4, 90000, 4, NULL, NULL),
(28, 10, 3, 200000, 5, NULL, NULL),
(29, 10, 2, 450000, 6, NULL, NULL),
(30, 10, 1, 25000, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stok`
--

CREATE TABLE `t_stok` (
  `stok_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `stok_tanggal` datetime NOT NULL,
  `stok_jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_stok`
--

INSERT INTO `t_stok` (`stok_id`, `supplier_id`, `barang_id`, `user_id`, `stok_tanggal`, `stok_jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-06-04 00:00:00', 190, NULL, NULL),
(2, 1, 2, 1, '2024-06-04 00:00:00', 100, NULL, NULL),
(3, 1, 3, 1, '2024-06-04 00:00:00', 170, NULL, NULL),
(4, 1, 4, 1, '2024-06-04 00:00:00', 130, NULL, NULL),
(5, 1, 5, 1, '2024-06-04 00:00:00', 150, NULL, NULL),
(6, 2, 6, 1, '2024-06-14 00:00:00', 190, NULL, NULL),
(7, 2, 7, 1, '2024-06-14 00:00:00', 100, NULL, NULL),
(8, 2, 8, 1, '2024-06-14 00:00:00', 170, NULL, NULL),
(9, 2, 9, 1, '2024-06-14 00:00:00', 130, NULL, NULL),
(10, 3, 10, 1, '2024-06-14 00:00:00', 150, NULL, NULL),
(11, 3, 11, 1, '2024-06-18 00:00:00', 190, NULL, NULL),
(12, 3, 12, 1, '2024-06-18 00:00:00', 100, NULL, NULL),
(13, 3, 13, 1, '2024-06-18 00:00:00', 170, NULL, NULL),
(14, 3, 14, 1, '2024-06-18 00:00:00', 130, NULL, NULL),
(15, 3, 15, 1, '2024-06-18 00:00:00', 150, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD UNIQUE KEY `m_barang_barang_kode_unique` (`barang_kode`),
  ADD KEY `m_barang_kategori_id_index` (`kategori_id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `m_kategori_kategori_kode_unique` (`kategori_kode`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`level_id`),
  ADD UNIQUE KEY `m_level_level_kode_unique` (`level_kode`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `m_supplier_supplier_kode_unique` (`supplier_kode`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `m_user_username_unique` (`username`),
  ADD KEY `m_user_level_id_index` (`level_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD UNIQUE KEY `t_penjualan_penjualan_kode_unique` (`penjualan_kode`),
  ADD KEY `t_penjualan_user_id_index` (`user_id`);

--
-- Indexes for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `t_penjualan_detail_penjualan_id_index` (`penjualan_id`),
  ADD KEY `t_penjualan_detail_barang_id_index` (`barang_id`);

--
-- Indexes for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD PRIMARY KEY (`stok_id`),
  ADD KEY `t_stok_supplier_id_index` (`supplier_id`),
  ADD KEY `t_stok_barang_id_index` (`barang_id`),
  ADD KEY `t_stok_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `barang_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `supplier_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `penjualan_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  MODIFY `detail_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_stok`
--
ALTER TABLE `t_stok`
  MODIFY `stok_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD CONSTRAINT `m_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`);

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `m_level` (`level_id`);

--
-- Constraints for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD CONSTRAINT `t_penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD CONSTRAINT `t_penjualan_detail_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_penjualan_detail_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `t_penjualan` (`penjualan_id`);

--
-- Constraints for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD CONSTRAINT `t_stok_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_stok_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `m_supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stok_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
