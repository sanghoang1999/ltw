-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 04, 2020 lúc 04:20 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `imported_price` double(9,2) NOT NULL,
  `revenue` double(9,2) NOT NULL,
  `profit` double(9,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `category`, `code`, `price`, `image`, `imported_price`, `revenue`, `profit`) VALUES
(1, 'Tiempo Legend 8FG', 'Nike', 'best_seller', 'TL8', 79.00, './img/img-3.jpg', 69.00, 0.00, 0.00),
(2, 'Mercurial Vapor Elite', 'Nike', 'best_seller', 'MVE', 75.00, './img/img-4.jpg', 65.00, 0.00, 0.00),
(3, 'Phantom Venom Elite', 'Nike', 'best_seller', 'PVE', 52.00, './img/img-5.jpg', 42.00, 0.00, 0.00),
(4, 'Phantom Vision Elite', 'Nike', 'best_seller', 'PVE1', 66.00, './img/img-6.jpg', 56.00, 0.00, 0.00),
(5, 'Tiempo Black', 'Nike', 'futsal', 'TB', 36.00, './img/img-7.jpg', 26.00, 0.00, 0.00),
(6, 'Tiempo 8 IC', 'Nike', 'futsal', 'T8IC', 36.00, './img/img-8.jpg', 26.00, 0.00, 0.00),
(7, 'React Gato S9', 'Nike', 'futsal', 'RGS9', 26.00, './img/img-9.jpg', 16.00, 0.00, 0.00),
(8, 'Mercurial Superfly', 'Nike', 'futsal', 'MS', 29.00, './img/img-10.jpg', 19.00, 0.00, 0.00),
(9, 'Adidas ACE 20.1', 'Adidas', 'outdoor', 'AA20', 36.00, './img/img-33.jpg', 26.00, 0.00, 0.00),
(10, 'Adidas Predator', 'Adidas', 'outdoor', 'AP', 36.00, './img/img-34.jpg', 26.00, 0.00, 0.00),
(11, 'Adidas X 19.2', 'Adidas', 'outdoor', 'AX19', 26.00, './img/img-35.jpg', 16.00, 0.00, 0.00),
(12, 'Adidas Predator', 'Adidas', 'outdoor', 'AP1', 29.00, './img/img-36.jpg', 19.00, 0.00, 0.00),
(13, 'Joma Black', 'Joma', 'futsal', 'JB', 36.00, './img/img-37.jpg', 26.00, 0.00, 0.00),
(14, 'Joma 2020', 'Joma', 'futsal', 'J2020', 36.00, './img/img-38.jpg', 26.00, 0.00, 0.00),
(15, 'Nike Phantom', 'Nike', 'futsal', 'NP', 26.00, './img/img-38.jpg', 16.00, 0.00, 0.00),
(16, 'Mercurial X', 'Nike', 'futsal', 'MX', 29.00, './img/img-40.jpg', 19.00, 0.00, 0.00),
(17, 'Shock & Case', 'Adidas', 'accessories', 'SC', 76.00, './img/img-41.jpg', 66.00, 0.00, 0.00),
(18, 'Hand Wrapper', 'Adidas', 'accessories', 'HW', 75.00, './img/img-42.jpg', 65.00, 0.00, 0.00),
(19, 'Gloove', 'Adidas', 'accessories', 'GG', 52.00, './img/img-43.jpg', 42.00, 0.00, 0.00),
(20, 'Case', 'Adidas', 'accessories', 'C1', 66.00, './img/img-44.jpg', 56.00, 0.00, 0.00),
(21, 'Sock & Case', 'Nike', 'accessories', 'SC1', 76.00, './img/img-15.jpg', 66.00, 0.00, 0.00),
(22, 'Case', 'Nike', 'accessories', 'C2', 75.00, './img/img-16.jpg', 65.00, 0.00, 0.00),
(23, 'Hand sheel', 'Nike', 'accessories', 'HS1', 52.00, './img/img-17.jpg', 42.00, 0.00, 0.00),
(24, 'Hand Wrapper', 'Nike', 'accessories', 'HW1', 66.00, './img/img-45.jpg', 56.00, 0.00, 0.00),
(25, 'Hypervenom Black', 'Nike', 'sale', 'HB', 34.00, './img/img-18.jpg', 24.00, 0.00, 0.00),
(26, 'Mercurial S6', 'Nike', 'sale', 'MS6', 44.00, './img/img-19.jpg', 34.00, 0.00, 0.00),
(27, 'Mercurial S2', 'Nike', 'sale', 'MS2', 52.00, './img/img-20.jpg', 42.00, 0.00, 0.00),
(28, 'Mercurial Super', 'Nike', 'Sale', 'MS1', 66.00, './img/img-4.jpg', 56.00, 0.00, 0.00),
(29, 'Sock & Case Sale', 'Nike', 'sale', 'SCS', 12.00, './img/img-15.jpg', 2.00, 0.00, 0.00),
(30, 'Case', 'Nike', 'sale', 'NC', 5.00, './img/img-16.jpg', 2.00, 0.00, 0.00),
(31, 'Hand sheel sale', 'Nike', 'sale', 'HSS', 12.00, './img/img-17.jpg', 2.00, 0.00, 0.00),
(32, 'Hand Wrapper Sale', 'Nike', 'sale', 'HWS', 16.00, './img/img-45.jpg', 6.00, 0.00, 0.00),
(33, 'Korea Shirt', 'Nike', 'shirt', 'KS', 22.87, './img/img-21.jpg', 12.87, 0.00, 0.00),
(34, 'Nigeria Shirt', 'Nike', 'shirt', 'NS', 22.87, './img/img-22.jpg', 12.87, 0.00, 0.00),
(35, 'USA Shirt', 'Nike', 'shirt', 'US', 22.87, './img/img-23.jpg', 12.87, 0.00, 0.00),
(36, 'Norway Shirt', 'Nike', 'shirt', 'NSS', 22.87, './img/img-24.jpg', 12.87, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `user_level` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `user_level`) VALUES
(1, 'tuhuynh', '$2y$10$v0cNajTLVfkemo1TdMIBu.iiXl0uBysfD8NlCzf22W2Wvm374wE.6', '2020-06-27 09:37:56', 0),
(3, 'admin', '$2y$10$ktGQBSPnifaCAM1uiimxkOoYOXhCBqmPv1.Mm2rHGTtxwKyYps17y', '2020-06-27 15:06:47', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
