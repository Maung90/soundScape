<?php
require_once '../sessionUser.php';
require '../koneksi.php';
// Mengambil data dari permintaan POST
$id_user = $_POST['id_user'];
$id_music = $_POST['id_music'];
// Menyiapkan pernyataan SQL untuk memasukkan data ke dalam tabel
$sql = mysqli_query($koneksi,"INSERT INTO favorit(id_fav,id_music,id_user) VALUES ('','$id_music', '$id_user')");

// Menjalankan pernyataan SQL dan memeriksa apakah data berhasil dimasukkan
if ($sql === true) {
    $response = "Data inserted successfully";
} else {
    $response = "Error: " . "<br>" . $koneksi->error;
}

// Menutup koneksi basis data
$koneksi->close();

// Mengirimkan respons ke permintaan AJAX
echo $response;
?>
