-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 12:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuah`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(4) NOT NULL,
  `thumbnail` longtext NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` longtext NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `penulis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `thumbnail`, `kategori`, `judul`, `slug`, `tanggal_rilis`, `isi_artikel`, `penulis`) VALUES
(1, 'amazing-blog-title.jpg', 'Code', 'Amazing Blog Title', 'amazing-blog-title', '2019-11-24', '<p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<p><strong>Hello semua</strong></p>\r\n', 'John Doe'),
(3, 'amazing-world.jpg', 'World', 'Amazing World', 'amazing-world', '2019-11-16', '<p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n', 'John Doe'),
(4, 'amazing-soccer.jpg', 'Soccer', 'Amazing Soccer', 'amazing-soccer', '2019-11-16', '<p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n', 'John Doe'),
(5, 'amazing-class.jpg', 'Class', 'Amazing Class', 'amazing-class', '2019-11-16', '<p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n', 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`username`, `send_to`, `date`, `message`) VALUES
('john', 'arrazy100', '2019-11-24 13:24:58', 'Halo, apakah saya bisa bertanya sesuatu?'),
('arrazy100', 'john', '2019-11-24 13:28:37', 'Tentu, ada yang bisa saya bantu?'),
('john', 'arrazy100', '2019-11-24 14:29:38', 'Saya adalah orang yang aktif bersosial, apa jurusan yang cocok untuk saya?\r\nTerima kasih.'),
('arrazy100', 'john', '2019-11-24 14:43:44', 'Jurusan yang cocok untuk anda adalah:<br>1. Akuntansi<br>2. Ilmu Sosial<br>3. Pendidikan Guru Sekolah Dasar<br><br>Jika ada yang ingin ditanyakan lagi, jangan malu untuk bertanya ya.'),
('arrazy100', 'john', '2019-11-24 14:46:53', 'Semoga bermanfaat ya'),
('rezal', 'john', '2019-11-24 14:57:03', 'Helo apa kabar'),
('john', 'arrazy100', '2019-11-25 08:44:19', 'Terima kasih banyak kak atas jawabannya, kayaknya saya lebih ke akuntansi deh'),
('john', 'petanikode', '2019-11-25 08:45:02', 'Halo apakah anda masih hidup?'),
('petanikode', 'john', '2019-11-25 08:47:47', 'Tentu saja, ada yang bisa saya bantu?'),
('john', 'petanikode', '2019-11-25 08:55:31', 'Saya ingin terbang tinggi'),
('petanikode', 'john', '2019-11-25 09:02:18', 'Apaan?'),
('john', 'petanikode', '2019-11-25 09:02:56', 'Ayo'),
('john', 'petanikode', '2019-11-25 09:04:07', 'Tes'),
('john', 'petanikode', '2019-11-25 09:05:23', 'Hmm'),
('petanikode', 'john', '2019-11-25 09:10:51', 'Apa?'),
('petanikode', 'john', '2019-11-25 09:11:51', 'Tes1234'),
('john', 'petanikode', '2019-11-25 09:14:41', 'Tidak apa'),
('petanikode', 'john', '2019-11-25 09:16:42', 'tes'),
('john', 'petanikode', '2019-11-25 09:21:07', 'Tes'),
('john', 'petanikode', '2019-11-25 09:28:19', 'Halo apakah bisa?'),
('petanikode', 'john', '2019-11-25 09:31:13', 'Tentu bisa'),
('john', 'petanikode', '2019-11-25 09:37:29', 'Halo, apa ada orang?'),
('petanikode', 'john', '2019-11-25 09:38:36', 'Tentu ada'),
('petanikode', 'john', '2019-11-25 09:39:00', 'Memang kenapa?'),
('john', 'petanikode', '2019-11-25 09:45:07', 'Tak apa'),
('petanikode', 'john', '2019-11-25 09:47:34', 'Halo'),
('john', 'petanikode', '2019-11-25 09:48:35', 'TEs'),
('petanikode', 'john', '2019-11-25 09:48:58', 'a'),
('petanikode', 'john', '2019-11-25 09:57:09', 'b'),
('petanikode', 'john', '2019-11-25 10:06:32', 'c'),
('john', 'petanikode', '2019-11-25 10:06:44', 'd'),
('john', 'petanikode', '2019-11-25 10:06:56', 'e'),
('petanikode', 'john', '2019-11-25 10:07:36', 'f'),
('john', 'petanikode', '2019-11-25 10:07:41', 'g'),
('john', 'petanikode', '2019-11-25 10:09:56', 'h'),
('petanikode', 'john', '2019-11-25 10:10:20', 'i'),
('petanikode', 'john', '2019-11-25 10:10:48', 'Hai ini adalah pesan yang akan terkirim tanpa perlu refresh halaman'),
('john', 'petanikode', '2019-11-25 10:10:59', 'Menakjubkan bukan?');

-- --------------------------------------------------------

--
-- Table structure for table `explorasi`
--

CREATE TABLE `explorasi` (
  `id` varchar(10) NOT NULL,
  `jurusan` longtext NOT NULL,
  `nomor` int(3) NOT NULL,
  `soal` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_a` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_b` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_c` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_d` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explorasi`
