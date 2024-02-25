<?php
  $conn=mysqli_connect("localhost","root","","skt");
$type=$_POST['data2'];
$from=$_POST['data'];
$to=$_POST['data1'];
$output="";

if($type=="sell"){
    $total=0;
        $sql="SELECT * FROM `sell`  WHERE `date` BETWEEN '$from' AND '$to' ORDER BY `date` desc";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){ 
            while($row=mysqli_fetch_array($result)){ 
                $total+=$row['amount'];
                $output.="<tr>
                <td >".$row['invoice_no']."</td>
                <td >".$row['name']."</td>      
                <td >".$row['gst']."</td>
                <td >".$row['amount']."</td>
                <td >".$row['date']."</td></tr> ";

            } 
            $output.="<tr>
            <td ></td>
            <td ></td>      
            <td >Total :</td>
            <td >".$total."</td>
            <td ></td></tr>";
        }else{ 
            $output .= 'No records found...'. "\n"; 
        }
}   
elseif($type=="purchase"){
    $total=0;
            $sql="SELECT * FROM `purchase` WHERE `date` BETWEEN '$from' AND '$to' ORDER BY `date` desc";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){ 
            while($row=mysqli_fetch_array($result)){ 
                $total+=$row['amount'];
                $output.="<tr>
                <td >".$row['invoice_no']."</td>
                <td >".$row['name']."</td>      
                <td >".$row['gst']."</td>
                <td >".$row['amount']."</td>
                <td >".$row['date']."</td></tr> ";
            } 
            $output.="<tr>
        <td ></td>
        <td ></td>      
        <td >Total :</td>
        <td >".$total."</td>
        <td ></td></tr>";
        }else{ 
            $output .= 'No records found...'. "\n";  
        }
}   
elseif($type=="pp"){
          $total=0;
          $pending=0;
            $sql="SELECT * FROM `sell` WHERE `date` BETWEEN '$from' AND '$to' AND `pending` = 1 ORDER BY `date` desc";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){ 
            while($row=mysqli_fetch_array($result)){ 
                $total+=$row['amount'];
                $pending+=$row['pending_amount'];
                $output.="<tr>
                <td >".$row['invoice_no']."</td>
                <td >".$row['name']."</td>      
                <td >".$row['gst']."</td>
                <td >".$row['amount']."</td>
                <td >".$row['pending_amount']."</td>
                <td >".$row['date']."</td></tr> ";
        } 
        $output.="<tr>
        <td ></td>
        <td ></td>      
        <td >Total :</td>
        <td >".$total."</td>
        <td >".$pending."</td>
        <td ></td></tr>";
    }else{ 
        $output .= 'No records found...'. "\n";
    }
}   
elseif($type=="p_p"){
    $total=0;
    $pending=0;
        $sql="SELECT * FROM `purchase` WHERE `date` BETWEEN '$from' AND '$to' AND `pending` = 1 ORDER BY `date` desc ";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){ 
            while($row=mysqli_fetch_array($result)){ 
                $total+=$row['amount'];
                $pending+=$row['pending_amount'];
                $output.="<tr>
                <td >".$row['invoice_no']."</td>
                <td >".$row['name']."</td>      
                <td >".$row['gst']."</td>
                <td >".$row['amount']."</td>
                <td >".$row['pending_amount']."</td>
                <td >".$row['date']."</td></tr> ";
        } 
        $output.="<tr>
        <td ></td>
        <td ></td>      
        <td >Total :</td>
        <td >".$total."</td>
        <td >".$pending."</td>
        <td ></td></tr>";
    }else{ 
        $output .= 'No records found...'. "\n";
    }
}else{
    $total_s=0;
    $total_p=0;
    $sql="SELECT * FROM `total` WHERE `date` BETWEEN '$from' AND '$to' ORDER BY `date` desc";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){ 
        while($row=mysqli_fetch_array($result)){
            $diff=$row['type'];
            if ($diff=='o') {
                $total_s+=$row['amount']; 
            }else{
                $total_p+=$row['amount']; 
            }
            $output.="<tr>
                <td >".$row['invoice_no']."</td>
                <td >".$row['name']."</td>      
                <td >".$row['gst']."</td>
                <td >".$row['amount']."</td>
                <td >".$row['date']."</td></tr> ";
        } 
        $output.="<tr>
        <td ></td>
        <td >Total Sell:</td>
        <td >".$total_s."</td>
        <td >Total Purchase:</td>      
        <td >".$total_p."</td></tr>";
    }else{ 
        $output .= 'No records found...'. "\n";
    }
    
}    
echo $output;
?>