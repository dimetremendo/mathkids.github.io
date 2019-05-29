<?php
    $db = mysqli_connect("localhost", "root", "root", "mainkids");

    if( !$db ){
        echo mysqli_connect_error();
        exit;
    }
?>