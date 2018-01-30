CREATE TABLE IF NOT EXISTS `userinfo` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `avatar` longblob NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Specialty` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `days` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;