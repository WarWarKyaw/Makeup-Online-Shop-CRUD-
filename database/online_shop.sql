-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 02:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(16, 'admin', '$2y$10$OdOjfzJEBEEIIIVna9IIXO4z7a8KR/pmEUwSv6AZu9lKyFcnUKBbW'),
(17, 'war war', '$2y$10$R8l9VCMhrK8Q5gm677HOK.ubA7Ioh2Zqd/yvdI7.oJ/SvKafPWm.y'),
(18, 'kyaw kyaw', '$2y$10$2DQpjID8TWEsYzHhNpq0aOygtF3GvyONphMTs/dANghz/cHWS/lCS');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'Foundation', 'Foundation is a form of face makeup. This product is used all over your face to create an even base — or foundation — for the rest of your makeup. This product is meant to act as the groundwork for your entire makeup look.', '2023-01-10 10:03:57', '2023-01-23 09:49:14'),
(2, 'Lipstick', 'Lipstick is a cosmetic product used to apply coloration and texture to lips, often made of wax and oil.', '2023-01-10 10:05:12', '2023-01-10 10:05:12'),
(3, 'Toner', 'Skin toner or simply toner refers to a lotion, tonic or wash designed to cleanse the skin and shrink the appearance of pores.', '2023-01-10 10:06:06', '2023-01-10 10:06:06'),
(4, 'Lotion', 'Lotion is moisturiser designed to use all over your body. In much the same way we moisturise our face every day, our body benefits from a daily dose of hydration.', '2023-01-10 10:08:45', '2023-01-10 10:08:45'),
(5, 'Sunscreen', 'Sunscreen products are designed to help prevent sunburn2, and broad-spectrum protection is essential to help shield your skin from UVA and UVB rays.', '2023-01-10 10:09:19', '2023-01-10 10:09:19'),
(6, 'Eyebrow', 'Eyebrow Pencils are products that apply color to the eyebrows. They are used to fill in and define the eyebrows.', '2023-01-10 10:09:56', '2023-01-10 10:09:56'),
(7, 'Eyeliner', 'Eyeliners are products that apply color to the area around the eyes to accent and highlight appearance of the eyes. Eyeliners are used to emphasize the eyelids and/or to change the perceived shape of the eyes. ', '2023-01-10 10:10:30', '2023-01-10 10:10:30'),
(8, 'Powder', 'Face powder is a cosmetic product applied to the face to serve different functions, typically to beautify the face.', '2023-01-10 10:11:02', '2023-01-10 10:11:02'),
(9, 'Mascara', 'Mascara is a cosmetic commonly used to enhance the upper and lower eyelashes. It is used to darken, thicken, lengthen, and/or define the eyelashes. Normally in one of three forms—liquid, powder, or cream—the modern mascara product has various formulas; however, most contain the same basic components of pigments, oils, waxes, and preservatives. ', '2023-01-10 10:11:38', '2023-01-11 13:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `crated_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `total`, `status`, `crated_date`, `modified_date`) VALUES
(44, 'war war', 'warwar67890@gmail.com', '09401530388', 'kyaung Kone 2street,Yangon', '1238', 1, '2023-01-20 15:41:52', '2023-01-25 15:03:58'),
(45, 'war war', 'warwar67890@gmail.com', '09401530388', 'Ygn', '22', 0, '2023-01-20 15:43:33', '2023-01-25 15:04:02'),
(46, 'war war', 'warwar67890@gmail.com', '09401530388', 'Kyaung Kone 2street, Hlaing Township,Yangon', '25', 0, '2023-01-20 15:45:41', '2023-01-20 15:45:41'),
(47, 'war war', 'warwar67890@gmail.com', '09401530388', 'YGN', '24.98', 0, '2023-01-20 15:50:52', '2023-01-20 15:50:52'),
(48, 'War War Kyaw', 'warwar67890@gmail.com', '09401530388', 'Kyaung Kone 2street, Hlaing Township,Yangon', '45.02', 1, '2023-01-23 09:44:12', '2023-01-23 09:51:08'),
(49, 'war war', 'warwar67890@gmail.com', '09401530388', 'ygn', '29.48', 1, '2023-01-23 11:08:17', '2023-01-23 11:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `qty`) VALUES
(30, 4, 34, 1),
(31, 6, 35, 1),
(32, 12, 36, 1),
(33, 6, 37, 2),
(34, 4, 38, 1),
(35, 5, 38, 1),
(36, 9, 39, 1),
(37, 8, 39, 1),
(38, 5, 40, 1),
(39, 6, 40, 1),
(40, 5, 41, 1),
(41, 6, 41, 1),
(42, 13, 41, 1),
(43, 6, 42, 1),
(44, 11, 42, 1),
(45, 4, 43, 2),
(46, 5, 44, 1),
(47, 9, 44, 1),
(48, 6, 45, 1),
(49, 12, 45, 1),
(50, 5, 46, 1),
(51, 6, 46, 1),
(52, 6, 47, 1),
(53, 5, 47, 1),
(54, 12, 48, 1),
(55, 15, 48, 1),
(56, 5, 49, 1),
(57, 12, 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `brand`, `information`, `price`, `category_id`, `cover`, `created_date`, `modified_date`) VALUES
(4, 'True Match Healthy Luminous Makeup', 'Loreal Paris', 'True Match™ Lumi Healthy Luminous Makeup combines 3 powerful ingredients that work to improve your complexion the more you wear them. 40% pure water for all-day hydration.', 13.99, 1, 'lumi.png', '2023-01-10 13:57:53', '2023-01-10 13:57:53'),
(5, 'Infallible 24hr Matte Cover Foundation', 'Loreal Paris', 'A long lasting foundation with our most lightweight, breathable texture for up to 24 hours of fresh staying power. ', 15.99, 1, 'infallible.png', '2023-01-10 14:01:29', '2023-01-10 14:01:29'),
(6, 'Fit Me Dewy + Smooth Foundation', 'Maybelline NewYork', 'Dewy + Smooth Foundation is a dewy foundation for dry skin that hydrates rough patches leaving skin with a dewy makeup look and naturally luminous finish.', 8.99, 1, 'dewy-and-smooth.jpg', '2023-01-10 14:07:57', '2023-01-10 14:07:57'),
(7, 'Super Stay Full Coverage Foundation', 'Maybelline NewYork', 'Maybelline Super Stay Active Wear Full Coverage Foundation delivers up to 30-hour wear that feels light as air and does not transfer.', 12.99, 1, 'super-stay.jpg', '2023-01-10 14:11:49', '2023-01-12 10:34:19'),
(8, 'NARS/SHEER GLOW FOUNDATION', 'NARS', 'NARS FOUNDATION 1.0 OZ MOOREA NARS/SHEER GLOW FOUNDATION (MOOREA) 1.0 OZ MEDIUM-DARK', 47.99, 1, 'SHEERGLOW.jpeg', '2023-01-10 14:16:25', '2023-01-10 14:16:25'),
(9, 'FLAWLESS SATIN FOUNDATION', 'elf', 'A lightweight liquid foundation that naturally blends into skin (and hydrates while you’re at it). Previously called Flawless Finish Foundation.', 22, 1, 'elf-flawless.jpg', '2023-01-10 14:23:37', '2023-01-25 14:37:15'),
(10, 'SMOOTH WHIP MATTE LIP CREAM', 'NYX', 'Introducing Smooth Whip Matte Lip Cream, our first-ever vegan-formula lip smoothers. Available in 24 bold shades, this creamy matte liquid lipstick delivers vibrant color. ', 8, 2, 'nyx_smoooth.jpg', '2023-01-10 14:27:11', '2023-01-10 14:27:11'),
(11, 'SHINE LOUD HIGH SHINE LIP COLOR', 'NYX', 'Shine loud with our first ultra-pigmented, high-shine lip color. Available in 30 bold shades, this dual-ended lipstick delivers bold color with up to 16 hours of transfer-resistant wear.', 12, 2, 'nyx_shinegloss.jpg', '2023-01-10 14:30:04', '2023-01-10 14:30:04'),
(12, 'Infallible Pro Matte Liquid Lipstick', 'Loreal Paris', 'Explore our first ultra-matte liquid lipstick in highly pigmented bold shades - Infallible Pro-Matte Liquid Lipstick, a 16-hour liquid matte lipstick.', 13.49, 2, 'infalliblr_lipstick.jpg', '2023-01-10 14:34:21', '2023-01-12 10:33:23'),
(13, 'SuperStay Matte Ink Liquid Lipstick', 'Maybelline NewYork', 'This highly pigmented liquid lipstick features a long lasting, no transfer formula and leaves a flawless matte finish in super saturated shades ranging from classic red to nude to bold and bright.', 10.99, 2, 'superstay_lipstick.jpg', '2023-01-10 14:44:52', '2023-01-10 14:44:52'),
(14, 'Revitalift Crystal Micro-Essence Water Toner', 'Loreal Paris', 'It made skin feel amazing, more hydrated and softer. Love that gentle on sensitive skin.', 28.12, 3, 'revitalift.jpg', '2023-01-10 14:54:16', '2023-01-10 14:54:16'),
(15, 'COLLAGEN LIFTING TONER', 'DABO', 'Due to hydration of marine collagen, it fills the skin with moisture. Also, it keeps dry skin and tight skin hydrated.', 31.53, 3, 'dabo_toner.png', '2023-01-10 14:57:54', '2023-01-10 14:57:54'),
(16, 'NATURAL FAIRNESS BODY LOTION', 'Nivea', 'NIVEA Natural Fairness Body Lotion is a daily moisturiser developed to enhance the skin’s natural radiance. ', 9, 4, 'natual_fairness.png', '2023-01-10 15:06:39', '2023-01-10 15:06:39'),
(17, 'BRIGHT COMPLETE BODY LOTION', '4', 'Enriched with lemon essence, get bright and moisturized skin with the  Garnier Bright Complete Body Lotion.', 9, 4, 'garnier_lotion.png', '2023-01-10 15:12:17', '2023-01-20 08:17:54'),
(18, 'POWDER KISS VELVET BLUR SLIM STICK', 'MAC', 'A moisture-infused lipstick that provides 12 hours of on-trend, mega-bold colour and ultra-weightless wear in a single, velvet-soft swipe.', 27, 2, 'mac_lipstick.jpg', '2023-01-11 10:34:12', '2023-01-11 10:34:12'),
(19, 'Mini Power Bullet Matte Lipstick Duo', 'HudaBeauty', 'mini–Power Bullet kits in some of our favorite shades, because power comes in all sizes. As a reminder of just how powerful you are, these small but mighty lipsticks feature the word “POWER” on the front of the bullet.', 19, 2, 'hudabeautylipstick.jpg', '2023-01-11 10:46:30', '2023-01-11 10:46:30'),
(20, 'MINERALIZE SKIN HYDRATE MILK', 'MAC', 'Vitamins and minerals give your skin an instant boost of moisture while an infusion of green tea, chamomile and cucumber soothe skin. ', 31, 3, 'macToner.jpg', '2023-01-11 11:00:23', '2023-01-12 10:32:27'),
(21, 'Hydrating & Firming Body Lotion', 'Olay', 'This fast-absorbing formula, made for all skin types, was crafted by Olay skin experts to moisturize and hydrate to increase skin cell turnover.', 37, 4, 'olayLotion.jpg', '2023-01-11 11:03:16', '2023-01-11 11:03:16'),
(22, ' Moisturizing Body Lotion', 'Bio-Oil', 'Bio-Oil Body Lotion pioneers a new level of lightness and efficacy in body moisturization. The product is significantly thinner than the majority of currently available body lotions and has on average 2X the amount of oil. ', 14.97, 4, 'BioOilLotion.jpg', '2023-01-11 11:08:12', '2023-01-11 11:08:12'),
(24, 'UV Defender', 'Loreal Paris', 'LOreal Paris UV Defender Serum Protector is a sunscreen that prevents fine lines, dark spots and dullness and is a Non Greasy sunscreen formula. It comes with a powerful combination of SPF 50+ PA++++ broad spectrum protection against UVA, UVB and Long Range UV.', 11, 5, 'uvd_loreal.webp', '2023-01-11 11:31:53', '2023-01-11 11:31:53'),
(25, ' Dream Fresh BB Sunscreen', 'Maybelline NewYork', 'Dream BB Fresh has 8 skin-loving benefits in 1 lightweight formula. America’s #1 BB Cream hydrates, brightens, smoothes, and protects with broad-spectrum SPF 30. Sheer coverage gives skin a natural finish.', 8.99, 5, 'maybellineSunscreen.jpg', '2023-01-11 11:38:43', '2023-01-11 11:38:43'),
(26, 'EXPRESS BROW ULTRA SLIM', 'Maybelline NewYork', 'Express Brow Ultra Slim Defining Eyebrow Pencil. The smooth formula glides across brows with no color streaks and no pencil breakage for precisely defined eyebrows that last!', 8.99, 6, 'maybellineEyeBrow.jpg', '2023-01-11 11:42:44', '2023-01-11 11:42:44'),
(27, 'Micro Ink Pen by Brow Stylist', 'Loreal Paris', 'Get defined and natural-looking brows with Micro Ink Pen by Brow Stylist. Easy and instant brow tint pen precisely tints brows with comb-tip applicator for a natural, hair-like effect. Long-lasting, 48-hour formula. Waterproof, smudge-resistent. Micro ink pen color does not fade or transfer.', 11.99, 6, 'loreal_eyebrow.png', '2023-01-11 11:46:13', '2023-01-12 10:24:22'),
(28, ' MAC EYEBROWS STYLER PENCIL', 'MAC', 'A self-propelling and self-sharpening water-resistant brow definer with an added spoolie that adds shape, colour and density.', 20, 6, 'macEyebrow.webp', '2023-01-11 11:51:09', '2023-01-12 10:27:52'),
(29, 'LIQUIDLAST  LINER', 'MAC', 'A rich black liquid eye liner that combines long-lasting wear with a precision line. Goes on effortlessly. Applies with its own brush to draw a perfectly defined line.', 23, 7, 'mac_eyeliner.webp', '2023-01-11 12:42:05', '2023-01-12 10:21:59'),
(30, 'EPIC INK LINER', 'NYX', 'Live for super-sharp wing inspo? Don’t just “like” all your faves, draw ’em yourself using Epic Ink Liner. Featuring a slender and supple brush tip, this intensely pigmented, waterproof pen lets you achieve black liquid lines effortlessly. Every stroke is unbelievably fluid for a defined finish. Control the thickness of your lines by pressing down just a touch. Fine and natural, broad and bold—the look is always up to you!', 9, 7, 'nyxEyeliner.jpg', '2023-01-11 12:49:03', '2023-01-11 12:49:03'),
(31, 'I-Liner Waterproof Eyeliner', 'Hearty Heart', 'Hearty Heart’s new advanced waterproof liquid eyeliner is perfect for lining those big cute dolly eyes! Its 0.05mm ultra-precise fibre brush allows you to effortlessly create paintbrush-like strokes for daytime to dramatic cat eyes and anything else your heart desires. Smudge-proof, waterproof and oh-so-pigmented. Available in 3 soft pastel colors of your choice to accessorize any makeup bag!', 4, 7, 'heartyHeartEyeliner.png', '2023-01-11 12:53:41', '2023-01-11 12:53:41'),
(32, 'HYDRA PERFECTE LOOSE POWDER', 'Loreal Paris', 'Hydra Perfecte Powder is a light-diffusing loose powder that minimizes pores and enhances skin’s texture. It’s formulated with special moisturizers that nourish and protect your skin.', 11.95, 8, 'loreal_loosePowder.jpeg', '2023-01-11 13:17:33', '2023-01-12 10:21:00'),
(33, 'True Match Super-Blendable Powder', 'Loreal Paris', 'True Match Powder precisely matches your skin’s tone and texture and coordinates perfectly with True Match Makeup, Blush, and Concealer. Micro-fine powder provides versatile coverage: you can blot shine, blend for a natural finish, or build for more coverage. True Match Powder’s formula contains a hint of pearl pigments that enhance your skin’s tone.', 11.99, 8, 'loreal_superBlendablePowder.png', '2023-01-11 13:22:06', '2023-01-12 10:20:03'),
(34, 'MATTE + PORELESS POWDER', 'Maybelline NewYork', 'Matte + Poreless Powder face makeup. Mattifies and leaves a poreless-looking finish with long-lasting shine control.', 8.49, 8, 'fitme_powder.jpg', '2023-01-11 13:27:50', '2023-01-11 13:29:46'),
(35, 'Original Washable Bold Eye Mascara', 'Loreal Paris', 'L’Oréal Paris Voluminous Original Volume Building Mascara is uniquely formulated to resist clumping, keep lashes soft, and build lashes up to 5x their natural thickness. Volume Maximizing Brush quickly thickens and builds lashes evenly for a full and bold look. Contains Panthenol and Ceramide-R and helps protect and condition lashes. Resists clumping and flaking, and leaves lashes supple and soft to the touch.', 9.99, 9, 'loreal_mascara.png', '2023-01-11 13:36:53', '2023-01-11 13:36:53'),
(36, 'GREEN EDITION MEGA MOUSSE MASCARA ', 'Maybelline NewYork', 'Maybelline New York Green Edition Mega Mousse Mascara delivers big, buildable volume that is lightweight and wears all day.', 11.99, 9, 'maybellineMascara.jpg', '2023-01-11 13:40:00', '2023-01-12 10:15:52'),
(37, 'M·A·C  SUPERSTACK MEGA BRUSH MASCARA', 'MAC', 'Stack on infinite layers of volume + length with M·A·CStack Mascara. This never-before-seen endlessly buildable, clump-resistant formula gives you customizable volume from natural to next-level, along with instant length.', 20, 9, 'macMascara.webp', '2023-01-11 13:43:01', '2023-01-23 09:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` double NOT NULL,
  `price` double NOT NULL,
  `totalprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
