<?php
    $subject = $_POST['subject'];
    $content = $_POST['content'];
  
    require "sql_connect.php"
    $sql = "insert into notice set subject='$subject', content='$content', user_id='$user_id'";
    $return = sql_con($sql);
    $result = mysqli_fetch_array($return);
    if($_SESSION['loginID'] == ""){
        $user = "not login";
    } else {
        $user = $_SESSION['loginID'];
    }

   


    if($result){
        echo "글 등록 성공";
    }else {
        echo "글 등록 실패";
    }

?>
