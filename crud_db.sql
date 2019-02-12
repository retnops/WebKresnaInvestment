-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 03:41 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `username`, `password`, `nama`) VALUES
(1, 'eka', '123', '0'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` text,
  `mobile` varchar(10) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tglup` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `tgl`, `tglup`, `status`) VALUES
(1, 'Kresna Tower Baru', 'Global Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global \r\nWarming Global Warming Global Warming Global Warming Global Warming \r\nGlobal Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming Global Warming<br>', 'Global', '2018-04-12 02:41:41', '2018-04-13 07:17:35', 'aktif'),
(2, 'KREN At Glance', 'PT\r\n Kresna Graha Investama Tbk. menyiapkan tiga anak usahanya untuk \r\nmelakukan penawaran umum saham perdana atau initial public offering \r\n(IPO) pada tahun ini. Ketiga anak usaha tersebut bergerak di sektor \r\ndigital.<br>\r\n\r\nRencananya, proses IPO akan dilakukan dalam dua sesi. Pertama, pada \r\nkuartal III/2018 dan kedua pada kuartal IV/2018 dengan nilai emisi \r\nmasing-masing di kisaran Rp300 miliar dengan emisi saham sebesar 25% \r\ndari modal disetor. "Itu yang masuk dalam pipeline kami. Ada satu \r\nperusahaan yang sedang diaudit sehingga proses IPO dilakukan pada \r\nkuartal ketiga dan keempat nanti," kata Managing Director Kresna Graha \r\nInvestama Surjandy Jahja di Jakarta, Selasa (27/2/2018).\r\n\r\nSalah satu perusahaan yang akan melantai di bursa ini adalah PT Match \r\nMove Indonesia, di mana emiten berkode KREN itu membeli 14,81% saham per\r\n November tahun lalu. Selain KREN, anak usahanya PT M Cash Integrasi \r\nTbk. (MCAS) juga memiliki saham dengan porsi yang sama di PT Match Move \r\nIndonesia.\r\n\r\nAdapun untuk dua perusahaan lainnya, Jahja tidak bersedia untuk \r\nmenyebutkan. Alasannya, saat ini perseroan masih menunggu hasil audit. \r\n"Nanti jika semua proses sudah selesai akan kami umumkan segera," \r\nimbuhnya.\r\n\r\nDia mengklaim, minat investor terhadap ketiga perusahaan itu cukup \r\nbesar. Tak hanya dari dalam negeri, perseroan juga akan menawarkan saham\r\n kepada investor di luar negeri, yakni di Hong Kong, Singapura, dan \r\nMalaysia.\r\n\r\nSalah satu hal yang masih menjadi perdebatan terkait saham perusahaan \r\ndigital adalah valuasi. Pasalnya, valuasi bisnis ini berbeda dengan \r\nperusahaan yang bergerak di sektor lainnya, manufaktur misalnya.\r\n\r\nJahja menjelaskan, pengukuran valuasi perusahaan digital tidak bisa \r\ndilakukan dengan matrik-matrik konvensional. Inovasi yang dilakukan oleh\r\n perseroan juga tidak bisa diukur dengan angka. Satu-satunya tolok ukur \r\nyang tepat adalah pertumbuhan dari perusahaan itu sendiri.\r\n\r\n"Ukurannya seberapa besar dia tumbuh, karena memang valuasi digital dan \r\nmanufaktur sangat berbeda," tegasnya.\r\n\r\nKeputusan perseroan untuk memperdalam bisnis digital memang telah \r\ndilakukan sejak beberapa tahun lalu. Jahja beranggapan, bisnis sektor \r\nini cukup menggiurkan dan memiliki potensi yang cukup besar untuk terus \r\ntumbuh.\r\n\r\nAwal mula ekspansi bisnis KREN di dunia digital dimulai dari \r\ndidirikannya PT Kresna Usah Kreatif (KUK) pada 2015 lalu. Pada Juni \r\n2016, KUK berinvestasi di Nurbaya Initiative (NI), perusahaan \r\ne-commerce. KUK memiliki saham sebesar 20% di perusahaan tersebut. Nilai\r\n partisipasi kepemilikan tercatat mencapai US$2 juta.\r\n\r\nPada April 2017, KUK mencaplok 17,6% saham perusahaan kios digital PT M \r\nCash Integrasi. November tahun lalu KREN dan MCAS membeli saham PT Match\r\n Move Indonesia (MMI). Keduanya sama-sama memiliki porsi saham sebesar \r\n14,81%.\r\n\r\nAdapun pada tahun ini, tepatnya akhir bulan lalu, MCAS dan KREN \r\nberinvestasi di PT Sistem Mikroelektronik Cerdas Co-Design (SMC). Porsi \r\ninvestasi yang dilakukan oleh kedua perusahaan tersebut masing-masing \r\nadalah 20% untuk KREN dan 30% untuk MCAS.\r\n			\r\n			', 'Hot News', '2018-04-12 02:43:02', '2018-04-12 08:19:47', 'aktif'),
(3, 'Create New Post With Paging', 'Create post with paging can use j query. Create post with paging can use j queryCreate post with paging can use j query. Create post with paging can use j queryCreate post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query Create post with paging can use j queryCreate post with paging can use j query OKE<br>', 'Not News', '2018-04-13 02:17:06', '2018-04-16 07:41:20', 'aktif'),
(10, 'About News', 'About News<br>', 'News', '2018-04-16 07:36:09', '2018-04-16 07:41:09', 'aktif'),
(11, 'Grace', 'Grace Blue<br>', 'News', '2018-04-16 07:44:30', '2018-04-16 07:44:30', NULL),
(12, 'Slay', 'Slay<br>', 'Slay', '2018-04-16 07:45:20', '2018-04-16 08:11:44', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
