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

                    <?php
                        $b=$_GET['data'];
                        $conn=mysqli_connect("localhost","root","","skt");
                                $sql="SELECT * FROM `company` WHERE `gst` = '$b'";
                                $result=mysqli_query($conn,$sql);
                                $data=mysqli_fetch_assoc($result);
                    ?>
                            <div class="container-fluid pt-4 px-4">
                            
                            <div class="ms-3">
                            
                                <b><span class="mb-2 text-dark">Company Name : </sapan></b>
                                <?php echo $data['name']; ?>
                                <br>
                                <b><span class="mb-2 text-dark">GST-NO. : </sapan></b>
                                <?php echo $data['gst']; ?>
                                <br>
                                <b><span class="mb-2 text-dark">Address : </sapan></b>
                                <?php echo $data['address']; ?>
                                </div>   
                            </div>
                            <div id="123"><?php echo $data['gst']; ?></div>
                            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container m-auto text-end">
                        <div class="text-start">
                        <div class="row">
                        <div class="col-1">
                                <input class="form-check-input" type="radio" name="method" id="sell" value="cash" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    sell
                                </label>
                                </div>
                                <div class="col-2">
                                <input class="form-check-input" type="radio" name="method" id="purchase" value="cheque">
                                <label class="form-check-label" for="">
                                    purchase
                                </label>
                                </div>
                                </div>
                        </div>
                        <div id="search_s">
                                    <label for=""> Search :</label>
                                    <div class="d-flex justify-content-end">
                                    <input type="text" id="product_name_s" class="w-25 form-control" autoComplete="off" placeholder="search">
                                    </div>
                                    </div>
                            <div id="search_p">
                                    <label for=""> Search :</label>
                                    <div class="d-flex justify-content-end">
                                    <input type="text" id="product_name_p" class="w-25 form-control" autoComplete="off" placeholder="search">
                                    </div>
                                    </div>
                                    
                                    <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Invoice no.</th>
                                            <th scope="col" class="text-center">GST no.</th>
                                            <th scope="col" class="text-center">Total</th>
                                            <th scope="col" class="text-center">date</th>
                                            <th scope="col" class="text-center">Payment Details</th>
                                            <th scope="col" id="p" class="text-center">Details</th>
                                            <th scope="col" id="p" class="text-center">Delet</th>

                                        </tr>
                                    </thead>
                                    <tbody id="data">
                   
                             </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Content End -->
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
            $("#search_p").hide();
            function aa(){
                $("#p").show();
                $("#search_p").hide();
            $("#search_s").show();
            var b=$("#123").html();
            $.ajax({
                url:"./ajax/company_sell_detail.php",
                type:"POST",
                data:{
                    id:b
                },
                success:function(data){
                    $('#data').html(data);
                }
            });
            $(document).on("keyup","#product_name_s",function(){
                var search=$(this).val();
                $("#123").hide();
            var b=$("#123").html();
                $.ajax({
                    
                    type: "post",
                    url: "./ajax/company_sell_detail.php",
                    data: {
                       id:b,
                       name:search
                    },
                    success: function (response) {
                        console.log(response);
                        $('#data').html(response);
                    }
                });
                
            });
            $(document).on("click","#view_detail",function(){
                var data1=$(this).data("invoice");
                var type=$(this).data("type");
                var gst=$(this).data("gst");
                if(type=='c'){
                    location.href = "purchase_bill.php?data1="+type+"&data2="+ data1;
                }else{
                    location.href = "order_bill.php?data1="+type+"&data2="+ data1+"&data3="+gst;
                }
            });
            $(document).on("click","#view_pdetail",function(){
                var data=$(this).data("invoice");
                var type=$(this).data("type");
                location.href = "pending_detail_page.php?data="+data+"&data1="+type;
            });
            $(document).on("click","#delet",function(){
                if (confirm("SURE YOU WANT TO DELET THIS RECORD!!")) {
                    var data=$(this).data("invoice");
                    $.ajax({
                        type: "post",
                        url: "./ajax/delet_sell_page.php",
                        data: {
                            id:data
                        },
                        success: function (response) {
                            aa();
                        }
                    }); 
                }
            });
            $(document).on("click","#pdelet",function(){
                if (confirm("SURE YOU WANT TO DELET THIS RECORD!!")) {
                    var data=$(this).data("invoice");
                    $.ajax({
                        type: "post",
                        url: "./ajax/delet_purchase_page.php",
                        data: {
                            id:data
                        },
                        success: function (response) {
                            aa();
                        }
                    });
                    
                }
            });
        }
            $("#123").hide();
            $("#sell").click(function(){
              aa();
        });
        aa();
        $("#purchase").click(function(){
            // alert("p");
            $("#p").hide();
            $("#search_p").show();
            $("#search_s").hide();
            var b=$("#123").html();
            $.ajax({
                url:"./ajax/company_purchase_detail.php",
                type:"POST",
                data:{
                    id:b
                },
                success:function(data){
                    $('#data').html(data);
                }
            });
            $(document).on("keyup","#product_name_p",function(){
                var search=$(this).val();
                $("#123").hide();
            var b=$("#123").html();
                $.ajax({
                    
                    type: "post",
                    url: "./ajax/company_purchase_detail.php",
                    data: {
                       id:b,
                       name:search
                    },
                    success: function (response) {
                        console.log(response);
                        $('#data').html(response);
                    }
                });
            });
        });
            });
    </script>
</body>

</html>