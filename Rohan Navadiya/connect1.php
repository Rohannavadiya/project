<?php
    $conn=new mysqli('localhost','root',' ','conntest');
    if(!$conn)
    {
        die('Connection not establish....');
        echo "hi";

    }
    else
    {
        if($conn)
        {
            echo "connect successfully....";
        }
        $sql="INSERT INTO conntab(firstname,lastname,gender,email,password,phone)Values('s','Khan','m','abc@gmail.com','jdhsfh',9925672110)";
        if($conn->query($sql)==true)
        {
            echo "inserted";
        }
        else
        {
            echo "something wrong";
            
        }
    }
?>