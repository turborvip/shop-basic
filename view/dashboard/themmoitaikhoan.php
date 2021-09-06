<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row row-menu">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Thêm mới tài khoản</h5>
                    <h6 style="color:red; padding:10px 0px">
                        <?php
                            if ( isset($_SESSION["err"]) ) {
                                echo $_SESSION["err"];
                                unset($_SESSION["err"]);
                            }

                            if ( isset($_SESSION["success"]) ) {
                                echo $_SESSION["success"];
                                unset($_SESSION["success"]);
                            }
                        ?> 
                    </h6>
                    <div class= "box-table">
                        <form  action="<?php echo SITE_ROOT; ?>/tai-khoan/tao-moi/luu " method="post" >
                            <div class="container-fluid container-add-acc">
                                <div class="row">
                                     <div class="col-md-2">
                                         <label class="lable-block">Tên Đăng Nhập :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="text" placeholder="Nhập tên đăng nhập" name="user"></input>
                                    </div>
                                    <divv class="col-md-2">
                                        <label class="lable-block">Tên đầy đủ :</label>
                                    </divv>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="text"  placeholder="Nhập họ và tên" name="fullname"></input>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="lable-block">Mật khẩu :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="password"  placeholder="Nhập mật khẩu" id="password" name="password" onkeyup="checkpass();"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="lable-block">Nhập lại mật khẩu :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="password"  placeholder="Nhập mật khẩu" id="repassword" name="repassword" onkeyup="checkpass();"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="lable-block">Điện thoại :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="number"  placeholder="Nhập số điện thoại" id="phonenumber" name="phonenumber" onkeyup="checkphone();"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="lable-block">Địa chỉ :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input class="input-acc" type="text"  placeholder="Nhập địa chỉ" name="address"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="lable-block">Vai trò :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <select class="input-acc" name="role" id="role">
                                            <option value="0">ROOT </option>
                                            <option value="1">Admin </option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="lable-block">Trạng Thái :</label>
                                    </div>
                                    <div class="col-md-4" >
                                        <select class="input-acc" name="status" id="status">
                                            <option value="0">Hoạt Động </option>
                                            <option value="1">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <a href="<?php echo SITE_ROOT; ?>/tai-khoan"><button type="button" class="btn btn-success">Quay lại</button></a>
                                        <button class="btn btn-primary">Lưu</button>
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