
<?php
    // $gst=$_GET['data1'];
    $invoice=$_GET['data2'];
    $invoice=str_replace("\n", '', $invoice);
    $invoice=str_replace(' ', '', $invoice);
    $gst=$_GET['data3'];
    $conn=mysqli_connect("localhost","root","","skt");
    $sql2="SELECT * FROM `company` WHERE `gst` = '$gst' ";
    $result2=mysqli_query($conn,$sql2);
    $data2=mysqli_fetch_array($result2);
    $sql="SELECT * FROM `sell` WHERE `invoice_no` = '$invoice' ";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    $sql1="SELECT * FROM `p_of_sell` WHERE `invoice_no` = '$invoice' ";
    $result1=mysqli_query($conn,$sql1);
    $subtotal=0;
    
    
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
</head>
<body>
<section>
  <div class="invoice">
    <div class="top_line"></div>
    <div class="header">
      <div class="i_row">
        <div class="i_logo">
          <p><h3>SHREE KRISHNA TEXTILES</h3>
          PLOT NO:- F-10 MIDC NAVAPUR DIST NANDURBAR <br>
                GSTN:-27ADCFS0171P1ZR <br>
                MO:- 9825265397/9979375852/9825797888
          </p>
          
        </div>
        <div class="i_title">
         
        </div>
      </div>
      <div class="i_row">
          <p class="p_title">
            DIV AT : <br>
            <?php echo $data2['name']; ?> <br />
            <span><?php echo $data2['address']; ?></span><br />
            <span><?php echo $data2['gst']; ?></span>
          </p>
       
        <div class="i_address text_right">
        <div class="i_number">
          <p class="p_title">INVOICE NO: <?php echo $invoice?> <br>
         DATE: <?php
         $d=$data['date'];
         $myDateTime = DateTime::createFromFormat('Y-m-d', $d);
         $newDateString = $myDateTime->format('d-m-Y'); 
         echo $newDateString?> <br>
      STATE CODE:<?php $a= $data['gst']; echo $a[0],$a[1]; ?></p>
        </div>
        </div>
      </div>
    </div>
    <div class="body">
      <div class="i_table">
        <div class="i_table_head">
          <div class="i_row">
              <div class="i_col w_35">
                  <p class="p_title">NAME</p>
                </div>
                <div class="i_col w_35">
                  <p class="p_title">HSN</p>
                </div>
                <div class="i_col w_35">
                  <p class="p_title">QUNTITY</p>
                </div>
            <div class="i_col w_35">
              <p class="p_title">RATE</p>
            </div>
            <div class="i_col w_35">
              <p class="p_title">AMOUNT</p>
            </div>
          </div>
        </div>
        <div class="i_table_body">
            <?php while($data1=mysqli_fetch_assoc($result1)){ ?>
          <div class="i_row">
            <div class="i_col w_35">
              <p><?php echo $data1['p_name']; ?></p>
            </div>
            <div class="i_col w_35">
              <p><?php echo $data1['hsn']; ?></p>
            </div>
            <div class="i_col w_35">
              <p><?php echo $data1['quntity']; ?></p>
            </div>
            <div class="i_col w_35">
              <p><?php echo $data1['price']; ?></p>
            </div>
            <div class="i_col w_35">
              <p><?php echo ($data1['quntity']*$data1['price']);
              $subtotal+=$data1['quntity']*$data1['price'];
              ?></p>
            </div>
          </div>
        <?php } ?>
        <div class="i_row">
          <div class="i_col w_15">
            </div>
              <div class="i_col w_35">
              </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
          </div>
          <div class="i_row">
          <div class="i_col w_15">
            </div>
              <div class="i_col w_35">
              </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
          </div>
          <div class="i_row">
          <div class="i_col w_15">
            </div>
              <div class="i_col w_35">
              </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
          </div>
          <div class="i_row">
          <div class="i_col w_15">
            </div>
              <div class="i_col w_35">
              </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
          </div>
          <div class="i_row">
          <div class="i_col w_15">
            </div>
              <div class="i_col w_35">
              </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
            <div class="i_col w_15">
            </div>
          </div>
          
          
          
    </div>
        <div class="i_table_foot">
          <div class="i_row">
          <div class="i_col w_90">
              
            </div>
            <div class="i_col w_15">
              <p>Sub Total :</p>
              <p>IGST % :</p>
              <p>Total :</p>
            </div>
            <div class="i_col w_15">
              <p><?php echo $subtotal;?></p>
              <p><?php echo $data['amount']-$subtotal?></p>
              <p><?php echo $data['amount'];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="i_row">
        <div class="i_col w_50">
        <!-- <h5>NO DYING GUARANTEE</h5> -->
        <p class="p_title">Terms and Conditions</p>
          <p>(1) SUBJECT TO SURAT JURIDICTION	<br>						
             (2) 24% INTEREST P.A WILL BE CHARGE ON ALL ACCOUNT REMAINING AFTER DATE	<br>						
             (3) ALL PAYMENT SHOULD BE PAYABLE AT SURAT <br>		
             (4) GOODS ONCE SOLD WILL NOT BE TAKEN BACK							
            </p>
            </div>
            <div class="i_col w_90 text_right">
            <p class="p_title"></p>
            <p>NEW INDIA CO OP BANK <br>
            BANK A/C NO:- 10213006000006 <br>
            IFSC CODE:-UBIN0554618 <br>
            <br>
            <br>
            <b><p>SHREE KRISHNA TEXTILES</p></b><br>
            <br><br>
            <b><p>FOR PARTNER</p></b>

  </p>
  
        </div>
       
      </div>
    </div>
    <div class="bottom_line"></div> 
    <br>
    
    <button id="print" class="btn btn-primary">print</button>&emsp;&emsp;
    <button id="submit" class="btn btn-primary">Back</button>
  </div>
</section>
<script>
   $(".challan").hide();
   $(".total1").hide();
   $(".pcs").hide();
    $('#print').click( function() {
            $('#print').hide();
            $('#submit').hide();
            window.print();
            $('#print').show();
            $('#submit').show();  
             
        });
        $('#submit').click( function() {
          window.history.back();
        });
</script>
</body>

</html>