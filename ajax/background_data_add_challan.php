<?php
$conn=mysqli_connect("localhost","root","","skt");
if(isset($_POST['id'])){
    $name=$_POST['id'];
    $sql=" SELECT * FROM `company` WHERE `name`='$name' ";
    $result=mysqli_query($conn,$sql);
    $array=json_encode(mysqli_fetch_array($result));
    echo $array;
}


?>