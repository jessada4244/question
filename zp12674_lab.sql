-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2025 at 12:04 AM
-- Server version: 10.6.16-MariaDB-log
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zp12674_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `expectations`
--

CREATE TABLE `expectations` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `university_reputation` int(11) NOT NULL,
  `Location_university` int(11) NOT NULL,
  `public_relations` int(11) NOT NULL,
  `curriculum` int(11) NOT NULL,
  `teac_date` int(11) NOT NULL,
  `number_graduates` int(11) NOT NULL,
  `cost_education` int(11) NOT NULL,
  `quotas` int(11) NOT NULL,
  `Idol` int(11) NOT NULL,
  `Receive_advice` int(11) NOT NULL,
  `labor_market` int(11) NOT NULL,
  `extra_curricular` int(11) NOT NULL,
  `ethical_aspects` int(11) NOT NULL,
  `teacher_experience` int(11) NOT NULL,
  `transfer_knowledge` int(11) NOT NULL,
  `real_practice` int(11) NOT NULL,
  `school_building` int(11) NOT NULL,
  `environment` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `network_system` int(11) NOT NULL,
  `modernization` int(11) NOT NULL,
  `Programming` int(11) NOT NULL,
  `Machine` int(11) NOT NULL,
  `Data_Science` int(11) NOT NULL,
  `network_sys` int(11) NOT NULL,
  `IoT` int(11) NOT NULL,
  `problem_solving` int(11) NOT NULL,
  `teamwork` int(11) NOT NULL,
  `presentation` int(11) NOT NULL,
  `continue_education` int(11) NOT NULL,
  `work_government` int(11) NOT NULL,
  `work_privateagency` int(11) NOT NULL,
  `add_stu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expectations`
--

