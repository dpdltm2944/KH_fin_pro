<?php

    $test_no = $_GET['test_no'];
    $user_name = $_GET['user_name'];
    require "sql_connect.php"
    $sql_str = "select * from test_result where user_no=$user_no && user_name=$user_name ";
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>시험 결과</title>
        <h1>시험 결과</h1>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
            결과 : <?php echo $result['result']."\n"; ?> 
    </body>
</html>