--

INSERT INTO `explorasi` (`id`, `jurusan`, `nomor`, `soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `poin`) VALUES
('TI', 'Teknik Informatika', 1, 'Kegunaan dari komputer adalah....', 'Mencetak, mengolah, menghitung', 'Mengetik, mecetak, main game, menghitung', 'Mengolah, mengelola, menyimpan data', 'Main game, menelpon, mengelola', '1,2,4,3'),
('TI', 'Teknik Informatika', 2, 'Keuntungan yang dapat di peroleh seorang siswa dari penggunaan teknologi informasi dan komunikasi dalam bidang pendidikan, kecuali....', 'Dapat mengakses informasi-informasi hasil penelitian orang lain.', 'Akses ke sumber pengetahuan dapat dilakukan kapan dan dimana saja', 'Akses ke para ahli menjadi lebih mudah karena tidak dibatasi pada jarak dan waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'Melalui belajar jarak jauh bisa tidak datang ke sekolah', '1,2,3,4'),
('TI', 'Teknik Informatika', 3, 'Perangkat lunak atau software yang bertindak sebagai perantara antara pemakai komputer (user) dengan perangkat keras (hardware) adalah pengertian dari....', 'Start Menu&nbsp; &nbsp; &nbsp; &nbsp;', 'Sistem Operasi', 'User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'Account', '1,4,3,2'),
('TI', 'Teknik Informatika', 4, 'Dibawah ini merupakan perangkat keras masukan (input device) adalah....', 'Printer, Monitor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'Mouse, CPU &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;', 'Mouse, Keyboard', 'Monitor, Speaker', '1,3,4,2'),
('TI', 'Teknik Informatika', 5, 'Topologi di samping adalah : ', 'Star', 'Line', 'Ring', 'Bus', '1,2,4,3'),
('TI', 'Teknik Informatika', 6, 'Dinda Mauladi akan menjual sebuah sepeda motornya. Agar informasi tersebut dapat dilihat oleh orang banyak sehingga cepat laku, maka dia berfikir untuk mengiklankannya di internet. Aktivitas tersebut dikenal dengan sebutan....', 'e-learning', 'e-library', 'e-commerce', 'e-government', '1,2,4,3'),
('TI', 'Teknik Informatika', 7, 'Komputer yang hanya dapat mengakses informasi atau layanan di komputer induk disebut dengan komputer &hellip;', 'Client', 'Personal Computer', 'Laptop', 'Server', '4,3,2,1'),
('TI', 'Teknik Informatika', 8, 'Dalam suatu jaringan, istilah komputer yang memberikan layanan kepada Client disebut komputer &hellip;', 'Personal Computer', 'Guest', 'Server', 'Laptop', '2,1,4,3'),
('TI', 'Teknik Informatika', 9, 'Kegiatan yang sering kita lakukan dalam menggunakan internet adalah mengambil data dari internet, baik berbentuk teks, gambar, maupun suara. Kegiatan ini dinamakan dengan...', 'Browsing', 'Download', 'Chatting', 'Upload', '3,4,2,1'),
('TI', 'Teknik Informatika', 10, 'Ukuran kecepatan transfer data diukur dengan satuan&nbsp;bps. Dibawah ini yang merupakan susunan satuan kecepatan transfer data dari&nbsp;satuan terkecil ke satuan terbesar&nbsp;yang benar adalah...', 'Kbps &ndash; Mbps &ndash; Tbps &ndash; Gbps', 'Kbps &ndash; Tbps &ndash; Mbps &ndash; Gbps', 'Kbps &ndash; Gbps &ndash; Mbps &ndash; Tbps', 'Kbps &ndash; Mbps &ndash; Gbps &ndash; Tbps', '3,1,2,4'),
('TI', 'Teknik Informatika', 11, 'Di bawah ini yang tidak termasuk ke dalam browser adalah....', 'Facebook', 'Opera', 'Internet explorer', 'Mozila firefox', '4,2,1,3'),
('TI', 'Teknik Informatika', 12, 'Kita sering mendengar kata&nbsp;Internet&nbsp;dalam dunia ilmu pengetahuan dan teknologi (IPTEK). Kepanjangan dari&nbsp;Internet&nbsp;adalah...', 'Interconected Networking', 'International Netlink', 'Interconected Netlink', 'Internal Networking', '4,2,3,1'),
('TI', 'Teknik Informatika', 13, 'Menyebarkan berita bohong di internet adalah termasuk kejahatan. Kejahatan dengan menggunakan internet dikenal dengan nama&hellip;', 'Surfing', 'Chatting', 'Browsing', 'Cybercrime', '1,2,3,4'),
('TI', 'Teknik Informatika', 14, 'Dibawah ini merupakan bahasa pemrograman, kecuali ....', 'Html', 'Http', 'Javascript', 'C++', '3,4,2,1'),
('TI', 'Teknik Informatika', 15, 'Dari pernyataan berikutini, manakah yang merupakan ingkaran dari pernyataan Jakarta Ibu kota RI.', 'Jakarta bukan ibu kota RI', 'Jakarta adalah ibu kota RI', 'Benar bahwa Jakarta Ibu kota Jakarta', 'Benar bahwa Jakarta bukan Ibu kota dari RI', '4,3,2,1'),
('TI', 'Teknik Informatika', 16, 'Ditentukan :\nA = {1, 2, 3}\nB = {4, 5, 6}\nC = {3 , 5}\nMaka (A U B) &cap; CC =&hellip;&hellip;&hellip;.', '{1, 2, 3, 6}', '{1, 2, 4, 5, 6}', '{1, 2, 3, 4, 5, 6}', '{1, 2, 3}', '4,3,2,1'),
('TI', 'Teknik Informatika', 17, 'Rumus yang digunakan untuk membuat nomor urut secara logika setelah input angka 1 sehingga akan muncul angka 2 dan seterusnya adalah  &hellip;.', 'sama dengan satu tambah satu', 'adalah =+1+pointer ke atas 1 kali', 'adalah =+1+ pointer ke atas 1x', '+=1+1', '3,4,1,2'),
('TI', 'Teknik Informatika', 18, 'Sebuah Printer dipakai bersama oleh seluruh pengguna komputer yang terhubung dengan jaringan tanpa memindah-mindahkannya, maka printer tersebut dibagi sumber daya nya, istilah ini dikenal dengan sebutan&hellip;', 'Information Technology', 'Paralel', 'Chatting', 'Sharing', '2,3,1,4'),
('TI', 'Teknik Informatika', 19, 'Salah satu layanan yang mengalirkan informasi berbentuk teks, suara, dan grafik pada internet adalah WWW, kepanjangan dari WWW adalah kepanjangan dari &hellip;', 'Web World Wide', 'World Wide Web', 'Wide World Web', 'Web Wide World', '3,4,1,2'),
('TI', 'Teknik Informatika', 20, 'Nilai p, yang mengandung perrsamaan 4p+3q = 20 dan 2p - q = 3', '0', '1', '2', '3', '1,2,4,3'),
('DKV', 'Desain Komunikasi Visual', 1, 'Tujuan utama membuat sketsa adalah...', 'Untuk menghasilkan bentuk dasar objek', 'Untuk membuat rencana bagi sebuah lukisan', 'Untuk dikerjakan lebih lanjut sebagai lukisan', 'Meminimalisir kesalahan', '4,1,2,3'),
('DKV', 'Desain Komunikasi Visual', 2, 'Penentuan batas dalam membuat sketsa berfungsi untuk...', 'Mempertajam pengamatan', 'Memberikan gambaran tema', 'Mengatur komposisi', 'Menebalkan garis-garis', '4,3,2,1'),
('DKV', 'Desain Komunikasi Visual', 3, 'Memberi tekanan yang berbeda ketika memegang pensil akan menghasilkan...', 'Garis tebal', 'Garis tipis', 'Arsir yang berbeda', 'Gambar yang detail', '1,2,4,3'),
('DKV', 'Desain Komunikasi Visual', 4, 'Tujuan membuat garis lurus vertical, horizontal, dan diagonal diatas kertas adalah...', 'Memberi kesan tegas', 'Mempertajam garis dan gambar', 'Memberi penebalan pada huruf', 'Membuat garis lurus tanpa rasa takut', '3,2,1,4'),
('DKV', 'Desain Komunikasi Visual', 5, 'Salah satu teknik dasar menggambar dengan pensil yaitu...', 'Sketsa', 'Prespektif', 'Arsir dan gradasi', 'Ilustratif', '3,1,4,2'),
('DKV', 'Desain Komunikasi Visual', 6, 'Langkah awal visualisasi sebuah ide dasar sebuah karya seni adalah membuat...', 'Arsiran', 'Gradasi', 'Sketsa', 'Objek', '1,2,4,3'),
('DKV', 'Desain Komunikasi Visual', 7, 'Tujuan membiasakan untuk melihat, menyentuh, meraba, mencium, mendengar, dan merasakan sebuah objek sebelum memulai menggambar yaitu...', 'Mengungkapkan karakter objek', 'Mengumpulkan objek', 'Meminimalisir kesalahan', 'Mengenal objek', '1,3,2,4'),
('DKV', 'Desain Komunikasi Visual', 8, 'Setiap objek yang digambar memiliki...', 'Kelemahan', 'Kelebihan', 'Struktur bentuk dasar', 'Karakter', '1,2,4,3'),
('DKV', 'Desain Komunikasi Visual', 9, 'Sketsa karakter diatas kertas penting untuk melatih...', 'Penulisan huruf', 'Pangarsiran gambar', 'Karakter gambar', 'Logika menggambar', '1,2,3,4'),
('DKV', 'Desain Komunikasi Visual', 10, 'Dalam sketsa garis menjadi penting karena...', 'Kesederhanaan pengaplikasiannya', 'Bentuk yang tegas', 'Mempertajam pengamatan', 'Untuk kerangka gambar', '4,1,2,3'),
('DKV', 'Desain Komunikasi Visual', 11, 'Berikut ini yang termasuk alat bantu gambar yaitu...', 'Rapido', 'Kertas', 'Software design grafis', 'Light box', '1,3,4,2'),
('DKV', 'Desain Komunikasi Visual', 12, 'Membuat sketsa digunakan sebagai langkah awal visualisasi dari sebuah...', 'Gambar', 'Ide dasar', 'Garis', 'Bentuk', '3,4,1,2'),
('DKV', 'Desain Komunikasi Visual', 13, 'Di bawah yang ini termasuk unsur seni dasar dalam disiplin desain grafis ', 'Symbol ', 'Titik dan garis', 'Corak abstrak ', 'Bitmap ', '2,4,3,1'),
('DKV', 'Desain Komunikasi Visual', 14, 'Suatu bentuk komunikasi visual yang menggunakan gambar untuk menyampaikan pesan secara efektif adalah definisi dari', 'Skenario ', 'Pola ', 'Iklan ', 'Desain Grafis ', '3,2,1,4'),
('DKV', 'Desain Komunikasi Visual', 15, 'Suatu dasar ilmu yang mempelajari semua aspek yang berkaitan dengan keindahan adalah salah satu pengertian dari', 'Etika ', 'Real estate ', 'Realita ', 'Estetika ', '3,1,2,4'),
('DKV', 'Desain Komunikasi Visual', 16, 'Teknik yang membantu ketajaman mata agar mengenal tingkat intensitas cahaya adalah...', 'Arsir dan Gradasi', 'Pewarnaan', 'Garis tebal', 'Garis vertical dan horizontal', '4,1,2,3'),
('DKV', 'Desain Komunikasi Visual', 17, 'Sebaiknya hilangkan perasaan takut untuk membuat kesalahan dalam menggambar dan jangan menggunakan...', '&nbsp;Digital pen', 'Cat air', 'Spidol', 'Penghapus', '1,3,2,4'),
('DKV', 'Desain Komunikasi Visual', 18, 'Seorang Desainer Grafis harus mengatur berbagai unsur visual untuk membawa kembali\npesan yang diinginkan dengan cara memperhatikan', 'Proses desain ', ' Hubungan klien', 'Perubahan bidang', ' Jawaban a,b,c benar', '2,3,1,4'),
('DKV', 'Desain Komunikasi Visual', 19, 'Proporsi ( Proportion ) adalah prinsip dasar tata rupa untuk memperoleh .............', 'Keserasian', 'Kearifan lokal', ' Kemenangan', 'Kemudahan', '4,1,2,3'),
('DKV', 'Desain Komunikasi Visual', 20, 'Karya seni menggambar yang biasanya digunakan untuk memperjelas atau menerangkan sebuah naskah adalah gambar ..........................................', 'Ilustrasi ', 'Gradasi', 'Kreasi', 'Bitmap', '4,2,3,1'),
('Ilkom', 'Ilmu Komputer', 1, 'Komunikasi dapat dikatakan sebagai urat nadi kehidupan manusia karena.... ', 'Manusia Melakukan Kegiatan Komunikasi Sejak Lahir', 'Komunikasi Dilakukan Oleh Manusia Secara Terus Menerus Selama Proses Kehidupan', 'Komunikasi Membuat Seseorang Menjadi Tidak Terasing Dengan Lingkungannya', 'Komunikasi Membuat Seseorang Mampu Mengenali Diri Sendiri', '3,4,2,1'),
('Ilkom', 'Ilmu Komputer', 2, 'Ciri yang melekat pada komunikasi yang bersifat transaksional adalah ...', 'Adanya Penggunaan Lambang-Lambang Dalam Kegiatan Komunikasi', 'Pelaku Komunikasi Tidak Harus Hadir Dalam Satu Ruangan', 'Komunikasi Yang Dilakukan Sesuai Dengan Keinginan Dan Tujuan Dari Para Pelaku Komunikasi', 'Keberhasilan Komunikasi Ditentukan Oleh Duabelah Pihak Yang Berkomunikasi', '1,2,3,4'),
('Ilkom', 'Ilmu Komputer', 3, 'Kegiatan komunikasi yang dapat dilakukan tanpa mengenal batasan geografis, terjadi pada tingkatan .....', 'Komunikasi Antar Pribadi', 'Komunikasi Kelompok', 'Komunikasi Organisasi', 'Komunikasi Massa', '2,1,3,4'),
('Ilkom', 'Ilmu Komputer', 4, 'Pak Amir setiap pagi selalu menyempatkan diri membaca kabar, dan pada malam hari tidak pernah ketinggalan menyaksikan berbagai acara TV.Apa yang dilakukan pak Amir tersebut menunjukkan bahwa surat kabar dan TV sebagai media massa memiliki fungsi sebagai .........', 'Sarana Pelarian Dari Ketegangan Dan Keterasingan', 'Bagian Dari Kehidupan Rutin Atau Ritualitas', 'Pengembang Konsep Diri', 'Membantu Melegakan Emosi', '1,4,3,2'),
('Ilkom', 'Ilmu Komputer', 5, 'Komunikasi yang berlangsung anatar orang batak dan orang jawa merupakan bentuk komunikasi anatar budaya dalam tingkatan ....', 'Negara', 'Nasional', 'Kelompok Sosial', 'Etnis', '1,2,3,4'),
('Ilkom', 'Ilmu Komputer', 6, 'Pak Joko ingin menyampaikan suatu pesan komunikasi pada masyarakat desa X yang memiliki latar belakang pendidikan rendah. Agar pesan yang disampaikan pak Joko dapat diterima oleh masyarakat desa X, maka pak Joko harus menyampaikan pesannya secara ..............', 'One Side', 'Two Side', 'Climax Order', 'Implisit', '1,4,2,3'),
('Ilkom', 'Ilmu Komputer', 7, 'Majalah merupakan media massa yang memiliki karakteristik anatara lain ........                         1. Memiliki Segmentasi Khusus\n2. Kecepatan Penetrasi\n3. Isi Pesan Tetap Diingat Oleh Khalayak\n', 'Jawaban 1 Dan 2 Benar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', 'Jawaban 2 Dan 3 Benar', 'Jawaban 1 Dan 3 Benar', 'Semua Jawaban Benar', '2,3,4,1'),
('Ilkom', 'Ilmu Komputer', 8, 'Ciri-ciri yang ada pada komunikasi verbal adalah ...............                                                       1. Memiliki Sifat Yang Eksplisit\n2. Berkakitan Dengan Rasa Atau Emosi\n3. Berkaitan Dengan Keadaan Yang Spesifik\n', 'Jawaban 1 Dan 2 Benar', 'Jawaban 2 Dan 3 Benar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', 'Jawaban 1 Dan 3 Benar', 'Semua Jawaban Benar', '2,4,3,1'),
('Ilkom', 'Ilmu Komputer', 9, 'Yang dimaksud dengan komunikasi yang efektif adalah komunikasi....', 'Yang Mampu Membawa Kita Pada Tujuan Komunikasi', 'Dua Arah', 'Satu Arah', 'Sebagai Transaksi', '4,2,1,3'),
('Ilkom', 'Ilmu Komputer', 10, 'Ani berceritera mengenai kesedihan hatinya pada Ida. Ida ikut bersedih mendengar cerita Ani tersebut, sehingga keduanya menangis bersama-sama. Menurut perspektif humanist, tindakan Ida menggambarkan sikfat komunikasi antarpribadi yang berupa .....', 'Keterbukaan', 'Perilaku', 'Empati', 'Kesamaan', '4,1,3,2'),
('Ilkom', 'Ilmu Komputer', 11, 'Budi orang Jawa marah cemberut tanpa berkata apapun sehingga Jhoni pada Jhoni yang berasal dari batak. Ketika mereka bertemu, Budi memperlihatkan wajah cemberut dan tidak mau menegur Jhoni, sehingga Jhoni tahu kalau Budi sedang marah padanya. Ilustrasi tersebut menggambarkan bahwa komunikasi nonverbal memiliki ciri .....', 'Terikat Oleh Budaya', 'Selalu Ada', 'Memodikfikasi Pesan Verbal', 'Mengungkapkan Sikap', '1,2,4,3'),
('Ilkom', 'Ilmu Komputer', 12, 'Pada dasarnya manusia melakukan kegiatan komunikasi sejak ', 'Lahir Ke Dunia. ', 'Pertama Kali Dapat Berbicara.', ' Pertama Kali Bersekolah.', 'Pertama Kali Mengenal Orang. ', '4,3,2,1'),
('Ilkom', 'Ilmu Komputer', 13, 'Pesan yang disampaikan oleh komunikator pada komunikan dapat berbentuk ', 'Verbal - Non Verbal.', 'Langsung - Tidak Langsung.', ' Kelompok - Individu. ', 'Satu Tahap - Dua Tahap.', '4,3,2,1'),
('Ilkom', 'Ilmu Komputer', 14, 'Ketika kita sedang berbicara dengan teman, tiba-tiba ada anak kecil menangis di dekat kita sehingga untuk sementara teman yang kita ajak berbicara tidak bisa menangkap pembicaraan kita secara jelas. Dalam proses komunikasi tangisan anak tersebut merupakan ', 'Feedback', 'Noise ', 'Effek', 'Message', '1,4,3,2'),
('Ilkom', 'Ilmu Komputer', 15, 'Seorang mahasiswa mengajak berbicara teman kuliahnya mengenai era reformasi yang terjadi di Indonesia. Pemilihan terhadap teman kuliahnya untuk diajak bicara akan mempermudah proses komunikasi, karena dalam kegiatan komunikasi tersebut telah terjadi ', 'Feedback ', 'Noise ', ' Interpreting', 'Over Laping Of Interest', '4,1,3,2'),
('Ilkom', 'Ilmu Komputer', 16, 'Perkumpulan pemuda RT. 01 mengadakan pertandingan bola voly dengan RT. 02. Dalam tingkatan proses komunikasi, kegiatan yang dilakukan oleh pemuda-pemuda dari kedua RT tersebut termasuk dalam kegiatan komunikasi ', 'Organisasi. ', 'Dalam Kelompok.', 'Antarkelompok. ', 'Antarpribadi.', '3,2,4,1'),
('Ilkom', 'Ilmu Komputer', 17, 'Ada beberapa dimensi konteks dalam kegiatan komunikasi interpersonal, salah satunya adalah dimensi fisik yang dapat berupa ', 'Ruangan ', 'Peranan', 'Norma', ' Budaya', '4,3,2,1'),
('Ilkom', 'Ilmu Komputer', 18, 'Serangkaian prinsip dasar atau aturan dalam melakukan komunikasi merupakan?', 'Tujuan Etika', 'Cara Penilaian Baik Dan Buruk', 'Pengertian Baik', 'Pengertian Etika Komunikasi', '1,2,3,4'),
('Ilkom', 'Ilmu Komputer', 19, 'Orang yang menyampaikan pesan, gagasan, keinginan, pernyataan disebut?', 'Pesan/Informasi', 'Saluran Komunikasi', 'Timbal Balik', 'Komunikator', '1,2,3,4'),
('Ilkom', 'Ilmu Komputer', 20, 'Pihak yang menjadi sasaran pesan yang dikirim disebut sebagai?', 'Transmit', 'Message', 'Komunikan', 'Komunikator', '1,2,4,3'),
('AK', 'Akuntansi', 1, 'Dilihat dari fungsinya, akuntansi diartikan sebagai&hellip;', 'Suatu alat untuk mencatat semua transaksi yang terjadi dalam perusahaan', 'Suatu aktivitas penyedia data keuangan perusahaan yang penting bagi pihak-pihakyang memerlukan', 'Rangkaian kegiatan yang meliputi pencatatan dan pelaporan transaksi keuangan yang terjadi dalam perusahaan.', 'Kumpulan catatan mengenai transaksi keuangan yang terjadi pada periode tertentu', '1,2,4,3'),
('AK', 'Akuntansi', 2, 'Yang dimaksud dengan perusahaan jasa adalah&hellip;', 'Perusahaan yang kegiatan pokok usahanya membeli barang, menyimpansementara, kemudian menjual kembali barang yang dibelinya tanpa melakukanperubahan atas sifat atau keadaan barang yang bersangkutan', 'Perusahaan yang kegiatan pokok usahanya membeli bahan baku, mengolah bahanbaku hingga menjadi produk yang siap untuk dijual, kemudian menjual hasilproduksinya', 'Perusahaan yang kegiatan pokok usahanya menyediakan dan menjual jasa', 'Perusahaan yang kegiatan pokok usahanya membeli barang dan kemudianmenjualnya kembali dengan merubah bentuk barang tersebut', '2,3,4,1'),
('AK', 'Akuntansi', 3, 'Tempat mencatat perubahan setiap pos laporan keuangan yang setiap saat dapatmenunjukkan saldonya disebut&hellip;', 'Rekening (akun)', 'Buku besar', 'Transaksi', 'Persamaan akuntansi', '4,3,1,2'),
('AK', 'Akuntansi', 4, 'Di bawah ini hal-hal yang termasuk pos-pos aktiva. Kecuali....', 'Kas', 'Gedung', 'Prive', 'Peralatan', '1,2,4,3'),
('AK', 'Akuntansi', 5, 'Dibeli perlengkapan salon dari toko sumber waras dengan kredit. Analisis transaksitersebut adalah&hellip;', 'Harta bertambah, yaitu perlengkapan salon; utang bertambah', 'Harta bertambah, yaitu perlengkapan salon; utang berkurang', 'Harta bertambah, yaitu perlengkapan salon; kas berkurang', 'Harta berkurang, yaitu perlengkapan salon; kas bertambah', '4,1,2,3'),
('AK', 'Akuntansi', 6, 'Pengertian dari harta adalah&hellip;', 'Kekayaan atau sumber ekonomi perusahaan yang berupa benda berwujud dan tidakberwujud, mempunyai nilai uang serta mendatangkan manfaat pada masa yangakan datang', 'Alat tukar yang diterima oleh bank sebesar nilai nominalnya', 'Hak kekayaan pemilik', 'Kekayaan atau sumber ekonomi perusahaan yang berupa benda berwujud danmempunyai nilai uang', '4,1,3,2'),
('AK', 'Akuntansi', 7, 'Keharusan membayar kepada pihak lain dalam jangka waktu tertentu adalah&hellip;', 'Piutang', 'Beban', 'Investasi', 'Utang', '3,2,1,4'),
('AK', 'Akuntansi', 8, 'Hak kekayaan pemilik merupakan istilah dari&hellip;', 'Kas', 'Prive', 'Modal', 'Harta', '1,2,4,3'),
('AK', 'Akuntansi', 9, 'Kebutuhan yang ada di fotocopy Tiara:\n1)        Uang kas Rp. 500.000,00\n2)        Gedung Rp. 10.000.000,00\n3)        Mesin fotocopy Rp. 5.000.000,00\n4)        Mesin pemotong Rp. 1.000.000,00\n5)        Kertas Rp. 500.000,00\n6)        Tinta Rp. 400.000,00\n7)        Lem Rp. 50.000,00\n8)        Etalase Rp. 750.000,00\n9)        Meja Rp. 250.000,00\n10)      Mika Rp. 100.000,00\nDari kebutuhan di atas manakah yang termasuk peralatan&hellip;', '1, 2, 4, 7', '3, 4, 8, 9', '1, 4, 6, 10', '3, 4, 5, 9', '3,4,2,1'),
('AK', 'Akuntansi', 10, 'Rumusan persamaan dasar akuntansi yang benar adalah&hellip;', 'Harta = utang &plusmn; modal', 'Harta = utang + beban', 'Utang = harta + modal', 'Harta = utang + modal', '1,2,3,4'),
('AK', 'Akuntansi', 11, 'Salon winda memiliki data sebagai berikut.\n         Aktiva Rp. 50.000.000,00\n         Kewajiban Rp. 17.500.000,00\nDengan demikian ekuitas perusahaan sebesar&hellip;', 'Rp. 50.000.000,00', 'Rp. 32.500.000,00', 'Rp. 17.500.000,00', 'Rp. 27.500.000,00', '1,4,2,3'),
('AK', 'Akuntansi', 12, 'Jika perencanaan dan pelaksanaan kegiatan ekonomi masyarakat ditentukan oleh produsen dan konsumen maka perekonomian masyarakat tersebut menganut sistem ekonomi &hellip;.', 'Pasar', 'Modern', 'Bebas', 'Komando', '4,3,2,1'),
('AK', 'Akuntansi', 13, 'Berikut kegiatan RTP dan RTK :\n   1) Menjual barang dan jasa hasil produksi\n   2)Menyediakan faktor-faktor produksi\n   3) Membayar pajak kepada pemerintah\n   4) Menerima balas jasa atas penyerahan faktor produksi\n   5)Membayar balas jasa atas pemakaian faktor produksi\nPeranan rumah tangga konsumen dalam kegiatan ekonomi yaitu &hellip;.', '1, 2, dan 3', '. 1, 3, dan 4', '2, 3, dan 4', '2, 4, dan 5', '1,3,4,2'),
('AK', 'Akuntansi', 14, '  Berikut ini kebaikan dan keburukan kredit :\n       1. Menaikkan produktivitas\n       2. Memperlancar transaksi dagang\n       3. Mendorong orang hidup konsumtif\n       4. Pemerataan pendapatan\n       5. mengakibatkan over produksi\nYang termasuk kebaikan kredit adalah . . .', '1, 2 dan 3', '1, 2 dan 4', '1, 3 dan 5', '2, 3 dan 4', '2,4,1,3'),
('AK', 'Akuntansi', 15, 'Dibeli barang dagang dari PD Indah Rp. 25.000.000,00 baru dibayar Rp. 15.000.000,00  Dari transaksi di atas jika dicatat dalam jurnal khusus masuk pada jurnal &hellip;.', 'Pembelian', 'Penjualan', 'Penerimaan Kas', 'Pengeluaran kas', '2,3,1,4'),
('AK', 'Akuntansi', 16, 'Dalam neraca lajur perusahaan pabrik terdapat satu kolom Tambahan yaitu :', 'Laporan ke uangan', 'Laporan rugi perusahaan', 'Beban pokok perusahaan', 'Laporan beban pokok produksi.', '1,2,3,4'),
('AK', 'Akuntansi', 17, 'Satu dari perkiraan-perkiraan di bawah ini tidak tercantum dalam neraca saldo setelah penutupan adalah .....', 'Biaya yang masih harus dibayar', 'Pendapatan diterima dimuka', 'Pendapatan yang masih harus diterima', 'Pendapat lain-lain', '2,1,3,4'),
('AK', 'Akuntansi', 18, 'Perkiraan-perkiraan yang harus ditutup dalam jurnal penutupan adalah...', 'Pendapatan diterima dimuka, beban, modal, dan ikhtisar laba/rugi', 'Pendapatan, modal, beban dan ikhtisar laba-rugi', 'Pendapatan diterima dimuka, modal dan ikhtisar laba/rugi', 'Pendapatan diterima dimuka, modal dan ikhtisar laba/rugi', '3,2,4,1'),
('AK', 'Akuntansi', 19, 'Sahnya bukti transaksi adalah bukti transaksi yang berisi data tentang:', 'Jumlah uang, nomor bukti, keterangan, pihak yang terlibat', 'Tanggal, jumlah uang, nomor bukti, alamat', 'Tanggal, jumlah uang, nomor bukti, pihak yang terlibat.', 'Tanggal, jumlah uang, keterangan, nomor bukti.', '1,2,4,3'),
('AK', 'Akuntansi', 20, 'Suatu kenyataan bahwa kebutuhan selalu lebih besar daripada sarana pemuas kebutuhan merupakan inti dari konsep &hellip;.', 'Kebutuhan pokok', 'Ketergantungan', 'Kelangkaan', 'Sumber daya alam', '1,3,4,2');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `Num` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `akreditas` text NOT NULL,
  `tahun` int(10) NOT NULL,
  `Alamat` text DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`Num`, `Nama`, `short_name`, `status`, `akreditas`, `tahun`, `Alamat`, `Deskripsi`, `img1`, `img2`) VALUES
(1, 'Universitas Negeri Malang', 'UM', 'Negeri', 'A', 1954, 'Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '', 'UM1.jpg', 'UM2.jpg'),
(2, 'Universitas Gadjah Mada', 'UGM', 'Negeri', 'A', 1949, 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '', 'UM1.jpg', 'UM2.jpg'),
(3, 'Universitas Indonesia', 'UI', 'Negeri', 'A', 1924, 'Jl. Margonda Raya, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424', '', 'UM1.jpg', 'UM2.jpg'),
(4, 'Universitas Airlangga', 'UNAIR', 'Negeri', 'A', 1954, 'Jl. Airlangga No.4 - 6, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60115', '', 'UM1.jpg', 'UM2.jpg'),
(5, 'Universitas Lambung Mangkurat', 'UNLAM', 'Negeri', 'A', 1958, 'Jl. Brigjen H. Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123', '', 'UM1.jpg', 'UM2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('5dc29a60a3bda', 'Taro', 5000, '5dc29a60a3bda.png', 'Taro adalah snack');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_pertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_kedua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kampus_pertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kampus_kedua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_pertama` int(3) NOT NULL DEFAULT 0,
  `skor_kedua` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`username`, `first_name`, `last_name`, `jenis_kelamin`, `email`, `password`, `sekolah`, `jurusan_pertama`, `jurusan_kedua`, `kampus_pertama`, `kampus_kedua`, `bio`, `skor_pertama`, `skor_kedua`) VALUES
