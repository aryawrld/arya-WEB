<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Shoes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="index.php">Best Shoes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Daftar Produk Sepatu</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/sepatu-gentle.jpg" class="card-img-top" alt="Sepatu 1">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu Gentle</h5>
                        <p class="card-text">Deskripsi singkat tentang sepatu.</p>
                        <a href="product.php?id=1" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/sepatu-converse.jpg" class="card-img-top" alt="Sepatu 2">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu Converse</h5>
                        <p class="card-text">Deskripsi singkat tentang sepatu.</p>
                        <a href="product.php?id=2" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/sepatu-sneakers.jpg" class="card-img-top" alt="Sepatu 2">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu Sneakers</h5>
                        <p class="card-text">Deskripsi singkat tentang sepatu.</p>
                        <a href="product.php?id=3" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/sepatu-trendy.jpg" class="card-img-top" alt="Sepatu 2">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu Trendy</h5>
                        <p class="card-text">Deskripsi singkat tentang sepatu.</p>
                        <a href="product.php?id=4" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan produk lainnya sesuai kebutuhan -->
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