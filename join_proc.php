<?php
    require "sql_connect.php";

    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $register_number = $_POST['register_number'];
    $address = $_POST['address'];
    $academic = $_POST['academic'];
    
    

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

    
    $sql = "insert into user set
            id='$id',
            password='$pass',
            name='$name',
            phone='$phone',
            email='$email',
            age='$age',
            sex='$sex',
            register_number='$register_number',
            address='$address',
            academic='$academic'
            ";
    $return = sql_con($sql);
    if($return){
        echo "<script>";
        echo "alert('회원가입 성공!')";
        echo "</script>";
    }
    else {
        echo "<script>";
        echo "alert('회원가입 실패')";
        echo "</script>";
    }    
    echo "<script>location.href='/login.php';</script>";
?>
