<?php
session_start();
require_once '../includes/db.php';

// Validasi jika bukan POST atau form kosong
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['nama'], $_POST['alamat'])) {
  header("Location: cart.php");
  exit;
}

$nama   = mysqli_real_escape_string($conn, $_POST['nama']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$total  = 0;

// Hitung total belanja
foreach ($_SESSION['cart'] as $item) {
  $total += $item['harga'] * $item['jumlah'];
}

// Simpan ke tabel orders
mysqli_query($conn, "INSERT INTO orders (customer_name, address, total) VALUES ('$nama', '$alamat', $total)")
  or die("Gagal simpan order: " . mysqli_error($conn));
$order_id = mysqli_insert_id($conn);

// Siapkan perintah insert ke order_items
$stmt = mysqli_prepare($conn, "INSERT INTO order_items (order_id, product_id, qty, price) VALUES (?,?,?,?)");
if (!$stmt) {
  die("Query prepare gagal: " . mysqli_error($conn));
}

// Simpan setiap item dalam order
foreach ($_SESSION['cart'] as $item) {
  mysqli_stmt_bind_param($stmt, 'iiii', $order_id, $item['id'], $item['jumlah'], $item['harga']);
  mysqli_stmt_execute($stmt);
}
mysqli_stmt_close($stmt);

// Kosongkan keranjang setelah checkout
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesanan Berhasil - ChicMart</title>
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

<!-- Main -->
<main class="main-content">
  <h2>Terima kasih, <?= htmlspecialchars($nama) ?>! 🎉</h2>
  <p>Pesanan kamu dengan nomor pemesanan <strong>#<?= $order_id ?></strong> telah berhasil diterima.</p> 

  <p><strong>Produk yang kamu pesan:</strong></p>
  <ul>
    <?php
    $result = mysqli_query($conn, "
      SELECT produk.nama, order_items.qty 
      FROM order_items 
      JOIN produk ON order_items.product_id = produk.id 
      WHERE order_items.order_id = $order_id
    ") or die("Gagal ambil data produk: " . mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>{$row['qty']} × {$row['nama']}</li>";
    }
    ?>
  </ul>

  <p><strong>Produk akan dikirim ke:</strong></p>
  <blockquote><?= nl2br(htmlspecialchars($alamat)) ?></blockquote>

  <a href="../index.php" class="btn-checkout">Kembali ke Beranda</a>
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

</body>
</html>
