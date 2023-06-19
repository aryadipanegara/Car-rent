-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2023 pada 17.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'super-admin', 'Wow'),
(2, 'user', 'Hello World'),
(3, 'admin', 'Site Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-10 17:02:47', 1),
(2, '::1', 'emailbantu0101@gmail.com', NULL, '2021-01-10 17:25:10', 0),
(3, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-10 17:25:23', 1),
(4, '::1', 'cobacoba@gmail.com', 2, '2021-01-10 17:34:47', 1),
(5, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-10 19:37:41', 1),
(6, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-10 19:53:31', 1),
(7, '::1', 'cobacoba@gmail.com', 2, '2021-01-10 19:56:36', 1),
(8, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-10 21:40:11', 1),
(9, '::1', 'cobacoba@gmail.com', 2, '2021-01-10 21:47:03', 1),
(10, '::1', 'cobacoba@gmail.com', 2, '2021-01-11 00:03:36', 1),
(11, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-11 00:04:40', 1),
(12, '::1', 'cobacoba@gmail.com', 2, '2021-01-11 00:34:33', 1),
(13, '::1', 'cobacoba@gmail.com', 2, '2021-01-11 02:29:19', 1),
(14, '::1', 'cobacoba@gmail.com', 2, '2021-01-11 16:40:58', 1),
(15, '::1', 'cobacoba@gmail.com', 2, '2021-01-11 19:43:36', 1),
(16, '::1', 'emailbantu0101@gmail.com', NULL, '2021-01-12 03:01:34', 0),
(17, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-12 03:01:48', 1),
(18, '::1', 'cobacoba@gmail.com', 2, '2021-01-12 03:03:40', 1),
(19, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-12 22:05:40', 1),
(20, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-13 04:11:48', 1),
(21, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-20 09:12:17', 1),
(22, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-20 11:38:58', 1),
(23, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-25 05:13:08', 1),
(24, '::1', 'emailbantu0101@gmail.com', NULL, '2021-01-25 10:00:49', 0),
(25, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-25 10:01:08', 1),
(26, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-25 12:47:48', 1),
(27, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-26 09:21:44', 1),
(28, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-27 03:14:31', 1),
(29, '::1', 'emaibantu0101@gmail.com', NULL, '2021-01-27 08:15:42', 0),
(30, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-27 08:25:26', 1),
(31, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-27 09:31:56', 1),
(32, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-27 19:22:21', 1),
(33, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-28 00:14:44', 1),
(34, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-28 05:22:14', 1),
(35, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-28 09:30:16', 1),
(36, '::1', 'emailbantu0101@gmail.com', 1, '2021-01-28 16:49:37', 1),
(37, '::1', 'emailbantu0101@gmail.com', 3, '2021-01-28 21:18:42', 1),
(38, '::1', 'emailbantu0101@gmail.com', NULL, '2021-01-28 21:20:11', 0),
(39, '::1', 'emailbantu0101@gmail.com', 3, '2021-01-28 21:20:27', 1),
(40, '::1', 'emailbantu0101@gmail.com', 3, '2021-01-28 21:31:58', 1),
(41, '::1', 'emailbantu0101@gmail.com', 3, '2021-01-28 22:14:21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Site Super Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1610295623, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_driver`
--

CREATE TABLE `tabel_driver` (
  `driver_id` int(11) NOT NULL,
  `driver_nama` varchar(100) DEFAULT NULL,
  `driver_jenis_kelamin` varchar(6) DEFAULT NULL,
  `driver_alamat` varchar(100) DEFAULT NULL,
  `driver_nohp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_driver`
--

INSERT INTO `tabel_driver` (`driver_id`, `driver_nama`, `driver_jenis_kelamin`, `driver_alamat`, `driver_nohp`) VALUES
(1, 'Ayyub Zikri', 'Male', 'Lubuk Buaya Padang', '089539583985'),
(2, 'Rahman Deswanda', 'Male', 'Ujung Gurun Padang', '098080064694'),
(3, 'Muhammad Asnur', 'Male', 'Belakang Azkia Padang', '089593859358');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis`
--

CREATE TABLE `tabel_jenis` (
  `jenis_id` int(11) NOT NULL,
  `jenis_nama` varchar(100) DEFAULT NULL,
  `jenis_create` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_jenis`
--

INSERT INTO `tabel_jenis` (`jenis_id`, `jenis_nama`, `jenis_create`) VALUES
(1, 'Sport', '2021-01-03 14:29:53'),
(2, 'Sedan', '2021-01-05 06:20:58'),
(6, 'Convertible', '2021-01-25 20:17:37'),
(7, 'Coupe', '2021-01-25 20:18:03'),
(8, 'MPV', '2021-01-25 20:18:21'),
(9, 'Off Road', '2021-01-25 20:18:47'),
(10, 'Coba', '2021-01-29 04:17:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_merk`
--

CREATE TABLE `tabel_merk` (
  `merk_id` int(11) NOT NULL,
  `merk_nama` varchar(100) DEFAULT NULL,
  `merk_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_merk`
--

INSERT INTO `tabel_merk` (`merk_id`, `merk_nama`, `merk_create`) VALUES
(1, 'Porsche', '2021-01-03 06:19:13'),
(2, 'Bugatti', '2021-01-03 07:58:39'),
(3, 'Audi', '2021-01-20 19:40:53'),
(4, 'Porsche', '2021-01-25 20:13:10'),
(5, 'Honda', '2021-01-25 20:13:23'),
(6, 'Mitsubishi', '2021-01-25 20:13:38'),
(7, 'Suzuki', '2021-01-25 20:13:49'),
(8, 'Nissan', '2021-01-25 20:14:20'),
(9, 'Jeep', '2021-01-25 20:15:01'),
(10, 'Mercedez Benz', '2021-01-25 20:15:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mobil`
--

CREATE TABLE `tabel_mobil` (
  `mobil_id` int(11) NOT NULL,
  `mobil_no_polisi` char(10) DEFAULT NULL,
  `mobil_id_merk` int(11) DEFAULT NULL,
  `mobil_id_jenis` int(11) DEFAULT NULL,
  `mobil_tahun` varchar(5) DEFAULT NULL,
  `mobil_harga_sewa` int(11) DEFAULT NULL,
  `mobil_kapasitas` int(11) DEFAULT NULL,
  `mobil_gambar` varchar(100) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_mobil`
--

INSERT INTO `tabel_mobil` (`mobil_id`, `mobil_no_polisi`, `mobil_id_merk`, `mobil_id_jenis`, `mobil_tahun`, `mobil_harga_sewa`, `mobil_kapasitas`, `mobil_gambar`) VALUES
(1, 'A 12 YA', 3, 1, '2000', 2500000, 2, 'Audi.png'),
(3, 'B 117 BY', 4, 1, '2023', 2800000, 2, 'taycan.png'),
(4, 'B 1996 YZ', 2, 1, '2023', 3000000, 2, 'bugatti.png'),
(6, 'BA 1234 CT', 10, 6, '2020', 300000, 4, 'default.png'),
(7, 'BA 4231 RR', 4, 7, '2019', 250000, 4, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penyewa`
--

CREATE TABLE `tabel_penyewa` (
  `penyewa_id` int(11) NOT NULL,
  `penyewa_nama` varchar(50) DEFAULT NULL,
  `penyewa_email` varchar(100) DEFAULT NULL,
  `penyewa_password` varchar(100) DEFAULT NULL,
  `penyewa_alamat` varchar(100) DEFAULT NULL,
  `penyewa_no_telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_penyewa`
--

INSERT INTO `tabel_penyewa` (`penyewa_id`, `penyewa_nama`, `penyewa_email`, `penyewa_password`, `penyewa_alamat`, `penyewa_no_telp`) VALUES
(1, 'Alwan Aditia Duha', 'alwanaditia3101@gmail.com', 'Male', 'Siteba Padang', '089832989842'),
(2, 'Puan Maharani', 'puangokil0101@gmail.com', 'Female', 'Jakarta Pusat', '089892844242'),
(3, 'Adil Saputra Duha', 'adilsaputra0101@gmail.com', 'Male', 'Padang', '0849894298424');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sewa`
--

CREATE TABLE `tabel_sewa` (
  `sewa_no_nota` int(11) NOT NULL,
  `sewa_tgl` date DEFAULT NULL,
  `sewa_tglkembali` date DEFAULT NULL,
  `sewa_id_penyewa` int(11) DEFAULT NULL,
  `sewa_id_mobil` int(11) DEFAULT NULL,
  `sewa_lama` int(11) DEFAULT NULL,
  `sewa_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_sewa`
--

INSERT INTO `tabel_sewa` (`sewa_no_nota`, `sewa_tgl`, `sewa_tglkembali`, `sewa_id_penyewa`, `sewa_id_mobil`, `sewa_lama`, `sewa_total`) VALUES
(6, '2021-01-01', NULL, 3, 6, 1, 300000),
(7, '2021-01-30', NULL, 2, 1, 2, 200000),
(8, '2021-01-30', NULL, 1, 7, 2, 500000),
(9, '2023-05-30', '2023-06-06', 1, 1, 0, 0),
(10, '2023-06-20', '2023-06-22', 1, 1, 0, 0),
(11, '0000-00-00', '0000-00-00', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `password_hash`, `image`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin@email.co,', '312110396', NULL, '123', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-28 21:10:35', '2021-01-28 21:10:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_driver`
--
ALTER TABLE `tabel_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indeks untuk tabel `tabel_jenis`
--
ALTER TABLE `tabel_jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `tabel_merk`
--
ALTER TABLE `tabel_merk`
  ADD PRIMARY KEY (`merk_id`);

--
-- Indeks untuk tabel `tabel_mobil`
--
ALTER TABLE `tabel_mobil`
  ADD PRIMARY KEY (`mobil_id`),
  ADD KEY `mobil_id_merk` (`mobil_id_merk`),
  ADD KEY `mobil_id_jenis` (`mobil_id_jenis`);

--
-- Indeks untuk tabel `tabel_penyewa`
--
ALTER TABLE `tabel_penyewa`
  ADD PRIMARY KEY (`penyewa_id`);

--
-- Indeks untuk tabel `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  ADD PRIMARY KEY (`sewa_no_nota`),
  ADD KEY `sewa_id_mobil` (`sewa_id_mobil`),
  ADD KEY `sewa_id_penyewa` (`sewa_id_penyewa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_driver`
--
ALTER TABLE `tabel_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_jenis`
--
ALTER TABLE `tabel_jenis`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_merk`
--
ALTER TABLE `tabel_merk`
  MODIFY `merk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_mobil`
--
ALTER TABLE `tabel_mobil`
  MODIFY `mobil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_penyewa`
--
ALTER TABLE `tabel_penyewa`
  MODIFY `penyewa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  MODIFY `sewa_no_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_mobil`
--
ALTER TABLE `tabel_mobil`
  ADD CONSTRAINT `tabel_mobil_ibfk_1` FOREIGN KEY (`mobil_id_merk`) REFERENCES `tabel_merk` (`merk_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_mobil_ibfk_2` FOREIGN KEY (`mobil_id_jenis`) REFERENCES `tabel_jenis` (`jenis_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  ADD CONSTRAINT `tabel_sewa_ibfk_1` FOREIGN KEY (`sewa_id_mobil`) REFERENCES `tabel_mobil` (`mobil_id`),
  ADD CONSTRAINT `tabel_sewa_ibfk_2` FOREIGN KEY (`sewa_id_penyewa`) REFERENCES `tabel_penyewa` (`penyewa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
