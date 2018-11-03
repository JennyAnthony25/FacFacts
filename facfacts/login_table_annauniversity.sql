
-- --------------------------------------------------------

--
-- Table structure for table `annauniversity`
--

CREATE TABLE `annauniversity` (
  `Name` varchar(200) NOT NULL,
  `Collegename` varchar(200) NOT NULL,
  `Departmentname` varchar(200) NOT NULL,
  `Qualification` varchar(200) NOT NULL,
  `AreaofInterest` varchar(200) NOT NULL,
  `Designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annauniversity`
--

INSERT INTO `annauniversity` (`Name`, `Collegename`, `Departmentname`, `Qualification`, `AreaofInterest`, `Designation`) VALUES
('Automobile Engineering', 'PSG College of Technology', 'Automobile Engineering', 'PHD', 'None', 'Head of Department'),
('Automobile Engineering', 'PSG College of Technology', 'Automobile Engineering', 'PHD', 'None', 'Proofessor'),
('Mr Ravinchandran R', 'PSG College of Technology', 'Automobile Enginerring', 'PHD', 'None', 'Professor'),
('Dr. Subramaninam M', 'PSG College of Technology', 'Automobile Enginerring', 'PHD', 'None', 'Professor'),
('Dr.Vidyapriya R', 'PSG College of Technology', 'Biomedical Enginerring', 'PHD', 'None', 'Head Of Departmnet'),
('Dr.Padmapriya B', 'PSG College of Technology', 'Biomedical Engineering', 'PHD', 'None', 'Professor'),
('Dr.Banu Rekha B', 'PSG College of Technology', 'Biomedical Enginerring', 'PHD', 'None', 'Professor'),
('Mrs.Gokilameena K', 'PSG College of Technology', 'Biomedical Enginerring', 'PHD', 'None', 'Professor'),
('De.Sankarasubramaniam G', 'PSG College of Technology', 'Civil Engineering', 'PHD', 'None', 'Head Of department'),
('Dr.PalaniKumaar M', 'PSG College of Technology', 'Civil Engineering', 'PHD', 'None', 'Professor'),
('Dr.Nainaa K', 'PSG College of Technology', 'Civil Engineering', 'PHD', 'None', 'Professor'),
('Dr.Ibrahim Bathusha M', 'PSG College of Technology', 'Civil Engineering', 'PHD', 'None', 'Professor');
