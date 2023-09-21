<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필 수정</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">메인</a></li>
                <li><a href="/evaluation.php">합격자 발표</a></li>
                <li><a href="/notice.php">공지사항</a></li>
                <li><a href="/qna.php">문의하기</a></li>
                <li><a href="/profile.php">마이페이지</a></li>
                <?php
                session_start();
                if ($_SESSION['loginID'] == "") {
                    echo "<li><a href=\"/login.php\">로그인</a></li>";
                } else {
                    echo "<li><a href=\"/logout.php\">로그아웃</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <section class="section profile">
        <?php
        if ($_SESSION['loginID']) {
            $id = $_SESSION['loginID'];

            require "sql_connect.php";

            $sql_str = "call my_profile('$id');";
            $return = sql_con($sql_str);
        } else {
            echo "<script>alert('로그인 후 이용하세요.');history.back();</script>";
        }
        $result = mysqli_fetch_array($return);
        ?>
        <h1>나의 프로필</h1>
        <div class="profile-info">
        <form action="profile_edit_proc.php" method="post">
            <h2>사용자 이름: <?php echo $result['name']. "\n"; ?> </h2>
            <p>비밀번호 : <input type = "password" name = "pass">
            <p>비밀번호(Re) : <input type = "password" name = "pass_re">
            <p>이름 : <?php echo $result['name']. "\n"; ?>
            <p>성별 : <?php echo $result['sex']. "\n"; ?>
            <p>주소 : <input type = "text" name="address" value="<?php echo $result['address']. "\n"; ?>">
            <p>전화번호 : <input type= "text" name = "phone" value="<?php echo $result['phone']. "\n"; ?>">
                       
            <input type="submit" value="프로필 수정" name="submit">
            </form>
        </div>
    </section>

    <!-- 다른 프로필 섹션 내용을 추가할 수 있습니다 -->

    <footer>
        <p>&copy; 2023 </p>
    </footer>
</body>

</html>