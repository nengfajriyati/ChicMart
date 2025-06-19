<?php
session_start();
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['produk_id'])) {
    $id = intval($_POST['produk_id']);

    // Ambil detail produk dari database
    $result = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id");
    $produk = mysqli_fetch_assoc($result);

    if (!$produk) {
        die("Produk tidak ditemukan.");
    }

    // Inisialisasi cart jika belum ada
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Tambahkan atau update jumlah
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['jumlah'] += 1;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $produk['id'],
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'gambar' => $produk['gambar'],
            'jumlah' => 1
        ];
    }

    // Redirect ke halaman cart
    header("Location: ../cart/cart.php");
    exit();
}
?>
