-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 02:36 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'a10'),
(2, 'a1'),
(3, 'a2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `optionA` varchar(255) NOT NULL,
  `optionB` varchar(255) NOT NULL,
  `optionC` varchar(255) NOT NULL,
  `optionD` varchar(255) NOT NULL,
  `correctAns` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `title`, `optionA`, `optionB`, `optionC`, `optionD`, `correctAns`, `score`) VALUES
(41, '1+1=?', '3', '1', '2', '4', 'c', 1),
(42, '10-5=?', '5', '4', '2', '3', 'a', 1),
(43, '10*1=?', '7', '8', '9', '10', 'd', 1),
(44, '10/2=?', '2', '5', '7', '3', 'b', 1),
(45, '10+5=?', '13', '12', '15', '14', 'c', 1),
(46, '1+1=?', '3', '1', '2', '4', 'c', 1),
(47, '10-5=?', '5', '4', '2', '3', 'a', 1),
(48, '10*1=?', '7', '8', '9', '10', 'd', 1),
(49, '10/2=?', '2', '5', '7', '3', 'b', 1),
(50, '10+5=?', '13', '12', '15', '14', 'c', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_test_mapping`
--

CREATE TABLE `question_test_mapping` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `question_test_mapping`
--

INSERT INTO `question_test_mapping` (`question_id`, `test_id`) VALUES
(41, 11),
(42, 11),
(43, 11),
(44, 11),
(45, 11),
(46, 10),
(47, 10),
(48, 10),
(49, 10),
(50, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `correct_count` int(11) NOT NULL,
  `wrong_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `score`
--

INSERT INTO `score` (`id`, `test_id`, `question_id`, `correct_count`, `wrong_count`) VALUES
(41, 11, 41, 1, 1),
(42, 11, 42, 2, 0),
(43, 11, 43, 2, 0),
(44, 11, 44, 1, 1),
(45, 11, 45, 2, 0),
(46, 10, 46, 0, 1),
(47, 10, 47, 1, 0),
(48, 10, 48, 1, 0),
(49, 10, 49, 1, 0),
(50, 10, 50, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'PENDING'),
(2, 'RUNNING'),
(3, 'COMPLETED');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `score` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `test_id`, `rollno`, `password`, `score`, `status`) VALUES
(371, 10, 51, '6PLErL10', 0, 1),
(372, 10, 52, 'l6fYM510', 0, 1),
(373, 10, 53, 'x5sOjl10', 4, 1),
(374, 10, 54, '9p0LxJ10', 0, 0),
(375, 10, 55, 'lYg1R810', 0, 0),
(376, 10, 56, 'iqWnc610', 0, 0),
(377, 10, 57, 'CDWG9A10', 0, 0),
(378, 10, 58, 'UczcpS10', 0, 0),
(379, 10, 59, 'fiFfyu10', 0, 0),
(380, 10, 60, 'UUpyse10', 0, 0),
(381, 11, 51, 'dwjfmH11', 9, 1),
(382, 11, 52, 'gh9W3d11', 7, 1),
(383, 11, 53, '0Bfn5k11', 0, 0),
(384, 11, 54, 'SMAOJG11', 0, 0),
(385, 11, 55, '8lTu7p11', 0, 0),
(386, 11, 56, 'xUoCTc11', 0, 0),
(387, 11, 57, 'KHd8hI11', 0, 0),
(388, 11, 58, 'zoKerj11', 0, 0),
(389, 11, 59, 'PE9u0111', 0, 0),
(390, 11, 60, '3ZXF3411', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `rollno` bigint(20) NOT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `student_data`
--

INSERT INTO `student_data` (`id`, `rollno`, `class_id`) VALUES
(51, 1, 1),
(52, 2, 1),
(53, 3, 1),
(54, 4, 1),
(55, 5, 1),
(56, 6, 1),
(57, 7, 1),
(58, 8, 1),
(59, 9, 1),
(60, 10, 1),
(61, 1, 2),
(62, 2, 2),
(63, 3, 2),
(64, 4, 2),
(65, 5, 2),
(66, 19810310500, 3),
(67, 19810310501, 3),
(68, 19810310502, 3),
(69, 19810310503, 3),
(70, 19810310504, 3),
(71, 19810310505, 3),
(72, 19810310506, 3),
(73, 19810310507, 3),
(74, 19810310508, 3),
(75, 19810310509, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `email`, `password`) VALUES
(1, 'manh', '290bd5131daa6a8785b1a9484809c0fad873c563c1dc0e3561a44d113124cd3f');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tests`
--

INSERT INTO `tests` (`id`, `teacher_id`, `name`, `date`, `status_id`, `subject`, `total_questions`, `class_id`) VALUES
(10, 1, '15p toan', '2023-10-14', 3, 'toan', 5, 1),
(11, 1, 'bai kiem tra 15 phut', '2023-10-16', 3, 'toan', 5, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question_test_mapping`
--
ALTER TABLE `question_test_mapping`
  ADD PRIMARY KEY (`question_id`,`test_id`),
  ADD KEY `question_test_mapping_fk1` (`test_id`);

--
-- Chỉ mục cho bảng `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_fk0` (`test_id`),
  ADD KEY `score_fk1` (`question_id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_fk0` (`test_id`),
  ADD KEY `students_fk1` (`rollno`);

--
-- Chỉ mục cho bảng `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_data_fk0` (`class_id`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_fk0` (`teacher_id`),
  ADD KEY `tests_fk1` (`status_id`),
  ADD KEY `tests_fk2` (`class_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT cho bảng `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `question_test_mapping`
--
ALTER TABLE `question_test_mapping`
  ADD CONSTRAINT `question_test_mapping_fk0` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `question_test_mapping_fk1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`);

--
-- Các ràng buộc cho bảng `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_fk0` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `score_fk1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_fk0` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `students_fk1` FOREIGN KEY (`rollno`) REFERENCES `student_data` (`id`);

--
-- Các ràng buộc cho bảng `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_fk0` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

--
-- Các ràng buộc cho bảng `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_fk0` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `tests_fk1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `tests_fk2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
