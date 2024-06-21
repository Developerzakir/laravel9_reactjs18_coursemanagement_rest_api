-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 06:31 PM
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
-- Database: `laravel9_react`
--

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `x_data` varchar(255) NOT NULL,
  `y_data` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`id`, `x_data`, `y_data`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '100', NULL, NULL),
(2, 'Javascript', '90', NULL, NULL),
(3, 'Mysql', '80', NULL, NULL),
(4, 'Laravel', '90', NULL, NULL),
(5, 'React', '80', NULL, NULL),
(6, 'Vue', '90', NULL, NULL),
(7, 'Jquery', '80', NULL, NULL),
(8, 'Bootstrap5', '96', NULL, '2024-06-21 10:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `client_desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `client_name`, `client_img`, `client_desc`, `created_at`, `updated_at`) VALUES
(1, 'Zakir', 'https://img.freepik.com/free-photo/portrait-handsome-serious-man_23-2149022626.jpg?t=st=1716558147~exp=1716561747~hmac=ec8c1abc19ebab85f25ac4a8b54bd9ce59c55bf97c800c2d9915e5b1b43424a8&w=740', 'Hello i am Zakir. I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. ', NULL, NULL),
(2, 'Riad', 'https://img.freepik.com/free-photo/portrait-handsome-serious-man_23-2149022626.jpg?t=st=1716558147~exp=1716561747~hmac=ec8c1abc19ebab85f25ac4a8b54bd9ce59c55bf97c800c2d9915e5b1b43424a8&w=740', 'Hello i am Zakir. I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. ', NULL, NULL),
(3, 'Parvez', 'https://img.freepik.com/free-photo/portrait-handsome-serious-man_23-2149022626.jpg?t=st=1716558147~exp=1716561747~hmac=ec8c1abc19ebab85f25ac4a8b54bd9ce59c55bf97c800c2d9915e5b1b43424a8&w=740', 'Hello i am Zakir. I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. ', NULL, NULL),
(4, 'Bd Zack', 'http://127.0.0.1:8000/upload/review/1802481273038942.jpeg', 'Thanks Great Services.', NULL, NULL),
(5, 'Riaz', 'http://127.0.0.1:8000/upload/review/1802481457516247.jpeg', 'Great Services', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'zakir', 'zakir@gmail.com', 'This is for test description', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `short_desc` longtext NOT NULL,
  `small_img` varchar(255) NOT NULL,
  `long_title` varchar(255) NOT NULL,
  `long_desc` longtext NOT NULL,
  `total_duration` varchar(255) NOT NULL,
  `total_student` varchar(255) NOT NULL,
  `total_lecture` varchar(255) NOT NULL,
  `skill_all` longtext NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `short_title`, `short_desc`, `small_img`, `long_title`, `long_desc`, `total_duration`, `total_student`, `total_lecture`, `skill_all`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Course One', 'Course Details', 'https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?t=st=1716361138~exp=1716364738~hmac=9b09e1ef1b84b82288842b2968c5022ec5d0952151ae40a724c59d0561caf9da&w=740', 'Course One', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '4', '200', '10', 'Course Details', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL),
(2, 'Course Two', 'Course Details', 'https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?t=st=1716361138~exp=1716364738~hmac=9b09e1ef1b84b82288842b2968c5022ec5d0952151ae40a724c59d0561caf9da&w=740', 'Course Two', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '5', '500', '12', 'Course Details', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL),
(3, 'Course Three', 'Course Details', 'https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?t=st=1716361138~exp=1716364738~hmac=9b09e1ef1b84b82288842b2968c5022ec5d0952151ae40a724c59d0561caf9da&w=740', 'Course Details', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2', '600', '15', 'Course Details', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL),
(4, 'Course Four', 'Course Details', 'https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?t=st=1716361138~exp=1716364738~hmac=9b09e1ef1b84b82288842b2968c5022ec5d0952151ae40a724c59d0561caf9da&w=740', 'Course Details', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '3', '700', '13', 'Course Details', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL),
(5, 'Course Five', 'Course Details', 'https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?t=st=1716361138~exp=1716364738~hmac=9b09e1ef1b84b82288842b2968c5022ec5d0952151ae40a724c59d0561caf9da&w=740', 'Course Details', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '6', '1200', '16', 'Course Details', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL),
(6, 'Laravel Course plan', 'Laravel Course plan', 'http://127.0.0.1:8000/upload/courses/1802473991988571.jpeg', 'Laravel Course', '<p>Laravel Course<br></p>', '8', '3000', '8', '<p>html, css, php,laravel</p>', 'https://bd.realstate.xyz.redinvoice.com', NULL, '2024-06-21 06:32:32');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `footer_credit` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `address`, `email`, `phone`, `facebook`, `youtube`, `twitter`, `footer_credit`, `created_at`, `updated_at`) VALUES
(1, '1232 Uttara, dhaka, Bangladesh', 'zakirhossen82@gmail.com', '01775814890', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'copyright 2024', NULL, '2024-06-21 09:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_title` varchar(255) NOT NULL,
  `home_subtitle` varchar(255) NOT NULL,
  `tech_desc` longtext NOT NULL,
  `total_student` varchar(255) NOT NULL,
  `total_course` varchar(255) NOT NULL,
  `total_review` varchar(255) NOT NULL,
  `video_desc` longtext NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `home_title`, `home_subtitle`, `tech_desc`, `total_student`, `total_course`, `total_review`, `video_desc`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Learning BD', 'Learn Professionaly', 'I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery', '35000', '8', '2000', 'Hello i am Zakir. I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. I have a BSC degree in CSE & I have more than 3 years of experience in the Web Design & Development field.', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext NOT NULL,
  `refund` longtext NOT NULL,
  `terms` longtext NOT NULL,
  `privacy` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `about`, `refund`, `terms`, `privacy`, `created_at`, `updated_at`) VALUES
(1, 'Who I am?\r\n                    <hr />\r\n                    <p className=\'serviceDes\'>\r\n                    I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. I have a BSC degree in CSE & I have more than 3 years of experience in the Web Design & Development field.\r\n                    </p>\r\n\r\n                    <h1 className=\'serviceName\'>Our Mission</h1>\r\n                    <hr />\r\n                    <p className=\'serviceDes\'>\r\n                    I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. I have a BSC degree in CSE & I have more than 3 years of experience in the Web Design & Development field.\r\n                    </p>\r\n\r\n                    <h1 className=\'serviceName\'>Our Vission</h1>\r\n                    <hr />\r\n                    <p className=\'serviceDes\'>\r\n                    I’m a professional web developer with extensive experience in WordPress, PHP, MySQL, Laravel Framework, Vue js, E-commerce website, Woocommerce site, HTML, CSS, JavaScript, jQuery, Bootstrap everything in between. I have a BSC degree in CSE & I have more than 3 years of experience in the Web Design & Development field.\r\n                    </p>\r\n', 'Data Protection Principles\r\n                    <p>\r\n                        <ul>\r\n                            <li>\r\n                            General Data Protection Regulation (GDPR) sets out key principles which lie at the heart of the general data protection regime. These key principles are set out right at the beginning of the GDPR and they both directly and indirectly influence the other rules and obligations found throughout the legislation. Therefore, compliance with these fundamental principles of data protection is the first step for controllers in ensuring that they fulfil their obligations under the GDPR. The following is a brief overview of the Principles of Data Protection found in article 5 GDPR:\r\n                            </li>\r\n                            <li>\r\n                            Lawfulness, fairness, and transparency: Any processing of personal data should be lawful and fair. It should be transparent to individuals that personal data concerning them are collected, used, consulted, or otherwise processed and to what extent the personal data are or will be processed. The principle of transparency requires that any information and communication relating to the processing of those personal data be easily accessible and easy to understand, and that clear and plain language be used.\r\n                            </li>\r\n                            <li>\r\n                            Purpose Limitation: Personal data should only be collected for specified, explicit, and legitimate purposes and not further processed in a manner that is incompatible with those purposes. In particular, the specific purposes for which personal data are processed should be explicit and legitimate and determined at the time of the collection of the personal data. However, further processing for archiving purposes in the public interest, scientific, or historical research purposes or statistical purposes (in accordance with Article 89(1) GDPR) is not considered to be incompatible with the initial purposes.\r\n                            </li>\r\n                            <li>\r\n                            Data Minimisation: Processing of personal data must be adequate, relevant, and limited to what is necessary in relation to the purposes for which they are processed. Personal data should be processed only if the purpose of the processing could not reasonably be fulfilled by other means. This requires, in particular, ensuring that the period for which the personal data are stored is limited to a strict minimum (see also the principle of ‘Storage Limitation’ below).\r\n                            </li>\r\n                        </ul>\r\n                    </p>', 'Terms And Conditions\r\n                    <p>\r\n                        <ul>\r\n                            <li>\r\n                            General Data Protection Regulation (GDPR) sets out key principles which lie at the heart of the general data protection regime. These key principles are set out right at the beginning of the GDPR and they both directly and indirectly influence the other rules and obligations found throughout the legislation. Therefore, compliance with these fundamental principles of data protection is the first step for controllers in ensuring that they fulfil their obligations under the GDPR. The following is a brief overview of the Principles of Data Protection found in article 5 GDPR:\r\n                            </li>\r\n                            <li>\r\n                            Lawfulness, fairness, and transparency: Any processing of personal data should be lawful and fair. It should be transparent to individuals that personal data concerning them are collected, used, consulted, or otherwise processed and to what extent the personal data are or will be processed. The principle of transparency requires that any information and communication relating to the processing of those personal data be easily accessible and easy to understand, and that clear and plain language be used.\r\n                            </li>\r\n                            <li>\r\n                            Purpose Limitation: Personal data should only be collected for specified, explicit, and legitimate purposes and not further processed in a manner that is incompatible with those purposes. In particular, the specific purposes for which personal data are processed should be explicit and legitimate and determined at the time of the collection of the personal data. However, further processing for archiving purposes in the public interest, scientific, or historical research purposes or statistical purposes (in accordance with Article 89(1) GDPR) is not considered to be incompatible with the initial purposes.\r\n                            </li>\r\n                            <li>\r\n                            Data Minimisation: Processing of personal data must be adequate, relevant, and limited to what is necessary in relation to the purposes for which they are processed. Personal data should be processed only if the purpose of the processing could not reasonably be fulfilled by other means. This requires, in particular, ensuring that the period for which the personal data are stored is limited to a strict minimum (see also the principle of ‘Storage Limitation’ below).\r\n                            </li>\r\n                        </ul>\r\n                    </p>', 'Privacy Policy\r\n                    <p>\r\n                        <ul>\r\n                            <li>\r\n                            General Data Protection Regulation (GDPR) sets out key principles which lie at the heart of the general data protection regime. These key principles are set out right at the beginning of the GDPR and they both directly and indirectly influence the other rules and obligations found throughout the legislation. Therefore, compliance with these fundamental principles of data protection is the first step for controllers in ensuring that they fulfil their obligations under the GDPR. The following is a brief overview of the Principles of Data Protection found in article 5 GDPR:\r\n                            </li>\r\n                            <li>\r\n                            Lawfulness, fairness, and transparency: Any processing of personal data should be lawful and fair. It should be transparent to individuals that personal data concerning them are collected, used, consulted, or otherwise processed and to what extent the personal data are or will be processed. The principle of transparency requires that any information and communication relating to the processing of those personal data be easily accessible and easy to understand, and that clear and plain language be used.\r\n                            </li>\r\n                            <li>\r\n                            Purpose Limitation: Personal data should only be collected for specified, explicit, and legitimate purposes and not further processed in a manner that is incompatible with those purposes. In particular, the specific purposes for which personal data are processed should be explicit and legitimate and determined at the time of the collection of the personal data. However, further processing for archiving purposes in the public interest, scientific, or historical research purposes or statistical purposes (in accordance with Article 89(1) GDPR) is not considered to be incompatible with the initial purposes.\r\n                            </li>\r\n                            <li>\r\n                            Data Minimisation: Processing of personal data must be adequate, relevant, and limited to what is necessary in relation to the purposes for which they are processed. Personal data should be processed only if the purpose of the processing could not reasonably be fulfilled by other means. This requires, in particular, ensuring that the period for which the personal data are stored is limited to a strict minimum (see also the principle of ‘Storage Limitation’ below).\r\n                            </li>\r\n                        </ul>\r\n                    </p>', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_06_213259_create_sessions_table', 1),
(7, '2024_06_07_051702_create_services_table', 2),
(8, '2024_06_07_052406_create_client_reviews_table', 3),
(9, '2024_06_07_053835_create_projects_table', 4),
(10, '2024_06_07_081254_create_contacts_table', 5),
(11, '2024_06_07_081910_create_footers_table', 6),
(12, '2024_06_07_082608_create_home_pages_table', 7),
(13, '2024_06_07_083313_create_charts_table', 8),
(14, '2024_06_07_084952_create_information_table', 9),
(15, '2024_06_07_085747_create_courses_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_one` varchar(255) NOT NULL,
  `img_two` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` longtext NOT NULL,
  `project_feature` longtext NOT NULL,
  `live_preview` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `img_one`, `img_two`, `project_name`, `project_desc`, `project_feature`, `live_preview`, `created_at`, `updated_at`) VALUES
(1, 'https://img.freepik.com/free-photo/close-up-people-studying-together_23-2149204770.jpg?t=st=1716354331~exp=1716357931~hmac=1685ae8d89487267e62b6d067bc1f5a017231450ca80d661aa41cf3651b87111&w=740', 'http://localhost:3000/static/media/project_details.7266fa9802a6ce166240.png', 'Education in continuing a proud tradition', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'https://zakirbd.xyz/', NULL, NULL),
(2, 'https://img.freepik.com/free-photo/close-up-people-studying-together_23-2149204770.jpg?t=st=1716354331~exp=1716357931~hmac=1685ae8d89487267e62b6d067bc1f5a017231450ca80d661aa41cf3651b87111&w=740', 'http://localhost:3000/static/media/project_details.7266fa9802a6ce166240.png', 'Learning in continuing a proud tradition', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'https://zakirbd.xyz/', NULL, NULL),
(3, 'https://img.freepik.com/free-photo/close-up-people-studying-together_23-2149204770.jpg?t=st=1716354331~exp=1716357931~hmac=1685ae8d89487267e62b6d067bc1f5a017231450ca80d661aa41cf3651b87111&w=740', 'http://localhost:3000/static/media/project_details.7266fa9802a6ce166240.png', 'Education in continuing a proud tradition', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'https://zakirbd.xyz/', NULL, NULL),
(4, 'https://img.freepik.com/free-photo/close-up-people-studying-together_23-2149204770.jpg?t=st=1716354331~exp=1716357931~hmac=1685ae8d89487267e62b6d067bc1f5a017231450ca80d661aa41cf3651b87111&w=740', 'http://localhost:3000/static/media/project_details.7266fa9802a6ce166240.png', 'Education in continuing a proud tradition', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph,', 'https://zakirbd.xyz/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_logo` varchar(255) NOT NULL,
  `service_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_logo`, `service_text`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce', 'http://localhost:3000/static/media/ecommerce.b768fece35bff81e9394.png', 'I will design and development E-commerce website', NULL, NULL),
(2, 'Web Design', 'http://localhost:3000/static/media/design.f41ad80baaf09ec53c3b.png', 'Responsive web Design Qualified design', NULL, NULL),
(3, 'Web Development', 'http://localhost:3000/static/media/web.b4891cbb7903d573e0f9.png', 'Complete Website development and any issue fixed', NULL, NULL);

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
('TPXkMS8NwoioJeNzGMgJDuRTOyIJitSXbP9zgZv0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia0NXSG95ckJiV3loWTJTOWFvcUp4amxMbjh0SVVoUEJwelVjT0NqQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHA4SkhjeXZTZUNjNEsyUkRjek51S3VNRFE0dmVGVUFzUlBUUW1PRU12NjFrWXN4bDM1V255Ijt9', 1718987484);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$p8JHcyvSeCc4K2RDczNuKuMDQ4veFUAsRPTQmOEMv61kYsxl35Wny', NULL, NULL, NULL, NULL, NULL, '202406191337download (1).jpeg', '2024-06-12 12:28:48', '2024-06-19 08:40:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charts`
--
ALTER TABLE `charts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
