<?php  

include "conn.php";

$sql = "SELECT * FROM `student_profile` ORDER BY `id` DESC";
$result = mysqli_query($conn, $sql);
