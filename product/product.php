<?php include '../includes/db.php'; 

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
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
<header class="top-header">
  <div class="logo-left">
    <h1><span class="chic">Chic</span><span class="mart">Mart</span></h1>
  </div>

  <!-- FORM SEARCH -->
  <form class="search-bar" method="GET" action="product.php">
    <input type="text" name="keyword" placeholder="Cari produk..." required />
    <button type="submit"><i class="fas fa-search"></i></button>
  </form>

  <!-- NAVIGASI -->
  <nav class="nav-right">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="../account/account.php">Account</a></li>
      <li><a href="../cart/cart.php">Cart 🛒</a></li>
    </ul>
  </nav>
</header>


<main class="main-content">
  <section class="products">
    <div class="container">
      <h3>Semua Produk</h3>
      <div class="product-list">

        <?php
        include '../includes/db.php';
        if (isset($_GET['keyword'])) {
          $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
          $query = "SELECT * FROM produk WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'";
        } else {
          $query = "SELECT * FROM produk";
        }

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0):
          while ($row = mysqli_fetch_assoc($result)):
        ?>
            <div class="product">
              <img src="../img/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>">
              <h4><?php echo $row['nama']; ?></h4>
              <p>Rp<?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
              <a href="detail_product.php?id=<?= $row['id']; ?>" class="btn-detail">Detail Produk</a>

              <form method="post" action="../functions/cart.php">
                <input type="hidden" name="produk_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn-add">Add to Cart</button>
              </form>
            </div>
        <?php
          endwhile;
        else:
          echo "<p>Produk tidak ditemukan.</p>";
        endif;
        ?>

      </div>
    </div>
  </section>
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
<!-- End Footer -->

</body>
</html>
