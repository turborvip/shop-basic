<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href= "<?php echo CSS_DIR ?>/bootstrap4/bootstrap.css?v="<?php echo time(); ?>>
    <link rel="stylesheet" type="text/css" href= "<?php echo CSS_DIR ?>/dashboard/style-register.css?v="<?php echo time(); ?>>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_DIR ?>/register-jequery.js"></script>
    <!-- <script src="../static/js/register-jequery.js"></script> -->
    
    <script type="text/javascript" src="<?php echo JS_DIR ?>/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
           <form  id="form-register" method="POST" action="<?php echo SITE_ROOT; ?>/register-user">
              <h2>Sign Up</h2>
              <div class="page">
                <label class="field field_v1">
                  <input class="field__input username" placeholder="e.g: turborvip" type="text" name="username" >
                  <span class="field__label-wrap">
                    <span class="field__label">Username</span>
                  </span>
                  <span class="errMsg"></span>
                </label>
                <label class="field field_v2">
                  <input id="password"  class="field__input password" placeholder="e.g. 123456" type="password" name="password" >
                  <span class="field__label-wrap">
                    <span class="field__label">Password</span>
                  </span>
                  <span class="errMsg1"></span>
                </label>
                
                <label class="field field_v2">
                  <input class="field__input repassword" placeholder="***" type="password" name="repassword">
                  <span class="field__label-wrap">
                    <span class="field__label">Re-password</span>
                  </span>
                  <span class="errMsg2"></span>
                </label>
          
                <label class="field field_v1">
                    <input class="field__input fullname" placeholder="e.g: Đỗ Thành Đạt" type="text" name="fullname">
                    <span class="field__label-wrap">
                      <span class="field__label">Full name</span>
                    </span>
                    <span class="errMsg3"></span>
                </label>
                <label class="field field_v1">
                  <input class="field__input email" placeholder="e.g:  turborvip@gmail.com" type="text" name="email">
                  <span class="field__label-wrap">
                    <span class="field__label">Email</span>
                  </span>
                  <span class="errMsg"></span>
                </label>
                
                <label class="field field_v1" >
                  <input class="field__input" id="phone" placeholder="e.g:  0987654321" type="text" name="phonenumber" onblur="checkphone();">
                  <span class="field__label-wrap">
                   <span class="field__label" >Phone number</span>
                   <span id="errorPhone"></span>
                  </span>
                </label>
                
                <label class="field field_v1">
                  <input class="field__input"  type="date" name="birthday">
                  <span class="field__label-wrap">
                      <span class="field__label">Date of birth</span>
                  </span>
                </label>
                
                <label class="selection">Gener :     
                    <select name="gennder">
                      <option>Male</option>
                      <option>Female</option>
                      <option>LGPT</option>
                    </select>
                </label>
                <button type="submit" class="btn register-btn">Submit</button>
                <button type="submit" class="btn" ><a href="<?php echo SITE_ROOT; ?>/login-page" class="btnlogin">Login</a></button>
              </div>
            </form>
        </div>
    </div>
    <footer></footer>
</body>
</html>