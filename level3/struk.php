<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini

    $nama = htmlspecialchars($_SESSION["nama"], ENT_QUOTES, "UTF-8");
    $menu = htmlspecialchars($_SESSION["menu"], ENT_QUOTES, "UTF-8");
    $kategori = htmlspecialchars($_SESSION["kategori"], ENT_QUOTES, "UTF-8");
    $jumlah = (int) $_SESSION["jumlah"];
    $harga = (int) $_SESSION["harga"];
    $subtotal = (int) $_SESSION["subtotal"];
    $diskon = (int) $_SESSION["diskon"];
    $total = (int) $_SESSION["total"];

    echo "<h2>Struk Pesanan</h2>";
    echo "<p>Nama pelanggan: {$nama}</p>";
    echo "<p>Minuman: {$menu}</p>";
    echo "<p>Jumlah gelas: {$jumlah}</p>";
    echo "<p>Kategori pelanggan: {$kategori}</p>";
    echo "<p>Harga per gelas: Rp" . number_format($harga, 0, ",", ".") . "</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
    echo "<p>Diskon: Rp" . number_format($diskon, 0, ",", ".") . "</p>";
    echo "<p>Total pembayaran: Rp" . number_format($total, 0, ",", ".") . "</p>";
}
