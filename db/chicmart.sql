DROP DATABASE IF EXISTS chicmart;
CREATE DATABASE chicmart;
USE chicmart;

CREATE TABLE produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  harga INT,
  gambar VARCHAR(100),
  deskripsi TEXT
);

INSERT INTO produk (nama, harga, gambar, deskripsi) VALUES
('Blouse Casual', 120000, 'blouse-casual.jpeg', 'Blouse nyaman untuk sehari-hari.'),
('Celana Kulot', 150000, 'celana-kulot.jpeg', 'Celana longgar cocok untuk semua aktivitas.'),
('Hijab Polos', 45000, 'hijab-polos.jpeg', 'Hijab polos voal ukuran 110x110.'),
('Men Flap Pocket Shirt', 120000, 'kemeja-pria.jpeg', 'Kemeja pria dengan gaya santai.'),
('RENELLE Baju Pria', 51000, 'kaos-renelle.jpeg', 'Kaos pria oversize bahan combed.'),
('PANARYBODY Sepatu Sneakers', 195000, 'sneakers-pria.jpeg', 'Sneakers pria gaya kekinian.'),
('BOSTANTEN Tas Selempang Wanita', 160000, 'tas-wanita.jpeg', 'Tas selempang elegan untuk wanita.'),
('Women''s Cutbray Highwaist Jeans', 70000, 'jeans-wanita.jpeg', 'Jeans wanita model cutbray highwaist.'),
('KEMEJA Zenke', 45000, 'kemeja-zenke.jpeg', 'Kemeja wanita jumbo kasual.'),
('Jam Tangan Wanita Rantai Kasual', 32000, 'jam-wanita.jpeg', 'Jam tangan kasual dengan rantai elegan.');