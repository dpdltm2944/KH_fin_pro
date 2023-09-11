<?php
    require "sql_connect.php";
    //파라미터 저장
    $id=$_POST['id'];
    $pass=$_POST['password'];
   // $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    //DB쿼리
   // $sql_str = "select * from user where id = '$id' and password = '$hashed_pass';";
      $sql_str = "select * from user where id = '$id' and password = '$pass';";

    //쿼리 결과
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    if($result){
        echo "로그인 성공(success)";
        session_start();
        $_SESSION['loginID'] = $id;
        $_SESSION['type'] = $result['type'];
        $_SESSION['user_no'] = $result['no'];
        $_SESSION['user_name'] = $result['name'];
    }else{
        echo "로그인 실패(fail)";
    }

?>

<a href="/">메인페이지</a>
