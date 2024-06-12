<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Hashing password sebelum membandingkan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            // 2. Membandingkan hashed password
            if (password_verify($password, $row['password'])) {           
                //$_SESSION["id_user"] = $row['id_user'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['nama'] = $row['nama'];
                echo "
<script>
localStorage.setItem('login', JSON.stringify(true));
window.location.href= '../index.php';
</script>";  
                //$_SESSION['no_hp'] = $row['no_hp'];
                //header("Location: ../index.php");
                //exit;
            } else {
                echo 'Login gagal. Email atau password salah.';
            }
        } else {
            echo 'Login gagal atau Belum membuat akun.';
        }
    } else {
        echo "Error: Prepare statement gagal.";
    }

    $stmt->close();
    $conn->close();
}
?>
