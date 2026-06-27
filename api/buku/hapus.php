<?php

include "../../config/database.php";


$id = $_GET['id'];


$query = mysqli_query($conn,"
DELETE FROM buku
WHERE id='$id'
");


if($query){


echo json_encode([

"status"=>true,

"message"=>"Buku berhasil dihapus"

]);


}else{


echo json_encode([

"status"=>false,

"message"=>"Gagal menghapus buku"

]);


}


?>