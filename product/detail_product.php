<?php
include '../includes/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<h3>ID produk tidak ditemukan!</h3>";
    exit;
}

$id = intval($_GET['id']); // Sanitasi ID

$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id");

if (!$query) {
    die("Query error: " . mysqli_error($conn));
}

if (mysqli_num_rows($query) == 0) {
    echo "<h3>Produk tidak ditemukan!</h3>";
    exit;
}

$produk = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($produk['nama']); ?> - ChicMart</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
      <li><a href="product.php">Product</a></li>
      <li><a href="../account/account.php">Account</a></li>
      <li><a href="../cart/cart.php">Cart 🛒</a></li>
    </ul>
  </nav>
</header>

<!-- Detail Produk -->
<div class="detail-container">
  <!-- Gambar Produk -->
  <div class="detail-image">
    <img src="../img/<?= htmlspecialchars($produk['gambar']); ?>" alt="<?= htmlspecialchars($produk['nama']); ?>">
  </div>

  <!-- Info Produk -->
  <div class="detail-info">
    <h1><?= htmlspecialchars($produk['nama']); ?></h1>
    <div class="price">Rp<?= number_format($produk['harga'], 0, ',', '.'); ?></div>
    <div class="desc"><?= nl2br(htmlspecialchars($produk['deskripsi'])); ?></div>

  <?php if (!empty($produk['deskripsi_lengkap'])): ?>
    <div class="desc-lengkap">
      <h3>Deskripsi Lengkap</h3>
      <p><?= nl2br(htmlspecialchars($produk['deskripsi_lengkap'])); ?></p>
    </div>
  <?php endif; ?>

    
    <!-- Tombol Tambah ke Keranjang -->
    <form method="post" action="../functions/cart.php">
      <input type="hidden" name="produk_id" value="<?= $produk['id']; ?>">
      <button type="submit" class="btn-add">+ Tambah ke Keranjang</button>
    </form>

    <!-- Tombol Kembali -->
    <a href="product.php" class="back-btn">← Kembali ke Produk</a>
  </div>
</div>

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
