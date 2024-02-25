<?php
    $conn=mysqli_connect("localhost","root","","skt");
    $invoice=$_POST['invoice'];
    // $invoice=str_replace("\n", '', $invoice);
    // $invoice=str_replace(' ', '', $invoice);
    $method=$_POST['method'];
    $redio=$_POST['redio'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];
    $sql="SELECT * FROM `sell` WHERE `invoice_no`='$invoice'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($result);
    $p_a=$data['amount']-$amount;
    if($method=="cash"){
        if($redio==0){
            $sql="INSERT INTO `customers_payment_details` (`invoice_no`, `method`, `date`,`p_amount`) VALUES ('$invoice', '$method','$date','$amount')";
            $result=mysqli_query($conn,$sql);
            $sql2="UPDATE `sell` SET `pending` = 0 WHERE `sell`.`invoice_no` = '$invoice' ";
            $result2=mysqli_query($conn,$sql2);
            $sql3="UPDATE `sell` SET `pending_amount` = 0 WHERE `sell`.`invoice_no` = '$invoice' ";
            $result3=mysqli_query($conn,$sql3);
        }else{
            
            $sql="INSERT INTO `customers_payment_details` (`invoice_no`, `method`, `date`,`p_amount`) VALUES ('$invoice', '$method','$date','$amount')";
            $result=mysqli_query($conn,$sql);
            $sql3="UPDATE `sell` SET `pending_amount` = '$p_a' WHERE `sell`.`invoice_no` = '$invoice' ";
            $result3=mysqli_query($conn,$sql3);
        }
    }else{
        $cnumber=$_POST['cheque_number'];
        $bname=$_POST['bank_name'];
        if($redio==0){
            $sql="INSERT INTO `customers_payment_details` (`invoice_no`, `method`, `cheque_number`,`bank_name`, `date`,`p_amount`) VALUES ('$invoice', '$method', '$cnumber','$bname', '$date','$amount')";
            $result=mysqli_query($conn,$sql);
            $sql2="UPDATE `sell` SET `pending` = 0 WHERE `sell`.`invoice_no` = '$invoice' ";
            $result2=mysqli_query($conn,$sql2);
            $sql3="UPDATE `sell` SET `pending_amount` = 0 WHERE `sell`.`invoice_no` = '$invoice' ";
            $result3=mysqli_query($conn,$sql3);
        }else{
            $sql="INSERT INTO `customers_payment_details` (`invoice_no`, `method`, `cheque_number`,`bank_name`, `date`,`p_amount`) VALUES ('$invoice', '$method', '$cnumber','$bname', '$date','$amount')";
            $result=mysqli_query($conn,$sql);
            $sql3="UPDATE `sell` SET `pending_amount` = '$p_a' WHERE `sell`.`invoice_no` = '$invoice' ";
            $result3=mysqli_query($conn,$sql3);
        }
    }


?>