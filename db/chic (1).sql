-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chic`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `deskripsi_lengkap` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `deskripsi`, `deskripsi_lengkap`) VALUES
(1, 'Blouse Casual', 120000, 'blouse-casual.jpeg', 'Blouse Casual Wanita – Elegan & Nyaman untuk Sehari-hari', 'Blouse casual ini hadir dengan desain minimalis namun tetap elegan, cocok untuk digunakan dalam berbagai suasana, baik formal maupun santai. Terbuat dari bahan polyester mix yang halus dan ringan, blouse ini memberi kenyamanan ekstra sepanjang hari.\r\n\r\nDidesain dengan potongan loose fit dan lengan puff yang trendi, sangat cocok untuk kamu yang ingin tampil feminim tanpa ribet. Tersedia dalam warna netral yang mudah dipadukan dengan rok maupun celana favoritmu!\r\nDetail Produk:\r\nBahan: Polyester premium\r\nModel: Lengan panjang, kancing depan\r\nWarna: Cream Soft\r\nUkuran: All size fit to L\r\nPanjang: ±65 cm\r\nLingkar dada: ±100 cm'),
(2, 'Celana Kulot', 150000, 'celana-kulot.jpeg', 'Celana longgar cocok untuk semua aktivitas.', 'Celana Kulot Wanita – Nyaman & Stylish untuk Segala Aktivitas\r\n\r\nTampil modis dan tetap nyaman sepanjang hari dengan celana kulot berpotongan longgar ini. Terbuat dari bahan katun premium yang ringan dan adem, celana ini cocok digunakan untuk kegiatan sehari-hari, kuliah, hangout, hingga semi-formal.\r\n\r\nPotongannya yang lebar memberikan kesan ramping sekaligus memberikan ruang gerak bebas. Warna netralnya mudah dipadupadankan dengan berbagai atasan favoritmu. Lengkapi gayamu dengan fashion item andalan satu ini!\r\n\r\nDetail Produk:\r\nBahan: Katun high quality\r\nModel: Kulot panjang\r\nPinggang: Full karet elastis\r\nUkuran: All size (muat hingga L)\r\nPanjang celana: ±98 cm\r\nWarna: Cream'),
(3, 'Hijab Polos', 45000, 'hijab-polos.jpeg', 'Hijab polos voal ukuran 110x110.', 'Hijab Polos – Voal Premium Earth Tone\r\nTampil simple dan elegan dengan Hijab Polos dari bahan voal premium. Hijab ini memiliki tekstur lembut dan tidak mudah kusut, sangat nyaman untuk digunakan seharian. Warna-warna natural seperti coklat, nude, dan mocha memberikan kesan kalem dan anggun.\r\n\r\nHijab ini mudah dibentuk, tidak licin, dan tidak menerawang, sehingga cocok untuk daily wear maupun untuk acara formal.\r\nDetail Produk:\r\nBahan: Voal Premium\r\nUkuran: 115 cm x 115 cm (Segi empat)\r\nTepi jahit rapi (baby seam)\r\nWarna: Mix warna natural earth tone\r\nCocok untuk semua bentuk wajah & gaya\r\n\r\n'),
(4, 'Men Flap Pocket Shirt', 120000, 'kemeja-pria.jpeg', 'Kemeja pria dengan gaya santai.', 'Men Flap Pocket Shirt – Set Kemeja \r\nIngin tampil rapi tapi tetap santai? Set kemeja pria ini jawabannya! Dengan desain modern yang simpel, kemeja ini dilengkapi dua kantong depan yang memberikan tampilan maskulin. Celananya pun dibuat dari bahan yang adem dan fleksibel, cocok untuk hangout, kerja, maupun acara santai.\r\nKamu bisa memadukannya dengan sneakers untuk gaya kasual, atau sepatu pantofel untuk tampilan semi-formal.\r\n\r\nDetail Produk:\r\nIsi: 1 kemeja + 1 celana panjang\r\nBahan: Katun PE premium (jatuh dan adem)\r\nWarna: Abu terang\r\nUkuran: M – XL (tersedia pilihan ukuran)\r\nDesain minimalis modern, cocok untuk pria muda'),
(5, 'RENELLE Baju Pria', 51000, 'kaos-renelle.jpeg', 'Kaos pria oversize bahan combed.', 'RENELLE Baju Pria – T-Shirt Grafis Kekinian\r\nKaos dengan desain grafis ini sangat cocok untuk kamu yang suka street style. Dibuat dengan bahan katun combed 30s, kaos ini adem, menyerap keringat, dan tidak gerah. Motif print “universe” membuat kaos ini terlihat unik dan punya karakter.\r\n\r\nTampil kasual namun tetap fashionable dalam setiap kesempatan dengan kaos ini!\r\n\r\nDetail Produk:\r\nBahan: Cotton combed 30s\r\nWarna: Coklat kopi\r\nMotif: Sablon plastisol tahan lama\r\nUkuran: M, L, XL\r\nCocok untuk gaya sehari-hari dan casual look'),
(6, 'PANARYBODY Sepatu Sneakers', 195000, 'sneakers-pria.jpeg', 'Sneakers pria gaya kekinian.', 'PANARYBODY Sepatu Sneakers – Nyaman untuk Gaya Aktifmu\r\nSneakers dari PANARYBODY ini dirancang khusus untuk kamu yang aktif dan stylish. Dengan desain sporty dan modern, sepatu ini cocok digunakan untuk jalan santai, nongkrong, hingga olahraga ringan. Sol yang empuk membuat langkah kamu tetap nyaman seharian.\r\n\r\nTersedia dalam warna netral yang mudah dipadukan dengan berbagai outfit, sepatu ini juga tahan lama karena menggunakan bahan berkualitas tinggi.\r\n\r\nDetail Produk:\r\nBahan: Mesh + karet sintetis\r\nWarna: Hitam kombinasi\r\nUkuran: 39 – 44 (Ukuran normal)\r\nSol anti slip, ringan & fleksibel\r\nDesain sporty casual untuk pria/wanita'),
(7, 'BOSTANTEN Tas Selempang Wanita', 160000, 'tas-wanita.jpeg', 'Tas selempang elegan untuk wanita.', 'BOSTANTEN Tas Selempang Wanita – Elegan & Multifungsi\r\nTas selempang dari BOSTANTEN hadir dengan desain eksklusif dan bahan kulit sintetis premium. Tas ini cocok untuk wanita aktif yang butuh ruang luas namun tetap tampil stylish. Cocok dibawa untuk ke kantor, kuliah, maupun acara formal.\r\n\r\nDilengkapi dengan resleting kuat dan tali panjang adjustable, tas ini memadukan fungsi dan gaya dalam satu desain yang elegan.\r\n\r\nDetail Produk:\r\nBahan: Kulit PU premium\r\nUkuran: 30 x 22 x 12 cm\r\nWarna: Taupe brown\r\nKompartemen utama + slot kecil dalam\r\nDilengkapi tali selempang adjustable'),
(9, 'KEMEJA Zenke', 45000, 'kemeja-zenke.jpeg', 'Kemeja wanita jumbo kasual.', 'KEMEJA Zenke – Kemeja Santai Kekinian\r\nKemeja Zenke hadir dengan model loose yang super nyaman digunakan di berbagai suasana. Desain minimalis dan pilihan warna pastel membuat kamu terlihat fresh dan kekinian. Cocok untuk gaya harian, ke kampus, atau nongkrong bareng teman.\r\n\r\nKancing depan dan bahan katunnya yang adem menjadikan kemeja ini andalan untuk dipadukan dengan jeans, rok, atau celana bahan.\r\n\r\nDetail Produk:\r\nBahan: Katun linen halus\r\nWarna: Pink, Putih, Cokelat\r\nModel: Oversize loose fit\r\nUkuran: All size fit to L\r\nDapat dipakai sebagai outer'),
(10, 'Jam Tangan Wanita Rantai Kasual', 32000, 'jam-wanita.jpeg', 'Jam tangan kasual dengan rantai elegan.', 'Jam Tangan Wanita Rantai Kasual – Tampil Mewah & Feminin\r\nJam tangan wanita ini didesain dengan tampilan elegan, cocok untuk kamu yang ingin tampil berkelas namun tetap simpel. Tersedia dalam berbagai pilihan warna strap seperti gold, rose gold, dan silver. Cocok dipakai untuk acara formal maupun kasual.\r\n\r\nTampilan analog klasik dengan angka romawi menambah kesan eksklusif pada setiap detail jam ini.\r\n\r\nDetail Produk:\r\nDiameter: 3.2 cm\r\nTipe: Analog\r\nMaterial strap: Rantai stainless\r\nWarna: Rosegold / Gold / Silver / Hitam\r\nAnti air percikan (water resistant ringan)\r\n\r\n'),
(11, 'Women\'s Cutbray Highwaist Jeans', 150000, 'jeans.jpeg', 'Jeans wanita model cutbray highwaist', 'Women’s Cutbray Highwaist Jeans – Tampil Chic & Retro\r\nCelana jeans highwaist model cutbray ini sedang tren kembali! Modelnya yang melebar di bagian bawah membuat siluet kaki tampak lebih jenjang. Dipadukan dengan atasan crop atau blouse masuk, kamu akan terlihat makin chic dan vintage.\r\n\r\nBahannya elastis, nyaman dipakai bergerak, dan cocok untuk berbagai aktivitas harian maupun semi-formal.\r\n\r\nDetail Produk:\r\nBahan: Denim stretch\r\nWarna: Biru dongker\r\nUkuran: 27 – 33\r\nHighwaist fit, potongan cutbray bawah\r\nMudah dipadukan dengan gaya kasual atau edgy\r\n'),
(12, 'Kaos Polos Cream', 35000, 'baju polos cream.jpg', 'Kaos regular fit full coton dengan gramasi 20`s', 'Warna: Cream (netral, soft, cocok untuk berbagai warna kulit dan gaya busana)\r\n\r\nUkuran Tersedia:\r\nS, M, L, XL (dilengkapi size chart untuk panduan pembelian)\r\n\r\nFitur Tambahan:\r\n\r\nWarna cream tidak transparan (non-see-through) pada bahan tertentu\r\n\r\nBisa dikenakan untuk aktivitas sehari-hari, kerja, kuliah, jalan-jalan, atau acara santai/formal'),
(13, 'Kaos Polos Mocca Oversize', 35000, 'baju polos mocca.jpg', 'Kaos menggunakan cotton Airism yang adem digunakan untuk aktivitas apapun.', 'Nama Produk: Kemeja/Casual Top Unisex Warna Mocca – Bahan 100% Cotton Combed\r\n\r\nWarna:\r\n\r\nMocca (Mocha) – Warna coklat muda lembut dengan tone hangat yang netral. Memberikan kesan hangat, tenang, dan cocok untuk segala suasana, baik formal maupun santai. Warna ini juga mudah dipadupadankan dengan jeans, celana chino, rok, atau outer.\r\n\r\nBahan:\r\n\r\n100% Cotton Combed Premium\r\nBahan katun berkualitas tinggi yang:\r\n\r\nLembut di kulit\r\n\r\nTidak panas, cocok untuk iklim tropis\r\n\r\nMenyerap keringat dengan baik\r\n\r\nNyaman digunakan dalam waktu lama\r\n\r\nKuat dan tahan lama (tidak mudah melar atau menyusut)\r\n\r\nModel & Potongan:\r\n\r\nPotongan regular fit (tidak terlalu ketat dan tidak terlalu longgar)\r\n\r\nLengan pendek/panjang (bisa disesuaikan model)\r\n\r\nLeher bulat (round neck) atau kerah kemeja (collared), tergantung desain\r\n\r\nTersedia model kancing depan (cocok untuk look formal-casual) atau tanpa kancing (casual look)\r\n\r\nJahitan rapi dan kuat, detail minimalis yang elegan\r\n\r\nUkuran Tersedia:\r\n\r\nS, M, L, XL, hingga XXL\r\n\r\nSize chart disediakan untuk memudahkan pemilihan ukuran\r\n\r\nFitur Tambahan:\r\n\r\nBahan tidak mudah luntur dan tidak mudah kusut\r\n\r\nWarna mocca tidak menerawang\r\n\r\nBisa dikenakan pria maupun wanita (model unisex tersedia)\r\n\r\nCocok dipakai untuk kerja, nongkrong, kuliah, hingga acara semi-formal'),
(14, 'Cardigan Hitam Wanita', 50000, 'cardigan.jpg', 'Cardigan dibuat dari bahan knit yang cocok digunakan pada musim dingin.', 'Warna:\r\n\r\nHitam (Black)\r\nWarna netral klasik yang memberikan kesan elegan, ramping, dan mudah dipadukan dengan berbagai warna atau motif pakaian. Cocok untuk gaya formal, casual, maupun streetwear.\r\n\r\nBahan:\r\n\r\nKnit Premium / Katun Rajut / Baby Terry / Wollypoly / Viscose Cotton\r\n(Pilih bahan sesuai model produk)\r\n\r\nLembut dan elastis\r\n\r\nTidak panas, tetap nyaman digunakan seharian\r\n\r\nTidak gatal di kulit\r\n\r\nJatuh dengan bagus dan memberikan siluet tubuh yang anggun\r\n\r\nCocok untuk cuaca sejuk maupun ruangan ber-AC\r\n\r\nModel & Potongan:\r\n\r\nCardigan Lengan Panjang / Panjang 3/4\r\n\r\nDesain open-front (tanpa kancing) atau dengan kancing depan\r\n\r\nPotongan loose fit atau semi-fit (sesuai selera pelanggan)\r\n\r\nPanjang regular atau longline (menutup pinggul / paha)\r\n\r\nDetail rib di bagian lengan dan bawah cardigan (jika rajut)\r\n\r\nTerkadang dilengkapi dengan saku depan\r\n\r\nUkuran Tersedia:\r\n\r\nAll size fit to L / S–XL / Free size (tergantung brand)\r\n\r\nDengan panduan size chart lengkap\r\n\r\nFitur Tambahan:\r\n\r\nNyaman dipakai saat hangout, ke kantor, atau acara santai\r\n\r\nMudah dilapisi dengan kaos, blus, atau kemeja di dalamnya\r\n\r\nCocok untuk wanita '),
(15, 'Hoodie Pria', 75000, 'hoodie pria.jpg', 'Hoodie abu abu overisize', 'Warna:\r\n\r\nAbu-Abu (Grey)\r\nWarna netral yang memberikan kesan modern, santai, dan fleksibel. Cocok dipadukan dengan warna apa pun dan selalu tampil timeless di segala suasana.\r\n\r\nBahan:\r\n\r\nFleece Cotton Premium / Baby Terry / Cotton Combed (tergantung model)\r\n\r\nLembut di kulit\r\n\r\nHangat tapi tetap breathable\r\n\r\nNyaman dipakai seharian, baik di dalam ruangan maupun cuaca dingin\r\n\r\nTidak mudah kusut dan tahan lama\r\n\r\nModel & Potongan:\r\n\r\nHoodie lengan panjang dengan potongan regular fit / oversize\r\n\r\nDilengkapi dengan hood / tudung kepala yang adjustable (tali serut)\r\n\r\nKantong kangaroo di bagian depan, fungsional untuk menyimpan barang atau menghangatkan tangan\r\n\r\nBagian ujung lengan dan bawah hoodie dilengkapi dengan rib elastis\r\n\r\nCocok untuk pria dan wanita (model unisex)\r\n\r\nUkuran Tersedia:\r\n\r\nS, M, L, XL, hingga XXL\r\n\r\nSize chart tersedia lengkap\r\n\r\nFitur Tambahan:\r\n\r\nCocok untuk aktivitas santai, olahraga ringan, nongkrong, jalan-jalan, atau gaya kasual harian'),
(16, 'Stripped Sweater', 50000, 'stripped-sweater.jpg', 'Stripped sweater berbahan cotton wool cocok digunakan di musim dingin', 'Warna & Motif:\r\n\r\nKombinasi Warna: Hitam & Hijau\r\n\r\nMotif striped (garis-garis horizontal) yang memberikan kesan dinamis dan modis\r\n\r\nPerpaduan warna hijau dan hitam memberikan tampilan tegas namun tetap segar, cocok untuk berbagai warna kulit dan gaya\r\n\r\nBahan:\r\n\r\nRajut Knit Premium / Cotton Knit / Acrylic Blend (tergantung model)\r\n\r\nTekstur halus dan lembut di kulit\r\n\r\nNyaman, tidak gatal, dan tidak panas\r\n\r\nElastis, mengikuti bentuk tubuh tanpa terasa ketat\r\n\r\nBahan tebal namun tetap ringan, cocok untuk ruangan AC atau cuaca sejuk\r\n\r\nModel & Potongan:\r\n\r\nLengan panjang dengan model regular fit atau loose fit\r\n\r\nRound neckline (kerah bulat klasik) yang memberikan kesan simpel dan santai\r\n\r\nRib elastis pada bagian ujung lengan dan bagian bawah sweater, menjaga bentuk tetap pas saat dipakai\r\n\r\nPanjang menutupi pinggang/pinggul, cocok dipadukan dengan celana jeans, chinos, atau rok kasual\r\n\r\nUkuran Tersedia:\r\n\r\nS, M, L, XL, XXL (dengan panduan size chart)\r\n\r\nUnisex: bisa dipakai oleh pria maupun wanita\r\n\r\nFitur Tambahan:\r\n\r\nMotif garis-garis menciptakan ilusi visual yang membuat tubuh tampak lebih proporsional'),
(17, 'Half Zipper Sweatshirt', 60000, 'halfzip-sweatshirt.jpg', 'Halfzipper sweatshirt dengan bahan cotton fleece ', 'Model & Desain:\r\n\r\nSweatshirt dengan resleting setengah (half-zip) pada bagian dada\r\n\r\nModel high-neck / mock neck, bisa dipakai terbuka atau tertutup\r\n\r\nMemberikan tampilan yang clean, sporty, dan modern\r\n\r\nPotongan regular fit atau oversized (tergantung model) yang nyaman untuk berbagai bentuk tubuh\r\n\r\nBisa dikenakan sebagai atasan utama atau outer tipis di atas kaos\r\n\r\nWarna Tersedia:\r\n\r\nUmumnya tersedia dalam warna solid seperti abu-abu, navy, hitam, krem, army, dan pastel\r\n\r\nTersedia juga dalam versi kombinasi warna (colorblock) atau sablon minimalis\r\n\r\nBahan:\r\n\r\nCotton Fleece / Baby Terry / French Terry / Cotton Blend\r\n\r\nBahan lembut, hangat, namun tetap ringan\r\n\r\nMenyerap keringat dan nyaman dipakai di iklim tropis atau ruangan ber-AC\r\n\r\nTidak mudah kusut dan tahan lama\r\n\r\nBagian dalam bisa berbulu halus (brushed) untuk kehangatan ekstra\r\n\r\nDetail Fitur:\r\n\r\nLengan panjang dengan rib elastis di pergelangan\r\n\r\nRib bottom hem menjaga bentuk tetap pas dan tidak melar\r\n\r\nResleting setengah badan memberikan opsi pemakaian fleksibel:\r\n\r\nDikenakan tertutup untuk kesan formal/sporty\r\n\r\nDikenakan terbuka untuk gaya lebih santai\r\n\r\nBeberapa model dilengkapi dengan kantong samping tersembunyi atau kangaroo pocket\r\n\r\nUkuran Tersedia:\r\n\r\nS, M, L, XL, hingga XXL\r\n\r\nTersedia dalam versi pria, wanita, atau unisex\r\n\r\nPanduan size chart disediakan untuk memudahkan pemilihan ukuran\r\n\r\nCocok Dipakai Untuk:\r\n\r\nAktivitas harian, olahraga ringan, kampus, traveling, nongkrong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
