-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 04:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wolfcinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_seats`
--

CREATE TABLE `booked_seats` (
  `id` int(11) NOT NULL,
  `id_timef` int(11) NOT NULL,
  `seat_id` varchar(10) NOT NULL,
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_seats`
--

INSERT INTO `booked_seats` (`id`, `id_timef`, `seat_id`, `booking_time`) VALUES
(337, 47, 'A66', '2023-12-22 22:13:11'),
(338, 47, 'A67', '2023-12-22 22:13:11'),
(339, 47, 'A66', '2023-12-22 22:14:46'),
(340, 47, 'A67', '2023-12-22 22:14:46'),
(341, 51, 'A62', '2023-12-22 22:24:55'),
(342, 51, 'A63', '2023-12-22 22:24:55'),
(343, 51, 'A56', '2023-12-22 22:26:16'),
(344, 51, 'A57', '2023-12-22 22:26:16'),
(345, 54, 'A74', '2023-12-22 22:51:01'),
(346, 54, 'A75', '2023-12-22 22:51:01'),
(347, 70, 'A45', '2023-12-23 02:52:03'),
(348, 70, 'A46', '2023-12-23 02:52:03'),
(349, 68, 'A62', '2023-12-23 02:58:08'),
(350, 68, 'A63', '2023-12-23 02:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhsachfilm`
--

CREATE TABLE `danhsachfilm` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `namef` varchar(200) NOT NULL,
  `describef` varchar(1000) NOT NULL COMMENT 'mô tả',
  `genref` varchar(200) NOT NULL COMMENT 'thể loại',
  `castf` varchar(200) NOT NULL COMMENT 'diễn viên',
  `timef` time NOT NULL COMMENT 'thời lượng',
  `pricef` varchar(200) NOT NULL,
  `linktrailer` varchar(100) NOT NULL COMMENT 'link trailer film',
  `role_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhsachfilm`
--

INSERT INTO `danhsachfilm` (`id`, `img`, `namef`, `describef`, `genref`, `castf`, `timef`, `pricef`, `linktrailer`, `role_film`) VALUES
(77, 'keanhon.jpg', 'KẺ ĂN HỒN', 'Phim về hàng loạt cái chết bí ẩn ở Làng Địa Ngục, nơi có ma thuật cổ xưa: 5 mạng đổi bình Rượu Sọ Người. Thập Nương - cô gái áo đỏ là kẻ nắm giữ bí thuật luyện nên loại rượu mạnh nhất!', 'Kinh Dị', 'Hoàng Hà, Võ Điền Gia Huy, Huỳnh Thanh Trực, NSƯT Chiều Xuân, Nghệ sĩ Viết Liên, NSND Ngọc Thư, Nguyễn Hữu Tiến, Nguyễn Phước Lộc, Nghinh Lộc, Lý Hồng Ân, Vũ Đức Ngọc…', '01:30:00', '50000', 'xWh0g4rKGjI', 1),
(79, 'single_in_seoul_teaser_poster_vn.jpg', 'MỘT MÌNH VẪN ỔN\'T ', 'Vì công việc, một nữ biên tập sợ hãi cuộc sống độc thân đã được hợp tác với anh nhà văn đẹp trai, nổi tiếng nhưng mất niềm tin vào tình yêu đích thực. Cả hai sẽ kết hợp ra sao để tạo nên “bí kíp sinh tồn” qua mùa Noel cho hội ế lâu năm?', 'Hài,Tình cảm', 'LEE Dong-wook, LIM Soo-jung, E Som', '01:30:00', '50000', '4Ckh_sOOH8', 1),
(83, 'vietnam_-_poster_-_15.12.2023_1_.jpg', 'THIẾU NIÊN VÀ CHIM DIỆC ', 'Đến từ Studio Ghibli và đạo diễn Miyazaki Hayao, bộ phim là câu chuyện về hành trình kỳ diệu của cậu thiếu niên Mahito trong một thế giới hoàn toàn mới lạ. Trải qua nỗi đau mất mẹ cùng mối quan hệ chẳng mấy vui vẻ với gia đình cũng như bạn học, Mahito dần cô lập bản thân... cho đến khi cậu gặp một chú chim diệc biết nói kỳ lạ. Mahito cùng chim diệc bước vào một tòa tháp bí ẩn, nơi một thế giới thần kỳ mở ra, đưa cậu gặp gỡ những người mình yêu thương... trong một nhân dạng hoàn toàn khác.', 'Hoạt hình,Gia đình', 'Santoki Soma, Suda Masaki, Shibasaki Ko, Aimyon, Kimura Yoshino, Kimura Takuya, Kobayashi Karou', '02:00:00', '50000', 'v7b9CboE3Pw', 1),
(84, 'poster_payoff_vcpl_9_1_.jpg', 'VẸT CÒ PHIÊU LƯU KÝ - VIÊN NGỌC BÍ ẨN (LỒNG TIẾNG)', 'Richard – chú vẹt lớn lên giữa đàn cò luôn tự tin sẽ có được vị trí dẫn đàn trở về phương Bắc. Thế nhưng, vị trí ấy lại được trao cho một chú cò khác, khiến Richard ấm ức và quyết định một mình phiêu lưu. Chú gặp một đàn chim sẻ bị giam cầm bởi chim công xấu xa Zamano và chỉ có thể được tự do nếu tìm được một viên ngọc quý. Richard cùng những người bạn sẽ tạo nên một biệt đội dũng cảm và đoàn kết để chinh phục viên ngọc.', 'Phiêu lưu,Hoạt hình,Gia đình,Thần thoại', 'Jay Myers, Kyra Jackson, Simona Berman', '01:20:00', '50000', 'Ecf1eRTbv1Q', 1),
(85, 'rsz_vn_aqamn2_vert_tsr_2764x4096_intl.jpg', 'QUAMAN VÀ VƯƠNG QUỐC THẤT LẠC', 'Đạo diễn James Wan và Jason Momoa trong vai Aquaman—cùng với Patrick Wilson, Amber Heard, Yahya Abdul-Mateen II và Nicole Kidman sẽ trở lại trong phần tiếp theo của bộ phim DC có doanh thu cao nhất mọi thời đại “Aquaman Và Vương Quốc Thất Lạc (tựa gốc: Aquaman and the Lost Kingdom)”.', 'Phiêu lưu,Hành động,Thần thoại', 'Jason Momoa, Ben Affleck, Patrick Wilson,...', '02:10:00', '50000', 'BeYGU8XoYDI', 1),
(90, '1080x1350_1.jpg', 'TIỄN VONG ', 'Sẽ ra sao khi người yếu bóng vía trở thành “hậu duệ” nghề mai táng Joed sau khi tốt nghiệp trường Luật bỗng nhận hung tin rằng người cha của anh mắc bệnh nan y cũng là lúc anh đối diện với nỗi ám ảnh kế nghiệp nghề gia truyền - thay cha trở thành một Người Trục Vong hay còn được biết đến với tên gọi là Nghề Mai Táng theo các phong tục tâm linh mà một người thường không thể mường tượng nổi. Ngoài công việc cơ bản như xử lý x.á.c ch.ết tưởng chừng quá đủ với một người có nỗi ám ảnh lớn với m*a quỷ như Joed thì chuỗi phong tục từ gọi hồn để giao tiếp với người đã khuất cho đến nghi lễ “du hành linh hồn” để triệu hồi vong hồn về cõi âm,... khiến cú sang chấn của chàng trai trẻ vượt qua cực hạn.', 'Kinh dị', 'CHATCHAI CHINNASRI , SUTIDA BUATIK , NARUEPOL YAIIM , ARCHARIYA SRITHA', '01:40:00', '50000', '', 1),
(91, '470wx700h_2_.jpg', 'XIN CHÀO JADOO (LỒNG TIẾNG)', 'Bộ phim Hello Jadoo nổi bật với cốt truyện vô cùng khác biệt, đưa nhân vật Jadoo bước đến cuộc hành trình phiêu lưu vào một thế giới cổ tích tuyệt vời thông qua cuốn sách ma thuật mà Jadoo phát hiện ra trong chuyến thăm công viên giải trí.', 'Hoạt hình', 'Yeo Min-jeong, Yang Jeong-hwa, Kim Young-eun, Jeong Yu-mi, Kim Hyeon-ji', '01:00:00', '50000', 'P2hfkkC7Q7c', 1),
(92, 'v_ng_l_p_qu_d_-_payoff_poster_-_kh_i_chi_u_t_i_r_p__15.12.2023_1_.jpg', 'VÒNG LẶP QUỶ DỮ', 'Hao sở hữu khả năng nhìn thấy quá khứ. Với khả năng này, cùng với người bạn tên Rida, Hao đã cứu được Sari, một học sinh trung học bị bắt cóc một cách bí ẩn bởi một nhân vật đáng sợ tên là \"Pocong Gundul\", một hồn ma trong truyền thuyết Indonesia. Hành động của Hao vô tình chọc giận Pocong Gundul. Kinh hoàng nối tiếp kinh hoàng đe dọa sự an toàn của anh.', 'Kinh dị', 'Deva Mahenra, Della Dartyan, Nayla D. Purnama, Iwa K', '01:35:00', '50000', '', 1),
(93, '406x600-nmt.jpg', 'NGƯỜI MẶT TRỜI ', '400 năm qua, loài Ma Cà Rồng đã bí mật sống giữa loài người trong hòa bình, nhưng hiểm họa bỗng ập đến khi một cô gái loài người phát hiện được thân phận của hai anh em Ma Cà Rồng. Người anh khát máu quyết săn lùng cô để bảo vệ bí mật giống loài, trong khi người còn lại chạy đua với thời gian để bảo vệ cô bằng mọi giá.', 'Hành động,Tâm Lý,Hồi hộp', 'Chi Pu, Thuận Nguyễn, Trần Ngọc Vàng, Trịnh Thảo', '02:00:00', '50000', 'BeyXZtrkzpQ', 1),
(94, 'khinhmietPOSTER-01.jpg', 'KHINH MIỆT (P)', 'Nhà văn kiêm biên kịch Paul Javal có cuộc sống hạnh phúc bên người vợ Camille. Nhà sản xuất nổi tiếng người Mỹ Jeremy Prokosch đề nghị anh làm việc trong bộ phim chuyển thể từ Odyssey, do Fritz Lang đạo diễn tại Cinecittà. Sau đó, cặp đôi đến hiện trường và gặp gỡ đoàn làm phim. Prokosch sớm tiến tới Camille dưới con mắt của Paul. Nỗ lực quyến rũ này sẽ cảnh báo sự kết thúc cho mối quan hệ của họ...', 'Tâm Lý', 'BRIGITTE BARDOT, MICHEL PICCOLI, JACK PALANCE', '01:35:00', '50000', '', 2),
(95, '470x700_6.jpg', 'NHÀ VỊT DI CƯ', 'Nhà Vịt Di Cư theo chân một gia đình vịt trời gồm vịt bố, vịt mẹ, cậu con trai tuổi teen Dax và vịt út Gwen, trong lần đầu tiên trải nghiệm chuyến di cư tiến về phía nam để trú đông. Thế nhưng, niềm vui vẻ sự háo hức kéo dài không bao lâu, gia đình vịt nhận ra, họ đang bay ngược chiều với tất cả các đàn vịt khác. Không kịp quay đầu, họ bất ngờ gặp phải loạt “chướng ngại vật” là những tòa nhà cao tầng của thành phố hiện đại. Liên tiếp sau đó là những thước phim đầy kịch tính nhưng vô cùng hài hước của nhà vịt trong quá trình khám phá đô thị mới.\n', 'Hoạt hình\n', 'Kumail Nanjiani, Elizabeth Banks, Caspar Jennings, Tresi Gazal, Awkwafina,…\n', '01:05:01', '50000', 'd', 2),
(96, 'quy_cau.jpg', 'QUỶ CẨU (T18)', 'Nam về quê để lo đám tang cho bố sau cái chết kinh hoàng của ông, trong khi phải che giấu bạn gái đang mang thai. Nam mơ thấy gia đình bị giết sau khi mai táng bố, và Mít – con chó trắng của gia đình có biểu hiện kì lạ. Ông Quyết, bà Thúy, và bà Liễu thì tin vào thầy cúng, còn Nam nghi ngờ về lò mổ chó truyền thống của gia đình và phải điều tra để giải quyết sự kiện kỳ lạ đang diễn ra.', 'Kinh dị', 'Quang Tuấn, NSND Kim Xuân, Vân Dung, Quốc Quân, Nam Thư, Mie….', '01:30:00', '50000', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `email` varchar(264) NOT NULL,
  `verified` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `verification_code` varchar(264) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `describepro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `img`, `name`, `describepro`) VALUES
(4, 'aquaman-va-vuong-quoc-that-lac-metiz-cinema-thumbnail.png', 'AQUAMAN VÀ VƯƠNG QUỐC THẤT LAC: VỊ VUA THẤT HẢI SẴN SÀNG KHUYNH ĐẢO RẠP CHIẾU CUỐI NĂM 2023', 'Sau 5 năm kể từ thành công vang dội của phần đầu tiên, phần hậu truyện về siêu anh hùng Aquaman chính thức ra mắt khán giả trong tháng 12/2023. Aquaman Và Vương Quốc Thất Lạc không chỉ là dự án cuối c'),
(5, 'thumbnail-phim-tee-yod-quy-an-tang.jpg', 'TEE YOD - QUỶ ĂN TẠNG: BOM TẤN KINH DỊ HẠNG NĂNG THÁI LAN CHUẨN BỊ RA RẠP', 'Tee Yod: Quỷ Ăn Tạng là phim kinh dị tâm linh hạng nặng của Thái Lan “dựa trên sự kiện có thật” xảy ra vào năm 1972 ở vùng quê hẻo lánh Kanchanaburi. Đây là món ăn tinh thần đậm vị riêng của điện ảnh '),
(6, 'phim-hoat-hinh-chieu-rap-metiz-cinema-dip-cuoi-nam.png', '3 BỘ PHIM HOẠT HÌNH CHIẾU RẠP METIZ DÀNH CHO CÁC BÉ DỊP CUỐI NĂM KHÔNG NỂN BỎ LỠ!', 'Với khán giả yêu thích hoạt hình, Jadoo là một nhân vật quen thuộc, từng một thời “khuấy đảo” màn ảnh nhỏ với nét vẽ độc đáo, đáng yêu. Bộ phim được phỏng theo bộ truyện tranh cùng tên của Lee Bin và '),
(7, 'phim-tren-ban-nhau-duoi-ban-muu_11.jpg', 'TRÊN BÀN NHẬU DƯỚI BÀN MƯU: HÀI HẾT NẤC VỚI DÀN DIỄN VIÊN SIÊU LẦY', 'Vốn nổi tiếng với sự hài hước từ trong phim đến ngoài đời, cũng như khả năng diễn xuất đa dạng đã được chứng minh qua nhiều dự án phim ảnh đình đám như: Bẫy ngọt ngào, Bóng đè... Diệu Nhi luôn mang đế'),
(8, 'thieu-nien-va-chim-diec-metiz-cinema-thumbnail.png', 'THIẾU NIÊN VÀ CHIM DIỆC: SỰ TRỞ LẠI ĐẦY MONG ĐỢI CỦA MIYAZAKI HAYAO', 'Thiếu Niên Và Chim Diệc là câu chuyện về hành trình kỳ diệu của cậu thiếu niên 14 tuổi trong một thế giới hoàn toàn mới lạ. Bộ phim lấy bối cảnh thời điểm cuối Chiến tranh Thế giới thứ 2, khi Nhật Bản'),
(9, 'T22 ngang.jpg', 'TUNG TĂNG TUỔI 22 - ĐỒNG GIÁ VÉ 45K', ''),
(10, 'mobile.jpg', 'Đặt vé xem phim trên ứng dụng Mobile Banking', ''),
(11, '4 rx.jpg', 'THỨ 2 CUỐI THÁNG ĐỒNG GIÁ VÉ 45K MUA 2 TẶNG 1 NƯỚC', ''),
(12, 'Artboard 1 copy 2rx.jpg', 'THỨ 5 HẰNG TUẦN REFILL BẮP NƯỚC', ''),
(13, 'T22 ngang.jpg', 'TUNG TĂNG TUỔI 22 - ĐỒNG GIÁ VÉ 45K', ''),
(14, 'T22 ngang.jpg', 'TUNG TĂNG TUỔI 22 - ĐỒNG GIÁ VÉ 45K', '');

-- --------------------------------------------------------

--
-- Table structure for table `thongtindatve`
--

CREATE TABLE `thongtindatve` (
  `id` int(11) NOT NULL,
  `id_timef` int(11) NOT NULL,
  `name_cus` varchar(200) NOT NULL,
  `name_film` varchar(200) NOT NULL,
  `time_film` time NOT NULL,
  `ticked` varchar(200) NOT NULL,
  `num_tickbooked` int(11) NOT NULL,
  `food` varchar(200) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `time_booked` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL COMMENT '0: chưa thanh toán\r\n1 :Đã thanh toán\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtindatve`
--

INSERT INTO `thongtindatve` (`id`, `id_timef`, `name_cus`, `name_film`, `time_film`, `ticked`, `num_tickbooked`, `food`, `total_pay`, `time_booked`, `status`) VALUES
(171, 47, 'admin', 'KẺ ĂN HỒN', '08:40:00', 'A66, A67', 2, 'Bắp :2', 220000, '2023-12-22 22:13:11', 0),
(172, 47, 'admin', 'KẺ ĂN HỒN', '08:40:00', 'A66, A67', 2, ':', 110000, '2023-12-22 22:18:28', 1),
(173, 51, 'admin', 'KẺ ĂN HỒN', '16:20:00', 'A62, A63', 2, ':', 275000, '2023-12-22 22:24:55', 0),
(174, 51, 'Bùi Duy Tín', 'KẺ ĂN HỒN', '16:20:00', 'A56, A57', 2, ':', 110000, '2023-12-22 22:26:16', 0),
(175, 54, 'Bùi Duy Tín', 'THIẾU NIÊN VÀ CHIM DIỆC ', '14:20:00', 'A74, A75', 2, ':', 110000, '2023-12-22 22:51:01', 0),
(176, 70, 'admin', 'KẺ ĂN HỒN', '19:35:00', 'A45, A46', 2, ':', 165000, '2023-12-23 02:52:03', 0),
(177, 68, 'Bùi Duy Tín', 'KẺ ĂN HỒN', '20:45:00', 'A62, A63', 2, ':', 220000, '2023-12-23 02:59:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thucan`
--

CREATE TABLE `thucan` (
  `id` int(11) NOT NULL,
  `namefood` varchar(200) NOT NULL,
  `pricefood` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thucan`
--

INSERT INTO `thucan` (`id`, `namefood`, `pricefood`) VALUES
(1, 'Bắp ', 50000),
(5, 'Nước', 10000),
(6, 'Bắp caramen', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `timefilm`
--

CREATE TABLE `timefilm` (
  `id_timef` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timefilm`
--

INSERT INTO `timefilm` (`id_timef`, `id_phim`, `date`, `time`) VALUES
(47, 77, '2023-12-23', '08:40:00'),
(48, 77, '2023-12-23', '10:05:00'),
(49, 79, '2023-12-24', '07:00:00'),
(50, 77, '2023-12-24', '08:30:00'),
(51, 77, '2023-12-24', '16:20:00'),
(52, 79, '2023-12-25', '19:00:00'),
(53, 83, '2023-12-24', '16:35:00'),
(54, 83, '2023-12-27', '14:20:00'),
(55, 84, '2023-12-29', '12:35:00'),
(56, 84, '2023-12-29', '09:30:00'),
(57, 85, '2023-12-30', '15:20:00'),
(58, 85, '2023-12-25', '16:40:00'),
(59, 85, '2023-12-25', '04:25:00'),
(60, 84, '2023-12-31', '17:20:00'),
(61, 90, '2023-12-18', '15:25:00'),
(62, 90, '2023-12-24', '08:35:00'),
(63, 90, '2024-01-01', '15:25:00'),
(64, 91, '2023-12-30', '22:00:00'),
(65, 92, '2023-12-30', '19:00:00'),
(66, 92, '2023-12-30', '17:35:00'),
(67, 92, '2023-12-11', '16:40:00'),
(68, 79, '2023-12-24', '20:45:00'),
(69, 77, '2023-12-24', '15:25:00'),
(70, 77, '2023-12-31', '19:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `repassword` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `phone`, `gmail`, `username`, `password`, `repassword`, `role`) VALUES
(59, 'admin', 123, 'abc@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', '', 1),
(60, 'Bùi Duy Tín', 389928394, 'xzc@zxc.xzc', 'sad', '202cb962ac59075b964b07152d234b70', '', 0),
(61, 'Bùi Duy Tín', 387740709, 'xzc@zxcz.zc', 'kaiz', '202cb962ac59075b964b07152d234b70', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_seats`
--
ALTER TABLE `booked_seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhsachfilm`
--
ALTER TABLE `danhsachfilm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtindatve`
--
ALTER TABLE `thongtindatve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timefilm`
--
ALTER TABLE `timefilm`
  ADD PRIMARY KEY (`id_timef`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_seats`
--
ALTER TABLE `booked_seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhsachfilm`
--
ALTER TABLE `danhsachfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thongtindatve`
--
ALTER TABLE `thongtindatve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timefilm`
--
ALTER TABLE `timefilm`
  MODIFY `id_timef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
