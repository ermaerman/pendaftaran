-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 05:31 PM
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
  `gambar` varchar(200) NOT NULL,
  `berita` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl_berita`, `gambar`, `berita`) VALUES
(2, 'Sambutan Ketua Yayasan Mandalahayu', '25-05-2018', '../berita/ketua.jpg', '<p style=\"text-align: justify;\"><strong>Assalamu&rsquo;alaikum Warahmatullahi Wabarakatuh, </strong></p>\r\n<p style=\"text-align: justify;\"><strong>Salam Sejahtera, </strong></p>\r\n<p style=\"text-align: justify;\">Segala puja dan puji kita panjatkan kehadirat Tuhan Yang Maha Kuasa, DIA lah Tuhan yang pantas kita sembah, dan kepada-Nya kita berharap dan memohon perlindungan. Melihat perkembangan Ilmu Pengetahuan dan perubahan perilaku sosial yang semakin global dan cepat, sudah selayaknya kita perlu mempersiapkan diri agar perkembangan atau perubahan tersebut dapat dimengerti dan dijawab secara baik dan benar, terutama bagi putra-putri kita untuk menjalani proses hidup dan kehidupan di masa yang akan datang. Proses kehidupan di masa yang akan datang adalah proses implementasi diri yang penuh dengan berbagai macam tantangan dan rintangan. Tantangan dalam mengikuti Perkembangan Ilmu Pengetahuan dan rintangan dalam menghadapi perilaku moral. Memang sangat beralasan bagi para orang tua, bahwa anak-anaknya diharapkan dapat menjalani proses kehidupan secara baik dan benar, proporsional dan professional.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Mewujudkan generasi yang cinta alam, cerdas dan unggul dalam sains dan teknologi adalah Visi Pendidikan Yayasan Mandalahayu. Visi ini dibuat berlandaskan pada kajian berbagai macam bidang Ilmu Pengetahuan, yang dilatarbelakangi harapan terbentuknya kepribadian dan perilaku anak yang memiliki Ilmu Pengetahuan dan Akhlaq. Sebuah Lembaga Pendidikan berkewajiban melakukan pembinaan, pembentukan dan pengembangan potensi dasar yang dimiliki oleh setiap anak agar dapat digunakan secara baik dan proposional. Kerja sama yang baik di antara kita adalah modal utama dalam pembinaan dan pengembangan potensi dasar anak. Kehadiran website ini adalah merupakan bagian yang tak terpisahkan dari pelayanan upaya Yayasan untuk memenuhi segala kebutuhan penunjang akademik. Semoga media ini bisa membantu masyarakat luas untuk dapat melihat serta mendapatkan akses informasi perkembangan Yayasan Mandalahayu dimasa sekarang dan akan datang.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Wassalamu&rsquo;alaikum Warahmatullahi Wabarakatuh</strong></p>'),
(3, 'Sambutan Kepala Sekolah SMK Mandalahayu II Bekasi', '25-05-2018', '../berita/manda.png', '<p style=\"text-align: justify;\"><strong>Alhamdulillahi robbil alamin</strong> kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat www.smk-mandalahayu-2-bekasi.com dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Mandalahayu II Bekasi yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami. Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut. Saya berharap</p>\r\n<p style=\"text-align: justify;\">Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>\r\n<p style=\"text-align: justify;\"><strong>Terima kasih semoga Allah &lsquo;Azza Wa Jalla menyertai doa kita semua&hellip;&hellip;amin.</strong></p>'),
(4, 'sss', '20-07-2018', '../berita/7406f7085ce6db391211bb9d22f5f3c6--appstore-for-android-hay-day.jpg', 'ss');

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
  `total_pangkal` varchar(50) NOT NULL,
  `daftar_ulang1` varchar(50) NOT NULL,
  `daftar_ulang2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `tahun_pelajaran`, `biaya_pendaftaran`, `uang_gedung`, `biaya_mos`, `biaya_spp`, `seragam_putih_abu`, `seragam_olahraga`, `seragam_batik`, `seragam_pramuka`, `baju_muslim`, `topi`, `dasi`, `ikat_pinggang`, `kbm_pramuka`, `kbm_praktek`, `kbm_ekstra`, `total_pangkal`, `daftar_ulang1`, `daftar_ulang2`) VALUES
