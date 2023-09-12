<?php
    require "sql_connect.php";
    require "passwd.php";
    //파라미터 저장
    $id=$_POST['id'];
    $pass=$_POST['password'];
    
    
    //DB쿼리
    $sql_str = "call login_user('$id')";

    //쿼리 결과
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    $hashed_pass = pass_crypt($result['password'], 'd');    
    
    if($result && $pass == $hashed_pass){
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
