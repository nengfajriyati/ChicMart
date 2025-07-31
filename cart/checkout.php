<?php
session_start();
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
  header("Location: ../cart/cart.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout - ChicMart</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<header class="top-header">
  <div class="logo-left">
    <h1><span class="chic">Chic</span><span class="mart">Mart</span></h1>
  </div>


  <!-- NAVIGASI -->
  <nav class="nav-right">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="../account/account.php">Account</a></li>
      <li><a href="../cart/cart.php">Cart 🛒</a></li>
    </ul>
  </nav>
</header>

<main class="main-content">
  <!-- Box Ringkasan Pesanan  -->
  <div class="summary-box">
    <h2>Checkout</h2>
    <h4>Ringkasan Pesanan</h4>
    <ul class="summary">
      <?php
      $total = 0;
      foreach ($_SESSION['cart'] as $item) {
        $subtotal = $item['harga'] * $item['jumlah'];
        $total += $subtotal;
        echo "<li>{$item['jumlah']} × {$item['nama']} – Rp" . number_format($subtotal, 0, ',', '.') . "</li>";
      }
      ?>
    </ul>
    <p><strong>Total: Rp<?= number_format($total, 0, ',', '.') ?></strong></p>
  </div>

  <!-- Form Input Nama & Alamat -->
  <form class="checkout-form" method="post" action="checkout_proses.php">
    <label for="nama">Nama Lengkap</label>
    <input type="text" name="nama" id="nama" required>

    <label for="alamat">Alamat Lengkap</label>
    <textarea name="alamat" id="alamat" rows="4" required></textarea>

    <button type="submit" class="btn-checkout">Buat Pesanan</button>
  </form>
</main>

<!-- Footer -->
  <footer>
  <div class="footer-container">
    <div class="footer-column">
      <h4>Tentang ChicMart</h4>
      <p>ChicMart adalah toko fashion online <br> yang menghadirkan produk-produk 
        <br> stylish untuk menunjang penampilan <br> Anda setiap hari.</p>
    </div>
    <div class="footer-column">
      <h4>Kontak</h4>
      <p>
        <i class="fas fa-envelope"></i>
        <a href="mailto:support@chicmart.com">support@chicmart.com</a><br>
        <i class="fas fa-phone"></i>
        <a href="https://wa.me/6285333082669">0853-3308-2669</a>
      </p>
    </div>
    <div class="footer-column">
      <h4>Ikuti Kami</h4>
      <p>
        <a href="https://instagram.com/chicmart" target="_blank">
          <i class="fab fa-instagram"></i> Instagram | ChicMart Shop
        </a><br>
        <a href="https://facebook.com/chicmart" target="_blank">
          <i class="fab fa-facebook"></i> Facebook | ChicMart Shop
        </a><br>
        <a href="https://tiktok.com/@chicmart" target="_blank">
          <i class="fab fa-tiktok"></i> TikTok | ChicMart Shop
        </a>
      </p>
    </div>
  </div>
  <p class="copyright">© 2025 ChicMart. All rights reserved.</p>
</footer>
<!-- End Footer -->
</body>
</html>
