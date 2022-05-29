<?php
$checklogin = 0;
    $passcodingy=$_POST['passcode'];
    if($passcodingy == "mcpscout6/2"){
        $checklogin = 1;
        header("Location: home.php");
    }

?>