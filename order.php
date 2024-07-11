<?php
// Memeriksa apakah ada data yang dikirimkan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    // Data dari formulir
    $product_id = $_POST['product_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Nomor WhatsApp bisnis Anda
    $whatsapp_number = '6281274387653'; // Ganti dengan nomor WhatsApp bisnis Anda

    // Format pesan untuk dikirim melalui WhatsApp
    $message = "Halo, saya ingin memesan:\n";
    $message .= "Produk: " . $products[$product_id]['name'] . "\n";
    $message .= "Harga: " . $products[$product_id]['price'] . "\n";
    $message .= "Nama: " . $nama . "\n";
    $message .= "Alamat: " . $alamat;

    // Encode pesan untuk URL WhatsApp
    $encoded_message = urlencode($message);

    // Redirect ke WhatsApp
    header("Location: https://wa.me/{$whatsapp_number}?text={$encoded_message}");
    exit;
} else {
    // Jika formulir tidak dikirimkan, kembali ke halaman sebelumnya
    header('Location: index.php');
    exit;
}
