-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2025 pada 11.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `production`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan_kos`
--

CREATE TABLE `aturan_kos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `aturan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'accepted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `room_id`, `order_number`, `name`, `number`, `check_in`, `status`, `created_at`, `updated_at`) VALUES
(1, 101, 3, 'ORD-20250604-00001', 'Ami Fujiati', '0878663968484', '2025-06-12', 'accepted', '2025-06-03 17:00:35', '2025-06-03 17:00:35'),
(2, 101, 2, 'ORD-20250604-00002', 'Ami Fujiati', '087863968484', '2025-06-15', 'accepted', '2025-06-03 17:00:59', '2025-06-03 17:00:59'),
(3, 101, 1, 'ORD-20250604-00003', 'Ami Fujiati', '087863968484', '2025-06-04', 'accepted', '2025-06-03 17:01:12', '2025-06-03 17:01:12'),
(4, 102, 4, 'ORD-20250604-00004', 'Zainul Fahmi', '08786396832', '2025-06-04', 'accepted', '2025-06-03 19:49:52', '2025-06-03 19:49:52'),
(5, 102, 5, 'ORD-20250604-00005', 'Zainul Fahmi', '08786396832', '2025-06-04', 'accepted', '2025-06-03 19:50:12', '2025-06-03 19:50:12'),
(6, 102, 6, 'ORD-20250604-00006', 'Zainul Fahmi', '08786396832', '2025-06-04', 'accepted', '2025-06-03 19:50:24', '2025-06-03 19:50:24'),
(7, 103, 7, 'ORD-20250604-00007', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:55:26', '2025-06-03 19:55:26'),
(8, 103, 8, 'ORD-20250604-00008', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:56:07', '2025-06-03 19:56:07'),
(9, 103, 9, 'ORD-20250604-00009', 'adli naufal ramadhan', 'adli naufal ramadhan', '2025-06-12', 'accepted', '2025-06-03 19:56:24', '2025-06-03 19:56:24'),
(10, 104, 10, 'ORD-20250604-00010', 'Puspita rini', '081703538397', '2025-06-04', 'accepted', '2025-06-03 20:18:02', '2025-06-03 20:18:02'),
(11, 104, 11, 'ORD-20250604-00011', 'Puspita rini', '081703538397', '2025-06-04', 'accepted', '2025-06-03 20:18:17', '2025-06-03 20:18:17'),
(12, 104, 12, 'ORD-20250604-00012', 'Puspita rini', '081703538397', '2025-06-04', 'accepted', '2025-06-03 20:18:31', '2025-06-03 20:18:31'),
(13, 105, 13, 'ORD-20250604-00013', 'Arjun', '085333008902', '2025-06-04', 'accepted', '2025-06-03 20:39:52', '2025-06-03 20:39:52'),
(14, 105, 14, 'ORD-20250604-00014', 'Arjun', '085333008902', '2025-06-13', 'accepted', '2025-06-03 20:40:10', '2025-06-03 20:40:10'),
(15, 105, 15, 'ORD-20250604-00015', 'Arjun', '085333008902', '2025-06-04', 'accepted', '2025-06-03 20:40:54', '2025-06-03 20:40:54'),
(16, 105, 2, 'ORD-20250604-00016', 'Arjun', '085333008902', '2025-06-04', 'accepted', '2025-06-03 20:46:05', '2025-06-03 20:46:05'),
(17, 101, 14, 'ORD-20250604-00017', 'Ami Fujiati', '0827829232', '2025-06-04', 'accepted', '2025-06-03 22:21:40', '2025-06-03 22:21:40'),
(18, 101, 6, 'ORD-20250604-00018', 'Ami Fujiati', '0827829232', '2025-06-12', 'accepted', '2025-06-03 23:16:15', '2025-06-03 23:16:15'),
(19, 102, 7, 'ORD-20250604-00007', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:55:26', '2025-06-03 19:55:26'),
(20, 103, 6, 'ORD-20250604-00007', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:55:26', '2025-06-03 19:55:26'),
(21, 104, 6, 'ORD-20250604-00007', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:55:26', '2025-06-03 19:55:26'),
(22, 105, 6, 'ORD-20250604-00007', 'adli naufal ramadhan', '087761145082', '2025-06-04', 'accepted', '2025-06-03 19:55:26', '2025-06-03 19:55:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('visited_room_1_127.0.0.1', 'b:1;', 1748998794),
('visited_room_10_127.0.0.1', 'b:1;', 1749010293),
('visited_room_11_127.0.0.1', 'b:1;', 1749010294),
('visited_room_12_127.0.0.1', 'b:1;', 1749010295),
('visited_room_13_127.0.0.1', 'b:1;', 1749011958),
('visited_room_14_127.0.0.1', 'b:1;', 1749018061),
('visited_room_15_127.0.0.1', 'b:1;', 1749011960),
('visited_room_2_127.0.0.1', 'b:1;', 1749017923),
('visited_room_3_127.0.0.1', 'b:1;', 1748998803),
('visited_room_4_127.0.0.1', 'b:1;', 1749008958),
('visited_room_5_127.0.0.1', 'b:1;', 1749008962),
('visited_room_6_127.0.0.1', 'b:1;', 1749021363),
('visited_room_7_127.0.0.1', 'b:1;', 1749009288),
('visited_room_8_127.0.0.1', 'b:1;', 1749009289),
('visited_room_9_127.0.0.1', 'b:1;', 1749009291);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AC', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(2, 'Kamar Mandi Dalam', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(3, 'Dapur Bersama', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(4, 'Keamanan 24 Jam', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(5, 'Wifi', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(6, 'kasur', '2025-05-21 18:57:36', '2025-05-21 18:57:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Universitas', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(2, 'Pusat Perbelanjaan', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(3, 'Tempat Ibadah', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(4, 'Pasar Tradisional', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(5, 'Kantor Pemerintahan', '2025-05-21 18:57:36', '2025-05-21 18:57:36'),
(6, 'Fasilitas Kesehatan', '2025-05-21 18:57:36', '2025-05-21 18:57:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_30_021413_create_properties_table', 1),
(5, '2025_01_30_021721_create_locations_table', 1),
(6, '2025_01_30_021752_create_public_locations_table', 1),
(7, '2025_01_30_050305_create_facilities_table', 1),
(8, '2025_01_30_091356_create_rooms_table', 1),
(9, '2025_01_30_091709_create_reviews_table', 1),
(10, '2025_01_30_091851_create_bookings_table', 1),
(11, '2025_01_30_092103_create_payments_table', 1),
(12, '2025_01_30_092333_create_user_room_interactions_table', 1),
(13, '2025_02_04_144641_add_price_to_table_rooms', 1),
(14, '2025_02_05_072947_create_rooms_facilities_table', 1),
(15, '2025_02_06_052325_add_user_id_to_properties', 1),
(16, '2025_02_13_044036_add_status_to_bookings', 1),
(17, '2025_02_13_062157_add_booking_id__to_reviews', 1),
(18, '2025_03_01_003638_add_slug_to_rooms', 1),
(19, '2025_03_01_075435_add_numberandname_to_bookings', 1),
(20, '2025_03_01_091837_add_ordernumber_to_bookings', 1),
(21, '2025_04_12_040023_create_similarities_table', 1),
(22, '2025_04_12_135134_add_rating_to_rooms_table', 1),
(23, '2025_04_15_070643_create_user_preferences_table', 1),
(24, '2025_05_04_134020_create_room_similarities_table', 1),
(25, '2025_05_27_100443_create_aturan_kos_table', 2),
(26, '2025_05_28_022543_create_regencies_table', 3),
(27, '2025_05_30_070031_add_address_to_properties', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `time_period` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `regency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `properties`
--

