<?php include dirname(__FILE__).'../../common/header.php';?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Thêm mới danh mục :</h5>
                    <h6 style="color:red">
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
                        <form method="post" action="<?php echo SITE_ROOT; ?>/danh-muc/tao-moi/luu">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tên Danh mục</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="title" placeholder="Nhập tên danh mục"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng Thái</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-category" name="status" id="">
                                            <option value="1">Hoạt Động </option>
                                            <option value="0">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Mô tả</label>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="description"  placeholder="Nhập mô tả"  id="" cols="46" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="file" style="cursor:pointer">Chọn ảnh của bạn:</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="image" class="d-none" id="file"></input>
                                        <div class="add-class">
                                            <label for="file" style="cursor : pointer" class="label">
                                                <img for="file" src="/maneger_shop_basic1/static/img/logo/add-img.png" class="icon-add-class" alt="addClass" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="activity" >
                                            <a href="<?php echo SITE_ROOT; ?>/danh-muc"><button type="button" class="btn btn-success">Quay lại</button></a>
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
<Script>

    $(document).ready(function(){
        
        $(".collapse-category").show();
    
        $("#file").change(function(){
            var img = $("#file")[0].files[0];
            console.log(img.name);
            html='<img src="/maneger_shop_basic1/static/img/category-img/product/phone/'+ img.name +'" style="width:130px;">';
            $(".add-class").html(html);
        })
    })
</Script>

</html>