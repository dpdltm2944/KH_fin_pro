<?php

    $order_id = $_POST['order_id'];
    $user_name = $_POST['user_name'];
    require "sql_connect.php";
    $sql_str = "call Evaluation('$order_id', '$user_name')";
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    echo $result;
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
            결과 : 
            <?php
            if ($result['test_point'] >= $result['test_point_min']){
                echo "축하합니다. 합격입니다.";
            }else{
                echo "불합격입니다.";
            }
            ?> 
    </body>
</html>
