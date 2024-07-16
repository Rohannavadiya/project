<?php
    $conn=new mysqli('localhost','root','','conntest');
    if(!$conn)
    {
        die('connection stopped...');
        echo "hi";

    }
    else{
        if($conn)
        {
            echo "connected...";
        }
        $sql="delete from conntab where id=1011";
        if($conn->query($sql)==true)
        {
            echo "delete suceessfully...";
        }
        else{
            echo "error";
        }
    }
?>