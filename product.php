<?php
// Dummy data untuk produk
$products = array(
    1 => array(
        'name' => 'Sepatu Gentle',
        'description' => 'Deskripsi lengkap tentang sepatu.',
        'price' => 'Rp 500.000',
        'image' => 'sepatu-gentle.jpg'
    ),
    2 => array(
        'name' => 'Sepatu Converse',
        'description' => 'Deskripsi lengkap tentang sepatu.',
        'price' => 'Rp 600.000',
        'image' => 'sepatu-converse.jpg'
    ),
    3 => array(
        'name' => 'Sepatu Sneakers',
        'description' => 'Deskripsi lengkap tentang sepatu.',
        'price' => 'Rp 800.000',
        'image' => 'sepatu-sneakers.jpg'
    ),
    4 => array(
        'name' => 'Sepatu Trendy',
        'description' => 'Deskripsi lengkap tentang sepatu.',
        'price' => 'Rp 700.000',
        'image' => 'sepatu-trendy.jpg'
    )
);

// Mendapatkan id produk dari parameter URL
if (isset($_GET['id']) && isset($products[$_GET['id']])) {
    $product = $products[$_GET['id']];
} else {
    // Redirect atau pesan kesalahan jika id produk tidak ditemukan
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk: <?php echo $product['name']; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="card card-detail-product">
            <img src="images/<?php echo $product['image']; ?>" class="card-img-top images-detail" alt="<?php echo $product['name']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                <p class="card-text"><?php echo $product['description']; ?></p>
                <p class="card-text"><strong>Harga:</strong> <?php echo $product['price']; ?></p>
                <!-- Formulir untuk memesan -->
                <form action="order.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Pesan via WhatsApp</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Best Shoes. All rights reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php" class="text-white">Beranda</a></li>
                <li class="list-inline-item"><a href="about_us.php" class="text-white">About Us</a></li>
            </ul>
        </div>
    </footer>
    <!-- Bootstrap JS dan jQuery (untuk dropdown, modal, dll) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-pF4fI+5gBbszQ5hOvO+9pZVYsScBw4Rf/QrGs/NFk4aJn92l58R2XblsuJ8S6fn/" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+X+QoTj5v8k25GtvM2aJPw7r0+XhF7Jc5fB" crossorigin="anonymous"></script>
</body>

</html>