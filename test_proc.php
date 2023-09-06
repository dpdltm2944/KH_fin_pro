<?php
    require "sql_connect.php";
    session_start();
    //파라미터 저장
    $no=$_GET['test_no'];
    $user_no = $_SESSION['user_no'];
    $order_id = date('YmHis')+$no+$user_no;
    //DB쿼리
    
    $sql_str = "insert into test_order set test_no='$no', user_no='$user_no', order_id='$order_id'";

    //쿼리 결과
    $return = sql_con($sql_str);

    if($return){
        echo "<script>alert('정상적으로 접수되었습니다.');</script>";
    }else{
        echo "<script>alert('접수오류 재시도해주세요..'); </script>";
    }
    echo "<script>location.href='/';</script>"
    
?>
