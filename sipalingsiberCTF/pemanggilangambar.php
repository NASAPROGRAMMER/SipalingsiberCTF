<?php
// Menghubungkan ke database
require 'function.php'; // Sesuaikan dengan file koneksi Anda

// Query untuk mengambil data dari tabel gambar
$query = "SELECT username, komentar, nama_gambar, waktu_upload FROM gambar ORDER BY waktu_upload DESC";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil
if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gambar Unggahan</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menggunakan styles.css -->
    <style>
        body {
            background-color: #98c8c4;
            color: #2c2e3b;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            background-color: #2c2e3b;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        header .left-links, header .right-links {
            display: flex;
        }

        header a {
            color: #ffffff;
            text-decoration: none;
            padding: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #00aa00;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 80px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c2e3b;
        }

        .image-list {
            list-style-type: none;
            padding: 0;
        }

        .image-list li {
            background: rgba(0, 255, 0, 0.1);
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s ease;
            font-size: 1.2rem;
            text-align: center;
        }

        .image-list li:hover {
            background: rgba(0, 255, 0, 0.2);
        }

        .image-list img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="left-links">
            <a href="index.php">Home</a>
            <a href="userregistered.php">Registered Users</a>
        </div>
        <div class="right-links">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </header>
    <div class="container">
        <h1>Daftar Gambar</h1>
        <ul class="image-list">
            <?php
            // Memeriksa apakah ada data yang dikembalikan
            if (mysqli_num_rows($result) > 0) {
                // Menampilkan setiap data dalam list
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<strong>Username:</strong> " . htmlspecialchars($row['username']) . "<br>";
                    echo "<strong>Komentar:</strong> " . htmlspecialchars($row['komentar']) . "<br>";
                    echo "<strong>Waktu Upload:</strong> " . $row['waktu_upload'] . "<br>";
                    echo "<img src='uploads/" . htmlspecialchars($row['nama_gambar']) . "' alt='Gambar'><br>";
                    echo "</li>";
                }
            } else {
                echo "<li>Tidak ada gambar yang diunggah.</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>

<?php
// Menutup koneksi
mysqli_close($conn);
?>
