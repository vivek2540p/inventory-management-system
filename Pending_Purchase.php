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


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container m-auto text-end" id="date">
                                    <label for=""> Search :</label>
                                    <div class="d-flex justify-content-end">
                                    <input type="text" id="product_name" class="w-25 form-control" autoComplete="off" placeholder="search">
                                    </div>
                                    </div>
                                    <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class='text-center' scope="col">INVOICE NO.</th>
                                            <th class='text-center' scope="col">NAME</th>
                                            <th class='text-center' scope="col">Date</th>
                                            <th class='text-center' scope="col">Amount</th>
                                            <th class='text-center' scope="col">Pending Amount</th>
                                            <th class='text-center' scope="col"></th>
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
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form">
        <input type="text" class="form-control" name="invoice" id="invoice">
      <div class="row">
            <div class="col">
                <input class="form-check-input" type="radio" name="method" id="method" value="cash" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    cash
                </label>
            </div>
            <div class="col">
                <input class="form-check-input" type="radio" name="method" id="method1" value="cheque">
                <label class="form-check-label" for="">
                    cheque
                </label>
            </div>
        </div>
        <br>
        <div class="mb-3 row" id="cheque_box">
            <label for="inputPassword" class="col-sm-4 col-form-label text-dark"> Cheque Number :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="cheque_number">
            </div>
        </div>
        <div class="mb-3 row" id="bank_name">
            <label for="inputPassword" class="col-sm-4 col-form-label text-dark"> Bank Name :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="bank_name">
            </div>
        </div>
      <div class="row">
        <div class="col">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="redio" id="redio1" value="0" checked>
        <label class="form-check-label" for="flexRadioDefault1">
            Paid
        </label>
        </div>
        </div>
        <br>
        <div class="col">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="redio" id="redio2" value="1">
        <label class="form-check-label" for="flexRadioDefault2">
            Pending
        </label>
        </div>
        </div>
        <div class="mb-3 row" id="pamount">
            <label for="exampleInputPassword1" class="col-sm-4 col-form-label text-dark">Amount Paid:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="amount">
            </div>
        </div>
        </div>
        <div class="col mb-3">
            <label for="exampleInputPassword1" class="form-label text-dark">Date</label>
            <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="date" required>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submit">Submit</button>
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
            
            function aa(){
                $.ajax({
                url:"./ajax/pending_purchase.php",
                type:"POST",
                data:{
                },
                success:function(data){
                    $('#data').html(data);
                }
            });
        }
        aa();
            $(document).on("keyup","#product_name",function(){
                var search=$(this).val();
                $.ajax({
                    
                    type: "post",
                    url: "./ajax/pending_purchase.php",
                    data: {
                       name:search
                    },
                    success: function (response) {
                        console.log(response);
                        $('#data').html(response);
                    }
                });
            });
            var data1;
            $(document).on("click","#view_detail",function(){
                data1=$(this).data("invoice");
                
                $(".modal").show();
                // $(".modal-body").html(data1);
            });
            $("#cheque_box").hide();
            $("#bank_name").hide();
                $("#method1").click(function(){
                    $("#cheque_box").show();
                });
                $("#method").click(function(){
                    $("#cheque_box").hide();
                });
                $("#method1").click(function(){
                    $("#bank_name").show();
                });
                $("#method").click(function(){
                    $("#bank_name").hide();
                });
            $(document).on("click","#close",function(){
                $(".modal").hide();
            });
            $("#invoice").hide();
            
            $(document).on("click","#submit",function(){
                var inputF = document.getElementById("invoice");
                inputF.value = data1;
                var form = $("form").serialize();
                $.ajax({
                    type: "post",
                    url: "./ajax/pending_purchase_details.php",
                    data: form,
                    success: function (response) {
                        document.getElementById("form").reset();
                        aa();
                    }
                });
            });
            
            });
    </script>
</body>

</html>