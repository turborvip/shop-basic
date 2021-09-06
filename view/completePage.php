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

    
    
    
</head>
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
            <i class='fas fa-receipt' style='font-size:36px;color: rgb(0, 146, 24)'></i>
            <i class='fas fa-chevron-down' style='font-size:36px;color: rgb(0, 146, 24)'></i>
        </div>
        <div class="title">
            <h3 class="step1">Your cart</h3>
            <h3 class="step2" style="color:rgb(0, 0, 0)">Payment</h3>
            <h3 class="step3"  style="color:rgb(0, 0, 0)">Completed</h3>
        </div>

        <div class="progress">
                <div class="progress-bar" style="width:100%"></div>
        </div>
            
        <h1 class="done">Done, thank you <?php if(isset($fullname)){echo $fullname;} ?> !</h1>
        <h3 class="done">We will be in contact with you soon...</h3>
        <div class="row">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Name product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bodyCart">
                
                </tbody>
            </table>

        </div>  
        <div class="modal-box-custom">
        <div class="modal-content1-custom">
            <form action="#">
                <span class="close">&times;</span>
                <h4>Are you sure ?</h4>
                <div class="yes-or-no">
                    <button class="btn btn-success yes ">Yes</button>
                    <button class="btn btn-danger no ">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<?php include __DIR__.'../footerPage.php' ?>
<script>
    var user = JSON.parse(localStorage.getItem("user"));
    if (user) {
        $.ajax({
            type: "post",
            url: "/maneger_shop_basic1/complete-page",

            // data: $('.formPayment').serialize(),
            data: {
                idUser: user.id,
            },
            success: function (res) {
                // alert(res);
                localStorage.setItem("orderOld", res)
                // | JSON.stringify(res);
                
            },
        });
    } else {
        if (confirm("Let's sign in !") == true) {
            location.replace("http://localhost/maneger_shop_basic1/login-page");
        }

    }
</script>
<script src="<?php echo JS_DIR ?>/orderPage.js"></script>

