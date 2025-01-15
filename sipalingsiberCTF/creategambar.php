<?php
require 'function.php';

// Proses form saat dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = htmlspecialchars($_POST['username']);
    $komentar = htmlspecialchars($_POST['komentar']);
    
    // Proses upload gambar
    $gambar = $_FILES['gambar'];
    $gambarNama = $gambar['name'];
    $gambarTmp = $gambar['tmp_name'];
    $gambarUkuran = $gambar['size'];
    $gambarError = $gambar['error'];

    // Tentukan lokasi penyimpanan gambar
    $lokasiGambar = 'uploads/' . $gambarNama;

    // Cek jika file adalah gambar dan tidak ada error
    if ($gambarError === 0 && $gambarUkuran > 0) {
        if (move_uploaded_file($gambarTmp, $lokasiGambar)) {
            // Simpan data ke database
            $sql = "INSERT INTO gambar (username, komentar, nama_gambar) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $komentar, $gambarNama);
            
            if ($stmt->execute()) {
                echo "Gambar berhasil diunggah dan disimpan.";
            } else {
                echo "Gagal menyimpan data: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "File tidak valid atau terjadi kesalahan saat mengunggah.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <link rel="stylesheet" href="styles.css">
</head>

    </header>

</html>
<?php
require 'function.php';

// Proses form saat dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = htmlspecialchars($_POST['username']);
    $komentar = htmlspecialchars($_POST['komentar']);
    
    // Proses upload gambar
    $gambar = $_FILES['gambar'];
    $gambarNama = $gambar['name'];
    $gambarTmp = $gambar['tmp_name'];
    $gambarUkuran = $gambar['size'];
    $gambarError = $gambar['error'];

    // Tentukan lokasi penyimpanan gambar
    $lokasiGambar = 'uploads/' . $gambarNama;

    // Cek jika file adalah gambar dan tidak ada error
    if ($gambarError === 0 && $gambarUkuran > 0) {
        if (move_uploaded_file($gambarTmp, $lokasiGambar)) {
            // Simpan data ke database
            $sql = "INSERT INTO gambar (username, komentar, nama_gambar) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $komentar, $gambarNama);
            
            if ($stmt->execute()) {
                echo "Gambar berhasil diunggah dan disimpan.";
            } else {
                echo "Gagal menyimpan data: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "File tidak valid atau terjadi kesalahan saat mengunggah.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="left-links">
        <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="rules.html">Rules</a>
            <a href="userregistered.php">User Registered</a>
            <a href="panitiadata.php">Data Panitia</a>
        </div>
        <div class="right-links">
            <a href="creategambar.php">Berikan Kritik dan Saran</a>   
            <a href="pemanggilangambar.php">Kritik dan Saran</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </header>

    <!-- Content Section -->
    <h2>Form Upload Gambar</h2>
    <form action="creategambar.php" method="POST" enctype="multipart/form-data">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Komentar:</label>
        <textarea name="komentar" required></textarea><br><br>

        <label>Upload Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
