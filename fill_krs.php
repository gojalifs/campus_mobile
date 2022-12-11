<?php

// File: fill_krs.php

// Koneksi ke database
$db = new mysqli('localhost', 'user', 'password', 'db_name');

// Mengambil parameter NIM dan kode matakuliah dari request
$nim = $_POST['nim'];
$kode = $_POST['kode'];

// Menyiapkan perintah SQL untuk menambahkan data ke tabel KRS
$sql = "INSERT INTO KRS (NIM, Kode_Matakuliah, Semester) VALUES (?, ?, 1)";
$stmt = $db->prepare($sql);

// Mengikat parameter NIM dan kode matakuliah ke perintah SQL
$stmt->bind_param('ss', $nim, $kode);

// Menjalankan perintah SQL
$stmt->execute();

// Menutup koneksi ke database
$db->close();
