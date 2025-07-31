<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../account/account.php");
    exit();
}
$user_id = $_SESSION['user_id'];

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

<!-- Header -->
<header class="top-header">
  <div class="logo-left">
    <h1><span class="chic">Chic</span><span class="mart">Mart</span></h1>
  </div>
  <nav class="nav-right">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../product/product.php">Product</a></li>
      <li><a href="../account/account.php">Account</a></li>
      <li><a href="../cart/cart.php">Cart 🛒</a></li>
    </ul>
  </nav>
</header>
<!-- End Header -->

<main class="main-content">
  <h2>Checkout</h2>

  <section class="order-summary">
    <h4>Ringkasan Pesanan</h4>
    <ul class="summary">
      <?php
      $total = 0;
      foreach ($_SESSION['cart'] as $it) {
        $sub = $it['harga'] * $it['jumlah'];
        $total += $sub;
        echo "<li>{$it['jumlah']} × {$it['nama']} – Rp" . number_format($sub, 0, ',', '.') . "</li>";
      }
      ?>
    </ul>
    <p><strong>Total: Rp<?= number_format($total, 0, ',', '.') ?></strong></p>
  </section>

  <section class="checkout-form-section">
    <h4>Informasi Pengiriman</h4>
    <form class="checkout-form" method="post" action="checkout_proses.php">
      <input type="hidden" name="total_harga" value="<?= $total ?>">

      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Nama penerima" required>

      <label for="no_hp">Nomor HP</label>
      <input type="text" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" required>

      <label for="alamat">Alamat Lengkap</label>
      <textarea id="alamat" name="alamat" placeholder="Alamat lengkap pengiriman" rows="4" required></textarea>

      <button type="submit" class="btn-checkout">Kirim Pesanan</button>
    </form>
  </section>
</main>

</body>
</html>
