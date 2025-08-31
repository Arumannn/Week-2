<?php
$database = mysqli_connect('localhost', 'root', '', 'mahasiswa');
    
    if($database){
        echo 'MySql is connected';
    }else{
        echo 'Mysql is unconnected';
    }
    echo "<br>";
?>