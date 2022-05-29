<?php
$checklogin = 0;
    $passcodingy=$_POST['passcode'];
    if($passcodingy == ""){         # <-------put your passcode here
        $checklogin = 1;
        header("Location: home.php");
    }

?>
