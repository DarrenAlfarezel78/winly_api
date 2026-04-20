<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    echo json_encode([
        "status" => "success",
        "message" => "Login Berhasil",
        "role" => $user['role'] // Penting untuk alur filter/dashboard kamu
    ]);
} else {
    echo json_encode(["status" => "error", "message" => "Akun tidak ditemukan atau password salah"]);
}
?>