<?php
$DBname = "innofurm"; //Database name
$servername = "localhost:3307"; //Servername
$username = "root"; //Username for datebase
$password = "usbw"; //Password for database
// Create connection to database
$conn = new mysqli($servername, $username, $password, $DBname);
$_SESSION['conn'] = $conn;
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
} 

//create the database
$conn -> query('CREATE TABLE IF NOT EXISTS `userinfo` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Recode` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Comment` longtext NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Specialty` varchar(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `days` int(2) NOT NULL,
  `month` varchar(3) NOT NULL,
  `year` int(4) NOT NULL,
  `time` text NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Perm` int(99) NOT NULL,
  `Following` varchar(999) NOT NULL DEFAULT "Developer",
  `Online` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1280324588 ;');

$conn -> query("CREATE TABLE IF NOT EXISTS `topic_data` (
  `post_id` int(4) NOT NULL AUTO_INCREMENT,
  `post_topic` varchar(255) DEFAULT NULL,
  `post_detail` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `author` int(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");

$conn -> query("INSERT INTO `userinfo` (`Username`, `Name`, `Surname`, `Email`, 
`Password`, `Comment`, `Gender`, `Specialty`, `id`, `days`, `month`, `year`, `time`, `Website`, `Perm`) VALUES
('asd', 'asd', 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', 
'asdasd', 'female', 'asd', 4853, 2, 'Apr', 1906, '0000-00-00', 'www.com.com', 0),
('Developer', 'Developer', 'Developer', 'Developer@gmail.com', 
'Developer', 'Developer', 'female', 'Developer', 545642986, 4, 'May', 1903, '2017-12-20 16:56:11', '', 2);");
                