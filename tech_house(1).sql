-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 05:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `confirm` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tmp_password` varchar(1000) NOT NULL,
  `hashed_email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `confirm`, `image`, `description`, `tmp_password`, `hashed_email`) VALUES
(16, 'kosi', 'akpufranklin3@gmail.com', '$2y$10$S.kC1FEVlc5KadoDLlZy6ujBM6JpSqwtdqxdV47SZTEtf/PbR.zcG', '$2y$10$X2YZngdynwkkCoSyWD1Aj.iqdnIVkgGb7kGqFgEBThskCoQlWO8cO', '1521993020.jpg', 'cjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjfjg uhfui hifuhiuhfuihuigfh uihhuguihuifhugihiuhiuh iurhiuh uih', 'kosi1521993019me', '4449d2f03db373a0fbe711a576cfbbca3781255c'),
(17, 'dddddddddddd', 'akpufranklin2@gmail.com', '$2y$10$nUJ76AAIk4eWTXKZknocBezR.SdLtMRBsZxIZwm1fMh3TyWGVSaNK', '$2y$10$m17CcQlQFE8VNBQzOTQD/e7zZjV8PzVrdE9egZWThgMZvi.ciCXlu', '1522374369.jpg', 'ffffffffffffff', 'dddddddddddd1522374368me', '7ef35593b04f1d5af7d45e2d99d9f0e24bfc57f4'),
(18, 'dfffgf', 'akpufranklin222@gmail.com', 'franklin101', 'franklin101', '', '', 'eeeercfdvf', 'fdrthjuytrdhjkiuyt'),
(19, 'def', 'a@gmail.com', '$2y$10$rBM5dw9LmDwo/jlZH3XXU.Egl3IdVR8qch5pJA.bv5VW2pmXW5g1e', '$2y$10$F1j9hD.3B4xDWU8pzE0CFOa1Ig.SXVh0CigRGRzasJdo5Q4DL36C.', '1536200563.PNG', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'def1536200561me', '4077a17af290832ffa6e1caff0a1ca35e0788220'),
(20, 'razor', 'razor@gmail.com', '$2y$10$ng2673qC/4ArxgR0LjhAHOYlMdiIKA24CCcS7pS0LkirZZX4o/XOe', '$2y$10$D70HiU2L9PpEnF0Hu6KpYu8DpSSi3.Dc.kJVso0N8NzPO1fnjDZmC', '1536536123.jpg', 'this is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloru', 'razor1536536122me', 'a3b1b74617d41ad3620569c8bf707b66b169f239');

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(255) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `archive_format` varchar(1000) NOT NULL,
  `recent_time` varchar(1000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `url_entered` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `browser_data`
--

CREATE TABLE `browser_data` (
  `id` int(255) NOT NULL,
  `browser` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browser_data`
--

INSERT INTO `browser_data` (`id`, `browser`, `year`) VALUES
(1, 'firefox', '2018'),
(2, 'firefox', '2018'),
(3, 'chrome', '2018'),
(4, 'ie', '2018'),
(5, 'firefox', '2018'),
(6, 'firefox', '2018'),
(7, 'firefox', '2018'),
(8, 'firefox', '2018'),
(9, 'firefox', '2018'),
(10, 'firefox', '2018'),
(11, 'firefox', '2018'),
(12, 'firefox', '2018'),
(13, 'firefox', '2018'),
(14, 'firefox', '2018'),
(15, 'chrome', '2018'),
(16, 'firefox', '2018'),
(17, 'firefox', '2018'),
(18, 'chrome', '2018'),
(19, 'firefox', '2018'),
(20, 'firefox', '2018'),
(21, 'firefox', '2018'),
(22, 'firefox', '2018'),
(23, 'firefox', '2018'),
(24, 'firefox', '2018'),
(25, 'firefox', '2018'),
(26, 'firefox', '2018'),
(27, 'firefox', '2018'),
(28, 'chrome', '2018'),
(29, 'firefox', '2018'),
(30, 'firefox', '2018'),
(31, 'firefox', '2018'),
(32, 'firefox', '2018'),
(33, 'firefox', '2018'),
(34, 'chrome', '2018'),
(35, 'firefox', '2018'),
(36, 'firefox', '2018'),
(37, 'firefox', '2018'),
(38, 'firefox', '2018'),
(39, 'firefox', '2018'),
(40, 'firefox', '2018'),
(41, 'firefox', '2018'),
(42, 'firefox', '2018'),
(43, 'firefox', '2018'),
(44, 'firefox', '2018'),
(45, 'firefox', '2018'),
(46, 'firefox', '2018'),
(47, 'firefox', '2018'),
(48, 'firefox', '2018'),
(49, 'firefox', '2018'),
(50, 'firefox', '2018'),
(51, 'firefox', '2018'),
(52, 'firefox', '2018'),
(53, 'firefox', '2018'),
(54, 'firefox', '2018'),
(55, 'chrome', '2018'),
(56, 'firefox', '2018'),
(57, 'firefox', '2018'),
(58, 'firefox', '2018'),
(59, 'firefox', '2018'),
(60, 'firefox', '2018'),
(61, 'firefox', '2018'),
(62, 'firefox', '2018'),
(63, 'firefox', '2018'),
(64, 'firefox', '2018'),
(65, 'firefox', '2018'),
(66, 'firefox', '2018'),
(67, 'firefox', '2018'),
(68, 'firefox', '2018'),
(69, 'firefox', '2018'),
(70, 'firefox', '2018'),
(71, 'firefox', '2018'),
(72, 'firefox', '2018'),
(73, 'firefox', '2018'),
(74, 'firefox', '2018'),
(75, 'firefox', '2018'),
(76, 'firefox', '2018'),
(77, 'firefox', '2018'),
(78, 'firefox', '2018'),
(79, 'firefox', '2018'),
(80, 'firefox', '2018'),
(81, 'firefox', '2018'),
(82, 'firefox', '2018'),
(83, 'firefox', '2018'),
(84, 'firefox', '2018'),
(85, 'firefox', '2018'),
(86, 'firefox', '2018'),
(87, 'firefox', '2018'),
(88, 'firefox', '2018'),
(89, 'firefox', '2018'),
(90, 'firefox', '2018'),
(91, 'firefox', '2018'),
(92, 'firefox', '2018'),
(93, 'firefox', '2018'),
(94, 'firefox', '2018'),
(95, 'firefox', '2018'),
(96, 'firefox', '2018'),
(97, 'firefox', '2018'),
(98, 'firefox', '2018'),
(99, 'firefox', '2018'),
(100, 'firefox', '2018'),
(101, 'firefox', '2018'),
(102, 'firefox', '2018'),
(103, 'firefox', '2018'),
(104, 'firefox', '2018'),
(105, 'firefox', '2018'),
(106, 'firefox', '2018'),
(107, 'firefox', '2018'),
(108, 'firefox', '2018'),
(109, 'firefox', '2018'),
(110, 'firefox', '2018'),
(111, 'firefox', '2018'),
(112, 'firefox', '2018'),
(113, 'firefox', '2018'),
(114, 'firefox', '2018'),
(115, 'firefox', '2018'),
(116, 'firefox', '2018'),
(117, 'firefox', '2018'),
(118, 'firefox', '2018'),
(119, 'firefox', '2018'),
(120, 'firefox', '2018'),
(121, 'firefox', '2018'),
(122, 'firefox', '2018'),
(123, 'firefox', '2018'),
(124, 'firefox', '2018'),
(125, 'firefox', '2018'),
(126, 'firefox', '2018'),
(127, 'firefox', '2018'),
(128, 'firefox', '2018'),
(129, 'firefox', '2018'),
(130, 'firefox', '2018'),
(131, 'firefox', '2018'),
(132, 'firefox', '2018'),
(133, 'chrome', '2018'),
(134, 'firefox', '2018'),
(135, 'firefox', '2018'),
(136, 'firefox', '2018'),
(137, 'firefox', '2018'),
(138, 'firefox', '2018'),
(139, 'firefox', '2018'),
(140, 'firefox', '2018'),
(141, 'firefox', '2018'),
(142, 'firefox', '2018'),
(143, 'firefox', '2018'),
(144, 'firefox', '2018'),
(145, 'firefox', '2018'),
(146, 'firefox', '2018'),
(147, 'firefox', '2018'),
(148, 'firefox', '2018'),
(149, 'firefox', '2018'),
(150, 'firefox', '2018'),
(151, 'firefox', '2018'),
(152, 'firefox', '2018'),
(153, 'firefox', '2018'),
(154, 'firefox', '2018'),
(155, 'firefox', '2018'),
(156, 'firefox', '2018'),
(157, 'firefox', '2018'),
(158, 'firefox', '2018'),
(159, 'firefox', '2018'),
(160, 'firefox', '2018'),
(161, 'firefox', '2018'),
(162, 'firefox', '2018'),
(163, 'firefox', '2018'),
(164, 'chrome', '2018'),
(165, 'chrome', '2018'),
(166, 'chrome', '2018'),
(167, 'chrome', '2018'),
(168, 'firefox', '2018'),
(169, 'firefox', '2018'),
(170, 'firefox', '2018'),
(171, 'firefox', '2018'),
(172, 'firefox', '2018'),
(173, 'firefox', '2018'),
(174, 'firefox', '2018'),
(175, 'firefox', '2018'),
(176, 'firefox', '2018'),
(177, 'firefox', '2018'),
(178, 'firefox', '2018'),
(179, 'firefox', '2018'),
(180, 'firefox', '2018'),
(181, 'firefox', '2018'),
(182, 'firefox', '2018'),
(183, 'firefox', '2018'),
(184, 'firefox', '2018'),
(185, 'firefox', '2018'),
(186, 'firefox', '2018'),
(187, 'firefox', '2018'),
(188, 'firefox', '2018'),
(189, 'firefox', '2018'),
(190, 'firefox', '2018'),
(191, 'firefox', '2018'),
(192, 'firefox', '2018'),
(193, 'chrome', '2018'),
(194, 'chrome', '2018'),
(195, 'firefox', '2018'),
(196, 'firefox', '2018'),
(197, 'firefox', '2018'),
(198, 'firefox', '2018'),
(199, 'firefox', '2018'),
(200, 'firefox', '2018'),
(201, 'firefox', '2018'),
(202, 'chrome', '2018'),
(203, 'ipad', '2018'),
(204, 'firefox', '2018'),
(205, 'ipad', '2018'),
(206, 'ipad', '2018'),
(207, 'ipad', '2018'),
(208, 'ipad', '2018'),
(209, 'ipad', '2018'),
(210, 'ipad', '2018'),
(211, 'ipad', '2018'),
(212, 'ipad', '2018'),
(213, 'firefox', '2018'),
(214, 'chrome', '2018'),
(215, 'ipad', '2018'),
(216, 'firefox', '2018'),
(217, 'firefox', '2018'),
(218, 'ipad', '2018'),
(219, 'firefox', '2018'),
(220, 'firefox', '2018'),
(221, 'firefox', '2018'),
(222, 'ipad', '2018'),
(223, 'ipad', '2018'),
(224, 'ipad', '2018'),
(225, 'ipad', '2018'),
(226, 'firefox', '2018'),
(227, 'firefox', '2018'),
(228, 'ipad', '2018'),
(229, 'chrome', '2018'),
(230, 'firefox', '2018'),
(231, 'chrome', '2018'),
(232, 'ipad', '2018'),
(233, 'chrome', '2018'),
(234, 'ipad', '2018'),
(235, 'firefox', '2018'),
(236, 'firefox', '2018'),
(237, 'firefox', '2018'),
(238, 'firefox', '2018'),
(239, 'firefox', '2018'),
(240, 'firefox', '2018'),
(241, 'firefox', '2018'),
(242, 'firefox', '2018'),
(243, 'firefox', '2018'),
(244, 'firefox', '2018'),
(245, 'firefox', '2018'),
(246, 'firefox', '2018'),
(247, 'firefox', '2018'),
(248, 'firefox', '2018'),
(249, 'firefox', '2018'),
(250, 'ipad', '2018'),
(251, 'ipad', '2018'),
(252, 'ipad', '2018'),
(253, 'ipad', '2018'),
(254, 'firefox', '2018'),
(255, 'firefox', '2018'),
(256, 'ipad', '2018'),
(257, 'ipad', '2018'),
(258, 'firefox', '2018'),
(259, 'ipad', '2018'),
(260, 'ipad', '2018'),
(261, 'firefox', '2018'),
(262, 'ipad', '2018'),
(263, 'ipad', '2018'),
(264, 'firefox', '2018'),
(265, 'ipad', '2018'),
(266, 'ipad', '2018'),
(267, 'ipad', '2018'),
(268, 'ipad', '2018'),
(269, 'ipad', '2018'),
(270, 'firefox', '2018'),
(271, 'firefox', '2018'),
(272, 'ipad', '2018'),
(273, 'ipad', '2018'),
(274, 'firefox', '2018'),
(275, 'firefox', '2018'),
(276, 'ipad', '2018'),
(277, 'firefox', '2018'),
(278, 'firefox', '2018'),
(279, 'firefox', '2018'),
(280, 'ipad', '2018'),
(281, 'firefox', '2018'),
(282, 'ipad', '2018'),
(283, 'firefox', '2018'),
(284, 'firefox', '2018'),
(285, 'firefox', '2018'),
(286, 'firefox', '2018'),
(287, 'firefox', '2018'),
(288, 'firefox', '2018'),
(289, 'firefox', '2018'),
(290, 'firefox', '2018'),
(291, 'firefox', '2018'),
(292, 'firefox', '2018'),
(293, 'firefox', '2018'),
(294, 'firefox', '2018'),
(295, 'firefox', '2018'),
(296, 'firefox', '2018'),
(297, 'firefox', '2018'),
(298, 'firefox', '2018'),
(299, 'firefox', '2018'),
(300, 'firefox', '2018'),
(301, 'firefox', '2018'),
(302, 'firefox', '2018'),
(303, 'firefox', '2018'),
(304, 'firefox', '2018'),
(305, 'firefox', '2018'),
(306, 'firefox', '2018'),
(307, 'firefox', '2018'),
(308, 'firefox', '2018'),
(309, 'firefox', '2018'),
(310, 'firefox', '2018'),
(311, 'ipad', '2018'),
(312, 'firefox', '2018'),
(313, 'firefox', '2018'),
(314, 'ipad', '2018'),
(315, 'ipad', '2018'),
(316, 'ipad', '2018'),
(317, 'ipad', '2018'),
(318, 'ipad', '2018'),
(319, 'ipad', '2018'),
(320, 'ipad', '2018'),
(321, 'ipad', '2018'),
(322, 'ipad', '2018'),
(323, 'ipad', '2018'),
(324, 'chrome', '2018'),
(325, 'firefox', '2018'),
(326, 'firefox', '2018'),
(327, 'firefox', '2018'),
(328, 'firefox', '2018'),
(329, 'chrome', '2018'),
(330, 'firefox', '2018'),
(331, 'firefox', '2018'),
(332, 'firefox', '2018'),
(333, 'firefox', '2018'),
(334, 'firefox', '2018'),
(335, 'firefox', '2018'),
(336, 'firefox', '2018'),
(337, 'firefox', '2018'),
(338, 'firefox', '2018'),
(339, 'firefox', '2018'),
(340, 'firefox', '2018'),
(341, 'firefox', '2018'),
(342, 'firefox', '2018'),
(343, 'firefox', '2018'),
(344, 'firefox', '2018'),
(345, 'firefox', '2018'),
(346, 'firefox', '2018'),
(347, 'firefox', '2018'),
(348, 'firefox', '2018'),
(349, 'firefox', '2018'),
(350, 'firefox', '2018'),
(351, 'firefox', '2018'),
(352, 'firefox', '2018'),
(353, 'firefox', '2018'),
(354, 'firefox', '2018'),
(355, 'firefox', '2018'),
(356, 'firefox', '2018'),
(357, 'firefox', '2018'),
(358, 'firefox', '2018'),
(359, 'firefox', '2018'),
(360, 'firefox', '2018'),
(361, 'firefox', '2018'),
(362, 'firefox', '2018'),
(363, 'firefox', '2018'),
(364, 'firefox', '2018'),
(365, 'firefox', '2018'),
(366, 'firefox', '2018'),
(367, 'firefox', '2018'),
(368, 'firefox', '2018'),
(369, 'firefox', '2018'),
(370, 'firefox', '2018'),
(371, 'firefox', '2018'),
(372, 'firefox', '2018'),
(373, 'firefox', '2018'),
(374, 'firefox', '2018'),
(375, 'firefox', '2018'),
(376, 'chrome', '2018'),
(377, 'chrome', '2018'),
(378, 'firefox', '2018'),
(379, 'firefox', '2018'),
(380, 'firefox', '2018'),
(381, 'chrome', '2018'),
(382, 'firefox', '2018'),
(383, 'firefox', '2018'),
(384, 'firefox', '2018'),
(385, 'firefox', '2018'),
(386, 'firefox', '2018'),
(387, 'firefox', '2018'),
(388, 'firefox', '2018'),
(389, 'firefox', '2018'),
(390, 'firefox', '2018'),
(391, 'firefox', '2018'),
(392, 'firefox', '2018'),
(393, 'firefox', '2018'),
(394, 'firefox', '2018'),
(395, 'firefox', '2018'),
(396, 'firefox', '2018'),
(397, 'firefox', '2018'),
(398, 'firefox', '2018'),
(399, 'ipad', '2018'),
(400, 'chrome', '2018'),
(401, 'ipad', '2018'),
(402, 'ipad', '2018'),
(403, 'ipad', '2018'),
(404, 'ipad', '2018'),
(405, 'ipad', '2018'),
(406, 'iphone', '2018'),
(407, 'ipad', '2018'),
(408, 'chrome', '2018'),
(409, 'firefox', '2018'),
(410, 'chrome', '2018'),
(411, 'chrome', '2018'),
(412, 'chrome', '2018'),
(413, 'chrome', '2018'),
(414, 'firefox', '2018'),
(415, 'chrome', '2018'),
(416, 'firefox', '2018'),
(417, 'firefox', '2018'),
(418, 'chrome', '2018'),
(419, 'chrome', '2018'),
(420, 'chrome', '2018'),
(421, 'chrome', '2018'),
(422, 'chrome', '2018'),
(423, 'firefox', '2018'),
(424, 'firefox', '2018'),
(425, 'firefox', '2018'),
(426, 'firefox', '2018'),
(427, 'firefox', '2018'),
(428, 'firefox', '2018'),
(429, 'firefox', '2018'),
(430, 'firefox', '2018'),
(431, 'chrome', '2018'),
(432, 'chrome', '2018'),
(433, 'firefox', '2018'),
(434, 'firefox', '2018'),
(435, 'firefox', '2018'),
(436, 'firefox', '2018'),
(437, 'firefox', '2018'),
(438, 'firefox', '2018'),
(439, 'firefox', '2018'),
(440, 'firefox', '2018'),
(441, 'firefox', '2018'),
(442, 'firefox', '2018'),
(443, 'firefox', '2018'),
(444, 'firefox', '2018'),
(445, 'firefox', '2018'),
(446, 'firefox', '2018'),
(447, 'firefox', '2018'),
(448, 'firefox', '2018'),
(449, 'firefox', '2018'),
(450, 'firefox', '2018'),
(451, 'firefox', '2018'),
(452, 'firefox', '2018'),
(453, 'firefox', '2018'),
(454, 'firefox', '2018'),
(455, 'firefox', '2018'),
(456, 'firefox', '2018'),
(457, 'firefox', '2018'),
(458, 'firefox', '2018'),
(459, 'firefox', '2018'),
(460, 'firefox', '2018'),
(461, 'firefox', '2018'),
(462, 'firefox', '2018'),
(463, 'firefox', '2018'),
(464, 'firefox', '2018'),
(465, 'firefox', '2018'),
(466, 'firefox', '2018'),
(467, 'firefox', '2018'),
(468, 'firefox', '2018'),
(469, 'firefox', '2018'),
(470, 'firefox', '2018'),
(471, 'firefox', '2018'),
(472, 'firefox', '2018'),
(473, 'firefox', '2018'),
(474, 'firefox', '2018'),
(475, 'firefox', '2018'),
(476, 'firefox', '2018'),
(477, 'firefox', '2018'),
(478, 'firefox', '2018'),
(479, 'firefox', '2018'),
(480, 'firefox', '2018'),
(481, 'firefox', '2018'),
(482, 'firefox', '2018'),
(483, 'firefox', '2018'),
(484, 'firefox', '2018'),
(485, 'firefox', '2018'),
(486, 'firefox', '2018'),
(487, 'firefox', '2018'),
(488, 'firefox', '2018'),
(489, 'firefox', '2018'),
(490, 'firefox', '2018'),
(491, 'firefox', '2018'),
(492, 'firefox', '2018'),
(493, 'firefox', '2018'),
(494, 'firefox', '2018'),
(495, 'firefox', '2018'),
(496, 'firefox', '2018'),
(497, 'firefox', '2018'),
(498, 'firefox', '2018'),
(499, 'firefox', '2018'),
(500, 'firefox', '2018'),
(501, 'firefox', '2018'),
(502, 'firefox', '2018'),
(503, 'firefox', '2018'),
(504, 'firefox', '2018'),
(505, 'firefox', '2018'),
(506, 'firefox', '2018'),
(507, 'firefox', '2018'),
(508, 'firefox', '2018'),
(509, 'firefox', '2018'),
(510, 'firefox', '2018'),
(511, 'chrome', '2018'),
(512, 'firefox', '2018'),
(513, 'firefox', '2018'),
(514, 'firefox', '2018'),
(515, 'firefox', '2018'),
(516, 'firefox', '2018'),
(517, 'firefox', '2018'),
(518, 'firefox', '2018'),
(519, 'chrome', '2018'),
(520, 'firefox', '2018'),
(521, 'firefox', '2018'),
(522, 'firefox', '2018'),
(523, 'firefox', '2018'),
(524, 'chrome', '2018'),
(525, 'firefox', '2018'),
(526, 'firefox', '2018'),
(527, 'firefox', '2018'),
(528, 'firefox', '2018'),
(529, 'firefox', '2018'),
(530, 'firefox', '2018'),
(531, 'firefox', '2018'),
(532, 'firefox', '2018'),
(533, 'firefox', '2018'),
(534, 'firefox', '2018'),
(535, 'firefox', '2018'),
(536, 'firefox', '2018'),
(537, 'firefox', '2018'),
(538, 'firefox', '2018'),
(539, 'firefox', '2018'),
(540, 'firefox', '2018'),
(541, 'firefox', '2018'),
(542, 'firefox', '2018'),
(543, 'firefox', '2018'),
(544, 'firefox', '2018'),
(545, 'firefox', '2018'),
(546, 'firefox', '2018'),
(547, 'firefox', '2018'),
(548, 'chrome', '2018'),
(549, 'chrome', '2018'),
(550, 'firefox', '2018'),
(551, 'firefox', '2018'),
(552, 'firefox', '2018'),
(553, 'firefox', '2018'),
(554, 'firefox', '2018'),
(555, 'firefox', '2018'),
(556, 'firefox', '2018'),
(557, 'firefox', '2018'),
(558, 'firefox', '2018'),
(559, 'firefox', '2018'),
(560, 'firefox', '2018'),
(561, 'firefox', '2018'),
(562, 'firefox', '2018'),
(563, 'firefox', '2018'),
(564, 'firefox', '2018'),
(565, 'firefox', '2018'),
(566, 'firefox', '2018'),
(567, 'firefox', '2018'),
(568, 'firefox', '2018'),
(569, 'firefox', '2018'),
(570, 'firefox', '2018'),
(571, 'firefox', '2018'),
(572, 'firefox', '2018'),
(573, 'firefox', '2018'),
(574, 'firefox', '2018'),
(575, 'firefox', '2018'),
(576, 'firefox', '2018'),
(577, 'firefox', '2018'),
(578, 'firefox', '2018'),
(579, 'firefox', '2018'),
(580, 'firefox', '2018'),
(581, 'firefox', '2018'),
(582, 'firefox', '2018'),
(583, 'firefox', '2018'),
(584, 'firefox', '2018'),
(585, 'firefox', '2018'),
(586, 'firefox', '2018'),
(587, 'firefox', '2018'),
(588, 'firefox', '2018'),
(589, 'firefox', '2018'),
(590, 'firefox', '2018'),
(591, 'firefox', '2018'),
(592, 'firefox', '2018'),
(593, 'firefox', '2018'),
(594, 'chrome', '2018'),
(595, 'firefox', '2018'),
(596, 'chrome', '2018'),
(597, 'chrome', '2018'),
(598, 'chrome', '2018'),
(599, 'chrome', '2018'),
(600, 'firefox', '2018'),
(601, 'chrome', '2018'),
(602, 'chrome', '2018'),
(603, 'firefox', '2018'),
(604, 'chrome', '2018'),
(605, 'chrome', '2018'),
(606, 'chrome', '2018'),
(607, 'chrome', '2018'),
(608, 'chrome', '2018'),
(609, 'chrome', '2018'),
(610, 'chrome', '2018'),
(611, 'firefox', '2018'),
(612, 'firefox', '2018'),
(613, 'chrome', '2018'),
(614, 'chrome', '2018'),
(615, 'firefox', '2018'),
(616, 'firefox', '2018'),
(617, 'chrome', '2018'),
(618, 'firefox', '2018'),
(619, 'firefox', '2018'),
(620, 'firefox', '2018'),
(621, 'chrome', '2018'),
(622, 'firefox', '2018'),
(623, 'firefox', '2018'),
(624, 'firefox', '2018'),
(625, 'firefox', '2018'),
(626, 'firefox', '2018'),
(627, 'firefox', '2018'),
(628, 'firefox', '2018'),
(629, 'firefox', '2018'),
(630, 'firefox', '2018'),
(631, 'firefox', '2018'),
(632, 'firefox', '2018'),
(633, 'firefox', '2018'),
(634, 'firefox', '2018'),
(635, 'firefox', '2018'),
(636, 'firefox', '2018'),
(637, 'firefox', '2018'),
(638, 'firefox', '2018'),
(639, 'firefox', '2018'),
(640, 'firefox', '2018'),
(641, 'firefox', '2018'),
(642, 'firefox', '2018'),
(643, 'firefox', '2018'),
(644, 'firefox', '2018'),
(645, 'firefox', '2018'),
(646, 'firefox', '2018'),
(647, 'firefox', '2018'),
(648, 'firefox', '2018'),
(649, 'firefox', '2018'),
(650, 'firefox', '2018'),
(651, 'firefox', '2018'),
(652, 'firefox', '2018'),
(653, 'firefox', '2018'),
(654, 'firefox', '2018'),
(655, 'firefox', '2018'),
(656, 'firefox', '2018'),
(657, 'firefox', '2018'),
(658, 'firefox', '2018'),
(659, 'firefox', '2018'),
(660, 'firefox', '2018'),
(661, 'firefox', '2018'),
(662, 'firefox', '2018'),
(663, 'chrome', '2018'),
(664, 'firefox', '2018'),
(665, 'firefox', '2018'),
(666, 'firefox', '2018'),
(667, 'firefox', '2018'),
(668, 'firefox', '2018'),
(669, 'firefox', '2018'),
(670, 'firefox', '2018'),
(671, 'firefox', '2018'),
(672, 'firefox', '2018'),
(673, 'firefox', '2018'),
(674, 'firefox', '2018'),
(675, 'firefox', '2018'),
(676, 'firefox', '2018'),
(677, 'firefox', '2018'),
(678, 'firefox', '2018'),
(679, 'firefox', '2018'),
(680, 'firefox', '2018'),
(681, 'firefox', '2018'),
(682, 'firefox', '2018'),
(683, 'firefox', '2018'),
(684, 'firefox', '2018'),
(685, 'firefox', '2018'),
(686, 'firefox', '2018'),
(687, 'firefox', '2018'),
(688, 'firefox', '2018'),
(689, 'firefox', '2018'),
(690, 'firefox', '2018'),
(691, 'firefox', '2018'),
(692, 'firefox', '2018'),
(693, 'firefox', '2018'),
(694, 'firefox', '2018'),
(695, 'firefox', '2018'),
(696, 'firefox', '2018'),
(697, 'firefox', '2018'),
(698, 'firefox', '2018'),
(699, 'firefox', '2018'),
(700, 'firefox', '2018'),
(701, 'firefox', '2018'),
(702, 'firefox', '2018'),
(703, 'firefox', '2018'),
(704, 'firefox', '2018'),
(705, 'firefox', '2018'),
(706, 'firefox', '2018'),
(707, 'firefox', '2018'),
(708, 'firefox', '2018'),
(709, 'firefox', '2018'),
(710, 'firefox', '2018'),
(711, 'firefox', '2018'),
(712, 'firefox', '2018'),
(713, 'firefox', '2018'),
(714, 'firefox', '2018'),
(715, 'firefox', '2018'),
(716, 'firefox', '2018'),
(717, 'firefox', '2018'),
(718, 'firefox', '2018'),
(719, 'firefox', '2018'),
(720, 'firefox', '2018'),
(721, 'firefox', '2018'),
(722, 'firefox', '2018'),
(723, 'firefox', '2018'),
(724, 'firefox', '2018'),
(725, 'firefox', '2018'),
(726, 'firefox', '2018'),
(727, 'firefox', '2018'),
(728, 'firefox', '2018'),
(729, 'firefox', '2018'),
(730, 'firefox', '2018'),
(731, 'firefox', '2018'),
(732, 'firefox', '2018'),
(733, 'firefox', '2018'),
(734, 'firefox', '2018'),
(735, 'firefox', '2018'),
(736, 'firefox', '2018'),
(737, 'firefox', '2018'),
(738, 'chrome', '2018'),
(739, 'firefox', '2018'),
(740, 'chrome', '2018'),
(741, 'chrome', '2018'),
(742, 'chrome', '2018'),
(743, 'firefox', '2018'),
(744, 'firefox', '2018'),
(745, 'firefox', '2018'),
(746, 'firefox', '2018'),
(747, 'chrome', '2018'),
(748, 'firefox', '2018'),
(749, 'firefox', '2018'),
(750, 'firefox', '2018'),
(751, 'chrome', '2018'),
(752, 'chrome', '2018'),
(753, 'firefox', '2018'),
(754, 'firefox', '2018'),
(755, 'firefox', '2018'),
(756, 'firefox', '2018'),
(757, 'firefox', '2018'),
(758, 'firefox', '2018'),
(759, 'firefox', '2018'),
(760, 'firefox', '2018'),
(761, 'firefox', '2018'),
(762, 'firefox', '2018'),
(763, 'firefox', '2018'),
(764, 'firefox', '2018'),
(765, 'firefox', '2018'),
(766, 'firefox', '2018'),
(767, 'firefox', '2018'),
(768, 'firefox', '2018'),
(769, 'firefox', '2018'),
(770, 'firefox', '2018'),
(771, 'firefox', '2018'),
(772, 'firefox', '2018'),
(773, 'chrome', '2018'),
(774, 'firefox', '2018'),
(775, 'firefox', '2018'),
(776, 'firefox', '2018'),
(777, 'firefox', '2018'),
(778, 'firefox', '2018'),
(779, 'firefox', '2018'),
(780, 'firefox', '2018'),
(781, 'firefox', '2018'),
(782, 'firefox', '2018'),
(783, 'ie', '2018'),
(784, 'firefox', '2018'),
(785, 'firefox', '2018'),
(786, 'firefox', '2018'),
(787, 'firefox', '2018'),
(788, 'firefox', '2018'),
(789, 'firefox', '2018'),
(790, 'firefox', '2018'),
(791, 'firefox', '2018'),
(792, 'firefox', '2018'),
(793, 'firefox', '2018'),
(794, 'firefox', '2018'),
(795, 'firefox', '2018'),
(796, 'firefox', '2018'),
(797, 'firefox', '2018'),
(798, 'firefox', '2018'),
(799, 'firefox', '2018'),
(800, 'firefox', '2018'),
(801, 'firefox', '2018'),
(802, 'firefox', '2018'),
(803, 'firefox', '2018'),
(804, 'firefox', '2018'),
(805, 'firefox', '2018'),
(806, 'firefox', '2018'),
(807, 'firefox', '2018'),
(808, 'firefox', '2018'),
(809, 'firefox', '2018'),
(810, 'firefox', '2018'),
(811, 'firefox', '2018'),
(812, 'firefox', '2018'),
(813, 'firefox', '2018'),
(814, 'firefox', '2018'),
(815, 'firefox', '2018'),
(816, 'firefox', '2018'),
(817, 'firefox', '2018'),
(818, 'firefox', '2018'),
(819, 'firefox', '2018'),
(820, 'firefox', '2018'),
(821, 'firefox', '2018'),
(822, 'firefox', '2018'),
(823, 'firefox', '2018'),
(824, 'firefox', '2018'),
(825, 'firefox', '2018'),
(826, 'firefox', '2018'),
(827, 'firefox', '2018'),
(828, 'firefox', '2018'),
(829, 'firefox', '2018'),
(830, 'firefox', '2018'),
(831, 'firefox', '2018'),
(832, 'firefox', '2018'),
(833, 'firefox', '2018'),
(834, 'firefox', '2018'),
(835, 'firefox', '2018'),
(836, 'firefox', '2018'),
(837, 'firefox', '2018'),
(838, 'firefox', '2018'),
(839, 'firefox', '2018'),
(840, 'firefox', '2018'),
(841, 'firefox', '2018'),
(842, 'firefox', '2018'),
(843, 'firefox', '2018'),
(844, 'firefox', '2018'),
(845, 'chrome', '2018'),
(846, 'chrome', '2018'),
(847, 'firefox', '2018'),
(848, 'firefox', '2018'),
(849, 'firefox', '2018'),
(850, 'firefox', '2018'),
(851, 'firefox', '2018'),
(852, 'firefox', '2018'),
(853, 'firefox', '2018'),
(854, 'firefox', '2018'),
(855, 'firefox', '2018'),
(856, 'chrome', '2018'),
(857, 'chrome', '2018'),
(858, 'chrome', '2018'),
(859, 'chrome', '2018'),
(860, 'firefox', '2018'),
(861, 'firefox', '2018'),
(862, 'firefox', '2018'),
(863, 'firefox', '2018'),
(864, 'firefox', '2018'),
(865, 'chrome', '2018'),
(866, 'chrome', '2018'),
(867, 'firefox', '2018'),
(868, 'firefox', '2018'),
(869, 'firefox', '2018'),
(870, 'firefox', '2018'),
(871, 'firefox', '2018'),
(872, 'firefox', '2018'),
(873, 'firefox', '2018'),
(874, 'firefox', '2018'),
(875, 'firefox', '2018'),
(876, 'firefox', '2018'),
(877, 'firefox', '2018'),
(878, 'firefox', '2018'),
(879, 'firefox', '2018'),
(880, 'firefox', '2018'),
(881, 'firefox', '2018'),
(882, 'firefox', '2018'),
(883, 'firefox', '2018'),
(884, 'firefox', '2018'),
(885, 'firefox', '2018'),
(886, 'firefox', '2018'),
(887, 'firefox', '2018'),
(888, 'firefox', '2018'),
(889, 'firefox', '2018'),
(890, 'firefox', '2018'),
(891, 'firefox', '2018'),
(892, 'firefox', '2018'),
(893, 'chrome', '2018'),
(894, 'firefox', '2018'),
(895, 'firefox', '2018'),
(896, 'firefox', '2018'),
(897, 'firefox', '2018'),
(898, 'firefox', '2018'),
(899, 'firefox', '2018'),
(900, 'firefox', '2018'),
(901, 'firefox', '2018'),
(902, 'firefox', '2018'),
(903, 'firefox', '2018'),
(904, 'firefox', '2018'),
(905, 'firefox', '2018'),
(906, 'firefox', '2018'),
(907, 'firefox', '2018'),
(908, 'firefox', '2018'),
(909, 'firefox', '2018'),
(910, 'firefox', '2018'),
(911, 'firefox', '2018'),
(912, 'chrome', '2018'),
(913, 'firefox', '2018'),
(914, 'firefox', '2018'),
(915, 'firefox', '2018'),
(916, 'firefox', '2018'),
(917, 'firefox', '2018'),
(918, 'firefox', '2018'),
(919, 'firefox', '2018'),
(920, 'firefox', '2018'),
(921, 'chrome', '2018'),
(922, 'chrome', '2018'),
(923, 'firefox', '2018'),
(924, 'firefox', '2018'),
(925, 'firefox', '2018'),
(926, 'firefox', '2018'),
(927, 'firefox', '2018'),
(928, 'firefox', '2018'),
(929, 'firefox', '2018'),
(930, 'firefox', '2018'),
(931, 'firefox', '2018'),
(932, 'firefox', '2018'),
(933, 'firefox', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `cat_value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_value`) VALUES
(14, 'ionic 3'),
(15, 'ionic 4'),
(16, 'React Native'),
(17, 'Flutter'),
(18, 'grid system too');

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `post_content` varchar(5000) NOT NULL,
  `post_id` int(255) NOT NULL,
  `approval` varchar(1000) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments_table_video`
--

CREATE TABLE `comments_table_video` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `post_content` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `approval` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `continent_detection`
--

CREATE TABLE `continent_detection` (
  `id` int(255) NOT NULL,
  `continent_name` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continent_detection`
--

INSERT INTO `continent_detection` (`id`, `continent_name`, `year`) VALUES
(1, 'africa', '2018'),
(2, 'asia', '2018'),
(3, 'africa', '2018'),
(4, 'asia', '2018'),
(5, 'africa', '2018'),
(6, 'europe', '2018'),
(7, 'africa', '2018'),
(8, 'north america', '2018'),
(9, 'south america', '2018'),
(10, 'north america', '2018'),
(11, 'south america', '2018'),
(12, 'europe', '2018'),
(13, 'africa', ''),
(14, 'africa', ''),
(15, 'africa', ''),
(16, 'africa', ''),
(17, 'africa', ''),
(18, 'africa', ''),
(19, 'africa', ''),
(20, 'africa', ''),
(21, 'africa', ''),
(22, 'africa', ''),
(23, 'africa', ''),
(24, 'africa', ''),
(25, 'africa', ''),
(26, 'africa', ''),
(27, 'africa', ''),
(28, 'africa', ''),
(29, 'africa', ''),
(30, 'africa', ''),
(31, 'africa', ''),
(32, 'africa', ''),
(33, 'africa', ''),
(34, 'africa', ''),
(35, 'africa', ''),
(36, 'africa', ''),
(37, 'africa', ''),
(38, 'africa', ''),
(39, 'africa', ''),
(40, 'africa', ''),
(41, 'africa', ''),
(42, 'africa', ''),
(43, 'africa', ''),
(44, 'africa', ''),
(45, 'africa', ''),
(46, 'africa', ''),
(47, 'africa', ''),
(48, 'africa', ''),
(49, 'africa', ''),
(50, 'africa', ''),
(51, 'africa', ''),
(52, 'africa', ''),
(53, 'africa', ''),
(54, 'africa', ''),
(55, 'africa', ''),
(56, 'africa', ''),
(57, 'africa', ''),
(58, 'africa', ''),
(59, 'africa', ''),
(60, 'africa', ''),
(61, 'africa', ''),
(62, 'africa', ''),
(63, 'africa', ''),
(64, 'africa', ''),
(65, 'africa', ''),
(66, 'africa', ''),
(67, 'africa', ''),
(68, 'africa', ''),
(69, 'africa', ''),
(70, 'africa', ''),
(71, 'africa', ''),
(72, 'africa', ''),
(73, 'africa', ''),
(74, 'africa', ''),
(75, 'africa', ''),
(76, 'africa', ''),
(77, 'africa', ''),
(78, 'africa', ''),
(79, 'africa', ''),
(80, 'africa', ''),
(81, 'africa', ''),
(82, 'africa', ''),
(83, 'africa', ''),
(84, 'africa', ''),
(85, 'africa', ''),
(86, 'africa', ''),
(87, 'africa', ''),
(88, 'africa', ''),
(89, 'africa', ''),
(90, 'africa', ''),
(91, 'africa', ''),
(92, 'africa', ''),
(93, 'africa', ''),
(94, 'africa', ''),
(95, 'africa', ''),
(96, 'africa', ''),
(97, 'africa', ''),
(98, 'africa', ''),
(99, 'africa', ''),
(100, 'africa', ''),
(101, 'africa', ''),
(102, 'africa', ''),
(103, 'africa', ''),
(104, 'africa', ''),
(105, 'africa', ''),
(106, 'africa', ''),
(107, 'africa', ''),
(108, 'africa', ''),
(109, 'africa', ''),
(110, 'africa', ''),
(111, 'africa', ''),
(112, 'africa', ''),
(113, 'africa', ''),
(114, 'africa', ''),
(115, 'africa', ''),
(116, 'africa', ''),
(117, 'africa', ''),
(118, 'africa', ''),
(119, 'africa', ''),
(120, 'africa', ''),
(121, 'africa', ''),
(122, 'africa', ''),
(123, 'africa', ''),
(124, 'africa', ''),
(125, 'africa', ''),
(126, 'africa', ''),
(127, 'africa', ''),
(128, 'africa', ''),
(129, 'africa', ''),
(130, 'africa', ''),
(131, 'africa', ''),
(132, 'africa', ''),
(133, 'africa', ''),
(134, 'africa', ''),
(135, 'africa', ''),
(136, 'africa', ''),
(137, 'africa', ''),
(138, 'africa', ''),
(139, 'africa', ''),
(140, 'africa', ''),
(141, 'africa', ''),
(142, 'africa', ''),
(143, 'africa', ''),
(144, 'africa', ''),
(145, 'africa', ''),
(146, 'africa', ''),
(147, 'africa', ''),
(148, 'africa', ''),
(149, 'africa', ''),
(150, 'africa', ''),
(151, 'africa', ''),
(152, 'africa', ''),
(153, 'africa', ''),
(154, 'africa', ''),
(155, 'africa', ''),
(156, 'africa', ''),
(157, 'africa', ''),
(158, 'africa', ''),
(159, 'africa', ''),
(160, 'africa', ''),
(161, 'africa', ''),
(162, 'africa', ''),
(163, 'africa', ''),
(164, 'africa', ''),
(165, 'africa', ''),
(166, 'africa', ''),
(167, 'africa', ''),
(168, 'africa', ''),
(169, 'africa', ''),
(170, 'africa', ''),
(171, 'africa', ''),
(172, 'africa', ''),
(173, 'africa', ''),
(174, 'africa', ''),
(175, 'africa', ''),
(176, 'africa', ''),
(177, 'africa', ''),
(178, 'africa', ''),
(179, 'africa', ''),
(180, 'africa', ''),
(181, 'africa', ''),
(182, 'africa', ''),
(183, 'africa', ''),
(184, 'africa', ''),
(185, 'africa', ''),
(186, 'africa', ''),
(187, 'africa', ''),
(188, 'africa', ''),
(189, 'africa', ''),
(190, 'africa', ''),
(191, 'africa', ''),
(192, 'africa', ''),
(193, 'africa', ''),
(194, 'africa', ''),
(195, 'africa', ''),
(196, 'africa', ''),
(197, 'africa', ''),
(198, 'africa', ''),
(199, 'africa', ''),
(200, 'africa', ''),
(201, 'africa', ''),
(202, 'africa', ''),
(203, 'africa', ''),
(204, 'africa', ''),
(205, 'africa', ''),
(206, 'africa', ''),
(207, 'africa', ''),
(208, 'africa', ''),
(209, 'africa', ''),
(210, 'africa', ''),
(211, 'africa', ''),
(212, 'africa', ''),
(213, 'africa', ''),
(214, 'africa', ''),
(215, 'africa', ''),
(216, 'africa', ''),
(217, 'africa', ''),
(218, 'africa', ''),
(219, 'africa', ''),
(220, 'africa', ''),
(221, 'africa', ''),
(222, 'africa', ''),
(223, 'africa', ''),
(224, 'africa', ''),
(225, 'africa', ''),
(226, 'africa', ''),
(227, 'africa', ''),
(228, 'africa', ''),
(229, 'africa', ''),
(230, 'africa', ''),
(231, 'africa', ''),
(232, 'africa', ''),
(233, 'africa', ''),
(234, 'africa', ''),
(235, 'africa', ''),
(236, 'africa', ''),
(237, 'africa', ''),
(238, 'africa', ''),
(239, 'africa', ''),
(240, 'africa', ''),
(241, 'africa', ''),
(242, 'africa', ''),
(243, 'africa', ''),
(244, 'africa', ''),
(245, 'africa', ''),
(246, 'africa', ''),
(247, 'africa', ''),
(248, 'africa', ''),
(249, 'africa', ''),
(250, 'africa', ''),
(251, 'africa', ''),
(252, 'africa', ''),
(253, 'africa', ''),
(254, 'africa', ''),
(255, 'africa', ''),
(256, 'africa', ''),
(257, 'africa', ''),
(258, 'africa', ''),
(259, 'africa', ''),
(260, 'africa', ''),
(261, 'africa', ''),
(262, 'africa', ''),
(263, 'africa', ''),
(264, 'africa', ''),
(265, 'africa', ''),
(266, 'africa', ''),
(267, 'africa', ''),
(268, 'africa', ''),
(269, 'africa', ''),
(270, 'africa', ''),
(271, 'africa', ''),
(272, 'africa', ''),
(273, 'africa', ''),
(274, 'africa', ''),
(275, 'africa', ''),
(276, 'africa', ''),
(277, 'africa', ''),
(278, 'africa', ''),
(279, 'africa', ''),
(280, 'africa', ''),
(281, 'africa', ''),
(282, 'africa', ''),
(283, 'africa', ''),
(284, 'africa', ''),
(285, 'africa', ''),
(286, 'africa', ''),
(287, 'africa', ''),
(288, 'africa', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `subject`, `message`, `seen`) VALUES
(1, 'ssss', 'akpufranklin2@gmail.com', 'ssssssss', 'sssssss', 1),
(2, 'ssss', 'akpufranklin2@gmail.com', 'ssssssss', 'sssssss', 1),
(3, 'ssss', 'akpufranklin2@gmail.com', 'ssssssss', 'sssssss', 1),
(6, 'Akpu Franklin', 'Akpufranklin222@gmail.com', 'Web hostin', 'How was your day Na please tell me', 1),
(7, 'mnjknk/u', 'hhuih@gmail.com', 'ggg', 'ggggggggggggg', 1),
(8, 'kuyg', 'aaaa@gmail.com', 'dddddd', 'www', 1),
(9, 'bast', 'aaaa@gmail.com', 'dddddd', 'ssssssssssssssss', 1),
(32, 'tester', 'akpufranklin2@gmail.com', 'tesr', 'dddddddddddddddddddddddddddddddddddddd', 1),
(33, 'ddd', 'akpufranklin555@gmail.com', 'dddddddddd', 'dddddddddddddddddddddd', 1),
(34, 'cccc', 'akpufranklin2@gmail.com', 'fjhdjfhgg', 'dddddddddddddddddddd', 1),
(35, 'nnamdi', 'nnamdi@gmail.com', 'pes 2017', 'why php over angular', 1),
(36, 'schoolpay', 'nnamdi1@gmail.com', 'j', 'ghj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(255) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `recent_time` varchar(1000) NOT NULL,
  `archive_format` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `header`, `url`, `file_name`, `recent_time`, `archive_format`, `description`) VALUES
(8, 'catro institute', 'https://castroinstitue.com', '1536706735.PNG', '1536706735', 'September/2018', 'a school portal that allows for checking of results, payement of school fees by parents and lots more'),
(9, 'sage e-library', 'https://castroinstitue.com', '1536707057.PNG', '1536707056', 'September/2018', 'an e library for with functionalities like login in with qr code manage books and lots more...');

-- --------------------------------------------------------

--
-- Table structure for table `post_content`
--

CREATE TABLE `post_content` (
  `id` int(255) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `post` varchar(5000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `recent_time` varchar(1000) NOT NULL,
  `mth_yr_upload` varchar(1000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `clicks` int(255) NOT NULL,
  `shares` int(255) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `push_sent` int(255) NOT NULL,
  `content_creator_name` varchar(1000) NOT NULL,
  `content_creator_image` varchar(1000) NOT NULL,
  `content_creator_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_content`
--

INSERT INTO `post_content` (`id`, `header`, `post`, `category`, `recent_time`, `mth_yr_upload`, `file_name`, `clicks`, `shares`, `month`, `year`, `push_sent`, `content_creator_name`, `content_creator_image`, `content_creator_description`) VALUES
(135, 'React Native Core', 'Test and see that the lord is good Test and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is goodTest and see that the lord is good\r\n\r\n', 'React Native', '1536778528', 'September/2018', '1536778529.jpg', 37, 0, 'September', '2018', 1, 'razor', '1536536123.jpg', 'this is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloruy to Godthis is me i love books i am craxy gloru'),
(136, 'hello how was your day', '<div>kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg hvvvvvvgfhvvvvvvgfv gh v h dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh jfhhhhhhg hydydyd <br></div><div>kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd <br></div><br>', 'ionic 4', '1539365297', 'October/2018', '1539365298.png', 1, 0, 'October', '2018', 1, 'dddddddddddd', '1522374369.jpg', 'ffffffffffffff'),
(137, 'hello how was your day ddddddd', '<div>kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg hvvvvvvgfhvvvvvvgfv gh v h dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh jfhhhhhhg hydydyd <br></div><div>kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd kjfnbhhvghbyb hbyvbgv gv gv ghdvgdhbd hhg b gvgh vdg hvghvhg vgh vg vg \r\nhvvvvvvgfhvvvvvvgfv gh v h \r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf fnhh \r\njfhhhhhhg hydydyd <br></div><br>', 'ionic 4', '1539365331', 'October/2018', '1539365331.png', 3, 0, 'October', '2018', 1, 'dddddddddddd', '1522374369.jpg', 'ffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `push_table`
--

CREATE TABLE `push_table` (
  `id` int(255) NOT NULL,
  `cdate` varchar(1000) NOT NULL,
  `token` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replies_table`
--

CREATE TABLE `replies_table` (
  `id` int(255) NOT NULL,
  `approval` varchar(1000) NOT NULL,
  `post_id` int(255) NOT NULL,
  `comment_id` int(255) NOT NULL,
  `post_content` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `email` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`email`, `id`) VALUES
('akpufranklin4@gmail.com', 1),
('akpufranklin3@gmail.com', 2),
('akpufranklin222@gmail.com', 3),
('akpufranklin444@gmail.com', 4),
('akpufranklin666@gmail.com', 5),
('akpufranklin2@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `recent_time` varchar(1000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `archive_format` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `header`, `recent_time`, `file_name`, `archive_format`, `description`) VALUES
(1, 'Nnamdi', '1536751406', '1536751406.jpg', 'September/2018', 'such an exceptional developer creative in all ways'),
(3, 'boys carlu', '1536760403', '1536760403.jpg', 'September/2018', 'best company ever'),
(4, 'boston kosi', '1536763335', '1536763336.jpg', 'September/2018', 'best work ever'),
(5, 'mjh', '1537017670', '1537017671.jpg', 'September/2018', 'jhh');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `confirm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(255) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `recent_time` varchar(1000) NOT NULL,
  `archive_format` varchar(1000) NOT NULL,
  `video_name` varchar(1000) NOT NULL,
  `clicks` int(255) NOT NULL,
  `watch_to_end` int(255) NOT NULL,
  `shares` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `header`, `recent_time`, `archive_format`, `video_name`, `clicks`, `watch_to_end`, `shares`) VALUES
(1, 'ali and the boss ', '1517276433', 'January/2018', '1517276434.mp4', 1, 2, 0),
(2, 'pascal theorem', '1517279725', 'January/2018', '1517279726.mp4', 0, 0, 0),
(3, 'ona ona na na na nasnanan nan nannannanan', '1517281434', 'January/2018', '1517281434.mp4', 1, 1, 0),
(4, 'orenze', '1517284434', 'January/2018', '1517284435.mp4', 0, 0, 0),
(6, 'precious holy spirit', '1517284538', 'January/2018', '1517284539.mp4', 4, 6, 0),
(9, 'home alone please boss we are calm', '1517440162', 'February/2018', '1517440162.mp4', 8, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browser_data`
--
ALTER TABLE `browser_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments_table_video`
--
ALTER TABLE `comments_table_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `continent_detection`
--
ALTER TABLE `continent_detection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_content`
--
ALTER TABLE `post_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `push_table`
--
ALTER TABLE `push_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies_table`
--
ALTER TABLE `replies_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `browser_data`
--
ALTER TABLE `browser_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=934;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments_table_video`
--
ALTER TABLE `comments_table_video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `continent_detection`
--
ALTER TABLE `continent_detection`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_content`
--
ALTER TABLE `post_content`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `push_table`
--
ALTER TABLE `push_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies_table`
--
ALTER TABLE `replies_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
