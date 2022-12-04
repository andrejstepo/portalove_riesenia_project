-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 04.Dec 2022, 17:12
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `pizzeria`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `content`
--

INSERT INTO `content` (`id`, `sys_name`, `display_name`, `content`, `created_at`, `updated_at`) VALUES
(6, 'home', 'HOME', '<div class=\"flexslider\">\r\n		<ul class=\"slides\">\r\n			<li>\r\n				<img src=\"images/slider-img1.jpg\" alt=\"Pizza Image 1\">\r\n				<div class=\"flex-caption\">\r\n					<h2 class=\"slider-title\">We make pizza</h2>\r\n					<h3 class=\"slider-subtitle\">Fresh, clean, and delicious.</h3>\r\n					<p class=\"slider-description\">Praesent tincidunt neque semper elementum gravida. Donec id euismod magna. Ut erat ligula, malesuada eu quam a, fringilla auctor augue.</p>\r\n				</div>\r\n			</li>\r\n			<li>\r\n				<img src=\"images/slider-img2.jpg\" alt=\"Pizza Image 2\">\r\n				<div class=\"flex-caption\">\r\n					<h2 class=\"slider-title\">Freshly Baked Pizza</h2>\r\n					<h3 class=\"slider-subtitle\">Premium Quality, Finest Ingredients</h3>\r\n					<p class=\"slider-description\">Donec id euismod magna. Ut erat ligula, malesuada eu quam a, fringilla auctor augue. Praesent tincidunt neque semper elementum gravida.</p>\r\n				</div>\r\n			</li>\r\n		</ul>\r\n	</div>', '2022-11-22 20:28:22', '2022-11-22 20:28:22'),
(7, 'about', 'YOUR PIZZA SHOP', '<div class=\"row\">\r\n				<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n					<h1 class=\"text-uppercase\">Your Pizza Shop</h1>\r\n				</div>\r\n				<div class=\"col-md-6 col-sm-6\">					\r\n					<h3 class=\"text-uppercase padding-bottom-10\">Another Baker</h3>\r\n					<p>Pizza responsive web template is provided by <a rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">templatemo</a> website. Feel free to download, adapt, and use this template for your websites. Credit goes to <a rel=\"nofollow\" href=\"http://pixabay.com\" target=\"_parent\">Pixabay</a> for images used in this template.</p>\r\n                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>\r\n					<p>Proin enim sem, ultricies sit amet convallis nec, sodales quis augue. Duis consequat felis ac justo luctus, a cursus tellus pharetra. In ullamcorper gravida enim id pulvinar.</p>\r\n				</div>\r\n				<div class=\"col-md-6 col-sm-6\">\r\n					<img src=\"images/about-img1.jpg\" class=\"img-responsive img-bordered img-about\" alt=\"about img\">\r\n				</div>\r\n			</div>', '2022-11-22 20:30:10', '2022-11-22 20:30:10'),
(8, 'gallery', 'GALLERY', '<section id=\"gallery\" class=\"templatemo-section templatemo-light-gray-bg\">\r\n		<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <h2 class=\"text-center text-uppercase\">Gallery</h2>\r\n                    <hr>\r\n                </div>\r\n                <?php\r\n                foreach ($pizzaDetails as $pizzaDetail) {\r\n                ?>\r\n                <div class=\"col-md-4 col-sm-4\">\r\n                    <div class=\"gallery-wrapper\">\r\n                        <?php\r\n                        echo \'<img src=\"images/\'.$pizzaDetail[\'img\'].\'\" class=\"img-responsive gallery-img\".\" alt=\"Pizza 1\">\'\r\n                        ?>\r\n                        <div class=\"gallery-des\">\r\n                            <h3><?php echo $pizzaDetail[\'display_name\'] ?></h3>\r\n                            <h5><?php echo $pizzaDetail[\'content\'] ?></h5>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n        </div>\r\n		</div>\r\n	</section>', '2022-11-22 20:32:39', '2022-11-22 20:32:39'),
(9, 'contact', 'CONTACT US', '		<div class=\"row\">\r\n				<div class=\"col-md-12\">\r\n					<h2 class=\"text-uppercase text-center\">Contact Us</h2>\r\n					<hr>\r\n				</div>\r\n				<div class=\"col-md-2\"></div>\r\n				<div class=\"col-md-8\">\r\n					<form action=\"insertContact.php\" method=\"post\" role=\"form\">\r\n						<div class=\"col-md-6 col-sm-6\">\r\n							<input name=\"from\" type=\"text\" class=\"form-control\" id=\"name\" maxlength=\"60\" placeholder=\"Name\">\r\n					    	<input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">\r\n							<input name=\"subject\" type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"Subject\">\r\n						</div>\r\n						<div class=\"col-md-6 col-sm-6\">\r\n							<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\"></textarea>\r\n						</div>\r\n						<div class=\"col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6\">\r\n							<input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"Send\">\r\n						</div>\r\n					</form>\r\n				</div>\r\n				<div class=\"col-md-2\"></div>\r\n				<div class=\"col-md-4 col-sm-4\">\r\n					<h3 class=\"padding-bottom-10 text-uppercase\">Visit our shop</h3>\r\n					<p><i class=\"fa fa-map-marker contact-fa\"></i> 63 Another Walking Street, BKK 18080</p>\r\n					<p>\r\n						<i class=\"fa fa-phone contact-fa\"></i> \r\n						<a href=\"tel:010-020-0340\" class=\"contact-link\">010-020-0340</a>, \r\n						<a href=\"tel:080-090-0660\" class=\"contact-link\">080-090-0660</a>\r\n					</p>			\r\n					<p><i class=\"fa fa-envelope-o contact-fa\"></i> \r\n                    	<a href=\"mailto:hello@company.com\" class=\"contact-link\">hello@company.com</a></p>\r\n				</div>\r\n				<div class=\"col-md-4 col-sm-4\">\r\n					<h3 class=\"text-uppercase\">Opening hours</h3>\r\n					<p><i class=\"fa fa-clock-o contact-fa\"></i> 7:00 AM - 11:00 PM</p>\r\n					<p><i class=\"fa fa-bell-o contact-fa\"></i> Monday to Friday and Sunday</p>\r\n                    <p><i class=\"fa fa-download contact-fa\"></i> \r\n                    	<a class=\"contact-link\" rel=\"nofollow\" \r\n                        	href=\"http://fontawesome.io/icons/\" target=\"_blank\">Change Icons</a></p>\r\n			  	</div>\r\n				<div class=\"col-md-4 col-sm-4\">\r\n					<div class=\"google_map\">\r\n						<div id=\"map-canvas\" class=\"map\"></div>\r\n					</div>\r\n				</div>\r\n			</div>', '2022-11-22 20:34:02', '2022-11-22 20:34:02');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdf', 'asdf@as.com', 'test', 'test', '2022-11-21 19:30:48', '2022-12-04 16:27:08'),
(2, 'wasd', 'wasd@as.com', 'as', 'asdfgfhghj', '2022-12-04 15:10:19', '2022-12-04 15:10:19'),
(3, 'asd', 'asd@as.com', 'asdf', 'yxcvb', '2022-12-04 15:11:20', '2022-12-04 15:55:41');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `sys_name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'HOME', '2022-12-03 15:42:10', '2022-12-04 16:26:55'),
(2, 'about', 'ABOUT', '2022-12-03 15:42:10', '2022-12-03 15:42:10'),
(3, 'gallery', 'GALLERY', '2022-12-03 15:43:31', '2022-12-04 15:56:01'),
(4, 'contact', 'CONTACT', '2022-12-03 15:43:31', '2022-12-04 15:48:38');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pizza_menu`
--

