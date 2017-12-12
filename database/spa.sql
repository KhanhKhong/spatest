-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2017 lúc 07:37 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `about_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `description`, `about_category_id`, `created_at`, `updated_at`) VALUES
(1, 'KHÔNG GIAN SPA\r\nNgày đăng: 26-05-2016\r\nSpa được rất nhiều du khách trong và ngoài nước biết đến. Đến với Spa Quý khách sẽ cảm nhận không gian hiện đại, sang trọng nhưng vẫn mang phong cách thuần việt đặc trưng, Sỏi Spa đem đến không khí rất ấm cúng, gần gũi. Ngoài ra, khu vực chăm sóc tóc, nail với các chuyên da hàng đầu và nhiều năm kinh nghiệm trong ngành sẽ thật sự làm hài lòng các thượng đế khó tính nhất. Khu café không gian yên tỉnh, thoáng mát để bạn bè họp mặt và các cặp đôi có không gian trò chuyện...\r\n\r\nĐỘI NGŨ NHÂN VIÊN\r\nNgày đăng: 26-05-2016\r\nĐội ngũ nhân viên chuyên nghiệp sẽ tư vấn và giải đáp mọi thắc mắc, chia sẻ những thông tin bổ ích từ việc chăm sóc tóc, nail, chăm sóc da và massage để Quý khách chọn được dịch vụ phù hợp và hiệu quả nhất.\r\n\r\nTUYỂN DỤNG\r\nNgày đăng: 03-06-2016', 0, '2017-12-06 02:14:33', '0000-00-00 00:00:00'),
(2, 'Tọa lạc tại 8-10 Nguyễn Thị Thập, KDC Him Lam, Phường Tân Hưng, Quận 7, Tp. Hồ Chí Minh, Sỏi Spa được rất nhiều du khách trong và ngoài nước biết đến. Đến  với Sỏi Spa Quý khách sẽ cảm nhận không gian hiện đại, sang trọng nhưng vẫn mang phong cách thuần việt đặc trưng, Sỏi Spa đem đến không gian ấm cúng, gần gũi. Ngoài ra, khu vực chăm sóc tóc, nail với các chuyên da hàng đầu và nhiều năm kinh nghiệm trong ngành sẽ thật sự làm hài lòng các thượng đế khó tính nhất. Khu café không gian yên tỉnh, thoáng mát để bạn bè họp mặt và các cặp đôi có không gian trò chuyện... \r\n\r\nKhi cuộc sống càng hiện đại thì môi trường càng ảnh hưởng rất nhiều đến tinh thần, cùng với tác động của rượu, bia hay  áp lực công việc cũng dẫn đến stress, những mệt mỏi không đáng có. Trung tâm Sỏi Spa đã ra đời và trở thành một nơi lý tưởng cho Quý khách tận hưởng những giây phút thư giãn và lấy lại tinh thần sảng khoái, năng động sau một ngày làm việc căng thẳng.\r\n\r\nQuy trình phục hồi sức khỏe bằng các dịch Massage kết hợp bấm huyệt trị liệu và sự cam kết sử dụng hoàn toàn nguyên liệu bằng thảo dược tự nhiên Quý khách cảm nhận trọn vẹn nguồn sinh lực mới và bổ sung đầy đủ năng lượng cho cơ thể.\r\n\r\nSỏi spa rất hân hạnh mang đến cho Quý khách món quà ý nghĩa nhất trong cuộc sống đó là sức khỏe bằng những dịch vụ hoàn hảo và đó cũng chính là niềm vinh hạnh của toàn thể nhân viên và kỹ thuật viên tại Sỏi spa. ', 1, '2017-12-06 02:15:24', '0000-00-00 00:00:00'),
(3, 'Đội ngũ nhân viên chuyên nghiệp sẽ tư vấn và giải đáp mọi thắc mắc, chia sẻ những thông tin bổ ích từ việc chăm sóc tóc, nail, chăm sóc da và massage để Quý Khách chọn được dịch vụ phù hợp và hiệu quả nhất.\r\n\r\nLựa chọn, hợp tác với những chuyên gia hàng đầu trong ngành tóc để tạo những mẫu tóc phù hợp với từng khuôn mặt, tôn vinh được vẻ đẹp tự nhiên của từng khách hàng.\r\n\r\nBên cạnh đó, với đội ngũ kỹ thuật viên được đào tạo nâng cấp tay nghề thường xuyên và chuyên nghiệp, sẽ sử dụng đôi tay điêu luyện để thực hiện những bài massage với hàng loạt động tác phối hợp nhịp nhàng và khoa học như: xoa, bóp, day, ấn, miết... trên các vùng cơ và huyệt đạo trên toàn cơ thể. Đồng thời kết hợp thảo dược hoặc đá nóng trên vùng thường xuyên mỏi và căng cơ sẽ giúp cơ thể đào thải các năng lượng thừa không cần thiết, mau chóng hồi phục sức khỏe, khí huyết tuần hoàn...', 2, '2017-12-06 02:15:40', '0000-00-00 00:00:00'),
(4, '<div class=\"box-content\">\r\n\r\n                    <ol>\r\n                       <li>Kỹ thuật viên chăm sóc da mặt.</li>\r\n                       <li>Kỹ thuật viên massage body, massage foot.</li>\r\n                       <li>Nhân viên pha chế và phục vụ cà phê</li>\r\n                   </ol>\r\n                   Điều kiện : Nam, Nữ 18 _ 30 tuổi. Làm việc tại Quận 1 và Quận 7<br>\r\n                   &nbsp;<br>\r\n                   Làm việc trong môi trường lành mạnh, chuyên nghiệp. Sẽ được đào tạo từ cơ bản đến nâng cao các môn massage như: massage thái, massage hongkong, massage nhật, massage chân, day ấn huyệt, massage mặt, chăm sóc da bởi những người quản lý chuyên nghiệp, làm việc lâu năm trong nghề, . Sử dụng mỹ phẩm chuyên nghiệp cho Spa, chất lượng an toàn, hiệu quả và tiêu chuẩn.<br>\r\n                   &nbsp;\r\n                   <ul>\r\n                       <li>Làm việc theo ca</li>\r\n                       <li>Lương cơ bản + phần trăm dịch vụ.</li>\r\n                       <li>Phụ cấp tiền xe và tiền ăn.</li>\r\n                       <li>Ký hợp đồng và bảo hiểm y tế...v.v.v..</li>\r\n                   </ul>\r\n\r\n                   \r\n                <div class=\"clear\"></div>\r\n            </div>', 3, '2017-12-06 02:16:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_category`
--

