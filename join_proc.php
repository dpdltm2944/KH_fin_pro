<?php
require "sql_connect.php";
require "passwd.php";

$id = $_POST['id'];
$pass = $_POST['pass'];
$hashed_pass = pw_crypt($pass, 'e');
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$register_number = $_POST['register_number'];
$address = $_POST['address'];
$academic = $_POST['academic'];

// 회원가입 입력 값 검증
if ($id == "" || preg_match("/[^a-zA-Z0-9]/",$id)) {
    echo "아이디 입력값의 형식이 올바르지 않습니다.";
    exit;
} else if ($pass == "" || preg_match("/[^a-zA-Z0-9]/",$pass)) {
    echo "비밀번호 입력값의 형식이 올바르지 않습니다.";
    exit;
} else if ($name == "" || preg_match("/[^a-zA-Z가-힣]+$/", $name)) {
    echo "이름 입력값의 형식이 올바르지 않습니다.";
    exit;
} else if ($phone == "" || preg_match("/(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}/",$phone)) {
    echo "휴대폰 입력값의 형식이 올바르지 않습니다.";
    exit;
}
$sql_str = "call join_user('$id','$hashed_pass','$name',
            '$phone','$email','$age','$sex','$register_number',
            '$address','$academic');";

$return = sql_con($sql_str);
if ($return) {
    echo "<script>";
    echo "alert('회원가입 성공!')";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('회원가입 실패')";
    echo "</script>";
}
echo "<script>location.href='/login.php';</script>";
?>