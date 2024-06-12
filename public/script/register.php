<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "member"; // New field: role
    $nama = $_POST['nama']; // New field: nama

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert new user
    $sql = "INSERT INTO user (email, password, role, nama) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $email, $hashed_password , $role, $nama);  // s
        $stmt->execute();

        if ($stmt->affected_rows === 1) {
            // Jika berhasil, alihkan ke halaman index atau halaman lain yang sesuai
            header("Location: ../index.php");
            exit;
        } else {
            echo 'Gagal membuat akun. Silakan coba lagi.';
        }
    } else {
        echo "Error: Prepare statement gagal.";
    }

    $stmt->close();
    $conn->close();
}
?>
