-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 29, 2022 lúc 02:30 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `MaGH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiSP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThuongHieu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MauSac` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KichCo` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `MaLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `TenLoai`, `TenSP`) VALUES
(1, 'Nike Sportswear', 'Short-Sleeve Top'),
(2, 'Brief-Lined Running Shorts', 'Nike Dri-FIT Run Division Challengerr'),
(3, 'Sportswear', 'BLACK PANTHER GRAPHIC PANTS'),
(4, 'Long Sleeve Shirt', 'Flannel Long Sleeve Shirt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiSP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThuongHieu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MauSac` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KichCo` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `LoaiSP`, `ThuongHieu`, `MauSac`, `KichCo`, `MoTa`, `Gia`) VALUES
(1, 'Nike Sportswear', 'Short-Sleeve Top', 'Nike', 'Coconut Milk/White', 'S', 'The Nike Sportswear Top has an easy fit and a clean design perfect for everyday wear. Its jersey fabric is made from 100% sustainable materials, using a blend of recycled polyester, recycled cotton and organic cotton fibres. The blend is at least 10% recycled fibres or at least 10% organic cotton fibres.', 1169000),
(2, 'Nike Sportswear', 'Short-Sleeve Top', 'Nike', 'Black/White', 'M', 'The Nike Sportswear Top has an easy fit and a clean design perfect for everyday wear. Its jersey fabric is made from 100% sustainable materials, using a blend of recycled polyester, recycled cotton and organic cotton fibres. The blend is at least 10% recycled fibres or at least 10% organic cotton fibres.', 1169000),
(3, 'Nike Dri-FIT Run Division Challengerr', 'Brief-Lined Running Shorts', 'Nike', 'Black/Medium Blue', 'M', 'Hit the pavement on your daily run in our sweat-wicking Run Division Challenger Shorts. They are light and airy, with plenty of storage for your keys and phone. Plus, they have an internal liner for the support you need to go the extra mile. This product is made from at least 75% recycled polyester fibres.', 1000000),
(4, 'Nike Dri-FIT Run Division Challengerr', 'Brief-Lined Running Shorts', 'Nike', 'Cobblestone/Cave Stone', 'M', 'Hit the pavement on your daily run in our sweat-wicking Run Division Challenger Shorts. They are light and airy, with plenty of storage for your keys and phone. Plus, they have an internal liner for the support you need to go the extra mile. This product is made from at least 75% recycled polyester fibres.', 1069000),
(5, 'BLACK PANTHER GRAPHIC PANTS', 'Sportswear', 'Adidas', 'BLACK', 'S', 'These sweat pants are so soft, everyone will want a pair. But only those in the know will clock the adidas logo spelled in the Wakandan alphabet. These pants, inspired by Marvels Black Panther, add individuality to any look. And they are just as suited for day-to-day dramas as escaping into another world.\r\n\r\nThese pants were made using UNITEFIT — an all-gender fit system that was created with a spectrum of sizes, genders and forms in mind.\r\n\r\nMade in part with recycled content generated from production waste, e.g. cutting scraps, and post-consumer household waste to avoid the larger environmental impact of producing virgin content.', 1700000),
(6, 'BLACK PANTHER GRAPHIC PANTS', 'Sportswear', 'Adidas', 'BLACK', 'M', 'These sweat pants are so soft, everyone will want a pair. But only those in the know will clock the adidas logo spelled in the Wakandan alphabet. These pants, inspired by Marvels Black Panther, add individuality to any look. And they are just as suited for day-to-day dramas as escaping into another world.\r\n\r\nThese pants were made using UNITEFIT — an all-gender fit system that was created with a spectrum of sizes, genders and forms in mind.\r\n\r\nMade in part with recycled content generated from production waste, e.g. cutting scraps, and post-consumer household waste to avoid the larger environmental impact of producing virgin content.', 1700000),
(7, 'Flannel Long Sleeve Shirt', 'Long Sleeve Shirt', 'Uniqlo', 'NAVY', 'M', 'Thin material in a regular fit that goes with anything. Expands your outfit options.', 686000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

DROP TABLE IF EXISTS `thuonghieu`;
CREATE TABLE IF NOT EXISTS `thuonghieu` (
  `MaTH` int(11) NOT NULL AUTO_INCREMENT,
  `TenTH` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTH`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaTH`, `TenTH`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Uniqlo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
