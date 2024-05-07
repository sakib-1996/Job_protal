-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 11:39 AM
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
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px;\">What is Lorem Ipsum?</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px;\">Why do we use it?</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px;\">Where does it come from?</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px;\">Where can I get some?</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '2024-03-06 08:46:07', '2024-03-06 08:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_url` longtext NOT NULL,
  `site_url` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `img_url`, `site_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'http://127.0.0.1:8000/uploads/add/1709746772-giphy.gif', '', 1, '2024-03-06 11:39:32', '2024-03-06 11:39:36'),
(4, 'http://127.0.0.1:8000/uploads/add/1709747067-ezgif-7-e5fbc63f1a.gif', 'https://www.facebook.com/DaFoodCompany', 1, '2024-03-06 11:44:27', '2024-03-06 11:44:54'),
(5, 'http://127.0.0.1:8000/uploads/add/1709747455-giphy (1).gif', 'https://www.facebook.com/profile.php?id=100064331206716', 1, '2024-03-06 11:50:55', '2024-03-06 11:50:57'),
(6, 'http://127.0.0.1:8000/uploads/add/1709804225-ostad.jpg', 'https://www.facebook.com/ostadapp', 1, '2024-03-07 03:37:05', '2024-03-07 03:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'The standard Lorem Ipsum passage, used since the 1500s', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</span><br></p>', 1, 1, '2024-03-06 08:50:06', '2024-03-06 08:51:06'),
(2, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span><br></p>', 1, 1, '2024-03-06 08:50:28', '2024-03-06 08:51:06'),
(3, '1914 translation by H. Rackham', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\"<b>But I must explain to you how all this mistaken idea of denouncing</b> pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</span><br></p>', 1, 1, '2024-03-06 08:50:53', '2024-03-06 08:52:07'),
(4, 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><b>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</b> deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</span><br></p>', 1, 3, '2024-03-06 09:57:08', '2024-03-06 09:57:32'),
(5, '1914 translation by H. Rackham', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</span><br></p>', 1, 3, '2024-03-06 09:57:27', '2024-03-06 09:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '2024-03-06 08:42:23', '2024-03-06 08:42:23'),
(2, 'Accounting/Finance', '2024-03-06 08:42:27', '2024-03-06 08:42:27'),
(3, 'Education/Training', '2024-03-06 08:42:30', '2024-03-06 08:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `image`, `short_des`, `location`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/uploads/logo/1709748064-portrait-white-man-isolated.jpg', '<p>We are Company</p>', 'Dhaka', 3, '2024-03-06 12:01:04', '2024-03-06 12:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, '123 Main Street, Cityville, Stateland, 56789, United States.', 'job@pulse.com', '2024-03-06 08:52:54', '2024-03-06 08:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `massage` longtext NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `experience`, `created_at`, `updated_at`) VALUES
(1, '1 Year', '2024-03-06 08:42:43', '2024-03-06 08:42:43'),
(2, '2 Years', '2024-03-06 08:42:57', '2024-03-06 08:42:57'),
(3, '3 Years', '2024-03-06 08:43:04', '2024-03-06 08:43:04'),
(4, '4 Years', '2024-03-06 08:43:09', '2024-03-06 08:43:09'),
(5, '5 Years', '2024-03-06 08:43:14', '2024-03-06 08:43:14'),
(6, 'Based On Skill', '2024-03-06 08:43:17', '2024-03-06 08:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `experience_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dateline` date NOT NULL,
  `job_details` longtext NOT NULL,
  `requirment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `comp_name`, `logo`, `title`, `location`, `short_des`, `salary`, `user_id`, `category_id`, `type_id`, `experience_id`, `status`, `dateline`, `job_details`, `requirment`, `created_at`, `updated_at`) VALUES
