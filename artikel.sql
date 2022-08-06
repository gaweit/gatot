-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2021 pada 08.00
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarwithib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `artikel_judul` varchar(150) NOT NULL,
  `artikel_deks` text NOT NULL,
  `artikel_slug` text NOT NULL,
  `artikel_katakunci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `artikel_judul`, `artikel_deks`, `artikel_slug`, `artikel_katakunci`) VALUES
(1, 'Membuat Auto Search Suggestion/Autocomplete Dengan PHP', 'Auto Search Suggestion/Autocomplete sepertinya sudah banyak kamu lihat pada website karena memudahkan seorang user untuk mencari data yang sesuai pada database. Jadi kesannya hampir seperti pencarian google ya!.', 'https://www.belajarwithib.my.id/2021/08/auto-search-suggestion-php.html', 'PHP, Ajax, Search, Autocomplete'),
(2, 'Mengetahui Konsep Dasar React JS', 'Pada tutorial sebelumnya kita sudah mengetahui apa itu React JS dan Bagaimana cara menginstall React JS dan pada artikel ini saya akan membahas mengenai materi dasar untuk melanjutkan belajar mengenai React JS yaitu mengenai konsep dasar dari React JS itu sendiri.', 'https://www.belajarwithib.my.id/2021/08/konsep-dasar-react-js.html', 'ReactJS, React, Javascript'),
(3, 'Konsep Dasar React JS Bagian Form', 'Ini Merupakan lanjutan dari artikel sebelumnya yang berjudul Mengetahui Konsep Dasar React JS, saya harap kamu membaca artikel sebelumnya agar kamu mengerti dengan apa yang saya maksud dan apa yang saya akan sampaikan nanti.', 'https://www.belajarwithib.my.id/2021/08/form-react-js.html', 'ReactJS, JS, React, Javascript, Form'),
(4, 'Multiple Delete Checkbox Dengan PHP', 'Sepertinya fitur multiple delete ini sangat kamu butuhkan ketika sudah membuat website yang sudah banyak menampung data daripada menghapusnya satu-persatu atau menghapus sekaligus lebih baik kita belajar dulu bagaimana cara menghapus banyak data sekali tekan tombol delete.', 'https://www.belajarwithib.my.id/2021/08/multiple-delete-checkbox-.html', 'PHP, Javascipt, Delete, Multiple'),
(5, 'Menampilkan Data Dari Database Menggunakan AJAX', 'Mungkin kalian selama ini menggunakan PHP biasa untuk menampilkan data dari database, nah pada tutorial kali ini agak sedikit mirip tapi kita menampilkan data menggunakan AJAX. Artikel ini sangat singkat mungkin kalian sudah tahu mengenai AJAX jadi kita lanjut saja.', 'https://www.belajarwithib.my.id/2021/07/menampilkan-data-dari-database-ajax.html', 'AJAX, PHP, MYSQLI'),
(6, 'Import Data Excel Ke MySQLi Dengan PHP Dan AJAX', 'Fungsi import ini sangat berguna sekali bagi kalian yang ingin membuat website karena kalian bisa memasukan data sekali banyak dalam 1 file upload saja. Seperti misalnya kamu sedang membangun website pemilihan osis dan kamu bisa saja sih sebenarnya memasukan data 1 per 1 ke database namun hal itu sangat ribet dengan adanya fitur import data ini sangat membantu anda dalam memasukan data pemilih yang sangat banyak.', 'https://www.belajarwithib.my.id/2021/06/import-data-excel-ke-mysqli-dengan-php.html', 'PHP, AJAX, Javascript, Mysqli'),
(7, 'Mengenal 3 Kotak Dialog Pada JavaScript', 'Pada tutorial sebelumnya kita sudah membahas Property Dan Method Objek Tanggal Dalam Javascript dan sekarang kita akan belajar mengenai 3 Kotak Dialog Pada JavaScript.', 'https://www.belajarwithib.my.id/2021/01/kotak-dialog-javascript.html', 'Javascript'),
(8, 'Perbedaan Var, Const Dan Let Pada Javascript', 'Ada beberapa orang yang mungkin bertanya Perbedaan Var, Const Dan Let Pada Javascript karena salah satu orang itu adalah saya dulu jadi saya mau ngeshare sama kalian mengenai Perbedaan Var, Const Dan Let Pada Javascript.', 'https://www.belajarwithib.my.id/2021/01/var-const-dan-let-javascript.html', 'Javascript'),
(9, 'Upload Dan Crop Image Menggunakan PHP Dan AJAX', 'Dalam pengembangan sebuah website mungkin kamu akan membuat fitur upload foto untuk kebutuhan foto profile, dokumen atau hal yang lainnya. Namun mungkin kamu akan menginginkan kalau ukuran foto harus sesuai dengan kebutuhan aplikasi atau kamu ingin membuat fitur upload foto namun foto tersebut harus dicrop terlebih dahulu sebelum diupload keserver maka dari itu saya ingin berbagi tutorial untuk membuat fitur tersebut.', 'https://www.belajarwithib.my.id/2021/06/upload-dan-crop-image-menggunakan-php.html', 'PHP, Javascript, AJAX');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
