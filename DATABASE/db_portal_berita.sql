-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 05.34
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_artikel` varchar(1000) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_kategori`, `nama_artikel`, `isi_artikel`, `gambara`) VALUES
(1, 2, 'Iron Man 2020 (2020) #1', 'Published:\r\nJanuary 15, 2020\r\nWriter:\r\nChristos Gage, Dan Slott\r\nPenciler:\r\nPeter M. Woods\r\nCover Artist:\r\nPeter M. Woods\r\nThe future is now! Artificial Intelligences presents a clear and present danger to humanity and must be brought to heel! The Robot Rebellion battles for the establishment of robot rights! And Arno Stark IS Iron Man! PLUS! Pete Woods’ main cover art will feature a 5th Color Flourescent Ink treatment!\r\n', 'komik2.jpg'),
(2, 2, 'Avengers (2018) #29', 'Published:\r\nJanuary 15, 2020\r\nWriter:\r\nJason Aaron\r\nPenciler:\r\nEd Mcguinness\r\nCover Artist:\r\nEd Mcguinness\r\nSTARBRAND REBORN Part Three: THE RISE OF THE WAR WIDOW. The battle for the Starbrand heats up like a supernova, as Captain Marvel goes toe to toe with Firelord, Ghost Rider races the Silver Surfer and Brood Thor - tries to eat the Avengers. Meanwhile the Black Widow kicks much butt in outer space with a bold new weapon in her arsenal. That’s right, the Black Widow + the War Machine armor = the all-new, all-deadly War Widow.\r\n', 'komik1.jpg'),
(3, 3, 'The Avengers-2012', 'Ketika musuh yang tak terduga muncul, mengancam keselamatan dan keamanan dunia, Nick Fury, direktur Badan Perdamaian Internasional, dikenal sebagai S.H.I.E.L.D. , membutuhkan tim untuk menyelamatkan dunia dari bencana. Usaha perekrutan pun dimulai Iron Man, Captain America, Hulk, Thor, Black Widow dan Hawkeye dikumpulkan untuk menaklukkan Dewa Kehancuran, Loki, dalam usahanya menghancurkan bumi. Dengan semua gabungan kekuatan, tugas nampak lebih mudah. Namun kenyatannya tidak demikian! Para pahlawan super justru saling melawan satu sama lain Hulk melawan Captain America, siapa yang akan menang? Apakah Iron Man dapat mengalahkan kekuatan super milik Thor? Bagaimana para pahlawan super ini secara bersama-sama menghadapi bencana, melindungi masyarakat dan yang terpenting, bertahan hidup? ', 'avenger01.jpg'),
(4, 3, 'The Avengers: Age of Ultron-2015', 'Avengers: Age of Ultron adalah sebuah film pahlawan super berdasarkan komik Avengers, produksi Marvel Studios dan didistribusikan oleh Walt Disney Studios Motion Pictures. Film ini merupakan sekuel dari The Avengers dan merupakan film kesebelas dari seri Marvel Cinematic Universe. Tanggal rilis: 22 April 2015 (Indonesia)\r\nSutradara: Joss Whedon\r\nSerial film: The Avengers\r\nBox office: 1,403 miliar USD\r\nAnggaran: 365 juta USD (2014)  ', 'avenger2.jpg'),
(5, 3, 'Avengers: Infinity War-2018 ', 'The Avengers dan sekutu mereka harus bersedia mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum ia berhasil menghancurkan alam semesta.\r\nTanggal rilis: 25 April 2018 (Indonesia)\r\nSutradara: Russo Bersaudara\r\nSerial film: The Avengers\r\nBox office: 2,048 miliar USD\r\nAnggaran: 316 juta USD (2018) ', 'avenger3.jpg'),
(6, 3, 'Avengers: Endgame-2019 ', 'Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?   Tanggal rilis: 24 April 2019 (Indonesia)\r\nSutradara: Russo Bersaudara, Joe Russo\r\nBox office: 2,798 miliar USD\r\nAnggaran: 356 juta USD (2019)    ', 'avg4.jpg'),
(7, 1, 'Spiderman', 'Ia berperan sebagai Peter Parker dalam dua film dengan nama “The Amazing Spiderman”. Lagi-lagi harus bubar, serial ini hanya mampu melahirkan dua judul film layar lebar.Guna menjawab keinginan para penggemar menggabungkan semua superhero di “Avengers”, untuk ketiga kalinya Marvel membuat pembaharuan dengan mengusung Tom Holland menjadi Peter Parker.Mengutip The Street, di urutan paling buncit ada Tom Holland yang menjadi satu-satunya aktor “Spiderman” masuk dalam anggota The Avengers di Marvel Cinematic Universe. Jumlah uang yang berhasil dibawa pulang Tom Holland dari aktingnya tersebut mencapai sekitar US$500 ribu atau setara Rp7 miliaran.', 'spd_man.jpg'),
(8, 2, 'Marvel\'s Black Widow Prelude (2020) #1', 'Published:\r\nJanuary 15, 2020\r\nWriter:\r\nPeter David\r\nPenciler:\r\nCarlos Villa\r\nTRACE THE BLACK WIDOW’S HISTORY IN THE MARVEL CINEMATIC UNIVERSE! From spy to Avenger, the enigmatic BLACK WIDOW has lived many secret lives.  But how do these disparate episodes add up to the life of the heroic Avenger, and what is the thread that connects her past to her future? Get ready for MARVEL STUDIOS’ BLACK WIDOW solo film with this glimpse into the storied history of NATASHA ROMANOFF in this tale set in the Marvel Cinematic Universe!\r\n', 'komik3.jpg'),
(9, 2, 'Venom: The End (2020) #1', 'Published:\r\nJanuary 15, 2020\r\nWriter:\r\nAdam Warren\r\nCover Artist:\r\nR Rahzzah\r\nTHE FINAL VENOM STORY! The alien symbiote who bonded with Eddie Brock has been through a lot… but not nearly as much as he has coming. In a tale that literally spans over a trillion years, Venom travels the length of space and time as the last defender of life in the universe!\r\n', 'komik4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `gambar`, `deskripsi`, `nama`) VALUES
(1, 'c_marvel.jpg', 'ini adalah brie lason pemeran captem marvel', 'Brie leason (capten Marvel)'),
(2, 'gallery_blackwidowa.jpg', 'ini adalah Balck Widow', 'Balck Widow'),
(3, 'gallery_ironman1.jpg', 'ini adalah Tony Stark', 'Tony Stark'),
(4, 'gallery_hawkeye1.jpg', 'Ini adalah Hawkeye', 'Hawkeye'),
(6, 'gallery_capamericaa.jpg', 'ini adalah Capten America', 'Capten America'),
(9, 'gallery_thor1.jpg', 'ini adalah Thor', 'Thor'),
(10, 'gallery_hulka.jpg', 'ini dia adalah pemeran super hero Hulk', 'Hulk'),
(11, 'gallery_1.jpg', 'ini lupa namanya siapa', 'ga tau lupa'),
(12, 'gallery_tomholand.jpg', 'pemeran spidermen', 'Spiderman'),
(13, 'gallery_all.jpg', 'Beberapa pemain Avengers Endgame', 'Foto Premier Avenger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Aktor-Aktris'),
(2, 'Comics'),
(3, 'Movies Avengers');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'satia', 'be4c747e2cca8fe81db8da5c6d46ef45', 1),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
