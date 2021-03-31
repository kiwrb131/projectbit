-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 02:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitbpc-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`ID`, `Name`, `Password`, `Status`) VALUES
(1, 'a', '1', 'admin'),
(2, 'ืtest', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbatvite`
--

CREATE TABLE `tbatvite` (
  `ID` int(5) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Atvite_1` varchar(50) NOT NULL,
  `Atvite_2` varchar(50) NOT NULL,
  `Atvite_3` varchar(50) NOT NULL,
  `Atvite_4` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbatvite`
--

INSERT INTO `tbatvite` (`ID`, `Title`, `Text`, `Date`, `Atvite_1`, `Atvite_2`, `Atvite_3`, `Atvite_4`, `Status`) VALUES
(1, 'การพัฒนาโปรแกรมด้วยภาษาจาวา', '<p><strong>การพัฒนาโปรแกรมด้วยภาษาจาวา</strong></p>\r\n\r\n<p>กิจกรรมการแข่งขันการพัฒนาโปรแกรมด้วยภาษาจาวาในโครงการแข่งขันทักษะวิชาการ&nbsp;<br />\r\nวันที่ 14 ธันวาคม 2561 ณ ห้องปฏิบัติคอม 5 ชั้น 4 อาคาร 100 ปี โดยสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</p>\r\n', '2562-12-14', 'JAVA1.jpg', 'JAVA2.jpg', 'JAVA3.jpg', 'JAVA4.jpg', 1),
(2, 'โครงการเพิ่มพูนความรู้ทางวิชาการสาขาเทคโนโลยีสารสนเทศทางธุรกิจ', '<p><strong>โครงการเพิ่มพูนความรู้ทางวิชาการสาขาเทคโนโลยีสารสนเทศทางธุรกิจ</strong></p>\r\n\r\n<p>ระหว่างวันที่ 13-14 มิถุนายน 2562 คณะบริหารธุรกิจ มทร.รัตนโกสินทร์ พื้นที่บพิตรพิมุข จักรวรรดิ โดยสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจได้จัดโครงการเพิ่มพูนความรู้ทางวิชาการสำหรับนักศึกษาใหม่ ประจำปีการศึกษา 2562 เพื่อเพิ่มพูน ความรู้ความเข้าใจ และสามารถนำความรู้ที่ได้ไปใช้ในการเรียนต่อไป ณ ห้องคอม 6 ชั้น 4 อาคาร 100 ปี</p>\r\n', '2563-03-14', 'p2.jpg', 'p1.jpg', 'p3.jpg', 'p4.jpg', 1),
(3, 'โครงการถวายเทียนจำนำพรรษาและเวียนเทียนฟังธรรมวันอาสาฬหบูชา', '<p><strong>โครงการถวายเทียนจำนำพรรษาและเวียนเทียนฟังธรรมวันอาสาฬหบูชา</strong></p>\r\n\r\n<p>ในวันพุธที่ 1 กรกฎาคม 2563 คณะบริหารธุรกิจ บพิตรพิมุข จักรวรรดิ นำโดย ผศ.ประนอม ตั้งปรีชาพาณิชย์ คณบดีคณะบริหารธุรกิจ พร้อมด้วยผู้บริหาร คณาจารย์ เจ้าหน้าที่ และนักศึกษา ได้เข้าร่วมโครงการถวายเทียนจำนำพรรษาและเวียนเทียนฟังธรรมวันอาสาฬหบูชา โดยมี ผศ.รุจีพัชร์ พาสุกรี รองอธิการบดี เป็นผู้นำในการเข้าร่วมโครงการดังกล่าว ณ วัดบพิตรพิมุขวรวิหาร</p>\r\n', '2563-07-01', 't3.jpg', 't1.jpg', 't2.jpg', 't4.jpg', 1),
(4, 'NECTEC-ACE ฐานรากเทคโนโลยีก้าวไกล พัฒนาไทยก้าวหน้า', '<p><strong>NECTEC-ACE ฐานรากเทคโนโลยีก้าวไกล พัฒนาไทยก้าวหน้า</strong></p>\r\n\r\n<p>ในวันจันทร์ที่ 9 กันยายน คณะบริหารธุรกิจ บพิตรพิมุข จักรวรรดิ มทร.รัตนโกสินทร์ โดยสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ นำโดยอาจารย์ ดร.มนต์รวี ทองเสน่ห์ อาจารย์พีรศุษม์ ทองพ่วง อาจารย์ธัญชนก นิลมณี และอาจารย์วิลาวัณย์ วิเศษวัชร์ ได้นำนักศึกษาเข้าร่วมศึกษาดูงาน &quot;NECTEC-ACE 2019&quot; &quot;ฐานรากเทคโนโลยีก้าวไกล พัฒนาไทยก้าวหน้า&quot; ซึ่งเป็นเวทีนำเสนอผลงานวิจัยพัฒนาที่มีการนำไปใช้ในภาคส่วนต่างๆ รวมทั้งการแลกเปลี่ยนความรู้ ประสบการณ์และความคิดเห็นระหว่างนักวิจัยที่มีชื่อเสียงระดับชาติและนานาชาติ รวมถึงนักวิชาการในภาครัฐและผู้ทรงคุณวุฒิจากภาคเอกชน เพื่อเป็นการส่งเสริมให้ผลงานและเทคโนโลยีก้าวไปสู่การใช้ประโยชน์ในการพัฒนาและยกระดับเศรษฐกิจและสังคมของประเทศ ณ โรงแรมเซ็นทารา แกรนด์ แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพมหานคร</p>\r\n', '2563-09-09', 'n1.jpg', 'n3.jpg', 'n2.jpg', 'n4.jpg', 1),
(5, 'สานสัมพันธ์สาขาเทคโนโลยีสารสนเทศ', '<p><strong>สานสัมพันธ์สาขาเทคโนโลยีสารสนเทศ</strong></p>\r\n\r\n<p>กิจกรรมสานสัมพันธ์ของสาขาเทคโนโลยีสารสนเทศ ระหว่างสาขาการจัดการเเทคโนโลยีสารสนเทศเเละการพัฒนาเทคโนโลยีสารสนเทศ ผู้ที่เข้าร่วมกิจกรรม ได้เเก่</p>\r\n\r\n<p>อาจารย์ผู้ดูเเล ที่คอยสนับสนุนอุปกรณ์เละการเฝ้าระวัง&nbsp;</p>\r\n\r\n<p>นักศึกษารุ่นพี่ ที่คอบจัดเตรียมกิจกรรม อุปกรณ์ เเละสถานที่ เพื่อรองรับนักศึกษาใหม่</p>\r\n\r\n<p>นักศึกษาใหม่ ที่มาเข้าร่วมกิจกรรมที่จัดด้วยความเต็มใจเเละความสนุกสนาน</p>\r\n\r\n<p>นักศึกษาใหม่(รุ่นเทียบโอน) ที่บางท่านมีอายุเเล้วเเต่ยังมาเข้าร่วมกิจกกรมกับน้องๆ&nbsp;</p>\r\n\r\n<p>เราขอขอบคุณจากใจ เเละขอยินดีต้อนรับเข้าสู่สาขเทคโนโลยีสารสนเทศทางธุรกิจ มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินท์ บพิตรพิมุข จักวรรดิ</p>\r\n', '2563-09-15', 'รับน้อง1.jpg', 'รับน้อง2.jpg', 'รับน้อง3.jpg', 'รับน้อง4.jpg', 1),
(6, 'นักศึกษาสารสนเทศรวมใจกันแสดงความกตัญญูกตเวที', '<p><strong>นักศึกษาสารสนเทศรวมใจกันแสดงความกตัญญูกตเวที</strong></p>\r\n\r\n<p>นักศึกษาสารสนเทศรวมใจกันแสดงความกตัญญูกตเวที น้อมบูชาอำลาอาจารย์ชูศรี เกษียณอายุราชการ&nbsp;<br />\r\nนักศึกษสารสนเทศรุ่น 15 (ปี 4) จนมาถึง รุ่น 18 น้องใหม่รุ่นล่าสุดปี 1 ทุกชั้นปีที่ยังเรียนอยู่นี้รวมใจกันมาแสดงความกตัญญูกตเวที น้อมบูชาอำลาอาจารย์ชูศรี เกษียณอายุราชการ&nbsp;</p>\r\n', '2563-09-21', 'c2.jpg', 'c1.jpg', 'c3.jpg', 'c4.jpg', 1),
(7, 'กิจกรรม AUCC ประจำปี 2020', '<p><strong>กิจกรรม AUCC ประจำปี 2020</strong></p>\r\n\r\n<p>อาจารย์เเละนักศึกษาร่วมกันเดินทางไปมหาวิทยาลัยสวนดุสิต ในงานกิจกรรม AUCC ประจำปี 2020</p>\r\n', '2563-09-23', '19-2-63-2.jpg', '19-2-63-1.jpg', 'au3.jpg', 'au4.jpg', 1),
(8, 'พิธีไหว้ครูและบายศรีสู่ขวัญประจำปีการศึกษา 2563', '<p><strong>พิธีไหว้ครูและบายศรีสู่ขวัญประจำปีการศึกษา 2563</strong></p>\r\n\r\n<p>ในวันพฤหัสบดีที่ 1 ตุลาคม 2563 คณะบริหารธุรกิจ บพิตรพิมุข จักรวรรดิ นำโดยผู้ช่วยศาสตราจารย์ประนอม ตั้งปรีชาพาณิชย์ คณบดีคณะบริหารธุรกิจ พร้อมด้วยผู้บริหาร คณาจารย์ เจ้าหน้าที่ และนักศึกษาชั้นปีที่ 1 ได้เข้าร่วมพิธีไหว้ครูและบายศรีสู่ขวัญนักศึกษาใหม่ ประจำปีการศึกษา 2563 ซึ่งได้รับเกียรติจากผู้ช่วยศาสตราจารย์รุจีพัชร์ พาสุกรี รองอธิการบดี เป็นประธานในพิธีเปิด พร้อมมอบประกาศนียบัตรและทุนการศึกษาแก่นักศึกษาที่เรียนดีและสร้างชื่อเสียงให้กับมหาวิทยาลัย ณ โรงยิมเนเซียม ชั้น 7 อาคาร 115 ปี มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ พื้นที่บพิตรพิมุข จักรวรรดิ</p>\r\n\r\n<p>เเละทางสาขาเทคโนโลยีเองก็มีการจัดพิธีไหว้คูประจำสาขาที่ชั้น 5 ณ ห้อง ประชุม โดยเป็นการร่วมใจกันของนักศึกษาในสาขา ตั้งเเต่ ปี 1 - 4 มีการพูดกล่าวขอบคุณ ความในใจที่อยากบอก ผูกข้อมือ&nbsp;</p>\r\n', '2563-10-23', 'b2.jpg', 'b3.jpg', 'b1.jpg', 'b4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbawar`
--

CREATE TABLE `tbawar` (
  `ID` int(5) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Awar_1` varchar(50) NOT NULL,
  `Awar_2` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbawar`
--

INSERT INTO `tbawar` (`ID`, `Title`, `Text`, `Date`, `Awar_1`, `Awar_2`, `Status`) VALUES
(1, 'ประกาศผลการประกวดสื่อมัลติมีเดียประชาสัมพันธ์คณะบริหารธุรกิจ', '<p><strong>ประกาศผลการประกวดสื่อมัลติมีเดียประชาสัมพันธ์คณะบริหารธุรกิจ</strong></p>\r\n\r\n<p>รางวัลชนะเลิศ ทีม Seems lilte good คณะบริหารธุรกิจ พื้นที่บพิตรพิมุข จักรวรรดิ<br />\r\n1.นายธนวัฒน์ ผดุงวิทย์<br />\r\n2.นายนนทกานต์ ธีรรัตนวงศ์<br />\r\n3.นางสาวสุทธิดา ขวัญส่ง</p>\r\n\r\n<p>รางวัลรองชนะเลิศอันดับที่ 1 ทีมตัวท็อป คณะบริหารธุรกิจ พื้นที่ศาลายา<br />\r\n1. นายเกม มุธิตา<br />\r\n2. นายณภัทร อุดมผล<br />\r\n3. นางสาวพัชรศธร คุ่ยจาด</p>\r\n\r\n<p>รางวัลรองชนะเลิศอันดับที่ 2 ทีมใครปิดไฟ คณะบริหารธุรกิจ พื้นที่ศาลายา<br />\r\n1. นายนนทวิทย์ แก้วนุช<br />\r\n2. นายพงศธร ถินน้อย<br />\r\n3. นายตะวัน จือเกร็ด</p>\r\n\r\n<p>รางวัลชมเชย ทีม Prism คณะบริหารธุรกิจ พื้นที่บพิตรพิมุข จักรวรรดิ<br />\r\n1. นางสาวฐิตินันท์ นามานุศาสตร์<br />\r\n2. นางสาวณัฐสุดา โฉมที<br />\r\n3. นายณัฐวุฒิ จิตภิญโญพงศ์</p>\r\n\r\n<p>รางวัลชมเชย ทีม Kabigon studio คณะบริหารธุรกิจ พื้นที่ศาลายา<br />\r\n1. นายจีรพัฒน์ ขาวสำอาง<br />\r\n2. นายปรมัตถ์ สมปาง<br />\r\n3. นายณัฐพงษ์ เรืองรังษี</p>\r\n', '2563-02-05', '1.jpg', '2.jpg', 1),
(2, 'การนำเสนอผลงานวิจัย ในงาน AUCC2020 ที่มหาวิทยาลัยสวนดุสิต', '<p><strong>การนำเสนอผลงานวิจัย ในงาน AUCC2020 ที่มหาวิทยาลัยสวนดุสิต ผลเป็นดังนี้</strong></p>\r\n\r\n<p>1. การใช้ TDD ในการพัฒนาระบบการลาออนไลน์<br />\r\nนางสาวสุดารัตน์ สอนใจ<br />\r\nผล : Very Good<br />\r\n2. ระบบจัดการบัญชีออนไลน์เพื่อธุรกิจวิสาหกิจขนาดกลางและขนาดย่อม<br />\r\nนายอดิศักดิ์ กนกสิงห์<br />\r\nผล : Good<br />\r\n3. Online Ticket and Tour Package Distribution Assistance System<br />\r\nนางสาวเกศกมล พรนิคม<br />\r\nผล : Good<br />\r\n4. Development of Digital Art Community Website by Responsive Web Design<br />\r\nนายกันตภณ บุญเจียม<br />\r\nผล : Good<br />\r\n5. การพัฒนาระบบการให้บริการเบิก &ndash; จ่ายวัสดุของสำนักงานทรัพย์สินส่วนพระมหากษัตริย์<br />\r\nนายธนวัฒน์ ผดุงวิทย์<br />\r\nผล : Good</p>\r\n', '2563-02-19', '19-2-63-1.jpg', '19-2-63-2.jpg', 1),
(3, 'Thailand e-Commerce Week 2019', '<p><strong>กลับมาอีกครั้งกับ Thailand e-Commerce Week 2019 ภายใต้ธีม &quot;e-Commerce in the Park&quot; show, share, challenge &amp; shop รวมพลัง Young Talent เพื่อ SMEs Go Online</strong></p>\r\n\r\n<p>Thailand e-Commerce Week 2019&nbsp;<br />\r\nภายใต้ธีม &quot;e-Commerce in the Park&quot;<br />\r\n<br />\r\nshow, share, challenge &amp; shop<br />\r\nรวมพลัง Young Talent เพื่อ SMEs Go Online<br />\r\n<br />\r\nกลับมาอีกครั้งกับ Thailand e-Commerce Week 2019&nbsp;<br />\r\nโดย&nbsp;<a href=\"https://www.facebook.com/ETDA.Thailand/\" target=\"_blank\">ETDA Thailand</a>&nbsp;- สำนักงานพัฒนาธุรกรรมทางอิเล็กทรอนิกส์ (องค์การมหาชน) กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม<br />\r\n<br />\r\nSHOW&nbsp;<br />\r\n&bull; จำลองทุกฟังก์ชันของ e-Commerce Park ศูนย์กลางส่งเสริมอีคอมเมิร์ซไทย มาให้ทดลองใช้งานจริง<br />\r\n&bull; Showcase ธุรกิจระดับท็อปลิสต์ในวงจรอีคอมเมิร์ซไทย ให้ปรึกษาธุรกิจ<br />\r\n<br />\r\nSHARE<br />\r\n&bull; ฟังผู้กำหนดนโยบาย กูรูอีคอมเมิร์ซ และคนรุ่นใหม่ จะร่วมกันพัฒนาอีคอมเมิร์ซไทยอย่างไร<br />\r\n&bull; แถลงตัวเลขสำคัญ พร้อมเปิดผลรางวัลอีคอมเมิร์ซขวัญใจคนไทย e-COMMERCE PEOPLE&rsquo;S CHOICE AWARDS 2019<br />\r\n<br />\r\nCHALLENGE<br />\r\n&bull; 3 ความท้าทาย ให้นิสิต-นักศึกษาวัดฝีมือ รวมทีมกันมาแข่ง แต่งเพลง-ทำคลิป-pitch แผนธุรกิจ<br />\r\n<br />\r\nSHOP<br />\r\n&bull; รวมร้านออนไลน์ชื่อดัง ให้ชอป ให้ชิม ให้ชิลล์<br />\r\n&bull; ชอปงานที่คุณสนใจ กับตลาด JOB MATCHING ทั้งด้านอีคอมเมิร์ซ ดิจิทัล และไอที<br />\r\n<br />\r\nThailand e-Commerce Week 2019&nbsp;<br />\r\n31 ม.ค.-2 ก.พ. 62 ที่ มศว.<br />\r\n<br />\r\nติดตามรายละเอียดมากกว่านี้ เร็ว ๆ นี้ได้ที่<br />\r\n<a href=\"https://www.etda.or.th/ecommerceweek2019/index.html?fbclid=IwAR2BJq7MHwtHeFct2oR8hpIEB2EA0NuWnXmGTU0o90ibq46mFQiCSDWMZPw\" target=\"_blank\">https://www.etda.or.th/ecommerceweek2019/index.html</a><br />\r\n<br />\r\n<a href=\"https://www.facebook.com/hashtag/%E0%B9%80%E0%B8%AD%E0%B9%87%E0%B8%95%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B9%80%E0%B8%AA%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%AD%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%8B%E0%B9%84%E0%B8%97%E0%B8%A2\" target=\"_blank\">#เอ็ตด้าส่งเสริมอีคอมเมิร์ซไทย</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/thailandecommerceweek2019\" target=\"_blank\">#ThailandeCommerceWeek2019</a><a href=\"https://www.facebook.com/hashtag/etdathailand\" target=\"_blank\">#ETDATHAILAND</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/etdathailand\" target=\"_blank\"><img alt=\"\" src=\"https://lh3.googleusercontent.com/proxy/t7MofJCvwCcrTbUMTATmKbfMDS5D3mdemsuHgszUrXrlab7rTyG8Z7ZDrTeK-U2hCQMiVEUIgT1CxISvevUN4teR7AFi06s5i9DdPFg7F4ToOiCcpE--VIgfjxRm3iOTg3LVxm1FTDcoN3wmTg\" style=\"height:512px; width:362px\" /></a><br />\r\n&nbsp;</p>\r\n', '2562-01-31', 'pk4.jpg', 'pk3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbcon`
--

CREATE TABLE `tbcon` (
  `ID` int(5) NOT NULL,
  `Addres` varchar(200) NOT NULL,
  `Phone` text NOT NULL,
  `Li` text NOT NULL,
  `Facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcon`
--

INSERT INTO `tbcon` (`ID`, `Addres`, `Phone`, `Li`, `Facebook`) VALUES
(1, '264 ถนน จักรวรรดิ แขวง จักรวรรดิ์ เขตสัมพันธวงศ์ กรุงเทพมหานคร 10100', '02-222-2814', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'asdasd', '0', 'asdas', 'asdasd'),
(3, 'sedasdsdw', '452346456', 'asdawdsd', 'sfsdas');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `ID` int(5) NOT NULL,
  `tex` text NOT NULL,
  `ne` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`ID`, `tex`, `ne`) VALUES
(1, '100', 'ถุงสูญญากาศ ขนาด 1 กก. '),
(7, 'asdas', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbcouse`
--

CREATE TABLE `tbcouse` (
  `Year` int(5) NOT NULL,
  `nameTH` varchar(100) NOT NULL,
  `nameENG` varchar(100) NOT NULL,
  `Namefullth` varchar(100) NOT NULL,
  `Nameshotth` varchar(100) NOT NULL,
  `Namefulleng` varchar(100) NOT NULL,
  `Nameshoteng` varchar(100) NOT NULL,
  `Subject1` varchar(100) NOT NULL,
  `Subject2` varchar(100) NOT NULL,
  `Subject3` varchar(100) NOT NULL,
  `Credit` varchar(5) NOT NULL,
  `Qualifications` text NOT NULL,
  `Course1` varchar(100) NOT NULL,
  `Course2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcouse`
--

INSERT INTO `tbcouse` (`Year`, `nameTH`, `nameENG`, `Namefullth`, `Nameshotth`, `Namefulleng`, `Nameshoteng`, `Subject1`, `Subject2`, `Subject3`, `Credit`, `Qualifications`, `Course1`, `Course2`) VALUES
(2561, 'บริหารธุรกิจบัณฑิต (เทคโนโลยีสารสนเทศทางธุรกิจ)', 'Bachelor of Business Administration Program in Business Information Technology', 'บริหารธุรกิจบัณฑิต (เทคโนโลยีสารสนเทศทางธุรกิจ)', ' บธ.บ. (เทคโนโลยีสารสนเทศทางธุรกิจ)', 'B.B.A. (Business Information Technology)', 'B.B.A. (Business Information Technology)', 'การพัฒนาซอฟต์แวร์', 'การจัดการเทคโนโลยีสารสนเทศ', 'เทคโนโลยีมัลติมีเดีย', '138', '- เป็นผู้สำเร็จการศึกษาไม่ต่ำกว่ามัธยมศึกษาตอนปลาย (ม.6) หรือ \r\n   ระดับประกาศนียบัตรวิชาชีพ (ปวช.) ตามหลักสูตรกระทรวง \r\n   ศึกษาธิการ หรือเทียบเท่าจากสถานศึกษาที่กระทรวงศึกษาธิการ \r\n   รับรอง\r\n- เป็นผู้สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) ตาม \r\n   หลักสูตรกระทรวงศึกษาธิการ หรือเทียบเท่า จากสถานศึกษาที่ \r\n   กระทรวงศึกษาธิการรับรอง \r\n- เป็นผู้ผ่านการคัดเลือกตามเกณฑ์ของสำนักงานคณะกรรมการการ \r\n   อุดมศึกษา และ/หรือ เป็นไปตามระเบียบการคัดเลือกเพื่อศึกษาต่อ \r\n   ระดับปริญญาตรีของมหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ \r\n- เป็นผู้มีคุณสมบัติอื่นตามที่มหาวิทยาลัยเทคโนโลยีราชมงคล \r\n   รัตนโกสินทร์กำหนด\r\n', 'หลักสูตรระดับปริญญาตรี 4 ปี', 'หลักสูตรระดับปริญญาตรี 4 ปี เทียบโอนรายวิชา');

-- --------------------------------------------------------

--
-- Table structure for table `tbimg`
--

CREATE TABLE `tbimg` (
  `ID` int(5) NOT NULL,
  `Environmentimg1` varchar(50) NOT NULL,
  `Environmentimg2` varchar(50) NOT NULL,
  `Environmentimg3` varchar(50) NOT NULL,
  `Environmentimg4` varchar(50) NOT NULL,
  `Environmentimg5` varchar(50) NOT NULL,
  `Environmentimg6` varchar(50) NOT NULL,
  `Environmentimg7` varchar(50) NOT NULL,
  `Environmentimg8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbimg`
--

INSERT INTO `tbimg` (`ID`, `Environmentimg1`, `Environmentimg2`, `Environmentimg3`, `Environmentimg4`, `Environmentimg5`, `Environmentimg6`, `Environmentimg7`, `Environmentimg8`) VALUES
(18, '1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbmajor`
--

CREATE TABLE `tbmajor` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Text` text COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbmajor`
--

INSERT INTO `tbmajor` (`ID`, `Name`, `Text`, `Status`) VALUES
(1, 'ไทย', '<p>กฤฆฏฟกฤฏฟก</p>\r\n', 1),
(2, 'ผกดปกอ', '<p>sdASfSfSf</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbnews`
--

CREATE TABLE `tbnews` (
  `ID` int(5) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Newimg` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbnews`
--

INSERT INTO `tbnews` (`ID`, `Title`, `Text`, `Date`, `Newimg`, `Status`) VALUES
(1, 'ประชุมสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ คณะบริหารธุรกิจ', '<p><strong>ประชุมสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ คณะบริหารธุรกิจ</strong></p>\r\n\r\n<p>ในวันพุธที่ 27 พฤษภาคม 2563 คณะบริหารธุรกิจ มทร.รัตนโกสินทร์ ได้จัดประชุมร่วมกับสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ พื้นที่บพิตรพิมุข จักรวรรดิ โดยมี ผศ.ประนอม ตั้งปรีชาพาณิชย์ คณบดีคณะบริหารธุรกิจ เป็นประธานในการประชุม ทั้งนี้เพื่อการแจ้งข้อมูลข่าวสาร นโยบาย แนวปฏิบัติ รวมถึงการรับฟังข้อคิดเห็นต่าง ๆ และร่วมกันพิจารณาแนวทางการดำเนินงาน ภายในคณะ ให้มีประสิทธิภาพมากยิ่งขึ้น สอดคล้องกับสภาพแวดล้อมที่มีการเปลี่ยนแปลงไป ผ่านระบบอิเล็กทรอนิกส์ (ZOOM)</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/photos/a.2726114004283352/2726114080950011\">เอกสารเพิ่มเติม</a></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/99158869_2726114084283344_6212828175446048768_o.jpg?_nc_cat=103&amp;ccb=2&amp;_nc_sid=cdbe9c&amp;_nc_eui2=AeH-DoKkXHm8BrnLB9n3MzNmJwka-c4KxwonCRr5zgrHCt2ca45XgZvilh6RZKFlwAEUAQSz4r2ESfEbLZIrywN9&amp;_nc_ohc=0s9P8VmL2gMAX_3uVFp&amp;_nc_oc=AQmIvkEJFth1Whk0kk8BlEa330ELbwFP1NAs8QU8EXv_-CwbghZHEFLXInk4We3MP1j9Td31rzS2JWQwSw3_U1zL&amp;_nc_ht=scontent.fbkk5-4.fna&amp;oh=7e91f4a9f4888d9ee4f2caf864d7de10&amp;oe=60460643\" style=\"height:848px; width:600px\" /></p>\r\n', '2563-05-27', '27-5-63-2.jpg', 1),
(2, 'ขอเชิญนักศึกษาเข้าร่วมการแข่งขันกีฬา Freshy E-sport (ROV)', '<p><strong>เข้าร่วมการแข่งขันกีฬา Freshy E-sport (ROV)</strong></p>\r\n\r\n<p>ขอเชิญนักศึกษาชั้นปีที่ 1 คณะบริหารธุรกิจ<br />\r\nเข้าร่วมการแข่งขันกีฬา Freshy E-sport (ROV)<br />\r\n????คุณสมบัติของผู้เข้าร่วมสมัคร&nbsp;<br />\r\n-ผู้ลงแข่งจะต้องเป็นนักศึกษาชั้นปีที่ 1 คณะบริหารธุรกิจ พื้นที่บพิตรพิมุขจักรวรรดิ (สามารถคละสาขาวิชาได้)<br />\r\n????????รับสมัครเป็นทีม ทีมละ 5 คน????????<br />\r\n(กรณีไม่มีทีม สามารถมาสมัครเพื่อให้คณะจัดทีมให้ภายหลังได้)<br />\r\n????แข่งขันรอบคัดเลือก ระดับคณะ<br />\r\nรางวัลที่ 1 2,000 บาท<br />\r\nรางวัลที่ 2 1,500 บาท<br />\r\nรางวัลที่ 3 1,000 บาท<br />\r\n????แข่งขันรอบชิงชนะเลิศระดับมหาวิทยาลัย&nbsp;<br />\r\nวันเสาร์ที่ 22-23 สิงหาคม 2563 เวลา 11.00 น.<br />\r\nรางวัลที่ 1 8,000 บาท<br />\r\nรางวัลที่ 2 5,000 บาท<br />\r\nรางวัลที่ 3 3,000 บาท<br />\r\nรางวัลที่ 4 1,500 บาท<br />\r\n????รับสมัครตั้งแต่วันนี้ถึง 14 สิงหาคม 2563&nbsp;<br />\r\n????สามารถสมัครได้ที่ https://docs.google.com/.../1FAIpQLSfkXXHF60i.../viewform...<br />\r\nหรือ คณะบริหารธุรกิจ ชั้น 3 อาคาร 115 ปี พื้นที่บพิตรพิมุข จักรวรรดิ<br />\r\n????ประกาศรายชื่อผู้สมัครในวันที่ 18 สิงหาคม 2563 เวลา 10.00 น. ทาง Facebook คณะบริหารธุรกิจ บพิตรพิมุข จักรวรรดิ มทร.รัตนโกสินทร์</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2900502890177795\">เอกสารเพิ่มเติม</a></p>\r\n', '2563-08-05', '5-8-63.jpg', 1),
(3, 'กำหนดการจัดโครงการสัมมนาและการแข่งขันทักษะทางวิชาการ', '<p><strong>กำหนดการจัดโครงการสัมมนาและการแข่งขันทักษะทางวิชาการ</strong></p>\r\n\r\n<p>กิจกรรมที่จะจัดขึ้นมาดังต่อไปนี้<br />\r\nกิจกรรมที่ 1 การประกวดเขียนแผนธุรกิจ<br />\r\nกิจกรรมที่ 2 การตอบคำถามด้านบริหารธุรกิจ ระดับปริญญาตรี<br />\r\nกิจกรรมที่ 3 การผลิตสื่อ<br />\r\nกิจกรรมที่ 4 การแสดงนิทรรศการผลงานของคณาจารย์และนักศึกษา<br />\r\nกิจกรรมที่ 5 การประกวดผลงานบัณฑิตนักปฏิบัติ (ทักษะภาษาอังกฤษเพื่อการสื่อสารธุรกิจ)<br />\r\nกิจกรรมที่ 6 การประกวดแนวปฏิบัติที่ดีของนักศึกษา (The Best Practice)<br />\r\nกิจกรรมที่ 7 การประกวดแนวปฏิบัติที่ดีของอาจารย์ ในการจัดการเรียนการสอนสู่ความเป็นเลิศ<br />\r\nกิจกรรมที่ 8 การแข่งขันด้าน E-sports ประเภท E-sports เกม RoV (Arena of Valor)<br />\r\nกิจกรรมที่ 9 Greenbiz Star Challenge : Online Sales Live Competition</p>\r\n\r\n<p><a href=\"https://www.facebook.com/rmut99greenbiz/\">ติดตามกิจกรรมเพิ่มเติมได้ที่นี่</a></p>\r\n', '2563-10-15', '15-10-2563.jpg', 1),
(4, 'ประชาสัมพันธ์เพื่อทราบ  ถึงนักศึกษาเเละบุคลากรทุกท่าน', '<p><strong>ประชาสัมพันธ์เพื่อทราบ &nbsp;ถึงนักศึกษาเเละบุคลากรทุกท่าน</strong></p>\r\n\r\n<p>ประชาสัมพันธ์เพื่อทราบ...มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ พื้นที่ศาลายา จังหวัดนครปฐม , พื้นที่บพิตรพิมุข จักรวรรดิ และ วิทยาลัยเพาะช่าง ประกาศ ปิดมหาวิทยาลัยฯ เป็นการชั่วคราว เนื่องจากสถานการณ์การแพร่ระบาดของเชื้อไวรัส COVID-19 มหาวิทยาลัยฯ ได้จัดการเรียนการสอนสำหรับนักศึกษาแบบออนไลน์ 100% บุคลากรในหน่วยงานให้ Work from Home ตั้งแต่ 4 มกราคม 2564 จนถึงวันที่ 17 มกราคม 2564</p>\r\n\r\n<p>หมายเหตุ : รายละเอียดเพิ่มเติมจากประกาศมหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ เรื่อง ปิดสถานศึกษาเป็นการชั่วคราว (ฉบับที่ 7)</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2919836511577766\">ติดตามเพิ่มเติมได้ที่นี่</a></p>\r\n', '2564-01-02', 'covid1.jpg', 1),
(5, 'ประกาศเรื่อง ปิดสถานศึกษาเป็น ถึงนักศึกษาเเละบุคคลกรทุกท่าน', '<p><strong>ประกาศมหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์&nbsp;เรื่อง ปิดสถานศึกษาเป็นการชั่วคราว (ฉบับที่ ๙) ทั้ง ๔ พื้นที่&nbsp;</strong></p>\r\n\r\n<p>ปิดมหาวิทยาลัยฯ ทั้ง 4 พื้นที่ เป็นการชั่วคราว เนื่องจากสถานการณ์การแพร่ระบาดของเชื้อไวรัส COVID-19&nbsp;<br />\r\nมหาวิทยาลัยฯ ได้จัดการเรียนการสอนสำหรับนักศึกษา แบบออนไลน์ 100%&nbsp;<br />\r\nบุคลากรในหน่วยงานให้ Work from Home ขยายเวลาถึงวันที่ 1 กุมภาพันธ์ 2564</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2942587462636004\">ติดตามต่อได้ที่นี่</a></p>\r\n', '2564-01-08', 'covid2.jpg', 1),
(6, 'เลื่อนการจัดโครงการสัมมนาและการแข่งขันทักษะทางวิชาการ', '<p><strong>เลื่อนการจัดโครงการสัมมนาและการแข่งขันทักษะทางวิชาการด้านบริหารธุรกิจ 9 มทร. ครั้งที่ 9&nbsp;</strong></p>\r\n\r\n<p>เลื่อนการจัดโครงการสัมมนาและการแข่งขันทักษะทางวิชาการด้านบริหารธุรกิจ 9 มทร.&nbsp;<br />\r\nครั้งที่ 9 จากวันที่ 14-16 กุมภาพันธ์ 2564 เป็นวันที่ 18-20 กรกฎาคม 2564</p>\r\n\r\n<p><a href=\"https://www.facebook.com/rmut99greenbiz/\">ติดตามข่าวสารเพิ่มเติมได้ที่นี่</a></p>\r\n', '2564-01-08', '8-1-64.jpg', 1),
(7, 'ขอประชาสัมพันธ์กำหนดการปัจฉิมนิเทศนักศึกษา ', '<p><strong>ขอประชาสัมพันธ์กำหนดการปัจฉิมนิเทศนักศึกษา&nbsp;</strong></p>\r\n\r\n<p>ขอประชาสัมพันธ์กำหนดการปัจฉิมนิเทศนักศึกษา ปี 2563&nbsp;<br />\r\n***การปัจฉิมนิเทศนักศึกษา ปี 2563 ผ่านระบบออนไลน์***<br />\r\n***สำหรับนักศึกษาที่จะจบในปีการศึกษา 2563 ทุกคน (ยกเว้นภาคพิเศษ/สมทบ)***<br />\r\n***กิจกรรมบังคับสุดท้าย***<br />\r\n***ผู้ที่ไม่ผ่านปัจฉิมนิเทศจะไม่สามารถขอจบการศึกษาได้ตามระเบียบข้อบังคับของมหาวิทยาลัย***<br />\r\n***ขอให้นักศึกษาที่จะจบการศึกษา เข้าร่วมปัจฉิมนิเทศออนไลน์ ตามกำหนดวันในตารางแนบนี้นะคะ***<br />\r\nหมายเหตุ - นักศึกษาตกรุ่นที่จะจบการศึกษา ขอให้แจ้ง &quot;รหัสนักศึกษา/ชื่อ-นามสกุล/สาขาวิชา&quot; ลงในคอมเม้นต์ใต้โพสต์ ก่อนวันที่ 15 มีนาคม 64 และเข้าระบบปัจฉิมนิเทศออนไลน์ในรอบสุดท้าย (29-31 มี.ค. 64)</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2934566340104783\">ติดตามข่าวสารเพิ่มเติมได้ที่นี่</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/138168532_207842467532867_3665631903477424982_o.jpg?_nc_cat=107&amp;ccb=2&amp;_nc_sid=730e14&amp;_nc_eui2=AeHpcjh23X0omRARdBnHoNeHbL2aJyjCEORsvZonKMIQ5PFbS4hqd_yw4xHT73pZf-Tnur8mnMN1uoRY7UZ3trDV&amp;_nc_ohc=XJ4ym9du08UAX_GrWq_&amp;_nc_ht=scontent.fbkk5-7.fna&amp;oh=514d93626e1ed1e5addb8a4f82a6a087&amp;oe=60428444\" style=\"height:497px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/135927276_207842500866197_8120275944382040495_o.jpg?_nc_cat=109&amp;ccb=2&amp;_nc_sid=730e14&amp;_nc_eui2=AeGWkg5qEgJ6vKuVj9PdVla-n6pyDU8H2LyfqnINTwfYvMcbgSLM4zHUaFiNxwiOcRMRjlZzIh_csvwCDqe5ZcFR&amp;_nc_ohc=j2hiYKRFLmAAX-DwswW&amp;_nc_ht=scontent.fbkk5-1.fna&amp;oh=c6eb2468632b80ad0f676b55d37dd11f&amp;oe=60435CAA\" style=\"height:291px; width:500px\" /></p>\r\n', '2564-01-12', '12-1-64-2.jpg', 1),
(8, 'ประกาศกิจกรรมเสริมหลักสูตร ถึงนักศึกษาทุกคน', '<p><strong>ประกาศกิจกรรมเสริมหลักสูตร ถึงนักศึกษาทุกคน</strong></p>\r\n\r\n<p>การเข้าร่วมกิจกรรมเสริมหลักสูตรสำหรับนักศึกษาทีี่เข้าปีการศึกษา 2560-2561 ที่กำลังจบปีการศึกษา 2563&nbsp;<br />\r\nให้นักศึกษาตรวจสอบชั่วโมงกิจกรรมนักศึกษาและเกณฑ์การเข้าร่วมกิจกรรมและกิจกรรมบังคับที่มหาวิทยาลัยกำหนด ดังนี้<br />\r\nเกณฑ์การเข้าร่วมกิจกรรมตลอดหลักสูตรนักศึกษา ปี 2560 จำนวน 120 ชั่วโมง<br />\r\nเกณฑ์การเข้าร่วมกิจกรรมตลอดหลักสูตรนักศึกษาเทียบโอน ปี 2561 จำนวน 150 ชั่วโมง<br />\r\nกิจกรรมบังคับที่นักศึกษาต้องเข้าร่วม 7 กิจกรรมดังนี้<br />\r\nปฐมนิเทศ พิธีไหว้ครู กีฬาภายใน วันคล้ายวันสถาปนา ประเพณีไทย&nbsp;<br />\r\nกิจกรรมเทิดพระเกียรติสถาบันพระมหากษัตริย์ และ ปัจฉิมนิเทศ<br />\r\nหมายเหต : ให้นักศึกษาตรวจสอบชั่วโมงกิจกรรมในเว็บไซต์ http://act.rmutr.ac.th/login.php หากนักศึกษาไม่เข้าร่วมกิจกรรมบังคับ<br />\r\nครบทั้ง 7 กิจกรรม มหาวิทยาลัยจะดำเนินการตามข้อบังคับกิจกรรมเสริมหลักสูตร ข้อที่ 13 รายละเอียดสามารถดูในสมุด<br />\r\nบันทึกกิจกรรม(เล่มแดง) ทั้งนี้หากกิจกรรมไม่ครบหรือต้องการตรวจสอบการเข้าร่วมกิจกรรม ให้ติดต่อคณะในสังกัด<br />\r\nงานบริการการศึกษา ประจำพื้นที่ / วิทยาลัย / วิทยาเขต และ งานกิจกรรมนักศึกษากองพัฒนานักศึกษา<br />\r\nกรณีนักศึกษาที่โดนล๊อคระบบงานทะเบียนให้มาดำเนินการแก้ไขกิจกรรมเสริมหลักสูตรเพิ่มเติมให้ครบตามที่มหาวิทยาลัย<br />\r\nกำหนดโดยดำเนินการให้แล้วเสร็จภายใน วันที่ 31 มี.ค. 64&nbsp;<br />\r\n(ประกาศอาจมีการเปลี่ยนแปลงตามสถานการณ์ โควิด-19)<br />\r\nวิธีการเข้าเว็บกิจกรรมเสริมหลักสูตร<br />\r\n<a href=\"https://www.youtube.com/watch?v=ngmb1Xh9knw&amp;t=1s\">VDOวิธีการเข้าใช้งาน</a><br />\r\nhttps://www.youtube.com/watch?v=ngmb1Xh9knw&amp;t=1s</p>\r\n\r\n<p><a href=\"http://act.rmutr.ac.th/manual/Manual_Student.pdf\">คู๋มือนักศึกษา</a><br />\r\nhttp://act.rmutr.ac.th/manual/Manual_Student.pdf</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2931518950409522\">ติดตามข่าวสารเพิ่มเติมได้ที่นี่</a></p>\r\n', '2564-01-18', '18-1-2564.jpg', 1),
(9, 'กำหนดการประชุมวิชาการระดับปริญญาตรี ด้านคอมพิวเตอร์ภูมิภาคเอเชีย', '<p><strong>กำหนดการประชุมวิชาการระดับปริญญาตรีด้านคอมพิวเตอร์ภูมิภาคเอเชีย ครั้งที่ 9กำหนดการประชุมวิชาการระดับปริญญาตรี</strong></p>\r\n\r\n<p>กำหนดการประชุมวิชาการระดับปริญญาตรีด้านคอมพิวเตอร์ภูมิภาคเอเชีย ครั้งที่ 9 (The 9th Asia Undergraduate Conference on Computing : AUCC) วันพฤหัสบดีที่ 25 กุมภาพันธ์ 2564</p>\r\n\r\n<p><a href=\"https://www.facebook.com/BUABPC/posts/2939748122919938\">สามารถเข้าไปอ่านได้ที่นี่</a></p>\r\n', '2564-01-25', '15-10-2563.jpg', 1),
(10, 'เจ้าภาพการประชุมวิชาการระดับปริญญาตรี ด้านคอมพิวเตอร์ภูมิภาคเอเชีย', '<p><strong>เจ้าภาพการประชุมวิชาการระดับปริญญาตรีด้านคอมพิวเตอร์ภูมิภาคเอเชีย ครั้งที่ ๙</strong></p>\r\n\r\n<p>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ เป็นเจ้าภาพการประชุมวิชาการระดับปริญญาตรีด้านคอมพิวเตอร์ภูมิภาคเอเชีย ครั้งที่ ๙ (The 9th Asia Undergraduate Conference on Computing : AUCC) และการประชุมวิชาการระดับนานาชาติ (The 2nd Asia Joint Conference on Computing : AJCC) ในวันที่ ๒๕ - ๒๖ กุมภาพันธ์ ๒๕๖๔ ณ มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ พื้นที่วิทยาเขตวังไกลกังวล แต่เนื่องจากปัจจุบันสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา ๒๐๑๙ (COVID-๑๙) ในประเทศไทยมีแนวโน้มเพิ่มขึ้นอย่างต่อเนื่อง คณะกรรมการดำเนินงานจึงได้ปรับแผนดำเนินการประชุมในรูปแบบ Online แทน โดยการดำเนินงานบันทึกภาพวิดีโอพิธีเปิดโครงการประชุมวิชาการดังกล่าว เพื่อใช้สำหรับถ่ายทอดผ่านสื่อออนไลน์ในช่วงพิธีเปิดโครงการ ในวันที่ ๒๕ กุมภาพันธ์ ๒๕๖๔ เวลา ๑๓.๓๐ น. ในวันที่ ๓ กุมภาพันธ์ ๒๕๖๔ เวลา ๐๙.๐๐ - ๑๒.๐๐ น. ณ อาคารปฏิบัติการศิลปวัฒนธรรมอาเซียนเฉลิมพระเกียรติ มทร.รัตนโกสินทร์ พื้นที่ศาลายาสถาบันศิลปะและวัฒนธรรม ยินดีต้อนรับคณะผู้เยี่ยมชม และให้พื้นที่ได้ใช้เป็นแหล่งเรียนรู้ทางศิลปวัฒนธรรม เพื่อเข้าถึงสุนทรียภาพ คุณค่าและสิ่งแวดล้อมทางศิลปะในมหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์</p>\r\n\r\n<p><a href=\"https://www.facebook.com/rmutrculture/\">ติดตามเพิ่มเติมได้ที่นี่</a></p>\r\n', '2564-02-03', '3-2-2464.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbp4`
--

CREATE TABLE `tbp4` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Text` text COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbpage`
--

CREATE TABLE `tbpage` (
  `ID` int(5) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Tittle` varchar(100) NOT NULL,
  `Text` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbpage`
--

INSERT INTO `tbpage` (`ID`, `Logo`, `Topic`, `Tittle`, `Text`, `Phone`) VALUES
(1, 'audio-folder.ico', 'asdwd', 'asdwd', 'asdwd', '522325');

-- --------------------------------------------------------

--
-- Table structure for table `tbprofessor`
--

CREATE TABLE `tbprofessor` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Professorimg` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbprofessor`
--

INSERT INTO `tbprofessor` (`ID`, `Name`, `Phone`, `Email`, `Professorimg`, `Status`) VALUES
(2, 'อาจารย์กัลยา ', '022222814', 'หัวหน้าสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor3.jpg', ''),
(4, 'ผู้ช่วยศาสตราจารย์ ดร.หงษ์ศิริ ภิยโยดิลกชัย', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor1.jpg', 'ผู้รับผิดชอบหลักสูตร'),
(6, 'อาจารย์พรพรรณ อิทธิรัตนสุนทร', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor2.jpg', ''),
(8, 'อาจารย์ ดร.พัสกร สิงห์โต', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor4.jpg', 'ผู้รับผิดชอบหลักสูตร'),
(10, 'อาจารย์พีรศุษม์ ทองพ่วง', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor5.jpg', 'ผู้รับผิดชอบหลักสูตร'),
(12, 'อาจารย์ ดร.มนต์รวี ทองเสน่ห์', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor6.jpg', 'ผู้รับผิดชอบหลักสูตร'),
(14, 'อาจารย์วิลาวัณย์ วิเศษวัชร์', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor8.jpg', 'ผู้รับผิดชอบหลักสูตร'),
(16, 'อาจารย์ธรรญชนก นิลมณี', '022222814', 'อาจารย์ประจำสาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ', 'bua_bpc_rmutr_com_professor9.jpg', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbqa`
--

CREATE TABLE `tbqa` (
  `ID` int(5) NOT NULL,
  `Q` varchar(200) NOT NULL,
  `A` varchar(200) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbqa`
--

INSERT INTO `tbqa` (`ID`, `Q`, `A`, `Status`) VALUES
(1, 'ค่าใช้จ่ายต่อเทอมมีอะไรบ้างและราคาประมาณเท่าไหร่', 'ค่าเทอมปกติจ่ายเทมอละ 15,000 บาท\r\nและค่าจิปะถะที่เกี่ยวข้องกับการศึกษาอีก 200 บาท', 1),
(2, 'ทางคณะมีทุนการศึกษาหรือไม่', 'ทางมหาวิทยาลัยมีทุนการศึกษาให้นักศึกษาของมหาวิทยาลัย สามารถติดต่อสอบถามเพิ่มเติมได้ที่\r\nเพจ............', 1),
(3, 'วิธีการเรียนและการเลือกวิชาเป็นอย่างไร', 'สำหรับพื้นที่บพิตรพิมุขจักวรรดิจะเป็นการจัดการเรียนการสอนในรูปแบบกระเช้า นั้นก็คือ\r\nทางมหาวิทยาลัยจะจัดมาให้ลงในแต่ละเทอม ไม่ต้องแย่งกันลงเรียน', 1),
(4, 'คุณสมบัติผู้เข้าศึกษา', '– สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลาย (ม.6) หรือเทียบเท่า หรือประกาศนียบัตรวิชาชีพ (ปวช.)\r\n– สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) สาขาวิชาคอมพิวเตอร์ธุรกิจ', 1),
(5, 'รูปแบบหลักสูตร', 'ภาคปกติ\r\nหลักสูตรระดับปริญญาตรี 4 ปี\r\nหลักสูตรระดับปริญญาตรี 4 ปี เทียบโอนรายวิชา\r\nภาคสมทบ\r\nหลักสูตรระดับปริญญาตรี 4 ปี เทียบโอนรายวิชา', 1),
(6, 'สาขาเทคโนโลยีสารสนเทศจบไปแล้วสามารถทำงานเกี่ยวกับอะไรได้บ้าง', 'Web Developer ,Web Programmer ,Web Designer ,Web Master ,Database Management , \r\nSystems Analysis , IT / Network Support ,Systems Search Engine Optimization เป็นต้น', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsild`
--

CREATE TABLE `tbsild` (
  `ID` int(5) NOT NULL,
  `Himg1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Himg2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `himg3` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbsild`
--

INSERT INTO `tbsild` (`ID`, `Himg1`, `Himg2`, `himg3`) VALUES
(1, '1.1.jpg', '', ''),
(2, '3.jpg.jpg', '', ''),
(3, '2.1.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbstu`
--

CREATE TABLE `tbstu` (
  `ID` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `expert` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbstu`
--

INSERT INTO `tbstu` (`ID`, `year`, `name`, `expert`) VALUES
(4, 15, 'zsdg', 'ZXc'),
(5, 14, 'fgj', ''),
(23, 15, 'xh', 'df'),
(24, 15, 'zfg', 'zxc'),
(41, 15, 'hxfgh', 'sd'),
(45, 15, 'dzf', 'fs'),
(57, 15, 'zsd', 'zx'),
(245, 14, 'zs', ''),
(453, 15, 'zfdgz', 'zx'),
(455, 14, 'hj', ''),
(566, 14, 'xg', ''),
(876, 15, 'zg', 'zsc'),
(2452, 14, 'zdf', ''),
(3464, 14, 'dfh', ''),
(4351, 15, 'zg', 'zxv'),
(5745, 14, 'dfh', ''),
(6756, 15, 'zdf', 'zsf'),
(45745, 14, 'xdfh', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbyear`
--

CREATE TABLE `tbyear` (
  `Year` int(5) NOT NULL,
  `Member` int(5) NOT NULL,
  `Yearimg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbyear`
--

INSERT INTO `tbyear` (`Year`, `Member`, `Yearimg`, `Status`) VALUES
(14, 8, 'b3.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbatvite`
--
ALTER TABLE `tbatvite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbawar`
--
ALTER TABLE `tbawar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbcon`
--
ALTER TABLE `tbcon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbcouse`
--
ALTER TABLE `tbcouse`
  ADD PRIMARY KEY (`Year`);

--
-- Indexes for table `tbimg`
--
ALTER TABLE `tbimg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbnews`
--
ALTER TABLE `tbnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbpage`
--
ALTER TABLE `tbpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbprofessor`
--
ALTER TABLE `tbprofessor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbqa`
--
ALTER TABLE `tbqa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbstu`
--
ALTER TABLE `tbstu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbyear`
--
ALTER TABLE `tbyear`
  ADD PRIMARY KEY (`Year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
