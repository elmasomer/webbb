<?php
// login.php

session_start();

// Sabit kullanıcı bilgisi (demo amaçlı)
$valid_username = "kullanici";
$valid_password = "sifre123";

// Formdan gelen verileri al
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Basit kontrol
if ($username === $valid_username && $password === $valid_password) {
    // Giriş başarılı, oturum değişkeni ata
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Ana sayfaya yönlendir (veya istediğin sayfa)
    header("Location: web projesi.html");
    exit();
} else {
    // Giriş başarısız, hata mesajı göster
    echo "<h3>Kullanıcı adı veya şifre yanlış!</h3>";
    echo "<a href='login.html'>Tekrar dene</a>";
}
?>
