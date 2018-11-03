
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'dsouzalerisha1@gmail.com', 'Lerisha@2', '2002-09-18 00:00:00'),
(2, 'jennymanthny@gmail.com', 'Jennny@1', '2002-09-18 00:00:00'),
(3, 'jasmineangel@gmail.com', 'Jasmine@3', '2002-09-18 00:00:00');
