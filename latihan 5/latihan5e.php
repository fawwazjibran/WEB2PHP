<?php
session_start();

// Data username dan password yang benar (misalnya)
$correct_username = 'fawwaz';
$correct_password = 'fawwaz123';

// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang di-input dari form
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Periksa apakah data yang dimasukkan cocok dengan yang benar
    if ($input_username === $correct_username && $input_password === $correct_password) {
        // Data benar, arahkan ke halaman admin
        $_SESSION['username'] = $input_username; // Simpan username di session jika perlu di halaman admin
        header("Location: admin5e.php"); // Ganti admin.php dengan halaman admin yang sesuai
        exit();
    } else {
        // Data tidak cocok, tampilkan pesan kesalahan
        $error_message = "Username atau password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Silakan Login</h2>
    <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

