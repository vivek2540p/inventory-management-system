
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $challan_no =$_POST['challan_no'];
    $gst =$_POST['gst'];
    $address = $_POST['address'];
    $bname=$_POST['bname'];
    $date=$_POST['date'];
    $lot_no=$_POST['lot_no'];
    $qulity=$_POST['qulity'];
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $gst_rate=$_POST['gst_rate'];
    $hsn=$_POST['hsn'];
    $conn=mysqli_connect("localhost","root","","skt");
    $sql="INSERT INTO `challan_detail` (`name`, `challan_no`, `gst`, `address`, `bname`, `date`, `lot_no`, `qulity`, `pname`,`gst_rate`,`price`,`hsn`) VALUES ('$name', '$challan_no', '$gst', '$address', '$bname', '$date', '$lot_no', '$qulity', '$pname','$gst_rate','$price','$hsn')";
    $result=mysqli_query($conn,$sql);
    $sql1="SELECT * FROM `company` WHERE `gst`='$gst'";
    $result1=mysqli_query($conn,$sql1);
    $no=mysqli_num_rows($result1);
    if($no==0){
        $sql2="INSERT INTO `company` (`name`, `gst`, `address`) VALUES ('$name', '$gst',  '$address')";
        $result2=mysqli_query($conn,$sql2);
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
    <style>
        input {
  text-align: center;
}

        .buttn{
            margin-left: 139px;
        }
        #trr{
            border-bottom: 0px;
        }
        #tb{
            border-bottom: 3px;
        }
        #t12{
            margin-top: 0px ;
            margin-bottom: 0px;
            border-bottom: 0px;
        }
    </style>
</head>
<body>
    <div class="container col-10 mt-3">
        <div class="abc">
        <div id="copy">
        <table id="t12" class="table table-bordered abc" style="border-width:3px; border-color:black;" width="100%">
            <tr>
                <th colspan="2" style="text-align: center; font-size:30px;">
                    D E L I V E R Y C H A L L A N
                </th>
            </tr>
        <tr>
            <th style="width:65%">
        <div class="row">
            <div class="col">
            <h1 style="font-size:25px; "><b> SHREE KRISHNA TEXTILES</b></h1>
            <h1 style="font-size:20px; "> PLOT NO:- F-10 MIDC NAVAPUR DIST NANDURBAR </h1>
            <h1 style="font-size:20px; "> GSTN:-27ADCFS0171P1ZR </h1>
            <h1 style="font-size:20px; "> MO:- 9825265397/9979375852/9825797888</h1>
            </div>
        </div>
    </th>
    <th>
        <table class="table table-borderless">
            <tr>
                <th style="width:50%" >
                <h1 style="font-size:21px; "><b> CHALLAN NO. :- </b></h1>
                </th>
                <th style="width:100%">
                <h1 style="font-size:20px;  text-align: right;"><b> <?php echo $challan_no; ?></b></h1>
                </th>
            </tr>
            <tr>
                <th >
                <h1 style="font-size:21px; "><b>Date :- </b></h1>
                </th>
                <th>
                <h1 style="font-size:18px;  text-align: right;"><b><?php $d=$date;
                        $myDateTime = DateTime::createFromFormat('Y-m-d', $d);
                        $newDateString = $myDateTime->format('d-m-Y'); 
                        echo $newDateString ?></b></h1>
                </th>
        
                  
            </tr>
        </table>
    </th>
    </tr>

        <tr>
            <th>
        <div class="row">
            <div class="col">
            <h1 style="font-size:25px; "><b>DIV AT: <?php echo $name; ?></b></h1>
            <h1 style="font-size:20px; "> ADD: <?php echo $address; ?></h1>
            <h1 style="font-size:20px; ">  GST: <?php echo $gst; ?></h1>

            </div>
        </div>
    </th>
    <th>
        <table class="">
            <tr>
                <th style="width:65%">
                   <h1 style="font-size:22px; "><b> LOT NO. :- </b></h1>
                </th>
                <th style="text-align: right;">
                <h1 style="font-size:20px;"><b> <?php echo $lot_no; ?></b></h1>
                </th>
            </tr>
                <tr>
                <th>
                <h1 style="font-size:22px; "><b>   Quality :- </b></h1>
                </th>
                <th>
                <h1 style="font-size:20px;  text-align: right;"><b><?php echo $qulity; ?></b></h1>
                </th>
            </tr>
            <tr>
                <th >
                <h1 style="font-size:22px; "><b>Broker :- </b></h1>
                </th>
                <th>
                <h1 style="font-size:20px;  text-align: right;"><b><?php echo $bname; ?></b></h1>
                </th>
            </tr>
        </table>
    </th>
    </tr>
    </table>
    <table id="t12" class="table table-bordered " style="border-width:3px; border-color:black;">
        <tr >
            <th class="text-center" style="font-size:20px; ">SR NO.</th>
            <th class="text-center"  style="font-size:20px; ">METER</th>
            <th class="text-center" style="font-size:20px; ">SR NO.</th>
            <th class="text-center" style="font-size:20px; ">METER</th>
            <th class="text-center" style="font-size:20px; ">SR NO.</th>
            <th class="text-center" style="font-size:20px; ">METER</th>
            <th class="text-center" style="font-size:20px; ">SR NO.</th>
            <th class="text-center" style="font-size:20px; ">METER</th>
        </tr>
        <?php for ($i=1;$i<13;$i++) { ?>   
        <tr style="border-width:0px; border-color:black;">
            <th  class="text-center" style="font-size:20px; "><?php echo $i ?></th>
            <th  id="a1"><input type="text" style="width:125px; border: none;"></th>
            <th class="text-center" style="font-size:20px; "><?php echo ($i+12); ?></th>
            <th  id="a2"><input type="text" style="width:125px; border: none;"></th>
            <th  class="text-center" style="font-size:20px; "><?php echo ($i+24); ?></th>
            <th  id="a3"><input type="text" style="width:125px; border: none;"></th>
            <th class="text-center" style="font-size:20px; "><?php echo ($i+36); ?></th>
            <th id="a4"><input type="text" style="width:125px; border: none;"></th>  
        </tr>
        <?php } ?>
        <tr>
            <th class="text-center" style="font-size:20px; ">Total</th>
            <th class="input-group" style="font-size:20px; "><input  type="text" class="form-control" id="t1" style="width:70px; border: none; "></th>
            <th class="text-center" style="font-size:20px; ">Total</th>
            <th class="input-group" style="font-size:20px; "><input type="text" class="form-control" id="t2" style="width:70px; border: none;"></th>
            <th class="text-center" style="font-size:20px; ">Total</th>
            <th class="input-group" style="font-size:20px; "><input type="text" class="form-control" id="t3" style="width:70px; border: none;"></th>
            <th class="text-center" style="font-size:20px; ">Total</th>
            <th class="input-group" style="font-size:20px; "><input type="text" class="form-control" id="t4" style="width:70px; border: none;"></th>
        </tr>
    </table>
    <table  class="table table-bordered" style="border-width:3px; border-color:black;">
        <tr>
            <th style="font-size:20px;" width="50%">TOTAL PCS :-<input type="text" id="total_pcs" style="width: 100px; border: none;"></th>
            <th style="font-size:20px; ">METER :- <input type="text" id="total" style="width:125px; border:none;" disabled></th>
        </tr>
        <tr>
            <th style="font-size:20px; ">RECEIVER'S SIGNATURE:- </th>
            <th style="font-size:20px; ">PREPARED BY :- <?php echo $pname; ?></th>
        </tr>
