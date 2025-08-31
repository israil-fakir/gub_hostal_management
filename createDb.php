<?php
$servername="localhost";
$username="root";
$passward="";
$conn= new mysqli($servername, $username, $passward);

if(!$conn){
    echo"unsuccesful";
}
else{
    echo"Successful";
}
$sql="CREATE DATABASe d4";

if($conn->query($sql)===True){
    echo"successful";
    }
        else
    {
        echo "successful" .$conn->error;
    }
?>