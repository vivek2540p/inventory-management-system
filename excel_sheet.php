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
            <!-- Navbar End -->
            <div class="container-fluid pt-5 px-5">
            <div class="col-sm-12 col">
                        <div class=" rounded h-100 p-4">
                            <form id="form" action="">
                                <br>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">From :</label>
                                    <input type="date" class="form-control" name="date1" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">To :</label>
                                    <input type="date" class="form-control" name="date2" required>
                                </div>
                                <div class="col mb-3">
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                    <input class="form-check-input" type="radio" name="r" id="sell" value="sell" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    sale
                                    </label>
                                    </div>
                                    <div class="col">
                                    <input class="form-check-input" type="radio" name="r" id="purchase" value="purchase">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        purchase
                                    </label>
                                    </div>
                                    <div class="col">
                                    <input class="form-check-input" type="radio" name="r" id="pp" value="pp" >
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        pending payments
                                    </label>
                                    </div>
                                    <div class="col">
                                    <input class="form-check-input" type="radio" name="r" id="p_p" value="p_p">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        pending purchase
                                    </label>
                                    </div>
                                    <div class="col">
                                    <input class="form-check-input" type="radio" name="r" id="t" value="t">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        total
                                    </label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                <hr>
                            </form>
                            <br><br>
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Invoice_no</th>
                                <th scope="col">Name</th>
                                <th scope="col">GST</th>
                                <th scope="col">Amount</th>
                                <th scope="col" id="p">Pending Amount</th>
                                <th scope="col">Date</th>
                                </tr>
                            </thead>
                                    <tbody id="data">

                                    </tbody>
                                </table>
                                <br><br><br>
                                <button id="print" class="btn btn-primary">Print</button>
                                
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
        $('#print').click( function() {
            $('#print').hide();
            $('#form').hide();
            print();
            $('#print').show();  
            $('#form').show();  
        });
        $('#p').hide();
        $("#pp").click(function(){
            $('#p').show();
        });
        $("#p_p").click(function(){
            $('#p').show();
        });
        $("#t").click(function(){
            $('#p').hide();
        });
        $("#sell").click(function(){
            $('#p').hide();
        });
        $("#purchase").click(function(){
            $('#p').hide();
        });
        $("#form").submit(function(e){
                    e.preventDefault();
            var from=$('input[name="date1"]').val();
            var to=$('input[name="date2"]').val();
            var type=$('input[name="r"]:checked').val();
            $.ajax({
                type: "post",
                url: "./excel.php",
                data: {
                    data:from,
                    data1:to,
                    data2:type
                },
                success: function (response) {
                    $('#data').html(response);
                }
            });
            });
        
    </script>
</body>

</html>