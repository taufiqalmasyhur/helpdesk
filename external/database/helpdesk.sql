-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Agu 2017 pada 10.16
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `auth_id` int(255) NOT NULL,
  `auth_nama` varchar(255) NOT NULL,
  `auth_email` varchar(255) NOT NULL,
  `auth_pass` varchar(255) NOT NULL,
  `auth_unit` int(255) NOT NULL,
  `auth_user_role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`auth_id`, `auth_nama`, `auth_email`, `auth_pass`, `auth_unit`, `auth_user_role`) VALUES
(1, 'Febrial Pratama', 'febrial.pratama@angkasapura2.co.id', '1234', 1, 2),
(2, 'Pratama Febrial', 'pratama.febrial@angkasapura2.co.id', '1234', 1, 3),
(3, 'Halo Budi', 'halobudi@yahoo.com', '1234', 3, 1),
(4, 'Halo Febri', 'halofebri@yahoo.com', '1234', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(255) NOT NULL,
  `comment_ticket_id` int(255) NOT NULL,
  `comment_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `comment_desc` varchar(255) NOT NULL,
  `comment_auth_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `level_id` int(255) NOT NULL,
  `level_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`level_id`, `level_nama`) VALUES
(1, 'Low'),
(2, 'Medium'),
(3, 'High'),
(4, 'Very High');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` int(255) NOT NULL,
  `status_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status_nama`) VALUES
(1, 'Open'),
(2, 'In Progress'),
(3, 'Completed'),
(4, 'Canceled'),
(5, 'Closed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(255) NOT NULL,
  `ticket_title` int(255) NOT NULL,
  `ticket_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ticket_desc` varchar(255) NOT NULL,
  `ticket_level` int(255) NOT NULL,
  `ticket_status` int(255) NOT NULL,
  `ticket_issuer_id` int(255) NOT NULL,
  `ticket_support_id` int(255) NOT NULL,
  `ticket_attachment` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(255) NOT NULL,
  `unit_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_nama`) VALUES
(1, 'Unit IT'),
(2, 'Unit Human Capital'),
(3, 'Unit Kantor Cabang'),
(4, 'Unit Project Business');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(255) NOT NULL,
  `user_role_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `user_role_nama`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`auth_id`),
  ADD KEY `fk_auth_unit_id` (`auth_unit`),
  ADD KEY `fk_auth_role_id` (`auth_user_role`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comment_auth_id` (`comment_auth_id`),
  ADD KEY `fk_comment_ticket_id` (`comment_ticket_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `fk_ticket_level_id` (`ticket_level`),
  ADD KEY `fk_ticket_status_id` (`ticket_status`),
  ADD KEY `fk_ticket_issuer_id` (`ticket_issuer_id`),
  ADD KEY `fk_ticket_support_id` (`ticket_support_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `auth_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `fk_auth_role_id` FOREIGN KEY (`auth_user_role`) REFERENCES `user_role` (`user_role_id`),
  ADD CONSTRAINT `fk_auth_unit_id` FOREIGN KEY (`auth_unit`) REFERENCES `unit` (`unit_id`);

--
-- Ketidakleluasaan untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_auth_id` FOREIGN KEY (`comment_auth_id`) REFERENCES `auth` (`auth_id`),
  ADD CONSTRAINT `fk_comment_ticket_id` FOREIGN KEY (`comment_ticket_id`) REFERENCES `ticket` (`ticket_id`);

--
-- Ketidakleluasaan untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_issuer_id` FOREIGN KEY (`ticket_issuer_id`) REFERENCES `auth` (`auth_id`),
  ADD CONSTRAINT `fk_ticket_level_id` FOREIGN KEY (`ticket_level`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `fk_ticket_status_id` FOREIGN KEY (`ticket_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `fk_ticket_support_id` FOREIGN KEY (`ticket_support_id`) REFERENCES `auth` (`auth_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
