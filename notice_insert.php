<?php
    require "sql_connect.php";
    session_start();

    if($_SESSION['loginID'] == ""){
        $user = "not login";
    } else {
        $user = $_SESSION['loginID'];
    }
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    
    $sql_str = "call notice_insert('$subject', '$content', '$user');";
    $return = sql_con($sql_str);
    
    if($return){
        echo "글 등록 성공";
    }else {
        echo "글 등록 실패";
    }

?>
