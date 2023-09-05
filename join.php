<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
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

    <form method="post" action="join_proc.php">
        <div class="form-group">
            <label for="id">* 아이디:</label>
            <input type="text" name="id" id="id" maxlength="15" placeholder="(최대 15자리까지 입력 가능)">
        </div>
        <div class="form-group">
            <label for="pass">* 비밀번호:</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="form-group">
            <label for="name">* 이름:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="phone">* 휴대폰:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="email">* 이메일:</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="age">* 나이:</label>
            <input type="text" name="age" id="age">
        </div>
        <div class="form-group">
            <label for="sex">* 성별:</label>
            <input type="text" name="sex" id="sex">
        </div>
        <div class="form-group">
            <label for="register_number">* 주민번호:</label>
            <input type="text" name="register_number" id="register_number">
        </div>
        <div class="form-group">
            <label for="address">주소:</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="academic">학력:</label>
            <input type="text" name="academic" id="academic">
        </div>
        <p>* 표시 항목은 필수 입력 항목입니다.</p>
        <div class="form-group">
            <input type="submit" value="가입">
            <input type="reset" value="취소">
        </div>
    </form>

</body>

</html>