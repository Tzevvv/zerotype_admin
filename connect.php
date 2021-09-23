<?php
    $hostname = 'localhost';
    $username = 'root';
    $pass ='';
    $database = 'zerotype';
    $conn = mysqli_connect($hostname,$username,$pass,$database);
    mysqli_query($conn, 'set names"utf8"');

 ?>