DROP TABLE IF EXISTS `about_category`;
CREATE TABLE `about_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about_category`
--

INSERT INTO `about_category` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Không gian SPA', 0, '2017-12-06 02:08:48', '0000-00-00 00:00:00'),
(2, 'Đội ngũ', 0, '2017-12-06 02:09:04', '0000-00-00 00:00:00'),
(3, 'Tuyển dụng', 0, '2017-12-06 02:09:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `about_us` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `about_us`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, vix sumo modus diceret ex, meis feugait te his. Etiam moderatius necessitatibus no usu. Eu pro solet graeco suscipit, nostrud eleifend iracundia pro ea.</p>\r\n\r\n<div class=\"padbottom-10\">\r\n<p><span style=\"color:#2980b9\">Số 39, Nguyễn Bỉnh Khi&ecirc;m, Phường 1, Quận G&ograve; Vấp, TP.HCM</span></p>\r\n</div>\r\n\r\n<div class=\"padbottom-10\">\r\n<p><span style=\"color:#2980b9\">Inquiry - 0123456789</span></p>\r\n</div>\r\n\r\n<div class=\"padbottom-10\">\r\n<p><span style=\"color:#2980b9\">www.domain.com</span></p>\r\n</div>\r\n\r\n<div class=\"padbottom-10\">\r\n<p><span style=\"color:#2980b9\">info@gmail.com</span></p>\r\n\r\n<p>&nbsp;</p>\r\n</div>', '2017-12-07 04:31:34', '2017-12-06 21:31:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer_newletter`
--

DROP TABLE IF EXISTS `footer_newletter`;
CREATE TABLE `footer_newletter` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer_newletter`
--

INSERT INTO `footer_newletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'khongk39@gmail.com', '2017-12-09 20:32:22', '2017-12-09 20:32:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `google` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `header`
--

INSERT INTO `header` (`id`, `logo`, `facebook`, `google`, `twitter`, `pinterest`, `phone`, `slogan`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '123564', 'ĐÁNH THỨC VẺ ĐẸP LÀN DA', '2017-12-06 07:26:50', '2017-12-06 00:26:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `news_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:05', '0000-00-00 00:00:00'),
(2, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(3, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(4, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(5, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(6, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(7, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(8, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(9, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00'),
(10, '2017-12-12-05-33-59Desert.jpg', 'new', '<p>&aacute;dasd</p>', 0, '2017-12-11 22:33:59', '2017-12-11 22:33:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_category`
--

DROP TABLE IF EXISTS `news_category`;
CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news_category`
--

INSERT INTO `news_category` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'new1', 0, '2017-12-06 18:55:27', '2017-12-06 18:55:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price_sale` double DEFAULT NULL,
  `price` double NOT NULL,
  `hot` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `product_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `short_description`, `description`, `price_sale`, `price`, `hot`, `status`, `product_category_id`, `created_at`, `updated_at`) VALUES
(1, '2017-12-12-05-06-30Desert.jpg', 'Kem dưỡng 123', '<p>Extreme Power Adidas l&agrave; một d&ograve;ng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với th&agrave;nh phần chủ yếu l&agrave; hỗ, phi&ecirc;n bản n&agrave;y như một kh&uacute;c dạo đầu của một trận b&oacute;ng đ&aacute; tr&agrave;n đầy năng lượng c&ugrave;ng thiết kế đơn giản nhưng trẻ trung v&agrave; hiện đại. Sự lựa chọn ho&agrave;n hảo cho c&aacute;c ch&agrave;ng trai.</p>', '<p>Extreme Power Adidas l&agrave; một d&ograve;ng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với th&agrave;nh phần chủ yếu l&agrave; hỗ, phi&ecirc;n bản n&agrave;y như một kh&uacute;c dạo đầu của một trận b&oacute;ng đ&aacute; tr&agrave;n đầy năng lượng c&ugrave;ng thiết kế đơn giản nhưng trẻ trung v&agrave; hiện đại. Sự lựa chọn ho&agrave;n hảo cho c&aacute;c ch&agrave;ng trai.</p>', 91, 91, 0, 1, 1, '2017-12-12 05:06:31', '2017-12-11 22:06:31'),
(2, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:30', '0000-00-00 00:00:00'),
(3, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:32', '0000-00-00 00:00:00'),
(4, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:34', '0000-00-00 00:00:00'),
(5, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:36', '0000-00-00 00:00:00'),
(6, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:37', '0000-00-00 00:00:00'),
(7, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:38', '0000-00-00 00:00:00'),
(8, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:40', '0000-00-00 00:00:00'),
(9, '9-3.jpg', 'Kem dưỡng da MarioBadescu', '', '', 920, 920, 0, 1, 1, '2017-12-06 02:05:48', '0000-00-00 00:00:00'),
(13, '2017-12-12-06-29-33Chrysanthemum.jpg', 'asdasd', '<p>asdasd</p>', '<p>asd</p>', NULL, 123, 0, 1, 2, '2017-12-12 06:29:33', '2017-12-11 23:29:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Chăm sóc da', 0, '2017-12-06 02:10:30', '0000-00-00 00:00:00'),
(2, 'Chăm sóc môi', 0, '2017-12-06 02:10:52', '0000-00-00 00:00:00'),
(3, 'Chăm sóc sức khoẻ', 0, '2017-12-06 02:11:02', '0000-00-00 00:00:00'),
(4, 'Dầu dưỡng tóc', 0, '2017-12-06 02:11:12', '0000-00-00 00:00:00'),
(5, 'Dầu gội', 0, '2017-12-06 02:11:23', '0000-00-00 00:00:00'),
(6, 'Vệ sinh da và tóc', 0, '2017-12-06 02:11:33', '0000-00-00 00:00:00'),
(7, 'Vệ sinh toàn thân', 0, '2017-12-06 02:11:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id`, `thumbnail`, `product_id`, `created_at`, `updated_at`) VALUES
(28, '2017-12-12-05-06-31Penguins.jpg', 1, '2017-12-11 22:06:31', '2017-12-11 22:06:31'),
(39, '2017-12-12-06-29-33Penguins.jpg', 13, '2017-12-11 23:29:33', '2017-12-11 23:29:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`id`, `name`, `phone`, `email`, `time`, `description`, `created_at`, `updated_at`) VALUES
(31, 'duckhanh', '01659645329', 'duckhanhkhong@gmail.com', 'ádhas', 'ádasd', '2017-12-07 18:28:17', '2017-12-07 18:28:17'),
(32, 'duckhanh', '01659645329', 'duckhanhkhong@gmail.com', 'ádhas', 'ádasd', '2017-12-07 18:29:53', '2017-12-07 18:29:53'),
(33, 'duckhanh', '01659645329', 'duckhanhkhong@gmail.com', 'ádhas', 'ádasd', '2017-12-07 18:55:19', '2017-12-07 18:55:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `service_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `description`, `price`, `service_category_id`, `created_at`, `updated_at`) VALUES
(1, 'cong-nghe-triet-long-opt.jpg', '', 'ádasdas', 0, 1, '2017-12-07 03:53:29', '0000-00-00 00:00:00'),
(2, 'Picture2.png', '', 'ádasdas', 0, 1, '2017-12-06 15:07:03', '0000-00-00 00:00:00'),
(3, 'Picture3.png', '', 'ádasdas', 0, 1, '2017-12-06 15:07:07', '0000-00-00 00:00:00'),
(4, 'Picture1.png', '', 'ádasdas', 0, 1, '2017-12-06 15:06:56', '0000-00-00 00:00:00'),
(5, 'Picture2.png', '', 'ádasdas', 0, 1, '2017-12-06 15:07:10', '0000-00-00 00:00:00'),
(6, '2017-12-12-05-34-11Penguins.jpg', 'ádasd', '<p>&aacute;dasd</p>', 132, 0, '2017-12-11 22:34:12', '2017-12-11 22:34:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_category`
--

DROP TABLE IF EXISTS `service_category`;
CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_category`
--

INSERT INTO `service_category` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Body', 0, '2017-12-06 02:09:39', '0000-00-00 00:00:00'),
(2, 'Skin', 0, '2017-12-06 02:09:50', '0000-00-00 00:00:00'),
(3, 'Wellness', 0, '2017-12-06 02:10:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider_images_banner`
--

DROP TABLE IF EXISTS `slider_images_banner`;
CREATE TABLE `slider_images_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider_images_banner`
--

INSERT INTO `slider_images_banner` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ESSENCE OF NATURAL BEAUTY', 'A simple web based flaform focused on improving the travel in dustry', 'home1_slider2.jpg', '2017-12-06 02:04:35', '0000-00-00 00:00:00'),
(3, 'jkahskdhasjdh', 'kashdjkahsd', '2017-12-07-02-34-08Penguins.jpg', '2017-12-06 19:34:09', '2017-12-06 19:34:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'duckhanhkhong', 'khongk39@gmail.com', '$2y$10$u0HnW0L.3wO8gb48uA20Luhq33EExapTCfKGaoUIOrtywzKDwl0Ge', 'YWAs2pnCdZcZzLhG4qPbW5sueJ8jnFlU4of6gLTwIfqTGEEM3IMeMvi1ctU7', 1, '2017-12-05 19:22:05', '2017-12-05 19:22:05'),
(2, 'taikhoan1', 'taikhoan1@gmail.com', '$2y$10$00K0dQRGn/3irwSd9G0uvePMmpvasF0u3gvowRmk/ur1vqoM42rni', 'qEn9shX6vN2BYPTmKSiKIPEcIbfQUOIzGPTmrwKxZOu7d5xCxS9hJUS4nBcK', 0, '2017-12-05 19:58:51', '2017-12-05 19:58:51'),
(3, 'taikhoan1', 'duckhanhkhong@gmail.com', '$2y$10$oMjHJ.vjln92D/dPOb/G..8QdvbmcW69AQj12wm0yqnWR5nZZBKDG', 'GCIFGoKan9kb1geu0blOOLfp6fbjEVf3v1cp3Sa7YRiRDkVk3VapRCaC4LDZ', 0, '2017-12-07 18:27:39', '2017-12-07 18:27:39'),
(4, 'khanh', 'tyu12@gmail.com', '$2y$10$i4HrVkLJ6cfpLCmWGqjDRO0L5geJ1FQ0XpgMzjXNxwCEZL1/2ZHp2', 'OHRNv2dGtWnbdGTQRZBQQH0VB6kozjAS6S9PjJSRrYp3Yl3JHxANUS5438hL', 0, '2017-12-07 20:39:31', '2017-12-07 20:39:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `about_category`
--
ALTER TABLE `about_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer_newletter`
--
ALTER TABLE `footer_newletter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider_images_banner`
--
ALTER TABLE `slider_images_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `about_category`
--
ALTER TABLE `about_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `footer_newletter`
--
ALTER TABLE `footer_newletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slider_images_banner`
--
ALTER TABLE `slider_images_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
