<?php include('condb.php');
 $workname=$_POST['work_names'];
 $worktype=$_POST['worktype'];
 $scout_or_not=$_POST['scout_or_not'];
 $subject = $_POST['subject'];
 $status = $_POST['status'];
 $sql = "INSERT INTO `tbl_works`(`id`, `work_names`, `type_works`, `subject`, `scout_or_not`, `status`) VALUES (NULL,'$workname','$worktype','$scout_or_not','$subject','$status']')";
 mysqli_query($con,"INSERT INTO `tbl_works`(`id`, `work_names`, `type_works`, `subject`, `scout_or_not`, `status`) VALUES (NULL,'$workname','$worktype','$scout_or_not','$subject','$status')");
header("Location: home.php");
?>