-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2023 pada 17.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irmantaqwa_crud2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Fachrul Prasetyo', 'L', 'Tangerang', '1998-10-09', 'Jl. H. Mean VI', '083893613858', 'fachrul.jpg', '2023-02-23 06:44:31', '2023-02-23 10:33:40'),
(2, 'Arman Fajar', 'L', 'Jakarta', '1998-04-30', 'Jl. H. Mean VI', '0895400637596', 'abang.jpg', '2023-02-23 06:52:35', '2023-02-23 06:52:35'),
(4, 'Krisna Wijaya Kusuma', 'L', 'Tangerang', '2004-11-01', 'Jl. H. Mean IV', '089637545881', 'baim.jpg', '2023-02-23 07:23:26', '2023-02-23 07:23:48'),
(5, 'Siti Prihatiningsih', 'P', 'Demak', '2001-06-27', 'Jl. H. Mean VIII', '054487755664', 'atin.jpeg', '2023-02-23 07:26:04', '2023-02-23 10:25:44'),
(6, 'Muhammad Ryandi Adhi Saputro', 'L', 'Tangerang', '2004-06-23', 'Jl. H. Mean IV', '089643923465', 'ryand.jpg', '2023-02-23 10:09:34', '2023-02-23 10:27:17'),
(7, 'Fitara Zean Safitri', 'P', 'Tangerang', '2002-01-26', 'Jl. H. Mean VI', '089652085699', 'tara.jpg', '2023-02-23 10:19:58', '2023-02-23 10:26:54'),
(8, 'Putri Mutiara Suwandi', 'P', 'Tangerang', '2003-02-19', 'Jl. H. Mean VI', '089623382874', NULL, '2023-02-23 10:21:37', '2023-02-23 10:21:37'),
(9, 'Muhammad Rusdy Ali', 'L', 'Tangerang', '2003-11-10', 'Jl. Karyawan III', '089653839632', NULL, '2023-02-23 10:23:48', '2023-02-23 10:23:48'),
(10, 'Ridwan Ardiansyah', 'L', 'Tangerang', '2003-10-23', 'Jl. H. Mean IV', '089629091435', NULL, '2023-02-23 10:25:21', '2023-02-23 10:25:21'),
(11, 'Putra', 'L', 'Tangerang', '2003-02-23', 'Jl. H. Mean V', '088224652829', 'putra.jpg', '2023-02-23 10:29:25', '2023-02-23 10:29:25'),
(12, 'Septiyana Ernawati', 'P', 'Tangerang', '2000-12-23', 'Jl. H. Mean V', '083804160193', 'septi.jpg', '2023-02-23 10:32:58', '2023-02-23 10:32:58'),
(13, 'Ziyan Ilham Ardiansyah', 'L', 'Tangerang', '2002-07-07', 'Jl. H. Mean VI', '021', NULL, '2023-02-23 10:36:47', '2023-02-23 10:36:47'),
(14, 'Aditya Romadhon', 'L', 'Tangerang', '2002-12-01', 'Jl. H. Mean IV', '085776584611', 'pisang.jpg', '2023-02-23 10:38:36', '2023-02-23 10:38:36'),
(15, 'Siti Munawaroh', 'P', 'Brebes', '2003-12-17', 'Jl. H. Mean VI', '0895334498836', NULL, '2023-02-23 10:40:09', '2023-02-23 10:40:09'),
(16, 'Muhammad Adam Ramadhan', 'L', 'Jakarta', '1997-01-10', 'Jl. H. Mean V', '082112674199', 'dams.jpg', '2023-02-23 10:42:51', '2023-02-23 10:42:51'),
(17, 'Deswita Ramadhani', 'P', 'Tangerang', '1999-12-12', 'Jl. H. Mean V', '089667286103', 'desi.jpg', '2023-02-23 10:44:51', '2023-02-23 10:44:51'),
(18, 'Rofiq Syahro Ramdhan', 'L', 'Jakarta', '2007-10-05', 'Jl. H. Mean V', '081291490846', NULL, '2023-02-23 10:46:41', '2023-02-23 10:46:41'),
(19, 'Luthfi Nurhakim', 'L', 'Jakarta', '2002-07-09', 'Jl. H. Mean IV', '089652857231', 'bopak.jpg', '2023-02-23 10:48:49', '2023-02-23 10:48:49'),
(20, 'Chikal Wirdianti Mustafa', 'P', 'Tangerang', '2004-04-19', 'Jl. H. Mean IV', '088297870196', NULL, '2023-02-23 10:52:40', '2023-02-23 10:52:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_08_155018_create_anggota_table', 1),
(6, '2023_02_17_031708_create_surat_masuk_table', 1),
(7, '2023_02_19_020457_create_surat_keluar_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tujuan_surat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_surat`, `tgl_surat`, `tujuan_surat`, `perihal`, `file_surat`, `created_at`, `updated_at`) VALUES
(1, '001', '2023-02-22', 'IKRIMAH', 'Undangan Milad ke -9', 'CV Fachrul Prasetyo_done.pdf', '2023-02-23 11:40:33', '2023-02-23 11:40:33'),
(2, '002', '2023-02-20', 'IRMANUFA', 'Undangan Milad ke -9', 'Daftar_Nilai_Keseluruhan.pdf', '2023-02-23 11:42:36', '2023-02-23 11:42:36'),
(3, '003', '2023-02-01', 'Pengurus DKM', 'Rapat Isra Mi\'raj', 'Bebas Narkoba_1912510599_Fachrul Prasetyo.pdf', '2023-02-23 11:44:16', '2023-02-23 11:44:31'),
(4, '004', '2023-01-09', 'DKM Masjid Jami\' Nurut Taqwa', 'Rapat', 'Daftar_Nilai_Keseluruhan.pdf', '2023-02-25 20:00:23', '2023-02-25 20:00:23'),
(5, '005', '2023-01-23', 'IRMANUFA', 'Undangan', 'CV. nabila asyifa rachmi.pdf', '2023-02-25 20:01:09', '2023-02-25 20:01:09'),
(6, '006', '2023-02-26', 'IKRIMAH', 'Rapat Ziarah', 'CV Fachrul Prasetyo_done.pdf', '2023-02-25 20:01:43', '2023-02-25 20:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `asal_surat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_surat`, `tgl_surat`, `tgl_terima`, `asal_surat`, `perihal`, `penerima`, `file_surat`, `created_at`, `updated_at`) VALUES
(1, '001', '2023-02-01', '2023-02-04', 'IKRIMAH', 'Isra Mi\'raj', 'Alya', 'Daftar_Nilai_Keseluruhan.pdf', '2023-02-23 11:14:55', '2023-02-23 11:14:55'),
(2, '002', '2023-02-03', '2023-02-08', 'IRMANUFA', 'Maulid Nabi Muhammad SAW 1444 H', 'Krisna Wijaya', 'Bebas Narkoba_1912510599_Fachrul Prasetyo.pdf', '2023-02-23 11:35:33', '2023-02-23 11:35:33'),
(3, '003', '2023-01-12', '2023-01-12', 'DKM', 'Rapat', 'Alya', 'CV Fachrul Prasetyo_done.pdf', '2023-02-25 01:39:53', '2023-02-25 01:39:53'),
(4, '004', '2023-02-20', '2023-02-24', 'Majelis Nurul Qolbi', 'Undangan Isra Mi\'raj', 'Alya', 'sertifikat_syarat_TA.pdf', '2023-02-25 06:03:37', '2023-02-25 06:03:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ikhwan', 'ikhwan@gmail.com', NULL, '$2y$10$WDxPem5CVOihQHB8pZ48BOvORpTl06usMhRbPrTCN5QGQlJCMOFCO', NULL, '2023-02-23 06:30:29', '2023-02-23 06:30:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
