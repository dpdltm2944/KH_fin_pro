<?php
    require "sql_connect.php";
    session_start();
    $title = $_POST['title'];
    $author = $_SESSION['loginID'];
    $content = $_POST['content'];
    if($author == ""){
        echo "로그인 후 이용해주세요.";
        exit;
    }
    // client 입력 값 검증
    if($title == ""){
        echo "제목은 비우실 수 없습니다.";
        exit;
    }else if($content == ""){
        echo "내용은 비우실 수 없습니다.";
        exit;
    }

    
    $sql_str = "insert into qna set
            subject='$title',
            user_id='$author',
            content='$content'";
    $return = sql_con($sql_str);
    if($return){
        echo "글 등록 성공";
    }
    else {
        echo "글 등록 실패";
    }    

?>
