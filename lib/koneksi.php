<?php
 
$host = 'localhost';
$dbname = 'db_absensi';
$username = 'root';
$password = '12345678';

try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Koneksi gagal: " . $e->getMessage());
}