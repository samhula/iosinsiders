-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `ArticleTitle` varchar(255) NOT NULL,
  `ArticleDescription` varchar(1024) NOT NULL,
  `ArticleCategory` varchar(255) NOT NULL,
  `ArticleDate` datetime NOT NULL,
  `MainImgURL` varchar(255) DEFAULT NULL,
  `ArticleContent` varchar(10000) NOT NULL,
  `ArticleAuthor` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ArticleID`, `ArticleTitle`, `ArticleDescription`, `ArticleCategory`, `ArticleDate`, `MainImgURL`, `ArticleContent`, `ArticleAuthor`, `published`) VALUES
(47, 'The 7 Best FREE Alternatives to Photoshop', 'Don&#039;t have a budget? These 7 alternatives will help you with what you need', 'Reviews', '2023-05-03 19:14:39', 'assets/dm3eofqwmj671.png', 'Photoshop is one of the most popular image editing software programs available today. However, it can be quite expensive and may not be the best option for everyone. Luckily, there are several free alternatives to Photoshop that you can use for your image editing needs. Here are the top 7 free alternatives to Photoshop.\r\n\r\n###GIMP###\r\nGIMP stands for GNU Image Manipulation Program. It is an open-source software that is available for free download. GIMP has many of the same features as Photoshop, including layers, masks, filters, and brushes. GIMP is available for Windows, Mac, and Linux operating systems.\r\n\r\n###Pixlr###\r\nPixlr is a free online image editing tool that allows you to edit your images directly in your web browser. It has a user-friendly interface and many of the same features as Photoshop. Pixlr is available for both desktop and mobile devices.\r\n\r\n###Paint.NET###\r\nPaint.NET is a free image editing software that is available for Windows. It has many of the same features as Photoshop, including layers, filters, and effects. Paint.NET is user-friendly and easy to use, making it a great option for beginners.\r\n\r\n###Krita###\r\nKrita is a free and open-source digital painting software that is available for Windows, Mac, and Linux operating systems. It is a great option for artists who want to create digital paintings and illustrations. Krita has many advanced features, including brushes, layers, and masks.\r\n\r\n###Inkscape###\r\nInkscape is a free and open-source vector graphics editor that is available for Windows, Mac, and Linux operating systems. It is a great option for creating graphics, logos, and illustrations. Inkscape has many advanced features, including paths, gradients, and layers.\r\n\r\n###Canva###\r\nCanva is a free online graphic design tool that allows you to create graphics, logos, and designs. It has a user-friendly interface and many templates to choose from. Canva is available for both desktop and mobile devices.\r\n\r\n###Fotor###\r\nFotor is a free online photo editing tool that allows you to edit your images directly in your web browser. It has many features, including filters, effects, and frames. Fotor is available for both desktop and mobile devices.\r\n\r\nIn conclusion, these are the top 7 free alternatives to Photoshop that you can use for your image editing needs. Each of these software programs has its own unique features and benefits, so be sure to choose the one that best fits your needs. With these options, you can edit your images without having to spend a lot of money on software.', 'admin', 1),
(48, 'Top 7 BEST Technology News Websites', 'These are the best technology news websites. We hope to be up there one day', 'News', '2023-04-27 21:03:26', 'assets/donkeyanddiddykong.jpeg', 'In today&#039;s fast-paced world, staying up-to-date with the latest technology news is essential. With new advancements and updates happening every day, it&#039;s important to know what&#039;s happening in the world of technology. To make things easier for you, we&#039;ve compiled a list of the top 7 technology news websites that you should bookmark today.\r\n\r\n##TechCrunch##\r\nTechCrunch is a popular technology news website that covers a wide range of topics, including startup news, product reviews, and new product launches. It&#039;s known for breaking the latest technology news and providing in-depth analysis and insights into the industry.\r\n\r\n##Wired##\r\nWired is a website that focuses on the intersection of technology, culture, and science. It features articles and stories about new and emerging technologies, as well as the impact they have on society. Wired also has a reputation for producing high-quality videos and podcasts.\r\n\r\n##The Verge##\r\nThe Verge is a technology news website that covers a broad range of topics, from smartphones and laptops to gaming and social media. It&#039;s known for its in-depth product reviews and for providing a unique perspective on the latest tech trends.\r\n\r\n##Engadget##\r\nEngadget is a popular technology news website that focuses on gadgets, consumer electronics, and the latest trends in tech. It&#039;s known for providing detailed product reviews and for breaking news about new and upcoming gadgets.\r\n\r\n##Gizmodo##\r\nGizmodo is a website that covers technology news from a unique perspective, offering insights into how technology intersects with culture, politics, and society. It&#039;s known for its irreverent tone and for covering emerging technologies and products that are not yet mainstream.\r\n\r\n##CNET##\r\nCNET is a website that covers consumer technology news, product reviews, and how-to guides. It&#039;s known for its detailed product reviews and for providing insights into how technology can improve our daily lives.\r\n\r\n##ZDNet##\r\nZDNet is a website that covers technology news for business professionals. It provides insights into how technology is changing the way we work, and it covers topics such as cybersecurity, cloud computing, and big data. ZDNet is known for its in-depth analysis and for providing practical insights for businesses.', 'admin', 1),
(51, 'This is a test ', 'hello article', 'InfoSec', '2023-05-02 15:09:43', 'assets/5f7vs54ldvd71.png', 'This is a template for income reports edited', 'admin', 1),
(52, 'This is my favourite computer', 'An article about a computer', 'Reviews', '2023-05-01 01:00:21', 'assets/computer.jpg', 'This is a template for reviews\r\n\r\n#Example of a heading#\r\n\r\n###Example of another heading###\r\n\r\nHere is some text\r\n\r\nHere is some more text\r\n\r\nAs you can see the user can use custom mark down to change the font on the screen.', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` bigint(20) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `ePassword` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `ePassword`, `Email`, `Role`) VALUES
(2, 'superman', 'supercool', 'super@gmail.com', ''),
(3, 'sadf', 'fgadfg', 'adag', ''),
(4, 'asdf', 'asfq', '4rt', ''),
(5, 'bobby', 'test', '', ''),
(7, 'bongo', 'password', 'test@test.com', 'user'),
(8, 'test', 'test', 'test', 'user'),
(10, 'ham', 'password', 'ham@password.com', 'user'),
(11, 'admin', 'notpassword', 'admin@gmail.com', 'admin'),
(12, 'asdfasf', 'oyes@gmail', 'oyes@gmail.com', 'admin'),
(13, '4545455', 'asdfasdf', 'oyes@gmail.com', 'admin'),
(14, '54tfg', 'adsfasdfasdf', 'oyes@gmail.com', 'user'),
(15, 'asdfasdf', 'uyh5tegh', 'oyes@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
