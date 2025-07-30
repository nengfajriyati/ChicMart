<?php
session_start();
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
    <div class="search-bar" method="GET" action="product/product.php">
     <input type="text" placeholder="Cari produk..." required  />
     <button type="submit"><i class="fas fa-search"></i></button>
    </div>
    <nav class="nav-right">
      <ul>
    <?php if(isset($_SESSION['username'])): ?>
        <span>Halo, <?php echo $_SESSION['username']; ?>!</span> | 
        <a href="account/logout.php">Logout</a>

    <?php endif; ?>
        <li><a href="index.html">Home</a></li>
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
    <!-- End Main Content -->

    <!-- New Product -->
    <section class="products" id="produk">
      <div class="container">
        <h3>Produk Terbaru</h3>
         <div class="product-list">
            <div class="product">
              <img src="img/blouse-casual.jpeg" alt="Produk 1">
              <h4>Blouse Casual</h4>
              <p>Rp120.000</p>
              <a href="product/detail_product.php?id=1" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="1">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
            <div class="product">
              <img src="img/celana-kulot.jpeg" alt="Produk 2">
              <h4>Celana Kulot</h4>
              <p>Rp150.000</p>
              <a href="product/detail_product.php?id=2" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="2">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
            <div class="product">
              <img src="img/hijab-polos.jpeg" alt="Produk 3">
              <h4>Hijab Polos</h4>
              <p>Rp45.000</p>
              <a href="product/detail_product.php?id=3" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="3">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
            <div class="product">
              <img src="img/kemeja-pria.jpeg" alt="Produk 4">
              <h4>Men Flap Pocket Shirt</h4>
              <p>Rp120.000</p>
              <a href="product/detail_product.php?id=4" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="4">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
            <div class="product">
              <img src="img/kaos-renelle.jpeg" alt="Produk 5">
              <h4>RENELLE Baju Pria</h4>
              <p>Rp51.000</p>
              <a href="product/detail_product.php?id=5" class="btn-detail">Detail Produk</a>
              <form method="post" action="functions/cart.php">
                <input type="hidden" name="produk_id" value="5">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
            <div class="see-more-wrapper">
              <a href="product/product.php" class="btn-see-more">Lihat semua produk</a>
            </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End New Product -->
        </div>
      </div>
    </section>
  </main>

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
</body>
</html>