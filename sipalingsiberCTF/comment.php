<?php
// Menghubungkan ke database
require 'function.php'; // Sesuaikan dengan nama file koneksi Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $challenge_id = $_POST['challenge_id'];
    $username = $_POST['username'];
    $comment = $_POST['comment'];

    // Query untuk memasukkan komentar baru
    $query = "INSERT INTO comments (challenge_id, username, comment) VALUES ('$challenge_id', '$username', '$comment')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect ke halaman tantangan setelah berhasil
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
