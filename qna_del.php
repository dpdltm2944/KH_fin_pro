<?php
    require "sql_connect.php";
    session_start();
    

    
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
