-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2019 at 03:06 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onjob_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `xx_admin`
--

DROP TABLE IF EXISTS `xx_admin`;
CREATE TABLE IF NOT EXISTS `xx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_verify` tinyint(4) NOT NULL DEFAULT '0',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_admin`
--

INSERT INTO `xx_admin` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `resume`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin', 'admin@admin.com', '12345', '$2y$10$9q/f5C6rEq/OESFPUWY49uTeekXC.0/eogpt41O7Tbt/QNhIw.o.i', '27 new jersey - Level 58 - CA 444 \r\nUnited State ', '', 1, 1, 1, 1, '', '', '', '2017-09-29 10:09:44', '2018-12-30 07:12:51'),
(32, 'user1', 'user2', 'user3', 'user@user.com', '44897866461', '$2y$10$y78Rd6WYOoOfLvW0WKUYzecT.YFJowBCOeM3URWJ3GJtbe0EhfTd6', '', '', 1, 1, 1, 0, '352fe25daf686bdb4edca223c921acea', '', '', '2018-04-24 07:04:07', '2018-07-08 10:07:57'),
(35, 'King', 'king', 'khan', 'kingkhan@gmail.com', '123456', '$2y$10$P6/1U3jPcHOblCWxIwE0je8EuM42k76qUctO32Z1dUeFbtRLXB6rC', 'india', '', 8, 1, 0, 0, '', '', '', '2018-04-26 05:04:29', '2018-05-01 09:05:01'),
(33, 'john123', 'john', 'smith', 'johnsmith@gmail.com', '445889654656', '$2y$10$VUiskt.K62keAySC4YDOmO6eO5fEmakZ3YlVS.8/g4i1Uvf2TJExK', 'USA', '', 15, 1, 0, 0, '', '', '', '2018-04-25 06:04:25', '2018-05-11 07:05:26'),
(34, 'naumancs', 'nauman', 'ahmed', 'nacreativeprogrammer@gmail.com', '4456545632215', '$2y$10$6c7t2.a0iiChZ3TbEZHw9unJgd9EUbzVD8a2RIUWMv5qi6SL8oxPi', '', '', 10, 1, 1, 0, '', '', '', '2018-04-25 07:04:12', '2018-05-11 07:05:28'),
(36, 'gustavo', 'hhasjddaa', 'jhjasd', 'jajshd@gmail.com', '0000000000', '$2y$10$gUAKfsHhfz8h2S8InvazR.hChl7whoLEY90Kzv8jw9DfVbvPX100y', '', '', 17, 1, 0, 0, 'f4b9ec30ad9f68f89b29639786cb62ef', '', '', '2018-04-27 08:04:10', '2018-05-29 04:05:36'),
(37, 'testing', 'test', 'testes', 'adminn@admin.com', '1234567889', '$2y$10$Cgm0D4u2LdpwpxcEHgwzB.5n4RmfIEbnjtqxKtbg3q6sSZq4AcoYu', 'test', '', 8, 1, 0, 0, '', '', '', '2018-04-27 09:04:48', '2018-05-11 07:05:21'),
(38, 'zeeshan', 'Zeeshan', 'Tariq', 'zeeshan.dev6@gmail.com', '', '$2y$10$cU2ptA4Z7bJ1TmVQsw5DFuKIa5NphFAF6G8EFpxJiCtQp/5GXMjA2', '', '', 1, 1, 1, 0, '', '', '', '2018-04-27 10:04:45', '2018-04-27 10:04:45'),
(39, 'sam', 'sam', 'moni', 'sam@gmail.com', '452256632265', '$2y$10$ZEZ/0ABQzTG117Q1MlM04O5QLqs8gKg/R/w0cnY04aWRUyyOwEk5W', '', '', 10, 1, 0, 0, '54229abfcfa5649e7003b83dd4755294', '', '', '2018-04-27 07:04:10', '2018-05-11 07:05:24'),
(40, 'sam03', 'sam03', 'sammoni', 'surajtambare@gmail.com', '', '$2y$10$uSv2emY4VsTkYKeuM2.JNOpMhd.QA6s0lDD7X151XPX3cCYayzt9S', '', '', 1, 1, 1, 0, '', '', '', '2018-04-27 07:04:06', '2018-04-27 07:04:06'),
(41, 'Ishaq', 'Muhammad', 'Ishaq', 'ishaq122@gmail.com', '14662566564', '$2y$10$pzRhDotLk0ZdSP2N.hUUY.e/QqPyeW2FNnDgTBk3/AZS4UZi3rGqG', '', '', 12, 1, 0, 0, '1543843a4723ed2ab08e18053ae6dc5b', '', '', '2018-04-28 11:04:23', '2018-05-11 09:05:48'),
(42, 'admin', 'urmi', 'vala', 'vaghelaurmila@gmail.com', '9865874533366', '$2y$10$5KzV1YjwnPfTf2KrOxa4TuB4.6HJwUBZFzUHTuk25M..f.LsnVdWy', '', '', 13, 1, 0, 0, '81e74d678581a3bb7a720b019f4f1a93', '39de933d24421bb8c259b569451e20a5', '', '2018-04-29 06:04:02', '2018-05-17 07:05:00'),
(43, 'urmi', 'urmi', 'vala', 'vaghelaurmila44@gmail.com', '', '$2y$10$UoFQxjHuYx7mA2eFZW/5Q.f5KAP4oNb54PUqSREwjhI7qzbz5b9Y.', '', '', 1, 1, 0, 0, '1c383cd30b7c298ab50293adfecb7b18', '', '', '2018-04-29 06:04:52', '2018-04-29 06:04:52'),
(44, 'asdad sdfsdf', 'asdasda', 'asd', 'digao.mt@gmail.combjujyk', '12365566325', '$2y$10$nbluyObR8AzbpFTKZCFZCOdVPaoD1akFMDNjqZDKCQRz.W0nFAVFq', '123', '', 15, 1, 0, 0, '', '', '', '2018-05-01 09:05:21', '2018-05-18 09:05:49'),
(45, 'amit', 'sharma', 'hunny', 'samit6716@gmail.com', '9875665633', '$2y$10$bvG5iANhT2j28mQl412wxuNCSMeDRGU5PbOIeHk30nPXHBhYjcDpe', '', '', 13, 1, 1, 0, '', '', '', '2018-05-01 10:05:23', '2018-05-11 07:05:06'),
(46, 'test123', 'test', 'test', '4haxorpass@gmail.com', '', '$2y$10$zx7RnSIvJCu6oppdJjSoDer6EHsqVcnx3cYouXceYas0IPcV951ZO', '', '', 1, 1, 1, 0, '', '', '', '2018-05-01 02:05:31', '2018-05-01 02:05:31'),
(47, 'dfg', 'dfg', 'dfg', 'dfg@asd.com', '3232', '$2y$10$MpeEr6gIWVKCotgpnsHkSOElEJsqBTOSIsddv4a0qZnkFCMNbepUO', '234', '', 10, 0, 0, 0, '', '', '', '2018-05-01 04:05:23', '2018-05-11 07:05:39'),
(48, 'Адам Коваль', 'Адам', 'Коваль', 'first@last.com', '6622662155622', '$2y$10$KN2vw/tqK7jUuiJam3w04uhx3F57DuDikvxNGoZeKGIhq5x29cAea', '', '', 11, 1, 0, 0, '0584ce565c824b7b7f50282d9a19945b', '', '', '2018-05-03 02:05:16', '2018-05-30 09:05:06'),
(49, 'hmc', 'quan', 'younggunag', 'hmc198918@outlook.com', '988536652', '$2y$10$AFEvCGjRCqLA.ZLsXUOy/ubl5E8L4s/4GyTecuriE0rDRda4D.faW', '', '', 9, 1, 0, 0, '979d472a84804b9f647bc185a877a8b5', '', '', '2018-05-03 03:05:46', '2018-05-11 07:05:09'),
(50, 'test', 'dsdsd', 'adadasd', 'dsad@asdasd.com', '23423423234', '$2y$10$tf3nxk7wYezrpzuwgj7MYusVRQYeXLmpHurZggBs2bt8n9FzZqgrO', 'adasdasdasd', '', 10, 0, 0, 0, '', '', '', '2018-05-03 08:05:05', '2018-05-11 07:05:02'),
(51, 'Graham', 'Graham', 'Molifie', 'ether40@gmail.com', '6697555555', '$2y$10$wItbFXi2FYVB7MaGCk8cCOhtwxXeG6LGWWU4HVWeDDxlRwQ4bjjaS', '', '', 12, 1, 1, 0, '', '', '', '2018-05-05 07:05:40', '2018-05-11 07:05:51'),
(52, 'ashu', 'ashish', 'golwa', 'sharmaashish.sharma502@gmail.com', '98664563322', '$2y$10$4Z1fWZaWnBuYK./dJhKVQOYas8rjmnAm2BPw6R0kEa3UtOZ7/oNh2', '', '', 14, 1, 0, 0, '5737034557ef5b8c02c0e46513b98f90', '', '', '2018-05-07 03:05:19', '2018-05-11 07:05:27'),
(53, 'rfaizan', 'rosan', 'faizan', 'f.usmani88@gmail.com', '982266', '$2y$10$diKXLB.nTogB.1IeJROmRufu3E.b3Nf6P/lPISQKU7UaGK1PwwGRq', '', '', 14, 0, 1, 0, '', '', '', '2018-05-07 06:05:41', '2018-05-11 07:05:43'),
(54, 'fdgdfgdfg', 'gdfggdfg', 'fdgdgdfg', 'fdgfd@sddf.ghgh', '1234567890', '$2y$10$7hXkV.oyWmtouAfPVldBgeyuYBf0k/Emrk2wEqcePDpnWLN75UdD.', 'dgdfgdfgdg', '', 10, 1, 0, 0, '', '', '', '2018-05-08 04:05:56', '2018-05-08 04:05:56'),
(55, 'Shatru', 'Shatrughna', 'Ambhore', 'ambhoreshatrughna@gmail.com', '9604466328', '$2y$10$CMmzJQA5pbRLqfTS5h7XmuFELQ/1oyboZNGqsdTatPz8qKDP/IEKa', 'hadapsar', '', 10, 1, 0, 0, '', '', '', '2018-05-08 05:05:51', '2018-05-08 05:05:51'),
(56, 'f', 'sds', 'd', 'sdsds@sdsds.com', '0812912', '$2y$10$4MbiO7RdOHsfnMKqHICv4OnC3FwQqGF7GiIzVLcaWf9UNiIBJPAaq', 'sdsd', '', 10, 1, 0, 0, '', '', '', '2018-05-08 07:05:04', '2018-05-08 07:05:04'),
(57, 'mauiemancao', 'Mauie', 'mancao', 'mauiemancao@gmail.com', '988722662', '$2y$10$K.avPVpvnbu30OtLJUDEvOvCXhllHrDYNB7MZsBynP9IRr99Imunm', '', '', 15, 1, 0, 0, '08b255a5d42b89b0585260b6f2360bdd', '', '', '2018-05-09 08:05:17', '2018-05-11 07:05:02'),
(58, 'Mauie', 'Mauie', 'Mancao', 'mauiemancao123@gmail.com', '65654865452', '$2y$10$06l7Ke5u3tSXhdtEd/jijul9d2xXF14ewRiAF7cuN0Z6VfGjEMmzW', '', '', 15, 1, 0, 0, 'd64a340bcb633f536d56e51874281454', '', '', '2018-05-09 08:05:05', '2018-05-11 07:05:49'),
(59, 'Maurince', 'Maurince', 'Mancao', 'maurincemancao@icloud.com', '4795566266', '$2y$10$bjJXZh9UDCwbpzL8Yui9GeTg5i6Dayr7OcRrKrJ8krJYaDUyDZto2', '', '', 13, 1, 0, 0, 'd07e70efcfab08731a97e7b91be644de', '', '', '2018-05-09 08:05:11', '2018-05-11 07:05:17'),
(60, 'fgffg', 'fg', 'fg', 'fgfgf@haoo.com', '03458498', '$2y$10$TEoYi7lsvALFScQFoIZ4i.4VNhF7rZTOT9afO89qztQIrJbhJJR1a', 'ewfdn', '', 11, 1, 0, 0, '', '', '', '2018-05-12 02:05:07', '2018-05-12 02:05:07'),
(61, 'skid', 'skid1', 'skid2', 'lakjdsflka@gmail.com', '9999999999', '$2y$10$qYMPY8kcLkVlcAx7C9YIYOHkXmACgRdWj0h0vedX2KNK536fKclbK', '56as4d65f', '', 13, 1, 0, 0, '', '', '', '2018-05-13 10:05:27', '2018-05-13 10:05:27'),
(62, 'test', 'test', 'tese2', 'tese@live.uk', '995644651465161', '$2y$10$MEJx/SrUAB5hH3b/spTCpurdN/mPPvk1iHgB83g6UBQro7Ujc7T3u', 'asasjasj', '', 15, 1, 0, 0, '', '', '', '2018-05-15 11:05:29', '2018-05-15 11:05:29'),
(63, 'demo', 'de', 'mo', 'loldropper@hotmail.com', '', '$2y$10$TyCW/kvmVlLDLFnufIZbF.TtetrZKMY9cXdFaFUnWcuXFWUrnv4Eu', '', '', 1, 1, 1, 0, '', '', '', '2018-05-15 11:05:05', '2018-05-15 11:05:05'),
(64, 'kodiac', 'kodiac', '123', 'kodiac@xd.com', '12354', '$2y$10$1ZGuZ2LmSJ/GUGUHIC28peTuCXZcqQK9kaZn9tfShy/Eg97Lo5JQW', '', '', 9, 1, 0, 0, '', '', '', '2018-05-16 09:05:54', '2018-05-16 09:05:39'),
(65, 'kanu', 'kanu', 'thakur', 'kanu@gmail.com', '', '$2y$10$pjmAkRqwpw7rxZVRwAdvguWFXVlZuqUKHMsg4fptC2isrFd3F1s.m', '', '', 1, 1, 0, 0, 'c16a5320fa475530d9583c34fd356ef5', '', '', '2018-05-16 11:05:57', '2018-05-16 11:05:57'),
(66, 'kanu', 'kanu', 'thakur', 'kanu123@gmail.com', '', '$2y$10$t8.b4lmGT7pXK5IHx3mwJ.vYd4dWmXUTZTEpXVeDMx3BIptpA2O4O', '', '', 1, 1, 0, 0, '2f885d0fbe2e131bfc9d98363e55d1d4', '', '', '2018-05-16 11:05:32', '2018-05-16 11:05:32'),
(67, 'shipra', 'shipra', 'thakur', 'banyalshipu@gmail.com', '', '$2y$10$GBEajALxVhpH8vAgdEg8keORVNFJ5KGOoyuPV0i7mDYI5zKdt7s1S', '', '', 1, 1, 1, 0, '', '', '', '2018-05-16 11:05:34', '2018-05-16 11:05:34'),
(68, 'sebsong', 'seb', 'song', 'seb@mapovis.com.au', '23232323', '$2y$10$3tzU98oQ4vj/dgzv.cntZeaql3ARjxcM54b2/KnvP6AMLpLPo3ZsC', '', '', 1, 0, 0, 0, 'c8c41c4a18675a74e01c8a20e8a0f662', '', '', '2018-05-16 11:05:22', '2018-05-17 12:05:07'),
(69, 'alexey123', 'alexey', '123', 'blue.ocean879@mail.ru', '', '$2y$10$A6n7MUKcO5Bkl83yaNe6iOQ5IWJpKmTecHGWGhlxVhYt3G4u7ndUy', '', '', 1, 1, 1, 0, '', '', '', '2018-05-16 11:05:48', '2018-05-16 11:05:48'),
(70, 'houda', 'bouzidi', 'bouzidi', 'houdabouzidi92@gmail.com', '', '$2y$10$FN6EMrJbEYHA0I7KcgoaeulmIQ1OFx.B3zsMOnBobiPfAVik/5Cwu', '', '', 1, 1, 1, 0, '', '', '', '2018-05-17 09:05:00', '2018-05-17 09:05:00'),
(71, 'RyanTest', 'Ryan', 'test', 'ryan@ryan.com', '', '$2y$10$seZaF40xYZ3M0qq/qmsATOAPsp41uSXstpqz6oKVUUIOswqO1L6GO', '', '', 1, 1, 0, 0, 'a733fa9b25f33689e2adbe72199f0e62', '', '', '2018-05-17 08:05:46', '2018-05-17 08:05:46'),
(72, 'admin', 'Meline', 'Khachatryan', 'meline.khachatryan91@gmail.com', '', '$2y$10$iuk.Wsc6E3zB313mYhOij.9jDrXoaeZOeXna2olyyDoMOh22fhgey', '', '', 1, 1, 1, 0, '', '', '', '2018-05-19 06:05:04', '2018-05-19 06:05:04'),
(73, 'user', 'user', 'useru', 'user@gmail.com', '12346778900', '$2y$10$bAZfNIShoIRcPMj5U8uPXOwjWy4bEZnrd9JJMRkBbxAFXYRodSiAS', '123', '', 15, 1, 0, 0, '', '', '', '2018-05-19 08:05:38', '2018-05-26 08:05:58'),
(74, 'abhi', 'abhinaw', 'gupta', 'abhinaw.sg@gmail.com', '', '$2y$10$bZMy30jykRpo48q6tR0J/.JRpx/pnu.MufPZOS7MWybaaECJ9xmWu', '', '', 1, 1, 0, 0, '3636638817772e42b59d74cff571fbb3', '', '', '2018-05-20 08:05:42', '2018-05-20 08:05:42'),
(75, 'Robert', 'Robert', 'Jackson', 'fantasymods123@gmail.com', '', '$2y$10$fihJPBNPlpjGzsuN.ECiYO.D5HZByTFPs4p88dTd0mqVzTJKuDrjW', '', '', 1, 1, 1, 0, '', '', '', '2018-05-21 08:05:07', '2018-05-21 08:05:07'),
(76, 'frederny', 'FREDERICK', 'will', 'frederny@gmail.com', '', '$2y$10$OMiNUWX/RAGl9nYb7sf83eOQOv0ECEOEGYiEniox5WSH69IdfqjBi', '', '', 1, 1, 1, 0, '', '', '', '2018-05-21 06:05:11', '2018-05-21 06:05:11'),
(91, 'robertoraymon', 'roberto', 'raymon', 'roberto@klazzy.com', '', '$2y$10$uoPPhKkqd53s6gdcU5FmvOkeroRIDQYR9kZtvxwm0P6DpKxw6KwgK', '', '', 1, 1, 1, 0, '', '', '', '2018-05-24 03:05:09', '2018-05-24 03:05:09'),
(77, 'derik', 'Derik', 'Tan', 'derik@gmail.com', '', '$2y$10$EuhNWSxjci.0OwH3czBpn.wNh2Jn.r2cCTerAd69UMyW92nf2zYbO', '', '', 1, 1, 0, 0, 'cdc0d6e63aa8e41c89689f54970bb35f', '', '', '2018-05-22 12:05:56', '2018-05-22 12:05:56'),
(78, 'engkiat', 'Tan', 'Eng Kiat', 'engkiat89@gmail.com', '112211', '$2y$10$ivfXHnY170gg/N9fg/WThONiEq7LE6FLfOvrqdDm50.9fRS5WaEyy', '', '', 14, 1, 1, 0, '', '', '', '2018-05-22 01:05:21', '2018-05-22 01:05:01'),
(79, 'asdaslkhd', 'hsldhaslkd', 'hklhdsklfhlk', 'hdsklfhsdlkf@hlk.com', '123123123123', '$2y$10$Q88Jd.7kWCJ65ghO/b1xruUU9kJNucg8wfZlrZV04eGIinR.vVLVO', 'shdklas', '', 14, 1, 0, 0, '', '', '', '2018-05-22 07:05:13', '2018-05-22 07:05:13'),
(80, 'admin', 'admin', 'admin', 'admin@example.com', '11111111', '$2y$10$SlEAabNGC82dxP3v4qKS8uNgOaw2gFZze7J.E5Iz48kIVArjEVYQi', 's,flweglomewr', '', 14, 1, 0, 0, '', '', '', '2018-05-23 09:05:20', '2018-06-08 03:06:22'),
(81, 'hellokitty', 'hello', 'kitty', 'djnvdkfv@gmail.com', '', '$2y$10$X0PyO2T9mRU05nvdlv4auORuZr3dX0EBHE75/rVA1C/Kpu/tBOxx6', '', '', 1, 1, 0, 0, '692f93be8c7a41525c0baf2076aecfb4', '', '', '2018-05-24 01:05:28', '2018-05-24 01:05:28'),
(82, 'azhar', 'azhar', 'hussain', 'azhr17@yahoo.com', '', '$2y$10$QKaiwD48EqJ2skyUw81EaeA0xLifVrN2F2EJ94.RTBG2UNPRiPoMG', '', '', 1, 1, 0, 0, '550a141f12de6341fba65b0ad0433500', '', '', '2018-05-24 05:05:54', '2018-05-24 05:05:54'),
(83, 'karthi', 'gaivel', 'love', 'kaka@gmail.com', '', '$2y$10$mJ9ddoFeHF58NgMI0f9rw.Jk5QBwV4UcOiFluOh8PPqFGdKx.OL6i', '', '', 1, 1, 1, 0, '', '', '', '2018-05-24 06:05:20', '2018-05-24 06:05:20'),
(84, 'kovai', 'madurai', 'dindigul', 'chennai@gmail.com', '', '$2y$10$Gu2ggUEfe8hISvvOvNP9pOYfue/Q.UfsXaHJWLGghHtkuAbR0ljt6', '', '', 1, 1, 1, 0, '', '', '', '2018-05-24 06:05:35', '2018-05-24 06:05:35'),
(85, 'fatima', 'fatima', 'hafeez', 'anmolfatima309@gmail.com', '', '$2y$10$RaYcXrvWXvtVp27274BS8ueHPIi5567CTEEFb8UItyPDGb/cuZLUm', '', '', 1, 1, 0, 0, '3cef96dcc9b8035d23f69e30bb19218a', '', '', '2018-05-24 06:05:51', '2018-05-24 06:05:51'),
(86, 'test11', 'test', 'test', 'test@test.nl', '', '$2y$10$N46ZkWI.grUCMimEo48sZOwPgXeZ9uqDDLP/yT1ymGaQ/LMnJYikG', '', '', 1, 1, 0, 0, '7a614fd06c325499f1680b9896beedeb', '', '', '2018-05-24 07:05:19', '2018-05-24 07:05:19'),
(87, 'mansi', 'mansi', 'rathore', 'mansirathore@gmail.com', '', '$2y$10$3t4h3RPO9ReJ6moJLb3lTexn808nkTkzlf6dcBRZPzhtZ3x8x/G4e', '', '', 1, 1, 0, 0, '07563a3fe3bbe7e3ba84431ad9d055af', '', '', '2018-05-24 09:05:08', '2018-05-24 09:05:08'),
(88, 'abc', 'a', 'b', 'abc@gmail.com', '', '$2y$10$e3Hgaa8nmWLSwzakmO6.X.3ayY4UzRdwVcwpgEO3DuzNdI/MbL9D2', '', '', 1, 1, 0, 0, 'b1eec33c726a60554bc78518d5f9b32c', '', '', '2018-05-24 09:05:44', '2018-05-24 09:05:44'),
(89, 'kovai', 'ramer', 'love', 'pasupathinathanab@gmail.com', '', '$2y$10$.2w8PKeXzE7xl0PGYGy5zegkxo7hzv7enRaxG/obWZ8Uef4rkJaa.', '', '', 1, 1, 0, 0, '9fe8593a8a330607d76796b35c64c600', '', '', '2018-05-24 10:05:44', '2018-05-24 10:05:44'),
(90, 'testeo', 'testeo', 'testeo', 'testeo@testeo.com', '123441234', '$2y$10$9gVkpLNAlLk/VBbd175rx.IzW23Tx25Rt3hzqfkVDCGznLyCk6RAq', 'ejemplo', '', 1, 1, 0, 0, '', '', '', '2018-05-24 10:05:54', '2018-05-24 10:05:54'),
(92, 'NomeCognome', 'Nome', 'Cognome', 'stefanolisi97@gmail.com', '', '$2y$10$X704ln0kIR8iXLfxf8jRG.pzUryNaFb/Ay0pIra9.vDj4OreL4DCO', '', '', 1, 1, 1, 0, '', '', '', '2018-05-24 10:05:44', '2018-05-24 10:05:44'),
(93, 'cool', 'ralph', 'knepper', 'knepper81@gmail.com', '', '$2y$10$OKRONNKii1nW03U9pc0vje/RRTsCtEPYQFh4ULM0SygiR2NgKNG66', '', '', 1, 1, 1, 0, '', '', '', '2018-05-24 11:05:55', '2018-05-24 11:05:55'),
(94, 'AlessandroCT', 'Alessandro', 'Test', 'alessandro.aloisio1992@gmail.com', '', '$2y$10$ghkKFJbrgKxBxBDIXqbcJuvKSQf5t/J5J9YhqNjAAj5Q2.H/YHXay', '', '', 1, 1, 0, 0, 'f457c545a9ded88f18ecee47145a72c0', '', '', '2018-05-25 11:05:16', '2018-05-25 11:05:16'),
(95, 'AlessandroTest', 'Alessandro', 'Aloisio', 'a.aloisio@me.com', '', '$2y$10$kDV5yk8JlhRz2JmV3MkhGuDp2y/tyzu/9npy.2rX0VslXgr7jl666', '', '', 1, 1, 1, 0, '', '', '', '2018-05-25 11:05:36', '2018-05-25 11:05:36'),
(96, 'san', 'san', 'san', 'san@gmail.com', '', '$2y$10$QJJhUnazbEdtRc7R.ksyYeBBdqxB03qWsOd2rEljRs7amBIXXFWdW', '', '', 1, 1, 0, 0, '69cb3ea317a32c4e6143e665fdb20b14', '', '', '2018-05-25 11:05:29', '2018-05-25 11:05:29'),
(97, 'kamini', 'sl', 'l', 'kamn@gmail.com', '', '$2y$10$0rv/ncZklFfWMHkECcenae2urhbw.wXo91lhRuSD6V7YKuUnyxGba', '', '', 1, 1, 0, 0, '7f100b7b36092fb9b06dfb4fac360931', '', '', '2018-05-25 11:05:10', '2018-05-25 11:05:10'),
(98, 'Bas', 'Bas', 'Smits', 'bassmits@gmail.com', '0031614720711', '$2y$10$GfEdgInqfUse8yVny2fBG.EhtGpojePg9YTh5JAKF4HL6nJ7Dnq4y', '', '', 13, 1, 0, 0, '', '', '', '2018-05-27 09:05:10', '2018-05-27 09:05:10'),
(99, 'elyera', 'Yerany', 'Hernandez', 'elyera@gmail.com', '122345566', '$2y$10$L4XZS.UL3txaE8/9dRL12Ojp1foJDcZDSvT2Xb/XqptuBommophpO', '', '', 14, 1, 0, 0, '', '', '', '2018-05-27 10:05:23', '2018-05-27 10:05:23'),
(100, 'Karol100', 'Adam', 'Kowal', 'admin@admin.com', '123456789', '$2y$10$x539FbqkM4CPIpNefGw98e94nuNeB4mcVdfVOZTMTOX.O1TGEDrre', 'Morska 23', '', 15, 1, 0, 0, '', '', '', '2018-05-27 11:05:02', '2018-05-27 11:05:56'),
(101, 'nisar', 'Nisar', 'ahamad', 'nisarahamad47@gmail.com', '', '$2y$10$6JJ6AXwdTIO7805oBy.ZxuHBqKr.tuHvOpVFhVJ.1M52lcbCrjoO2', '', '', 1, 1, 1, 0, '', '', '', '2018-05-28 10:05:13', '2018-05-28 10:05:38'),
(102, 'ravi', '22222', 'zxzx', 'aaaa.nslash@gmail.com', '1111111111', '$2y$10$AVpb5gTOydluFJCbd3LwLuKv4v3r26nZhEHTRy9ExdLHTycm9rIYm', 'sdsdsdsd', '', 12, 1, 0, 0, '', '', '', '2018-05-28 11:05:36', '2018-06-19 10:06:06'),
(103, 'Raju', 'Raju', 'Saha', 'rajusaha010693@gmail.com', '', '$2y$10$lPieiFhBJEr2hnj6dD0nfOa7AYx6Gft1986aAe40KdEK10.vRq9QO', '', '', 1, 1, 1, 0, '', '', '', '2018-05-29 05:05:06', '2018-05-29 05:05:06'),
(104, 'jashdfjkh', 'jdsfhkjh', 'jefhksdjfhk', 'nishant@gmail.com', '', '$2y$10$qtyhskDktkAFrWV50av8ne/GjIvnSwzr7gGhTeTUbnxD8FpAi/Fkq', '', '', 1, 1, 0, 0, 'a01a0380ca3c61428c26a231f0e49a09', '', '', '2018-05-29 05:05:38', '2018-05-29 05:05:38'),
(105, 'amit100893', 'amit', 'verma', 'amit.juv@gmail.com', '', '$2y$10$Pt43A/m/VQ0DePkHX0ICC.9tA9HxYlrIRdSwNoSDNqoDHH.xRucfu', '', '', 1, 1, 0, 0, 'c042f4db68f23406c6cecf84a7ebb0fe', '', '', '2018-05-29 02:05:44', '2018-05-29 02:05:44'),
(106, 'gustavo', 'vega', 'vega', 'sadasda@asdasda.com', '56962492405', '$2y$10$jIw4OS3WNbwR2gti.q1mP.Slidva/eX0eSbS7pZyvjtyR0LNLpBni', 'asdsadsa 15 sdsd', '', 15, 1, 0, 0, '', '', '', '2018-05-29 04:05:04', '2018-05-29 04:05:04'),
(107, 'Dirco', 'dirco', 'g', 'dircobuddy@gmail.com', '', '$2y$10$KEX3ey5dwJ.NR4AtB1D0yO8724Mq5FdfavuLtqZnCU5n6piLJojWy', '', '', 1, 1, 1, 0, '', '', '', '2018-05-29 06:05:47', '2018-05-29 06:05:47'),
(108, 'bot', 'bot', 'bot', 'botni.coc@gmail.com', '', '$2y$10$QbGtsrT9lB9.TJ0YRi4lHu1/SYWZvUPafFFpCE5dlB2xt/KTy9o/y', '', '', 1, 1, 1, 0, '', '', '', '2018-05-30 01:05:50', '2018-05-30 01:05:50'),
(109, 'parthmg', 'parth', 'ganatra', 'parthganatra97@gmail.com', '886683', '$2y$10$48TBkOJGOoGGuH.oLP9ViuCg5daf/EpL.zN7ctDBGeRHVwQxwja5m', '', '', 1, 1, 1, 0, '', '', '', '2018-05-30 12:05:40', '2018-05-30 12:05:59'),
(110, 'test123', 'test', 'test123', 'test123@test123.com', '', '$2y$10$xblsOl5wG6OZNClymd8uV.7MoUoPPzGk3c3Gfu2o6yN.BwAEv4b7y', '', '', 1, 1, 0, 0, '07563a3fe3bbe7e3ba84431ad9d055af', '', '', '2018-05-30 01:05:59', '2018-05-30 01:05:59'),
(111, 'kusnur', 'kusnur', 'ariyanto', 'aryanet92@gmail.com', '', '$2y$10$EoQS4c86F05TYJXG/cCzX.0T41nrNI8IjG/cn9h7hjqWsIdgphYe.', '', '', 1, 1, 1, 0, '', '', '', '2018-05-31 04:05:32', '2018-05-31 04:05:32'),
(112, 'indrasen715', 'indrasen', 'rahul', 'indrasenkumar715@gmail.com', '', '$2y$10$3N/UDPicX0unYZI4xXXdB.xiINWKmu.jSryK6xKfpcV1WnxXiA.Cm', '', '', 1, 1, 1, 0, '', '', '', '2018-05-31 05:05:39', '2018-05-31 05:05:03'),
(113, 'krinal@gmail.com', 'Mickey', 'Mouse', 'krinal@gmail.com', '', '$2y$10$8LkspI4z7X70ChSCdQ7pgurFT6/e5XmMGYvSj25PEl24l5vZKre5W', '', '', 1, 1, 0, 0, '53e3a7161e428b65688f14b84d61c610', '', '', '2018-05-31 11:05:48', '2018-05-31 11:05:48'),
(114, 'deneme', 'deneme', 'denedem', 'deded@dee.sdsdf', '23233', '$2y$10$KZYONtQJc/Ihm89JhLxK2OkkEhO/tf1W6c40/2cvjBBKWyfF.ssuO', '23432', '', 12, 1, 0, 0, '', '', '', '2018-05-31 12:05:21', '2018-05-31 12:05:21'),
(115, 'aankit', 'ankit', 'verma', 'ankit@gmail.com', '434553', '$2y$10$SXcFZbqHNb1SM1ZOTEuI9.cLxw2jpZhJn/J/.IpNMKaO4k7Sp9xqu', '', '', 1, 1, 0, 0, '8d6dc35e506fc23349dd10ee68dabb64', '', '', '2018-06-01 04:06:48', '2018-07-10 08:07:42'),
(116, 'aankit', 'ankit', 'ankit', 'radhedoodle@gmail.com', '', '$2y$10$5rmxC9tVYqpdZszUKyzBOuPcttCivIZCnG2ZxYIyRlU.kzCugVuvK', '', '', 1, 1, 1, 0, '', '', '', '2018-06-01 04:06:27', '2018-06-01 04:06:27'),
(117, 'ankit_verma', 'ankit', 'verma', 'radheankit1@gmail.com', '', '$2y$10$qxQ5nxF83RW59W99rPgVb.A8uZ1lh36pH1IlwDVTEZYn/f43LuyQm', '', '', 1, 1, 1, 0, '', '', '', '2018-06-01 04:06:33', '2018-06-01 04:06:33'),
(118, 'madhurya', 'madhu', 'ma', 'madhurya7794@gmail.com', '', '$2y$10$4gc8t89LscvIK6N631GVw.ZfHVosUXRSqpFpoflVvKWN4bdFti9qy', '', '', 1, 1, 1, 0, '', '', '', '2018-06-01 10:06:57', '2018-06-01 10:06:57'),
(119, 'sdfhsdfh', 'hwdfhdfh', 'hwdfhwdfhwdfh', 'whdfh@dfgd.fef', '5435435', '$2y$10$iWYnKqWFdQ.hE3Mia31EhOiq3hnz/gNPgiHXrwe/uPpYsUEcSifn6', ',cg,vb,nvb vbv,ch,', '', 9, 1, 0, 0, '', '', '', '2018-06-01 02:06:39', '2018-06-01 02:06:39'),
(120, 'roni', 'roni', 'Silva', 'ronicingo@gmail.com', '', '$2y$10$tfMDlE68Njw3c6oruKCMtOUR9Xgf4ieyh50rtAifTbYHnWAaQ4ruS', '', '', 1, 1, 0, 0, '4a47d2983c8bd392b120b627e0e1cab4', '', '', '2018-06-01 03:06:01', '2018-06-01 03:06:01'),
(121, 'check', 'aaaaa', 'aaaa', 'aaaa@gma.com', '123456787', '$2y$10$xfkQtAg1exkbdgEsnxZBgO6XdFxk6RcY5zii.LjBMKc8MBPQuEFq.', 'aaaaaaa', '', 14, 1, 0, 0, '', '', '', '2018-06-03 10:06:51', '2018-06-28 06:06:00'),
(122, 'sjjjskjs', 'abc', 'bdf', 'swaminaidu846@gmail.com', '7555775', '$2y$10$Y9ux2rlNLrA05lohAPQJruTPG03K8PUM4PWaEmLZd/KGDaU17py6e', '', '', 21, 0, 0, 0, 'b53b3a3d6ab90ce0268229151c9bde11', '', '', '2018-06-04 05:06:26', '2018-06-19 10:06:18'),
(123, 'Mohamed', 'Mickey', 'Mouse', '1033187@idcollege.nl', '', '$2y$10$xVfVCsQCPyCLu.k7rksy3O0Bx7C23fzoLXlW/vE9Mb1AgPnmLU3Qe', '', '', 1, 1, 0, 0, '6081594975a764c8e3a691fa2b3a321d', '', '', '2018-06-05 12:06:10', '2018-06-05 12:06:10'),
(124, 'mo', 'mohamed', 'elouafi', 'mo_elouafi@hotmail.com', '', '$2y$10$M3mE9wop.aXZXDvpi5soqOdUj7sDqNbgxYVDQBINU2KvYa8pYbJbK', '', '', 1, 1, 1, 0, '', '', '', '2018-06-05 12:06:42', '2018-06-05 12:06:42'),
(125, 'wozemba', 'ivan', 'yekosani', 'wozemba1@gmail.com', '', '$2y$10$FKcHWBfVj.O5HsCoBq8r/uamNSBIlK68RkrVTDuPol4BmieGubNIW', '', '', 1, 1, 0, 0, '7f5d04d189dfb634e6a85bb9d9adf21e', '', '', '2018-06-06 07:06:37', '2018-06-06 07:06:37'),
(126, 'amankumar', 'aman', 'kumar', 'support@ditspl.com', '9896425118', '$2y$10$drtosOGH7D.7/nqxpHOJIeh9ztSvop.auAmfZo0k/yPug8vQKbosK', 'raj jjdj', '', 15, 1, 0, 0, '', '', '', '2018-06-06 02:06:04', '2018-06-06 02:06:04'),
(127, 'abdou', 'abdou', 'abdou', 'abdou@gmail.com', '', '$2y$10$fSfPK2BSw3B5vi8OCNzug.Umy0N8zRQGeS2mEH4IoWJKNsV1MZ.06', '', '', 1, 1, 1, 0, '', '', '', '2018-06-06 03:06:17', '2018-06-06 03:06:17'),
(128, 'satish', 'satish', 'nada', 'satish.nada98@gmail.com', '', '$2y$10$vXWgH9T0HcE5.SZKDKa3a.M5QGyEzuyfPpC/TEllGojpc.4takqzS', '', '', 1, 1, 1, 0, '', '', '', '2018-06-06 07:06:55', '2018-06-06 07:06:55'),
(129, 'am2b202', 'test', 'test', 'test@gmail.com', '9234234324', '$2y$10$K/yh/12rcVXDgCfQSfTdde8ejL0wyeTPEI/JfZGZCtVlTzsiQElyC', 'test', '', 12, 1, 0, 0, '', '', '', '2018-06-07 07:06:31', '2018-06-07 07:06:31'),
(130, 'hekuran', 'yded', 'dgsa', 'hekuran@hekuran.com', '4525835836', '$2y$10$LMp/R4GRlEVfUENbDqKCh.4PCDdH7gwDi5QiJsBM8krA2iWkm5Miu', 'hgtj ', '', 15, 1, 0, 0, '', '', '', '2018-06-07 11:06:13', '2018-06-07 11:06:13'),
(131, 'iqbal', 'iqbal', 'khan', 'iqbalkhn570@gmail.com', '', '$2y$10$RYghqi7hnTO54yzo937.m.270/SJO1pz78pYXUUC3Ge22Yz4lv25m', '', '', 1, 1, 1, 0, '', '', '', '2018-06-08 12:06:36', '2018-06-08 12:06:36'),
(132, 'testy', 'test', 'testeek', 'test@gmail.com', '5453143546', '$2y$10$2uCb.aaIFAqE4yNDbWo07eRYHM27t4oRDX5gYQBXyBQUlw.Kop8Ju', 'gshjasjajs', '', 10, 1, 0, 0, '', '', '', '2018-06-08 02:06:02', '2018-06-08 02:06:02'),
(133, 'Baba246', 'Adam', 'Kowal', 't55555@onet.eu', '123456789', '$2y$10$a5s32P9yYwmtK3YTdUGvJugeYCP2lTD/0hjFaFC2ziZA7YOljS1ny', 'sssss 12', '', 15, 1, 0, 0, '', '', '', '2018-06-09 11:06:18', '2018-06-09 11:06:18'),
(134, 'User', 'User', 'User', 'user@mail.com', '', '$2y$10$3YDEGRXyRQJuwjbeh/QOqembWEd4uT270ZqZyHb5TBgjEacxwPox6', '', '', 1, 1, 0, 0, '502e4a16930e414107ee22b6198c578f', '', '', '2018-06-10 06:06:49', '2018-06-10 06:06:49'),
(135, 'hamka', 'Hamka', 'Mannan', 'hamka.window@gmail.com', '', '$2y$10$LGnZRCttH4GMwsYKBT4ekewbkMrXMSK/RE0/r7Q0SmZwyfORxLmva', '', '', 1, 1, 1, 0, '', '', '', '2018-06-10 06:06:32', '2018-06-10 06:06:32'),
(136, 'clarien', 'van', 'pablo', 'essaiphp@you.com', '', '$2y$10$hsFWf0zwWlSkx5IkiKnoX.XvFoeB0liWN.CPCA8CfEeiduWRqO/ka', '', '', 1, 1, 0, 0, 'a8ecbabae151abacba7dbde04f761c37', '', '', '2018-06-10 12:06:21', '2018-06-10 12:06:21'),
(137, 'chetanjain23@gmail.com', 'Chetan', 'Jain', 'chetanjain23@gmail.com', '', '$2y$10$X6YyoQ4SdWBXFkDtvsB.rO6g8pBVbdofeY4Cbo/rAg.2a6pSJn6Lu', '', '', 1, 1, 0, 0, '556f391937dfd4398cbac35e050a2177', '', '', '2018-06-12 05:06:36', '2018-06-12 05:06:36'),
(138, 'romagod1', 'roman', 'd', 'romagod@god.ru', '', '$2y$10$rS7t458ECFDAKhMQuhXnrO/qqHZPELiS70P.WYSh3snfI6atlbrVG', '', '', 1, 1, 0, 0, '432aca3a1e345e339f35a30c8f65edce', '', '', '2018-06-12 07:06:00', '2018-06-12 07:06:00'),
(139, 'romagod', 'roman', 'd', 'era.plus.che@gmail.com', '', '$2y$10$85p/a3LNVx64AB5de0hfZOTKM5.F7pLJ4hWM.zNWZniJpfDL49YdW', '', '', 1, 1, 1, 0, '', '', '', '2018-06-12 07:06:49', '2018-06-12 07:06:49'),
(140, 'farhanb19', 'FArhan', 'BHat', 'FArhanb19@Gmail.com', '', '$2y$10$/i.6qLsCv3oPPTNxepY2De.Qab0Det86bpt5V7g3YKMmtrb29f0d2', '', '', 1, 1, 1, 0, '', '', '', '2018-06-15 12:06:45', '2018-06-15 12:06:45'),
(141, 'hamzashafiq', 'Hamza', 'Shafiq', 'hshafiq2024@gmail.com', '', '$2y$10$5wObdPZupvxLnV/uE7WKTesENKlquVyQviMKUX7WyxMwQyoRZecc2', '', '', 1, 1, 0, 0, '4ffce04d92a4d6cb21c1494cdfcd6dc1', '', '', '2018-06-16 05:06:44', '2018-06-16 05:06:44'),
(142, 'test92', 'test', 'test', 'test@test.com', '0313131', '$2y$10$CRQJFVIdN2tG/VCRA1p9.ehnR5zNhcli0r732Ckt4M4ntWUNxf1BS', 'test', '', 15, 1, 0, 0, '', '', '', '2018-06-16 11:06:01', '2018-06-16 11:06:59'),
(143, 'edwin', 'edwin', 'edwin', 'esk1987@gmail.com', '', '$2y$10$ao2Bv2GVKPiIWHNBiuQCquU/lS9RdELaRk9jGooonETF1mLPfWqXu', '', '', 1, 1, 1, 0, '', '', '', '2018-06-16 05:06:26', '2018-06-16 05:06:26'),
(144, 'arya2', 'ankur', 'pal', 'ap09@aol.com', '899898989', '$2y$10$.K.qkauFRvJm4Wkb2m6L/.DlFo05vUs6RlMTnJFWOo.Iw5fSYjj2K', 'jjljljl', '', 12, 1, 0, 0, '', '', '', '2018-06-17 09:06:08', '2018-06-17 09:06:08'),
(145, 'arya', 'arya', 'pal', 'aryapalankur@gmail.com', '66686868', '$2y$10$JbaFeoyHWEMu5u2AIqRF8.nz0oMUyrTSiWIAxgUcYWRdB7jNYi6Rq', 'kjljlj', '', 14, 1, 0, 0, '', '', '', '2018-06-17 09:06:13', '2018-06-17 09:06:13'),
(146, 'f', 'rav', 'vasoua', 'ravi@gmail.co', '98941651651', '$2y$10$afOs.KiQFbJEh.i9uPmF4elRwiC/KMj.tz5XWyRV.N3FiEuvE40WS', 'ahuqgu', '', 13, 0, 0, 0, '', '', '', '2018-06-19 10:06:30', '2018-07-09 09:07:59'),
(147, 'srikanth', 'Sri', 'reddy', 'reddy.srikanth1995@gmail.com', '', '$2y$10$juPig9PydwMYJRfHIvca0uugDt6fR/4f9LxuIzhVrmIdvOGhI/7z.', '', '', 1, 1, 1, 0, '', '', '', '2018-06-19 10:06:41', '2018-06-19 10:06:41'),
(148, 'hassan', 'abbasi', 'abbasi', 'habbasi593@gmail.com', '032323232322323', '$2y$10$d64BLBXtuNEsvWF10Z7pfOXCV6K3RUH9/jZF.qDavpH4ndGDkNFge', '', '', 12, 1, 0, 0, '', '', '', '2018-06-20 05:06:27', '2018-06-20 05:06:27'),
(149, 'fdbd', 'dfbdb', 'xcv', 'xcv@gg.com', '6546456464', '$2y$10$bx80enk7qvwuoCf8z0BZN.q5akUZ937PG/kt.M.E3uUfyeU917Aty', 'Kanth', '', 12, 1, 0, 0, '', '', '', '2018-06-21 09:06:03', '2018-06-21 09:06:03'),
(150, 'mcas', 'mcas', 'mcas', 'mcas@gmail.com', '1234744646', '$2y$10$RA2oDOm5zrQA6LWpW9jJO.aWU45MABVFyBkqlmoKD3c2hoLSFOqpa', 'fdfdf', '', 1, 1, 0, 0, '', '', '', '2018-06-21 12:06:10', '2018-06-21 12:06:10'),
(151, 'dspadole', 'deepika', 'padole', 'dspadole@gmail.com', '', '$2y$10$yA.yzETxazU/HYK.TJxuPeJBB/Ek8I7X2inUfO8eSaijcG.dqECKS', '', '', 1, 1, 0, 0, '0584ce565c824b7b7f50282d9a19945b', '', '', '2018-06-21 05:06:25', '2018-06-21 05:06:25'),
(152, 'abhijitlondhe9@gmail.com', 'abhijit', 'londhe', 'abhijitlondhe9@gmail.com', '', '$2y$10$bCH6bHzXARI33KMgePtBAeg6L3dys3ISq2agWU1DMuJ9tA7n1WO7.', '', '', 1, 1, 1, 0, '', '', '', '2018-06-22 08:06:35', '2018-06-22 08:06:35'),
(153, 'pppppppppppppppppp', 'a', 'a', 'v@v.v', '43242352523525252', '$2y$10$lLcOUvyBp0xKPiHvFt60pOU1psX2r9SzZtB.M0Z78qqHeF52OA7Ci', 'a', '', 20, 1, 0, 0, '', '', '', '2018-06-22 03:06:54', '2018-06-23 06:06:11'),
(154, 'mmmmmmmmmmmmmmmm', 'webmaster', 'webmaster', 'webmaster@ms.com', '918206932', '$2y$10$nHHbCUsQ3g9CdMvSBXKKOOIpaabn6psUscsp/kumA5IIS0wigLVFq', 'Rua de Olivença,4, Lagoa Albufeira', '', 12, 1, 0, 0, '', '', '', '2018-06-23 02:06:07', '2018-06-23 06:06:56'),
(155, 'Narendar', 'Narendra89', 'Patel', 'narendrapatel765@gmail.com', '8818886801', '$2y$10$l/pD.mNqH.znWpW/7HZn4uHf2o3kFYT89jyeylGuAVnoqtviFZ69S', 'Bhopal', '', 12, 1, 0, 0, '', '', '', '2018-06-23 05:06:01', '2018-06-23 05:06:38'),
(156, 'umar', 'omar', 'oynaqanov', 'omaroynaqanov05@gmail.com', '', '$2y$10$3/rVttZZgBsmTz1iN1mN1eA0UDxjM47lgYJP0Yqsza3wKAlziyme.', '', '', 1, 1, 1, 0, '', '', '', '2018-06-23 08:06:22', '2018-06-23 08:06:22'),
(157, 'josh', 'josh', 'josh', 'jhollister2@my.devry.edu', '480480480', '$2y$10$v9HPNMGHVNuIkCx7eNQgD.nLxYLpXmnhfIvHe5wWCpQzO8akwEYGa', 'blink1', '', 19, 1, 0, 0, '', '', '', '2018-06-24 05:06:09', '2018-06-24 05:06:49'),
(158, 'piyush123', 'piyush', 'poshiya', 'piyushposhiya01@gmail.com', '', '$2y$10$uk3FjdUn3H.tsZs4kVYb2ebo19nYSEsyRrkTJoBfSbACp46a23zIe', '', '', 1, 1, 0, 0, '9b698eb3105bd82528f23d0c92dedfc0', '', '', '2018-06-25 11:06:05', '2018-06-25 11:06:05'),
(159, 'test123', 'test', 'test', 'test123@gmail.com', '', '$2y$10$BrfXMUwe.ID7PJA6BaSpyOuoNuP1teqTKSJOMKmn5iE55bhYrM31u', '', '', 1, 1, 0, 0, 'a96b65a721e561e1e3de768ac819ffbb', '', '', '2018-06-25 12:06:32', '2018-06-25 12:06:32'),
(160, 'sureshw@magnifierinc.com', 'su', 'RM', 'sureshw@magnifierinc.com', '', '$2y$10$jNcWTg0lJkpOB9LI2pmpu.lSPuU2q01hHP3EwJcpyRiVNOoPGCTnK', '', '', 1, 1, 1, 0, '', '', '', '2018-06-26 10:06:07', '2018-06-26 10:06:07'),
(161, 'bolodoy22', 'chrysler', 'guillermo', 'choyguillermo5@gmail.com', '', '$2y$10$vgqi2zLQiFSuJraElJy0g.xPbnuC3rLI1iI/3.iaJ0TISX8Z/eBjW', '', '', 1, 1, 1, 0, '', '', '', '2018-06-26 11:06:56', '2018-06-26 11:06:42'),
(162, 'tt', 'tt', 'tt', 'arun34@gmail.com', '561516512', '$2y$10$Ybqr514xTUyXKx6/r5CnUuoVqAdabeW/fz/jx.CFtgAoSOYjyhvFC', 't5wetwt', '', 8, 1, 0, 0, '', '', '', '2018-06-26 03:06:18', '2018-06-26 03:06:18'),
(163, 'shab', 'hi', 'hlo', 'sk836219@gmail.com', '', '$2y$10$dMoNzTdWSrx7NWjOVrkRUevCZaBmHX3O7ML5lFguwElnsJXcMiIeS', '', '', 1, 1, 0, 0, '6d0f846348a856321729a2f36734d1a7', '63b279d180a030fc7cba043afb1e83af', '', '2018-06-27 07:06:10', '2018-06-27 07:06:10'),
(164, 'alaa', 'alaa', 'alorabi', 'lole.alorabi@gmail.com', '', '$2y$10$Uxcjca1TPZTD8Ji7SxcEDu2UFVGwOo/ORvzcGOLEZDeHwwp5UsydK', '', '', 1, 1, 1, 0, '', '', '', '2018-06-27 11:06:33', '2018-06-27 11:06:33'),
(165, 'Teste', 'teste', 'teste', 'teste@rsites.net', '', '$2y$10$VXFNorcNe4T5JvuiY/9HlOsVEc/fdwxz7XaTO6ahOIu3beiiR3Wt6', '', '', 1, 1, 0, 0, '9f396fe44e7c05c16873b05ec425cbad', '', '', '2018-06-27 02:06:14', '2018-06-27 02:06:14'),
(166, 'Rodrigo', 'RODRIGO', 'OLIVEIRA', 'r.oliveira.net@gmail.com', '', '$2y$10$.oKx2bghWdS6qKsLePFEGeFD2MB1Pxqj7kqGEeCuaVQf1K2BD0QyC', '', '', 1, 1, 1, 0, '', '', '', '2018-06-27 02:06:21', '2018-06-27 02:06:21'),
(167, 'Baali1', 'Hassan', 'Asim', 'hassang086@gmail.com', '', '$2y$10$gs9wqSenEkJG0WJBASIEj.kVA4LdKH.90xz/YQRyrWHIz5YOnpGAS', '', '', 1, 1, 0, 0, '8c235f89a8143a28a1d6067e959dd858', '', '', '2018-06-28 01:06:06', '2018-06-28 01:06:06'),
(168, 'Baali1', 'Hassan', 'Asim', 'Ch.abuzar445@gmail.com', '', '$2y$10$R.iZUV.vlNS18EbHtPfp0eqNl1D5//rcpPRBIAM8X0I.jn4CURXsu', '', '', 1, 1, 0, 0, '996a7fa078cc36c46d02f9af3bef918b', '', '', '2018-06-28 01:06:49', '2018-06-28 01:06:49'),
(169, 'user1234', 'user', 'test', 'user@admin.com', '02352352', '$2y$10$JJaIJwhqFLZMplq0VUo8EOXNjEHkOCpwLcwsyumdf3LFdg1H65/Bq', '', '', 10, 1, 0, 0, '', '', '', '2018-06-29 05:06:43', '2018-06-29 05:06:43'),
(170, 'vijay', 'vijay', 'reddy', 'vgatla65@gmail.com', '', '$2y$10$47YdLynQmxtQ5oVxHJA1o.YB9xrv63ITBGAYpDFeRfEtPTJEhh86i', '', '', 1, 1, 1, 0, '', '', '', '2018-06-29 04:06:43', '2018-06-29 04:06:43'),
(171, 'paras5669', 'Paras', 'Jain', 'paras5669@gamil.com', '', '$2y$10$iwZmP/.FupqPgU.9ffRaNeByqBsnUs8cRTuwfIN/MVZKW9NiuH9Pi', '', '', 1, 1, 0, 0, '3dc4876f3f08201c7c76cb71fa1da439', '', '', '2018-06-30 02:06:30', '2018-06-30 02:06:30'),
(172, 'neha', 'neha', 'neha', 'neha12@gmail.com', '', '$2y$10$m65Iurii5HeEZ.PyRwCOFebCeR8FxW6Dp/mFhZ4OqBvYTm30tw.NG', '', '', 1, 1, 0, 0, 'a5bfc9e07964f8dddeb95fc584cd965d', '', '', '2018-06-30 09:06:15', '2018-06-30 09:06:15'),
(173, 'neha', 'neha', 'neha', 'neha12@yk20.com', '', '$2y$10$NSIROOvk3xg8GPNM9vMuf..nUbYiSP2mNcCrS5ehtn.3pE7/1Kboq', '', '', 1, 1, 1, 0, '', '', '', '2018-06-30 09:06:31', '2018-06-30 09:06:31'),
(174, 'user123', 'user', '123', 'usernjbf@abhcf.com', '8464654654', '$2y$10$ZtWtD0ulANdfvTBLKw1umO2TrG0S3RtKsX4xPElE61TgujLzqUV9e', '', '', 8, 1, 0, 0, '', '', '', '2018-06-30 01:06:13', '2018-06-30 01:06:13'),
(175, 'Rajura', 'Raju', 'Gupta', 'raju720704@gmail.com', '', '$2y$10$4WCPSGbEXGnEAhB99Fi5dezTCioExcsGFOqjZHCZrb9xruxVrEbYq', '', '', 1, 1, 1, 0, '', '', '', '2018-06-30 04:06:08', '2018-06-30 04:06:08'),
(176, 'Rajura', 'Raju', 'Gupta', 'raju@gmail.com', '', '$2y$10$SCHTIE4D6BcmtG2tzOkHDOuXMyiBiPpX.09gh9d7ZdlmQU4xI0jaC', '', '', 1, 1, 0, 0, '6a10bbd480e4c5573d8f3af73ae0454b', '', '', '2018-06-30 04:06:41', '2018-06-30 04:06:41'),
(177, 'Amith', 'D', 'D', 'amithwebsite@gmail.com', '', '$2y$10$ekhqOq2UutkXhj12F9eRmOYT9vMD639splc4P7thnVtLs6xkwtSdK', '', '', 1, 1, 0, 0, '0bb4aec1710521c12ee76289d9440817', '', '', '2018-07-01 03:07:09', '2018-07-01 03:07:09'),
(178, 'Gaurav', 'Gaurav', 'Chaudhary', 's.samiksharawat@gmail.com', '', '$2y$10$h2/Chu9XTQQzPrspZWgeYu86pP9ZrEl/RPjo2pF1nnehaQfGZI5iS', '', '', 1, 1, 0, 0, 'f0adc8838f4bdedde4ec2cfad0515589', '', '', '2018-07-02 06:07:20', '2018-07-02 06:07:20'),
(179, 'suyop', 'suyop', 'suyop', 'suyop@gmail.com', '', '$2y$10$2e4pM0G1.RJVhV8.ygU7F.7GDjuANtLtK8ArV7uaZXeNNL3EX9gpG', '', '', 1, 1, 0, 0, 'f57a2f557b098c43f11ab969efe1504b', '', '', '2018-07-02 06:07:18', '2018-07-02 06:07:18'),
(180, 'Amin', 'shajee', 'ansari', 'rshajee2211@gmail.com', '', '$2y$10$hVY.2QByNRcy58O1i.TnLOCNBukWkhS00I8AKJlX4M80gKeSqEluK', '', '', 1, 1, 0, 0, '077e29b11be80ab57e1a2ecabb7da330', '', '', '2018-07-02 11:07:33', '2018-07-02 11:07:33'),
(181, 'admin', 'miqdad', 'hussain', 'miqdadhussain12@gmail.com', '', '$2y$10$DOux2H1fa2u1cNFbyr2F4uwJTS0Chu2TmjliFkjdpHbSKraTh0Cmq', '', '', 1, 1, 0, 0, '1ce927f875864094e3906a4a0b5ece68', '', '', '2018-07-02 01:07:37', '2018-07-02 01:07:37'),
(182, 'bhagu', 'bhagu', 'ghghg', 'b@gmail.com', '', '$2y$10$oPvgQj0.mqUvVX2sncxavutIRhMb67M/0iFnoUB.kFrICCj9XhTMe', '', '', 1, 1, 0, 0, 'd1f255a373a3cef72e03aa9d980c7eca', '', '', '2018-07-02 06:07:54', '2018-07-02 06:07:54'),
(183, 'bhagu', 'bhagu', 'gggggggg', 'b.k.barhate@gmail.com', '', '$2y$10$08fF5B02Tpa9Y0.b5FDoj.ejAxXj548HWTYQ3FZtTF9LNUQBogVDm', '', '', 1, 1, 1, 0, '', '', '', '2018-07-02 06:07:20', '2018-07-02 06:07:20'),
(184, 'user100', 'jack', 'anderson', 'andersion@gmail.com', '099', '$2y$10$MAHMfsBlXyIasegWN0YiK.zTGLCSaxXa6X/TqfAZDd7Tii0EsiTuW', 'paris', '', 10, 1, 0, 0, '', '', '', '2018-07-03 10:07:39', '2018-07-03 10:07:39'),
(185, 'slim vermieter', 'Mohamed slim', 'Guerairi', 'info@manzili.net', '', '$2y$10$8dIJLWb1OkJD/ul7CvdS8ep1A4ly.RWUSVqnhGuq/uEVrm3R283rC', '', '', 1, 1, 0, 0, '2f2b265625d76a6704b08093c652fd79', '', '', '2018-07-03 04:07:09', '2018-07-03 04:07:09'),
(186, 'enggar', 'enggar', 'enggar', 'enggar@gmail.com', '082116663331', '$2y$10$HcEwGqVSa6BkeJGRo6VP0udBTUtRqQG4xYqmkAY7QJ00B1iMrYKqO', 'enggar', '', 16, 1, 0, 0, '', '', '', '2018-07-04 10:07:37', '2018-07-04 10:07:37'),
(187, 'sfa123', 'SFA', 'SFA', 'SFA@gmail.com', '', '$2y$10$EswU4fgygo6ToZOvMK6WOu5yM8oxogAmzr.CRCcf./KpEmUD7SXKi', '', '', 1, 1, 0, 0, '3d8e28caf901313a554cebc7d32e67e5', '', '', '2018-07-04 10:07:13', '2018-07-04 10:07:13'),
(188, 'Jis', 'Jis', 'Th', 'afmin547@gmail.com', '', '$2y$10$bcRJ3BDogajkWzUN9zu7PuxCd0der3ZSAwJHdlwOIfsp5Cmaqud4G', '', '', 1, 1, 0, 0, 'd9fc5b73a8d78fad3d6dffe419384e70', '', '', '2018-07-04 04:07:15', '2018-07-04 04:07:15'),
(189, 'venkat', 'oruganti', 'venkat', 'oruganti.venkat77@gmail.com', '', '$2y$10$1SbHlPmAreuVabm1Bp4aReXlPbfBBjKOemU0Kh/owI07isAOWgQq6', '', '', 1, 1, 0, 0, 'a5e00132373a7031000fd987a3c9f87b', '', '', '2018-07-05 06:07:36', '2018-07-05 06:07:36'),
(190, 'demo', 'demo', 'demo', 'demo@demo.com', '1231231231', '$2y$10$c/hxiFzYkRRqFiwt7T.lEOA83p4FwBpBNWJy8N0WfSpP5wi8CeCHS', 'demo', '', 15, 1, 0, 0, '', '', '', '2018-07-06 12:07:56', '2018-07-06 12:07:56'),
(191, 'demo1', 'demo1', 'demo1', 'demo1@demo.com', '12312312', '$2y$10$gDY6Bv2MQnPWir5JXx7pBe7S1PFmA.QsteYqSJI4fA7H5o52k4KVu', 'demo1', '', 15, 1, 0, 0, '', '', '', '2018-07-06 12:07:16', '2018-07-06 12:07:16'),
(192, 'demo2', 'demo2', 'demo2', 'b9561ddbea@emailna.life', '22222', '$2y$10$p.buG55fxMizGFwQ4heWuuzQNPR.kJybhgsJN5r4.Hz9eyZ2hwLNi', 'demo2', '', 15, 1, 0, 0, '', '', '', '2018-07-06 12:07:11', '2018-07-06 12:07:11'),
(193, 'Krishan', 'Krishan', 'sharma', 'krish@mailinator.com', '424225255555', '$2y$10$wam9VbB6nf07KZU9phG9J.2FUP4M.VXWhxvMLxCNBcgsE/6fxlLu.', 'test', '', 12, 1, 0, 0, '', '', '', '2018-07-08 10:07:52', '2018-07-08 10:07:52'),
(194, 'shahzaib', 'Shahzaib', 'Qureshi', 'shahzaibqureshi7890@gmail.com', '', '$2y$10$XIBAdpr3/LOvGZ5NrcnPZOELGky/Dg7P.Y1dyMEOFyH/A8MvvuILa', '', '', 1, 1, 1, 0, '', '', '', '2018-07-09 08:07:48', '2018-07-09 08:07:48'),
(195, 'dsa', 'ss', 'ss', 'ss@gmail.com', '561654561651', '$2y$10$VlQrcH/QtkqkHh3y5h3pJOT7rakDb/Wtxh2PuSLBGM0HN6PTriUTS', 's', '', 21, 1, 0, 0, '', '', '', '2018-07-09 02:07:10', '2018-07-09 02:07:10'),
(196, 'nauman', 'nauman', 'ahmed', 'naumanahmedcs@gmail.com', '3469548054', '$2y$10$EuOXV/MBmCwtEkaclsksd.ZuDvPptYWDuM3y4KHa11AL2CpblIs5m', 'Street 10 Madina Bazar Gujrat', '', 22, 1, 0, 0, '', '', '', '2018-07-10 08:07:04', '2018-07-10 08:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `xx_categories`
--

DROP TABLE IF EXISTS `xx_categories`;
CREATE TABLE IF NOT EXISTS `xx_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `top_category` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx_categories`
--

INSERT INTO `xx_categories` (`id`, `name`, `slug`, `status`, `top_category`) VALUES
(1, 'Accounting', 'accounting', 1, 0),
(2, 'Government / Administration', 'government-administration', 1, 0),
(4, 'Arts / Entertainment', 'arts-entertainment', 1, 0),
(5, 'Banking', 'banking', 1, 0),
(6, 'Beauty / Fashion', 'beauty-fashion', 1, 0),
(7, 'Construction / Real Estate', 'construction-real-estate', 1, 0),
(8, 'Customer Service', 'customer-service', 1, 0),
(9, 'Electronics / Technical', 'electronics-technical', 1, 0),
(10, 'Engineering', 'engineering', 1, 0),
(11, 'Education', 'education', 1, 0),
(12, 'Food and Beverages', 'food-and-beverages', 1, 0),
(13, 'Graphic Design', 'graphic-design', 1, 0),
(14, 'Medical & Healthcare', 'medical-healthcare', 1, 0),
(15, 'Hospitality / Airline', 'hospitality-airline', 1, 0),
(16, 'Human Resources', 'human-resources', 1, 0),
(17, 'Insurance', 'insurance', 1, 0),
(18, 'Legal / Lawyers', 'legal-lawyers', 1, 0),
(19, 'Sales', 'sales', 1, 0),
(20, 'Secretarial', '', 1, 0),
(21, 'Teaching / Training', 'teaching-training', 1, 0),
(22, 'Transportation', 'transportation', 1, 0),
(23, 'Other', '', 1, 0),
(25, 'Information Technology', 'information-technology', 1, 0),
(26, 'Business Development', 'business-development', 1, 0),
(27, 'Resturants', 'resturants', 1, 0),
(28, 'Industrials and Manufecturing', 'industrials-and-manufecturing', 1, 0),
(29, 'Marketing & Advertising', 'marketing-advertising', 1, 0),
(30, 'Executive / CEO', 'executive-ceo', 1, 0),
(32, 'Designer', 'designer', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `xx_cities`
--

DROP TABLE IF EXISTS `xx_cities`;
CREATE TABLE IF NOT EXISTS `xx_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `top_city` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_cities`
--

INSERT INTO `xx_cities` (`id`, `name`, `slug`, `top_city`, `status`) VALUES
(1, 'Dubai', 'dubai', 0, 1),
(2, 'Abu Dhabi', 'abu-dhabi', 0, 1),
(3, 'Sharjah', 'sharjah', 0, 1),
(4, 'Ajman', 'ajman', 0, 1),
(5, 'Fujairah', 'fujairah', 0, 1),
(6, 'Ras Al Khaimah', 'ras-al-khaimah', 0, 1),
(7, 'Umm Al Quwain', 'umm-al-quwain', 0, 1),
(9, 'Gujrat', 'gujrat', 0, 1),
(10, 'California', 'california', 0, 1),
(11, 'Florida', 'florida', 0, 1),
(12, 'Washington', 'washington', 0, 1),
(13, 'Jakarta', 'jakarta', 0, 1),
(14, 'Bali', 'bali', 0, 1),
(15, 'Delhi', 'delhi', 0, 1),
(16, 'Bumbay', 'bumbay', 0, 1),
(17, 'Berlin', 'berlin', 0, 1),
(18, 'Hauts-de- France', 'hautsde-france', 0, 1),
(19, 'England', 'england', 0, 1),
(20, 'Wwe', 'wwe', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xx_companies`
--

