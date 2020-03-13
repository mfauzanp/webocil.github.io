-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 05:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotaperpus`
--

CREATE TABLE `anggotaperpus` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `badge` varchar(50) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotaperpus`
--

INSERT INTO `anggotaperpus` (`id`, `nama`, `badge`, `unitkerja`, `email`, `notelp`) VALUES
(9, 'M Fauzan Prasetyo', '122313', 'Divisi Operasi', 'fauzanfsb@gmail.com', '082175046227'),
(12, 'FADILLAH DIAH UTAMI', '8864644', 'Divisi Operasi', 'fadillahdiahutami@gmail.com', '089512369021'),
(13, 'Saitama', '1224', 'Divisi Operasi', 'saitamasutejo@gmal.com', ''),
(14, 'Fauzannnnnnn', '281199', 'Divisi Operasi', 'fauzangaul@gmail.com', '089530546227');

-- --------------------------------------------------------

--
-- Table structure for table `bukuperpus`
--

CREATE TABLE `bukuperpus` (
  `id` int(11) NOT NULL,
  `namabuku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahunterbit` varchar(50) NOT NULL,
  `kategoribuku` varchar(50) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `deskbuku` varchar(155) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `filebuku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukuperpus`
--

INSERT INTO `bukuperpus` (`id`, `namabuku`, `penerbit`, `tahunterbit`, `kategoribuku`, `penulis`, `deskbuku`, `cover`, `filebuku`) VALUES
(15, 'Sirius', 'Debu Jalan', '2019', 'Karya Umum', '0', '', '533ed7f02f335316e5b7e0ab836af8ab.jpg', 'd607d0e1195715e5165189fd7fd2799c.pdf'),
(17, 'Tapak Jejak', 'Fiersa Besari', '2020', 'Filsafat', 'Fiersa Besari', '', '333518655645c5abe9376d0aa382896b.jpg', '211e5ada254f8971ad29f97dc22c9256.pdf'),
(18, 'Daun Yang Jatuh Tak Pernah Membeni Angin', 'Tere Liye', '2019', 'Sastra Dan Kesusasteraan', 'Tere Liye', '', '19d31732f7acf11159641894a34b1313.jpg', '5ff5c0270cf8a20ec03e28421a780ee9.pdf'),
(19, 'Harry Potter dan Batu Bertuah', 'PT Gramedia Pustaka Utama Jakarta', '2000', 'Karya Umum', 'J.K Rowling', '', '593cee74a5af3ff768c5a73a8086fb45.jpg', '63b5d3568ebc697d624a8be67b7a2fd3.pdf'),
(20, 'Harry Potter dan Kamar Rahasia', 'PT Gramedia Pustaka Utama Jakarta', '2000', 'Karya Umum', 'J.K Rowling', '', '4f12d8d04bd32129ec6b11c82b839176.jpg', '19bfe54a39f9320656990277a5e7bc89.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `badge` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `badge`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'ocil', '99888', 'ocilgaming@gmail.com', 'default.jpg', '$2y$10$./YT4pQBizaYgk9mS2YQYe4uYEaZX9pUOBcjiOGCsAfIwjxtn970O', 2, 1, 0),
(6, 'Fauzan', '281199', 'fauzanfsb@gmail.com', 'default.jpg', '$2y$10$YviavTCS5cAnnhbMMGcY2OTHnr6mxu6H.JocTcgWfP0T25iMaxDhm', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotaperpus`
--
ALTER TABLE `anggotaperpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukuperpus`
--
ALTER TABLE `bukuperpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotaperpus`
--
ALTER TABLE `anggotaperpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bukuperpus`
--
ALTER TABLE `bukuperpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
