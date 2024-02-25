<?php
$conn=mysqli_connect("localhost","root","","skt");
if(isset($_POST['name1']) && !empty($_POST['name1'])){
    $val=$_POST['name1'];
    $output="";
    $sql=" SELECT * FROM `company` WHERE `name` LIKE '$val%' ";
    $result=mysqli_query($conn,$sql);
    $no=mysqli_num_rows($result);
    if($no>0){
        $output.= '<ul class="list-group" style="display:block;position:relative;z-index:1">';
    while ($row=mysqli_fetch_assoc($result)) {
        $output.= '<li class="list-group-item">'.$row['name'].' </li>';
        
    }
    $output.= '</ul>';   
}else{
    $output.= '<ul><li class="list-group-item">no data found</li></ul>';
}
echo $output;




}


?>

