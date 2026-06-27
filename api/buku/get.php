<?php
header("Content-Type: application/json");

include "../../config/database.php";

$query = mysqli_query($conn, "
SELECT
    buku.id,
    buku.judul,
    buku.penulis,
    buku.tahun,
    buku.cover,
    kategori.nama AS kategori
FROM buku
JOIN kategori
ON buku.kategori_id = kategori.id
ORDER BY buku.id DESC
");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data);