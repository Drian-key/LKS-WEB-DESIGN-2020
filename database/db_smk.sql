-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2021 pada 10.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`) VALUES
(1, 'SMKN 1 KEJOBONG SIAP MENYONGSONG REVOLUSI INDUSTRI 4.0', 'Assalamualaikum Warohmatullahi Wabarokatuh\r\nPerkembangan dan perubahan dunia yang begitu cepat perlu diantisipasi dengan menguatkan sumber daya manusia (SDM) melalui Pendidikan. Sekolah Menengah Kejuruan (SMK) sebagai satuan pendidikan vokasi diharapkan memiliki kontribusi yang maksimal dalam penyiapan SDM yang unggul dalam menghadapi revolusi industri 4.0. Revolusi ini ditandai dengan kemajuan teknologi dalam berbagai bidang, khususnya kecerdasan buatan, robot, teknologi nano, komputer kuantum, bioteknologi, Internet of Things, percetakan 3 dimensi (3D), dan pesawat/ kendaraan tanpa awak.SMK Negeri 1 Kejobong sebagai bagian dari komunitas pendidikan kejuruan, terus melakukan inovasi dan perbaikan berkelanjutan (continus improvement) dalam proses pembelajaran (praktik dan teori) untuk menghasilkan tamatan yang kompeten dan dapat diterima di dunia usaha dan dunia industri. Sekolah ini memiliki tiga kompetensi keahlian yaitu: Teknik kendaraan ringan (TKR), Teknik computer jaringan (TKJ) dan Akuntansi menggunakan kurikulum yang sudah diselaraskan dengan kompetensi yang terdapat di industri.Kompetensi soft skill merupakan bagian tak terpisahkan dalam proses pembelajaran di SMK Negeri 1 Kejobong dalam bentuk Pengembangan Pendidikan Karakter (PPK). Pengembangan sekolah secara fisik (Institusional building) dan pengembangan karakter peserta didik (Character Building) dikembangkan secara optimal. Pendidikan karakter berperan besar dalam menentukan keberhasilan siswa untuk menghadapi tantangan di masa depan, baik dalam kehidupan bermasyarakat maupun dalam bekerja. Pengembangan karakter menjadikan siswa menjadi pribadi yang tangguh, tanggon dan tanggap terhadap perkembangan zaman. Siswa yang berkarakter akan teguh dalam berprinsip dan tidak tercerabut dari nilai-nilai budaya bangsa. Kegiatan pembiasaan yang dilakukan disekolah dapat dijadikan modal untuk dikembangkan menjadi budaya kerja di industri.Revolusi Industri 4.0 merupakan tantangan sekaligus peluang bagi lulusan SMK dalam mengimplementasikan kompetensi yang diperoleh di sekolah.Dukungan semua pemangku kepentingan (steak holder) dan dunia usaha dan dunia industry (DUDI) akan semakin menguatkan kompetensi para siswa SMK. SMK Negeri 1 Kejobong Exelence Vocational School. SMK Bisa, SMK Hebat, SMK BISA HEBATWassalamualaikum Warohmatullahi Wabarokatuh tambah'),
(13, 'bebas', 'bebas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `username`, `alamat`, `email`, `komentar`) VALUES
(14, 'riski drian pratama', 'timbang jurang', 'riskidrian1@gmail.com', 'SAYA SANGAT SENANG BERSEKOLAH DI SMK NEGERI 1 KEJOBONG KARENA DI FASILITASI DENGAN SANGAT CUKUP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(22, 'drian', '$2y$10$THmYLUsyYo73gjKEg0MPXuZyyUGbUwkx2m8yXrHkW08NE3Xt04qgm'),
(23, 'kiki', '$2y$10$SWCmXBd1Z3zO2jrT6EE2HeS2mXf44LYMkjjum/8GvQKkdai4swDSC'),
(27, 'riski ', '$2y$10$Cvr8Lpi0fPR0h8x89liPKu07u0lEEp1B4jbXWIKY4lADKkPYIzkQ6'),
(28, 'momo', '$2y$10$RANIMf1Aq9IEz.1x2/uUGu2MOArDC1bazshxMe5FbnM01qVfLnjEu'),
(29, 'dodo', '$2y$10$VgqBV8RscviuQ9mQ75pVnuwVjzk9wI3WUSNe4oRsqtAtNTUDdzKDO'),
(30, 'akun', '$2y$10$/GBjIsCmXmba3bwyuMBCYuHA/K19VnH55DTKtO4XO2FHOpILTEGg.'),
(31, 'keyy', '$2y$10$4ijjPTWFB1TDvfSXepaRcuBrgkS5UgcJ.OuwF.l2/g.gROq7SJnkq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
