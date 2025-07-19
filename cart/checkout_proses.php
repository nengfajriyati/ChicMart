<?php
session_start();
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' ||
    !isset($_POST['nama'], $_POST['alamat']) ||
    !isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
  header("Location: cart.php");
  exit;
}

$nama   = mysqli_real_escape_string($conn, $_POST['nama']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

$total = 0;
foreach ($_SESSION['cart'] as $it) {
  $total += $it['harga'] * $it['jumlah'];
}

/* -------- simpan ke tabel orders -------- */
mysqli_query($conn,
  "INSERT INTO orders (customer_name, address, total)
   VALUES ('$nama', '$alamat', $total)");
$order_id = mysqli_insert_id($conn);

/* -------- simpan item per produk -------- */
$stmt = mysqli_prepare($conn,
  "INSERT INTO order_items (order_id, product_id, qty, price)
   VALUES (?,?,?,?)");

foreach ($_SESSION['cart'] as $it) {
  mysqli_stmt_bind_param($stmt, 'iiii',
    $order_id, $it['id'], $it['jumlah'], $it['harga']);
  mysqli_stmt_execute($stmt);
}
mysqli_stmt_close($stmt);

/* -------- kosongkan cart -------- */
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
<main class="main-content">
  <h2>Terima kasih, <?= htmlspecialchars($nama) ?>! 🎉</h2>
  <p>Pesanan kamu <strong>#<?= $order_id ?></strong> sudah diterima.</p>
  <p>Produk akan dikirim ke alamat:</p>
  <blockquote><?= nl2br(htmlspecialchars($alamat)) ?></blockquote>
  <a href="../index.html" class="btn-checkout">Kembali ke Beranda</a>
</main>
</body>
</html>
