<?php
  $conn=mysqli_connect("localhost","root","","skt");
$invoice=$_GET['data'];
$type=$_GET['data1'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="home.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="add_challan.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Challan</a>
                    <a href="add_order.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Order</a>
                        <a href="add_purchase.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Purchase</a>
                        <a href="customer_list.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Customer List</a>
                        <a href="Pending_Payments.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Pending Payments</a>
                        <a href="Pending_Purchase.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Pending Purchase</a>
                        <a href="excel_sheet.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Balance Sheet</a>
                        
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div> 
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
                <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Payment Method</th>
                                            <th scope="col" class="text-center">Cheque Number</th>
                                            <th scope="col" class="text-center">Bank Name</th>
                                            <th scope="col" class="text-center">Amount</th>
                                            <th scope="col" class="text-center">Date</th>
                                            <th scope="col" class="text-center">Delet</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $sql="SELECT * FROM `customers_payment_details` WHERE `invoice_no` = '$invoice' AND `type`='$type'";
                                    $result=mysqli_query($conn,$sql);
                                    $num=mysqli_num_rows($result);
                                    ?>
                                    <tbody id="data">
                                    
                                        <?php 
                                        if($num==0){
                                        ?>
                                        <tr>
                                            PAYMENT PENDING
                                        </tr>  
                                        <?php 
                                        }else{
                                            while($row=mysqli_fetch_array($result)){
                                            $cheque_n=$row['cheque_number'];
                                        ?>
                                        <tr>
                                        <td class='text-center'><?php echo $row['method']; ?></td>
                                        <td class='text-center'><?php echo $row['cheque_number']; ?></td>
                                        <td class='text-center'><?php echo $row['bank_name']; ?></td>
                                        <td class='text-center'><?php echo $row['p_amount']; ?></td>
                                        <td class='text-center'><?php echo $row['date']; ?></td>
                                        <td class='text-center'><input type='submit' id='delet'  value='Delet' name='submit' class='btn btn-primary' data-am='<?php echo $row['p_amount'] ?>' data-cheque='<?php echo $cheque_n ?>'></td>
                                        </tr>
                                        <?php }}?>
                                   
                             </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Content End -->
    </div>
    <div class="invoice">
        <?php echo $invoice; ?>
    </div>
    <div class="type">
        <?php echo $type; ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on("click","#delet",function(){
                if (confirm("SURE YOU WANT TO DELET THIS RECORD!!")) {
                    var data=$(".invoice").html();
                    var data1=$(".type").html();
                    var data0=$(this).data("cheque");
                    var data3=$(this).data("am");
                    $.ajax({
                        type: "post",
                        url: "./ajax/delet_pending_page.php",
                        data: {
                            id:data,
                            id2:data0,
                            id3:data3,
                            id1:data1
                        },
                        success: function (response) {
                            
                        }
                    }); 
                }
            });
        });
    </script>
</body>

</html>