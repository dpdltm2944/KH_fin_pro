<?php
require "sql_connect.php";
session_start();
$title = $_GET['title'];
$author = $_SESSION['loginID'];
$content = $_GET['content'];

if (empty($author)) {
    //경고창 띄우기
    echo
        "<script>
            alert('로그인 후 이용하세요.');
            </script>";
    //이전 페이지로 이동
    echo "<script>history.back();</script>";
    exit;
} elseif (empty(trim($title))) {
    //경고창 띄우기
    echo
        "<script>
            alert('제목은 비우실 수 없습니다.');
            </script>";
    //이전 페이지로 이동
    echo "<script>history.back();</script>";
    exit;
} elseif (empty(trim($content))) {
    //경고창 띄우기
    echo
        "<script>
            alert('내용은 비우실 수 없습니다.');
            </script>";
    //이전 페이지로 이동
    echo "<script>history.back();</script>";
    exit;
} else {
    $sql_str = "insert into qna set
        subject='$title',
        user_id='$author',
        content='$content'";
    $return = sql_con($sql_str);
    if ($return) {
        echo "글 등록 성공";
    } else {
        echo "글 등록 실패";
    }

}




?>