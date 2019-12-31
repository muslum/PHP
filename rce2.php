<?php 
error_reporting(0);
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    $ip = "8.8.8.8";
    echo " hoşgeldin";
    echo " $ip";
    echo "<pre>";
    eval(system("curl https://ipinfo.ip/$ip > bilgi/bilgi.txt"));
    echo "</pre>";
?>