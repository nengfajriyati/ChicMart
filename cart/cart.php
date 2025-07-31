<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Keranjang Belanja - ChicMart</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<!-- Header -->
<header class="top-header">
  <div class="logo-left">
    <h1><span class="chic">Chic</span><span class="mart">Mart</span></h1>
  </div>
  <div class="search-bar">
    <input type="text" placeholder="Cari produk..." />
    <button type="submit"><i class="fas fa-search"></i></button>
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
  <h2>Keranjang Belanja</h2>

  <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
  <table class="cart-table">
    <thead>
      <tr>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $item):
      $subtotal = $item['harga'] * $item['jumlah'];
      $total += $subtotal;
    ?>
    <tr>
      <td><img src="../img/<?= htmlspecialchars($item['gambar']) ?>" alt="" width="60"></td>
      <td><?= htmlspecialchars($item['nama']) ?></td>
      <td>Rp<?= number_format($item['harga'], 0, ',', '.') ?></td>
      <td>
        <form method="post" action="../functions/update_cart.php" style="display:flex; gap:6px;">
          <input type="hidden" name="produk_id" value="<?= $item['id'] ?>">
          <input type="number" name="jumlah" value="<?= $item['jumlah'] ?>" min="1" style="width:50px;">
          <button type="submit" title="Update">📝</button>
        </form>
      </td>
      <td>Rp<?= number_format($subtotal, 0, ',', '.') ?></td>
      <td>
        <form method="post" action="../functions/delete_cart.php" style="display:inline;">
          <input type="hidden" name="produk_id" value="<?= $item['id'] ?>">
          <button type="submit" title="Hapus" onclick="return confirm('Hapus produk ini dari keranjang?')">🗑️</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" align="right"><strong>Total:</strong></td>
        <td colspan="2"><strong>Rp<?= number_format($total, 0, ',', '.') ?></strong></td>
      </tr>
      <tr>
        <td colspan="6" align="right">
          <a href="checkout.php" class="btn-checkout"><i class="fas fa-credit-card"></i> Checkout</a>
        </td>
      </tr>
    </tfoot>
  </table>
  <?php else: ?>
    <p>Keranjang belanja kosong 😢</p>
    <a href="../product/product.php" class="btn-checkout">Belanja Sekarang</a>
  <?php endif; ?>
</main>

</body>
</html>
