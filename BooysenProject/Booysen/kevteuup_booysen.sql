-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2018 at 11:12 AM
-- Server version: 5.6.40
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kevteuup_booysen`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `coordinates` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `tel`, `email`, `coordinates`) VALUES
(1, '933 Louis Trichardt Ave, Rietfontein, PTA, 0084', ' (012) 331 4668', 'admin@pjbelectrical.co.za\r\njohann@pjbelectrical.co.za\r\naccounts@pjbelectrical.co.za', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.0863771108684!2d28.225519315019824!3d-25.701563983664112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebfdf3e4840e48d%3A0xf1dd2f53d77a6b4c!2s933+Louis+Trichardt+St%2C+Rietfontein%2C+Pretoria%2C+0084!5e0!3m2!1sen!2sza!4v1527686269100');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(150) NOT NULL,
  `description` varchar(350) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `date_completed` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `cost`, `date_completed`, `image`) VALUES
(9, 'Steyn City', '500 houses', '5.3mil', '2014', 'kevtex.png'),
(10, 'Loop', '1545', '2.3 Mil', '2018', 'cheap-wedding-photoations-custom-with-creativity-attraktiv-perfectly-design-interesting.jpg'),
(11, 'Mall @ Mfula', 'Mall @ Mfula is situated in Piet Retief.  This project was one of our biggest and most proud achievements.  \r\n', 'R18 17 1 mil', '2016', 'IMG-20170216-WA0014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Lethicia Nel', 'admin@pjbelectrical.co.za', 'Admin@Booysen'),
(2, 'Lance tshikota', 'lancet@lancetshikota.co.za', '#Halle16');

-- --------------------------------------------------------

--
-- Table structure for table `web_content`
--

CREATE TABLE `web_content` (
  `id` int(11) NOT NULL,
  `welcome` mediumtext NOT NULL,
  `about_us` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_content`
--

INSERT INTO `web_content` (`id`, `welcome`, `about_us`) VALUES
(1, 'PJ Booysen Electrical Projects (PTY) Ltd. is committed to providing a personalised service based on professionalism, integrity and relationship building.\r\n\r\nAt PJ Booysen Electrical (PTY) Ltd. our values truly influence how we delivery our services.  We are committed to principles of business ethics and lawful conduct and maintaining a high standard of business integrity.  \r\n\r\nWe continuously strive to:\r\n\r\n\r\n* Remain committed to excellence in everything we do.\r\n* Upload honesty and integrity with is treated fairly and with respect.\r\n*  Ensure everyone we interact with is treated fairly and with respect.\r\n*  Believe in developing and training our staff to see them grow professionally.\r\n* Work hard, achieve time goals, deliver quality workmanship, and service value.\r\n*Deliver best practice professional services and operational efficiency.\r\n* Consistently remain service orientated while pursuing opportunities of growth.\r\n \r\n', 'PJ Booysen Electrical (PTY)LTD.  Was established in 2013.  The company is an extension if a family tradition of providing quality electrical services to clients for more than 28 years.  We understand the impact and the importance of providing our clients with a choice of solutions that are cost effective , safe and functional in accordance with client objectives and needs.  We invest our broad knowledge and wealth of experience gained while managing and delivering professional electrical services on major contracts within the family business for more than 15 years into each project.\r\n\r\nProjects managed or worked on include high value projects such as retail centres, office blocks, Malls, Retail outlets, old ages homes, garages, workshops municipal offices, banking institutions and new and existing residential structures.  \r\nWe anchor our service with quality, experience and registered  workers, and when applicable, sub-contractors.  Our services are supported by a team of gradated office support staff which contribute to delivering a seamless service to our clients.\r\n\r\nOur comprehensive range of services include:\r\n\r\n* Building alterations, upgrading of services and installations\r\n* Lighting including commercial, enhancing, functional and security lighting\r\n* High voltage reticulation systems and substations\r\n* Suburban estates - installing of underground distribution systems\r\n* Remote area power supplies\r\n\r\n* Switch gears & transformers\r\n* Standby generators\r\n* Establishing electrical contracting infrastructure systems\r\n* Design and supply of electrical systems\r\n* Reticulation of cables to supply electricity to new and existing housing developments\r\n* Design and supply of all architectural specifications for electrical services\r\n* House, flat or building alterations, electrical installations, maintenance & fault finding\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_content`
--
ALTER TABLE `web_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_content`
--
ALTER TABLE `web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