('john', 'John', 'Terry', 'Laki-laki', 'tes@gmail.com', '8cb9cacd854fc3ddd88b696e7c20834a', 'SMK', 'Teknik Informatika', 'Akuntansi', 'Universitas Brawijaya', 'Universitas Negeri Malang', 'Halo namaku John, aku masih duduk di kelas 2 SMK Banjarbaru, Aku ingin sekali kuliah di Universitas Brawijaya.', 23, 46);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL,
  `Image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `username`, `nama_lengkap`, `password`, `status`, `Image`) VALUES
('afdhalarrazy111@gmail.com', 'arrazy100', 'Muhammad Afdhal Arrazy', '8569fda77a4acf6dd9b1696a68ea8ed5', 'admin', 'arrazy100.jpg'),
('tes@gmail.com', 'john', 'John Terry', '6e0b7076126a29d5dfcbd54835387b7b', 'user', 'john.jpg'),
('nedy@gmail.com', 'nedy', 'Nedy', '220395dc1531fd3f6f7ae6eefdb26541', 'admin', 'Nedy.jpg'),
('petanikode@ladang.com', 'petanikode', 'Petani Kode', 'b4e8279a53da3347d4cad57a1becd40d', 'admin', 'petanikode.jpg'),
('rezal@gmail.com', 'rezal', 'Muhammad Rezal', '9946e45d7e5a707875e2f1dd60eb43ca', 'admin', 'rezal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