INSERT INTO `expectations` (`id`, `gender`, `education_level`, `school`, `province`, `university_reputation`, `Location_university`, `public_relations`, `curriculum`, `teac_date`, `number_graduates`, `cost_education`, `quotas`, `Idol`, `Receive_advice`, `labor_market`, `extra_curricular`, `ethical_aspects`, `teacher_experience`, `transfer_knowledge`, `real_practice`, `school_building`, `environment`, `computer`, `network_system`, `modernization`, `Programming`, `Machine`, `Data_Science`, `network_sys`, `IoT`, `problem_solving`, `teamwork`, `presentation`, `continue_education`, `work_government`, `work_privateagency`, `add_stu`) VALUES
(1, 'ชาย', 'ปวช.', '0', 'ตาก', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 'หญิง', 'ปวส.', '0', 'ตาก', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 'หญิง', 'ปวส.', '0', 'ตราด', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 'หญิง', 'ปวช.', '0', 'ตราด', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 'ชาย', 'ปวช.', 'สูงเม่น', 'ตราด', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 'ชาย', 'ปวช.', 'เหมืองแดง', 'กระบี่', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(7, 'หญิง', 'ปวช.', 'อนุบาล', 'ตาก', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(8, 'หญิง', 'ปวส.', 'เทคนิคแพร่', 'กระบี่', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(9, 'ชาย', 'ม.6', 'เทคนิคตาก', 'กระบี่', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(10, 'ชาย', 'ปวช.', 'ฟห', 'กาฬสินธุ์', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(11, 'ชาย', 'ปวช.', 'ผดุงปัญญา', 'กระบี่', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(12, 'ชาย', 'ปวช.', 'พิริยาลัย', 'ชุมพร', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, ''),
(13, 'ชาย', 'ปวส.', 'adasd', 'กรุงเทพมหานคร', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, ''),
(14, 'ชาย', 'ปวช.', 'อาม', 'กระบี่', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'ทำดี'),
(15, 'ชาย', 'ปวส.', 'มทร.ตาก', 'กาฬสินธุ์', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ''),
(16, 'หญิง', 'ปวช.', 'มทร.ตาก', 'ขอนแก่น', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, ''),
(17, 'ชาย', 'ม.6', 'ตากพิทยาคม', 'ตาก', 2, 3, 5, 5, 4, 5, 5, 5, 1, 4, 5, 1, 5, 5, 5, 5, 5, 4, 4, 4, 5, 5, 4, 4, 3, 4, 5, 5, 4, 5, 4, 4, ''),
(18, 'ชาย', 'ปวช.', 'โรงเรียนพะเยาพิทยาคม', 'พะเยา', 5, 4, 3, 4, 2, 1, 4, 4, 3, 2, 3, 4, 3, 3, 3, 2, 3, 5, 5, 3, 3, 3, 4, 3, 2, 2, 4, 2, 3, 3, 4, 4, 'Takoyaki so good'),
(19, 'ชาย', 'ปวช.', 'มทร.ตาก', 'เชียงราย', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, ''),
(20, 'ชาย', 'ม.6', 'ป่าแมต', 'อ่างทอง', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 1, 1, 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 2, 2, 2, 'ดีจ้า');

-- --------------------------------------------------------

--
-- Table structure for table `q_alumni`
--

CREATE TABLE `q_alumni` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age_range` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `occupation_path` varchar(255) NOT NULL,
  `other_occupation` varchar(255) DEFAULT NULL,
  `course_modernity` int(11) DEFAULT NULL CHECK (`course_modernity` between 1 and 5),
  `course_relevance_to_job_market` int(11) DEFAULT NULL CHECK (`course_relevance_to_job_market` between 1 and 5),
  `course_structure` int(11) DEFAULT NULL CHECK (`course_structure` between 1 and 5),
  `course_technology` int(11) DEFAULT NULL CHECK (`course_technology` between 1 and 5),
  `course_integration` int(11) DEFAULT NULL CHECK (`course_integration` between 1 and 5),
  `course_character_development` int(11) DEFAULT NULL CHECK (`course_character_development` between 1 and 5),
  `course_demand_in_job_market` int(11) DEFAULT NULL CHECK (`course_demand_in_job_market` between 1 and 5),
  `teacher_practical_teaching` int(11) DEFAULT NULL CHECK (`teacher_practical_teaching` between 1 and 5),
  `teacher_knowledge` int(11) DEFAULT NULL CHECK (`teacher_knowledge` between 1 and 5),
  `teacher_professional_ethics` int(11) DEFAULT NULL CHECK (`teacher_professional_ethics` between 1 and 5),
  `teacher_professional_edu` int(11) DEFAULT NULL,
  `classroom_equipment` int(11) DEFAULT NULL CHECK (`classroom_equipment` between 1 and 5),
  `laboratory_equipment` int(11) DEFAULT NULL CHECK (`laboratory_equipment` between 1 and 5),
  `information_service` int(11) DEFAULT NULL,
  `foreign_language_skills` int(11) NOT NULL,
  `leadership` int(11) NOT NULL,
  `Analytical_and_problem` int(11) NOT NULL,
  `Interpersonal` int(11) NOT NULL,
  `Additional_skills` varchar(255) NOT NULL,
  `Architecture` int(11) NOT NULL,
  `Operating` int(11) NOT NULL,
  `Software_Development` int(11) NOT NULL,
  `Database_Systems` int(11) NOT NULL,
  `Computer_Networks` int(11) NOT NULL,
  `Cybersecurity` int(11) NOT NULL,
  `Machine_Learning` int(11) NOT NULL,
  `Embedded_System` int(11) NOT NULL,
  `Information_Theory` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering` int(11) NOT NULL,
  `Cloud_Computing` int(11) NOT NULL,
  `Add_Knowledge` varchar(255) NOT NULL,
  `suggestions` varchar(255) NOT NULL,
  `date_ser` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `q_alumni`
--

INSERT INTO `q_alumni` (`id`, `gender`, `age_range`, `employment_status`, `occupation`, `occupation_path`, `other_occupation`, `course_modernity`, `course_relevance_to_job_market`, `course_structure`, `course_technology`, `course_integration`, `course_character_development`, `course_demand_in_job_market`, `teacher_practical_teaching`, `teacher_knowledge`, `teacher_professional_ethics`, `teacher_professional_edu`, `classroom_equipment`, `laboratory_equipment`, `information_service`, `foreign_language_skills`, `leadership`, `Analytical_and_problem`, `Interpersonal`, `Additional_skills`, `Architecture`, `Operating`, `Software_Development`, `Database_Systems`, `Computer_Networks`, `Cybersecurity`, `Machine_Learning`, `Embedded_System`, `Information_Theory`, `Mathematics`, `Engineering`, `Cloud_Computing`, `Add_Knowledge`, `suggestions`, `date_ser`) VALUES
(49, 'ชาย', 'น้อยกว่า 25 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 0, 0, 0, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', '', '2024-10-08'),
(50, 'หญิง', '25 -30 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 'หมา', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'ลอจิกเยอะๆ', 'ดีดีดี', '2024-10-08'),
(51, 'หญิง', '25 -30 ปี', 'ว่างงาน', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 0, 1, 0, 'แมว', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'คณิตศาสตร์มากๆ', 'ขอให้มีความสุข', '2024-10-08'),
(52, 'หญิง', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 0, 0, 0, '', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '2024-10-08'),
(53, 'เพศทางเลือก', '25 -30 ปี', 'ว่างงาน', '', '', NULL, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '2024-10-08'),
(54, 'หญิง', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 4, 3, 4, 5, 4, 5, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '', '', '2024-10-09'),
(55, 'เพศทางเลือก', '25 -30 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 1, 0, 0, '', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(56, 'หญิง', '25 -30 ปี', 'ว่างงาน', '', '', NULL, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 1, 0, '', 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(57, 'ชาย', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 0, 1, 0, '', 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, '', '', '2024-10-09'),
(58, 'ชาย', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 0, 0, '', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(59, 'หญิง', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 3, 3, 3, 1, 1, 0, 1, '', 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(60, 'หญิง', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 0, 1, '', 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(61, 'เพศทางเลือก', 'มากกว่า 35 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '', 'เจริญพร', '2024-10-09'),
(62, 'หญิง', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 4, 4, 4, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, '', '', '2024-10-09'),
(63, 'เพศทางเลือก', '31 - 35 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 4, 5, 3, 4, 5, 4, 4, 5, 5, 5, 5, 5, 5, 5, 0, 1, 0, 0, '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '', 'aaa', '2024-10-09'),
(64, 'ชาย', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 3, 3, 3, 2, 3, 2, 3, 4, 4, 4, 4, 2, 2, 3, 1, 0, 1, 0, '', 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(65, 'เพศทางเลือก', 'มากกว่า 35 ปี', 'ทำงาน', '', '', NULL, 1, 4, 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, '', 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, '', '', '2024-10-09'),
(66, 'เพศทางเลือก', 'น้อยกว่า 25 ปี', 'ศึกษาต่อในระดับที่สูงขึ้น', '', '', NULL, 4, 3, 3, 3, 4, 4, 2, 2, 4, 3, 4, 4, 3, 3, 0, 1, 0, 0, '', 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, '', 'Ice-cream so good', '2024-10-09'),
(67, 'ชาย', 'น้อยกว่า 25 ปี', 'ว่างงาน', '', '', NULL, 3, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 3, 3, 0, 0, 1, 1, '', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', '', '2024-10-09'),
(68, 'เพศทางเลือก', 'มากกว่า 35 ปี', 'ทำงาน', '', 'เจ้าของธุรกิจ / ธุรกิจส่วนตัว', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 0, 0, 0, 'กล้าแสดงออก', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'พื้นฐานทางไฟฟ้า', 'ขอให้โชคดี', '2024-10-10'),
(69, 'หญิง', '25 -30 ปี', 'ทำงาน', 'ทำนา', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 1, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ไม่ได้ใช้', 'ทำเกษตรเถอะ', '2024-10-10'),
(70, 'เพศทางเลือก', 'มากกว่า 35 ปี', 'ทำงาน', 'ทำสวน', '', NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 1, 1, 1, 'กล้าแสดงออก', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'พื้นฐานทางไฟฟ้า', 'สวัสดี', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age_level` varchar(50) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `job_path` varchar(255) NOT NULL,
  `other_job` varchar(255) DEFAULT NULL,
  `Professional_skills` int(11) NOT NULL,
  `theoretical_knowledge` int(11) NOT NULL,
  `Practical_skills` int(11) NOT NULL,
  `Information_skills` int(11) NOT NULL,
  `Communication_skills` int(11) NOT NULL,
  `thinking_skill` int(11) NOT NULL,
  `Ability_work` int(11) NOT NULL,
  `Management_ability` int(11) NOT NULL,
  `develop_skill` int(11) NOT NULL,
  `Honest` int(11) NOT NULL,
  `punctual` int(11) NOT NULL,
  `hard_working` int(11) NOT NULL,
  `Add_Highlights` varchar(255) NOT NULL,
  `Professional_skills_add` int(11) NOT NULL,
  `theoretical_knowledge_add` int(11) NOT NULL,
  `Practical_skill_add` int(11) NOT NULL,
  `Information_skills_add` int(11) NOT NULL,
  `Communication_skills_add` int(11) NOT NULL,
  `thinking_skill_add` int(11) NOT NULL,
  `Ability_work_add` int(11) NOT NULL,
  `Management_ability_add` int(11) NOT NULL,
  `develop_skill_add` int(11) NOT NULL,
  `Honest_add` int(11) NOT NULL,
  `punctual_add` int(11) NOT NULL,
  `hard_working_add` int(11) NOT NULL,
  `Highlights_add` varchar(255) NOT NULL,
  `course_content` int(11) NOT NULL,
  `labor_market` int(11) NOT NULL,
  `practical_knowledge` int(11) NOT NULL,
  `Moderntools_teaching` int(11) NOT NULL,
  `Studentshave_knowledge` int(11) NOT NULL,
  `Students_work` int(11) NOT NULL,
  `commi_skills` int(11) NOT NULL,
  `leadership` int(11) NOT NULL,
  `assertiveness` int(11) NOT NULL,
  `self_study` int(11) NOT NULL,
  `Problem_solving` int(11) NOT NULL,
  `Manage_time` int(11) NOT NULL,
  `teamwork` int(11) NOT NULL,
  `writing_skills` int(11) NOT NULL,
  `add_skills` varchar(255) NOT NULL,
  `puter_arch` int(11) NOT NULL,
  `Operating_sys` int(11) NOT NULL,
  `Software_Deve` int(11) NOT NULL,
  `Database_Sys` int(11) NOT NULL,
  `Computer_Net` int(11) NOT NULL,
  `Cybers` int(11) NOT NULL,
  `Machine_Learn` int(11) NOT NULL,
  `Embedded_Sys` int(11) NOT NULL,
  `Information_The` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering` int(11) NOT NULL,
  `Cloud` int(11) NOT NULL,
  `add_Knowledge` varchar(255) NOT NULL,
  `Additional_suggestions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `gender`, `age_level`, `education_level`, `job_type`, `job_path`, `other_job`, `Professional_skills`, `theoretical_knowledge`, `Practical_skills`, `Information_skills`, `Communication_skills`, `thinking_skill`, `Ability_work`, `Management_ability`, `develop_skill`, `Honest`, `punctual`, `hard_working`, `Add_Highlights`, `Professional_skills_add`, `theoretical_knowledge_add`, `Practical_skill_add`, `Information_skills_add`, `Communication_skills_add`, `thinking_skill_add`, `Ability_work_add`, `Management_ability_add`, `develop_skill_add`, `Honest_add`, `punctual_add`, `hard_working_add`, `Highlights_add`, `course_content`, `labor_market`, `practical_knowledge`, `Moderntools_teaching`, `Studentshave_knowledge`, `Students_work`, `commi_skills`, `leadership`, `assertiveness`, `self_study`, `Problem_solving`, `Manage_time`, `teamwork`, `writing_skills`, `add_skills`, `puter_arch`, `Operating_sys`, `Software_Deve`, `Database_Sys`, `Computer_Net`, `Cybers`, `Machine_Learn`, `Embedded_Sys`, `Information_The`, `Mathematics`, `Engineering`, `Cloud`, `add_Knowledge`, `Additional_suggestions`) VALUES
(24, 'หญิง', '25 -30 ปี', 'ปริญญาตรี', '', 'พนักงานบริษัทเอกชน', NULL, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '', 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(25, 'ชาย', 'น้อยกว่า 25 ปี', 'ปริญญาตรี', '', 'พนักงานรัฐวิสาหกิจ', NULL, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, '', 4, 4, 4, 4, 4, 4, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(26, 'หญิง', 'น้อยกว่า 25 ปี', 'ต่ำกว่าระดับปริญญาตรี', '', 'เจ้าของธุรกิจ / ธุรกิจส่วนตัว', NULL, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, '', 3, 3, 3, 3, 3, 3, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(27, 'ชาย', '25 -30 ปี', 'ปริญญาตรี', '', 'พนักงานบริษัทเอกชน', NULL, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, '', 1, 1, 1, 1, 2, 2, 1, 1, 0, 0, 1, 0, 0, 0, '0', 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', ''),
(28, 'เพศทางเลือก', '25 -30 ปี', 'ปริญญาโท', '', 'พนักงานบริษัทเอกชน', NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(30, 'เพศทางเลือก', 'มากกว่า 35 ปี', 'ปริญญาเอก', '', 'พนักงานรัฐวิสาหกิจ', NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', 5, 5, 5, 5, 3, 3, 0, 1, 0, 1, 1, 0, 0, 0, '0', 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, '', ''),
(31, 'เพศทางเลือก', 'น้อยกว่า 25 ปี', 'ปริญญาเอก', '', 'เจ้าของธุรกิจ / ธุรกิจส่วนตัว', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, '', 5, 4, 4, 4, 4, 3, 1, 1, 1, 1, 1, 1, 1, 1, '0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 'Bing zu so good'),
(32, 'หญิง', 'น้อยกว่า 25 ปี', 'ต่ำกว่าระดับปริญญาตรี', '', 'เจ้าของธุรกิจ / ธุรกิจส่วนตัว', NULL, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, '', 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, '', 2, 2, 2, 2, 3, 3, 0, 0, 0, 1, 1, 1, 1, 1, '0', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', ''),
(33, 'เพศทางเลือก', '31 - 35 ปี', 'ปริญญาเอก', 'ทำนา', '', NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'มีจิตใจดี', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ความหยิ่ง', 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'เยอะแยะ', 'คิดดีทำดี'),
(34, 'หญิง', '25 -30 ปี', 'ปริญญาเอก', '', 'พนักงานรัฐวิสาหกิจ', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'ARM2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'GOD3', 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 1, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '12345678', '2024-09-19 17:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expectations`
--
ALTER TABLE `expectations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q_alumni`
--
ALTER TABLE `q_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expectations`
--
ALTER TABLE `expectations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `q_alumni`
--
ALTER TABLE `q_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
