<?php
// Simpan file ini dengan nama login.php

// Fungsi untuk memeriksa kredensial pengguna (contoh sederhana)
function authenticateUser($username, $password) {
    // Implementasikan logika autentikasi sesuai kebutuhan aplikasi Anda
    // Misalnya, verifikasi username dan password di database
    // Contoh sederhana hanya untuk ilustrasi
    return ($username === 'user' && $password === 'password');
}

// Cek apakah form login disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan autentikasi
    if (authenticateUser($username, $password)) {
        // Jika autentikasi berhasil, arahkan ke halaman tours.html
        header('Location: tours.html');
        exit();
    } else {
        // Jika autentikasi gagal, Anda dapat menambahkan pesan kesalahan
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- header section starts-->

<header class="header">
    <section class="flex">
        <a href="home.html" class="logo">Jong Jawir</a>

        <nav class="navbar">
            <a href="home.html">Home</a>
            <a href="about.html">About</a>
            <a href="tours.html">Tours</a>
            <a href="destinations.html">Destinations</a>
            <a href="contact.html">Contact</a>
            <a href="signup.html">Sign Up</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
</header>
<!-- header section ends -->

<!-- home section starts -->
<div class="container home">

    <section class="flex">
        <form action="" method="post">
            <h3>Login</h3>

            <!-- Tambahkan pesan kesalahan jika autentikasi gagal -->
            <?php if (isset($error_message)) : ?>
                <div style="color: red;"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <input type="text" name="username" required maxlength="50" 
            placeholder="username" class="box">
            <input type="password" name="password" required maxlength="50"
            placeholder="password" required class="box">

            <div class="check">
                <label><input type="checkbox"/>Remember me</label>
                <a href="#">Forgot password ?</a>
            </div>
            <input type="submit" value="Login" name="search" class="btn">
            <div class="register">
                <p>Don't have an account ? <a href="signup.html" class="Register-link">Sign Up!</a></p>
            </div>
        </form>
    </section>
</div>
<!-- home section ends -->

<script src="script.js"></script>

</body>
</html>
