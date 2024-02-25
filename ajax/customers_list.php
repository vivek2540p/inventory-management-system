
<?php
 $output="";
    $conn=mysqli_connect("localhost","root","","skt");
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $sql="select * from company where name like '$name%' or gst like '$name%'";
        $result=mysqli_query($conn,$sql);
       
        while($row=mysqli_fetch_array($result)){
            $id=$row['gst'];
            $output.="<tr>
            <td class='text-center'>".$row['name']."</td>
            <td class='text-center'>".$row['gst']."</td>      
            <td class='text-center'>".$row['address']."</td>        
            <td class='text-center'><input type='submit' id='view_detail'  value='view' name='submit' class='btn btn-primary' data-id='{$id}'></td></tr>";   
        }
    }else{
        $sql="select * from company";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
            $id=$row['gst'];
            $output.="<tr>
            <td class='text-center'>".$row['name']."</td>
            <td class='text-center'>".$row['gst']."</td>      
            <td class='text-center'>".$row['address']."</td>        
            <td class='text-center'><input type='submit' id='view_detail'  value='view' name='submit' class='btn btn-primary' data-id='{$id}'></td></tr>";   
        }
        
    }
    echo $output;
?>