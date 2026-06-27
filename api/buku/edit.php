<?php

include "../../config/database.php";


$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];


$query = mysqli_query($conn,"
UPDATE buku SET

judul='$judul',
penulis='$penulis',
tahun='$tahun',
kategori_id='$kategori'

WHERE id='$id'
");


if($query){

echo json_encode([
"status"=>true,
"message"=>"Buku berhasil diubah"
]);

}else{

echo json_encode([
"status"=>false,
"message"=>"Gagal mengubah buku"
]);

}

?>