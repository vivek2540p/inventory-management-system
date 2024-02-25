<?php
$conn=mysqli_connect("localhost","root","","skt");
$name=$_POST['name'];
$gst=$_POST['gst'];
$add=$_POST['add'];
$sql="INSERT INTO `company` (`name`, `address`, `gst`) VALUES ('$name', '$add', '$gst')";
$result=mysqli_query($conn,$sql);
?>