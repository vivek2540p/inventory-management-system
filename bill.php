
<?php
    $total_pcs=$_GET['total_pcs'];
    $t=$_GET['total'];
    $total=floatval($t);
    $challan=$_GET['challan'];
    $challan=str_replace(' ', '', $challan);
    $conn=mysqli_connect("localhost","root","","skt");
    $sql="SELECT * FROM `challan_detail` WHERE `challan_no` ='$challan'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/bill.css">
    <style>
        #t1{
            margin-top: 0px ;
            margin-bottom: 0px;
            border-top: 0px;
        }
        .table th{
            border-top: 0px;
        }
        #txt{
            margin-left: 550px;
        }
        #trr{
            border-bottom: 0px;
        }
    </style>
</head>
<body>
<section>
<div class="container col-11 mt-4">
        <table class="table table-bordered" id="t1" style="border-width:3px; border-color:black;" >
            <tr style="border-width:3px; border-color:black;" >
                <th colspan="7">
                    <div class="row text-center">
                        <div class="col">
                        <h1 style="font-size:15px; ">SHREE GANESHAY NAMAH</h1>
                        <h1 style="font-size:30px; "><b> SHREE KRISHNA TEXTILES</b></h1>
                        <h1 style="font-size:16px; "> PLOT NO:- F-10 MIDC NAVAPUR DIST NANDURBAR </h1>
                        <h1 style="font-size:16px; "> MO:- 9825265397/9979375852/9825797888</h1>
                        <h1 style="font-size:20px; "> GSTN:-27ADCFS0171P1ZR </h1>
                        </div>
                    </div>
                </th>
            </tr>
            <tr style="border-width:3px; border-color:black;">
                <th colspan="7">
                   <h1 class="text-center" style="font-size:15px; margin-bottom: 0px; margin-top: 0px;"><b> TAX INVOICE</b></h1>
                </th>
            </tr>
            <tr style="border-width:3px; border-color:black;">
                <th style="border-width:3px; border-color:black;" width="70%">
                    <div class="row">
                        <div class="col">
                        <h1 style="font-size:18px; "><b> BUYER:-</b></h1>
                        <h1 style="font-size:18px; "><b>NAME:- <?php echo $data['name']; ?></b></h1>
                        <h1 style="font-size:18px; "> ADD:-<?php echo $data['address']; ?></h1>
                        <h1 style="font-size:20px; "> GSTN:-<?php echo $data['gst']; ?> </h1>
                        </div>
                    </div>
                </th>
                <th colspan="1" style="border-width:0PX; border-color:black;">
                    <div class="row">
                        <div class="col">
                        <h1 style="font-size:18px; "><b>Invoice No  :- </b></h1>
                        <h1 style="font-size:18px; "> <b>Date  :- </b></h1>
                        <h1 style="font-size:18px; "> <b>State Code  :-</b></h1>
                        <h1 style="font-size:18px; "> <b>Broker  :-</b></h1>
            
                        </div>
                    </div>
                </th>
                <th colspan="7" style="border-width:0px; border-color:black;">
                    <div class="row text-right">
                        <div class="col">
                        <h1 style="font-size:18px; "><b><?php echo $data['challan_no']?></b></h1>
                        <h1 style="font-size:18px; "> <b><?php $d=$data['date'];
                        $myDateTime = DateTime::createFromFormat('Y-m-d', $d);
                        $newDateString = $myDateTime->format('d-m-Y'); 
                        echo $newDateString?></b></h1>
                        <h1 style="font-size:18px; "> <b><?php $a= $data['gst']; echo $a[0],$a[1]; ?></b></h1>
                        <h1 style="font-size:18px; "> <b><?php echo $data['bname']; ?></b></h1>
                        </div>
                    </div>
                </th>
            </tr>
        </table >
        <table class="table table-bordered" id="t1" style="border-width:0px; border-color:black;">
            <tr style="border-width:0px; border-color:black;">
                <th class="text-center" style="border-width:3px; border-color:black;" width="6%">
                    NO
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="31%">
                    Description of Goods
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="11%">
                    HSN
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="11%">
                    PCS
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="11%">
                    METER
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="13%">
                    RATE
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="17%">
                    AMOUNT
                </th>
            </tr>
            <tr style="border-width:0px; border-color:black;">
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="6%">
                    1.
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="31%">
                    <?php echo $data['qulity']; ?>
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="11%">
                    <?php echo $data['hsn']; ?>
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="11%">
                    <?php echo $total_pcs; ?>
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="11%">
                    <?php echo $total; ?>
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="13%">
                    <?php echo $data['price']; ?>
                </th>
                <th class="text-center" id="trr" style="border-width:3px; border-color:black;" width="17%">
                    <?php echo (number_format($total*$data['price'], 2)); ?>
                </th>
            </tr>
            <tr style="border-width:0px; border-color:black; height:200px">
                <th style="border-width:3px; border-color:black;" width="6%">
                
                </th>
                <th style="border-width:3px; border-color:black;" width="31%">
                    
                </th>
                <th style="border-width:3px; border-color:black;" width="11%">
                    
                </th>
                <th style="border-width:3px; border-color:black;" width="11%">
                    
                </th>
                <th style="border-width:3px; border-color:black;" width="11%">
                    
                </th>
                <th style="border-width:3px; border-color:black;" width="13%">
                  
                </th>
                <th style="border-width:3px; border-color:black;" width="17%">
                   
                </th>
            </tr>
            <tr style="border-width:0px; border-color:black;">
                <th style="border-width:3px; border-color:black;" width="6%">
                </th>
                <th style="border-width:3px; border-color:black;" width="31%">
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="11%">
                    TOTAL
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="11%">
                    <?php echo $total_pcs; ?>
                </th>
                <th style="border-width:3px; border-color:black;" width="11%">
                    
                </th>
                <th style="border-width:3px; border-color:black;" width="13%">
                    
                </th>
                <th class="text-center" style="border-width:3px; border-color:black;" width="17%">
                    <?php echo (number_format($total*$data['price'],2)); ?>
                </th>
            </tr>
        </table>
        <table class="table table-bordered" style="border-width:0px; border-color:black;">
                <tr  style="border-width:0px; border-color:black;">
                    <th rowspan="4" style="border-width:3px; border-color:black;" width="59%">

                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;" width="24%">
                        TAXABLE VALUES
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;" width="17%">
                        <?php echo (number_format($total*$data['price'],2)); ?>
                    </th>
                </tr>
                <tr style="border-width:0px; border-color:black;">
                    <th class="text-center" style="border-width:3px; border-color:black;">
                        <?php if($a[1]=="7"){ ?>
                            SGST @<?php echo $data['gst_rate'];?>%
                            <?php
                        }else{ ?>
                            IGST @<?php echo $data['gst_rate'];?>%
                            <?php } ?>
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;" >
                        <?php 
                        echo number_format((($total*$data['price'])*$data['gst_rate'])/100,2);
                        $gt=number_format((($total*$data['price'])*$data['gst_rate'])/100,2);
                          ?>
                    </th>
                </tr>
                <tr style="border-width:0px; border-color:black;">
                    <th class="text-center" style="border-width:3px; border-color:black;">
                        <?php if($a[1]=="7"){ ?>
                            CGST @<?php echo $data['gst_rate'];?>%
                            <?php
                        }else{ ?>
                            -
                            <?php } ?>
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;" >
                        <?php if($a[1]=="7"){ 
                            echo number_format((($total*$data['price'])*$data['gst_rate'])/100,2);
                            }else{ ?>
                                - <?php } ?>
                    </th>
                </tr>
                <tr style="border-width:0px; border-color:black;">
                    <th class="text-center" style="border-width:3px; border-color:black;" >
                        TOTAL GST
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;" >
                    <?php if($a[1]=="7"){echo number_format((2*$gt),2);}else{echo number_format(($gt),2);} ?>
                    </th>
                </tr>
                <tr style="border-width:3px; border-color:black;">
                    <th style="border-width:3px; border-color:black;">
                        <h1 class="text-center" style="font-size:20px; margin-bottom: 0px; margin-top: 0px;"><b>NO DYING GUARANTEE</b></h1>
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;">
                        NET AMOUNT [Rs.]
                    </th>
                    <th class="text-center" style="border-width:3px; border-color:black;">
                        <?php if($a[1]=="7"){echo number_format(($total*$data['price']+2*$gt),2);}else{echo number_format(($total*$data['price']+$gt),2);} ?>
                    </th>
                </tr >
                <tr style="border-width:3px; border-color:black;">
                    <th colspan="3">
                        <h1 style="font-size:20px; margin-bottom: 0px; margin-top: 0px;"><b>NEW INDIA CO OP BANK</b></h1><br>
                            BANK A/C NO:- 102130060000062&emsp;&emsp;&emsp;&emsp; || &emsp;&emsp;&emsp;&emsp; IFSC CODE:- NICB0000102<br>
                            NOTE <br>
                            (1) SUBJECT TO SURAT JURIDICTION	<br>						
                            (2) 24% INTEREST P.A WILL BE CHARGE ON ALL ACCOUNT REMAINING AFTER DATE	<br>						
                            (3) ALL PAYMENT SHOULD BE PAYABLE AT SURAT <br>		
                            (4) GOODS ONCE SOLD WILL NOT BE TAKEN BACK
                            <div id="txt">
                                <h1 style="font-size:20px; "><b> SHREE KRISHNA TEXTILES</b></h1>
                                <br><br><br>
                                FOR PARTNER
                            </div>
                        </th>
                </tr>
        </table>
                            </div>

    <br>
    <button id="submit" class="btn btn-primary">Submit</button>&emsp;&emsp;
    <button id="print" class="btn btn-primary">print</button>&emsp;&emsp;
    <button id="back" class="btn btn-primary">Back</button>
  <div class="challan">
    <?php echo $challan;?>
</div>
  <div class="total1">
    <?php if($a[1]=="7"){echo ($total*$data['price']+2*$gt);}else{echo ($total*$data['price']+$gt);} ?>
</div>
  <div class="total">
    <?php echo $total;?>
</div>
  <div class="pcs">
    <?php echo $total_pcs;?>
</div>
</section>
<script>
   $(".challan").hide();
   $(".total1").hide();
   $(".total").hide();
   $(".pcs").hide();
    $('#print').click( function() {
            $('#print').hide();
            $('#back').hide();
            $('#submit').hide();
            window.print();
            $('#print').show();
            $('#back').show();
            $('#submit').show();  
             
        });
        $('#submit').click( function() {
          var challan=$(".challan").html();
          var total=$(".total1").html();
          var total1=$(".total").html();
          var pcs=$(".pcs").html();
          $.ajax({
            type: "post",
            url: "./ajax/bill_data.php",
            data: {
              invoice:challan,
              total:total,
              total1:total1,
              pcs:pcs
            },
            success: function (response) {
              console.log(response);
              location.href="home.php";
            }
          });
        });
        $('#back').click( function() {
            window.history.back(); 
        });
</script>
</body>

</html>