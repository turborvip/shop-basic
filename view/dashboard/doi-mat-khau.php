
<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php'; ?>
                <div class="main">
                    <h5 class="h5-title">
                        Đổi mật khẩu admin
                        <?php
                        if (isset($_SESSION["user"])) { echo $_SESSION["user"]["fullname"]; } 
                        //  unset($_SESSION["fullnamead"]);
                        ?>
                        :
                    </h5>
                    <div class= "box-table">
                        <form >
                            <h6 style="color:red"><?php if(isset($err)){ echo $err ;}?></h6>
                            <h6 class="err-change-pass" style="color:red ; display:none">Bạn cần nhập đủ thông tin !</h6>
                            <input type="text" class="d-none" value="<?php echo $_SESSION["user"]["id"]; ?>">
                            <input type="text" class="d-none" value="<?php echo $_SESSION["user"]["username"]; ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-3">
                                        <label class="lable-change-pass" for="">Mật khẩu hiện tại :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="old-pass" placeholder="*******" name="old-pass" type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label class="lable-change-pass"for="">Mật khẩu mới :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="new-pass1" placeholder="Tối thiểu 6 kí tự" name="new-pass1" type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label class="lable-change-pass"for="">Nhập lại mật khẩu mới :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="new-pass2" placeholder="Cần nhập đúng" name="new-pass2" type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <button type="button" class="btn btn-success btn-change-pass">Lưu</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div>
                                <label class="lable-change-pass" for="">Mật khẩu hiện tại :</label>
                                <input id="old-pass" placeholder="*******" name="old-pass" type="password">
                            </div>
                            <div>
                                <label class="lable-change-pass"for="">Mật khẩu mới :</label>
                                <input id="new-pass1" placeholder="Tối thiểu 6 kí tự" name="new-pass1" type="password">
                            </div>
                            <div>
                                <label class="lable-change-pass"for="">Nhập lại mật khẩu mới :</label>
                                <input id="new-pass2" placeholder="Cần nhập đúng" name="new-pass2" type="password">
                            </div>
                            <div class="activity" >
                            <button type="button" class="btn btn-success btn-change-pass">Lưu</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
    $('.btn-change-pass').click(function(){
        if(!$('#old-pass').val() || !$('#new-pass1').val() || !$('#new-pass2').val()) {
            $('.err-change-pass').show();
        }else if($('#new-pass1').val().length < 6){
            $('.err-change-pass').html("Mật khẩu mới không đúng định dạng !");
        }else if($('#new-pass1').val() != $('#new-pass2').val()){
            $('.err-change-pass').html("Mật khẩu mới không khớp");
        }else{
            $.ajax({
                type: "POST",
                url: "/maneger_shop_basic1/doi-mat-khau",
                data: {
                    oldpass: $('#old-pass').val(),
                    newpass: $('#new-pass2').val(),
                },
                success: function (res) {
                    console.log('đã vào đây');
                    console.log($('#old-pass').val());
                    console.log($('#new-pass2').val());
                    if(!res || res == ''){
                        location.replace("/maneger_shop_basic1/sign-in");
                    }else{
                        $('.err-change-pass').show()
                        $('.err-change-pass').html(res);
                    }
                },
                error: function (xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        }
    })
</script>
</html>