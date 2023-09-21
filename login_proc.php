<?php
    require "sql_connect.php";
    require "passwd.php";
    //파라미터 저장
    $id=$_POST['id'];
    $pass=$_POST['password'];
    
    //로그인 ID/PW 검증
    if(preg_match("/[^a-zA-Z0-9]/",$id)){
        echo "<script>alert('숫자와 영문만 입력가능합니다.'); location.href='/';</script>";
    }
    if(preg_match("/[^a-zA-Z0-9]/",$pass)){
        echo "<script>alert('숫자와 영문만 입력가능합니다.'); location.href='/';</script>";
    }
    //DB쿼리
    $sql_str = "call login_user('$id')";

    //쿼리 결과
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    $hashed_pass = pw_crypt($result['password'], 'd');    

    if($result && $pass == $hashed_pass){
        echo "<script>alert('로그인 성공'); location.href='/';</script>";
        session_start();
        $_SESSION['loginID'] = $id;
        $_SESSION['type'] = $result['type'];
        $_SESSION['user_no'] = $result['no'];
        $_SESSION['user_name'] = $result['name'];
    }else{
        echo "<script>alert('로그인 실패'); location.href='/';</script>";
    }
?>
