<?php
    $conn=mysqli_connect("localhost","root","","skt");
    $invoice=$_POST['invoice'];
    $invoice=str_replace("\n", '', $invoice);
    $invoice=str_replace(' ', '', $invoice);
    $sql="DELETE FROM `challan_detail` WHERE `challan_no`='$invoice'";
    $result=mysqli_query($conn,$sql);

?>