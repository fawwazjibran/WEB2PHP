<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, arahkan kembali ke halaman login
    header("Location: login.php");
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Selamat Datang, Admin</h2>
    <p>Ini adalah halaman admin.</p>
    <p>Username Anda: <?php echo $username; ?></p>
</body>
</html>
