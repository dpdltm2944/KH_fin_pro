<?php
    require "sql_connect.php";
    //파라미터 저장
    $id=$_POST['id'];
    $pass=$_POST['password'];

    //DB쿼리
    $sql = "select * from user where id = '$id' and password = '$pass';";

    //쿼리 결과
    $return = sql_con($sql);
    $result = mysqli_fetch_array($return);

    if($result){
        echo "로그인 성공(success)";
        session_start();
        $_SESSION['loginID'] = $id;
        $_SESSION['type'] = $result['type'];
    }else{
        echo "로그인 실패(fail)";
    }

?>

<a href="/">메인페이지</a>
