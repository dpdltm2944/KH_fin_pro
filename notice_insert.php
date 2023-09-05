<?php
    require "sql_connect.php"
    session_start();

    if($_SESSION['loginID'] == ""){
        $user = "not login";
    } else {
        $user = $_SESSION['loginID'];
    }
    $subject = $_POST['subject'];
    $content = $_POST['content'];
  
    $sql_str = "insert into notice set subject='$subject', content='$content', user_id='$user'";
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    
    if($result){
        echo "글 등록 성공";
    }else {
        echo "글 등록 실패";
    }

?>
