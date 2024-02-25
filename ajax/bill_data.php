<?php
$challan=$_POST['invoice'];
$challan=str_replace("\n", '', $challan);
$challan=str_replace(' ', '', $challan);
$total=$_POST['total'];
$total1=$_POST['total1'];
$pcs=$_POST['pcs'];
$conn=mysqli_connect("localhost","root","","skt");
$sql="SELECT * FROM `challan_detail` WHERE `challan_no` = '$challan'";
$result=mysqli_query($conn,$sql);
if ($result) {
    $data=mysqli_fetch_assoc($result);
$name=$data['name'];
$gst=$data['gst'];
$date=$data['date'];
$qulity=$data['qulity'];
$hsn=$data['hsn'];
$price=$data['price'];
$t=$price*$total1;
$sql1="INSERT INTO `sell` (`invoice_no`, `name`, `gst`, `amount`,`pending_amount`, `date`) VALUES ('$challan', '$name', '$gst', '$total','$total', '$date')";
$result1=mysqli_query($conn,$sql1);
$sql2="INSERT INTO `p_of_sell` (`invoice_no`, `p_name`, `hsn`, `price`, `quntity`, `total`) VALUES ('$challan', '$qulity', '$hsn', '$price', '$total1', '$t')";
$result2=mysqli_query($conn,$sql2);
$sql3="UPDATE `challan_detail` SET `pcs` = '$pcs' WHERE `challan_detail`.`challan_no` = '$challan'";
$result3=mysqli_query($conn,$sql3);
$sql4="INSERT INTO `total` (`invoice_no`, `name`, `gst`, `amount`,`date`) VALUES ('$challan', '$name', '$gst', '$total','$date')";
$result4=mysqli_query($conn,$sql4);
}else{
echo "no";
}

?>