<?php
    $conn=mysqli_connect("localhost","root","","skt");
    $invoice=$_POST['invoice_no'];
    $invoice=str_replace("\n", '', $invoice);
    $invoice=str_replace(' ', '', $invoice);
    $cname=$_POST['name'];
    $gst=$_POST['gst'];
    $add=$_POST['address'];
    $date=$_POST['date'];
    $gtotal=0;
    $sql="INSERT INTO `sell` (`invoice_no`, `name`, `gst`, `date`,`type`) VALUES ('$invoice', '$cname', '$gst', '$date','o')";
    $result=mysqli_query($conn,$sql);
    if($result){
    $pname=$_POST["product_name"];
    $hsn=$_POST["hsn"];
    $quntity=$_POST["quntity"];
    $price=$_POST['price'];
    $grate=$_POST['rate'];
    $gtotal=0;
    for($i=0;$i<count($pname);$i++)
    {
        $total=0;
        
        $gamount=0;
        $value=0;
     if(!empty($pname[$i]) && !empty($hsn[$i]) && !empty($quntity[$i]) && !empty($price[$i]) && !empty($grate[$i]))
     {
            $value=$quntity[$i]*$price[$i];
            $gamount=(($value*$grate[$i])/100);
            if($gst[1]=="7"){
            $total=$value+2*($gamount);
            }else{
            $total=$value+($gamount);
            }
            $sql="INSERT INTO `p_of_sell` (`invoice_no`, `p_name`, `hsn`, `quntity`, `price`,`total`) VALUES ('$invoice','$pname[$i]', '$hsn[$i]', '$quntity[$i]','$price[$i]', '$total');";
            $result=mysqli_query($conn,$sql);
            $gtotal+=$total;
     }
     $sql2="UPDATE `sell` SET `amount` = '$gtotal' WHERE `sell`.`invoice_no` = '$invoice' ";
    $result=mysqli_query($conn,$sql2);
    $sql3="UPDATE `sell` SET `pending_amount` = '$gtotal' WHERE `sell`.`invoice_no` = '$invoice' ";
    $result1=mysqli_query($conn,$sql3);
    $sql4="INSERT INTO `total` (`invoice_no`, `name`, `gst`,`amount`, `date`) VALUES ('$invoice', '$cname', '$gst','$gtotal', '$date')";
    $result=mysqli_query($conn,$sql4);
    }

    $sql1="SELECT * FROM `company` WHERE `gst`='$gst'";
    $result1=mysqli_query($conn,$sql1);
    $no=mysqli_num_rows($result1);
    if($no==0){
        $sql2="INSERT INTO `company` (`name`, `gst`, `address`) VALUES ('$cname', '$gst',  '$add')";
        $result2=mysqli_query($conn,$sql2);
    } 
}else{
    echo "error";
}



?>