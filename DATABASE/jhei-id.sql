-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2021 pada 07.06
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
(1, 'KARIS', 'jhei-id@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(150) NOT NULL,
  `konten` text NOT NULL,
  `jenis_postingan` enum('PRODUK','ARTIKEL') NOT NULL,
  `tanggal` date NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto`, `judul`, `konten`, `jenis_postingan`, `tanggal`, `keywords`) VALUES
(1, 'upload/artikel/jahe-merah.jpg', 'Jheina Jahe Merah Siap Seduh Kaya Manfaat', '<p><strong>Jheina jahe merah siap seduh</strong>&nbsp;pada prinsipnya sama dengan Jheina jahe siap seduh. Sedangkan yang membedakan keduanya adalah bahan baku utamanya. Sesuai namanya, jahe merah berarti bahan baku utamanya adalah jahe merah. Jahe merah ini punya nama ilmiah&nbsp;<em>Zingiber officinale</em>&nbsp;Roscoe. Seperti apa produk satu ini?</p>\r\n\r\n<p><em>Jhei.id</em>&nbsp;memproduksi produk kedua setelah Jheina siap seduh yakni Jheina Jahe Merah siap seduh. Kendati yang kedua, namun akhir-akhir ini produk ini makin diminati pelanggan. Apalagi sejak Pandemi Covid-19 memasuki fase kedua (<em>second wave</em>) seiring merebaknya varian delta.</p>\r\n\r\n<p><a href=\"https://jhei-id.com/kemasan-aluminium-foil-untuk-kualitas-terbaik-jheina/\">Pengemasan</a>&nbsp;sama dengan varian pertama yakni menggunakan&nbsp;<em>stand pouch</em>&nbsp;aluminium foil. Kami menilai kemasan jenis ini lebih baik dalam melindungi isi di dalamnya, terutama makanan dan minuman. Hal tersebut juga sesuai dengan saran dari Dinas Kesehatan Kabupaten. Sedangkan bobot per-kemasan 250 gram.</p>\r\n\r\n<p>Manfaat Jahe Merah</p>\r\n\r\n<p>Jahe merah merupakan satu dari 3 jenis jahe yang ada di Indonesia selain Jahe Emprit dan Jahe Gajah. Jahe merah mengandung minyak atsiri paling tinggi dibanding dua jenis jahe lainnya. Universitas Muhammadiyah Malang melansir sebuah&nbsp;<a href=\"http://eprints.umm.ac.id/41545/3/jiptummpp-gdl-muhammadfa-50797-3-bab2.pdf\">jurnal ilmiah</a>&nbsp;yang menyebutkan rimpang jahe merah mengandung senyawa volatile yakni terpenoid dan non volatile yang terdiri dari gingerol, shogaol, paradol, zingerone dan senyawa turunan mereka serta senyawa-senyawa flavonoid dan polifenol.</p>\r\n\r\n<p>Senyawa-senyawa tersebut mampu menurunkan kadar kolesterol dalam tubuh. Selain itu, jahe merah juga berkhasiat meredakan sakit kepala dan vertigo, menyembuhkan radang sendi dan mengatasi masalah sesak nafas. Tidak hanya itu saja, konsumsi rutin jahe merah juga mampu mencegah terjadinya serangan jantung dan stroke.</p>\r\n\r\n<p>Favorit Saat Pandemi</p>\r\n\r\n<p>Jadi, tidak mengherankan jika banyak orang mencari jahe merah karena untuk meningkatkan imun tubuh, terutama di saat pandemi Covid-19 yang belum juga berakhir. Untuk membantu teman-teman yang tidak mau ribet dengan geprek jahe sana sini, kami telah menyediakan jahe merah siap seduh dalam kemasan aluminium foil.</p>\r\n\r\n<p>Untuk meminum Jheina Jahe Merah Siap Seduh, Anda cukup dengan mencampurkan 1,5-2 sendok makan ke dalam segelas air hangat, aduk sebentar dan taraaa&hellip; Sehingga sangat praktis, anti ribet dan siap menjadi teman hangat anda!</p>\r\n\r\n<p>Untuk pemesanan, teman-teman bisa melalui marketplace&nbsp;<a href=\"https://shopee.co.id/jhei.id\">shopee</a>&nbsp;atau tokopedia. Sedangkan, untuk informasi seputar produk ini silahkan buka akun instagram kami di @jhei.id dan&nbsp;<a href=\"https://web.facebook.com/temanhangatanda\">fanspage facebook jhei.id</a></p>\r\n', 'PRODUK', '2021-11-15', 'jahe merah, jheina,kemasan stand pouch,manfaat jahe'),
(2, 'upload/artikel/temulawak.jpg', 'Jheina Temulawak, Makan Lebih Berselera Di Masa Pandemi', '<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\">Kami mengemas Jheina Temulawak Siap Seduh dalam <em>standing pouch</em> 250 gram. Saran penyajiannya adalah 1,5 sampai 2 sendok makan untuk 200 ml air hangat untuk orang dewasa. Satu kemasan <em>standing pouch</em> tersebut bisa untuk 10-12 kali seduhan.</p>\r\n\r\n<p style=\"text-align:justify\">Manfaat Temulawak</p>\r\n\r\n<p style=\"text-align:justify\">Manurut laman halodoc, temulawak memiliki beberapa manfaat bagi manusia, yakni:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Meningkatkan Fungsi Pencernaan. Temulawak merangsang produksi empedu di kantung empedu, sehingga membantu meningkatkan fungsi pencernaan</li>\r\n	<li style=\"text-align:justify\">Osteoartritis.&nbsp;Temulawak membantu mengurangi peradangan sehingga bermanfaat bagi pengidap osteoarthritis</li>\r\n	<li style=\"text-align:justify\">Anti Kanker. Meskipun penelitian masih terus dilakukan, tetapi temulawak dan kunyit diduga membantu mencegah, mengendalikan atau membunuh beberapa jenis kanker termasuk payudara, usus besar dan prostat.</li>\r\n</ul>\r\n', 'PRODUK', '2021-11-17', 'jheina, jheina temulawak,varian produk jheina,manfaat temulawak'),
(3, 'upload/artikel/kunyit-asam-produk.jpg', 'Jheina Kunyit Asam Siap Seduh Kaya Manfaat', '<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Jheina Temulawak Siap Seduh </strong>kini hadir kembali setelah sekian lama absen mengisi <em>line up</em> produk <em><a href=\"https://jhei-id.com/\">jhei.id</a></em>. Khalayak ramai mengenal Temulawak mampu meningkatkan selera makan, sesuatu yang sangat penting apalagi di masa pandemi begini.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak termasuk hadir belakangan setelah varian jahe dan kunyit asam. Namun, berkat manfaat luar biasa dari temulawak produk ini banyak yang mencari. Selain itu, proses pengolahan temulawak untuk siap konsumsi yang bikin malas banyak orang, karena efek warna kuningnya itu, jadilah Jheina Temulawak siap seduh merona.</p>\r\n\r\n<p style=\"text-align:justify\">Terkait manfaatnya yang meningkatkan selera makan, hal tersebut bisa menjadi kabar baik untuk penderita Covid-19 khususnya varian Delta. Seperti dilansir <em><a href=\"https://www.kompas.com/tren/read/2021/06/27/192900565/10-gejala-terinfeksi-virus-corona-varian-delta-termasuk-pada-anak?page=all\">kompas</a></em>, salah satu gejala terinfeksi virus corona varian delta adalah hilangnya nafsu makan, mungkin temulawak bisa membantu mengembalikan nafsu makan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, daripada harus ribet untuk mengolahnya, kenapa tidak untuk mendapatkan yang siap seduh. Sedangkan kita tahu bahwa temulawak punya kandungan kurkumin yang berwarna kuning yang juga nempel di tangan dan perlatan dapur.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Temulawak Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\">Sama dengan varian jahe merah atau yang emprit, varian ini juga dalam bentuk serbuk siap seduh. Kami mengolahnya dengan gula kelas premium (silahkan klik artikelnya <a href=\"https://jhei-id.com/cakep-gula-premium-untuk-kualitas-terbaik-jheina/\">di sini</a>). Selain itu, kami campurkan juga serai, kayumanis, cengkeh dan daun pandan untuk menambah manfaat dari Jheina Temulawak.</p>\r\n\r\n<p style=\"text-align:justify\">Kami mengemas Jheina Temulawak Siap Seduh dalam <em>standing pouch</em> 250 gram. Saran penyajiannya adalah 1,5 sampai 2 sendok makan untuk 200 ml air hangat untuk orang dewasa. Satu kemasan <em>standing pouch</em> tersebut bisa untuk 10-12 kali seduhan.</p>\r\n\r\n<p style=\"text-align:justify\">Manfaat Temulawak</p>\r\n\r\n<p style=\"text-align:justify\">Manurut laman halodoc, temulawak memiliki beberapa manfaat bagi manusia, yakni:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Meningkatkan Fungsi Pencernaan. Temulawak merangsang produksi empedu di kantung empedu, sehingga membantu meningkatkan fungsi pencernaan</li>\r\n	<li style=\"text-align:justify\">Osteoartritis.&nbsp;Temulawak membantu mengurangi peradangan sehingga bermanfaat bagi pengidap osteoarthritis</li>\r\n	<li style=\"text-align:justify\">Anti Kanker. Meskipun penelitian masih terus dilakukan, tetapi temulawak dan kunyit diduga membantu mencegah, mengendalikan atau membunuh beberapa jenis kanker termasuk payudara, usus besar dan prostat.</li>\r\n</ul>\r\n', 'PRODUK', '2021-11-17', 'kunit asam,sinom,jheina,kunyit siap seduh,temulawak'),
(4, 'upload/artikel/sandiaga.jpg', 'Menteri Pariwisata dan Ekonomi Kreatif RI Sandiaga Uno memperkenalkan produk kami JHEINA JAHE MERAH ', '<p>Alhamdulillah ya robbal aalamin...<br />\r\nHanya kepadaMU kami meminta, hanya kepadaMU kami berharap, hanya kepadaMU kami mengucap syukur...<br />\r\n<br />\r\nTerima kasih bang Sandiaga Uno, Menteri Pariwisata dan Ekonomi Kreatif RI yang telah berkenan memperkenalkan produk kami JHEINA JAHE MERAH siap seduh saat kunjungan ke Situbondo, Jumat (17-09-21)<br />\r\n<br />\r\nSemoga bang menteri selalu diberi kesehatan dan kekuatan untuk mengemban amanah membangkitkan kembali pariwisata dan ekonomi kreatif negeri ini yang porak poranda dihantam pandemi Covid-19. Amin</p>\r\n', 'ARTIKEL', '2021-11-20', 'kunjungan,sandiaga uno,mentri,situbondo,jheina,promosi'),
(5, 'upload/artikel/serai.jpg', 'Manfaat Serai Bagi Tubuh Manusia', '<p>Jahe siap seduh yang kami produksi dan pasarkan mengandung rempah-rempah, salah satunya serai. Ada 3 produk yang mengandung serai.</p>\r\n\r\n<p>Manfaat Serai Bagi tubuh Antara lain:</p>\r\n\r\n<ul>\r\n	<li>Menjaga kesehatan gigi dan mulut</li>\r\n	<li>meredakan kecemasan</li>\r\n	<li>mengatasi kembung</li>\r\n	<li>sebagai antioksidan</li>\r\n	<li>mengontrol tekanan darah</li>\r\n	<li>mengendalikan kolesterol tubuh</li>\r\n	<li>menjaga jesehatan kulit dan rambut</li>\r\n	<li>meredakan flu</li>\r\n	<li>dan yang terakhir meredakan nyeri haid</li>\r\n</ul>\r\n\r\n<p>Mengapa serai begitu bermanfaat? ini terjadi karena kandungan yang ada didalam nya, yaitu serai kaya akan vitamin, mineral, elektrolit dan bahan kimia lain yang berfungsi sebagai anti oksidan.</p>\r\n', 'ARTIKEL', '2021-11-20', 'jheina, kesehatan,sehat,segar,obat'),
(6, 'upload/artikel/pengusaha.jpg', 'Bagaimana Sih Sikap yang Harus Dimiliki Oleh Pengusaha Agar Jadi Sukses?', '<p>Meskipun sifat dalam diri masing-masing punya perbedaan satu sama lain, namun ternyata ada beberapa kesamaan sifat yang dimiliki oleh para pebisnis sukses.</p>\r\n\r\n<p>Beberapa orang percaya bahwa sikap atau karakter yang dimiliki oleh seseorang cukup berperan penting dalam menentukan kesuksesannya.</p>\r\n\r\n<p>Begitu juga dalam hal berbisnis, dikatakan pula bahwa karakter yang dimiliki oleh si pebisnis cukup berpengaruh pada berhasil atau tidaknya usahanya.</p>\r\n\r\n<p>Banyak orang kemudian berlomba-lomba untuk melatih diri supaya dapat memiliki sifat-sifat tersebut dengan tujuan meraih kesuksesan dalam hidupnya.</p>\r\n\r\n<p>Lalu kira-kira, sifat-sifat seperti apakah yang mampu mendorong seseorang untuk memulai hingga menjalankan usaha sampai akhirnya benar-benar bisa sukses?</p>\r\n\r\n<ol>\r\n	<li>Cerdas secara emosianal</li>\r\n	<li>percaya diri</li>\r\n	<li>berani berkata tidak</li>\r\n	<li>mampu menetralisir difficult peaple</li>\r\n	<li>tidak takut perubahan</li>\r\n	<li>menerima kegegalan</li>\r\n	<li>tidak memikirkan kesalahan</li>\r\n	<li>tidak membandingkan diri dengan orang lain</li>\r\n	<li>terup menjaga sikap positif</li>\r\n</ol>\r\n', 'ARTIKEL', '2021-11-20', 'sukses,pengusaha,tips dan trik,sikap pemimpin,info'),
(7, 'upload/artikel/kemasan-jheina.jpg', 'Merek Jheina Sudah Punya Hak Paten Indonesia', '<p style=\"text-align:justify\">Merek Jheina sudah terdaftar di Pangkalan Data Kekayaan Indonesia (PDKI). Sehingga, teman-teman tidak perlu ragu lagi dengan produk-produk Kami. Jadi, Jheina merupakan merek minuman serbuk siap seduh dari jahe dan rempah-rempah pilihan.</p>\r\n\r\n<p style=\"text-align:justify\">Sedikit cerita latar belakang pemilihan nama Jheina untuk produk Kami di jhei.id. Ketika awal memproduksi jahe siap seduh, Kami sebenarnya sudah memikirkan apa nama yang cocok untuk produk tersebut. Saat menemukan nama jhei.id sebagai label usaha, Kami merasa nama tersebut bisa menjadi nama&nbsp;<em>brand</em>.</p>\r\n\r\n<p style=\"text-align:justify\">Hingga akhirnya di bulan Oktober 2020, Kami tersaring dalam program Pengajuan Merek Gratis. Dinas Koperasi Provinsi Jatim yang menginisiasi program tersebut. Pendaftarannya beberapa bulan sebelumnya melalui google form. Program tersebut menyeleksi sekitar 800 pengajuan merek. Dinkop Jatim mengerucutkan menjadi 100 merek saja yang mereka fasilitasi, salah satunya merek Kami.</p>\r\n\r\n<p style=\"text-align:justify\">Awalnya, kami mengajukan nama jhei.id sebagai merek produk jahe siap seduh, namun mereka menolak nama tersebut karena mengandung ekstensi sebuah web (dot id), jadi kami harus mengubahnya. Setelah sekian waktu berpikir nama yang cocok, akhirnya muncul Jheina.</p>\r\n\r\n<p style=\"text-align:justify\">Jahemu</p>\r\n\r\n<p style=\"text-align:justify\">Jadi, prinsip kami untuk nama usaha dan produk kami harus mengandung unsur lokal. Karena kami berdomisili di lingkungan yang mayoritas suku Madura, maka kami memutuskan harus ada unsur bahasa Madura dalam nama merek kami. Selain itu, harus kami padukan dengan unsur kekinian, muncullah nama ide&nbsp;<em>dot id</em>. Jhei.id diambil dari kata jhei yang dalam bahasa Indonesia adalah Jahe.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, untuk merek juga harus sama. Unsur lokal harus kental di nama tersebut, namun masih mudah untuk orang-orang melafalkan atau mengucapkan. Akhirnya, nama&nbsp;<a href=\"https://jhei-id.com/jheina-jahe-siap-seduh-praktis-dan-menghangatkan/\">Jheina</a>&nbsp;muncul yang berarti Jahemu (Jhei = Jahe, na = mu/kamu). Oke, setelah mengusulkan nama itu dan pihak dinkop menyetujui, PR selanjutnya berdoa agar nama itu belum ada yang mengajukan patennya.</p>\r\n\r\n<p style=\"text-align:justify\">Legal</p>\r\n\r\n<p style=\"text-align:justify\">Setelah melalui proses survey lapangan, pengecekan di database pangkalan data kekayaan Indonesia, singkat cerita Kami akhirnya bisa memakai nama Jheina menjadi paten kami. Tentu saja untuk merek minuman serbuk. Hingga saat tulisan ini naik, sertifikat paten atas nama Jheina memang belum turun, namun di laman web pdki sudah bisa muncul. Silahkan cek ke&nbsp;<a href=\"https://pdki-indonesia.dgip.go.id/\">sini</a>.</p>\r\n\r\n<p style=\"text-align:justify\">Perlindungan merek Jheina sudah berlaku mulai 27 November 2020 dengan nomor pengumuman BRM2067A. Biasanya masa berlaku selama 10 tahun. Sedangkan untuk kelas merek, Jheina ada di kelas 32 yakni kategori Minuman serbuk jahe merah, Minuman serbuk jahe putih.</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://i0.wp.com/jhei-id.com/wp-content/uploads/2021/07/jheina-merek.jpg?ssl=1\"><img alt=\"merek jheina\" sizes=\"(max-width: 700px) 100vw, 700px\" src=\"https://i0.wp.com/jhei-id.com/wp-content/uploads/2021/07/jheina-merek.jpg?resize=700%2C350&amp;ssl=1\" srcset=\"https://i0.wp.com/jhei-id.com/wp-content/uploads/2021/07/jheina-merek.jpg?resize=700%2C350&amp;ssl=1 700w, https://i0.wp.com/jhei-id.com/wp-content/uploads/2021/07/jheina-merek.jpg?resize=46%2C22&amp;ssl=1 46w\" width=\"700\" /></a></p>\r\n\r\n<p style=\"text-align:justify\">Jadi, dengan paten ini Kami makin punya tanggung jawab besar untuk menghadirkan produk-produk yang berkualitas bagi teman-teman di luar sana. Hal tersebut sesuai dengan prinsip kami yakni kualitas adalah segalanya. Teman-teman tidak usah ragu untuk membeli dan mengkonsumsi produk kami, insya Allah kami amanah.</p>\r\n\r\n<p style=\"text-align:justify\">Untuk informasi lebih lengkap, silahkan teman-teman cek&nbsp;<em>link</em>&nbsp;<em>instagram</em>&nbsp;kami di&nbsp;<a href=\"https://www.instagram.com/jhei.id/\">@jhei.id</a>. Untuk pemesanan bisa melalui&nbsp;<em>marketplace</em>&nbsp;Shopee dengan akun&nbsp;<strong><em>jhei.id</em></strong>&nbsp;dan di Tokopedia dengan akun&nbsp;<strong><em>jhei-id</em></strong>.</p>\r\n', 'PRODUK', '2021-11-21', 'jheina,hak paten, perizinan,jahe,ekstrak jahe'),
(8, 'upload/artikel/JHEINA-jahe-merah-siap-seduh.jpeg', 'PPKM Darurat, Permintaan Jheina Jahe Merah Meningkat', '<p style=\"text-align:justify\">Setiap kesulitan menyimpan hikmah. Menghadapi serbuan varian Delta dari Covid-19, pemerintah menerapkan PPKM Darurat untuk Pulau Jawa Bali, untuk menekan penyebaran virus ini. Seiring berlakunya kebijakan tersebut, permintaan Jheina Jahe Merah Siap Seduh mengalami peningkatan.</p>\r\n\r\n<p style=\"text-align:justify\">Awalnya, pemerintah memberlakukan&nbsp;<a href=\"https://news.detik.com/berita/d-5641164/batas-waktu-ppkm-darurat-sampai-kapan\">PPKM</a>&nbsp;Darurat hanya di wilayah Jawa dan Bali. Kemudian, meluas hingga 15 daerah di luar Jawa-Bali, meliputi kabupaten kota di sejumlah provinsi. Terdiri dari:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Tanjung Pinang dan Batam (Kepulauan Riau)</li>\r\n	<li style=\"text-align:justify\">Singkawang dan Pontianak (Kalimantan Barat)</li>\r\n	<li style=\"text-align:justify\">Padang Panjang dan Bukittinggi (Sumatera Barat)</li>\r\n	<li style=\"text-align:justify\">Bandar Lampung (Lampung)</li>\r\n	<li style=\"text-align:justify\">Manokwari dan Sorong (Papua Barat)</li>\r\n	<li style=\"text-align:justify\">Bontang, Balikpapan, Kabupaten Berau (Kalimantan Timur)</li>\r\n	<li style=\"text-align:justify\">Padang (Sumatera Barat)</li>\r\n	<li style=\"text-align:justify\">Mataram (NTB)</li>\r\n	<li style=\"text-align:justify\">Medan (Sumatera Utara)</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Di wilayah tempat tinggal Kami, Kabupaten Situbondo, efek pemberlakuan PPKM Darurat, cukup terasa. Pemerintah melalui jajarannya terus berkeliling mengingatkan warga untuk taat prokes dan tidak berkerumun. Pemerintah daerah juga memberlakukan kebijakan mematikan lampu penerangan di dalam kota. Hal tersebut dilakukan untuk meminimalisir kerumunan.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ppkm darurat\" sizes=\"(max-width: 148px) 100vw, 148px\" src=\"https://i2.wp.com/jhei-id.com/wp-content/uploads/2021/07/ppkm-darurat.jpeg?resize=148%2C111&amp;ssl=1\" srcset=\"https://i2.wp.com/jhei-id.com/wp-content/uploads/2021/07/ppkm-darurat.jpeg?resize=148%2C111&amp;ssl=1 148w, https://i2.wp.com/jhei-id.com/wp-content/uploads/2021/07/ppkm-darurat.jpeg?zoom=2&amp;resize=148%2C111&amp;ssl=1 296w, https://i2.wp.com/jhei-id.com/wp-content/uploads/2021/07/ppkm-darurat.jpeg?zoom=3&amp;resize=148%2C111&amp;ssl=1 444w\" width=\"148\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Varian delta memang menebar ketakutan. Kabar duka silih berganti terdengar, baik melalui corong-corong masjid atau whatsapp rekan-rekan. Namun, kendati begitu kita harus berusaha menenangkan hati dan pikiran, bahwa semua ini pasti akan berlalu. Allah tidak akan memberikan cobaan kepada hambaNYA di luar kemampuannya.</p>\r\n\r\n<p style=\"text-align:justify\">Permintaan Jheina Jahe Merah</p>\r\n\r\n<p style=\"text-align:justify\">Selain berpikir positif yang imbasnya akan meningkatkan imun tubuh, kita perlu juga asupan dari luar untuk membantu tubuh. Akibatnya, masyarakat makin melirik penggunaan ramuan-ramuan herbal peningkat imun tubuh. Apalagi harga vitamin dan obat-obatan mulai meningkat.</p>\r\n\r\n<p style=\"text-align:justify\">Tidak terkecuali Jheina Jahe Merah Siap Seduh. Permintaan akan varian satu ini meningkat drastis dalam beberapa hari terakhir. Setiap produksi langsung habis. Kenaikan permintaan mencapai 100% lebih, sebuah hikmah yang bisa diambil dari pandemi yang belum menunjukkan tanda-tanda terkendali ini.</p>\r\n\r\n<p style=\"text-align:justify\">Senang rasanya bisa memberikan kontribusi bagi masyarakat sekitar. Meskipun tidak sedikit yang mencibir beranggapan mengambil keuntungan dari kondisi sulit. Sebenarnya, ini sesuai prinsip Kami sejak awal memproduksi Jheina, yakni ingin bermanfaat bagi sesama.</p>\r\n\r\n<p style=\"text-align:justify\">Jheina Jahe Merah Siap Seduh</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://jhei-id.com/jheina-jahe-merah-siap-seduh-kaya-manfaat/\">Jheina Jahe merah siap seduh</a>&nbsp;merupakan salah satu produk minuman serbuk kami yang berbahan dasar jahe merah. Kami meramunya dengan gula tebu dan rempah-rempah seperti serai, kayumanis dan cengkeh, sehingga Jheina Jahe Merah hadir dengan kepraktisan dan kemudahan.</p>\r\n\r\n<p style=\"text-align:justify\">Cukup mencampurkan 1-2 sendok makan Jheina Jahe Merah ke dalam segelas air hangat, aduk sebentar lalu tinggal sruput. Untuk variasi bisa menambahkan susu atau madu.</p>\r\n', 'ARTIKEL', '2021-11-29', 'PPKM,jahe merah,jheina,ekstrak jahe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `ket_carousel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `foto`, `ket_carousel`) VALUES
(1, 'upload/carousel/carousel-produk.jpg', 'SUJAR4D'),
(3, 'upload/carousel/promo-1.jpg', 'B2GET1MERDEKA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_web`
--

CREATE TABLE `info_web` (
  `whatsapp` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_web`
--

INSERT INTO `info_web` (`whatsapp`, `email`, `facebook`, `instagram`, `alamat`, `lokasi`) VALUES
('6282264120926', 'jahejhei@gmail.com', 'https://web.facebook.com/temanhangatanda/?_rdc=1&_rdr', 'https://www.instagram.com/pusat_jahe_instan/?hl=id', 'Kp.Paowan RT 5 / RW 1, Kec.Panarukan, Kab.Situbondo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7888200916645!2d113.9484001139741!3d-7.705796778461482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7275e891056ed%3A0x8ac2e19e40caacb2!2sJhei.id!5e0!3m2!1sid!2sid!4v1637171385621!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `caption` text DEFAULT NULL,
  `stok` enum('READY STOK','PRE ORDER','KOSONG') NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `foto`, `nama`, `caption`, `stok`, `harga`, `berat`) VALUES
(1, 'upload/produk/jahe-merah.jpg', 'Jheina Jahe Merah', '<p style=\"text-align:justify\">Ekstrak jahe merah yang diolah dengan gula dan rempah - rempah seperti cengkeh, kayumanis dan serai menghasilkan jahe siap seduh tanpa ampas!</p>\r\n', 'READY STOK', 29000, 250),
(2, 'upload/produk/jahe-emprit.jpg', 'Jheina Jahe Emprit', '<p style=\"text-align:justify\">Minuman serbuk berbahan dasar jahe emprit dengan campuran gula pasir dan rempah - rempah seperti serai, kayumanis dan cengkeh. Tanpa ampas dan rasa original jahe tetap terasa.</p>\r\n', 'READY STOK', 25000, 250),
(3, 'upload/produk/kunyit-asam-produk.jpg', 'Jheina Kunyit Asam', '<p style=\"text-align:justify\">Minuman siap seduh dengan bahan ekstrak kunyit, asam bubuk dan gula yag hadir memberikan kesegaran</p>\r\n', 'READY STOK', 20000, 250),
(5, 'upload/produk/temulawak.jpg', 'Jheina Temulawak', '<p style=\"text-align:justify\">Ekstrak temulawak yang diolah dengan gula pasir dan beberapa rempah - rempah seperti cengkeh, kayumanis dan daun pandan. Minuman serbuk siap seduh tanpa ampas.</p>\r\n', 'READY STOK', 20000, 250),
(6, 'upload/produk/pasak-bumi.jpg', 'Jheina Pasak Bumi', '<p style=\"text-align:justify\">Paduan ekstrak jahe merah, jahe emprit dan akar pasak bumi yang diolah bersama serai, kayumanis dan gula menghadirkan Jehina Pasak Bumi siap seduh yang praktis dan tanpa ampas.</p>\r\n', 'READY STOK', 25000, 200),
(12, 'upload/produk/pasak-bumi-sachet-baru.jpg', 'Jheina Pasak Bumi Sachet', '<p>Jahe pasak bumi dengan kemasan saset yang lebih praktis. Isi sama dengan kemasan stand pouch hanya beda kemasan</p>\r\n\r\n<p>isi&nbsp;<strong>5&nbsp;</strong>perKemasan dengan berat&nbsp;<strong>20 gram&nbsp;</strong>per isi</p>\r\n', 'READY STOK', 20000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `seo`
--

CREATE TABLE `seo` (
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `robot_follow` tinyint(1) NOT NULL,
  `robot_index` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seo`
--

INSERT INTO `seo` (`description`, `keywords`, `author`, `robot_follow`, `robot_index`) VALUES
('Tempat belanja produk ekstrak jahe serbuk siap seduh', 'jahe murni,ekstrak jahe,jheina,jhei-id,jhei.id,jhei situbondo,jahe paowan,pandemi,kesehatan,bugar,alami,minuman sehat', 'Jheina', 1, 1);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
