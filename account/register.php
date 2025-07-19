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
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="login.css">
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
        <li><a href="index.html">Home</a></li>
        <li><a href="product/product.php">Product</a></li>
        <li><a href="account/account.php">Account</a></li>
        <li><a href="cart/cart.php">Cart 🛒</a></li>
      </ul>
    </nav>
  </header>
  <!-- End Header -->

<!-- Main Register -->

<main >
  <section>
    <div class="login-container">
      <h2 style="text-align: center;" >ChicMart</h2>
      <form action="../index.html" method="POST">
        <label for="username">Usename:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Masukkan Email" required>
        <label for="password">Buat Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
        <label for="password">Konfirmasi Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

        <button type="submit">Register</button>
        <p>Sudah punya akun ? <a href="../account/account.php">Login</a>.</p>
      </form>
    </div>
  </section>
</main>


<!-- End Register -->

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