(3, '2018 / 2019', '100000', '1732000', '200000', '200000', '56000', '72000', '45000', '47000', '63000', '15000', '10000', '10000', '200000', '200000', '200000', '3050000', '1700000', '2100000');

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
  `syarat_nisn` varchar(100) NOT NULL,
  `syarat_ijazah` varchar(100) NOT NULL,
  `syarat_kk` varchar(100) NOT NULL,
  `syarat_akte` varchar(100) NOT NULL,
  `syarat_foto` varchar(100) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_calon_murid`
--

INSERT INTO `tbl_data_calon_murid` (`id_calon_murid`, `tahun_pelajaran`, `prodi`, `nisn`, `nama`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `status_perwalian`, `perwalian_oleh`, `jml_saudara_kandung`, `jml_saudara_tiri`, `jml_saudara_angkat`, `status_keluarga`, `bahasa`, `alamat`, `telepon_rumah`, `status_tinggal`, `jarak`, `transportasi`, `asal_sekolah`, `nomor_ijazah`, `tgl_ijazah`, `lama_belajar`, `jml_un`, `berat_badan`, `tinggi_badan`, `goldar`, `penyakit`, `kelainan`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `pendidikan_ayah`, `kewarganegaraan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `pendidikan_ibu`, `kewarganegaraan_ibu`, `alamat_orangtua`, `nomor_hp`, `pengeluaran`, `jml_keluarga_kerja`, `jml_keluarga_menikah`, `nama_wali`, `tempat_lahir_wali`, `tgl_lahir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `pendidikan_wali`, `kewarganegaraan_wali`, `alamat_wali`, `nomor_hp_wali`, `pengeluaran_wali`, `jml_wali_kerja`, `jml_wali_menikah`, `kesenian`, `olahraga`, `organisasi`, `hasta_karya`, `bakat_lulus`, `cita_cita`, `tgl_daftar`, `syarat_nisn`, `syarat_ijazah`, `syarat_kk`, `syarat_akte`, `syarat_foto`, `kode_daftar`, `status`) VALUES
(25, '2018 / 2019', 'TKJ', '99287888', 'Erma Noviana', 'Erma', 'Perempuan', 'Magelang', '1996-11-12', 'Islam', 'Indonesia', '1', 'Anak Kandung', 'Ayah', 1, 0, 0, 'Tidak Yatim/Piatu/Ya', 'Indonesia', 'Bekasi', '087981711', 'Dengan Orangtua/Wali', '21', 'Motor', 'SMP Negeri 18 Bekasi ', '67867', '2018-04-19', '3', '32', '34', '160', '-', 'Tidak ada', 'Tidak ada', 'Ayah', 'Boyolali', '2018-04-06', 'Pekerjaan Ayah', '8989888888', 'Pendidikan', 'Indonesia', 'Ibu', 'Magelang', '2018-04-17', 'Pekerjaan', '89798987', 'Pendidikan Ibu', 'Indonesia', 'Bekasi', '098765432345678', '59876567890', 1, 2, '', '', '', '', '', '', '', '', '', '', 0, 0, 'Kesenian', 'Olahraga', 'Organisasi', 'Hasta', 'Bakat', 'Cita cita', '03-04-2018', '../nisn/bgsheep.jpg', '../ijazah/11.png', '../kartu-keluarga/bgsheep.jpg', '../akte/1.jpeg', '../foto/cinta-musik-indonesia.jpg', 3227, 1),
(26, '2018 / 2019', 'Teknik Komputer dan Jaringan', '23452222121', 'Rina Panduwinata', 'Rina', 'Perempuan', 'Bekasi', '2018-04-02', 'Islam', 'Indonesia', '1', 'Anak Kandung', 'Ayah', 1, 0, 1, 'Tidak Yatim/Piatu/Ya', 'Indonesia', 'Bekasi', '087656789', 'Dengan Orangtua/Wali', '10 km', 'Motor', 'SMP Negri 2', 'SU-987890', '2018-04-10', '3 Tahun', '32', '43', '160', 'O', 'Tidak Ada', 'Tidak Ada', 'Tono', 'Bekasi', '2018-04-24', 'PNS', '12090900', 'S1', 'Indonesia', 'Disa', 'Bogor', '2018-04-07', 'Ibu Rumah Tangga', '0', 'S1', 'Indonesia', 'Bekasi', '076789', '20909000', 2, 1, '', '', '', '', '', '', '', '', '', '', 0, 0, 'Menari', 'Bulutangkis', 'Tidak ada', 'Tidak ada', 'Menari ', 'Guru', '28-04-2018', '0', '../ijazah/643x0w.jpg', '../kartu-keluarga/244167369025212.png', '../akte/bigstock-blue-paint-splash-isolated-on-530', '../foto/cinta-musik-indonesia.jpg', 5486, 0),
(27, '2018 / 2019', 'Multimedia', '090766123456', 'Annisa Dwi Rosalina', 'Annisa', 'Perempuan', 'Jakarta', '1997-10-23', 'Islam', 'Indonesia', '2', 'Anak Kandung', 'Ayah', 1, 0, 0, 'Tidak Yatim/Piatu/Ya', 'Bahasa Ibu', 'Komplek Danamon', '021845344', 'Dengan Orangtua/Wali', '20km', 'Jalan kaki', 'SMP n 23', '01920813902', '2012-01-09', '2 tahun', '6.00', '45kg', '168', 'b', 'nop', 'nop', 'Rus', 'pekanbaru', '2018-05-18', 'Bos perusahaan mafia', '1000000000', 's3', 'Australia', 'Nur', 'sumbawa', '1986-05-17', 'ibu rumah tangga', '10000000', 's3', 'malaysia', 'danamon', '081923452345', '100000000', 3, 2, 'nop', '', '', '', '', '', '', '', '', '', 0, 0, 'menyanyi, menari', 'berenang', 'remaja masjid', 'lukisan monalisa', 'berbicara', 'dokter', '23-05-2018', '../nisn/3.jpg', '../ijazah/7ff7947123fa9884a2029b0555aff3f7.jpg', '../kartu-keluarga/5.jpg', '../akte/11.png', '../foto/a.jpg', 5775, 0),
(28, '2018 / 2019', 'Teknik Komputer dan Jaringan', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '0', '0', '0', '0', '0', 1766, 0),
(29, '2018 / 2019', 'Multimedia', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '0', '0', '0', '0', '0', 4785, 0),
(30, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/7ff7947123fa9884a2029b0555aff3f7.jpg', '0', '0', '0', '0', 5860, 0),
(31, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '0', '0', '0', '0', '0', 6436, 0),
(32, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/6.JPG', '../ijazah/4.JPG', '0', '../akte/5.jpg', '../foto/5cMm2UiN_400x400.jpg', 9829, 0),
(33, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', 'Dinda', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/11.png', '../ijazah/11.png', '../kartu-keluarga/11.png', '0', '../foto/11.png', 2375, 0),
(34, '-- Pilih Tahun Pelaj', '-- Pilih Program Studi --', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/2.JPG', '0', '0', '0', '../foto/5.jpg', 2451, 0),
(35, '2018 / 2019', 'Multimedia', '090766123456', 'Annisa Dwi Rosalina', 'Nama Panggilan', 'Laki-laki', 'Jakarta', '2018-05-10', 'Islam', 'Indonesia', '2', 'Anak Kandung', 'Ayah', 1, 0, 0, 'Tidak Yatim/Piatu/Ya', 'Bahasa Ibu', 'Komplek Danamon', '4', 'Dengan Orangtua/Wali', '20km', 'Jalan kaki', 'SMP n 23', '01920813902', '2018-05-10', '2 tahun', '6.00', '45kg', '168', 'b', 'nop', 'nop', 'Rus', 'pekanbaru', '2018-05-26', 'Bos perusahaan mafia', '1000000000', 's3', 'Australia', 'Nur', 'sumbawa', '2018-05-22', 'ibu rumah tangga', '10000000', 's3', 'malaysia', 'danamon', '081923452345', '100000000', 3, 2, 'nop', '', '', '', '', '', '', '', '', '', 0, 0, 'menyanyi, menari', 'berenang', 'remaja masjid', 'lukisan monalisa', 'berbicara', 'dokter', '25-05-2018', '../nisn/7ff7947123fa9884a2029b0555aff3f7.jpg', '../ijazah/3.jpg', '0', '0', '../foto/11.png', 5252, 0),
(36, '2018 / 2019', 'Multimedia', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/7ff7947123fa9884a2029b0555aff3f7.jpg', '0', '0', '0', '0', 1981, 1),
(37, '2018 / 2019', 'Multimedia', '', 'Rina', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '../nisn/5.jpg', '0', '0', '0', '0', 5436, 0),
(38, '2018 / 2019', 'Multimedia', '789789', 'line getrich', 'lgr', 'Perempuan', 'korea', '2018-06-20', 'Islam', 'hgj', '6', 'Anak Kandung', 'uuy', 8, 8, 8, 'Tidak Yatim/Piatu/Ya', 'hgh', 'hbh', '8799', 'Dengan Orangtua/Wali', '767', 'hgjhghgjh', 'hgjhghjg', '76876', '2018-06-09', 'hg', 'hgjh', 'hgh', 'hgh', 'jhhgj', 'jgjhg', 'jgjhg', 'bjhb', 'jhg', '2018-06-14', 'hghjg', 'hgjhgj', 'jgjhg', 'hgjgh', 'jhgjhgh', 'gjghj', '2018-06-07', 'htgy', 'guyg', 'yg', 'g', 'g', '7687', 'g', 0, 7687, 'hgh', '', '', '', '', '', '', '', '', '', 0, 0, 'gfhg', 'hgfhg', 'gfh', 'ggfghf', 'gfghf', 'gfhg', '29-06-2018', '../nisn/', '0', '../kartu-keluarga/leaderboard-icon-27.png', '0', '0', 5897, 1),
(39, '2018 / 2019', 'Multimedia', '12345', 'Rendi', 'rendi', 'Laki-laki', 'bekasi', '2018-07-17', 'Islam', 'indonesia', '2', 'Anak Kandung', 'ayah', 2, 1, 2, 'Tidak Yatim/Piatu/Ya', 'indonesia', 'bekasi', '7982701821', 'Dengan Orangtua/Wali', '12', 'mobil', 'smp sjs', '9282', '2018-07-11', '2', '21', '12', '111', 'q', '', '', 'hayah', 'h', '2018-07-06', 'jh', 'jh', 'jhj', 'j', 'j', 'j', '2018-07-02', 'hj', 'jh', 'j', 'h', 'jj', '2', 'j', 0, 0, 'j', 'j', '2018-07-19', 'hgf', 'h', 'h', 'h', 'h', '', 'h', 0, 0, 'u', 'u', 'u', 'u', 'u', 'u', '16-07-2018', '../nisn/', '0', '0', '0', '../foto/IMG-20180515-WA0067.jpg', 8106, 0),
(40, '2018 / 2019', 'Multimedia', '6876786', 'Ibnu Hermawan', 'ibnu', 'Laki-laki', 'bekasi', '2018-07-08', 'Islam', 'indonesia', '2', 'Anak Kandung', 'ayah', 1, 0, 0, 'Tidak Yatim/Piatu/Ya', 'indonesia', 'bekasi', '897987978', 'Dengan Orangtua/Wali', '10', 'motor', 'smp', 'uyui111', '2018-07-17', '3', 'jhj', '65', '65', 'hj', 'jhh', 'jhj', 'jh', 'j', '2018-07-10', 'hg', 'jg', 'h', 'jgh', 'hgj', 'hg', '2018-07-02', 'hg', 'gh', 'hg', 'h', 'h', '876', 'h', 7, 0, 'yt', 'y', '', '', '', '', '', '', '', '', 0, 0, 'hg', 'hg', 'hgh', 'gh', 'hg', 'gh', '16-07-2018', '../nisn/', '0', '0', '0', '../foto/movie.png', 4681, 1),
(41, '2018 / 2019', 'Multimedia', '12345678910', 'Ari Luqman', 'Ari', 'Laki-laki', 'Bekasi', '1998-10-21', 'Islam', 'Indonesia', '2', 'Anak Kandung', 'orang tua', 1, 0, 0, '-- Pilih Status Kelu', 'indonesia', 'kayuringin jaya, bekasi selatan', '', 'Dengan Orangtua/Wali', '10', 'motor', 'smpn 4 bekasi', '09092092930193012', '2018-07-09', '3', '3,60', '40', '170', 'A', '', '', 'onsirtus', 'Jakarta', '1979-04-05', 'wiraswasta', '3500000', 'SLTA', 'indonesia', 'marni', 'ngawi', '1981-07-17', 'wiraswasta', '3000000', 'sd', 'indonesia', 'kayuringin jaya, bekasi selatan', '089123456789', '3000000', 3, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 'main musik', 'volly, basket, futsal, badminton', '', '', '', '', '17-07-2018', '../nisn/', '0', '0', '0', '0', 7690, 1),
(42, '2018 / 2019', 'Multimedia', '11212121', 'ghjg', 'gh', 'Perempuan', 'ss', '2018-07-13', 'Islam', 'ss1', '1', 'Anak Kandung', 'aa', 11, 1, 1, 'Tidak Yatim/Piatu/Ya', 'dsdds', 'hgjh', '768786', 'Dengan Orangtua/Wali', '657', 'hgjh', 'hgjh', 'hgjhg', '2018-07-11', 'hg', 'hgjh', '11', '67', 'hjhj', 'jhk', 'jhkhjk', 'jhk', 'jhk', '2018-07-05', 'ghjhgjgh', 'hgjhg', 'hghjg', 'ghgjhg', 'hgjh', 'jghj', '2018-07-03', 'hg', 'hgjh', 'hgh', 'g', 'h', '676', 'h', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 'hgj', 'hg', 'hg', 'hg', 'hg', 'hgh', '20-07-2018', '../nisn/', '0', '0', '0', '../foto/184367309.jpg', 8225, 0),
(43, '2018 / 2019', 'Multimedia', '1827192718', 'raisa', 'raisa', 'Perempuan', 'ajahja', '2018-07-05', 'Islam', 'aa1', '1', 'Anak Kandung', 'ssq', 7, 7, 7, 'Tidak Yatim/Piatu/Ya', 'khgjh', 'gjg', '879', 'Dengan Orangtua/Wali', '87', 'jhghjg', 'hgjhg', 'jghjg', '2018-07-18', 'khj', 'khk', 'khkj', 'khk', 'kkk', 'kkk', 'khk', 'jhk', 'khkj', '2018-07-03', 'hghjg', 'jghjg', 'jghjh', 'jhgjh', 'jhgj', 'g', '2018-07-04', 'jghkjh', 'kjhkjh', 'khjkh', 'khkjh', 'khjh', '76876', 'kghjg', 0, 0, 'hgjhg', 'jhghjg', '2018-07-07', 'hhg', 'jghg', 'jghjg', 'jghjg', 'jghg', '76876', 'hg', 6, 878, 'gh', 'hgjh', 'hgh', 'hgh', 'hgh', 'hg', '20-07-2018', '../nisn/', '0', '0', '0', '../foto/220px-Sangkuriang1-300x197.jpg', 1544, 1);

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
(21, 'Ari Wibowo', 'ari@gmail.com', 'Apakah saya bisa mentransfer pembayaran?', 'Tentu saja.', '17-03-2018:10:44:54'),
(22, 'tes', 'tes@gmail.com', 'teshgadsd', 'gsgf', '19-07-2018:12:30:39'),
(23, 'sss', 'ss@gmail.com', 'hgh', 'ss', '20-07-2018:06:09:07'),
(24, 'sss', 'ss@gmail.com', 'hgh', '', '20-07-2018:06:09:07'),
(25, 'hgjahgs', 'hg@gmail.com', 'gjhgjhghgjhgxjhwgdgwjhsgw', '', '20-07-2018:10:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `tgl_update` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `gambar`, `caption`, `tgl_update`) VALUES
(19, '../galeri/1.JPG', 'Foto gedung SMK Mandalahayu 2 Bekasi, dilihat dari depan lapangan.', '27-03-2018'),
(20, '../galeri/4.JPG', 'Foto gerbang SMK Mandalahayu 2 Bekasi, dilihat dari depan jalan masuk menuju gedung sekolah.', '27-03-2018'),
(21, '../galeri/5.jpg', 'Foto gedung SMK Mandalahayu 2 Bekasi, dilihat dari depan lapangan dengan gambar full gedung.', '27-03-2018'),
(22, '../galeri/blue-paint-strokes-28651-2560x1440.jpg', 'ss', '20-07-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(10) NOT NULL,
  `kode_daftar` int(20) NOT NULL,
  `id_request_kelas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_daftar`, `id_request_kelas`) VALUES
(2, 4681, 1),
(3, 7690, 1),
(4, 7690, 0),
(5, 3227, 2),
(6, 1544, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lks`
--

