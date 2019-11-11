-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 07:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_wandingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(22) NOT NULL,
  `gambar` varchar(22) NOT NULL,
  `judul` text NOT NULL,
  `tgl` date NOT NULL,
  `berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul`, `tgl`, `berita`) VALUES
(16, 'musyawarah.jpg', 'Musyawarah Dusun', '2019-07-15', 'Musyawarah Dusun di Desa Sumber Anyar diadakan untuk menampung aspirasi masyarakat yang digunakan untuk RPJMDES (Rencana Pembangunan Jangka Menengah Desa)  5 tahun kedepan. Musyawarah Desa dimulai pada tanggal 15-20 Juli 2019 adapun hasil musyawarah seperti dibawah ini :\r\nDusun Ranon (15 Juli 2019) \r\nHasil musyawarah : \r\n1.	Prioritas yang diajukan oleh masyarakat yaitu pelebaran jembatan yang menjadi akses utama menuju Dusun Ranon.\r\n2.	Membutuhkan fasilitas MCK (Mandi, Cuci, Kakus) untuk warga Dusun Ranon.\r\n3.	Membutuhkan pemberdayaan (keterampilan) untuk warga Dusun Ranon misalnya keterampilan menjahit untuk wanita serta perbengkelan untuk pria.\r\n4.	Membutuhkan perawatan saluran irigasi.\r\n5.	Memperbaiki rabat (jalan) Dusun Ranon.\r\n\r\nDusun Krajan Timur (16 Juli 2019)\r\nHasil musyawarah :\r\n1.	Pelatihan otomotif bagi warga Dusun Krajan Timur.\r\n2.	Pembangunan DPT (Dinding Penahan Tanah) di dekat rumah Pak Subakti.\r\n3.	Pembangunan saluran air untuk pemukiman warga \r\n4.	Pembangunan rabat (jalan) untuk gang Fatimah yang ada di Dusun Krajan Timur.\r\n5.	Pembangunan MCK (Mandi, Cuci, Kakus) untuk warga Dusun Krajan Timur.\r\n6.	Pembangunan paving untuk jalan gang di pemukiman warga Dusun Krajan Timur.\r\n\r\nDusun Krajan Barat  (17 Juli 2019)\r\nHasil musyawarah :\r\n1.	Dusun Krajan Barat membutuhkan pembangunan WC umum.\r\n2.	Membutuhkan pembangunan gorong-gorong dan saluran air bersih.\r\n3.	Membutuhkan penyediaan tempat pembuangan sampah terpadu.\r\n4.	Membentuk BUMDES (Badan Usaha Milik Desa) yang bertujuan untuk mengurangi pengangguran.\r\n5.	Menciptakan pasar desa untuk meningkatkan perekonomian masyarakat.\r\n6.	Membutuhkan lapangan desa agar dapat menyalurkan minat bakat warga desa.\r\n7.	Membangun BKD (Badan Kredit Desa) untuk membantu warga desa Sumber Anyar.\r\n\r\nDusun Timur Sawah 2 (18 Juli 2019)\r\nHasil musyawarah :\r\n1.	Pembangunan bendungan air untuk menampung air yang berguna sebagai irigasi sawah.\r\n2.	Membutuhkan penerangan untuk jalan menuju kuburan.\r\n3.	Pembangunan jamban umum untuk warga Dusun Timur Sawah 2.\r\n4.	Pembangunan saluran air bersih.\r\n5.	Membutuhkan modal untuk pertukangan.\r\n6.	Pembangunan jalan rabat (jalan) di lingkungan gang masjid.\r\n7.	Membutuhkan perawatan tempat ibadah.\r\n\r\nDusun Timbreng Ulu (19 Juli 2019)\r\nHasil musyawarah :\r\n1.	Pembangunan rabat (jalan) di pemukiman RT 02/RW 08 sepanjang 100 m dengan lebar 2 meter merupakan prioritas dari Dusun Timbreng Ulu.\r\n2.	Perawatan beton jalan Dusun Timbreng Ulu\r\n3.	Membutuhkan bantuan alat mesin jahit.\r\n4.	Membutuhkan bantuan alat pemotong kayu.\r\n5.	Membutuhkan bantuan peternakan sapi atau kambing.\r\n\r\nDusun Timur Sawah 1 (20 Juli 2019)\r\nHasil musywarah :\r\n1.	Membutuhkan penerangan jalan untuk menuju desa campoan.\r\n2.	Pembangunan saluran irigasi dari jalur barat ke utara.\r\n3.	Pembangunan saluran drainase untuk mencegah banjir.\r\n4.	Pembangunan saluran irigasi sawah.\r\n5.	Pembuatan rabat (jalan) dan DPT (Dinding Penahan Tanah).\r\n6.	Pembangunan fasilitas MCK.'),
(18, 'pkk1.PNG', 'Pemberdayaan Kesejahteraan Keluarga', '2019-07-31', 'Pada tanggal 31 Juli 2019 di Desa Sumber Anyar diadakan suatu acara pembinaan Tim Penggerak PKK Desa. Narasumber yang hadir pada acara pembinaan tersebut merupakan Tim Penggerak PKK Kecamatan Mlandingan, Situbondo.  Pokok acara pembinaan PKK Desa yaitu tentang pengisian buku adminitrasi rutin 3 bulan sekali. PKK Desa Sumber Anyar terdapat 4 POKJA, yaitu POKJA I, POKJA II, POKJA III, dan POKJA IV. Pokja I tentang Gotong Royong, POKJA II tentang Pendidikan dan Keterampilan, POKJA III tentang Pemanfaatan Pekarangan , dan POKJA IV tentang Kesehatan.'),
(19, 'posyandu2.PNG', 'Posyandu (Pos Pelayanan Terpadu)', '2019-07-17', 'Posyandu di Desa Sumber Anyar dilakukan secara rutin setiap satu bulan sekali. Setiap dusun memiliki kader posyandu tersendiri sebagai tempat  untuk pelaksanaan posyandu. Posyandu biasanya dilaksanakan untuk lansia dan balita. Agenda posyandu balita  mencakup memonitor pertumbuhan balita, imunisasi, dan sosialisasi tentang kesehatan. Sedangkan untuk posyandu lansia mencakup pemeriksaan kesehatan dan pemberian obat-obatan sesuai keluhan.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(22) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `hak_akses` varchar(22) NOT NULL,
  `level` int(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `hak_akses`, `level`, `password`) VALUES
(1, 'admin', 'admin', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
