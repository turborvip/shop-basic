
<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php'; ?>
                <div class="main">
                    <h5 class="h5-title">
                        Sửa tài khoản admin  
                        <?php
                        if (isset($_SESSION["user"])) { echo $_SESSION["user"]["fullname"]; } 
                        //  unset($_SESSION["fullnamead"]);
                        ?>
                        :
                    </h5>
                    <div class= "box-table">
                        <form method="post" action="<?php echo SITE_ROOT; ?>/sua-tai-khoan-admin">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="username">Tài khoản :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="username" id="username" value="<?php echo $_SESSION["user"]["username"] ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="fullname">Họ và tên :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="fullname" id="fullname" value="<?php echo $_SESSION["user"]["fullname"] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="email">Email :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="email" id="email" value="<?php echo $_SESSION["user"]["email"] ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="address">Địa chỉ :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="address" id="address" value="<?php echo $_SESSION["user"]["address"] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="phonenumber">Số điện thoại :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="phonenumber" id="phonenumber" value="0<?php echo $_SESSION["user"]["phonenumber"] ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label2" for="gender">Giới tính :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-product" name="gender" id="gender">
                                            <option id="gender" ><?php echo $_SESSION["user"]["gender"] ?></option>
                                            <option >Male</option>
                                            <option >Female</option>
                                            <option >LGPT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="label3"  for="date">Ngày sinh :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="birthday" id="date" value="<?php echo $_SESSION["user"]["birthday"] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer_profile-adm">
                                            <button class="btn btn-success save_profile-adm">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
   $(document).ready(function(){
        $(".collapse-acc").show();
    })
</script>
</html>