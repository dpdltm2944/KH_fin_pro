<?php
    require "sql_connect.php";

    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $academic = $_POST['academc'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // client 입력 값 검증
    if($id == ""){
        echo "아이디는 비우실 수 없습니다.";
        exit;
    }else if($pass == ""){
        echo "비밀번호는 비우실 수 없습니다.";
        exit;
    }else if($name == ""){
        echo "이름은 비우실 수 없습니다.";
        exit;
    }else if($phone == ""){
        echo "휴대폰 번호는 비우실 수 없습니다.";
        exit;
    }

    
    $sql = "insert into memeber set
            id='$id',
            pass='$pass',
            name='$name',
            address='$address',
            phone='$phone',
            academic='$academic'
            ";
    $return = sql_con($sql);
    if($return){
        echo "회원가입 성공";
    }
    else {
        echo "회원가입 실패";
    }    

?>
