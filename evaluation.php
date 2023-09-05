<?php

    $test_no = $_GET['test_no'];
    $user_name = $_GET['user_name'];
    require "sql_connect.php"
    $sql = "select * from test_result where user_no=$user_no && user_name=$user_name ";
    $return = sql_con($sql);
    $result = mysqli_fetch_array($return);
?>


<!DOCTYPE html>
<html>
    <head>  
        <title><?php echo "시험결과"; ?> </title>
    </head>

    <body>
        <pre>
            결과 : <?php echo $result['result']."\n"; ?> 
    </body>
</html>
