-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2017 at 11:31 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ewetube`
--

-- --------------------------------------------------------

--
-- Table structure for table `meat_produced`
--

CREATE TABLE `meat_produced` (
  `meat_id` int(11) NOT NULL,
  `meat_state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meat_animal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meat_unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meat_datatype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meat_month` int(2) NOT NULL,
  `meat_year` year(4) NOT NULL,
  `meat_sc_original` int(11) DEFAULT NULL,
  `meat_sc_seasonallyadjusted` int(11) DEFAULT NULL,
  `meat_sc_trend` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meat_produced`
--

INSERT INTO `meat_produced` (`meat_id`, `meat_state`, `meat_animal`, `meat_unit`, `meat_datatype`, `meat_month`, `meat_year`, `meat_sc_original`, `meat_sc_seasonallyadjusted`, `meat_sc_trend`) VALUES
(331, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2000, 7040, 6188, 5975),
(332, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2000, 7452, 6302, 6085),
(333, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2000, 5030, 5826, 6175),
(334, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2000, 5876, 6007, 6275),
(335, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2000, 3663, 6832, 6384),
(336, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2000, 3158, 6496, 6498),
(337, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2000, 5998, 6082, 6606),
(338, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2000, 7776, 7042, 6653),
(339, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2000, 7902, 6515, 6558),
(340, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2000, 8383, 6418, 6275),
(341, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2000, 5767, 6019, 5833),
(342, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2001, 7306, 5536, 5278),
(343, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2001, 5099, 4461, 4712),
(344, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2001, 4205, 3796, 4275),
(345, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2001, 3564, 3932, 4039),
(346, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2001, 3911, 4130, 3968),
(347, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2001, 1867, 3782, 3988),
(348, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2001, 2846, 6070, 3994),
(349, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2001, 4161, 4081, 3907),
(350, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2001, 3907, 3600, 3720),
(351, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2001, 4376, 3420, 3492),
(352, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2001, 4032, 3211, 3299),
(353, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2001, 3109, 3096, 3165),
(354, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2002, 4090, 3030, 3079),
(355, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2002, 3581, 3109, 3007),
(356, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2002, 3124, 3040, 2910),
(357, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2002, 2751, 3046, 2806),
(358, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2002, 2266, 2396, 2738),
(359, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2002, 1238, 2572, 2728),
(360, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2002, 1281, 2681, 2769),
(361, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2002, 2923, 3024, 2834),
(362, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2002, 3708, 3143, 2911),
(363, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2002, 3813, 3021, 2989),
(364, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2002, 3232, 2778, 3053),
(365, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2002, 2937, 2859, 3097),
(366, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2003, 4440, 3209, 3104),
(367, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2003, 4122, 3553, 3061),
(368, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2003, 3179, 2944, 2971),
(369, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2003, 2345, 2614, 2821),
(370, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2003, 2250, 2583, 2629),
(371, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2003, 1202, 2244, 2444),
(372, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2003, 1269, 2819, 2333),
(373, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2003, 2053, 2278, 2335),
(374, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2003, 2297, 1921, 2443),
(375, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2003, 3367, 2629, 2624),
(376, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2003, 3343, 2940, 2853),
(377, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2003, 3746, 3393, 3073),
(378, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2004, 4284, 3324, 3268),
(379, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2004, 3883, 3342, 3433),
(380, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2004, 3919, 3378, 3566),
(381, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2004, 3277, 3647, 3695),
(382, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2004, 3143, 3625, 3811),
(383, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2004, 2511, 4519, 3874),
(384, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2004, 1462, 3674, 3861),
(385, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2004, 3637, 3766, 3766),
(386, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2004, 4518, 3584, 3634),
(387, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2004, 3835, 3392, 3518),
(388, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2004, 4402, 3516, 3462),
(389, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2004, 3830, 3469, 3471),
(390, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2005, 4298, 3401, 3534),
(391, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2005, 4447, 3834, 3627),
(392, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2005, 4135, 3584, 3758),
(393, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2005, 3318, 3956, 3890),
(394, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2005, 3344, 3790, 3984),
(395, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2005, 2617, 4288, 4010),
(396, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2005, 1415, 4111, 3958),
(397, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2005, 3972, 3912, 3858),
(398, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2005, 4129, 3458, 3744),
(399, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2005, 4400, 3586, 3651),
(400, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2005, 4595, 3600, 3608),
(401, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2005, 3850, 3686, 3598),
(402, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2006, 4705, 3749, 3600),
(403, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2006, 4109, 3590, 3626),
(404, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2006, 4228, 3728, 3706),
(405, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2006, 3063, 3669, 3860),
(406, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2006, 3608, 3771, 4100),
(407, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2006, 3867, 6674, 4391),
(408, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2006, 1751, 5177, 4660),
(409, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2006, 4520, 4559, 4834),
(410, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2006, 5547, 4899, 4863),
(411, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2006, 6317, 4990, 4755),
(412, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2006, 6312, 4576, 4546),
(413, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2006, 4092, 4077, 4309),
(414, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2007, 5442, 4200, 4121),
(415, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2007, 4265, 3775, 3978),
(416, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2007, 4308, 4049, 3887),
(417, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2007, 3221, 3685, 3867),
(418, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2007, 4011, 4199, 3923),
(419, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2007, 3766, 6979, 4056),
(420, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2007, 1006, 3152, 3807),
(421, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2007, 4061, 4291, 3935),
(422, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2007, 4915, 4247, 4020),
(423, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2007, 6128, 4489, 4084),
(424, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2007, 5468, 4043, 4182),
(425, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2007, 4018, 3689, 4388),
(426, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2008, 5777, 4521, 4751),
(427, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2008, 6324, 5570, 5256),
(428, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2008, 5703, 5562, 5773),
(429, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2008, 5810, 6438, 6097),
(430, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2008, 5643, 6401, 6086),
(431, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2008, 3247, 6181, 5708),
(432, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2008, 1544, 5012, 5096),
(433, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2008, 3407, 4000, 4456),
(434, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2008, 4961, 3805, 3936),
(435, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2008, 4423, 3245, 3629),
(436, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2008, 4717, 3544, 3537),
(437, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2008, 4876, 4015, 3611),
(438, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2009, 4451, 3759, 3742),
(439, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2009, 3786, 3465, 3802),
(440, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2009, 4054, 3915, 3719),
(441, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2009, 3070, 3529, 3483),
(442, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2009, 3351, 4080, 3132),
(443, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2009, 1051, 2018, 2759),
(444, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2009, 596, 2155, 2459),
(445, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2009, 1914, 2180, 2295),
(446, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2009, 3189, 2355, 2295),
(447, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2009, 3229, 2382, 2412),
(448, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2009, 3917, 2760, 2538),
(449, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2009, 3459, 2808, 2606),
(450, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2010, 2705, 2371, 2544),
(451, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2010, 2723, 2543, 2410),
(452, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2010, 2355, 2258, 2278),
(453, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2010, 1855, 2214, 2238),
(454, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2010, 1880, 2359, 2337),
(455, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2010, 773, 1564, 2556),
(456, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2010, 873, 3414, 2805),
(457, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2010, 3172, 3357, 2985),
(458, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2010, 4263, 3164, 3033),
(459, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2010, 3845, 2873, 2907),
(460, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2010, 3991, 2564, 2632),
(461, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2010, 2530, 2125, 2305),
(462, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2011, 2365, 2070, 2026),
(463, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2011, 2042, 1923, 1844),
(464, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2011, 1375, 1341, 1684),
(465, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2011, 1261, 1610, 1525),
(466, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2011, 1590, 1935, 1372),
(467, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2011, 492, 1078, 1252),
(468, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2011, 233, 944, 1195),
(469, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2011, 753, 751, 1219),
(470, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2011, 2330, 1706, 1300),
(471, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2011, 2061, 1510, 1404),
(472, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2011, 2394, 1519, 1482),
(473, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2011, 1759, 1559, 1474),
(474, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2012, 1778, 1419, 1393),
(475, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2012, 1255, 1152, 1306),
(476, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2012, 1331, 1393, 1276),
(477, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2012, 830, 1099, 1348),
(478, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2012, 1198, 1418, 1513),
(479, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2012, 850, 1995, 1754),
(480, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2012, 480, 1749, 2007),
(481, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2012, 2408, 2423, 2215),
(482, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2012, 3170, 2526, 2351),
(483, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2012, 3773, 2448, 2418),
(484, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2012, 3715, 2417, 2444),
(485, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2012, 2305, 2204, 2494),
(486, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2013, 3460, 2680, 2596),
(487, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2013, 2947, 2749, 2757),
(488, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2013, 2579, 2823, 2954),
(489, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2013, 2581, 3185, 3119),
(490, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2013, 2796, 3465, 3199),
(491, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2013, 1252, 3081, 3168),
(492, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2013, 950, 3261, 3047),
(493, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2013, 2746, 2774, 2897),
(494, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2013, 3579, 2736, 2795),
(495, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2013, 4058, 2584, 2803),
(496, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2013, 4012, 2803, 2934),
(497, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2013, 3508, 3116, 3130),
(498, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2014, 4235, 3453, 3290),
(499, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2014, 3952, 3672, 3357),
(500, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2014, 3066, 3288, 3303),
(501, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2014, 2478, 3193, 3142),
(502, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2014, 2234, 2720, 2938),
(503, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2014, 1091, 2550, 2765),
(504, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2014, 927, 3007, 2665),
(505, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2014, 2269, 2444, 2628),
(506, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2014, 3394, 2384, 2616),
(507, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2014, 4417, 2973, 2603),
(508, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2014, 3503, 2589, 2575),
(509, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2014, 2862, 2501, 2523),
(510, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2015, 2741, 2265, 2462),
(511, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2015, 2743, 2544, 2412),
(512, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2015, 2605, 2544, 2399),
(513, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2015, 1662, 2196, 2456),
(514, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2015, 1894, 2411, 2554),
(515, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2015, 1298, 2768, 2646),
(516, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2015, 858, 2828, 2709),
(517, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2015, 2727, 2918, 2726),
(518, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2015, 3661, 2663, 2693),
(519, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2015, 3468, 2356, 2598),
(520, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2015, 3812, 2733, 2535),
(521, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2015, 2971, 2515, 2595),
(522, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2016, 2902, 2591, 2776),
(523, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2016, 2972, 2631, 2996),
(524, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2016, 3183, 3039, 3149),
(525, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2016, 3207, 4440, 3160),
(526, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2016, 2552, 2864, 3019),
(527, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 6, 2016, 1064, 2386, 2764),
(528, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 7, 2016, 632, 2207, 2467),
(529, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 8, 2016, 2201, 2149, 2222),
(530, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 9, 2016, 3105, 2251, 2084),
(531, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 10, 2016, 2929, 2105, 2037),
(532, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 11, 2016, 2721, 1868, 1997),
(533, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 12, 2016, 2316, 2056, 1913),
(534, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 1, 2017, 2366, 1912, 1830),
(535, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 2, 2017, 1802, 1698, 1775),
(536, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 3, 2017, 1529, 1552, 1754),
(537, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 4, 2017, 1142, 1628, 1764),
(538, 'Western Australia', 'Sheep', 'Tonnes', 'FLOW', 5, 2017, 1981, 2164, 1800),
(539, 'New South Whales', 'Sheep', 'Tonnes', 'FLOW', 5, 2017, 1981, 2164, 1800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meat_produced`
--
ALTER TABLE `meat_produced`
  ADD PRIMARY KEY (`meat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meat_produced`
--
ALTER TABLE `meat_produced`
  MODIFY `meat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
