-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 05.42
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `judul` tinytext NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `isi` longtext NOT NULL,
  `jml_view` int(11) NOT NULL,
  `jml_like` int(11) NOT NULL,
  `jml_dislike` int(11) NOT NULL,
  `jml_komen` int(11) NOT NULL,
  `value_artikel` int(11) NOT NULL,
  `tgl_kirim` varchar(50) NOT NULL,
  `tag` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tag`)),
  `pengirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `kategori`, `judul`, `thumbnail`, `isi`, `jml_view`, `jml_like`, `jml_dislike`, `jml_komen`, `value_artikel`, `tgl_kirim`, `tag`, `pengirim`) VALUES
(7, 21, 'Daily-Coding-1', '//192.168.42.103/cms/assets/images/52Daily-Coding-', '<p>Haaaaa cape bener dah, pas postingan ini dibuat waktu nunjukin angka 02:44 pagi, hufttt gini banget ya perjuangan…. tapi tak apalah, mungkin perjuangan ini akan ada artinya suatu hari nanti…</p>', 0, 0, 0, 0, 0, '22/07/2020', '[15,16,31]', 1),
(8, 11, 'Daily-Coding-2', '//localhost/cms/assets/images/3Daily-Coding-2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(9, 11, 'Daily-Coding-3', '//localhost/cms/assets/images/24Daily-Coding-3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(10, 11, 'Daily-Coding-4', '//localhost/cms/assets/images/95Daily-Coding-4.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(11, 11, 'Daily-Coding-5', '//localhost/cms/assets/images/49Daily-Coding-5.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(12, 11, 'Daily-Coding-6', '//localhost/cms/assets/images/80Daily-Coding-6.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(13, 11, 'Daily-Coding-7', '//localhost/cms/assets/images/28Daily-Coding-7.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(14, 11, 'Daily-Coding-8', '//localhost/cms/assets/images/45Daily-Coding-8.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(15, 11, 'Daily-Coding-9', '//localhost/cms/assets/images/59Daily-Coding-9.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(16, 11, 'Daily-Coding-10', '//192.168.42.103/cms/assets/images/2Daily-Coding-10.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>', 0, 0, 0, 0, 0, '23/07/2020', '[8,9,15,18,31]', 1),
(17, 11, 'TEST-IMAGE-YA', '//localhost/cms/assets/images/1TEST-IMAGE-YA.jpg', '<p>Ini saya cuma mau test image, apahak bisa atau tidak ehehe.</p><figure class=\"image image-style-side\"><img src=\"//localhost/cms/assets/images/9624ilustrasi-rupiah-dan-dolar-cnbc-indonesiaandrean-kristianto-5_169.jpeg\"><figcaption>UANG UANG UANG</figcaption></figure><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp; <a href=\"test.com\">TEST</a> </p>', 0, 0, 0, 11, 600, '25/07/2020', '[9,10,17]', 1);

--
-- Trigger `artikel`
--
DELIMITER $$
CREATE TRIGGER `kurang_artikel` AFTER DELETE ON `artikel` FOR EACH ROW BEGIN

update users set jml_artikel = jml_artikel-1 where id = old.pengirim;

end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_artikel` AFTER INSERT ON `artikel` FOR EACH ROW BEGIN

update users set jml_artikel = jml_artikel+1 where id = new.pengirim;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `tipe` enum('redirect','script') NOT NULL,
  `tampilan` longtext NOT NULL,
  `opsi` longtext NOT NULL,
  `jml_view` int(11) NOT NULL,
  `jml_klik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `thumbnail`, `deskripsi`) VALUES
(11, 'Teknologi', '//localhost/cms/assets/images/9476-kategori.jpg', 'Membahas tentang berita teknologi terkini.'),
(14, 'Berita', '//localhost/cms/assets/images/2501-kategori.jpg', 'Membahas seputar berita terupdate.'),
(15, 'Seni-dan-Kebudayaan', '//localhost/cms/assets/images/3934-kategori.jpg', 'Membahas seputar seni.'),
(19, 'Home-Made-Software', '//localhost/cms/assets/images/7505-kategori.jpg', 'Memperkenalkan project/software buatan mimin disini.'),
(20, 'Hiburan', '//localhost/cms/assets/images/6231-kategori.jpg', 'Membahas tentang topik lucu.'),
(21, 'Daily-Blog', '//localhost/cms/assets/images/5405-kategori.jpg', 'Mari ngalor ngidul bersama mimin-mimin disini :)');