CREATE TABLE `pizza_menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `img` varchar(45) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `pizza_menu`
--

INSERT INTO `pizza_menu` (`id`, `sys_name`, `display_name`, `img`, `content`, `created_at`, `updated_at`) VALUES
(8, 'curabitur', 'Curabitur', 'gallery-img1.jpg', 'Cras in ante mattis, elementum nunc sed.', '2022-12-03 15:12:40', '2022-12-04 15:47:18'),
(9, 'curabitur', 'Curabitur', 'gallery-img1.jpg', 'Cras in ante mattis, elementum nunc sed', '2022-12-03 15:13:15', '2022-12-04 15:47:11'),
(10, 'curabitur', 'Curabitur', 'gallery-img1.jpg', 'Cras in ante mattis, elementum nunc sed.', '2022-12-03 15:13:35', '2022-12-04 15:47:30'),
(11, 'curabitur', 'Curabitur', 'gallery-img1.jpg', 'Cras in ante mattis, elementum nunc sed.', '2022-12-03 15:13:56', '2022-12-04 15:47:35'),
(12, 'lorem ipsum', 'Lorem ipsum', 'gallery-img2.jpg', 'In ullamcorper gravida enim id pulvinar', '2022-12-03 15:14:18', '2022-12-03 15:14:18'),
(13, 'pellentesque', 'Pellentesque', 'gallery-img3.jpg', 'Maecenas efficitur nisi id sapien', '2022-12-03 15:14:37', '2022-12-03 15:14:37'),
(14, 'suspendisse', 'Suspendisse', 'gallery-img4.jpg', 'Mauris sit amet augue sit amet risus', '2022-12-03 15:14:55', '2022-12-03 15:14:55'),
(15, 'elementum', 'Elementum', 'gallery-img5.jpg', 'Maecenas efficitur nisi id sapien', '2022-12-03 15:15:12', '2022-12-03 15:15:12');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sys_name_UNIQUE` (`sys_name`);

--
-- Indexy pre tabuľku `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `pizza_menu`
--
ALTER TABLE `pizza_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `pizza_menu`
--
ALTER TABLE `pizza_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
