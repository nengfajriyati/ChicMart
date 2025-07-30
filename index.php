<?php
session_start();
include 'includes/db.php';

// Ambil data produk
if (isset($_GET['keyword'])) {
  $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
  $query = "SELECT * FROM produk WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'";
} else {
  $query = "SELECT * FROM produk";
}
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>ChicMart - Toko Fashion Online</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:ital,wght@0,400;1,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header class="top-header">
    <div class="logo-left">
      <h1><span class="chic">Chic</span><span class="mart">Mart</span></h1>
    </div>
    <form class="search-bar" method="GET" action="product/product.php">
      <input type="text" name="keyword" placeholder="Cari produk..." required />
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <nav class="nav-right">
      <ul>
        <?php if(isset($_SESSION['username'])): ?>
          <li><span>Halo, <?php echo $_SESSION['username']; ?>!</span> | <a href="account/logout.php">Logout</a></li>
        <?php endif; ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="product/product.php">Product</a></li>
        <li><a href="account/account.php">Account</a></li>
        <li><a href="cart/cart.php">Cart 🛒</a></li>
      </ul>
    </nav>
  </header>
  <!-- End Header -->

  <!-- Main Content -->
  <main class="main-content">
    <section class="hero">
      <div class="hero-text">
        <h2>Selamat Datang di <span>Chic</span>Mart</h2>
        <p>Tampil gaya dengan koleksi fashion kekinian</p>
        <p class="subtext">Eksplor gaya terbaikmu! ChicMart hadir dengan pilihan fashion terkini untuk kamu yang ingin tampil beda dan stylish setiap hari.</p>
        <a href="product/product.php">Lihat Koleksi</a>
      </div>
      <div class="hero-image">
        <img src="img/model.png" alt="Seorang model mengenakan pakaian fashion dari ChicMart">
      </div>
    </section>

    <!-- Produk Dinamis -->
    <section class="products" id="produk">
      <h3>Produk Terbaru</h3>
      <div class="product-list">
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="product">
              <img src="img/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
              <h4><?= $row['nama']; ?></h4>
              <p>Rp<?= number_format($row['harga'], 0, ',', '.'); ?></p>
              <a href="product/detail_product.php?id=<?= $row['id']; ?>" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>Produk belum tersedia.</p>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <!-- End Main Content -->

  <!-- Advantages Section -->
  <section class="advantages">
    <div class="container">
      <h3>Mengapa Memilih ChicMart?</h3>
      <div class="advantage-list">
        <div class="advantage">
          <h4>Produk Berkualitas</h4>
          <p>Kami hanya menjual produk dengan bahan terbaik untuk kenyamanan dan penampilan Anda.</p>
        </div>
        <div class="advantage">
          <h4>Harga Terjangkau</h4>
          <p>Dapatkan produk fashion trendi tanpa harus merogoh kocek dalam-dalam.</p>
        </div>
        <div class="advantage">
          <h4>Pengiriman Cepat</h4>
          <p>Pesanan Anda akan diproses dan dikirim dengan cepat ke seluruh Indonesia.</p>
        </div>
        <div class="advantage">
          <h4>Support 24/7</h4>
          <p>Tim customer service kami siap membantu Anda kapan saja.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Advantages Section -->

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <h4>Tentang ChicMart</h4>
        <p>ChicMart adalah toko fashion online <br> yang menghadirkan produk-produk stylish untuk menunjang penampilan Anda setiap hari.</p>
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
