-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 04:56 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(11) NOT NULL,
  `user_approver_id` int(11) DEFAULT NULL,
  `user_approvee_id` int(11) DEFAULT NULL,
  `effectiveDate` datetime NOT NULL,
  `expiryDate` datetime NOT NULL,
  `modifyBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modifyOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`id`, `user_approver_id`, `user_approvee_id`, `effectiveDate`, `expiryDate`, `modifyBy`, `modifyOn`) VALUES
(1, 1, 3, '2018-03-01 00:00:00', '2018-03-31 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`) VALUES
(1, 'IT', 'IT development'),
(2, 'HR', 'HR department');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numTel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debutContrat` datetime DEFAULT NULL,
  `finContrat` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_level_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `status_id`, `nom`, `prenom`, `code`, `adresse`, `numTel`, `note`, `debutContrat`, `finContrat`, `user_id`, `job_level_id`, `department_id`) VALUES
(1, 1, 'Bui', 'Trang', 1, 'HerbertHoover', '0473597320', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'nt1', 'pt1', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'trang2', 'ptrang2', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_request`
--

CREATE TABLE `holiday_request` (
  `id` int(11) NOT NULL,
  `user_request_id` int(11) DEFAULT NULL,
  `user_approval_id` int(11) DEFAULT NULL,
  `holiday_type_id` int(11) DEFAULT NULL,
  `dateHolidayDebut` datetime NOT NULL,
  `dateHolidayEnd` datetime NOT NULL,
  `requestDate` datetime DEFAULT NULL,
  `modifyOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday_request`
--

INSERT INTO `holiday_request` (`id`, `user_request_id`, `user_approval_id`, `holiday_type_id`, `dateHolidayDebut`, `dateHolidayEnd`, `requestDate`, `modifyOn`) VALUES
(1, 3, NULL, NULL, '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2015-04-05 02:04:00'),
(2, 3, NULL, 2, '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2014-02-02 01:01:00'),
(3, 3, 2, 2, '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2014-02-01 01:02:00'),
(4, 3, 2, 2, '2013-01-01 00:00:00', '2013-01-01 00:00:00', '2013-01-01 00:00:00', NULL),
(5, 3, 4, 3, '2018-04-01 00:00:00', '2018-04-01 00:00:00', '2018-03-01 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_stock`
--

CREATE TABLE `holiday_stock` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `valide_id` int(11) DEFAULT NULL,
  `holiday_type_id` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday_stock`
--

INSERT INTO `holiday_stock` (`id`, `user_id`, `valide_id`, `holiday_type_id`, `number`) VALUES
(1, 3, 1, 1, 20),
(2, 3, 1, 2, 1),
(3, 3, 1, 3, 5),
(4, 3, 3, 4, 1),
(5, 3, 4, 4, 1),
(6, 3, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_type`
--

CREATE TABLE `holiday_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday_type`
--

INSERT INTO `holiday_type` (`id`, `type`, `description`) VALUES
(1, 'Normal Holiday', 'Annual holiday'),
(2, 'Recup Holiday', ''),
(3, 'Holidays Previous Year', NULL),
(4, 'Extra Holiday', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_level`
--

CREATE TABLE `job_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_level`
--

INSERT INTO `job_level` (`id`, `level`, `description`) VALUES
(1, 'Junior', NULL),
(2, 'Senior', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nom`) VALUES
(1, 'Working'),
(2, 'Quit');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `employee_id`, `login`, `password`) VALUES
(1, 1, 'trang@gmail', '$2y$13$bsggwh.4CIRKH8jfbIlGVOKLoD.FES6ThWE0X2nqPsmANaaxKEdfy'),
(2, 3, 'trang@gmail.com', '$2y$13$msVP2OHjBj/AfPeiHlIxl.2ylewA1xychKI8nwPsHTdSXfcJgvYi6'),
(3, 2, 't1@gmail.com', '$2y$13$4xauMJXUg5iMH6WxUkVOk.KvDn5WdyV8ZE/YcZr1YmrnqNJQgnUZO'),
(4, NULL, 't2@gmail.com', '$2y$13$p2/MHJt6w2ypFxBosEidz.llwcNRWIZh4YnI3u1sDzyWQtF.Xbju2'),
(5, NULL, 't3@gmail.com', '$2y$13$mEIlE60Q8rrjcteMg38CaulXBON/HYA6KZ1rEMp94CGOHxPONRxCm');

-- --------------------------------------------------------

--
-- Table structure for table `valide`
--

CREATE TABLE `valide` (
  `id` int(11) NOT NULL,
  `valideFrom` datetime NOT NULL,
  `valideTo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valide`
--

INSERT INTO `valide` (`id`, `valideFrom`, `valideTo`) VALUES
(1, '2018-01-01 00:00:00', '2018-12-31 00:00:00'),
(2, '2018-11-11 00:00:00', '2018-12-31 00:00:00'),
(3, '2018-04-01 00:00:00', '2018-12-31 00:00:00'),
(4, '2018-06-01 00:00:00', '2018-12-31 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_16E0952B1238BFF9` (`user_approver_id`),
  ADD KEY `IDX_16E0952BDFF6D0DF` (`user_approvee_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5D9F75A1A76ED395` (`user_id`),
  ADD KEY `IDX_5D9F75A16BF700BD` (`status_id`),
  ADD KEY `IDX_5D9F75A138F6EEDC` (`job_level_id`),
  ADD KEY `IDX_5D9F75A1AE80F5DF` (`department_id`);

--
-- Indexes for table `holiday_request`
--
ALTER TABLE `holiday_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_94ACA91E5197E49` (`user_request_id`),
  ADD KEY `IDX_94ACA91577E3995` (`user_approval_id`),
  ADD KEY `IDX_94ACA91F791C99D` (`holiday_type_id`);

--
-- Indexes for table `holiday_stock`
--
ALTER TABLE `holiday_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_628C69A7A76ED395` (`user_id`),
  ADD KEY `IDX_628C69A7E356BC49` (`valide_id`),
  ADD KEY `IDX_628C69A7F791C99D` (`holiday_type_id`);

--
-- Indexes for table `holiday_type`
--
ALTER TABLE `holiday_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_level`
--
ALTER TABLE `job_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `IDX_332CA4DDD60322AC` (`role_id`),
  ADD KEY `IDX_332CA4DDA76ED395` (`user_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D6498C03F15C` (`employee_id`);

--
-- Indexes for table `valide`
--
ALTER TABLE `valide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `holiday_request`
--
ALTER TABLE `holiday_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `holiday_stock`
--
ALTER TABLE `holiday_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `holiday_type`
--
ALTER TABLE `holiday_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_level`
--
ALTER TABLE `job_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `valide`
--
ALTER TABLE `valide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `FK_16E0952B1238BFF9` FOREIGN KEY (`user_approver_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_16E0952BDFF6D0DF` FOREIGN KEY (`user_approvee_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `FK_5D9F75A138F6EEDC` FOREIGN KEY (`job_level_id`) REFERENCES `job_level` (`id`),
  ADD CONSTRAINT `FK_5D9F75A16BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_5D9F75A1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_5D9F75A1AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `holiday_request`
--
ALTER TABLE `holiday_request`
  ADD CONSTRAINT `FK_94ACA91577E3995` FOREIGN KEY (`user_approval_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_94ACA91E5197E49` FOREIGN KEY (`user_request_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_94ACA91F791C99D` FOREIGN KEY (`holiday_type_id`) REFERENCES `holiday_type` (`id`);

--
-- Constraints for table `holiday_stock`
--
ALTER TABLE `holiday_stock`
  ADD CONSTRAINT `FK_628C69A7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_628C69A7E356BC49` FOREIGN KEY (`valide_id`) REFERENCES `valide` (`id`),
  ADD CONSTRAINT `FK_628C69A7F791C99D` FOREIGN KEY (`holiday_type_id`) REFERENCES `holiday_type` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `FK_332CA4DDA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_332CA4DDD60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6498C03F15C` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
