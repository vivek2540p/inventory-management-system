<?php
            
            $conn=mysqli_connect("localhost","root","","skt");   
            $output="";
            if(isset($_POST['name'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $sql="SELECT * FROM `sell` WHERE `gst` = '$id' AND (`invoice_no` LIKE '$name%' OR `date` LIKE '$name%') ORDER BY `date` desc";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    $invoice=$row['invoice_no'];
                    $type=$row['type'];
                    $id=$row['gst'];
                    $sell="s";
                $output.="<tr>
                <td class='text-center'>".$row['invoice_no']."</td>
                <td class='text-center'>".$row['gst']."</td>                     
                <td class='text-center'>".$row['amount']."</td>                     
                <td class='text-center'>".$row['date']."</td>
                <td class='text-center'><input type='submit' id='view_pdetail'  value='view' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$sell}'></td>
                <td class='text-center'><input type='submit' id='view_detail'  value='view' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$type}' data-gst='{$id}'></td>   
                <td class='text-center'><input type='submit' id='delet'  value='Delet' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$type}'></td></tr>";   
            }
            }else{
            $id=$_POST['id'];
            $sql="SELECT * FROM `sell` WHERE `gst` = '$id' ORDER BY `date` desc";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
            $invoice=$row['invoice_no'];
            $type=$row['type'];
            $sell="s";
            $id=$row['gst'];
            $output.="<tr>
            <td class='text-center'>".$row['invoice_no']."</td>
            <td class='text-center'>".$row['gst']."</td>                     
            <td class='text-center'>".$row['amount']."</td>                     
            <td class='text-center'>".$row['date']."</td>
            <td class='text-center'><input type='submit' id='view_pdetail'  value='view' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$sell}'></td>
            <td class='text-center'><input type='submit' id='view_detail'  value='view' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$type}' data-gst='{$id}'></td>  
            <td class='text-center'><input type='submit' id='delet'  value='Delet' name='submit' class='btn btn-primary' data-invoice='{$invoice}' data-type='{$type}'></td></tr>";   
        }
    } 
        echo $output;
               
             
      ?>