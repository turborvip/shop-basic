<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/cartpage-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="<?php echo JS_DIR ?>/cart.js"></script> 
    
    
    
</head>
<body>
<!-- header -->
    <?php include __DIR__.'../menutopPage.php' ?>
<!-- main -->
    <div class="container" >
        <div class="row">
            <a href=""><h6 class="href">Home</h6></a>
            <a href=""><h6 class="href">/Payment</h6></a>
        </div>
        <div class="icon-title">
            <i class='fas fa-cart-arrow-down' style='font-size:36px; color: rgb(0, 146, 24) ;'></i>
            <i class='fas fa-receipt' style='font-size:36px;color: #c2c2c2'></i>
            <i class='fas fa-chevron-down' style='font-size:36px;color: #c2c2c2'></i>
        </div>
        <div class="title">
            <h3 id="step1">Your cart</h3>
            <h3 id="step2">Payment</h3>
            <h3 id="step3">Completed</h3>
        </div>

        <div class="progress">
                <div class="progress-bar" style="width:33%"></div>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Name product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="bodyCart">
                <!-- <tr>
                    <td>iPhone 12 Pro Max 256GB</td>
                    <td>img</td>
                    <td><input type="number" class="Amount"></td>
                    <td>39.000.000 VND</td>
                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                </tr>          -->
                </tbody>
            </table>
        </div>  
        <div class="row">
            <div class="col-md-9">.</div>
            <div class="col-md-3">
                <h5 class="total">ToTal :</h5> <h5 class="totalPrice"> </h5>
                <a href="<?php echo SITE_ROOT ?>/payment-page"><button type="button" id="go-payment"  class="btn btn-info">Next</button></a>
            </div>
            
        </div>
        </div>
    </div>
    
<!-- footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>



                    
