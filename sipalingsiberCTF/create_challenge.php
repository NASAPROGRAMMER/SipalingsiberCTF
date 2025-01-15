<?php
require 'function.php'; // Untuk koneksi ke database

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $points = $_POST['points'];
    $link = $_POST['link'];

    // Query untuk menambahkan data ke tabel 'challenges'
    $sql = "INSERT INTO challenges (title, description, points, link) VALUES ('$title', '$description', $points, '$link')";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Challenge berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>
