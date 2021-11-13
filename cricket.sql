-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 02:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `afghanistan_players_details`
--

CREATE TABLE `afghanistan_players_details` (
  `id` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `born` varchar(255) NOT NULL,
  `currentAge` int(50) NOT NULL,
  `playingRole` varchar(255) NOT NULL,
  `battingStyle` varchar(255) NOT NULL,
  `bowlingStyle` varchar(255) NOT NULL,
  `majorTeams` varchar(255) NOT NULL,
  `Mat` int(50) NOT NULL,
  `Inns` int(50) NOT NULL,
  `NO` int(50) NOT NULL,
  `Runs` int(50) NOT NULL,
  `HS` int(50) NOT NULL,
  `Ave` int(50) NOT NULL,
  `BF` int(50) NOT NULL,
  `SR` int(50) NOT NULL,
  `4s` int(50) NOT NULL,
  `6s` int(50) NOT NULL,
  `Ct` int(50) NOT NULL,
  `St` int(50) NOT NULL,
  `100` int(50) NOT NULL,
  `50` int(50) NOT NULL,
  `Balls` int(50) NOT NULL,
  `Wkts` int(50) NOT NULL,
  `BBI` int(50) NOT NULL,
  `BBM` int(50) NOT NULL,
  `Econ` int(255) NOT NULL,
  `4w` int(50) NOT NULL,
  `5w` int(50) NOT NULL,
  `10` int(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `afghanistan_players_details`
--

INSERT INTO `afghanistan_players_details` (`id`, `fullName`, `born`, `currentAge`, `playingRole`, `battingStyle`, `bowlingStyle`, `majorTeams`, `Mat`, `Inns`, `NO`, `Runs`, `HS`, `Ave`, `BF`, `SR`, `4s`, `6s`, `Ct`, `St`, `100`, `50`, `Balls`, `Wkts`, `BBI`, `BBM`, `Econ`, `4w`, `5w`, `10`, `file`, `country`) VALUES
(2, 'Hazratullah Zazai', 'Mar 23, 1998', 23, 'Batsman', 'Left Handed Bat', 'Left-arm orthodox', 'Afghanistan, Kabul Zwanan, Dhaka Dynamites, Maratha Arabians, Rajshahi Royals, Galle Gladiators, Peshawar Zalmi, Bangla Tigers', 20, 20, 1, 662, 162, 35, 448, 148, 57, 46, 2, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'hazratullah-zazai.png', 'Afghanistan'),
(3, 'Mohammad Shahzad', 'Jan 10, 1987', 34, 'WK-Batsman', 'Right Handed Bat', '-', 'Afghanistan, International World XI, Rangpur Riders, Paktia Panthers, Chittagong Vikings, Rajputs, Deccan Gladiators, Heat Stormers, Rangpur Rangers, The Chennai Braves', 69, 69, 3, 1961, 118, 30, 1464, 134, 217, 75, 30, 28, 1, 11, 0, 0, 0, 0, 0, 0, 0, 0, 'mohammad-shahzad.png', 'Afghanistan'),
(4, 'Rahmanullah Gurbaz', 'Nov 28, 2001', 19, 'WK-Batsman', 'Right Handed Bat', 'Right-arm medium', 'Afghanistan U19, Paktia Panthers, Afghanistan U23, Afghanistan, Khulna Tigers, Barbados Royals, Kandy Tuskers, Delhi Bulls, Multan Sultans, St Kitts and Nevis Patriots', 18, 18, 0, 531, 87, 30, 381, 139, 39, 35, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'rahmatullah-gurbaz.jpg', 'Afghanistan'),
(5, ' Gulbadin Naib', 'Mar 16, 1991', 30, 'Bowling Allrounder', 'Right Handed Bat', 'Right-arm medium', 'Afghanistan, Balkh Legends, Sylhet Sixers, Pakhtoons, Delhi Bulls', 52, 42, 13, 559, 56, 19, 456, 123, 42, 25, 20, 0, 0, 1, 505, 20, 2, 2, 8, 0, 0, 0, 'gulbadin-naib.png', 'Afghanistan'),
(6, ' Najibullah Zadran', 'Feb 28, 1993', 28, 'Batsman', 'Left Handed Bat', 'Right-arm offbreak', 'Afghanistan, Afghanistan A, Chittagong Vikings, Montreal Tigers, Kandahar Knights, Maratha Arabians, Afghanistan U23, Winnipeg Hawks, Saint Lucia Kings, Khulna Tigers, Team Abu Dhabi, Karachi Kings, The Chennai Braves', 68, 59, 22, 1232, 73, 33, 872, 141, 84, 65, 31, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 'najibullah-zadran.png', 'Afghanistan'),
(7, 'Mohammad Nabi', 'Jan 01, 1985', 36, 'Bowling Allrounder', 'Right Handed Bat', 'Right-arm offbreak', 'Afghanistan, Sylhet Royals, Rangpur Riders, Quetta Gladiators, Chittagong Vikings, Sunrisers Hyderabad, St Kitts and Nevis Patriots, Comilla Victorians, Melbourne Renegades, Leicestershire, Balkh Legends, Bengal Tigers, Kent, Delhi Bulls, Rangpur Rangers,', 85, 79, 14, 1501, 89, 23, 1050, 143, 98, 85, 47, 0, 0, 4, 1678, 73, 4, 4, 7, 0, 0, 0, 'mohammad-nabi.png', 'Afghanistan'),
(8, 'Karim Janat', 'Aug 11, 1998', 23, 'Bowler', 'Right Handed Bat', 'Right-arm medium', 'Afghanistan U19, Afghanistan, Afghanistan A, Kandahar Knights, Rajputs, Afghanistan U23, Northern Warriors, Bangla Tigers', 32, 21, 3, 327, 53, 18, 278, 118, 24, 15, 6, 0, 0, 1, 607, 30, 5, 5, 8, 1, 1, 0, 'karim-jannat1.png', 'Afghanistan'),
(9, 'Rashid Khan', 'Sep 20, 1998', 23, 'Bowler', 'Right Handed Bat', 'Right-arm legbreak', 'Afghanistan, Afghanistan U19, Comilla Victorians, Sunrisers Hyderabad, Guyana Amazon Warriors, Adelaide Strikers, Quetta Gladiators, World XI, Sussex, Kabul Zwanan, Durban Heat, Maratha Arabians, Rotterdam Rhinos, Asia XI, Barbados Royals, Lahore Qalandar', 56, 28, 13, 182, 33, 12, 147, 124, 11, 11, 20, 0, 0, 0, 1268, 103, 5, 5, 6, 2, 2, 0, 'rashid-khan.png', 'Afghanistan'),
(10, 'Sharafuddin Ashraf', 'Jan 10, 1995', 26, 'Bowling Allrounder', 'Right Handed Bat', 'Left-arm orthodox', 'Afghanistan, Afghanistan U19, Afghanistan A, Paktia Panthers, Pakhtoons, Deccan Gladiators', 10, 6, 2, 30, 18, 8, 33, 91, 1, 1, 1, 0, 0, 0, 174, 5, 3, 3, 8, 0, 0, 0, 'sharafuddin-ashraf.jpg', 'Afghanistan'),
(11, 'Naveen-ul-Haq', 'Sep 23, 1999', 22, 'Bowler', 'Right Handed Bat', 'Right-arm fast-medium', 'Afghanistan U19, Afghanistan, Nangarhar Leopards, Sylhet Thunder, Guyana Amazon Warriors, Kandy Tuskers, Team Abu Dhabi, Leicestershire', 13, 2, 1, 7, 5, 7, 7, 100, 1, 0, 2, 0, 0, 0, 258, 18, 3, 3, 8, 0, 0, 0, 'naveen-ul-haq1.jpg', 'Afghanistan'),
(12, 'Hamid Hassan', 'Jun 01, 1987', 34, 'Bowler', 'Right Handed Bat', 'Right-arm fast', 'Afghanistan, Barisal Burners, Essex, Deccan Gladiators', 25, 9, 6, 50, 22, 17, 46, 109, 3, 2, 3, 0, 0, 0, 544, 35, 4, 4, 6, 0, 0, 0, 'hamid-hassan.png', 'Afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `file`) VALUES
(4, 'India', 'img.png'),
(5, 'Pakistan', 'Pakistan_Flag.png'),
(6, 'England', 'England_Flag.png'),
(7, 'Ireland', 'Ireland_Flag.png'),
(8, 'Bangladesh', 'Bangladesh_Flag.png'),
(9, 'Australia', 'Australia_Flag.png'),
(10, 'Afghanistan', 'Afghanistan_Flag.png'),
(11, 'Namibia', 'Namibia_Flag.png'),
(12, 'Netherlands', 'Netherlands_Flag.png'),
(13, 'New Zealand', 'New_Zealand_flag.png'),
(14, 'Oman', 'Oman_Flag.png'),
(15, 'Papua New Guinea', 'Papua_New_Guinea_Flag.png'),
(16, 'Scotland', 'Scotland_Flag.png'),
(17, 'South Africa', 'South_Africa_Flag.png'),
(18, 'Sri Lanka', 'Sri_Lanka_Flag.png'),
(19, 'West Indies', 'West_indies_Flag.png');

-- --------------------------------------------------------

--
-- Table structure for table `india_players_details`
--

CREATE TABLE `india_players_details` (
  `id` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `born` varchar(255) NOT NULL,
  `currentAge` int(50) NOT NULL,
  `playingRole` varchar(255) NOT NULL,
  `battingStyle` varchar(255) NOT NULL,
  `bowlingStyle` varchar(255) NOT NULL,
  `majorTeams` varchar(255) NOT NULL,
  `Mat` int(50) NOT NULL,
  `Inns` int(50) NOT NULL,
  `NO` int(50) NOT NULL,
  `Runs` int(50) NOT NULL,
  `HS` int(50) NOT NULL,
  `Ave` int(50) NOT NULL,
  `BF` int(50) NOT NULL,
  `SR` int(50) NOT NULL,
  `4s` int(50) NOT NULL,
  `6s` int(50) NOT NULL,
  `Ct` int(50) NOT NULL,
  `St` int(50) NOT NULL,
  `100` int(50) NOT NULL,
  `50` int(50) NOT NULL,
  `Balls` int(50) NOT NULL,
  `Wkts` int(50) NOT NULL,
  `BBI` int(50) NOT NULL,
  `BBM` int(50) NOT NULL,
  `Econ` int(50) NOT NULL,
  `4w` int(50) NOT NULL,
  `5w` int(50) NOT NULL,
  `10` int(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `india_players_details`
--

INSERT INTO `india_players_details` (`id`, `fullName`, `born`, `currentAge`, `playingRole`, `battingStyle`, `bowlingStyle`, `majorTeams`, `Mat`, `Inns`, `NO`, `Runs`, `HS`, `Ave`, `BF`, `SR`, `4s`, `6s`, `Ct`, `St`, `100`, `50`, `Balls`, `Wkts`, `BBI`, `BBM`, `Econ`, `4w`, `5w`, `10`, `file`, `country`) VALUES
(4, 'Virat Kohli', 'Nov 05, 1988', 33, 'Batsman', 'Right Handed Bat', 'Right-arm medium', 'India, Delhi, India Red, India U19, Royal Challengers Bangalore, Board Presidents XI, North Zone, Indians, India A, Asia XI', 94, 87, 25, 3227, 94, 52, 2340, 138, 290, 91, 42, 0, 0, 29, 146, 4, 1, 1, 8, 0, 0, 0, 'virat-kohli.png', 'India'),
(5, ' KL Rahul', 'Apr 18, 1992', 29, 'WK-Batsman', 'Right Handed Bat', '--', 'India, Karnataka, East Zone, South Zone, Royal Challengers Bangalore, India A, Sunrisers Hyderabad, Indians, Hubli Tigers, Indian Board Presidents XI, Bellary Tuskers, Punjab Kings, Asia XI', 53, 50, 7, 1751, 110, 41, 1222, 143, 157, 70, 19, 1, 2, 15, 0, 0, 0, 0, 0, 0, 0, 0, 'kl-rahul.png', 'India'),
(6, 'Rohit Sharma', '30 April, 1987', 34, 'Batsman', 'Right Handed Bat', 'Right-arm offbreak', 'India, Deccan Chargers, India A, India Green, India U19, Mumbai, Mumbai Indians, Indians, India Blue, Board Presidents XI', 116, 108, 14, 3038, 118, 32, 2176, 140, 273, 140, 0, 0, 4, 24, 68, 1, 1, 1, 10, 0, 0, 0, 'rohit-sharma.png', 'India'),
(7, 'Rishabh Pant', '4 October, 1997', 24, 'WK-Batsman', 'Left Handed Bat', '--', 'Delhi, India U19, Delhi Capitals, India, India A, North Zone, India Blue, India Red, Indian Board Presidents XI, Asia XI, Indians', 37, 32, 6, 590, 65, 23, 477, 124, 42, 26, 10, 6, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'rishabh-pant.png', 'India'),
(8, 'Hardik Pandya', '11 October, 1993', 28, 'Batting Allrounder', 'Right Handed Bat', 'Right-arm fast-medium', 'India, Baroda, Mumbai Indians, India A, India AT20, Indian Board Presidents XI, World XI', 54, 36, 9, 553, 42, 20, 378, 146, 34, 32, 34, 0, 0, 0, 839, 42, 4, 4, 8, 0, 0, 0, 'hardik-pandya.png', 'India'),
(9, 'Suryakumar Yadav', 'Sep 14, 1990', 31, 'Batsman', 'Right Handed Bat', 'Right-arm offbreak', 'Mumbai Indians, Mumbai, India A, Mumbai A, West Zone, Kolkata Knight Riders, India AT20, India B, India Blue, India Red, India C, Triumphs Knights MNE, India', 8, 6, 2, 181, 57, 45, 111, 163, 19, 9, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'suryakumar-yadav.png', 'India'),
(10, 'Ravindra Jadeja', 'Dec 06, 1988', 32, 'Bowling Allrounder', 'Left Handed Bat', 'Left-arm orthodox', 'India, India U19, Rajasthan Royals, Saurashtra, Board Presidents XI, Kochi Tuskers Kerala, Chennai Super Kings, India B, Indians, India A, Gujarat Lions, India Blue, Rest of India', 55, 26, 11, 256, 44, 17, 225, 114, 15, 7, 22, 0, 0, 0, 1075, 46, 3, 3, 7, 0, 0, 0, 'ravindra-jadeja.png', 'India'),
(11, 'Ravichandran Ashwin', 'Sep 17, 1986', 35, 'Bowling Allrounder', 'Right Handed Bat', 'Right-arm offbreak', 'India, Board Presidents XI, Chennai Super Kings, Tamil Nadu, Indians, Rising Pune Supergiant, Dindigul Dragons, Worcestershire, Punjab Kings, India A, Rest of India, Nottinghamshire, Delhi Capitals, Yorkshire, Surrey', 49, 11, 7, 123, 31, 31, 115, 107, 14, 1, 9, 0, 0, 0, 1098, 58, 4, 4, 7, 0, 0, 0, 'ravichandran-ashwin.png', 'India'),
(12, 'Shardul Thakur', 'Oct 16, 1991', 30, 'Bowler', 'Right Handed Bat', 'Right-arm fast-medium', 'India, Tata Sports Club, Mumbai A, Mumbai, Punjab Kings, West Zone, Rest of India, India A, Indian Board Presidents XI, India B, Mumbai Cricket Association XI, India Blue, Rising Pune Supergiant, Chennai Super Kings, Eagle Thane Strikers, Board Presidents', 23, 6, 3, 69, 22, 23, 38, 182, 5, 4, 6, 0, 0, 0, 482, 31, 4, 4, 9, 0, 0, 0, 'shardul-thakur.png', 'India'),
(13, 'Mohammed Shami', 'Sep 03, 1990', 31, 'Bowler', 'Right Handed Bat', 'Right-arm fast-medium', 'Kolkata Knight Riders, India A, Bengal, India, Rest of India, Board Presidents XI, East Zone, Indians, Delhi Capitals, Mohun Bagan, World XI, Punjab Kings, Asia XI', 17, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 357, 18, 3, 3, 10, 0, 0, 0, 'mohammed-shami.png', 'India'),
(14, 'Jasprit Bumrah', 'Dec 06, 1993', 27, 'Bowler', 'Right Handed Bat', 'Right-arm fast', 'India, Mumbai Indians, Gujarat, West Zone, India A, India Green, Indians', 54, 6, 4, 8, 7, 4, 13, 62, 1, 0, 7, 0, 0, 0, 1187, 66, 3, 3, 7, 0, 0, 0, 'jasprit-bumrah.png', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `id` int(10) NOT NULL,
  `teams` varchar(255) NOT NULL,
  `winner` int(10) NOT NULL,
  `looser` int(10) NOT NULL,
  `man_of_match` varchar(255) NOT NULL,
  `bowler_of_match` varchar(255) NOT NULL,
  `best_fielder` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_details`
--

INSERT INTO `match_details` (`id`, `teams`, `winner`, `looser`, `man_of_match`, `bowler_of_match`, `best_fielder`) VALUES
(1, 'India', 3, 2, 'Rohit Sharma', 'Jasprit Bumrah', 'Risabh Pant'),
(2, 'Bangladesh', 0, 5, 'Tamim Iqbal', 'Soumya Sarkar', 'Sabbir Rahman'),
(3, 'Pakistan', 5, 0, 'Shoaib Malik', 'Shaheen Afridi', 'Sarfaraz Ahmed'),
(4, 'New Zealand', 4, 1, 'Martin Guptill', 'Trent Boult', 'Tom Latham'),
(5, 'Scotland', 0, 5, 'Michael Jones', 'Safyaan Sharif', 'Mark Watt'),
(6, 'West Indies', 1, 4, ' Darren Bravo', ' Sheldon Cottrell', 'Andre Russell'),
(7, 'Sri Lanka', 2, 3, ' Kusal Mendis', ' Lasith Malinga', ' Angelo Mathews'),
(8, 'South Africa', 4, 1, ' David Miller', ' Imran Tahir', ' Chris Morris'),
(9, 'Afghanistan', 2, 3, ' Asghar Afghan', ' Hamid Hassan', ' Gulbadin Naib'),
(10, 'Namibia', 2, 1, 'Riaan Walters', ' Jan-Berrie Burger', ' Sarel Burger'),
(11, 'Ireland', 1, 2, ' Tyrone Kane', ' Peter Chase', 'Gary Wilson'),
(12, 'Netherlands', 0, 3, ' Tim Gruijters', 'Ahsan Malik', ' Peter Borren'),
(13, 'Australia', 4, 1, ' Aaron Finch', ' Pat Cummins', ' Glenn Maxwell');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_score`
--

CREATE TABLE `tournament_score` (
  `id` int(10) NOT NULL,
  `teams` varchar(255) NOT NULL,
  `play` int(20) NOT NULL,
  `win` int(20) NOT NULL,
  `loose` int(20) NOT NULL,
  `tie` int(20) NOT NULL,
  `draw` int(20) NOT NULL,
  `NR` int(20) NOT NULL,
  `PCT` float NOT NULL,
  `PTS` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament_score`
--

INSERT INTO `tournament_score` (`id`, `teams`, `play`, `win`, `loose`, `tie`, `draw`, `NR`, `PCT`, `PTS`) VALUES
(1, 'India', 5, 3, 2, 0, 0, 0, 42.2, 6),
(2, 'Bangladesh', 5, 0, 5, 0, 0, 0, 12.5, 0),
(3, 'Afghanistan', 5, 2, 3, 0, 0, 0, 22.7, 4),
(4, 'New Zealand', 5, 4, 1, 0, 0, 0, 72.6, 8),
(5, 'South Africa', 5, 4, 1, 0, 0, 0, 72.6, 8),
(6, 'Sri Lanka', 5, 2, 3, 0, 0, 0, 22.5, 4),
(7, 'Australia', 5, 4, 1, 0, 0, 0, 72.6, 8),
(8, 'West Indies', 5, 1, 4, 0, 0, 0, 22.5, 2),
(9, 'Pakistan', 5, 5, 0, 0, 0, 0, 82.6, 10),
(10, 'Namibia', 5, 1, 4, 0, 0, 0, 22.5, 2),
(11, 'Scotland', 5, 0, 5, 0, 0, 0, 5.2, 0),
(12, 'Ireland', 3, 1, 2, 0, 0, 0, 22.5, 2),
(13, 'Netherlands', 3, 0, 3, 0, 0, 0, 2.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(10) NOT NULL,
  `match` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `results` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `match`, `venue`, `results`) VALUES
(1, 'India vs Afghanistan', 'Sheikh Zayed Stadium', 'IND won by 66 runs'),
(2, 'Pakistan vs Scotland', 'Sharjah Cricket Stadium', 'PAK won by 72 runs'),
(3, 'Afghanistan vs New Zealand', 'Sheikh Zayed Stadium', 'NZ won by 8 wickets (11 balls left)'),
(4, 'Namibia vs India', 'Dubai International Stadium', 'IND won by 9 wickets (28 balls left)'),
(5, 'England vs New Zealand', 'Sheikh Zayed Stadium', 'NZ won by 5 wickets (6 balls left)'),
(6, 'Pakistan vs Australia', 'Dubai International Stadium', 'AUS won by 5 wickets (6 balls left)'),
(7, 'New Zealand vs Australia', 'Dubai International Stadium', 'AUS won by 5 wickets (6 balls left)'),
(8, 'South Africa vs England', 'Sharjah Cricket Stadium', 'SA won by 10 runs'),
(9, 'Ireland vs Namibia', 'Sharjah Cricket Stadium', 'NAM won by 8 wickets (9 balls left)'),
(10, 'West Indies vs Australia', 'Sheikh Zayed Stadium', 'AUS won by 8 wickets (22 balls left)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afghanistan_players_details`
--
ALTER TABLE `afghanistan_players_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `india_players_details`
--
ALTER TABLE `india_players_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament_score`
--
ALTER TABLE `tournament_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afghanistan_players_details`
--
ALTER TABLE `afghanistan_players_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `india_players_details`
--
ALTER TABLE `india_players_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `match_details`
--
ALTER TABLE `match_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tournament_score`
--
ALTER TABLE `tournament_score`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
