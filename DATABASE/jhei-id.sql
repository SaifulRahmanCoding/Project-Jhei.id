-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2021 pada 18.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhei-id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(2, 'Jhei-id', 'jhei-id@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `jenis_postingan` enum('PRODUK','ARTIKEL') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto`, `judul`, `konten`, `jenis_postingan`, `tanggal`) VALUES
(1, 'upload/artikel/jahe-merah.jpg', 'Jheina Jahe Merah Siap Seduh Kaya Manfaat', '<p><strong>Jheina jahe merah siap seduh</strong>&nbsp;pada prinsipnya sama dengan Jheina jahe siap seduh. Sedangkan yang membedakan keduanya adalah bahan baku utamanya. Sesuai namanya, jahe merah berarti bahan baku utamanya adalah jahe merah. Jahe merah ini punya nama ilmiah&nbsp;<em>Zingiber officinale</em>&nbsp;Roscoe. Seperti apa produk satu ini?</p>\r\n\r\n<p><em>Jhei.id</em>&nbsp;memproduksi produk kedua setelah Jheina siap seduh yakni Jheina Jahe Merah siap seduh. Kendati yang kedua, namun akhir-akhir ini produk ini makin diminati pelanggan. Apalagi sejak Pandemi Covid-19 memasuki fase kedua (<em>second wave</em>) seiring merebaknya varian delta.</p>\r\n\r\n<p><a href=\"https://jhei-id.com/kemasan-aluminium-foil-untuk-kualitas-terbaik-jheina/\">Pengemasan</a>&nbsp;sama dengan varian pertama yakni menggunakan&nbsp;<em>stand pouch</em>&nbsp;aluminium foil. Kami menilai kemasan jenis ini lebih baik dalam melindungi isi di dalamnya, terutama makanan dan minuman. Hal tersebut juga sesuai dengan saran dari Dinas Kesehatan Kabupaten. Sedangkan bobot per-kemasan 250 gram.</p>\r\n\r\n<p>Manfaat Jahe Merah</p>\r\n\r\n<p>Jahe merah merupakan satu dari 3 jenis jahe yang ada di Indonesia selain Jahe Emprit dan Jahe Gajah. Jahe merah mengandung minyak atsiri paling tinggi dibanding dua jenis jahe lainnya. Universitas Muhammadiyah Malang melansir sebuah&nbsp;<a href=\"http://eprints.umm.ac.id/41545/3/jiptummpp-gdl-muhammadfa-50797-3-bab2.pdf\">jurnal ilmiah</a>&nbsp;yang menyebutkan rimpang jahe merah mengandung senyawa volatile yakni terpenoid dan non volatile yang terdiri dari gingerol, shogaol, paradol, zingerone dan senyawa turunan mereka serta senyawa-senyawa flavonoid dan polifenol.</p>\r\n\r\n<p>Senyawa-senyawa tersebut mampu menurunkan kadar kolesterol dalam tubuh. Selain itu, jahe merah juga berkhasiat meredakan sakit kepala dan vertigo, menyembuhkan radang sendi dan mengatasi masalah sesak nafas. Tidak hanya itu saja, konsumsi rutin jahe merah juga mampu mencegah terjadinya serangan jantung dan stroke.</p>\r\n\r\n<p>Favorit Saat Pandemi</p>\r\n\r\n<p>Jadi, tidak mengherankan jika banyak orang mencari jahe merah karena untuk meningkatkan imun tubuh, terutama di saat pandemi Covid-19 yang belum juga berakhir. Untuk membantu teman-teman yang tidak mau ribet dengan geprek jahe sana sini, kami telah menyediakan jahe merah siap seduh dalam kemasan aluminium foil.</p>\r\n\r\n<p>Untuk meminum Jheina Jahe Merah Siap Seduh, Anda cukup dengan mencampurkan 1,5-2 sendok makan ke dalam segelas air hangat, aduk sebentar dan taraaa&hellip; Sehingga sangat praktis, anti ribet dan siap menjadi teman hangat anda!</p>\r\n\r\n<p>Untuk pemesanan, teman-teman bisa melalui marketplace&nbsp;<a href=\"https://shopee.co.id/jhei.id\">shopee</a>&nbsp;atau tokopedia. Sedangkan, untuk informasi seputar produk ini silahkan buka akun instagram kami di @jhei.id dan&nbsp;<a href=\"https://web.facebook.com/temanhangatanda\">fanspage facebook jhei.id</a></p>\r\n', 'PRODUK', '2021-11-15'),
(2, 'upload/artikel/temulawak.jpg', 'Jheina Temulawak, Makan Lebih Berselera Di Masa Pandemi', '<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\">Kami mengemas Jheina Temulawak Siap Seduh dalam <em>standing pouch</em> 250 gram. Saran penyajiannya adalah 1,5 sampai 2 sendok makan untuk 200 ml air hangat untuk orang dewasa. Satu kemasan <em>standing pouch</em> tersebut bisa untuk 10-12 kali seduhan.</p>\r\n\r\n<p style=\"text-align:justify\">Manfaat Temulawak</p>\r\n\r\n<p style=\"text-align:justify\">Manurut laman halodoc, temulawak memiliki beberapa manfaat bagi manusia, yakni:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Meningkatkan Fungsi Pencernaan. Temulawak merangsang produksi empedu di kantung empedu, sehingga membantu meningkatkan fungsi pencernaan</li>\r\n	<li style=\"text-align:justify\">Osteoartritis.&nbsp;Temulawak membantu mengurangi peradangan sehingga bermanfaat bagi pengidap osteoarthritis</li>\r\n	<li style=\"text-align:justify\">Anti Kanker. Meskipun penelitian masih terus dilakukan, tetapi temulawak dan kunyit diduga membantu mencegah, mengendalikan atau membunuh beberapa jenis kanker termasuk payudara, usus besar dan prostat.</li>\r\n</ul>\r\n', 'PRODUK', '2021-11-17'),
(3, 'upload/artikel/kunyit-asam-produk.jpg', 'Jheina Kunyit Asam Siap Seduh Kaya Manfaat', '<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\">Kami mengemas Jheina Temulawak Siap Seduh dalam <em>standing pouch</em> 250 gram. Saran penyajiannya adalah 1,5 sampai 2 sendok makan untuk 200 ml air hangat untuk orang dewasa. Satu kemasan <em>standing pouch</em> tersebut bisa untuk 10-12 kali seduhan.</p>\r\n\r\n<p style=\"text-align:justify\">Manfaat Temulawak</p>\r\n\r\n<p style=\"text-align:justify\">Manurut laman halodoc, temulawak memiliki beberapa manfaat bagi manusia, yakni:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Meningkatkan Fungsi Pencernaan. Temulawak merangsang produksi empedu di kantung empedu, sehingga membantu meningkatkan fungsi pencernaan</li>\r\n	<li style=\"text-align:justify\">Osteoartritis.&nbsp;Temulawak membantu mengurangi peradangan sehingga bermanfaat bagi pengidap osteoarthritis</li>\r\n	<li style=\"text-align:justify\">Anti Kanker. Meskipun penelitian masih terus dilakukan, tetapi temulawak dan kunyit diduga membantu mencegah, mengendalikan atau membunuh beberapa jenis kanker termasuk payudara, usus besar dan prostat.</li>\r\n</ul>\r\n', 'ARTIKEL', '2021-11-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(5) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `foto`) VALUES
(1, 'upload/carousel/carousel-produk.jpg'),
(2, 'upload/carousel/carousel-produk-2.jpg'),
(3, 'upload/carousel/promo.jpg'),
(5, 'upload/carousel/view.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `foto`, `nama`, `caption`) VALUES
(1, 'upload/produk/jahe-merah.jpg', 'Jheina Jahe Merah', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quaerat velit ea, aliquam animi quis incidunt atque repudiandae, officiis accusamus.</p>\r\n'),
(2, 'upload/produk/jahe-emprit.jpg', 'Jheina Jahe Emprit', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quaerat velit ea, aliquam animi quis incidunt atque repudiandae, officiis accusamus.'),
(3, 'upload/produk/kunyit-asam-produk.jpg', 'Jheina Kunyit Asam', '<p>LoremAJSGFKJFDA ipsum dolor sit, amet consectetur adipisicing elit. Alias, fugit neque. Accusamus quia corrupti earum reprehenderit minus unde at? Libero?</p>\r\n'),
(5, 'upload/produk/temulawak.jpg', 'Jheina Temulawak', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, fugit neque. Accusamus quia corrupti earum reprehenderit minus unde at? Libero?'),
(6, 'upload/produk/pasak-bumi.jpg', 'Jheina Pasak Bumi', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto reiciendis eaque dicta eligendi sed dolor quos praesentium ipsam atque et?</p>\r\n\r\n<p>jhjhjh</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
