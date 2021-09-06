<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="check">
        
        <a class="navbar-brand" href="<?php echo SITE_ROOT ?>/home-page"><img id="logo-shop" class="logo-shop" src = "<?php echo IMG_DIR ?>/logo/logo-noslogan.png" ></img></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <i class="glyphicon glyphicon-home"></i><a class="nav-link" ID="HOME" href="<?php echo SITE_ROOT ?>/home-page"><i class='fas fa-home'></i> HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#introduct">INTRODUCT</a>
            </li>
            <li class="nav-item dropdown">
                <input type="number" class="d-none count-product-menu" value="0">
                <a class="nav-link dropdown-toggle btn-product-menu" href='#product' id="navbardrop" data-toggle="dropdown">
                    PRODUCTS
                </a>
                <div class="dropdown-menu all-item-product">
                    <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/category-page">ALL</a>
                    <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/category-page/phone">PHONE</a>
                    <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/category-page/laptop">LAPTOP</a>
                    <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/category-page/tablet">TABLET</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#news">NEWS</a>
            </li>
        </ul>
        <ul class="ul-menutop">
            <li class="li-menutop">
                <div class="form-search">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" id="input-search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                </div>
            </li>
            
            <li class="li-menutop form">
                <div>
                    <!-- <form action="/complete-page" method="post"> -->
                        <input type="text" value="text" class="d-none" class="fullname" name="fullname">
                        <input type="text" value="text" class="d-none" class="id" name="id">
                        <a href="/maneger_shop_basic1/complete-page"><button type="button" style="display:none" class="btn btn-info yourorder" > Your order </button></a>
                    <!-- </form> -->
                </div>
            </li>

             <li class="li-menutop">
                <div>
                    <a href="<?php echo SITE_ROOT ?>/cart-page">
                        <button class="btn btn-danger" id="cart">
                            <i class='fas fa-cart-arrow-down'></i> Cart </button>
                    </a>
                </div>
            </li>
            
            <li class="li-menutop">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-acc " id="acc" data-toggle="dropdown">
                    Account
                    </button>
                    <div class="dropdown-menu all-item-acc-menu">
                        <input type="number" class="d-none count-acc-menu" value="0">
                        <div class="check"></div>
                        <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/login-page">Sign In</a>
                        <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/sign-up">Sign Up</a>
                        <a class="dropdown-item signout" style="cursor : pointer " >Sign Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
<script>
    $(".btn-acc").click(function(){
        var count = parseInt($('.count-acc-menu').val()) + 1;
        $('.count-acc-menu').val(count);
        if($('.count-acc-menu').val()%2!=0){
            $(".all-item-acc-menu").show();
        }else{
            $(".all-item-acc-menu").hide();
        }
    })
    $(".btn-product-menu").click(function(){
        var count = parseInt($('.count-product-menu').val()) + 1;
        $('.count-product-menu').val(count);
        if($('.count-product-menu').val()%2!=0){
            $(".all-item-product").show();
        }else{
            $(".all-item-product").hide();
        }
    })
    
    var data = JSON.parse(localStorage.getItem("user"));
    $(document).ready(function(){
        if (data) {     
        $('.check').html('<a class="dropdown-item" href="/maneger_shop_basic1/account-page">My account</a>');
        $('.yourorder').show();
    }
    })
</script>
<script src="<?php echo JS_DIR ?>/yourOrderPage.js"></script>
<script src="<?php echo JS_DIR ?>/clear-localstorage.js"></script>
