<?php
$conn=mysqli_connect("localhost","root","","skt");
if(isset($_POST['id1'])){
    $name=$_POST['id1'];
    $sql=" SELECT * FROM `company` WHERE `name`='$name' ";
    $result=mysqli_query($conn,$sql);
    $array=json_encode(mysqli_fetch_array($result));
    echo $array;
  
}
?>