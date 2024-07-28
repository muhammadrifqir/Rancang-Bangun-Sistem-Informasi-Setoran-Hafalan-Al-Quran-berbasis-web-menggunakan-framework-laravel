-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 05:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mardiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `no_telp`, `email`, `alamat`, `image`, `created_at`, `updated_at`) VALUES
(1, '000353674747585', 'Muhammad Rifqi Robbani', 'Bogor', '2001-06-18', 'Laki-laki', '081293811979', 'muhammadrobbani787@gmail.com', 'Cibinong', NULL, '2024-06-16 06:50:38', '2024-07-23 15:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `hafalan`
--

CREATE TABLE `hafalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `surat_dari` varchar(65) NOT NULL,
  `ayat_dari` int(11) NOT NULL,
  `hal_dari` int(11) NOT NULL,
  `surat_ke` varchar(65) NOT NULL,
  `ayat_ke` int(11) NOT NULL,
  `hal_ke` int(11) NOT NULL,
  `jumlah` varchar(65) DEFAULT NULL,
  `akumulasi_keseluruhan` varchar(65) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `santri_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hafalan`
--

INSERT INTO `hafalan` (`id`, `tgl`, `waktu`, `surat_dari`, `ayat_dari`, `hal_dari`, `surat_ke`, `ayat_ke`, `hal_ke`, `jumlah`, `akumulasi_keseluruhan`, `keterangan`, `santri_id`, `created_at`, `updated_at`) VALUES
(1, '2023-03-15', '08:00:00', 'Al Fatihah', 1, 1, 'An Nisa', 23, 81, '4 Juz ', '4 Juz', 'Mumtaz', 1, '2023-03-15 01:20:00', '2023-03-15 01:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ujians`
--

CREATE TABLE `jadwal_ujians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_akademik` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `keterangan` varchar(65) DEFAULT NULL,
  `mustami'_1` varchar(255) NOT NULL,
  `mustami'_2` varchar(255) DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `santri_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_ujians`
--

INSERT INTO `jadwal_ujians` (`id`, `tahun_akademik`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `keterangan`, `mustami'_1`, `mustami'_2`, `kategori_id`, `santri_id`, `created_at`, `updated_at`) VALUES
(1, '2023/2024', '2023-05-15', '08:00:00', '08:20:00', '6 Juz 10 Halaman', 'Muhammad Rifqi Robbani', NULL, 1, 1, '2023-05-13 20:58:52', '2023-05-13 21:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(65) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Ujian Tengah Semester', '2024-07-26 06:36:06', '2024-07-26 06:36:06'),
(2, 'Ujian Akhir Semester', '2024-07-26 06:36:33', '2024-07-26 06:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'VII', '2024-07-24 09:06:59', '2024-07-24 09:06:59'),
(2, 'VIII', '2024-07-24 09:07:28', '2024-07-24 09:07:28'),
(3, 'IX', '2024-07-24 09:07:41', '2024-07-24 09:07:41'),
(4, 'X', '2024-07-24 09:07:51', '2024-07-24 09:07:51'),
(5, 'XI', '2024-07-24 09:08:04', '2024-07-24 09:08:04'),
(6, 'XII', '2024-07-24 09:08:16', '2024-07-24 09:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asrama` varchar(255) NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `asrama`, `guru_id`, `created_at`, `updated_at`) VALUES
(1, 'Umar bin Khattab', 1, '2024-07-23 15:31:44', '2024-07-23 15:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2024_06_01_035055_create_sessions_table', 1),
(10, '2024_06_01_040722_add_role_to_users_table', 1),
(11, '2024_06_16_000357_create_kategori_table', 1),
(12, '2024_06_16_000514_create_guru_table', 1),
(13, '2024_06_16_001029_create_ujian_table', 1),
(14, '2024_06_16_001305_create_surat_table', 1),
(15, '2024_06_16_001548_create_kelompok_table', 1),
(16, '2024_06_16_001939_create_santri_table', 1),
(17, '2024_06_16_002629_create_hafalan_table', 1),
(18, '2024_06_16_003210_create_kehadiran_table', 1),
(19, '2024_06_16_003509_create_form_nilai_table', 1),
(20, '2024_06_16_003720_create_nilai_table', 1),
(21, '2024_07_26_124436_create_jadwal_ujians_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_hafalan` varchar(65) DEFAULT NULL,
  `hafalan_dibaca` varchar(65) DEFAULT NULL,
  `nilai_hafalan` int(11) DEFAULT NULL,
  `adab` int(11) DEFAULT NULL,
  `tajwid` int(11) DEFAULT NULL,
  `kelancaran` int(11) DEFAULT NULL,
  `fashohah` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `rata_rata` double DEFAULT NULL,
  `santri_id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_ujian_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `jumlah_hafalan`, `hafalan_dibaca`, `nilai_hafalan`, `adab`, `tajwid`, `kelancaran`, `fashohah`, `jumlah`, `rata_rata`, `santri_id`, `jadwal_ujian_id`, `created_at`, `updated_at`) VALUES
(1, '6 Juz 10 Halaman', '6 Juz 10 Halaman', 98, 98, 90, 90, 90, 466, 93.2, 1, 1, '2023-05-13 20:58:52', '2024-07-27 16:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_aktif` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `kelompok_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nis`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `email`, `status_aktif`, `image`, `kelompok_id`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, '000085236412121', 'Fauzan ', 'Jember', '2009-06-25', 'Laki-laki', 'fauzan43@gmail.com', 1, NULL, 1, 4, '2024-07-24 14:44:56', '2024-07-24 14:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7RaOG1CQL8SsG1RnTvLt91jWzzMRcothorky3QlN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGhkTk9MUEk5bFNIY2VNcXB3Tk5TamhpVHl0NTg5YzN5RkNrckRVNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODEwMCI7fX0=', 1722137366),
('dZ3n9m1tn7ZFHfIx5fJzAnNFcEzDB9Km7HXrhQ1e', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibE5lUDZEck5xbmhLWHNEYUlmalhGUWd6T0taa0xpYlc2d2xwSE5aZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODEwMC9hZG1pbi9oYWZhbGFucyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRxSUdwVEg2bUdHUDAzMmpIcU5GSEdPbDlYTDRGMGNaeDYuNVdTYWw3eFlOOWN0eHNETVlyeSI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1722072378),
('O0AL3JBIVcXLytniEamA3LQVQiqs2F1xmYxMZ5Yj', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWFQ3cjIya3VRbjJxcmhSS3N6aEwwVlhIQmJ2c1Z4U3lXRGs5SlBuWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODEwMC9hZG1pbi9uaWxhaXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkNUJra1NnUWpsaEV3UmtLMVlGbWsudWdsVFVVMUdtWXBmcjJPbURleEovVmk0OGJJelFacWEiO30=', 1722099261);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(45) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `no_surat`, `nama_surat`, `created_at`, `updated_at`) VALUES
(1, '1', 'Al Fatihah', NULL, NULL),
(2, '2', 'Al Baqarah', NULL, NULL),
(3, '3', 'Ali \'Imran', NULL, NULL),
(4, '4', 'An Nisa', NULL, NULL),
(5, '5', 'Al Ma\'idah', NULL, NULL),
(6, '6', 'Al An\'am', NULL, NULL),
(7, '7', 'Al A\'raf', NULL, NULL),
(8, '8', 'Al Anfal', NULL, NULL),
(9, '9', 'At Taubah', NULL, NULL),
(10, '10', 'Yunus', NULL, NULL),
(11, '11', 'Hud', NULL, NULL),
(12, '12', 'Yusuf', NULL, NULL),
(13, '13', 'Ar Ra\'d', NULL, NULL),
(14, '14', 'Ibrahim', NULL, NULL),
(15, '15', 'Al Hijr', NULL, NULL),
(16, '16', 'An Nahl', NULL, NULL),
(17, '17', 'Al Isra', NULL, NULL),
(18, '18', 'Al Kahf', NULL, NULL),
(19, '19', 'Maryam', NULL, NULL),
(20, '20', 'Taha', NULL, NULL),
(21, '21', 'Al Anbiya\'', NULL, NULL),
(22, '22', 'Al Hajj', NULL, NULL),
(23, '23', 'Al Mu\'munin', NULL, NULL),
(24, '24', 'An Nur', NULL, NULL),
(25, '25', 'Al Furqan', NULL, NULL),
(26, '26', 'Asy Syu\'ara', NULL, NULL),
(27, '27', 'An Naml', NULL, NULL),
(28, '28', 'Al Qasas', NULL, NULL),
(29, '29', 'Al \'Ankabut', NULL, NULL),
(30, '30', 'Ar Rum', NULL, NULL),
(31, '31', 'Luqman', NULL, NULL),
(32, '32', 'As Sajdah', NULL, NULL),
(33, '33', 'Al Ahzab', NULL, NULL),
(34, '34', 'Saba\'', NULL, NULL),
(35, '35', 'Fatir', NULL, NULL),
(36, '36', 'Yasin', NULL, NULL),
(37, '37', 'As Saffat', NULL, NULL),
(38, '38', 'Sad', NULL, NULL),
(39, '39', 'Az Zumar', NULL, NULL),
(40, '40', 'Gafir', NULL, NULL),
(41, '41', 'Fussilat', NULL, NULL),
(42, '42', 'Asy Syura', NULL, NULL),
(43, '43', 'Az Zuhruf', NULL, NULL),
(44, '44', 'Ad Dukhan', NULL, NULL),
(45, '45', 'Al Jasiyah', NULL, NULL),
(46, '46', 'Al Ahqaf', NULL, NULL),
(47, '47', 'Muhammad', NULL, NULL),
(48, '48', 'Al Fath', NULL, NULL),
(49, '49', 'Al Hujurat', NULL, NULL),
(50, '50', 'Qaf', NULL, NULL),
(51, '51', 'Az Zariyat', NULL, NULL),
(52, '52', 'At Tur', NULL, NULL),
(53, '53', 'An Najm', NULL, NULL),
(54, '54', 'Al Qamar', NULL, NULL),
(55, '55', 'Ar Rahman', NULL, NULL),
(56, '56', 'Al Waqi\'ah', NULL, NULL),
(57, '57', 'Al Hadid', NULL, NULL),
(58, '58', 'Al Mujadalah', NULL, NULL),
(59, '59', 'Al Hasyr', NULL, NULL),
(60, '60', 'Al Mumtahanah', NULL, NULL),
(61, '61', 'As Saff', NULL, NULL),
(62, '62', 'Al Jumu\'ah', NULL, NULL),
(63, '63', 'Al Munafiqun', NULL, NULL),
(64, '64', 'At Tagabun', NULL, NULL),
(65, '65', 'At Talaq', NULL, NULL),
(66, '66', 'At Tahrim', NULL, NULL),
(67, '67', 'Al Mulk', NULL, NULL),
(68, '68', 'Al Qalam', NULL, NULL),
(69, '69', 'Al Haqqah', NULL, NULL),
(70, '70', 'Al Ma\'arij', NULL, NULL),
(71, '71', 'Nuh', NULL, NULL),
(72, '72', 'Al Jinn', NULL, NULL),
(73, '73', 'Al Muzzammil', NULL, NULL),
(74, '74', 'Al Muddassir', NULL, NULL),
(75, '75', 'Al Qiyamah', NULL, NULL),
(76, '76', 'Al Insan', NULL, NULL),
(77, '77', 'Al Mursalat', NULL, NULL),
(78, '78', 'An Naba\'', NULL, NULL),
(79, '79', 'An Naziat', NULL, NULL),
(80, '80', 'Abasa', NULL, NULL),
(81, '81', 'At Takwir', NULL, NULL),
(82, '82', 'Al Infitar', NULL, NULL),
(83, '83', 'Al Mutaffifin', NULL, NULL),
(84, '84', 'Al Insyiqaq', NULL, NULL),
(85, '85', 'Al Buruj', NULL, NULL),
(86, '86', 'At Tariq', NULL, NULL),
(87, '87', 'Al A\'la', NULL, NULL),
(88, '88', 'Al Gasyiyah', NULL, NULL),
(89, '89', 'Al Fajr', NULL, NULL),
(90, '90', 'Al Balad', NULL, NULL),
(91, '91', 'As Syams', NULL, NULL),
(92, '92', 'Al Lail', NULL, NULL),
(93, '93', 'Ad Dhuha', NULL, NULL),
(94, '94', 'Asy Syarh', NULL, NULL),
(95, '95', 'At Tin', NULL, NULL),
(96, '96', 'Al \'Alaq', NULL, NULL),
(97, '97', 'Al Qadr', NULL, NULL),
(98, '98', 'Al Bayyinah', NULL, NULL),
(99, '99', 'Al Zalzalah', NULL, NULL),
(100, '100', 'Al \'Adiyat', NULL, NULL),
(101, '101', 'Al Qari\'ah', NULL, NULL),
(102, '102', 'At Takasur', NULL, NULL),
(103, '103', 'Al \'Asr', NULL, NULL),
(104, '104', 'Al Humazah', NULL, NULL),
(105, '105', 'Al Fil', NULL, NULL),
(106, '106', 'Quraisy', NULL, NULL),
(107, '107', 'Al Ma\'un', NULL, NULL),
(108, '108', 'Al Kausar', NULL, NULL),
(109, '109', 'Al Kafirun', NULL, NULL),
(110, '110', 'An Nasr', NULL, NULL),
(111, '111', 'Al Lahab', NULL, NULL),
(112, '112', 'Al Ikhlas', NULL, NULL),
(113, '113', 'Al Falaq', NULL, NULL),
(114, '114', 'An Nas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademiks`
--

CREATE TABLE `tahun_akademiks` (
  `id` int(11) NOT NULL,
  `tahun_pelajaran` varchar(65) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `tahun_pelajaran`, `active`, `created_at`, `updated_at`) VALUES
(1, '2023/2024', 1, '2024-07-26 20:29:08', '2024-07-26 20:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'WALI SANTRI',
  `santri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`, `santri`) VALUES
(1, 'Admin Mardiyah', 'muhammadrobbani787@gmail.com', NULL, '$2y$12$SYpf.2E0n.9yiHXOzI/xDO.f2l21K9pVIgMDprejtyx0AQ8J.hNC.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-15 17:52:40', '2024-06-15 17:52:40', 'ADMIN', NULL),
(2, 'Muhammad Rifqi Robbani', 'rifqirobbani787@gmail.com', NULL, '$2y$12$5BkkSgQjlhEwRkK1YFmk.uglTUU1GmYpfr2OmDexJ/Vi48bIzQZqa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-26 17:08:50', '2024-07-26 17:08:50', 'GURU', NULL),
(3, 'Fauzan', 'fauzan43@gmail.com', NULL, '$2y$12$fLXuLEgDrbCtZRgqG5F/Se1Q0prLWSbCUlYXaiEswZAYlFpmUnXCG', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-26 17:11:55', '2024-07-26 17:11:55', 'SANTRI', NULL),
(4, 'Raka', 'abufauzan34@gmail.com', NULL, '$2y$12$qIGpTH6mGGP032jHqNFHGOl9XL4F0cZx6.5WSal7xYN9ctxsDMYry', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-26 23:43:11', '2024-07-26 23:47:37', 'WALI SANTRI', 'Fauzan');

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_email_unique` (`email`);

--
-- Indexes for table `hafalan`
--
ALTER TABLE `hafalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_ujians`
--
ALTER TABLE `jadwal_ujians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `santri_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hafalan`
--
ALTER TABLE `hafalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal_ujians`
--
ALTER TABLE `jadwal_ujians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
