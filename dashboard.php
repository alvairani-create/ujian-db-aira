<?php
session_start();
include 'config.php';

if (!isset($_SESSION['nama'])) {
    header("Location: dashboard.php");
    exit();
} ?>

<!DOCTYPE html>
<html>
<head><title>Data Siswa</title></head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <h3>Hasil <link rel="stylesheet" href="index.php"></h3>


</body>
</html>
