<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Web</title>
</head>
<body>
    <h2>Kalkulator Penjumlahan</h2>

    <!-- Data dikirim ke hitung.php menggunakan metode POST -->
    <form action="hitung.php" method="POST">
        <label for="angka1">Angka Pertama:</label>
        <input type="number" id="angka1" name="angka1" required>
        <br><br>

        <label for="angka2">Angka Kedua:</label>
        <input type="number" id="angka2" name="angka2" required>
        <br><br>

        <button type="submit">Tambahkan!</button>
    </form>
</body>
</html>