<?php
  $conn=mysqli_connect("localhost","root","","skt");
$invoice=$_POST['id'];
$invoice=str_replace("\n", '', $invoice);
$invoice=str_replace(' ', '', $invoice);
$sql="DELETE FROM `total` WHERE `invoice_no`='$invoice'";
$result=mysqli_query($conn,$sql);
$sql1="DELETE FROM `sell` WHERE `invoice_no`='$invoice'";
$result1=mysqli_query($conn,$sql1);
$sql1="DELETE FROM `p_of_sell` WHERE `invoice_no`='$invoice'";
$result1=mysqli_query($conn,$sql1);
$sql2="DELETE FROM `challan_detail` WHERE `challan_no`='$invoice'";
$result2=mysqli_query($conn,$sql2);
?>