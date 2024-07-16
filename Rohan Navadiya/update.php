<?php
$conn=new mysqli('localhost','root',' ','conntest');
if(!$conn)
{
    die('connect error');
    echo "hi";

}
else{
    if($conn)
    {
        echo "connect sucessfull";

-    }
$sql="update conntab set firstname='salman',lastname='khan','Salman@gmail.com',password='imbhai',phone=1244567890 where id=1012";

if($conn->query($sql)==true)
{
    echo "updated....";
}
else
{
    echo "something wrong.....";
}
}

?>