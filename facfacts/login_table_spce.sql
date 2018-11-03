
-- --------------------------------------------------------

--
-- Table structure for table `spce`
--

CREATE TABLE `spce` (
  `Name` varchar(50) NOT NULL,
  `Collegename` varchar(50) NOT NULL,
  `Departmentname` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `AreaofInterest` varchar(100) NOT NULL,
  `Designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spce`
--

INSERT INTO `spce` (`Name`, `Collegename`, `Departmentname`, `Qualification`, `AreaofInterest`, `Designation`) VALUES
('DR. M. M. MURUDI', 'Sardar Patel College Of College', 'Civil Engineering', 'P.HD', 'Structural dynamics Earthquake Engineering Concrete technology Repairs and Rehabilitation ', 'Head Of Department'),
('Dr. Prashant P. Nagrale', 'Sardar Patel College Of Engineering ', 'Civil Engineering', 'P.HD', 'Transportation Engineering, Pavement Design', 'Professor'),
('DR. A. A. BAGE', 'Sardar Patel College Of Engineering', 'Civil Engineering', 'P.HD', 'Nonlinear analysis Finite Element Analysis Concrete technology Repairs ', 'Professor'),
('Dr. A. R. Kambekar', 'Sardar Patel College Of Engineering', 'Civil Engineering', 'P.HD', 'Offshore Engineering', 'Professor'),
('Dr. Anupa Sabnis', 'Sardar Patel College Of Engineering', 'Electrical Engineering', 'Ph.D., M.E.(Electronics), B.E.(Electrical)', 'Image Processing, Communication Engineering, Digital Signal Processing', 'Head Of Department'),
('Regular Faculty   Prof. Remadevi C.', 'Sardar Patel College Of Engineering', 'Electrical Engineering', 'M.Tech., B.E.(Electrical)', ' Power Systems', 'Associate Professor'),
('Dr. B. B. Pimple', 'Sardar Patel College Of Engineering', 'Electrical Engineering', 'B.E., M.Tech.(Electrical), Associate Professor', ' Power Systems', 'Associate Professor'),
('Prof. V. P. Joshi', 'Sardar Patel College Of Engineering', 'Electrical Engineering', 'ME (Electronics), BE (Electrical)', 'Electronics', 'Associate Professor '),
('Dr. Nilesh Raykar', 'Sardar Patel College of Engineering', 'Mechanical Engineering', 'B.E. (Mech.), M.E. (Machine Design),Ph.D (IITB)', 'B.E. (Mech.),\r\nM.E. (Machine Design),Ph.D (IITB)', 'Head of Department'),
('Dr. Rajesh Buktar', 'Sardar Patel College Of Engineering', 'Mechanical Engineering', 'B.E. (Mech.), M.E. (CAD/CAM), Ph.D. in Technology', ' IT enabled Technology Integration in Indian Autocomponent Industries', 'Professor '),
('Prof. Dattatray N. Jadhav', 'Sardar Patel College Of Engineering', 'Mechanical Engineering', 'B.E. (Mech.), M.Tech. (Machine Design) ', 'Fracture Mechanics,FEM, Stress Analysis.', 'Associate Professor'),
('Dr. Kiran Suresh Bhole', 'Sardar Patel College Of Engineering', 'Mechanical Engineering', 'B.E.(Mech), ME(Production)', 'Microfabrication, Additive Manufacturing, MEMS, Flexural Systems.', 'Associate Professor');
