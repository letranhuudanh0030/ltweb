-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 05:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltweb_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `map` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `footer` text DEFAULT NULL,
  `contact` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `highlight` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `type_id`, `image`, `publish`, `highlight`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keyword`, `slug`) VALUES
(1, 'Top 4 Quán Matcha Không Thể Bỏ Qua Ở Sài Gòn', 'Vào những ngày hè nóng nực, không còn gì tuyệt vời hơn là được thưởng thức những món ăn, những ly Matcha (trà xanh) thơm ngon, tươi mát. Sau đây là tổng hợp những quán matcha ngon nhất cho mọi người thưởng thức !', '&lt;div class=&quot;lead&quot; style=&quot;margin-bottom: 10px; font-size: 18px; line-height: 1.4; color: rgb(0, 0, 0); font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;Vào những ngày hè nóng nực, không còn gì tuyệt vời hơn là được thưởng thức những món ăn, những ly Matcha (trà xanh) thơm ngon, tươi mát. Sau đây là tổng hợp những quán matcha ngon nhất cho mọi người thưởng thức !&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;1. Japanit Matcha &amp;amp; Coffee House&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;Cứ mỗi lần thèm matcha thì đa phần ai cũng sẽ nghĩ ngay đến thương hiệu Japanit, bởi quán đáp ứng được cả 3 tiêu chí: nước ngon, kem ngon và bánh ngon.&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/117954397_177739753795570_2346361893611049503_n_b8787859fa1f4328b21037f663e4a494_grande.jpg&quot; width=&quot;454&quot; height=&quot;568&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/unnamed__1__1d0a9602959f4851a800db490c0ef7ec_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;Quán nằm ngay mặt tiền tại 130 Trần Hưng Đạo Q.1 giao với Nguyễn Cư Trinh, Ngoài ra còn có một chi nhánh mới mở gần đây tại 62B Cao Thắng Q.3. Japanit có khá nhiều món ăn, đồ uống được làm từ 100% matcha thu hút đông đảo giới trẻ tìm đến thưởng thức. Nào là matcha, kem, bingsu, mè đen, bánh ngọt,...&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/unnamed__3__ef882e402b654b879399caa2297be4e8_grande.jpg&quot; width=&quot;575&quot; height=&quot;431&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/122156638_1764196580400584_2897818095212526613_o_5a87adadf6f346f8955b2c56e54ed8eb_grande.jpg&quot; width=&quot;573&quot; height=&quot;387&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/photo_9-10-20__6_58_59_pm_347b44b3c1114c31a24effb3db3ff708_grande.jpg&quot; width=&quot;572&quot; height=&quot;429&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;Các món nước matcha rất chất lượng, vị ngọt, đậm đà và dễ uống. Chưa dừng lại ở đó quán còn có các món bánh ngọt, kem mát lạnh cực kì hấp dẫn không kém. Với mức giá giao động từ 55k với size món to gần gấp đôi các nơi khác thì đây là một giá “cực kỳ sinh viên”.&lt;/p&gt;&lt;/div&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;2. MOF Japanese Sweets and Cofeee&lt;/strong&gt;&lt;/p&gt;&lt;p class=&quot; text-justify text-justify&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;MOF là mô hình nhà hàng kem café mang phong cách Nhật Bản rất được ưa chuộng tại Singapore. MOF lần đầu tiên xuất hiện tại TP.HCM vào mùa hè năm 2009, mang lại một làn gió mát cho khẩu vị của người Việt bằng rất nhiều biến tấu của trà xanh, đậu đỏ, mè đen, quýt Nhật,…vốn là những hương vị rất được ưa chuộng ở Nhật cùng nhiều nước trên thế giới, cũng như đang được rất nhiều bạn trẻ Việt Nam đón nhận và yêu thích.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/-toa-do-matcha-chuan-nhat-dinh-nhat-sai-gon-d5c18513636435062014350258_777985476d114d8cb664efde572bba5d_grande.jpg&quot; width=&quot;565&quot; height=&quot;565&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;Hương vị Matcha đậm đà, chất lượng, hình thức đẹp là lý do MOF luôn có một vị trí nhất định trong lòng các bạn trẻ yêu ẩm thực tại Sài Gòn với ngôi vị thiên đường Matcha.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;3&lt;/strong&gt;&amp;nbsp;&lt;strong style=&quot;font-weight: bold;&quot;&gt;Newdays Janpanese Matcha Coffee&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;br&gt;Là quán cà phê chuyên về matcha được khá nhiều&amp;nbsp;&lt;em&gt;dân ghiền matcha&lt;/em&gt;&amp;nbsp;đến. Tuy không gian tương đối nhỏ nhưng được bày trí khá bắt mắt với màu xanh chủ đạo cộng thêm tiếng nhạc du dương, thích hợp làm điểm thư giãn sau những giờ học và làm việc căng thẳng.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/4-quan-danh-cho-dan-ghien-matcha-o-sai-gon-10_8652372bc1e142469b871c7b0bba0b27_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;', 2, '/public/uploads/news/4-quan-matcha-khong-the-bo-qua-o-sai-gon.jpg', 1, 1, '2021-03-05 17:02:38', '2021-03-10 13:08:21', 'Top 4 Quán Matcha Không Thể Bỏ Qua Ở Sài Gòn', 'Top 4 Quán Matcha Không Thể Bỏ Qua Ở Sài Gòn', 'Top 4 Quán Matcha Không Thể Bỏ Qua Ở Sài Gòn', 'top-4-qun-matcha-khng-th-b-qua-si-gn'),
(2, 'CỰC PHẨM NAMA CHOCOLATE NGỌT NGÀO THƠM NGON', 'Socola tươi hay trong tiếng Nhật gọi là Nama chocolate không giống các loại sô cô la khác, vì rất mềm, rất dễ tan nên chỉ cần cho vào miệng là viên sô cô la sẽ tan chảy ra ngay. Sô cô la tươi không chứa chất bảo quản nên rất tốt cho sức khỏe.', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;- Socola tươi hay trong tiếng Nhật gọi là Nama chocolate không giống các loại sô cô la khác, vì rất mềm, rất dễ tan nên chỉ cần cho vào miệng là viên sô cô la sẽ tan chảy ra ngay. Sô cô la tươi không chứa chất bảo quản nên rất tốt cho sức khỏe.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/22046747_863239910512793_1582829384535190623_n_3ea8b28578a84ecfb324f07bbc7e4132_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;- Sô cô la tươi là loại sô cô la truyền thống hảo hạng của Nhật Bản. Đúng như tên gọi của nó, chỉ cần cắn một miếng là bạn sẽ có cảm giác tươi, mát và nguyên chất. Lý do thứ nhất là loại sô cô la đặc biệt này luôn phải được bảo quản trong tủ lạnh nên khi bạn ăn luôn sẽ có cảm giác mát lạnh. Ngoài ra cái tên sô cô la tươi một phần còn bởi nguyên liệu làm nên món này chủ yếu là kem tươi (fresh cream hay nama cream trong tiếng Nhật), chiếm đến 30 % đến 40%.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/35574719_371273870064857_6588403072408485888_n_5e4a4557bfb24ce8b5579739be5c76af_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;- Nama matcha luôn là món mà ad cực thích mỗi khi dùng. Dùng sáng, trưa , chiều hay tối, dùng kèm với trà nóng thì lại càng ok hơn. Vị béo béo thơm thơm của chocolate kết hợp vị đắng bột matcha cực kì phê, ngồi ăn nhâm nhi cùng crush thì tuyệt vời&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/img_6809_9c019d27ac7d47c7be4efaeba3a657a2_grande.jpg&quot; width=&quot;479&quot; height=&quot;720&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;div class=&quot;text_exposed_show&quot; style=&quot;margin-bottom: 10px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px;&quot;&gt;- Những viên chocolate thật sự đặc biệt bởi độ mềm mịn, cảm giác tươi nguyên khi cảm nhận trọn vẹn viên nama socola nguyên chất đang nhẹ nhàng tan chảy trong miệng,... Đó cũng là lý do vì sao mà bất cứ người nào thưởng thức đều sẽ....yêu đối phương nhiều hơn.&lt;/p&gt;&lt;/div&gt;', 2, '/public/uploads/news/cuc-pham-nama-chocolate-ngot-ngao-thom-ngon.jpg', 1, 1, '2021-03-05 17:13:37', '2021-03-10 13:07:17', 'CỰC PHẨM NAMA CHOCOLATE NGỌT NGÀO THƠM NGON', 'CỰC PHẨM NAMA CHOCOLATE NGỌT NGÀO THƠM NGON', 'CỰC PHẨM NAMA CHOCOLATE NGỌT NGÀO THƠM NGON', 'cc-phm-nama-chocolate-ngt-ngo-thm-ngon'),
(3, 'TOP 3 Quán Mở Xuyên Tết Nguyên Đán 2021 Ở Sài Gòn', 'Tết là dịp nhiều hàng quán đóng cửa nghỉ ngơi sau một năm kinh doanh. Chán chê vì mấy mùng đều ăn cơm nhà với trứng kho, bánh chưng, dưa muối,… muốn tìm một nơi để tụ họp, hàn thuyên cùng bạn bè . Hãy cùng mình&amp;nbsp;note lại danh sách những quán mở xuyên TẾT&amp;nbsp;để không còn nỗi lo “Tết này ăn gì?” nữa nhé!', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;Tết là dịp nhiều hàng quán đóng cửa nghỉ ngơi sau một năm kinh doanh. Chán chê vì mấy mùng đều ăn cơm nhà với trứng kho, bánh chưng, dưa muối,… muốn tìm một nơi để tụ họp, hàn thuyên cùng bạn bè . Hãy cùng mình&amp;nbsp;note lại danh sách những quán mở xuyên TẾT&amp;nbsp;để không còn nỗi lo “Tết này ăn gì?” nữa nhé!&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;1. Japanit matcha&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;Tọa lạc ngay vị trí đắc địa trung tâm sài gòn, Japanit là thiên đường ẩm thực matcha với hàng trăm&amp;nbsp;món ngon, đặc biệt chuẩn vị Nhật. Đây là địa điểm quen thuộc với các bạn trẻ yêu thích ẩm thực không chỉ chuyên về nước matcha mà Japanit còn có hẳn một set đầy đủ món từ kem, bánh ngọt, cho đến bingsu, mỳ ý,...&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px; text-align: center;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/1a8c906a-efc5-49d4-93ee-ebe8c43e6119_1c393d1c88574a55aeb3dfd8dfb15fee_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;Với châm ngôn “Phục vụ hết mình đồ ăn ngon hết ý” mỗi món ăn được làm&amp;nbsp;ở đây luôn được test kĩ từ trước khi được ra mắt để phục vụ khách hàng. Đến với Japanit&amp;nbsp;bạn sẽ không phải thất vọng về điều gì cả, từ món ăn đồ uống đến cách phục vụ.&amp;nbsp;Với những bạn đón tết ở xì gòn, thì không còn gì tuyệt vời hơn khi có chỗ vừa vui chơi thỏa thích dịp tết mà không phụ thu bất kì&amp;nbsp;phí gì.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px; text-align: center;&quot;&gt;&lt;img src=&quot;https://file.hstatic.net/1000344972/file/5ff4fd4f-3e2c-4d0e-9d0d-6c21c505bd20_37a912815926425b989535e68c8706e7_grande.jpg&quot; style=&quot;border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;&quot;&gt;&lt;/p&gt;', 2, '/public/uploads/news/top-3-quan-mo-xuyen-tet-nguyen-dan-2021-o-sai-gon.jpg', 1, 1, '2021-03-09 16:11:16', '2021-03-10 13:00:44', 'TOP 3 Quán Mở Xuyên Tết Nguyên Đán 2021 Ở Sài Gòn', 'TOP 3 Quán Mở Xuyên Tết Nguyên Đán 2021 Ở Sài Gòn', 'TOP 3 Quán Mở Xuyên Tết Nguyên Đán 2021 Ở Sài Gòn', 'top-3-qun-m-xuyn-tt-nguyn-n-2021-si-gn'),
(5, 'Giới thiệu', '&lt;h4 class=&quot;about-us__title nocaps&quot; style=&quot;font-family: Montserrat, sans-serif; margin-bottom: 24px; color: rgb(18, 18, 18); font-weight: 700; line-height: 34px; font-size: 20px;&quot;&gt;Japanit&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem; font-weight: 400;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;&quot;&gt;Matcha là cửa hàng chuyên bán các loại thức uống làm từ Nhật, đặc biệt là matcha. Ra đời nhằm mục đích đem đến cho người việt những trải nghiệm về ẩm thực của Nhật Bản.&lt;/span&gt;&lt;br&gt;&lt;/h4&gt;', '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Roboto, sans-serif;&quot;&gt;Chúng tôi tin luôn tạo ra sản phẩm trà thơm ngon phục vụ nhu cầu ngày càng cao của giới trẻ. Với sự phấn đấu không ngừng cùng với sự đam mê, chúng tôi đã hoạt động được 5 năm và sẽ tiếp tục mở rộng nhiều chi nhánh hơn vào những năm tiếp theo, tạo cho người trẻ cũng như người việt thói quen uống trà bảo vệ sức khỏe.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 1, '/public/uploads/about/about%20(1).jpg', 1, 1, '2021-03-09 17:34:14', '2021-03-10 13:26:52', 'Giới thiệu', 'Giới thiệu', 'Giới thiệu', 'gii-thiu'),
(6, 'TÌM ĐÂU NƠI UỐNG MATCHA NGON BỔ DƯỠNG NHẤT SÀI GÒN', 'Ở sài gòn có rất nhiều quán matcha, nhưng nếu nói về matcha ngon chuẩn vị Nhật thì ad rất tự hào giới thiệu Japanit với mọi người. Japanit luôn tự hào là một trong những nơi làm ra những ly matcha có chất lượng tuyệt vời nhất. Matcha tại đây được pha chế từ những nguyên vật liệu cao cấp, chất lượng tuyệt vời. Ngoài matcha thì Japanit còn có rất nhiều món ngon khác không kém như bánh crepe, bingsu, mochi,...ăn hay uống đều hết ý', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\">Ở sài gòn có rất nhiều quán matcha, nhưng nếu nói về matcha ngon chuẩn vị Nhật thì ad rất tự hào giới thiệu Japanit với mọi người. Japanit luôn tự hào là một trong những nơi làm ra những ly matcha có chất lượng tuyệt vời nhất. Matcha tại đây được pha chế từ những nguyên vật liệu cao cấp, chất lượng tuyệt vời. Ngoài matcha thì Japanit còn có rất nhiều món ngon khác không kém như bánh crepe, bingsu, mochi,...ăn hay uống đều hết ý</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/6ea5b423-1215-4c95-b274-189bc12221ff_8aa092959bfe4c44bcbfac92cf6ab9a9_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\">Đã vậy, Japanit còn thường xuyên có nhiều chương trình hấp dẫn, ưu đãi ngập tràn. Là nơi vừa có thể thưởng thức trà Nhật vừa vui chơi họp mặt thỏa thích với bạn bè, gia đình. Nếu như bạn cũng mê trà như ad thì còn chờ gì nữa mà không set một kèo bự ghé Japanit liền nè. Ad đợi Fan mình nha, đảm bảo không làm Fan thất vọng đâu nè&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/8a9641f0-2372-4596-b1e9-1a413eb7f629_ffae18e4830341f0a37c2229797408e3_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/5f6dc216-d0ce-4fb9-b038-83284bfdd6a6_6aa60e2bd25841c6a116f790c06a52c5_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/6f790134-bdb9-41a2-a485-ee55a0bc0c23_15a89762136047c790f76d923e701919_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p>', 2, '/public/uploads/news/tim-dau-noi-uong-matcha-ngon-bo-duong-nhat-sai-gon.jpg', 1, 0, '2021-03-10 13:10:17', '2021-03-10 13:10:17', 'TÌM ĐÂU NƠI UỐNG MATCHA NGON BỔ DƯỠNG NHẤT SÀI GÒN', 'TÌM ĐÂU NƠI UỐNG MATCHA NGON BỔ DƯỠNG NHẤT SÀI GÒN', 'TÌM ĐÂU NƠI UỐNG MATCHA NGON BỔ DƯỠNG NHẤT SÀI GÒN', 'tm-u-ni-ung-matcha-ngon-b-dng-nht-si-gn'),
(7, 'HOUJICHA VỊ TRÀ RANG TRỨ DANH THƠM NGON HẤP DẪN', 'Houjicha là gì?Trà hojicha hay còn gọi là trà rang Nhật Bản. Đây là loại trà truyền thống và được dùng rộng rãi trong văn hóa ẩm thực Nhật. Đặc biệt ở Kyoto vì đây là nơi làm ra những mẻ trà Houjicha đầu tiên vào những năm 1920 Giống như matcha hay genmaicha, trà rang cũng là trà xanh. Đặc điểm nổi bật của loại trà này là sau quá trình hấp lá, làm héo và sấy khô, trà được rang sâu ở nhiệt độ cao 200 độ C. Quá trình rang trà giúp loại bỏ tất cả vị đắng...', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"font-size: 28px;\">Houjicha là gì?</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\"><font color=\"#6da01d\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><u>Trà hojicha</u></span></font>&nbsp;hay còn gọi là trà rang Nhật Bản. Đây là loại trà truyền thống và được dùng rộng rãi trong văn hóa ẩm thực Nhật. Đặc biệt ở Kyoto vì đây là nơi làm ra những mẻ trà Houjicha đầu tiên vào những năm 1920</span><span style=\"font-size: 11pt;\"><br></span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Giống như matcha hay genmaicha, trà rang cũng là trà xanh. Đặc điểm nổi bật của loại trà này là sau quá trình hấp lá, làm héo và sấy khô, trà được rang sâu ở nhiệt độ cao 200 độ C. Quá trình rang trà giúp loại bỏ tất cả vị đắng và mang lại cho trà rang mùi thơm rất đặc trưng, còn nói như mình thì&nbsp;chỉ có 2 từ thôi: \"Best seller\". Các món ăn houjicha đều có vị ngon ngọt, nhẹ nhàng, thơm phức mùi trà rang, rất ngon và dễ uống, đặc biệt đối với những bạn không quen với vị đắng của matcha thì có thể uống thử Houjicha nè, bảo đảm bạn sẽ cảm thấy thích ngay.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/123848870_798167130980655_8124327668778484445_n_3349635d1f4d45b28f7256c5507ba5a4_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/123618705_795619261282817_8091809717654757664_n_fcee26aa0bbe4acfb56f60484bdde70e_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://file.hstatic.net/1000344972/file/123750461_400643727647149_3078496538646692748_n_c07617af4c084c2c94ecda5efde63391_grande.jpg\" style=\"border-width: 0px; border-color: initial; border-image: initial; max-width: 100%; margin: 0px;\"></p>', 2, '/public/uploads/news/houjicha-tra-rang-tru-danh-thom-ngon-hap-dan.jpg', 1, 0, '2021-03-10 13:11:46', '2021-03-10 13:11:46', 'HOUJICHA VỊ TRÀ RANG TRỨ DANH THƠM NGON HẤP DẪN', 'HOUJICHA VỊ TRÀ RANG TRỨ DANH THƠM NGON HẤP DẪN', 'HOUJICHA VỊ TRÀ RANG TRỨ DANH THƠM NGON HẤP DẪN', 'houjicha-v-tr-rang-tr-danh-thm-ngon-hp-dn'),
(8, 'Giới thiệu', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span class=\"wysiwyg-font-size-medium\">Chào mừng quý khách hàng đến với website chúng tôi.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span class=\"wysiwyg-font-size-medium\">Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span class=\"wysiwyg-font-size-medium\">Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</span></p>', '', 3, NULL, 1, 1, '2021-03-10 13:39:25', '2021-03-10 13:39:25', '', '', '', 'gii-thiu'),
(9, 'Hướng Dẫn Sử Dụng Website', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\">Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.</span>', '', 3, NULL, 1, 1, '2021-03-10 13:39:52', '2021-03-10 13:39:52', '', '', '', 'hng-dn-s-dng-website'),
(10, 'Thanh Toán An Toàn Và Tiện Lợi', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span class=\"wysiwyg-font-size-medium\">Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 13px;\"><span class=\"wysiwyg-font-size-medium\"><strong style=\"font-weight: bold;\"><u>Cách 1</u></strong>: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br></span><span class=\"wysiwyg-font-size-medium\"><strong style=\"font-weight: bold;\"><u>Cách 2</u></strong><strong style=\"font-weight: bold;\">:</strong>&nbsp;Thanh toán sau (COD – giao hàng và thu tiền tận nơi)</span></p>', '', 3, NULL, 1, 1, '2021-03-10 13:40:14', '2021-03-10 13:40:14', '', '', '', 'thanh-ton-an-ton-v-tin-li'),
(11, 'Matcha latte', '&lt;p&gt;Mùi thơm&amp;nbsp;đặc trưng, cuốn hút&lt;/p&gt;', '', 4, NULL, 1, 1, '2021-03-10 14:30:16', '2021-03-10 14:40:22', 'Matcha latte', 'Matcha latte', 'Matcha latte', 'matcha-latte'),
(12, 'Bánh Ngọt', 'Ngon ngọt, chất lượng', '', 4, NULL, 1, 1, '2021-03-10 14:35:17', '2021-03-10 14:35:17', 'Bánh Ngọt', 'Bánh Ngọt', 'Bánh Ngọt', 'bnh-ngt'),
(13, 'Trà trái cây', 'Ngọt thanh, tươi mát', '', 4, NULL, 1, 1, '2021-03-10 14:36:03', '2021-03-10 14:36:03', 'Trà trái cây', 'Trà trái cây', 'Trà trái cây', 'tr-tri-cy');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `name`, `publish`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keyword`, `slug`) VALUES
(1, 'About', 1, '2021-03-04 11:17:00', '2021-03-09 17:04:44', 'About', 'About', 'About', 'about'),
(2, 'News', 1, '2021-03-04 11:18:19', '2021-03-10 12:49:48', 'News', 'News', 'News', 'news'),
(3, 'Service', 1, '2021-03-04 11:24:59', '2021-03-10 13:35:43', 'Service', 'Service', 'Service', 'service'),
(4, 'Ability', 1, '2021-03-09 16:02:25', '2021-03-10 14:18:10', 'Ability', 'Ability', 'Ability', 'ability');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `discount` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `highlight` tinyint(1) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discount`, `description`, `content`, `type_id`, `publish`, `highlight`, `image`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keyword`, `slug`) VALUES
(1, 'product 1 ', '13500000', 10, '<p>product 1<br></p>', '<p>product 1<br></p>', 1, 1, 1, '/public/uploads/news/4-quan-matcha-khong-the-bo-qua-o-sai-gon.jpg', '2021-03-03 15:12:30', '2021-03-10 15:17:32', 'product 1', 'product 1', 'product 1', 'product-1'),
(3, 'product 2 ', '91500000', 5, '<p>product 3 update new<br></p>', '<p>product 3 update new<br></p>', 8, 1, 1, '/public/uploads/news/4-quan-matcha-khong-the-bo-qua-o-sai-gon.jpg', '2021-03-03 16:18:35', '2021-03-10 15:17:40', 'product 3 update new', 'product 3 update new', 'product 3 update new', 'product-2'),
(5, 'product 3 ', '91500000', 5, '<p>product 3 update new<br></p>', '<p>product 3 update new<br></p>', 2, 1, 1, '/public/uploads/news/4-quan-matcha-khong-the-bo-qua-o-sai-gon.jpg', '2021-03-03 18:26:28', '2021-03-10 15:17:44', 'product 3 update new', 'product 3 update new', 'product 3 update new', 'product-3'),
(6, 'product 4', '13500000', 10, 'product 4', 'product 4', 2, 1, 1, '/public/uploads/news/4-quan-matcha-khong-the-bo-qua-o-sai-gon.jpg', '2021-03-09 15:59:14', '2021-03-10 15:17:48', 'product 4', 'product 4', 'product 4', 'product-4');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `publish`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keyword`, `slug`) VALUES
(1, 'Matcha latte ', 1, '2021-02-27 13:11:12', '2021-03-10 14:55:37', 'Matcha latte ', 'Matcha latte ', 'Matcha latte ', ''),
(2, ' Food', 1, '2021-02-27 13:37:50', '2021-03-10 14:55:50', ' Food', ' Food', ' Food', ''),
(5, ' Topping thêm', 1, '2021-02-27 13:42:31', '2021-03-10 14:56:03', ' Topping thêm', ' Topping thêm', ' Topping thêm', ''),
(8, 'Matcha ice (nguyên chất)', 1, '2021-02-27 14:07:25', '2021-03-10 14:56:26', 'Matcha ice (nguyên chất)', 'Matcha ice (nguyên chất)', 'Matcha ice (nguyên chất)', ''),
(11, ' Bánh Kem ổ', 1, '2021-02-27 14:19:00', '2021-03-10 14:57:01', ' Bánh Kem ổ', ' Bánh Kem ổ', ' Bánh Kem ổ', ''),
(12, 'Trà trái cây', 1, '2021-02-28 09:17:53', '2021-03-10 14:57:14', 'Trà trái cây', 'Trà trái cây', 'Trà trái cây', ''),
(13, 'Hàng Siêu Thị', 1, '2021-02-28 09:19:04', '2021-03-10 14:57:54', 'Hàng Siêu Thị', 'Hàng Siêu Thị', 'Hàng Siêu Thị', ''),
(14, 'Bánh Ngọt', 1, '2021-03-01 15:50:31', '2021-03-10 14:58:08', 'Bánh Ngọt', 'Bánh Ngọt', 'Bánh Ngọt', NULL),
(15, 'Houjicha Latte', 1, '2021-03-01 15:52:39', '2021-03-10 14:58:37', 'Houjicha Latte', 'Houjicha Latte', 'Houjicha Latte', NULL),
(17, 'type 10 Black sesame (Mè đen)', 1, '2021-03-01 17:18:27', '2021-03-10 14:58:51', 'Black sesame (Mè đen)', 'Black sesame (Mè đen)', 'Black sesame (Mè đen)', 'type-10-');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `role`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'role 1', 1, 1, '2021-03-06 06:17:37', '2021-03-09 15:40:26'),
(2, 'role 2', 1, 1, '2021-03-06 06:26:44', '2021-03-09 15:40:28'),
(3, 'role 3', 0, 1, '2021-03-09 15:23:13', '2021-03-09 15:48:14'),
(4, 'role 4', 0, 1, '2021-03-09 15:23:17', '2021-03-09 15:48:12'),
(5, 'role 10', 1, 1, '2021-03-11 12:06:23', '2021-03-11 12:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `description`, `sort_order`, `image`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Matcha latte', 'Thơm ngon, Cuốn hút, Mê ly', 0, '/public/uploads/slide/slide_1.jpg', 1, '2021-03-06 17:32:01', '2021-03-10 16:56:42'),
(2, 'Bánh Ngọt', 'Mềm mại, Ngọt ngào,&nbsp;Đẹp mắt', 0, '/public/uploads/slide/slide_2.jpg', 1, '2021-03-07 07:04:23', '2021-03-10 16:59:00'),
(3, 'Trà trái cây', 'Thanh mát, Nhẹ nhàng, Khỏe mạnh', 0, '/public/uploads/slide/slide_3.jpg', 1, '2021-03-09 11:49:22', '2021-03-10 16:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `password` text NOT NULL,
  `publish` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `publish`, `created_at`, `updated_at`, `role_id`) VALUES
(3, 'Le Danh', 'admin@gmail.com', '0966461761', '$2y$10$91nHAGPyQaKIEKZxh3tzIuQ3k9LoISQf2HNZVwem0hu/ylPCLaClG', 1, '2021-03-07 07:41:38', '2021-03-09 15:49:17', 1),
(4, 'Le Danh', 'letranhuudanh0030@gmail.com', '0966461761', '$2y$10$fd8remX6ztHRM7RreXJCwuGiHZmAmac/bQFudt8uTmhG.yLWROWAy', 1, '2021-03-09 15:47:10', '2021-03-09 15:49:16', 4),
(5, 'Le Danh', 'letranhuudanh0030test@gmail.com', '0966461761', '$2y$10$1JV2uTraytYfbsEr676boecCIi2h/k7TgnagpLM92jbFiFyY0fZAC', 1, '2021-03-11 12:06:59', '2021-03-11 12:06:59', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