--
-- Trigger `kategori`
--
DELIMITER $$
CREATE TRIGGER `DEL_KAT` AFTER DELETE ON `kategori` FOR EACH ROW BEGIN

delete from artikel where kategori = old.id;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `langganan`
--

CREATE TABLE `langganan` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_verifikasi` tinytext NOT NULL,
  `status` enum('terverifikasi','belum_terferifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_akses`
--

CREATE TABLE `log_akses` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `referal` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `log_akses`
--
DELIMITER $$
CREATE TRIGGER `akses` AFTER INSERT ON `log_akses` FOR EACH ROW BEGIN

update artikel set jml_view = jml_view+1, value_artikel = value_artikel+5 where id = new.id_artikel;

update iklan set jml_view = jml_view+1 where id = new.id_iklan;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `ip` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `ip`, `email`) VALUES
(1, '127.0.0.1', 'star0newew188@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_dislike`
--

CREATE TABLE `riwayat_dislike` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `riwayat_dislike`
--
DELIMITER $$
CREATE TRIGGER `v_artikel2` AFTER INSERT ON `riwayat_dislike` FOR EACH ROW BEGIN

update artikel set value_artikel = value_artikel-10 where id = new.id_artikel;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_komen`
--

CREATE TABLE `riwayat_komen` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `inisial` varchar(50) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `kode_verifikasi` int(11) NOT NULL,
  `tgl_kirim` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_komen`
--

INSERT INTO `riwayat_komen` (`id`, `id_artikel`, `inisial`, `komentar`, `kode_verifikasi`, `tgl_kirim`, `jam`) VALUES
(12, 17, 'star0newew188@gmail.com', 'test OK', 49940, '26/07/2020', '15:19:53');

--
-- Trigger `riwayat_komen`
--
DELIMITER $$
CREATE TRIGGER `v_artikel3` AFTER INSERT ON `riwayat_komen` FOR EACH ROW BEGIN

update artikel set value_artikel = value_artikel+50, jml_komen = jml_komen+1 where id = new.id_artikel;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_like`
--

CREATE TABLE `riwayat_like` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `riwayat_like`
--
DELIMITER $$
CREATE TRIGGER `v_artikel1` AFTER INSERT ON `riwayat_like` FOR EACH ROW BEGIN

update artikel set value_artikel = value_artikel+10 where id = new.id_artikel;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_web`
--

CREATE TABLE `setting_web` (
  `id` int(11) NOT NULL,
  `nama_web` tinytext NOT NULL,
  `email_admin` tinytext NOT NULL,
  `kontak_iklan` int(15) NOT NULL,
  `deskripsi_web` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting_web`
--

INSERT INTO `setting_web` (`id`, `nama_web`, `email_admin`, `kontak_iklan`, `deskripsi_web`) VALUES
(1, 'SantuyBlogger.com', 'admin@thisweb.com', 980809, 'Selamat datang di website kecil kami, semoga betah dan juga wawasan anda bertambah setelah berkunjung kedalam website kecil kami, dan jangan lupa untuk subscribe/berlangganan di website kami untuk mengikuti update dan juga konten yang kami posting setiapharinya. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `nama`, `thumbnail`, `deskripsi`) VALUES
(8, 'Tips-&-Trick', '//localhost/cms/assets/images/1545-tags.jpg', 'Tips & Trick untuk menghadapi atau meringankan suatu masalah.'),
(9, 'Tutorial', '//localhost/cms/assets/images/258-tags.jpg', 'Tutorial melakukan atau membuat sesuatu.'),
(10, 'Bitcoin', '//localhost/cms/assets/images/3307-tags.jpg', 'Membahas seputar Bitcoin.'),
(11, 'Ethereum', '//localhost/cms/assets/images/2477-tags.jpg', 'Membahas seputar Ethereum'),
(12, 'Olahraga', '//localhost/cms/assets/images/6274-tags.jpg', 'Membahas tentang olahraga.'),
(13, 'Kesehatan', '//localhost/cms/assets/images/8451-tags.jpg', 'Membahas tentang kesehatan.'),
(14, 'Bahasa-Pemrograman', '//localhost/cms/assets/images/7627-tags.jpg', 'Membahas seputar bahasa pemrograman.'),
(15, 'PHP Hypertext Prepocessor', '//localhost/cms/assets/images/2780-tags.jpg', 'Membahas seputar bahasa pemrograman PHP.'),
(16, 'Javascript', '//localhost/cms/assets/images/2514-tags.jpg', 'Membahas seputar bahasa pemrograman Javascript.'),
(17, 'Bahasa-Pemrograman-Java', '//localhost/cms/assets/images/9163-tags.jpg', 'Membahas seputar bahasa pemrograman Java.'),
(18, 'Python', '//localhost/cms/assets/images/172-tags.jpg', 'Membahas seputar bahasa pemrograman Java.'),
(19, 'C Sharp (C#)', '//localhost/cms/assets/images/8079-tags.jpg', 'Membahas seputar bahasa pemrograman C#.'),
(20, 'Politik', '//localhost/cms/assets/images/5439-tags.jpg', 'Membahas tentang politik.'),
(21, 'Meme-&-Jokes', '//localhost/cms/assets/images/662-tags.jpg', 'Membahas seputar Meme & candaan.'),
(22, 'Rupiah', '//localhost/cms/assets/images/9532-tags.jpg', 'Membahas seputar mata uang rupiah.'),
(23, 'Dollar', '//localhost/cms/assets/images/8748-tags.jpg', 'Membahas seputar mata uang dollar.'),
(24, 'Mata-Uang-Euro', '//localhost/cms/assets/images/7939-tags.jpg', 'Membahas seputar mata uang euro.'),
(25, 'Photoshop', '//localhost/cms/assets/images/557-tags.jpg', 'Membahas seputar Photoshop.'),
(26, 'Corel-Draw', '//localhost/cms/assets/images/8275-tags.jpg', 'Membahas seputar corel draw.'),
(27, 'Virus', '//localhost/cms/assets/images/3515-tags.jpg', 'Membahas seputar virus.'),
(28, 'Horror', '//localhost/cms/assets/images/9211-tags.jpg', 'Membahas seputar cerita/pengalaman Horror.'),
(29, 'Puisi', '//localhost/cms/assets/images/5926-tags.jpg', 'Membahas seputar puisi.'),
(30, 'Musik', '//localhost/cms/assets/images/15-tags.jpg', 'Membahas seputar musik.'),
(31, 'Coding', '//localhost/cms/assets/images/963-tags.jpg', 'membahas seputar dunia percodingan.');

--
-- Trigger `tags`
--
DELIMITER $$
CREATE TRIGGER `DEL_TAG` AFTER DELETE ON `tags` FOR EACH ROW BEGIN

UPDATE artikel
SET tag = JSON_REMOVE(
  tag, replace(json_search(tag, 'one', old.id), '"', '')
)
WHERE json_search(tag, 'one', old.id) IS NOT NULL;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` mediumtext NOT NULL,
  `nama` varchar(50) NOT NULL,
  `photo` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `role` enum('admin','moderator') NOT NULL,
  `jml_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `photo`, `email`, `no_hp`, `role`, `jml_artikel`) VALUES
(1, 'admin_ganteng', '$2y$10$Y8xgyXmg4hO3ebgPqf7wHO.NG.pwCN.CCaiOKFxn.j6gGWG4Kxlbe', 'Admin Paling Ganteng', 'null', 'admin@this.web', 9382, 'admin', 11),
(14, 'admin_ganteng3', '$2y$10$Bt.AJN/Rzm6l5ys84ZylHO74vRSjzkiniZvRPoOeKvUB/VNVdttji', 'awdasdsdas', '', 'email@email.com', 2147483647, 'moderator', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`) USING HASH;

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_akses`
--
ALTER TABLE `log_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_dislike`
--
ALTER TABLE `riwayat_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_komen`
--
ALTER TABLE `riwayat_komen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_like`
--
ALTER TABLE `riwayat_like`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting_web`
--
ALTER TABLE `setting_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_tag` (`nama`) USING HASH;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `log_akses`
--
ALTER TABLE `log_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat_dislike`
--
ALTER TABLE `riwayat_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_komen`
--
ALTER TABLE `riwayat_komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `riwayat_like`
--
ALTER TABLE `riwayat_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
