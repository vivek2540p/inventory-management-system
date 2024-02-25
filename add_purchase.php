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
                            <div class=" rounded h-100 p-4">
                            <form id="form" action="">
                            <div class="container1" >
                            <label for="" class="text-dark">Customer Name :</label>
                            <input type="text" id="product_name" class="form-control w-25" placeholder="search" autoComplete="off">
                            <div id="product_list">
                                </div>
                                </div>
                                
                                <br>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Invoice No.</label>
                                    <input type="text" class="form-control" name="invoice_no" placeholder="Enter Invoice Number" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Customers Name" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">GST-NO.</label>
                                    <input type="text" class="form-control" id="gst" name="gst" placeholder="Enter GST Number" autoComplete="off">
                                </div>
                                </div>
                                <div class="row">                         
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" autoComplete="off">
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Date</label>
                                    <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="date" required autoComplete="off">
                                </div>
                                <div class="col mb-3">
                               </div> 
                            </div>
                                <br>
                                <hr>
                                <br>
                                

                                <div id="newinput1">
                                    <div class="row">
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Product Name</label>
                                    <input type="text" class="form-control" name="product_name[]" placeholder="Enter Product Name" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Product HSN-NO.</label>
                                    <input type="text" class="form-control" name="hsn[]" placeholder="Enter HSN Number" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Quntity</label>
                                    <input type="text" class="form-control" name="quntity[]" placeholder="Enter Quntity" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">Amount with out GST</label>
                                    <input type="text" class="form-control" name="price[]" placeholder="Enter Amount" autoComplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-dark">GST Rate</label>
                                    <input type="text" class="form-control" name="rate[]" placeholder=" GST Rate" autoComplete="off" required>
                                </div>
                                <div class="col">
                                    </div> 
                                </div>
                            </div>  
                            <br>
                            <div class="row">
                            <div class="col">
                                <button type="submit" id="btn" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button id="new" class=" btn btn-primary">ADD</button>&nbsp;&nbsp;
                                <button id="old" class=" btn btn-primary">Remove</button>
                            </div>
                            </div>
                            </form>
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
        $(document).ready(function () {
            $('#gst').on('change', function () {
            if ($(this).val().length != 15) {
                alert('GST Number is invalid');
                $(this).focus();
                return false;
            }
        });
                var radios = document.getElementsByName('redio');
                $("#form").submit(function(e){
                    e.preventDefault();
                    var form = $("form").serialize();
                    $.ajax({
                        type: "post",
                        url: "./ajax/purchase.php",
                        data: form,
                        success: function(data) {
                            if(data){
                                alert("Error : Please Check Invoice Number");
                            }else{
                                document.getElementById("form").reset();    
                            }
                        }
                    });
                });
            var a=2;
            $("#new").click(function(e){
                e.preventDefault();
                new1 = '<div id="newinput'+a+'"><div class="row"><div class="col mb-3"><label for="exampleInputPassword1" class="col form-label">Product Name</label><input type="text" class="form-control" placeholder="Enter Product Name" name="product_name[]"></div><div class="col mb-3"><label for="exampleInputPassword1" class="form-label">Product HSN/SAC-NO.</label><input type="text" class="form-control" placeholder="Enter HSN Number" name="hsn[]"></div><div class="col mb-3"><label for="exampleInputPassword1" class="form-label">Quntity</label><input type="text" class="form-control" placeholder="Enter Quntity" name="quntity[]"></div><div class="col mb-3"><label for="exampleInputPassword1" class="form-label">Amount with out GST</label><input type="text" class="form-control" placeholder="Enter Amount" name="price[]"></div><div class="col mb-3"><label for="exampleInputPassword1" class="form-label">GST Rate</label><input type="text" class="form-control" placeholder="GST Rate" name="rate[]"></div><div class="col"></div></div></div>';
                $("#newinput1").append(new1);
                a++;
            });
            $("#old").click(function(e){
                e.preventDefault();
                if(a>2){
                a--;
                $("#newinput"+a+"").remove();
                }
            });
            $("#product_name").keyup(function () {
            var name = $(this).val();
            $.ajax({
                type: "post",
                url: "./ajax/sell_search.php",
                data: {name1:name},
                success: function (response) {
                    $("#product_list").html(response);
                   
                }
            });
            });
            $(document).on('click','li', function () {
            var id = $(this).text();
            $("#product_name").val(id);
            $.ajax({
                type: "post",
                url: "./ajax/background_data_sell.php",
                data: {
                    id1:id
                },
                success: function (response) {
                    var responseArray = JSON.parse(response);
                    $("#name").val(responseArray[0]);
                    $("#gst").val(responseArray[2]);
                    $("#address").val(responseArray[1]);
                }
            });
            $("ul").html("");
        });
        $(document).on('mouseleave', '.container1',function () { 
            $("#product_list").html("");
        });
        });
    </script>
</body>

</html>