<?php
    session_start();

    session_destroy();

    echo "<script>alert('LOGED OUT'); location.href='/';</script>";
?>