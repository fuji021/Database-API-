<?php
$conn = mysqli_connect("localhost","root","","db_phone2") or die(mysqli_error($conn));
mysqli_select_db($conn,"db_phone2") or die(mysqli_error($conn));
?>