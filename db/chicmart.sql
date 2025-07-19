-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2025 pada 11.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chicmart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
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
(11, 'Women\'s Cutbray Highwaist Jeans', 150000, 'jeans.jpeg', 'Jeans wanita model cutbray highwaist', 'Women’s Cutbray Highwaist Jeans – Tampil Chic & Retro\r\nCelana jeans highwaist model cutbray ini sedang tren kembali! Modelnya yang melebar di bagian bawah membuat siluet kaki tampak lebih jenjang. Dipadukan dengan atasan crop atau blouse masuk, kamu akan terlihat makin chic dan vintage.\r\n\r\nBahannya elastis, nyaman dipakai bergerak, dan cocok untuk berbagai aktivitas harian maupun semi-formal.\r\n\r\nDetail Produk:\r\nBahan: Denim stretch\r\nWarna: Biru dongker\r\nUkuran: 27 – 33\r\nHighwaist fit, potongan cutbray bawah\r\nMudah dipadukan dengan gaya kasual atau edgy\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
