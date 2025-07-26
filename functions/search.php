<form method="GET" action="">
  <input type="text" name="keyword" placeholder="Cari produk...">
  <button type="submit">Search</button>
</form>


<?php
include 'koneksi.php';

$keyword = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM produk WHERE nama LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($result)) {
?>
  <div class="product">
    <img src="img/<?php echo $data['gambar']; ?>" width="150">
    <h3><?php echo $data['nama']; ?></h3>
    <p>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></p>
    <p><?php echo $data['deskripsi']; ?></p>
    <p><?php echo $data['deskripsi lengkap']; ?></p>
  </div>
<?php } ?>

