<?php
    $conn=new mysqli('localhost','root',' ','conntest');
    if(!$conn)
    {
        die('connection fail...');
    }
    else
    {
        if($conn)
        {
            echo "connect suceessfull...";
        }
        $sql="select firstname,lastname,gender,email,password,phone from conntab";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "first name ".$row["first name"];
            }
        }
        else{
            echo "0 results";
            
        }
    }
    ?>