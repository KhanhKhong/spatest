-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2017 lúc 03:20 AM
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
(9, 'Picture2.png', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 'HUẤN LUYỆN VÀ CHYỂN GIAO CÔNG NGHỆ LÀM ĐẸP GREEN PEEL TỪ ĐỨC', 0, '2017-12-06 02:17:10', '0000-00-00 00:00:00');

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
  `price_sale` double NOT NULL,
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
(1, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:28', '0000-00-00 00:00:00'),
(2, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:30', '0000-00-00 00:00:00'),
(3, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:32', '0000-00-00 00:00:00'),
(4, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:34', '0000-00-00 00:00:00'),
(5, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:36', '0000-00-00 00:00:00'),
(6, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:37', '0000-00-00 00:00:00'),
(7, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:38', '0000-00-00 00:00:00'),
(8, '9-3.jpg', 'Kem dưỡng da MarioBadescu', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 'Extreme Power Adidas là một dòng sản phẩm trong bộ sưu tập nước hoa của Adidas. Với thành phần chủ yếu là hỗ, phiên  bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.', 920, 920, 0, 1, 1, '2017-12-06 02:06:40', '0000-00-00 00:00:00'),
(9, '9-3.jpg', 'Kem dưỡng da MarioBadescu', '', '', 920, 920, 0, 1, 1, '2017-12-06 02:05:48', '0000-00-00 00:00:00');

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
(1, 'pd4.jpg', 1, '2017-12-06 02:18:28', '0000-00-00 00:00:00'),
(3, 'pd3.jpg', 1, '2017-12-06 02:18:58', '0000-00-00 00:00:00'),
(4, 'pd2.jpg', 1, '2017-12-06 02:18:53', '0000-00-00 00:00:00'),
(5, 'pd1.jpg', 1, '2017-12-06 02:18:49', '0000-00-00 00:00:00');

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
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider_images_banner`
--

INSERT INTO `slider_images_banner` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ESSENCE OF NATURAL BEAUTY', 'A simple web based flaform focused on improving the travel in dustry', 'home1_slider1.jpg', '2017-12-06 02:04:25', '0000-00-00 00:00:00'),
(2, 'ESSENCE OF NATURAL BEAUTY', 'A simple web based flaform focused on improving the travel in dustry', 'home1_slider2.jpg', '2017-12-06 02:04:35', '0000-00-00 00:00:00');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slider_images_banner`
--
ALTER TABLE `slider_images_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
