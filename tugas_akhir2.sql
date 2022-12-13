-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 11:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `nama`, `jabatan_id`, `divisi_id`, `angkatan`, `jurusan`, `created_at`, `updated_at`) VALUES
(4, 'Thiara Amanda', 10, 2, '2019', 'Teknik Arsitektur', '2022-08-19 07:11:00', '2022-08-19 07:11:00'),
(5, 'Kholifah', 12, 2, '2019', 'Teknik Arsitektur', '2022-08-19 16:42:37', '2022-08-19 16:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `kode_barang`, `jumlah`, `created_at`, `updated_at`) VALUES
(3, 'Barebow', 'A03', 60, '2022-08-07 01:00:34', '2022-08-20 16:35:28'),
(4, 'Arm Guard', 'B32', 60, '2022-08-07 01:01:22', '2022-08-20 08:14:12'),
(5, 'Busur', 'A21', 150, '2022-08-07 01:01:45', '2022-08-22 13:01:54'),
(6, 'Back Stoper', 'BS3', 120, '2022-08-07 01:02:15', '2022-08-20 16:29:04'),
(7, 'Case Guard', 'CG1', 90, '2022-08-07 01:02:37', '2022-08-20 16:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `user_id`, `title`, `kategori_id`, `gambar`, `description`, `created_at`, `updated_at`) VALUES
(2, 1, 'Coba Buat Berita', 1, 'images/NbLDPQeMTIE5rbCnvVp34RVQnJZZcY54zx8GFoA6.png', '<div>ini konten coba coba</div>', '2022-08-10 11:58:15', '2022-08-17 03:23:34'),
(4, 1, 'Coba Coba', 4, 'images/zvrUKEegAJfdBknnbmVaj7WMwqwVyNzifpXZZmg5.png', '<div>coba coba</div>', '2022-08-17 03:25:13', '2022-08-17 03:25:13'),
(6, 1, 'Cobain aja', 2, 'images/CNhSO2awE6pRSl4vjkthw8q71Wv17Z60wXLJbPxQ.jpg', '<div>apa si</div>', '2022-08-19 04:04:34', '2022-08-19 04:04:34'),
(7, 1, 'Apa ya', 3, 'images/YD4LBOB0Xm0eZPfAC2AJu0WZDml6R1HMPqppslrS.jpg', '<div>&nbsp;\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"&nbsp;<br>&nbsp;\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"&nbsp;</div>', '2022-08-19 05:25:11', '2022-08-19 05:25:11'),
(8, 1, 'Latihan Internal', 3, 'images/bQ5NCEPfQ8OR5N6NJczzwYKTZUZQ4Ul743OyRj6q.jpg', '<div>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum gravida lacus eget egestas. In maximus massa mollis nulla pretium tristique. Morbi varius sed diam eget molestie. Vestibulum sit amet ornare enim. Nam ornare porta sapien eu euismod. Vivamus vitae elementum magna. Vestibulum maximus purus lectus, vel tincidunt sem laoreet ac. Quisque eget urna sollicitudin, elementum tortor at, pellentesque tortor. Fusce gravida eros quis erat elementum pretium. Donec magna nibh, tincidunt in volutpat eu, condimentum quis purus. Sed bibendum est a dictum tempor. Vivamus eu facilisis augue. Integer laoreet quam nec diam scelerisque, non tincidunt felis cursus. Cras posuere lobortis ligula, consequat sagittis quam rhoncus a. Quisque sed facilisis dolor, quis ultrices ex.&nbsp;<br><br></div><div>&nbsp;Proin vel arcu ac justo accumsan ultricies et ut elit. Sed sit amet rutrum sapien. Cras ut ipsum vestibulum lacus euismod fringilla et a ante. Nunc quis ultricies enim. Fusce ut iaculis elit. Suspendisse potenti. Cras aliquam mi sed aliquam feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor viverra risus fermentum efficitur. Mauris tristique mattis condimentum.&nbsp;<br><br></div>', '2022-08-19 16:56:09', '2022-08-19 16:56:09'),
(9, 11, 'Penerimaan anggota panahan', 4, 'images/vb5Q3X94JmBCnhrqgHbMJabxAaSfJU7ryndU6c2g.jpg', '<div><strong>jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj</strong> jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwjvjhgdjhgjdwwhbhjbwj v<br>jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwjvjhgdjhgjdwwhbhjbwj v<br>jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwjvjhgdjhgjdwwhbhjbwj v<br>jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwjvjhgdjhgjdwwhbhjbwj v<br>jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwj jhgdjhgjdwwhbhjbwjvjhgdjhgjdwwhbhjbwj&nbsp;</div>', '2022-08-21 23:44:54', '2022-08-21 23:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ukms`
--

CREATE TABLE `daftar_ukms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` tinyint(5) NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidik_ms` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `daftar_ukms`
--

INSERT INTO `daftar_ukms` (`id`, `nama`, `nim`, `jurusan`, `prodi`, `jk`, `nohp`, `gambar`, `bidik_ms`, `created_at`, `updated_at`) VALUES
(12, 'Oktavianti', '3201916027', 'Teknik Arsitektur', 'Desain Kawasan Bangunan', 0, '082252423199', 'images/KSYgEo58nzzGwSVz4RJ573JV9mgOqXySxil9kv6x.jpg', 1, '2022-08-19 16:53:03', '2022-08-19 16:53:03'),
(13, 'Thiara Amanda', '3201905220', 'Akuntansi', 'Akuntansi', 0, '08987809495', 'images/UV9gZ0rsfJ3tKroiYUvp3PBcVna69hDmenOEm2G8.jpg', 1, '2022-08-19 18:30:22', '2022-08-19 18:30:22'),
(14, 'Selibitri', '3201916022', 'Teknik Elektro', 'Teknik Informatika', 0, '082252423199', 'images/ASuwVa61lo2sXtLv1y9AVOAx1n89nGiz4vQQfsl9.jpg', 1, '2022-08-19 18:31:01', '2022-08-19 18:31:01'),
(16, 'Kholifah', '12938903', 'Arsitektur', 'Teknik Sipil', 0, '085822369007', 'images/KOcY5lhH3Y750Px93zGRhXOWWD7Qnn7ystmwzQy8.jpg', 0, '2022-08-19 19:51:20', '2022-08-19 19:51:20'),
(17, 'Zuhaidah', '32019160051', 'Teknik Elektro', 'Teknik Informatika', 0, '09837398923', 'images/xXufacGNZYwwgnzU1bier0BPQj4I1tkIZPYLuJDT.png', 1, '2022-08-21 23:26:12', '2022-08-21 23:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Divisi UPT', '2022-07-31 12:27:04', '2022-07-31 12:27:04'),
(2, 'Divisi Kaderisasi', '2022-07-31 12:27:55', '2022-07-31 12:28:27'),
(3, 'Divisi HUMAS', '2022-07-31 12:29:31', '2022-07-31 12:29:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Ketua', '2022-07-31 12:33:22', '2022-07-31 12:33:22'),
(3, 'Sekretaris Jendral', '2022-07-31 12:33:59', '2022-07-31 12:33:59'),
(4, 'Bendahara', '2022-07-31 12:34:31', '2022-07-31 12:34:31'),
(5, 'Sekretaris', '2022-07-31 12:35:02', '2022-07-31 12:35:02'),
(6, 'Ketua Divisi UPT', '2022-07-31 12:35:55', '2022-07-31 12:35:55'),
(7, 'Ketua Divisi HUMAS', '2022-07-31 12:36:27', '2022-07-31 12:36:27'),
(8, 'Ketua Divisi Kaderisasi', '2022-07-31 12:37:08', '2022-07-31 12:37:08'),
(9, 'Kepala Bidang Perawatan', '2022-07-31 12:37:40', '2022-07-31 12:37:40'),
(10, 'Kepala Bidang Pengadaan', '2022-07-31 12:38:13', '2022-07-31 12:38:13'),
(11, 'Kepala Bidang Internal', '2022-07-31 12:38:50', '2022-07-31 12:38:50'),
(12, 'Kepada Bidang Eksternal', '2022-07-31 12:39:19', '2022-07-31 12:39:19'),
(13, 'Kepala Bidang Pelatihan', '2022-07-31 12:39:54', '2022-07-31 12:39:54'),
(14, 'Kepala Bidang Pendidikan', '2022-07-31 12:40:42', '2022-07-31 12:40:42'),
(15, 'Anggota', '2022-07-31 12:41:16', '2022-07-31 12:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Divisi UPT', '2022-08-10 10:02:45', '2022-08-10 10:02:45'),
(2, 'Divisi HUMAS', '2022-08-10 10:03:21', '2022-08-10 10:03:21'),
(3, 'Divisi Kaderisasi', '2022-08-10 10:04:26', '2022-08-10 10:04:26'),
(4, 'Divisi Umum', '2022-08-10 10:04:55', '2022-08-10 10:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_25_075228_create_divisis_table', 1),
(6, '2022_07_25_075346_create_jabatans_table', 1),
(7, '2022_07_25_080124_create_daftar_ukms_table', 1),
(8, '2022_07_25_081617_create_kategoris_table', 1),
(9, '2022_07_25_081655_create_beritas_table', 1),
(10, '2022_07_25_081722_create_alumnis_table', 1),
(11, '2022_07_25_081750_create_peminjamen_table', 1),
(12, '2022_07_25_081821_create_barangs_table', 1),
(13, '2022_07_25_081856_create_penguruses_table', 1),
(14, '2022_07_25_081956_create_strukturs_table', 1),
(15, '2022_07_25_082057_create_galeris_table', 1),
(16, '2022_08_11_005533_create_sejarah_table', 2),
(17, '2022_08_15_212055_create_sejarahs_table', 3),
(18, '2022_08_17_093000_create_visimisis_table', 4),
(19, '2022_08_17_170500_create_strukturs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nama_peminjam` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `nama_kembali` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `peminjamen`
--

INSERT INTO `peminjamen` (`id`, `barang_id`, `user_id`, `tanggal_pinjam`, `nama_peminjam`, `tujuan`, `jumlah`, `status`, `created_at`, `updated_at`, `tanggal_kembali`, `nama_kembali`) VALUES
(17, 3, 12, '2022-08-20', 'Amanda', 'Lomba 17 an', 91, 2, '2022-08-19 17:10:11', '2022-08-19 17:12:48', '2022-08-22', 'Lalal'),
(18, 4, 12, '2022-08-18', 'Ridho', 'Latihan', 20, 2, '2022-08-20 06:06:22', '2022-08-20 06:07:33', '2022-08-21', 'widho'),
(19, 5, 12, '2022-08-20', 'seli', 'Latiahn', 11, 2, '2022-08-20 06:18:15', '2022-08-20 06:18:51', '2022-08-21', 'Ridho'),
(20, 3, 12, '2022-08-20', 'seli', 'Latihan', 10, 2, '2022-08-20 06:23:23', '2022-08-20 06:23:43', '2022-08-21', 'Seli'),
(21, 6, 12, '2022-08-20', 'Seli', 'Lomba', 10, 2, '2022-08-20 06:27:17', '2022-08-20 06:27:37', '2022-08-21', 'Seli'),
(22, 3, 12, '2022-08-20', 'robih', 'Lllll', 10, 2, '2022-08-20 06:53:37', '2022-08-20 07:58:53', '2022-08-22', 'Robih'),
(23, 5, 12, '2022-08-20', 'Seli', 'Latihan', 10, 2, '2022-08-20 08:00:00', '2022-08-20 08:00:30', '2022-08-21', 'sp'),
(24, 4, 12, '2022-08-20', 'Seli', 'Lomba internal', 9, 2, '2022-08-20 08:14:12', '2022-08-20 08:14:33', '2022-08-21', 'Via'),
(25, 3, 12, '2022-08-20', 'kkk', 'kkk', 5, 2, '2022-08-20 09:04:30', '2022-08-20 09:04:48', '2022-08-21', 'll'),
(26, 3, 12, '2022-08-20', 'ffff', 'fff', 5, 2, '2022-08-20 09:09:24', '2022-08-20 09:09:39', '2022-08-21', 'sss'),
(27, 3, 12, '2022-08-20', 'ffff', 'dd', 5, 2, '2022-08-20 09:12:11', '2022-08-20 09:20:46', '2022-08-21', 'dddd'),
(28, 3, 12, '2022-08-20', 'fff', 'ddd', 5, 2, '2022-08-20 09:14:39', '2022-08-20 09:15:12', '2022-08-21', 'ggg'),
(30, 5, 12, '2022-08-20', 'Viayayaya', 'lomba internal', 10, 2, '2022-08-20 09:41:16', '2022-08-20 09:41:46', '2022-08-21', 'Seli'),
(32, 7, 12, '2022-08-21', 'Bitri', 'Lomba 17 an', 20, 2, '2022-08-20 16:14:02', '2022-08-20 16:14:45', '2022-08-22', 'Seli'),
(33, 6, 12, '2022-08-21', 'Faisal', 'Lomba 17 an', 20, 2, '2022-08-20 16:27:15', '2022-08-20 16:29:04', '2022-08-22', 'Budi'),
(34, 3, 2, '2022-08-21', 'Selibitri', 'Latihan bersama', 10, 2, '2022-08-20 16:34:45', '2022-08-20 16:35:28', '2022-08-28', 'Amanda aja'),
(35, 5, 2, '2022-08-21', 'Robih', 'lomba', 10, 2, '2022-08-21 00:12:07', '2022-08-21 00:13:49', '2022-08-22', 'seli'),
(36, 5, 12, '2022-08-21', 'Seli', 'Lomba', 10, 2, '2022-08-21 03:16:29', '2022-08-21 03:18:10', '2022-08-22', 'Oktavianti'),
(38, 5, 2, '2022-08-21', 'sdsds', 'sasasa', 10, 2, '2022-08-21 03:34:46', '2022-08-21 03:37:46', '2022-08-22', 'ddd'),
(39, 5, 12, '2022-08-23', 'Zuhaidah', 'Latihan bersama', 20, 2, '2022-08-22 12:52:56', '2022-08-22 13:01:54', '2022-08-24', 'Elianti');

-- --------------------------------------------------------

--
-- Table structure for table `penguruses`
--

CREATE TABLE `penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `penguruses`
--

INSERT INTO `penguruses` (`id`, `nama`, `jabatan_id`, `divisi_id`, `angkatan`, `jurusan`, `prodi`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Bagus Prasetyo', 11, 2, '2019', 'Information Technology', 'Engineer', 'images/D62SLXNdNOZyUbd9TPcPk0W63aueqW9mYlNKjtVR.png', '2022-08-01 06:12:17', '2022-08-10 09:43:42'),
(3, 'Seli', 2, 1, '2019', 'Information System', 'Engineer', 'images/gja96a8UgIIXQXSimYK8OjbunyZHiskMU4jSMqpq.jpg', '2022-08-01 06:15:03', '2022-08-10 09:39:56'),
(10, 'Anjeline Oktasya Gustin', 3, 2, '2022', 'Teknik Elektro', 'Teknik Informatika', 'D:\\xampp\\tmp\\php2F4F.tmp', '2022-08-19 02:59:07', '2022-08-19 02:59:07'),
(11, 'Oktavianti', 3, 2, '2022', 'Teknik Elektro', 'Teknik Informatika', 'images/ir9Lh6ag58BPRtEjKvFGhGTsNtSL350cX5zFpsUe.jpg', '2022-08-19 03:19:51', '2022-08-21 01:10:00'),
(12, 'Amanda', 5, 3, '2020', 'Teknik Elektro', 'Teknik Informatika', 'D:\\xampp\\tmp\\phpE290.tmp', '2022-08-19 04:30:30', '2022-08-19 04:30:30'),
(13, 'Selibitri', 5, 2, '2019', 'Teknik Arsitektur', 'Desain Kawasan Bangunan', 'D:\\xampp\\tmp\\phpF36E.tmp', '2022-08-19 04:40:25', '2022-08-19 04:40:25'),
(15, 'Oktavianti', 4, 3, '2019', 'Teknik Sipil', 'Desain Kawasan Bangunan', 'D:\\xampp\\tmp\\php5A68.tmp', '2022-08-19 06:45:22', '2022-08-19 06:45:22'),
(16, 'Faisal', 12, 2, '2019', 'Teknik Arsitektur', 'Desain Kawasan Bangunan', 'images/0OWSjKIgZf77gec6KBNDGHjfGTXScW6jkg7dSIQG.png', '2022-08-19 06:53:05', '2022-08-19 06:53:05'),
(17, 'Dinda Apriliani', 4, 2, '2020', 'Akuntansi', 'Akuntansi Sektor Publik', 'images/d2n1LNL3TtnMSxpkrM9muKTDJPwSmDnn9lwUCIg4.png', '2022-08-19 16:40:46', '2022-08-21 23:24:54');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `konten`, `created_at`, `updated_at`) VALUES
(1, '<div><strong>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong>&nbsp;<br>Nunc interdum gravida lacus eget egestas. In maximus massa mollis nulla pretium tristique. Morbi varius sed diam eget molestie. Vestibulum sit amet ornare enim. Nam ornare porta sapien eu euismod. Vivamus vitae elementum magna. Vestibulum maximus purus lectus, vel tincidunt sem laoreet ac. Quisque eget urna sollicitudin, elementum tortor at, pellentesque tortor. Fusce gravida eros quis erat elementum pretium. Donec magna nibh, tincidunt in volutpat eu, condimentum quis purus. Sed bibendum est a dictum tempor. Vivamus eu facilisis augue. Integer laoreet quam nec diam scelerisque, non tincidunt felis cursus. Cras posuere lobortis ligula, consequat sagittis quam rhoncus a. Quisque sed facilisis dolor, quis ultrices ex.&nbsp;<br><br></div><div>&nbsp;<br><br></div><div>&nbsp;<br><br></div>', '2022-08-15 14:35:28', '2022-08-21 23:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `strukturs`
--

INSERT INTO `strukturs` (`id`, `periode`, `gambar`, `created_at`, `updated_at`) VALUES
(5, '2022', 'images/NGKH4oMST58venio6oOEjk2QvlhqqvXH7SjCrWtu.png', '2022-08-19 16:38:06', '2022-08-19 16:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Seli', 'seli@gmail.com', '$2y$10$keVNrRaozcch3Vss6dTTpOfgRyg11wJJxZ8Qw.y/vsFStB44lQ6sC', 2, NULL, NULL, '2022-07-25 13:27:43', '2022-07-25 13:27:43'),
(11, 'Nur Oktavianti', 'via12@gmail.com', '$2y$10$XsZm4MBvWy37mLAJqqLTmOT7d/zmaELmJ48JFEEsO3UtkhmUhFRY.', 1, NULL, NULL, '2022-08-19 16:58:04', '2022-08-21 22:09:02'),
(12, 'Anjeline Oktasya Gustin', 'anjelkawai@gmail.com', '$2y$10$toCEYESWM8UnxjOVXzBVHebP7r0zHgvkdV58s9aha0UI0UIeXwP4m', 2, NULL, NULL, '2022-08-19 16:58:41', '2022-08-19 16:58:41'),
(13, 'Amanda', 'amanda@gmail.com', '$2y$10$kPVpY.p.e5d4LYc3QlwLt.EbMPRtDQNW2iJH/sN0ElvC1j.ibtI9C', 1, NULL, NULL, '2022-08-21 07:03:00', '2022-08-21 07:03:00'),
(14, 'Thiara Amanda', 'thiara12@gmail.com', '$2y$10$euA9IBkoBldTVdzh9AvO6e7plmw5opjxRqJ2ATP.LkR0WKvPEBB4q', 1, NULL, NULL, '2022-08-21 21:08:01', '2022-08-21 21:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `visimisis`
--

CREATE TABLE `visimisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `visimisis`
--

INSERT INTO `visimisis` (`id`, `periode`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(2, '2020', '<div>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum gravida lacus eget egestas. In maximus massa mollis nulla pretium tristique. Morbi varius sed diam eget molestie. Vestibulum sit amet ornare enim. Nam ornare porta sapien eu euismod. Vivamus vitae elementum magna. Vestibulum maximus purus lectus, vel tincidunt sem laoreet ac. Quisque eget urna sollicitudin, elementum tortor at, pellentesque tortor. Fusce gravida eros quis erat elementum pretium. Donec magna nibh, tincidunt in volutpat eu, condimentum quis purus. Sed bibendum est a dictum tempor. Vivamus eu facilisis augue. Integer laoreet quam nec diam scelerisque, non tincidunt felis cursus. Cras posuere lobortis ligula, consequat sagittis quam rhoncus a. Quisque sed facilisis dolor, quis ultrices ex.&nbsp;</div>', '<div>&nbsp;</div>', '2022-08-19 16:39:17', '2022-08-21 21:02:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `daftar_ukms`
--
ALTER TABLE `daftar_ukms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `visimisis`
--
ALTER TABLE `visimisis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daftar_ukms`
--
ALTER TABLE `daftar_ukms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visimisis`
--
ALTER TABLE `visimisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
