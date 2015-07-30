-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 10:04 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mashproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributors`
--

CREATE TABLE IF NOT EXISTS `contributors` (
`con_id` int(10) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_role` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `contributors`
--

INSERT INTO `contributors` (`con_id`, `con_name`, `con_role`) VALUES
(1, 'Anuraag Awasthi', 'Crowd funding Campaign'),
(2, 'Bhupinder Kaur', 'Crowd funding Campaign'),
(4, 'Gurvinder Sareen', 'Crowd funding Campaign'),
(5, 'Shubhra Gupta', 'Crowd funding Campaign'),
(6, 'Ankush Pandey', 'Crowd funding Campaign'),
(7, 'Sanchit Malik', 'Crowd funding Campaign'),
(8, 'Maninder Pal Singh', 'Crowd funding Campaign'),
(9, 'Rajinder k trewn', 'Crowd funding Campaign'),
(10, 'Kamal Prakash Seth', 'Crowd funding Campaign'),
(11, 'Utkarsh', 'Crowd funding Campaign'),
(12, 'Jitendra Jadwani', 'Crowd funding Campaign'),
(13, 'V Ananth', 'Crowd funding Campaign'),
(14, 'Muammer Derebasi', 'Crowd funding Campaign'),
(15, 'Gunjan Jadwani', 'Legal support'),
(16, 'Siddhant Gupta', 'Design Support'),
(17, 'Maalvika Verma', 'Design Support'),
(18, 'Vaibhav Jain', 'Crowd Funding Video'),
(19, 'Android techies', 'NGO Connect Development');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`event_id` int(10) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_thumb` varchar(50) NOT NULL,
  `event_link` varchar(100) DEFAULT NULL,
  `event_content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_thumb`, `event_link`, `event_content`) VALUES
(51, 'OPEN Dialogue', 'images/work/open-dialogue.jpg', 'https://www.facebook.com/events/677576728985782/', 'MASH project organized its first on ground event, OPEN DIALOGUE in collaboration with Human Circle, an organisation which aims to bring together like-minded people driven by the motive of bringing about a change. The event, being an open forum discussion, aimed to bring students, social change makers and organisations to discuss, deliberate and find solutions to issues close to their hearts. After a very energetic and brainstorming session of Change makers, thinkers and revolutionaries gathered under a single roof, ready with their super ideas and transforming plans, we finally bid our good-byes with new friends, new ideas, the will to change, the hope to begin!'),
(52, 'HACK day ', 'images/work/hack.jpg', 'https://www.facebook.com/events/678482125533776/', 'MASH Project held it''s first Hack-Day on March 29, 2014 to take-off it''s Mobile Application - NGO Connect. An incredible opportunity that not only brought developers and programmers under one roof but also provided a platform wherein the collective effort set the foundation of the App. NGO Connect was developed with the motive of connecting NGO''s with people to serve the society by encouraging volunteer participation with complete knowledge of the various organisation working in the field of development and empowerment.'),
(53, '#DoWhatYouLove #MASHCamp', 'images/work/dowhatyoulove_mashcamp.jpg', 'https://www.facebook.com/events/1157413600951843/', '<br><br>\r\n<h3><a href="<?php echo base_url(); ?>pages/Leadership_Camp/Leadership_Camp" >\r\nKnow more </a>\r\n</h3>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE IF NOT EXISTS `press` (
`press_id` int(10) NOT NULL,
  `press_title` varchar(500) NOT NULL,
  `press_thumb` varchar(100) NOT NULL,
  `press_content` text NOT NULL,
  `press_link` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`press_id`, `press_title`, `press_thumb`, `press_content`, `press_link`) VALUES
(1, 'http://www.thealternative.in/wp-content/themes/sattva/images/logo.png', '', 'They say, the best encouragement for an initiative to prosper, is it being noticed and appreciated.\r\nWith immense pleasure, MASH Project shares with you all its own efforts of being noticed.', 'http://www.thealternative.in/lifestyle/the-mash-pr'),
(2, 'http://unesco-ci.org/youthmobile/wp-content/uploads/2014/03/YM_Logo_v3-011d2.png', 'images/press/youthmobile.jpg', 'The 1st YouthMobile Experts Meeting was held at UNESCO HQ on 19-20 March 2014. <br>\r\nUNESCO has conducted a global search for the best, existing mobile applications training initiatives with openly-licensed training materials, and invited a selected group of training providers and app development tools makers.<br>\r\n\r\nMASH Project has been the only organisation to be selected from India and among 16 organisations selected from all over the world.<br>\r\n\r\nUNESCO seeks to extensively promote very high-quality, multi-lingual, comprehensive training materials for developing mobile apps. Openly-licensed, the training materials identified will allow for adaptations including translation, localization, and innovations. The YouthMobile experts meeting is part of UNESCO’s contribution to the 2014 celebrations for Open Education Week. ', 'http://youthmobile.org');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`project_id` int(10) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_content` text NOT NULL,
  `project_thumb` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_title`, `project_content`, `project_thumb`) VALUES
(1, 'NGO Connect', ' Our Mobile application, NGO Connect aims to connect Non Govenmental Organisations to prospective volunteers. With a database on NGOs classified on the basis of areas or work, the app has two sections, "I Want" and "I Have". The "I HAVE" section help the NGOs to post their volunteer requirements by setting up their profiles on the app and provides a simple platform for volunteers to apply for the various positions. The "I WANT" section aims to connect users to NGOs operating in specific regions. Appropriate filters give them a detailed insight into the kind of work they are engaged in and help them to apply in fields suitable for them.\r\n            </p>\r\n              <p><strong>App status:</strong> Developmental stage', 'images/work/ngo-connect.jpg'),
(2, 'INFO MDG', ' INFO MDG is one of the first initiatives MASH Project took in the Tech Development sector. It is centered around the 8 Millennium Development Goals that the United Nations designed, all to be achieved by the target date 2015. These goals are chosen in context to the major issues that surround the world today, like educational levels, degrading health levels etc. INFO MDG, with its simple interface, provides its users with a thorough understanding of these goals and gives them an insight into the steps that have been taken by far and lists out various pointers that surround the 8 goals. It is purely a knowledge-sharing application.\r\n            </p>\r\n                            <p><strong>App status:</strong> Developmental stage', 'images/work/INFO_MDG_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`team_id` int(1) NOT NULL,
  `team_thumb` varchar(50) DEFAULT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_designation` varchar(50) DEFAULT NULL,
  `team_status` varchar(100) NOT NULL,
  `team_desc` text,
  `team_link` varchar(150) DEFAULT NULL,
  `team_doj` date DEFAULT NULL,
  `team_doc` date DEFAULT NULL,
  `team_css` varchar(200) NOT NULL,
  `team_br` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_thumb`, `team_name`, `team_designation`, `team_status`, `team_desc`, `team_link`, `team_doj`, `team_doc`, `team_css`, `team_br`) VALUES
(1, 'images/team/Mayank-Bhola.jpg', 'Mayank Bhola', 'Advisor<br>Development<br>', 'present', 'Developer<br>Epicure<br>Gadget-freak<br>Foodie<br>Sarcastic being', 'http://about.me/bholamayank', NULL, NULL, 'mayank', 1),
(2, 'images/team/Aashish-Beergi.jpg', 'Aashish Beergi', 'Co-founder<br>', 'present', 'Changemaker<br>Entrepreneur<br>Jet-Spotter<br>Travel Enthusiast<br>\r\n                        Love Tennis &amp; Reading Autobiographies', 'http://www.about.me/abeergi', NULL, NULL, 'aashish', 0),
(3, 'images/team/Kartik-Jain.jpg', 'Kartik Jain', 'Co-founder', 'present', 'Entrepreneur<br>Engineer<br>Social Activist<br>Tech Freak<br>Insanely Awesome<br>', 'http://about.me/kartik.jain', NULL, NULL, 'kartik', 1),
(4, 'images/team/Mehna-Jain.jpg', 'Mehna Jain', 'Head<br>HR<br>', 'present', 'Developer<br>Epicure<br>Gadget-freak<br>Foodie<br>Sarcastic being', 'http://about.me/mehna.jain.3', NULL, NULL, 'mehna', 0),
(5, 'images/team/Sheerin.jpg', 'Sheerin Naseem', 'Head<br>Social Media<br>', 'present', 'Vivacious Core<br>Self Reliant<br>Animal lover<br>Art  enthusiast<br>Self driven', 'http://about.me/sheerinaseem', NULL, NULL, 'sheerin', 0),
(6, 'images/team/Shivani-Tiwari.jpg', 'Shivani Tiwari', 'Head<br>Finance<br', 'present', 'optimistic <br>sportsperson<br>aspiring<br>entrepreneur<br>passionate', 'http://about.me/shivani', NULL, NULL, 'shivani', 0),
(7, 'images/team/Gagandeep-Kaur.jpg', 'Gagandeep Kaur', '<p>Head<br>Content<br>', 'present', 'Dedicated<br>Passionate<br>Creative<br>Vivacious Reader<br>Adventurer', 'http://about.me/gagandeepkaur', NULL, NULL, 'gagandeep', 0),
(8, 'images/team/Harshita-Srivastava.jpg', 'Harshita Srivastava', 'Head<br>Admin<br>', 'present', 'Keen Educator<br>Quick Learner<br>Creator<br>Innovator<br>Easily Motivated', 'http://about.me/harshita_srivastava', NULL, NULL, 'harshita', 1),
(9, 'images/team/Sachin-Srinivas.jpg', 'Sachin Srinivas', 'Coordinator<br>Content<br>', 'present', 'Happy go lucky<br>Hardcore Metal fan<br>Avid bird watcher <br>Dependable<br>Social butterfly', 'http://about.me/sachu_rocks001', NULL, NULL, 'sachin', 0),
(10, 'images/team/Shivangi-Gupta.jpg', 'Shivangi Gupta', 'Coordinator<br>Research<br>', 'present', 'Dedicated<br>Hard working<br>Bubbly<br>Cheerful<br>Amiable', 'http://about.me/guptashivangi3012', NULL, NULL, 'shivangi', 0),
(11, 'images/team/Shreeya-Bhutani.jpg', 'Shreeya Bhutani', 'Coordinator<br>Research', 'present', 'Fun <br>love dancing <br>couch potato <br>hard working <br>helpful', 'http://about.me/shreeyabhutani', NULL, NULL, 'shreeya', 0),
(12, 'images/team/Smriti-Mehra.jpg', 'Smriti Mehra', 'Coordinator<br>Research<br>', 'present', 'Economics Enthusiast<br>Learner<br>Foodie<br>Optimist<br>Happy-go-lucky', 'http://about.me/mehrasmriti', NULL, NULL, 'smriti', 0),
(13, 'images/team/Amandeep-Singh.jpg', 'Amandeep Singh', 'Coordinator<br>Development', 'present', 'Keen learner<br>Keen explorer<br>Adventurous <br>pragmatic<br>meticulous', 'http://about.me/ads93', NULL, NULL, 'amandeep', 0),
(14, 'images/team/Namrata-Gupta.jpg', '>Namrata Gupta', 'Coordinator<br>Development<br>', 'present', 'Keen Learner<br>Tactful<br>Inexplicably Explicit<br>Undoubtedly Endearing<br>Food Freak\r\n                        ', 'http://about.me/nams05', NULL, NULL, 'namrata', 0),
(15, 'images/team/Pranit-Singhal.jpg', 'Pranit Singhal', 'Coordinator<br>Design<br>', 'present', 'Travel enthusiast<br> Entrepreneur<br> Ambitious<br> Gizmo freak<br> Art lover', 'http://about.me/pranitsinghal', NULL, NULL, 'pranit', 0),
(16, 'images/team/Sakshi-Mahajan.jpg', 'Sakshi Mahajan', 'Coordinator<br>Finance<br>', 'present', 'Hardworking<br>Trustworthy<br>Ambitious<br>Passionate <br>Caring', 'http://about.me/sakshi_mahajan', NULL, NULL, 'sakshi', 0),
(17, 'images/team/Aakriti-Saxena.jpg', 'Aakriti Saxena', NULL, 'present', NULL, NULL, NULL, NULL, 'aakriti', 0),
(18, 'images/team/Rishika-sharma.jpg', 'Rishika sharma', NULL, 'present', NULL, NULL, NULL, NULL, 'rishika', 0),
(19, 'images/team/Tanvi-Garg.jpg', 'Tanvi Garg', NULL, 'present', 'Hard working<br>Voracious reader<br>Adventurous<br>Sensitive', NULL, NULL, NULL, 'tanvi', 0),
(20, 'images/team/Tripti-Lal.jpg', 'Tripti Lal', NULL, 'present', 'Very social<br>Voracious reader<br>Economics lover<br>Passionate about writing (hope to finish my book soon!)<br>Big foodie (love to eat food, not to experiment with it!)\r\n  ', NULL, NULL, NULL, 'tripti', 0),
(21, 'images/team/Amanat-Khullar.jpg', 'Amanat Khullar', NULL, 'past', 'Traveler<br>Writer<br>Foodie<br>Wanderlust<br>Dreamer', 'http://about.me/khullar.amanat', NULL, NULL, 'amanat', 0),
(22, 'images/team/Misha-Dwivedi.jpg', 'Misha Dwivedi', NULL, 'past', 'Reader<br>Transient<br>Sarcastic<br>Filmy<br>Anomaly(lol)', NULL, NULL, NULL, 'misha', 0),
(23, 'images/team/Siddhant-Gupta.jpg', 'Siddhant Gupta', NULL, 'past', 'Enthusiast<br>Committed<br>Technologist<br>& Design for Change', NULL, NULL, NULL, 'siddhant', 0),
(24, 'images/team/Varsha-Sivaram.jpg', 'Varsha Sivaram', NULL, 'past', 'LSE aspirant<br>Budding writer<br>Believer<br>Learner<br>Thinker ', 'http://about.me/varsha.sivaram', NULL, NULL, 'varsha', 0),
(25, 'images/team/Shubham-Jain.jpg', 'Shubham Jain', NULL, 'past', 'Ambitious<br>Procrastinator<br>Mysterious<br>Inquisitive<br>Versatile', 'http://about.me/cyber.shubham', NULL, NULL, 'shubham', 0),
(26, 'images/team/Ishan-Sain.jpg', 'Ishan Sain', NULL, 'past', 'Audiophile<br>Art enthusiast <br>Movie Fanatic <br>Strums guitar <br>Total Procrastinator\r\n ', 'http://about.me/ishansain', NULL, NULL, 'ishan', 0),
(27, 'images/team/Faiza-Hasan.jpg', 'Faiza Hasan', NULL, 'past', 'Cinephile<br>ardent reader<br>food addict<br>headstrong<br>righteous', 'http://about.me/faizahasan', NULL, NULL, 'faiza', 0),
(28, 'images/team/Isha-Arora.jpg', 'Isha Arora', NULL, 'past', 'Reading-freak<br>keen explorer<br>dynamic<br>wanderer<br>great talker', 'http://about.me/ishaarora', NULL, NULL, 'isha', 0),
(29, 'images/team/Shradha-Jain.jpg', 'Shradha Jain', NULL, 'past', 'artist<br>nerd<br>exuberant<br>bibliophile<br>conscientious\r\n ', 'http://about.me/shradha_jain', NULL, NULL, 'shradha', 0),
(30, 'images/team/Anish-Singh.jpg', 'Anish Singh', NULL, 'past', 'Adorable <br>Not Innocent<br> Simply Honest', 'http://about.me/singhanish', NULL, NULL, 'anish', 0),
(31, 'images/team/Divya-Nakra.jpg', 'Divya Nakra', NULL, 'past', 'Hardworking<br>Sincere<br>Inquisitive<br>Amiable<br>Vivacious', 'https://about.me/divyanakra100', NULL, NULL, 'divya-nakra', 0),
(32, 'images/team/Aakriti-Saxena.jpg', 'Aakriti Saxena', NULL, 'present', NULL, NULL, NULL, NULL, 'aakriti', 0),
(33, 'images/team/Rishika-sharma.jpg', 'Rishika sharma', NULL, 'present', NULL, NULL, NULL, NULL, 'rishika', 0),
(34, 'images/team/Tanvi-Garg.jpg', 'Tanvi Garg', NULL, 'present', 'Hard working<br>Voracious reader<br>Adventurous<br>Sensitive', NULL, NULL, NULL, 'tanvi', 0),
(35, 'images/team/Tripti-Lal.jpg', 'Tripti Lal', NULL, 'present', 'Very social<br>Voracious reader<br>Economics lover<br>Passionate about writing (hope to finish my book soon!)<br>Big foodie (love to eat food, not to experiment with it!)\r\n  ', NULL, NULL, NULL, 'tripti', 0),
(36, 'images/team/Amanat-Khullar.jpg', 'Amanat Khullar', NULL, 'past', 'Traveler<br>Writer<br>Foodie<br>Wanderlust<br>Dreamer', 'http://about.me/khullar.amanat', NULL, NULL, 'amanat', 0),
(37, 'images/team/Misha-Dwivedi.jpg', 'Misha Dwivedi', NULL, 'past', 'Reader<br>Transient<br>Sarcastic<br>Filmy<br>Anomaly(lol)', NULL, NULL, NULL, 'misha', 0),
(38, 'images/team/Siddhant-Gupta.jpg', 'Siddhant Gupta', NULL, 'past', 'Enthusiast<br>Committed<br>Technologist<br>& Design for Change', NULL, NULL, NULL, 'siddhant', 0),
(39, 'images/team/Varsha-Sivaram.jpg', 'Varsha Sivaram', NULL, 'past', 'LSE aspirant<br>Budding writer<br>Believer<br>Learner<br>Thinker ', 'http://about.me/varsha.sivaram', NULL, NULL, 'varsha', 0),
(40, 'images/team/Shubham-Jain.jpg', 'Shubham Jain', NULL, 'past', 'Ambitious<br>Procrastinator<br>Mysterious<br>Inquisitive<br>Versatile', 'http://about.me/cyber.shubham', NULL, NULL, 'shubham', 0),
(41, 'images/team/Ishan-Sain.jpg', 'Ishan Sain', NULL, 'past', 'Audiophile<br>Art enthusiast <br>Movie Fanatic <br>Strums guitar <br>Total Procrastinator\r\n ', 'http://about.me/ishansain', NULL, NULL, 'ishan', 0),
(42, 'images/team/Faiza-Hasan.jpg', 'Faiza Hasan', NULL, 'past', 'Cinephile<br>ardent reader<br>food addict<br>headstrong<br>righteous', 'http://about.me/faizahasan', NULL, NULL, 'faiza', 0),
(43, 'images/team/Isha-Arora.jpg', 'Isha Arora', NULL, 'past', 'Reading-freak<br>keen explorer<br>dynamic<br>wanderer<br>great talker', 'http://about.me/ishaarora', NULL, NULL, 'isha', 0),
(44, 'images/team/Shradha-Jain.jpg', 'Shradha Jain', NULL, 'past', 'artist<br>nerd<br>exuberant<br>bibliophile<br>conscientious\r\n ', 'http://about.me/shradha_jain', NULL, NULL, 'shradha', 0),
(45, 'images/team/Anish-Singh.jpg', 'Anish Singh', NULL, 'past', 'Adorable <br>Not Innocent<br> Simply Honest', 'http://about.me/singhanish', NULL, NULL, 'anish', 0),
(46, 'images/team/Divya-Nakra.jpg', 'Divya Nakra', NULL, 'past', 'Hardworking<br>Sincere<br>Inquisitive<br>Amiable<br>Vivacious', 'https://about.me/divyanakra100', NULL, NULL, 'divya-nakra', 0),
(47, 'images/team/Divya-Verma.jpg', 'Divya Verma', NULL, 'past', 'Adventurous<br>Achiever<br>Unique<br>Wanderer<br>Believer', 'https://about.me/divyaverma23', NULL, NULL, 'divya-verma', 0),
(48, 'images/team/Hemant-Kumar.jpg', 'Hemant Kumar', NULL, 'past', 'Creative<br>Techno Lingual<br>Fast Learner<br>Equanimous<br>Jocular', 'http://about.me/hemant6488', NULL, NULL, 'hemant', 0),
(49, 'images/team/Ishani-Dutta.jpg', 'Ishani Dutta', NULL, 'past', 'Adventurous<br>Bibliophile<br>Generous<br>Ambitious<br>Loves talking', 'http://about.me/ishani_dutta', NULL, NULL, 'ishani', 0),
(50, 'images/team/Jyoti-Sandhu.jpg', 'Jyoti Sandhu', NULL, 'past', 'Technologically challenged<br>Ardent Cyclist<br> Free flowing in life<br>Compassionate<br>Ambitious<br>Happy Always\r\n ', 'https://about.me/jyoti.sandhu', NULL, NULL, 'jyoti', 0),
(51, 'images/team/Maalvika-Verma.jpg', 'Maalvika Verma', NULL, 'past', 'Designer<br>Creative<br>Multiskilled<br>Observant<br>Dreamer', 'http://about.me/maalvika_verma', NULL, NULL, 'maalvika', 0),
(52, 'images/team/Neha-Rani.jpg', 'Neha Rani', NULL, 'past', 'Explorer<br>Hard-worker<br>Aesthete<br>Solo-traveller<br>Directioner', 'http://about.me/rneha725', NULL, NULL, 'neha', 0),
(53, 'images/team/Sonal-Chanana.jpg', 'Sonal Chanana', NULL, 'past', NULL, NULL, NULL, NULL, 'sonal', 0),
(54, 'images/team/Ankush-Pandey.jpg', 'Ankush Pandey', NULL, 'past', 'Technologist <br>Entrepreneur <br>Passionate <br>Innovator <br>Keen Traveller', NULL, NULL, NULL, 'ankush', 0),
(55, 'images/team/Ishan-Sain.jpg', 'Ishan Sain', NULL, 'past', 'Audiophile<br>Art enthusiast <br>Movie Fanatic <br>Strums guitar <br>Total Procrastinator\r\n ', 'http://about.me/ishansain', NULL, NULL, 'ishan', 0),
(56, 'images/team/Faiza-Hasan.jpg', 'Faiza Hasan', NULL, 'past', 'Cinephile<br>ardent reader<br>food addict<br>headstrong<br>righteous', 'http://about.me/faizahasan', NULL, NULL, 'faiza', 0),
(57, 'images/team/Isha-Arora.jpg', 'Isha Arora', NULL, 'past', 'Reading-freak<br>keen explorer<br>dynamic<br>wanderer<br>great talker', 'http://about.me/ishaarora', NULL, NULL, 'isha', 0),
(58, 'images/team/Shradha-Jain.jpg', 'Shradha Jain', NULL, 'past', 'artist<br>nerd<br>exuberant<br>bibliophile<br>conscientious\r\n ', 'http://about.me/shradha_jain', NULL, NULL, 'shradha', 0),
(59, 'images/team/Anish-Singh.jpg', 'Anish Singh', NULL, 'past', 'Adorable <br>Not Innocent<br> Simply Honest', 'http://about.me/singhanish', NULL, NULL, 'anish', 0),
(60, 'images/team/Divya-Nakra.jpg', 'Divya Nakra', NULL, 'past', 'Hardworking<br>Sincere<br>Inquisitive<br>Amiable<br>Vivacious', 'https://about.me/divyanakra100', NULL, NULL, 'divya-nakra', 0),
(61, 'images/team/Divya-Verma.jpg', 'Divya Verma', NULL, 'past', 'Adventurous<br>Achiever<br>Unique<br>Wanderer<br>Believer', 'https://about.me/divyaverma23', NULL, NULL, 'divya-verma', 0),
(62, 'images/team/Hemant-Kumar.jpg', 'Hemant Kumar', NULL, 'past', 'Creative<br>Techno Lingual<br>Fast Learner<br>Equanimous<br>Jocular', 'http://about.me/hemant6488', NULL, NULL, 'hemant', 0),
(63, 'images/team/Ishani-Dutta.jpg', 'Ishani Dutta', NULL, 'past', 'Adventurous<br>Bibliophile<br>Generous<br>Ambitious<br>Loves talking', 'http://about.me/ishani_dutta', NULL, NULL, 'ishani', 0),
(64, 'images/team/Jyoti-Sandhu.jpg', 'Jyoti Sandhu', NULL, 'past', 'Technologically challenged<br>Ardent Cyclist<br> Free flowing in life<br>Compassionate<br>Ambitious<br>Happy Always\r\n ', 'https://about.me/jyoti.sandhu', NULL, NULL, 'jyoti', 0),
(65, 'images/team/Maalvika-Verma.jpg', 'Maalvika Verma', NULL, 'past', 'Designer<br>Creative<br>Multiskilled<br>Observant<br>Dreamer', 'http://about.me/maalvika_verma', NULL, NULL, 'maalvika', 0),
(66, 'images/team/Neha-Rani.jpg', 'Neha Rani', NULL, 'past', 'Explorer<br>Hard-worker<br>Aesthete<br>Solo-traveller<br>Directioner', 'http://about.me/rneha725', NULL, NULL, 'neha', 0),
(67, 'images/team/Sonal-Chanana.jpg', 'Sonal Chanana', NULL, 'past', NULL, NULL, NULL, NULL, 'sonal', 0),
(68, 'images/team/Ankush-Pandey.jpg', 'Ankush Pandey', NULL, 'past', 'Technologist <br>Entrepreneur <br>Passionate <br>Innovator <br>Keen Traveller', NULL, NULL, NULL, 'ankush', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributors`
--
ALTER TABLE `contributors`
 ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
 ADD PRIMARY KEY (`press_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contributors`
--
ALTER TABLE `contributors`
MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
MODIFY `press_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `team_id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
