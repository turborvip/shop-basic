<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/cartpage-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>	
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
            <i class='fas fa-receipt' style='font-size:36px;color: rgb(0, 146, 24)'></i>
            <i class='fas fa-chevron-down' style='font-size:36px;color: #c2c2c2'></i>
        </div>
        <div class="title">
            <h3 class="step1">Your cart</h3>
            <h3 class="step2" style="color:rgb(0, 0, 0)">Payment</h3>
            <h3 class="step3">Completed</h3>
        </div>

        <div class="progress">
                <div class="progress-bar" style="width:67%"></div>
        </div>
        <form class="formPayment">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="title-row">1.Address and delivery</h5>
                    <a href="">Sign up account</a><span> | </span>
                    <a href="">Sign in</a>
                    <h6>Buy and needn't account</h6>
                    <h7 class="error" style="color:red"></h7>
                    <input class="form-control fullname" type="text" name="fullname" placeholder="Full name" value=""/>
                    <input class="form-control phonenumber" type="text" name="phonenumber" placeholder="Phonenumber" value="" />
                    <input class="form-control email "type="text" name="email" placeholder="Email" value=""/>
                    <input class="form-control  id d-none " type="text" name="id" placeholder="id" value=""/>
                    <select class="dropdown-header allcity" name="city" id="">
                    </select>

                    <select class="dropdown-header allDistrict district" name="district" >
                        <option value="">Choose district</option>
                    </select>

                    <select class="dropdown-header allward ward" name="ward" >
                        <option value="" >Choose ward</option>
                    </select>
                    <input class="form-control address "type="text" name="address" placeholder="Detail address" value=""/>
                    <textarea name="description" id="" cols="47" rows="5" name="detail-address" class="detail-address description" placeholder="Description..."></textarea>
                </div>
        </form>
              <div class="col-md-4">
                  <h5 class="title-row">2.Pay and transport</h5>
                  <div class="formTransport" >
                      <label class="radio-img">
                          <input type="radio" name="layout" value="GHTK" checked="checked" class="inputTransport layout layout"/>
                          <img class="imageTransport"  src="<?php echo IMG_DIR ?>/logo/ghtk.png" alt="">
                      </label>
                      <label class="radio-img">
                          <input type="radio" name="layout" value="GHN" class="inputTransport layout"/>
                          <img class="imageTransport" src="<?php echo IMG_DIR ?>/logo/GHN.png" alt="">
                      </label>
                      <label class="radio-img">
                          <input type="radio" name="layout" value="Vittel" class="inputTransport layout"/>
                          <img class="imageTransport" src="<?php echo IMG_DIR ?>/logo/viettel.png" alt="">
                      </label>
                      <label class="radio-img">
                          <input type="radio" name="layout" value="Ninjavan" class="inputTransport layout"/>
                          <img class="imageTransport" src="<?php echo IMG_DIR ?>/logo/ninjavan.png" alt="">
                      </label>
                      <label class="radio-img">
                          <input type="radio" name="layout" value="J&T" class="inputTransport layout"/>
                          <img class="imageTransport" src="<?php echo IMG_DIR ?>/logo/jt.png" alt="">
                      </label>
                      <label class="radio-img">
                          <input type="radio" name="layout" value="Vnpost" class="inputTransport layout"/>
                          <img class="imageTransport" src="<?php echo IMG_DIR ?>/logo/vnpost.png" alt="">
                      </label>
                  </div>
              </div>
              <div class="col-md-4">
                  <h5 class="title-row">3.Information</h5>
                  <table class="information">
                      <thead class="inf">
                      <tr>
                          <th class="infhead">#</th>
                          <th class="infhead">Name product</th>
                          <th class="infhead">Quantity</th>
                          <th class="infhead">Price</th>
                          <th class="infhead">Unit</th>
                      </tr>
                      </thead>
                      <tbody class="bodyCart">
                      </tbody>
                  </table>
                  <div class="totalandbutton">
                      <h5 class="totalPayment">ToTal :</h5> <h5 class="totalPrice"></h5> <h5 class="totalPayment">VND</h5>
                      <textarea name='getprice' class="totalPrice getprice"></textarea>
                      <div class="back-and-next">
                        <a href="<?php echo SITE_ROOT ?>/cart-page" class="a"><button type="button" class="btn btn-warning">Back to cart</button></a>
                        <button type="button" id="go-payment"  name="submit"  class="btn btn-info click-submit next">Next</button>
                      </div>
                  </div>
                 
              </div>
          </div>  
        </form>
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
        <div class="modal-content2-custom">
            <form action="#">
                <span class="close">&times;</span>
                <h4 style="color:red"> You need to fill in all the information and buy at least one item !</h4>
                <div class="yes-or-no">
                    <button class="btn btn-success yes-err ">Yes</button>
                </div>
            </form>
        </div>
    </div>
    
<!-- footer -->
    <?php include __DIR__.'../footerPage.php' ?>
    
</body>
<script src="<?php echo JS_DIR ?>/payment.js"></script> 
<script>
    
    
</script> 
</html>