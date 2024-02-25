<?php

            $conn=mysqli_connect("localhost","root","","skt");   
            $output="";
            if(isset($_POST['name']) && $_POST['name']!=""){
                $name=$_POST['name'];
                $sql="SELECT * FROM `sell` WHERE `pending` = 1 AND (`invoice_no` LIKE '$name%' OR `name` LIKE '$name%' OR `date` LIKE '$name%') ORDER BY `date` desc";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    $invoice=$row['invoice_no'];
                    $pending_amount=0;
                    $sql3="SELECT * FROM `customers_payment_details` WHERE `invoice_no` = '$invoice'";
                    $result3=mysqli_query($conn,$sql3);
                    $row2=mysqli_num_rows($result3);
                    $temp_amount=0;
                    if($row2==0){
                        $pending_amount=$row['amount'];
                    }else{
                        
                        while($temp_row=mysqli_fetch_array($result3)){
                            $temp_amount+=$temp_row['p_amount'];
                        }
                        $pending_amount=$row['amount']-$temp_amount;
                    }
                $output.="<tr>
                <td class='text-center'>".$row['invoice_no']."</td>
                <td class='text-center'>".$row['name']."</td>                     
                <td class='text-center'>".$row['date']."</td>
                <td class='text-center'>".$row['amount']."</td>
                <td class='text-center'>".$pending_amount."</td>
                <td class='text-center'><input type='submit' id='view_detail'  value='Edit' name='submit' class='btn btn-primary' data-invoice='{$invoice}'></td></tr>";   
            }
            }else{
            $sql="SELECT * FROM `sell` WHERE `pending` = 1 ORDER BY `date` desc";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
            $invoice=$row['invoice_no'];
            $pending_amount=0;
                    $sql3="SELECT * FROM `customers_payment_details` WHERE `invoice_no` = '$invoice'";
                    $result3=mysqli_query($conn,$sql3);
                    $row2=mysqli_num_rows($result3);
                    $temp_amount=0;
                    if($row2==0){
                        $pending_amount=$row['amount'];
                    }else{
                        
                        while($temp_row=mysqli_fetch_array($result3)){
                            $temp_amount+=$temp_row['p_amount'];
                        }
                        $pending_amount=$row['amount']-$temp_amount;
                    }
            $output.="<tr>
            <td class='text-center'>".$row['invoice_no']."</td>
            <td class='text-center'>".$row['name']."</td>                     
            <td class='text-center'>".$row['date']."</td>
            <td class='text-center'>".$row['amount']."</td>
            <td class='text-center'>".$pending_amount."</td>
            <td class='text-center'><input type='submit' id='view_detail'  value='Edit' name='submit' class='btn btn-primary' data-invoice='{$invoice}'></td></tr>";   
        }
    } 
        echo $output;
               
             
      ?>