-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2023 lúc 01:51 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `MACV` varchar(10) NOT NULL,
  `TENCV` varchar(50) NOT NULL,
  `CHITIET` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`MACV`, `TENCV`, `CHITIET`) VALUES
('daubep', 'Đầu Bếp', 'Nấu ăn'),
('it', 'Infomation Technology', 'Bộ Phận Kỹ Thuật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` varchar(10) NOT NULL,
  `HOTENNV` varchar(50) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `SOCCCD` varchar(12) NOT NULL,
  `GIOITINH` varchar(10) NOT NULL,
  `NGAYVAOLAM` date NOT NULL,
  `HESOLUONG` float NOT NULL,
  `MACV` varchar(10) NOT NULL,
  `TDHV` varchar(10) NOT NULL,
  `MAPB` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HOTENNV`, `NGAYSINH`, `SOCCCD`, `GIOITINH`, `NGAYVAOLAM`, `HESOLUONG`, `MACV`, `TDHV`, `MAPB`) VALUES
('nv01', 'Trần Minh Thiện', '2003-01-04', '1234567890', 'Nam', '2023-06-01', 5, 'daubep', 'Đại Học', 'bep'),
('nv02', '  Như22', '1111-11-11', '11123456789', 'Nữ', '2023-06-22', 5, 'it', '4', 'it');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MAPB` varchar(10) NOT NULL,
  `TENPB` varchar(10) NOT NULL,
  `CHITIET` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MAPB`, `TENPB`, `CHITIET`) VALUES
('bep', 'Nhà Bếp', 'Nấu ăn'),
('it', 'Infomation', 'Phòng IT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin'),
('nhuvsnhu', 'nhumap');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPB`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
