<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = htmlspecialchars($_POST['nama']);
  $alamat = htmlspecialchars($_POST['alamat']);

  // Kosongkan keranjang
  unset($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesanan Berhasil - ChicMart</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<main class="main-content">
  <h2>Terima kasih, <?php echo $nama; ?>!</h2>
  <p>Pesanan kamu sudah kami terima 🎉</p>
  <p>Produk akan segera dikirim ke alamat:</p>
  <blockquote><?php echo nl2br($alamat); ?></blockquote>

  <a href="../index.html" class="btn-checkout">Kembali ke Beranda</a>
</main>

</body>
</html>
