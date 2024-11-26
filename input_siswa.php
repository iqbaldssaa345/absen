<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO siswa (nama, kelas) VALUES (:nama, :kelas)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nama' => $nama, 'kelas' => $kelas]);

echo "Data siswa berhasil ditambahkan!";
}
