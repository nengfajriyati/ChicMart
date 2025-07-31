<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../account/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$metode = isset($_POST['metode']) ? $_POST['metode'] : 'Transfer Bank';

// Hitung total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['harga'] * $item['jumlah'];
}

// Simpan ke tabel orders
mysqli_query($conn, "INSERT INTO orders (user_id, nama, alamat, no_hp, metode, total, created_at)
VALUES ('$user_id', '$nama', '$alamat', '$no_hp', '$metode', '$total', NOW())");

$order_id = mysqli_insert_id($conn); // ID pesanan

// Simpan produk-produk ke order_items
foreach ($_SESSION['cart'] as $item) {
    $produk_id = $item['id'];
    $qty = $item['jumlah'];
    $price = $item['harga']; // harga satuan

    mysqli_query($conn, "INSERT INTO order_items (order_id, product_id, qty, price)
    VALUES ('$order_id', '$produk_id', '$qty', '$price')");
}

// Kosongkan keranjang
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesanan Berhasil - ChicMart</title>
  <link rel="stylesheet" href="../style.css"> <!-- CSS utama -->
</head>
<body>
<main class="main-content">
  <h2>Terima kasih, <?= htmlspecialchars($nama) ?>! 🎉</h2>
  <p>Pesanan kamu dengan nomor <strong>#<?= $order_id ?></strong> telah berhasil diproses.</p>
  <p>Metode Pembayaran: <strong><?= htmlspecialchars($metode) ?></strong></p>
  <p>Produk akan dikirim ke:</p>
  <blockquote><?= nl2br(htmlspecialchars($alamat)) ?></blockquote>
  <a href="../index.php" class="btn-checkout">Kembali ke Beranda</a>
</main>
</body>
</html>
