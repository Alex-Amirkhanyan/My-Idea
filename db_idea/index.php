<?php
//    $letters = range('a', 'z');
//    $conn = mysqli_connect('localhost', 'root', '');


//
//    for ($i = 0; $i < count($letters); $i++) {
//        $sql = "CREATE DATABASE $letters[$i] CHARACTER SET utf8 COLLATE utf8_general_ci ";
//        mysqli_query($conn, $sql);
//    }


//    for ($i = 0; $i < count($letters); $i++) {
//        $sql = "DROP DATABASE $letters[$i]";
//        mysqli_query($conn, $sql);
//    }



//    for ($i = 0; $i < count($letters); $i++) {
//        $conn = mysqli_connect('localhost', 'root', '', $letters[$i]);
//        $letter = $letters[$i];
//        for ($j = 0; $j < count($letters); $j++) {
//            $tb_name = $letter . $letters[$j];
//            $sql = "CREATE TABLE IF NOT EXISTS $tb_name(
//                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                firstname VARCHAR(40) NOT NULL,
//                lastname VARCHAR(40) NOT NULL,
//                email VARCHAR(60),
//                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//                )";
//            $conn->query($sql);
//        }
//    }