<?php
    require "sql_connect.php";

    $pass=$_POST['pass'];
    $hashed_pass = pw_crypt($pass, 'e');

    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $user_id=$_SESSION['loginID'];

    session_start();
    //DB쿼리
    if($pass == ""){
        $sql_str = "call edit_profile('$phone', '$address'. '$user_id');";
    }else{
        $sql_str = "call edit_profile_pass('$phone', '$address'. '$user_id', '$hashed_pass');";
    }

    $return = sql_con($sql_str);

    if($return){
        echo "<script>alert('정보수정 완료'); location.href='/profile.php';</script>";
    }else{
        echo "<script>alert('정보수정 실패'); location.href='/profile.php';</script>";
    }
?>