<?php
include 'koneksi.php';

$sql = "SELECT absensi.id, siswa.nama, siswa.kelas, absensi.tanggal, absensi.status FROM absensi
JOIN siswa ON absensi.id_siswa = siswa.id";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