CREATE TABLE `tbl_lks` (
  `id_lks` int(20) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `lks` varchar(50) NOT NULL,
  `status_buku` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lks`
--

INSERT INTO `tbl_lks` (`id_lks`, `kode_daftar`, `lks`, `status_buku`, `keterangan`) VALUES
(1, 2782, 'g', 'Sudah Diterima', 's'),
(2, 2222, 's', 'Belum Diterima', 'weee'),
(3, 2222, 's', 'Belum Diterima', 'weee'),
(4, 2222, 's', 'Belum Diterima', 'weee'),
(5, 5897, '', '', ''),
(6, 5897, '', '', ''),
(7, 4681, '', '', ''),
(8, 4681, '', '', ''),
(9, 4681, '', '', ''),
(10, 4681, '', '', ''),
(11, 7690, '', '', ''),
(12, 7690, '', '', ''),
(13, 1544, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_naik_kelas`
--

CREATE TABLE `tbl_naik_kelas` (
  `id_naik_kelas` int(10) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `id_request_kelas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `kode_daftar` int(30) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `b_daftar` int(50) NOT NULL,
  `bukti_daftar` varchar(100) NOT NULL,
  `validasi_daftar` int(10) NOT NULL,
  `b_pangkal_lunas` int(10) NOT NULL,
  `bukti_pangkal_lunas` varchar(100) NOT NULL,
  `validasi_pangkal_lunas` int(10) NOT NULL,
  `b_pangkal_cicil1` int(10) NOT NULL,
  `bukti_pangkal_cicil1` varchar(100) NOT NULL,
  `validasi_pangkal_cicil1` int(10) NOT NULL,
  `b_pangkal_cicil2` varchar(10) NOT NULL,
  `bukti_pangkal_cicil2` varchar(100) NOT NULL,
  `validasi_pangkal_cicil2` varchar(10) NOT NULL,
  `b_pangkal_cicil3` varchar(10) NOT NULL,
  `bukti_pangkal_cicil3` varchar(100) NOT NULL,
  `validasi_pangkal_cicil3` varchar(10) NOT NULL,
  `b_daftar_ulang1` int(10) NOT NULL,
  `bukti_daftar_ulang1` varchar(100) NOT NULL,
  `validasi_daftar_ulang1` int(10) NOT NULL,
  `b_daftar_ulang2` int(10) NOT NULL,
  `bukti_daftar_ulang2` varchar(100) NOT NULL,
  `validasi_daftar_ulang2` int(10) NOT NULL,
  `status_pembayaran` int(5) NOT NULL,
  `jenis_pembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `kode_daftar`, `tahun_pelajaran`, `b_daftar`, `bukti_daftar`, `validasi_daftar`, `b_pangkal_lunas`, `bukti_pangkal_lunas`, `validasi_pangkal_lunas`, `b_pangkal_cicil1`, `bukti_pangkal_cicil1`, `validasi_pangkal_cicil1`, `b_pangkal_cicil2`, `bukti_pangkal_cicil2`, `validasi_pangkal_cicil2`, `b_pangkal_cicil3`, `bukti_pangkal_cicil3`, `validasi_pangkal_cicil3`, `b_daftar_ulang1`, `bukti_daftar_ulang1`, `validasi_daftar_ulang1`, `b_daftar_ulang2`, `bukti_daftar_ulang2`, `validasi_daftar_ulang2`, `status_pembayaran`, `jenis_pembayaran`) VALUES
(31, 3227, '', 1, '0', 1, 0, '', 0, 1, '../uploads/cow9.png', 1, '1', '../uploads/fox.gif', '0', '', '', '', 0, '../uploads/movie.png', 0, 0, '../uploads/qwe.jpeg', 0, 0, 0),
(33, 2188, '', 0, '', 0, 1, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(34, 9650, '', 0, '', 0, 0, '', 0, 0, '', 1, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(35, 8250, '', 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(36, 2782, '2019 / 2020', 1, '../uploads/6.JPG', 1, 1, '', 0, 0, '', 1, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(38, 5486, '2018 / 2019', 0, '0', 0, 1, '0', 1, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 1, 1),
(39, 5775, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(40, 1766, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(41, 2375, '-- Pilih Tahun Pelaj', 0, '0', 0, 0, '', 0, 0, '0', 0, '1', '', '1', '1', '', '1', 0, '0', 0, 0, '0', 0, 0, 0),
(42, 2451, '-- Pilih Tahun Pelaj', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '1', 0, '0', 0, 0, '0', 0, 0, 0),
(43, 5252, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(44, 5252, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(45, 5252, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(46, 5252, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(47, 1981, '2018 / 2019', 1, '../uploads/7ff7947123fa9884a2029b0555aff3f7.jpg', 1, 0, '', 0, 0, '', 1, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(48, 5436, '2018 / 2019', 0, '0', 0, 0, '', 0, 0, '0', 0, '', '', '', '', '', '', 0, '0', 1, 0, '0', 0, 0, 0),
(49, 5897, '2018 / 2019', 1, '../uploads/maxresdefault (1).jpg', 1, 0, '../uploads/piala.png', 0, 0, '', 1, '', '', '', '', '', '', 0, '0', 0, 0, '0', 0, 0, 0),
(50, 8106, '2018 / 2019', 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '', 1, 0, '', 1, 0, 0),
(51, 4681, '2018 / 2019', 1, '../uploads/Workshop.jpeg', 1, 0, '', 0, 1, '../uploads/fox.gif', 1, '', '', '', '', '', '', 0, '', 1, 0, '', 0, 1, 1),
(52, 7690, '2018 / 2019', 1, '../uploads/5cMm2UiN_400x400.jpg', 1, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '', 0, 0, '', 0, 0, 0),
(53, 8225, '2018 / 2019', 0, '', 0, 0, '', 0, 0, '', 0, '', '', '', '', '', '', 0, '', 0, 0, '', 0, 0, 0),
(54, 1544, '2018 / 2019', 1, '../uploads/back-button.png', 1, 0, '', 0, 1, '../uploads/184367309.jpg', 1, '0', '0', '0', '1', '../uploads/', '0', 0, '', 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `kode_daftar` int(10) NOT NULL,
  `bahasa_indonesia` int(10) NOT NULL,
  `matematika` int(10) NOT NULL,
  `bahasa_inggris` int(10) NOT NULL,
  `kejuruan` int(10) NOT NULL,
  `buta_warna` varchar(20) NOT NULL,
  `urine` varchar(20) NOT NULL,
  `fisik` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `kode_daftar`, `bahasa_indonesia`, `matematika`, `bahasa_inggris`, `kejuruan`, `buta_warna`, `urine`, `fisik`, `hasil`) VALUES
(16, 3227, 0, 0, 0, 0, 'Lulus', 'Lulus', 'Lulus', '1'),
(17, 2782, 0, 0, 0, 0, 'Lulus', 'Lulus', 'Lulus', '0'),
(18, 2222, 0, 0, 0, 0, 'Lulus', 'Lulus', 'Lulus', '1'),
(19, 5897, 0, 0, 0, 0, 'Lulus', 'Lulus', 'Lulus', '0'),
(20, 4681, 90, 60, 100, 80, 'Lulus', 'Lulus', 'Lulus', '1'),
(21, 7690, 80, 70, 80, 95, 'Lulus', 'Lulus', 'Lulus', '0'),
(23, 1544, 0, 0, 0, 0, 'Lulus', 'Lulus', 'Lulus', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_kelas`
--

CREATE TABLE `tbl_request_kelas` (
  `id_request_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `jumlah_murid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request_kelas`
--

INSERT INTO `tbl_request_kelas` (`id_request_kelas`, `nama_kelas`, `status`, `jumlah_murid`) VALUES
(1, 'X-Multimedia-1', 1, 5),
(2, 'X-TKJ-2', 1, 2),
(3, 'XII-TKJ-2', 1, 2),
(4, 'X-TKJ-4', 1, 12);

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
-- Table structure for table `tbl_tanggal_ujian`
--

CREATE TABLE `tbl_tanggal_ujian` (
  `id_tanggal_ujian` int(10) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `pukul` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `pakaian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggal_ujian`
--

INSERT INTO `tbl_tanggal_ujian` (`id_tanggal_ujian`, `tanggal`, `pukul`, `tempat`, `pakaian`) VALUES
(2, '2018-07-02', '13:00', 'SMK Mandalahayu II Bekasi', 'Putih Biru');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukuran_baju`
--

CREATE TABLE `tbl_ukuran_baju` (
  `id_ukuran_baju` int(20) NOT NULL,
  `kode_daftar` int(20) NOT NULL,
  `ukuran_baju` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ukuran_baju`
--

INSERT INTO `tbl_ukuran_baju` (`id_ukuran_baju`, `kode_daftar`, `ukuran_baju`, `keterangan`) VALUES
(3, 3227, 'S', 'Sudah Diterima'),
(4, 1981, 'L', 'Sudah Diterima'),
(5, 1544, 'M', 'Sudah Diterima');

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
-- Indexes for table `tbl_lks`
--
ALTER TABLE `tbl_lks`
  ADD PRIMARY KEY (`id_lks`);

--
-- Indexes for table `tbl_naik_kelas`
--
ALTER TABLE `tbl_naik_kelas`
  ADD PRIMARY KEY (`id_naik_kelas`);

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
-- Indexes for table `tbl_tanggal_ujian`
--
ALTER TABLE `tbl_tanggal_ujian`
  ADD PRIMARY KEY (`id_tanggal_ujian`);

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
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_data_calon_murid`
--
ALTER TABLE `tbl_data_calon_murid`
  MODIFY `id_calon_murid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_data_murid`
--
ALTER TABLE `tbl_data_murid`
  MODIFY `id_murid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018004;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_lks`
--
ALTER TABLE `tbl_lks`
  MODIFY `id_lks` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_naik_kelas`
--
ALTER TABLE `tbl_naik_kelas`
  MODIFY `id_naik_kelas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_request_kelas`
--
ALTER TABLE `tbl_request_kelas`
  MODIFY `id_request_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `tbl_tanggal_ujian`
--
ALTER TABLE `tbl_tanggal_ujian`
  MODIFY `id_tanggal_ujian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ukuran_baju`
--
ALTER TABLE `tbl_ukuran_baju`
  MODIFY `id_ukuran_baju` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
