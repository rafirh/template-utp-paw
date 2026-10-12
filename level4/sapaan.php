<?php
if (isset($_COOKIE["nama_pelanggan"]) && $_COOKIE["nama_pelanggan"] !== "") {
    $nama = $_COOKIE["nama_pelanggan"];
    echo "<p>Selamat datang kembali, {$nama}!</p>";
} else {
    echo "<p>Selamat datang di Kedai Kopi Tobi!</p>";
}
