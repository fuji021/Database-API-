<?php
include('connection.php');
$id = (int)$_POST['id'];
$query = 'delete from tbl_phone where id ='.$id;
$result = mysqli_query($query) or die(mysqli_error());
if(mysqli_affectec_row() > 0) {
    echo 'Menghapus data sukses';
} else {
    echo 'Tidak Sukses';
}
?>