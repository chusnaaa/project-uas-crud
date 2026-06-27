<?php
header("Content-Type: application/json");

include "../../config/database.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];

$query = mysqli_query($conn,"
INSERT INTO buku
(judul, penulis, tahun, kategori_id)
VALUES
('$judul','$penulis','$tahun','$kategori')
");

if($query){

    echo json_encode([
        "status"=>true,
        "message"=>"Buku berhasil ditambahkan"
    ]);

}else{

    echo json_encode([
        "status"=>false,
        "message"=>"Gagal menambahkan buku"
    ]);

}