</table>
</div>
</div>
</div>
<br>
<div class="buttn">
<button id="submit" class="btn btn-primary">Submit</button>&emsp;&emsp;
<button id="print" class="btn btn-primary">Print</button>&emsp;&emsp;
<button id="back" class="btn btn-primary">Back</button>
</div>
<br><br>
<div class="challan">
    <?php echo $challan_no;?>
</div>
<script>
    $(document).ready(function(){
        $(".challan").hide();
        $(".modal").hide();
        var a=0;
        $('table :input').change(function () {
            var tot1=0,tot2=0,tot3=0,tot4=0;
            $("th#a1 :input").each(function () {
                tot1 += Number($(this).val());
                    });
            var t1 = document.getElementById("t1");
            t1.value=tot1.toFixed(2);
            $("th#a2 :input").each(function () {
                tot2 += Number($(this).val());
            });
            var t2 = document.getElementById("t2");
            t2.value=tot2.toFixed(2);
            $("th#a3 :input").each(function () {
                tot3 += Number($(this).val());
                    });
                    var t3 = document.getElementById("t3");
                    t3.value=tot3.toFixed(2);
                    $("th#a4 :input").each(function () {
                        tot4 += Number($(this).val());
                    });
                    var t4 = document.getElementById("t4");
                    t4.value=tot4.toFixed(2);
                    var tototo=(tot1+tot2+tot3+tot4).toFixed(2)
                    $("#total").val(tototo);
                    
                });
                
        $('#print').click( function() {
        new1=$("#copy").clone();
        $(".container").append(new1);
            $('#print').hide();
            $('#back').hide();
            $('#submit').hide();
            print();
            new2=$("#copy").clone();
            console.log(new2);
            $("#copy").remove();
            $('#print').show();
            $('#back').show();
            $('#submit').show();
            
        });
        
        $('#submit').click( function() {
            var total_pcs=$("#total_pcs").val();
            var total=$("#total").val();
            var challan=$(".challan").html();
            location.href = "bill.php?total_pcs="+total_pcs+"&total="+total+"&challan="+challan;
        });
        $('#back').click( function() {   
            var challan=$(".challan").html();
            $.ajax({
                type: "post",
                url: "./ajax/delet_data.php",
                data: {
                    invoice:challan
                },
                success: function (response) {
                    window.history.back();
                }
            }); 
        });

    });
</script>
</body>
</html>