-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 08:15 AM
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
-- Database: `innobrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vacancy`
--

CREATE TABLE `add_vacancy` (
  `vacancy_id` bigint(20) UNSIGNED NOT NULL,
  `post_for` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `required_candidate` int(11) NOT NULL,
  `skills_req` varchar(600) NOT NULL,
  `description` varchar(600) NOT NULL,
  `type_of_job` varchar(255) NOT NULL,
  `last_date` date NOT NULL,
  `responsibility` varchar(800) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_vacancy`
--

INSERT INTO `add_vacancy` (`vacancy_id`, `post_for`, `experience`, `required_candidate`, `skills_req`, `description`, `type_of_job`, `last_date`, `responsibility`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Frontend Developer', '1 years', 2, 'HTML,CSS,JS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', 'Full Time', '2024-09-12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '2024-08-02 05:57:37', '2024-08-02 05:58:42', NULL),
(2, 'Backend Developer', '2 years', 2, 'HTML,CSS,JS, Reacr, Node', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', 'Full Time', '2024-10-12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '2024-08-12 00:35:47', '2024-08-13 23:01:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`admin_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Kesha Patel', 'keshapatel2302@gmail.com', '$2y$12$/jrSD76xhVMym.DmuXSJieV55ZM6bVwy3InPPyvjmFiyMFlosVWkK', '2024-07-31 05:48:21', '2024-07-31 05:48:21'),
(2, 'Kinjal Shah', '89kinjalshah@gmail.com', '$2y$12$LeH9T3i5AUvrCN3N1/t0GuwCUooA5zc6z3Amdjdrf5GDxLZjpQfVy', '2024-07-31 06:07:34', '2024-08-13 00:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `bannerdata`
--

CREATE TABLE `bannerdata` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannerdata`
--

INSERT INTO `bannerdata` (`banner_id`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Make The World A Better Place With Skill', 'The Future Belongs To Those Who Learn More Skills And Combine Them In Creative Ways', '1723615507img.jpg', '2024-08-14 00:35:07', '2024-08-14 06:15:04', NULL),
(2, 'Internship', 'We provide internship opportunities on different IT domains', '1723615875img.jpg', '2024-08-14 00:41:15', '2024-08-14 01:06:22', NULL),
(3, 'IT Training', 'We also offer various types of basic to advanced IT trainings', '1723615939img.jpg', '2024-08-14 00:42:19', '2024-08-14 01:06:29', NULL),
(4, 'Project Development', 'We offer fully customized project development services based on customer’s requirements', '1723616316img.jpg', '2024-08-14 00:48:36', '2024-08-14 01:05:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_apply`
--

CREATE TABLE `career_apply` (
  `careerapply_id` bigint(20) UNSIGNED NOT NULL,
  `vacancy_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_apply`
--

INSERT INTO `career_apply` (`careerapply_id`, `vacancy_id`, `name`, `email`, `contact`, `resume`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kirti Sharma', 'kirti23@gmail.com', 987654321, 'resume.pdf', 'https://in.linkedin.com/', '2024-08-12 05:34:00', '2024-08-12 05:34:00'),
(2, 2, 'Harsh Patel', 'keshapatel2302@gmail.com', 987654321, '1723457370_WeeklyActivity -11.pdf', NULL, '2024-08-12 04:39:30', '2024-08-12 04:39:30'),
(3, 2, 'Ami Patel', 'amipatel0811@gmail.com', 987654321, '1723784523_git-cheat-sheet-education.pdf', NULL, '2024-08-15 23:32:03', '2024-08-15 23:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Certificate_id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Technology` varchar(255) NOT NULL,
  `Duration` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`Id`, `Certificate_id`, `Name`, `Technology`, `Duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2344, 'Patel Kesha', 'React Js', '3 months', '2024-08-07 05:35:35', '2024-08-13 00:33:04', NULL),
(2, 1234, 'Kirti Sharma', 'Laravel', '3 months', '2024-08-07 05:36:18', '2024-08-07 05:36:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clientdetail`
--

CREATE TABLE `clientdetail` (
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientdetail`
--

INSERT INTO `clientdetail` (`client_id`, `name`, `description`, `Image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home Decor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1722938505img.png', '2024-08-06 04:31:45', '2024-08-16 00:05:02', '2024-08-16 00:05:02'),
(2, 'Tour and Travels', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1722938781img.png', '2024-08-06 04:36:21', '2024-08-16 00:05:04', '2024-08-16 00:05:04'),
(3, 'DigTech', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723786220img.jpg', '2024-08-16 00:00:20', '2024-08-16 00:00:20', NULL),
(4, 'Infinity Web', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723786240img.jpg', '2024-08-16 00:00:40', '2024-08-16 00:00:40', NULL),
(5, 'Orspeak IT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723786267img.jpg', '2024-08-16 00:01:07', '2024-08-16 00:01:07', NULL),
(6, 'Smart Thinking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723786491img.jpg', '2024-08-16 00:04:51', '2024-08-16 00:04:51', NULL),
(7, 'NeoTric Technologies', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723786683img.png', '2024-08-16 00:08:03', '2024-08-16 00:08:03', NULL),
(8, 'IgniteBrain Technologies', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rerum earum sunt sed hic ab. Hic temporibus vitae soluta. Laudantium nulla corporis amet nostrum velit necessitatibus, obcaecati tempora reprehenderit itaque.', '1723787371img.jpg', '2024-08-16 00:19:31', '2024-08-16 00:20:49', NULL);

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
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `interested_in` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `email`, `contact`, `interested_in`, `created_at`, `updated_at`) VALUES
(1, 'Kesha Patel', 'keshapatel6542@gmail.com', 987654321, 'Web Development', '2024-08-01 10:57:20', '2024-08-01 10:57:20'),
(2, 'Kirti Sharma', 'kirti23@gmail.com', 987654321, 'Other', '2024-08-11 23:33:57', '2024-08-11 23:33:57'),
(3, 'Isha Patel', 'isha23@gmail.com', 987654321, 'IT Training', '2024-08-12 22:52:14', '2024-08-12 22:52:14'),
(4, 'Abhi Bhalodia', 'abhi23@gmail.com', 1234567890, 'Internship', '2024-08-15 22:55:13', '2024-08-15 22:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `intern_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `resume` varchar(600) NOT NULL,
  `message` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`intern_id`, `name`, `email`, `contact`, `resume`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kesha Patel', 'keshapatel6542@gmail.com', 987654321, 'resume.pdf', 'I have attached my cv kindly go through my cv.', '2024-08-01 11:13:52', '2024-08-01 11:13:52'),
(2, 'Kesha Patel', 'keshapatel2302@gmail.com', 1234567890, '1723108466_EAadhaar_Leena Pate 55.pdf', 'ZSdxfcgvb', '2024-08-08 03:44:26', '2024-08-08 03:44:26'),
(3, 'Kirti', 'kirti23@gmail.com', 987654321, '1723438567_Internship___Project_Report_Guidelines__3180701__661242.pdf', 'ASDFTGYHUJ', '2024-08-11 23:26:07', '2024-08-11 23:26:07'),
(4, 'Isha Patel', 'isha23@gmail.com', 987654321, '1723523103_Hoop.pdf', 'I want Intership in React.', '2024-08-12 22:55:03', '2024-08-12 22:55:03'),
(5, 'Abhi Bhalodia', 'abhi23@gmail.com', 987654321, '1723782633_git-cheat-sheet-education.pdf', 'I want internship.', '2024-08-15 23:00:33', '2024-08-15 23:00:33'),
(6, 'Parth Patel', 'jinu23@gmail.com', 1234567890, '1723782772_git-cheat-sheet-education.pdf', 'I want internship in frontend.', '2024-08-15 23:02:52', '2024-08-15 23:02:52'),
(7, 'Ami Patel', 'keshapatel2302@gmail.com', 987654321, '1723782904_1723108466_EAadhaar_Leena Pate 55.pdf', 'qwedfvcxaSD', '2024-08-15 23:05:04', '2024-08-15 23:05:04'),
(8, 'Janvi Patel', 'keshapatel2302@gmail.com', 987654321, '1723783057_1723108466_EAadhaar_Leena Pate 55.pdf', 'ZASXdfcgh', '2024-08-15 23:07:37', '2024-08-15 23:07:37'),
(9, 'Kesha Patel', 'keshapatel2302@gmail.com', 987654321, '1723783148_1723108466_EAadhaar_Leena Pate 55.pdf', 'AQWSEDFRGH', '2024-08-15 23:09:08', '2024-08-15 23:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_30_111108_create_table_services', 2),
(5, '2024_07_30_111418_create_table_add_vacancy', 3),
(6, '2024_07_30_112144_create_table_internship', 4),
(7, '2024_07_30_112559_create_table_inquiry', 5),
(8, '2024_07_31_080711_create_clientdetail_table', 6),
(9, '2024_07_31_091903_create_admindetail_table', 7),
(10, '2024_08_01_073156_add_delete_at_to_services_table', 8),
(11, '2024_08_02_085540_add_delete_at_to_add_vacancy_table', 9),
(12, '2024_08_02_113312_add_delete_at_to_clientdetail_table', 10),
(13, '2024_08_06_085805_create_certificate_table', 11),
(14, '2024_08_07_093758_add_delete_at_to_certificate_table', 12),
(15, '2024_08_12_035841_create_career_apply_table', 13),
(16, '2024_08_12_051022_create_career_apply_table', 14),
(17, '2024_08_14_041317_create_bannerdata_table', 15),
(18, '2024_08_14_041919_add_delete_at_to_bannerdata_table', 16);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IT Solutions', 'We provide cutting-edge IT solutions. We specialize in delivering innovative technology solutions to businesses and organizations of all sizes. We are committed to delivering reliable, scalable and customized solutions that drive business success and empower our clients to thrive in today\'s digital world.', '2024-08-01 02:34:38', '2024-08-08 22:26:12', NULL),
(2, 'IT Training', 'We specialize in providing comprehensive and cutting-edge training on a wide range of technologies. Our trainings are designed to equip individuals with the skills and knowledge needed to excel in the ever-evolving world of technology. From programming languages to web development, cloud computing to data analytics, we offer a diverse portfolio of training programs that cater to the needs of both beginners and experienced professionals.', '2024-08-01 02:34:57', '2024-08-01 02:34:57', NULL),
(3, 'Internship', 'Our internship provide meaningful work assignments, mentorship and a supportive learning environment, allowing interns to gain valuable insights, build their networks, and make a real impact. Whether you\'re a student seeking an internship to complement your education or a recent graduate looking to gain practical experience, InnoBrain Technologies is your gateway to a successful career journey.', '2024-08-01 02:35:15', '2024-08-01 02:35:15', NULL);

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
('k3pccWOrEpkYnZZ0RtuSevtM20kayn8mH4QDxx1p', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEZXckZLUVRpQVBJWkptcE9DeEppWUg2YThScGxaYlZCWUZxSFY3ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbGllbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1723788306),
('RgcC49Pp9l4tb8qzM3k11GsObjhFkeU6I2wHmCFM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3RGNWhFdHM4NnFrMHBvUFZtOGFDYmNPODBWdFhCWG1odkluM2lJQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723781504),
('sCsL3zwIW65AL6owhYVrv9klnrhtvwAiOm0oPJGo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWRvdFhPWXl6R25ZaWdOam5uRklXdlZ4eDdzUjZocUgzNGVHT0NLRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9BZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723781504);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vacancy`
--
ALTER TABLE `add_vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bannerdata`
--
ALTER TABLE `bannerdata`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `career_apply`
--
ALTER TABLE `career_apply`
  ADD PRIMARY KEY (`careerapply_id`),
  ADD KEY `career_apply_vacancy_id_foreign` (`vacancy_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `certificate_certificate_id_unique` (`Certificate_id`);

--
-- Indexes for table `clientdetail`
--
ALTER TABLE `clientdetail`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vacancy`
--
ALTER TABLE `add_vacancy`
  MODIFY `vacancy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admindetail`
--
ALTER TABLE `admindetail`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bannerdata`
--
ALTER TABLE `bannerdata`
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career_apply`
--
ALTER TABLE `career_apply`
  MODIFY `careerapply_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientdetail`
--
ALTER TABLE `clientdetail`
  MODIFY `client_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `intern_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career_apply`
--
ALTER TABLE `career_apply`
  ADD CONSTRAINT `career_apply_vacancy_id_foreign` FOREIGN KEY (`vacancy_id`) REFERENCES `add_vacancy` (`vacancy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