DROP TABLE IF EXISTS `xx_companies`;
CREATE TABLE IF NOT EXISTS `xx_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `company_name` varchar(155) DEFAULT NULL,
  `company_slug` varchar(155) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(30) DEFAULT NULL,
  `website` varchar(155) DEFAULT NULL,
  `category` int(5) DEFAULT NULL,
  `no_of_employers` varchar(10) NOT NULL,
  `founded_date` date DEFAULT NULL,
  `company_logo` varchar(155) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `org_type` enum('NGO','Private','Public') DEFAULT 'Private',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(80) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `postcode` varchar(20) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `google_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `vimeo_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx_companies`
--

INSERT INTO `xx_companies` (`id`, `employer_id`, `company_name`, `company_slug`, `email`, `phone_no`, `website`, `category`, `no_of_employers`, `founded_date`, `company_logo`, `description`, `org_type`, `address`, `country`, `city`, `postcode`, `facebook_link`, `twitter_link`, `google_link`, `youtube_link`, `vimeo_link`, `linkedin_link`, `is_active`, `updated_date`) VALUES
(2, 1, 'Net Design', 'net-design', 'info@domainname.com', '50700', 'http://www.domainname.com', 25, '10-20', '2018-12-14', 'uploads/company_logos/1547026922net-design-1536854391-995.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum condimentum mauris, non posuere urna consectetur quis. Suspendisse semper eu eros eget convallis. Etiam mattis blandit nulla, non venenatis risus varius vel. Morbi fringilla dignissi', 'Private', 'Suite 403, Canal Road UMI', '5', '10', '50700', '', '', '', '', '', '', 1, '2019-01-17 00:00:00'),
(3, 2, 'Star Tech', 'star-tech', 'powerwave@gmail.com', '50700', 'http://www.codeglamour.com', 26, '10-20', '2018-12-14', 'uploads/company_logos/1547026390autosoft-dynamics-1536854279-440.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum condimentum mauris, non posuere urna consectetur quis. Suspendisse semper eu eros eget convallis. Etiam mattis blandit nulla, non venenatis risus varius vel. Morbi fringilla dignissi', 'Private', 'Madina Bazar Gujrat', '1', '9', '50700', '', '', '', '', '', '', 1, '2019-01-09 00:00:00'),
(5, 3, 'Tech Pearl', 'tech-pearl', 'techpearl@gmail.com', '+9715071325654', 'www.techpearl.com', 25, '1-10', '2016-12-08', 'uploads/company_logos/1545727892jobscanyon_logo.jpg', 'A professional software developer company with more then 200 clients roiling all over in UAE.', 'Public', 'Ariga road uae', '2', '1', '', '', '', '', '', '', '', 1, '2018-12-31 08:12:02'),
(7, 5, 'Power Wave', 'power-wave', 'info@domainname.com', '9854562155', 'www.domainname.com', 9, '1-10', '2019-01-01', 'uploads/company_logos/15470240051545727892jobscanyon_logo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum condimentum mauris, non posuere urna consectetur quis. Suspendisse semper eu eros eget convallis. Etiam mattis blandit nulla, non venenatis risus varius vel. Morbi fringilla dignissi', 'Private', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2', '1', '89555', '', '', '', '', '', '', 1, '2019-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_company_info`
--

DROP TABLE IF EXISTS `xx_company_info`;
CREATE TABLE IF NOT EXISTS `xx_company_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `industry` varchar(60) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_company_info`
--

INSERT INTO `xx_company_info` (`id`, `employer_id`, `industry`, `company_name`, `email`, `mobile_number`, `address`, `created_date`, `updated_date`) VALUES
(1, 1, 'Aalibaba 40 choor', 'qwerty', 'abujutt108@gmail.com', '03123456789', 'noor pur c-14', '2018-07-24', '2018-07-29'),
(2, 2, 'abu', 'hurairah', 'abccd@efgh.ijk', '12345678910', 'zahoor elahi koothi', '2018-07-24', '2018-07-26'),
(4, 41, 'software', 'brain hackers', 'abuhurairah108108@gmail.com', '12345678910', 'madina labour colony bh road gujrat,punjab,pakistan', '2018-07-29', '2018-07-29'),
(3, 3, 'amazn4', 'abcd2', 'abujutt108@gmail.com', '03123456789', 'noor pur c-14', '2018-07-24', '2018-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `xx_contact_us`
--

DROP TABLE IF EXISTS `xx_contact_us`;
CREATE TABLE IF NOT EXISTS `xx_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_contact_us`
--

INSERT INTO `xx_contact_us` (`id`, `username`, `email`, `subject`, `message`, `created_date`, `updated_date`) VALUES
(1, 'abu', 'abujutt108@gmail.com', 'hurairah', 'You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form located on this page to ask a question about our services and current offers. We would be happy to answer your questions or offer any help.', '2018-08-02', '2018-08-02'),
(2, 'abu', 'abujutt108@gmail.com', 'hurairah', 'You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form located on this page to ask a question about our services and current offers. We would be happy to answer your questions or offer any help.', '2018-08-02', '2018-08-02'),
(3, 'abu', 'abujutt108@gmail.com', 'hurairah', 'You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form located on this page to ask a question about our services and current offers. We would be happy to answer your questions or offer any help.', '2018-08-02', '2018-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `xx_countries`
--

DROP TABLE IF EXISTS `xx_countries`;
CREATE TABLE IF NOT EXISTS `xx_countries` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `top_country` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx_countries`
--

INSERT INTO `xx_countries` (`id`, `name`, `slug`, `top_country`, `status`) VALUES
(1, 'Pakistan', 'pakistan', 0, 1),
(2, 'United Arab Emirates', 'united-arab-emirates', 0, 1),
(3, 'India', 'india', 0, 1),
(4, 'Germany', 'germany', 0, 1),
(5, 'United States', 'united-states', 0, 1),
(6, 'United Kingdom', 'united-kingdom', 0, 1),
(7, 'Qatar', 'qatar', 0, 1),
(9, 'Indonesia', 'indonesia', 0, 1),
(10, 'France', 'france', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xx_cv_shortlisted`
--

DROP TABLE IF EXISTS `xx_cv_shortlisted`;
CREATE TABLE IF NOT EXISTS `xx_cv_shortlisted` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_cv_shortlisted`
--

INSERT INTO `xx_cv_shortlisted` (`id`, `employer_id`, `user_id`, `status`, `created_date`) VALUES
(1, 1, 12, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `xx_education`
--

DROP TABLE IF EXISTS `xx_education`;
CREATE TABLE IF NOT EXISTS `xx_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_education`
--

INSERT INTO `xx_education` (`id`, `type`) VALUES
(1, 'Bachelor′s degree'),
(2, 'Diploma'),
(3, 'Doctorate'),
(4, 'Higher diploma'),
(5, 'High school or equivalent'),
(6, 'Master&#8242;s degree');

-- --------------------------------------------------------

--
-- Table structure for table `xx_employers`
--

DROP TABLE IF EXISTS `xx_employers`;
CREATE TABLE IF NOT EXISTS `xx_employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_verify` tinyint(4) NOT NULL DEFAULT '0',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_employers`
--

INSERT INTO `xx_employers` (`id`, `firstname`, `lastname`, `email`, `password`, `designation`, `mobile_no`, `dob`, `gender`, `country`, `city`, `description`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_date`, `updated_date`) VALUES
(1, 'Colin', 'Firth', 'employer@onjob.com', '$2y$10$tm5ohlFwyoudHpeO.80my.lG1ImfBfnlZ1yZOMDsa6ih5xt77wHDm', 'CEO / Founder', '0193469548054', '2018-12-14', '', '5', '10', 'USA No.1 Software House.', 1, 1, 0, 0, '', '5c9452254bccd24b8ad0bb1ab4408ad1', '', '2018-12-08 07:12:30', '2019-01-17 00:00:00'),
(2, 'Code', 'Glamour', 'codeglamour1@gmail.com', '$2y$10$qQpLoW8vGmJ5DjrKwcKa2utk4/nCVXZqQaz.szl0PVZsN/Ln2MB/G', 'CEO / Founder', '03469548054', '1993-06-02', '', '1', '9', '', 1, 1, 0, 0, '', '', '', '2018-12-30 11:12:43', '2018-12-30 11:12:10'),
(3, 'Ali', 'Raza', 'aliraza@gmail.com', '$2y$10$qQpLoW8vGmJ5DjrKwcKa2utk4/nCVXZqQaz.szl0PVZsN/Ln2MB/G', 'Manager', '', '', '', '2', '1', '', 1, 1, 0, 0, '', '', '', '2018-12-31 08:12:59', '2018-12-31 08:12:51'),
(5, 'John', 'Smith', 'johnsmith@gmail.com', '$2y$10$G/ibcLiclKDeqEf0eM7guewvQfLuwYQWXJPXv7UlqXTlQHCYTBQwq', '', '', '2019-01-10', '', '2', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum condimentum mauris, non posuere urna consectetur quis. Suspendisse semper eu eros eget convallis. Etiam mattis blandit nulla, non venenatis risus varius vel. Morbi fringilla dignissi', 1, 1, 0, 0, '', '', '', '2019-01-09 00:00:00', '2019-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_expected_salary`
--

DROP TABLE IF EXISTS `xx_expected_salary`;
CREATE TABLE IF NOT EXISTS `xx_expected_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_range` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_expected_salary`
--

INSERT INTO `xx_expected_salary` (`id`, `sal_range`) VALUES
(1, 'Unspecified'),
(2, 'Negotiable'),
(3, '500 - 1,000'),
(4, '1,000 - 2,000'),
(5, '2,000 - 3,000'),
(6, '4,000 - 6,000'),
(7, '6,000 - 8,000'),
(8, '8,000 - 10,000'),
(9, '10,000 - 15,000'),
(10, '15,000 - 20,000'),
(11, '20,000 - 30,000'),
(12, '30,000 - 50,000'),
(13, '50,000+');

-- --------------------------------------------------------

--
-- Table structure for table `xx_industries`
--

DROP TABLE IF EXISTS `xx_industries`;
CREATE TABLE IF NOT EXISTS `xx_industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `top_industry` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx_industries`
--

INSERT INTO `xx_industries` (`id`, `name`, `slug`, `status`, `top_industry`) VALUES
(1, 'Accountant', 'accountant', 1, 0),
(2, 'Advertising', 'advertising', 1, 0),
(3, 'Airlines', 'airlines', 1, 0),
(4, 'Architect', 'architect', 1, 0),
(5, 'Audit', 'audit', 1, 0),
(6, 'Aviation', 'aviation', 1, 0),
(7, 'Back Office', 'back-office', 1, 0),
(8, 'Banking', 'banking', 1, 0),
(9, 'Broking', 'broking', 1, 0),
(10, 'CAD CAM', 'cad-cam', 1, 0),
(11, 'Chef', 'chef', 1, 0),
(12, 'Civil Engineering', 'civil-engineering', 1, 0),
(85, 'IT', 'it', 1, 0),
(15, 'Construction', 'construction', 1, 0),
(16, 'Customer service', 'customer-service', 1, 0),
(17, 'Data Entry', 'data-entry', 1, 0),
(18, 'Design Engineer', 'design-engineer', 1, 0),
(19, 'Doctor', 'doctor', 1, 0),
(20, 'Education', 'education', 1, 0),
(21, 'Fashion', 'fashion', 1, 0),
(22, 'Film', 'film', 1, 0),
(23, 'Finance', 'finance', 1, 0),
(24, 'Food and Beverage', 'food-and-beverage', 1, 0),
(25, 'Front Office', 'front-office', 1, 0),
(26, 'Graphic Designer', 'graphic-designer', 1, 0),
(27, 'Hardware', 'hardware', 1, 0),
(28, 'Health Care', 'health-care', 1, 0),
(29, 'Hotel', 'hotel', 1, 0),
(30, 'HR', 'hr', 1, 0),
(31, 'Electrical Engineering', 'electrical-engineering', 1, 0),
(32, 'Industrial', 'industrial', 1, 0),
(33, 'Insurance', 'insurance', 1, 0),
(34, 'Interior Desing', 'interior-desing', 1, 0),
(35, 'IT Hardware', 'it-hardware', 1, 0),
(36, 'IT Networking', 'it-networking', 1, 0),
(37, 'IT Software', 'it-software', 1, 0),
(38, 'Jurnalism', 'jurnalism', 1, 0),
(39, 'Languages', 'languages', 1, 0),
(40, 'Lawyer', 'lawyer', 1, 0),
(41, 'Legal Advisor', 'legal-advisor', 1, 0),
(42, 'Logistics', 'logistics', 1, 0),
(43, 'Maintenance', 'maintenance', 1, 0),
(44, 'Management', 'management', 1, 0),
(45, 'Manufacturing', 'manufacturing', 1, 0),
(46, 'Marketing', 'marketing', 1, 0),
(47, 'Media Planning', 'media-planning', 1, 0),
(48, 'Medical', 'medical', 1, 0),
(49, 'Teaching', 'teaching', 1, 0),
(50, 'MR', 'mr', 1, 0),
(51, 'Nurse', 'nurse', 1, 0),
(52, 'Oil and Gas', 'oil-and-gas', 1, 0),
(53, 'Operation', 'operation', 1, 0),
(54, 'Petroleum', 'petroleum', 1, 0),
(55, 'Pharma', 'pharma', 1, 0),
(56, 'PR', 'pr', 1, 0),
(57, 'Production', 'production', 1, 0),
(58, 'Projects', 'projects', 1, 0),
(59, 'Purchase', 'purchase', 1, 0),
(60, 'Quality', 'quality', 1, 0),
(61, 'Real Estate', 'real-estate', 1, 0),
(62, 'Repair', 'repair', 1, 0),
(63, 'Research and Development', 'research-and-development', 1, 0),
(64, 'Restaurunt', 'restaurunt', 1, 0),
(65, 'Retailing', 'retailing', 1, 0),
(66, 'Sales', 'sales', 1, 0),
(67, 'Secretary', 'secretary', 1, 0),
(68, 'Security', 'security', 1, 0),
(69, 'Shipping', 'shipping', 1, 0),
(70, 'Site Engineering', 'site-engineering', 1, 0),
(71, 'Supply Chain', 'supply-chain', 1, 0),
(72, 'Tax', 'tax', 1, 0),
(73, 'Administration', 'administration', 1, 0),
(74, 'Telecalling', 'telecalling', 1, 0),
(75, 'Telecom', 'telecom', 1, 0),
(76, 'Testing', 'testing', 1, 0),
(77, 'Government', 'government', 1, 0),
(78, 'Textile', 'textile', 1, 0),
(79, 'Ticketing', 'ticketing', 1, 0),
(80, 'Top Management', 'top-management', 1, 0),
(81, 'Traveling', 'traveling', 1, 0),
(82, 'TV', 'tv', 1, 0),
(83, 'Visualizer', 'visualizer', 1, 0),
(84, 'Web Designer', 'web-designer', 1, 0),
(86, 'Mechanical Engineering', 'mechanical-engineering', 1, 0),
(87, 'Photography', 'photography', 1, 0),
(88, 'Ozient12345', 'ozient12345', 1, 0),
(89, 'Wwe', 'wwe', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `xx_job_post`
--

DROP TABLE IF EXISTS `xx_job_post`;
CREATE TABLE IF NOT EXISTS `xx_job_post` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_title` varchar(60) NOT NULL,
  `job_slug` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `category` varchar(60) NOT NULL,
  `industry` varchar(40) NOT NULL,
  `job_type` varchar(40) NOT NULL,
  `employment_type` varchar(40) NOT NULL,
  `description` longtext NOT NULL,
  `min_salary` int(10) NOT NULL,
  `max_salary` int(10) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `total_positions` int(11) NOT NULL,
  `skills` longtext NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `location` varchar(255) NOT NULL,
  `is_featured` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_status` enum('active','inactive','pending','blocked') NOT NULL DEFAULT 'active',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_job_post`
--

INSERT INTO `xx_job_post` (`id`, `admin_id`, `employer_id`, `company_id`, `job_title`, `job_slug`, `company_name`, `page_title`, `category`, `industry`, `job_type`, `employment_type`, `description`, `min_salary`, `max_salary`, `education`, `experience`, `gender`, `total_positions`, `skills`, `city`, `country`, `location`, `is_featured`, `is_status`, `created_date`, `updated_date`) VALUES
(1, 0, 1, 2, 'PHP Web Application Developer', 'php-web-application-developer-job-in-dubai', 'Ozient Technologies', NULL, '25', '85', 'full-time', 'employee', 'Having more then 5 years of experience in the development field', 500, 1000, '2', '0-1', 'Female', 1, 'html, css, javascript, jquery, ajax', '1', '1', 'Madina Bazar Gujrat', 'no', 'active', '2018-12-09 08:12:13', '2018-12-24 12:12:08'),
(3, 0, 1, 2, 'Wordpress Developer Required', 'wordpress-developer-required-job-in-sharjah', 'Ozient Technologies', NULL, '25', '37', 'full-time', 'employee', 'Looking a professional PHP Developer more then 10 years of experience', 1000, 500, '1', '10-15', 'No Preference', 1, 'html, css, javascript, jquery, ajax', '3', '2', 'GT road gujrat pakistan', 'no', 'active', '2018-12-12 09:12:55', '2018-12-17 06:12:48'),
(4, 0, 2, 3, 'Professional Accountant', 'professional-accountant-job-in-dubai', 'Ozient Technologies', NULL, '1', '1', 'full-time', 'employee', 'We are looking for an accountant which can manage daily accounting tasks, book keeping, data entries, financial reports, profit and loss, cash records, payment records,taxation,procedure,bank inventory,audit and maintain overall records.\r\n\r\nSpecific Tasks\r\nRecord keeping\r\nStock entries, payment records\r\nFinancial reports, audit,', 500, 1000, '1', '1-2', 'Male', 1, 'ms word, basic computer, english language', '1', '5', 'Street 10 Madina Bazar Gujrat', 'no', 'active', '2018-12-18 08:12:16', '2018-12-18 09:12:42'),
(7, 0, 3, 6, 'Pharmacist', 'pharmacist-job-in-dubai', 'Ozient', NULL, '14', '48', 'full-time', 'employee', 'We are looking for the services of Pharmacist\r\n\r\nCandidates with relevant experience are encouraged to apply.', 3000, 5000, '1', '5-10', 'Male', 5, 'medicine, tablets, spray', '1', '2', 'Jail Choke Gujrat, Pakistan', 'no', 'active', '2019-01-06 08:01:11', '2019-01-06 08:01:11'),
(6, 0, 2, 3, 'Senior Laravel Developer', 'senior-laravel-developer-job-in-gujrat', 'CodeGlamour', NULL, '25', '37', 'full-time', 'employee', 'Programmers Force is a product-driven software development company whose products are being used by clients from the FinTech, Banking and Business sectors. Our products include, but are not limited to, digital biometric identity verification, fraud prediction and time tracking SaaS(s). With a development office in Lahore, Pakistan, and a team of around 50, we have managed to achieve a vast global user base (from over 200 countries) within the first two years in the industry. We develop systems using artificial intelligence, machine learning and state of the art tools and technologies. We aim to stay top of the line, overcoming the challenges faced by businesses worldwide.', 1000, 2000, '1', '2-5', 'No Preference', 3, 'html, css, javascript, laravel, php, mysql', '9', '1', 'Madina Bazar Gujrat', 'no', 'active', '2018-12-30 11:12:33', '2018-12-30 11:12:33'),
(8, 0, 1, 2, 'Communication Specialist', 'communication-specialist-job-in-california', 'Net Design', NULL, '8', '16', 'full-time', 'employee', 'Researches specific opportunities, products, events, and/or services being marketed. Identifies key marketing goals, objectives, strategies, and primary audiences. Determines which communication vehicles will be used and establishes style, tone, voice, and length of copy needed. Uses feedback, performance analysis, and observed trends/best practices to guide and improve creative work.', 7500, 9500, '1', '1-2', 'No Preference', 5, 'Researches, MS Word, Excel', '10', '5', '400 Bizzell St,  College Station, TX (US)  77843', 'no', 'active', '2019-01-17 00:00:00', '2019-01-17 00:00:00'),
(9, 0, 1, 2, 'Director of Sales', 'director-of-sales-job-in-california', 'Net Design', NULL, '19', '66', 'full-time', 'employee', 'At JHG (JustHomesGroup), we don’t follow the rules, we create them. We are leaders. We value personal and professional growth. We accept challenges, set goals, and exceed them. We refuse to stay in mediocrity and instead choose to live purposeful lives without limits. We believe that there is always a way and we never give up. We work hard, and we play even harder. We are the real estate team of the future and our mission is to transform lives through home ownership.', 8000, 9500, '1', '2-5', 'No Preference', 1, 'sales, customer, care', '10', '5', 'Keller Williams 730 highway 321  Lenoir City, TN  US, 37771', 'no', 'active', '2019-01-17 00:00:00', '2019-01-17 00:00:00'),
(10, 0, 2, 3, 'Sales Associates', 'sales-associates-job-in-jakarta', 'Net Design', NULL, '19', '66', 'full-time', 'employee', 'Our Crew Members create a warm and friendly shopping experience in our stores. We answer questions, offer suggestions and ensure our customers know they are welcomed and cared for. We entertain customers and make grocery shopping an exciting adventure.', 8500, 9500, '1', '2-5', 'Female', 9, 'sales, target, ms office', '13', '9', 'suite 303, link road', 'no', 'active', '2019-01-17 00:00:00', '2019-01-17 00:00:00'),
(11, 0, 1, 2, 'Accountant demo', 'accountant-demo-job-in-florida', 'Net Design', NULL, '1', '1', 'full-time', 'employee', 'test', 500, 1000, '1', '1-2', 'No Preference', 1, 'test', '11', '5', 'Florida', 'no', 'active', '2019-01-18 00:00:00', '2019-01-18 00:00:00'),
(12, 0, 2, 3, 'Junior Laravel Developer', 'senior-laravel-developer-job-in-gujrat', 'CodeGlamour', NULL, '25', '37', 'full-time', 'employee', 'Programmers Force is a product-driven software development company whose products are being used by clients from the FinTech, Banking and Business sectors. Our products include, but are not limited to, digital biometric identity verification, fraud prediction and time tracking SaaS(s). With a development office in Lahore, Pakistan, and a team of around 50, we have managed to achieve a vast global user base (from over 200 countries) within the first two years in the industry. We develop systems using artificial intelligence, machine learning and state of the art tools and technologies. We aim to stay top of the line, overcoming the challenges faced by businesses worldwide.', 1000, 2000, '1', '2-5', 'No Preference', 3, 'html, css, javascript, laravel, php, mysql', '9', '1', 'Madina Bazar Gujrat', 'no', 'active', '2018-12-30 11:12:33', '2018-12-30 11:12:33'),
(13, 0, 1, 2, 'Accountant', 'professional-accountant-job-in-dubai', 'Ozient Technologies', NULL, '1', '1', 'full-time', 'employee', 'We are looking for an accountant which can manage daily accounting tasks, book keeping, data entries, financial reports, profit and loss, cash records, payment records,taxation,procedure,bank inventory,audit and maintain overall records.\r\n\r\nSpecific Tasks\r\nRecord keeping\r\nStock entries, payment records\r\nFinancial reports, audit,', 500, 1000, '1', '1-2', 'Male', 1, 'ms word, basic computer, english language', '1', '5', 'Street 10 Madina Bazar Gujrat', 'no', 'active', '2018-12-18 08:12:16', '2018-12-18 09:12:42'),
(14, 0, 2, 3, 'Software Developer', 'wordpress-developer-required-job-in-sharjah', 'Ozient Technologies', NULL, '25', '37', 'full-time', 'employee', 'Looking a professional PHP Developer more then 10 years of experience', 1000, 500, '1', '10-15', 'No Preference', 1, 'html, css, javascript, jquery, ajax', '3', '2', 'GT road gujrat pakistan', 'no', 'active', '2018-12-12 09:12:55', '2018-12-17 06:12:48'),
(15, 0, 1, 2, 'Project Management Instructor', 'project-management-instructor-job-in-california', 'Net Design', NULL, '23', '44', 'part-time', 'employee', 'Accomplishes project objectives by planning and evaluating project activities. The project manager should be able to communicate in English fluently. He should have good interpersonal skills so that he can manage engineers and technicians in a cordial and professional way. The manager would also be required closely coordinate with client.', 500, 500, '1', '1-2', 'No Preference', 1, 'Having problem solving abilities.', '10', '5', 'Lahore', 'no', 'active', '2019-01-20 00:00:00', '2019-01-22 07:01:35'),
(16, 0, 1, 2, 'CCNA / CCNP Instructor', 'ccna-ccnp-instructor-job-in-', 'Net Design', NULL, '25', '36', 'part-time', 'employee', 'Instruct classes, conduct training development of lesson plans, and evaluate student performances using TRADOC-approved Instructional methodology to include 350-2 (Staff and Faculty Development Training), 350-5 (Ft Gordon Academic Practices), 350-22 (Test Control Policies and Procedures).\r\nAssist students in the development of Instructor presentation skills to include developing lesson plans, preparing training materials, and practicing presentations.\r\nEnsure classroom presentation equipment and classroom furniture is in operable condition.\r\nEnsure established classroom security requirements and procedures are followed IAW the unit Standard Operating Procedures (SOP).\r\nMaintain student records and statistics.\r\nApply the current program of instruction (POI) in each course listed in the PWS.\r\nBachelors Degree in Computer Science / Telecom / Electronics\r\nCCNA Certification (640-802), IINS (640-553)\r\nAt least 1 Year Teaching/Training Experience\r\nAt least 1 Year Working Experience with Cisco Equipments\r\nProven ability in the field of Network Design and Engineering\r\nWillingness to learn about the education industry\r\nMCITP Certification Preferable', 500, 500, '6', '1-2', 'No Preference', 5, 'Networking, Web development', '18', '1', 'Ferozepur Road, Lahore', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(17, 0, 3, 5, 'Associate Engnineer - DAE Electronics', 'associate-engnineer-dae-electronics-job-in-california', 'Tech Pearl', NULL, '10', '73', 'full-time', 'internship', 'We have need Associate Engnineer DAE Electronics for our Office.\r\nCandidate have Photocopier and Printing Experience.', 500, 500, '5', '0-1', 'Male', 5, 'Associate Engnineer DAE Electronics', '10', '5', 'Rawalpindi', 'no', 'active', '2019-01-20 00:00:00', '2019-01-22 08:01:37'),
(18, 0, 2, 3, 'Electrical Engineer', 'electrical-engineer-job-in-england', 'Net Design', NULL, '9', '31', 'full-time', 'employee', 'We are looking for the services of Electrical Engineer\r\nCandidates with relevant experience are encouraged to apply.\r\nSystek (pvt) limited.', 500, 2500, '2', '5-10', 'No Preference', 1, 'Electrical Engineer', '19', '6', 'Fatima Jinnah Colony, Karachi,', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(19, 0, 1, 2, 'Administration Officer', 'administration-officer-job-in-england', 'Net Design', NULL, '2', '2', 'full-time', 'employee', 'BMR Consultants is seeking for \"Female Office Coordinator/Administrator\" who should be minimum Graduate. Candidate should have excellent communication skills.Job Duties Include:\r\n\r\nMaintains continuity of work operations by documenting and communicating needed actions to management; discovering irregularities; determining continuing needs.\r\nDeal with all enquiries in a professional and courteous manner, in person, on the telephone or via e-mail\r\nSchedule meetings \r\nCoordinate office activities.\r\nArrange appointments.\r\nSchedule follow-up appointments', 500, 500, '1', '0-1', 'Female', 2, 'Calling Clients, BUSINESS CORRESPONDENCE', '19', '5', 'Gulberg 3, Lahore', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(20, 0, 2, 3, 'Administration Officer', 'administration-officer-job-in-', 'Net Design', NULL, '23', '42', 'full-time', 'employee', 'We are looking for a responsible Admin Officer to perform a variety of administrative and fleet management tasks. \r\n\r\nDuties includes but not limited to:\r\n\r\nAdministrative\r\n\r\nOrder office supplies and research new deals and suppliers.\r\nContributes to team effort by accomplishing related results as needed.\r\nImproves program and service quality by devising new applications; updating procedures; evaluating system results with users.\r\nMaintain and manage administrative staff.\r\nDevelop and maintain a filing system.\r\nMaintain contact lists.\r\nSubmit and reconcile expense reports.\r\nblueEX..', 500, 500, '1', '1-2', 'No Preference', 1, 'Excellent administration skills Ms Office (Excel in particular), Good Negotiation Skills', '3', '1', 'Karachi', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(21, 0, 3, 5, 'Doctor', 'doctor-job-in-hautsde-france', 'Tech Pearl', NULL, '23', '28', 'full-time', 'employee', 'Laforma is pleased to announce the opening of the New Aesthetic centre in garden town, ferozepur road. A  Doctor is required with the minimum qualification of MBBS. \r\n*Handsome salary and commission will be provided depending upon the skill and knowledge*\r\nLaforma Specialist Clinic.....', 500, 1000, '6', '0-1', 'Female', 1, 'English Fluency, Communication skills', '18', '10', 'Farance', 'no', 'active', '2019-01-20 00:00:00', '2019-01-22 08:01:21'),
(22, 0, 3, 6, 'Senior Manager - Clinical Research', 'senior-manager-clinical-research-job-in-', 'Net Design', NULL, '23', '28', 'full-time', 'employee', 'Kerlo Research is a New Jersey, USA based Clinical Research Organization (SMO/CRO) with an overseas branch office in Defense, Karachi. We have an established network of more than 500 clinical sites across United States and we work with global pharmaceutical companies and CROs providing services across different therapeutic areas. We are looking for an experienced Senior Manager.\r\nProvide quality oversight to our Site management operations (SMO) and upcoming CRO projects with optimal execution\r\nPoint of contact for all pharma and biotech communications and represent KR as the project lead\r\nResponsible to work directly with US based clinical sites on multiple studies and provide support with the overall study placement processWork under the close guidance of Clinical team lead and guide CRAs to manage clinical studies.\r\nBased on the overall industry experience, this position may work as the overall Team Lead\r\nPoint of contact for clinical site questions relating to study protocol, FQs, start-up, budget, contract and similar document', 500, 500, '3', '0-1', 'No Preference', 2, 'Medical Background, Communication skills', '3', '1', 'DHA, Karachi', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(23, 0, 3, 6, 'Medical Billing Officer', 'medical-billing-officer-job-in-delhi', 'Net Design', NULL, '19', '85', 'full-time', 'employee', 'We are looking for a qualified Medical Billing Professional. The ideal candidate should fulfill the following requirements:\r\nHighly Energetic & Team Work and Adaptability.\r\nMinimum 2 years medical billing experience.\r\nGood English written and verbal communication skills.\r\nKnowledge of basic medical terminologies.', 500, 500, '1', '0-1', 'No Preference', 3, 'English Fluency, Communication skills', '15', '3', 'Gulshan-e-Iqbal, Karachi', 'no', 'active', '2019-01-20 00:00:00', '2019-01-20 00:00:00'),
(24, 3, 0, 0, 'Dot Net Developer', 'dot-net-developer-job-in-delhi', 'Oracle LLC', NULL, '25', '37', 'full-time', 'employee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5500, 7500, '1', '2-5', 'No Preference', 1, 'html, css, javascript, c# , dot net, mysql', '15', '3', 'Suite 201, U Shape Road', 'no', 'active', '2019-01-22 08:01:45', '2019-01-22 08:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `xx_prohibited_keywords`
--

DROP TABLE IF EXISTS `xx_prohibited_keywords`;
CREATE TABLE IF NOT EXISTS `xx_prohibited_keywords` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx_prohibited_keywords`
--

INSERT INTO `xx_prohibited_keywords` (`ID`, `keyword`) VALUES
(8, 'idiot'),
(9, 'fuck'),
(10, 'bitch');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_applied_job`
--

DROP TABLE IF EXISTS `xx_seeker_applied_job`;
CREATE TABLE IF NOT EXISTS `xx_seeker_applied_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `cover_letter` longtext NOT NULL,
  `is_shortlisted` tinyint(4) NOT NULL DEFAULT '0',
  `is_interviewed` tinyint(4) NOT NULL DEFAULT '0',
  `applied_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_applied_job`
--

INSERT INTO `xx_seeker_applied_job` (`id`, `seeker_id`, `employer_id`, `job_id`, `cover_letter`, `is_shortlisted`, `is_interviewed`, `applied_date`) VALUES
(5, 12, 1, 1, 'welcome to the hell in the cell', 1, 1, '2018-12-12 08:12:56'),
(6, 12, 1, 3, 'Hi,\r\n\r\nI have more then 5 years of experience in the development field.', 1, 0, '2018-12-12 10:12:42'),
(7, 13, 1, 3, 'weagagadfgagfdg', 1, 0, '2018-12-12 10:12:47'),
(8, 12, 2, 6, 'test', 0, 0, '2018-12-31 10:12:53'),
(9, 12, 1, 10, 'test', 0, 0, '2019-01-21 05:01:24'),
(10, 12, 0, 13, 'test test', 0, 0, '2019-01-21 05:01:16'),
(11, 12, 0, 24, 'test test test', 1, 0, '2019-01-22 08:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_education`
--

DROP TABLE IF EXISTS `xx_seeker_education`;
CREATE TABLE IF NOT EXISTS `xx_seeker_education` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `degree_title` varchar(40) NOT NULL,
  `major_subjects` varchar(40) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `completion_year` varchar(30) NOT NULL,
  `result_type` varchar(30) NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_education`
--

INSERT INTO `xx_seeker_education` (`id`, `user_id`, `degree`, `degree_title`, `major_subjects`, `country`, `city`, `institution`, `completion_year`, `result_type`, `updated_date`) VALUES
(1, 0, 'Matric', 'ics', 'computer,physics,maths', 'Pakistan', 'Gujrat', 'zamindar college gujrat', '2003', 'Percentage', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_experience`
--

DROP TABLE IF EXISTS `xx_seeker_experience`;
CREATE TABLE IF NOT EXISTS `xx_seeker_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `starting_month` varchar(30) NOT NULL,
  `starting_year` varchar(30) NOT NULL,
  `ending_month` varchar(30) DEFAULT NULL,
  `ending_year` varchar(30) DEFAULT NULL,
  `currently_working_here` tinyint(4) DEFAULT NULL,
  `description` longtext NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_experience`
--

INSERT INTO `xx_seeker_experience` (`id`, `user_id`, `job_title`, `company`, `country`, `city`, `starting_month`, `starting_year`, `ending_month`, `ending_year`, `currently_working_here`, `description`, `updated_date`) VALUES
(1, 11, 'developer', 'brain hackers', 'Pakistan', 'Gujrat', 'jan', '2015', 'feb', '2016', NULL, 'ending_Month ending_Month ending_Month ending_Month ending_Month ending_Month ending_Month ending_Month ending_Month ending_Month', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_languages`
--

DROP TABLE IF EXISTS `xx_seeker_languages`;
CREATE TABLE IF NOT EXISTS `xx_seeker_languages` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `language` varchar(40) NOT NULL,
  `proficiency` varchar(40) NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_languages`
--

INSERT INTO `xx_seeker_languages` (`id`, `user_id`, `language`, `proficiency`, `updated_date`) VALUES
(1, 11, 'Urdu', 'Expert', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_skill`
--

DROP TABLE IF EXISTS `xx_seeker_skill`;
CREATE TABLE IF NOT EXISTS `xx_seeker_skill` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `new_skill` varchar(40) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_skill`
--

INSERT INTO `xx_seeker_skill` (`id`, `user_id`, `new_skill`, `experience`, `updated_date`) VALUES
(1, 11, 'css html jQuery', '2 Years', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `xx_seeker_summary`
--

DROP TABLE IF EXISTS `xx_seeker_summary`;
CREATE TABLE IF NOT EXISTS `xx_seeker_summary` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `summary` longtext NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_seeker_summary`
--

INSERT INTO `xx_seeker_summary` (`id`, `user_id`, `summary`, `updated_date`) VALUES
(1, 11, 'Work History\r\n  Personal Info\r\n  Education\r\n  Upload Resume\r\n  Profile Picture\r\n  Professional Summary\r\n  Skills\r\n  Projects\r\n  Languages\r\n  Endorsements', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `xx_users`
--

DROP TABLE IF EXISTS `xx_users`;
CREATE TABLE IF NOT EXISTS `xx_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `category` varchar(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `skills` longtext NOT NULL,
  `current_salary` varchar(40) NOT NULL,
  `expected_salary` varchar(40) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `profile_completed` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_verify` tinyint(4) NOT NULL DEFAULT '0',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_users`
--

INSERT INTO `xx_users` (`id`, `firstname`, `lastname`, `email`, `password`, `dob`, `age`, `mobile_no`, `nationality`, `category`, `job_title`, `description`, `gender`, `marital_status`, `country`, `city`, `postcode`, `address`, `experience`, `education_level`, `skills`, `current_salary`, `expected_salary`, `resume`, `role`, `profile_completed`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_date`, `updated_date`) VALUES
(14, 'yasir', 'Iqbal', 'y.iqbal290@gmail.com', '$2y$10$FQKfi0l1tTjAsJiYBLW9oegz3oQvYs/cm.LBhjaUOjUJlIXqof7qS', '', 0, '123456', '5', '25', 'Java Developer', '', '', '', '5', '13', '', '', '', '', '', '', '', '', 1, 0, 1, 0, 0, '', '', '', '2018-12-29 12:12:34', '2018-12-29 12:12:34'),
(12, 'John', 'Smith', 'user@onjob.com', '$2y$10$tm5ohlFwyoudHpeO.80my.lG1ImfBfnlZ1yZOMDsa6ih5xt77wHDm', '2018-12-06', 20, '+923469548054', '1', '25', 'Software Developer', 'honesty is the best policy...', '', '', '1', '9', '50700', 'Madina Bazar Gujrat', '2-5', '1', 'html, css, javascript, php, www', '2000', '4000', 'uploads/resume/1544898317Bids.docx', 1, 1, 1, 0, 0, '', 'ef49db8b91ac906aec31435846187dda', '', '2018-12-04 07:12:55', '2019-01-01 04:01:51'),
(13, 'code', 'glamour', 'codeglamour1@gmail.com', '$2y$10$oCGpSeAa6n2MI.kjZ68hd.9WKRq49waCIkTBPmmgRBlSB6rDAY7ra', '', 20, '03469548054', '130', '25', 'Wordpress Developer', 'I am a professional Wordpress Developer having more than 3 years of experience.', '', '', '174', '1', '6800', 'Alregia Road near Dubai Mall', '2-5', '1', 'html, php', '1500', '4000', '', 1, 1, 0, 0, 0, '', '', '', '2018-12-12 10:12:36', '2019-01-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_visa_status`
--

DROP TABLE IF EXISTS `xx_visa_status`;
CREATE TABLE IF NOT EXISTS `xx_visa_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xx_visa_status`
--

INSERT INTO `xx_visa_status` (`id`, `type`) VALUES
(1, 'Citizen'),
(2, 'No Visa'),
(3, 'Residency Visa (Non-Transferable)'),
(4, 'Residency Visa (Transferable)'),
(5, 'Student Visa'),
(6, 'Transit Visa'),
(7, 'Visit Visa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