INSERT INTO `properties` (`id`, `name`, `description`, `type`, `time_period`, `address`, `regency`, `created_at`, `updated_at`, `user_id`, `kabupaten`, `kecamatan`, `desa`) VALUES
(1, 'Kost White 123 Mataram', 'untuk pengantar (bapak,ibu, kakak) maksimal menemani 5 hari saja. perhari dikenakan biaya 20rb perorang', 'Putra', 'Bulanan', 'mataram', 'mataram', '2025-05-06 14:36:15', '2025-05-21 19:24:26', 2, 'lombok barat', 'mataram', NULL),
(2, 'Kost Arzanka Selaparang Mataram', 'Tipe ini bisa diisi maks. 1 orang/ kamar, Tidak untuk pasutri,  Tidak boleh bawa anak', 'putri', 'Bulanan', 'Kecamatan Selaparang', 'lombok barat', '2025-05-06 14:36:15', '2025-05-06 15:24:08', 3, 'lombok timur', NULL, NULL),
(3, 'Kost Sarimulia VIP Selaparang Mataram', 'FASILITAS : Kost2an “SARI MULIA’ 1) AC, DIPAN, BED, LEMARI, MEJA 2) CHANEL TV PARABOLA 3) FREE WIFI KAPASITAS 50 MBPS 4) CLOSET DUDUK TOTO 5) DAPUR KERING 6) KAMAR MANDI DAN SHOWER 7) SUMUR BOR + PDAM 8) DAPUR UMUM (BASAH) 9) CCTV 10) LED TV 32” 11) KULKAS 12) GARASE MOBIL Kost2an“SARIMULIA’ Rp. 1.600.000,- / Bulan Rp. 800.000,- / Minggu. Rp. 1.100.000,- / 2 Minggu. Rp. 150.000,- / hari. \r\nKami punya pegawai siap membantu para Penghuni melapor, jika perlu. Sarimula dekat dengan pusat kota mataram. Kost Sarimulia dekat dengan pusat perbelajaan seperti Epicentrum, Mataram Mall, Transmart Mataram. Kost Sarimulia dekat dengan kuliner Taliwang, Sate Rembiga, Lesehan. Kost Sarimulia bertempat di komplek dan sawah yang nyaman dan aman. Kost Sarimulia dekat dengan kantor polisi dan rumah sakit terdekat, kami sedia CCTV selama 24 jam full.', 'Campur', 'Bulanan', 'Kecamatan Selaparang', 'lombok barat', '2025-05-06 14:36:15', '2025-05-06 15:29:30', 4, 'lombok barat', NULL, NULL),
(4, 'Kost Bintang Place Ampenan Mataram', 'lingkungan nyaman, tenang, 1 menit ke ex bandara selaparang, 1 menit dari apotek dan dokter, 2 menit alfamart/ indomaret, 2 menit k cfd jl udayana, 3 menit k islamic center, 10 menit k unram, 14 menit k epic mall', 'Putri', 'Bulanan', 'mataram', 'mataram', '2025-05-06 14:36:15', '2025-05-06 14:36:15', 5, 'mataram', NULL, NULL),
(5, 'Kost Deddy Rio Vip C Mataram', 'untuk pengantar (bapak,ibu, kakak) maksimal menemani 5 hari saja. perhari dikenakan biaya 20rb perorangKos Kosan Deddy RioFasilitas: 1. Kamar ukuran 3x5 meter 2. Kamar mandi di dalam 3. Dapur di dalam 4. Tempat tidur+bantal+karpet 5. Jendela+gorden+terali 6. Lemari 2 pintu 7. Air PAM 8. Listrik pulsa 900 watt / kamar 9. Jemuran / kamar 10. Tempat parkir mobil dan motor.', 'Putra', 'Bulanan', 'mataram', 'mataram', '2025-05-06 14:36:15', '2025-05-06 14:36:15', 6, 'mataram', NULL, NULL),
(6, 'Kost Durian Tipe B Mataram', 'halaman luas, ada pohon durian dan mangga. udara sejuk ada taman bunga. dekat rumah ibu Rahmi', 'Campur', 'Bulanan', 'mataram', 'lombok barat', '2025-05-06 14:36:15', '2025-05-06 15:43:07', 7, 'mataram', NULL, NULL),
(7, 'Kost Deddy Rio Vip C Mataram', 'halaman luas, ada pohon durian dan mangga. udara sejuk ada taman bunga. dekat rumah ibu Rahm', 'Campur', 'Bulanan', 'mataram', 'lombok barat', '2025-05-06 15:48:30', '2025-05-06 15:51:39', 8, 'mataram', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `public_locations`
--

CREATE TABLE `public_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `distance` double NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `public_locations`
--

INSERT INTO `public_locations` (`id`, `property_id`, `distance`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, NULL, NULL),
(2, 1, 5, 2, NULL, NULL),
(3, 1, 1, 6, NULL, NULL),
(4, 2, 1, 1, NULL, NULL),
(5, 2, 1, 2, NULL, NULL),
(6, 2, 1, 3, NULL, NULL),
(7, 2, 1, 4, NULL, NULL),
(8, 2, 1, 5, NULL, NULL),
(9, 2, 1, 6, NULL, NULL),
(10, 3, 1, 1, NULL, NULL),
(11, 3, 1, 2, NULL, NULL),
(12, 3, 11, 3, NULL, NULL),
(13, 3, 1, 4, NULL, NULL),
(14, 3, 1, 6, NULL, NULL),
(15, 4, 1, 1, NULL, NULL),
(16, 4, 1, 2, NULL, NULL),
(17, 4, 1, 3, NULL, NULL),
(18, 4, 1, 5, NULL, NULL),
(19, 5, 1, 1, NULL, NULL),
(20, 5, 1, 3, NULL, NULL),
(21, 5, 1, 4, NULL, NULL),
(22, 5, 1, 6, NULL, NULL),
(23, 6, 1, 1, NULL, NULL),
(24, 6, 1, 2, NULL, NULL),
(25, 6, 1, 3, NULL, NULL),
(26, 6, 1, 4, NULL, NULL),
(27, 6, 1, 5, NULL, NULL),
(28, 6, 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `room_id`, `user_id`, `rating`, `comment`, `created_at`, `updated_at`, `booking_id`) VALUES
(1, 1, 101, 2, NULL, '2025-06-03 17:07:57', '2025-06-03 17:07:57', 3),
(2, 2, 101, 4, NULL, '2025-06-03 17:08:06', '2025-06-03 17:08:06', 2),
(3, 3, 101, 5, NULL, '2025-06-03 17:08:21', '2025-06-03 17:08:21', 1),
(4, 6, 102, 4, NULL, '2025-06-03 19:50:42', '2025-06-03 19:50:42', 6),
(5, 5, 102, 5, NULL, '2025-06-03 19:50:54', '2025-06-03 19:50:54', 5),
(6, 4, 102, 4, NULL, '2025-06-03 19:51:08', '2025-06-03 19:51:08', 4),
(7, 9, 103, 5, NULL, '2025-06-03 19:56:33', '2025-06-03 19:56:33', 9),
(8, 8, 103, 4, NULL, '2025-06-03 19:56:43', '2025-06-03 19:56:43', 8),
(9, 7, 103, 2, NULL, '2025-06-03 19:56:58', '2025-06-03 19:56:58', 7),
(10, 12, 104, 5, NULL, '2025-06-03 20:18:45', '2025-06-03 20:18:45', 12),
(11, 11, 104, 4, NULL, '2025-06-03 20:18:56', '2025-06-03 20:18:56', 11),
(12, 10, 104, 4, NULL, '2025-06-03 20:19:08', '2025-06-03 20:19:08', 10),
(13, 13, 105, 4, NULL, '2025-06-03 20:40:23', '2025-06-03 20:40:23', 13),
(14, 14, 105, 5, NULL, '2025-06-03 20:40:39', '2025-06-03 20:40:39', 14),
(15, 15, 105, 5, NULL, '2025-06-03 20:42:24', '2025-06-03 20:42:24', 15),
(16, 2, 105, 4, NULL, '2025-06-03 20:46:34', '2025-06-03 20:46:34', 16),
(17, 14, 101, 2, NULL, '2025-06-03 22:21:48', '2025-06-03 22:21:48', 17),
(18, 6, 101, 2, NULL, '2025-06-03 23:17:08', '2025-06-03 23:17:08', 18),
(19, 7, 102, 5, NULL, '2025-06-04 01:03:02', '2025-06-04 01:03:02', 19),
(20, 6, 103, 4, NULL, '2025-06-04 01:55:15', '2025-06-04 01:55:15', 20),
(21, 6, 104, 4, NULL, '2025-06-04 02:03:50', '2025-06-04 02:03:50', 21),
(22, 6, 105, 4, NULL, '2025-06-04 02:05:13', '2025-06-04 02:05:13', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` decimal(3,2) NOT NULL DEFAULT 0.00,
  `slug` varchar(255) DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `count_visitor` int(11) NOT NULL DEFAULT 0,
  `size` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `foto_room` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `rating`, `slug`, `property_id`, `availability`, `count_visitor`, `size`, `price`, `foto_room`, `created_at`, `updated_at`) VALUES
