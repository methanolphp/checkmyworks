<?php include('condb.php');
$id=$_GET['ID'];
$sql = "DELETE FROM `tbl_works` WHERE `tbl_works`.`id` = $id";
mysqli_query($con,$sql);
header("Location: home.php");
?>