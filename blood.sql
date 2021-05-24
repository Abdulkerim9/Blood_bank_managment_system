SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+03:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_type` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `b_type`, `address`, `city`, `mobile`, `created_at`) VALUES
(1, 'Varun', 'Shrivastava', 'varunshrivastava007@gmail.com', '1994-07-16', 'Male', 'O+', '2647, Azad Nagar\r\nRanjhi , Front Of Goswami Building', 'Jabalpur', '9827983762', '2015-04-19 17:12:26'),
(2, 'Diksha', 'Gupta', 'diksha24gupta24@gmail.com', '1994-09-24', 'Female', 'B+', 'State Bank Colony,\r\nSingle Story,\r\nBal Dev Bagh\r\n', 'Jabalpur', '8269036096', '2015-04-28 10:08:46'),
(3, 'Vaibhav', 'Shrivastava', 'iammagnificient@gmail.com', '2000-02-15', 'Male', 'O+', '2631, Azad Nagar,\r\nRanjhi, Jabalpur', 'Jabalpur', '8871479418', '2015-04-30 06:27:06'),
(5, 'Joey', 'Tribbiani', 'joey@gmail.com', '1970-05-08', 'Male', 'B+', 'California', 'Las Vegas', '99887070', '2019-11-12 08:24:03'),
(6, 'Hari', 'Sharma', 'hari@gmail.com', '1995-05-05', 'Male', 'B-', 'Pokhara', 'Pokhara', '99889988', '2019-11-12 10:02:29'),
(7, 'Jeevan', 'Dan', 'jeevandan@gmail.com', '1996-05-08', 'Male', 'A-', 'Kaski', 'pokhara', '9988', '2019-11-12 10:11:33');
