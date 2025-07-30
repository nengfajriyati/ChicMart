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
</body>
</html>
