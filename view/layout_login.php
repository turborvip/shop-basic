<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/layout-login-style.css">
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/bootstrap4/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">   
            <div class="col-md-4">
                <img src="<?php echo IMG_DIR ?>/logo/logoupdate2.png" alt="banner" class="logo"></img>
                <img src="<?php echo IMG_DIR ?>/banner/1.jpg" alt="banner" class="banner"></img>
            </div>
            <div class="col-md-8">
                <div class="border">
                    <form action="<?php echo SITE_ROOT; ?>/logincontroller-page" method="post" class="formLogin">
                        <h3>Login</h3>
                        <h6 class="error"> 
                            <?php
                                
                                if (isset($err)) { echo $err; } 
                            ?> 
                        </h6>
                        <input type="text" name="usenamelogin" placeholder="User name : abc" class="username"/>     
                        <input type="password" name="passlogin" placeholder="Password:12345" class="password"/>
                        
                        <button type="submit" class="btn  btn-success submit" name="submit">Submit</button>
                        <a href="<?php echo SITE_ROOT ?>/sign-up"><button type="button" class="btn  btn-primary signup">Sign Up</button></a>
                        <?php if(isset($user)) { ?>
                        <input type="text" name="username" class="username d-none" id="username" value="<?php echo $user["username"]  ?>">
                        <input type="text" name="fullname" class="d-none fullname" value="<?php echo $user["fullname"] ?>">
                        <input type="number" name="phonenumber" class="d-none phonenumber" value="<?php echo $user["phonenumber"] ?>">
                        <input type="date" name="birthday" class="d-none birthday" value="<?php echo $user["birthday"] ?>">
                        <input type="text" name="gender" class="d-none gender" value="<?php echo $user["gender"] ?>">
                        <input type="text" name="address" class="d-none address" value="<?php echo $user["address"] ?>">
                        <input type="text" name="email" class="d-none email" value="<?php echo $user["email"] ?>">
                        <input type="text" name="image" class="d-none image" value="<?php echo $user["image"] ?>">
                        <input type="text" name="id" class="d-none id" value="<?php echo $user["id"] ?>">
                        <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    localStorage.clear();
</script>
</html>
