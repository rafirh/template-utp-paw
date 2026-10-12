<h2>Daftar Menu</h2>
<table>
    <thead>
        <tr>
            <th scope="col">Minuman</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Kopi Susu Tobi</td>
            <td>Rp18.000</td>
        </tr>
        <tr>
            <td>Americano</td>
            <td>Rp15.000</td>
        </tr>
        <tr>
            <td>Matcha Latte</td>
            <td>Rp22.000</td>
        </tr>
        <tr>
            <td>Kopi Tubruk</td>
            <td>Rp30.000</td>
        </tr>
        <tr>
            <td>Teh MGM</td>
            <td>Rp100.000</td>
        </tr>
    </tbody>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    <p>
        <label for="nama">Nama pelanggan:</label>
        <input type="text" id="nama" name="nama" required>
    </p>
    <p>
        <label for="menu">Minuman:</label>
        <select id="menu" name="menu" required>
            <option value="">Pilih minuman</option>
            <option value="Kopi Susu Tobi">Kopi Susu Tobi</option>
            <option value="Americano">Americano</option>
            <option value="Matcha Latte">Matcha Latte</option>
            <option value="Kopi Tubruk">Kopi Tubruk</option>
            <option value="Teh MGM">Teh MGM</option>
        </select>
    </p>
    <p>
        <label for="jumlah">Jumlah gelas:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" step="1" required>
    </p>
    <p>
        <label for="kategori">Kategori pelanggan:</label>
        <label>
            <input type="radio" name="kategori" value="Reguler" required>
            Reguler
        </label>
        <label>
            <input type="radio" name="kategori" value="Member">
            Member
        </label>
    </p>
    <button type="submit">Pesan</button>
</form>