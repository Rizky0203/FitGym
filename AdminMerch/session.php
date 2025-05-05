<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Login/Login2.php"); // Arahkan ke login jika tidak admin
    exit;
}
?>
