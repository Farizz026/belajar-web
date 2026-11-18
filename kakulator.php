<?php
// Memeriksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data dari input form menggunakan nama (name)
    // Menggunakan filter_var atau (int)/(float) untuk keamanan dasar
    $angka1 = isset($_POST['angka1']) ? floatval($_POST['angka1']) : 0;
    $angka2 = isset($_POST['angka2']) ? floatval($_POST['angka2']) : 0;

    // Melakukan proses penjumlahan
    $hasil = $angka1 + $angka2;

    // Menampilkan hasil ke layar
    echo "<h2>Hasil Perhitungan</h2>";
    echo "Angka pertama: " . $angka1 . "<br>";
    echo "Angka kedua: " . $angka2 . "<br>";
    echo "<b>Hasil Penjumlahan ($angka1 + $angka2) = $hasil</b>";
    echo "<br><br><a href='hitung.php'>Kembali ke Kalkulator</a>";
} else {
    // Jika file diakses secara langsung tanpa melalui form
    echo "Akses tidak sah!";
}
?>