<?php
header("Content-Type: application/json");

include "../../config/database.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"
SELECT *
FROM buku
WHERE id='$id'
");

$data = mysqli_fetch_assoc($query);

echo json_encode($data);