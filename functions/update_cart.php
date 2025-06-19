<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produk_id'], $_POST['jumlah'])) {
    $id = intval($_POST['produk_id']);
    $jumlah = intval($_POST['jumlah']);

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['jumlah'] = $jumlah > 0 ? $jumlah : 1;
    }
}

header("Location: ../cart/cart.php");
exit();
?>
