<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

// Hitung harga
$daftarHarga = [
    "Kopi Susu Tobi" => 18000,
    "Americano" => 15000,
    "Matcha Latte" => 22000,
    "Kopi Tubruk" => 30000,
    "Teh MGM" => 100000,
];

$valid = true;
$pesan = "";
$harga = $daftarHarga[$menu] ?? 0;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if ($kategori === "Member" && $jumlah >= 4) {
    $diskon = $subtotal * 0.10;
}

// total harga
$total = $subtotal - $diskon;

// cek valid
if ($jumlah < 1) {
    $valid = false;
    $pesan = "Jumlah gelas minimal 1.";
} elseif ($harga === 0) {
    $valid = false;
    $pesan = "Menu yang dipilih tidak tersedia.";
} elseif (!in_array($kategori, ["Reguler", "Member"], true)) {
    $valid = false;
    $pesan = "Kategori pelanggan tidak valid.";
}