(1, 'Kost Ibu Yaya Selaparang Mataram nomor 1', 2.00, 'kost-ibu-yaya-selaparang-mataram-nomor-1', 1, 1, 33, '3x6', 650000.00, 'rooms/r6PYP6qQohJnXSzq9hY7KcOm2YC0UL9VSAyAXpzM.jpg', '2025-05-06 15:18:33', '2025-06-03 17:07:57'),
(2, 'Kost Ibu Yaya Selaparang Mataram nomor 2', 4.00, 'kost-ibu-yaya-selaparang-mataram-nomor-2', 1, 1, 38, '3x4', 850000.00, 'rooms/Qs5OaVnVV6ObNAiCitLINN9S4v7ejWjGkescEtGV.jpg', '2025-05-06 15:25:33', '2025-06-03 22:18:43'),
(3, 'Kost Ibu Yaya Selaparang Mataram nomor 3', 5.00, 'kost-ibu-yaya-selaparang-mataram-nomor-3', 1, 1, 39, '4x3,5', 1600000.00, 'rooms/TFzc8qxK7am7Jp2y74KUWBSx96ASSJx9S9S1Tn3n.jpg', '2025-05-06 15:31:30', '2025-06-03 17:08:21'),
(4, 'Kost Ibu Yaya Selaparang Mataram nomor 4', 4.00, 'kost-ibu-yaya-selaparang-mataram-nomor-4', 1, 1, 29, '4x4', 1500000.00, 'rooms/vgrmXJlxRwL4rYHQVWpPh5GYQOHu3pVHjgXGWmg8.jpg', '2025-05-06 15:34:49', '2025-06-03 19:51:08'),
(5, 'Kost Durian Tipe B Mataram', 5.00, 'kost-durian-tipe-b-mataram', 2, 1, 20, '3x3', 750000.00, 'rooms/PGV2y4WF8whGGVuG6CbfZ7wT6YNusikHsbqSARmQ.jpg', '2025-05-06 15:44:40', '2025-06-03 19:50:54'),
(6, 'Kost Deddy Rio Vip C Mataram', 3.60, 'kost-deddy-rio-vip-c-mataram', 2, 1, 18, '3x4', 750000.00, 'rooms/BpNuPAmjonjZsdmyzNzpozd1MHaZBuKRWhNeJIbE.jpg', '2025-05-06 15:51:28', '2025-06-04 02:05:13'),
(7, 'Kost Didiet Tipe A Selaparang Mataram', 3.50, 'kost-didiet-tipe-a-selaparang-mataram', 2, 1, 20, '3x4', 900000.00, 'rooms/vWRK79Be5A8ZZpkjgmS37ILFZdCcNnP83ssgLSf2.jpg', '2025-05-06 15:57:41', '2025-06-04 01:03:02'),
(8, 'Kost Wisma DR Harsono 2 Tipe A Sekarbela Mataram', 4.00, 'kost-wisma-dr-harsono-2-tipe-a-sekarbela-mataram', 2, 1, 15, '4x4', 1200000.00, 'rooms/kjbi5Y6wfvlwKkeUCvkaSBVnQrSm10k6AFGu3nG8.jpg', '2025-05-06 16:07:20', '2025-06-03 19:56:43'),
(9, 'Kost Durian Premium Mataram', 5.00, 'kost-durian-premium-mataram', 3, 1, 19, '4x4', 1250000.00, 'rooms/zashAPgvCMWVKWBUwb7RE9J6lvGVCDx0BYUsuPoQ.jpg', '2025-05-06 16:17:53', '2025-06-03 19:56:33'),
(10, 'Kost Manna House Tipe AB Sekarbela Mataram', 4.00, 'kost-manna-house-tipe-ab-sekarbela-mataram', 3, 1, 26, '4x4', 1650000.00, 'rooms/8fQacmAFePnIxH9kFSk6oike1RIP0Q8ZP3V9qtYU.jpg', '2025-05-06 16:20:51', '2025-06-03 20:19:08'),
(11, 'Kost Diana Tipe A Mataram Mataram', 4.00, 'kost-diana-tipe-a-mataram-mataram', 3, 1, 24, '3x4', 1300000.00, 'rooms/5KuAgUSQVDOOKzBUzXTfEHV71IBEbNmGo52EaoU1.jpg', '2025-05-06 16:25:51', '2025-06-03 20:18:56'),
(12, 'Kost Zul Tipe 3 Selaparang Mataram', 5.00, 'kost-zul-tipe-3-selaparang-mataram', 3, 1, 23, '4x4', 900000.00, 'rooms/IVEAJycEyJNhLN9lGfJmHNVt7LxWTaTWI4h4nDXM.jpg', '2025-05-06 16:46:05', '2025-06-03 20:18:45'),
(13, 'Rumah Kontrakan Sejahtera Mataram', 4.00, 'rumah-kontrakan-sejahtera-mataram', 4, 1, 21, '3x4', 2000000.00, 'rooms/TgCLMPnABaVHVDVqaG183hdFiS58RTStsmj3edyu.jpg', '2025-05-06 16:48:02', '2025-06-03 20:40:23'),
(14, 'Kost Kembar I Sekarbela Mataram', 3.50, 'kost-kembar-i-sekarbela-mataram', 4, 1, 21, '3x4', 90000.00, 'rooms/JsUHuE8D9mhFg0IE1OrxijiA5ZNzz0538RmMiRvv.jpg', '2025-05-06 16:49:50', '2025-06-03 22:21:48'),
(15, 'Kost Lestari Tipe A Ampenan Mataram', 5.00, 'kost-lestari-tipe-a-ampenan-mataram', 4, 1, 15, '3x3', 800000.00, 'rooms/PojbDEZXvDrye7DuzCdMrJ9xhOO516kSOKkuaFyC.jpg', '2025-05-06 16:51:01', '2025-06-03 20:42:24'),
(16, 'Kost Dana I Mataram', 0.00, 'kost-dana-i-mataram', 4, 1, 20, '3x4', 750000.00, 'rooms/NKGuEDcxTvOHVq0ZAuUdVZ00CWCR2EvW982OT3zW.jpg', '2025-05-06 18:29:24', '2025-05-21 22:49:29'),
(17, 'Kost Birrul Walidain Tipe Regular Ampenan Mataram', 1.50, 'kost-birrul-walidain-tipe-regular-ampenan-mataram', 5, 1, 25, '3x4', 705000.00, 'rooms/elJomq3pc05llTyUn2s9B6iitzY0nXImclVIzeKN.jpg', '2025-05-06 18:33:50', '2025-05-21 22:36:25'),
(18, 'Kost Mio Green 2 Selaparang Mataram', 5.00, 'kost-mio-green-2-selaparang-mataram', 5, 1, 18, '3x3', 1000000.00, 'rooms/rptO2FCvfhe4h8pQDj9muTE6eWV61Qj8xIwyeilR.jpg', '2025-05-06 18:35:24', '2025-05-21 22:42:34'),
(19, 'Kost Griya Tipe A Ampenan Mataram', 0.00, 'kost-griya-tipe-a-ampenan-mataram', 5, 1, 21, '3x4', 120000.00, 'rooms/2x2IJXqM8jMmZpa7ifEuqCqHsB6iLMmZ9Tt9e22N.jpg', '2025-05-06 18:37:00', '2025-05-21 22:43:04'),
(20, 'Kost Zul Tipe 7 Selaparang Mataram', 0.00, 'kost-zul-tipe-7-selaparang-mataram', 5, 1, 23, '4x4', 800000.00, 'rooms/TIdFZJT0VVev5QalH5fsZgVYDap4tvheFqO2QuZr.jpg', '2025-05-06 18:38:34', '2025-05-21 22:41:33'),
(21, 'Kost Ashiya Amalia Tipe B Selaparang Mataram', 3.00, 'kost-ashiya-amalia-tipe-b-selaparang-mataram', 6, 1, 22, '3x3', 1000000.00, 'rooms/0Pomb37bW17FVbZZ5VmyOaoMYVmB8pV01rQYIkBt.jpg', '2025-05-06 18:39:31', '2025-05-21 22:37:56'),
(22, 'Kost  Amalia Tipe B Selaparang Mataram', 2.00, 'kost-amalia-tipe-b-selaparang-mataram', 6, 1, 22, '3x3', 1000000.00, 'rooms/q8psAg8upnhORAepRu4vWnZz43XMg3J6rh2Pg25E.jpg', '2025-05-06 18:41:39', '2025-05-21 22:44:03'),
(23, 'Kost Ekslusif Abhie Guest House Tipe A Ampenan Mataram', 0.00, 'kost-ekslusif-abhie-guest-house-tipe-a-ampenan-mataram', 6, 1, 19, '5x6', 2000000.00, 'rooms/0DciBbNtnaIP3TX9iz02IvXN0kDwYsiX61zAVb68.jpg', '2025-05-06 18:43:48', '2025-05-21 21:46:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rooms_facilities`
--

CREATE TABLE `rooms_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rooms_facilities`
--

INSERT INTO `rooms_facilities` (`id`, `room_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2025-05-21 19:23:11', '2025-05-21 19:23:11'),
(2, 1, 6, '2025-05-21 19:23:11', '2025-05-21 19:23:11'),
(3, 2, 2, '2025-05-21 19:23:22', '2025-05-21 19:23:22'),
(4, 2, 6, '2025-05-21 19:23:22', '2025-05-21 19:23:22'),
(5, 3, 2, '2025-05-21 19:23:33', '2025-05-21 19:23:33'),
(6, 3, 6, '2025-05-21 19:23:33', '2025-05-21 19:23:33'),
(7, 4, 2, '2025-05-21 19:23:52', '2025-05-21 19:23:52'),
(8, 4, 6, '2025-05-21 19:23:52', '2025-05-21 19:23:52'),
(9, 5, 1, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(10, 5, 2, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(11, 5, 3, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(12, 5, 4, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(13, 5, 5, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(14, 5, 6, '2025-05-21 19:29:32', '2025-05-21 19:29:32'),
(15, 6, 1, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(16, 6, 2, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(17, 6, 3, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(18, 6, 4, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(19, 6, 5, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(20, 6, 6, '2025-05-21 19:29:46', '2025-05-21 19:29:46'),
(21, 7, 1, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(22, 7, 2, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(23, 7, 3, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(24, 7, 4, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(25, 7, 5, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(26, 7, 6, '2025-05-21 19:29:58', '2025-05-21 19:29:58'),
(27, 8, 1, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(28, 8, 2, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(29, 8, 3, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(30, 8, 4, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(31, 8, 5, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(32, 8, 6, '2025-05-21 19:30:10', '2025-05-21 19:30:10'),
(33, 9, 1, '2025-05-21 21:31:06', '2025-05-21 21:31:06'),
(34, 9, 2, '2025-05-21 21:31:06', '2025-05-21 21:31:06'),
(35, 9, 5, '2025-05-21 21:31:06', '2025-05-21 21:31:06'),
(36, 9, 6, '2025-05-21 21:31:06', '2025-05-21 21:31:06'),
(37, 10, 2, '2025-05-21 21:31:14', '2025-05-21 21:31:14'),
(38, 10, 5, '2025-05-21 21:31:14', '2025-05-21 21:31:14'),
(39, 11, 2, '2025-05-21 21:31:26', '2025-05-21 21:31:26'),
(40, 11, 6, '2025-05-21 21:31:26', '2025-05-21 21:31:26'),
(41, 12, 2, '2025-05-21 21:31:35', '2025-05-21 21:31:35'),
(42, 12, 6, '2025-05-21 21:31:35', '2025-05-21 21:31:35'),
(43, 13, 2, '2025-05-21 21:33:19', '2025-05-21 21:33:19'),
(44, 13, 5, '2025-05-21 21:33:19', '2025-05-21 21:33:19'),
(45, 14, 2, '2025-05-21 21:33:30', '2025-05-21 21:33:30'),
(46, 14, 5, '2025-05-21 21:33:30', '2025-05-21 21:33:30'),
(47, 15, 2, '2025-05-21 21:33:38', '2025-05-21 21:33:38'),
(48, 15, 5, '2025-05-21 21:33:38', '2025-05-21 21:33:38'),
(49, 16, 2, '2025-05-21 21:33:50', '2025-05-21 21:33:50'),
(50, 16, 3, '2025-05-21 21:33:50', '2025-05-21 21:33:50'),
(51, 16, 6, '2025-05-21 21:33:50', '2025-05-21 21:33:50'),
(52, 13, 3, '2025-05-21 21:33:58', '2025-05-21 21:33:58'),
(53, 13, 6, '2025-05-21 21:33:58', '2025-05-21 21:33:58'),
(54, 17, 2, '2025-05-21 21:35:41', '2025-05-21 21:35:41'),
(55, 17, 3, '2025-05-21 21:35:41', '2025-05-21 21:35:41'),
(56, 17, 5, '2025-05-21 21:35:41', '2025-05-21 21:35:41'),
(57, 17, 6, '2025-05-21 21:35:41', '2025-05-21 21:35:41'),
(58, 18, 1, '2025-05-21 21:35:53', '2025-05-21 21:35:53'),
(59, 18, 2, '2025-05-21 21:35:53', '2025-05-21 21:35:53'),
(60, 18, 3, '2025-05-21 21:35:53', '2025-05-21 21:35:53'),
(61, 18, 5, '2025-05-21 21:35:53', '2025-05-21 21:35:53'),
(62, 18, 6, '2025-05-21 21:35:53', '2025-05-21 21:35:53'),
(63, 19, 2, '2025-05-21 21:36:04', '2025-05-21 21:36:04'),
(64, 19, 3, '2025-05-21 21:36:04', '2025-05-21 21:36:04'),
(65, 19, 5, '2025-05-21 21:36:04', '2025-05-21 21:36:04'),
(66, 19, 6, '2025-05-21 21:36:04', '2025-05-21 21:36:04'),
(67, 20, 2, '2025-05-21 21:36:14', '2025-05-21 21:36:14'),
(68, 20, 3, '2025-05-21 21:36:14', '2025-05-21 21:36:14'),
(69, 20, 5, '2025-05-21 21:36:14', '2025-05-21 21:36:14'),
(70, 20, 6, '2025-05-21 21:36:14', '2025-05-21 21:36:14'),
(71, 21, 1, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(72, 21, 2, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(73, 21, 3, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(74, 21, 4, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(75, 21, 5, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(76, 21, 6, '2025-05-21 21:42:36', '2025-05-21 21:42:36'),
(77, 22, 2, '2025-05-21 21:42:46', '2025-05-21 21:42:46'),
(78, 22, 3, '2025-05-21 21:42:46', '2025-05-21 21:42:46'),
(79, 22, 4, '2025-05-21 21:42:46', '2025-05-21 21:42:46'),
(80, 22, 5, '2025-05-21 21:42:46', '2025-05-21 21:42:46'),
(81, 22, 6, '2025-05-21 21:42:46', '2025-05-21 21:42:46'),
(82, 23, 2, '2025-05-21 21:42:59', '2025-05-21 21:42:59'),
(83, 23, 3, '2025-05-21 21:42:59', '2025-05-21 21:42:59'),
(84, 23, 4, '2025-05-21 21:42:59', '2025-05-21 21:42:59'),
(85, 23, 5, '2025-05-21 21:42:59', '2025-05-21 21:42:59'),
(86, 23, 6, '2025-05-21 21:42:59', '2025-05-21 21:42:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_similarities`
--

CREATE TABLE `room_similarities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id_1` bigint(20) UNSIGNED NOT NULL,
  `room_id_2` bigint(20) UNSIGNED NOT NULL,
  `similarity` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room_similarities`
--

INSERT INTO `room_similarities` (`id`, `room_id_1`, `room_id_2`, `similarity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(2, 1, 3, 1, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(3, 1, 4, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(4, 1, 5, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(5, 1, 6, 1, '2025-06-03 20:20:37', '2025-06-03 23:18:01'),
(6, 1, 7, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(7, 1, 8, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(8, 1, 9, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(9, 1, 10, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(10, 1, 11, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(11, 1, 12, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(12, 1, 13, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(13, 1, 14, 1, '2025-06-03 20:20:37', '2025-06-03 22:22:01'),
(14, 1, 15, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(15, 1, 16, 0, '2025-06-03 20:20:37', '2025-06-03 20:20:37'),
(16, 1, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(17, 1, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(18, 1, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(19, 1, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(20, 1, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(21, 1, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(22, 1, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(23, 2, 3, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(24, 2, 4, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(25, 2, 5, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(26, 2, 6, 0.94868329805051, '2025-06-03 20:20:38', '2025-06-04 02:06:01'),
(27, 2, 7, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(28, 2, 8, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(29, 2, 9, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(30, 2, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(31, 2, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(32, 2, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(33, 2, 13, 1, '2025-06-03 20:20:38', '2025-06-03 20:47:02'),
(34, 2, 14, 0.91914503001806, '2025-06-03 20:20:38', '2025-06-03 22:22:01'),
(35, 2, 15, 1, '2025-06-03 20:20:38', '2025-06-03 20:47:02'),
(36, 2, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(37, 2, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(38, 2, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(39, 2, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(40, 2, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(41, 2, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(42, 2, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(43, 2, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(44, 3, 4, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(45, 3, 5, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(46, 3, 6, 1, '2025-06-03 20:20:38', '2025-06-03 23:18:01'),
(47, 3, 7, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(48, 3, 8, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(49, 3, 9, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(50, 3, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(51, 3, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(52, 3, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(53, 3, 13, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(54, 3, 14, 1, '2025-06-03 20:20:38', '2025-06-03 22:22:01'),
(55, 3, 15, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(56, 3, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(57, 3, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(58, 3, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(59, 3, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(60, 3, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(61, 3, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(62, 3, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(63, 3, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(64, 4, 5, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(65, 4, 6, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(66, 4, 7, 1, '2025-06-03 20:20:38', '2025-06-04 01:03:02'),
(67, 4, 8, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(68, 4, 9, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(69, 4, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(70, 4, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(71, 4, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(72, 4, 13, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(73, 4, 14, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(74, 4, 15, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(75, 4, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(76, 4, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(77, 4, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(78, 4, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(79, 4, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(80, 4, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(81, 4, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(82, 4, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(83, 5, 6, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(84, 5, 7, 1, '2025-06-03 20:20:38', '2025-06-04 01:03:02'),
(85, 5, 8, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(86, 5, 9, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(87, 5, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(88, 5, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(89, 5, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(90, 5, 13, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(91, 5, 14, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(92, 5, 15, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(93, 5, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(94, 5, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(95, 5, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(96, 5, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(97, 5, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(98, 5, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(99, 5, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(100, 5, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(101, 6, 7, 0.91914503001806, '2025-06-03 20:20:38', '2025-06-04 01:56:01'),
(102, 6, 8, 1, '2025-06-03 20:20:38', '2025-06-04 01:56:01'),
(103, 6, 9, 1, '2025-06-03 20:20:38', '2025-06-04 01:56:01'),
(104, 6, 10, 1, '2025-06-03 20:20:38', '2025-06-04 02:04:01'),
(105, 6, 11, 1, '2025-06-03 20:20:38', '2025-06-04 02:04:01'),
(106, 6, 12, 1, '2025-06-03 20:20:38', '2025-06-04 02:04:01'),
(107, 6, 13, 1, '2025-06-03 20:20:38', '2025-06-04 02:06:01'),
(108, 6, 14, 0.99654575824488, '2025-06-03 20:20:38', '2025-06-04 02:06:01'),
(109, 6, 15, 1, '2025-06-03 20:20:38', '2025-06-04 02:06:01'),
(110, 6, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(111, 6, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(112, 6, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(113, 6, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(114, 6, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(115, 6, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(116, 6, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(117, 6, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(118, 7, 8, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(119, 7, 9, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(120, 7, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(121, 7, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(122, 7, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(123, 7, 13, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(124, 7, 14, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(125, 7, 15, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(126, 7, 16, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(127, 7, 17, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(128, 7, 18, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(129, 7, 19, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(130, 7, 20, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(131, 7, 21, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(132, 7, 22, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(133, 7, 23, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(134, 8, 9, 1, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(135, 8, 10, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(136, 8, 11, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(137, 8, 12, 0, '2025-06-03 20:20:38', '2025-06-03 20:20:38'),
(138, 8, 13, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(139, 8, 14, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(140, 8, 15, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(141, 8, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(142, 8, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(143, 8, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(144, 8, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(145, 8, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(146, 8, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(147, 8, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(148, 8, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(149, 9, 10, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(150, 9, 11, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(151, 9, 12, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(152, 9, 13, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(153, 9, 14, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(154, 9, 15, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(155, 9, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(156, 9, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(157, 9, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(158, 9, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(159, 9, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(160, 9, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(161, 9, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(162, 9, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(163, 10, 11, 1, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(164, 10, 12, 1, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(165, 10, 13, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(166, 10, 14, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(167, 10, 15, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(168, 10, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(169, 10, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(170, 10, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(171, 10, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(172, 10, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(173, 10, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(174, 10, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(175, 10, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(176, 11, 12, 1, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(177, 11, 13, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(178, 11, 14, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(179, 11, 15, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(180, 11, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(181, 11, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(182, 11, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(183, 11, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(184, 11, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(185, 11, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(186, 11, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(187, 11, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(188, 12, 13, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(189, 12, 14, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(190, 12, 15, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(191, 12, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(192, 12, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(193, 12, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(194, 12, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(195, 12, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(196, 12, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(197, 12, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(198, 12, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(199, 13, 14, 1, '2025-06-03 20:20:39', '2025-06-03 20:41:02'),
(200, 13, 15, 1, '2025-06-03 20:20:39', '2025-06-03 20:43:03'),
(201, 13, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(202, 13, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(203, 13, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(204, 13, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(205, 13, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(206, 13, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(207, 13, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(208, 13, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(209, 14, 15, 1, '2025-06-03 20:20:39', '2025-06-03 20:43:03'),
(210, 14, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(211, 14, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(212, 14, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(213, 14, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(214, 14, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(215, 14, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(216, 14, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(217, 14, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(218, 15, 16, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(219, 15, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(220, 15, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(221, 15, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(222, 15, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(223, 15, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(224, 15, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(225, 15, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(226, 16, 17, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(227, 16, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(228, 16, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(229, 16, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(230, 16, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(231, 16, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(232, 16, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(233, 17, 18, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(234, 17, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(235, 17, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(236, 17, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(237, 17, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(238, 17, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(239, 18, 19, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(240, 18, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(241, 18, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(242, 18, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(243, 18, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(244, 19, 20, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(245, 19, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(246, 19, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(247, 19, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(248, 20, 21, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(249, 20, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(250, 20, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(251, 21, 22, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(252, 21, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39'),
(253, 22, 23, 0, '2025-06-03 20:20:39', '2025-06-03 20:20:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3SbsttYWGYD13yjRqiodyy1NR43tO4dRgX0G9bro', 105, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSFFZaHpoejlXWW9qcFpOQm82VTRreWppN0NZV2x1U05ZRzI1b003SCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MzA6e2k6MDtzOjE4OiJhbGVydC5jb25maWcudGl0bGUiO2k6MTtzOjE3OiJhbGVydC5jb25maWcudGV4dCI7aToyO3M6MTg6ImFsZXJ0LmNvbmZpZy50aW1lciI7aTozO3M6MjM6ImFsZXJ0LmNvbmZpZy5iYWNrZ3JvdW5kIjtpOjQ7czoxODoiYWxlcnQuY29uZmlnLndpZHRoIjtpOjU7czoyMzoiYWxlcnQuY29uZmlnLmhlaWdodEF1dG8iO2k6NjtzOjIwOiJhbGVydC5jb25maWcucGFkZGluZyI7aTo3O3M6MzA6ImFsZXJ0LmNvbmZpZy5zaG93Q29uZmlybUJ1dHRvbiI7aTo4O3M6Mjg6ImFsZXJ0LmNvbmZpZy5zaG93Q2xvc2VCdXR0b24iO2k6OTtzOjMwOiJhbGVydC5jb25maWcuY29uZmlybUJ1dHRvblRleHQiO2k6MTA7czoyOToiYWxlcnQuY29uZmlnLmNhbmNlbEJ1dHRvblRleHQiO2k6MTE7czoyOToiYWxlcnQuY29uZmlnLnRpbWVyUHJvZ3Jlc3NCYXIiO2k6MTI7czoyNDoiYWxlcnQuY29uZmlnLmN1c3RvbUNsYXNzIjtpOjEzO3M6MTc6ImFsZXJ0LmNvbmZpZy5pY29uIjtpOjE0O3M6MTI6ImFsZXJ0LmNvbmZpZyI7aToxNTtzOjE4OiJhbGVydC5jb25maWcudGl0bGUiO2k6MTY7czoxNzoiYWxlcnQuY29uZmlnLnRleHQiO2k6MTc7czoxODoiYWxlcnQuY29uZmlnLnRpbWVyIjtpOjE4O3M6MjM6ImFsZXJ0LmNvbmZpZy5iYWNrZ3JvdW5kIjtpOjE5O3M6MTg6ImFsZXJ0LmNvbmZpZy53aWR0aCI7aToyMDtzOjIzOiJhbGVydC5jb25maWcuaGVpZ2h0QXV0byI7aToyMTtzOjIwOiJhbGVydC5jb25maWcucGFkZGluZyI7aToyMjtzOjMwOiJhbGVydC5jb25maWcuc2hvd0NvbmZpcm1CdXR0b24iO2k6MjM7czoyODoiYWxlcnQuY29uZmlnLnNob3dDbG9zZUJ1dHRvbiI7aToyNDtzOjMwOiJhbGVydC5jb25maWcuY29uZmlybUJ1dHRvblRleHQiO2k6MjU7czoyOToiYWxlcnQuY29uZmlnLmNhbmNlbEJ1dHRvblRleHQiO2k6MjY7czoyOToiYWxlcnQuY29uZmlnLnRpbWVyUHJvZ3Jlc3NCYXIiO2k6Mjc7czoyNDoiYWxlcnQuY29uZmlnLmN1c3RvbUNsYXNzIjtpOjI4O3M6MTc6ImFsZXJ0LmNvbmZpZy5pY29uIjtpOjI5O3M6MTI6ImFsZXJ0LmNvbmZpZyI7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZXNhbmFuIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA1O3M6NToiYWxlcnQiO2E6MDp7fX0=', 1749027914),
('DaJZeOeY7tFBz6m7yGjCUNpEuW9wlLMK2gH7W3JZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGwxc0V6emZtcThscnlzYUowRk1XaFRFWjJaUkhXUUF1a0VjWVhobSI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749027507),
('dlgKYtZULsR8meSgEsrRhD5yWj9W11SP1QYnkMuQ', 102, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTDBLQnlBVUdDYnpNTjJPeFRoQzZ0RVZOd0ZMNHc5ckdBYVNCVGlmbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZXNhbmFuIjt9czo1OiJhbGVydCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTAyO3M6MjI6IlBIUERFQlVHQkFSX1NUQUNLX0RBVEEiO2E6MDp7fX0=', 1749027785),
('lirDgFqsunmsVb3LyZy2BktYU65maruyZL2PRmh3', 101, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRVRJOUM5R0NUZEhMakNvVldxaGZGdXVBd0FobHdKNXZGTE5EUHRjMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWtvbWVuZGFzaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwMTtzOjU6ImFsZXJ0IjthOjA6e31zOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1749028007),
('RNGW2NKxGSNirQH0Se11nJnowHl4edLjNre5Lzth', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidXpWMnI0TWtsTkhoWUpHY0NrT2t1cmV6dUFWc09oeW5rR0YxNXUydiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zaW1pbGFyaXR5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjU6ImFsZXJ0IjthOjA6e31zOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1749028018),
('X1aTHjtHPxeVXhlyN1rbosWqoirg7RZgfD7Yos4p', 103, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUHUzd2RIdkUzeVByR2NXOEdPYVJxS1RqRUE2MHpadEtva2xJdmo4ZyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGVzYW5hbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjMwOntpOjA7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE7czoxNzoiYWxlcnQuY29uZmlnLnRleHQiO2k6MjtzOjE4OiJhbGVydC5jb25maWcudGltZXIiO2k6MztzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aTo0O3M6MTg6ImFsZXJ0LmNvbmZpZy53aWR0aCI7aTo1O3M6MjM6ImFsZXJ0LmNvbmZpZy5oZWlnaHRBdXRvIjtpOjY7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6NztzOjMwOiJhbGVydC5jb25maWcuc2hvd0NvbmZpcm1CdXR0b24iO2k6ODtzOjI4OiJhbGVydC5jb25maWcuc2hvd0Nsb3NlQnV0dG9uIjtpOjk7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjEwO3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjExO3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjEyO3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToxMztzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToxNDtzOjEyOiJhbGVydC5jb25maWciO2k6MTU7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE2O3M6MTc6ImFsZXJ0LmNvbmZpZy50ZXh0IjtpOjE3O3M6MTg6ImFsZXJ0LmNvbmZpZy50aW1lciI7aToxODtzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aToxOTtzOjE4OiJhbGVydC5jb25maWcud2lkdGgiO2k6MjA7czoyMzoiYWxlcnQuY29uZmlnLmhlaWdodEF1dG8iO2k6MjE7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6MjI7czozMDoiYWxlcnQuY29uZmlnLnNob3dDb25maXJtQnV0dG9uIjtpOjIzO3M6Mjg6ImFsZXJ0LmNvbmZpZy5zaG93Q2xvc2VCdXR0b24iO2k6MjQ7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjI1O3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjI2O3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjI3O3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToyODtzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToyOTtzOjEyOiJhbGVydC5jb25maWciO31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwMztzOjU6ImFsZXJ0IjthOjA6e319', 1749027803),
('xwqhQEe1E6JrI58NdNCv01xps8DJLxAHm1Kx78mn', 104, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicURONEhCeUpVVnM4SUxSbERPN0luaTJaUlFIQUlwSmdxU29XMTc5dSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGVzYW5hbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjMwOntpOjA7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE7czoxNzoiYWxlcnQuY29uZmlnLnRleHQiO2k6MjtzOjE4OiJhbGVydC5jb25maWcudGltZXIiO2k6MztzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aTo0O3M6MTg6ImFsZXJ0LmNvbmZpZy53aWR0aCI7aTo1O3M6MjM6ImFsZXJ0LmNvbmZpZy5oZWlnaHRBdXRvIjtpOjY7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6NztzOjMwOiJhbGVydC5jb25maWcuc2hvd0NvbmZpcm1CdXR0b24iO2k6ODtzOjI4OiJhbGVydC5jb25maWcuc2hvd0Nsb3NlQnV0dG9uIjtpOjk7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjEwO3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjExO3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjEyO3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToxMztzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToxNDtzOjEyOiJhbGVydC5jb25maWciO2k6MTU7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE2O3M6MTc6ImFsZXJ0LmNvbmZpZy50ZXh0IjtpOjE3O3M6MTg6ImFsZXJ0LmNvbmZpZy50aW1lciI7aToxODtzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aToxOTtzOjE4OiJhbGVydC5jb25maWcud2lkdGgiO2k6MjA7czoyMzoiYWxlcnQuY29uZmlnLmhlaWdodEF1dG8iO2k6MjE7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6MjI7czozMDoiYWxlcnQuY29uZmlnLnNob3dDb25maXJtQnV0dG9uIjtpOjIzO3M6Mjg6ImFsZXJ0LmNvbmZpZy5zaG93Q2xvc2VCdXR0b24iO2k6MjQ7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjI1O3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjI2O3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjI3O3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToyODtzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToyOTtzOjEyOiJhbGVydC5jb25maWciO31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwNDtzOjU6ImFsZXJ0IjthOjA6e319', 1749027831);

-- --------------------------------------------------------

--
-- Struktur dari tabel `similarities`
--

CREATE TABLE `similarities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_1` bigint(20) UNSIGNED NOT NULL,
  `user_id_2` bigint(20) UNSIGNED NOT NULL,
  `similarity` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `similarities`
--

INSERT INTO `similarities` (`id`, `user_id_1`, `user_id_2`, `similarity`, `created_at`, `updated_at`) VALUES
(1, 102, 103, 0.90795938450045, '2025-05-21 19:04:35', '2025-06-04 01:56:01'),
(2, 102, 104, 1, '2025-05-21 19:04:35', '2025-06-04 02:04:00'),
(3, 102, 105, 1, '2025-05-21 19:04:35', '2025-06-04 02:06:00'),
(4, 103, 104, 1, '2025-05-21 19:04:35', '2025-06-04 02:04:00'),
(5, 103, 105, 1, '2025-05-21 19:04:35', '2025-06-04 02:06:00'),
(6, 104, 105, 1, '2025-05-21 19:04:35', '2025-06-04 02:06:00'),
(7, 101, 102, 1, '2025-06-03 20:20:37', '2025-06-03 23:18:00'),
(8, 101, 103, 1, '2025-06-03 20:20:37', '2025-06-04 01:56:01'),
(9, 101, 104, 1, '2025-06-03 20:20:37', '2025-06-04 02:04:00'),
(10, 101, 105, 0.91925471974099, '2025-06-03 20:20:37', '2025-06-04 02:06:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('tenant','admin','owner') NOT NULL DEFAULT 'tenant',
  `phone_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone_number`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$12$SvSsJyPYokQfgZmTNGSI0.7IBbnN/HSm56L44AOZZZeUrZcA0tI8S', 'admin', NULL, NULL, NULL, '2025-05-06 14:27:20', '2025-05-06 14:27:20'),
(2, 'Cahyo Latupono', 'cahyo-latupono@gmail.com', '2025-05-06 14:27:20', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ptRIaXpAuGhqQMgc619AYFLpd3RJfYnjeWuXH9cSKvKiry5eJFucBI4so1BQ', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(3, 'Muhammad Raditya Rajendra', 'gina-icha-kusmawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', '2', 'Kecamatan Selaparang', 'K5HMWt7NmB9yh6HhCXvhnmnqywVBSedv0BF5cvR1ZSrcnVUJWdg41pF6XfeE', '2025-05-06 14:27:21', '2025-05-06 15:21:31'),
(4, 'Zulfa Mandasari', 'zulfa-mandasari@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'pjjb1eBVJsMFucho1osiYruXn2yTMYCj36seyHR6UZaNol5AiONgQTuahSl0', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(5, 'Damu Waluyo S.Kom', 'damu-waluyo-skom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ZkclZVhAn8OfbxEVDEUJ1bRSEfFXscW8Z5MGCwj0SKusTqYg81jNlngp31A6', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(6, 'Clara Mardhiyah', 'clara-mardhiyah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Bdysm8NGBP', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(7, 'Maria Astuti M.Kom.', 'maria-astuti-mkom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'YPC7nrqRoBywJd5o4Q9Rhad13hOyJnxKcuWMl4nTkGrbcRx3tE28rGVxXVML', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(8, 'Uchita Raina Pertiwi S.T.', 'uchita-raina-pertiwi-st@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'EaWjjTvMoSND3s6ZoKkJjl6NoLZ5HZ3dZUOQgoELVllRpujiaqZZSDSu1SLp', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(9, 'Asirwada Iswahyudi', 'asirwada-iswahyudi@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'os0DZK8aDfPTUHY63smY7ou165BuFD9vknLDA1c1bkeSplUu8tVc9gQCWVGm', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(10, 'Lidya Nasyiah', 'lidya-nasyiah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'faYtIHbKbJNEBIA4Jyn0pzlZLb89yKQj1cBdUwBB1hfPW1LdelYdhBwL72Hc', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(11, 'Marsito Mahendra', 'marsito-mahendra@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'jpEYzCqjU1UvwsQyvuPeceFo1hrkTyuBGGKjckCyJ0lXTKeyxhvP7ukVbJbH', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(12, 'Aswani Nainggolan', 'aswani-nainggolan@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OmF0EIMVTZqEdTu4Mj849yhTK3LomlKx9qZoszLWOAqwDXXQm12Xn48pgdXb', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(13, 'Cawisadi Prayitna Siregar', 'cawisadi-prayitna-siregar@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'iwGvw38bjzOFiiLcDMpUhsTq1sFoWrm9MdboWfngOTUuccCF6jiN1dDbLSt0', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(14, 'Nugraha Najmudin', 'nugraha-najmudin@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'M03NBmjEP8PFa7Yvaj8Nml2rBsTWXqcGub3Wyg6np9kiXIJDy7aZgSwFa6qf', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(15, 'Mila Eka Agustina', 'mila-eka-agustina@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'XzFdqmox3AkeGwrPZptM4nS0htlhpqpYAP0XTFAwT7ekvmzU4bQHOUF0OG6J', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(16, 'Karna Latupono', 'karna-latupono@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'z0rfGqSi4rInFmssLHtBZUAybciKBMJGHpvfwErsZzC1xsamDMj3IkciMtYO', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(17, 'Nabila Maimunah Nasyidah', 'nabila-maimunah-nasyidah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'BvDmeSU141', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(18, 'Bagya Paiman Thamrin', 'bagya-paiman-thamrin@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '1IaB4Hn71i', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(19, 'Yunita Ana Nuraini', 'yunita-ana-nuraini@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '2oDSthW0g8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(20, 'Raina Yuliarti', 'raina-yuliarti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'uXsQKrbsWi', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(21, 'Irma Hartati M.Kom.', 'irma-hartati-mkom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Qhf4LsZgD8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(22, 'Cahya Suwarno', 'cahya-suwarno@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'AMZMyaEzJr', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(23, 'Elisa Padmasari', 'elisa-padmasari@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'oEgh0anQrC', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(24, 'Kenari Iswahyudi', 'kenari-iswahyudi@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OX0Z4DnIIW', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(25, 'Mariadi Sihotang', 'mariadi-sihotang@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'hZDgRpxH6Q', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(26, 'Marsito Nababan', 'marsito-nababan@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'oXM3PbbPqQ', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(27, 'Harsaya Teddy Mandala S.T.', 'harsaya-teddy-mandala-st@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'nQjloRqzdW', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(28, 'Jabal Sitorus', 'jabal-sitorus@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'QYRZW5oyZL', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(29, 'Patricia Winda Kusmawati', 'patricia-winda-kusmawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'vNB6B9ckUs', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(30, 'Galak Maryadi S.Pd', 'galak-maryadi-spd@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'VzCErmqh5w', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(31, 'Latika Rahmi Yuliarti S.Pt', 'latika-rahmi-yuliarti-spt@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Vlc378eah0', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(32, 'Vicky Puspita', 'vicky-puspita@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'gXBpmN32h8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(33, 'Karman Siregar', 'karman-siregar@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Ayw9wW7JBi', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(34, 'Victoria Paris Suartini S.Kom', 'victoria-paris-suartini-skom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '4ou9YEgrhF', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(35, 'Jais Marbun', 'jais-marbun@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'r6h02eOK1j', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(36, 'Pia Purwanti', 'pia-purwanti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'A9enMBmNT6', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(37, 'Raihan Irawan', 'raihan-irawan@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '5S1YNUs6KO', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(38, 'Mala Zulaikha Mulyani M.Farm', 'mala-zulaikha-mulyani-mfarm@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'FSq9xnHXNq', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(39, 'Hairyanto Wibowo S.Psi', 'hairyanto-wibowo-spsi@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '8zimkpGL5r', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(40, 'Harsanto Bakti Firgantoro M.Kom.', 'harsanto-bakti-firgantoro-mkom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'syobD3JtDe', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(41, 'Bahuwirya Himawan Pradipta', 'bahuwirya-himawan-pradipta@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '4ze57MqTS3', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(42, 'Hardana Samosir', 'hardana-samosir@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'J9AlH27fJb', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(43, 'Galar Marbun S.Ked', 'galar-marbun-sked@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'mGd1G0tqCZ', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(44, 'Timbul Hardiansyah', 'timbul-hardiansyah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'kBq80O7CqB', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(45, 'Diah Safitri', 'diah-safitri@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'DIfEj0OXuw', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(46, 'Dian Azalea Rahayu M.TI.', 'dian-azalea-rahayu-mti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'h5fawKVic2', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(47, 'Silvia Jasmin Maryati M.Pd', 'silvia-jasmin-maryati-mpd@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'opIgXAQA8l', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(48, 'Kiandra Palastri', 'kiandra-palastri@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '3Qybqn5KaC', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(49, 'Harimurti Tamba S.Kom', 'harimurti-tamba-skom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '59b7xmm6TB', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(50, 'Halim Saragih S.H.', 'halim-saragih-sh@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'qMOJUqNbPr', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(51, 'Tina Nurdiyanti', 'tina-nurdiyanti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'bmAuuB06lh', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(52, 'Najwa Mardhiyah', 'najwa-mardhiyah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OA4cvekxaq', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(53, 'Malika Astuti', 'malika-astuti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'w4exKQpm4R', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(54, 'Danu Pangestu S.I.Kom', 'danu-pangestu-sikom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'i8eJT7jzYa', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(55, 'Bakiadi Saadat Tampubolon', 'bakiadi-saadat-tampubolon@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'hlmV6HkmAJ', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(56, 'Ophelia Julia Permata S.H.', 'ophelia-julia-permata-sh@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '70kDRqZcyG', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(57, 'Karsa Perkasa Pradipta S.IP', 'karsa-perkasa-pradipta-sip@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'U6glhw0i4t', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(58, 'Zaenab Farida', 'zaenab-farida@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OqI5lEOoJF', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(59, 'Ulya Kusmawati', 'ulya-kusmawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '4oi82r0pL8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(60, 'Maras Mansur', 'maras-mansur@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'oW6DMHGNRp', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(61, 'Ciaobella Fitria Halimah S.Gz', 'ciaobella-fitria-halimah-sgz@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'TxuuUhHGvd', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(62, 'Maras Dongoran S.Psi', 'maras-dongoran-spsi@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'VhhiLKS832', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(63, 'Cager Nashiruddin', 'cager-nashiruddin@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'oQhKnh6n2e', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(64, 'Laila Wijayanti M.Kom.', 'laila-wijayanti-mkom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ovOsmwXu7z', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(65, 'Jessica Uyainah M.Kom.', 'jessica-uyainah-mkom@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'hZRpzhVDGz', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(66, 'Makuta Zulkarnain', 'makuta-zulkarnain@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '4om35kv4Xw', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(67, 'Damu Banawi Mandala S.Ked', 'damu-banawi-mandala-sked@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OEggdtrl34', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(68, 'Queen Haryanti', 'queen-haryanti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'BpprBwelrr', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(69, 'Harsana Dadi Siregar M.M.', 'harsana-dadi-siregar-mm@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'QWYhIjk3Jn', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(70, 'Asman Najmudin', 'asman-najmudin@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OIIlqO2KTM', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(71, 'Endah Rahmawati', 'endah-rahmawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'dMNwFASGi6', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(72, 'Cakrajiya Nainggolan', 'cakrajiya-nainggolan@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '5kjywhxcTW', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(73, 'Opung Siregar M.M.', 'opung-siregar-mm@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'w1QNoF3gov', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(74, 'Tira Anita Rahimah', 'tira-anita-rahimah@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'WT7i4tBim2', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(75, 'Purwadi Candrakanta Pradana M.TI.', 'purwadi-candrakanta-pradana-mti@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'KNUVfTWdQg', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(76, 'Cakrawala Tirta Santoso', 'cakrawala-tirta-santoso@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'VG9RljtB19', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(77, 'Puti Aryani', 'puti-aryani@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'QKaEubQrjM', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(78, 'Puji Namaga M.Ak', 'puji-namaga-mak@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Hq8oEXU31e', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(79, 'Jane Purnawati', 'jane-purnawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'G0IJ4CIFrx', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(80, 'Humaira Anggraini', 'humaira-anggraini@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'u0Qhyksbd7', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(81, 'Paulin Agustina', 'paulin-agustina@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'YW2MXp32sY', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(82, 'Umaya Mansur', 'umaya-mansur@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '5zbCKkLAum', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(83, 'Vero Bakiono Santoso S.T.', 'vero-bakiono-santoso-st@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '1YfVwaVG4R', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(84, 'Rahayu Rachel Puspita', 'rahayu-rachel-puspita@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'HpZ6Kk0CWg', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(85, 'Baktiadi Iswahyudi S.IP', 'baktiadi-iswahyudi-sip@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'cFI0ZBKaOW', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(86, 'Belinda Aryani', 'belinda-aryani@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'trbT1q6V8e', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(87, 'Taufan Xanana Prakasa', 'taufan-xanana-prakasa@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '4fJCLj1MAi', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(88, 'Okta Jefri Nashiruddin S.IP', 'okta-jefri-nashiruddin-sip@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ikVk3LdoKc', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(89, 'Olivia Puspa Hassanah S.IP', 'olivia-puspa-hassanah-sip@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'a4VO9XJM2T', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(90, 'Sadina Novi Rahmawati S.E.I', 'sadina-novi-rahmawati-sei@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'fvqoK7PaG8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(91, 'Gara Hidayat', 'gara-hidayat@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'T0A68FlFTc', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(92, 'Bagus Setiawan', 'bagus-setiawan@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'KKa031ufP8', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(93, 'Bakijan Suwarno', 'bakijan-suwarno@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'kcbUtRnvf7', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(94, 'Eka Rahmawati', 'eka-rahmawati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'kCr7Tgg3Ko', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(95, 'Betania Tantri Aryani M.Ak', 'betania-tantri-aryani-mak@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'qwIuTVkb6c', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(96, 'Hana Hartati', 'hana-hartati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'stUPiRfWie', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(97, 'Ella Rahayu', 'ella-rahayu@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Wiv0Ftnk0j', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(98, 'Edison Irawan S.Pd', 'edison-irawan-spd@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ynZMW2Jxt5', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(99, 'Ciaobella Puti Susanti S.T.', 'ciaobella-puti-susanti-st@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'CwVD8X0eXX', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(100, 'Jagapati Widodo', 'jagapati-widodo@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '8kQUVSL20N', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(101, 'Ami Fujiati', 'ami-fujiati@gmail.com', '2025-05-06 14:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'tenant', NULL, NULL, 'jvGUDr1Q5P', '2025-05-06 14:27:21', '2025-05-06 14:27:21'),
(102, 'Zainul Fahmi', 'fahmiatmaja@gmail.com', NULL, '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'tenant', '083894823865', 'Pringgarata lombok tengah', NULL, '2025-05-07 03:11:06', '2025-05-07 03:11:06'),
(103, 'adli naufal ramadhan', 'adliggh124@icloud.com', NULL, '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'tenant', '087761145082', 'mataram lombok barat', NULL, '2025-05-07 03:14:59', '2025-05-07 03:14:59'),
(104, 'Puspita rini', 'rinip3578@gmail.com', NULL, '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'tenant', '081703538397', 'Karang ide 2', NULL, '2025-05-07 05:07:38', '2025-05-07 05:07:38'),
(105, 'Arjun', 'rekisrama76@gmail.com', NULL, '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'tenant', '085333008902', 'Bagu', NULL, '2025-05-07 06:41:51', '2025-05-07 06:41:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `locations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`locations`)),
  `facilities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`facilities`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_preferences`
--

INSERT INTO `user_preferences` (`id`, `user_id`, `type`, `locations`, `facilities`, `created_at`, `updated_at`) VALUES
(3, 102, 'campur', '[\"1\",\"2\",\"4\"]', '[\"2\",\"3\",\"4\",\"6\"]', '2025-05-21 21:39:31', '2025-05-21 21:39:31'),
(5, 105, 'putra', '[\"1\",\"3\"]', '[\"2\",\"5\"]', '2025-05-21 22:40:00', '2025-05-21 22:40:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_room_interactions`
--

CREATE TABLE `user_room_interactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `interaction_type` enum('view','booking','review') NOT NULL,
  `interaction_value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_room_interactions`
--

INSERT INTO `user_room_interactions` (`id`, `user_id`, `room_id`, `interaction_type`, `interaction_value`, `created_at`, `updated_at`) VALUES
(1, 102, 23, 'view', 1, '2025-05-21 21:46:07', '2025-05-21 21:46:07'),
(2, 102, 1, 'view', 1, '2025-05-21 21:46:20', '2025-05-21 21:46:20'),
(3, 102, 11, 'view', 1, '2025-05-21 21:46:29', '2025-05-21 21:46:29'),
(4, 105, 1, 'view', 1, '2025-05-21 23:00:23', '2025-05-21 23:00:23'),
(5, 101, 1, 'view', 1, '2025-06-03 16:59:54', '2025-06-03 16:59:54'),
(6, 101, 2, 'view', 2, '2025-06-03 16:59:59', '2025-06-03 22:18:43'),
(7, 101, 3, 'view', 1, '2025-06-03 17:00:03', '2025-06-03 17:00:03'),
(8, 101, 3, 'booking', 5, '2025-06-03 17:00:35', '2025-06-03 17:00:35'),
(9, 101, 2, 'booking', 5, '2025-06-03 17:00:59', '2025-06-03 17:00:59'),
(10, 101, 1, 'booking', 5, '2025-06-03 17:01:12', '2025-06-03 17:01:12'),
(11, 101, 1, 'review', 4, '2025-06-03 17:07:57', '2025-06-03 17:07:57'),
(12, 101, 2, 'review', 8, '2025-06-03 17:08:06', '2025-06-03 17:08:06'),
(13, 101, 3, 'review', 10, '2025-06-03 17:08:21', '2025-06-03 17:08:21'),
(14, 102, 4, 'view', 2, '2025-06-03 19:49:18', '2025-06-03 19:49:30'),
(15, 102, 5, 'view', 1, '2025-06-03 19:49:22', '2025-06-03 19:49:22'),
(16, 102, 6, 'view', 1, '2025-06-03 19:49:24', '2025-06-03 19:49:24'),
(17, 102, 4, 'booking', 5, '2025-06-03 19:49:52', '2025-06-03 19:49:52'),
(18, 102, 5, 'booking', 5, '2025-06-03 19:50:12', '2025-06-03 19:50:12'),
(19, 102, 6, 'booking', 5, '2025-06-03 19:50:24', '2025-06-03 19:50:24'),
(20, 102, 6, 'review', 8, '2025-06-03 19:50:42', '2025-06-03 19:50:42'),
(21, 102, 5, 'review', 10, '2025-06-03 19:50:54', '2025-06-03 19:50:54'),
(22, 102, 4, 'review', 8, '2025-06-03 19:51:08', '2025-06-03 19:51:08'),
(23, 103, 7, 'view', 1, '2025-06-03 19:54:48', '2025-06-03 19:54:48'),
(24, 103, 8, 'view', 1, '2025-06-03 19:54:49', '2025-06-03 19:54:49'),
(25, 103, 9, 'view', 1, '2025-06-03 19:54:51', '2025-06-03 19:54:51'),
(26, 103, 7, 'booking', 5, '2025-06-03 19:55:26', '2025-06-03 19:55:26'),
(27, 103, 8, 'booking', 5, '2025-06-03 19:56:07', '2025-06-03 19:56:07'),
(28, 103, 9, 'booking', 5, '2025-06-03 19:56:24', '2025-06-03 19:56:24'),
(29, 103, 9, 'review', 10, '2025-06-03 19:56:33', '2025-06-03 19:56:33'),
(30, 103, 8, 'review', 8, '2025-06-03 19:56:43', '2025-06-03 19:56:43'),
(31, 103, 7, 'review', 4, '2025-06-03 19:56:58', '2025-06-03 19:56:58'),
(32, 104, 10, 'view', 1, '2025-06-03 20:11:33', '2025-06-03 20:11:33'),
(33, 104, 11, 'view', 1, '2025-06-03 20:11:34', '2025-06-03 20:11:34'),
(34, 104, 12, 'view', 1, '2025-06-03 20:11:35', '2025-06-03 20:11:35'),
(35, 104, 10, 'booking', 5, '2025-06-03 20:18:02', '2025-06-03 20:18:02'),
(36, 104, 11, 'booking', 5, '2025-06-03 20:18:17', '2025-06-03 20:18:17'),
(37, 104, 12, 'booking', 5, '2025-06-03 20:18:31', '2025-06-03 20:18:31'),
(38, 104, 12, 'review', 10, '2025-06-03 20:18:45', '2025-06-03 20:18:45'),
(39, 104, 11, 'review', 8, '2025-06-03 20:18:56', '2025-06-03 20:18:56'),
(40, 104, 10, 'review', 8, '2025-06-03 20:19:08', '2025-06-03 20:19:08'),
(41, 105, 13, 'view', 1, '2025-06-03 20:39:18', '2025-06-03 20:39:18'),
(42, 105, 14, 'view', 1, '2025-06-03 20:39:19', '2025-06-03 20:39:19'),
(43, 105, 15, 'view', 1, '2025-06-03 20:39:20', '2025-06-03 20:39:20'),
(44, 105, 13, 'booking', 5, '2025-06-03 20:39:52', '2025-06-03 20:39:52'),
(45, 105, 14, 'booking', 5, '2025-06-03 20:40:10', '2025-06-03 20:40:10'),
(46, 105, 13, 'review', 8, '2025-06-03 20:40:23', '2025-06-03 20:40:23'),
(47, 105, 14, 'review', 10, '2025-06-03 20:40:39', '2025-06-03 20:40:39'),
(48, 105, 15, 'booking', 5, '2025-06-03 20:40:54', '2025-06-03 20:40:54'),
(49, 105, 15, 'review', 10, '2025-06-03 20:42:24', '2025-06-03 20:42:24'),
(50, 105, 2, 'view', 1, '2025-06-03 20:45:24', '2025-06-03 20:45:24'),
(51, 105, 2, 'booking', 5, '2025-06-03 20:46:05', '2025-06-03 20:46:05'),
(52, 105, 2, 'review', 8, '2025-06-03 20:46:34', '2025-06-03 20:46:34'),
(53, 101, 14, 'view', 2, '2025-06-03 22:21:01', '2025-06-03 22:21:24'),
(54, 101, 14, 'booking', 5, '2025-06-03 22:21:40', '2025-06-03 22:21:40'),
(55, 101, 14, 'review', 4, '2025-06-03 22:21:48', '2025-06-03 22:21:48'),
(56, 101, 6, 'view', 1, '2025-06-03 23:16:03', '2025-06-03 23:16:03'),
(57, 101, 6, 'booking', 5, '2025-06-03 23:16:15', '2025-06-03 23:16:15'),
(58, 101, 6, 'review', 4, '2025-06-03 23:17:08', '2025-06-03 23:17:08'),
(59, 102, 7, 'review', 10, '2025-06-04 01:03:02', '2025-06-04 01:03:02'),
(60, 103, 6, 'review', 8, '2025-06-04 01:55:15', '2025-06-04 01:55:15'),
(61, 104, 6, 'review', 8, '2025-06-04 02:03:50', '2025-06-04 02:03:50'),
(62, 105, 6, 'review', 8, '2025-06-04 02:05:13', '2025-06-04 02:05:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aturan_kos`
--
ALTER TABLE `aturan_kos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aturan_kos_property_id_foreign` (`property_id`);

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_booking_id_foreign` (`booking_id`);

--
-- Indeks untuk tabel `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `public_locations`
--
ALTER TABLE `public_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_locations_property_id_foreign` (`property_id`),
  ADD KEY `public_locations_location_id_foreign` (`location_id`);

--
-- Indeks untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_room_id_foreign` (`room_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_booking_id_foreign` (`booking_id`);

--
-- Indeks untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_slug_unique` (`slug`),
  ADD KEY `rooms_property_id_foreign` (`property_id`);

--
-- Indeks untuk tabel `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_facilities_room_id_foreign` (`room_id`),
  ADD KEY `rooms_facilities_facility_id_foreign` (`facility_id`);

--
-- Indeks untuk tabel `room_similarities`
--
ALTER TABLE `room_similarities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `similarities`
--
ALTER TABLE `similarities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_preferences_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `user_room_interactions`
--
ALTER TABLE `user_room_interactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_room_interactions_user_id_foreign` (`user_id`),
  ADD KEY `user_room_interactions_room_id_foreign` (`room_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aturan_kos`
--
ALTER TABLE `aturan_kos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `public_locations`
--
ALTER TABLE `public_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `regencies`
--
ALTER TABLE `regencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `room_similarities`
--
ALTER TABLE `room_similarities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT untuk tabel `similarities`
--
ALTER TABLE `similarities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_room_interactions`
--
ALTER TABLE `user_room_interactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aturan_kos`
--
ALTER TABLE `aturan_kos`
  ADD CONSTRAINT `aturan_kos_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`),
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `public_locations`
--
ALTER TABLE `public_locations`
  ADD CONSTRAINT `public_locations_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `public_locations_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Ketidakleluasaan untuk tabel `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  ADD CONSTRAINT `rooms_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rooms_facilities_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD CONSTRAINT `user_preferences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_room_interactions`
--
ALTER TABLE `user_room_interactions`
  ADD CONSTRAINT `user_room_interactions_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `user_room_interactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
