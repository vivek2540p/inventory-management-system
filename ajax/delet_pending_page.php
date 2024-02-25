<?php
  $conn=mysqli_connect("localhost","root","","skt");
$invoice=$_POST['id'];
$type=$_POST['id1'];
$ch=$_POST['id2'];
$am=$_POST['id3'];
$am=(float)$am;
$invoice=str_replace("\n", '', $invoice);
$invoice=str_replace(' ', '', $invoice);
$type=str_replace("\n", '', $type);
$type=str_replace(' ', '', $type);
$ch=str_replace("\n", '', $ch);
$ch=str_replace(' ', '', $ch);
$sql1="SELECT * FROM `sell` WHERE `invoice_no` = '$invoice'";
$result1=mysqli_query($conn,$sql1);
$data=mysqli_fetch_assoc($result1);
$p_amount=$data['pending_amount'];
$p_amount=$data['pending_amount']+$am;
$sql2="UPDATE `sell` SET `pending_amount` = $p_amount WHERE `sell`.`invoice_no` = '$invoice'";
$result2=mysqli_query($conn,$sql2);
$sql3="UPDATE `sell` SET `pending` = 1 WHERE `sell`.`invoice_no` = '$invoice'";
$result2=mysqli_query($conn,$sql3);
$sql="DELETE FROM `customers_payment_details` WHERE `invoice_no`='$invoice' AND `type`='$type' AND `cheque_number`='$ch'";
$result=mysqli_query($conn,$sql);


?>