(1, 'Amelia Thompson', 'http://127.0.0.1:8000/uploads/logo/1709739990-logo_1.jpg', 'Assistant Manager (Accounts)', '24/1, 2nd Floor, Bijaynagar, Dhaka paltan', 'We are hiering an Assistant Manager (Accounts)', '20000 - 25000', 3, 2, 2, 1, 1, '2024-04-04', '<div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"benefits\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Compensation &amp; Other Benefits</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Mobile bill, T/A</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Lunch Facilities: Full Subsidize</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Salary Review: Yearly</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Festival Bonus: 2</p></li></ul></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Workplace</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Work at office</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Gender</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Only Male</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka</p></div>', '<div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Education</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Bachelor of Business Administration (BBA) in Accounting, Master of Business Administration (MBA) in Accounting</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Bachelor /Honors, Masters</p></li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">1 to 5 years</li></ul></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Age 30 to 40 years</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Excellent communication skill Good at Microsoft Word and Microsoft Excel</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">The applicants should have experience in the following business area(s): Accounting and Finance</p></li></ul><p style=\"line-height: 24px; padding-bottom: 5px;\"><ul></ul></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(179, 45, 125); font-size: 16px; font-weight: 600; background-color: var(--bs-card-bg); text-align: var(--bs-body-text-align);\">Responsibilities &amp; Context</span></p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><ul><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Preparation of Monthly MIS Report &amp; Reconciliations.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Tax Assessments &amp; Returns.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Managing cash flow and periodic cash flow reporting.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Knowledge of Excel</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Excellent understanding of accounting, taxation, transfer pricing, handling audits (statutory &amp; tax), TDS and matter related to the finance and accounts.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Ability of team handling and to manage their expectations.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Excellent communications &amp; presentation skills</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Experience in Tally.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Multi-tasking and managing multiple priorities</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Monitor Revenue, Bill booking and Receivable Management.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Monitor Vendor Payments and reconciliations.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Monitor Regular Bank Reconciliations.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Ensure optimum usage of Funds.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Co-ordinate with Statutory Auditors.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Tax Audit / Tax Planning</p></li></ul></li></ul></div>', '2024-03-06 09:46:30', '2024-03-06 09:58:44'),
(2, 'Renesa Info Tech BD', 'http://127.0.0.1:8000/uploads/logo/1709740290-Logo.jpg', 'Spoken English Mentor', 'Dhaka (Ashulia)', 'We are hiering a Renesa Info Tech BD', 'Tk. 20000 - 25000 (Monthly)', 3, 3, 2, 6, 1, '2024-04-06', '<div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Requirements</h4></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">At least 2 years</li></ul></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Minimum 2 years of experience in teaching spoken English</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Excellent communication skills and proficiency in English</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Ability to engage and motivate students</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Patience and understanding to work with learners of different levels</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Flexibility to adapt to changing schedules and office hours&nbsp;</li></ul></div>', '<div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Are you passionate about teaching spoken English and guiding others towards fluency? We\'re on the lookout for a dedicated Spoken English Mentor to join our team at Ashulia, Jamgara.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">Position</span>: Spoken English Mentor</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">Job Type</span>: Full time / Part Time (Class Based)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">Office Hours</span>: 10 AM to 9.30 PM (After SSC exam, office hours could be adjusted)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">Bonus</span>: 2 times in a year, half of Salary. (After a 6-month probationary period)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">Location</span>: Ashulia, Jamgara</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">About the Role:&nbsp;</span>As a Spoken English Mentor, you will play a pivotal role in helping our students develop their English speaking skills. Your responsibilities will include conducting engaging and interactive classes, providing constructive feedback, and creating a supportive learning environment. We\'re looking for someone with a passion for teaching and a commitment to helping students succeed.&nbsp;</p><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"benefits\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Compensation &amp; Other Benefits</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul>Weekend: Thursday Competitive salary range with opportunities for growth Bonus payout twice a year, equivalent to half of your salary A supportive work environment with opportunities for professional development Convenient location in Ashulia, Jamgara</div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time, Part Time</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka (Ashulia)</p></div>', '2024-03-06 09:51:30', '2024-03-06 09:58:45'),
(3, 'IGL Group', 'http://127.0.0.1:8000/uploads/logo/1709740546-4821414.jpg', 'Software Engineer (Full-Stack Developer, Laravel, React.js/Vue Js)', 'Dhaka', 'We are hiering a Software Engineer (Full-Stack Developer, Laravel, React.js/Vue Js)', 'Tk. 30000 - 50000 (Monthly)', 3, 1, 2, 4, 1, '2024-04-18', '<div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Requirements</h4></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Education</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Diploma in Computer in Computer Science, Bachelor of Science (BSc) in Computer Science</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">3 to 7 years</li><li style=\"line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following business area(s):<br>Software Company, IT Enabled Service, BPO/ Data Entry Firm, ISP, Computer Hardware/Network Companies, Web Media/Blog, Call Center, E-commerce, Business-to-Business (B2B) Software and Services Startup, E-commerce Startup</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Freshers are also encouraged to apply.</li></ul></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Age 25 to 40 years</li></ul><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">IGL Web Ltd is Software Company In Bangladesh Market From Last 18 Years, We are looking for a expert React js Front-end, Back-end, Laravel, React.js/Vue Js, developer. Primary focus of this position will be on developing user interface components and implementing them following well-known React js workflows. Need to ensure that these components and the overall application are robust and easy to maintain. Need to coordinate with the rest of the team working on different layers of the infrastructure. Therefore, a commitment to collaborative problem solving, sophisticated design, and quality product is important.</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Write complex backend code with Node.js (preferred)/PHP with Laravel. Write well designed, testable, efficient code.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Clear understanding of OOP, Data Structures, Algorithms and Design Patterns.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Create automated builds.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Independently plan, design, maintain and deploy web applications to meet our business needs.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Research, guide and solve complex performance problems and architectural challenges.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Develop and deploy new features to facilitate related procedures and tools if necessary.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Ensure the accurate operation of web servers and software.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Respond promptly and professionally to bug reports.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Support continuous improvement by investigating alternatives and technologies and presenting these for architectural review.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Stay up-to-date with new technologies and continuously evaluate and promote the use of new tools, techniques, frameworks, and platforms.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Provide technical guidance and assistance to other Jr. Software Engineers Building reusable components and front-end libraries for future use Translating designs and wireframes into high quality code.</li></ul><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"skill_exp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Skills &amp; Expertise</h4><div class=\"skills\" style=\"display: flex; align-items: center; flex-wrap: wrap; gap: 10px;\"><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">C Programming</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">C++programing</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">Laravel Framework</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">MySQLMongoDB</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">PHP Programming</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">React | NodeJS | mongoDB | mongoose | JavaScript | Github | Git</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">Vue.js</button></div></div>', '<div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"benefits\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Compensation &amp; Other Benefits</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Mobile bill, Pension policy, Credit card, Performance bonus, Profit share, T/A, Tour allowance, Provident fund, Insurance</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Lunch Facilities: Partially Subsidize</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Salary Review: Yearly</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Festival Bonus: 2</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Festival bonus Yearly increment Modern equipment Flexible, friendly and fun work environment</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka</p></div>', '2024-03-06 09:55:46', '2024-03-06 09:58:46'),
(4, 'Zaman Associates', 'http://127.0.0.1:8000/uploads/logo/1709741451-8011879.jpg', 'Executive (Account)', 'Dhaka', 'We are hiering an Executive (Account)', 'Tk. 20000-30000 (Monthly)', 1, 2, 1, 2, 1, '2024-03-19', '<div class=\"row mt-4\" style=\"margin-right: -15px; margin-left: -15px; color: rgb(89, 89, 89); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 16px;\"><div class=\"col-sm-6\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 443px;\"><h4 class=\"cmptitle\" id=\"com_info\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\">Company Information</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; color: rgb(51, 51, 51); font-size: 14px; padding-left: 0px !important;\">Zaman Associates</p></div><div class=\"col-sm-6 \" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 443px;\"><div class=\" d-flex flex-column align-items-end \"><br></div></div></div><div class=\"row\" style=\"margin-right: -15px; margin-left: -15px; color: rgb(89, 89, 89); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 16px;\"><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px;\"><h5 class=\"subheading\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Address:</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; color: rgb(51, 51, 51); font-size: 14px; padding-left: 0px !important;\">Shatabdi Center, (12th Floor), Suite: A1, 292, Inner circular road, Fakirapool, Motijheel, Dhaka-1000</p><h5 class=\"subheading\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Website:</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; color: rgb(51, 51, 51); font-size: 14px; padding-left: 0px !important;\"><a href=\"http://www.zamanassociates.com.bd/\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(66, 139, 202); text-decoration: none; transition-duration: 0.2s;\">www.zamanassociates.com.bd</a></p><h5 class=\"subheading\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Business:</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; color: rgb(51, 51, 51); font-size: 14px; padding-left: 0px !important;\">COMPANY PROFILE:<br><br>ZAMAN ASSOCIATES is an enterprise of Import-Export, Manufacturing, Sales &amp; Marketing, Distribution as well as developing the business sector of Electrical-Electronics &amp; Industrial Automation.<br><br>We are the Exclusive Agent for ANDELI brand MCB, MCCB, RCBO, RCCB, MPCB, ELCB SPD, ACB, VCB, AC Contactor, Overload Relay, Frequency Inverter, Automatic Voltage e Stabilizer, Welding Machine and so on.<br>ANDELI is the largest manufacturer in China which has worldwide brand image even in China local market. Also we are the Exclusive Agent of SY (ShengYe) brand PFC capacitors, PFC Relay &amp; Reactor, SANAI brand LT-CT, HT-CT &amp; HT-PT for both 11KV &amp; 33KV. SAIPWELL Brand IP65-IP66 DUST &amp; WATER FROOF BOXES &amp; ENCLUSER.<br><br>We are also manufacturing &amp; marketing LT/HT Switch-gear, PFI Plant, MDB, SDB, Star Delta Starter, DOL Starter, Industrial Electric Wiring &amp; Servicing, HT Metering unit &amp; CT - PT, Package Type Sub - Station, Busbar Trunking System(BBT), Motor Speed Controller, Industrial Automation etc.<br><br>We have added modern touch &amp; WiFi wall switches as well as luxurious wall switch-socket for smart life under ANDELI Brand<br><br>Our each product has individual serial number to easy tracking for warranty purpose. All the products are reliable to ensure maximum safety. Most of our Brand products are well certified by reputed organizations of testing &amp; certifications.<br><br>For quality electrical and industrial power products with guarantee and reliability ANDELI is the name behind you. You may find our Brand Authorized Chain Distributor around the country.<br><br>ANDELI BANGLADESH is represented by Zaman Associates as sister concern.<br>It is our goal to engage much people to use quality electrical product to ensure maximum safety</p></div></div>', '<div class=\"row mt-4\" style=\"margin-right: -15px; margin-left: -15px; color: rgb(89, 89, 89); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 16px;\"><div class=\"col-sm-6\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 443px;\"><h4 class=\"sectxt\" id=\"req\" style=\"box-sizing: border-box; font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-top: 0px !important; margin-bottom: 10px; font-size: 16px !important; margin-right: 0px; margin-left: 0px;\">Requirements</h4><h4 class=\"cmptitle\" id=\"com_info\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"></div></h4><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Education</h5><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Bachelor of Commerce (BCom) in Accounting, Bachelor of Commerce (Pass), Master of Commerce (MCom)</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul></div></h4><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">At least 2 years</li></ul></div></h4><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Good at computer, specially making excel report</li></ul><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div></h4><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Daily transaction posting in accounting software (ERP)·</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Proper maintenance of voucher, cash book and ledger book on daily basis.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Manage &amp; Keep voucher &amp; other files&nbsp;according to company existing process·</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Ensure all the inventory and report to the management.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Accounts preparation and Bank Reconciliation.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Ensure proper documentation system and preserve appropriate audit evidence for future reference.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Preparing monthly and yearly financial statements.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Any other assignment is given by higher authority.</li></ul><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div></h4><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Workplace</h4><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Work at office</p></div></h4><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div></h4><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><h4 class=\"cmptitle\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin: 12px 0px 6px; font-size: 16px !important;\"><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka</p></div></h4></div></div>', '2024-03-06 10:07:00', '2024-03-06 10:11:43');
INSERT INTO `jobs` (`id`, `comp_name`, `logo`, `title`, `location`, `short_des`, `salary`, `user_id`, `category_id`, `type_id`, `experience_id`, `status`, `dateline`, `job_details`, `requirment`, `created_at`, `updated_at`) VALUES
(5, 'Sheba Group (Sheba Innovations Limited)', 'http://127.0.0.1:8000/uploads/logo/1709741489-2287321.jpg', 'Senior Mobile App Developer/ Mobile App Developer', 'Dhaka', 'We are hiering a Senior Mobile App Developer/ Mobile App Developer', 'Tk. 20000-30000 (Monthly)', 1, 1, 1, 4, 1, '2024-03-17', '<div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Requirements</h4></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Education</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Bachelor of Science (BSc)</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">2 to 6 years</li><li style=\"line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following business area(s):<br>Software Company, IT Enabled Service, Educational Technology (Edtech) Startup, Artificial Intelligence (AI) Startup</li></ul></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h5 class=\"subheading\" id=\"req\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Age 24 to 40 years</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">2+ years of experience as a mobile app&nbsp;<span style=\"font-weight: bold; color: rgb(255, 75, 75);\">developer</span>, with a strong focus on React Native.</p></li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Proficient in JavaScript, TypeScript, React Native, and related libraries.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Deep understanding of UI/UX principles and best practices.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Experience with integrating various APIs and building real-time features with Socket.io or similar technologies.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Proven ability to write clean, efficient, and maintainable code.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Strong communication and collaboration skills.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Knowledge of WebRTC, Node.JS is a strong plus.</p></li></ul></div>', '<div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Design and develop high-quality mobile applications using React Native, delivering pixel-perfect UIs that align seamlessly with UI/UX designs.</p></li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Integrate with various APIs, working with RESTful endpoints.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Build real-time functionality using Socket.io or similar technologies.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Write clean, well-documented, and thoroughly tested code adhering to best practices.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Collaborate effectively with designers, product managers, and other developers to achieve project goal.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Review code by Developer Team.</p></li></ul><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"skill_exp\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Skills &amp; Expertise</h4><div class=\"skills\" style=\"display: flex; align-items: center; flex-wrap: wrap; gap: 10px;\"><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); overflow: visible; border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">MS Word/ Excel/ PowerPoint/ OneNote</button></div><hr style=\"box-sizing: content-box; height: 0px; border-top: 1px solid rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" id=\"benefits\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Compensation &amp; Other Benefits</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Mobile bill, Weekly 2 holidays</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Salary Review: Yearly</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Festival Bonus: 2</li></ul></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Workplace</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Work at office</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div><div class=\"col-sm-12 mb-3\" style=\"position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif;\"><h4 class=\"sectxt\" style=\"font-family: inherit; font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka (Mohakhali)</p></div>', '2024-03-06 10:09:33', '2024-03-06 10:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE `job_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `linkedIn_link` longtext DEFAULT NULL,
  `facebook_link` longtext DEFAULT NULL,
  `gitHub_link` longtext DEFAULT NULL,
  `portfolio_website` longtext DEFAULT NULL,
  `edu_information` longtext DEFAULT NULL,
  `job_exp` longtext DEFAULT NULL,
  `expected_salary` longtext DEFAULT NULL,
  `credentials` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applies`
--

INSERT INTO `job_applies` (`id`, `linkedIn_link`, `facebook_link`, `gitHub_link`, `portfolio_website`, `edu_information`, `job_exp`, `expected_salary`, `credentials`, `status`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>University Name<br></td><td>Degree<br></td><td>Graduation Year<br></td></tr><tr><td>Example University<br></td><td><p>Bachelor of Science in Computer Science<br></p></td><td>2022<br></td></tr></tbody></table><p><br></p>', '<ol style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style: none; margin: 1.25em 0px; padding: 0px; counter-reset: list-number 0; display: flex; flex-direction: column;\"><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br></span></p><ol><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">Software Engineer</span></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Company: Tech Innovators Inc.</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Location: Cityville, State</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Duration: January 2023 - Present</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Responsibilities: Developed and maintained software applications, collaborated with cross-functional teams, participated in code reviews, and contributed to the improvement of software architecture.</li></ol></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"></li></ol>', NULL, NULL, 1, 2, 1, '2024-03-06 10:20:59', '2024-03-06 11:11:37'),
(3, NULL, NULL, NULL, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>University Name<br></td><td>Degree<br></td><td>Graduation Year<br></td></tr><tr><td>Example University<br></td><td><p>Bachelor of Science in Computer Science<br></p></td><td>2022<br></td></tr></tbody></table><p><br></p>', '<ol style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style: none; margin: 1.25em 0px; padding: 0px; counter-reset: list-number 0; display: flex; flex-direction: column;\"><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br></span></p><ol><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">Software Engineer</span></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Company: Tech Innovators Inc.</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Location: Cityville, State</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Duration: January 2023 - Present</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Responsibilities: Developed and maintained software applications, collaborated with cross-functional teams, participated in code reviews, and contributed to the improvement of software architecture.</li></ol></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"></li></ol>', NULL, NULL, 0, 2, 3, '2024-03-06 10:20:59', '2024-03-06 10:20:59'),
(4, NULL, NULL, NULL, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>University Name<br></td><td>Degree<br></td><td>Graduation Year<br></td></tr><tr><td>Example University<br></td><td><p>Bachelor of Science in Computer Science<br></p></td><td>2022<br></td></tr></tbody></table><p><br></p>', '<ol style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style: none; margin: 1.25em 0px; padding: 0px; counter-reset: list-number 0; display: flex; flex-direction: column;\"><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br></span></p><ol><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">Software Engineer</span></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Company: Tech Innovators Inc.</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Location: Cityville, State</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Duration: January 2023 - Present</li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 0px; padding-left: 0.375em; display: block; min-height: 28px;\">Responsibilities: Developed and maintained software applications, collaborated with cross-functional teams, participated in code reviews, and contributed to the improvement of software architecture.</li></ol></li><li style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; margin-top: 0px; padding-left: 0.375em; counter-increment: list-number 1; display: block; min-height: 28px;\"></li></ol>', NULL, NULL, 0, 2, 5, '2024-03-06 10:20:59', '2024-03-06 10:20:59'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 4, '2024-03-08 03:11:29', '2024-03-08 03:11:29'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 2, '2024-03-08 03:11:51', '2024-03-08 03:11:51');

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
(106, '2014_10_12_000000_create_users_table', 1),
(107, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(108, '2024_02_28_100325_create_categories_table', 1),
(109, '2024_02_28_100401_create_types_table', 1),
(110, '2024_02_28_100434_create_experiences_table', 1),
(111, '2024_02_28_100505_create_jobs_table', 1),
(112, '2024_02_28_101547_create_company_profiles_table', 1),
(113, '2024_02_28_101637_create_abouts_table', 1),
(114, '2024_02_28_101733_create_top_companies_table', 1),
(115, '2024_02_28_101808_create_blogs_table', 1),
(116, '2024_02_28_101844_create_contacts_table', 1),
(117, '2024_02_28_101912_create_contact_messages_table', 1),
(118, '2024_02_28_101942_create_plugings_table', 1),
(119, '2024_02_28_102021_create_plugings_requests_table', 1),
(120, '2024_02_28_102049_create_sliders_table', 1),
(121, '2024_02_28_104448_create_profiles_table', 1),
(122, '2024_02_28_142313_create_job_applies_table', 1),
(123, '2024_03_05_181110_create_adds_table', 1);

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
-- Table structure for table `plugings`
--

CREATE TABLE `plugings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `key_word` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plugings`
--

INSERT INTO `plugings` (`id`, `name`, `des`, `key_word`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Job', '<p>You Can Post Your Job</p>', 'job', 1, '2024-03-06 08:48:25', '2024-03-06 08:49:08'),
(2, 'Blog', '<p>You Can Blog Post Access<br></p>', 'blog', 1, '2024-03-06 08:49:04', '2024-03-06 08:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `plugings_requests`
--

CREATE TABLE `plugings_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `plugings_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plugings_requests`
--

INSERT INTO `plugings_requests` (`id`, `user_id`, `plugings_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2024-03-06 09:34:41', '2024-03-06 09:35:13'),
(2, 3, 2, 1, '2024-03-06 09:47:08', '2024-03-06 09:56:30'),
(4, 2, 1, 1, '2024-03-07 14:00:47', '2024-03-07 14:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `location`, `image`, `user_id`, `date_of_birth`, `blood_group`, `nid`, `passport_no`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Damiel Smith', 'Dhaka', 'http://127.0.0.1:8000/uploads/profile/1709887851-2287321.jpg', 2, '2006-06-21', NULL, '11123132151255', NULL, 'true', '2024-03-08 02:50:51', '2024-03-08 02:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_1`, `image_2`, `image_3`, `image_4`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/uploads/banner/1709736023-banner-1.jpeg', 'http://127.0.0.1:8000/uploads/banner/1709736023-banner_2.jpg', 'http://127.0.0.1:8000/uploads/banner/1709736023-banner_3.jpeg', 'http://127.0.0.1:8000/uploads/banner/1709736023-banner-4.jpg', '2024-03-06 08:40:23', '2024-03-06 08:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `top_companies`
--

CREATE TABLE `top_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `top_com` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_companies`
--

INSERT INTO `top_companies` (`id`, `about_id`, `top_com`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2024-03-06 12:06:33', '2024-03-06 12:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 'Remote', '2024-03-06 08:40:59', '2024-03-06 08:40:59'),
(2, 'Full Time', '2024-03-06 08:41:04', '2024-03-06 08:41:04'),
(3, 'Part Time', '2024-03-06 08:41:08', '2024-03-06 08:41:08'),
(4, 'Freelance', '2024-03-06 08:41:12', '2024-03-06 08:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 3,
  `mobile` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `otp`, `password`, `type`, `mobile`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', '2024-03-06 08:34:19', NULL, '$2y$12$qalCeP5w9zrl8BdUYn1gB.oHVsu6NFwX33P/tZgZh4CMgs5WYpgzm', 1, '1234567890', 1, NULL, '2024-03-06 08:34:19', '2024-03-06 08:34:19'),
(2, 'Damiel Smith', 'abc@gmail.com', NULL, NULL, '$2y$12$gG1U0xHiT95yBOTCA51L8OB6NT/LS/LFMQ6lIXP6uSvunBabnANQC', 3, '0123456789', 1, NULL, '2024-03-06 08:56:13', '2024-03-07 14:13:41'),
(3, 'Amelia Thompson', 'xyz@gmail.com', NULL, NULL, '$2y$12$lJqtigXUtrLiQRUix0jnc.ZkzDtVZe85VMKePbQvZBKxd7o55zXm6', 2, '0123456789', 1, NULL, '2024-03-06 09:34:14', '2024-03-06 09:35:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_experience_id_foreign` (`experience_id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`),
  ADD KEY `jobs_type_id_foreign` (`type_id`);

--
-- Indexes for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applies_user_id_foreign` (`user_id`),
  ADD KEY `job_applies_job_id_foreign` (`job_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plugings`
--
ALTER TABLE `plugings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plugings_name_unique` (`name`);

--
-- Indexes for table `plugings_requests`
--
ALTER TABLE `plugings_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plugings_requests_user_id_foreign` (`user_id`),
  ADD KEY `plugings_requests_plugings_id_foreign` (`plugings_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_companies`
--
ALTER TABLE `top_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `top_companies_about_id_foreign` (`about_id`),
  ADD KEY `top_companies_top_com_foreign` (`top_com`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_applies`
--
ALTER TABLE `job_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plugings`
--
ALTER TABLE `plugings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plugings_requests`
--
ALTER TABLE `plugings_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `top_companies`
--
ALTER TABLE `top_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD CONSTRAINT `company_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD CONSTRAINT `contact_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD CONSTRAINT `job_applies_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_applies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plugings_requests`
--
ALTER TABLE `plugings_requests`
  ADD CONSTRAINT `plugings_requests_plugings_id_foreign` FOREIGN KEY (`plugings_id`) REFERENCES `plugings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plugings_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `top_companies`
--
ALTER TABLE `top_companies`
  ADD CONSTRAINT `top_companies_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `top_companies_top_com_foreign` FOREIGN KEY (`top_com`) REFERENCES `company_profiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
