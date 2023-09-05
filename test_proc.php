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
