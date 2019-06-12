-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jun 2019 pada 18.51
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cesar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `explicit`
--

CREATE TABLE `explicit` (
  `id_explicit` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_explicit` text NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `validasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `explicit`
--

INSERT INTO `explicit` (`id_explicit`, `judul`, `isi_explicit`, `nama_file`, `file`, `tanggal`, `NIP`, `validasi`) VALUES
(5, 'hallo ha', 'hallo', 'BAB II.docx', '../upload/BAB II.docx', '2019-05-19', '9873927364', 'Valid'),
(6, 'dokumen penting', 'dokumen penting', 'proposal tugas kwu.docx', '../upload/proposal tugas kwu.docx', '2019-05-24', '9873927364', 'belum valid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `gejala` text NOT NULL,
  `representasi` int(11) NOT NULL,
  `status` enum('Verified','Pending') NOT NULL DEFAULT 'Verified',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `representasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gejala A', 20, '', '2019-06-08 03:54:52', '2019-06-08 03:54:52'),
(2, 'Gejala B', 50, '', '2019-06-12 16:30:48', '2019-06-12 16:30:48'),
(3, 'Gejala C', 10, '', '2019-06-12 16:31:13', '2019-06-12 16:31:13'),
(4, 'Gejala D', 40, 'Verified', '2019-06-12 16:32:43', '2019-06-12 16:32:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_masalah`
--

CREATE TABLE `gejala_masalah` (
  `id` int(11) NOT NULL,
  `id_masalah` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala_masalah`
--

INSERT INTO `gejala_masalah` (`id`, `id_masalah`, `id_gejala`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2019-06-08 09:02:50', '2019-06-08 09:02:50'),
(2, 5, 3, '2019-06-12 16:34:33', '2019-06-12 16:34:33'),
(3, 5, 4, '2019-06-12 16:34:33', '2019-06-12 16:34:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_reward`
--

CREATE TABLE `item_reward` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(200) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_point` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item_reward`
--

INSERT INTO `item_reward` (`id_item`, `nama_item`, `stok`, `harga_point`, `keterangan`, `foto`) VALUES
(1, 'Duit', 20, 50, 'contoh reward yang ada', '../produk/100 ribu rupiah.jpg'),
(2, 'Duit 2', 14, 60, 'contoh ke dua ', '../produk/uang 100 ribu.jpg'),
(3, 'kardoc', 8, 40, 'contoh lagi yah', '../produk/hrm2.PNG'),
(4, 'mahal', 12, 100, 'barang mahal', '../produk/sotang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'HRD'),
(2, 'wakil HRD'),
(3, 'akuntan'),
(4, 'Managerial'),
(5, 'sekretaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_explicit`
--

CREATE TABLE `komentar_explicit` (
  `id_komentarexplicit` int(11) NOT NULL,
  `id_explicit` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi_komentar` varchar(500) NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar_explicit`
--

INSERT INTO `komentar_explicit` (`id_komentarexplicit`, `id_explicit`, `nip`, `nama`, `isi_komentar`, `tgl_komentar`) VALUES
(1, 5, '1029374839', 'sinta dewi', 'Komentar Telah Dihapus', '2019-05-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_tacit`
--

CREATE TABLE `komentar_tacit` (
  `id_komentartacit` int(11) NOT NULL,
  `id_tacit` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `isi_komentar` varchar(500) NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar_tacit`
--

INSERT INTO `komentar_tacit` (`id_komentartacit`, `id_tacit`, `nip`, `nama`, `isi_komentar`, `tgl_komentar`) VALUES
(2, 14, '9873927364', 'ponco', 'Komentar Telah Dihapus', '2019-05-21'),
(3, 14, '1029374839', 'sinta dewi', 'keren banget', '2019-05-21'),
(4, 13, '9873927364', 'poncos', 'bagus', '2019-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `like_explicit`
--

CREATE TABLE `like_explicit` (
  `id_like_explicit` int(11) NOT NULL,
  `id_explicit` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `like_tacit`
--

CREATE TABLE `like_tacit` (
  `id_like_tacit` int(11) NOT NULL,
  `id_tacit` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `like_tacit`
--

INSERT INTO `like_tacit` (`id_like_tacit`, `id_tacit`, `user_id`) VALUES
(3, 14, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `username`, `nama`, `jenis_kelamin`, `alamat`, `jabatan`) VALUES
('', '', '', '', '', ''),
('080', 'cesariadi', 'cesariadi', 'Laki Laki', 'jalan darmapala', 'wec'),
('118217456238', '', '', '', '', ''),
('12312', '', 'ponco cesariadi', 'Laki Laki', 'wef', 'Kepala HRD'),
('2316546354', 'cesar', 'cesar', 'laki laki', 'aawzdxf', 'OB'),
('2386598346', '', 'admin', 'Laki Laki', 'Jalan Hulubalang II RT 04 Rw 02 No.54', 'Kepala HRD'),
('3216546', '', 'mansyur', 'laki laki', 'jalan darmapala', 'Manager'),
('519561561', '', 'reer', 'www', 'ewfsd', 'adfadf'),
('879646541', '', 'ahmad', 'laki', 'asddfln', 'Kepala HRD'),
('942385643', '', 'cesar', 'laki laki', 'hulubalang 2', 'Kepala HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `problem`
--

CREATE TABLE `problem` (
  `id_problem` int(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `solusi` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `problem`
--

INSERT INTO `problem` (`id_problem`, `problem`, `solusi`, `Tanggal`) VALUES
(4, 'test', '', '2019-06-08'),
(5, 'test masalah lain', '', '2019-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reward`
--

CREATE TABLE `reward` (
  `id_reward` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reward`
--

INSERT INTO `reward` (`id_reward`, `id_item`, `user_id`, `jumlah`, `total`, `status`, `tgl_ambil`) VALUES
(1, 3, 3, 2, 80, 'Sudah Diambil', '2019-05-21'),
(2, 2, 2, 1, 60, 'Sudah Diambil', '2019-05-24'),
(3, 3, 2, 2, 80, 'Sudah Diambil', '2019-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `id_masalah` int(11) NOT NULL,
  `solusi` text NOT NULL,
  `status` enum('Valid','Pending') NOT NULL DEFAULT 'Valid',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id`, `id_masalah`, `solusi`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'wwkwkwk', 'Valid', '2019-06-08 09:02:50', '2019-06-08 09:02:50'),
(2, 5, 'solusi 1 nya', 'Valid', '2019-06-12 16:34:33', '2019-06-12 16:34:33'),
(3, 5, 'solusi 2', 'Valid', '2019-06-12 16:34:33', '2019-06-12 16:34:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tacit_knowledge`
--

CREATE TABLE `tacit_knowledge` (
  `id_tacit` int(40) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_tacit` text NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `validasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tacit_knowledge`
--

INSERT INTO `tacit_knowledge` (`id_tacit`, `judul`, `tanggal`, `isi_tacit`, `NIP`, `validasi`) VALUES
(12, 'cara memasak air', '2019-05-17', 'pakai kompor dan dimasak sampai air mengebul', '9873927364', 'Valid'),
(13, 'cara menanam sayur', '2019-05-17', 'pakai cangkul dan memerlukan tanah dan air serta sinar matahari', '9873927364', 'Valid'),
(14, 'hallo', '2019-05-19', 'hallo', '9873927364', 'Valid'),
(15, 'testing', '2019-05-24', 'testing', '9873927364', 'Valid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `point` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`, `nip`, `nama`, `jenis_kelamin`, `alamat`, `jabatan`, `point`, `foto`) VALUES
(1, 'cesar', 'cesar', 'admin', '1937594037', 'cesar', 'pria', 'jln. srijaya negara', 'HRD', 0, '../profil/Screenshot (57).png'),
(2, 'ponco', 'ponco', 'pegawai', '9873927364', 'poncos', 'pria', 'jln. indralaya', 'wakil HRD', 20, '../profil/Screenshot (58).png'),
(3, 'sinta', 'sinta', 'pegawai', '1029374839', 'sinta dewita', 'wanita', 'jln. lunjuk jaya', 'akuntan', 20, '../profil/Screenshot (59).png'),
(4, 'yanto', 'yanto', 'pegawai_ahli', '9265849372', 'yanto suyantos', 'pria', 'jln. segaran', 'Manager', 40, '../profil/uang 100 ribu.jpg'),
(5, 'budi', 'budi', 'pegawai_ahli', '8976788089', 'budi', 'pria', 'jln.selulo', 'HRD', 0, '../profil/as keriting.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `explicit`
--
ALTER TABLE `explicit`
  ADD PRIMARY KEY (`id_explicit`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_masalah`
--
ALTER TABLE `gejala_masalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_reward`
--
ALTER TABLE `item_reward`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `komentar_explicit`
--
ALTER TABLE `komentar_explicit`
  ADD PRIMARY KEY (`id_komentarexplicit`);

--
-- Indexes for table `komentar_tacit`
--
ALTER TABLE `komentar_tacit`
  ADD PRIMARY KEY (`id_komentartacit`);

--
-- Indexes for table `like_explicit`
--
ALTER TABLE `like_explicit`
  ADD PRIMARY KEY (`id_like_explicit`);

--
-- Indexes for table `like_tacit`
--
ALTER TABLE `like_tacit`
  ADD PRIMARY KEY (`id_like_tacit`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id_problem`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacit_knowledge`
--
ALTER TABLE `tacit_knowledge`
  ADD PRIMARY KEY (`id_tacit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `explicit`
--
ALTER TABLE `explicit`
  MODIFY `id_explicit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gejala_masalah`
--
ALTER TABLE `gejala_masalah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_reward`
--
ALTER TABLE `item_reward`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar_explicit`
--
ALTER TABLE `komentar_explicit`
  MODIFY `id_komentarexplicit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar_tacit`
--
ALTER TABLE `komentar_tacit`
  MODIFY `id_komentartacit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `like_explicit`
--
ALTER TABLE `like_explicit`
  MODIFY `id_like_explicit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like_tacit`
--
ALTER TABLE `like_tacit`
  MODIFY `id_like_tacit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id_problem` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id_reward` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tacit_knowledge`
--
ALTER TABLE `tacit_knowledge`
  MODIFY `id_tacit` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
