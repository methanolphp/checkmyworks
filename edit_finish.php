<?php include("condb.php");
$id = $_GET['ID'];
$sql = "UPDATE `tbl_works` SET `status`= 'finish' WHERE id = $id";
mysqli_query($con,$sql);
header("Location: home.php")
?>
