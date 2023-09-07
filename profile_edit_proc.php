<?php
// if($_SERVER['HTTP_REFERER'] != 'http://www.terry.com/member.php'){
//     echo "요청하신 경로가 올바르지 않습니다.";
//     exit;
// }
    require "sql_connect.php";

    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    session_start();
    //DB쿼리
    if($pass == ""){
    $sql = "update user set
            phone='$phone', 
            address='$address'
            WHERE id = '$_SESSION[loginID]'";
    }else{
        $sql = "update user set
            password = '$pass',
            phone='$phone',
            address='$address'
            WHERE id = '$_SESSION[loginID]'";
    }

    $return = sql_con($sql);

    if($return){
        echo "<script>alert('정보수정 완료'); location.href='/profile.php';</script>";
    }else{
        echo "<script>alert('정보수정 실패'); location.href='/profile.php';</script>";
    }
?>