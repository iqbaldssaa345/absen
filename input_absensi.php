<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
 

$sql = "INSERT INTO absensi (id_siswa, tanggal, status) VALUES (:id_siswa, :tanggal,
:status)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id_siswa' => $id_siswa, 'tanggal' => $tanggal, 'status' => $status]);

echo "Absensi berhasil dicatat!";
}

$siswa = $pdo->query("SELECT * FROM siswa")->fetchAll(PDO::FETCH_ASSOC);
