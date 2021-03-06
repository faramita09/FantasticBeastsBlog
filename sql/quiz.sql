-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 04:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(20) NOT NULL,
  `quiz` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `choiceA` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `choiceB` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `choiceC` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `choiceD` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `correct` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `quiz`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `correct`) VALUES
(1, 'เมื่อตอนที่นิวท์ ยังเรียนอยู่ที่ฮอกวอตส์ เขาอยู่บ้านอะไร?', 'กริฟฟินดอร์', 'ฮัฟเฟิลฮัพ', 'สลิธีริน', 'เรเวนคลอ', 'ฮัฟเฟิลฮัพ'),
(2, 'สัตว์ชนิดใดที่สามารถปรับขนาดตัวได้?', 'murtlap', 'bowtruckl', 'erumpent', 'occamy', 'occamy'),
(3, 'สัตว์ชนิดใดที่กัดเจค็อปจนเป็นแผลที่คอ?', 'murtlap', 'bowtruckle', 'erumpent', 'occamy', 'murtlap'),
(4, 'ทีน่าทำงานกับสภาเวทมนตร์แห่งสหรัฐอเมริกาซึ่งชื่อว่า...?', 'nacusac', 'nacusa', 'nacusec', 'macusa', 'macusa'),
(5, 'ข้อใดเป็นสัตว์โลก(ปกติ)ที่ปรากฏในเรื่องทุกตัว?', 'ลิง,ฮิปโปโปเตมัส', 'สิงโต,เสือ', 'ลิง,นกกระจอกเทศ', 'เสือ,นก', 'ลิง,นกกระจอกเทศ'),
(6, 'สัตว์วิเศษชนิดใด ออกจากกระเป๋าเป็นตัวแรก?', 'thunder bird', 'erumpent', 'occamy', 'niffler', 'niffler'),
(7, 'นิวท์พกรูปใครติดตัว?', 'เบลล่า สคามันเดอร์ ', 'แนทดี้ สคามันเดอร์', 'เลตา เลสแตรงค์', 'ริต้า เลสแตรงค์', 'เลตา เลสแตรงค์'),
(8, 'สิ่งที่เกรฟเอาออกมาจากกระเป๋านิวท์ คืออะไร?', 'ออบสคูเรเอียล', 'ออบสคูเรอัส', 'ออบสตูเรียล', 'ออบสคูรัส', 'ออบสคูรัส'),
(9, 'ทีน่าพานิวท์ไปที่สภา เพราะละเมิดกฏข้อใด?', '4 A', '5 A', '3 A', '2 A', '3 A'),
(10, 'ข้อใดที่ไม่ใช่คำพูดที่นิวท์พูดกับทีน่า?', 'i\'ll catch you', 'because i like you', 'don\'t panic', 'people change', 'because i like you'),
(11, 'นิวท์ สคามันเดอร์ เกิดในปี ค.ศ.อะไร ?', '1896', '1897', '1898', '1899', '1897'),
(12, 'นิวท์ได้เจอออบสคูเรียลที่ไหน และเธออายุเท่าไหร่ ?', 'ซูดาน , 10 ปี', 'อังกฤษ , 8 ปี', 'อังกฤษ , 10 ปี', 'ซูดาน , 8 ปี', 'ซูดาน , 8 ปี'),
(13, 'เรื่องราว fantastic beasts and where to find them ภาคนี้ เกิดในปี ค.ศ.อะไร ?', '1926', '1925', '1924', '1923', '1926'),
(14, 'ตามที่มีการบันทึกไว้ ออบสคูเรียลมีชีวิตอยู่ได้นานสุดไม่เกินกี่ปี ?', '8 ปี', '10 ปี', '12 ปี', '14 ปี', '10 ปี'),
(15, 'ข้อใดต่อไปนี้ไม่ใช่คำพูดของเจค็อบ โควัลสกี้ ?', 'very much.', 'pleas dont read my mind.', 'dont get me wrong.', 'there is only one like me.', 'pleas dont read my mind.'),
(16, 'ข้อใดไม่ใช่คำพูดที่ทีน่าพูดกะนิวท์ที่ห้องพักของเจค็อบ ?', 'what?', 'Mr.scamander', 'who are you ?', 'find it', 'who are you ?'),
(17, 'แม่ของนิวท์เป็นแม่มดที่มีทักษะด้านใด ?', 'เพาะพันธุ์เมิร์ตแลป', 'เพาะพันธุ์มังกร', 'เพาะพันธุ์ฮิปโปกริฟฟ์', 'เพาะพันธุ์ยูนิคอร์น', 'เพาะพันธุ์ฮิปโปกริฟฟ์'),
(18, 'เจค็อบ โควัลสกี้ กลับมาจากยุโรปได้กี่ปีแล้ว ?', '27 ปี', '26 ปี', '25 ปี', '24 ปี', '24 ปี'),
(19, 'ทำไมนิวท์ถึงบอกว่า นิวยอร์กมีอะไรน่าสนใจ ?', 'เจอนกกระจอกเทศขณะหาเลตาร์', 'เจอสิงโตขณะหลับ', 'เจอสิงโต ขณะตำรวจล้อม', 'เจอหนูขณะหนีแมว', 'เจอสิงโต ขณะตำรวจล้อม'),
(20, 'ชื่อของสัตว์ชนิดใด ปรากฏครั้งแรกในเรื่อง และมันมีชื่อว่า ?', 'นิฟเฟลอร์ , ดูกัล', 'นิฟเฟลอร์ , พิกเค็ต', 'ไดมิไกส์, ดูกัล', 'ไดมิไกส์ , พิกเค็ต', 'ไดมิไกส์, ดูกัล'),
(21, 'ในประเทศอังกฤษเรียกคนที่ไร้เวทย์มนตร์ว่าอะไร ?', 'มักเกิ้ล', 'โนเมจ', 'เลือดสีโคลน', 'เลือดบริสุทธิ์', 'โนเมจ'),
(22, 'นิวท์ไปศึกษาที่เมืองใด ?', 'นิวยอร์ก', 'ลอนดอน', 'โตเกียว', 'ปารีส', 'นิวยอร์ก'),
(23, 'คนเขียนบทเรื่องนี้คือใคร ?', 'เดวิด เยทส์', 'คัลลั่ม เทอร์เนอร์', 'อลิสัน ซูดอล', 'เจ.เค. โรว์ลิ่ง', 'เจ.เค. โรว์ลิ่ง'),
(24, 'ใครที่ขัดขวางแผนการของกรินเดลวัลด์ ?', 'นิวท์ สคามันเดอร์', 'อัลบัส ดัมเบิลดอร์', 'เจค็อบ โควัลสกี้', 'ปาเลตา เลสแตรงค์ส', 'อัลบัส ดัมเบิลดอร์'),
(25, 'กิลเลิร์ต กรินเดลวัลด์ ถูกใครจับตัวไป ?', 'เนกูซ่า', 'เมดูซ่า', 'มาคูซ่า', 'เวก้า', 'มาคูซ่า'),
(26, 'มาคูซ่าคือสภาอะไร ?', 'นักศึกษา', 'สัตว์', 'นักกฎหมาย', 'เวทมนตร์', 'เวทมนตร์'),
(27, 'กันนาร์ กริมม์สัน คือใคร ?', 'อาจารย์', 'พ่อมด', 'นักเรียน', 'โมเนจ', 'พ่อมด'),
(28, 'ครอลล์แอบยกย่องใคร ?', 'กรินเดลวัลด์', 'ดัมเบิลดอร์', 'เจค็อบ', 'นิวท์', 'ดัมเบิลดอร์'),
(29, 'ผู้ช่วยคอยดูแลสัตว์ที่บ้านของนิวท์คือใคร ?', 'กรินเดลวัลด์', 'ดัมเบิลดอร์', 'เจค็อบ', 'บันตี้', 'บันตี้'),
(30, 'ทีน่า โกลด์สตีน มีเป้าหมายในฝรั่งเศลเพื่อตามหาใคร ?', 'กรินเดลวัลด์', 'รีเดนซ์', 'เจค็อบ', 'บันตี้', 'รีเดนซ์'),
(31, 'ประธานมาคูซ่า คือใคร ?', 'พิกเคอรี', 'ดัมเบิลดอร์', 'เจค็อบ', 'นิวท์', 'พิกเคอรี'),
(32, 'ดัมเบิลดอร์ อยู่บ้านชื่อว่าอะไร ?', 'กริฟฟินดอร์', 'ฮัฟเฟิลฮัพ', 'สลิธีริน', 'เรเวนคลอ', 'กริฟฟินดอร์'),
(33, 'นกออเกอรี่ของนิวท์ชื่อว่าอะไร ?', 'นิฟเฟิล', 'แพทริก', 'สกู', 'พิกเคอรี่', 'แพทริก'),
(34, 'สเกนเดอร์ เป็นหัวหน้าอะไร ?', 'ละครสัตว์', 'สภาเวทย์มนตร์', 'นักเรียน', 'โมเนจ', 'ละครสัตว์'),
(35, 'หัวหน้าสำนักงานมือปราบมารแห่งกระทรวงเวทมนตร์อังกฤษคือใคร ?', 'ธีซีอุส', 'ดัมเบิลดอร์', 'เจค็อบ', 'นิวท์', 'ธีซีอุส'),
(36, 'หัวหน้าสำนักงานมือปราบมารแห่งกระทรวงเวทมนตร์อังกฤษเป็นอะไรกับนิวท์ ?', 'เพื่อน', 'อาจารย์', 'ศัตรู', 'พี่น้อง', 'พี่น้อง'),
(37, 'พ่อมดศาสตร์มืดแห่งยุคคือนิยามของใคร ?', 'กรินเดลวัลด์', 'ดัมเบิลดอร์', 'เจค็อบ', 'นิวท์', 'กรินเดลวัลด์'),
(38, 'ใครเสียชีวิตในเพลิงสีฟ้า ?', 'ครอลล์', 'ดัมเบิลดอร์', 'เจค็อบ', 'นิวท์', 'ครอลล์'),
(39, 'นิวท์นั่งเรืออะไรไปนครนิวยอร์ก ?', 'ไททานิค', 'ฟอร์ท อลิซาเบธ', 'จักรี', 'คอลัมบัส', 'ฟอร์ท อลิซาเบธ'),
(40, 'น้องสาวของทีน่า โกลด์สตีนคือใคร ?', 'เบลล่า โกลด์สตีน', 'แนทดี้ โกลด์สตีน', 'เลตา โกลด์สตีน', 'ควีนนี่ โกลด์สตีน', 'ควีนนี่ โกลด์สตีน'),
(41, 'เจค็อบกับนิวท์สลับกระเป๋ากันที่ไหน ?', 'ท่าเรือ', 'ธนาคาร', 'มหาวิทยาลัย', 'หมู่บ้าน', 'ธนาคาร'),
(42, 'นากินีหลงป่าในประเทศอะไร ?', 'จีน', 'อินโดนีเซีย', 'เกาหลี', 'อินเดีย', 'อินโดนีเซีย'),
(43, 'ผู้ที่รับบทเป็นนากินีเป็นคนชาติใด ?', 'ไทย', 'จีน', 'ญี่ปุ่น', 'เกาหลี', 'เกาหลี'),
(44, 'นากินีมีความยาวกี่เมตร ?', '4', '3', '2', '1', '4'),
(45, 'นิวท์แต่งงานกับใคร ?', 'เลตา', 'ทีน่า', 'นากินี', 'เบลล่า', 'ทีน่า'),
(46, 'ผู้กำกับภาพยนตร์เรื่องนี้คือใคร ?', 'ทอยส์ ดอสัน', 'เจสัน เบรค', 'เดวิด เยตส์', 'แจค มาร์ค', 'เดวิด เยตส์'),
(47, 'fantastic beast เริ่มฉายที่ไทยครั้งแรกเมื่อไร ?', '18 พ.ย. 2559', '17 พ.ย. 2559', '16 พ.ย. 2559', '15 พ.ย. 2559', '17 พ.ย. 2559'),
(48, 'ในภาคแรกภาพยตร์จบอย่างไร ?', 'ควีนนีมาหาเจค็อบที่ร้าน', 'นิวท์แต่งงานกับทีน่า', 'นากินีตาย', 'พ่อมดแห่งวิชามืดตาย', 'ควีนนีมาหาเจค็อบที่ร้าน'),
(49, 'กิลเลิร์ต กรินเดลวัลด์ ใช้คาถาแปลงร่างขั้นสูงปลอมตัวเป็นใคร ?', 'เพอร์ซิวาล เกรฟส์', 'อัลบัส ดัมเบิลดอร์', 'เจค็อบ โควัลสกี้', 'ปาเลตา เลสแตรงค์ส', 'เพอร์ซิวาล เกรฟส์'),
(50, 'กิลเลิร์ต กรินเดลวัลด์ ถูกคุมขังที่มาคูซ่ากี่วัน ?', '171', '172', '173', '174', '173'),
(51, 'ภาพยนตร์เรื่อง fantastic beats เกิดขึ้นก่อนกำเนิดโลก harry potter กี่ปี ?', '70 ปี', '80 ปี', '90 ปี', '100 ปี', '70 ปี'),
(52, 'นิวท์ เดินทางพร้อมกับอะไร ?', 'กระเป๋าสัตว์วิเศษ', 'กระเป๋าดาบวิเศษ', 'กระเป๋าปากกาวิเศษ', 'กระเป๋านกวิเศษ', 'กระเป๋าสัตว์วิเศษ'),
(53, 'นิวท์ สคามันเดอร์ รับบทโดยใคร ? ', 'เอ็ดดี เรดเมย์น', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'เอ็ดดี เรดเมย์น'),
(54, 'เครเดนซ์ แบร์โบน รับบทโดยใคร ?', 'เอ็ดดี เรดเมย์น', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'เอซรา มิลเลอร์', 'เอซรา มิลเลอร์'),
(55, 'กนาร์ลัก รับบทโดยใคร ?', 'เอ็ดดี เรดเมย์น', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'รอน เพิร์ลแมน'),
(56, 'เพอร์ซิวัล เกรฟส์ รับบทโดยใคร?', 'เอ็ดดี เรดเมย์น', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'โคลิน ฟาร์เรล'),
(57, 'เจค็อบ โควัลสกี รับบทโดยใคร?', 'เอ็ดดี เรดเมย์น', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'แดน ฟอกเลอร์'),
(58, 'แมรี ลู แบร์โบน รับบทโดยใคร?', 'ซาแมนธา มอร์ตัน', 'อลิสัน ซูดอล', 'คาร์เมน อีโจโก', 'แคทเธอรีน วอเตอร์สตัน', 'ซาแมนธา มอร์ตัน'),
(59, 'ทีน่า โกลด์สตีน รับบทโดยใคร?', 'ซาแมนธา มอร์ตัน', 'อลิสัน ซูดอล', 'คาร์เมน อีโจโก', 'แคทเธอรีน วอเตอร์สตัน', 'แคทเธอรีน วอเตอร์สตัน'),
(60, 'เซราฟิน่า พิกเคอรี รับบทโดยใคร?', 'ซาแมนธา มอร์ตัน', 'อลิสัน ซูดอล', 'คาร์เมน อีโจโก', 'แคทเธอรีน วอเตอร์สตัน', 'คาร์เมน อีโจโก'),
(61, 'ควีนนี โกลด์สตีน รับบทโดยใคร?\r\n', 'ซาแมนธา มอร์ตัน', 'อลิสัน ซูดอล', 'คาร์เมน อีโจโก', 'แคทเธอรีน วอเตอร์สตัน', 'อลิสัน ซูดอล'),
(62, 'ทีน่า โกลด์สตีน เป็น?', 'แม่มด', 'นักเรียน', 'สัตว์วิเศษ ', 'โนเมจ', 'แม่มด'),
(63, 'เซราฟิน่า พิกเคอรี ทำอาชีพอะไร?', 'มือปราบมาร', 'นักเรียน', 'ผู้ดูแลสัตว์วิเศษ', 'ประธานสภาเวทย์มนตร์', 'ประธานสภาเวทย์มนตร์'),
(64, 'MACUSA ย่อมาจากอะไร?', 'Magical Congress of the United States of America', 'Manage Congress of the United States of America', 'Moment Content of the United States of America', 'Magical Content of the United States of America', 'Magical Congress of the United States of America'),
(65, 'เซราฟิน่า พิกเคอรี  ออกคำสั่งให้ใครจัดการกับกระเป๋าสัตว์วิเศษ?', 'เพอร์ซิวัล เกรฟส์', 'เจค็อบ โควัลสกี', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'เพอร์ซิวัล เกรฟส์'),
(66, 'เพอร์ซิวัล เกรฟส์ ทำอาชีพอะไร ?', 'มือปราบมาร', 'ผู้อำนวยการความมั่นคงของมาคูซา ', 'ผู้ดูแลสัตว์วิเศษ ', 'ประธานสภาเวทย์มนตร์', 'ผู้อำนวยการความมั่นคงของมาคูซา '),
(67, 'ควีนนี โกลด์สตีนขาดความทะเยอทะยานอยากเป็นสิ่งใดเหมือนพี่สาว?', 'Auror', 'Actor ', 'Animal', 'Admin', 'Auror'),
(68, 'ควีนนี โกลด์สตีน มีเลกลิเมนส์ หมายถึงอะไร?', 'อ่านความคิดคน', 'เห็นอนาคต', 'ล่องหน', 'หายตัว', 'อ่านความคิดคน'),
(69, 'แมรี ลู แบร์โบนมุ่งมั่นที่จะทำสิ่งใด?', 'กำจัดพ่อมดแม่มด', 'ช่วยเหลือสัตว์วิเศษ', 'เปิดร้านขนมปัง', 'แต่งงานมีครอบครัว', 'กำจัดพ่อมดแม่มด'),
(70, 'New Salem Philanthropic Society (NSPS) หมายถึงอะไร?', 'เครื่องหมายของกลุ่มเซเล็มใหม่', 'มักเกิลของชาวอเมริกัน', 'ผู้อำนวยการรักษาความปลอดภัยเวทมนตร์ ', 'ข้อบัญญัติแห่งการรักษาความลับ', 'เครื่องหมายของกลุ่มเซเล็มใหม่'),
(71, 'เดอะบลายน์พิก คืออะไร ?', 'เครื่องหมายของกลุ่มเซเล็มใหม่', 'คำเรียกมักเกิลของชาวอเมริกัน', 'ผู้อำนวยการรักษาความปลอดภัยเวทมนตร์', 'ร้านขายเหล้าใต้ดิน', 'ร้านขายเหล้าใต้ดิน'),
(72, 'Fantastic Beasts: The Crimes of Grindelwald ใช้เวลาถ่ายทำประมาณกี่ปี?', '4 ปี', '3 ปี', '2 ปี', '1 ปี', '1 ปี'),
(73, 'ผู้รับบทธีเซียสนั้นอายุอ่อนกว่า เอ็ดดี้ เรดเมย์น ผู้รับบท นิวต์ สคาแมนเดอร์ กี่ปี?', '6 ปี', '7 ปี', '8 ปี', '9 ปี', '8 ปี'),
(74, 'นักเล่นแร่แปรธาตุ ผู้สร้างศิลาอาถรรพ์ใน แฮร์รี่ พอตเตอร์ และปรากฏตัวเป็นครั้งแรกในเรื่องนี้ คือใคร?', 'เจค็อบ โควัลสกี ', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก ', 'นิโคลาส ฟลาเมล', 'นิโคลาส ฟลาเมล'),
(75, 'fantastic beats จะมีทั้งหมดกี่ภาคจบ? ', '3 ภาค', '4 ภาค', '5 ภาค', '6 ภาค', '5 ภาค'),
(76, 'เมื่อโนเมจมองไปที่ฮอกวอลต์จะเห็นเป็นสิ่งใด ?', 'ปราสาทร้าง', 'ทะเลสาบ', 'ปราสาทเวทย์มนตร์', 'โรงเรียน', 'ปราสาทร้าง'),
(77, 'ภาพยนตร์เรื่องนี้เป็นเหตุการณ์ที่เกิดขึ้นในช่วงใด ?', 'ค.ศ. 1926-1945', 'ค.ศ. 1928-1945', 'ค.ศ. 1930-1945', 'ค.ศ. 1932-1945', 'ค.ศ. 1926-1945'),
(78, 'เรื่องราวในภาคที่ 2 จะเกิดขึ้นใน 3 เมืองด้วยกันคือเมืองใดบ้าง ?', 'นิวยอร์ค, ลอนดอน, และ ปารีส', 'นิวยอร์ค, ลอนดอน, และ โรม', 'นิวยอร์ค, ลอนดอน, และ โซล', 'นิวยอร์ค, ลอนดอน, และ โตเกียว', 'นิวยอร์ค, ลอนดอน, และ ปารีส'),
(79, 'ดัมเบิลดอร์ในวัยหนุ่มรับบทโดยใคร ?', 'จู๊ด ลอร์', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'จู๊ด ลอร์'),
(80, 'ธีซีอุส สคาร์มันเดอร์ รับบทโดยใคร ?', 'คอลลัม เทอร์เนอร์', 'แดน ฟอกเลอร์', 'โคลิน ฟาร์เรล', 'รอน เพิร์ลแมน', 'คอลลัม เทอร์เนอร์'),
(81, 'ใครที่ขึ้นชื่อว่าเป็น”นักล่าเงินรางวัล” ?', 'เจค็อบ โควัลสกี', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กริมม์สัน', 'กริมม์สัน'),
(82, 'เกลเลิร์ต กรินเดลวัลด์เคยคิดร่วมกันกับใครในสมัยที่ยังเป็น วัยรุ่น ก่อนจะแตกหักกัน ? ', 'อัลบัส ดัมเบิลดอร์', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กริมม์สัน', 'อัลบัส ดัมเบิลดอร์'),
(83, 'ผู้ติดตามของเกลเลิร์ต กรินเดลวัลด์ ที่ให้ความภักดีและใกล้ชิดกรินเดลวัลด์อย่างยิ่งคือใคร ?', 'โรซิเออ', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กริมม์สัน', 'โรซิเออ'),
(84, 'ใครมีส่วนในการแหกคุกของกรินเดลวัลด์ ?', 'อะเบอร์นาธี', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กริมม์สัน', 'อะเบอร์นาธี'),
(85, 'ใครเป็นที่เลื่องลือในฐานะของ “วีรบุรุษสงคราม” ?', 'ธีซีอุส', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กริมม์สัน', 'ธีซีอุส'),
(86, 'พ่อมดผิวสีที่นามสกุลคามา คือใคร ?', 'ธีซีอุส', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'ยูซุฟ', 'ยูซุฟ'),
(87, 'นิโคลัส เป็นนักเรียนของวิทยาลัยโบซ์บาตง เช่นเดียวกับใคร ?', 'ธีซีอุส', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'เฟลอร์ เดอลากู', 'เฟลอร์ เดอลากู'),
(88, 'ใครคือภรรยาของนิโคลัส แฟลมเมล ?', 'เพอรีแนล แฟลมเมล', 'แมรี ลู แบร์โบน', 'ทีน่า โกลด์สตีน', 'ควีนนี โกลด์สตีน', 'เพอรีแนล แฟลมเมล'),
(89, 'นิวท์ สคามันเดอร์ เป็นปู่ทวดของใคร ? ', 'ธีซีอุส', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'รอล์ฟ', 'รอล์ฟ'),
(90, 'ข้อใดกล่าวไม่ถูกต้องเกี่ยวกับทีน่า โกลด์สตีน ?', 'เป็นอดีต Auror', 'มีเลือดผสมโน-แมจ', 'เคยอยู่โรงเรียนเวทมนต์อิลเวอร์เมอร์นี', 'เป็นน้องสาวของควีนนี่', 'เป็นน้องสาวของควีนนี่'),
(91, 'กนาร์ลัคสนใจแย่งชิงสัตว์วิเศษของนิวท์ชื่อว่าอะไร ?', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'อีรัมเพนท์', 'พิกเก็ต', 'พิกเก็ต'),
(92, 'ใครตั้งฐานปฏิบัติการลับในปารีส ?', 'ธีซีอุส', 'เครเดนซ์ แบร์โบน', 'กนาร์ลัก', 'กรินเดลวัลด์', 'กรินเดลวัลด์'),
(93, 'เครเดนซ์เดินทางมายังปารีสเพื่ออะไร ?', 'ตามล่าสัตว์วิเศษ', 'หาคู่หมั้น', 'ค้นหาแม่ที่แท้จริง', 'หนีมาคูซ่า', 'ค้นหาแม่ที่แท้จริง'),
(94, 'นากินีก็กลายเป็นคนสนิทและเพื่อนร่วมทางของใคร ?', 'ธีซีอุส', 'เครเดนซ์', 'กนาร์ลัก', 'กรินเดลวัลด์', 'เครเดนซ์'),
(95, 'นิโคลัส เฟลมเมล เป็นพ่อมดที่มีอายุประมาณเท่าไร ?', '600 ปี', '700 ปี', '800 ปี', '900 ปี', '600 ปี'),
(96, 'แมลงพื้นเมืองของออสเตรเลีย ลำตัวมีสีน้ำเงินสด เคลื่อนที่เร็วมาก คือสัตว์ชนิดใด ?', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'อีรัมเพนท์', 'บิลลี่วิก', 'บิลลี่วิก'),
(97, 'สัตว์คล้ายลิงอุรังอุตัง ขนสีเงินและมีดวงตากลมโตสีดำที่ฉายแววละห้อย คือสัตว์ชนิดไหน ?', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'อีรัมเพนท์', 'เดมิไกส์', 'เดมิไกส์'),
(98, 'สัตว์ที่อาศัยอยู่ในทวีปแอฟริกา เป็นสัตว์มหัศจรรย์ของนิวท์ที่มีขนาดใหญ่ที่สุดและน่าเกรงขามที่สุด คือสัตว์ชนิดใด ? ', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'อีรัมเพนท์', 'เดมิไกส์', 'อีรัมเพนท์'),
(99, 'สัตว์ปีกขนาดใหญ่ดูสง่างาม ซึ่งอาศัยอยู่ในภูมิอากาศอันแห้งแล้งของอริโซนา คือสัตว์ชนิดใด ?', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'อีรัมเพนท์', 'เดมิไกส์', 'ธันเดอร์เบิร์ด'),
(100, 'สัตว์สองขามีปีกและมีขนแบบขนนก ลำตัวคล้ายงู ทำให้ดูเหมือนมังกรผสมนก คือสัตว์ชนิดใด ?', 'โบวทรัคเกิล', 'ธันเดอร์เบิร์ด', 'ออคคามี', 'เดมิไกส์', 'ออคคามี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
