//프로필 사진 등록 php 코드

// path: /img/profile_[user_id].php

//
// db에 파일 저장 결로/파일명 저장

<?php
require "sql_connect.php";
session_start();
$user_id = $_SESSION['loginID'];
$img = $_FILES['img'];
$filename = $img['name'];
$filetype = $img['type'];
$filesize = $img['size'];
$tmp_name = $img['tmp_name']; //임시 저장소
$error = $img['error'];

$upload_dir = "./img/";
$upload_file = $upload_dir . basename($filename);
// 파일 이름 proifle_[user_id].jpg 로 변경
$upload_file = $upload_dir . "profile_" . $user_id . ".jpg";


//파일 업로드

if ($error == 0) {
    if (move_uploaded_file($tmp_name, $upload_file)) {
        echo "파일 업로드 성공";
        //db에 파일 저장 경로/파일명 저장
        $sql_str = "update user set img_path='$upload_file' where id='$user_id'";
        $return = sql_con($sql_str);
        if ($return) {
            echo "db에 파일 저장 성공";
        } else {
            echo "db에 파일 저장 실패";
        }
    } else {
        echo "파일 업로드 실패";
    }
} else {
    echo "파일 업로드 실패";
}



