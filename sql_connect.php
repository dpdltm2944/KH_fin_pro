<?php
    function sql_con($sql_str){
    //$connect = mysqli_connect("96.96.96.12","root","P@ssw0rd","testla");    
    $conn = new mysqli("localhost", "root","P@ssw0rd","testla") or die("Connect failed: %s\n". $conn -> error);
    
    if(!$conn){
        echo "mysql connect fail";
        die("DB Connect Failed".mysqli_connect_error());
        exit;
    }    

    //쿼리 결과
    $return = mysqli_query($conn, $sql_str);
    mysqli_close($conn);
    return $return;
    }
?>
