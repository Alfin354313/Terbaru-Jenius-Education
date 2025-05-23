<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa apakah username dan password sesuai dengan yang diinginkan
    if ($username === "Alfin" && $password === "Alfin") {
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Ganti dengan email Anda
    $subject = "Pesan dari $name";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan Anda telah dikirim.";
    } else {
        echo "Terjadi kesalahan, pesan tidak dapat dikirim.";
    }
}
