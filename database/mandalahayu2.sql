-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 07:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mandalahayu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_berita` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `berita` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl_berita`, `gambar`, `berita`) VALUES
(1, 'Contoh', '01-05-2018', '../berita/resi2.jpg', '<p><strong>Now you can browse privately</strong>, and other people who use this device won&rsquo;t see your activity. However, downloads and bookmarks will be saved. Learn more Chrome won&rsquo;t save the following information: Your browsing history Cookies and site data Information entered in forms Your activity might still be visible to: Websites you visit Your employer or school Your internet service provider</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_biaya` int(10) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `biaya_pendaftaran` varchar(50) NOT NULL,
  `uang_gedung` varchar(20) NOT NULL,
  `biaya_mos` varchar(50) NOT NULL,
  `biaya_spp` varchar(50) NOT NULL,
  `seragam_putih_abu` varchar(50) NOT NULL,
  `seragam_olahraga` varchar(50) NOT NULL,
  `seragam_batik` varchar(50) NOT NULL,
  `seragam_pramuka` varchar(50) NOT NULL,
  `baju_muslim` varchar(50) NOT NULL,
  `topi` varchar(50) NOT NULL,
  `dasi` varchar(50) NOT NULL,
  `ikat_pinggang` varchar(50) NOT NULL,
  `kbm_pramuka` varchar(50) NOT NULL,
  `kbm_praktek` varchar(50) NOT NULL,
  `kbm_ekstra` varchar(50) NOT NULL,
  `total_pangkal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `tahun_pelajaran`, `biaya_pendaftaran`, `uang_gedung`, `biaya_mos`, `biaya_spp`, `seragam_putih_abu`, `seragam_olahraga`, `seragam_batik`, `seragam_pramuka`, `baju_muslim`, `topi`, `dasi`, `ikat_pinggang`, `kbm_pramuka`, `kbm_praktek`, `kbm_ekstra`, `total_pangkal`) VALUES
(1, '2018 / 2019', '100000', '1600000', '200000', '250000', '76000', '92000', '45000', '93000', '54000', '15000', '10000', '15000', '200000', '200000', '200000', '3050000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_calon_murid`
--

CREATE TABLE `tbl_data_calon_murid` (
  `id_calon_murid` int(10) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `anak_ke` varchar(20) NOT NULL,
  `status_perwalian` varchar(50) NOT NULL,
  `perwalian_oleh` varchar(20) NOT NULL,
  `jml_saudara_kandung` int(10) NOT NULL,
  `jml_saudara_tiri` int(10) NOT NULL,
  `jml_saudara_angkat` int(10) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon_rumah` varchar(20) NOT NULL,
  `status_tinggal` varchar(20) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `transportasi` varchar(30) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nomor_ijazah` varchar(20) NOT NULL,
  `tgl_ijazah` varchar(20) NOT NULL,
  `lama_belajar` varchar(20) NOT NULL,
  `jml_un` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `kelainan` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `kewarganegaraan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `kewarganegaraan_ibu` varchar(50) NOT NULL,
  `alamat_orangtua` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `pengeluaran` varchar(50) NOT NULL,
  `jml_keluarga_kerja` int(10) NOT NULL,
  `jml_keluarga_menikah` int(10) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tgl_lahir_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(50) NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `kewarganegaraan_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `nomor_hp_wali` varchar(20) NOT NULL,
  `pengeluaran_wali` varchar(50) NOT NULL,
  `jml_wali_kerja` int(20) NOT NULL,
  `jml_wali_menikah` int(20) NOT NULL,
  `kesenian` varchar(100) NOT NULL,
  `olahraga` varchar(100) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `hasta_karya` varchar(100) NOT NULL,
  `bakat_lulus` varchar(100) NOT NULL,
  `cita_cita` varchar(100) NOT NULL,
  `tgl_daftar` varchar(20) NOT NULL,
  `syarat_nisn` varchar(50) NOT NULL,
  `syarat_ijazah` varchar(50) NOT NULL,
  `syarat_kk` varchar(50) NOT NULL,
  `syarat_akte` varchar(50) NOT NULL,
  `syarat_foto` varchar(50) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_calon_murid`
--

INSERT INTO `tbl_data_calon_murid` (`id_calon_murid`, `tahun_pelajaran`, `prodi`, `nisn`, `nama`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `status_perwalian`, `perwalian_oleh`, `jml_saudara_kandung`, `jml_saudara_tiri`, `jml_saudara_angkat`, `status_keluarga`, `bahasa`, `alamat`, `telepon_rumah`, `status_tinggal`, `jarak`, `transportasi`, `asal_sekolah`, `nomor_ijazah`, `tgl_ijazah`, `lama_belajar`, `jml_un`, `berat_badan`, `tinggi_badan`, `goldar`, `penyakit`, `kelainan`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `pendidikan_ayah`, `kewarganegaraan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `pendidikan_ibu`, `kewarganegaraan_ibu`, `alamat_orangtua`, `nomor_hp`, `pengeluaran`, `jml_keluarga_kerja`, `jml_keluarga_menikah`, `nama_wali`, `tempat_lahir_wali`, `tgl_lahir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `pendidikan_wali`, `kewarganegaraan_wali`, `alamat_wali`, `nomor_hp_wali`, `pengeluaran_wali`, `jml_wali_kerja`, `jml_wali_menikah`, `kesenian`, `olahraga`, `organisasi`, `hasta_karya`, `bakat_lulus`, `cita_cita`, `tgl_daftar`, `syarat_nisn`, `syarat_ijazah`, `syarat_kk`, `syarat_akte`, `syarat_foto`, `kode_daftar`, `status`) VALUES
(25, '2018 / 2019', 'Teknik Komputer dan Jaringan', '99287888', 'Erma Noviana', 'Erma', 'Perempuan', 'Magelang', '1996-11-12', 'Islam', 'Indonesia', '1', 'Anak Kandung', 'Ayah', 1, 0, 0, 'Tidak Yatim/Piatu/Ya', 'Indonesia', 'Bekasi', '087981711', 'Dengan Orangtua/Wali', '21', 'Motor', 'SMP Negeri 18 Bekasi ', '67867', '2018-04-19', '3', '32', '34', '160', '-', 'Tidak ada', 'Tidak ada', 'Ayah', 'Boyolali', '2018-04-06', 'Pekerjaan Ayah', '8989888888', 'Pendidikan', 'Indonesia', 'Ibu', 'Magelang', '2018-04-17', 'Pekerjaan', '89798987', 'Pendidikan Ibu', 'Indonesia', 'Bekasi', '098765432345678', '59876567890', 1, 2, '', '', '', '', '', '', '', '', '', '', 0, 0, 'Kesenian', 'Olahraga', 'Organisasi', 'Hasta', 'Bakat', 'Cita cita', '03-04-2018', '0', '0', '0', '0', '0', 3227, 0),
(26, '2018 / 2019', 'Teknik Komputer dan Jaringan', '23452222121', 'Rina Panduwinata', 'Rina', 'Perempuan', 'Bekasi', '2018-04-02', 'Islam', 'Indonesia', '1', 'Anak Kandung', 'Ayah', 1, 0, 1, 'Tidak Yatim/Piatu/Ya', 'Indonesia', 'Bekasi', '087656789', 'Dengan Orangtua/Wali', '10 km', 'Motor', 'SMP Negri 2', 'SU-987890', '2018-04-10', '3 Tahun', '32', '43', '160', 'O', 'Tidak Ada', 'Tidak Ada', 'Tono', 'Bekasi', '2018-04-24', 'PNS', '12090900', 'S1', 'Indonesia', 'Disa', 'Bogor', '2018-04-07', 'Ibu Rumah Tangga', '0', 'S1', 'Indonesia', 'Bekasi', '076789', '20909000', 2, 1, '', '', '', '', '', '', '', '', '', '', 0, 0, 'Menari', 'Bulutangkis', 'Tidak ada', 'Tidak ada', 'Menari ', 'Guru', '28-04-2018', '0', '../ijazah/643x0w.jpg', '../kartu-keluarga/244167369025212.png', '../akte/bigstock-blue-paint-splash-isolated-on-530', '../foto/cinta-musik-indonesia.jpg', 5486, 0),
(27, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/220px-Sangkuriang1-300x197.jpg', '../ijazah/', '../kartu-keluarga/', '../akte/', '../foto/', 2188, 0),
(28, '2018 / 2019', 'Teknik Komputer dan Jaringan', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/blue-paint-strokes-28651-2560x1440.jpg', '../ijazah/7406f7085ce6db391211bb9d22f5f3c6--appsto', '../kartu-keluarga/081c47a3146a68c528681080aebc8cb2', '../akte/24b99ccf5c3a55ec4579d7ede01abb36.jpg', '../foto/', 9650, 0),
(29, '2018 / 2019', 'Teknik Komputer dan Jaringan', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/4g-network.jpg', '../ijazah/081c47a3146a68c528681080aebc8cb2.png', '../kartu-keluarga/220px-Sangkuriang1-300x197.jpg', '../akte/', '0', 8250, 0),
(30, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '0', '../ijazah/220px-Sangkuriang1-300x197.jpg', '0', '0', '0', 2782, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_murid`
--

CREATE TABLE `tbl_data_murid` (
  `id_murid` int(15) NOT NULL,
  `id_calon_murid` int(10) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `nisn` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `status_perwalian` varchar(50) NOT NULL,
  `perwalian_oleh` varchar(20) NOT NULL,
  `jml_saudara_kandung` int(10) NOT NULL,
  `jml_saudara_tiri` int(10) NOT NULL,
  `jml_saudara_angkat` int(10) NOT NULL,
  `status_keluarga` varchar(30) NOT NULL,
  `bahasa` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon_rumah` int(20) NOT NULL,
  `status_tinggal` varchar(20) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `transportasi` varchar(30) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nomor_ijazah` varchar(20) NOT NULL,
  `tgl_ijazah` varchar(20) NOT NULL,
  `lama_belajar` varchar(20) NOT NULL,
  `jml_un` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `kelainan` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `kewarganegaraan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `kewarganegaraan_ibu` varchar(50) NOT NULL,
  `alamat_orangtua` varchar(100) NOT NULL,
  `nomor_hp` int(20) NOT NULL,
  `pengeluaran` varchar(50) NOT NULL,
  `jml_keluarga_kerja` int(10) NOT NULL,
  `jml_keluarga_menikah` int(10) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tgl_lahir_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(30) NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `kewarganegaraan_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `nomor_hp_wali` int(20) NOT NULL,
  `pengeluaran_wali` varchar(50) NOT NULL,
  `jml_wali_kerja` int(20) NOT NULL,
  `jml_wali_menikah` int(20) NOT NULL,
  `kesenian` varchar(100) NOT NULL,
  `olahraga` varchar(100) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `hasta_karya` varchar(100) NOT NULL,
  `bakat_lulus` varchar(100) NOT NULL,
  `cita_cita` varchar(50) NOT NULL,
  `tgl_daftar` varchar(20) NOT NULL,
  `kode_daftar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_murid`
--

INSERT INTO `tbl_data_murid` (`id_murid`, `id_calon_murid`, `tahun_pelajaran`, `prodi`, `nisn`, `nama`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `status_perwalian`, `perwalian_oleh`, `jml_saudara_kandung`, `jml_saudara_tiri`, `jml_saudara_angkat`, `status_keluarga`, `bahasa`, `alamat`, `telepon_rumah`, `status_tinggal`, `jarak`, `transportasi`, `asal_sekolah`, `nomor_ijazah`, `tgl_ijazah`, `lama_belajar`, `jml_un`, `berat_badan`, `tinggi_badan`, `goldar`, `penyakit`, `kelainan`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `pendidikan_ayah`, `kewarganegaraan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `pendidikan_ibu`, `kewarganegaraan_ibu`, `alamat_orangtua`, `nomor_hp`, `pengeluaran`, `jml_keluarga_kerja`, `jml_keluarga_menikah`, `nama_wali`, `tempat_lahir_wali`, `tgl_lahir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `pendidikan_wali`, `kewarganegaraan_wali`, `alamat_wali`, `nomor_hp_wali`, `pengeluaran_wali`, `jml_wali_kerja`, `jml_wali_menikah`, `kesenian`, `olahraga`, `organisasi`, `hasta_karya`, `bakat_lulus`, `cita_cita`, `tgl_daftar`, `kode_daftar`) VALUES
(2018001, 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', 0),
(2018002, 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', 0),
(2018003, 0, '', '', 0, 'asdfghjkl', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `balasan` varchar(500) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `nama`, `email`, `comment`, `balasan`, `tanggal`) VALUES
(17, 'Erma Noviana', 'ermafel@gmail.com', 'Berapa biaya pendaftarannya?', 'Anda bisa melihat info biaya di halaman informasi biaya.', '17-03-2018:10:35:58'),
(18, 'Adi Ramadhan', 'adi@gmail.com', 'Hallo, saya alumni sekolah ini.', 'Hallo :)', '17-03-2018:10:36:28'),
(19, 'Nindy Ami', 'ami@gmail.com', 'Terimakasih sudah menyediakan fasilitas daftar online.', 'Senang bisa membantu anda. Terimakasih kembali.', '17-03-2018:10:36:50'),
(20, 'Agus Budi', 'agus@gmail.com', 'Apakah sekolah ini benar di Bekasi?', 'Benar sekali.', '17-03-2018:10:37:45'),
(21, 'Ari Wibowo', 'ari@gmail.com', 'Apakah saya bisa mentransfer pembayaran?', 'Tentu saja.', '17-03-2018:10:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `tgl_update` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `gambar`, `caption`, `tgl_update`) VALUES
(19, '../galeri/1.JPG', 'Foto gedung SMK Mandalahayu 2 Bekasi, dilihat dari depan lapangan.', '27-03-2018'),
(20, '../galeri/4.JPG', 'Foto gerbang SMK Mandalahayu 2 Bekasi, dilihat dari depan jalan masuk menuju gedung sekolah.', '27-03-2018'),
(21, '../galeri/5.jpg', 'Foto gedung SMK Mandalahayu 2 Bekasi, dilihat dari depan lapangan dengan gambar full gedung.', '27-03-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(10) NOT NULL,
  `id_murid` int(20) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `kode_daftar` int(30) NOT NULL,
  `b_daftar` int(50) NOT NULL,
  `bukti_daftar` varchar(50) NOT NULL,
  `validasi_daftar` int(10) NOT NULL,
  `b_pangkal_lunas` int(10) NOT NULL,
  `bukti_pangkal_lunas` varchar(50) NOT NULL,
  `validasi_pangkal_lunas` int(10) NOT NULL,
  `b_pangkal_cicil1` int(10) NOT NULL,
  `bukti_pangkal_cicil1` varchar(50) NOT NULL,
  `validasi_pangkal_cicil1` int(10) NOT NULL,
  `b_pangkal_cicil2` varchar(10) NOT NULL,
  `bukti_pangkal_cicil2` varchar(50) NOT NULL,
  `validasi_pangkal_cicil2` varchar(10) NOT NULL,
  `b_pangkal_cicil3` varchar(10) NOT NULL,
  `bukti_pangkal_cicil3` varchar(50) NOT NULL,
  `validasi_pangkal_cicil3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `kode_daftar`, `b_daftar`, `bukti_daftar`, `validasi_daftar`, `b_pangkal_lunas`, `bukti_pangkal_lunas`, `validasi_pangkal_lunas`, `b_pangkal_cicil1`, `bukti_pangkal_cicil1`, `validasi_pangkal_cicil1`, `b_pangkal_cicil2`, `bukti_pangkal_cicil2`, `validasi_pangkal_cicil2`, `b_pangkal_cicil3`, `bukti_pangkal_cicil3`, `validasi_pangkal_cicil3`) VALUES
(31, 3227, 1, '../uploads/5cMm2UiN_400x400.jpg', 1, 0, '', 0, 0, '', 0, '', '', '', '', '', ''),
(32, 5486, 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', ''),
(33, 2188, 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', ''),
(34, 9650, 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', ''),
(35, 8250, 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', ''),
(36, 2782, 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `pengumuman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_kelas`
--

CREATE TABLE `tbl_request_kelas` (
  `id_request_kelas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(20) NOT NULL,
  `id_murid` int(20) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_pelajaran`
--

CREATE TABLE `tbl_tahun_pelajaran` (
  `id_tahun_pelajaran` int(10) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun_pelajaran`
--

INSERT INTO `tbl_tahun_pelajaran` (`id_tahun_pelajaran`, `tahun_pelajaran`) VALUES
(1, '2018 / 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukuran_baju`
--

CREATE TABLE `tbl_ukuran_baju` (
  `id_ukuran_baju` int(20) NOT NULL,
  `id_murid` int(20) NOT NULL,
  `ukuran_baju` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Tata Usaha', 'tatausaha', '82849c85acf1f4e6e4eec748f0aeddf4', 'tatausaha'),
(3, 'Kepala Sekolah', 'kepalasekolah', '870f669e4bbbfa8a6fde65549826d1c4', 'kepalasekolah'),
(4, 'Erma Noviana', 'ermaerman', '56804d9960eade3d70137caedb51b97e', 'tatausaha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tbl_data_calon_murid`
--
ALTER TABLE `tbl_data_calon_murid`
  ADD PRIMARY KEY (`id_calon_murid`);

--
-- Indexes for table `tbl_data_murid`
--
ALTER TABLE `tbl_data_murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_request_kelas`
--
ALTER TABLE `tbl_request_kelas`
  ADD PRIMARY KEY (`id_request_kelas`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_tahun_pelajaran`
--
ALTER TABLE `tbl_tahun_pelajaran`
  ADD PRIMARY KEY (`id_tahun_pelajaran`);

--
-- Indexes for table `tbl_ukuran_baju`
--
ALTER TABLE `tbl_ukuran_baju`
  ADD PRIMARY KEY (`id_ukuran_baju`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data_calon_murid`
--
ALTER TABLE `tbl_data_calon_murid`
  MODIFY `id_calon_murid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_data_murid`
--
ALTER TABLE `tbl_data_murid`
  MODIFY `id_murid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018004;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_request_kelas`
--
ALTER TABLE `tbl_request_kelas`
  MODIFY `id_request_kelas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tahun_pelajaran`
--
ALTER TABLE `tbl_tahun_pelajaran`
  MODIFY `id_tahun_pelajaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ukuran_baju`
--
ALTER TABLE `tbl_ukuran_baju`
  MODIFY `id_ukuran_baju` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
