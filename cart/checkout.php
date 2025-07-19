<?php
session_start();
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
  header("Location: cart.php");
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
  <h2>Checkout</h2>

  <h4>Ringkasan Pesanan</h4>
  <ul class="summary">
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $it) {
      $sub = $it['harga'] * $it['jumlah'];
      $total += $sub;
      echo "<li>{$it['jumlah']} × {$it['nama']} – Rp" .
           number_format($sub,0,',','.') . "</li>";
    }
    ?>
  </ul>
  <p><strong>Total: Rp<?= number_format($total,0,',','.') ?></strong></p>

  <form class="checkout-form" method="post" action="checkout_proses.php">
    <label for="nama">Nama Lengkap</label>
    <input id="nama" name="nama" required>

    <label for="alamat">Alamat Lengkap</label>
    <textarea id="alamat" name="alamat" rows="4" required></textarea>

    <button type="submit" class="btn-checkout">Kirim Pesanan</button>
  </form>
</main>
</body>
</html>
