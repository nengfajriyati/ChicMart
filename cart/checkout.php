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

  <h4>Ringkasan Pesanan:</h4>
  <ul>
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $item):
      $subtotal = $item['harga'] * $item['jumlah'];
      $total += $subtotal;
    ?>
      <li><?php echo $item['jumlah']; ?> x <?php echo $item['nama']; ?> - Rp<?php echo number_format($subtotal, 0, ',', '.'); ?></li>
    <?php endforeach; ?>
  </ul>
  <p><strong>Total: Rp<?php echo number_format($total, 0, ',', '.'); ?></strong></p>

  <form method="post" action="checkout_proses.php" class="checkout-form">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

    <button type="submit" class="btn-checkout">Kirim Pesanan</button>
  </form>
</main>

</body>
</html>
