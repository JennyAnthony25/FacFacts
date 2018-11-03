
-- --------------------------------------------------------

--
-- Table structure for table `deltechuniversity`
--

CREATE TABLE `deltechuniversity` (
  `Name` varchar(255) DEFAULT NULL,
  `Collegename` varchar(255) DEFAULT NULL,
  `Departmentname` varchar(255) DEFAULT NULL,
  `Qualification` varchar(80) DEFAULT NULL,
  `AreaofInterest` varchar(200) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deltechuniversity`
--

INSERT INTO `deltechuniversity` (`Name`, `Collegename`, `Departmentname`, `Qualification`, `AreaofInterest`, `Designation`) VALUES
('Prof. Vipin', 'Delhi Technological university', 'Mechanical Engineering', 'BE M.Tech PhD', 'Production Engineering', 'Professor'),
('Dr. Sagar Maji', 'Delhi Technological university', 'Mechanical Engineering', 'BE, M.Tech, PhD', 'Thermal Engineering, IC Engine', 'Professor'),
('Dr. Suresh Kumar Garg', 'Delhi Technological university', 'Mechanical Engineering', 'PhD', 'Statistical Analysis, Quantitative Methods, Supply Chain Management', 'Professor'),
('Dr.  R.S. Mishra', 'Delhi Technological university', 'Mechanical Engineering', 'PhD', 'BThermal Engg., Solar Energy', 'Professor'),
('Prof. Madhusudan Singh', 'Delhi Technological university', 'Electrical Engineering', 'B.Sc(Engg.), ME(Hons), PhD', ' Control & Instrumentation', 'HEad Of Deaprtment'),
('Dr. Narendra Kumar', 'Delhi Technological university', 'Electrical Engineering', 'B.Sc(Engg.), M.Sc(Engg.), PhD', 'Power System & Drives', 'Professor'),
('	Dr .N. K. Jain', 'Delhi Technological university', 'Electrical Engineering', 'B.Sc(Engg.), M.Sc(Engg), PhD', 'Power Systems', 'Professor'),
('	Dr. Pragati Kumar', 'Delhi Technological university', 'Electrical Engineering', 'M.Tech, PhD', 'Control & Instrumentation', 'Professor'),
('Dr. Rajni Jindal', 'Delhi Technological university', 'Computer Engineering', 'MCA,ME,Ph.D', 'Thermal Engineering, IC Engine', 'Head of Department'),
('Dr. Daya Gupta', 'Delhi Technological university', 'Computer Engineering', 'M.Sc,Post M.Sc.Diploma(Computers Sc.),Ph.D', 'Software Engineering , Artificial Intelligence, Data Mining and Security Engineering', 'Professor'),
('Vinod Kumar', 'Delhi Technological university', 'Computer Engineering', 'BE,M.Tech', ' Computer Network', 'Assistant Professor'),
('Manoj Kumar', 'Delhi Technological university', 'Computer Engineering', ' B.Tech, M.Tech', ' Information Security ', 'Assistant Professor'),
('Prof. Kapil Sharma', 'Delhi Technological university', 'Information Technology', 'B.E. , M.Tech, Ph.D', ' Software Engg. , Optimization, Soft Computing Techniques', 'Head of Department'),
('	Dr. Dinesh K. Vishwakarma', 'Delhi Technological university', 'Information Technology', 'B.Tech , M.Tech , Ph.D', 'Computer Vision, Human-Computer Interaction , Human Pose and Gesture Analysis, Machine Learning, Image Quality Improvement and Artificial Intelligence.', 'Associate Professor'),
('	Dr. Seba Susan', 'Delhi Technological university', 'Information Technology', 'Ph.D (IIT Delhi)', 'Computer Vision, Machine Learning, Data Mining, Pattern Recognition, Image Processing, Fuzzy-Neural Networks, Soft Computing', 'Associate Professor'),
('	Ritu Agarwal', 'Delhi Technological university', 'Information Technology', ' M.Tech.(Information Security)', ' Information Security, Digital Forensics', 'Assistant Professor');
