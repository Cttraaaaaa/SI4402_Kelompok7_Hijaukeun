<?php

    //koneksi kepada database
    $conn = mysqli_connect("localhost","root", "", "quiz_2");
    if (mysqli_connect_error()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>

