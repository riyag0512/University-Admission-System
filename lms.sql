-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 08:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@1234', 1148458757);

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `course` varchar(250) NOT NULL,
 `name` varchar(50) NOT NULL,
 `email` varchar(100) NOT NULL,
`teacher_id` int(11) NOT NULL
 

  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

-- INSERT INTO `books` (`book_id`,`course`,`name`,`email`,`teacher_id`) VALUES
-- (1, '123','Riya','123@gmail.com',1);


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_course` (
  `id` int(11) NOT NULL,
   `student_id` int(11) NOT NULL,
   `teacher_id` int(11) NOT NULL,
  
  `course` varchar(200) NOT NULL,
 `student_name` varchar(50) NOT NULL,
`student_email` varchar(100) NOT NULL,
`teacher_email` varchar(100) NOT NULL,
--  `teacher_name` varchar(50) NOT NULL ,
--     `date` varchar(50)  NULL ,
-- `timing` varchar(50)  NULL ,
  `teacher_name` varchar(50)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

-- INSERT INTO `issued_course` (`id`,  `student_id` , `teacher_id` , `course` , `student_name` ,`student_email` ,`teacher_email`  , `teacher_name` , `date` , `timing` ) VALUES
-- (1,1,1, '6541', 's1', 'se',  'te','tn','d','t','--');



CREATE TABLE `issued_course1` (
  `id` int(11) NOT NULL,
   `student_id` int(11) NOT NULL,
   `teacher_id` int(11) NOT NULL,
  
  `course` varchar(200) NOT NULL,
 `student_name` varchar(50) NOT NULL,
`student_email` varchar(100) NOT NULL,
`teacher_email` varchar(100) NOT NULL,
 `teacher_name` varchar(50) NOT NULL ,
    `date` varchar(50) NOT NULL ,
`timing` varchar(50) NOT NULL ,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERT INTO `issued_course1` (`id`,  `student_id` , `teacher_id` , `course` , `student_name` ,`student_email` ,`teacher_email`  , `teacher_name` , `date` , `timing` ,`link` ) VALUES
-- (1,1,1, '6541', 's1', 'se',  'te','tn','d','t','--');




CREATE TABLE `selected` (
  `id` int(11) NOT NULL,
   `issued_id` int(11) NOT NULL
   
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

-- INSERT INTO `selected` (`id`,  `issued_id` ) VALUES
-- (1,2);

CREATE TABLE `sshedule` (
  `id` int(11) NOT NULL,
`issued_id` int(11) NOT NULL,
     `date` varchar(50) NOT NULL ,
`timing` varchar(50) NOT NULL ,
`link` varchar(100) NOT NULL 
   
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

-- INSERT INTO `sshedule` (`id`, `issued_id` , `date` , `timing`, `link` ) VALUES
-- (1,1,'1stsept','9:01','---');



CREATE TABLE `final_issued` (
  `id` int(11) NOT NULL,
   `student_id` int(11) NOT NULL,
   `teacher_id` int(11) NOT NULL,
  
  `course` varchar(200) NOT NULL,
 `student_name` varchar(50) NOT NULL,
`student_email` varchar(100) NOT NULL,
`teacher_email` varchar(100) NOT NULL,
 `teacher_name` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

-- INSERT INTO `final_issued` (`id`,  `student_id` , `teacher_id` , `course` , `student_name` ,`student_email` ,`teacher_email`  , `teacher_name` ) VALUES
-- (1,1,1, '6541', 'Data structure', 'D S Gupta',  '0000-00-00',' 00:00:00');



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
 `course1` varchar(250)  ,
`course2` varchar(250)  ,
`course3` varchar(250)  ,
`course4` varchar(250)  ,
`course5` varchar(250)  ,
  `course_marks` varchar(100)  NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`,  `course1`, `course2`,  `course3`,  `course4`,  `course5`,   `course_marks`) VALUES
(4, 'user', 'user@gmail.com', 'user@1234', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur','123','','','','','85');

CREATE TABLE `users_one` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
 `course` varchar(250),
   `student_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

-- INSERT INTO `users_one` (`id`, `name`, `email`, `password`, `mobile`, `address`,  `course`, `student_id` ) VALUES
-- (4, 'user', 'user@gmail.com', 'user@1234', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur','123',1);
-- --
-- Table structure for table `users`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
`course1` varchar(250)  ,
`course2` varchar(250)  ,
`course3` varchar(250)  ,
`course4` varchar(250)  ,
`course5` varchar(250)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--


-- INSERT INTO `teachers` (`id`, `name`, `email`, `password`, `mobile`, `address`,  `course1`, `course2`,  `course3`,  `course4`,  `course5`) VALUES
-- (4, 'teacher', 'teacher@gmail.com', 'user@1234', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur','123','122','2','','');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sshedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_course`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `issued_course1`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `final_issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `users_one`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`


--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


--
-- AUTO_INCREMENT for table `issued_books`
--
ALTER TABLE `issued_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
ALTER TABLE `issued_course1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
ALTER TABLE `final_issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
ALTER TABLE `users_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
ALTER TABLE `selected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
ALTER TABLE `sshedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
